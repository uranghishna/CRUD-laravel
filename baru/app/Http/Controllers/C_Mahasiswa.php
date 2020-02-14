<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mahasiswa;

class C_Mahasiswa extends Controller
{
    public function ViewData(){
        $data =
        [
            'status' => true,
            'massage' => 'Data Ditemukan',
            'code' => 200,
            'hasil' => Mahasiswa::all()
        ];
    return[
        'data' => $data
    ];
    }

    public function BuatData(Request $request){
        $this->validate($request, [
            'nama' => 'required',
            'password' => 'required',
        ]);

        $buatan = Mahasiswa::create([
            'nama'=>$request->nama,
            'password'=>$request->password
        ]);
        $data =
            [
                'status' => true,
                'massage' => 'Berhasil Ditambahkan',
                'code' => 200,
                'hasil' => $buatan
            ];
     return[
         'data'=> $data
     ];
    }

    public function EditData(Request $request, $id){
        $post = Mahasiswa::find($id);
        if($post){
            $post->update($request->all());
            $data=
            [
                'status' => true,
                'massage' => 'Berhasil Diedit',
                'code' => 200,
                'hasil' => $post
            ];
        return response()->json([
            'data' => $data
        ]);
        }
        return response()->json([
                'status' => false,
                'massage' => 'Gagal Diedit',
                'code' => 404,
                'hasil' => null
        ]);
    }

    public function EditDataP(Request $request, $id){
        $this->validate($request, [
            'nama' => 'required',
            'password' => 'required',
        ]);
        $post = Mahasiswa::find($id);
        if($post){
            $post->update($request->all());
            $data=
            [
                'status' => true,
                'massage' => 'Berhasil Diedit',
                'code' => 200,
                'hasil' => $post
            ];
        return response()->json([
            'data' => $data
        ]);
        }
        return response()->json([
                'status' => false,
                'massage' => 'Gagal Diedit',
                'code' => 404,
                'hasil' => null
        ]);
    }

    public function Delete($id){
        $post = Mahasiswa::find($id);

        if($post){
            $post->delete();

        $data =
        [
            'status' => true,
                'massage' => 'Berhasil Dihapus',
                'code' => 200,
                'hasil' => $post
        ];
        return response()->json([
            'data' => $data
        ]);
        }
        return response()->json([
            'status' => false,
            'massage' => 'Gagal Dihapus',
            'code' => 404,
            'hasil' => null
    ]);
    }
}

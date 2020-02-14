<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\karyawan;

class C_Karyawan extends Controller
{
    public function LihatData(){
        $data =
        [
            'status' => true,
            'massage' => 'Data Ditemukan',
            'code' => 200,
            'hasil' => Karyawan::all()
        ];
    return[
        'data' => $data
    ];
    }

    public function TambahData(Request $request){
        $this->validate($request, [
            'nama' => 'required',
            'alamat' => 'required',
        ]);

        $buat = Karyawan::create([
            'nama'=>$request->nama,
            'alamat'=>$request->alamat
        ]);
        $data =
            [
                'status' => true,
                'massage' => 'Berhasil Ditambahkan',
                'code' => 200,
                'hasil' => $buat
            ];
     return[
         'data'=> $data
     ];
    }
}

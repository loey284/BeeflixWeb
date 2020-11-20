<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MataKuliahController extends Controller
{
    public function create(Request $request)
    {
        $mataKuliah = new MataKuliah;
        $mataKuliah->course_name = 'web programming';

        $mataKuliah->save();

        $mahasiswa = Mahasiswa::find([3, 4]);
        $mataKuliah->mahasiswas()->attach($mahasiswa);

        return 'Success';
    }
    
    public function show(Product $product)
    {
    return view('mataKuliah.show', compact('mataKuliah'));
    }

}

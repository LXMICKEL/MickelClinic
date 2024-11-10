<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function Dokter()
    {
        //echo "Nama saya " . request('nama');
        //echo "<br>";
        //echo "Umur saya " . request('umur');
        return 'halo saya berada dihalamn dokter index';
    }
    public function create()
    {
        return "Halo, saya berada dihalaman tambah data dokter";
    }
    public function edit($id)
    {
        return "Halo, saya berada dihalaman edit dengan nilai $id";
    }
    public function show($id)
    {
        return "Halo, saya berada dihalaman show dengan nilai $id";
    }
}

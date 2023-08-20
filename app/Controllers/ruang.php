<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Ruangan;

class Ruang extends BaseController
{
    public function index(){
        $ruangan = new Ruangan();
        $dataRuangan = $ruangan->findAll();
        return view('ruangan/index',['dataRuangan'=>$dataRuangan]);
    }

    public function create(){
        return view('ruangan/form');
    }

    public function add(){
        $nama_ruangan = $this->request->getPost('nama_ruangan');
        $ruangan = new Ruangan();
        $ruangan->insert([
            'nama_ruangan' => $nama_ruangan,
        ]);
        return redirect()->to('admin/ruangan');
    }

    public function show($id){
        $ruangan = new Ruangan();
        $dataRuangan = $ruangan->find($id);
        return view('ruangan/form_edit',['dataRuangan'=>$dataRuangan]);
    }

    public function update($id){
        $ruangan = new Ruangan();
        $nama_ruangan = $this->request->getPost('nama_ruangan');
        $ruangan->update($id,[
            'nama_ruangan' => $nama_ruangan,
        ]);
        return redirect()->to('admin/ruangan');
    }

    public function delete($id){
        $ruangan = new Ruangan();
        $ruangan->delete($id);
        return redirect()->to('admin/ruangan');
    }
}


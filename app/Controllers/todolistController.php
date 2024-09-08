<?php

namespace App\Controllers;

use App\Models\todolistmodel;

class todolistController extends BaseController
{
    public function index(): string
    {
        $model = model("todolistmodel");
        $username = session()->get('username'); // Ambil username dari session
        $data = [
            'daftarKegiatan' => $model->where('user', $username)->findAll() // Ambil semua kegiatan pengguna
        ];
        return view('todolistView', $data);
    }

    public function simpanKegiatan()
    {
        helper('form');

        $model = model("todolistmodel");
        $username = session()->get('username');

        $dataForm = $this->request->getPost(['kegiatan']);
        $dataForm['user'] = $username;
        $dataForm['status'] = 'Aktif'; // Set status default sebagai 'Aktif' saat menyimpan kegiatan baru
        $model->save($dataForm);

        return redirect()->to('/todolist');
    }

    public function selesaiKegiatan()   
    {
    $uri = $this->request->getUri();
    $idKegiatan = $uri->getSegment(3);

    $model = model("todolistmodel");
    $data = [
        "status" => "Selesai"
    ];
    $model->update($idKegiatan, $data);

    // Mengembalikan redirect sebagai respon
    return redirect()->to('/todolist'); 
    }


    public function hapusKegiatan()
    {
    $uri = $this->request->getUri();
    $idKegiatan = $uri->getSegment(3);

    $model = model("todolistmodel");
    $model->delete($idKegiatan);

    // Mengembalikan redirect sebagai respon
    return redirect()->to('/todolist'); 
    }

}

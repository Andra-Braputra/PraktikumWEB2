<?php 
namespace App\Controllers;

use App\Models\UserModel;

class Home extends BaseController
{
    public function index()
    {
        $model = new UserModel();
        $data = $model->getData();
        
        $viewData = [
            'title' => 'Beranda',
            'nama' => $data['nama'],
            'nim' => $data['nim']
        ];
        
        return view('templates/header', $viewData)
             . view('home')
             . view('templates/footer');
    }
}
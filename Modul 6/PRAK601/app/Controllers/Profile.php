<?php 
namespace App\Controllers;

use App\Models\UserModel;

class Profile extends BaseController
{
    public function index()
    {
        $model = new UserModel();
        $data = $model->getData();
        
        $viewData = [
            'title' => 'Profil',
            'profile' => $data
        ];
        
        return view('templates/header', $viewData)
             . view('profile')
             . view('templates/footer');
    }
}
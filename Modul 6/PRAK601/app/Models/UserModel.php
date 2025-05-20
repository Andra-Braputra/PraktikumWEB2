<?php 
namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    public function getData()
    {
        return [
            'nama' => 'John Doe',
            'nim' => '123456789',
            'prodi' => 'Teknik Informatika',
            'hobi' => ['Membaca', 'Bermain Game', 'Olahraga'],
            'skill' => ['PHP', 'JavaScript', 'HTML/CSS']
        ];
    }
}
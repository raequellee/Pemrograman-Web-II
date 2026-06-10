<?php
namespace App\Controllers;
use App\Models\UserModel;

class AuthController extends BaseController
{
    public function index()
    {
        return view('login');
    }

    public function process()
    {
        $model = new UserModel();
        $user = $model->where('username', $this->request->getPost('username'))->first();

        // Cek login manual (karena belum pakai hash password biar gampang)
        if ($user && $user['password'] == $this->request->getPost('password')) {
            session()->set(['logged_in' => true, 'username' => $user['username']]);
            return redirect()->to('/buku');
        }

        session()->setFlashdata('error', 'Username atau Password salah!');
        return redirect()->to('/');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/');
    }
}
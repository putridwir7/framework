<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Peminjam;
use \App\Models\Users;
class Auth extends BaseController
{
    public function login()
    {
        return view('login');
    }


    public function register(){
        return view('register');
    }

    public function registration(){
        $nip = $this->request->getPost('nip');
        $nama_lengkap = $this->request->getPost('nama_lengkap');
        $telp = $this->request->getPost('telp');
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
        $password_confirm = $this->request->getPost('password_confirm');

        // validasi data
        if(strlen($password) < 6){
            return redirect()->back()->withInput()->with('error','Password minimal 6 karakter');
        }
    
        if($password != $password_confirm){
            return redirect()->back()->withInput()->with('error','Password tidak sama');
        }

        $userModel = new Users();
        $user = $userModel->where('username', $username)->first();
        if($user){
            return redirect()->back()->withInput()->with('error','Username sudah terdaftar');
        }

        $peminjam = new Peminjam();
        // check nip
        $mhs = $peminjam->where('NIP', $nip)->first();
        if($mhs){
            return redirect()->back()->withInput()->with('error','NIP sudah terdaftar');
        }

        $userModel->insert([
            'username' => $username,
            'password' => password_hash($password, PASSWORD_DEFAULT),
            'role' => 'user',
        ]);

        
        $peminjam->insert([
            'NIP' => $nip,
            'nama' => $nama_lengkap,
            'username' => $username,
            'telp' => $telp,
        ]);
        return redirect()->to('/login')->with('success','Register berhasil, silahkan login');
    }


    public function authetication(){
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
        
        $userModel = new Users();
        $user = $userModel->where('username', $username)->first();
        if($user){
            if(password_verify($password,$user['password'])){
                $session = session();
                $session->set([
                    'username' => $user['username'],
                    'role' => $user['role'],
                    'isLoggedIn' => true
                ]);
                if($user['role'] == 'admin'){
                    return redirect()->to('/admin/dashboard');
                }else{
                    return redirect()->to('/user/dashboard');
                }
            }
        }
        return redirect()->back()->withInput()->with('error','Invalid username or password');
    }

    public function logout(){
        $session = session();
        $session->destroy();
        return redirect()->to('/login');
    }
}

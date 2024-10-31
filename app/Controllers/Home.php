<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('index');
    }

    public function login()
    {
        return view('login');
    }

    public function authenticate()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        if ($username === 'Nadila' && $password === 'nadila') {
            $session = session();
            $session->set('username', $username);
            $session->set('isLoggedIn', true);
            return redirect()->to(''); 
        } else {
            return redirect()->back()->with('error', 'Username atau Password salah');
        }
    }


    public function register()
    {
        return view('register');
    }

    public function store()
    {
        $username = $this->request->getPost('username');
        $fullname = $this->request->getPost('fullname');
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        return redirect()->to('/login')->with('success', 'Pendaftaran berhasil! Silakan login.');
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/login')->with('success', 'Anda berhasil logout.');
    }

    public function kontak(): string
    {
        return view('kontak');
    }

    public function beranda(): string
    {
        return view('index');
    }

    public function kategori(): string
    {
        $session = session(); 
        return view('kategori', ['session' => $session]);
    }
}

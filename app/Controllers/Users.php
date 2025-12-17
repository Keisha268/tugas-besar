<?php

namespace App\Controllers;

use App\Models\UsersModel;

class Users extends BaseController
{
    protected $usersModel;

    public function __construct()
    {
        $this->usersModel = new UsersModel();
    }

    private function checkAdmin()
    {
        if (session()->get('role') != 'admin') {
            return false;
        }
        return true;
    }

    public function index()
    {
        if (!$this->checkAdmin()) return redirect()->to('/dashboard');
        
        $data = [
            'users' => $this->usersModel->findAll()
        ];
        return view('users/index', $data);
    }

    public function create()
    {
        if (!$this->checkAdmin()) return redirect()->to('/dashboard');
        return view('users/create');
    }

    public function store()
    {
        if (!$this->checkAdmin()) return redirect()->to('/dashboard');

        $this->usersModel->save([
            'username' => $this->request->getVar('username'),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_BCRYPT),
            'name'     => $this->request->getVar('name'),
            'role'     => $this->request->getVar('role'),
        ]);

        return redirect()->to('/users');
    }

    public function edit($username)
    {
        if (!$this->checkAdmin()) return redirect()->to('/dashboard');

        $data = [
            'user' => $this->usersModel->where('username', $username)->first() // Use where() just to be safe if find() behaves oddly with string PK
        ];
        return view('users/edit', $data);
    }

    public function update($username)
    {
        if (!$this->checkAdmin()) return redirect()->to('/dashboard');
        
        $data = [
            'name' => $this->request->getVar('name'),
            'role' => $this->request->getVar('role'),
        ];

        // Only update password if provided
        $pass = $this->request->getVar('password');
        if (!empty($pass)) {
            $data['password'] = password_hash($pass, PASSWORD_BCRYPT);
        }

        $this->usersModel->update($username, $data);
        return redirect()->to('/users');
    }

    public function delete($username)
    {
        if (!$this->checkAdmin()) return redirect()->to('/dashboard');
        
        $this->usersModel->delete($username);
        return redirect()->to('/users');
    }
}

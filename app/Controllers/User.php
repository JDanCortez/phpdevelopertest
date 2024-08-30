<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\User AS UserModel;

class User extends BaseController
{
    public function index()
    {

        $users = new UserModel();
        $data['users_data'] = $users->findAll();
        return view('userIndex', $data);
        //
    }

    public function create(): string{
        return view('userView');
    }

    public function store(){
        
        $user = new UserModel();

        $user->save([
            'email' => $this->request->getVar('email'),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_BCRYPT),
        ]);
        
        return view('userView');

    }
}

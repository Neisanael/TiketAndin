<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Users;

class UserController extends BaseController
{
    public function index()
    {
        //
    }
    public function auth()
    {
        $validationRules = [
            'emailLogin' => 'required',
            'passwordLogin' => 'required'
        ];

        if (!$this->validate($validationRules)) {
            session()->setFlashdata('error', 'Silahkan masukan Username dan password');
            return redirect()->to('Home/login');
        } else {
            $email = $this->request->getPost('emailLogin');
            $password = $this->request->getPost('passwordLogin');

            $userModel = new Users();
            $user = $userModel->where('email', $email)->first();

            if ($user && $user['password'] == $password) {
                $dataSesi = [
                    'id' => $user['id'],
                    'email' => $user['email'],
                    'logged_in' => true // Set the 'logged_in' session data
                ];

                session()->set($dataSesi); // Set session data using session() helper

                return redirect()->to('/');
            } else {
                session()->setFlashdata('error', 'Invalid email or password');
                return redirect()->to('Home/login');
            }
        }
    }

    public function logout()
    {
        session()->destroy(); // Unset all session data
        return redirect()->to('Home/login');
    }
}

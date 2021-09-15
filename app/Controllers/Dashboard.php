<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {
        $usersModel = new \App\Models\UsersModel();
        $loggedUserID = session()->get('loggedUser');
        $userInfo = $usersModel->find($loggedUserID);
        $data = [
            'tittle'=>'Dashboard',
            'userInfo'=>$userInfo
        ];
        return view('dashboard/index', $data);
    }

    function profile(){
        $usersModel = new \App\Models\UsersModel();
        $loggedUserID = session()->get('loggedUser');
        $userInfo = $usersModel->find($loggedUserID);
        $data = [
            'tittle'=>'Profile',
            'userInfo'=>$userInfo
        ];
        return view('dashboard/profile', $data);        
    }
}

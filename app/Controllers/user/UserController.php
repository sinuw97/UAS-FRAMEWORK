<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class UserController extends BaseController
{
    public function showBeranda()
    {
       try {
        return view('dashboard/user/Dashboard');
       } catch (\Exception $e) {
        echo 'Error: ', $e->getMessage();
       }
    }
}

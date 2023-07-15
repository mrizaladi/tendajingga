<?php

namespace App\Http\Controllers;

use App\DataTables\UsersDataTable;
use App\Models\User;

class UserController extends Controller
{
    public function index(UsersDataTable $dataTable)
    {
        return $dataTable->render('users.index');
    }
}

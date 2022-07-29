<?php

namespace App\Http\Controllers;

use App\DataTables\userDataTable;

class userController extends Controller
{
    public function index(userDataTable $DataTableValues)
    {
        return $DataTableValues->render('all-user');
    }
}
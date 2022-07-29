<?php

namespace App\Http\Controllers;

class userController extends Controller
{
    public function index(alluserDataTable $DataTableValues)
    {
        return $DataTableValues->render('all-user');
    }
}
<?php

namespace App\Http\Controllers;

use App\Models\AllUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AllUserController extends Controller
{
    protected function validator(Request $request)
    {
        return Validator::make($request, [
            'firstname' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'addres' => ['required', 'string', 'max:10'],
            'age' => ['required', 'integer', 'max:50'],
            'servicetype' => ['string', 'max:50'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'location' => ['string', 'max:255'],
            'phonenumber' => ['required', 'string', 'max:255'],
            'previousCourse' => ['string'],
            'sex' => ['required', 'string', 'max:255'],
        ]);
    }

    protected function store(Request $request)
    {
        AllUser::create([
            'firstname' => $request['firstname'],
            'lastname' => $request['lastname'],
            'addres' => $request['addres'],
            'age' => $request['age'],
            'servicetype' => $request['servicetype'],
            'email' => $request['email'],
            'location' => $request['location'],
            'phonenumber' => $request['phonenumber'],
            'sex' => $request['sex'],

        ]);
        return redirect()->back()->with('success', 'user succesfully registerd !');
    }
}
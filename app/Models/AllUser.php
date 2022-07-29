<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class AllUser extends Model
{
    use HasFactory, HasFactory, Notifiable;
    protected $fillable = [
        'firstname',
        'lastname',
        'addres',
        'age',
        'servicetype',
        'location',
        'email',
        'phonenumber',
    ];
}
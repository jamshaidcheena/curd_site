<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable=['stuName','stuFatherName','email','password','phone','address','city'];
}

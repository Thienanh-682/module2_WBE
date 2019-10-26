<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'studentManager';
    protected $fillable =['name','phone','address'];
}

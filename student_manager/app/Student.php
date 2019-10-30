<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'staffs';

    protected $fillable = [
      'name','phone','address','image'
    ];


}

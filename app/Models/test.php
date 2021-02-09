<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class test extends Model
{
    protected $table = 'test';
    protected $fillable = ['id', 'test', 'created_at', 'updated_at'];
}

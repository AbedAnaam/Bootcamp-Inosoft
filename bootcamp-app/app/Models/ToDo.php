<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;

class ToDo extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'todo';

    protected $fillable = ['title'];
}

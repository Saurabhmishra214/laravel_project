<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    protected $table ='registers';
    protected $filaable = [
        'name',
        'id'
    ];
}

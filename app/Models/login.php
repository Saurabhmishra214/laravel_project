<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class login extends Model
{
    protected $table ='registers';
    protected $filaable = [
        'email',
        'password'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //
    Protected $fillable = [
        'names',
        'email',
        'gender'
            ];
}

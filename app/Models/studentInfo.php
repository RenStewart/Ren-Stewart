<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class studentInfo extends Model
{
    use HasFactory;

    protected $table = 'studentInfo';

    protected $fillable = [
        'idNo',
        'firstName',
        'middleName',
        'lastName',
        'suffix',
        'course',
        'year',
        'birthdate',
        'gender',
    ];
}

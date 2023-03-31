<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class enrolledSubjects extends Model
{
    use HasFactory;

    protected $table = 'enrolled_Subjects';

    protected $fillable = [
        'subjectCode',
        'description',
        'units',
        'schedule',
    ];
}

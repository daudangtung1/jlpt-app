<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'exam_id',
        'name',
        'question',
        'answer',
        'correct_answer',
    ];
}

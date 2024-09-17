<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FunctionPoint extends Model
{
    use HasFactory;

    protected $timestamp = false;

    protected $fillable = [
        'project_id',
        'function_type_id',
        'name',
        'complexity',
        'score'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FunctionType extends Model
{
    use HasFactory;

    protected $timestamp = false;

    protected $fillable = [
        'name',
        'description'
    ];
}

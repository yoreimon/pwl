<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hobby extends Model
{
    protected $table = 'hobbies';
    protected $primaryKey = 'id';
    use HasFactory;
}
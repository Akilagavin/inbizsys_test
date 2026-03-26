<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory; // <--- Add this import
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory; // <--- Add this line inside the class

    protected $fillable = ['name', 'email', 'phone', 'address'];
}
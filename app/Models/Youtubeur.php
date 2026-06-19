<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Youtubeur extends Model
{
    protected $table = 'Youtubeurs'; 
    protected $fillable = ['nom', 'role', 'description', 'image'];
}
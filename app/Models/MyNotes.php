<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MyNotes extends Model
{
    use HasFactory;
    protected $table = 'my_notes';

    protected $fillable = ['title', 'description'];
}

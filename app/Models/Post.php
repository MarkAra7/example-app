<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // Norāda, kuri lauki ir atļauti masveida piešķiršanai
    protected $fillable = ['title', 'content'];
}

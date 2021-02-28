<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Post extends Model
{
    use HasFactory;

    public $filable = ['title', 'user', 'body'];

    public static $rules = [
        'title' => 'required',
        'user' => 'required|integer',
        'body' => 'required'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

    protected $fillable = [
        'username', 'password', 'last_login_at', 'last_login_ip', 'status'
    ];

    // Relationship with posts (if an admin has many posts)
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
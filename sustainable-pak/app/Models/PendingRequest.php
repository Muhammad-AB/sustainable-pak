<?php
// app/Models/PendingRequest.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PendingRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'email', 'password', 'description', 'category_id', 'main_link', 'email_verified_at'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

}

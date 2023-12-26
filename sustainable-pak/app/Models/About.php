<?php

// app/Models/About.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use database\migrations;

class About extends Model
{
    use HasFactory;
    protected $table = 'about';
    protected $primaryKey = 'id';

    protected $fillable = ['name', 'content'];
}

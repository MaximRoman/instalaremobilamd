<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommentsModel extends Model
{
    use HasFactory;

    protected $fillable = ['nume', 'comentariu'];

    protected $table = 'comments';
}

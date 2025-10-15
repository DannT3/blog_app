<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Symfony\Component\HttpFoundation\Request;

class Post extends Model
{
    protected $table = "posts";
    protected $primaryKey = "post_id";
    protected $userId = "user_id";

}

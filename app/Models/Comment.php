<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Sortable;

class Comment extends Model
{
    use HasFactory;
    use Sortable;
    protected $table = "comments";
    protected $sortableFields = ["id", "created_at", 'likes_count'];
    public function user(){
        return $this->hasOne(User::class, 'id', 'user_id');
    }
    public function likes(){
        return $this->hasMany(Like::class, 'comment_id', 'id');
    }
}

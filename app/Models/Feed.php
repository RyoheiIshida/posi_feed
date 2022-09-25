<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feed extends Model
{
    use HasFactory;
    protected $fillable = ['posted_users_id','created_users_id','content','private']; //保存したいカラム名が1つの場合

    public function users()
    {
        return $this->belongsTo(User::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function posts(){
        return $this->hasMany(Post::class);
    }

    public function getExcerptAttribute()
    {
        return substr($this->description,0,18). " ...";
        
    }

    public function similar(){
        //dd($this->where('category_id', $this->category_id)->with('user')->get());
        return $this->where('category_id', $this->category_id)->with('user')->get();
    }
}
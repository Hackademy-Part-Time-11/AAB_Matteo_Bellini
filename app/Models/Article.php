<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\User;
use Laravel\Scout\Searchable;
use App\Models\Tag;



class Article extends Model
{
    use HasFactory;
    protected $fillable = [
        'title', 'description', 'body', 'img', 'user_id', 'category_id'
    ];

    public function user()
    {
        return $this->belongTo(User::class);
    }

    public function category()
    {
        return $this->belongTo(Category::class);
 
    }

    public function toSearchableArray()
    {
        return[
            'id'=>$this->id,
            'title'=>$this->title,
            'body'=>$this->body,
            'category'=>$this->category
        ];
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}


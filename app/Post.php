<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use App\Comment;
use App\Image;

class Post extends Model
{
    public $table = 'posts';
    public $guarded = ['id'];

	public function comments()
	{
		return $this->hasMany(Comment::class);
	}
	public function images()
	{
		return $this->hasMany(Image::class);
	}
}

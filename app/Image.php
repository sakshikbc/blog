<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Post;
class Image extends Model
{
    public $table = 'images';
    public $guarded = ['id'];
    public function post()
	{
		return $this->hasMany(Post::class);
	}
}


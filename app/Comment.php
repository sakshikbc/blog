<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use App\Post;
class Comment extends Model
{
	public $table = "comments";
	public $guarded = ['id'];
    public function post()
    {
    	return $this->belongsTo(Post::class);
    }
}

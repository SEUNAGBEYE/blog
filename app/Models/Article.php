<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //
    public function comments()
    {
    	return $this->hasMany('App\Models\Comment');
    }

    public function showComment($id)
    {
        $comments= Comment::where('article_id', $id);
        return $comments;
    }
}
?>

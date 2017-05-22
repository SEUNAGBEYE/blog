<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;

use App\Models\Article;
use App\Models\Comment;

use Input, Validator, Auth, Redirect;



class CommentController extends Controller
{
    //
	private $articles;
	private $comment;
	public function __construct(Comment $commentModel, Article $articleModel)
	{
		// parent::__construct();
		$this->comment = $commentModel;
		$this->articles  = $articleModel;
	}

    public function savecomments(Request $request, $article_id)
    {
    	if($request->isMethod('post'))
    	{
            
    		$this->validate($request,[
    			'name' => 'required',
    			'comment' => 'required',
    			]);
            // dd($request);
    		// // $this->comment->create([
    		// 	'name' => $request->name,
    		// 	'text' => $request->text,
    		// 	'article_id' => $article_id ,
    		// 	])

    		try {
    			$article = $this->articles->findorFail($article_id);
	    		$new_comment = new Comment([
	    			'name' => $request->name,
	    			'comment' => $request->comment,
                    'article_id' => $article->id
	    			]);
	    		$article->comments()->save($new_comment);
                return Redirect('/articles');
	    		\Session::flash('message', 'Comment Created');
    		}
             catch (ModelNotFoundException $e) 
            {
    			abort('Article does not exist');
    		}
    		return redirect()->back();
    	}
    }

    
}
#(a href="/articles/{{$article->slug}}") -->

?>



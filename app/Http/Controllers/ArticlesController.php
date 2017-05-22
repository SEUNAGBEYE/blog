<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Article;

use Input, Validator, Auth, Redirect;

class ArticlesController extends Controller
{
	private $articles;
	
	public function __construct(Article $articles)
	{
		$this->articles = $articles;
	}

    public function index()
    {
    	// $article = $this->articles->all()->first();
    	$articles = Article::all();
    	// dd($articles);
    	return view('articles.index', compact('articles'));
    }

    public function view($slug)
    {
        $article = $this->articles->where('slug', '=', $slug)->first();
        if(!$slug)
        {
            abort('Articles not found', 404);
        }
        return view('articles.comment_article', compact('article'));
    }

    public function get_articles()
    {
        // return "these is all the articles";

        // $article = $this->articles->all()->first();
        $articles = Article::all();
        // dd($articles);
        return view('home', compact('articles'));
        
    }

    public function create_new_article()
    {
        // return 'This is where you create an article';

        return view('articles.new_articles');
    }

    public function save_created_article()
    {
        // return 'This is where you save an article edited';

        $new_articles = new Article;
        $new_articles->title = request('title');
        $new_articles->body = request('body');
        $new_articles->slug = request('title');
        $new_articles->save();
        return Redirect('/admin');

        

       

    }

    public function get_article($id)
    {
        // return 'This is where you get an article';
        $article = Article::get($id);
        return view('index.index', compact($article));
    }

    public function edit_article($id)
    {
        return 'This is where you edit an article';
    }

    public function update_edited_article($id)
    {
        return 'This is where you update edited article';
    }

    public function delete_article($id)
    {   
        $article = Article::destroy($id);
        // dd($article);
        return redirect('/admin');
        // return 'This is where you delete an article';
    }
}
?>

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                </div>
            </div>
            
                <div class="jumbotron">
                    <h3>Articles</h3>
                    <a href="/admin/articles/new"><button class="btn btn-info">
                        Create Article
                    </button></a><br><br><br>
            <ul>
                    @foreach($articles as $article)

                        <li>
                                {{ $article->title }}
                            <div>
                                <ul class="list-inline">
                                   <li><a href='/articles/{{ $article->slug }}'><button class="btn btn-info">Comment</button><br><br></a></li>
                                    <li><a href=""><button class="btn btn-info">Edit</button><br><br></a></li>
                                    <li><a href="/admin/articles/{{ $article->id }}"><button class="btn btn-danger" href = '/admin/articles/{{ $article->id }}'>Delete</button><br><br></a></li>
                                    <li><a href="/articles"><button class="btn btn-success">View</button><br><br></a></li> 
                                </ul>
                                
                            </div>
                        </li>
                    @endforeach
                </div>
            </ul>
        </div>
    </div>
</div>
@endsection

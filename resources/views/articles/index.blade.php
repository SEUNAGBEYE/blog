<!DOCTYPE html>
<html>
<head>
	
	<title>Articles</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
	<div class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<h3><a href="/articles">Blog</a></h3>
				
			</div><br>
			<div class="nav navbar-nav pull-right">
				<a class="btn btn-info" href ="http://127.0.0.1:8000/admin" role="button"><span class="glyphicon glyphicon-user" aria-hidden="true">Admin</span></a>
				</div>
		</div>
	</div>
	
		@foreach($articles as $article)
			<div class="col-md-6">
				<div class="well">
						<h4 class="page-header">{{ $article->title }}</h4>
					
					<p style="text-break; break-all;">{{ $article->body }}</p><br>
					
					<a href="/articles/{{ $article->slug }}"><button class="btn btn-info">Comment</button></a>
				</div>
				
			</div>
			
			
		@endforeach
	
</body>
</html>
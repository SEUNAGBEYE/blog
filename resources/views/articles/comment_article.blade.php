<!DOCTYPE html>
<html>
<head>
	<!-- <title>{{$article->title}} | Blog</title> -->
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>

<div class="navbar navbar-default">
	<div class="container-fluid">
		<div class="navbar-header">
			<h3><a href="/articles">Blog</a></h3>
		</div>
	</div>
</div>
<!-- Heading -->
	<div class="row">
		<div class="col-lg-12">
			<div class="bs-component">
				
				<div class="well">
					<div class="page-header">
						<h1>{{$article->title}}</h1>
					</div>
					<p>{{$article->body}}</p>
				</div>

			</div>
		</div>
	</div>

	<div class="form-group">
		<form method="post" action="/articles/{{$article->id}}/comment">
		{{ csrf_field()}}
		
			<label>Name</label>
			<input type="text" name="name" class="form-control" style="width: 50%;">
		<br>

			<label>Comment</label>
			<input type="text" name="comment" class="form-control" style="width: 50%;">
		<br>

			<button class="btn btn-info" type="submit">Comment</button>

		
		</form>
	</div>
	
</body>
</html>
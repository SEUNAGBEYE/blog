<!DOCTYPE html>
<html>
<head>
	<title>New Articles</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
	<div class="form-group">
		<form method="post" action="/admin/articles/new">
			{{ csrf_field()}}
			<div class = 'col-md-6'>
				<label>Title</label>
				<input type="text" name="title" class="form-control"><br><br>
				<label>Body</label>
				<textarea class="form-control" cols="4" rows="3" name="body" placeholder="Write about articles here"></textarea><br><br>
				<input type="submit" name="post_article" class="btn btn-info" value="Post Article">
			</div>
			
		</form>
	</div>
</body>
</html>
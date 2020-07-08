<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Create Blog | Blogging Application in PHP</title>
	<link rel="stylesheet" href="./style.css">
</head>
<body>
	<nav class="navbar">
		<div class="logo">SimpleBlog</div>
		<ul class="nav-links">
			<li><a href="#">Blog</a></li>
			<li><a href="#">Create Blog</a></li>
		</ul>
	</nav>

	<main>
		<section class="main-banner single">
			<h1>Create Blog</h1>
			<a href="#"><p>&larr; Go Back to All Articles</p></a>
		</section>

		<section class="single-blog-wrapper">
			<form action="" method="">
				<div class="form-group">
					<label for="title">Title</label>
					<input type="text" name="title" placeholder="Please Enter Title">
				</div>

				<div class="form-group">
					<label for="desc">Description</label>
					<textarea name="desc" id="desc" cols="30" rows="6" placeholder="Please Enter Description"></textarea>
				</div>

				<button class="form-submit" name="submit" type="submit">Submit</button>
			</form>
		</section>	

		
	</main>

	
	
</body>
</html>
<?php $title = 'Welcome to '; include 'includes/header.php';?>

<div class="slideshow">
	<img id="slide" alt="Homepage Slideshow" src="img/slideshow/home_01.jpg">
	<script>
		homeSlideshow();
	</script>
</div>
<div class="content">
	<div class="content_title">
		<h3>Now Showing</h3>
		<a class="button" href="showing.php">View All Movies</a>
	</div>
	<div class="content_img">
		<!-- URL <http://www.space.ca/wp-content/uploads/2016/11/rogue_one_poster.jpg>
			Image has been modified to reduce file size and speed up load times-->
		<a href="showing.php">
			<img src="img/movies/01_poster.jpg" alt="Rogue One Poster">
		</a>
		<!-- URL <http://imgur.com/iKbu8K5>
			Image has been modified to reduce file size and speed up load times-->
		<a href="showing.php">
			<img src="img/movies/02_poster.jpg" alt="The Dark Knight Poster">
		</a>
		<!-- URL <https://taylorsdigivispinjia.files.wordpress.com/2014/10/i2kfxzuubga0z.jpg>
			Image has been modified to reduce file size and speed up load times-->
		<a href="showing.php">
			<img src="img/movies/03_poster.jpg" alt="Inception Poster">
		</a>
		<!-- URL <http://www.cineapalla.it/wp-content/uploads/2016/10/THOS.jpg>
			Image has been modified to reduce file size and speed up load times-->
		<a href="showing.php">
			<img src="img/movies/04_poster.jpg" alt="In The Heart Of The Sea Poster">
		</a>
	</div>
</div>
<?php include 'includes/footer.php';?>
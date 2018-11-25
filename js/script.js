// Placeholder code to complete requirements for index.php in Assignment 2
// Code is a modified version of Assignment 1 in Web Design (RMIT Diploma of IT)
function homeSlideshow(){
	var images = [], x = -1, transition = 4000;
	images[0] = "img/slideshow/home_01.jpg";
	images[1] = "img/slideshow/home_02.jpg";
	images[2] = "img/slideshow/home_03.jpg";
	images[3] = "img/slideshow/home_04.jpg";
	images[4] = "img/slideshow/home_05.jpg";
	images[5] = "img/slideshow/home_06.jpg";
	
	setInterval(function(){
		x = (x === images.length - 1) ? 0 : x + 1;
		document.getElementById("slide").src = images[x];
	}, transition);
}

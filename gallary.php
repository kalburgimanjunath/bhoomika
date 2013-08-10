<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<title>Bhoomika Arts Gallery</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>

	<script>
	$(window).load(function() {

	  $('#gallery img').each(function() {

	    createCanvas(this);
	  });

	  function createCanvas(image) {

	    var canvas = document.createElement('canvas');
	    if (canvas.getContext) {
	      var ctx = canvas.getContext("2d");

	      // specify canvas size
	      canvas.width = image.width;
	      canvas.height = image.height;

	      // Once we have a reference to the source image object we can use the drawImage(reference, x, y) method to render it to the canvas. 
		  //x, y are the coordinates on the target canvas where the image should be placed.
	      //ctx.drawImage(image, 0, 0);

	      // Taking the image data and storing it in the imageData array. You can read the pixel data on a canvas using the getImageData() method. Image data includes the colour of the pixel (decimal, rgb values) and transparency (alpha value). Each color component is represented by an integer between 0 and 255. imageData.da contains height x width x 4 bytes of data, with index values ranging from 0 to (height x width x 4)-1.
	      var imageData = ctx.getImageData(0, 0, canvas.width, canvas.height),
	          pixelData = imageData.data;

	      // Loop through all the pixels in the imageData array, and modify
	      // the red, green, and blue color values.
	      for (var y = 0; y < canvas.height; y++) {
	        for (var x = 0; x < canvas.width; x++) {

	          // You can access the color values of the (x,y) pixel as follows :
	          var i = (y * 4 * canvas.width) + (x * 4);

	          // Get the RGB values.
	          var red = pixelData[i];
	          var green = pixelData[i + 1];
	          var blue = pixelData[i + 2];

	          // Convert to grayscale. One of the formulas of conversion (e.g. you could try a simple average (red+green+blue)/3)   
	          var grayScale = (red * 0.3) + (green * 0.59) + (blue * .11);

	          pixelData[i] = grayScale;
	          pixelData[i + 1] = grayScale;
	          pixelData[i + 2] = grayScale;
	        }
	      }

	      // Putting the modified imageData back on the canvas.
	      ctx.putImageData(imageData, 0, 0, 0, 0, imageData.width, imageData.height);

	      // Inserting the canvas in the DOM, before the image:
	      image.parentNode.insertBefore(canvas, image);
	    }
	  }
	});


</script>
<style>
html, body, div, span, 
h1, h2, h3, h4, h5, h6, p, 
a, img,  ol, ul, li
{margin: 0; padding: 0; border: 0; outline: 0; font-size: 100%; vertical-align: baseline; background: transparent;}
body {line-height: 1;}
ol, ul {list-style: none;}
:focus {outline: 0;}
a {text-decoration:none;}


@font-face {
    font-family: 'BebasNeueRegular';

    src: url('fonts/BebasNeue-webfont.woff') format('woff'),
         url('fonts/BebasNeue-webfont.ttf') format('truetype'),
         url('fonts/BebasNeue-webfont.svg#webfontfvFLBU0N') format('svg');
    font-weight: normal;
    font-style: normal;}
body {background:  #f6f6f6 url(images/bckgtexture.jpg);font-family:BebasNeueRegular;padding-top:40px;color:#393939;}
#wrap {width: 1020px; margin: 0 auto;} 
h1 {font-size:3em;margin-left:20px;margin-bottom:20px; text-shadow:0 1px 0 #fff;}
li {float:left; position:relative; display:inline-block; width:300px; height:300px;margin:10px; padding:10px; background:#fff; -webkit-box-shadow:0 0 5px rgba(0,0,0,.35);
	-moz-boz-shadow: 0 0 5px rgba(0,0,0,.35);box-shadow:0 0 5px rgba(0,0,0,.35);}
li div {position:absolute;height:0; width:280px;background:rgba(0,0,0,.45); overflow:hidden;bottom:10px;left:10px; padding: 0 10px;-webkit-transition:height 1s;-moz-transition:height 1s;-o-transition:height 1s;-ms-transition:height 1s; transition:height 1s;color:#fff;line-height:50px;font-size:1.2em;}
li:hover div {height:50px;}
canvas {opacity:1; position:absolute; top:10px; left:10px; -webkit-transition:opacity 1s .2s;-moz-transition:opacity 1s .2s;-o-transition:opacity 1s .2s;-ms-transition:opacity 1s .2s;transition:opacity 1s .2s;}
li:hover canvas {opacity:0;}
p {clear:left; float:right; margin-top:10px;margin-right:20px;}
p a {color:#909090;-webkit-transition:color .6s;-moz-transition:color .6s;-o-transition:color .6s;-ms-transition:color .6s;transition:color .6s;}
p a:hover {color:#eb5cf4;}
</style>
</head>

<body>
	
	<div id="wrap">
	<span style="float:right;font-size:22px;"><a href="home.php">Home</a></span>
		<h1><a href="home-p.php">Bhoomika Arts Gallery</a></h1>
		
		<ul id="gallery">
			<li><a href="gallery/1.jpg" target="_blank"><img src="gallery/1.jpg" width="300" height="300"><div>Spring flowers 1</div></a></li>
			<li><a href="gallery/2.jpg" target="_blank"><img src="gallery/2.jpg" width="300" height="300"><div>City lights 1</div></a></li>
			<li><a href="gallery/3.jpg" target="_blank"><img src="gallery/3.jpg" width="300" height="300"><div>Spring flowers 2</div></a></li>
			<li><a href="gallery/4.jpg" target="_blank"><img src="gallery/4.jpg" width="300" height="300"><div>City lights 2</div></a></li>
			<li><a href="gallery/5.jpg" target="_blank"><img src="gallery/5.jpg" width="300" height="300"><div>Spring flowers 3</div></a></li>
			<li><a href="gallery/6.jpg" target="_blank"><img src="gallery/6.jpg" width="300" height="300"><div>City lights 3</div></a></li>
			<li><a href="gallery/7.jpg" target="_blank"><img src="gallery/7.jpg" width="300" height="300"><div>City lights 2</div></a></li>
			<li><a href="gallery/8.jpg" target="_blank"><img src="gallery/8.jpg" width="300" height="300"><div>Spring flowers 3</div></a></li>
			<li><a href="gallery/9.jpg" target="_blank"><img src="gallery/9.jpg" width="300" height="300"><div>City lights 3</div></a></li>
	
		</ul>
	</div>
</body>
</html>

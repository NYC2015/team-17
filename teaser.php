<html>
<head>
<style>
html, body {
	height: 100%;
	width: 100%;
	background-image: url(http://www.nationofchange.org/2015/wp-content/uploads/IndianPoint051315.jpg);
	background-size: 100%;
	overflow: hidden;
	font-family: 'Helvetica';
	color: #fff;
	margin: 0;
	padding: 0;
}

.attention {
	position: absolute;
	left: 50%;
	top: 50%;
	margin: 0;
	padding: 10pt 0;
	font-size: 40pt;
	width: 440px;
	text-align: right;
	/* position bottom right corner to the center of the page */
	transform: translate(-100%, -100%);
}

.blurred {
	width: 100%;
	height: 100%;
	background: rgba(0, 0, 0, 0.5);
	margin: 0;
	padding: 0;

	position: relative;
	min-height: 300px;
	height: auto;
}

.actions {
	position: absolute;
	top: 50%;
	/*width: 100%;
	text-align: center;*/

	transform: translate(-100%, 0);
	left: 50%;
	text-align: right;
}

.yesbutton, .nobutton {
	width: 150px;
	height: 100px;
	border-radius: 20px;
	border: none;
	color: #fff;
	font-size: 24pt;
}

.yesbutton {
	background: rgba(50, 205, 50, 0.8);
	position: absolute;
	left: 25%;
}

.yesbutton:hover {
	background: rgba(50, 205, 50, 1);
}

.nobutton {
	background: rgba(192, 0, 0, 0.8);
	position: absolute;
	left: 75%;
	transform: translate(-50%, 0);
}

.nobutton:hover {
	background: rgba(192, 0, 0, 1);
}

.email {
	border-radius: 15px;
	background: #fff;
	border: none;
	padding: 15px;
	background: rgba(50, 255, 50, 0.7);
	color: #fff;
	display: block;
	text-decoration: none;
	font-size: 12pt;

/*	position: absolute;
	transform: translate(-100%, 0);*/
	left: 50%;
}

.email:hover {
	background: rgba(50, 255, 50, 0.8);
}

::-webkit-input-placeholder {
   color: white;
}

:-moz-placeholder { /* Firefox 18- */
   color: white;  
}

::-moz-placeholder {  /* Firefox 19+ */
   color: white;
}

:-ms-input-placeholder {  
   color: white;
}

.submit {
	display: none;
}

.alternate {
	left: 50%;
	width: 100%;
}

.pathos {
	position: absolute;
	left: 50%;
	top: 0;
	font-size: 18pt;
	margin: 0 50px;
	display: inline-block;

	/*height: 100%;*/
	top: 50%;
	transform: translate(0, -50%);

	background: rgba(127, 127, 127, 0.5);
	padding: 10px;

	overflow: hidden;
}

.hehelped {
	display: inline-block;
	margin: 5px 0;
}
</style>
<style>
body, html {
	background: none;
}

video#bgvid { 
    position: fixed;
    top: 50%;
    left: 50%;
    min-width: 100%;
    min-height: 100%;
    width: auto;
    height: auto;
    z-index: -100;
    -webkit-transform: translateX(-50%) translateY(-50%);
    transform: translateX(-50%) translateY(-50%);
    background: url(http://www.nationofchange.org/2015/wp-content/uploads/IndianPoint051315.jpg) no-repeat;
    background-size: cover; 
}
</style>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-alpha1/jquery.min.js"></script>
<script>
var names = [ 'Kevin', 'Allen', 'Mark', 'Greg', 'Tom', 'David', 'Helen', 'Pat', 'Ann', 'Adam', 'Bonnie', 'Brittany', 'Courtney', 'Erin', 'Aaron', 'Bethany' ];
var states = [ 'New York', 'New Jersey', 'Georgia', 'Tennessee', 'Michigan', 'Colorado', 'Pennsylvania', 'Connecticut', 'Maine', 'New Hampshire' ];

$(document).ready(function() {
	$('.pathos').height($('.pathos').height());
	$('.pathos').width($('.pathos').width());
	$('.hehelped').each(function() {
		$(this).css('top', $(this).position().top);
	});
	$('.hehelped').css('position', 'absolute').css('left', $('.pathos').css('padding-left'));
	setInterval(function() {
		$('.old').remove();
		$('.slide').css('position', '').css('transition', '').css('transform', '').css('left', '');
		$('.slide').addClass('old');
		$('.slide').after($('<p class="hehelped slide" style="position: absolute; left: ' + $('.pathos').outerWidth() + 'px; width: ' + $('.pathos').width() * 2 + '; top: ' + $('.pathos').css('padding-top') + '">' + names[parseInt(Math.random() * names.length)] + ' from ' + states[parseInt(Math.random() * states.length)] + ' helped. What about you?</p>'));
		$('.slide').css('transition', 'transform 2s').css('transform', 'translate(-' + ($('.pathos').outerWidth() - parseInt($('.pathos').css('padding-left'))) + 'px, 0)');
	}, 5000);
});
</script>
</head>
<body>

<video autoplay loop muted poster="http://www.nationofchange.org/2015/wp-content/uploads/IndianPoint051315.jpg" id="bgvid">
    <source src="scare.mp4" type="video/mp4">
</video>

<div class="blurred">

<h1 class="attention">Shut down Indian Point</h1>

<form class="actions" action="sendemail.php" method="post">
<input type="text" class="email" name="email" placeholder="Your email address..." />
<input type="submit" class="submit" />
<p class="alternate">Or text INDIANPOINT to 55555</p>
</form>

<div class="pathos">
<p class="hehelped slide">Kevin from New Jersey helped. What about you?</p>
<p class="hehelped">Submit your email address to learn more.</p>
</div>

</div>
</body>
</html>
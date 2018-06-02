<!DOCTYPE html>
<html lang="en">
	<head>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<title>Endgrain Coffee Bar</title>
		<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
	    <meta name="mobile-web-app-capable" content="yes">
	    <meta name="theme-color" content="#231F20">
	    <link rel="icon" sizes="192x192" href="img/favicon.png">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">		
		<link rel="stylesheet" href="css/styles.css">
		<script type="text/javascript">
			$(window).scroll(function(){
				var wScroll = $(this).scrollTop();
				$('.logo').css({
					'transform' : 'translate(0px, '+ wScroll /4 +'%)'
				});
			});
		</script>
	    <meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    	<meta name="description" content="Located in Southern New Jersey, Endgrain Coffee Bar is the first third wave coffee shop in the area to offer both Nitro on tap and house roasted beans.">
    	<meta name="keywords" content="nitro,cold brew,coffee,coffee shop,coffee bar,drinks,cappucino,espresso,latte,Starbucks,Rowan University,Pitman,New Jersey,South Jersey,french press,pourover,Brandywine Coffee Roasters,Royal Mile Coffee Roasters,One Village Coffee Roasters,ReAnimator Coffee Roasters,Philly,Philadelphia,local business">
	</head>
	<body>
	@include('templates.snippets.alerts')
		@include('templates.snippets.header')
		@include('templates.pagelets.intro')
		@include('templates.parallax.paraone')
		@include('templates.pagelets.aboutus')
		@include('templates.parallax.paratwo')
		@include('templates.pagelets.services')
		@include('templates.parallax.parathree')
		@include('templates.pagelets.contactus')
	</body>
<html>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<title>Endgrain Coffee Roasters</title>
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
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
	    
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-149020327-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-149020327-1');
	</script>
    	<meta name="description" content="Located in Pitman New Jersey, Endgrain Coffee Roasters is the first third wave coffee shop. We serve Nitro Cold Brew on tap and roast our own beans.">
    	<meta name="keywords" content="Rowan,College,nitro,cold brew,coffee,coffee shop,coffee bar,drinks,cappucino,espresso,latte,Starbucks,Rowan University,Pitman,New Jersey,South Jersey,french press,pourover,Brandywine Coffee Roasters,Royal Mile Coffee Roasters,One Village Coffee Roasters,ReAnimator Coffee Roasters,Philly,Philadelphia,local business,Rowan University,Rowan College of South Jersey,RCSJ,Rowan Engineering,Coffee Bar,Good Coffee">
	</head>
	<body>
		@include('templates.snippets.alerts')
		@include('templates.snippets.navigation')
		@include('templates.snippets.header')
		@include('templates.pagelets.aboutus')
		@include('templates.parallax.paratwo')
		@include('templates.pagelets.services')
		@include('templates.parallax.parathree')
		@include('templates.pagelets.contactus')
	</body>
<html>

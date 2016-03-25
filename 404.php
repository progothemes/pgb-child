<?php
/**
 * The template for displaying 404 errors.
 *
 * @package pgb
 */
?>
<style type="text/css">
	body {
	    margin: 0;
	    font-family: "Myriad Pro", Myriad, Frutiger, sans-serif;
	    background:#e1e1e1;
	}
	#contain{
	    max-width:1240px;
	    margin:0 auto;
	    background:#fff;
	}
	#logo{
	    margin:28px 45px;
	}
	header{ padding:21px 45px; background: #004B7F linear-gradient(0deg, #6ECDF3,#004B7F) no-repeat center; }
	header:after{
		content:'¯\\_(ツ)_/¯';
		display:block;
		font-size:4em;
		font-size:6vw;
		font-weight: 300;
		color:#FFF;
	}
	h1 small{ font-weight:normal; font-size:.618em; }
	#message{
		background-color: #FFF;
		padding: 21px 45px;
	}
</style>
<div id="contain">

	<a href="/"><img id="logo" src="/wp-content/uploads/2015/09/logo-Nectar-7.png" alt="Nectar 7" width="226" height="30" /></a>
	<header>
		<h1>Not Found <small>Error 404</small></h1>
	</header>
	<div id="message">
		<p>Sorry! Nothing can be found at this location. Perhaps you'll find what you are looking for by <a href="/">visiting our homepage</a> or <a href="/contact-us/">contacting us</a>.</p>
	</div>

</div>


	<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
<title>Aaron's construction<?php wp_title() ?></title>
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, maximum-scale=1"
    />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/styles.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/slick/slick.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/slick/slick-theme.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css" />
    <link
      href="https://fonts.googleapis.com/css?family=Alegreya:400,800"
      rel="stylesheet"
    />
	  
<script src="https://www.google.com/recaptcha/api.js?render=6LeHSOoUAAAAAHfRoaQSN2zMq-k5dB5FmtR9KAbc"></script>
<script>
grecaptcha.ready(function() {
    grecaptcha.execute('6LeHSOoUAAAAADFMleoWAHSpX6pIb5UhPptfhxPm
', {action: 'homepage'}).then(function(token) {
       ...
    });
});
</script>  
	</head>
	

  <body onresize="resize()">
    <header>
      <div class="head">
        <img
          src="<?php echo get_template_directory_uri(); ?>/images/logo100"
          alt="logo"
          srcset="
            <?php echo get_template_directory_uri(); ?>/images/logo100.png 1x,
            <?php echo get_template_directory_uri(); ?>/images/logo200.png 2x,
            <?php echo get_template_directory_uri(); ?>/images/logo300.png 3x
          "
        />
        <a class="phone" id="phone" href="tel:1-800-555-1234">1-800-555-1234</a>
      </div>
    </header>
    <!-- NAVIGATION HERE -->
	  
	  <div id="navWrapper">
		<nav class="clearfix">
			<div class="navi">
				<button id="hamburgerBtn">&#9776</button>
				
								<?php wp_nav_menu()?>				

			</div>

			  <form class="search-container" method="get" action="/site-construction">
        <input type="search" name="s" placeholder="Search..." />
        <button type="submit" value=""><i class="fa fa-search"></i></button>
		</nav>    
	</div>
<!--
    <nav class="clearfix">
      <div class="topnav" id="myTopnav"></div>
      <button id="hamburgerBtn">
        <span><i>&equiv;</i>OPEN</span> <span><i>&otimes;</i>CLOSE</span>
      </button>

      <form class="search-container" method="get" action="/site-construction">
        <input type="search" name="s" placeholder="Search..." />
        <button type="submit" value=""><i class="fa fa-search"></i></button>
      </form>
    </nav>
-->
	  
	          <main class="clearfix">


<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Adam Krone | Musings on Graphic, Web, and Sound Design</title>
		<meta name="description" content="Adam Krone's personal blog for graphic, web, and sound design." />
		<meta name="keywords" content="graphic, design, web, sound, music, production, html, css, adobe, creative, suite" />
		<meta name="robots" content="" />
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
		<script type="text/javascript" src="http://use.typekit.com/tkm3ssp.js"></script>
		<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
	</head>
	<body>
	
		<div id="container">
			<header>
				<h1 class="tk-bistro-script-web"><?php bloginfo('name'); ?></h1>
				<h2 class="tk-ff-enzo-web"><?php bloginfo('description'); ?></h2>
			</header>
			
			<div id="sidebar">
				<div id="nav">
					<ul>
						<li><a class="tk-ff-tisa-web-pro <?php if(!is_page()) { echo 'selected'; } ?>" href="<?php bloginfo('url'); ?>">Blog</a></li>
						<?php wp_list_pages('title_li='); ?>
					</ul>
				</div>	
			</div>
						
			<div id="main">
				
				<!-- Post -->
				
				<?php if(have_posts()) : ?>
				<?php while(have_posts()) : the_post(); ?>

				<article>
					<div class="meta">
						<p class="tk-ff-tisa-web-pro"><?php if (is_page()) : echo "Last edited "; else : ?>Posted on <?php endif; ?><span class="date"><?php the_time(get_option('date_format')); ?></span></p>
					<?php if(!is_page()) { ?>
						<p class="tk-ff-tisa-web-pro">in <span class="category"><?php the_category(', '); ?></span></p>
						<p class="tk-ff-tisa-web-pro tags"><?php the_tags(); ?></p>
					<?php } ?>
					</div>
					<div class="text">
						<h4 class="tk-ff-enzo-web"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h4>
						<p class="tk-ff-tisa-web-pro"><?php the_content(); ?></p>
						<img id="sig" src="<?php bloginfo('template_url'); ?>/img/sig.jpg" alt="Adam Krone's signature">
						<div class="adsense">
							<script type="text/javascript"><!--
							google_ad_client = "ca-pub-9033418686304562";
							/* Blog Ad */
							google_ad_slot = "3095839672";
							google_ad_width = 468;
							google_ad_height = 60;
							//-->
							</script>
							<script type="text/javascript"
							src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
							</script>
						</div>
					</div>
				</article>
				
				<?php endwhile; else : ?>
				<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
				<?php endif; ?>
				
				<div id="next_prev">
					<?php previous_posts_link("<< Newer Entires"); ?>
					<?php next_posts_link("Older Entries >>"); ?>
				</div>
				
				<!-- End Post -->
				
			</div>
			
			<footer>
				<div id="badges">
					<a href="skype:cachoimechi?call"><img class="icon" src="<?php bloginfo('template_url'); ?>/img/skype.png" alt="Call me on Skype"></a>
					<a href="https://github.com/cachoimechi"><img class="icon" src="<?php bloginfo('template_url'); ?>/img/github.png" alt="View my repositories on GitHub"></a>
					<a href="http://soundcloud.com/ankrone"><img class="icon" src="<?php bloginfo('template_url'); ?>/img/soundcloud.png" alt="Listen to my music on SoundCloud"></a>
					<a href="http://www.flickr.com/photos/62763980@N05/"><img class="icon" src="<?php bloginfo('template_url'); ?>/img/flickr.png" alt="View my stream on Flickr"></a>
					<a href="http://www.linkedin.com/pub/adam-krone/14/34a/49a"><img class="icon" src="<?php bloginfo('template_url'); ?>/img/linkedin.png" alt="Connect on LinkdIn"></a>
					<a href="http://twitter.com/#!/adamkrone"><img class="icon" src="<?php bloginfo('template_url'); ?>/img/twitter.png" alt="Follow me on Twitter!"></a>
					<a href="http://wordpress.org"><img src="<?php bloginfo('template_url'); ?>/img/wordpress.png"></a>
					<a href="http://www.w3.org/Style/CSS/current-work"><img src="<?php bloginfo('template_url'); ?>/img/HTML5_Styling_32.png" alt="CSS3 Styling"></a>
					<a href="http://dev.w3.org/html5/spec/Overview.html"><img src="<?php bloginfo('template_url'); ?>/img/HTML5_Semantics_32.png" alt="HTML5 Semantics"></a>
					<a href="http://www.w3.org/html/logo/"><img src="<?php bloginfo('template_url'); ?>/img/HTML5_Logo_32.png" alt="HTML5 Logo"></a>
					<p>Made with:</p>
				</div>
				<div id="about">
					<h5 class="tk-ff-enzo-web">About Me</h5>
					<img src="http://a4.sphotos.ak.fbcdn.net/photos-ak-ash1/v55/171/33/20722841/n20722841_32211035_9409.jpg" alt="Rockin out!">
					<p class="tk-ff-tisa-web-pro">Hello! I'm Adam Krone, an aspiring Graphic, Web, and Sound Designer.  I graduated from Ball State
					University with a B.A in Telecommunications Production in May 2010, and have been trying to figure out where I belong ever since.
					I'm currently planning on returning to school to build a solid design foundation, and I'm very excited to see where it will lead me.
					I started this blog to track my progress in school, and as a way to vent my thoughts about design, and the web in general. Hopefully
					I can at least entertain you, and maybe even teach you something new!</p>
					<p class="tk-ff-tisa-web-pro"><strong>Warning: Image heavy blog. Slow connections need not apply.</strong></p>
				</div>
			</footer>
		</div>
		
	</body>
</html>
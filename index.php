<!DOCTYPE html>
<html lang="en">
	<head>
		<meta name="google-site-verification" content="VSIqf88HA4y7ilBdpCyrojHkypmsPDXbaUpJYdMOuic" />
		<meta charset="utf-8">
		<title>Adam Krone | Musings on Graphic, Web, and Sound Design</title>
		<meta name="description" content="Adam Krone's personal blog for graphic, web, and sound design." />
		<meta name="keywords" content="graphic, design, web, sound, music, production, html, css, adobe, creative, suite" />
		<meta name="robots" content="" />
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
		<script type="text/javascript" src="http://use.typekit.com/tkm3ssp.js"></script>
		<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
			<script type="text/javascript">
		
		  var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', 'UA-23764445-1']);
		  _gaq.push(['_trackPageview']);
		
		  (function() {
		    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();
		
		</script>
	</head>
	<body>
		<div id="container">
			<header>
				<h1 class="tk-bistro-script-web"><?php bloginfo('name'); ?></h1>
				<h2 class="tk-ff-enzo-web"><?php bloginfo('description'); ?></h2>
				<img id="logo" src="<?php bloginfo('template_url'); ?>/img/self-portrait.png" alt="Adam Krone Self Portrait">
			</header>
			
			<div id="sidebar">
				<div id="nav">
					<ul>
						<li><a class="tk-ff-enzo-web <?php if(!is_page()) { echo 'selected'; } ?>" href="<?php bloginfo('url'); ?>">Blog</a></li>
						<?php
							
							$pages = wp_list_pages('title_li=&echo=0' );
        					$pages = preg_replace('/class="/','class="tk-ff-enzo-web ', $pages); //note space on end of replacement string                  
       						//output
        					echo $pages;
							
						?>
					</ul>
				</div>	
				<div id="widgets">
					<h3 class="sidebartitle"><?php _e('Archives'); ?></h3>
    						<ul class="list-archives">
      						<?php wp_get_archives('type=monthly'); ?>
    						</ul>
    						
  					<h3 class="sidebartitle"><?php _e('Categories'); ?></h3>
  						<ul class="list-cat">
    							<?php wp_list_cats('sort_column=name&optioncount=1&hierarchical=0'); ?>
  						</ul>
  				</div>
  				<a href="http://www.jdoqocy.com/click-5326417-10868522?url=http%3A%2F%2Fwww.dickblick.com%2F" target="_top">
<img src="http://www.lduhtrp.net/image-5326417-10868522" width="125" height="125" alt="www.dickblick.com" border="0"/></a>
				<script type="text/javascript" language="javascript" src="http://www.anrdoezrs.net/placeholder-5444513?url=http%3A%2F%2Fstore.digitalriver.com%2Fstore%3FAction%3DDisplayProductDetailsPage%26Locale%3Den_US%26SiteID%3Dadbevlus%26productID%3D225368600&imgurl=http%3A%2F%2Fdrh.img.digitalriver.com%2FDRHM%2FStorefront%2FCompany%2Fadbevlus%2Fimages%2Fproduct%2Fdetail%2Fmaster_collection_cs55_now_available_150x150.jpg&target=_top&mouseover=N"></script>
				
			</div>
			
			<div id="main">
				
				<!-- Post -->
				
				<?php if(have_posts()) : ?>
				<?php while(have_posts()) : the_post(); ?>

				<article>
					<div class="meta">
						<p class="tk-ff-enzo-web"><?php if (is_page()) : echo "Last edited "; else : ?>Posted on <?php endif; ?><span class="date"><?php the_time(get_option('date_format')); ?></span></p>
					<?php if(!is_page()) { ?>
						<p class="tk-ff-enzo-web">in <span class="category"><?php the_category(', '); ?></span></p>
						<p class="tk-ff-enzo-web tags"><?php the_tags(); ?></p>
					<?php } ?>
					</div>
					<div class="text">
						<h4 class="tk-ff-enzo-web"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h4>
						<p><?php the_content(); ?></p>
						<img id="sig" src="<?php bloginfo('template_url'); ?>/img/sig.jpg" alt="Adam Krone's signature">
						
						<!-- Begin: adBrite, Generated: 2012-01-30 20:49:15  -->
						<script type="text/javascript">
						var AdBrite_Title_Color = '0000FF';
						var AdBrite_Text_Color = '000000';
						var AdBrite_Background_Color = 'FFFFFF';
						var AdBrite_Border_Color = 'CCCCCC';
						var AdBrite_URL_Color = '008000';
						try{var AdBrite_Iframe=window.top!=window.self?2:1;var AdBrite_Referrer=document.referrer==''?document.location:document.referrer;AdBrite_Referrer=encodeURIComponent(AdBrite_Referrer);}catch(e){var AdBrite_Iframe='';var AdBrite_Referrer='';}
						</script>
						<span style="white-space:nowrap;"><script type="text/javascript">document.write(String.fromCharCode(60,83,67,82,73,80,84));document.write(' src="http://ads.adbrite.com/mb/text_group.php?sid=1955328&zs=3436385f3630&ifr='+AdBrite_Iframe+'&ref='+AdBrite_Referrer+'" type="text/javascript">');document.write(String.fromCharCode(60,47,83,67,82,73,80,84,62));</script>
						<a target="_top" href="http://www.adbrite.com/mb/commerce/purchase_form.php?opid=1955328&afsid=1"><img src="http://files.adbrite.com/mb/images/adbrite-your-ad-here-banner.gif" style="background-color:#CCCCCC;border:none;padding:0;margin:0;" alt="Your Ad Here" width="11" height="60" border="0" /></a></span>
						<!-- End: adBrite -->
					
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
					<p class="tk-ff-enzo-web">Hello! I'm Adam Krone, an aspiring Graphic, Web, and Sound Designer.  I graduated from Ball State
					University with a B.A in Telecommunications Production in May 2010, and have been trying to figure out where I belong ever since.
					I'm currently planning on returning to school to build a solid design foundation, and I'm very excited to see where it will lead me.
					I started this blog to track my progress in school, and as a way to vent my thoughts about design, and the web in general. Hopefully
					I can at least entertain you, and maybe even teach you something new!</p>
					<p class=".tk-ff-enzo-web"><strong>Warning: Image heavy blog. Slow connections need not apply.</strong></p>
				</div>
			</footer>
		</div>
		
	<!-- VIGLINK -->	
	<script type="text/javascript">
	  var vglnk = { api_url: '//api.viglink.com/api',
	                key: '81556d9a30498470a419d13b55265c8b' };
	
	  (function(d, t) {
	    var s = d.createElement(t); s.type = 'text/javascript'; s.async = true;
	    s.src = ('https:' == document.location.protocol ? vglnk.api_url :
	             '//cdn.viglink.com/api') + '/vglnk.js';
	    var r = d.getElementsByTagName(t)[0]; r.parentNode.insertBefore(s, r);
	  }(document, 'script'));
	</script>

	</body>
</html>
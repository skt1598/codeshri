

<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="http://104.131.177.38/demo/wp/iamx/xmlrpc.php">
    <title>Shrikant Sharma Freelancer</title>
                        <script>
                            /* You can add more configuration options to webfontloader by previously defining the WebFontConfig with your options */
                            if ( typeof WebFontConfig === "undefined" ) {
                                WebFontConfig = new Object();
                            }
                            WebFontConfig['google'] = {families: ['Roboto:100,300,400,500,700,900,100italic,300italic,400italic,500italic,700italic,900italic']};

                            (function() {
                                var wf = document.createElement( 'script' );
                                wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1.5.3/webfont.js';
                                wf.type = 'text/javascript';
                                wf.async = 'true';
                                var s = document.getElementsByTagName( 'script' )[0];
                                s.parentNode.insertBefore( wf, s );
                            })();
                        </script>
                        <link rel="alternate" type="application/rss+xml" title="Iamx &raquo; Feed" href="http://104.131.177.38/demo/wp/iamx/feed/" />
<link rel="alternate" type="application/rss+xml" title="Iamx &raquo; Comments Feed" href="http://104.131.177.38/demo/wp/iamx/comments/feed/" />
		<script type="text/javascript">
			window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/72x72\/","ext":".png","source":{"wpemoji":"http:\/\/104.131.177.38\/demo\/wp\/iamx\/wp-includes\/js\/wp-emoji.js?ver=4.4.15","twemoji":"http:\/\/104.131.177.38\/demo\/wp\/iamx\/wp-includes\/js\/twemoji.js?ver=4.4.15"}};
			( function( window, document, settings ) {
	var src, ready;

	/**
	 * Detect if the browser supports rendering emoji or flag emoji. Flag emoji are a single glyph
	 * made of two characters, so some browsers (notably, Firefox OS X) don't support them.
	 *
	 * @since 4.2.0
	 *
	 * @param type {String} Whether to test for support of "simple" or "flag" emoji.
	 * @return {Boolean} True if the browser can render emoji, false if it cannot.
	 */
	function browserSupportsEmoji( type ) {
		var canvas = document.createElement( 'canvas' ),
			context = canvas.getContext && canvas.getContext( '2d' ),
			stringFromCharCode = String.fromCharCode,
			tonedata, tone, tone2;

		if ( ! context || ! context.fillText ) {
			return false;
		}

		/*
		 * Chrome on OS X added native emoji rendering in M41. Unfortunately,
		 * it doesn't work when the font is bolder than 500 weight. So, we
		 * check for bold rendering support to avoid invisible emoji in Chrome.
		 */
		context.textBaseline = 'top';
		context.font = '600 32px Arial';

		if ( 'flag' === type ) {
			/*
			 * This works because the image will be one of three things:
			 * - Two empty squares, if the browser doesn't render emoji
			 * - Two squares with 'A' and 'U' in them, if the browser doesn't render flag emoji
			 * - The Australian flag
			 *
			 * The first two will encode to small images (1-2KB data URLs), the third will encode
			 * to a larger image (4-5KB data URL).
			 */
			context.fillText( stringFromCharCode( 55356, 56806, 55356, 56826 ), 0, 0 );
			return canvas.toDataURL().length > 3000;
		} else if ( 'diversity' === type ) {
			/*
			 * This tests if the browser supports the Emoji Diversity specification, by rendering an
			 * emoji with no skin tone specified (in this case, Santa). It then adds a skin tone, and
			 * compares if the emoji rendering has changed.
			 */
			context.fillText( stringFromCharCode( 55356, 57221 ), 0, 0 );
			tonedata = context.getImageData( 16, 16, 1, 1 ).data;

			context.fillText( stringFromCharCode( 55356, 57221, 55356, 57343 ), 0, 0 );
			// Chrome has issues comparing arrays, and Safari has issues converting arrays to strings.
			// So, we create our own string and compare that, instead.
			tonedata = context.getImageData( 16, 16, 1, 1 ).data;
			tone2 = tonedata[0] + ',' + tonedata[1] + ',' + tonedata[2] + ',' + tonedata[3];

			return tone !== tone2;
		} else {
			if ( 'simple' === type ) {
				/*
				 * This creates a smiling emoji, and checks to see if there is any image data in the
				 * center pixel. In browsers that don't support emoji, the character will be rendered
				 * as an empty square, so the center pixel will be blank.
				 */
				context.fillText( stringFromCharCode( 55357, 56835 ), 0, 0 );
			} else {
				/*
				 * To check for Unicode 8 support, let's try rendering the most important advancement
				 * that the Unicode Consortium have made in years: the burrito.
				 */
				context.fillText( stringFromCharCode( 55356, 57135 ), 0, 0 );
			}
			return context.getImageData( 16, 16, 1, 1 ).data[0] !== 0;
		}
	}

	function addScript( src ) {
		var script = document.createElement( 'script' );

		script.src = src;
		script.type = 'text/javascript';
		document.getElementsByTagName( 'head' )[0].appendChild( script );
	}

	settings.supports = {
		simple:    browserSupportsEmoji( 'simple' ),
		flag:      browserSupportsEmoji( 'flag' ),
		unicode8:  browserSupportsEmoji( 'unicode8' ),
		diversity: browserSupportsEmoji( 'diversity' )
	};

	settings.DOMReady = false;
	settings.readyCallback = function() {
		settings.DOMReady = true;
	};

	if ( ! settings.supports.simple || ! settings.supports.flag || ! settings.supports.unicode8 || ! settings.supports.diversity ) {
		ready = function() {
			settings.readyCallback();
		};

		if ( document.addEventListener ) {
			document.addEventListener( 'DOMContentLoaded', ready, false );
			window.addEventListener( 'load', ready, false );
		} else {
			window.attachEvent( 'onload', ready );
			document.attachEvent( 'onreadystatechange', function() {
				if ( 'complete' === document.readyState ) {
					settings.readyCallback();
				}
			} );
		}

		src = settings.source || {};

		if ( src.concatemoji ) {
			addScript( src.concatemoji );
		} else if ( src.wpemoji && src.twemoji ) {
			addScript( src.twemoji );
			addScript( src.wpemoji );
		}
	}

} )( window, document, window._wpemojiSettings );
		</script>
		<style type="text/css">
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
#map{
    min-height: 350px;
   }
</style>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
<link rel='stylesheet' id='contact-form-7-css'  href='http://104.131.177.38/demo/wp/iamx/wp-content/plugins/contact-form-7/includes/css/styles.css?ver=4.4.2' type='text/css' media='all' />
<link rel='stylesheet' id='zilla-likes-css'  href='http://104.131.177.38/demo/wp/iamx/wp-content/plugins/tt-plugin/inc/post-likes/styles/zilla-likes.css?ver=4.4.15' type='text/css' media='all' />
<!--<link rel='stylesheet' id='tt-fontawesome-css'  href='http://104.131.177.38/demo/wp/iamx/wp-content/themes/iamx/css/font-awesome.min.css?ver=4.5' type='text/css' media='all' />-->
<link rel='stylesheet' id='tt-shortcode-css'  href='http://104.131.177.38/demo/wp/iamx/wp-content/themes/iamx/css/shortcode.css?ver=4.5' type='text/css' media='all' />
<link rel='stylesheet' id='tt-flaticon-stroke-css'  href='http://104.131.177.38/demo/wp/iamx/wp-content/themes/iamx/fonts/flaticon/flaticon.css' type='text/css' media='all' />
<link rel='stylesheet' id='tt-bootstrap-css'  href='http://104.131.177.38/demo/wp/iamx/wp-content/themes/iamx/css/bootstrap.min.css?ver=3.3.6' type='text/css' media='all' />
<link rel='stylesheet' id='tt-owl-carousel-css'  href='http://104.131.177.38/demo/wp/iamx/wp-content/themes/iamx/css/owl.carousel.css' type='text/css' media='all' />
<link rel='stylesheet' id='tt-owl-theme-css'  href='http://104.131.177.38/demo/wp/iamx/wp-content/themes/iamx/css/owl.theme.css' type='text/css' media='all' />
<link rel='stylesheet' id='tt-animate-css'  href='http://104.131.177.38/demo/wp/iamx/wp-content/themes/iamx/css/animate.css' type='text/css' media='all' />
<link rel='stylesheet' id='tt-magnific-css'  href='http://104.131.177.38/demo/wp/iamx/wp-content/themes/iamx/css/magnific-popup.css' type='text/css' media='all' />
<link rel='stylesheet' id='tt-stylesheet-css'  href='http://104.131.177.38/demo/wp/iamx/wp-content/themes/iamx/style.css?ver=4.4.15' type='text/css' media='all' />
<link rel='stylesheet' id='tt-responsive-css-css'  href='http://104.131.177.38/demo/wp/iamx/wp-content/themes/iamx/css/responsive.css' type='text/css' media='all' />
<link rel='stylesheet' id='tt-custom-style-css'  href='http://104.131.177.38/demo/wp/iamx/wp-content/themes/iamx/custom-style.php' type='text/css' media='all' />
<link rel='stylesheet' id='js_composer_front-css'  href='http://104.131.177.38/demo/wp/iamx/wp-content/plugins/js_composer/assets/css/js_composer.min.css?ver=4.9.2' type='text/css' media='all' />
<script type='text/javascript' src='http://104.131.177.38/demo/wp/iamx/wp-includes/js/jquery/jquery.js?ver=1.11.3'></script>
<script type='text/javascript' src='http://104.131.177.38/demo/wp/iamx/wp-includes/js/jquery/jquery-migrate.js?ver=1.2.1'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var zilla_likes = {"ajaxurl":"http:\/\/104.131.177.38\/demo\/wp\/iamx\/wp-admin\/admin-ajax.php"};
/* ]]> */
</script>
<script type='text/javascript' src='http://104.131.177.38/demo/wp/iamx/wp-content/plugins/tt-plugin/inc/post-likes/scripts/zilla-likes.js?ver=4.4.15'></script>
<link rel='https://api.w.org/' href='http://104.131.177.38/demo/wp/iamx/wp-json/' />
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="http://104.131.177.38/demo/wp/iamx/xmlrpc.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="http://104.131.177.38/demo/wp/iamx/wp-includes/wlwmanifest.xml" /> 
<meta name="generator" content="WordPress 4.4.15" />
<link rel="canonical" href="http://104.131.177.38/demo/wp/iamx/" />
<link rel='shortlink' href='http://104.131.177.38/demo/wp/iamx/' />
		<style type="text/css">.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}</style>
		<meta name="generator" content="Powered by Visual Composer - drag and drop page builder for WordPress."/>
<!--[if lte IE 9]><link rel="stylesheet" type="text/css" href="http://104.131.177.38/demo/wp/iamx/wp-content/plugins/js_composer/assets/css/vc_lte_ie9.min.css" media="screen"><![endif]--><!--[if IE  8]><link rel="stylesheet" type="text/css" href="http://104.131.177.38/demo/wp/iamx/wp-content/plugins/js_composer/assets/css/vc-ie8.min.css" media="screen"><![endif]--><style type="text/css" data-type="vc_shortcodes-custom-css">.vc_custom_1467136222667{background-color: #ffffff !important;}.vc_custom_1467136235256{padding-top: 120px !important;background-color: #ffffff !important;}.vc_custom_1459810557797{padding-top: 50px !important;padding-bottom: 100px !important;background-color: #ffffff !important;}.vc_custom_1467136246705{padding-top: 120px !important;padding-bottom: 100px !important;background-color: #1a1e23 !important;}.vc_custom_1467136374326{padding-top: 120px !important;padding-bottom: 110px !important;background-color: #ffffff !important;}.vc_custom_1467136508118{padding-top: 130px !important;padding-bottom: 100px !important;}.vc_custom_1465280214674{padding-top: 110px !important;padding-bottom: 110px !important;}.vc_custom_1467136533390{padding-top: 125px !important;padding-bottom: 100px !important;}.vc_custom_1459716795561{margin-top: 100px !important;margin-bottom: 100px !important;}.vc_custom_1465200538374{margin-top: 50px !important;margin-bottom: 100px !important;}.vc_custom_1462078468210{background-image: url(http://localhost/iamx/wp-content/uploads/2016/01/Candidate-political.jpg?id=2928) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}.vc_custom_1459746613009{background-color: #ffffff !important;}.vc_custom_1465201911551{padding-bottom: 35px !important;}.vc_custom_1465202259125{padding-top: 10px !important;padding-bottom: 30px !important;}.vc_custom_1459875720144{padding-bottom: 50px !important;}.vc_custom_1462435414479{padding-top: 115px !important;padding-bottom: 115px !important;}.vc_custom_1460851505925{margin-bottom: 50px !important;}.vc_custom_1460352398196{margin-bottom: 30px !important;}.vc_custom_1460353252369{margin-bottom: 50px !important;}.vc_custom_1464627285804{margin-bottom: 40px !important;}</style><noscript><style type="text/css"> .wpb_animate_when_almost_visible { opacity: 1; }</style></noscript></head>

<body id="home"  class="home page page-id-2320 page-template page-template-page-templates page-template-template-home page-template-page-templatestemplate-home-php header-banner-one wpb-js-composer js-comp-ver-4.9.2 vc_responsive" data-spy="scroll" data-target=".navbar" data-offset="100">
            <div id="preloader" style="background-color: #ffffff">
            <div id="status">
                <div class="status-mes" style="background-image: url(http://104.131.177.38/demo/wp/iamx/wp-content/themes/iamx/images/preloader.gif);"></div>
            </div>
        </div>
    
    <section class="header-banner banner-style-one tt-fullHeight" data-stellar-background-ratio="0.2" style="background-image: url('http://104.131.177.38/demo/wp/iamx/wp-content/uploads/2015/11/home2.jpg');">
	<div class="intro">

            <div class="intro-sub">I am Shrikant Sharma <div>(Shri)</div></div>
		
					<h1><span>Creative</span>  Developer</h1>
				
		<div class="intro-description">
			I am a fully professional freelance creative User Interface Designer &amp; Web Developer
Involving with latest web designing and development technologies.
Feel free to contact.		</div> <!-- .intro-description -->
		
					<div class="social-icons">
    <ul class="list-inline">
                        <li><a href="https://www.linkedin.com/in/shrikant-sharma-a6681ab8/"><i class="fab fa-linkedin-in"></i></a></li>
                        <li><a href="https://github.com/skt1598/"><i class="fab fa-github"></i></a></li>
                        <li><a href="https://www.facebook.com/skt1598"><i class="fab fa-facebook"></i></a></li>
                            <li><a href="https://www.instagram.com/shri_1598/"><i class="fab fa-instagram"></i></a></li>
                </ul>
</div> <!-- /.social-icons -->			</div> <!-- .intro -->

			<div class="mouse-icon">
			<div class="wheel"></div>
		</div>
	</section>
    <div class="header-wrapper">
        <nav class="navbar navbar-default">
            <div class="container">
                
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".mobile-toggle">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <div class="navbar-brand">
                        <h1>
                            <a href="index.php">
                                <span style="color:black">I am</span> <span>Shri</span>
                            </a>
                        </h1>
                    </div> <!-- .navbar-brand -->
                </div> <!-- .navbar-header -->

                <div class="main-menu-wrapper hidden-xs clearfix">
                    <div class="main-menu">                   
                        <ul id="menu-primary-menu" class="menu nav navbar-nav navbar-right"><li id="menu-item-3549" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3549  has-menu-child"><a title="Home" href="#home">Home</a></li>
<li id="menu-item-3550" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3550  has-menu-child"><a title="About" href="#about">About</a></li>
<li id="menu-item-3551" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3551  has-menu-child"><a title="Resume" href="#resume">Resume</a></li>
<li id="menu-item-3552" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3552  has-menu-child"><a title="Skills" href="#skills">Skills</a></li>
<li id="menu-item-3555" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3555  has-menu-child"><a title="Contact" href="#contact">Contact</a></li>
</ul>                    </div>
                </div> <!-- /navbar-collapse -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="visible-xs">
                    <div class="mobile-menu collapse navbar-collapse mobile-toggle">
                        <ul id="menu-primary-menu-1" class="menu nav navbar-nav"><li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3549  has-menu-child"><a title="Home" href="#home">Home</a></li>
<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3550  has-menu-child"><a title="About" href="#about">About</a></li>
<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3551  has-menu-child"><a title="Resume" href="#resume">Resume</a></li>
<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3552  has-menu-child"><a title="Skills" href="#skills">Skills</a></li>
<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3555  has-menu-child"><a title="Contact" href="#contact">Contact</a></li>
</ul>                    </div> <!-- /.navbar-collapse -->
                </div>
            </div><!-- .container-->
        </nav>
    </div> <!-- .header-wrapper -->



	
	
		<section id="about" class="vc_row section-wrapper vc_custom_1467136222667 vc_row-has-fill"><div class="container"><div class="row"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper">
    <div class="section-intro  text-center  vc_custom_1459716795561">
        <h2 style="color:#282828" class="section-title wow fadeInUp">About Me</h2>

                
        
                    <span class="separator" style="background-color:#dd3333"><span style="background-color:#dd3333"></span></span>
        
    </div> <!-- .section-intro -->

<div class="col-md-4 col-md-push-8   vc_custom_1465200538374">
    <div class="biography">
        <div class="myphoto">
                        <img class="img-responsive" src="images/profile.jpg" alt="">
            <div class="img-frame"></div>
        </div>
        <ul>
            
                            <li><strong>Name:&nbsp;</strong>Shrikant Sharma </li>
                            <li><strong>Nick Name:&nbsp;</strong>Shri </li>
                            <li><strong>Date of birth:&nbsp;</strong>15 Jan 1998 </li>
                            <li><strong>Address:&nbsp;</strong>#270, Sec-28, Gurugram, 122009, Haryana, India </li>
                            <li><strong>Nationality:&nbsp;</strong>Indian </li>
                            <li><strong>Phone:&nbsp;</strong>(+91) 7355165949</li>
                            <li><strong>Email:&nbsp;</strong>shri@codeshri.com </li>
                    </ul>
    </div>
</div>

<div class="col-md-8 col-md-pull-4">
    <div class="short-info wow fadeInUp">
<h3>Objective</h3>
<p>An opportunity to work and upgrade oneself, as well as being involved in an organization that believes in gaining a competitive edge and giving back to the community. I&#8217;m presently expanding my experience in UI / UX design and development. I focus on using my interpersonal skills to build good user experience and create a strong interest in my employers. I hope to develop skills in machine learning and my knowledge of the Web, and become an honest asset to the business. As an individual, I&#8217;m self-confident you’ll find me creative, optimistic and naturally passionate. I’m a forward thinker, which others may find inspiring when working as a team.</p>
</div>
<div class="short-info wow fadeInUp">
<h3>What I Do ?</h3>
<p>Currently I'm working as a Intern(full stack developer) in Trizin Infotech Pvt, Ltd. and I'm also a freelancer. I have a love of clean, elegant styling, and I have good  experience in the production of modern websites. I loving creating awesome as per my clients’ need. I think user experience when I try to craft something for my clients. Making the work awesome.</p>
<ul class="list-check">
<li>User Experience Design</li>
<li>Interface Design</li>
<li>Web Developement </li>
</ul>
</div>
    <div class="my-signature">
                  <img src="images/sign.jpg" alt="">
    </div>

    <div class="download-button">
      <a class="btn btn-info btn-lg" href="#contact"><i class="fa fa-paper-plane"></i>Send me message</a>
      <!--<button class="btn btn-primary btn-lg" id="cmd"><i class="fa fa-download"></i>Download my cv</buton>-->
      <!--<a class="btn btn-primary btn-lg" href="http://pdf-ace.com/pdfme?cache=1&cache_for=86400" target="_blank">Save as PDF</a>-->
    </div>
</div>

</div></div></div></div></section><section class="vc_row section-wrapper"><div class="container-fullwidth"><div class="row"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper">

</div></div></div></div></section><section id="resume" class="vc_row section-wrapper vc_custom_1467136235256 vc_row-has-fill"><div class="container"><div class="row"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper">
    <div class="section-intro  text-center  vc_custom_1459746613009">
        <h2 style="" class="section-title wow fadeInUp">RESUME</h2>

                
        
        
    </div> <!-- .section-intro -->

</div></div></div></div></section><section class="vc_row section-wrapper vc_custom_1459810557797 vc_row-has-fill"><div class="container"><div class="row"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper">

        <div class="col-md-12  ">
            <div class="resume-title">
                <h3>Education</h3>
            </div>
            <div class="resume">
                <ul class="timeline">

                    
                                            <li class="" style="color: ">
                            <div class="posted-date">
                                <span class="month">2014-2018</span>
                            </div><!-- /posted-date -->

                            <div class="timeline-panel wow fadeInUp">
                                <div class="timeline-content">
                                    <div class="timeline-heading">
                                        <h3>BACHELOR DEGREE</h3>
                                        <span>B.Tech(CS) Engineering, Punjabi University, Patiala, Punjab, India</span>
                                    </div><!-- /timeline-heading -->
                                </div> <!-- /timeline-content -->
                            </div><!-- /timeline-panel -->
                        </li>                        
                                            <li class="timeline-inverted" style="color: ">
                            <div class="posted-date">
                                <span class="month">2012-2014</span>
                            </div><!-- /posted-date -->

                            <div class="timeline-panel wow fadeInUp">
                                <div class="timeline-content">
                                    <div class="timeline-heading">
                                        <h3>HIGHER SECONDARY CERTIFICATE</h3>
                                        <span>SBM Sen. Sec. School Hapur,  UP,  India</span>
                                    </div><!-- /timeline-heading -->

                                </div> <!-- /timeline-content -->
                            </div><!-- /timeline-panel -->
                        </li>                        
                                            <li class="" style="color: ">
                            <div class="posted-date">
                                <span class="month">2010-2012</span>
                            </div><!-- /posted-date -->

                            <div class="timeline-panel wow fadeInUp">
                                <div class="timeline-content">
                                    <div class="timeline-heading">
                                        <h3>SECONDARY SCHOOL CERTIFICATE</h3>
                                        <span>SBM Sen. Sec. School, Hapur, UP, India</span>
                                    </div><!-- /timeline-heading -->

<!--                                    
                                </div> <!-- /timeline-content -->
                            </div><!-- /timeline-panel -->
                        </li>                        
                                            <li class="timeline-inverted" style="color: ">
                            <div class="posted-date">
                                <span class="month">2011-2013</span>
                            </div><!-- /posted-date -->

                            <div class="timeline-panel wow fadeInUp">
                                <div class="timeline-content">
                                    <div class="timeline-heading">
                                        <h3>Intern(Full Stack Developement)</h3>
                                        <span>Trizin Infotech Pvt. Ltd.</span>
                                    </div><!-- /timeline-heading -->

                                </div> <!-- /timeline-content -->
                            </div><!-- /timeline-panel -->
                        </li>                        
                                            <li class="" style="color: ">
                            <div class="posted-date">
                                <span class="month">June 2017 - July 2017</span>
                            </div><!-- /posted-date -->

                            <div class="timeline-panel wow fadeInUp">
                                <div class="timeline-content">
                                    <div class="timeline-heading">
                                        <h3>IoT Trainee</h3>
                                        <span>PPCRC, Pune, Maharashtra, India</span>
                                    </div><!-- /timeline-heading -->
<!-- /timeline-body -->
                                </div> <!-- /timeline-content -->
                            </div><!-- /timeline-panel -->
                        </li>                        
                    
                </ul>
            </div>
        </div>       
               


</div></div></div></div></section><section id="skills" class="vc_row section-wrapper vc_custom_1467136246705 vc_row-has-fill"><div class="container"><div class="row"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper">
    <div class="section-intro  text-center  vc_custom_1465201911551">
        <h2 style="color:#ffffff" class="section-title wow fadeInUp">Skills</h2>

                
        
        
    </div> <!-- .section-intro -->

<div class="vc_row wpb_row vc_inner vc_row-fluid vc_row-o-content-middle vc_row-flex"><div class="wpb_column vc_column_container vc_col-sm-6"><div class="vc_column-inner "><div class="wpb_wrapper"><div class="vc_progress_bar wpb_content_element  vc_progress-bar-color-bar_grey"><div class="vc_general vc_single_bar"><small class="vc_label">UX Design <span class="vc_label_units">80%</span></small><span class="vc_bar " data-percentage-value="80" data-value="80" style="background-color: #68c3a3;"></span></div><div class="vc_general vc_single_bar"><small class="vc_label">UI designing <span class="vc_label_units">85%</span></small><span class="vc_bar " data-percentage-value="85" data-value="85" style="background-color: #68c3a3;"></span></div><div class="vc_general vc_single_bar"><small class="vc_label">Python <span class="vc_label_units">45%</span></small><span class="vc_bar " data-percentage-value="45" data-value="45" style="background-color: #68c3a3;"></span></div></div></div></div></div><div class="wpb_column vc_column_container vc_col-sm-6"><div class="vc_column-inner "><div class="wpb_wrapper"><div class="vc_progress_bar wpb_content_element"><div class="vc_general vc_single_bar"><small class="vc_label">Mysql Database <span class="vc_label_units">90%</span></small><span class="vc_bar " data-percentage-value="90" data-value="90" style="background-color: #68c3a3;"></span></div><div class="vc_general vc_single_bar"><small class="vc_label">PHP <span class="vc_label_units">80%</span></small><span class="vc_bar " data-percentage-value="80" data-value="80" style="background-color: #68c3a3;"></span></div><div class="vc_general vc_single_bar"><small class="vc_label">Machine Learning <span class="vc_label_units">10%</span></small><span class="vc_bar " data-percentage-value="10" data-value="10" style="background-color:#68c3a3;"></span></div></div></div></div></div></div><h4 style="font-size: 24px;color: #ffffff;line-height: 24px;text-align: center;font-family:Roboto;font-weight:700;font-style:normal" class="vc_custom_heading vc_custom_1465202259125">MORE SKILLS</h4><div class="vc_row wpb_row vc_inner vc_row-fluid"><div class="wpb_column vc_column_container vc_col-sm-2"><div class="vc_column-inner "><div class="wpb_wrapper"><div class= "vc_pie_chart wpb_content_element" data-pie-value="90" data-pie-label-value="90" data-pie-units="%" data-pie-color="#68c3a2"><div class="wpb_wrapper"><div class="vc_pie_wrapper"><span class="vc_pie_chart_back" style="border-color: #68c3a2"></span><span class="vc_pie_chart_value"></span><canvas width="101" height="101"></canvas></div><h4 class="wpb_heading wpb_pie_chart_heading">Leadership</h4></div></div></div></div></div><div class="wpb_column vc_column_container vc_col-sm-2"><div class="vc_column-inner "><div class="wpb_wrapper"><div class= "vc_pie_chart wpb_content_element" data-pie-value="75" data-pie-label-value="75" data-pie-units="%" data-pie-color="#68c3a2"><div class="wpb_wrapper"><div class="vc_pie_wrapper"><span class="vc_pie_chart_back" style="border-color: #68c3a2"></span><span class="vc_pie_chart_value"></span><canvas width="101" height="101"></canvas></div><h4 class="wpb_heading wpb_pie_chart_heading">Creativity</h4></div></div></div></div></div><div class="wpb_column vc_column_container vc_col-sm-2"><div class="vc_column-inner "><div class="wpb_wrapper"><div class= "vc_pie_chart wpb_content_element" data-pie-value="80" data-pie-label-value="80" data-pie-units="%" data-pie-color="#68c3a2"><div class="wpb_wrapper"><div class="vc_pie_wrapper"><span class="vc_pie_chart_back" style="border-color: #68c3a2"></span><span class="vc_pie_chart_value"></span><canvas width="101" height="101"></canvas></div><h4 class="wpb_heading wpb_pie_chart_heading">Management</h4></div></div></div></div></div><div class="wpb_column vc_column_container vc_col-sm-2"><div class="vc_column-inner "><div class="wpb_wrapper"><div class= "vc_pie_chart wpb_content_element" data-pie-value="70" data-pie-label-value="70" data-pie-units="%" data-pie-color="#68c3a2"><div class="wpb_wrapper"><div class="vc_pie_wrapper"><span class="vc_pie_chart_back" style="border-color: #68c3a2"></span><span class="vc_pie_chart_value"></span><canvas width="101" height="101"></canvas></div><h4 class="wpb_heading wpb_pie_chart_heading">Branding</h4></div></div></div></div></div><div class="wpb_column vc_column_container vc_col-sm-2"><div class="vc_column-inner "><div class="wpb_wrapper"><div class= "vc_pie_chart wpb_content_element" data-pie-value="65" data-pie-label-value="65" data-pie-units="%" data-pie-color="#68c3a2"><div class="wpb_wrapper"><div class="vc_pie_wrapper"><span class="vc_pie_chart_back" style="border-color: #68c3a2"></span><span class="vc_pie_chart_value"></span><canvas width="101" height="101"></canvas></div><h4 class="wpb_heading wpb_pie_chart_heading">Marketing</h4></div></div></div></div></div>

</div></div></div></div></section><section data-vc-parallax="1.5" data-vc-parallax-image="http://104.131.177.38/demo/wp/iamx/wp-content/uploads/2015/11/counter-bg.jpg" class="vc_row section-wrapper vc_row-has-fill vc_general vc_parallax vc_parallax-content-moving">

	</div></div></div></div></section><section data-vc-parallax="1.5" data-vc-parallax-image="http://104.131.177.38/demo/wp/iamx/wp-content/uploads/2015/11/hire-bg-1.jpg" class="vc_row section-wrapper vc_custom_1465280214674 vc_row-has-fill vc_row-o-content-middle vc_row-flex vc_general vc_parallax vc_parallax-content-moving"><div class="tt-overlay" style="background-color: rgba(104,195,163,0.7)"></div><div class="container"><div class="row"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper"><h2 style="font-size: 36px;color: #ffffff;text-align: center" class="vc_custom_heading vc_custom_1460352398196">I'm available for freelance project</h2><div class="vc_btn3-container vc_btn3-center"><a class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-rounded vc_btn3-style-outline vc_btn3-color-white" href="#contact" title="" target="_self">GET HIRED</a></div>
</div></div></div></div></section><section id="contact" class="vc_row section-wrapper vc_custom_1467136533390"><div class="container"><div class="row"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper">
    <div class="section-intro  text-center  vc_custom_1460353252369" id="cont">
        <h2 style="" class="section-title wow fadeInUp">Get in touch</h2>

                
        
        
    </div> <!-- .section-intro -->
    <?php 
        if(isset($_GET) && !empty($_GET)){ $alert = $_GET['success']; if ($alert == "yes"){ ?>
            <div class="alert alert-success">
                <strong>Message Sent!</strong> <!--
            --></div>
            
        <?php
        }}
    ?>
<div class="vc_row wpb_row vc_inner vc_row-fluid contact-section"><div class="wpb_column vc_column_container vc_col-sm-6"><div class="vc_column-inner "><div class="wpb_wrapper"><h3 style="font-size: 14px;line-height: 28px;text-align: left" class="vc_custom_heading vc_custom_1464627285804">SEND ME A MESSAGE</h3><div role="form" class="wpcf7" id="wpcf7-f3297-p2320-o1" lang="en-US" dir="ltr">
<div class="screen-reader-response"></div>    

<form action="mail_contact.php" method="post" class="wpcf7-form">


<div class="form-group">
      <label>Name</label><br />
      <span class="wpcf7-form-control-wrap text-129"><input type="text" name="name" value="" size="40" required = "required" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control" id="required" aria-required="true" aria-invalid="false"/></span>
    </div>
<div class="form-group">
      <label>Email</label><br />
      <span class="wpcf7-form-control-wrap email-459"><input type="email" name="email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-email form-control" id="email" aria-invalid="false" required/></span>
    </div>
<div class="form-group">
      <label>Subject</label><br />
      <span class="wpcf7-form-control-wrap text-130"><input type="text" name="sub" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control" id="subject" aria-required="true" aria-invalid="false" required/></span>
    </div>
<div class="form-group">
      <label>Message</label><br />
      <span class="wpcf7-form-control-wrap textarea-962"><textarea name="msg" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea form-control" id="message" aria-invalid="false" required></textarea></span>
    </div>
<p><input type="submit" value="Send Message" class="wpcf7-form-control wpcf7-submit btn btn-primary" /></p>
<div class="wpcf7-response-output wpcf7-display-none"></div></form> 
                </div></div></div></div><div class="wpb_column vc_column_container vc_col-sm-6"><div class="vc_column-inner "><div class="wpb_wrapper">
	<div class="wpb_raw_code wpb_content_element wpb_raw_html">
		<div class="wpb_wrapper">
			            <div class="row center-xs">
              <div class="col-sm-6">
                <i class="fa fa-map-marker"></i>
                <address> 
                  <strong>House No. 270></strong>
                  Sector-28, Gurugram,<br>
                  Haryana, India<br>
                </address>
              </div>

              <div class="col-sm-6">
                <i class="fa fa-mobile"></i>
                <div class="contact-number">
                  <strong>Phone Number</strong><br>
                  (+91) 7355165949
                </div>
              </div>
            </div>
		</div>
	</div>
    <div class="location-map ">
        <!--<div id="map" style="width:100%; height:100%">-->
        <div id="map"></div>

    </div> <!-- .tt-map-wrapper -->

</div></div></div></div></div></div></div></div></section>

		

			<!-- Footer Section -->
		    <footer class="footer-wrapper">
		      <div class="container">
		        <div class="row">
		          <div class="col-md-12">
					<div class="copyright text-center">
			        
					            
						            &copy; codeshri 2018. All rights reserved.					            

			        					</div>
		          </div>
		        </div>
		      </div>
		    </footer><!-- End Footer Section -->        

<link rel='stylesheet' id='vc_google_fonts_roboto100100italic300300italicregularitalic500500italic700700italic900900italic-css'  href='//fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C300%2C300italic%2Cregular%2Citalic%2C500%2C500italic%2C700%2C700italic%2C900%2C900italic&#038;ver=4.4.15' type='text/css' media='all' />
<link rel='stylesheet' id='vc_google_fonts_abril_fatfaceregular-css'  href='//fonts.googleapis.com/css?family=Abril+Fatface%3Aregular&#038;ver=4.4.15' type='text/css' media='all' />
<script type='text/javascript' src='http://104.131.177.38/demo/wp/iamx/wp-content/plugins/contact-form-7/includes/js/jquery.form.min.js?ver=3.51.0-2014.06.20'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var _wpcf7 = {"loaderUrl":"http:\/\/104.131.177.38\/demo\/wp\/iamx\/wp-content\/plugins\/contact-form-7\/images\/ajax-loader.gif","recaptchaEmpty":"Please verify that you are not a robot.","sending":"Sending ..."};
/* ]]> */
</script>
<!--<script type='text/javascript' src='http://104.131.177.38/demo/wp/iamx/wp-content/plugins/contact-form-7/includes/js/scripts.js?ver=4.4.2'></script>-->
<script type='text/javascript' src='http://104.131.177.38/demo/wp/iamx/wp-content/themes/iamx/js/bootstrap.min.js?ver=3.3.6'></script>
<script type='text/javascript' src='http://104.131.177.38/demo/wp/iamx/wp-content/themes/iamx/js/owl.carousel.min.js'></script>
<!--<script type='text/javascript' src='http://maps.googleapis.com/maps/api/js?sensor=false'></script>-->
<script type='text/javascript' src='http://104.131.177.38/demo/wp/iamx/wp-content/themes/iamx/js/jquery.countTo.min.js'></script>
<script type='text/javascript' src='http://104.131.177.38/demo/wp/iamx/wp-content/themes/iamx/js/coundown-timer.min.js'></script>
<script type='text/javascript' src='http://104.131.177.38/demo/wp/iamx/wp-content/themes/iamx/js/jquery.shuffle.min.js'></script>
<script type='text/javascript' src='http://104.131.177.38/demo/wp/iamx/wp-content/themes/iamx/js/smoothscroll.min.js'></script>
<script type='text/javascript' src='http://104.131.177.38/demo/wp/iamx/wp-content/themes/iamx/js/jquery.inview.min.js'></script>
<script type='text/javascript' src='http://104.131.177.38/demo/wp/iamx/wp-content/themes/iamx/js/jquery.easing.min.js'></script>
<script type='text/javascript' src='http://104.131.177.38/demo/wp/iamx/wp-content/themes/iamx/js/jquery.sticky.js'></script>
<script type='text/javascript' src='http://104.131.177.38/demo/wp/iamx/wp-content/themes/iamx/js/magnific-popup.min.js'></script>
<script type='text/javascript' src='http://104.131.177.38/demo/wp/iamx/wp-content/themes/iamx/js/jquery.stellar.min.js'></script>
<script type='text/javascript' src='http://104.131.177.38/demo/wp/iamx/wp-content/themes/iamx/js/jquery.placeholder.min.js'></script>
<script type='text/javascript' src='http://104.131.177.38/demo/wp/iamx/wp-content/themes/iamx/js/retina.min.js'></script>
<script type='text/javascript' src='http://104.131.177.38/demo/wp/iamx/wp-content/themes/iamx/js/scripts.js'></script>
<script type='text/javascript' src='http://104.131.177.38/demo/wp/iamx/wp-includes/js/wp-embed.js?ver=4.4.15'></script>
<script type='text/javascript' src='http://104.131.177.38/demo/wp/iamx/wp-content/plugins/js_composer/assets/js/dist/js_composer_front.min.js?ver=4.9.2'></script>
<script type='text/javascript' src='http://104.131.177.38/demo/wp/iamx/wp-content/plugins/js_composer/assets/lib/waypoints/waypoints.min.js?ver=4.9.2'></script>
<script type='text/javascript' src='http://104.131.177.38/demo/wp/iamx/wp-content/plugins/js_composer/assets/lib/bower/progress-circle/ProgressCircle.min.js?ver=4.9.2'></script>
<script type='text/javascript' src='http://104.131.177.38/demo/wp/iamx/wp-content/plugins/js_composer/assets/lib/vc_chart/jquery.vc_chart.min.js?ver=4.9.2'></script>
<script type='text/javascript' src='http://104.131.177.38/demo/wp/iamx/wp-content/plugins/js_composer/assets/lib/bower/skrollr/dist/skrollr.min.js?ver=4.9.2'></script>
<!--<script src="https://maps.googleapis.com/maps/api/js?callback=myMap"></script>-->
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD_SmqQjhmrtCIkjeWk6jpp_3ogg7b0CQs&callback=initMap"
  type="text/javascript"></script>
<script>
      function initMap() {
        var myLatLng = {lat: 28.464650, lng: 77.062896};
        
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 12,
          center: myLatLng
        });

        var marker = new google.maps.Marker({
          position: myLatLng,
          map: map,
          title: ''
        });
      }
    </script>
   <?php 
        if(isset($_GET) && !empty($_GET)){ $alert = $_GET['success']; if ($alert == "yes"){ ?>
            <script type="text/javascript">
                  function pageRedirect() {
                    window.location.replace("http://codeshri.com/");
                }      
                setTimeout("pageRedirect()", 2000);
            </script>
            
        <?php
        }}
    ?>
</body>
</html>

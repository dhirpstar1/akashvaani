<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta charset="utf-8">
 	<title>
		<?php 
			if (!empty($is_blog)) :
				echo $CI->fuel->blog->page_title($page_title, ' : ', 'right');
			else:
				echo fuel_var('page_title', '');
			endif;
		?>
	</title>
<meta name="keywords" content="<?php echo fuel_var('meta_keywords')?>">
<meta name="description" content="<?php echo fuel_var('meta_description')?>">
<meta name="geo.region" content="India"/>
<meta name="robots" content="index,follow"/>
<meta name="googlebot" content="index, follow" />
<meta name="language" content="en-US">
<meta name="country" content="India"/>
<meta name="robots" content="ALL"/>
<meta name="msvalidate.01" content="44581133950047FAEB6B6201B2EF18FF" />
	<link href='http://fonts.googleapis.com/css?family=Raleway:400,700' rel='stylesheet' type='text/css'>
	<?php
		echo css('main').css($css);

		if (!empty($is_blog)):
			echo $CI->fuel->blog->header();
		endif;
	?>
	<?=jquery()?>
    <meta name="google-site-verification" content="SBJad0qFCxtpsFUfsMwGdtlflYMVpl8jbQU5-q0IO2M" />
   <!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '805177916291950');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=805177916291950&ev=PageView&noscript=1"
/></noscript>
<!-- DO NOT MODIFY -->
<!-- End Facebook Pixel Code -->
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5TDFNQ');</script>
<!-- End Google Tag Manager -->
</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5TDFNQ"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
	
	<div class="page">
		<div class="wrapper">
			<header class="page_header">
				<h1><?php echo fuel_var('heading')?></h1>
			</header>		
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title>

<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats -->

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<script src="<?php bloginfo('stylesheet_directory'); ?>/SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<link href="<?php bloginfo('stylesheet_directory'); ?>/SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />

<?php wp_head(); ?>
</head>

<body>

<div id="topcell">
	&nbsp;
</div>

<div id="content">		
				
	<!-- This table contains the banner & the menu strip -->
	<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
		<tr align="center">
			<td>
				<img src="<?php bloginfo('stylesheet_directory'); ?>/images/banner1.jpg" width="941" height="139" />
			</td>
		</tr>
		<tr bgcolor="#F1F1F1">
			<td align="center">
				<ul id="MenuBar1" class="MenuBarHorizontal">
					<li><a href="<?php echo get_option('home'); ?>/" class="on">Home</a></li> 
					<?php wp_list_pages('exclude=45&title_li='); ?>
				</ul>
				
				<div class="searchbox">
				<form id="searchform" method="get" action="<?php bloginfo('siteurl')?>/">
					Search:
                    <input type="text" name="s" id="s" class="textbox" value="<?php echo wp_specialchars($s, 1); ?>" />
                    <input id="btnSearch" type="submit" name="submit" value="<?php _e('Go'); ?>" />
                </form>
                </div>

		</tr>
	</table>
	<!-- End of banner & menu strip -->


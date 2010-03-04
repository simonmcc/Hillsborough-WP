<?php get_header(); ?>
    <div id="page">
    
    <?php
	if ( is_front_page() ) {
		//echo "is fp";
	} else {
	    // This is not a homepage/frontage
	    //echo "this is not fp";
	}
	?>
	
      
	<?php while (have_posts()) : the_post(); ?>
		<div class="post-fw">
			<?php
				if ( is_front_page() ) {
					//echo "is fp";
				} else {
				    // This is not a homepage/frontage
				    ?>
				    <div class="date"><?php the_time('D jS M Y') ?>&nbsp;</div>
					<div class="titletxt">&nbsp;<?php the_title(); ?></div>
					<br>
					<?php
				}
			?>
			<div><?php the_content('Read the rest of this entry &raquo;'); ?></div>
		</div>
	<?php endwhile; ?>
	
	<div id="footercell"><p>St. Malachy's Pariish Church, Hillsborough, Co. Down. 2010</div>
	</div>
							
		
<?php get_footer(); ?>

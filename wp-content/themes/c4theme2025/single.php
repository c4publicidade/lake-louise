	<?php

	get_header('single'); ?>

	<section class="page">
		<div class="container wrapper">
			<div class="row">
				<div class="">
					<img src="" alt="Banner Informativo" class="">
				</div>  
			</div>  
			<h1><?php the_title(); ?> </h1>
			<?php if (have_posts()) :?>
			<?php  while ( have_posts() ) : the_post();  ?>
				<div class="">
					<?php the_content();?>
				</div>  
				<hr>
			<?php endwhile; ?>
			<?php endif; wp_reset_query();?>
		</div>  
	</section>
	
	<?php

	get_footer();
	?>
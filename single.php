<?php 

get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
		<article id="content">
			<header>
				<h1>
					<?php the_title(); ?>
				</h1>
			</header>
			<?php the_content(); ?>
		</article>
	<?php endwhile; ?>
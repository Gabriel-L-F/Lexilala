<?php
get_header();
?>

<section class="container">
	<h1>
		<?php the_title();?>
	</h1>
	<div>
		<?php the_content();?>
	</div>
	<div>
		<?php the_field('lieu_de_tournage');?>
	</div>
</section>

<?php
get_footer();
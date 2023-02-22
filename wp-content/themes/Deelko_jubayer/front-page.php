	<?php get_header(); ?>

	<!-- Banner -->
	<section id="banner">
	<header>
	<h2>Howdy. This is Dopetrope.</h2>
	<p>A responsive template by HTML5 UP</p>
	</header>
	</section>

	<!-- Intro -->
	<div class="row home-intro">
	<section id="intro" class="container">
	<div class="row">
	<div class="col-4 col-12-medium">
	<section class="first">
	<i class="icon solid featured fa-cog"></i>
	<header>
	<h2>Ipsum consequat</h2>
	</header>
	<p>Nisl amet dolor sit ipsum veroeros sed blandit consequat veroeros et magna tempus.</p>
	</section>
	</div>
	<div class="col-4 col-12-medium">
	<section class="middle">
	<i class="icon solid featured alt fa-bolt"></i>
	<header>
	<h2>Magna etiam dolor</h2>
	</header>
	<p>Nisl amet dolor sit ipsum veroeros sed blandit consequat veroeros et magna tempus.</p>
	</section>
	</div>
	<div class="col-4 col-12-medium">
	<section class="last">
	<i class="icon solid featured alt2 fa-star"></i>
	<header>
	<h2>Tempus adipiscing</h2>
	</header>
	<p>Nisl amet dolor sit ipsum veroeros sed blandit consequat veroeros et magna tempus.</p>
	</section>
	</div>
	</div>
	<footer>
	<ul class="actions">
	<li><a href="#" class="button large">Get Started</a></li>
	<li><a href="#" class="button alt large">Learn More</a></li>
	</ul>
	</footer>
	</section>
	</div>


	<!-- Main -->
	<section id="main">
	<div class="container">
	<div class="row">
	<div class="col-12">

	<!-- Portfolio -->
	<section>
	<header class="major">
	<h2>My Portfolio</h2>
	</header>
	<div class="row">
		<?php 
		$portfolio_args = array(
			'post_type'      => 'portfolio',
			'posts_per_page' => 6
		);

		$portfolio_post = new WP_Query($portfolio_args);

		while($portfolio_post->have_posts()){
			$portfolio_post->the_post()
	
		?>
	<div class="col-4 col-6-medium col-12-small">
		<section class="box">
			<a href="<?php the_permalink()?>" class="image featured">
				<?php the_post_thumbnail() ?>
			</a>
			<header>
				<h3><?php the_title()?></h3>
			</header>
			<?php the_excerpt() ?>
			<footer>
				<ul class="actions">
					<li><a href="<?php the_permalink()?>" class="button alt">Find out more</a></li>
				</ul>
			</footer>
		</section>
	</div>
	<?php 	} ?>
	<?php wp_reset_postdata() ?>
	
	</div>
	</section>

	</div>
	<div class="col-12">

	<!-- Blog -->
	<section>
	<header class="major">
	<h2>The Blog</h2>
	</header>
	<div class="row">
		<?php 
			$blog_args = array(
				'post_type'      => 'post',
				'posts_per_page' => 2
			);

			$blog_post = new WP_Query($blog_args);

			while($blog_post->have_posts(  )){
				$blog_post->the_post(  )
			
		?>
	<div class="col-6 col-12-small">
		<section class="box">
			<a href="<?php the_permalink( ) ?>" class="image featured">
				<?php the_post_thumbnail( 'home-featured' ) ?>
			</a>
			<header>
				<h3><?php the_title( ) ?></h3>
				<p>Posted on <?php the_date( ) ?> at <?php the_time( ) ?> </p>
			</header>
			<?php the_excerpt( ) ?>
			<footer>
				<ul class="actions">
					<li><a href="<?php the_permalink( ) ?>" class="button icon solid fa-file-alt">Continue Reading</a></li>
					<li><a href="<?php the_comment(  ) ?>" class="button alt icon solid fa-comment"><?php echo get_comments_number( )?></a></li>
				</ul>
			</footer>
		</section>
	</div>
	<?php } ?>

	</div>
	</section>

	</div>
	</div>
	</div>
	</section>

	<?php get_footer(); ?>

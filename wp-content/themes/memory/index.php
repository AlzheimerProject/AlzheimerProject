<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Memory
 */

get_header();
?>

<main id="primary" class="site-main">
	<section id="header-main">
		<div>
			<h1>Give the elders a chance</h1>
			<p>Welcome to Memory, we are here to fight for a world without Alzheimer's. </p>
			<p>With your donations and experiences, we will be able to achieve this. </p>
		</div>
	</section>
	<section id="experiences-main">
		<h2>Experiences</h2>
		<ul>
			<?php
			while (have_posts()) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				// get_template_part('template-parts/content', get_post_type());
			?>
				<li>
					<section class="one-experience">
						<article class="img-experience">
							<?php
							memory_post_thumbnail();
							?>
							<!-- <img src="http://localhost/AlzheimerProject/wp-content/uploads/2021/12/title-1576680650.jpg" alt=""> -->
						</article>
						<article class="txt-experience">
							<?php
							the_title('<h5>', '</h5>');
							the_content(
								sprintf(
									wp_kses(
										/* translators: %s: Name of current post. Only visible to screen readers */
										__('Continue reading<span class="screen-reader-text"> "%s"</span>', 'memory'),
										array(
											'span' => array(
												'class' => array(),
											),
										)
									),
									wp_kses_post(get_the_title())
								)
							);
							?>
							<!-- <h5>Christine, 64 years old.</h5> -->
							<!-- <p>
								Hello, my name is Christine and I discovered last month while going for exams
								that a form of Alzheimer's developed in my brain ...
							</p> -->
							<form action="<?php echo esc_url(get_permalink()) ?>">
								<button class="see-more-btn" type="submit">
									See more
								</button>
							</form>
						</article>
					</section>
				</li>
			<?php

			endwhile; ?>
		</ul>
	</section>
	<section id="donation-main">
		<article class="donation-txt">
			<h2>Donation</h2>
			<p>Many families and old people need you.</p>
			<p>
				So don't wait any longer, donate now to help our researchers make progress against the disease.
				So don't wait any longer, donate now to help our researchers make progress against the disease.
			</p>
			<button>Donate</button>
		</article>
		<article><img src="http://localhost/AlzheimerProject/wp-content/uploads/2021/12/old_n_young.png" alt=""></article>

	</section>

	<!-- <?php
			// if (have_posts()) :

			// 	if (is_home() && !is_front_page()) :
			?>
			<header>
				<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
			</header>
	<?php
	// 	endif;

	// 	/* Start the Loop */
	// 	while (have_posts()) :
	// 		the_post();

	// 		/*
	// 			 * Include the Post-Type-specific template for the content.
	// 			 * If you want to override this in a child theme, then include a file
	// 			 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
	// 			 */
	// 		get_template_part('template-parts/content', get_post_type());

	// 	endwhile;

	// 	the_posts_navigation();

	// else :

	// 	get_template_part('template-parts/content', 'none');

	// endif;
	?> -->

</main><!-- #main -->

<?php
// get_sidebar();
get_footer();

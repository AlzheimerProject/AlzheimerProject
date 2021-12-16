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
										__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'memory' ),
										array(
											'span' => array(
												'class' => array(),
											),
										)
									),
									wp_kses_post( get_the_title() )
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
			<!-- <li>
				<section class="one-experience">
					<article class="img-experience">
						<img src="http://localhost/AlzheimerProject/wp-content/uploads/2021/12/title-1576680650.jpg" alt="">
					</article>
					<article class="txt-experience">
						<h5>Christine, 64 years old.</h5>
						<p>
							Hello, my name is Christine and I discovered last month while going for exams
							that a form of Alzheimer's developed in my brain ...
						</p>
						<button class="see-more-btn" type="submit">
							See more
						</button>
					</article>
				</section>
			</li> -->
			<!-- <li>
				<section class="one-experience">
					<article class="img-experience">
						<img src="http://localhost/AlzheimerProject/wp-content/uploads/2021/12/three-great-reasons-why-older-is-better.jpg" alt="">
					</article>
					<article class="txt-experience">
						<h5>Nicolas, 75 years old.</h5>
						<p>
							Hi, it's Nicolas! First post I made on this site that I discovered
							thanks to the posts on facebook. I was diagnosed 5 years ago and I will
							tell you how I gradually regained my memory.
						</p>
						<button class="see-more-btn" type="submit">
							See more
						</button>


					</article>
				</section>
			</li> -->
			<!-- <li>
				<section class="one-experience">
					<article class="img-experience">
						<img src="http://localhost/AlzheimerProject/wp-content/uploads/2021/12/vieux-beau.jpeg" alt="">
					</article>
					<article class="txt-experience">
						<h5>John, 67 years old.</h5>
						<p>
							My name is John and I have just had terrible news, my condition
							is getting worse and I have just passed into an advanced stage
							of the disease.
						</p>
						<button class="see-more-btn" type="submit">
							See more
						</button>
					</article>
				</section>
			</li> -->
		</ul>
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

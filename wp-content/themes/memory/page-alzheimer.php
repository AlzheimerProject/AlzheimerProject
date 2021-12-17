<?php

get_header();
?>

<main id="primary" class="site-main">
	<h1><?php the_title() ?></h1>
	<section id="alz-description">
		<h2>Description</h2>
		<article class="left-part">
			<p>
				Alzheimer's disease is a brain disorder that slowly destroys memory and thinking skills and, eventually,
				the ability to carry out the simplest tasks. Alzheimer's is the most common cause of dementia, a general
				term for memory loss and other cognitive abilities serious enough to interfere with daily life. Alzheimer's
				worsens over time. Alzheimer's is a progressive disease, where dementia symptoms gradually worsen over a number
				of years. In its early stages, memory loss is mild, but with late-stage Alzheimer's, individuals lose the
				ability to carry on a conversation and respond to their environment. On average, a person with Alzheimer's
				lives 4 to 8 years after diagnosis but can live as long as 20 years, depending on other factors. Alzheimer's
				has no cure, but one treatment — aducanumab (Aduhelm™) — is the first therapy to demonstrate that removing
				amyloid, one of the hallmarks of Alzheimer’s disease, from the brain is reasonably likely to reduce cognitive
				and functional decline in people living with early Alzheimer’s. Other treatments can temporarily slow the
				worsening of dementia symptoms and improve quality of life for those with Alzheimer's and their caregivers.
				Today, there is a worldwide effort underway to find better ways to treat the disease and prevent it from developing.
			</p>

		</article>
		<article  class="right-part"><img src="http://localhost/AlzheimerProject/wp-content/uploads/2021/12/brain.png" alt=""></article>
	</section>
	<section id="alz-profil">
		<h2>Profil</h2>
		<article class="left-part">
			<img src="http://localhost/AlzheimerProject/wp-content/uploads/2021/12/old_woman.png" alt="">
		</article>
		<article  class="right-part">
			<p>
				Martine will soon be turning 70. She has been living alone for 5 years now because she lost her husband.
				For her, the days are all starting to look the same and she begins to have trouble remembering her memories,
				far as near in time. Martine doesn't know it yet, but she's starting to develop a form of alzeihmer.
			</p>
			<p>
				Indeed, many elderly people, approaching 60 years of life begin to contract Alzheimer's. The most
				identifiable risk factor is age, and the majority of people with Alzheimer's are 65 years of age or older.
				It can suppress us when we do not expect it, a forgotten memory, an unknown close face, memories etc...
			</p>
			<p>
				However, some people can get the disease much earlier. Alzheimer’s disease is considered to be
				younger-onset Alzheimer’s if it affects a person under 65. Younger-onset can also be referred to as
				early-onset Alzheimer’s. People with younger-onset Alzheimer’s can be in the early, middle or late stage
				of the disease.
			</p>

		</article>
	</section>
	<section id="alz-statistics">
		<h2>Statistics</h2>
		<article class="left-part">
			<ul>
				<li>
					In France: Alzheimer's disease is the leading cause of dementia: 60 to 70% of cases.
					Around 900,000 patients.
				</li>
				<li>2.1 million patients estimated in 2040 (among those over 65)</li>
				<li>Women are more affected than men.</li>
				<li>The most affected age group is the 75+.</li>
				<li>There is a much larger number of cases of disease in the USA.</li>
				<li>1/10 people over 65 are diagnosed with the disease.</li>
			</ul>

		</article>
		<article  class="right-part"><img src="http://localhost/AlzheimerProject/wp-content/uploads/2021/12/stats.png" alt=""></article>
	</section>

	<?php
	// while (have_posts()) :
	// 	the_post();

	// 	get_template_part('template-parts/content', 'page');

	// 	// If comments are open or we have at least one comment, load up the comment template.
	// 	// if (comments_open() || get_comments_number()) :
	// 	// 	comments_template();
	// 	// endif;

	// endwhile; // End of the loop.
	?>

</main><!-- #main -->

<?php
// get_sidebar();
get_footer();

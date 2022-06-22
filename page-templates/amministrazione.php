<?php
/* Template Name: amministrazione
 *
 * amministrazione template file
 *
 * @package Design_Scuole_Italia
 */
global $post;
get_header();

?>
	<main>
		<?php
		while ( have_posts() ) :
			the_post();

			$description = dci_get_meta('descrizione','_dci_page_',$post->ID);
			?>
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-12 col-lg-10">
						<?php get_template_part("template-parts/common/breadcrumb"); ?>
						<div class="cmp-hero">
							<section class="it-hero-wrapper bg-white align-items-start">
								<div class="it-hero-text-wrapper pt-0 ps-0 pb-4 pb-lg-60">
								<h1 class="text-black title-xxxlarge mb-2">
									Amministrazione
								</h1>
								<p class="text-black titillium text-paragraph">
									<?php echo $description; ?>
								</p>
								</div>
							</section>
						</div>
					</div>
				</div>	
			</div>
			<?php get_template_part("template-parts/amministrazione/evidenza"); ?>
			<?php get_template_part("template-parts/amministrazione/cards-list"); ?>
			<?php get_template_part("template-parts/common/assistenza-contatti"); ?>
							
		<?php 
			endwhile; // End of the loop.
		?>
	</main>

<?php
get_footer();




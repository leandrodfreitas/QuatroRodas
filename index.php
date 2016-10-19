		<?php get_header() ?>
		<section class="banner-wrap">			
			<div class="container">		
				<div class="row">
					<div class="banner-large">						
						<?php query_posts('category_name=BannerGd'); ?>
						<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
							<a href="<?php the_permalink(); ?>" class="banner-large__action">
								<figure class="banner-large__media">
									<?php the_post_thumbnail(); ?>
									<figcaption class="title-area">
										<p class="bullet"><i class="icon" data-icon="b"></i><?php the_field('subtitulo'); ?></p>
										<h1><?php the_title(); ?></h1>
									</figcaption>	
								</figure>
							</a>
						<?php endwhile; else: ?>
						<?php endif; ?>
					</div>
					<div class="banner-small">
						<div class="row">						
							<?php query_posts('category_name=BannerPq&showposts=4'); ?>
							<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
								<a href="<?php the_permalink(); ?>" class="banner-small__action">
									<figure class="banner-small__media">
										<?php the_post_thumbnail(); ?>
										<figcaption class="title-area">
											<span class="bullet"><i class="icon" data-icon="b"></i><?php the_field('subtitulo')?></span>
											<h2><?php the_title(); ?></h2>
										</figcaption>	
									</figure>									
								</a>
							<?php endwhile; else: ?>
							<?php endif; ?>		
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="destaques-wrap">		
			<div class="container">
			   <div class="row">
            	<?php query_posts('category_name=DestaquesBottom&showposts=4'); ?>
					<?php if(have_posts()) : while(have_posts()) : the_post(); ?> 
						<div class="destaques-item">
							<a href="<?php the_permalink(); ?>" class="destaques-action-1">
								<figure class="destaques-media">
									<?php the_post_thumbnail(); ?>
									<figcaption class="bullet"><i class="icon" data-icon="b"></i><?php the_field('subtitulo')?></figcaption>	
								</figure>								
							</a>
							<h3 class="destaques-title"><?php the_title(); ?></h3>
							<p class="destaques-text"><?php echo excerpt('20'); ?></p>
							<a href="<?php the_permalink(); ?>" class="destaques-action-2">saiba mais</a>
						</div>  
               <?php endwhile; else: ?>
					<?php endif; ?>
			   </div>   
			</div>
		</section>		
		<?php get_footer() ?>
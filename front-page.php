<?php get_header(); ?>
	<div class="content-area space-lg">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<!-- retrieves a post/page, if any -->
					<?php $query = new WP_Query('cat=1&posts_per_page=3'); ?>	
					<?php if($query->have_posts()) : while($query->have_posts()) : $query->the_post(); ?>
						<div class="background-light-gray border space-outside-bottom">
							<div class="row">
								<div class="col-sm-4 space-none-right">
									<div class="wrap">
										<div class="inner">
											<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('custom', array('class'=>'')); ?></a>
										</div>
									</div>
								</div>
								<div class="col-sm-8 space-none-left">
									<div class="space-inner">
										<a href="<?php the_permalink(); ?>"><h3 class="text-capitalize"><?php the_title(); ?></h3></a>
										<p class="space-none"><?php echo get_the_excerpt(); ?></p>
									</div>
								</div>
							</div><!-- END ROW -->
						</div>
					<?php endwhile; ?>
					<?php else: ?>
					<?php endif; ?>
					<?php wp_reset_postdata(); ?>
				</div><!-- END COL -->
				<div class="col-md-6">
					<!-- retrieves a post/page, if any -->
					<?php $query = new WP_Query('cat=1&posts_per_page=3'); ?>	
					<?php if($query->have_posts()) : while($query->have_posts()) : $query->the_post(); ?>
						<div class="background-light-gray border space-outside-bottom">
							<div class="row">
								<div class="col-sm-4 space-none-right">
									<div class="wrap">
										<div class="inner">
											<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('custom', array('class'=>'')); ?></a>
										</div>
									</div>
								</div>
								<div class="col-sm-8 space-none-left">
									<div class="space-inner">
										<a href="<?php the_permalink(); ?>"><h3 class="text-capitalize"><?php the_title(); ?></h3></a>
										<p class="space-none"><?php echo get_the_excerpt(); ?></p>
									</div>
								</div>
							</div><!-- END ROW -->
						</div>
					<?php endwhile; ?>
					<?php else: ?>
					<?php endif; ?>
					<?php wp_reset_postdata(); ?>
				</div><!-- END COL -->
			</div><!-- END ROW -->
		</div><!-- END CONTAINER -->
	</div><!-- END CONTENT-AREA -->
<?php get_footer(); ?>
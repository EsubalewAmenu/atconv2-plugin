	<section class="theme-slide__wrapper">
		<app-post-teaser-banner class="background--dark theme-slide" data-scrollama-index="2">
			<header class="post-teaser-banner">
				<figure class="post-teaser-banner__crop">
					<app-loader _nghost-mvrdv-c13="" class="ng-tns-c13-5 ng-star-inserted">
						<!---->
					</app-loader><a href="<?php echo esc_url(get_permalink($section->ID)); ?>">
						<?php $src = wp_get_attachment_image_src(get_post_thumbnail_id($section->ID), 'thumbnail_size'); ?>
						<app-image loading="lazy" class="post-teaser-banner__image is--loaded ng-star-inserted" _nghost-mvrdv-c34="" style="--aspect-ratio: auto"><img _ngcontent-mvrdv-c34="" alt="Urbanism" src="<?php echo $src[0] ?>" sizes="auto" loading="lazy" />
							<!---->
						</app-image>
						<!---->
						<!---->
					</a>
				</figure>
				<a class="post-teaser-banner__content" href="<?php echo esc_url(get_permalink($section->ID)); ?>">
					<div class="post-teaser-banner__content__wrapper">
						<h1 class="post-teaser-banner__content__claim">
							<span class="post-teaser-banner__content__claim__span ng-star-inserted">
							<?php echo $section->post_title ?>
							</span>
						</h1>
						<div class="post-teaser-banner__content__text">
							<p>
								The city of the future is here. We believe in
								liveable cities, in smart, inclusive, and green
								urban life.
							</p>
						</div>
					</div>
				</a>
			</header>
		</app-post-teaser-banner>
		<ul class="theme-slide__list background--light" data-scrollama-index="3">
			<li class="theme-slide__list__item ng-star-inserted">
				<app-theme-teaser>
					<article class="post-teaser">
						<div class="post-teaser__heading">
							<h1 class="post-teaser__heading__title">
								<a href="<?php echo esc_url(get_permalink($section->ID)); ?>">
									<span class="ng-star-inserted">
										<?php echo get_post_meta($section->ID, 'ds_at_post_footer', true) ?>
								</a>
							</h1>
						</div>
						<a class="post-teaser__button ng-star-inserted" href="<?php echo esc_url(get_permalink($section->ID)); ?>">
							<app-icon><span class="icon is--icon-arrow"><svg class="icon-svg">
										<use xlink:href="/login_files/gfx/svg-sprite.svg#icon-arrow"></use>
									</svg></span></app-icon>
						</a>
						<!---->
					</article>
				</app-theme-teaser>
			</li>
			<!---->
		</ul>
	</section>
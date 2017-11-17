<?php theme_include('header-post'); ?>
		<section class="wrapper style1" id="article-<?php echo article_id(); ?>">
		<div class="inner">
		<header class="align-center">
		    <div class="breadcrumb">
			     <i class="fa fa-home" aria-hidden="true"></i> <a href="<?php echo base_url(); ?>">Home</a> <i class="fa fa-arrow-circle-right" aria-hidden="true"></i> <a href="<?php echo article_url(); ?>"><?php echo article_title(); ?></a>
			</div>
			<h2 id="parent"><?php echo article_title(); ?></h2>
		</header>
			<div class="post-1a">
			<div class="post-wrapper">
			<div class="align-center">
			<div class="post-one">
			<p>
			<?php if(article_custom_field('imgfiture','')!=""): ?>
				<div class="img-fiture">
					<img src="<?php echo article_custom_field('imgfiture',''); ?>" class="foto-artikel" alt="<?php echo article_title(); ?>" />
				</div>
<?php endif; ?>
			
			</p>
			<p>
			<?php echo article_markdown(); ?></p>
						<div class="bagikan">
			<div class="sharethis-inline-share-buttons"></div>
			<!--fb komen-->
                  <div class="fb-comments" data-href="https://apps.dedeanwarhidayat.com/web/" data-width="100%" data-numposts="5"></div>
              </p>
            </div>
			</div>
		<nav class="pagination">
			<div class="wrap">
				<div class="previous">
					<?php echo posts_prev(); ?>
				</div>
				<div class="next">
					<?php echo posts_next(); ?>
				</div>
			</div>
		</nav>
			</div>
			</div>
			</div>
			</div>
			</div>
		</section>
<?php theme_include('footer'); ?>

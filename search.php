<?php theme_include('header'); ?>
<div class="wrapper style1">
<div class="inner">
<h1 class="align-center">Hasil yang di temukan dari &ldquo;<?php echo search_term(); ?>&rdquo;.</h1>

<?php if(has_search_results()): ?>
	<ul class="items">
		<?php $i = 0; while(search_results()): $i++; ?>
		<li style="background: hsl(215,28%,<?php echo round((($i / posts_per_page()) * 20) + 20); ?>%);">
			<article class="wrap">
				<h2>
					<a href="<?php echo search_item_url(); ?>" title="<?php echo search_item_title(); ?>"><?php echo search_item_title(); ?></a>
				</h2>
			</article>
		</li>
		<?php endwhile; ?>
	</ul>

	<?php if(has_search_pagination()): ?>
	<nav class="pagination">
		<div class="wrap">
			<?php echo search_prev(); ?>
			<?php echo search_next(); ?>
		</div>
	</nav>
	<?php endif; ?>

<?php else: ?>
		<p class="align-center hasil">Opsss tidak ada satupun hasil dari &ldquo;<?php echo search_term(); ?>&rdquo;. Coba dengan kata lain...</p>
<?php endif; ?>
</div>
</div>
<?php theme_include('footer'); ?>
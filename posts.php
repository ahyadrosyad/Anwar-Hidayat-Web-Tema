<?php theme_include('header'); ?>

<div id="main">
			<!-- kedua -->
				<section class="wrapper style2" id="galeri">
					<div class="inner">
						<header>
							<h2>Info & Galeri</h2>
							<p>Informasi, Foto, & Video</p>
						</header>
						<!-- Section Kategori -->
							<div class="flex flex-tabs">
								<ul class="tab-list">
									<li><a href="#" data-tab="tab-1" class="active">Personal</a></li>
									<li><a href="#" data-tab="tab-2" id="berita">Berita Terbaru</a></li>
								</ul>
								<div class="tabs">

									<!-- Tab 1 -->
										<div class="tab tab-1 flex flex-3 active">
											<!-- Kategori -->
												<div class="video col rubrik">
													<div class="image fit">
														<img src="<?php echo theme_url('/img/blue.jpg'); ?>" alt="Anwar Hidayat" />
														<div class="arrow">
															<div class="ico profil"><p>Profil</p></div>
														</div>
													</div>
													<a href="//www.dedeanwarhidayat.com/biografi?utm_source=homepage&utm_medium=Bio" class="link" title="Lihat Profil Lengkap Anwar Hidayat"><h2 class="pro">Profil Lengkap</h2></a>
												</div>
											<!-- Artikel Thumbnail -->
												<div class="video col rubrik">
													<div class="image fit">
														<img src="<?php echo theme_url('/img/green.jpg'); ?>" alt="Anwar Hidayat" />
														<div class="arrow">
															<div class="ico"></div>
														</div>
													</div>
													<a href="//www.dedeanwarhidayat.com/posts/anwar-hidayat-dan-daftar-organisasi?utm_source=homepage&utm_medium=organisasi" class="link" title="Lihat Organisasi Anwar Hidayat"><h2 class="pro">Organisasi</h2></a>
												</div>
											<!-- Artikel Thumbnail -->
												<div class="video col rubrik">
													<div class="image fit">
														<img src="<?php echo theme_url('/img/yellow.jpg'); ?>" alt="Anwar Hidayat" />
														<div class="arrow">
															<div class="ico"></div>
														</div>
													</div>
													<a href="//www.dedeanwarhidayat.com/usaha-bisnis?utm_source=homepage&utm_medium=Bisnis" class="link" title="Lihat Usaha & Bisnis Anwar Hidayat"><h2 class="pro">Usaha & Bisnis</h2></a>
												</div>
											<!-- Artikel Thumbnail -->
												<div class="video col rubrik">
													<div class="image fit">
														<img src="<?php echo theme_url('/img/ungu.jpg'); ?>" alt="Anwar Hidayat" />
														<div class="arrow">
															<div class="ico"></div>
														</div>
													</div>
													<a href="//www.dedeanwarhidayat.com/quote-motivasi?utm_source=homepage&utm_medium=Motivasi" class="link" title="Lihat Quote dari Anwar Hidayat"><h2 class="pro">Quote & Motivasi</h2></a>
												</div>
											<!-- Artikel Thumbnail -->
												<div class="video col rubrik">
													<div class="image fit">
														<img src="<?php echo theme_url('/img/biru2.jpg'); ?>" alt="Anwar Hidayat" />
														<div class="arrow">
															<div class="ico"></div>
														</div>
													</div>
													<a href="//www.dedeanwarhidayat.com/pendapat?utm_source=homepage&utm_medium=Pendapat" class="link" title="Pendapat mereka tentang Anwar Hidayat"><h2 class="pro">Apa Kata Mereka</h2></a>
												</div>
											<!-- Artikel Thumbnail -->
												<div class="video col rubrik">
													<div class="image fit">
														<img src="<?php echo theme_url('/img/kuning2.jpg'); ?>" alt="Anwar Hidayat" />
														<div class="arrow">
															<div class="ico"></div>
														</div>
													</div>
													<a href="//www.dedeanwarhidayat.com/posts/materi-kuliah?utm_source=homepage&utm_medium=Mahasiswa" class="link" title="Informasi untuk Mahasiswa"><h2 class="pro">Materi Kuliah</h2></a>
												</div>
										</div>
<!--video langganan-->
<div class="info">
            <a href="https://www.dedeanwarhidayat.com/posts/materi-kuliah?utm_source=Homepage&utm_source=button" target="_blank" title="Download Aplikasi Anwar Hidayat"><img class="apps" src="https://www.dedeanwarhidayat.com/content/materi.jpg" alt="Materi Kuliah"/> <h6>INFO: Materi Perkuliahan</h6></a>
        </div>
									<!-- Tab 2 -->
										<div class="tab tab-2 flex flex-3">
											<!-- Video Thumbnail -->
												<div class="row">
											
												<?php posts(); ?>
							<div class="4u 12u$(medium) pre">
				<h3><a href="<?php echo article_url(); ?>?utm_source=Berita&utm_medium=Artikel" title="<?php echo article_title(); ?>"><?php echo article_title(); ?></a></h3>
				<p class="daftar">Ditulis oleh <?php echo article_author('real_name'); ?> pada <?php echo article_date(); ?></p>
				</div>
			<?php $i = 0; while(posts()): ?>
			<?php $bg = sprintf('background: hsl(215, 28%%, %d%%);', round(((++$i / posts_per_page()) * 20) + 20)); ?>
				<div class="4u 12u$(medium) pre">
					<h3><a href="<?php echo article_url(); ?>?utm_source=Berita_2&utm_medium=Artikel" title="<?php echo article_title(); ?>"><?php echo article_title(); ?></a></h3>
					<p class="daftar">Ditulis oleh <?php echo article_author('real_name'); ?> pada <?php echo article_date(); ?></p>
				</div>
			<?php endwhile; ?>
		<?php if(has_pagination()): ?>
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
		<?php else: ?>
		<div class="wrap">
			<h1>Tidak ada lagi</h1>
			<p>Tidak ada lagi yang ditampilkan</p>
		</div>
	<?php endif; ?>
												
													<!--/end post-->
								
										</div>
										</div>
								</div>
							</div>
					</div>
				</section>
            </div>

<!--end div main-->
<?php theme_include('footer'); ?>

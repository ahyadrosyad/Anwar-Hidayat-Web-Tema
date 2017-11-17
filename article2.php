<?php theme_include('header'); ?>
		<section class="wrapper style1" id="article-<?php echo article_id(); ?>">
		<div class="inner">
		<header class="align-center">
			<h2 id="parent"><?php echo article_title(); ?></h2>
		</header>
			<div class="video">
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
			<p><?php echo article_markdown(); ?></p>
			<section class="align-ceter">
				<!-- Unfortunately, CSS means everything's got to be inline. -->
				<p>This article is my <?php echo numeral(article_number(article_id()), true); ?> oldest. It is <?php echo count_words(article_markdown()); ?> words long<?php if(comments_open()): ?>, and it’s got <?php echo total_comments() . pluralise(total_comments(), ' comment'); ?> for now.<?php endif; ?> <?php echo article_custom_field('attribution'); ?></p>
			</section>
			</div>
			</div>
			</div>
			</div>
			</div>
		</section>
<div class="post-wrapper">
			<div class="align-center">
			<div class="post-one">
			<section class="align-ceter">
				<?php if(comments_open()): ?>
		<section class="comments">
			<?php if(has_comments()): ?>
			<ul class="commentlist">
				<?php $i = 0; while(comments()): $i++; ?>
				<li class="comment" id="comment-<?php echo comment_id(); ?>">
					<div class="wrap">
					<h4>Komentar</h4>
						<h5><?php echo comment_name(); ?></h5>
						<time><?php echo relative_time(comment_time()); ?></time>

						<div class="content">
							<?php echo htmlspecialchars(comment_text()); ?>
						</div>

						<span class="counter"><?php echo $i; ?></span>
					</div>
				</li>
				<?php endwhile; ?>
			</ul>
			<?php endif; ?>

			<form id="comment" class="commentform wrap" method="post" action="<?php echo comment_form_url(); ?>#comment">
				<?php echo comment_form_notifications(); ?>

				<p class="name">
					<label for="name">Your name:</label>
					<?php echo comment_form_input_name('placeholder="Your name"'); ?>
				</p>

				<p class="email">
					<label for="email">Your email address:</label>
					<?php echo comment_form_input_email('placeholder="Your email (won’t be published)"'); ?>
				</p>

				<p class="textarea">
					<label for="text">Your comment:</label>
					<?php echo comment_form_input_text('placeholder="Your comment"'); ?>
				</p>
<!--captcha-->
 <div id="recaptcha_widget" style="display:none">

   <div id="recaptcha_image"></div>
   <div class="recaptcha_only_if_incorrect_sol" style="color:red">Incorrect please try again</div>

   <span class="recaptcha_only_if_image">Enter the words above:</span>
   <span class="recaptcha_only_if_audio">Enter the numbers you hear:</span>

   <input type="text" id="recaptcha_response_field" name="recaptcha_response_field" />

   <div><a href="javascript:Recaptcha.reload()">Get another CAPTCHA</a></div>
   <div class="recaptcha_only_if_image"><a href="javascript:Recaptcha.switch_type('audio')">Get an audio CAPTCHA</a></div>
   <div class="recaptcha_only_if_audio"><a href="javascript:Recaptcha.switch_type('image')">Get an image CAPTCHA</a></div>

   <div><a href="javascript:Recaptcha.showhelp()">Help</a></div>

 </div>

 <script type="text/javascript"
    src="http://www.google.com/recaptcha/api/challenge?k=6Le-4vMSAAAAAB1CoRbr_HN3N7wvd-_tvYbpJ2eI">
 </script>
 <noscript>
   <iframe src="http://www.google.com/recaptcha/api/noscript?k=6Le-4vMSAAAAAB1CoRbr_HN3N7wvd-_tvYbpJ2eI"
        height="300" width="500" frameborder="0"></iframe><br>
   <textarea name="recaptcha_challenge_field" rows="3" cols="40">
   </textarea>
   <input type="hidden" name="recaptcha_response_field"
        value="manual_challenge">
 </noscript>
				<p class="submit">
					<?php echo comment_form_button(); ?>
				</p>
			</form>

		</section>
		<?php endif; ?>
				</section>
			</div>
			</div>
			</div>
		

<?php theme_include('footer'); ?>

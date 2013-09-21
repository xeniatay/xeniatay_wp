    <header class='site-header'>
        <div class='site-header-content container'>
            <div class='pull-left'>
                <h1 class='site-title'>Xenia Tay</h1>
                <h2 class='site-subheading'>Design and Development</h2>
                <h3 class='site-desc'>Computer Science, University of Waterloo</h3>
            </div>
            <div class='social pull-right'>
                <ul class='social-links'>
                    <li>
                        <a href='http://www.github.com/xeniatay' title='Github' class='social-github'>Github</a>
                    </li>
                    <li>
                        <a href='http://www.twitter.com/xeniatay' title='Twitter' class='social-twitter'>Twitter</a>
                    </li>
                    <li>
                        <a href='http://www.linkedin.com/xeniatay' title='LinkedIn' class='social-linkedin'>LinkedIn</a>
                    </li>
                    <li>
                        <a href='' title='Github' class='social-email'>Email</a>
                    </li>
                </ul>
            </div>
        </div>
    </header>
    <nav class='site-nav'>
        <ul class='nostyle container'>
            <li>Work</li>
            <li>Projects</li>
        </ul>
    </nav>
    <div class="container body-content">
        <div class='workexp-desc'>
            <h2 class='site-subheading'>Co-op</h2>
        </div>
        <label class='workexp-indochino timeline-content' for='indochino'>
            <p class='workexp-date timeline-date-right'>2013 &mdash; May to August</p>
            <p class='workexp-location'>Vancouver, BC</p>
            <h2 class='workexp-company-name'>Indochino</h2>
            <p class='workexp-job-title'>Front End Engineer</p>
            <p class='workexp-desc'>
            I was given an immense amount of independence. Working in a 2-person frontend team was a huge responsibility and a huge thrill - my first pull request affected global navigation across the whole site platform, and it was incredible to see results of my work in A/B tests and analytics.

            I also had the valuable opportunity of working with a team of designers and going end-to-end with a product: speccing it out, prototyping, final implementation, design tweaks and launch.

            Memorable tasks: Essentials, Modern Dandy, Homepage updates, Category page, Articles
            </p>
            <div class='timeline-divider'></div>
            <input class='timeline-content-input' type='radio' name='workexp' id='indochino'/>
        </label>
        <label class='workexp-bv timeline-content' for='bazaarvoice'>
            <p class='workexp-date timeline-date-left'>2012 &mdash; September to December</p>
            <p>Austin, Texas</p>
            <h2 class='workexp-company-name'>BazaarVoice</h2>
            <p class='workexp-job-title'>Software Engineer</p>
            <p class='workexp-desc'>
            Working at Bazaarvoice opened my eyes to the open source community. It was both a lesson in development and lifestyle: it was the first time I was living in the States. I also worked along JS community leaders/experts and learnt from them which was goodstuffz.

            Learnt a lot about good practices: Firebird put a lot of emphasis on things like : configurability, page load performance, query performance, small payload size, etc.
            </p>
            <div class='timeline-divider'></div>
            <input class='timeline-content-input' type='radio' name='workexp' id='bazaarvoice'/>
        </label>
        <label class='workexp-watrhub timeline-content' for='watrhub'>
            <p class='workexp-date timeline-date-right'>2012 &mdash; January to April</p>
            <p>Toronto, ON</p>
            <h2 class='workexp-company-name'>WatrHub</h2>
            <p class='workexp-job-title'>Designer and Developer</p>
            <p class='workexp-desc'>
            Working at a 5-person startup and being a key player (only frontend developer and designer) really inspired me. Despite the constant crunchtimes, I was super dedicated to my work because of the inspiring payoff it led to. Inspired me to really drill down into frontend - learn how to write better code, learn how to improve. Self-taught a lot of good practices too. Google was my best friend. Loved the small team and tightly knit group and big responsibilities.
            </p>
            <div class='timeline-divider'></div>
            <input class='timeline-content-input' type='radio' name='workexp' id='watrhub'/>
        </label>
    </div>
    <footer class='site-footer container'>
        <hr/>
        &copy; Xenia Tay 2013
    </footer>


<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap clearfix">

						<div id="main" class="eightcol first clearfix" role="main">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">

								<header class="article-header">

									<h1 class="h2"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
									<p class="byline vcard"><?php
										printf(__('Posted <time class="updated" datetime="%1$s" pubdate>%2$s</time> by <span class="author">%3$s</span> <span class="amp">&</span> filed under %4$s.', 'bonestheme'), get_the_time('Y-m-j'), get_the_time(get_option('date_format')), bones_get_the_author_posts_link(), get_the_category_list(', '));
									?></p>

								</header> <!-- end article header -->

								<section class="entry-content clearfix">
									<?php the_content(); ?>
								</section> <!-- end article section -->

								<footer class="article-footer">
									<p class="tags"><?php the_tags('<span class="tags-title">' . __('Tags:', 'bonestheme') . '</span> ', ', ', ''); ?></p>

								</footer> <!-- end article footer -->

								<?php // comments_template(); // uncomment if you want to use them ?>

							</article> <!-- end article -->

							<?php endwhile; ?>

									<?php if (function_exists('bones_page_navi')) { ?>
											<?php bones_page_navi(); ?>
									<?php } else { ?>
											<nav class="wp-prev-next">
													<ul class="clearfix">
														<li class="prev-link"><?php next_posts_link(__('&laquo; Older Entries', "bonestheme")) ?></li>
														<li class="next-link"><?php previous_posts_link(__('Newer Entries &raquo;', "bonestheme")) ?></li>
													</ul>
											</nav>
									<?php } ?>

							<?php else : ?>

									<article id="post-not-found" class="hentry clearfix">
											<header class="article-header">
												<h1><?php _e("Oops, Post Not Found!", "bonestheme"); ?></h1>
										</header>
											<section class="entry-content">
												<p><?php _e("Uh Oh. Something is missing. Try double checking things.", "bonestheme"); ?></p>
										</section>
										<footer class="article-footer">
												<p><?php _e("This is the error message in the index.php template.", "bonestheme"); ?></p>
										</footer>
									</article>

							<?php endif; ?>

						</div> <!-- end #main -->

						<?php get_sidebar(); ?>

				</div> <!-- end #inner-content -->

			</div> <!-- end #content -->

<?php get_footer(); ?>

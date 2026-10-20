<?php
/**
 * Main Index Fallback Template
 *
 * @package MD_Nutrition
 */

get_header(); ?>

<main id="primary" class="site-main" style="padding: 60px 0;">
    <div class="container">
        <?php if ( have_posts() ) : ?>
            <header class="page-header" style="margin-bottom: 40px; text-align: center;">
                <h1 class="page-title" style="font-family: var(--font-serif); font-size: 38px; color: var(--primary-green-dark);">
                    <?php single_post_title(); ?>
                </h1>
            </header>

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 30px;">
                <?php while ( have_posts() ) : the_post(); ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class( 'event-card' ); ?>>
                        <?php if ( has_post_thumbnail() ) : ?>
                            <div class="event-image-wrap">
                                <?php the_post_thumbnail( 'md-card-thumb' ); ?>
                            </div>
                        <?php endif; ?>
                        <div class="event-body">
                            <h2 style="font-family: var(--font-serif); font-size: 22px; margin-bottom: 10px;">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h2>
                            <div style="font-size: 14px; color: var(--muted-text);">
                                <?php the_excerpt(); ?>
                            </div>
                        </div>
                        <div class="event-footer-btn">
                            <a href="<?php the_permalink(); ?>" class="event-btn-dark">Read More</a>
                        </div>
                    </article>
                <?php endwhile; ?>
            </div>

            <div style="margin-top: 40px; text-align: center;">
                <?php the_posts_pagination(); ?>
            </div>
        <?php else : ?>
            <p><?php esc_html_e( 'No content found.', 'md-nutrition' ); ?></p>
        <?php endif; ?>
    </div>
</main>

<?php get_footer(); ?>

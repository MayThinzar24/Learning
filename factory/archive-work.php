<?php

/**
 * The template for displaying Archive
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package factory
 */

get_header();
?>
<div class="page-mv work-mv js-height">
  <div class="inner">
    <h1 class="page-ttl">
      <span class="first-ttl">WORKS</span>
      <span class="second-ttl">caritatem</span>
    </h1>
  </div>
</div><!-- /.page-mv -->
<div class="content work-content">
  <div class="inner">
    <div class="work-list">
      <?php query_posts('post_type=work&order=DESC&paged=' . $paged); ?>
      <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
          <div class="work">
            <a href="<?php the_permalink(); ?>">
              <?php if (has_post_thumbnail()) : ?>
                <div class="work-img">
                  <?php the_post_thumbnail($post->ID, 'thumbnail'); ?>
                </div>
              <?php endif; ?>
              <div class="work-txt">
                <h3 class="work-ttl"><?php the_title(); ?></h3>
                <div class="work-desc"><?php the_field('work-desc'); ?></div>
                <ul class="badge-list">
                  <?php
                  if (have_rows('badge-list')) :
                    while (have_rows('badge-list')) : the_row();
                      $type = get_sub_field('badge-type');
                      $txt = get_sub_field('badge-txt');
                  ?>
                      <li>
                        <span class="badge-type"><?php echo $type  ?> </span>
                        <span class="badge-txt"><?php echo $txt  ?></span>
                      </li>
                    <?php endwhile; ?>
                  <?php endif; ?>
                </ul>
              </div>
            </a>
            <ul class="tag-list">
              <?php
              $tags = get_the_tags();
              if ($tags) :
                foreach ($tags as $tag) : ?>
                  <li>
                    <a href="<?php echo esc_url(get_tag_link($tag->term_id)); ?>" title="<?php echo esc_attr($tag->name); ?>">
                      <?php echo esc_html($tag->name); ?>
                    </a>
                  </li>
                <?php endforeach; ?>
              <?php endif; ?>
            </ul>
          </div>
        <?php endwhile; ?>
      <?php endif; ?>
      <?php the_posts_pagination(); ?>
      <?php wp_reset_query(); ?>
    </div><!-- /.work-list -->
  </div>
</div>
<?php
get_footer();

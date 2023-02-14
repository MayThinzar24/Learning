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
<div class="page-mv column-mv js-height">
  <div class="inner">
    <h1 class="page-ttl">
      <span class="first-ttl">EVENT & COLUMN</span>
      <span class="second-ttl">aperiam</span>
    </h1>
  </div>
</div><!-- /.page-mv -->
<div class="content">
  <div class="tab-wrap">
    <?php $terms = get_terms('taxo'); ?>
    <ul class="tab-list">
      <li class="tab">
        <a href="<?php echo site_url(); ?>/column/" class="tab-link">ALL</a>
      </li>
      <?php foreach ($terms as $term) { ?>
        <li class="tab">
          <a href="<?php echo get_term_link($term->slug, 'taxo'); ?>" class="tab-link">
            <?php echo $term->slug; ?>
          </a>
        </li>
      <?php }  ?>
    </ul>
  </div>
  <div class="inner">
    <ul class="col-list" id="tab-content">
      <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
          <li class="col">
            <a href="<?php the_permalink(); ?>">
              <?php if (has_post_thumbnail()) : ?>
                <div class="col-img">
                  <?php the_post_thumbnail($post->ID, 'thumbnail'); ?>
                </div>
              <?php endif; ?>
              <h3 class="col-ttl">
                <?php the_title(); ?>
              </h3>
              <div class="col-desc">
                <?php the_content(); ?>
              </div>
            </a>
            <div class="post-content">
              <ul class="tag-list">
                <?php
                $tags = get_the_tags();
                if ($tags) :
                  foreach ($tags as $tag) : ?>
                    <li><a href="<?php echo esc_url(get_tag_link($tag->term_id)); ?>" title="<?php echo esc_attr($tag->name); ?>"><?php echo esc_html($tag->name); ?></a></li>
                  <?php endforeach; ?>
                <?php endif; ?>
              </ul>
              <div class="cat-name">
                <p class="cat-btn"><?php the_category(' '); ?></p>
                <?php
                $terms = get_the_terms($post->ID, 'taxo');
                if (!empty($terms)) {
                  foreach ($terms as $term) {
                ?>
                    <p class="cat-btn">
                      <a href="<?php echo get_term_link($term->slug, 'taxo'); ?>/">
                        <?php echo $term->slug; ?>
                      </a>
                    </p>
                <?php
                  }
                } ?>
              </div>
            </div>
          </li>
        <?php endwhile; ?>
      <?php endif; ?>
    </ul>
      <?php the_posts_pagination(); ?>
  </div>
</div>
<?php
get_footer();

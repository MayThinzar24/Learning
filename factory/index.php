<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package factory
 */

get_header();
?>

<!-- ===============  main visual ============== -->
<section class="mainvisual js-height">
  <div class="mv-inner">
    <h1 class="mv-ttl">
      A creative agency<br class="s-pc"> for<br class="s-sp"> <span class="red-txt">redemptive</span><br class="s-pc"> brands
    </h1>
    <div class="product-no">
      <img src="<?php echo get_template_directory_uri() ?>/assets/img/top/img_product_no1.png" alt="PRODUCT No.1" width="150" height="150" loading="lazy">
    </div>
    <div class="btn-blk">
      <a href="#" class="cmn-btn btn-blue">Inquiry</a>
      <a href="#" class="cmn-btn btn-red">Request Doc</a>
    </div>
    <div class="mv-txt">
      <p class="txt">※ Probabo, inquit, modo<br class="s-sp"> ista sis aequitate quam.</p>
      <p class="para">Filium morte multavit si sine<br class="s-sp"> dubio<br class="s-pc">
        praeclara sunt,<br class="s-sp"> explicabo nemo<br class="s-pc">
        enim ad minima.
      </p>
    </div>
    <div class="devices-img s-pc">
      <img src="<?php echo get_template_directory_uri() ?>/assets/img/top/img_devices.png" alt="Product Factory" width="561" height="441" loading="lazy">
    </div>
  </div>
  <!-- ./ mainvisual-inner -->
</section>
<!-- ./mainvisual -->

<!-- =============== content ============== -->
<div class="content">
  <section class="sec-circles">
    <div class="inner">
      <h2 class="circle-ttl">Filium morte multavit si sine？</h2>
      <div class="circle-blk">
        <?php query_posts('posts_per_page=3&post_type=circles&order=DESC&paged=' . $paged); ?>
        <?php if (have_posts()) : ?>
          <?php while (have_posts()) : the_post(); ?>
            <div class="circle">
              <?php if (has_post_thumbnail()) : ?>
                <div class="circle-img">
                  <?php the_post_thumbnail($post->ID, 'thumbnail'); ?>
                </div>
              <?php endif; ?>
              <div class="circle-txt"><?php the_content(); ?></div>
            </div>
          <?php endwhile; ?>
        <?php endif; ?>
        <?php wp_reset_query(); ?>
      </div>
    </div>
  </section><!-- /.sec-circles -->
  <section class="sec-works">
    <div class="inner">
      <h2 class="sec-ttl">
        <span class="red-ttl">WORKS</span>
        <span class="blue-ttl">導入事例</span>
      </h2>
      <div class="work-list">
        <?php query_posts('posts_per_page=6&post_type=work&order=DESC&paged=' . $paged); ?>
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
                  <div class="work-desc">
                    <p><?php the_field('work-desc'); ?>
                    <p>
                  </div>
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
        <?php wp_reset_query(); ?>
      </div><!-- /.work-list -->
      <a href="<?php echo site_url(); ?>/work/" class="viewmore-btn cmn-btn btn-blue">View More</a>
    </div>
  </section><!-- /.sec-works-->
  <section class="sec-column">
    <div class="inner">
      <div class="ttl-blk">
        <h2 class="sec-ttl">
          <span class="red-ttl">COLUMN</span>
          <span class="blue-ttl">aperiam</span>
        </h2>
        <a href="<?php echo site_url(); ?>/column/" class="viewmore-btn cmn-btn btn-blue">View More</a>
      </div>
      <ul class="col-list">
        <?php
        query_posts('posts_per_page=4&post_type=column&order=DESC&paged=' . $paged);
        if (have_posts()) :
          while (have_posts()) : the_post();
            if (has_category(null, $post->ID)) : ?>
              <li class="col">
                <?php if (has_post_thumbnail()) : ?>
                  <div class="col-img">
                    <a href="<?php the_permalink(); ?>">
                      <?php the_post_thumbnail($post->ID, 'thumbnail'); ?>
                    </a>
                  </div>
                <?php endif; ?>
                <div class="col-txt">
                  <h3 class="col-ttl">
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                  </h3>
                  <div class="col-desc s-pc">
                    <a href="<?php the_permalink(); ?>">
                      <?php the_content(); ?>
                    </a>
                  </div>
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
        <?php
            endif;
          endwhile;
        endif; ?>
        <?php wp_reset_query(); ?>
      </ul>
    </div>
  </section><!-- /.sec-column -->
  <section class="sec-qa">
    <div class="inner">
      <h2 class="sec-ttl">
        <span class="red-ttl">Q&A</span>
        <span class="blue-ttl">rem aperiam</span>
      </h2>
      <ul class="qa-list">
        <li class="accordion">
          <div class="acc-header">
            <span class="q-no">Q1</span>
            <p class="q-ttl">Inquit, modo ista sis aequitate, quam ob rem aperiam eaque gaudere ut.</p>
            <span class="acc-sign"></span>
          </div>
          <div class="acc-content">
            Filium morte multavit si sine dubio praeclara sunt, explicabo nemo enim ad minima.
            Probabo, inquit, modo ista sis aequitate, quam ob rem aperiam eaque gaudere ut.
            Vero eos et caritatem, quae ab eo ortum, tam crudelis fuisse, nihil. Et quidem rerum necessitatibus saepe eveniet.
          </div>
        </li>
        <li class="accordion">
          <div class="acc-header">
            <span class="q-no">Q2</span>
            <p class="q-ttl">Inquit, modo ista sis aequitate, quam ob rem aperiam eaque gaudere ut.</p>
            <span class="acc-sign"></span>
          </div>
          <div class="acc-content">
            Filium morte multavit si sine dubio praeclara sunt, explicabo nemo enim ad minima.
            Probabo, inquit, modo ista sis aequitate, quam ob rem aperiam eaque gaudere ut.
            Vero eos et caritatem, quae ab eo ortum, tam crudelis fuisse, nihil. Et quidem rerum necessitatibus saepe eveniet.
          </div>
        </li>
        <li class="accordion">
          <div class="acc-header">
            <span class="q-no">Q3</span>
            <p class="q-ttl">Inquit, modo ista sis aequitate, quam ob rem aperiam eaque gaudere ut.</p>
            <span class="acc-sign"></span>
          </div>
          <div class="acc-content">
            Filium morte multavit si sine dubio praeclara sunt, explicabo nemo enim ad minima.
            Probabo, inquit, modo ista sis aequitate, quam ob rem aperiam eaque gaudere ut.
            Vero eos et caritatem, quae ab eo ortum, tam crudelis fuisse, nihil. Et quidem rerum necessitatibus saepe eveniet.
          </div>
        </li>
        <li class="accordion">
          <div class="acc-header">
            <span class="q-no">Q4</span>
            <p class="q-ttl">Inquit, modo ista sis aequitate, quam ob rem aperiam eaque gaudere ut.</p>
            <span class="acc-sign"></span>
          </div>
          <div class="acc-content">
            Filium morte multavit si sine dubio praeclara sunt, explicabo nemo enim ad minima.
            Probabo, inquit, modo ista sis aequitate, quam ob rem aperiam eaque gaudere ut.
            Vero eos et caritatem, quae ab eo ortum, tam crudelis fuisse, nihil. Et quidem rerum necessitatibus saepe eveniet.
          </div>
        </li>
        <li class="accordion">
          <div class="acc-header">
            <span class="q-no">Q5</span>
            <p class="q-ttl">Inquit, modo ista sis aequitate, quam ob rem aperiam eaque gaudere ut.</p>
            <span class="acc-sign"></span>
          </div>
          <div class="acc-content">
            Filium morte multavit si sine dubio praeclara sunt, explicabo nemo enim ad minima.
            Probabo, inquit, modo ista sis aequitate, quam ob rem aperiam eaque gaudere ut.
            Vero eos et caritatem, quae ab eo ortum, tam crudelis fuisse, nihil. Et quidem rerum necessitatibus saepe eveniet.
          </div>
        </li>
        <li class="accordion">
          <div class="acc-header">
            <span class="q-no">Q6</span>
            <p class="q-ttl">Inquit, modo ista sis aequitate, quam ob rem aperiam eaque gaudere ut.</p>
            <span class="acc-sign"></span>
          </div>
          <div class="acc-content">
            Filium morte multavit si sine dubio praeclara sunt, explicabo nemo enim ad minima.
            Probabo, inquit, modo ista sis aequitate, quam ob rem aperiam eaque gaudere ut.
            Vero eos et caritatem, quae ab eo ortum, tam crudelis fuisse, nihil. Et quidem rerum necessitatibus saepe eveniet.
          </div>
        </li>
      </ul>
    </div>
  </section><!-- sec-qa -->
</div><!--/.content -->
<?php
get_footer();

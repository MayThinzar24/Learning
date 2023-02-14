<div class="content">
  <div class="tab-wrap">
    <ul class="tab-list">
      <li class="tab">
        <a href="<?php echo site_url(); ?>/column/#tab-content" class="tab-link">ALL</a>
      </li>
      <li class="tab">
        <a href="<?php echo site_url(); ?>/category/category01/#tab-content" class="tab-link">Category01</a>
      </li>
      <li class="tab">
        <a href="<?php echo site_url(); ?>/category/category02/#tab-content" class="tab-link">Category02</a>
      </li>
      <li class="tab">
        <a href="<?php echo site_url(); ?>/category/category03/#tab-content" class="tab-link">Category03</a>
      </li>
    </ul>
  </div>
  <div class="inner" id="tab-content">
  <ul class="col-list">
      <?php
      if (have_posts()) : ?>
        <?php
        // $category = get_the_category($post->ID);
        // $cat_id = $category[0]->cat_ID;
        // $cat_name = $category[0]->name;
        // $cat_slug = $category[0]->slug;

        $category_detail=get_the_category($post->ID);//$post->ID
        foreach($category_detail as $cd){
        echo $cd->cat_name;
        }
        
        ?>
        <?php
        query_posts('posts_per_page=3&order=DESC&paged=' . $paged);
        ?>
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
                <p class="cat-btn"><?php the_category($post->ID, 'category'); ?></p>
              </div>
            </div>
          </li>
        <?php endwhile; ?>
      <?php endif;
      ?>
      <?php wp_reset_query(); ?>
    </ul>
  </div>
</div>
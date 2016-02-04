<?php /*Template Name: Search */?>
<?php get_header(); ?>

<?php if(is_user_logged_in()): ?>

<div class="inner cover">
  <div class="projects-wrapper clearfix">

<?php 
	$my_search = new WP_Advanced_Search('my-form');	
	$query = $my_search->query();
?>

  <?php if($query->have_posts()): ?>
    <ul>
    <?php while ($query->have_posts()): $query->the_post(); ?>
      <?php $status = get_field('completed'); ?>
      <li class="project">
        <a href="<?php the_permalink(); ?>">
          <h1 class="project-title"><?php the_title(); ?></h1>
          <div class="project-body clearfix">
            <small <?php echo ($status) ? 'class="project-complete"':''; ?>>
              <?php echo ($status) ? 'Completed' : 'Live Project'; ?>
            </small>
            <button class="pull-right btn btn-sm">&rarr;</button>
          </div>
        </a>
      </li>
       <?php endwhile; ?>
    </ul>
  <?php endif; ?>


  </div>
  <div class="projects-navigator">
      <?php 
      	$my_search->pagination();      	
      	wp_reset_query();
      ?>
  </div>
</div>


<?php endif; ?>
<?php get_footer(); ?>
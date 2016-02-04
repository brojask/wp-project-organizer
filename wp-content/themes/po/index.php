<?php get_header(); ?>

<div class="inner cover">
  <div class="projects-wrapper clearfix">
  <?php if(have_posts()): ?>
    <ul>
    <?php while (have_posts()): the_post(); ?>
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
      <?php next_posts_link(__('View previous', 'text-domain')); ?>
      <?php previous_posts_link(__('View more', 'text-domain')); ?>
  </div>
</div>

<?php get_footer(); ?>
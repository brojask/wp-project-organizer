<?php /*Template Name: Home */ ?>
<?php get_header(); ?>

<div class="inner cover">

  <h1 class="cover-heading">Welcome, 
  <?php global $current_user; 
  get_currentuserinfo();
  if(isset($current_user->display_name))
    echo $current_user->display_name;
  else
    $current_user->user_login;
  ?>
  </h1>  
  <div class="user-avatar">  
    <?= get_avatar($current_user->ID, 158); ?>
  </div>
  
  <div class="project-controls">
    <ul>
      <li class="add-project"><a href="<?= admin_url('post-new.php') ?>">Add New Project</a></li>
      <li class="view-project"><a href="<?= admin_url('projects') ?>">View All Projects</a></li>
    </ul>
  </div>         
  
</div>

<?php get_footer(); ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php wp_title('|',true,'right'); ?><?php bloginfo('name'); ?></title>

    <!-- Stylesheets -->
	<?php wp_head(); ?>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->    
  </head>

  <body <?php body_class(); ?>>

    <div class="site-wrapper">

      <div class="site-wrapper-inner">

        <div class="cover-container">

			<nav class="navbar navbar-inverse navbar-fixed-top">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo('name') ?></a>
					</div>
					<div id="navbar" class="navbar-collapse collapse">
						<?php if(is_user_logged_in()): ?>
							<nav class="user-controls">
								<div class="user-icon"></div>
								<div class="user-menu">
									<ul>
										<li><a href="<?= admin_url(); ?>">Dashboard</a></li>
										<li><a href="<?= admin_url('post-new.php'); ?>">Add Project</a></li>
										<li><a href="<?= wp_logout_url( home_url() ); ?>">Log Out</a></li>
									</ul>	
								</div>
							</nav>
						<?php endif; ?>
						<!-- <form class="navbar-form navbar-right">
							<div class="form-group">
								<input type="text" placeholder="Search projects" class="form-control">
							</div>
							<button type="submit" class="btn btn-primary">Search</button>
						</form> -->
						<div class="form-wrap">
						<?php 
						$my_search = new WP_Advanced_Search('my-form');
						$my_search->the_form();
						?>
						</div>
					</div><!--/.navbar-collapse -->
				</div>
			</nav>
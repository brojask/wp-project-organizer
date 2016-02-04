<?php get_header(); ?>
<div class="inner cover">
    <a class="back-to-projects" href="<?=home_url('projects');?>">&larr; Back</a>
    <?php edit_post_link('Edit This', '<div class="edit-project">', '</div>'); ?>
    <div class="project-wrapper">
      <?php if(have_posts()) : while(have_posts()) : the_post();
            #$name = get_field('name');
            $projectName = get_the_title();
            $client = get_field('client_name');
            $budget = get_field('budget');
            $sdate = DateTime::createFromFormat('Ymd', get_field('starter_date'));            
            $edate = DateTime::createFromFormat('Ymd', get_field('end_date'));            
            $deposit = get_field('deposit');
            $payment = get_field('final_payment');
            $status = get_field('completed');
            $ftp_server = get_field('ftp_server');
            $ftp_username = get_field('ftp_username');            
            $ftp_pass = get_field('ftp_pass');
            $cp_server = get_field('cpanel_server');
            $cp_username = get_field('cpanel_username');
            $cp_pass = get_field('cpanel_pass');
            $wp_admin = get_field('wp_admin');
            $wp_username = get_field('wp_username');
            $wp_pass = get_field('wp_pass');
      ?>
        <div role="tabpanel">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <li class="project-title"><?= $projectName; ?></li>
                <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">General</a></li>
                <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Logins</a></li>
                <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Notes</a></li>
                <li class="status-column">Project status<span class="project-status <?= ($status) ? 'complete' : 'live' ?>"></span></li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="home">
                    <div class="individual-project">
                        <div class="individual-project-body">
                            <table class="table table-bordered general-table">
                                <tr>
                                    <th>Client name:</th>
                                    <td><?= $client; ?></td>
                                </tr>
                                <tr>
                                    <th>Budget:</th>
                                    <td>&dollar;<?= $budget; ?></td>
                                </tr>
                                <tr>
                                  <td><strong>Start Date: </strong> <?= $sdate->format('D m, Y'); ?></td>
                                  <td><strong>End Date: </strong> <?= $edate->format('D m, Y'); ?></td>
                                </tr>
                                <tr>
                                    <th>Deposit:</th>
                                    <td><?= $deposit; ?></td>
                                </tr>
                                <tr>
                                    <th>Final payment:</th>
                                    <td><?= $payment; ?></td>
                                </tr>
                                <tr>
                                    <th>Tax:</th>
                                    <td>3%</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane" id="messages">
                    <div class="individual-project">
                        <div class="individual-project-body">
                            <table class="table table-bordered logins-table">
                                <tr>
                                    <th>FTP</th>
                                    <th>Server</th>
                                    <th>username</th>
                                    <th>password</th>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td><?= $ftp_server; ?></td>
                                    <td><?= $ftp_username; ?></td>
                                    <td><?= $ftp_pass; ?></td>
                                </tr>
                                <tr>
                                    <th>CPanel</th>
                                    <th>Server</th>
                                    <th>username</th>
                                    <th>password</th>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td><?= $cp_server; ?></td>
                                    <td><?= $cp_username; ?></td>
                                    <td><?= $cp_pass; ?></td>
                                </tr>
                                <tr>
                                    <th>WordPress</th>
                                    <th>Admin URL</th>
                                    <th>username</th>
                                    <th>password</th>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>example.com/wp-admin</td>
                                    <td>admin</td>
                                    <td>admin</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane" id="settings">
                    <div class="individual-project">
                        <div class="individual-project-body">
                            <table class="table table-bordered">
                                <tr>
                                    <td>
                                        <div class="project-notes">
                                            <?php the_content(); ?>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  <?php endwhile; endif; ?>
</div>
<?php get_footer(); ?>
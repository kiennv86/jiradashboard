<!-- header -->
<header>
    <div class="navbar navbar-fixed-top">
        <div class="navbar-inner">
            <div class="container-fluid">
                <a class="brand" href="<?php echo base_url(); ?>admin/index"><i class="icon-home icon-white"></i> Dashboard </a>
                <ul class="nav user_menu pull-right">
                    <li class="divider-vertical hidden-phone hidden-tablet"></li>
                    <li class="dropdown">
                        <?php $user = $this->common->get_current_user();?>
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Hi <strong><?php echo $user->username;?></strong> <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="forgot-password.php">Change Password</a></li>
                            <li class="divider"></li>
                            <li><a href="<?php echo base_url() ?>logout">Logout</a></li>
                        </ul>
                    </li>
                </ul>
                <a data-target=".nav-collapse" data-toggle="collapse" class="btn_menu">
                    <span class="icon-align-justify icon-white"></span>
                </a>

                <nav style="display: block;">
                    <div class="nav-collapse">
                        <ul class="nav">
                            <li class="dropdown">
                                <a data-toggle="dropdown" class="dropdown-toggle" href="#"><i class="icon-list-alt icon-white"></i> Administrator Menu <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="<?php echo base_url('pages');?>">Pages Manager</a></li>
                                    <li><a href="<?php echo base_url('widgets');?>">Widget Manager</a></li>
                                    <li><a href="<?php echo base_url('layouts');?>">Layout Manager</a></li>
                                    <li><a href="<?php echo base_url('users');?>">User Manager</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>

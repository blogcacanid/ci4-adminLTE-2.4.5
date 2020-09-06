<header class="main-header">
    <!-- Logo -->
    <a href="<?php echo base_url('/');?>" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>A</b>LT</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Admin</b>LTE</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="<?= $avatar; ?>" class="user-image" alt="User Image">
                        <span class="hidden-xs"><?= $full_name; ?></span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            <img src="<?= $avatar; ?>" class="img-circle" alt="User Image">

                            <p>
                                <?= $full_name; ?> - Web Developer
                                <small>Member since Nov. 2012</small>
                            </p>
                        </li>
                        <li class="user-footer">
                            <div class="text-center">
                                <a href="https://www.cacan.id"
                                    target="_blank" title="Personal Web" 
                                    class="btn btn-social-icon btn-instagram">
                                    <i class="fa fa-globe"></i>
                                </a>
                                <a href="https://twitter.com/KudusRony"
                                    target="_blank" title="Twitter" 
                                    class="btn btn-social-icon btn-twitter">
                                    <i class="fa fa-twitter"></i>
                                </a>
                                <a href="https://www.facebook.com/rony.chandrakudus"
                                    target="_blank" title="Facebook" 
                                    class="btn btn-social-icon btn-facebook">
                                    <i class="fa fa-facebook"></i>
                                </a>
                                <a href="https://github.com/blogcacanid"
                                    target="_blank" title="Github" 
                                    class="btn btn-social-icon btn-github">
                                    <i class="fa fa-github"></i>
                                </a>
                                <a href="https://www.linkedin.com/in/rony-chandra-77027b185"
                                    target="_blank" title="LinkedIn" 
                                    class="btn btn-social-icon btn-linkedin">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                            </div>
                            <!-- /.row -->
                        </li>
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="#" class="btn btn-default btn-flat">Profile</a>
                            </div>
                            <div class="pull-right">
                                <a href="#" class="btn btn-danger btn-flat"><i class="fa fa-sign-out"></i>&nbsp;Sign out</a>
                            </div>
                        </li>
                    </ul>
                </li>
                <!-- Control Sidebar Toggle Button -->
                <li>
                    <a href="#" title="Sign out"><i class="fa fa-sign-out"></i></a>
                </li>
            </ul>
        </div>
    </nav>
</header>
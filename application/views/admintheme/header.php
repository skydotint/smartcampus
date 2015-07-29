<!DOCTYPE html>
<html class="no-js">

    <head>
        <title>Smart Campus Dashboard</title>
        <!-- Bootstrap -->
        <?php echo put_headers(); ?>
        <script type="text/javascript">var baseurl = "<?php echo base_url(); ?>";</script>
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <script src="assets/js/raphael-min.js" type="text/javascript"></script>
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    </head>

    <body>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container-fluid">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <a class="brand" href="<?php echo base_url(); ?>dashboard"><img src="<?php echo base_url(); ?>assets/images/logo.png" alt="Smart Campus" /></a>
                    <div class="nav-collapse collapse">
                        <ul class="nav pull-right">
                            <li class="dropdown">
                                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"> 
                                    <i class="icon-user"></i> <?php echo $user->first_name; ?>
                                    <i class="caret"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a tabindex="-1" href="<?php echo base_url(); ?>viewprofile"><i class="icon-user"></i> Profile</a></li>
                                    <li class="divider"></li>
                                    <?php if ($this->ion_auth->in_group("Admin")) { ?>
                                    <li><a tabindex="-1" href="<?php echo base_url(); ?>addsysuser"><i class="icon-user"></i> Create User</a></li>
                                    <li><a tabindex="-1" href="<?php echo base_url(); ?>auth/deactivate"><i class="icon-user"></i> Deactivated User</a></li>
                                    <li class="divider"></li>
                                    <?php } ?>
                                    <li>
                                        <a tabindex="-1" href="logout"><span class="glyphicon glyphicon-log-out"></span> Logout</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        
                            <ul class="nav">
                                <li class="active"><a href="<?php echo base_url(); ?>dashboard">Dashboard</a></li>

                                <?php if ($this->ion_auth->in_group("Admin")) { ?>
                                <li class="dropdown">
                                    <a href="#" data-toggle="dropdown" class="dropdown-toggle">Initial Settings <b class="caret"></b></a>
                                    <ul class="dropdown-menu" id="menu1">
                                        <li><a href="<?php echo base_url(); ?>addnewclass">Add New Class</a></li>
                                        <li><a href="<?php echo base_url(); ?>viewclasses">Classes</a></li>
                                        <li class="divider"></li>
                                        <li><a href="<?php echo base_url(); ?>addnewsection">Add New Section</a></li>
                                        <li><a href="<?php echo base_url(); ?>viewsections">Sections</a></li>
                                        <li class="divider"></li>
                                        <li><a href="<?php echo base_url(); ?>addnewsubject">Add New Subject</a></li>
                                        <li><a href="<?php echo base_url(); ?>viewsubjects">Subjects</a></li>
                                        <li class="divider"></li>
                                        <li><a href="<?php echo base_url(); ?>addusergroup">Add User Group</a></li>
                                        <li><a href="<?php echo base_url(); ?>usersgroup">User Groups</a></li>
                                        <li class="divider"></li>
                                        <li><a href="<?php echo base_url(); ?>academiccalendar">Academic Calendar</a></li>
                                        <li class="divider"></li>
                                        <li><a href="<?php echo base_url(); ?>systemsettings">System Settings</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" data-toggle="dropdown" class="dropdown-toggle">Settings <b class="caret"></b></a>
                                    <ul class="dropdown-menu" id="menu1">
                                        <li><a href="#">Tools <i class="icon-arrow-right"></i></a></li>
                                        <li class="divider"></li>
                                        <li><a href="#">Send a support ticket</a></li>
                                        <li><a href="#">Take a backup</a></li>
                                        <li class="divider"></li>
                                        <li><a href="<?php echo base_url(); ?>aboutsmart">About Smart Campus</a></li>
                                        <li><a href="<?php echo base_url(); ?>aboutideatweaker">About Idea Tweaker</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">Pages <i class="caret"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a tabindex="-1" href="<?php echo base_url(); ?>addnewpage">Add New</a></li>
                                        <li><a tabindex="-1" href="<?php echo base_url(); ?>viewpages">All Pages</a></li>
                                        <li class="divider"></li>
                                        <li><a tabindex="-1" href="#">Demo</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">Users <i class="caret"></i>

                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a tabindex="-1" href="#">User List</a>
                                        </li>
                                        <li>
                                            <a tabindex="-1" href="#">Search</a>
                                        </li>
                                        <li>
                                            <a tabindex="-1" href="#">Permissions</a>
                                        </li>
                                    </ul>
                                </li>
                                <?php } ?>
                            </ul>
                        </div>
                    
                    <!--/.nav-collapse -->
                </div>
            </div>
        </div>

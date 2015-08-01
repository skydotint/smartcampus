<!DOCTYPE html>
<html class="no-js">

    <head>
        <title>Admin Home Page</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <!-- Bootstrap -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" type="text/css" rel="stylesheet"/>
        <style>
            .container-fluid {
                margin-left: auto;
                margin-right: auto;
                padding-left: 50px;
                padding-right: 50px;
            }
        </style>
        <script type="text/javascript">var baseurl = "<?php echo base_url(); ?>";</script>
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <script src="assets/js/raphael-min.js" type="text/javascript"></script>
    </head>

    <body>
        <div class="container-fluid">
            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
        </div>
        <div class="container">
            <!-- Example row of columns -->
            <div class="row">
                <div class="col-md-7">
                    <h2>Heading</h2>
                    <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                    <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
                </div>
                <div class="col-md-5">
                    <h2>Heading</h2>
                    <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                    <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
                </div>
                
            </div>

            <hr>

            <footer>
                <p>&copy; Company 2014</p>
            </footer>
        </div> <!-- /container -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-md-8"><?php $this->load->view($module . "/" . $view_file); ?></div>
                <div class="col-xs-6 col-md-4">Samrat</div>
            </div>
        </div>
        <?php echo put_footer(); ?>
    </body>
</html>

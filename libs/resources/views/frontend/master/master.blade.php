<!DOCTYPE html>
<html lang="en">

<head>
    <base href="{{ asset('public/layout/frontend') }}/">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="images/favicon.ico">
    <title>@yield('title')</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/shortcodes.css" rel="stylesheet">
    <link href="css/style-wp.css" rel="stylesheet">
    <link href="css/owl.carousel.css" rel="stylesheet">
    <!-- only for demo -->
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
</head>

<body>
    <div class="boxed active">
        <!-- header (logo section) -->
        <header class="header">
            <div class="container">
                <div class="logo">
                    <a href="index-2.html"><img id="logo" src="images/logo.png" alt="logo"></a>
                </div>
                <!-- <h1>Haute Couture</h1>
						<div class="description">black is new red</div> -->
                <div class="ad-728x90">
                    <a href="index-2.html"><img src="images/ad728x90.png" alt="ad728x90"></a>
                </div>
            </div>
        </header>
        <!-- end header (logo section) -->
        <!-- main menu -->
        @include('frontend.master.menu')
        <!-- end main menu -->

@yield('main')

<footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-8">
                        <div class="ot-footer-widget">
                            <h4 class="footer-title"><span>About Infra</span></h4>
                            <p class="ot-social-type">Maecenas euismod magna augue, et imperdiet nisl efficitur nec. Nunc non risus a diam tempor ornare. Suspendisse molestie nisi a euismod egestas. Integer tristique mauris in laoreet iaculis. Vestibulum ante ipsum primis in faucibus
                                orci luctus et ultrices posuere cubilia Curae;</p>
                            <p class="ot-social-type">3422 Street, Barcelona 432, Spain,<br>New Building North, 15th Floor</p>
                        </div>
                        
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="ot-footer-widget">
                            <h4 class="footer-title"><span>Social</span></h4>
                            <div class="ot-social-button">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <div class="ot-social-details">
                                    <div class="ot-social-count">6k</div>
                                    <div class="ot-social-type">Likes</div>
                                </div>
                            </div>
                            <div class="ot-social-button">
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <div class="ot-social-details">
                                    <div class="ot-social-count">13k</div>
                                    <div class="ot-social-type">Followers</div>
                                </div>
                            </div>
                            <div class="ot-social-button">
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <div class="ot-social-details">
                                    <div class="ot-social-count">234</div>
                                    <div class="ot-social-type">Followers</div>
                                </div>
                            </div>
                            <div class="ot-social-button">
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                <div class="ot-social-details">
                                    <div class="ot-social-count">987</div>
                                    <div class="ot-social-type">Pople</div>
                                </div>
                            </div>
                            <div class="ot-social-button">
                                <a href="#"><i class="fa fa-youtube"></i></a>
                                <div class="ot-social-details">
                                    <div class="ot-social-count">34k</div>
                                    <div class="ot-social-type">Subscibers</div>
                                </div>
                            </div>
                            <div class="ot-social-button">
                                <a href="#"><i class="fa fa-soundcloud"></i></a>
                                <div class="ot-social-details">
                                    <div class="ot-social-count">4k</div>
                                    <div class="ot-social-type">Subscibers</div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <i class="fa fa-copyright"></i> Copyright 2015. All rights reserved.<br /> Theme made by <a href="http://www.orange-themes.com/">Orange Themes</a>
            </div>
        </footer>
    </div>
    <!-- boxed -->
    <!-- Bootstrap core and theme JavaScript
			================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="js/jquery-latest.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="js/theia-sticky-sidebar.js"></script>
    <script type="text/javascript" src="js/themescripts.js"></script>
</body>
</html>
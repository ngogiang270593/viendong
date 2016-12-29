<?php $page =  $_SERVER["REQUEST_URI"];
    echo $page;
 ?>
<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" lang="vi">
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" lang="vi">
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html lang="vi">
<!--<![endif]-->

<head>
     @include('user.blocks.header');
</head>

<body class="home page page-id-2 page-template-default">
    <div id="page" class="hfeed site">
        <header id="masthead" class="site-header" role="banner">
            <a class="home-link" href="http://localhost/viendong1/" title="Viễn Đông" rel="home">
               
            </a>

            <div id="navbar" class="navbar">
                @include('user.blocks.navbar');
            </div>
            <!-- #navbar -->
        </header>
        <!-- #masthead -->

        <div id="main" class="site-main">
    
            <div id="primary" class="content-area">
           

                    @if ($page=='index.php') 
                         
                        @include('user.pages.thongtin');
                           
                    @else
                        @include('user.pages.home');
                    
                    @endif
                 
            </div>
            <!-- #primary -->
        </div>
        <!-- #main -->
        <footer id="colophon" class="site-footer" role="contentinfo">
            @include('user.blocks.footer');
        </footer>
        <!-- #colophon -->
    </div>
    <!-- #page -->

    
</body>

</html>
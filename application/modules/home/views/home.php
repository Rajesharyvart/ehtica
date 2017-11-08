<!doctype html>
<html>

    <head>
        <!-- Meta Tags start -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="keywords" content="" />
        <meta name="description" content="" />
        <meta name="author" content="">
        <!-- Meta Tags end -->
        <title>Ehtica.Com :: Home</title>
        <!-- Title Tag -->
        <!-- Css Start -->
        <?php echo theme_css('font-awesome.min.css', true) ?>
        <!-- font-awesome.min css -->
        <?php echo theme_css('bootstrap.min.css', true) ?>
        <!-- Bootstrap css -->
        <?php echo theme_css('style.css', true) ?>
        <!-- Custom css -->
        <?php echo theme_css('responsive.css', true) ?>
        <!-- Responsive css -->
        <!-- Css end -->
        <link rel="shortcut icon" href="images/ico/favicon.ico">
        <!-- Favicons -->




    </head>

    <body class="ehtica-ethica">
        <section class="ehtica">
            <div class="container-fluid">
                <div class="ehtica-header">
                    <div class="col-md-6 col-sm-6">
                        <div class="welcome">
                            <ul class="list-inline">
                                <li class="shopmart">Welcome to ShopMart!</li>
                                <li>
                                    <div class="mart">
                                        <div class="btn-group">
                                            <a class="btn dropdown-toggle btn-select" data-toggle="dropdown" href="#">English <span class="caret"></span></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="#">French</a></li>
                                                <li><a href="#">English</a></li>
                                                <li><a href="#">Spanish</a></li>
                                                <li><a href="#">Chinese</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="mart">
                                        <div class="btn-group">
                                            <a class="btn dropdown-toggle btn-select" data-toggle="dropdown" href="#">GBP<span class="caret"></span></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="#">GBP</a></li>
                                                <li><a href="#">EUR</a></li>
                                                <li><a href="#">GBP</a></li>
                                                <li><a href="#">Yuan</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="welcome1">
                            <ul class="list-inline">

                                <li>
                                    <div class="mart">
                                        <div class="btn-group">
                                            <a class="btn dropdown-toggle btn-select" data-toggle="dropdown" href="#">My account <span class="caret"></span></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="#">Account Info</a></li>
                                                <li><a href="#">Wish List</a></li>
                                                <li><a href="#">Sign in</a></li>
                                                <li><a href="#">Checkout</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li class="wishh"><a href="#">Wishlist</a></li>
                                <li class="wishh"><a href="#">Checkout</a></li>
                                <li>
                                    <div class="mart">
                                        <div class="btn-group">
                                            <a class="btn dropdown-toggle btn-select" data-toggle="dropdown" href="#">Mobile<!-- <span class="caret"></span> --></a>
                                            <!--  <ul class="dropdown-menu">
                                                 <li><a href="#">Item I</a></li>
                                                 <li><a href="#">Item II</a></li>
                                                 <li><a href="#">Item III</a></li>
                                                 <li><a href="#">Other</a></li>
                                             </ul> -->
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="clearfix"></div>
        <section class="header">
            <div class="container-fluid">
                <div class="col-md-2 col-sm-2">
                    <div class="logo">
                        <a href="#"> <img src="assets/img/logo.png" class="img-responsive" alt="logo" /></a>
                    </div>
                </div>
                <!--col-md-2-->
                <div class="col-md-5 col-sm-5 search-ehtica">
                    <div class="input-group">
                        <div class="input-group-btn search-panel">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                <span id="search_concept">All Categories</span> <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#contains">Android</a></li>
                                <li><a href="#its_equal">Baby</a></li>
                                <li><a href="#greather_than">Beer</a></li>
                                <li><a href="#less_than">Blankets</a></li>
                                <li class="divider"></li>
                                <li><a href="#all">Bathtime</a></li>
                            </ul>
                        </div>
                        <input type="hidden" name="search_param" value="all" id="search_param">
                        <input type="text" class="form-control" name="x" placeholder="I am shopping for product">
                        <span class="input-group-btn e-commerce">
                            <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search"></span></button>
                        </span>
                    </div>
                </div>
                <!--col-md-5-->
                <div class="col-md-1 col-sm-1 cart-ehtica">
                    <div class="login-panel">
                        <ul class="list-inline">
                            <li>
                                <a href=""><i class="fa fa-2x fa-shopping-cart"></i></a>
                            <label id="cart-badge" class="badge badge-warning">3</label>
                            </li>

                        </ul>
                    </div>
                </div>
                <!--col-md-1-->
                <div class="col-md-4 col-sm-4 register">
                    <div class="login">
                        <ul class="list-inline">
                            <li>
                                <button type="button" class="btn btn-primary">Login</button>
                            </li>
                            <li>
                                <button type="button" class="btn btn-success">Register</button>
                            </li>
                            <li>
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Help
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!--col-md-4-->
            </div>
        </section>
        <div class="clearfix"></div>
        <section class="ehtica-menu">
            <nav class="navbar navbar-inverse">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand hidden visible-xs visible-sm" href="#">Menu</a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">


                            <li class="dropdown mega-dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Accessories </a>
                                <ul class="dropdown-menu mega-dropdown-menu row">
                                    <li class="col-sm-3">
                                        <ul>
                                            <li class="dropdown-header">New in Stores</li>
                                            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                                <div class="carousel-inner">
                                                    <div class="item active">
                                                        <a href="#"><img src="http://placehold.it/254x150/3498db/f5f5f5/&amp;text=New+Collection" class="img-responsive" alt="product 1"></a>
                                                        <h4><small>Summer dress floral prints</small></h4>
                                                        <button class="btn btn-primary" type="button">49,99 €</button>
                                                        <button href="#" class="btn btn-default" type="button"><span class="glyphicon glyphicon-heart"></span> Add to Wishlist</button>
                                                    </div>
                                                    <!-- End Item -->
                                                    <div class="item">
                                                        <a href="#"><img src="http://placehold.it/254x150/ef5e55/f5f5f5/&amp;text=New+Collection" class="img-responsive" alt="product 2"></a>
                                                        <h4><small>Gold sandals with shiny touch</small></h4>
                                                        <button class="btn btn-primary" type="button">9,99 €</button>
                                                        <button href="#" class="btn btn-default" type="button"><span class="glyphicon glyphicon-heart"></span> Add to Wishlist</button>
                                                    </div>
                                                    <!-- End Item -->
                                                    <div class="item">
                                                        <a href="#"><img src="http://placehold.it/254x150/2ecc71/f5f5f5/&amp;text=New+Collection" class="img-responsive" alt="product 3"></a>
                                                        <h4><small>Denin jacket stamped</small></h4>
                                                        <button class="btn btn-primary" type="button">49,99 €</button>
                                                        <button href="#" class="btn btn-default" type="button"><span class="glyphicon glyphicon-heart"></span> Add to Wishlist</button>
                                                    </div>
                                                    <!-- End Item -->
                                                </div>
                                                <!-- End Carousel Inner -->
                                            </div>
                                            <!-- /.carousel -->
                                            <li class="divider"></li>
                                            <li><a href="#">View all Collection <span class="glyphicon glyphicon-chevron-right pull-right"></span></a></li>
                                        </ul>
                                    </li>
                                    <li class="col-sm-3">
                                        <ul>
                                            <li class="dropdown-header">Dresses</li>
                                            <li><a href="#">Unique Features</a></li>
                                            <li><a href="#">Image Responsive</a></li>
                                            <li><a href="#">Auto Carousel</a></li>
                                            <li><a href="#">Newsletter Form</a></li>
                                            <li><a href="#">Four columns</a></li>
                                            <li class="divider"></li>
                                            <li class="dropdown-header">Tops</li>
                                            <li><a href="#">Good Typography</a></li>
                                        </ul>
                                    </li>
                                    <li class="col-sm-3">
                                        <ul>
                                            <li class="dropdown-header">Jackets</li>
                                            <li><a href="#">Easy to customize</a></li>
                                            <li><a href="#">Glyphicons</a></li>
                                            <li><a href="#">Pull Right Elements</a></li>
                                            <li class="divider"></li>
                                            <li class="dropdown-header">Pants</li>
                                            <li><a href="#">Coloured Headers</a></li>
                                            <li><a href="#">Primary Buttons &amp; Default</a></li>
                                            <li><a href="#">Calls to action</a></li>
                                        </ul>
                                    </li>
                                    <li class="col-sm-3">
                                        <ul>
                                            <li class="dropdown-header">Accessories</li>
                                            <li><a href="#">Default Navbar</a></li>
                                            <li><a href="#">Lovely Fonts</a></li>
                                            <li><a href="#">Responsive Dropdown </a></li>
                                            <li class="divider"></li>
                                            <li class="dropdown-header">Newsletter</li>
                                            <form class="form" role="form">
                                                <div class="form-group">
                                                    <label class="sr-only" for="email">Email address</label>
                                                    <input type="email" class="form-control" id="email" placeholder="Enter email">
                                                </div>
                                                <button type="submit" class="btn btn-primary btn-block">Sign in</button>
                                            </form>
                                        </ul>
                                    </li>
                                </ul>			
                            </li>
                            <li class="dropdown mega-dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Baby & Nursery</a>
                                <ul class="dropdown-menu mega-dropdown-menu">
                                    <li class="dropdown1 col-sm-3">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown Customers</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Action</a></li>
                                            <li><a href="#">Another action</a></li>
                                            <li><a href="#">Something else here</a></li>
                                            <li role="separator" class="divider"></li>
                                            <li><a href="#">Separated link</a></li>
                                        </ul>
                                    </li>

                                    <li class="col-sm-3">Features Customers

                                    </li>
                                    <li class="col-sm-3">Plus Customers

                                    </li> 
                                    <li class="col-sm-3">Much more Customers

                                    </li>

                                </ul>		
                            </li>
                            <li class="dropdown mega-dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Top Brands </a>
                                <ul class="dropdown-menu mega-dropdown-menu">
                                    <li class="dropdown1 col-sm-3">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown Vechiles </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Action</a></li>
                                            <li><a href="#">Another action</a></li>
                                            <li><a href="#">Something else here</a></li>
                                            <li role="separator" class="divider"></li>
                                            <li><a href="#">Separated link</a></li>
                                        </ul>
                                    </li>
                                    <li class="col-sm-3">Features Vechiles

                                    </li>
                                    <li class="col-sm-3">Plus Vechiles

                                    </li>
                                    <li class="col-sm-3">Much more Vechiles

                                    </li>
                                </ul>		
                            </li>
                            <li class="dropdown mega-dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> best sale</a>
                                <ul class="dropdown-menu mega-dropdown-menu">
                                    <li class="dropdown1 col-sm-3">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown Installers</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Action</a></li>
                                            <li><a href="#">Another action</a></li>
                                            <li><a href="#">Something else here</a></li>
                                            <li role="separator" class="divider"></li>
                                            <li><a href="#">Separated link</a></li>
                                        </ul>
                                    </li>
                                    <li class="col-sm-3">Features Installers

                                    </li>
                                    <li class="col-sm-3">Plus Installers

                                    </li>
                                    <li class="col-sm-3">Much more Installers

                                    </li>
                                </ul>		
                            </li>
                            <li class="dropdown mega-dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ehtica brands </a>
                                <ul class="dropdown-menu mega-dropdown-menu">
                                    <li class="dropdown1 col-sm-3">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown Mangers </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Action</a></li>
                                            <li><a href="#">Another action</a></li>
                                            <li><a href="#">Something else here</a></li>
                                            <li role="separator" class="divider"></li>
                                            <li><a href="#">Separated link</a></li>
                                        </ul>
                                    </li>
                                    <li class="col-sm-3">Features Mangers

                                    </li>
                                    <li class="col-sm-3">Plus Mangers

                                    </li>
                                    <li class="col-sm-3">Much more Mangers

                                    </li>
                                </ul>		
                            </li>
                            <li class="dropdown mega-dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Men’s  </a>
                                <ul class="dropdown-menu mega-dropdown-menu">
                                    <li class="dropdown1 col-sm-3">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown Schdules </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Action</a></li>
                                            <li><a href="#">Another action</a></li>
                                            <li><a href="#">Something else here</a></li>
                                            <li role="separator" class="divider"></li>
                                            <li><a href="#">Separated link</a></li>
                                        </ul>
                                    </li>
                                    <li class="col-sm-3">Features Schdules

                                    </li>
                                    <li class="col-sm-3">Plus Schdules

                                    </li>
                                    <li class="col-sm-3">Much more Schdules

                                    </li>
                                </ul>		
                            </li>

                            <li class="dropdown mega-dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">women’s  </a>
                                <ul class="dropdown-menu mega-dropdown-menu">
                                    <li class="dropdown1 col-sm-3">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown Schdules </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Action</a></li>
                                            <li><a href="#">Another action</a></li>
                                            <li><a href="#">Something else here</a></li>
                                            <li role="separator" class="divider"></li>
                                            <li><a href="#">Separated link</a></li>
                                        </ul>
                                    </li>
                                    <li class="col-sm-3">Features Schdules

                                    </li>
                                    <li class="col-sm-3">Plus Schdules

                                    </li>
                                    <li class="col-sm-3">Much more Schdules

                                    </li>
                                </ul>		
                            </li>

                            <li class="dropdown mega-dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">home & garden  </a>
                                <ul class="dropdown-menu mega-dropdown-menu">
                                    <li class="dropdown1 col-sm-3">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown Schdules </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Action</a></li>
                                            <li><a href="#">Another action</a></li>
                                            <li><a href="#">Something else here</a></li>
                                            <li role="separator" class="divider"></li>
                                            <li><a href="#">Separated link</a></li>
                                        </ul>
                                    </li>
                                    <li class="col-sm-3">Features Schdules

                                    </li>
                                    <li class="col-sm-3">Plus Schdules

                                    </li>
                                    <li class="col-sm-3">Much more Schdules

                                    </li>
                                </ul>		
                            </li>

                            <li class="dropdown mega-dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">health & beauty  </a>
                                <ul class="dropdown-menu mega-dropdown-menu">
                                    <li class="dropdown1 col-sm-3">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown Schdules </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Action</a></li>
                                            <li><a href="#">Another action</a></li>
                                            <li><a href="#">Something else here</a></li>
                                            <li role="separator" class="divider"></li>
                                            <li><a href="#">Separated link</a></li>
                                        </ul>
                                    </li>
                                    <li class="col-sm-3">Features Schdules

                                    </li>
                                    <li class="col-sm-3">Plus Schdules

                                    </li>
                                    <li class="col-sm-3">Much more Schdules

                                    </li>
                                </ul>		
                            </li>

                            <li class="dropdown mega-dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">jewellery & watches </a>
                                <ul class="dropdown-menu mega-dropdown-menu">
                                    <li class="dropdown1 col-sm-3">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown Schdules </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Action</a></li>
                                            <li><a href="#">Another action</a></li>
                                            <li><a href="#">Something else here</a></li>
                                            <li role="separator" class="divider"></li>
                                            <li><a href="#">Separated link</a></li>
                                        </ul>
                                    </li>
                                    <li class="col-sm-3">Features Schdules

                                    </li>
                                    <li class="col-sm-3">Plus Schdules

                                    </li>
                                    <li class="col-sm-3">Much more Schdules

                                    </li>
                                </ul>		
                            </li>

                            <li class="dropdown mega-dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">technology </a>
                                <ul class="dropdown-menu mega-dropdown-menu">
                                    <li class="dropdown1 col-sm-3">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown Schdules </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Action</a></li>
                                            <li><a href="#">Another action</a></li>
                                            <li><a href="#">Something else here</a></li>
                                            <li role="separator" class="divider"></li>
                                            <li><a href="#">Separated link</a></li>
                                        </ul>
                                    </li>
                                    <li class="col-sm-3">Features Schdules

                                    </li>
                                    <li class="col-sm-3">Plus Schdules

                                    </li>
                                    <li class="col-sm-3">Much more Schdules

                                    </li>
                                </ul>		
                            </li>

                            <li class="dropdown mega-dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">sports & Leisure  </a>
                                <ul class="dropdown-menu mega-dropdown-menu">
                                    <li class="dropdown1 col-sm-3">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown Schdules </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Action</a></li>
                                            <li><a href="#">Another action</a></li>
                                            <li><a href="#">Something else here</a></li>
                                            <li role="separator" class="divider"></li>
                                            <li><a href="#">Separated link</a></li>
                                        </ul>
                                    </li>
                                    <li class="col-sm-3">Features Schdules

                                    </li>
                                    <li class="col-sm-3">Plus Schdules

                                    </li>
                                    <li class="col-sm-3">Much more Schdules

                                    </li>
                                </ul>		
                            </li>

                        </ul>

                        <!--  <ul class="nav navbar-nav navbar-right">
                           
                           <li class="dropdown1">
                             <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown </a>
                             <ul class="dropdown-menu">
                               <li><a href="#">Action</a></li>
                               <li><a href="#">Another action</a></li>
                               <li><a href="#">Something else here</a></li>
                               <li role="separator" class="divider"></li>
                               <li><a href="#">Separated link</a></li>
                             </ul>
                           </li>
                         </ul> -->
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
        </section>
        <div class="clearfix"></div>
        <section class="banner">
            <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:980px;height:380px;overflow:hidden;visibility:hidden;">
                <!-- Loading Screen -->
               
                <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:380px;overflow:hidden;"> 
                    <div>
                        <img data-u="image" src="assets/img/banner.jpg" />
                        <div class="col-md-4 grand">
                            <h3 data-animation="animated bounceInDown" class="animated bounceInDown"> Grand summer sale!</h3>
                            <h4 data-animation="animated bounceInUp" class="animated bounceInUp">upto 40% discount on women's clothing </h4>
                        </div>
                    </div>
                    <div>
                        <img data-u="image" src="assets/img/banner-1.jpg" />
                        <div class="col-md-4 grand">
                            <h3 data-animation="animated bounceInDown" class="animated bounceInDown"> Grand summer sale!</h3>
                            <h4 data-animation="animated bounceInUp" class="animated bounceInUp">upto 40% discount on women's clothing </h4>
                        </div>
                    </div>
                    <div>
                        <img data-u="image" src="assets/img/banner-2.jpg" />
                        <div class="col-md-4 grand">
                            <h3 data-animation="animated bounceInDown" class="animated bounceInDown"> Grand summer sale!</h3>
                            <h4 data-animation="animated bounceInUp" class="animated bounceInUp">upto 40% discount on women's clothing </h4>
                        </div>
                    </div>
                    <div>
                        <img data-u="image" src="assets/img/banner-3.jpg" />
                        <div class="col-md-4 grand">
                            <h3 data-animation="animated bounceInDown" class="animated bounceInDown"> Grand summer sale!</h3>
                            <h4 data-animation="animated bounceInUp" class="animated bounceInUp">upto 40% discount on women's clothing </h4>
                        </div>
                    </div>
                    <div>
                        <img data-u="image" src="assets/img/banner-2.jpg" />
                        <div class="col-md-4 grand">
                            <h3 data-animation="animated bounceInDown" class="animated bounceInDown"> Grand summer sale!</h3>
                            <h4 data-animation="animated bounceInUp" class="animated bounceInUp">upto 40% discount on women's clothing </h4>
                        </div>
                    </div>
                    <div>
                        <img data-u="image" src="assets/img/banner-1.jpg" />
                        <div class="col-md-4 grand">
                            <h3 data-animation="animated bounceInDown" class="animated bounceInDown"> Grand summer sale!</h3>
                            <h4 data-animation="animated bounceInUp" class="animated bounceInUp">upto 40% discount on women's clothing </h4>
                        </div>
                    </div>
                    <!-- <div style="background-color:#ff7c28;">
                        <div style="position:absolute;top:50px;left:50px;width:450px;height:62px;z-index:0;font-size:16px;color:#000000;line-height:24px;text-align:left;padding:5px;box-sizing:border-box;">Photos in this slider are to demostrate jssor slider,<br />
                            which are not licensed for any other purpose.
                        </div>
                    </div> -->
                    <a data-u="any" href="https://www.jssor.com" style="display:none">slider in bootstrap</a>
                </div>
                <!-- Bullet Navigator -->
                <div data-u="navigator" class="jssorb053" style="position:absolute;bottom:12px;right:12px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
                    <div data-u="prototype" class="i" style="width:16px;height:16px;">
                        <svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                        <path class="b" d="M11400,13800H4600c-1320,0-2400-1080-2400-2400V4600c0-1320,1080-2400,2400-2400h6800 c1320,0,2400,1080,2400,2400v6800C13800,12720,12720,13800,11400,13800z"></path>
                        </svg>
                    </div>
                </div>
                <!-- Arrow Navigator -->
                <!-- <div data-u="arrowleft" class="jssora093" style="width:50px;height:50px;top:0px;left:30px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
                    <svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                        <circle class="c" cx="8000" cy="8000" r="5920"></circle>
                        <polyline class="a" points="7777.8,6080 5857.8,8000 7777.8,9920 "></polyline>
                        <line class="a" x1="10142.2" y1="8000" x2="5857.8" y2="8000"></line>
                    </svg>
                </div> -->
                <!--  <div data-u="arrowright" class="jssora093" style="width:50px;height:50px;top:0px;right:30px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
                     <svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                         <circle class="c" cx="8000" cy="8000" r="5920"></circle>
                         <polyline class="a" points="8222.2,6080 10142.2,8000 8222.2,9920 "></polyline>
                         <line class="a" x1="5857.8" y1="8000" x2="10142.2" y2="8000"></line>
                     </svg>
                 </div> -->
            </div>

        </section>

        <div class="clearfix">
        </div>
        <section class="commerce-ehtica">
            <div class="container">

                <div class="col-md-3 col-sm-3">
                    <div class="back-image">
                        <a href="#"> <img src="assets/img/image-1.png" class="img-responsive" alt="logo" /></a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3">
                    <div class="back-image1">
                        <a href="#">  <img src="assets/img/image-2.png" class="img-responsive" alt="logo" /></a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3">
                    <div class="back-image">
                        <a href="#"> <img src="assets/img/image-3.png" class="img-responsive" alt="logo" /></a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3">
                    <div class="back-image1">
                        <a href="#"> <img src="assets/img/image-4.png" class="img-responsive" alt="logo" /></a>
                    </div>
                </div>

            </div>
        </section>

        <div class="clearfix">
        </div>

        <section class="products">
            <div class="container">
                <div class="for-all">
                    <h1>FOR ALL PRODUCTS</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod lorem solo tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-2 col-sm-4 cap">
                        <div class="">
                            <a href="#"> <img src="assets/img/cap.png" class="img-responsive" alt="logo" /></a>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-4 cap1">
                        <div class="">
                            <a href="#"> <img src="assets/img/dress.png" class="img-responsive" alt="logo" /></a>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-4 cap">
                        <div class="">
                            <a href="#"> <img src="assets/img/bag.png" class="img-responsive" alt="logo" /></a>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-4 cap1">
                        <div class="">
                            <a href="#">  <img src="assets/img/ring.png" class="img-responsive" alt="logo" /></a>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-4 cap">
                        <div class="">
                            <img src="assets/img/watch.png" class="img-responsive" alt="logo" />
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-4 cap1">
                        <div class="">
                            <a href="#">   <img src="assets/img/glass.png" class="img-responsive" alt="logo" /></a>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-md-2 col-sm-4 cap1">
                        <div class="">
                            <a href="#"> <img src="assets/img/machine.png" class="img-responsive" alt="logo" /></a>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-4 cap">
                        <div class="">
                            <a href="#"><img src="assets/img/chain.png" class="img-responsive" alt="logo" /></a>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-4 cap1">
                        <div class="">
                            <a href="#"> <img src="assets/img/sliper.png" class="img-responsive" alt="logo" /></a>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-4 cap">
                        <div class="">
                            <a href="#">  <img src="assets/img/ball.png" class="img-responsive" alt="logo" /></a>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-4 cap1">
                        <div class="">
                            <a href="#"><img src="assets/img/dress.png" class="img-responsive" alt="logo" /></a>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-4 cap">
                        <div class="">
                            <a href="#">  <img src="assets/img/camera.png" class="img-responsive" alt="logo" /></a>
                        </div>
                    </div>

                </div>

            </div>
        </section>

        <div class="clearfix">
        </div>

        <section class="products1">
            <div class="container">
                <div class="for-all">
                    <h1>BE IN TREND</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod lorem solo tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="earings">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <div class="acc">
                                    <img src="assets/img/accessories.png" class="img-responsive" alt="logo" />
                                </div>
                                <div class="steel">
                                    <h3><a href="#">steel ring</a></h3>
                                    <p>$ 95.00</p>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <div class="acc">
                                    <img src="assets/img/earing.png" class="img-responsive" alt="logo" />
                                </div>
                                <div class="steel">
                                    <h3><a href="#">earrings</a></h3>
                                    <p>$ 130.00</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <div class="acc">
                                    <img src="assets/img/silver.png" class="img-responsive" alt="logo" />
                                </div>
                                <div class="steel">
                                    <h3><a href="#">silver earrings</a></h3>
                                    <p>$ 128.00</p>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <div class="acc">
                                    <img src="assets/img/gold.png" class="img-responsive" alt="logo" />
                                </div>
                                <div class="steel">
                                    <h3><a href="#">gold earrings</a></h3>
                                    <p>$ 325.00</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">

                    <div id="bootstrap-touch-slider" class="carousel bs-slider fade  control-round indicators-line" data-ride="carousel" data-pause="hover" data-interval="5000">

                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#bootstrap-touch-slider" data-slide-to="0" class="active"></li>
                            <li data-target="#bootstrap-touch-slider" data-slide-to="1"></li>
                            <li data-target="#bootstrap-touch-slider" data-slide-to="2"></li>
                        </ol>

                        <div class="carousel-inner" role="listbox">

                            <div class="item active">

                                <div class="touch-ehtica"> <img src="assets/img/slider-1.jpg" alt="Bootstrap Touch Slider" class="img-responsive" /></div>


                                <div class="square">
                                    <img src="assets/img/square-mask.png" alt="Bootstrap Touch Slider" class="img-responsive" />
                                </div>

                                <div class="collection">
                                    <h2>new collection</h2>
                                    <h3>wedding dress</h3>
                                    <div class="view-all">
                                        <button type="button" class="btn btn-info">view all</button>
                                    </div>
                                </div>

                            </div>

                            <div class="item">


                                <div class="touch-ehtica"> <img src="assets/img/slider-2.jpg" alt="Bootstrap Touch Slider" class="img-responsive" /></div>


                                <div class="square">
                                    <img src="assets/img/square-mask.png" alt="Bootstrap Touch Slider" class="img-responsive" />
                                </div>

                                <div class="collection">
                                    <h2>new collection</h2>
                                    <h3>wedding dress</h3>
                                    <div class="view-all">
                                        <button type="button" class="btn btn-info">view all</button>
                                    </div>
                                </div>

                            </div>

                            <div class="item">


                                <div class="touch-ehtica"> <img src="assets/img/slider-3.jpg" alt="Bootstrap Touch Slider" class="img-responsive" /></div>


                                <div class="square">
                                    <img src="assets/img/square-mask.png" alt="Bootstrap Touch Slider" class="img-responsive" />
                                </div>

                                <div class="collection">
                                    <h2>new collection</h2>
                                    <h3>wedding dress</h3>
                                    <div class="view-all">
                                        <button type="button" class="btn btn-info">view all</button>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <!-- End of Wrapper For Slides -->

                    </div>
                    <!-- End  bootstrap-touch-slider Slider -->

                </div>
            </div>
        </section>

        <div class="clearfix"></div>

        <section class="consumer-voice">
            <div class="container">
                <div class="col-md-4">
                    <div class="testimonial">
                        <h3>consumer voice</h3>
                    </div>
                    <div class="test-voice">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                                <div class="item active">
                                    <div class="row" style="padding: 20px">

                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="tester-test">
                                                    <img src="http://demos1.showcasedemos.in/jntuicem2017/html/v1/assets/images/jack.jpg" class="img-responsive" style="">
                                                </div>
                                            </div>
                                            <div class="col-sm-8 dummy">
                                                <!-- <button style="border: none;"><i class="fa fa-quote-left testimonial_fa" aria-hidden="true"></i></button>  -->

                                                <blockquote>

                                                    <p class="testimonial_para">Lorem Ipsum is simply dummy text of the printing and typesetting industry's standard dummy text ever since the 1500s.</p>

                                                </blockquote>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="row" style="padding: 20px">

                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="tester-test">
                                                    <img src="http://demos1.showcasedemos.in/jntuicem2017/html/v1/assets/images/jack.jpg" class="img-responsive" style="">
                                                </div>
                                            </div>
                                            <div class="col-sm-8 dummy">
                                                <blockquote>
                                                    <p class="testimonial_para">Lorem Ipsum is simply dummy text of the printing and typesetting industry's standard dummy text ever since the 1500s.</p>
                                                </blockquote>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="testimonial">
                        <h3>suppliers voice</h3>
                    </div>
                    <div class="test-voice">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                                <div class="item active">
                                    <div class="row" style="padding: 20px">

                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="tester-test">
                                                    <img src="http://demos1.showcasedemos.in/jntuicem2017/html/v1/assets/images/jack.jpg" class="img-responsive" style="">
                                                </div>
                                            </div>
                                            <div class="col-sm-8 dummy">
                                                <!-- <button style="border: none;"><i class="fa fa-quote-left testimonial_fa" aria-hidden="true"></i></button>  -->

                                                <blockquote>

                                                    <p class="testimonial_para">Lorem Ipsum is simply dummy text of the printing and typesetting industry's standard dummy text ever since the 1500s.</p>

                                                </blockquote>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="row" style="padding: 20px">

                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="tester-test">
                                                    <img src="http://demos1.showcasedemos.in/jntuicem2017/html/v1/assets/images/jack.jpg" class="img-responsive" style="">
                                                </div>
                                            </div>
                                            <div class="col-sm-8 dummy">
                                                <blockquote>
                                                    <p class="testimonial_para">Lorem Ipsum is simply dummy text of the printing and typesetting industry's standard dummy text ever since the 1500s.</p>
                                                </blockquote>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-8 ehti-supp">
                    <div class="consumer-video clearfix">
                        <div class="col-md-6 col-sm-6">
                            <div class="supp">
                                <iframe width="" height="" src="https://www.youtube.com/embed/dILFQ1ApURo" frameborder="0" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="supp">
                                <iframe width="" height="" src="https://www.youtube.com/embed/dILFQ1ApURo" frameborder="0" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="clearfix"></div>
        <section class="sell-on">
            <div class="container">
                <div class="amazon clearfix">
                    <h1>Why sell on Ehtica.com</h1>
                    <div class="on-ehtica">
                        <div class="col-md-4 col-sm-4">
                            <div class="am-ehtica">
                                <div class="col-md-4">
                                    <div class="sell-image">
                                        <img src="assets/img/sell-1.png" class="img-responsive" alt="logo" />
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="reach">
                                        <p>Reach crores of customers</p>
                                    </div>
                                </div>
                            </div>



                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="am-ehtica">
                                <div class="col-md-4">
                                    <div class="sell-image">
                                        <img src="assets/img/sell-2.png" class="img-responsive" alt="logo" />
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="reach">
                                        <p>We pick and ship products for you</p>
                                    </div>
                                </div>
                            </div>



                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="am-ehtica">
                                <div class="col-md-4">
                                    <div class="sell-image">
                                        <img src="assets/img/sell-3.png" class="img-responsive" alt="logo" />
                                    </div>
                                </div>
                                <div class="col-md-8 direct">
                                    <div class="reach">
                                        <p>You get quick payment to your account</p>
                                    </div>
                                </div>
                            </div>



                        </div>
                    </div>
                </div>

                <div class="easy-amazon">
                    <h2>How easy it is to sell on Ehtica</h2>
                    <div class="col-md-3 direct">
                        <div class="am-ehtica">
                            <div class="col-md-4">
                                <div class="sell-image">
                                    <img src="assets/img/man-1.png" class="img-responsive" alt="logo" />
                                </div>
                            </div>
                            <div class="col-md-8 direct">
                                <div class="reach1">
                                    <h4>Set-up Your Seller Account on Ehtica</h4>
                                    <p>Provide your business details, bank account details and your tax information</p>
                                </div>
                            </div>
                        </div>



                    </div>
                    <div class="col-md-3 direct">
                        <div class="am-ehtica">
                            <div class="col-md-4">
                                <div class="sell-image">
                                    <img src="assets/img/tag.png" class="img-responsive" alt="logo" />
                                </div>
                            </div>
                            <div class="col-md-8 direct">
                                <div class="reach1">
                                    <h4>List Your Products</h4>
                                    <p>Provide the description and price of the product you want to sell. Customers use this information before they buy.</p>
                                </div>
                            </div>
                        </div>



                    </div>
                    <div class="col-md-3 direct">
                        <div class="am-ehtica">
                            <div class="col-md-4">
                                <div class="sell-image">
                                    <img src="assets/img/ship.png" class="img-responsive" alt="logo" />
                                </div>
                            </div>
                            <div class="col-md-8 direct">
                                <div class="reach1">
                                    <h4>Ship Orders</h4>
                                    <p>Once a buyer orders your product, you can use Ehtica delivery service to pick and ship</p>
                                </div>
                            </div>
                        </div>



                    </div>
                    <div class="col-md-3 direct">
                        <div class="am-ehtica">
                            <div class="col-md-4">
                                <div class="sell-image">
                                    <img src="assets/img/pay.png" class="img-responsive" alt="logo" />
                                </div>
                            </div>
                            <div class="col-md-8 direct">
                                <div class="reach1">
                                    <h4>Get Payment</h4>
                                    <p>Your Payment is deposited directly into your bank account within 7 days.</p>
                                </div>
                            </div>
                        </div>



                    </div>
                </div>
            </div>
        </section>

        <div class="clearfix"><div>

                <section class="ehtica-footer">
                    <div class="container-fluid">
                        <div class="foot">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="service">
                                        <h1>Customer Service</h1>
                                        <ul class="list-unstyled">
                                            <li><a href="#">Customer Service, Products Supports & Help Line</a></li>

                                            <li><a href="#">Store Location</a></li>
                                            <li><a href="#">Your Account</a></li>
                                            <li><a href="#">Track Your Order</a></li>
                                            <li><a href="#">Returns & Refunds</a></li>
                                            <li><a href="#">Delivery & Collection</a></li>
                                            <li><a href="#">Product Recall</a></li>
                                            <li><a href="#">Email Sign UP</a></li>
                                            <li><a href="#">Where's My Order</a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="service">
                                        <h1>payment methods</h1>
                                        <ul class="list-unstyled">
                                            <li><a href="#">Payment Types</a></li>
                                            <li><a href="#">Gift Cards</a></li>
                                            <li><a href="#">Voucher Codes</a></li>
                                            <li><a href="#">EHTICA Insurance</a></li>
                                            <li><a href="#">Delivery & Returns</a></li>

                                        </ul>
                                    </div>


                                    <div class="service">
                                        <h1>after care</h1>
                                        <ul class="list-unstyled">
                                            <li><a href="#">Product care</a></li>


                                        </ul>
                                    </div>
                                </div>


                                <div class="col-md-3">
                                    <div class="service">
                                        <h1>Product Information</h1>
                                        <ul class="list-unstyled">
                                            <li><a href="#">Features & Articles</a></li>
                                            <li><a href="#">Site Map</a></li>
                                            <li><a href="#">Product Reviews</a></li>
                                            <li><a href="#">Channel Island & Global Services</a></li>


                                        </ul>
                                    </div>


                                    <div class="service">
                                        <h1>other ehtica sites</h1>
                                        <ul class="list-unstyled">
                                            <li><a href="#">Ehtcaconsulting.com</a></li>
                                            <li><a href="#">Ehticacareers.com</a></li>


                                        </ul>
                                    </div>
                                </div>



                                <div class="col-md-3">
                                    <div class="service">
                                        <h1>about ehtica</h1>
                                        <ul class="list-unstyled">
                                            <li><a href="#">Privacy Policy</a></li>
                                            <li><a href="#">About Us</a></li>
                                            <li><a href="#">Affiliate Program</a></li>
                                            <li><a href="#">EHTICA For Business</a></li>
                                            <li><a href="#">Press Enquiries</a></li>
                                            <li><a href="#">Term & Conditions</a></li>

                                        </ul>
                                    </div>




                                    <div class="email">

                                        <div class="inner-addon right-addon">
                                            <i class="glyphicon glyphicon-envelope"></i>
                                            <input type="text" class="form-control" placeholder="Enter Your Email" />
                                        </div>
                                        <ul class="list-inline">
                                            <li><a href="#"> <img src="assets/img/card-1.png" class="img-responsive" alt="logo" /></a></li>
                                            <li><a href="#"> <img src="assets/img/card-2.png" class="img-responsive" alt="logo" /></a></li>
                                            <li><a href="#"> <img src="assets/img/card-3.png" class="img-responsive" alt="logo" /></a></li>
                                            <li><a href="#"> <img src="assets/img/card-4.png" class="img-responsive" alt="logo" /></a></li>
                                        </ul>

                                    </div>
                                </div>



                            </div>

                            <section class="ehtica-border"></section>

                            <div class="row">
                                <div class="col-md-4 col-sm-4">
                                    <div class="address">
                                        <h1>HEADQUARTERS ADMINISTRATIVE OFFICE</h1>
                                        <ul class="list-unstyled">
                                            <li>EHTCA CONSULTING GROUP Ltd</li>
                                            <li>3rd Floor, 14 Hanover Street,</li>
                                            <li>Hanover square London,</li>
                                            <li>WISIYH, UK.</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-8 col-sm-8 fft-ehtica">
                                    <div class="carousel slide media-carousel" id="media">
                                        <div class="carousel-inner">
                                            <div class="item  active">
                                                <div class="row">
                                                    <div class="col-md-4 col-sm-4">
                                                        <a class="" href="#"><img src="assets/img/i-1.png" class="img-responsive" alt="logo" /></a>
                                                    </div>          
                                                    <div class="col-md-4 col-sm-4">
                                                        <a class="" href="#"><img src="assets/img/i-2.png" class="img-responsive" alt="logo" /></a>
                                                    </div>
                                                    <div class="col-md-4 col-sm-4">
                                                        <a class="" href="#"><img src="assets/img/i-3.png" class="img-responsive" alt="logo" /></a>
                                                    </div>        
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="row">
                                                    <div class="col-md-4 col-sm-4">
                                                        <a class="" href="#"><img src="assets/img/i-1.png" class="img-responsive" alt="logo" /></a>
                                                    </div>          
                                                    <div class="col-md-4 col-sm-4">
                                                        <a class="" href="#"><img src="assets/img/i-2.png" class="img-responsive" alt="logo" /></a>
                                                    </div>
                                                    <div class="col-md-4 col-sm-4">
                                                        <a class="" href="#"><img src="assets/img/i-3.png" class="img-responsive" alt="logo" /></a>
                                                    </div>        
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="row">
                                                    <div class="col-md-4 col-sm-4">
                                                        <a class="" href="#"><img src="assets/img/i-1.png" class="img-responsive" alt="logo" /></a>
                                                    </div>          
                                                    <div class="col-md-4 col-sm-4">
                                                        <a class="" href="#"><img src="assets/img/i-2.png" class="img-responsive" alt="logo" /></a>
                                                    </div>
                                                    <div class="col-md-4 col-sm-4">
                                                        <a class="" href="#"><img src="assets/img/i-3.png" class="img-responsive" alt="logo" /></a>
                                                    </div>      
                                                </div>
                                            </div>
                                        </div>
                                        <a data-slide="prev" href="#media" class="left carousel-control">‹</a>
                                        <a data-slide="next" href="#media" class="right carousel-control">›</a>
                                    </div> 
                                </div>
                            </div>

                            <section class="ehtica-border"></section>

                            <div class="social-icon">
                                <ul class="list-inline">
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>

                            <div class="copyright">
                                <p>© 2017 EHTICA E-commerce All rights reserved</p>
                            </div>

                        </div>


                    </div>
                </section>



                </body>

                <!-- JavaScript Section Start -->
                <?php echo theme_js('jquery.min.js', true) ?>
                <?php echo theme_js('bootstrap.min.js', true) ?>
                <!-- JavaScript Section End -->

                <script type="text/javascript">
                    jssor_1_slider_init = function () {

                        var jssor_1_SlideshowTransitions = [
                            {$Duration: 500, $Delay: 30, $Cols: 8, $Rows: 4, $Clip: 15, $SlideOut: true, $Formation: $JssorSlideshowFormations$.$FormationStraightStairs, $Assembly: 2049, $Easing: $Jease$.$OutQuad},
                            {$Duration: 500, $Delay: 80, $Cols: 8, $Rows: 4, $Clip: 15, $SlideOut: true, $Easing: $Jease$.$OutQuad},
                            {$Duration: 1000, x: -0.2, $Delay: 40, $Cols: 12, $SlideOut: true, $Formation: $JssorSlideshowFormations$.$FormationStraight, $Assembly: 260, $Easing: {$Left: $Jease$.$InOutExpo, $Opacity: $Jease$.$InOutQuad}, $Opacity: 2, $Outside: true, $Round: {$Top: 0.5}},
                            {$Duration: 2000, y: -1, $Delay: 60, $Cols: 15, $SlideOut: true, $Formation: $JssorSlideshowFormations$.$FormationStraight, $Easing: $Jease$.$OutJump, $Round: {$Top: 1.5}},
                            {$Duration: 1200, x: 0.2, y: -0.1, $Delay: 20, $Cols: 8, $Rows: 4, $Clip: 15, $During: {$Left: [0.3, 0.7], $Top: [0.3, 0.7]}, $Formation: $JssorSlideshowFormations$.$FormationStraightStairs, $Assembly: 260, $Easing: {$Left: $Jease$.$InWave, $Top: $Jease$.$InWave, $Clip: $Jease$.$OutQuad}, $Round: {$Left: 1.3, $Top: 2.5}}
                        ];

                        var jssor_1_options = {
                            $AutoPlay: 1,
                            $SlideshowOptions: {
                                $Class: $JssorSlideshowRunner$,
                                $Transitions: jssor_1_SlideshowTransitions,
                                $TransitionsOrder: 1
                            },
                            $ArrowNavigatorOptions: {
                                $Class: $JssorArrowNavigator$
                            },
                            $BulletNavigatorOptions: {
                                $Class: $JssorBulletNavigator$
                            }
                        };

                        var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

                        /*#region responsive code begin*/

                        var MAX_WIDTH = 1600;

                        function ScaleSlider() {
                            var containerElement = jssor_1_slider.$Elmt.parentNode;
                            var containerWidth = containerElement.clientWidth;

                            if (containerWidth) {

                                var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                                jssor_1_slider.$ScaleWidth(expectedWidth);
                            } else {
                                window.setTimeout(ScaleSlider, 30);
                            }
                        }

                        ScaleSlider();

                        $Jssor$.$AddEvent(window, "load", ScaleSlider);
                        $Jssor$.$AddEvent(window, "resize", ScaleSlider);
                        $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
                        /*#endregion responsive code end*/
                    };
                </script>









                <script>
                    $(".dropdown-menu li a").click(function () {
                        var selText = $(this).text();
                        $(this).parents('.btn-group').find('.dropdown-toggle').html(selText + ' <span class="caret"></span>');
                    });

                    $("#btnSearch").click(function () {
                        alert($('.btn-select').text() + ", " + $('.btn-select2').text());
                    });
                </script>

                <script>
                    $(document).ready(function (e) {
                        $('.search-panel .dropdown-menu').find('a').click(function (e) {
                            e.preventDefault();
                            var param = $(this).attr("href").replace("#", "");
                            var concept = $(this).text();
                            $('.search-panel span#search_concept').text(concept);
                            $('.input-group #search_param').val(param);
                        });
                    });
                </script>



                <script>
                    $(document).ready(function () {
                        $(".dropdown1").hover(
                                function () {
                                    $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true, true).slideDown("400");
                                    $(this).toggleClass('open');
                                },
                                function () {
                                    $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true, true).slideUp("400");
                                    $(this).toggleClass('open');
                                }
                        );
                    });
                </script>

                <script>
                    (function (a) {
                        if (typeof define === "function" && define.amd && define.amd.jQuery) {
                            define(["jquery"], a)
                        } else {
                            if (typeof module !== "undefined" && module.exports) {
                                a(require("jquery"))
                            } else {
                                a(jQuery)
                            }
                        }
                    }(function (f) {
                        var y = "1.6.15",
                                p = "left",
                                o = "right",
                                e = "up",
                                x = "down",
                                c = "in",
                                A = "out",
                                m = "none",
                                s = "auto",
                                l = "swipe",
                                t = "pinch",
                                B = "tap",
                                j = "doubletap",
                                b = "longtap",
                                z = "hold",
                                E = "horizontal",
                                u = "vertical",
                                i = "all",
                                r = 10,
                                g = "start",
                                k = "move",
                                h = "end",
                                q = "cancel",
                                a = "ontouchstart" in window,
                                v = window.navigator.msPointerEnabled && !window.navigator.pointerEnabled && !a,
                                d = (window.navigator.pointerEnabled || window.navigator.msPointerEnabled) && !a,
                                C = "TouchSwipe";
                        var n = {
                            fingers: 1,
                            threshold: 75,
                            cancelThreshold: null,
                            pinchThreshold: 20,
                            maxTimeThreshold: null,
                            fingerReleaseThreshold: 250,
                            longTapThreshold: 500,
                            doubleTapThreshold: 200,
                            swipe: null,
                            swipeLeft: null,
                            swipeRight: null,
                            swipeUp: null,
                            swipeDown: null,
                            swipeStatus: null,
                            pinchIn: null,
                            pinchOut: null,
                            pinchStatus: null,
                            click: null,
                            tap: null,
                            doubleTap: null,
                            longTap: null,
                            hold: null,
                            triggerOnTouchEnd: true,
                            triggerOnTouchLeave: false,
                            allowPageScroll: "auto",
                            fallbackToMouseEvents: true,
                            excludedElements: "label, button, input, select, textarea, a, .noSwipe",
                            preventDefaultEvents: true
                        };
                        f.fn.swipe = function (H) {
                            var G = f(this),
                                    F = G.data(C);
                            if (F && typeof H === "string") {
                                if (F[H]) {
                                    return F[H].apply(this, Array.prototype.slice.call(arguments, 1))
                                } else {
                                    f.error("Method " + H + " does not exist on jQuery.swipe")
                                }
                            } else {
                                if (F && typeof H === "object") {
                                    F.option.apply(this, arguments)
                                } else {
                                    if (!F && (typeof H === "object" || !H)) {
                                        return w.apply(this, arguments)
                                    }
                                }
                            }
                            return G
                        };
                        f.fn.swipe.version = y;
                        f.fn.swipe.defaults = n;
                        f.fn.swipe.phases = {
                            PHASE_START: g,
                            PHASE_MOVE: k,
                            PHASE_END: h,
                            PHASE_CANCEL: q
                        };
                        f.fn.swipe.directions = {
                            LEFT: p,
                            RIGHT: o,
                            UP: e,
                            DOWN: x,
                            IN: c,
                            OUT: A
                        };
                        f.fn.swipe.pageScroll = {
                            NONE: m,
                            HORIZONTAL: E,
                            VERTICAL: u,
                            AUTO: s
                        };
                        f.fn.swipe.fingers = {
                            ONE: 1,
                            TWO: 2,
                            THREE: 3,
                            FOUR: 4,
                            FIVE: 5,
                            ALL: i
                        };

                        function w(F) {
                            if (F && (F.allowPageScroll === undefined && (F.swipe !== undefined || F.swipeStatus !== undefined))) {
                                F.allowPageScroll = m
                            }
                            if (F.click !== undefined && F.tap === undefined) {
                                F.tap = F.click
                            }
                            if (!F) {
                                F = {}
                            }
                            F = f.extend({}, f.fn.swipe.defaults, F);
                            return this.each(function () {
                                var H = f(this);
                                var G = H.data(C);
                                if (!G) {
                                    G = new D(this, F);
                                    H.data(C, G)
                                }
                            })
                        }

                        function D(a5, au) {
                            var au = f.extend({}, au);
                            var az = (a || d || !au.fallbackToMouseEvents),
                                    K = az ? (d ? (v ? "MSPointerDown" : "pointerdown") : "touchstart") : "mousedown",
                                    ax = az ? (d ? (v ? "MSPointerMove" : "pointermove") : "touchmove") : "mousemove",
                                    V = az ? (d ? (v ? "MSPointerUp" : "pointerup") : "touchend") : "mouseup",
                                    T = az ? (d ? "mouseleave" : null) : "mouseleave",
                                    aD = (d ? (v ? "MSPointerCancel" : "pointercancel") : "touchcancel");
                            var ag = 0,
                                    aP = null,
                                    a2 = null,
                                    ac = 0,
                                    a1 = 0,
                                    aZ = 0,
                                    H = 1,
                                    ap = 0,
                                    aJ = 0,
                                    N = null;
                            var aR = f(a5);
                            var aa = "start";
                            var X = 0;
                            var aQ = {};
                            var U = 0,
                                    a3 = 0,
                                    a6 = 0,
                                    ay = 0,
                                    O = 0;
                            var aW = null,
                                    af = null;
                            try {
                                aR.bind(K, aN);
                                aR.bind(aD, ba)
                            } catch (aj) {
                                f.error("events not supported " + K + "," + aD + " on jQuery.swipe")
                            }
                            this.enable = function () {
                                aR.bind(K, aN);
                                aR.bind(aD, ba);
                                return aR
                            };
                            this.disable = function () {
                                aK();
                                return aR
                            };
                            this.destroy = function () {
                                aK();
                                aR.data(C, null);
                                aR = null
                            };
                            this.option = function (bd, bc) {
                                if (typeof bd === "object") {
                                    au = f.extend(au, bd)
                                } else {
                                    if (au[bd] !== undefined) {
                                        if (bc === undefined) {
                                            return au[bd]
                                        } else {
                                            au[bd] = bc
                                        }
                                    } else {
                                        if (!bd) {
                                            return au
                                        } else {
                                            f.error("Option " + bd + " does not exist on jQuery.swipe.options")
                                        }
                                    }
                                }
                                return null
                            };

                            function aN(be) {
                                if (aB()) {
                                    return
                                }
                                if (f(be.target).closest(au.excludedElements, aR).length > 0) {
                                    return
                                }
                                var bf = be.originalEvent ? be.originalEvent : be;
                                var bd, bg = bf.touches,
                                        bc = bg ? bg[0] : bf;
                                aa = g;
                                if (bg) {
                                    X = bg.length
                                } else {
                                    if (au.preventDefaultEvents !== false) {
                                        be.preventDefault()
                                    }
                                }
                                ag = 0;
                                aP = null;
                                a2 = null;
                                aJ = null;
                                ac = 0;
                                a1 = 0;
                                aZ = 0;
                                H = 1;
                                ap = 0;
                                N = ab();
                                S();
                                ai(0, bc);
                                if (!bg || (X === au.fingers || au.fingers === i) || aX()) {
                                    U = ar();
                                    if (X == 2) {
                                        ai(1, bg[1]);
                                        a1 = aZ = at(aQ[0].start, aQ[1].start)
                                    }
                                    if (au.swipeStatus || au.pinchStatus) {
                                        bd = P(bf, aa)
                                    }
                                } else {
                                    bd = false
                                }
                                if (bd === false) {
                                    aa = q;
                                    P(bf, aa);
                                    return bd
                                } else {
                                    if (au.hold) {
                                        af = setTimeout(f.proxy(function () {
                                            aR.trigger("hold", [bf.target]);
                                            if (au.hold) {
                                                bd = au.hold.call(aR, bf, bf.target)
                                            }
                                        }, this), au.longTapThreshold)
                                    }
                                    an(true)
                                }
                                return null
                            }

                            function a4(bf) {
                                var bi = bf.originalEvent ? bf.originalEvent : bf;
                                if (aa === h || aa === q || al()) {
                                    return
                                }
                                var be, bj = bi.touches,
                                        bd = bj ? bj[0] : bi;
                                var bg = aH(bd);
                                a3 = ar();
                                if (bj) {
                                    X = bj.length
                                }
                                if (au.hold) {
                                    clearTimeout(af)
                                }
                                aa = k;
                                if (X == 2) {
                                    if (a1 == 0) {
                                        ai(1, bj[1]);
                                        a1 = aZ = at(aQ[0].start, aQ[1].start)
                                    } else {
                                        aH(bj[1]);
                                        aZ = at(aQ[0].end, aQ[1].end);
                                        aJ = aq(aQ[0].end, aQ[1].end)
                                    }
                                    H = a8(a1, aZ);
                                    ap = Math.abs(a1 - aZ)
                                }
                                if ((X === au.fingers || au.fingers === i) || !bj || aX()) {
                                    aP = aL(bg.start, bg.end);
                                    a2 = aL(bg.last, bg.end);
                                    ak(bf, a2);
                                    ag = aS(bg.start, bg.end);
                                    ac = aM();
                                    aI(aP, ag);
                                    be = P(bi, aa);
                                    if (!au.triggerOnTouchEnd || au.triggerOnTouchLeave) {
                                        var bc = true;
                                        if (au.triggerOnTouchLeave) {
                                            var bh = aY(this);
                                            bc = F(bg.end, bh)
                                        }
                                        if (!au.triggerOnTouchEnd && bc) {
                                            aa = aC(k)
                                        } else {
                                            if (au.triggerOnTouchLeave && !bc) {
                                                aa = aC(h)
                                            }
                                        }
                                        if (aa == q || aa == h) {
                                            P(bi, aa)
                                        }
                                    }
                                } else {
                                    aa = q;
                                    P(bi, aa)
                                }
                                if (be === false) {
                                    aa = q;
                                    P(bi, aa)
                                }
                            }

                            function M(bc) {
                                var bd = bc.originalEvent ? bc.originalEvent : bc,
                                        be = bd.touches;
                                if (be) {
                                    if (be.length && !al()) {
                                        G(bd);
                                        return true
                                    } else {
                                        if (be.length && al()) {
                                            return true
                                        }
                                    }
                                }
                                if (al()) {
                                    X = ay
                                }
                                a3 = ar();
                                ac = aM();
                                if (bb() || !am()) {
                                    aa = q;
                                    P(bd, aa)
                                } else {
                                    if (au.triggerOnTouchEnd || (au.triggerOnTouchEnd == false && aa === k)) {
                                        if (au.preventDefaultEvents !== false) {
                                            bc.preventDefault()
                                        }
                                        aa = h;
                                        P(bd, aa)
                                    } else {
                                        if (!au.triggerOnTouchEnd && a7()) {
                                            aa = h;
                                            aF(bd, aa, B)
                                        } else {
                                            if (aa === k) {
                                                aa = q;
                                                P(bd, aa)
                                            }
                                        }
                                    }
                                }
                                an(false);
                                return null
                            }

                            function ba() {
                                X = 0;
                                a3 = 0;
                                U = 0;
                                a1 = 0;
                                aZ = 0;
                                H = 1;
                                S();
                                an(false)
                            }

                            function L(bc) {
                                var bd = bc.originalEvent ? bc.originalEvent : bc;
                                if (au.triggerOnTouchLeave) {
                                    aa = aC(h);
                                    P(bd, aa)
                                }
                            }

                            function aK() {
                                aR.unbind(K, aN);
                                aR.unbind(aD, ba);
                                aR.unbind(ax, a4);
                                aR.unbind(V, M);
                                if (T) {
                                    aR.unbind(T, L)
                                }
                                an(false)
                            }

                            function aC(bg) {
                                var bf = bg;
                                var be = aA();
                                var bd = am();
                                var bc = bb();
                                if (!be || bc) {
                                    bf = q
                                } else {
                                    if (bd && bg == k && (!au.triggerOnTouchEnd || au.triggerOnTouchLeave)) {
                                        bf = h
                                    } else {
                                        if (!bd && bg == h && au.triggerOnTouchLeave) {
                                            bf = q
                                        }
                                    }
                                }
                                return bf
                            }

                            function P(be, bc) {
                                var bd, bf = be.touches;
                                if (J() || W()) {
                                    bd = aF(be, bc, l)
                                }
                                if ((Q() || aX()) && bd !== false) {
                                    bd = aF(be, bc, t)
                                }
                                if (aG() && bd !== false) {
                                    bd = aF(be, bc, j)
                                } else {
                                    if (ao() && bd !== false) {
                                        bd = aF(be, bc, b)
                                    } else {
                                        if (ah() && bd !== false) {
                                            bd = aF(be, bc, B)
                                        }
                                    }
                                }
                                if (bc === q) {
                                    if (W()) {
                                        bd = aF(be, bc, l)
                                    }
                                    if (aX()) {
                                        bd = aF(be, bc, t)
                                    }
                                    ba(be)
                                }
                                if (bc === h) {
                                    if (bf) {
                                        if (!bf.length) {
                                            ba(be)
                                        }
                                    } else {
                                        ba(be)
                                    }
                                }
                                return bd
                            }

                            function aF(bf, bc, be) {
                                var bd;
                                if (be == l) {
                                    aR.trigger("swipeStatus", [bc, aP || null, ag || 0, ac || 0, X, aQ, a2]);
                                    if (au.swipeStatus) {
                                        bd = au.swipeStatus.call(aR, bf, bc, aP || null, ag || 0, ac || 0, X, aQ, a2);
                                        if (bd === false) {
                                            return false
                                        }
                                    }
                                    if (bc == h && aV()) {
                                        clearTimeout(aW);
                                        clearTimeout(af);
                                        aR.trigger("swipe", [aP, ag, ac, X, aQ, a2]);
                                        if (au.swipe) {
                                            bd = au.swipe.call(aR, bf, aP, ag, ac, X, aQ, a2);
                                            if (bd === false) {
                                                return false
                                            }
                                        }
                                        switch (aP) {
                                            case p:
                                                aR.trigger("swipeLeft", [aP, ag, ac, X, aQ, a2]);
                                                if (au.swipeLeft) {
                                                    bd = au.swipeLeft.call(aR, bf, aP, ag, ac, X, aQ, a2)
                                                }
                                                break;
                                            case o:
                                                aR.trigger("swipeRight", [aP, ag, ac, X, aQ, a2]);
                                                if (au.swipeRight) {
                                                    bd = au.swipeRight.call(aR, bf, aP, ag, ac, X, aQ, a2)
                                                }
                                                break;
                                            case e:
                                                aR.trigger("swipeUp", [aP, ag, ac, X, aQ, a2]);
                                                if (au.swipeUp) {
                                                    bd = au.swipeUp.call(aR, bf, aP, ag, ac, X, aQ, a2)
                                                }
                                                break;
                                            case x:
                                                aR.trigger("swipeDown", [aP, ag, ac, X, aQ, a2]);
                                                if (au.swipeDown) {
                                                    bd = au.swipeDown.call(aR, bf, aP, ag, ac, X, aQ, a2)
                                                }
                                                break
                                        }
                                    }
                                }
                                if (be == t) {
                                    aR.trigger("pinchStatus", [bc, aJ || null, ap || 0, ac || 0, X, H, aQ]);
                                    if (au.pinchStatus) {
                                        bd = au.pinchStatus.call(aR, bf, bc, aJ || null, ap || 0, ac || 0, X, H, aQ);
                                        if (bd === false) {
                                            return false
                                        }
                                    }
                                    if (bc == h && a9()) {
                                        switch (aJ) {
                                            case c:
                                                aR.trigger("pinchIn", [aJ || null, ap || 0, ac || 0, X, H, aQ]);
                                                if (au.pinchIn) {
                                                    bd = au.pinchIn.call(aR, bf, aJ || null, ap || 0, ac || 0, X, H, aQ)
                                                }
                                                break;
                                            case A:
                                                aR.trigger("pinchOut", [aJ || null, ap || 0, ac || 0, X, H, aQ]);
                                                if (au.pinchOut) {
                                                    bd = au.pinchOut.call(aR, bf, aJ || null, ap || 0, ac || 0, X, H, aQ)
                                                }
                                                break
                                        }
                                    }
                                }
                                if (be == B) {
                                    if (bc === q || bc === h) {
                                        clearTimeout(aW);
                                        clearTimeout(af);
                                        if (Z() && !I()) {
                                            O = ar();
                                            aW = setTimeout(f.proxy(function () {
                                                O = null;
                                                aR.trigger("tap", [bf.target]);
                                                if (au.tap) {
                                                    bd = au.tap.call(aR, bf, bf.target)
                                                }
                                            }, this), au.doubleTapThreshold)
                                        } else {
                                            O = null;
                                            aR.trigger("tap", [bf.target]);
                                            if (au.tap) {
                                                bd = au.tap.call(aR, bf, bf.target)
                                            }
                                        }
                                    }
                                } else {
                                    if (be == j) {
                                        if (bc === q || bc === h) {
                                            clearTimeout(aW);
                                            clearTimeout(af);
                                            O = null;
                                            aR.trigger("doubletap", [bf.target]);
                                            if (au.doubleTap) {
                                                bd = au.doubleTap.call(aR, bf, bf.target)
                                            }
                                        }
                                    } else {
                                        if (be == b) {
                                            if (bc === q || bc === h) {
                                                clearTimeout(aW);
                                                O = null;
                                                aR.trigger("longtap", [bf.target]);
                                                if (au.longTap) {
                                                    bd = au.longTap.call(aR, bf, bf.target)
                                                }
                                            }
                                        }
                                    }
                                }
                                return bd
                            }

                            function am() {
                                var bc = true;
                                if (au.threshold !== null) {
                                    bc = ag >= au.threshold
                                }
                                return bc
                            }

                            function bb() {
                                var bc = false;
                                if (au.cancelThreshold !== null && aP !== null) {
                                    bc = (aT(aP) - ag) >= au.cancelThreshold
                                }
                                return bc
                            }

                            function ae() {
                                if (au.pinchThreshold !== null) {
                                    return ap >= au.pinchThreshold
                                }
                                return true
                            }

                            function aA() {
                                var bc;
                                if (au.maxTimeThreshold) {
                                    if (ac >= au.maxTimeThreshold) {
                                        bc = false
                                    } else {
                                        bc = true
                                    }
                                } else {
                                    bc = true
                                }
                                return bc
                            }

                            function ak(bc, bd) {
                                if (au.preventDefaultEvents === false) {
                                    return
                                }
                                if (au.allowPageScroll === m) {
                                    bc.preventDefault()
                                } else {
                                    var be = au.allowPageScroll === s;
                                    switch (bd) {
                                        case p:
                                            if ((au.swipeLeft && be) || (!be && au.allowPageScroll != E)) {
                                                bc.preventDefault()
                                            }
                                            break;
                                        case o:
                                            if ((au.swipeRight && be) || (!be && au.allowPageScroll != E)) {
                                                bc.preventDefault()
                                            }
                                            break;
                                        case e:
                                            if ((au.swipeUp && be) || (!be && au.allowPageScroll != u)) {
                                                bc.preventDefault()
                                            }
                                            break;
                                        case x:
                                            if ((au.swipeDown && be) || (!be && au.allowPageScroll != u)) {
                                                bc.preventDefault()
                                            }
                                            break
                                    }
                                }
                            }

                            function a9() {
                                var bd = aO();
                                var bc = Y();
                                var be = ae();
                                return bd && bc && be
                            }

                            function aX() {
                                return !!(au.pinchStatus || au.pinchIn || au.pinchOut)
                            }

                            function Q() {
                                return !!(a9() && aX())
                            }

                            function aV() {
                                var bf = aA();
                                var bh = am();
                                var be = aO();
                                var bc = Y();
                                var bd = bb();
                                var bg = !bd && bc && be && bh && bf;
                                return bg
                            }

                            function W() {
                                return !!(au.swipe || au.swipeStatus || au.swipeLeft || au.swipeRight || au.swipeUp || au.swipeDown)
                            }

                            function J() {
                                return !!(aV() && W())
                            }

                            function aO() {
                                return ((X === au.fingers || au.fingers === i) || !a)
                            }

                            function Y() {
                                return aQ[0].end.x !== 0
                            }

                            function a7() {
                                return !!(au.tap)
                            }

                            function Z() {
                                return !!(au.doubleTap)
                            }

                            function aU() {
                                return !!(au.longTap)
                            }

                            function R() {
                                if (O == null) {
                                    return false
                                }
                                var bc = ar();
                                return (Z() && ((bc - O) <= au.doubleTapThreshold))
                            }

                            function I() {
                                return R()
                            }

                            function aw() {
                                return ((X === 1 || !a) && (isNaN(ag) || ag < au.threshold))
                            }

                            function a0() {
                                return ((ac > au.longTapThreshold) && (ag < r))
                            }

                            function ah() {
                                return !!(aw() && a7())
                            }

                            function aG() {
                                return !!(R() && Z())
                            }

                            function ao() {
                                return !!(a0() && aU())
                            }

                            function G(bc) {
                                a6 = ar();
                                ay = bc.touches.length + 1
                            }

                            function S() {
                                a6 = 0;
                                ay = 0
                            }

                            function al() {
                                var bc = false;
                                if (a6) {
                                    var bd = ar() - a6;
                                    if (bd <= au.fingerReleaseThreshold) {
                                        bc = true
                                    }
                                }
                                return bc
                            }

                            function aB() {
                                return !!(aR.data(C + "_intouch") === true)
                            }

                            function an(bc) {
                                if (!aR) {
                                    return
                                }
                                if (bc === true) {
                                    aR.bind(ax, a4);
                                    aR.bind(V, M);
                                    if (T) {
                                        aR.bind(T, L)
                                    }
                                } else {
                                    aR.unbind(ax, a4, false);
                                    aR.unbind(V, M, false);
                                    if (T) {
                                        aR.unbind(T, L, false)
                                    }
                                }
                                aR.data(C + "_intouch", bc === true)
                            }

                            function ai(be, bc) {
                                var bd = {
                                    start: {
                                        x: 0,
                                        y: 0
                                    },
                                    last: {
                                        x: 0,
                                        y: 0
                                    },
                                    end: {
                                        x: 0,
                                        y: 0
                                    }
                                };
                                bd.start.x = bd.last.x = bd.end.x = bc.pageX || bc.clientX;
                                bd.start.y = bd.last.y = bd.end.y = bc.pageY || bc.clientY;
                                aQ[be] = bd;
                                return bd
                            }

                            function aH(bc) {
                                var be = bc.identifier !== undefined ? bc.identifier : 0;
                                var bd = ad(be);
                                if (bd === null) {
                                    bd = ai(be, bc)
                                }
                                bd.last.x = bd.end.x;
                                bd.last.y = bd.end.y;
                                bd.end.x = bc.pageX || bc.clientX;
                                bd.end.y = bc.pageY || bc.clientY;
                                return bd
                            }

                            function ad(bc) {
                                return aQ[bc] || null
                            }

                            function aI(bc, bd) {
                                bd = Math.max(bd, aT(bc));
                                N[bc].distance = bd
                            }

                            function aT(bc) {
                                if (N[bc]) {
                                    return N[bc].distance
                                }
                                return undefined
                            }

                            function ab() {
                                var bc = {};
                                bc[p] = av(p);
                                bc[o] = av(o);
                                bc[e] = av(e);
                                bc[x] = av(x);
                                return bc
                            }

                            function av(bc) {
                                return {
                                    direction: bc,
                                    distance: 0
                                }
                            }

                            function aM() {
                                return a3 - U
                            }

                            function at(bf, be) {
                                var bd = Math.abs(bf.x - be.x);
                                var bc = Math.abs(bf.y - be.y);
                                return Math.round(Math.sqrt(bd * bd + bc * bc))
                            }

                            function a8(bc, bd) {
                                var be = (bd / bc) * 1;
                                return be.toFixed(2)
                            }

                            function aq() {
                                if (H < 1) {
                                    return A
                                } else {
                                    return c
                                }
                            }

                            function aS(bd, bc) {
                                return Math.round(Math.sqrt(Math.pow(bc.x - bd.x, 2) + Math.pow(bc.y - bd.y, 2)))
                            }

                            function aE(bf, bd) {
                                var bc = bf.x - bd.x;
                                var bh = bd.y - bf.y;
                                var be = Math.atan2(bh, bc);
                                var bg = Math.round(be * 180 / Math.PI);
                                if (bg < 0) {
                                    bg = 360 - Math.abs(bg)
                                }
                                return bg
                            }

                            function aL(bd, bc) {
                                var be = aE(bd, bc);
                                if ((be <= 45) && (be >= 0)) {
                                    return p
                                } else {
                                    if ((be <= 360) && (be >= 315)) {
                                        return p
                                    } else {
                                        if ((be >= 135) && (be <= 225)) {
                                            return o
                                        } else {
                                            if ((be > 45) && (be < 135)) {
                                                return x
                                            } else {
                                                return e
                                            }
                                        }
                                    }
                                }
                            }

                            function ar() {
                                var bc = new Date();
                                return bc.getTime()
                            }

                            function aY(bc) {
                                bc = f(bc);
                                var be = bc.offset();
                                var bd = {
                                    left: be.left,
                                    right: be.left + bc.outerWidth(),
                                    top: be.top,
                                    bottom: be.top + bc.outerHeight()
                                };
                                return bd
                            }

                            function F(bc, bd) {
                                return (bc.x > bd.left && bc.x < bd.right && bc.y > bd.top && bc.y < bd.bottom)
                            }
                        }
                    }));
                    !function (n) {
                        "use strict";
                        n.fn.bsTouchSlider = function (i) {
                            var a = n(".carousel");
                            return this.each(function () {
                                function i(i) {
                                    var a = "webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend";
                                    i.each(function () {
                                        var i = n(this),
                                                t = i.data("animation");
                                        i.addClass(t).one(a, function () {
                                            i.removeClass(t)
                                        })
                                    })
                                }
                                var t = a.find(".item:first").find("[data-animation ^= 'animated']");
                                a.carousel(), i(t), a.on("slide.bs.carousel", function (a) {
                                    var t = n(a.relatedTarget).find("[data-animation ^= 'animated']");
                                    i(t)
                                }), n(".carousel .carousel-inner").swipe({
                                    swipeLeft: function (n, i, a, t, e) {
                                        this.parent().carousel("next")
                                    },
                                    swipeRight: function () {
                                        this.parent().carousel("prev")
                                    },
                                    threshold: 0
                                })
                            })
                        }
                    }(jQuery);

                    //Initialise Bootstrap Carousel Touch Slider
                    // Curently there are no option available.

                    $('#bootstrap-touch-slider').bsTouchSlider();
                </script>

                <!--footer-slider -->

                <script>
                    $(document).ready(function () {
                        $('#media').carousel({
                            pause: true,
                            interval: false,
                        });
                    });
                </script>

                
                <?php echo theme_js('jssor.slider.min.js', true) ?>
                <script type="text/javascript">jssor_1_slider_init();</script>


                </html>
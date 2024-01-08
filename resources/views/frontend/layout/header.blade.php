<header class="top-area">
    <div class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-2" style="margin-top: -12px">
                    <div class="logo">
                        <a href="/">
                            <img src="images/logo/logo1.png" alt="" width="150px">
                        </a>
                    </div><!-- /.logo-->
                </div><!-- /.col-->
                <div class="col-sm-10">
                    <div class="main-menu">
                    
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <i class="fa fa-bars"></i>
                            </button><!-- / button-->
                        </div><!-- /.navbar-header-->
                        <div class="collapse navbar-collapse">		  
                            <ul class="nav navbar-nav navbar-right">
                                <li class="menu"><a href="/">Beranda</a></li>
                                <li class="menu"><a href="/user">Jadwal </a></li>
                                <li class="menu"><a href="/mitra">Mitra</a></li>
                                @auth
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      Hallo,  {{ Auth::user()->name }}
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <!-- Add your dropdown menu items here -->

                                        
                                        <div class="dropdown-divider">
                                        <a class="dropdown-item" onclick="return document.getElementById('logout').submit();" href="#">Logout</a>
                                        </div>
                                    </div>
                                </li>
                                <li class="menu">
                                    <form id="logout" action="{{ route('logout') }}" method="post">
                                        @csrf
                                    </form>
                                </li>
                            @else
                                <li class="menu">
                                    <a href="{{ route('login') }}">Login</a>
                                </li>
                            @endauth
                            </ul>
                            
                        </div><!-- /.navbar-collapse -->
                    </div><!-- /.main-menu-->
                </div><!-- /.col-->
            </div><!-- /.row -->
            <div class="home-border"></div><!-- /.home-border-->
        </div><!-- /.container-->
    </div><!-- /.header-area -->

</header><!-- /.top-area-->
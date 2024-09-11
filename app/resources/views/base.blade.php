<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with Dorang landing page.">
    <meta name="author" content="Devcrud">

    <title>@yield('title', 'Default title')</title>

    <!-- font icons -->
    <link rel="stylesheet" href="assets/vendors/themify-icons/css/themify-icons.css">

    <!-- Bootstrap + Dorang main styles -->
	<link rel="stylesheet" href="assets/css/dorang.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

</head>
<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home" class="dark-theme">
    
    <!-- page navbar -->
    <nav class="page-navbar" data-spy="affix" data-offset-top="10">
        <ul class="nav-navbar container">

            @if(isset($menu))
                @foreach($menu as $item)
                    <li class="nav-item"><a href="{{$item['link']}}" class="nav-link">{{$item['text']}}</a></li>             
            
                    @if($item['current'])
                        <span class="sr-only">(current)</span>
                    @endif

                @endforeach
            @endif


            <li class="nav-item"><a href="{{route('registration')}}" class="nav-link">Registration</a></li>

            <li class="nav-item"><a href="{{route('reset')}}" class="nav-link">Reset Pasword</a></li>
            
            <li class="nav-item"><a href="{{route('about')}}" class="nav-link">About</a></li>


            <li class="nav-item search">
                <a href="javascript:void(0)" class="nav-link search-toggle"><i class="ti-search"></i> Search</a>
                <div class="search-wrapper">
                    <form>
                        <input type="search" class="form-control" name="" placeholder="hit enter to search">
                    </form>
                </div>
            </li>            
        </ul>
    </nav><!-- end of page navbar -->

    <div class="theme-selector">
        <a href="javascript:void(0)" class="spinner">
            <i class="ti-paint-bucket"></i>
        </a>
        <div class="body">
            <a href="javascript:void(0)" class="light"></a>
            <a href="javascript:void(0)" class="dark"></a>
        </div>
    </div>  

    <!-- page header -->
    <header class="header">
        <div class="overlay"></div>
        <div class="header-content">

            @if(!empty($phone))
                <span>                    
                    Call : {{$phone}}
                </span>
            @endif

        </div>
    </header><!-- end of page header -->


    <div>
        @yield('content', '')
    </div>

    <!--footer & pre footer -->
    <div class="contact-section">
        <div class="overlay"></div>
        <!-- container -->
        <div class="container">            

            <!-- footer -->
            <footer class="footer">
                <p class="infos">&copy; <script>document.write(new Date().getFullYear())</script>, Made with <i class="ti-heart text-danger"></i> by <a href="http://www.devcrud.com">DevCRUD</a></p>       
                <span>|</span>  
                <div class="links">
                    <a href="#">About</a>
                    <a href="#">Explore</a>
                    <a href="#">Journal</a>
                </div>
            </footer><!-- end of footer -->

        </div><!-- end of container -->
    </div><!-- end of pre footer -->

    <!-- core  -->
    <script src="assets/vendors/jquery/jquery-3.4.1.js"></script>
    <script src="assets/vendors/bootstrap/bootstrap.bundle.js"></script>

    <!-- bootstrap affix -->
    <script src="assets/vendors/bootstrap/bootstrap.affix.js"></script>

    <!-- Dorang js -->
    <script src="assets/js/dorang.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>

</body>
</html>
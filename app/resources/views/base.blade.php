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
            @endforeach
        @endif


            <!-- <li class="nav-item"><a href="/registration" class="nav-link">Registration</a></li> -->
            <li class="nav-item"><a href="{{route('registration')}}" class="nav-link">Registration</a></li>


            <li class="nav-item"><a href="#" class="nav-link"><img src="assets/imgs/placeholder.svg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, weber Landing page"></a></li>
            
            
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

           
            <p class="header-subtitle"></p>

            <button class="btn btn-theme-color modal-toggle"><i class="ti-control-play text-danger"></i> Watch Video</button>

        </div>
    </header><!-- end of page header -->

    <!-- modal -->
    <div class="modalBox">
        <div class="modalBox-body">
            <iframe width="100%" height="450px" class="border-0" 
            src="https://www.youtube.com/embed/tgbNyZ7vqY?controls=0">
            </iframe>
        </div>          
    </div><!-- end of modal -->

    <div>
        @yield('content', '')
    </div>

    <!--footer & pre footer -->
    <div class="contact-section">
        <div class="overlay"></div>
        <!-- container -->
        <div class="container">
            <div class="col-md-10 col-lg-8 m-auto">
                <h6 class="title mb-2">Contact Us</h6>
                <p class="mb-5">Feel Free To Drop Us A Line.</p>
                <form action="" class="form-group">
                    <input type="text" size="50" class="form-control" placeholder="Your Name" required>
                    <input type="email" class="form-control" placeholder="Enter Email"requried>
                    <textarea name="comment" id="comment" rows="6"   class="form-control" placeholder="Write Something"></textarea>
                    <input type="submit" value="Send Message" class="form-control">
                </form>
            </div>

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
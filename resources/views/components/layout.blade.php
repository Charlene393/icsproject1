<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>RecycleConnect index page</title>
  <meta content="" name="description">
  <meta content="" name="keywords">


  <link href="{{asset('assets/img/favicon.png')}} rel="icon">
  <link href="{{asset('assets/img/apple-touch-icon.png')}} rel="apple-touch-icon">

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <link href="assets/css/style.css" rel="stylesheet">


</head>

<body>


  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex justify-content-between align-items-center">

      <div id="logo">
        <h1><a href="welcome.blade.php"></a> RecycleConnect</h1>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="/">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto " href="#events">Events & News</a></li>
             <li class="dropdown"><a href="#"><span>Our Services</span> <i class="bi bi-chevron-down"></i></a>
            <ul>

              <li class="dropdown"><a href="#"><span>Registration and profiles</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="{{ route('register') }}">Create account</a></li>
                  <li><a href="{{ route('login') }}">Log in</a></li>
                  <li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                    <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Log out</a>
                </li>
                </ul>
              <li><a href="signup">Creating a source of income</a></li>
             <li><a href="/guide">Scheduling pick up</a></li>
              <li><a href="/community">Progress report</a></li>
              <li><a href="/community">Plastic Disposal guide</a></li>

            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#support">Support</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <li><a class="nav-link scrollto" href="#FAQ">FAQ</a></li>
          <li><a href = "#accessibility"><span>Accessibility</span><i class="bi bi-person-wheelchair"></i></a><li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
    </div>
  </header>

  {{$slot}}
<footer id="footer">
    


  </footer>

</body>

</html>

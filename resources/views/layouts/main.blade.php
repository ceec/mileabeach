<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>
        @section('title')
        @show
    </title>

    <!-- Styles -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">

    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">

    <script src="/js/bootstrap.min.js"></script>
</head>
<body id="app-layout">
    <nav class="navbar navbar-expand-md navbar-light bg-light mb-1">
        <div class="container">
      <a class="navbar-brand" href="/">milea beach</a>
      </div>
    </nav>


    @yield('content')
<footer class="footer">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
      <br>

      </div>
      <div class="col-md-3">
            <br>
          <ul class="list-inline text-center">
            <!--<li>
              <a href="{{ url('rss') }}" data-toggle="tooltip"
                 title="RSS feed">
                <span class="fa-stack fa-lg">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fa fa-rss fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>-->
            <!--<li>
              <a href="https://twitter.com/ccmakesthings" data-toggle="tooltip"
                 title="My Twitter Page">
                <span class="fa-stack fa-lg">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>-->
          </ul>
      </div>
      <div class="col-md-4">
        <br>
        <!--<a class="navbar-right" href="/contact">Contact Us</a>-->
      </div>
    </div>
  </div>
</footer>
</body>
</html>

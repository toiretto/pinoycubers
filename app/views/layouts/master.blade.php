<!DOCTYPE html>
<html>
    <head>
        <title>
            @section('title')
                Pinoy Cubers
            @show
        </title>
         <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- CSS are placed here -->
        {{ HTML::style('packages/css/bootstrap.css') }}
        {{ HTML::style('packages/css/font-awesome.min.css') }}
        {{ HTML::style('packages/css/site.css') }}
        <style>
            #img_banner img{
                width:75%; height: 75%;
            }
        </style>
    </head>

    <body>
        <!-- Navbar -->
        <nav class="navbar navbar-default" role="navigation">
          <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#"><i class="fa fa-home"></i></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse">
              <!-- Right Panel -->
              <ul class="nav navbar-nav navbar-right">
                @yield('nav_right')
              </ul> 
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>

        <!-- Container -->
        <div class="container">
            <!-- Content -->
            @yield('content')

        </div>

        <div id="footer">
          <div class="container">
            <p class="text-muted">See you soon...</p>
          </div>
        </div>

        <!-- Scripts are placed here -->
        {{ HTML::script('packages/js/jquery-2.1.0.js')}}
        {{ HTML::script('packages/js/bootstrap.js')}}
    </body>
</html>
<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Calibri';
                /*font-family: 'Lato';*/
            }

            a:hover { text-decoration:none;}

            /*.container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }*/

            /*.content {
                text-align: center;
                display: inline-block;
            }*/

            .title {
                font-size: 96px;
            }
            .content p {
                text-align: justify;
            }

            .fa-btn {
                margin-right: 6px;
            }
        </style>
    </head>
    <body>
        
        {{-- 
        <span class="glyphicon glyphicon-info-sign"></span>
        <span class="glyphicon glyphicon-envelope"></span>
        <span class="glyphicon glyphicon-home"></span>
        <span class="glyphicon glyphicon-file"></span>
        <span class="glyphicon glyphicon-shopping-cart"></span>
        --}}
        
        <nav class="navbar navbar-inverse navbar-default">
            <div class="container-fluid">
            
                <div class="navbar-header">
                    <a class="navbar-brand" href="/"><span class="glyphicon glyphicon-home"></span> Ejemplo</a>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">                            
                        <li><a href="/articles"><span class="glyphicon glyphicon-file"></span> Articles</a></li>
                        <li><a href="/about"><span class="glyphicon glyphicon-info-sign"></span> About</a></li>
                        <li><a href="/contact"><span class="glyphicon glyphicon-envelope"></span> Contact</a></li>
                        <li><a href="/products"> <span class="glyphicon glyphicon-shopping-cart"></span> Products</a></li>
                    </ul>
                
                    <ul class="nav navbar-nav navbar-right">
                        @if (Auth::guest())
                        <li><a href="{{ url('/login') }}"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>                        
                        <li><a href="{{ url('/register') }}"><span class="glyphicon glyphicon-list-alt"></span> Register</a></li>
                        @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon glyphicon-user"></span> {{ Auth::user()->username }} <span class="caret"></span></a>
                            <ul class="dropdown-menu">                                
                                <li><a href="#">My Account</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="{{ url('/logout') }}"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                                
                                
                            </ul>
                        </li> 
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container">
        <hr/>
            <div class="content">
                @yield('content')
            </div>
        </div>
        @yield('footer')
    </body>
</html>

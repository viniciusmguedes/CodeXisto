<!DOCTYPE html>
<html lang="en">
    
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="icon" type="image/gif" href="{{url('images/logo.gif')}}" />
        <title>Xisto - Implementos e Imobiliária</title>

        <!-- Bootstrap Core CSS -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"
        rel="stylesheet">
        
        <!-- Custom CSS -->
        <link href="css/shop-homepage.css" rel="stylesheet">
        <link href="css/customer.css" rel="stylesheet">

        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                
        <!-- Fonts -->
        <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet'
        type='text/css'>
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media
        queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file://
        -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js">
            </script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js">
            </script>
        <![endif]-->
    </head>
    
    <body>
        
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container">

                <!-- Brand -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <a class="navbar-brand" href="{{route('client.store.index')}}">
                        <img class="navbar-logo" src="{{url('images/logo.png')}}" alt="">
                    </a>
                </div>

                <!-- Nav Links -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" style="background-color: #273238">
                    <ul class="nav navbar-nav pull-right">
                        <li><a data-toggle="modal" data-target="#publishModal">Seja um Vendedor</a></li>
                        <li><a href="{{route('client.store.about')}}">Sobre</a></li>
                        <li><a href="{{route('client.store.contact')}}">Contato</a></li>
                    </ul>                
                </div>

            </div>
        </nav>
        
        
        <!-- Main jumbotron for a primary marketing message or call to action
        -->
        
        <div class="container" style="padding-top: 20px;">
            <div class="row">
                
                @yield('publish')
                @yield('interest') 
                @yield('categories')
                @yield('content')
                
            </div>
        </div>
        
        <footer id="footer">
            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <p>Copyright &copy; Xisto Implementos e Imobiliária 2017</p>
                        </div>
                        <div class="col-lg-6">
                            <div class="pull-right">
                                <div class="col-lg-1"><i class="fa fa-lg fa-facebook fa-2x" aria-hidden="true"></i></div>
                                <div class="col-lg-1"><i class="fa fa-lg fa-twitter fa-2x" aria-hidden="true"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        
        <!-- /container -->
        <!-- Scripts -->
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js">
        </script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js">
        </script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js">
        </script>
    </body>

</html>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- to override -->
    <style>
    .empty-well {
        background: transparent;
    }
    .bigger-icon {
        font-size: 25px;
    }
    .footer-background {
        background-color: black;
        color: white;
    }
    </style>

	<title>Home Page</title>
</head>
<body>

     <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/pman/public">PMAN</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="/pman/public">Home</a></li>
            <li><a href="/pman/public/bear">Bear</a></li>
            <li><a href="/pman/public/register">Register</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav> 

	<h3>This is my Home Page.</h3>

    <hr>    

    <div class="container">
        
        <!-- this is here if nav menu covers over stuff on rest of web page  -->
        <div class="row">
            <br><br>
        </div>

         <div class="row">
            <div class="col-md-12">
                <!-- unsplash.com -->


                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                  <!-- Indicators -->
                  <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                  </ol>

                  <!-- Wrapper for slides -->
                  <div class="carousel-inner" role="listbox">
                    <div class="item active">
                      <img src="/pman/public/images/slider/1b.jpg" alt="image 1" height="42">
                      <div class="carousel-caption">
                        Sunset with Trees
                      </div>
                    </div>
                    <div class="item">
                      <img src="/pman/public/images/slider/2b.jpg" alt="image 2" height="42">
                      <div class="carousel-caption">
                        Sunset with Cactus
                      </div>
                    </div>
                    <div class="item">
                      <img src="/pman/public/images/slider/3b.jpg" alt="image 3">
                      <div class="carousel-caption">
                        Sunset with Ocean
                      </div>
                    </div>                    
                  </div>

                  <!-- Controls -->
                  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>



                
            </div>
        </div> 

        <div class="row">
            <div class="col-xs-3 well text-center">
                <h6>About</h6>   
                <span class="glyphicon glyphicon-globe bigger-icon" aria-hidden="true"></span>          
                <p>sdldfkjweoriusdo fweljkr sdlfkjs dflkjr oidfu weoir sodif jsdaof</p>       
            </div>
            <div class="col-xs-3 well empty-well text-center">
                <h5>Tours</h5> 
                <span class="glyphicon glyphicon-eye-open bigger-icon" aria-hidden="true"></span>  
                <p>sdldfkjweoriusdo fweljkr sdlfkjs dflkjr oidfu weoir sodif jsdaof</p>       
            </div>
            <div class="col-xs-3 well">
                <h5>Contact</h5> 
                <span class="glyphicon glyphicon-eye-open bigger-icon" aria-hidden="true"></span>  
                <p>sdldfkjweoriusdo fweljkr sdlfkjs dflkjr oidfu weoir sodif jsdaof</p>       
            </div>            
        </div>

        <div class="row">
            <div class="col-md-12 footer-background">
                Footer text (Copyright...)
            </div>
        </div>


    </div> 

<!-- the jquery lines should be just before the js line -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://code.jquery.com/jquery-migrate-3.0.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>


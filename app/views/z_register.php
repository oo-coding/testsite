<?php
namespace PMAN\views;

?>

<!DOCTYPE html>
<html>
<head>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>    
	<title>Register Page</title>
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


	<h3>This is my Register Page.</h3>

    <hr>

    <?php 
    if (isset($_SESSION['msg'])) {           
        ?>
        <div class="alert alert-danger" role="alert">   
<!-- this puts the errors in a box that can be closed -->
<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>

        <ul>
            <?php
            foreach ($_SESSION['msg'] as $name => $value) {
                ?>
                <li>
                    <?php echo $value;?>
                </li>
                <?php
            }
            // echo $_SESSION['msg'];
            ?>
            </ul>
        </div>
        <?php
        unset($_SESSION['msg']);
    }
    ?>

    <form id="registerform" name="registerform" class="form-horizontal"
        action="/pman/public/register" method="post" novalidate>

        <div class="form-group"> 
            <label for="first_name" class="col-sm-2 control-label">First Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control required" id="first_name" name="first_name" placeholder="First name">
            </div>
        </div>

        <div class="form-group"> 
            <label for="last_name" class="col-sm-2 control-label">Last Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control required" id="last_name" name="last_name" placeholder="Last name">
            </div>
        </div>        

        <div class="form-group"> 
            <label for="tmpmail" class="col-sm-2 control-label">Tmp Mail</label>
            <div class="col-sm-10">
                <input type="email" class="form-control required" id-=tmpmail" name="tmpmail" placeholder="myemail@example.com">
            </div>
        </div>   
        <div class="form-group"> 
            <label for="vermail" class="col-sm-2 control-label">Verify Mail</label>
            <div class="col-sm-10">
                <input type="email" class="form-control required" id="vermail" name="vermail" placeholder="myemail@example.com">
            </div>
        </div>  
        <div class="form-group"> 
            <label for="tmppwd" class="col-sm-2 control-label">Tmp Pwd</label>
            <div class="col-sm-10">
                <input type="password" class="form-control required" id="tmppwd" name="tmppwd" placeholder="Password">
            </div>
        </div>  
        <div class="form-group"> 
            <label for="verpwd" class="col-sm-2 control-label">Verify Pwd</label>
            <div class="col-sm-10">
                <input type="password" class="form-control required" id="verpwd" name="verpwd" placeholder="Verify Password">
            </div>
        </div>  

        <div class="form-group"> 
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary">Sign in</button>
            </div>
        </div>   


        
    </form>
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>     -->
</body>
</html>
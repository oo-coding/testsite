<?php
namespace PMAN\views;

?>

<div class="form-group">
	<input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="User" value="">
</div>
<div class="form-group">
	<input type="password" name="password" id="password1" tabindex="2" class="form-control" placeholder="Password">
</div>
<div class="form-group">
	<div class="row">
		<div class="col-sm-6 col-sm-offset-3">
			<input type="button" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Log In">
		</div>
	</div>
</div>
<script type="text/javascript">
	$(function() {
		$("#login-submit").click(function(){
			if($("#username").val() != "" && $("#password1").val() != "" ){
				$.ajax({
				  method: "POST",
				  url: "<?=LOGIN_FILE?>",
				  data: { username: $("#username").val(), password: $("#password1").val() }
				}).done(function( msg ) {	


//alert($_SESSION['user']['email']) ;

				    if(msg !== ""){
				    	alert(msg);
				    }else{
				    	window.location = "<?=USER_FILE?>";
				    }
				});
			}else{
				alert("Please fill all fields with valid data!");
			}
		});
	});
</script>

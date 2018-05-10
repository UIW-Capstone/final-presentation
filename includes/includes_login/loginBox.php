    <div>	
    <!-- action=... tells form which file to load on submit,  method="POST" hides everythig in URL -->
      <form id="login" class="formContainer" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>#login" method="POST">
  		<h2>Login</h2>
  			<div id="output" class="out"></div>
  			<?php require('reqSubmit.php') ?>
  		<div class="input-group">
      		<label for="username"></label>
      			<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
      			<input class="form-control" type="text" id="username" name="username" placeholder="* Username" tabindex="1" required>
      			<span class="error"><?php echo $usernameErr; ?></span>
      			<br>
      	</div>
      	<br>
      	<div class="input-group">
      		<label for="pswd"></label>
      			<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
      			<input data-toggle="tooltip" title="Only a-z, A-Z, 0-9, and ^.&*!% characters allowed" class="form-control" type="password" id="pswd" name="pswd" placeholder="* Password" tabindex="2" required>
      			<span class="error"><?php echo $pswdErr; ?></span>
      			<script>
                $(document).ready(function(){
                    $('[data-toggle="tooltip"]').tooltip();   
                });
                </script>
      			<br>
      	</div>
      	<br>	
      		<input type="submit" value="Submit" name="submit" class="btn btn-default" style="margin:0 30px 15px 30px;"> 
      		   
      		<a href="index.php" class="btn btn-default" role="button" style="margin:0 30px 15px 30px;color:red;">Cancel</a>
	         
	  </form>
		
    </div>



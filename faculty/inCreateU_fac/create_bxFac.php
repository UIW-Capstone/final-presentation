 <div>										<!-- action=... tells form which file to load on submit,  method="POST" hides everythig in URL -->
      <form id="create" class="formContainer" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>#create" method="POST">
  		<h2>Create User</h2>
  			<p>Add a new student or faculty</p>	
  			<p><span class="error" style="color: #FF0000;">* required field.</span></p>
  		<div class="input-group">
      		<label for="firstname"></label>
      			<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
      			<input class="form-control" type="text" id="firstname" name="firstname" placeholder="* First Name" tabindex="1" required>
      			<span class="error"> <?php echo $firstnameErr; ?></span>      			
      			<br>
      	</div>
      	<div class="input-group">
      		<label for="lastname"></label>
      			<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
      			<input class="form-control" type="text" id="lastname" name="lastname" placeholder="* Last Name" tabindex="2" required>
      			<span class="error"><?php echo $lastnameErr; ?></span>
      			<br>
      	</div>
  		<div class="input-group">
      		<label for="username"></label>
      			<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
      			<input class="form-control" type="text" id="username" name="username" placeholder="* Username" tabindex="3" required>
      			<span class="error"><?php echo $usernameErr; ?></span>
      			<br>
      	</div>
      	<div class="input-group">
      		<label for="pswd"></label>
      			<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
      			<input data-toggle="tooltip" title="Only a-z, A-Z, 0-9, and ^.&*!% characters allowed" class="form-control" type="password" id="pswd" name="pswd" placeholder="* Password" tabindex="4" required>
      			<span class="error"><?php echo $pswdErr; ?></span>
      			<script>
                $(document).ready(function(){
                    $('[data-toggle="tooltip"]').tooltip();   
                });
                </script>
      			<br>
      	</div>
      	<span>Account type: *&nbsp;&nbsp;</span>
          	<label for="account" class="radio-inline">
          		<input type="radio" name="account" value="student" required>Student
               	</label >
        	<label for="account" class="radio-inline">
        		<input type="radio" name="account" value="faculty" required>Faculty
          	</label>
      		<span class="error"><?php echo $accountErr; ?></span>
    	<br>
    	<br>
      		<input type="submit" value="Submit" name="submit" class="btn btn-default" style="margin:0 30px 15px 30px;"> 
      		   
      		<a href="indexFac.php" class="btn btn-default" role="button" style="margin:0 30px 15px 30px;">Cancel</a>  
	        
	        <?php require('create_subFac.php')?>
	        
	  </form>
      
    </div>

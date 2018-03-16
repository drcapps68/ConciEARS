<?php echo $this->render($header,NULL,get_defined_vars(),0); ?>
 <!--EM: Last revision - 5/15/17-->
<body>
   <div class="container-fluid">
     
		<div class="col-md-12" id="bgSize">
			 <img src="<?= $BASE ?>/images/focus2.jpg" alt="background" class=" center-block img-responsive" id="background">    <!--class="center-block"-->
		</div>	
		
		<div class="col-md-12" >
			<img src="<?= $BASE ?>/images/conciears_gold.png" class="center-block img-responsive" alt="logo" id="logoSignup">
			<div class="col-md-4 col-md-offset-4 centered" id="formboxRegister">
				
				<form action="registration" method="POST" id="loginForm">
					
					
					<h3 class="text-center">Your email address will be used to log in to this site.</h3>
			 
					<div class="form-group">
							  <label class="control-label">First name</label>
							  <input type="text" class="form-control" name="first" id="first" value="<?= $first ?>" required="true">
							  <div class="alert alert-danger error">
									<strong>Error: </strong><span id="firstError"></span>
							  </div>
							  <?php if ($errors['first']): ?>
									
										 <div class="alert alert-danger"><?= $errors['first'] ?></div>
									
							  <?php endif; ?>
						 </div>
						 <div class="form-group ">
							  <label class="control-label">Last name</label>
							  <input type="text" class="form-control" name="last" id="last" value="<?= $last ?>" required="true">
							  <div class="alert alert-danger error">
									<strong>Error: </strong><span id="lastError"></span>
							  </div>
							  <?php if ($errors['last']): ?>
									
										 <div class="alert alert-danger"><?= $errors['last'] ?></div>
									
							  <?php endif; ?>
						 </div>
					  
						 <div class="form-group" >
							  <label class="control-label" title="i.3. email@gmail.com">Email</label>
							  <input type="email" class="form-control" name="email" id="email" value="<?= $email ?>" title="i.3. email@gmail.com" placeholder="i.e. email@gmail.com" required="true">
							  <div class="alert alert-danger error">  
									<strong>Error: </strong><span id="emailError"></span>
							  </div>
							  <?php if ($errors['email']): ?>
									
										 <div class="alert alert-danger"><?= $errors['email'] ?></div>
									
							  <?php endif; ?>
						 </div>
					  
						 
						 <div class="form-group "  >
								<label class="control-label" title="Password must be 6 characters more">Password</label>
								<input type="password" class="form-control" name="password" id="password" value="<?= $password ?>" title="Password must be 6 characters more" required="true"/>
								<div class="alert alert-danger error">
									<strong>Error: </strong><span id="passwordError"></span>
								</div>
								<?php if ($errors['password']): ?>
									 
											<div class="alert alert-danger"><?= $errors['password'] ?></div>
									 
								<?php endif; ?>
						 </div>
					
						<button type="submit" class="btn btn-primary center-block">Register!</button>
				</form>
				
				<a href="<?= $BASE ?>/" class="center-block">Go back to main</a>
				<br>
			</div>
		</div>
	</div>
			
		
		

	
	
	

</body>
</html>

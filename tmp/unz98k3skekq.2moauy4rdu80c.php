<?php echo $this->render($header,NULL,get_defined_vars(),0); ?>
 <!--EM: Last revision - 5/4/17-->
<body>
   <div class="container-fluid">
     
		<div class="col-md-12" id="bgSize">
			 <img src="<?= $BASE ?>/images/focus2.jpg" class="img-responsive" alt="background"  id="background">    <!--class="center-block"-->
		</div>	
		
		<div class="col-md-12">
			<img src="<?= $BASE ?>/images/conciears_gold.png" class="center-block img-responsive" alt="logo" id="logo">
			<div class=" col-md-4 col-md-offset-4 centered" id="formbox">
				
				<form action="login"  method="POST" id="loginForm">
					
					<!-- success display -->
					<div class="alert alert-success error">
                  <strong>Error: </strong><span id="successError"></span>
               </div>
					<?php if ($errors['success']): ?>
						 
							  <div class="alert alert-success"><?= $errors['success'] ?></div>
						 
					<?php endif; ?>
					
					<!-- email password error display -->
					<div class="alert alert-danger error">
                  <strong>Error: </strong><span id="emailError"></span>
               </div>
					<?php if ($errors['email/password']): ?>
						 
							  <div class="alert alert-danger"><?= $errors['email/password'] ?></div>
						 
					<?php endif; ?>
					
					<div class="form-group">
						 <label>Email</label>
						 <input type="email" class="form-control" name="email" value="<?= $email ?>" required="true"/>
						
					</div>
					
					<div class="form-group" >
						 <label>Password</label>
						 <input type="password" class="form-control" name="password" value="<?= $password ?>" required="true"/>
						 
					</div>
					
					<button type="submit" class="btn btn-primary center-block">Login</button>
				</form>
				
				<a href="<?= $BASE ?>/signup" class="center-block">Click here to register!</a>
			</div>
		</div>
			
		</div>
		
	</div>

</body>

</html>
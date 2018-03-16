<?php echo $this->render($header,NULL,get_defined_vars(),0); ?>

	<body>
   <div class="container-fluid">
    <div class="col-xs-12 col-sm-12 col-md-4 col-md-offset-4" id="background">
			 <!-- background image here (edit here) -->
			<img src="<?= $BASE ?>/images/peterPanBg.png" class="img-responsive" alt="background">
		</div>  
			
				<!-- heading here -->	
		<div class="heading text-center">
			<h1>Peter Pan Trivia Levels</h1>
		</div>
     
		 <!-- content here -->
		<div class="col-md-4 col-md-offset-4 centered" id="content"> 
				<!--beginner level button-->
				<a href="<?= $BASE ?>/ppBeginner"class="btn btn-default btn-block">Beginner</a>
				<!--beginner level button-->
				<a href="<?= $BASE ?>/ppIntermediate"class="btn btn-default btn-block">Immediate</a>
				<!--beginner level button-->
					<a href="<?= $BASE ?>/ppAdvance"class="btn btn-default btn-block">Advanced</a>
				<!--temp back button-->
				<button onclick="goBack()" class="btn btn-default btn-block">Back</button>
				<script>
						function goBack() {
								window.history.back();
						}
				</script>
   </div><!-- end of content -->
		
		<!--- footer section -->
		<?php echo $this->render($footer,NULL,get_defined_vars(),0); ?>
			
  </div> <!-- end of container fluid -->
</body>
</html>

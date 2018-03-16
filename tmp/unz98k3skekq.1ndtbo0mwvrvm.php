<?php echo $this->render($header,NULL,get_defined_vars(),0); ?>

<body>
 <div class="container-fluid">
   <div class="col-md-4 col-md-offset-4" id="background">
     <!-- background image here (edit here) -->
     <img src="<?= $BASE ?>/images/magickingdombackground2.0.png" class="img-responsive" alt="background">
   </div>

			<!-- heading here -->
   <div class="heading text-center">
     <h1>Big Thunder Mountain </h1>
     <h1>Railroad Trivia</h1>
     <p>Beginners Level</p>
   </div>

   <!-- content here -->
		 <div class="col-md-4 col-md-offset-4 centered" id="content">

				<div class="quizContainer">
							<div class="question"></div>
							<div class="choiceList" data-toggle="buttons"></div>
							<div class="quizMessage" onclick="displaySelectAnswerAlert()"></div>
							<div class="result" onclick="displayScore()"></div>
							<div class="nextButton btn btn-default center-block" id="next" >Next Question</div>
							<br>
				</div>

				<!-- temp back button for presentation purposes-->
				<button onclick="goBack()" class="btn btn-default btn-block">Back to Big Thunder Mountain Railroad Page</button>
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

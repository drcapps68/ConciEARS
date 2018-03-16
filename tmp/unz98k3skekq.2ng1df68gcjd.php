<?php echo $this->render($header,NULL,get_defined_vars(),0); ?>

	<body>
   <div class="container-fluid">
    <div class="col-xs-12 col-sm-12 col-md-4 col-md-offset-4" id="background">
      <!-- background image here (edit here) -->
      <img src="<?= $BASE ?>/images/magickingdombackground2.0.png" class="img-responsive" alt="background">
		</div>

				<!-- heading here -->
		<div class="heading text-center">
			<h2 style="text-shadow: 0 0 20px rgba(196, 161, 82, 0.9); color: #214f0e; font-size: 32px;">Seven Dwarfs Trivia Levels</h2>
		</div>

		 <!-- content here -->
		<div class="col-md-4 col-md-offset-4 centered" id="content">
				<!--beginner level button-->
				<a href="<?= $BASE ?>/sevendwarfsbeginner" class="btn btn-default btn-block">Beginner</a>

				<!--Intermediate level button-->
				<a class="btn btn-default btn-block" data-toggle="modal" data-target="#intermediateModal">Immediate</a>

				<!--Remove modal after filling out -->
				<!-- Modal -->
				<div id="intermediateModal" class="modal fade" role="dialog">
						<div class="modal-dialog">
							 <!-- Modal content-->
							 <div class="modal-content">
									 <div class="modal-header">
									 <button type="button" class="close" data-dismiss="modal">&times;</button>
									 <h4 class="modal-title">Seven Dwarfs Intermediate Trivia</h4>
									 </div>
									 <div class="modal-body">
										 <h5>This site is <strong>under construction</strong></h5>
										 <p>
												<i class="fa fa-warning" style="font-size:48px;color:red"></i>
										 </p>
									 </div>
									 <div class="modal-footer">
											<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
									 </div>
							 </div>
						</div>
				</div>
				<!-- End of section to be removed-->

				<!--Advanced level button-->
					<a class="btn btn-default btn-block" data-toggle="modal" data-target="#advancedModal">Advanced</a>

					<!--Remove modal after filling out -->
					<!-- Modal -->
					<div id="advancedModal" class="modal fade" role="dialog">
							<div class="modal-dialog">
								 <!-- Modal content-->
								 <div class="modal-content">
										 <div class="modal-header">
										 <button type="button" class="close" data-dismiss="modal">&times;</button>
										 <h4 class="modal-title">Seven Dwarfs Advanced Trivia</h4>
										 </div>
										 <div class="modal-body">
											 <h5>This site is <strong>under construction</strong></h5>
											 <p>
													<i class="fa fa-warning" style="font-size:48px;color:red"></i>
											 </p>
										 </div>
										 <div class="modal-footer">
												<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
										 </div>
								 </div>
							</div>
					</div>
					<!-- End of section to be removed-->

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

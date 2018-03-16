<!-- peter pan page -->
<?php echo $this->render($header,NULL,get_defined_vars(),0); ?>


<body>
  <div class="container-fluid">
     <div class="col-md-4 col-md-offset-4" id="background">
        <!-- background image here (edit here) -->
        <img src="<?= $BASE ?>/images/peterpanbackground2.0.png" class="img-responsive" alt="background">
		 </div>

		<div class="heading text-center">
			<h1>Peter Pan's Flight</h1>
		</div>

    <!-- content here -->
		<div class="col-md-4 col-md-offset-4 centered" id="content">

			<!-- Ride information Button -->
			<a class="btn btn-default btn-block" data-toggle="modal" data-target="#ppRideModal">Ride Information</a>
			<!-- Modal -->
			<div id="ppRideModal" class="modal fade" role="dialog">
				<div class="modal-dialog">
					<!-- Modal content-->
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4 class="modal-title">Peter Pan's Flight Information</h4>
						</div>
						<div class="modal-body">
							<h5><strong>Riders per vehicle:</strong> 2-4</h5>
							<h5><strong>Restrictions:</strong> no height or age restriction</h5>
							<p>
								Peter Pan's Flight is a suspended indoor family friendly, all ages ride through the classic movie
								located in Fantasyland. Featuring beautifully made animatronics, scenes from the film, and a little
								bit of pixie dust, this ride is magically enchanting.
							</p>
							<p>
								The ride is based on Walt Disney's Peter Pan,
								which is the animated version of the Peter Pan story by J.M. Barrie.
							</p>
							<p>
								The Original Idea for the
								attraction was for guests to be Peter Pan flying through the ride, although the concept was not quite
								grasped due to the Peter Pan not being seen in the ride. This was later corrected by adding an
								audio-animatronic Peter Pan later on. The Walt Disney world version opened in 1971 and was based on the
								original Disneyland attraction.
							</p>
							</div>
								<div class="modal-footer">
										<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
								</div>
					</div>
				</div>
			</div>

			<!-- Ride counter button-->
			<a class="btn btn-default btn-block" data-toggle="modal" data-target="#ppRideCounterModal">Ride Check-In</a>
				<!--  ride counter Modal -->
				<div id="ppRideCounterModal" class="modal fade" role="dialog">
						<div class="modal-dialog">
							<!-- Modal content-->
							<div class="modal-content">
								<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
										<h4 class="modal-title">Ride Check-In</h4>
								</div>
								<div class="modal-body">
										<h3>Do you want to add Peter Pans Flight to your ride count?</h3>
										<div>
										<!--	Yes Button-->
                    <button type="button" class="btn btn-md btn-default btn-block" id="yesRide">Yes</a>
										<div id="hiddenData" name ="rideId" hidden><?= $rideId ?></div>

										<button type="button" class="btn btn-md btn-default btn-block" name="noRideCounter" data-dismiss="modal">No</button>

										</div>
										<br>
										<!-- Display area for Ride Count-->
										<h3 id="totalcount">You have rode this ride <?= $totalcount['totalRideCount'] ?> times.</h3>
										<br>
										<!-- Delete the code below once the ride counter is connected to the databse-->
										<h3 id="timeStamp">The last time you rode this ride was: <?= $timestamp['timestamp'] ?></h3>
									</div>
									<div class="modal-footer">
											<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
									</div>
							</div>
						</div>
				</div>

        <!-- Rides Nearby Button -->
        <a class="btn btn-default btn-block" data-toggle="modal" data-target="#ppNearbyRideModal">Rides Nearby</a>
        <!-- Rides Nearby Modal -->
        <div id="ppNearbyRideModal" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Rides Nearby</h4>
                    </div>
                    <div class="modal-body">
                        <h3><strong>it's a small world</strong></h3>
                        <h4>Left (west) of the ride</h4>
                        <h5><strong>Riders per vehicle:</strong> approx. 20</h5>
          							<h5><strong>Restrictions:</strong> no height or age restriction</h5>
                        <br>
                        <h3><strong>The Haunted Mansion</strong></h3>
                        <h4>Left (west) of the ride</h4>
                        <h5><strong>Riders per vehicle:</strong> 2-3</h5>
          							<h5><strong>Restrictions:</strong> no height or age restriction</h5>
                        <br>
                        <h3><strong>The Many Adventures of Winnie the Pooh</strong></h3>
                        <h4>Right (East) of the ride</h4>
                        <h5><strong>Riders per vehicle:</strong> 4-6</h5>
          							<h5><strong>Restrictions:</strong> no height or age restriction</h5>
                        <br>
                        <h3><strong>Seven Dwarves Mine Train</strong></h3>
                        <h4>Right (East) of the ride</h4>
                        <h5><strong>Riders per vehicle:</strong> 4</h5>
          							<h5><strong>Restrictions:</strong> height restriction of 38"</h5>
                        <br>
                    </div>
                    <div class="modal-footer">
    								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    								</div>
                </div>
            </div>
        </div>

        <!-- Food & Dining button-->
				<a class="btn btn-default btn-block" data-toggle="modal" data-target="#ppFoodModal">Dining Nearby</a>
				<!-- food and dining Modal -->
				<div id="ppFoodModal" class="modal fade" role="dialog">
						<div class="modal-dialog">

						<!-- Modal content-->
						<div class="modal-content">
								<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h4 class="modal-title">Food and Dining Next to Ride</h4>
								</div>
								<div class="modal-body">
								<h3>Pincocchio Village Haus</h3>
								<h4>Right (east) of the ride</h4>
								<p>A charming counter service Italian eatery, with views
								of the inside of “It's a small world”.</p>
								<p>Patrons recommend the
								Chicken Parmesan served on a bed of pasta, it comes with a
								side of Caesar salad.</p>
								<br>
								<h3>Columbia Harbour House</h3>
								<h4>Left (west) of the ride</h4>
								<p>This nautical themed restaurant features gluten free options including a
								dedicated fryer for all the gluten free products.</p>
								<p>You may wish to try the New England clam chowder or the vegetarian chili,
								both of which are on the snack menu of the Disney Dining Plan.</p>
								<br>
								<h3>The Friar’s Nook</h3>
								<h4>Right (east) of the ride, further than Pinocchio’s</h4>
								<p>This quick service food counter is open seasonally, and located next to
								the Prince Charming Regal Carrousel.</p>
								<p>This hot spot serves delicious hot dogs, and artisan macaroni and cheese.</p>
								</div>
								<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
								</div>
						</div>
						</div>
				</div>

          <!-- Trivia button -->
          <a href="<?= $BASE ?>/pplevels"class="btn btn-default btn-block">Trivia</a>

			 <!-- temp back button for presentation purposes-->
			<button onclick="goBack()" class="btn btn-default btn-block">Back</button>
				<script>
						function goBack() {
								window.history.back();
						}
				</script>
		</div><!--end of content -->

			<!--- footer section -->
		<?php echo $this->render($footer,NULL,get_defined_vars(),0); ?>

	</div> <!-- end of container fluid -->

</body>
</html>

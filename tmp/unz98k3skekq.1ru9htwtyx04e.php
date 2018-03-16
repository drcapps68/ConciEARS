<!-- Haunted Mansion page -->
<?php echo $this->render($header,NULL,get_defined_vars(),0); ?>

<body>
  <div class="container-fluid">
     <div class="col-md-4 col-md-offset-4" id="background">
        <!-- background image here (edit here) -->
        <img src="<?= $BASE ?>/images/magickingdombackground2.0.png" class="img-responsive" alt="background">
		 </div>

		<div class="heading text-center">
			<h1>Haunted Mansion</h1>
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
							<h4 class="modal-title">Haunted Mansion Information</h4>
						</div>
						<div class="modal-body">
							<h5><strong>Riders per vehicle:</strong> 2-3</h5>
							<h5><strong>Restrictions:</strong> no height or age restriction</h5>
							<p>
								Haunted Mansion was originally envisioned as a main street in a western village with a carnival. Then it was developed to a crooked street
                by a church and a graveyard with a run-down manor. Finally, to the Gothic revival-style mansion which it is today.
							</p>
							<p>
								The Haunted Mansion is much larger, slightly longer and more elaborate than the original Haunted Mansion in California.
							</p>
							<p>
								Many storylines were created for the Haunted Mansion, such as having a headless horseman at the climax,
                the ghost of a sea captain who murdered his bride, and a ghost wedding.
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
										<h3>Do you want to add Haunted Mansion to your ride count?</h3>
										<div>
											<button type="button" class="btn btn-md btn-default btn-block" id="yesRide">Yes</a>
											<div id="hiddenData" name ="rideId" hidden><?= $rideId ?></div>

											<button type="button" class="btn btn-md btn-default btn-block" name="noRideCounter" data-dismiss="modal">No</button>
										</div>
										<br>
										<!-- Display area for Ride Count -->
										<h3 id="totalcount">You have rode this ride <?= $totalcount['totalRideCount'] ?> times.</h3>
										<br>
										<!-- Display area for Ride time stamp-->
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

                        <h3><strong>Liberty Square Riverboat</strong></h3>
                        <h4>Right (south) of the ride</h4>
                        <h5><strong>Riders per vehicle:</strong> approx. 20</h5>
          							<h5><strong>Restrictions:</strong> no height or age restrictions</h5>
                        <br>
                        <h3><strong>Magic Carpets of Aladdin</strong></h3>
                        <h4>Right (south) of the ride</h4>
                        <h5><strong>Riders per vehicle:</strong> 4</h5>
          							<h5><strong>Restrictions:</strong> no height or age restrictions</h5>
                        <br>
                        <h3><strong>it's a small world</strong></h3>
                        <h4>Left (east) of the ride</h4>
                        <h5><strong>Riders per vehicle:</strong> 16</h5>
          							<h5><strong>Restrictions:</strong> no height or age restrictions</h5>
                        <br>
                        <h3><strong>Peter Pan's Flight</strong></h3>
                        <h4>Left (east) of the ride</h4>
                        <h5><strong>Riders per vehicle:</strong> 2-4</h5>
                        <h5><strong>Restrictions:</strong> no height or age restrictions</h5>
                        <br>
                        <h3><strong>Prince Charming Regal Carrousel</strong></h3>
                        <h4>Left (east) of the ride</h4>
                        <h5><strong>Riders per vehicle:</strong> 1</h5>
                        <h5><strong>Restrictions:</strong> no height or age restrictions</h5>
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
								<h3>Liberty Square Market</h3>
								<h4>Right (southeast) of the ride</h4>
								<p>A wonderful counter service snack stop, where you can find refreshments, turkey legs and fresh fruit.</p>
								<p>Try a Mickey pretzel with cheese sauce and a frozen slushy with a Mickey straw</p>
								<br>
								<h3>Columbia Harbour House</h3>
								<h4>Left (west) of the ride</h4>
                <p>The nautical decor accentuates the nautical theme of the menu.</p>
								<p>Try the Anchors Aweigh - a sandwich made with white tuna.</p>
								<p>Or try the Lighthouse sandwich, which is made with hummus and broccoli slaw.</p>
								<br>
								<h3>Liberty Tree Tavern</h3>
								<h4>Right (south) of the ride, further than Pinocchio’s</h4>
								<p>This stately colonial-style inn serves all-American eats and a traditional family-style Thanksgiving dinner in a casual dining atmosphere.</p>
								<p>Advanced recommendations are recommended for this restaurant which serves a buffet-style dinner.</p>
                <p>Some dinning plans accepted.</p>
								</div>
								<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
								</div>
						</div>
						</div>
				</div>

          <!-- Trivia button -->
          <a href="<?= $BASE ?>/hauntedlevels"class="btn btn-default btn-block">Trivia</a>

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

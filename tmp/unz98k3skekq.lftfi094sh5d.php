<!-- peter pan page -->
<?php echo $this->render($header,NULL,get_defined_vars(),0); ?>

<body>
  <div class="container-fluid">
     <div class="col-md-4 col-md-offset-4" id="background">
        <!-- background image here (edit here) -->
        <img src="<?= $BASE ?>/images/spacemountainbackground.png" class="img-responsive" alt="background">
		 </div>

		<div class="col-md-4 col-md-offset-4 heading text-center">
			<h1>Space Mountain</h1>
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
							<h4 class="modal-title">Space Mountain Information</h4>
						</div>
						<div class="modal-body">
							<h5><strong>Riders per vehicle(train):</strong> 1-6</h5>
							<h5><strong>Restrictions:</strong> Must be at least 44 inches tall</h5>
							<p>
								Space Mountain is an indoor outer space themed roller coaster, thrill seeking guests can fly through
								the infinite beyond at breath taking speeds. Featuring epic galactic music, and too many stars to count,
								this attraction will make every Disney guest want to reach for the stars.
							</p>
							<p>
								The ride originally opened on January 15 1975,
								this is the oldest rollercoaster in the state of Florida.
							</p>
							<p>
								The Original Idea for the
								attraction was based off of the Matterhorn, a bobsled concept rollercoaster that guests
								fell in love with as soon as it opened. To give guests more of what they are asking for Disney
								started work on a space themed roller coaster in 1964, originally titled "Space Voyage", the name was
								laster changed and by January 1975 Space Mountain was open to guests.
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
										<h3>Do you want to add Space Mountain to your ride count?</h3>
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
												<h3><strong>Tomorrowland Speedway</strong></h3>
                        <h4>Right (north) of the ride</h4>
                        <h5><strong>Riders per vehicle:</strong> 1-2</h5>
          							<h5><strong>Restrictions:</strong> Must be 32 inches or taller</h5>
                        <br>
                        <h3><strong>Mad Tea Party</strong></h3>
                        <h4>Right (north) of the ride</h4>
                        <h5><strong>Riders per vehicle:</strong> 3-5</h5>
          							<h5><strong>Restrictions:</strong> no height or age restriction</h5>
                        <br>
                        <h3><strong>Astro Orbiter</strong></h3>
                        <h4>Straight (West) of the ride</h4>
                        <h5><strong>Riders per vehicle:</strong> 1-2</h5>
          							<h5><strong>Restrictions:</strong> no height or age restriction</h5>
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
								<h3>Cosmic Ray's Starlight Cafe</h3>
								<h4>Right (northwest) of the ride</h4>
								<p>A lively multi-windowed counter service eatery, serving something
								unique at each window.</p>
								<p>Fellow Disney guests recommend the Greek Salad with Chicken,
								it is topped with tomatoes, feta cheese, and other tasty extras.</p>
								<br>
								<h3>Auntie Gravity's Galactic Goodies</h3>
								<h4>Straight (west) of the ride</h4>
								<p>This tiny tucked away kiosk serves up frozen treats to help beat the heat.</p>
								<p>You may wish to try the strawberry or raspberry smoothies, made with nonfat yogurt
								and served with a souvenir Mickey straw.
								Many of the menu items are snacks on the Disney Dining Plan.</p>
								<br>
								<h3>The Friar’s Nook</h3>
								<h4>Straight (southwest) of the ride, almost to Main Street U.S.A</h4>
								<p>This quick service food counter is open seasonally, and has beautiful outdoor
								covered seating.</p>
								<p>This hot spot is home to the Fireworks Dessert Party, a special tasting event with amazing
								views of the fireworks show.</p>
								</div>
								<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
								</div>
						</div>
						</div>
				</div>

          <!-- Trivia button -->
          <a href="<?= $BASE ?>/spacemountaintrivialevels"class="btn btn-default btn-block">Trivia</a>

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

<!-- Big Thunder Mountain Railroad page -->
<?php echo $this->render($header,NULL,get_defined_vars(),0); ?>


<body>
  <div class="container-fluid">
     <div class="col-md-4 col-md-offset-4" id="background">
        <!-- background image here (edit here) -->
        <img src="<?= $BASE ?>/images/magickingdombackground2.0.png" class="img-responsive" alt="background">
		 </div>

		<div class="heading text-center">
			<h1>Big Thunder </h1>
      <h1>Mountain Railroad</h1>
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
							<h4 class="modal-title">Big Thunder Mountain Railroad Information</h4>
						</div>
						<div class="modal-body">
							<h5><strong>Riders per vehicle:</strong> 2-4</h5>
							<h5><strong>Restrictions:</strong> 40 inches or taller</h5>
							<p>
								The legend of Big Thunder Mountain Railroad starts in the mid-1800s when gold was found in Big Thunder Mountain; however, unbeknownst to the
                townsfolk of Tumbleweed (Big Thunder Mountain's small mining town), the mountain was sacred to the Native Americans and was cursed.
                The miners' violation of the Mountain resulted in a flash flood which left the mine abandoned and Tumbleweed a ghost town. Now,
                driverless trains race around the cursed Mountain and through the haunted mine. Other eerie mysteries await you as you explore Big Thunder
                Mountain Railroad.
							</p>
							<p>
								The ride has counterparts in Disneyland, Tokyo Disneyland and Disneyland Paris. The great tragedy caused by the cursed mountain vary with
                the different parks. Disneyland and Disneyland Paris has an earthquake which befalls their respective mining towns, Rainbow Ridge and
                Thunder Mesa. The Tokyo Disneyland version of the ride is similar to the Florida ride including having Tumbleweed as the name of the
                ghost town; however, it involves a tsunami instead of a flash flood.
							</p>
							<p>
								The original Big Thunder Mountain Railroad was conceived at Disneyland during the early 1970s but was put on hold for Pirates of the Caribbean and
                then again for Space Mountain. Being put on hold for the latter ride, was actually helpful because it allowed for the use of newer technologies.
                The Florida version opened a little over a year later than the Disneyland one.
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
										<h3>Do you want to add Big Thunder Mountain Railroad to your ride count?</h3>
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
        <a class="btn btn-default btn-block" data-toggle="modal" data-target="#nearbyRideModal">Rides Nearby</a>
        <!-- Rides Nearby Modal -->
        <div id="nearbyRideModal" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Rides Nearby</h4>
                    </div>
                    <div class="modal-body">
                        <h3><strong>Splash Mountain</strong></h3>
                        <h4>Right (west) of the ride</h4>
                        <h5><strong>Riders per vehicle:</strong> 2-6</h5>
          							<h5><strong>Restrictions:</strong> Must be 40 inches or taller</h5>
                        <br>
                        <h3><strong>Pirates of the Caribbean</strong></h3>
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
				<a class="btn btn-default btn-block" data-toggle="modal" data-target="#foodModal">Dining Nearby</a>
				<!-- food and dining Modal -->
				<div id="foodModal" class="modal fade" role="dialog">
						<div class="modal-dialog">

						<!-- Modal content-->
						<div class="modal-content">
								<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h4 class="modal-title">Food and Dining Next to Ride</h4>
								</div>
								<div class="modal-body">
								<h3>Pecos Bill Tall Tale Inn and Cafe</h3>
								<h4>Right (east) of the ride</h4>
								<p>Sit a spell in this Old West-style saloon while you enjoy wonderful Tex-Mex meals.</p>
								<p>Patrons recommend the cilantro-lime rice on the fajita platter.</p>
                <p>If you have a large group, try the Nachos Rio Grande, a <strong>top secret</strong> menu item. This huge plate of nachos
                feeds 6-8 people and comes with the Pecos Bill VIP treatment.</p>
								<br>
								<h3>Tortuga Tavern</h3>
								<h4>Left (west) of the ride</h4>
								<p>Rest your pegleg at this pirate port and enjoy a turkey leg or the Tortuga Island Desert.</p>
								<p>Don't forget to grab your souvenir light-up skull mug, filled with frozen fruit punch slushy, to commemorate your trip</p>
								<br>
								<h3>Westward Ho</h3>
								<h4>Right (east) of the ride</h4>
								<p>This quick service food counter has corn dogs and chocolate chip cookies, as well as other snacks</p>
								<p>Enjoy a frozen lemonade in a Country Bears jug to beat the heat.</p>
								</div>
								<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
								</div>
						</div>
						</div>
				</div>

          <!-- Trivia button -->
          <a href="<?= $BASE ?>/bigthundertrivialevels"class="btn btn-default btn-block">Trivia</a>

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

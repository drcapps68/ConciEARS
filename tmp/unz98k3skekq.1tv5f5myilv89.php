<!-- Seven Dwarfs Mine Train page -->
<?php echo $this->render($header,NULL,get_defined_vars(),0); ?>

<body>
  <div class="container-fluid">
     <div class="col-md-4 col-md-offset-4" id="background">
        <!-- background image here (edit here) -->
        <img src="<?= $BASE ?>/images/magickingdombackground2.0.png" class="img-responsive" alt="background">
		 </div>

		<div class="heading text-center">
			<h1>Seven Dwarfs Mine Train</h1>
		</div>

    <!-- content here -->
		<div class="col-md-4 col-md-offset-4 centered" id="content">

			<!-- Ride information Button -->
			<a class="btn btn-default btn-block" data-toggle="modal" data-target="#sevendwarfsRideModal">Ride Information</a>
			<!-- Modal -->
			<div id="sevendwarfsRideModal" class="modal fade" role="dialog">
				<div class="modal-dialog">
					<!-- Modal content-->
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4 class="modal-title">Seven Dwarfs Mine Train Information</h4>
						</div>
						<div class="modal-body">
							<h5><strong>Riders per vehicle:</strong> 2-4</h5>
							<h5><strong>Restrictions: 38 inches or taller</strong> </h5>
							<p>
								The Seven Dwarfs Mine Train ride is a rollercoaster which navigates both indoors and outdoors.
                The original Snow White attraction for the Magic Kingdom was titled Snow White's Scary Adventures.
                This ride replaced <i>20,000 Leagues Under the Sea: Submarine Voyage</i>.
							</p>
							<p>
                The movie <i>Snow White and the Seven Dwarfs</i>, referred to as "Disney's Folly," one an Academy Honorary Award for blazing a trail into a new
                entertainment field which captivated millions. Shirley Temple presented a full-size Oscar statue with seven miniature ones.
							</p>
							<p>
								There are two cameras for this ride which will provide video and pictures of guests to commemorate their visit.
                Videos and photos can be purchased through Disney's Photopass. Unfortunately, there are no monitors to preview the photos
                or a store to purchase them.
							</p>
							</div>
								<div class="modal-footer">
										<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
								</div>
					</div>
				</div>
			</div>

			<!-- Ride counter button-->
			<a class="btn btn-default btn-block" data-toggle="modal" data-target="#sevendwarfsRideCounterModal">Ride Check-In</a>
				<!--  ride counter Modal -->
				<div id="sevendwarfsRideCounterModal" class="modal fade" role="dialog">
						<div class="modal-dialog">
							<!-- Modal content-->
							<div class="modal-content">
								<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
										<h4 class="modal-title">Ride Check-In</h4>
								</div>
								<div class="modal-body">
										<h3>Do you want to add Seven Dwarfs Mine Train to your ride count?</h3>
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
        <a class="btn btn-default btn-block" data-toggle="modal" data-target="#sevendwarfsNearbyRideModal">Rides Nearby</a>
        <!-- Rides Nearby Modal -->
        <div id="sevendwarfsNearbyRideModal" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Rides Nearby</h4>
                    </div>
                    <div class="modal-body">

                        <h3><strong>Prince Charming Regal Carrousel</strong></h3>
                        <h4>Left (west) of the ride</h4>
                        <h5><strong>Riders per vehicle:</strong> 1</h5>
          							<h5><strong>Restrictions:</strong> no height or age restriction</h5>
                        <br>
                        <h3><strong>Peter Pan's Flight</strong></h3>
                        <h4>Left (west) of the ride</h4>
                        <h5><strong>Riders per vehicle:</strong> 2-4</h5>
          							<h5><strong>Restrictions:</strong> no height or age restriction</h5>
                        <br>
                        <h3><strong>it's a small world</strong></h3>
                        <h4>Left (west) of the ride</h4>
                        <h5><strong>Riders per vehicle:</strong> approx. 20</h5>
          							<h5><strong>Restrictions:</strong> no height or age restriction</h5>
                        <br>
                        <h3><strong>The Many Adventures of Winnie the Pooh</strong></h3>
                        <h4>Right (east) of the ride</h4>
                        <h5><strong>Riders per vehicle:</strong> 4-6</h5>
          							<h5><strong>Restrictions:</strong> no height or age restriction</h5>
                        <br>
                        <h3><strong>Mad Tea Party</strong></h3>
                        <h4>Right (east) of the ride</h4>
                        <h5><strong>Riders per vehicle:</strong> 1-5</h5>
          							<h5><strong>Restrictions:</strong> height restriction of 38"</h5>
                        <br>
                        <h3><strong>Dumbo the Flying Elephant</strong></h3>
                        <h4>Right (east) of the ride</h4>
                        <h5><strong>Riders per vehicle:</strong> 1-2</h5>
          							<h5><strong>Restrictions:</strong> no height or age restriction</h5>
                        <br>
                        <h3><strong>Tomorrowland Speedway</strong></h3>
                        <h4>Right (east) of the ride</h4>
                        <h5><strong>Riders per vehicle:</strong> 1-2</h5>
          							<h5><strong>Restrictions:</strong> must be 32in or taller</h5>
                        <br>
                        <h3><strong>Under the Sea-Journey of the Little Mermaid</strong></h3>
                        <h4>Right (east) of the ride</h4>
                        <h5><strong>Riders per vehicle:</strong> 2-3</h5>
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
				<a class="btn btn-default btn-block" data-toggle="modal" data-target="#sevendwarfsFoodModal">Dining Nearby</a>
				<!-- food and dining Modal -->
				<div id="sevendwarfsFoodModal" class="modal fade" role="dialog">
						<div class="modal-dialog">

						<!-- Modal content-->
						<div class="modal-content">
								<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h4 class="modal-title">Food and Dining Next to Ride</h4>
								</div>
								<div class="modal-body">
								<h3>Cheshire Cafe</h3>
								<h4>Right (east) of the ride</h4>
								<p>Refresh your self from your Wonderland wonderings with a quick snack or a thirst-quenching drink.</p>
								<p>A small snack menu is offered. Try a lemonade slushy which includes a souvenir Mickey straw.</p>
								<br>
								<h3>Storybook Treats</h3>
								<h4>Across from the ride</h4>
								<p>As close as you can get to Mrs. Potts cupboard, this sweet snack stop is themed after Beauty and the Beast and is a nice place for something cool and sweet.</p>
								<p>They have a wide variety of sundaes, including strawberry shortcake, hot fudge cookie and fudge brownie.</p>
								<br>
								<h3>The Friar’s Nook</h3>
								<h4>Left (west) of the ride</h4>
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
          <a href="<?= $BASE ?>/sevendwarfslevels"class="btn btn-default btn-block">Trivia</a>

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

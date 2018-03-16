<!-- Seven Dwarfs Mine Train page -->
<include href="{{ @header }}"></include>

<body>
  <div class="container-fluid">
     <div class="col-md-4 col-md-offset-4" id="background">
        <!-- background image here (edit here) -->
        <img src="{{ @BASE }}/images/magickingdombackground2.0.png" class="img-responsive" alt="background">
		 </div>

		<div class=" col-md-4 col-md-offset-4 heading text-center">
			<h1>The Barnstormer</h1>
		</div>

    <!-- content here -->
		<div class="col-md-4 col-md-offset-4 centered" id="content">

			<!-- Ride information Button -->
			<a class="btn btn-default btn-block" data-toggle="modal" data-target="#barnstormerRideModal">Ride Information</a>
			<!-- Modal -->
			<div id="barnstormerRideModal" class="modal fade" role="dialog">
				<div class="modal-dialog">
					<!-- Modal content-->
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4 class="modal-title">Barnstormer Information</h4>
						</div>
						<div class="modal-body">
							<h5><strong>Riders per vehicle:</strong> 2-4</h5>
							<h5><strong>Restrictions: 35 inches or taller</strong> </h5>
                            <h5><strong>Expectant mothers should not ride.</strong> </h5>
							<p>
								The Barnstormer is a junior roller coaster. It is located in the Storybook Circus section of the Magic Kingdom at the
                                Walt Disney World Resort. The Great Goofini's Barnstormer is the successor to The Barnstormer at Goofy's Wiseacre Farm
                                which closed in February 2011 as part of the Fantasyland expansion.
							</p>
							<p>
<!--                            <!--More info here -->
							</p>
							<p>
								<!--More info here -->
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
										<h3>Do you want to add Barnstormer to your ride count?</h3>
										<div>
												<!--	Yes Button-->
                    <button type="button" class="btn btn-md btn-default btn-block" id="yesRide">Yes</a>
										<div id="hiddenData" name ="rideId" hidden>{{ @rideId }}</div>
												<button type="button" class="btn btn-md btn-default btn-block" name="noRideCounter" data-dismiss="modal">No</button>
										</div>
										<br>
										<!-- Display area for Ride Count-->
										<h3 id="totalcount">You have ridden this ride {{ @totalcount.totalRideCount }} times.</h3>
										<br>
										<!-- Delete the code below once the ride counter is connected to the databse-->
										<h3 id="timeStamp">The last time you rode this ride was: {{ @timestamp.timestamp }}</h3>
									</div>
									<div class="modal-footer">
											<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
									</div>
							</div>
						</div>
				</div>

        <!-- Rides Nearby Button -->
        <a class="btn btn-default btn-block" data-toggle="modal" data-target="#barnstormerNearbyRideModal">Rides Nearby</a>
        <!-- Rides Nearby Modal -->
        <div id="barnstormerNearbyRideModal" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Rides Nearby</h4>
                    </div>
                    <div class="modal-body">

                        <h3><strong>Prince Charming Regal Carousel</strong></h3>
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
				<a class="btn btn-default btn-block" data-toggle="modal" data-target="#barnstormerFoodModal">Dining Nearby</a>
				<!-- food and dining Modal -->
				<div id="barnstormerFoodModal" class="modal fade" role="dialog">
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
          <a href="{{ @BASE }}/barnstormerlevels"class="btn btn-default btn-block">Trivia</a>

			 <!-- temp back button for presentation purposes-->
			<button onclick="goBack()" class="btn btn-default btn-block">Back</button>
				<script>
						function goBack() {
								window.history.back();
						}
				</script>
		</div><!--end of content -->

			<!--- footer section -->
		<include href="{{ @footer }}"></include>

	</div> <!-- end of container fluid -->
</body>
</html>


<!--this file will be changed to homepage.php --->
<include href="{{ @header }}"></include>

<body>
  <div class="container-fluid">
    <div class="col-md-4 col-md-offset-4" id="background">
      <!-- background image here (edit here) -->
			<img src="{{ @BASE }}/images/background.png" class="img-responsive" alt="background">
		</div>
		<!-- content here -->
		<div class="col-md-4 col-md-offset-4 centered" id="content">
		<!-- heading here -->
		<div class="heading text-center">
			<h1>Welcome {{ ucfirst(@first) }}</h1>
		</div>
<!--<a class="waves-effect waves-light  btn-large">Button</a>-->
		<div class="row">
				<!-- Magic Kingdom and Epcot Center buttons -->
				<div class="col-xs-6 col-sm-6  col-md-6">
							<a href="{{ @BASE }}/magickingdom" class="btn btn-default btn-block" >MK</a>
				</div>
				
				<div class="col-xs-6 col-sm-6 col-md-6">
							<a href="{{ @BASE }}/epcot" class="btn btn-default btn-block" >EC</a>
				</div>
		</div>

		<div class="row">
        <!-- Hollywood Studios and Animal Kingdom buttons -->
				<div class="col-xs-6 col-sm-6  col-md-6">
          <a href="{{ @BASE }}/hollywoodstudios" class="btn btn-default btn-block" >HS</a>
				</div>

				<div class="col-xs-6 col-sm-6  col-md-6">
            <a href="{{ @BASE }}/animalkingdom" class="btn btn-default btn-block" >AK</a>
				</div>
		</div>
		
		<!-- ride history button -->
		<a href="{{ @BASE }}/ridehistory" class="btn btn-default btn-block" >Ride History</a>

      <!-- Badges button -->
			<a class="btn btn-default btn-block" data-toggle="modal" data-target="#badge">Badges</a>
				 <!-- Modal -->
				<div id="badge" class="modal fade" role="dialog">
					<div class="modal-dialog text-center">
					 <!-- Modal content - possibly moving this to construction modal file-->
						<div class="modal-content ">
							<div class="modal-header">
								 <button type="button" class="close" data-dismiss="modal">&times;</button>
								 <h4 class="modal-title">Badges</h4>
							</div>
              <!-- This portion is to be removed when the Badges page has been built -->
							<div class="modal-body">
								<h5>This site is <strong>under construction</strong></h5>
								<p><i class="fa fa-warning" style="font-size:48px;color:red"></i></p>
							</div>
							<div class="modal-footer">
							 <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							</div>
					 </div>
					</div>
				</div> <!--end modal badge -->
			</div><!-- end of content -->

			<!--- footer section -->
			<include href="{{ @footer }}"></include>

  </div> <!-- end of container fluid -->
</body>
</html>

<!-- The hollywood studio rides page -->
<include href="{{ @header }}"></include>

<body>
  <div class="container-fluid">
    <div class="col-md-4 col-md-offset-4 " id="background">
      <!-- background image here (edit here) -->
      <img src="{{ @BASE }}/images/magickingdombackground2.0.png" class="img-responsive" alt="background">
    </div>

    <div class="heading text-center">
      <h1>Hollywood Studios Rides</h1>
    </div>

    <!-- content here -->
	 <div class="col-md-4 col-md-offset-4 centered" id="content">

     <!-- The Great Movie Ride button -->
     <!-- <a href="{{ @BASE }}/movieride"class="btn btn-default btn-block">The Great Movie Ride</a> -->

     <!-- This modal is to be removed when the ride history page has been built -->
     <a class="btn btn-default btn-block" data-toggle="modal" data-target="#movierideModal">The Great Movie Ride</a>
     <!-- Modal -->
     <div id="movierideModal" class="modal fade" role="dialog">
       <div class="modal-dialog">
          <!-- Modal content-->
          <div class="modal-content">
           <div class="modal-header">
             <button type="button" class="close" data-dismiss="modal">&times;</button>
             <h4 class="modal-title">The Great Movie Ride</h4>
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
     <!-- End of section to be removed -->

     <!-- Rock 'n' Roller Coaster button -->
     <!-- <a href="{{ @BASE }}/coaster"class="btn btn-default btn-block">Rock 'n' Roller Coaster</a> -->

     <!-- This modal is to be removed when the ride history page has been built -->
     <a class="btn btn-default btn-block" data-toggle="modal" data-target="#coasterModal">Rock 'n' Roller Coaster</a>
     <!-- Modal -->
     <div id="coasterModal" class="modal fade" role="dialog">
       <div class="modal-dialog">
          <!-- Modal content-->
          <div class="modal-content">
           <div class="modal-header">
             <button type="button" class="close" data-dismiss="modal">&times;</button>
             <h4 class="modal-title">Rock 'n' Roller Coaster</h4>
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
     <!-- End of section to be removed -->

     <!-- Star Tours button -->
     <!-- <a href="{* @BASE *}/startours"class="btn btn-default btn-block">Star Tours</a> -->

     <!-- This modal is to be removed when the ride history page has been built -->
     <a class="btn btn-default btn-block" data-toggle="modal" data-target="#startoursModal">Star Tours</a>
     <!-- Modal -->
     <div id="startoursModal" class="modal fade" role="dialog">
       <div class="modal-dialog">
          <!-- Modal content-->
          <div class="modal-content">
           <div class="modal-header">
             <button type="button" class="close" data-dismiss="modal">&times;</button>
             <h4 class="modal-title">Star Tours</h4>
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
     <!-- End of section to be removed -->

     <!-- Toy Story Mania! button -->
     <!-- <a href="{* @BASE *}/toystory"class="btn btn-default btn-block">Toy Story Mania!</a> -->

     <!-- This modal is to be removed when the ride history page has been built -->
     <a class="btn btn-default btn-block" data-toggle="modal" data-target="#toystoryModal">Toy Story Mania!</a>
     <!-- Modal -->
     <div id="toystoryModal" class="modal fade" role="dialog">
       <div class="modal-dialog">
          <!-- Modal content-->
          <div class="modal-content">
           <div class="modal-header">
             <button type="button" class="close" data-dismiss="modal">&times;</button>
             <h4 class="modal-title">Toy Story Mania!</h4>
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
     <!-- End of section to be removed -->

     <!-- The Twilight Zone Tower of Terror button -->
     <!-- <a href="{* @BASE *}/towerterror"class="btn btn-default btn-block">The Twilight Zone Tower of Terror</a> -->

     <!-- This modal is to be removed when the ride history page has been built -->
     <a class="btn btn-default btn-block" data-toggle="modal" data-target="#towerterrorModal">The Twilight Zone Tower of Terror</a>
     <!-- Modal -->
     <div id="towerterrorModal" class="modal fade" role="dialog">
       <div class="modal-dialog">
          <!-- Modal content-->
          <div class="modal-content">
           <div class="modal-header">
             <button type="button" class="close" data-dismiss="modal">&times;</button>
             <h4 class="modal-title">The Twilight Zone Tower of Terror</h4>
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
     <!-- End of section to be removed -->

      <!-- temp back button for presentation purposes-->
      <button onclick="goBack()" class="btn btn-default btn-block">Back</button>
            <script>
              function goBack() {
                window.history.back();
              }
            </script>
      </div><!-- end of content -->

      <include href="{{ @footer }}"></include>

  </div> <!-- end of container fluid -->
</body>
</html>

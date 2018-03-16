<!-- The magic kingdom rides page -->
<?php echo $this->render($header,NULL,get_defined_vars(),0); ?>

<body>
  <div class="container-fluid">
    <div class="col-md-4 col-md-offset-4 " id="background">

      <!-- dropdown button -->
  		<div class="dropdown">
  			<button class="dropbtn"><img src="<?= $BASE ?>/images/logo.png"/></button>
  			<div class="dropdown-content">
  				<a href="#">Sign Out</a>
  			</div>
  		</div>
      
      <!-- background image here (edit here) -->
      <img src="<?= $BASE ?>/images/magickingdombackground3.0.png" class="img-responsive" alt="background">
    </div>



    <div class="heading text-center">
      <h1>Magic Kingdom Rides</h1>
    </div>



    <!-- content here -->
	 <div class="col-md-4 col-md-offset-4 centered" id="content">



     <!-- Remove these buttons and activate the ones below -->
     <a href="<?= $BASE ?>/bigthunder"class="btn btn-default btn-block">Big Thunder Mountain Railroad</a>

     <a href="<?= $BASE ?>/hauntedMansion"class="btn btn-default btn-block">Haunted Mansion</a>

     <a href="<?= $BASE ?>/peterpan"class="btn btn-default btn-block">Peter Pan's Flight</a>

     <a href="<?= $BASE ?>/pirates"class="btn btn-default btn-block">Pirates of the Caribbean</a>

     <a href="<?= $BASE ?>/sevendwarfs"class="btn btn-default btn-block">Seven Dwarfs Mine Train</a>

     <a href="<?= $BASE ?>/spacemountain"class="btn btn-default btn-block">Space Mountain</a>
     <!-- end of section to be removed -->

     <!-- Astro Orbiter button -->
     <!-- <a href="<?= $BASE ?>/astroorbiter"class="btn btn-default btn-block">Astro Orbiter</a> -->
     <!--<a data-toggle="modal" data-target="#construction" class="btn btn-default btn-block">Astro Orbiter</a>-->

     <!-- The Barnstormer button -->
     <!-- <a href="<?= $BASE ?>/barnstormer"class="btn btn-default btn-block">The Barnstormer</a> -->
     <!--<a data-toggle="modal" data-target="#construction" class="btn btn-default btn-block">The Barnstormer</a>-->

     <!-- Big Thunder Mountain Railroad button -->
     <!-- <a href="<?= $BASE ?>/bigthunder"class="btn btn-default btn-block">Big Thunder Mountain Railroad</a> -->

     <!-- The Buzz Lightyear's Space Ranger Spin button -->
     <!-- <a href="<?= $BASE ?>/spacerangerspin"class="btn btn-default btn-block">Buzz Lightyear's Space Ranger Spin</a> -->
     <!--<a data-toggle="modal" data-target="#construction" class="btn btn-default btn-block">Buzz Lightyear's Space Ranger Spin</a>-->

     <!-- Dumbo the Flying Elephant button -->
     <!-- <a href="<?= $BASE ?>/dumbo"class="btn btn-default btn-block">Dumbo the Flying Elephant</a> -->
     <!--<a data-toggle="modal" data-target="#construction" class="btn btn-default btn-block">Dumbo the Flying Elephant</a>-->

     <!-- Haunted Mansion button -->
     <!-- <a href="<?= $BASE ?>/hauntedMansion"class="btn btn-default btn-block">Haunted Mansion</a> -->

     <!-- it's a small world button -->
     <!-- <a href="<?= $BASE ?>/smallworld"class="btn btn-default btn-block">it's a small world</a> -->
     <!--<a data-toggle="modal" data-target="#construction" class="btn btn-default btn-block">it's a small world</a>-->

     <!-- Jungle Cruise button -->
     <!-- <a href="<?= $BASE ?>/junglecruise"class="btn btn-default btn-block">Jungle Cruise</a> -->
     <!--<a data-toggle="modal" data-target="#construction" class="btn btn-default btn-block">Jungle Cruise</a>-->

     <!-- LIberty Square Riverboat button -->
     <!-- <a href="<?= $BASE ?>/riverboat"class="btn btn-default btn-block">Liberty Square Riverboat</a> -->
     <!--<a data-toggle="modal" data-target="#construction" class="btn btn-default btn-block">Liberty Square Riverboat</a>-->

     <!-- Mad Tea Party button -->
     <!-- <a href="<?= $BASE ?>/madteaparty"class="btn btn-default btn-block">Mad Tea Party</a> -->
     <!--<a data-toggle="modal" data-target="#construction" class="btn btn-default btn-block">Mad Tea Party</a>-->

     <!-- Magic Carpets of Aladdin button -->
     <!-- <a href="<?= $BASE ?>/magiccarpets"class="btn btn-default btn-block">Magic Carpets of Aladdin</a> -->
     <!--<a data-toggle="modal" data-target="#construction" class="btn btn-default btn-block">Magic Carpets of Aladdin</a>-->

     <!-- The Many Adventures of Winnie the Pooh button -->
     <!-- <a href="<?= $BASE ?>/winniethepooh"class="btn btn-default btn-block">The Many Adventures of Winnie the Pooh</a> -->
     <!--<a data-toggle="modal" data-target="#construction" class="btn btn-default btn-block">The Many Adventures of Winnie the Pooh</a>-->

     <!-- Peter Pan's Flight button -->
     <!-- <a href="<?= $BASE ?>/peterpan"class="btn btn-default btn-block">Peter Pan's Flight</a> -->

     <!-- Pirates of the Caribbean button -->
     <!-- <a href="<?= $BASE ?>/pirates"class="btn btn-default btn-block">Pirates of the Caribbean</a> -->

     <!-- Prince Charming Regal Carrousel button -->
     <!-- <a href="<?= $BASE ?>/princecharming"class="btn btn-default btn-block">Prince Charming Regal Carrousel</a> -->
     <!--<a data-toggle="modal" data-target="#construction" class="btn btn-default btn-block">Prince Charming Regal Carrousel</a>-->

     <!-- Seven Dwarfs Mine Train button -->
     <!-- <a href="<?= $BASE ?>/sevendwarfs"class="btn btn-default btn-block">Seven Dwarfs Mine Train</a> -->

     <!-- Space Mountain button -->
     <!-- <a href="<?= $BASE ?>/spacemountain"class="btn btn-default btn-block">Space Mountain</a> -->

     <!-- Splash Mountain button -->
     <!-- <a href="<?= $BASE ?>/splashmountain"class="btn btn-default btn-block">Splash Mountain</a> -->
     <!--<a data-toggle="modal" data-target="#construction" class="btn btn-default btn-block">Splash Mountain</a>-->

     <!-- Tomorrowland Speedway button -->
     <!-- <a href="<?= $BASE ?>/speedway"class="btn btn-default btn-block">Tomorrowland Speedway</a> -->
     <!--<a data-toggle="modal" data-target="#construction" class="btn btn-default btn-block">Tomorrowland Speedway</a>-->

     <!-- Tomorrowland Transit Authority PeopleMover button -->
     <!-- <a href="<?= $BASE ?>/peoplemover"class="btn btn-default btn-block">Tomorrowland Transit Authority PeopleMover</a> -->
     <!--<a data-toggle="modal" data-target="#construction" class="btn btn-default btn-block">Tomorrowland Transit Authority PeopleMover</a>-->

     <!-- Under the Sea - Journey of the Little Mermaid button -->
     <!-- <a href="<?= $BASE ?>/underthesea"class="btn btn-default btn-block">Under the Sea - Journey of the Little Mermaid</a> -->
     <!--<a data-toggle="modal" data-target="#construction" class="btn btn-default btn-block">Under the Sea - Journey of the Little Mermaid</a>-->

     <!-- Carousel of Progress button -->
     <!-- <a href="<?= $BASE ?>/carouselprogress"class="btn btn-default btn-block">Walt Disney's Carousel of Progress</a> -->
     <!--<a data-toggle="modal" data-target="#construction" class="btn btn-default btn-block">Walt Disney's Carousel of Progress</a>-->

     <!-- Walt Disney World Railroad button -->
     <!-- <a href="<?= $BASE ?>/wdwrailroad"class="btn btn-default btn-block">Walt Disney World Railroad</a> -->
     <!--<a data-toggle="modal" data-target="#construction" class="btn btn-default btn-block">Walt Disney World Railroad</a>-->

     <!-- This modal is to be removed when the ride history page has been built -->
     <!-- Modal -->
     <div id="construction" class="modal fade" role="dialog">
       <div class="modal-dialog">
          <!-- Modal content-->
          <div class="modal-content">
           <div class="modal-header">
             <button type="button" class="close" data-dismiss="modal">&times;</button>
             <h4 class="modal-title">GAWRSH!!</h4>
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

      <?php echo $this->render($footer,NULL,get_defined_vars(),0); ?>

  </div> <!-- end of container fluid -->
</body>
</html>

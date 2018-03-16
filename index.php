<?php
session_start();
    /*
     *This file assigns routers to each page
     *
     *@version php 7
     *
     *@author Liz Mahoney <emahoney5@mail.greenriver.edu>
     *@author Dan Capps <dcapps@mail.greenriver.edu>
     *@author Kelly O'Toole <>
     *
     *@access public
     *
     */
    require_once 'vendor/autoload.php';
    $f3 = require_once('vendor/bcosca/fatfree-core/base.php');

    //error handling
    $f3->set('DEBUG', 3);

    //custom error handler
    //$f3->set('ONERROR', function($f3){
    //    echo '<p>Error text: ' .$f3->get('ERROR.text'). '</p>';
    //    echo '<p>Stack trace: ' .$f3->get('ERROR.text'). '</p>';
    //});

    //route to landing page
    $f3->route('GET /',function($f3) {
        $controller = new Controller($f3);
        $controller->landing();
    });


    //route POST to login
    $f3->route('POST /login',function($f3) {
        $controller = new Controller($f3);
        $controller->login();
    });

    //route to sign Up page
    $f3->route('GET /signup',function($f3) {
        $controller = new Controller($f3);
        $controller->signup();
    });

    //route POST after signup
    $f3->route('POST /registration',function($f3) {
        $controller = new Controller($f3);
        $controller->registration();
    });

    //route to list of themeparks page for ride button
    $f3->route('GET /themeparks',function($f3) {
        $controller = new Controller($f3);
        $controller->themeparks();
    });

    //route to home page
    $f3->route('GET /homepage',function($f3) {
        $controller = new Controller($f3);
        $controller->homepage();
    });

    //route to ride history page
    $f3->route('GET /ridehistory',function($f3) {
        $controller = new Controller($f3);
        $controller->ridehistory();
    });

    //route to logout
    $f3->route('GET /logout',function($f3) {
        $controller = new Controller($f3);
        $controller->logout();
    });

    //route to addRide
    $f3->route('POST /addRide', function($f3){
        $controller = new Controller($f3);
        $controller->addRide();
    });


    //=====THEME PARK ROUTERS GO BELOW=====//

    //Epcot code goes below
    //route to the epcot page
    $f3->route('GET /epcot',function($f3) {
        $controller = new Controller($f3);
        $controller->epcot();
    });

    //Hollywood Studios code goes below
    //route to the hollywood studios page
    $f3->route('GET /hollywoodstudios',function($f3) {
        $controller = new Controller($f3);
        $controller->hollywoodstudios();
    });

    //Animal Kingdom code goes below
    //route to the animal kingdom page
    $f3->route('GET /animalkingdom',function($f3) {
        $controller = new Controller($f3);
        $controller->animal();
    });
    //route to the magic kingdom page
    $f3->route('GET /magickingdom',function($f3) {
        $controller = new Controller($f3);
        $controller->magic();
    });

    //=====ALL RIDE/TRIVIA ROUTERS GO BELOW=====//

     //route to the peter pan main page
    $f3->route('GET /peterpan',function($f3) {
        $controller = new Controller($f3);
        $controller->peterpan();
    });

     //route to the peter pan trivia levels page
    $f3->route('GET /pplevels',function($f3) {
        $controller = new Controller($f3);
        //link to function in controller.php
        $controller->ppTriviaLevels();
    });

     //route to the peter pan trivia beginners page
    $f3->route('GET /ppBeginner',function($f3) {
        $controller = new Controller($f3);
        $controller->ppBeginner();
    });

     //route to the peter pan trivia intermediate page
    $f3->route('GET /ppIntermediate',function($f3) {
        $controller = new Controller($f3);
        $controller->ppIntermediate();
    });

     //route to the peter pan trivia advanced page
    $f3->route('GET /ppAdvance',function($f3) {
        $controller = new Controller($f3);
        $controller->ppAdvance();
    });

    //route to the Haunted Mansion main page
    $f3->route('GET /hauntedMansion',function($f3) {
        $controller = new Controller($f3);
        $controller->hauntedmansion();
    });

    //route to the Haunted Mansion trivia levels page
    $f3->route('GET /hauntedlevels',function($f3) {
        $controller = new Controller($f3);
        $controller->hauntedTriviaLevels();
    });

    //route to the Haunted Mansion trivia beginners page
    $f3->route('GET /hauntedmansionBeginner',function($f3) {
        $controller = new Controller($f3);
        $controller->hauntedmansionBeginner();
    });

    //route to the Seven Dwarfs Mine Train main page
    $f3->route('GET /sevendwarfs',function($f3) {
        $controller = new Controller($f3);
        $controller->sevendwarfs();
    });

    //route to the Haunted Mansion trivia levels page
    $f3->route('GET /sevendwarfstrivialevels',function($f3) {
        $controller = new Controller($f3);
        $controller->hauntedTriviaLevels();
    });

    //route to the Haunted Mansion trivia beginners page
    $f3->route('GET /sevendwarfsBeginner',function($f3) {
        $controller = new Controller($f3);
        $controller->sevendwarfsbeginner();
    });

    //route to the Seven Dwarfs trivia levels page
    $f3->route('GET /sevendwarfslevels',function($f3) {
        $controller = new Controller($f3);
        $controller->sevendwarfsTriviaLevels();
    });

    //route to the Seven Dwarfs trivia levels page
    $f3->route('GET /sevendwarfslevels',function($f3) {
        $controller = new Controller($f3);
        $controller->sevendwarfsTriviaLevels();
    });

    //route to the Space Mountain ride page
    $f3->route('GET /spacemountain',function($f3) {
       $controller = new Controller($f3);
       $controller->spacemountain();
    });

    //route to the Space Mountain trivia levels page
    $f3->route('GET /spacemountaintrivialevels',function($f3) {
        $controller = new Controller($f3);
        $controller->spacemountainTriviaLevels();
    });

    //route to the Space Mountain trivia beginners page
   $f3->route('GET /spacemountainbeginner',function($f3) {
       $controller = new Controller($f3);
       $controller->spacemountainBeginner();
   });

    //route to the Pirates of the Carribean ride page
    $f3->route('GET /pirates',function($f3) {
       $controller = new Controller($f3);
       $controller->pirates();
    });

    //route to the Enchanted Tiki Room ride page
    $f3->route('GET /tikiroom',function($f3) {
       $controller = new Controller($f3);
       $controller->tikiroom();
    });

    //route to the Enchanted Tiki Room trivia levels page
    $f3->route('GET /tikiroomtrivialevels',function($f3) {
        $controller = new Controller($f3);
        $controller->tikiroomTriviaLevels();
    });

    //route to the Enchanted Tiki Room trivia beginners page
   $f3->route('GET /tikiroombeginner',function($f3) {
       $controller = new Controller($f3);
       $controller->tikiroomBeginner();
   });

   //route to Jungle Cruise ride page
   $f3->route('GET /junglecruise',function($f3){
        $controller = new Controller($f3);
        $controller->junglecruise();
   });

   //route to Jungle Cruise trivia levels page
   $f3->route('GET /junglecruisetrivialevels', function($f3){
        $controller = new Controller($f3);
        $controller->junglecruiseTriviaLevels();
   });

   //route to the Jungle Cruise trivia beginners page
   $f3->route('GET /junglecruiseBeginner', function($f3){
        $controller = new Controller($f3);
        $controller->junglecruiseBeginner();
   });

  //  route to The Magic Carpets of Aladdin ride page
  $f3->route('GET /magiccarpets', function($f3){
        $controller = new Controller($f3);
        $controller->magiccarpets();
  });

  //route to The Magic Carpets of Aladdin trivia levels page
  $f3->route('GET /magiccarpetstrivialevels', function($f3){
        $controller = new Controller($f3);
        $controller->magiccarpetsTriviaLevels();
  });

  //route to The Magic Carpets of Aladdin trivia beginners page
  $f3->route('GET /magiccarpetsBeginner', function($f3){
        $controller = new Controller($f3);
        $controller->magiccarpetsBeginner();
  });

    //route to the big thunder ride page
    $f3->route('GET /bigthunder',function($f3) {
       $controller = new Controller($f3);
       $controller->bigThunder();
    });

    //route to the Big Thunder Mountain Railroad trivia levels page
    $f3->route('GET /bigthundertrivialevels',function($f3) {
        $controller = new Controller($f3);
        $controller->bigthunderTriviaLevels();
    });

    //route to the Big Thunder Mountain Railroad trivia beginners page
    $f3->route('GET /bigthunderBeginner',function($f3) {
        $controller = new Controller($f3);
        $controller->bigthunderBeginner();
    });

    //======BARNSTORMER SECTION =====//

    //route to the barnstormer main page
    $f3->route('GET /barnstormer',function($f3) {
        $controller = new Controller($f3);
        $controller->barnstormer();
    });

     //route to the barnstormer trivia levels page
    $f3->route('GET /barnstormerlevels',function($f3) {
        $controller = new Controller($f3);
        $controller->barnstormerTriviaLevels();
    });

     //route to the barnstormer trivia beginners page
    $f3->route('GET /barnstormerBeginner',function($f3) {
        $controller = new Controller($f3);
        $controller->barnstormerBeginner();
    });

     //route to the barnstormer trivia intermediate page
    $f3->route('GET /barnstormerIntermediate',function($f3) {
        $controller = new Controller($f3);
        $controller->barnstormerIntermediate();
    });

     //route to the barnstormer trivia advanced page
    $f3->route('GET /barnstormerAdvance',function($f3) {
        $controller = new Controller($f3);
        $controller->barnstormerAdvance();
    });

    //=====DUMBO SECTION ====//

    //route to the Dumbo the flying elephant main page
    $f3->route('GET /dumbo',function($f3) {
        $controller = new Controller($f3);
        $controller->dumbo();
    });

     //route to the Dumbo the flying elephant trivia levels page
    $f3->route('GET /dumbolevels',function($f3) {
        $controller = new Controller($f3);
        $controller->dumboTriviaLevels();
    });

     //route to the Dumbo the flying elephant trivia beginners page
    $f3->route('GET /dumboBeginner',function($f3) {
        $controller = new Controller($f3);
        $controller->dumboBeginner();
    });

     //route to the Dumbo the flying elephant trivia intermediate page
    $f3->route('GET /dumboIntermediate',function($f3) {
        $controller = new Controller($f3);
        $controller->dumboIntermediate();
    });

     //route to the Dumbo the flying elephant trivia advanced page
    $f3->route('GET /dumboAdvance',function($f3) {
        $controller = new Controller($f3);
        $controller->dumboAdvance();
    });








    //sets header and footer for each page
    $f3->set('header', 'view/header.php');
    $f3->set('footer', 'view/footer.php');
    $f3->set('footerCss', 'styles/footer.css');


    $f3->run();


?>

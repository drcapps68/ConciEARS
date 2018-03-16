<?php
/*
  *This is the Controller that communicates between the view and model
  *
  *@version php 7
  *
  *@author Liz Mahoney <emahoney5@mail.greenriver.edu>
  *@author Dan Capps <dcapps@mail.greenriver.edu>
  *@author Kelly O'Toole <>
  */
class Controller{

    private $_f3;

    public function __construct($f3)
    {
        $this->_f3 = $f3;
    }

    /**
     *This displays the LOGIN landing page
     */
    public function landing()
    {
        require_once'model/validation.php';
        $this->_f3->set('cssLink', 'landing.css');
        $this->_f3->set('valid', 'validateLogin.js');
        $this->_f3->set('formLink', '//cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.2.1/css/material.min.css');
        echo Template::instance()->render('view/login/landing.php');
    }

    /**
     *This POST login user account
     */
    public function login()
    {
        require_once'model/validation.php';
        $errors= validateLogin();
        if(count($errors) === 0 ){
            $data = new DataLayer();
            $check = $data->authenticate();
            if($check===$_POST['email']){
                $_SESSION['loggedIn'] = true;
                $_SESSION['email'] = $_POST['email'];
                $this->_f3->reroute('/homepage');
            } else {
                $errors['email/password'] = "Email/Password is invalid";
                $this->landingError($errors);
            }
        } else {
            $this->landingError($errors);
        }
    }

    /**
     *This displays the theme park page (homepage)
     */
    public function homepage()
    {
        if($_SESSION['email']  && $_SESSION['loggedIn'] === true){
            $data = new DataLayer();
            $first = $data->getUsersFirst($_SESSION['email']);
            $this->_f3->set('first', $first);
            // var_dump($_SESSION['email'] . "/" . $_SESSION['password']);
            $this->_f3->set('cssLink', 'accountmain.css');
            $this->_f3->set('responsiveLink', 'responsive.css');
            $this->_f3->set('generalbuttons', 'buttons/generalbuttons.css');

            echo Template::instance()->render('view/homepage.php');

        } else {
            $this->_f3->reroute('/');
        }
    }

    /**
     *This displays the theme park page (homepage)
     */
    public function ridehistory()
    {
        if($_SESSION['email']  && $_SESSION['loggedIn'] === true){

            $data = new DataLayer();

            $first = $data->getUsersFirst($_SESSION['email']);
            $this->_f3->set('first', $first);

            $user_id = $data->getUserID($_SESSION['email']);

            $rideList = $data->getAllRidesByUser($user_id['user_id']);


           // var_dump($rideList);


            $this->_f3->set('rides', $rideList);

            $this->_f3->set('cssLink', 'accountmain.css');
            $this->_f3->set('responsiveLink', 'responsive.css');
            $this->_f3->set('generalbuttons', 'buttons/generalbuttons.css');

            echo Template::instance()->render('view/ridehistory.php');

        } else {
            $this->_f3->reroute('/');
        }
    }

    /*
    *This displays user input error login page
    **/
    public function landingError($errors)
    {
        $this->_f3->set('cssLink', 'landing.css');
        $this->_f3->set('valid', 'validateSignup.js');
        $this->_f3->set('formLink', '//cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.2.1/css/material.min.css');
        $this->_f3->set('errors', $errors);
        $this->_f3->set('email', $_POST['email']);
        $this->_f3->set('password', $_POST['password']);

        echo Template::instance()->render('view/login/landing.php');
    }

    /**
     *This displays the Sign Up page
     */
    public function signup()
    {
        $this->_f3->set('cssLink', 'landing.css');
        $this->_f3->set('valid', 'validateSignup.js');
        $this->_f3->set('formLink', '//cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.2.1/css/material.min.css');
        echo Template::instance()->render('view/login/register.php');
    }

    /**
     *This POST sign up form
     */
    public function registration()
    {
        require_once'model/validation.php';
        $errors = validateRegistration();
        if(count($errors) === 0){
            $data = new DataLayer();
            $data->createUser();
            $errors['success'] = "Account created successfully!";
            $this->signupSuccess($errors);
        } else {
            $this->signupError($errors);
        }
    }

    /*
     *This displays signup success
     */
    public function signupSuccess($errors)
    {
        $this->_f3->set('cssLink', 'landing.css');
        $this->_f3->set('valid', 'validateSignup.js');
        $this->_f3->set('formLink', '//cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.2.1/css/material.min.css');
        $this->_f3->set('errors', $errors);

        echo Template::instance()->render('view/login/landing.php');
    }

    /**
     *This displays the errors when signing up
     */
    public function signupError($errors)
    {
        $this->_f3->set('cssLink', 'landing.css');
        $this->_f3->set('valid', 'validateSignup.js');
        $this->_f3->set('formLink', '//cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.2.1/css/material.min.css');
        $this->_f3->set('errors', $errors);
        $this->_f3->set('first',  $_POST['first']);
        $this->_f3->set('last', $_POST['last']);
        $this->_f3->set('email', $_POST['email']);
        $this->_f3->set('password', $_POST['password']);

        echo Template::instance()->render('view/login/register.php');

    }

    /**
     * Logs user out
     */
    public function logout()
    {
        $_SESSION['successLogin'] = null;
        $_SESSION['email'] = null;
        $this->_f3->reroute('/');
    }


    /*================THEME PARK BUTTONS =====================*/

    /**
     *This displays the epcot page
     */
    public function epcot()
    {
        if($_SESSION['email']  && $_SESSION['loggedIn'] === true){
            $this->_f3->set('cssLink', 'magickingdom.css');
            $this->_f3->set('responsiveLink', 'responsive.css');
            $this->_f3->set('generalbuttons', 'buttons/generalbuttons.css');

            echo Template::instance()->render('view/epcot/epcot.php');
        } else{
            $this->_f3->reroute('/');
        }
    }

    /**
     *This displays the Hollywood Studios page
     */
    public function hollywoodstudios()
    {
        if($_SESSION['email']  && $_SESSION['loggedIn'] === true){
            $this->_f3->set('cssLink', 'magickingdom.css');
            $this->_f3->set('responsiveLink', 'responsive.css');
            $this->_f3->set('generalbuttons', 'buttons/generalbuttons.css');

            echo Template::instance()->render('view/hollywoodstudios/hollywoodstudios.php');

        } else{
            $this->_f3->reroute('/');
        }
    }

    /**
     *This displays the animal kingdom page
     */
    public function animal()
    {
        if($_SESSION['email']  && $_SESSION['loggedIn'] === true){
            $this->_f3->set('cssLink', 'magickingdom.css');
            $this->_f3->set('responsiveLink', 'responsive.css');
            $this->_f3->set('generalbuttons', 'buttons/generalbuttons.css');

            echo Template::instance()->render('view/animalkingdom/animalkingdom.php');

        } else{
            $this->_f3->reroute('/');
        }
    }

    /**
     *This displays the magic kingdom page
     */
    public function magic()
    {
        if($_SESSION['email']  && $_SESSION['loggedIn'] === true){
            $this->_f3->set('cssLink', 'magickingdom.css');
            $this->_f3->set('responsiveLink', 'responsive.css');
            $this->_f3->set('generalbuttons', 'buttons/generalbuttons.css');

            echo Template::instance()->render('view/magickingdom/magickingdom.php');

        } else{
            $this->_f3->reroute('/');
        }
    }

    /*================END OF THEME PARK BUTTONS =====================*/

    /*
    *Ride counter function
    */
    public function addRide(){

        if($_SESSION['email']  && $_SESSION['loggedIn'] === true){

            $ride_id = $_POST['rideId'];

            $data = new DataLayer();
            $user_id = $data->getUserID($_SESSION['email']);

            $add_ride = $data->addRide($user_id['user_id'], $ride_id);

            $total_count = $data->getTotalRide($user_id['user_id'], $ride_id);
            $time_stamp = $data->getRideRecentTimestamp($user_id['user_id'], $ride_id);

            echo $total_count['totalRideCount']."a".$time_stamp['timestamp'];

        } else{
            $this->_f3->reroute('/');
        }
    }


    /*================PETER PAN SECTION=====================*/

    /**
     *This displays the main Peter Pan page
     */
    public function peterpan()
    {
        if($_SESSION['email']  && $_SESSION['loggedIn'] === true){
            $this->_f3->set('cssLink', 'peterpan.css');
            $this->_f3->set('responsiveLink', 'responsive.css');
            $this->_f3->set('generalbuttons', 'buttons/generalbuttons.css');

            $data = new DataLayer();
            $ride_id = "MK45";

            $user_id = $data->getUserID($_SESSION['email']);
            $total_count = $data->getTotalRide($user_id['user_id'], $ride_id);
            $time_stamp = $data->getRideRecentTimestamp($user_id['user_id'], $ride_id);

            $this->_f3->set('id', $user_id);
            $this->_f3->set('rideId', $ride_id);
            $this->_f3->set('totalcount', $total_count);
            $this->_f3->set('timestamp', $time_stamp);

            echo Template::instance()->render('view/magickingdom/peterpan/peterpan.php');

        } else{
            $this->_f3->reroute('/');
        }
    }

    /**
     *This displays the PP trivia page
     */
    public function ppTriviaLevels()
    {
        if($_SESSION['email']  && $_SESSION['loggedIn'] === true){
            $this->_f3->set('cssLink', 'peterpan.css');
            $this->_f3->set('responsiveLink', 'responsive.css');
            $this->_f3->set('generalbuttons', 'buttons/generalbuttons.css');

            echo Template::instance()->render('view/magickingdom/peterpan/pptrivialevels.php');

        } else {
            $this->_f3->reroute('/');
        }
    }

    /**
     *This displays the PP trivia beginner  page
     */
    public function ppBeginner()
    {
        if($_SESSION['email']  && $_SESSION['loggedIn'] === true){
            $this->_f3->set('cssLink', 'pptrivia.css');
            $this->_f3->set('responsiveLink', 'responsive.css');
            $this->_f3->set('triviabuttons', 'buttons/triviabuttons.css');
            $this->_f3->set('jsLevel', 'peterpan/ppBeginner.js');
            $this->_f3->set('trivia', 'trivia.js');

            echo Template::instance()->render('view/magickingdom/peterpan/ppBeginner.php');

        } else {
            $this->_f3->reroute('/');
        }
    }
    /**
     *This displays the PP trivia intermediate page
     */
    public function ppIntermediate()
    {
        if($_SESSION['email']  && $_SESSION['loggedIn'] === true){
            $this->_f3->set('cssLink', 'pptrivia.css');
            $this->_f3->set('responsiveLink', 'responsive.css');
            $this->_f3->set('triviabuttons', 'buttons/triviabuttons.css');
            $this->_f3->set('jsLevel', 'peterpan/ppIntermediate.js');
            $this->_f3->set('trivia', 'trivia.js');

            echo Template::instance()->render('view/magickingdom/peterpan/ppIntermediate.php');

        } else {
            $this->_f3->reroute('/');
        }
    }

    /**
     *This displays the PP trivia advance page
     */
    public function ppAdvance()
    {
        if($_SESSION['email']  && $_SESSION['loggedIn'] === true){
            $this->_f3->set('cssLink', 'pptrivia.css');
            $this->_f3->set('responsiveLink', 'responsive.css');
            $this->_f3->set('triviabuttons', 'buttons/triviabuttons.css');
            $this->_f3->set('jsLevel', 'peterpan/ppAdvance.js');
            $this->_f3->set('trivia', 'trivia.js');

            echo Template::instance()->render('view/magickingdom/peterpan/ppAdvance.php');

        } else {
            $this->_f3->reroute('/');
        }
     }


    /*================HAUNTED MANSION  SECTION=====================*/

    /**
     *This displays the main Haunted Mansion page
     */
    public function hauntedmansion()
    {
        if($_SESSION['email']  && $_SESSION['loggedIn'] === true){
            $this->_f3->set('cssLink', 'peterpan.css');
            $this->_f3->set('responsiveLink', 'responsive.css');
            $this->_f3->set('generalbuttons', 'buttons/generalbuttons.css');

            $ride_id = "MK38";

            $data = new DataLayer();
            $user_id = $data->getUserID($_SESSION['email']);
            $total_count = $data->getTotalRide($user_id['user_id'], $ride_id);
            $time_stamp = $data->getRideRecentTimestamp($user_id['user_id'], $ride_id);

            //$this->_f3->set('id', $user_id);
            $this->_f3->set('rideId', $ride_id);
            $this->_f3->set('totalcount', $total_count);
            $this->_f3->set('timestamp', $time_stamp);

            echo Template::instance()->render('view/magickingdom/hauntedMansion/hauntedMansion.php');

        } else{
             $this->_f3->reroute('/');
        }
    }

    /*
     *This displays the Haunted Mansion trivia page
     */
    public function hauntedTriviaLevels()
    {
        if($_SESSION['email']  && $_SESSION['loggedIn'] === true){
            $this->_f3->set('cssLink', 'peterpan.css');
            $this->_f3->set('responsiveLink', 'responsive.css');
            $this->_f3->set('generalbuttons', 'buttons/generalbuttons.css');

            echo Template::instance()->render('view/magickingdom/hauntedMansion/hauntedtrivialevels.php');

        } else {
             $this->_f3->reroute('/');
        }
    }

    /*
     *This displays the Haunted Mansion trivia beginner  page
     */
    public function hauntedmansionBeginner()
    {
        if($_SESSION['email']  && $_SESSION['loggedIn'] === true){
            $this->_f3->set('cssLink', 'pptrivia.css');
            $this->_f3->set('responsiveLink', 'responsive.css');
            $this->_f3->set('triviabuttons', 'buttons/triviabuttons.css');
            $this->_f3->set('jsLevel', 'hauntedmansion/hauntedmansionBeginner.js');
            $this->_f3->set('trivia', 'trivia.js');

            echo Template::instance()->render('view/magickingdom/hauntedMansion/hauntedmansionBeginner.php');

        } else {
            $this->_f3->reroute('/');
        }
    }


    /*================SEVEN DWARFS SECTION=====================*/
    /*
     *This displays the main Seven Dwarfs Mine Train page
     */
    public function sevendwarfs()
    {
        if($_SESSION['email']  && $_SESSION['loggedIn'] === true){
            $this->_f3->set('cssLink', 'peterpan.css');
            $this->_f3->set('responsiveLink', 'responsive.css');
            $this->_f3->set('generalbuttons', 'buttons/generalbuttons.css');
            $ride_id = "MK58";

            $data = new DataLayer();

            $user_id = $data->getUserID($_SESSION['email']);
            $total_count = $data->getTotalRide($user_id['user_id'], $ride_id);
            $time_stamp = $data->getRideRecentTimestamp($user_id['user_id'], $ride_id);

            $this->_f3->set('rideId', $ride_id);
            $this->_f3->set('totalcount', $total_count);
            $this->_f3->set('timestamp', $time_stamp);

            echo Template::instance()->render('view/magickingdom/sevendwarfs/sevendwarfs.php');

        } else{
             $this->_f3->reroute('/');
        }
    }

    /*
     *This displays the Seven Dwarfs trivia page
     */
    public function sevendwarfsTriviaLevels()
    {
        if($_SESSION['email']  && $_SESSION['loggedIn'] === true){
            $this->_f3->set('cssLink', 'peterpan.css');
            $this->_f3->set('responsiveLink', 'responsive.css');
            $this->_f3->set('generalbuttons', 'buttons/generalbuttons.css');

            echo Template::instance()->render('view/magickingdom/sevendwarfs/sevendwarfstrivialevels.php');

        } else {
             $this->_f3->reroute('/');
        }
    }

    /**
     *This displays the Seven Dwarfs trivia beginner  page
     */
    public function sevendwarfsbeginner()
    {
        if($_SESSION['email']  && $_SESSION['loggedIn'] === true){
            $this->_f3->set('cssLink', 'pptrivia.css');
            $this->_f3->set('responsiveLink', 'responsive.css');
            $this->_f3->set('triviabuttons', 'buttons/triviabuttons.css');
            $this->_f3->set('jsLevel', 'sevendwarfs/sevendwarfsBeginner.js');
            $this->_f3->set('trivia', 'trivia.js');

            echo Template::instance()->render('view/magickingdom/sevendwarfs/sevendwarfsbeginner.php');

        } else {
            $this->_f3->reroute('/');
        }
    }

    /*================SPACE MOUNTAIN SECTION=====================*/

    /*
     *This displays the main space mountain ride page
     */
    public function spacemountain()
    {
        if($_SESSION['email']  && $_SESSION['loggedIn'] === true){
            $this->_f3->set('cssLink', 'peterpan.css');
            $this->_f3->set('responsiveLink', 'responsive.css');
            $this->_f3->set('generalbuttons', 'buttons/generalbuttons.css');

            $ride_id = "MK74";

            $data = new DataLayer();
            $user_id = $data->getUserID($_SESSION['email']);
            $total_count = $data->getTotalRide($user_id['user_id'], $ride_id);
            $time_stamp = $data->getRideRecentTimestamp($user_id['user_id'], $ride_id);

            $this->_f3->set('id', $user_id);
            $this->_f3->set('rideId', $ride_id);
            $this->_f3->set('totalcount', $total_count);
            $this->_f3->set('timestamp', $time_stamp);

            echo Template::instance()->render('view/magickingdom/spacemountain/spacemountain.php');

        } else{
            $this->_f3->reroute('/');
        }
    }

    /**
     *This displays the Space Mountain trivia page
     */
    public function spacemountainTriviaLevels()
    {
        if($_SESSION['email']  && $_SESSION['loggedIn'] === true){
            $this->_f3->set('cssLink', 'peterpan.css');
            $this->_f3->set('responsiveLink', 'responsive.css');
            $this->_f3->set('generalbuttons', 'buttons/generalbuttons.css');

            echo Template::instance()->render('view/magickingdom/spacemountain/spacemountaintrivialevels.php');

        } else {
            $this->_f3->reroute('/');
        }
    }

    /**
     *This displays the Space Mountain trivia beginner  page
     */
    public function spacemountainBeginner()
    {
        if($_SESSION['email']  && $_SESSION['loggedIn'] === true){
            $this->_f3->set('cssLink', 'pptrivia.css');
            $this->_f3->set('responsiveLink', 'responsive.css');
            $this->_f3->set('triviabuttons', 'buttons/triviabuttons.css');
            $this->_f3->set('jsLevel', 'spacemountain/spacemountainbeginner.js');
            $this->_f3->set('trivia', 'trivia.js');

            echo Template::instance()->render('view/magickingdom/spacemountain/spacemountainbeginner.php');

        } else {
            $this->_f3->reroute('/');
        }
    }

    /*================PIRATES OF CARRIBEAN SECTION=====================*/

    /*
     *This displays the main pirates ride page
     */
    public function pirates()
    {
        if($_SESSION['email']  && $_SESSION['loggedIn'] === true){
            $this->_f3->set('cssLink', 'peterpan.css');
            $this->_f3->set('responsiveLink', 'responsive.css');
            $this->_f3->set('generalbuttons', 'buttons/generalbuttons.css');

            $ride_id = "MK19";

            $data = new DataLayer();
            $user_id = $data->getUserID($_SESSION['email']);
            $total_count = $data->getTotalRide($user_id['user_id'], $ride_id);
            $time_stamp = $data->getRideRecentTimestamp($user_id['user_id'], $ride_id);

            $this->_f3->set('id', $user_id);
            $this->_f3->set('rideId', $ride_id);
            $this->_f3->set('totalcount', $total_count);
            $this->_f3->set('timestamp', $time_stamp);

            echo Template::instance()->render('view/magickingdom/pirates/pirates.php');

        } else{
            $this->_f3->reroute('/');
        }
    }


    /*================BIG THUNDER RIDE SECTION=====================*/

    /*
     *This displays the main Big Thunder Mountain Railroad ride page
     */
    public function bigThunder()
    {
        if($_SESSION['email']  && $_SESSION['loggedIn'] === true){
            $this->_f3->set('cssLink', 'peterpan.css');
            $this->_f3->set('responsiveLink', 'responsive.css');
            $this->_f3->set('generalbuttons', 'buttons/generalbuttons.css');

            $ride_id = "MK28";

            $data = new DataLayer();
            $user_id = $data->getUserID($_SESSION['email']);
            $total_count = $data->getTotalRide($user_id['user_id'], $ride_id);
            $time_stamp = $data->getRideRecentTimestamp($user_id['user_id'], $ride_id);

            $this->_f3->set('id', $user_id);
            $this->_f3->set('rideId', $ride_id);
            $this->_f3->set('totalcount', $total_count);
            $this->_f3->set('timestamp', $time_stamp);

            echo Template::instance()->render('view/magickingdom/bigthunder/bigthunder.php');

        } else{
            $this->_f3->reroute('/');
        }
    }

    /*
     *This displays the Big Thunder trivia page
     */
    public function bigthunderTriviaLevels()
    {
        if($_SESSION['email']  && $_SESSION['loggedIn'] === true){
            $this->_f3->set('cssLink', 'peterpan.css');
            $this->_f3->set('responsiveLink', 'responsive.css');
            $this->_f3->set('generalbuttons', 'buttons/generalbuttons.css');

            echo Template::instance()->render('view/magickingdom/bigthunder/bigthundertrivialevels.php');

        } else {
             $this->_f3->reroute('/');
        }
    }

    /**
     *This displays the Big Thunder trivia beginner page
     */
    public function bigthunderbeginner()
    {
        if($_SESSION['email']  && $_SESSION['loggedIn'] === true){
            $this->_f3->set('cssLink', 'pptrivia.css');
            $this->_f3->set('responsiveLink', 'responsive.css');
            $this->_f3->set('triviabuttons', 'buttons/triviabuttons.css');
            $this->_f3->set('jsLevel', 'bigthunder/bigthunderbeginner.js');
            $this->_f3->set('trivia', 'trivia.js');

            echo Template::instance()->render('view/magickingdom/bigthunder/bigthunderBeginner.php');

        } else {
            $this->_f3->reroute('/');
        }
    }

    /*================ENCHANTED TIKI ROOM SECTION=====================*/

    /*
     *This displays the main enchanted tiki room ride page
     */
    public function tikiroom()
    {
        if($_SESSION['email']  && $_SESSION['loggedIn'] === true){
            $this->_f3->set('cssLink', 'peterpan.css');
            $this->_f3->set('responsiveLink', 'responsive.css');
            $this->_f3->set('generalbuttons', 'buttons/generalbuttons.css');

            $ride_id = "MK18";

            $data = new DataLayer();
            $user_id = $data->getUserID($_SESSION['email']);
            $total_count = $data->getTotalRide($user_id['user_id'], $ride_id);
            $time_stamp = $data->getRideRecentTimestamp($user_id['user_id'], $ride_id);

            $this->_f3->set('id', $user_id);
            $this->_f3->set('rideId', $ride_id);
            $this->_f3->set('totalcount', $total_count);
            $this->_f3->set('timestamp', $time_stamp);

            echo Template::instance()->render('view/magickingdom/tikiroom/tikiroom.php');

        } else{
            $this->_f3->reroute('/');
        }
    }

    /*
     *This displays the Tiki Room trivia page
     */
    public function tikiroomTriviaLevels()
    {
        if($_SESSION['email']  && $_SESSION['loggedIn'] === true){
            $this->_f3->set('cssLink', 'peterpan.css');
            $this->_f3->set('responsiveLink', 'responsive.css');
            $this->_f3->set('generalbuttons', 'buttons/generalbuttons.css');

            echo Template::instance()->render('view/magickingdom/tikiroom/tikiroomtrivialevels.php');

        } else {
             $this->_f3->reroute('/');
        }
    }

    /**
     *This displays the Enchanted Tiki Room trivia beginner page
     */
    public function tikiroombeginner()
    {
        if($_SESSION['email']  && $_SESSION['loggedIn'] === true){
            $this->_f3->set('cssLink', 'pptrivia.css');
            $this->_f3->set('responsiveLink', 'responsive.css');
            $this->_f3->set('triviabuttons', 'buttons/triviabuttons.css');
            $this->_f3->set('jsLevel', 'tikiroom/tikiroombeginner.js');
            $this->_f3->set('trivia', 'trivia.js');

            echo Template::instance()->render('view/magickingdom/tikiroom/tikiroomBeginner.php');

        } else {
            $this->_f3->reroute('/');
        }
    }

    /*================JUNGLE CRUISE SECTION=====================*/
    /*
     *This displays the Jungle Cruise page
     */
     public function junglecruise()
     {
         if($_SESSION['email']  && $_SESSION['loggedIn'] === true){
             $this->_f3->set('cssLink', 'peterpan.css');
             $this->_f3->set('responsiveLink', 'responsive.css');
             $this->_f3->set('generalbuttons', 'buttons/generalbuttons.css');

             $ride_id = "MK17";

             $data = new DataLayer();
             $user_id = $data->getUserID($_SESSION['email']);
             $total_count = $data->getTotalRide($user_id['user_id'], $ride_id);
             $time_stamp = $data->getRideRecentTimestamp($user_id['user_id'], $ride_id);

             $this->_f3->set('id', $user_id);
             $this->_f3->set('rideId', $ride_id);
             $this->_f3->set('totalcount', $total_count);
             $this->_f3->set('timestamp', $time_stamp);

             echo Template::instance()->render('view/magickingdom/junglecruise/junglecruise.php');

         } else{
             $this->_f3->reroute('/');
         }
     }

     /*
      *This displays the Jungle Cruise Trivia Levels page
      */
     public function junglecruiseTriviaLevels()
     {
       if($_SESSION['email']  && $_SESSION['loggedIn'] === true){
           $this->_f3->set('cssLink', 'peterpan.css');
           $this->_f3->set('responsiveLink', 'responsive.css');
           $this->_f3->set('generalbuttons', 'buttons/generalbuttons.css');

           echo Template::instance()->render('view/magickingdom/junglecruise/junglecruisetrivialevels.php');

       } else {
            $this->_f3->reroute('/');
       }
     }

     /**
      *This displays the Jungle Cruise trivia beginner page
      */
     public function junglecruiseBeginner()
     {
         if($_SESSION['email']  && $_SESSION['loggedIn'] === true){
             $this->_f3->set('cssLink', 'pptrivia.css');
             $this->_f3->set('responsiveLink', 'responsive.css');
             $this->_f3->set('triviabuttons', 'buttons/triviabuttons.css');
             $this->_f3->set('jsLevel', 'junglecruise/junglecruisebeginner.js');
             $this->_f3->set('trivia', 'trivia.js');

             echo Template::instance()->render('view/magickingdom/junglecruise/junglecruiseBeginner.php');

         } else {
             $this->_f3->reroute('/');
         }
     }

     /*================THE MAGIC CARPETS OF ALADDIN SECTION=====================*/
     /*
      *This displays the Magic Carpets of Aladdin page
      */
      public function magiccarpets()
      {
          if($_SESSION['email']  && $_SESSION['loggedIn'] === true){
              $this->_f3->set('cssLink', 'peterpan.css');
              $this->_f3->set('responsiveLink', 'responsive.css');
              $this->_f3->set('generalbuttons', 'buttons/generalbuttons.css');

              $ride_id = "MK16";

              $data = new DataLayer();
              $user_id = $data->getUserID($_SESSION['email']);
              $total_count = $data->getTotalRide($user_id['user_id'], $ride_id);
              $time_stamp = $data->getRideRecentTimestamp($user_id['user_id'], $ride_id);

              $this->_f3->set('id', $user_id);
              $this->_f3->set('rideId', $ride_id);
              $this->_f3->set('totalcount', $total_count);
              $this->_f3->set('timestamp', $time_stamp);

              echo Template::instance()->render('view/magickingdom/magiccarpets/magiccarpets.php');

          } else{
              $this->_f3->reroute('/');
          }
      }

      /*
       *This displays the Magic Carpets of Aladdin Trivia Levels page
       */
      public function magiccarpetsTriviaLevels()
      {
        if($_SESSION['email']  && $_SESSION['loggedIn'] === true){
            $this->_f3->set('cssLink', 'peterpan.css');
            $this->_f3->set('responsiveLink', 'responsive.css');
            $this->_f3->set('generalbuttons', 'buttons/generalbuttons.css');

            echo Template::instance()->render('view/magickingdom/magiccarpets/magiccarpetstrivialevels.php');

        } else {
             $this->_f3->reroute('/');
        }
      }

      /**
       *This displays the Magic Carpets of Aladdin trivia beginner page
       */
      public function magiccarpetsBeginner()
      {
          if($_SESSION['email']  && $_SESSION['loggedIn'] === true){
              $this->_f3->set('cssLink', 'pptrivia.css');
              $this->_f3->set('responsiveLink', 'responsive.css');
              $this->_f3->set('triviabuttons', 'buttons/triviabuttons.css');
              $this->_f3->set('jsLevel', 'magiccarpets/magiccarpetsbeginner.js');
              $this->_f3->set('trivia', 'trivia.js');

              echo Template::instance()->render('view/magickingdom/magiccarpets/magiccarpetsBeginner.php');

          } else {
              $this->_f3->reroute('/');
          }
      }
      
      /*================  BARNSTORMER SECTION=====================*/
      
      /**
     *This displays the main Peter Pan page
     */
    public function barnstormer()
    {
        if($_SESSION['email']  && $_SESSION['loggedIn'] === true){
            $this->_f3->set('cssLink', 'peterpan.css');
            $this->_f3->set('responsiveLink', 'responsive.css');
            $this->_f3->set('generalbuttons', 'buttons/generalbuttons.css');

            $data = new DataLayer();
            $ride_id = "MK53";

            $user_id = $data->getUserID($_SESSION['email']);
            $total_count = $data->getTotalRide($user_id['user_id'], $ride_id);
            $time_stamp = $data->getRideRecentTimestamp($user_id['user_id'], $ride_id);

            $this->_f3->set('id', $user_id);
            $this->_f3->set('rideId', $ride_id);
            $this->_f3->set('totalcount', $total_count);
            $this->_f3->set('timestamp', $time_stamp);

            echo Template::instance()->render('view/magickingdom/barnstormer/barnstormer.php');

        } else{
            $this->_f3->reroute('/');
        }
    }

    /**
     *This displays the PP trivia page
     */
    public function barnstormerTriviaLevels()
    {
        if($_SESSION['email']  && $_SESSION['loggedIn'] === true){
            $this->_f3->set('cssLink', 'peterpan.css');
            $this->_f3->set('responsiveLink', 'responsive.css');
            $this->_f3->set('generalbuttons', 'buttons/generalbuttons.css');

            echo Template::instance()->render('view/magickingdom/barnstormer/barnstormerLevels.php');

        } else {
            $this->_f3->reroute('/');
        }
    }

    /**
     *This displays the PP trivia beginner  page
     */
    public function barnstormerBeginner()
    {
        if($_SESSION['email']  && $_SESSION['loggedIn'] === true){
            $this->_f3->set('cssLink', 'pptrivia.css');
            $this->_f3->set('responsiveLink', 'responsive.css');
            $this->_f3->set('triviabuttons', 'buttons/triviabuttons.css');
            $this->_f3->set('jsLevel', 'peterpan/ppBeginner.js');
            $this->_f3->set('trivia', 'trivia.js');

            echo Template::instance()->render('view/magickingdom/barnstormer/barnstormerBeginner.php');

        } else {
            $this->_f3->reroute('/');
        }
    }
    /**
     *This displays the PP trivia intermediate page
     */
    public function barnstormerIntermediate()
    {
        if($_SESSION['email']  && $_SESSION['loggedIn'] === true){
            $this->_f3->set('cssLink', 'pptrivia.css');
            $this->_f3->set('responsiveLink', 'responsive.css');
            $this->_f3->set('triviabuttons', 'buttons/triviabuttons.css');
            $this->_f3->set('jsLevel', 'peterpan/ppIntermediate.js');
            $this->_f3->set('trivia', 'trivia.js');

            echo Template::instance()->render('view/magickingdom/barnstormer/barnstormerIntermediate.php');

        } else {
            $this->_f3->reroute('/');
        }
    }

    /**
     *This displays the PP trivia advance page
     */
    public function barnstormerAdvance()
    {
        if($_SESSION['email']  && $_SESSION['loggedIn'] === true){
            $this->_f3->set('cssLink', 'pptrivia.css');
            $this->_f3->set('responsiveLink', 'responsive.css');
            $this->_f3->set('triviabuttons', 'buttons/triviabuttons.css');
            $this->_f3->set('jsLevel', 'peterpan/ppAdvance.js');
            $this->_f3->set('trivia', 'trivia.js');

            echo Template::instance()->render('view/magickingdom/barnstormer/barnstormerAdvance.php');

        } else {
            $this->_f3->reroute('/');
        }
     }
      
      

      /*================SWISS FAMILY TREEHOUSE SECTION=====================*/
      /*
       *This displays the Swiss Family Treehouse page
       */
       public function treehouse()
       {
           if($_SESSION['email']  && $_SESSION['loggedIn'] === true){
               $this->_f3->set('cssLink', 'peterpan.css');
               $this->_f3->set('responsiveLink', 'responsive.css');
               $this->_f3->set('generalbuttons', 'buttons/generalbuttons.css');

               $ride_id = "MK15";

               $data = new DataLayer();
               $user_id = $data->getUserID($_SESSION['email']);
               $total_count = $data->getTotalRide($user_id['user_id'], $ride_id);
               $time_stamp = $data->getRideRecentTimestamp($user_id['user_id'], $ride_id);

               $this->_f3->set('id', $user_id);
               $this->_f3->set('rideId', $ride_id);
               $this->_f3->set('totalcount', $total_count);
               $this->_f3->set('timestamp', $time_stamp);

               echo Template::instance()->render('view/magickingdom/treehouse/treehouse.php');

           } else{
               $this->_f3->reroute('/');
           }
       }

       /*
        *This displays the Swiss Family Treehouse Trivia Levels page
        */
       public function treehouseTriviaLevels()
       {
         if($_SESSION['email']  && $_SESSION['loggedIn'] === true){
             $this->_f3->set('cssLink', 'peterpan.css');
             $this->_f3->set('responsiveLink', 'responsive.css');
             $this->_f3->set('generalbuttons', 'buttons/generalbuttons.css');

             echo Template::instance()->render('view/magickingdom/treehouse/treehousetrivialevels.php');

         } else {
              $this->_f3->reroute('/');
         }
       }

       /**
        *This displays the Swiss Family Treehouse trivia beginner page
        */
       public function treehouseBeginner()
       {
           if($_SESSION['email']  && $_SESSION['loggedIn'] === true){
               $this->_f3->set('cssLink', 'pptrivia.css');
               $this->_f3->set('responsiveLink', 'responsive.css');
               $this->_f3->set('triviabuttons', 'buttons/triviabuttons.css');
               $this->_f3->set('jsLevel', 'treehouse/treehousebeginner.js');
               $this->_f3->set('trivia', 'trivia.js');

               echo Template::instance()->render('view/magickingdom/treehouse/treehouseBeginner.php');

           } else {
               $this->_f3->reroute('/');
           }
       }



// End of the class
}
?>

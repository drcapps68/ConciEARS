<?php

require_once 'db/connection.php';
require_once 'db/password.php';

/**
     *Provides CRUD access to connect in the database
     *
     *PHP Version 7
     *
     *@author Liz Mahoney <emahoney5@mail.greenriver.edu>
     *@version 1.0
     */
    class DataLayer
    {

         /**
         *Creates a a new user account from sign up page
         *
         *@access public
         *@param string $email the users email address
         *@param string $password password that is hashed
         *@param string $first users last name
         *@param string $last users first name
         *
         *
         *@return true if insert was successful, otherwise false
         */
        function createUser()
        {
            $pdo = getConnection();
            $digest = password_hash($_POST['password'], PASSWORD_DEFAULT);

            $insert= 'INSERT INTO user_account(email, password, first, last)
                    VALUES(:email, :digest, :first, :last)';

            $statement = $pdo->prepare($insert);

            $statement->bindValue(':email', $_POST['email'], PDO::PARAM_STR);
            $statement->bindValue(':digest', $digest, PDO::PARAM_STR);
            $statement->bindValue(':first', $_POST['first'], PDO::PARAM_STR);
            $statement->bindValue(':last', $_POST['last'], PDO::PARAM_STR);

            return $statement->execute();
        }

        /*
         *This verifies username and password when login in
         *
         *@return true success, otherwise false;
         */
        function authenticate(){

            if($this->verifyUser($_POST['email'] , $_POST['password']))
            {
                 //save to session & redirect
                $_SESSION['email'] = $this->getUserEmail( $_POST['email']);

                return $_SESSION['email'];

            } else {
                return null;
            }
        }

        /*
         *This verifies the users username and password
         *
         *@param string $username the username email
         *@package string $password the users password
         *
         *@return $password the users password
         *@return $hash the users hashed pw
         */
        function verifyUser($username, $password){

            $pdo = getConnection();

            $select = 'SELECT email, password FROM user_account WHERE email= :email';

            $statement = $pdo->prepare($select);

            $statement->bindValue(':email', $username, PDO::PARAM_STR);
            $statement->execute();

            $row = $statement->fetch(PDO::FETCH_ASSOC);

            if($row['password'] == null)
            {
                return false;

            } else {

                $hash = $row['password'];
                //var_dump($hash);
               // var_dump(password_verify($password, $hash));
                return password_verify($password, $hash);

            }
        }

        /*
         * Retrieves the Email
         *
         * @param string $email the username email
         * @return string $row the email, otherwise Null
         */
        function getUserEmail($username)
        {
            $pdo = getConnection();

            $select = 'SELECT email
                        FROM user_account
                        WHERE email=:email';

            $statement = $pdo->prepare($select);

            $statement->bindValue(':email', $username, PDO::PARAM_STR);
            $statement->execute();

            //array
            $row = $statement->fetch(PDO::FETCH_ASSOC);

            if($row == null)
            {
                return null;

            } else{
                return $row['email'];
            }
        }

        /*
         * Retrieves the user's information
         *
         * @param string $email the users email
         * @return string $row user's first name, otherwise null
         */
        function getUsersFirst($email)
        {
            $pdo = getConnection();

            $select = 'SELECT first
                       FROM user_account
                       WHERE email=:email';

            $statement = $pdo->prepare($select);

            $statement->bindValue(':email', $email, PDO::PARAM_STR);
            $statement->execute();

            //array
            $row = $statement->fetch(PDO::FETCH_ASSOC);

            if($row === null)
            {
                return 'user';

            } else{
                return $row['first'];
            }
        }

        /**
         *retrieves the user's user ID number
         *
         *@param string $email the users email
         *@return int user_id
         */

         function getUserID($email)
        {
            $pdo = getConnection();

            $select = 'SELECT user_id
                       FROM user_account
                       WHERE email=:email';

            $statement = $pdo->prepare($select);

            $statement->bindValue(':email', $email, PDO::PARAM_STR);
            $statement->execute();

            //array
            $row = $statement->fetch(PDO::FETCH_ASSOC);

            return $row;
        }

        /**change name of function (TODO!!)**/
         function getTotalRide($user_id, $ride_id)
        {
            $pdo = getConnection();

            $select = 'SELECT COUNT(user_id) AS totalRideCount
                       FROM ride_counter
                       WHERE user_id=:user_id AND ride_id=:ride_id';

            $statement = $pdo->prepare($select);

            $statement->bindValue(':user_id', $user_id, PDO::PARAM_STR);
            $statement->bindValue(':ride_id', $ride_id, PDO::PARAM_STR);
            $statement->execute();

            //array
            $row = $statement->fetch(PDO::FETCH_ASSOC);

            if($row == "0" || $row == NULL){
                return "0";
            } else{
                return $row;
            }
        }

        function getRideRecentTimestamp($user_id, $ride_id)
        {

            $pdo = getConnection();

            $select = 'SELECT MAX(time_stamp) AS timestamp
                       FROM ride_counter
                       WHERE user_id=:user_id AND ride_id=:ride_id';

            $statement = $pdo->prepare($select);

            $statement->bindValue(':user_id', $user_id, PDO::PARAM_STR);
            $statement->bindValue(':ride_id', $ride_id, PDO::PARAM_STR);
            $statement->execute();

            //array
            $row = $statement->fetch(PDO::FETCH_ASSOC);


            return $row;
        }
        
        function getAllRidesByUser($user_id)
        {
            $pdo = getConnection();

            $select = 'SELECT ride_counter.time_stamp, rides.ride_name
                       FROM ride_counter, rides
                       WHERE ride_counter.user_id= :user_id 
                       AND ride_counter.ride_id = rides.ride_id
                       ORDER BY ride_counter.time_stamp DESC';

            $statement = $pdo->prepare($select);

            $statement->bindValue(':user_id', $user_id, PDO::PARAM_STR);

            $statement->execute();

            //array
            $rows = $statement->fetchAll(PDO::FETCH_ASSOC);

     
            
            return $rows;


        }

        /**
         *Inserts userid and rideid into the ride_counter table
         *
         *@param String $user_id the user id
         *@param String $ride_id the ride id
         */
        function addRide($user_id, $ride_id)
        {
            $pdo = getConnection();

            $date = date("m-d-Y");

            $insert = 'INSERT INTO ride_counter
                       (user_id, ride_id, time_stamp)
                       VALUES(:user_id, :ride_id, :time_stamp)';

            $statement = $pdo->prepare($insert);

            $statement->bindValue(':user_id', $user_id, PDO::PARAM_STR);
            $statement->bindValue(':ride_id', $ride_id, PDO::PARAM_STR);
            $statement->bindValue(':time_stamp', $date, PDO::PARAM_STR);

            return $statement->execute();
        }

        /**
         *Checks if email is the same, otherwise return true
         *
         *@param string $email the username email
         *@string $password the users password
         *
         *@return $false email cannot be found, otherwise true
         *@return $hash the users hashed pw
         */
        function checkEmail($email)
        {
            $pdo = getConnection();

            $select= 'SELECT email FROM user_account WHERE email=:email';
            $statement = $pdo->prepare($select);

            $statement->bindValue(':email', $email, PDO::PARAM_STR);
            $statement->execute();

            $row= $statement->fetch(PDO::FETCH_ASSOC);

            if($row['email'] === $email)
            {
                return false;

            } else{
                return true;
            }
        }


    }

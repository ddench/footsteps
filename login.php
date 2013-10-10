<?php
  // Copyright (C) 2013 OpenICT Ltd
//
//   This program is free software; you can redistribute it and/or modify
//   it under the terms of the GNU General Public License as published by
//   the Free Software Foundation; version 3 of the License.
//
//   This program is distributed in the hope that it will be useful,
//   but WITHOUT ANY WARRANTY; without even the implied warranty of
//   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
//   GNU General Public License for more details.
//
//   You should have received a copy of the GNU General Public License
//   along with this program; if not, write to the Free Software
//   Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
/**
 * Login Page
 *
 * @author    Daniel Dench ddench@open-ict.net
 * @license     http://www.opensource.org/licenses/gpl-3.0.html LGPL
 */

include "dbconnect.php";
function sec_session_start() {
        $session_name = 'sec_session_id'; // Set a custom session name
        $secure = false; // Set to true if using https.
        $httponly = true; // This stops javascript being able to access the session id. 
 
        ini_set('session.use_only_cookies', 1); // Forces sessions to only use cookies. 
        $cookieParams = session_get_cookie_params(); // Gets current cookies params.
        session_set_cookie_params($cookieParams["lifetime"], $cookieParams["path"], $cookieParams["domain"], $secure, $httponly); 
        session_name($session_name); // Sets the session name to the one set above.
        session_start(); // Start the php session
        session_regenerate_id(); // regenerated the session, delete the old one.  
}
function login($username, $password, $dbconnect) {
   // Using prepared Statements means that SQL injection is not possible. 
   if ($stmt = $dbconnect->prepare("SELECT username, password FROM user WHERE username = :username LIMIT 1")) { 
		$stmt->execute(array ('username'=>$db_username,'password'=>$user_password));
		$result = $stmt->fetchALL();
    // bindParam('s', $username); // Bind "$username" to parameter.
      //$stmt->execute(); // Execute the prepared query.
      //$stmt->store_result();
      //$stmt->bind_result($user_id, $username, $user_password); // get variables from result.
      //$stmt->fetch();
      //$password=$password; 
      if($stmt->num_rows == 1) { // If the user exists
         // We check if the account is locked from too many login attempts
         if(checkbrute($user_id, $dbconnect) == true) { 
            // Account is locked
            // Send an email to user saying their account is locked
            return false;
         } else {
         if($user_password == $password) { // Check if the password in the database matches the password the user submitted. 
            echo "Password is correct!";
 
 
               $user_browser = $_SERVER['HTTP_USER_AGENT']; // Get the user-agent string of the user.
 
               $user_id = preg_replace("/[^0-9]+/", "", $user_id); // XSS protection as we might print this value
               $_SESSION['user_id'] = $user_id; 
               $username = preg_replace("/[^a-zA-Z0-9_\-]+/", "", $username); // XSS protection as we might print this value
               $_SESSION['username'] = $username;
               $_SESSION['login_string'] = hash('sha512', $password.$user_browser);
               // Login successful.
               return true;    
         } else {
            // Password is not correct
            // We record this attempt in the database
            $now = time();
            $dbconnect->query("INSERT INTO login_attempts (user_id, time) VALUES ('$user_id', '$now')");
            return false;
         }
      }
      } else {
         // No user exists. 
         return false;
      }
   }
}

sec_session_start();
if(isset($_POST['username'], $_POST['password'])) { 
   $username = $_POST['username'];
   $password = $_POST['password']; // The hashed password.
   if(login($username, $password, $dbconnect) == true) {
      // Login success
      echo 'Success: You have been logged in!';
   } else {
      // Login failed
      header('Location: login.php?error=1');
   }
} else { 
   // The correct POST variables were not sent to this page.
   echo 'Invalid Request';
}
/* Grab User submitted information
$username = $_POST["username"];
$password = $_POST["password"];

try {  
  $dbconnect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //$dbconnect->beginTransaction();
  $stmt = $dbconnect->prepare("SELECT username, password FROM user WHERE username = :username");
  $stmt = $dbconnect->execute(array ('username'=>$username));
  $result = $stmt->fetchALL();
  if (count($result)){
  		foreach($result as $row) {
  			print_r($row);
  		}
  } else {
  	echo "No results returned.";
  }
  
  if($row) {
  	if($password===$row['password']){
  		$login_ok=true;
  	}
  }
  if ($login_ok) {
        $response["success"] = 1;
        $response["message"] = "Login successful!";
		header("Location:landing.php");
    } else {
        $response["success"] = 0;
        $response["message"] = "Invalid Credentials!";
	}
	
	//header ("Location:landing.html");
  /*while($row=$stmt->fetchALL()) {
  		print_r($row);
  }
  $dbconnect->commit();
}  catch (PDOException $exception) {
  //$dbconnect->rollBack();
  echo "Failed_login: " . $exception->getMessage();
}
/*$row = mysql_fetch_array($result);

if($row["username"]==$username && $row["password"]==$password)
    header ("Location:landing.html");
else
    echo"Sorry, your credentials are not valid, Please try again.";*/
?>
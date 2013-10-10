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
 * Database connection
 *
 * @author    Daniel Dench ddench@open-ict.net
 * @license     http://www.opensource.org/licenses/gpl-3.0.html LGPL
 */
// create an include for the database connection details specific to this installation of Footsteps
 
  //create a connection to the database using pdo
include "db_host.php";
try{
$dbconnect = new PDO('mysql:host=localhost;dbname=footsteps', $db_user, $db_user_password, array(PDO::ATTR_PERSISTENT => true));
$dbconnect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$dbconnect->beginTransaction();
} catch (PDOException $exception) {
$dbconnect->rollBack();
  echo "Failed: " . $exception->getMessage();
}
//foreach($dbconnect->query('SELECT * FROM user WHERE id = 1') as $row) {
//print_r($row);
//}
//$dbconnect = null;
?>
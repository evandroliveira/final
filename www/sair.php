<?php
/**
 * Created by PhpStorm.
 * User: evandro.oliveira
 * Date: 15/03/2019
 * Time: 12:51
 */

session_start();
unset($_SESSION['cLogin']);
header("location: login.php");

?>
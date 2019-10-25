<?php
session_start();
include 'config.php';
if (isset($_SESSION['teamid'])) {
    $teamid = $_SESSION['teamid'];
    $theme = $_GET['id'];
    $themefinal="";
    $limit = mysql_query("SELECT `counter` FROM `counter` WHERE `theme` = '$theme'");
    $col = mysql_fetch_array($limit);
    if ($col['counter'] == 0) {
        echo "<script>alert('Kindly choose another theme.');window.location='index.php';</script>";
    }
    $single = mysql_query("SELECT `theme` FROM `teamdetails` WHERE `teamid` = '$teamid'");
    $row = mysql_fetch_array($single);
    if ($row['theme'] === null) {
        switch ($theme) {
      case 'a1':$themefinal="Challenges in Agriculture Sector";
                break;
      case 'a2':$themefinal="Indian Combat and Defence";
                break;
          case 'a3':$themefinal="Cyber Bullying";
                break;
         case 'a4':$themefinal="Food & Water conservation";
                break;
        case 'a5':$themefinal="Vigilantism and spread of fake news";
                break;
       case 'b1':$themefinal="Artificial Intelligence";
                break;
      case 'b2':$themefinal="Blockchain";
                break;
    case 'b3':$themefinal="Industrial IOT";
                break;
    case 'b4':$themefinal="Cloud";
                break;
    case 'b5':$themefinal="Data Science";
                break;
    case 'b6':$themefinal="Choose your own";
                break;
    default:$themefinal="NOT GOT";

  }
        $_SESSION["tf"] = $themefinal;
        $result = mysql_query("UPDATE `teamdetails` SET `theme` = '$themefinal' WHERE `teamid` = '$teamid' ") or die("Cannot connect to database!");
        $counter = mysql_query("UPDATE `counter` SET `counter` = (`counter` - 1) WHERE `theme` = '$theme'");
        header('location:./congrats.php');
    } else {
        echo "<script>alert('You have already chosen a theme');window.location='../index.html';</script>";
    }
} else {
    header('location:../index.html');
}

<?php 
session_start();
 require("connect.php");
 require("login.php");
 ?>
<?php
$DemandID = $_POST['DemandID'];
$DemandTitle=$_POST['DemandTitle'];
$DemandDescription=$_POST['DemandDescription'];
$DemandCategoryID = $_POST['CategoryName'];
$DemandIMG = addslashes(file_get_contents($_FILES['DemandIMG']['tmp_name']));
if (isset($_POST['update_demand'])) {
    if(empty($DemandIMG)){
        $sql = mysqli_query($connect, "UPDATE `demands` SET `DemandTitle`='$DemandTitle', `DemandDescription`='$DemandDescription', `DemandCategoryID`='$DemandCategoryID'  WHERE `DemandID` = '$DemandID' "); 
        header('Location: ../views/demand.php');
    }
    if(!empty($DemandIMG)){
        $sql = mysqli_query($connect, "UPDATE `demands` SET `DemandTitle`='$DemandTitle', `DemandDescription`='$DemandDescription', `DemandCategoryID`='$DemandCategoryID', `DemandIMG`='$DemandIMG' WHERE `DemandID` = '$DemandID' "); 
        header('Location: ../views/demand.php');
    }
} 
?>  
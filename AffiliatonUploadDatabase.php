<?php  

require('Db.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
	
  $PostName = $_POST["form-select"];
  $_SESSION['PostName'] = $PostName;
 
  if($PostName == "Affiliaton"){

    $CRandom = rand(1,999999999);

	$YourPic01 = "MyPic".$CRandom.'_'.time().'.jpg';
    $_SESSION['YourPic01'] = $YourPic01;
    $_SESSION['YourPic03']  = $_FILES['image']['tmp_name'];
  $target_dir = "Files/";
  $target_file = $target_dir . basename($_FILES["image"]["name"]);

  // Select file type
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

  // Valid file extensions
  $extensions_arr = array("jpg","jpeg","png","gif");
  
  if( in_array($imageFileType,$extensions_arr) ){
      
     
    	
       move_uploaded_file($_FILES['image']['tmp_name'],$target_dir.$YourPic01);
    
    
  

  }
  

   
    
    $name = $_POST["Name"];
    $_SESSION['Name'] = $name;
    
   
    
    $Address = $_POST["Address"];
    $_SESSION['Address'] = $Address;
    
    
    $City = $_POST["City"];
    $_SESSION['City'] = $City;
    
    
    $DOB = $_POST["DOB"];
    $_SESSION['DOB'] = $DOB;
    
    
    $State = $_POST["State"];
    $_SESSION['State'] = $State;
    
	$PinCode = $_POST["PinCode"];
    $_SESSION['PinCode'] = $PinCode;
    	
	$Profession = $_POST["Profession"];
	$_SESSION['Profession'] = $Profession;
  

	$AadhaarCard = $_POST["AadhaarCard"];
	$_SESSION['AadhaarCard'] = $AadhaarCard;

	$Qualification = $_POST["Qualification"];
	$_SESSION['Qualification'] = $Qualification;

	$SportsAchievements = $_POST["SportsAchievements"];
	$_SESSION['SportsAchievements'] = $SportsAchievements;


    $PhoneNumber = $_POST["PhoneNumber"];
    $_SESSION['PhoneNumber'] = $PhoneNumber;
    
    $EMAIL = $_POST["EMAIL"];
    $_SESSION['EMAIL'] = $EMAIL;
    
    $DOB = $_POST["DOB"];
    $_SESSION['DOB'] = $DOB;
   
    
    	
    $image =  "https://youthruralgamesindia.com/Form/Files/".$YourPic01 ; //$_POST["RegNo"];
    $_SESSION['image'] = $image;

    $Payment = "Pending";
    $TransId = "0123";

//Sql query to be executed
  $sql = "INSERT INTO `affiliatondatabase` (`id`, `PostName`, `Name`, `address`, `City`, `State`, `PinCode`, `Profession`, `Status`, `AadhaarCard`, `Qualification`, `SportsAchievements`, `PhoneNumber`, `EMAIL`, `DOB`, `Picture`, `Payment`, `TransId`) VALUES (NULL, '$PostName', '$name', '$Address', '$City', '$State', '$PinCode', '$Profession', 'inactive', '$AadhaarCard', '$Qualification', '$SportsAchievements', '$PhoneNumber', '$EMAIL', '$DOB', '$image', '$Payment', '$TransId')";
  $result = mysqli_query($conn, $sql);

   
  if($result){ 
      $insert = true;
  }
  else{
    //echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
       $fail = true;
      
  }  
}
}

?>
<?php
// define variables and set to empty values
$fname=$lname=$email=$password=$country=$month=$day=$year=$date=$radioVal=$radioVal1=$radioVal2=$gender= "";
$exists = FALSE;


if (isset($_POST)) {
  $fname = test_input($_POST["fname"]);
  $lname = test_input($_POST["lname"]);
  $email = test_input($_POST["email"]);
  $password= test_input($_POST["password"]);
  $country= test_input($_POST["country"]);
  $month= test_input($_POST["month"]);
  $day= test_input($_POST["day"]);
  $year = test_input($_POST["year"]);
  $date = $year."-".$month."-".$day;
  $radioVal = test_input($_POST["gender"]);
  

  $password = password_hash($password, PASSWORD_DEFAULT);

  if ($radioVal=="m"){
  	$gender = "M";
  }

else if ($radioVal=="f"){
  	$gender = "F";
  }
  else{
  	$gender = "O";
  }

  console_log($radioVal);

  // $conn = mysqli_connect("us-cdbr-east-03.cleardb.com", "b6f1489cd7bc19", "	a8269e5e", "heroku_b1bbb4a322a6c43");
  require_once 'connect.php';

  // console_log("coNNEcted");
  

  $sql = "SELECT * FROM users WHERE email='$email'";
  $response = mysqli_query($conn, $sql);
  console_log($response);

   if ( mysqli_num_rows($response) > 0 ) {
      $exists = TRUE;
      console_log("ALREADY EXISTS");
      echo'<script language="javascript">
        alert("Email already exists");
        location.href = "zhi_index.php";
      </script>';
    }

  if (!$exists){
    $sql = "INSERT INTO users(fname, lname, email, password, country, bday, gender) VALUES ('$fname', '$lname', '$email', '$password', '$country', '$date', '$gender')";	

  if (mysqli_query($conn, $sql)) {

    $result["success"] = "1";
    $result ["message"] = "success";
    console_log("worked");

    // echo json_encode($result);
    echo'<script language="javascript">
        alert("You have succesfully registered");
        location.href = "zhi_index.php";
      </script>';

    mysqli_close($conn);

  } else {

    $result["success"] = "0";
    $result ["message"] = "error";

    // echo json_encode($result);

    mysqli_close($conn);
  }
  }

	
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


function console_log($output, $with_script_tags = true) {
    $js_code = 'console.log(' . json_encode($output, JSON_HEX_TAG) . 
');';
    if ($with_script_tags) {
        $js_code = '<script>' . $js_code . '</script>';
    }
    echo $js_code;
}

?>



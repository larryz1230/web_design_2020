<?php

session_start();
?>

<h1>
      <?php

        console_log($_SESSION);

      ?>
</h1>

<?php
// define variables and set to empty values
$email = $password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = test_input($_POST["email"]);
  $password= test_input($_POST["password"]);

  console_log("hi tehre");

  require_once 'connect.php';

    $sql = "SELECT * FROM users WHERE email='$email' ";

    $response = mysqli_query($conn, $sql);

    $result = array();
    $result['login'] = array();

    // console_log("poop");
    
    if ( mysqli_num_rows($response) === 1 ) {
        
        $row = mysqli_fetch_assoc($response);

        if ( password_verify($password, $row['password']) ) {
            
            $_SESSION['fname'] = $row['fname'];
            $_SESSION['lname'] = $row['lname'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['id'] = $row['id'];
            $_SESSION['country'] = $row['country'];
            $_SESSION['gender'] = $row['gender'];
            $_SESSION['bday'] = $row['bday'];

           
            header('Location: zhi_home.php');
			exit;	

            // array_push($result['login'], $index);
            
            // $result['success'] = "1";
            // $result['message'] = "success";

            // echo json_encode($result);
            
            // mysqli_close($conn);
                     

        } else {

        	console_log("wrong password");
            
            header('Location: zhi_index.php');
            echo '<p>"Wrong credentials")</p>';
            // $result['success'] = "0";
            // $result['message'] = "error";
            // echo json_encode($result);

            mysqli_close($conn);

        }

    } else {
    	echo '<script>alert("Wrong credentials")</script>';
            header('Location: zhi_index.php');
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
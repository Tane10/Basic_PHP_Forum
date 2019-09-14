<?php
// setting defualt vals for input forum
$userName = $email = $password = $location = $contactNumber = "";
$userNameErr = $emailErr = $passwordErr = $locationErr = $contactNumberErr = "";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (empty($_POST['userName'])) {
        $userNameErr =  "Please fill in userName field";
    } else {
        if (preg_match("/[`'\"~!@# $*()<>,:;{}\|]/", $userName)) {
            $userNameErr = "Only letters and white space allowed";
        }
    }
    //Password Validation
    if (empty($_POST['password'])) {
        $passwordErr =  "Please fill in password field";
    } else {
        $passwordlen = strlen($password);
        if ($passwordlen < 6) {
            $passwordErr = "Password too short";
        }
    }

    if (empty($_POST['contactNumber'])) {
        $contactNumberErr =  "Please fill in contactNumber field";
    } else {
        $contactNumLen = strlen($contactNumber);
        if($contactNumLen < 11){
            $contactNumberErr = "ContactNumber is too short";
        }
        elseif(preg_match("/^[a-zA-Z ]*$/",$contactNumber)){
            $contactNumberErr = "Please only use numbers";
        }
    }
}


?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./stylesheet.css" type="text/css">
</head>

<body>
    <div class="mainDiv">
        <h1 id="title"> A basic forum </h1>
        <div>
            <span class="forumHeaderText">
                <p> This is just a quick and basic html forum testing out php, HTML5 and CSS</p>
                <p class="required"> * required fields </p>
            </span>

            <form class="form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                userName: <br />
                <input type="text" name="userName" placeholder="userName" value="<?php echo $userName ?>">
                <span class="err"> * <?php
                                        echo "<br />";
                                        echo $userNameErr; ?> </span>
                <br /><br />

                email: <br />
                <input type="text" name="email" placeholder="email" value="<?php echo $email ?>"><br /><br />
                password:<br />
                <input type="text" name="password" placeholder="password" value="<?php echo $password ?>">
                <span class="err"> * <?php
                                        echo "<br />";
                                        echo $passwordErr; ?> </span>
                <br /><br />
                location: <br />
                <input type="text" name="location" placeholder="location" value="<?php echo $location ?>"><br /><br />
                contactNumber: <br />
                <input type="text" name="contactNumber" placeholder="contactNumber" value="<?php echo $contactNumber ?>">
                <span class="err"> * <?php
                                        echo "<br />";
                                        echo $contactNumberErr; ?> </span><br /><br />

                <input type="submit" name="submit" value="Submit">
            </form>
            <br>    
            <?php echo $contactNumber?>

        </div>

    </div>

</body>

</html>
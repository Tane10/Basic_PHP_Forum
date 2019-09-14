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
                <P> This is just a quick and basic html forum testing out php, HTML5 and CSS</P>
            </span>
            <form class="form" action="./forum.php">
                userName: <br />
                <input type="text" name="userName" placeholder="userName"><br /><br />
                email: <br />
                <input type="text" name="email" placeholder="email"><br /><br />
                password:<br />
                <input type="text" name="password" placeholder="password"><br /><br />
                location: <br />
                <input type="text" name="location" placeholder="location"><br /><br />
                contactNumber: <br />
                <input type="text" name="contactNumber" placeholder="contactNumber">
            </form>
            <br>
            <button class="forumSubmit" type="submit" name="submit">
                Submit
            </button>

        </div>

    </div>

</body>

</html>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Submit</title>
</head>
<body>

My username is <?php echo $_GET["pword"]; ?><br>
, i took the survey on <?php echo $_GET["siku"]; ?><br>
that was conducted in the area of <?php echo $_GET["loc"] ; ?><br>
In my opinion, i feel <?php echo $_GET["feedback"]; ?><br>
My gender is <?php echo $_GET["gender"]; ?>
</body>
</html>
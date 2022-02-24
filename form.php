<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
    <style>
        form{
           border: 3px solid blue;
            background-color: whitesmoke;

            border-width: initial;
            text-align: center;
            color: #a52834;
            padding: 10px;
            margin: 12px;

        }
        .error{
            text-color: red;
        }

    </style>
    </head>
<body>


<h2>Feedback Survey</h2>
<form action="proffer.php" method="get">
    <label for="username">Username</label> <br>
    <input type="text"id="username"name="user"><br>
    <span class="error">*</span>
    <label for="password">Password</label><br>
    <input type="password"id="password"name="pword"><br>
    <span class="error">*</span>
    <label for="location">Location</label><br>
    <input type="text"id="location"name="loc"><br>
    <span class="error">*</span>
    <label for="dos">Date of Survey</label><br>
    <input type="date"id="dos"name="siku"><br>
    <span class="error">*</span>
    <label for="Opinion">Feedback</label><br>
    <textarea name="feedback" id="Opinion" cols="30" rows="10"></textarea><br>
    <span class="error">*</span>
    <label for="gender">Gender</label><br>
    <input type="radio"id="female" name="gender" value="female">
    <label for="female">Female</label>
    <input type="radio" name="gender" id="male" value="male">
    <label for="male">Male</label>
    <input type="radio" name="gender" id="other" value="other">
    <label for="other">Other</label><br>

    <input type="submit"value="Give Feedback"><br>
<h2>Your Input</h2>
    <textarea name="comment" id="in" cols="30" rows="10"></textarea>
    <br>
    <br>
    <br>
    <br>
</form>

</body>
</html>

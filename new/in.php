<?php

echo "<h1 class='text-center'>𝄞 Inloggen :)</h1> ";



?>
<!DOCTYPE html>
<html>
<head>
    <title>Muziek App</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="main.css">
</head>
<body >

<div class="container text-center inloggen ">

    <form method="POST" >
        <div class="form-group ">
            <label for="exampleInputEmail1">Je Email address van School</label>
            <input type="email" class="form-control mb-3 mt-1  p-4"  name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" required>

            <label for="exampleInputPassword1">Wachtwoord</label>
            <input type="password" class="form-control mb-3 mt-1 p-4" id="exampleInputPassword1" name="wachtwoord" required>

            <hr class="mt-5 mb-4 bg-secondary">
        </div>
        <button type="submit" class="btn btn-success p-3 pl-5 pr-5 " name="inloggen">𝄞&emsp;&emsp;&emsp;&emsp;Inloggen&emsp;&emsp;&emsp;&emsp;𝄞</button>
    </form>

</div>
</body>
</html>

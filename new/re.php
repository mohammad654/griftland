<?php
include_once 'db.php';
include_once 'mail.php';
echo "<h1 class='text-center'>𝄞 Registreren :)</h1> ";


if (isset($_POST['registreren'])){

    //Email
    $e_mail=$_POST['email'];
    $e_mail=base64_decode(urldecode($_POST['email']));
    $rand =md5(uniqid(mt_rand(),true));
    $base64=base64_decode( $rand );
    $modified=str_replace(array('+','='),array('',''), $base64);
    $token=substr(  $base64,0,33);


    $mail->setFrom('mohammad.ali.shikhi.55@gmail.com', 'Mohammad ');
    $mail->addAddress($_POST['email'], 'PHP');     // Add a recipient


    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Register';
    $mail->Body = ' ' . '<b><a href="https://www.griftland.nl/" 
                                        style="color: #2f0cff;font-size: 20px;text-decoration: none;
                                        margin-left: 200px;
                                        text-align: center">'

        . 'Grifland' . '</a></b><br>' .

        'Het Griftland College is een christelijke school in Soest voor vwo, havo en mavo (vmbo-tl). <br>
                             Alles onder één dak dus. Wel zo gemakkelijk. Wat wij jou bieden? Natuurlijk streven we naar<br>
                              kwalitatief goed onderwijs, uitstekende examenresultaten en een goede voorbereiding op <br>
                              de toekomst. Onze school staat bekend om haar persoonlijke aandacht voor iedere leerling.<br>
                               Maar we bieden nog veel meer. Extra uitdaging vind je onder andere in mavo XL, de havo Business<br>
                                Class in de bovenbouw of vwo X-tra. Wil je meer creativiteit of sportiviteit? Doe mee aan onze<br>
                                 vrijdagmiddagactiviteiten of ons unieke muziektheater. '.'<br>'.

        //                         'User Email ' . '<b><span style="color: green">' . $_POST['email'] . '</span></b><br>'.

        'Text ' . '<b><a href="http://localhost/practice/project1/verify.php" 
    
                        style="color: greenyellow;font-size: 30px;text-decoration: none;  margin-left: 200px;">' .'Activation' . '</a></b><br>'.
        'Activation : ' .'<br>'.

        '<span  style="color: #2f0cff;">Soest Noorderweg 79</span><br>
                        
                        <span style="color: #2f0cff;">3761 EV Soest</span><br>
                        
                       <span style="color: #2f0cff;">  Tel: 035 609 82 00</span><br>
                        
                       <span style="color: #2f0cff;">  Geopend van 7:30 – 17:00 uur</span><br>
                        
                         <span style="color: #2f0cff;">Postbus 316, 3760 AH Soest</span><br>';
    $mail->AddAttachment('img/img.jpg');
    $mail->send();

}
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

    <div class="container text-center registreren ">

        <form method="POST" >
            <div class="form-group ">
                <label for="exampleInputEmail1">Je Email adres  van School</label>

                <input type="email" class="form-control mb-3 mt-1 p-4 "  name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" required>


                <label for="exampleInputPassword1">Wachtwoord</label>
                <input type="password" class="form-control mb-3 mt-1 p-4" id="exampleInputPassword1" name="password" required>

                <label for="exampleInputPassword1"> Bevestig Wachtwoord</label>
                <input type="password" class="form-control mb-3 mt-1 p-4" id="exampleInputPassword1" name="confirm_password" required>

                <hr class="mt-5 mb-4 bg-secondary">
            </div>
            <button type="submit" class="btn btn-primary p-3 pl-5 pr-5 " name="registreren">𝄞&emsp;&emsp;&emsp;&emsp;Registreren&emsp;&emsp;&emsp;&emsp;𝄞</button>
        </form>

    </div>
    </body>
    </html>

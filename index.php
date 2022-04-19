<?php
    $name = $_GET['name'];
    $paragraph ="Eccoti sai ti stavo proprio aspettando
    Ero qui ti aspettavo da tanto tempo
    Tanto che stavo per andarmene
    E invece ho fatto bene
    Sei il primo mio pensiero che
    Al mattino mi sveglia
    L'ultimo desiderio che
    La notte mi culla
    Sei la ragione più profonda
    Di ogni mio gesto
    La storia più incredibile
    Che conosco
    Conosco
    Eccoti come un uragano di vita
    E sei qui non so come tu sia riuscita
    Prendermi dal mio sonno scuotermi
    E riattivarmi il cuore
    Sei il primo mio pensiero che
    Al mattino mi sveglia
    L'ultimo desiderio che
    La notte mi culla
    Sei la ragione più profonda
    Di ogni mio gesto
    La storia più incredibile
    Che conosco
    Eccoti finalmente sei arrivata
    E sei qui non sai quanto mi sei mancata
    Speravo tu esistessi però non immaginavo tanto
    Sei il primo mio pensiero che
    Al mattino mi sveglia
    L'ultimo desiderio che
    La notte mi culla
    Sei la ragione più profonda
    Di ogni mio gesto
    La storia più incredibile
    Che conosco
    Conosco
    Conosco
    Conosco
    Conosco
    Conosco";
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>badwords</title>
</head>
<body>
    <h1>
        <?php
            echo $name;
        ?>
    </h1>
    <p>
        <?php
            echo $paragraph;
        ?>
    </p>
    <p>
        <?php
            echo 'la lunghezza è ' . strlen($paragraph);
        ?>
    </p>
    <h2>Correzzione paragrafo</h2>
    <p>
        <?php
            echo str_replace($name , '***' , strtolower($paragraph));
        ?>
    </p>
</body>
</html>

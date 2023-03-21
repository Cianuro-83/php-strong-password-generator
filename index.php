<?php
var_dump($_GET);
$psw_lenght=((int)$_GET['psw_lenght']);
var_dump($psw_lenght);

$caratteri=[
    "QWERTYUIOPèASDFGHJKLZXCVBNM",
    "qwertyuiopasdfghjklzxcvbnm",
    "123456789",
    "/*-+<>òç@#ù§ìé",
];

$psw="";

function genera_psw($psw_lenght, $caratteri){
for ($i=0; $i < 10; $i++){
    $casual_number =rand(0,3);
    $last_index= strlen($caratteri[$casual_number])-1;
    $psw .= $caratteri[$casual_number][rand(0,$last_index)]
    // var_dump($psw);
}
};

?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PSW GENERATOR</title> <!-- BOOTSTRAP 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="./css/style.css">

</head>

<body>
    <div class="container py-5">
        <h1 class="text-center text-capitalize text-warning"> strong password generator</h1>
        <h2 class="text-success text-center py-3">Genera una password sicura</h2>
        <form action="" method="GET">
            <div class="col-12 d-flex">
                <div class="col-3 ms-auto">
                    <input type="number" class="form-control" name="psw_lenght" id="staticEmail"
                        placeholder="Lunghezza della password">
                </div>
                <div class="col-3 ms-2">
                    <button type="submit" class="btn btn-primary mb-3 text-uppercase">genera psw</button>
                </div>
            </div>
        </form>
    </div>
</body>

</html>
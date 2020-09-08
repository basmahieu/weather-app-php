<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />
    <!-- style -->
    <link rel="stylesheet" href="css/main.css" />
    <link rel="icon" href="img/favicon.ico" type="image/x-icon" />

    <title>The weather app</title>
</head>



<?php


if (isset($_POST['submit'])) {
    makeCard($data);
}


$apikey = "78c03489433ef311c8fcb20a6343eb5b";
$cityid = $_POST['cityinput'];

// get API

$base = "https://api.openweathermap.org/data/2.5/forecast?";
$query = "&q=${cityid}&units=metric&appid=${apikey}";

$contents = file_get_contents($base . $query);
$clima = json_decode($contents, true);

$test = $clima['list'];




// for ($i = 0; $i < 5; $i++) {

//     echo $clima['list'][$i * 8]['main']['temp'];
// }



foreach ($clima['list'] as $data) {
    // print $data['main']['temp'];
}

// get image url
$imgurl = $data['weather'][0]['icon'];


function makeCard($var)
{
    // Make card
    echo "<div class=\"card text-center display\">";
    echo "<h3 class=\"desc desc0\">" . $var['weather']['0']['description'] . "</h3>";
    echo "<div class=\"temp temp0 temperature\">" . round($var['main']['temp']) . "°" . "</div>";
    echo "<div class=\"date date1\">" . $var['dt_txt'] . "</div>";
    echo "</div>";
}


// Nog te gebeuren
// Button
// Onclick
// 5 dagen
// Name of the week

// for ($i = 0; $i < 5; $i++) {
//     if ($i % 8 === 0)
//         echo "PART 1 ----------------------------------------------";
//     echo "<pre>";
//     print_r($test);
//     echo "</pre>";
// }


// foreach ($clima['list'] as $data) {
//     // print $data['main']['temp'];
// }


// echo "<pre>";
// print_r($test);
// echo "</pre>";


// test stuff

// if(isset($_POST['cityinput']){...}
// echo var_dump($clima)
// echo var_dump($data)
// echo "<pre>";
// print_r($data);
// echo "</pre>";

?>


<body>

    <container>
        <div class="row">
            <div class="col">
                <!-- Side left -->
            </div>
            <div class="col-8 text-center">
                <img src="img/sunny_v1.png" alt="“Sun-logo" id="sun-logo" />

                <h1>Drop it like it's ...?</h1>

                <!-- form Start -->
                <form method="post">
                    <input type='text' name="cityinput" class="form-control form-control-lg inputValue" />
                    <input type="submit" name="submit" value="Submit" />
                </form>
                <!-- form End -->

            </div>
            <div class="col">
                <!-- Side right -->
            </div>
        </div>

        <!-- <div class="name"> <?php echo $clima['city']['name']; ?> </div> -->

        <div id="side-margins">
            <!-- Card one -->
            <div class="row">

                <?php

                // echo "<img src=\"img/icons/$imgurl.svg\"  class=\"icon1 weather-icons\" />";



                ?>

            </div>

    </container>






    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>
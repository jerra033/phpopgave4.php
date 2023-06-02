<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // deel l
    // for ($num = 0; $num <= 50; $num++){
    //     echo $num . "<br>" ;
    // }

    // $klas = []("Sofyan", "zemmel", "halle", "tion", "jerra", "mikka", "bruce", "luke", "anakin", "henk");
    // print_r($klas);

    // $maanden = ['Januari', 'Februari', 'Maart', 'April', 'Mei', 'Juni', 'Juli', 'Augustus', 'September', 'Oktober', 'November', 'December']; 

    $maandenCount = count($maanden);

    for ($i = 0; $i < $maandenCount; $i++) {
        echo 'Maand ' . ($i + 1) . ' is ' . $maanden[$i] . '.<br />';
    }

    $klas = []("Sofyan", "zemmel", "halle", "tion", "jerra", "mikka", "bruce", "luke", "anakin", "henk");

    $klasCount = count($klas);

    for ($i = 0; $i < $klasCount; $i++) {
        echo 'klasgenoot ' . ($i + 1) . ' is ' . $klas[$i] . '.<br />';
    }


    ?>
</body>
</html>
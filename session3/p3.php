<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

<form action="p3.php">
    <input type="text" name="act" id="act" placeholder="odd|even">
    <input type="number" name="num" id="num">
    <input type="submit" value="submit">
</form>
    <?php
    // URL sample : http://localhost/php/session3/p3.php?act=v&num=20

    $select = $_REQUEST["act"];
    $stop = $_REQUEST["num"];
    $num = 0;
    switch (trim($select)) {
        case "odd":
        case "Odd":
        case "ODd":
        case "ODD":
        case "oDD":
            $num = 1;
            break;
        default:
            $num = 0;
    }
    while ($num <= $stop) {
        echo $num, "<br>";
        $num += 2;
    }
    print_r ($select);
    ?>
</body>

</html>
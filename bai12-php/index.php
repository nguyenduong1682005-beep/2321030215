<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- hello world! -->
    <?php
    // code php viết ở đây
    //in ra msnf hình dùng echo
    echo "Hello World! <br>";
    //biến $ = giá trị
    $hoTen = "Duc Duong";
    $tuoi = 21;

    //nối chuỗi .
    echo $hoTen. " " . $tuoi . " tuổi <br>";

    $soThuNhat = 10;
    $soThuHai = 5;
    //+ - * /
    $ketQua = $soThuNhat + $soThuHai;
    echo $ketQua . "<br>";

    // +=  -= *= %=
    $soThuNhat+=$soThuHai;
    echo $soThuNhat . "<br>";

    $diem = 9 . "<br>";
    if($diem < 4){
        echo "F";
    }
    elseif($diem >= 4 && $diem <5){
        echo "D";
    }
    elseif($diem >= 5 && $diem <7){
        echo "C";
    }
    elseif($diem >= 7 && $diem <8){
        echo "B";
    }
    else{
        echo "A";
    }
    //switch case
    $color = "blue";
    switch($color){
        case "red":
            echo "<br>";
            echo "IS RED";
            break;
        case "blue":
            echo "<br>";
            echo "IS BLUE";
            break;
        default:  
            echo "<br>";
            echo "no color";
            break;
    }
    echo "<br>";

    for ($i = 0; $i < 15; $i++){
        echo $i . "<br>";
    }
    ?>
</body>
</html>
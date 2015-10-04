<?php
echo "<link rel='stylesheet' href='bootstrap.css'>";
echo "<meta charset='windows-1251'>";
include 'connecting.php';


if(isset($_POST['name']) && isset($_POST['surname']) &&
    isset($_POST['position']) && isset($_POST['department'])&&
isset($_POST['pay'])&& isset($_POST['birthDay']))
{

    $link = mysqli_connect($host,$user,$password,$database)
    or die ("Error : ".mysqli_error($link));

//    mysqli_query("SET NAMES 'cp1251'");
//    mysqli_query("SET CHARACTER SET 'cp1251'");

    mysqli_set_charset($link,'windows-1251');

    $name = htmlentities(mysqli_real_escape_string($link,$_POST['name']));;
    $surname = htmlentities(mysqli_real_escape_string($link,$_POST['surname']));
    $position = htmlentities(mysqli_real_escape_string($link,$_POST['position']));
    $department = htmlentities(mysqli_real_escape_string($link,$_POST['department']));
    $pay = htmlentities(mysqli_real_escape_string($link,$_POST['pay']));
    $birthDay = htmlentities(mysqli_real_escape_string($link,$_POST['birthDay']));

    echo $_POST['name']."<br>";
    echo $_POST['surname']."<br>";
    echo $_POST['position']."<br>";
    echo $_POST['department']."<br>";

    $query = "INSERT INTO employees VALUES(NULL,'$name','$surname','$position',
                                              '$department','$pay','$birthDay')";


    $result = mysqli_query($link,$query) or die ("Error : ".mysqli_error($link));
    if($result)
    {
        echo "<span>Данные успешно добавлены</span>";
    }
    mysqli_close($link);

    echo "<div style='margin: 50px'>
    <form action='Index.html'>
    <input class='btn btn-success' type='submit' value='OK'>
    </form>
    </div>";
}
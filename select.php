<?php
echo "<meta charset='windows-1251'>";
include 'connecting.php';

$link = mysqli_connect($host,$user,$password,$database)
or die ("Error : ".mysqli_error($link));

$query = "SELECT * FROM employees";

$result = mysqli_query($link,$query);
if($result)
{
    $count = mysqli_num_rows($result);
    echo "<table class='table table-hover'>
        <tr>
            <th class='col-md-2'>Имя</th>
            <th class='col-md-2'>Фамилия</th>
            <th class='col-md-2'>Должность</th>
            <th class='col-md-2'>Отдел</th>
            <th class='col-md-2'>Оклад</th>
            <th class='col-md-2'>День рождения</th>
        </tr>";

    for ($i = 0 ; $i < $count ; ++$i)
    {
        $row = mysqli_fetch_row($result);
        echo "<tr>";
        for ($j = 1 ; $j < 7 ; ++$j) echo "<td>$row[$j]</td>";
        echo "</tr>";
    }
    echo "</table>";

}


//for($i = 0;$i < $count;$i++) {
//    $itog = mysqli_fetch_array($result);



//}


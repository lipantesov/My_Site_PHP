<?php
echo "<meta charset='windows-1251'>";

include 'connecting.php';

$link = mysqli_connect($host,$user,$password,$database)
or die ("Error : ".mysqli_error($link));

if(isset($_POST['id']))
{


    $id = mysqli_real_escape_string($link, $_POST['id']);

    $query ="DELETE FROM employees WHERE id = '$id'";

    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));

    echo "<h4>Данные о сотруднике успешно удалены</h4>";
    echo "<form action='Index.html'>
            <div class='form-group'>
            <div class='col-sm-offset-2'>
                <button type='submit' class='btn btn-success' style='width: 100px'>OK</button>
            </div>
        </div>
</form>";

}
mysqli_close($link);


<?php
echo "<meta charset='windows-1251'>";

include 'connecting.php';

$link = mysqli_connect($host,$user,$password,$database)
or die ("Error : ".mysqli_error($link));



if(isset($_POST['id']))
{
    $id = $_POST['id'];
    // создание строки запроса
    $query ="SELECT * FROM employees WHERE id = '$id'";
    // выполняем запрос
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
    //если в запросе более нуля строк
    if($result)
    {
        $row = mysqli_fetch_row($result); // получаем первую строку
        $id = $row[0];
        $name = $row[1];
        $surname = $row[2];
        $position = $row[3];
        $department = $row[4];
        $pay = $row[5];
        $birthDay = $row[6];

        echo "<form class='form-horizontal' action='edit.php' method='post'>
                <div class='form-group'>
                    <label for='inputID' class='col-sm-3 control-label'>ID</label>
                    <div class='col-sm-9'>
                        <input type='text' name='id' class='form-control' id='inputID' value='$id'>
                    </div>
                </div>
                <div class='form-group'>
                    <label for='inputName' class='col-sm-3 control-label'>Имя</label>
                    <div class='col-sm-9'>
                        <input  type='text' name='name' class='form-control' id='inputName' value='$name'>
                    </div>
                </div>
                <div class='form-group'>
                    <label for='inputSurname' class='col-sm-3 control-label'>Фамилия</label>
                    <div class='col-sm-9'>
                        <input type='text' name='surname' class='form-control' id='inputSurname' value='$surname'>
                    </div>
                </div>
                <div class='form-group'>
                    <label for='inputPosition' class='col-sm-3 control-label'>Должность</label>
                    <div class='col-sm-9'>
                        <input type='text' name='position' class='form-control' id='inputPosition' value='$position'>
                    </div>
                </div>
                <div class='form-group'>
                    <label  class='col-sm-3 control-label'>Отдел</label>
                    <div class='col-sm-9'>
                        <select name='department' class='form-control' content='$department'>
                            <option>Менеджмент</option>
                            <option>Бухгалтерия</option>
                            <option>Сбыт</option>
                        </select>
                    </div>
                </div>
                <div class='form-group'>
                    <label for='inputPay' class='col-sm-3 control-label'>Оклад</label>
                    <div class='col-sm-9'>
                        <input type='text' name='pay' class='form-control' id='inputPay' value='$pay'>
                    </div>
                </div>

                <div class='form-group'>
                    <label for='inputBirthDay' class='col-sm-5 control-label'>День рождения</label>
                    <div class='col-sm-7'>
                        <input type='date' name='birthDay' class='form-control' id='inputBirthDay' value='$birthDay'>
                    </div>
                </div>
                <div class='form-group'>
                    <div class='col-sm-offset-2 col-sm-10'>
                        <button type='submit' class='btn btn-success' >Изменить</button>
                    </div>
                </div>
            </div> </form>";

       mysqli_free_result($result);
    }
}

if(isset($_POST['name']) && isset($_POST['surname']) && isset($_POST['position']) && isset($_POST['department'])
&& isset($_POST['pay']) && isset($_POST['birthDay']) && isset($_POST['id']))
{
    $id = $_POST['id'];
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $position = $_POST['position'];
    $department = $_POST['department'];
    $pay = $_POST['pay'];
    $birthDay = $_POST['birthDay'];


    $query ="UPDATE employees SET name='$name', surname='$surname',position = '$position',
department = '$department',pay = '$pay',birthday = '$birthDay'WHERE id='$id'";


    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));

    if($result)
    {
        echo "<h4>Данные о сотруднике успешно обновлены</h4>";
        echo "<form action='Index.html'>
            <div class='form-group'>
            <div class='col-sm-offset-2'>
                <button type='submit' class='btn btn-success' style='width: 100px'>OK</button>
            </div>
        </div>
</form>";
    }

}
mysqli_close($link);
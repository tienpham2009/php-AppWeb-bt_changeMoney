<form method="post">
    Nhap so tien : <input name="money">
    Loai tien : <select name="change">
        <option value="23000">VND</option>
        <option value="1">USD</option>
    </select>
    Loai tien can chuyen doi : <select name="change1">
        <option value="23000">VND</option>
        <option value="1">USD</option>
    </select>
    <br/>
    <input type="submit" value="Change">
</form>
<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $money = $_POST["money"];
    $change = $_POST["change"];
    $change1 = $_POST["change1"];
    $result = "<h1>Result :</h1>";

    $money = ($money * $change1) / $change;

    echo $result.$money;
}
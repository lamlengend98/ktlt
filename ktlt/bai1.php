<!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>
    <title>Thông tin sinh viên</title>
</head>
<body style="margin-left: 40%;">
    <p style="margin-left: 35px"><big><b>Thông tin sinh viên</b></big></p>
    <form id="form" name="form" method="get" action="">
        <table>
            <tr>
                <td>Tên: </td>
                <td><input type="text" id="username" name="username" ></td>
            </tr>
            <tr>
                <td>Địa chỉ: </td>
                <td><input type="text" id="address" name="address"></td>
            </tr>
            <tr>
                <td>Nghề: </td>
                <td><input type="text" id="job" name="job"></td>
            </tr>
            <tr>
                <td>Ghi chú: </td>
                <td><textarea rows="10" cols="20" id="note" name="note"></textarea></td>
            </tr>
            <tr>
                <td></td>
                <td><button type="submit" name="reset">Xóa</button>
                <button type="submit" name="submit">Đăng ký</button></td>
            </tr>
        </table>
        </form>
    </body>
    </html>
    <?php   
    if(isset($_GET['submit']))
    {
        $username = $_GET["username"];
        $address = $_GET["address"];
        $job = $_GET["job"];
        $note = $_GET["note"];
        if($username == "" || $address == "" || $job == "" || $note == "")
        {
            echo "Vui lòng nhập lại";
        } else {
            echo "Tên :" .$username;
            echo "<br>Địa chỉ: " .$address;
            echo "<br>Nghề nghiệp: " .$job;
            echo "<br>Ghi chú: " .$note;
    }
}
    if(isset($_GET['reset']))
    {
        include_once('bai1.php');
    }

    ?>
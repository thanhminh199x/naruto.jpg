<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<pre>
    Hằng số dùng để chứa thông tin
    khác với biến trong quá trình chạy thì biến sẽ thay đổi giá trị
còn hằng số thì không giá trị
    Khai báo hằng constant : define("tên hằng số", "giá trị của hằng số");
    Quy tắc khai báo tên hằng số
Khác với biến thì cần $ bắt đầu
Hằng số chỉ nên chứa chữ và số
Hằng số thì nên viết hoa
</pre>
<?php
define("USERNAME", "Chu Thanh Minh");
define("USERID","187438345");
define("USERDATE","30/04/1996");
echo "<br>Họ và Tên : ".USERNAME;
echo "<br>CMT :"  . USERID;
echo "<br>Ngày Sinh :" . USERDATE;
?>
</body>
</html>
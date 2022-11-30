<?php
include('db.php');
if (isset($_GET['pay_id'])) {
    $pay_id = $_GET['pay_id'];
    $sql = "DELETE FROM `pay` WHERE pay_id='$pay_id'";
    $res = mysqli_query($con, $sql);
    if ($res) {
        echo "<script>alert('Xóa thanh toán thành công')</script>";
        echo "<script>window.open('admin_pay_view.php','_self')</script>";
    }
}
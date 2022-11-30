<?php
include('db.php');
if (isset($_GET['order_id'])) {
    $order_id = $_GET['order_id'];
    $sql = "DELETE FROM `order` WHERE order_id='$order_id'";
    $res = mysqli_query($con, $sql);
    if ($res) {
        echo "<script>alert('Xóa đơn đặt hàng thành công')</script>";
        echo "<script>window.open('admin_order_view.php','_self')</script>";
    }
}
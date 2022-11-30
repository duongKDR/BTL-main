<?php
include('db.php');
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM `contact` WHERE id='$id'";
    $res = mysqli_query($con, $sql);
    if ($res) {
        echo "<script>alert('Xóa thành công phản hồi')</script>";
        echo "<script>window.open('admin_contact_view.php','_self')</script>";
    }
}
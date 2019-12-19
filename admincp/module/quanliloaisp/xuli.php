<?php
    include '../config.php';
    $id=$_GET['id'];
    $tenloaisp=$_POST['tenloaisp'];
    $thutu=$_POST['thutu'];
    if(isset($_POST['them'])){
       $sql="insert into loaisp(tensp,thutu) values('$tenloaisp','$thutu')";
       mysql_query($sql);
       header("location:../../index.php?quanli=quanliloaisp&ac=them");
    }elseif (isset ($_POST['sua'])) {
        $sql="update loaisp set tensp='$tenloaisp',thutu='$thutu' where id_loaisp='$id'";
        mysql_query($sql);
        header ("location:../../index.php?quanli=quanliloaisp&ac=sua&id=.$id");
        
    } else {
        //xoa
       $sql="delete from loaisp where id_loaisp='$id'";
        mysql_query($sql);
       header("location:../../index.php?quanli=quanliloaisp&ac=them");
        
}
?>

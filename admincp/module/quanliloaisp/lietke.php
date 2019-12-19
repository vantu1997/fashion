<?php
    $sql="select * from loaisp order by id_loaisp desc ";
    $run=mysql_query($sql);
?>
<table border="1" width="100%">
    <tr>
        <td >ID</td>
        <td >Tên sp</td>
        <td >Thứ tự</td>
        <td colspan="2">Quản lí</td>
    </tr>
    <?php
    $i=0;
    while($dong=mysql_fetch_array($run)){
     ?>
    <tr>
        <td><?php echo $i ?></td>
        <td><?php echo $dong['tensp'] ?></td>
        <td><?php echo $dong['thutu'] ?></td>
        <td><a href="index.php?quanli=quanliloaisp&ac=sua&id=<?php echo $dong['id_loaisp']?>">Sửa</a></td>
        <td><a href="module/quanliloaisp/xuli.php?id=<?php echo $dong['id_loaisp']?>">Xóa</a></td>
        
    </tr>
    <?php
        $i++;
    }
    ?>
    

    
</table>


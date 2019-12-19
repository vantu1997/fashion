<?php
    $id=$_GET['id'];
    $sql="select * from loaisp where id_loaisp=$_GET[id]";
    $run=mysql_query($sql);
    $dong=mysql_fetch_array($run);
?>
<form action="module/quanliloaisp/xuli.php?id=<?php echo $dong['id_loaisp'];?>" method="post" enctype="multipart/form-data">
<table border="1" width="100%" float:left>
    <tr>
        <td colspan="2"><div align="center"> Sửa loại sp</div></td>
    </tr>
    <tr>
        <td>Tên loại sp</td>
        <td><input type="text" name="tenloaisp" value="<?php echo $dong['tensp']?>"></td>
    </tr
    <tr>
        <td>Thứ tự</td>
        <td><input type="text" name="thutu" value="<?php echo $dong['thutu']?>"></td>
    </tr>
    <tr>
        <td colspan="2">
            <div align="center">
                <input type="submit" id="sua" name="sua" value="Sửa" />
            </div>
        </td>
    </tr>

    
</table>

</form>

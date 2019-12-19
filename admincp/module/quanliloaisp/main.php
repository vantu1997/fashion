<div class="left">
    <?php
        if(isset($_GET["ac"])){
            $tam=$_GET["ac"];
        } else {
            $tam="";
        }
        if($tam=="them"){
            include 'module/quanliloaisp/them.php';
        }if($tam=="sua"){
            include 'module/quanliloaisp/sua.php';
        }
    ?>
</div>
<div class="right">
    <?php
        include 'module/quanliloaisp/lietke.php';
    ?>
</div>
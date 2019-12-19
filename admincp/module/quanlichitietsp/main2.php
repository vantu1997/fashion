<div class="left">
    <?php
        if(isset($_GET["ac"])){
            $tam='$_GET["ac"]';
        } else {
            $tam="";
        }
        if($tam=="them2"){
            include 'module/quanlichitietsp/them2.php';
        }if($tam=="sua2"){
            include 'module/quanlichitietsp/sua2.php';
        }
    ?>
</div>
<div class="right">
    <?php
        include 'module/quanlichitietsp/lietke2.php';
    ?>
</div>
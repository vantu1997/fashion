<div class="content">
      <?php
        if(isset($_GET["quanli"])){
            $tam=$_GET["quanli"];
        } else {
            $tam="";
        }
        if($tam="quanliloaisp"){
            include 'module/quanliloaisp/main.php';
        }if($tam="quanlichitietsp"){
            include 'module/quanlichitietsp/main2.php';
        }
      ?>
</div>
<div class="clear"></div>

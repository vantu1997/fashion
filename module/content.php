<div class="content">
    <div class="left">
        <?php 
        include 'module/left/danhsach.php';
        ?>
    </div>
    <div class="right">
        <?php 
            if(isset($_GET["xem"])){
               $tam=$_GET["xem"] ;
            } else {
                $tam="";
            }
            if($tam=="chitietloaisp"){
                include 'module/right/chitietloaisp.php';
                }elseif($tam=="chitietsp"){
                    include 'module/right/chitietsp.php';
                }else {
                    include 'module/right/top.php';
                }
             
                
        ?>
    </div>
            
</div>
<div class="clear"></div>


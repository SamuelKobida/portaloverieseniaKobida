<?php  include_once('classes/DB.php');
use classes\DB;
$db=new DB("localhost","root","","portalove",3306);
//$connection=$db->getConnection();
$tabItems=$db->getTabItems();

?>
<div class="wrapper style2">
<div class="container">
        <?php

        foreach($tabItems as $key => $tabItem) {

        if($_GET['ID']==$tabItem['ID']) {
            $tabItems = $db->getTabItems();
        ?>
            <!---<img src="  < ?php echo $tabItem['obrazok']; ?>" alt="" width="300" height="300"> --->
            _
            <section class="videoframe">
                <iframe class="tape" width="560" height="315" src="<?php echo $tabItem['link']; ?>"
                        frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </section>
            <?php

        } else {
            //echo "No data found";
        }
        }

        ?>
</div>
</div>


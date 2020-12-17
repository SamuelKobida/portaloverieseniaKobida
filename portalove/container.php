<?php  include_once('classes/DB.php');
use classes\DB;
$db=new DB("localhost","root","","portalove",3306);
//$connection=$db->getConnection();
$tabItems=$db->getTabItems();



?>
<div id="extra">

    <div class="container">


        <div class="row no-collapse-1">

            <?php



            foreach($tabItems as $key => $tabItem) {
                ?>
                <section class="4u"><a href="#" class="image featured"><img src="<?php echo $tabItem['obrazok']; ?>" alt="" width="300" height="300"></a>
                    <div class="box">
                        <p><?php echo $tabItem['text']; ?></p>

                        <a href="#footer" data-id="<?php echo $tabItem['ID']; ?>" class="button sbutton">Read More</a></div>
                </section>
                <?php
            }

            ?>
        </div>


    </div>

</div>




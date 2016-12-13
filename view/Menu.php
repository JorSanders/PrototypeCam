<?php
$menuLeft = array(
    array("Home", "index.php"),
    array("Overzichten", "list.php")
);
$menuRight = array(
    array("Statistieken", "Statistics.php"),
    array("Gebruikers", "index.php"),
    array("Archief", "index.php")
);
?>
<div class="Header"> 
    <div class="HeaderImage">

    </div>

    <div class="Menu">
        <div class="LeftHalf">
            <?php
            foreach ($menuLeft as $menuItem) {
                echo" <div class='MenuItem'>
                     <a href='$menuItem[1]'>$menuItem[0]</a>
                </div>    ";
            }
            ?>
        </div>

        <div id='MenuLogo' class='MenuItem'>
            
        </div> 

        <div class="RightHalf">
            <?php
            foreach ($menuRight as $menuItem) {
                echo" <div class='MenuItem'>
                    <a href='$menuItem[1]'>$menuItem[0]</a>
                </div>    ";
            }
            ?>
        </div>
    </div>
</div>
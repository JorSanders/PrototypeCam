<?php
$menuLeft = array(
    array("Home", "index.php"),
    array("Overzichten", "list.php")
);
$menuRight = array(
    array("Statistieken", "index.php"),
    array("Gebruikers", "index.php")
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
            <img src="/PrototypeCam/images/flag_Witchidents_logo.png">
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
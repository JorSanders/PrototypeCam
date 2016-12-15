<?php
$menu = [["Home", "index.php"],
    ["Overzichten", "list.php"],
    ["Statistieken", "Statistics.php"],
    ["Gebruikers", "index.php"],
];
?>

<nav class="navbar navbar-default " role="navigation" >

    <div id="header" class="col-md-12">
        <div id="logo" class="col-md-12">
            <img src="/PrototypeCam/images/flag_Witchidents_logo.png" height="100%">
        </div>

    </div>

    <!-- Het menu -->
    <div id="menu" class="col-md-12">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav nav-justified ">
                <?php
                foreach ($menu as $menuItem) {
                    echo" <li><a href='$menuItem[1]'>$menuItem[0]</a></li> ";
                }
                ?>
            </ul>
        </div>
    </div>
</nav>
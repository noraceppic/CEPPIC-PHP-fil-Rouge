<?php
session_start();
?>
<header>
    <nav>
        <ul>
        <li><a href="index.php?page=accueil">accueil</a></li>
            <li><a href="index.php?page=contact">contact</a></li>
            <?php
            if(isset($_SESSION['loginUser'])){
                ?>
                <span class="login">
                    <li><a href="index.php?page=logout"><i class="fa fa-sign-out"></i></a></li>
                    <li><strong><?=$_SESSION['loginUser'] ?> </strong></li>
                    <?php

                      echo strstr($_SESSION['loginUser'], '@', true);

                    ?>

                </span>
                <?php } else { ?>
                    <li><a href="index.php?page=inscription">inscription</a></li>
                    <span class="login">
                    <li><a href="index.php?page=login"><i class="fa fa-user"></i></a></li>
                    </span>
            <?php } ?>

        </ul>
        
    </nav>
</header>
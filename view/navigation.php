<?php
require_once (__DIR__ . "/../model/config.php");
require_once (__DIR__ . "/../controller/login-verify.php");
?>
<div class="fix">

    <div class='cssmenu'>
        <ul class="ulm">
            <li><h2 class="title">Gabriel's Blog</h2></li>
            <li class="divide"></li>
            <li class='link <?php echo $nav1; ?>'><a href='index.php'><span>Home</span></a></li>
            <li class='link <?php echo $nav2; ?>'><a href='post.php'><span>Blog Post Form</span></a></li>
            <li class='link <?php echo $nav3; ?>'><a href='register.php'><span>Create Account</span></a></li>
            <li class='link <?php echo $nav4; ?> last'><a href='login.php'><span>Log in</span></a></li>
            <li class='link <?php echo $nav5; ?> last'><a href='contact.php'><span>Contact Me</span></a></li>
            <div class="space navigate1 techno"><a class="link1" href="#"> &#9660</a>
                <ul class="uls">
                    <?php
                    if (authenticateUser()) {
                        echo "<a href='controller/logout-user.php'>Log out</a><br/>"
                        . "<a href='alter_pass.php'>Change password</a>";
                    }
                    ?>
                    
                </ul>
            </div>
        </ul>
    </div>

</div>

<div class="main <?php echo $himain; ?>">
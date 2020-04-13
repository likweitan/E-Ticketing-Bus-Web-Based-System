<?php
    require("loginheader.php");
?>
<html>
    <body>

        <form action="login.inc.php" method="post">
            E-mail: <input type="email" name="email"><br>
            Password: <input type="password" name="password"><br>
            <input type="submit">
            <?php
                if(!empty($_GET["error"]))
                    echo "Wrong email or password";
            ?>
        </form>

    </body>
</html>
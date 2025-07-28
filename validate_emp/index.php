<?php
    require("../config/get-env.php");

        if (isset($_GET['idemp'])) {
            if (!empty($_GET['idemp'])) {
                header("Location: ".$_ENV["VALIDATE_EMP_ROUTE"].$_GET['idemp']);
            }
        }
    ?>
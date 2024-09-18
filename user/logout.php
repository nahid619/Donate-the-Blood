<?php

   session_start();

   SESSION_DESTROY();
    $_SESSION['']= "";

    header("Location: ../index.php");
?>
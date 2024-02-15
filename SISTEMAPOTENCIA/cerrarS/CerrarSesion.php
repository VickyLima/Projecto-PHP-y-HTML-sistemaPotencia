<?php
    session_start();
    session_destroy();
    header("Location: ../login2/index.php");
?>
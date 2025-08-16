<?php
session_start();
session_destroy();
header("Location: ../login.php"); // ya jahan login ka page hai
exit;

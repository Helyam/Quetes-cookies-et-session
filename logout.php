<?php
session_start();
session_destroy();
header('Location: index.php');


require 'inc/foot.php';
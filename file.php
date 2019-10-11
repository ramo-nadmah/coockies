<?php

setcookie("page_color",$_POST['user_Color'],time()+(60*5));

echo $_POST["user_Color"];
header('Location: index.php');
exit;
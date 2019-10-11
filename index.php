<?php
//
//setcookie("user_color","",time()+(24*60*60));
//

use http\Cookie;

echo $_COOKIE['page_color']
//
//
//?>
<html>

<head>
    <link rel="stylesheet" href="css/style.css">
</head>
<?php
if(isset($_COOKIE["page_color"])) {?>

    <body style="background-color: <?php echo $_COOKIE["page_color"]  ?>">

<?php }else { ?>
style="background-color: aliceblue">
<body

<?php }?>
<h3>choose your color</h3>

<form action="file.php" method="post">
<div class="group_of_boxes">


<!--2l label lama t7oo6 jwato input b9eer kolo label-->
    <label  for="1" class="color_box box_red">
        <input id="1" type="radio" name="user_Color" value="red">
    </label>

    <label for='2' class="color_box box_green">
        <input id="2"  type="radio" name="user_Color" value="green">

    </label>

    <label for="3" class="color_box box_black">
        <input id="3" type="radio" name="user_Color" value="black">
    </label>

</div>

<button type="submit">change color</button>
</form>

</body>
</html>
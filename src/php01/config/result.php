<?php
$name= htmlspecialchars($_POST['name'], ENT_QUOTES);
$shouhin = htmlspecialchars($_POST['shouhin'], ENT_QUOTES);
$kazu = htmlspecialchars($_POST['kazu'], ENT_QUOTES);

print "私の名前は" . $name . "です"."<br/>";
print "ご希望の商品は" . $shouhin . "です" . "<br/>";
print "注文数は" . $kazu . "です"; 
<?php
$people = [
    "Taro"=> "25歳men",
    "Jiro"=> "20歳men",
    "hanako"=> "16歳women",
];

foreach ($people as $people => $name) {
    print $people . "($name)" . "<br />";
}
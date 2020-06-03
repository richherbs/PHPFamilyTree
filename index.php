<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    require_once 'FamilyMember.php';

    $david_herbert = new FamilyMember("David Herbert");
    $may_herbert = new FamilyMember("May Herbert");
    $eirian_wintour = new FamilyMember("Eirian Wintour");
    $stuart_herbert = new FamilyMember("Stuart Herbert", $may_herbert, $david_herbert);
    $sue_herbert = new FamilyMember("Sue Herbert", $eirian_wintour);
    $rich_herbert = new FamilyMember("Rich Herbert",$sue_herbert, $stuart_herbert); 

    echo '<pre>';
    $rich_herbert->breadthFirstSearch($may_herbert);
    echo '<pre>';
    ?>
</body>
</html>
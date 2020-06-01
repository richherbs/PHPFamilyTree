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

    $rich_herbert = new FamilyMember("Rich Herbert", 
        new FamilyMember("Sue Herbert", new FamilyMember("Eirian Wintour")), 
        new FamilyMember("Stuart Herbert", new FamilyMember("David Herbert"), new FamilyMember("May Herbert"))
    );

    echo "<pre>";
    var_dump($rich_herbert);
    echo "</pre>";
    ?>
</body>
</html>
<?php

require_once '../data/User.php';

$user1 = new User('Coco l\'abricot', 'male', 26, 65, 170);

$user1->calculateMaintainKcal(65, 170, 26, 1.2);
var_dump($user1);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="../assets/styles/style.css" rel="stylesheet">
</head>

<body>
    <header>
        <h1>Calculateur</h1>
    </header>

    <main>
        <form action="index.php" method="POST">
            <label for="pseudo">Enter your name :</label>
            <input type="text" id="pseudo">

            <label for="gender">Select the gender that correspond to you :</label>
            <input type="text" id="gender">

            <label for="age">Enter your age :</label>
            <input type="text" id="age">

            <label for="mass">Enter your weight in kg :</label>
            <input type="text" id="mass">

            <label for="height">Enter your height in cm :</label>
            <input type="text" id="height">


        </form>

    </main>

</body>

</html>
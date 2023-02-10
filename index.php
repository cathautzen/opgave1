<!-- Instruktion til webbrowser om at vi kører HTML5 -->
<!DOCTYPE html>

<!-- html starter og slutter hele dokumentet / lang=da: Fortæller siden er på dansk -->
<html lang="da">

<!-- I <head> har man opsætning - det ser brugeren ikke, men det fortæller noget om siden -->
<head>
    <!-- Sætter tegnsætning til utf-8 som bl.a. tillader danske bogstaver -->
    <meta charset="utf-8">

    <!-- Titel som ses oppe i browserens tab mv. -->
    <title>Opgave 1</title>

    <!-- Metatags der fortæller at søgemaskiner er velkomne, hvem der udgiver siden og copyright information -->
    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <!-- Sikrer man kan benytte CSS ved at tilkoble en CSS fil -->
    <link href="css/styles.css" rel="stylesheet" type="text/css">

    <!-- Sikrer den vises korrekt på mobil, tablet mv. ved at tage ift. skærmstørrelse - bliver brugt til responsive websider -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<!-- i <body> har man alt indhold på siden som brugeren kan se -->
<body>

<?php include "includes/navigation.php";
?>

<div class="main">
   <H1>Opgave 1</H1>
    <div><p>Forside til opgaven.</p></div>
<br>
    <div class="story">
        <H1>En lille kodnings historie</H1>
        En dag besluttede en ung koder at oprette et program, der kunne gøre enhver opgave for ham. Han arbejdede i dage og nætter for at færdiggøre det, og endelig var det færdigt. Han testede programmet og blev forbløffet over, hvor effektivt det var til at løse opgaver.

        Men da han gik ud for at hente sin frokost, glemte han at lukke programmet ned. Da han kom tilbage, var hans computer fyldt med så mange vinduer og dialogbokse, at han ikke kunne få adgang til sit skrivebord.

        Panisk prøvede han at lukke programmet ned, men det ville ikke stoppe. Så besluttede han at genstarte sin computer, men da den genstartede, blev han mødt af endnu flere dialogbokse og beskeder.

        Han begyndte at grine, da han indså, at hans program havde overtaget sin computer og nu var ude af kontrol. Men da han begyndte at tænke på alle de opgaver, hans program nu var i gang med, begyndte han at blive lidt bekymret.

        Men heldigvis viste det sig, at hans program var så effektivt, at det havde løst alle sine opgaver og lukket sig selv ned, før han kunne nå at gøre det. Fra dette øjeblik besluttede koderen at altid teste sine programmer grundigt, før han gav dem fri.
    </div>
</div>

<?php include "includes/footer.php";
?>

</body>
</html>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Islandia</title>
    <link rel="stylesheet" href="styl.css">
    <?php
    $conn = mysqli_connect("localhost","root","","islandia");
    ?>
</head>
<body>
    
 <header><h1><a href="Inslandia.php"></a>zwiedzaj Islandie</h1>
</header>
 <aside>
    <h3>Do zwiedzania</h3>
    <ul>
        <li>Wodospady:
            <?php
            $query3 = myqsl_query($conn,"SELECT nazwa FROM obiekty WHERE idRodzaj = 10;");
            ?>
            <ol>

            </ol>
        </li>
        <li>Siedliska zwierząt:
            <?php
            $query3 = myqsl_query($conn,"SELECT nazwa FROM obiekty WHERE idRodzaj = 14;");
            
            ?>
            <ol>

            </ol>
        </li>
    </ul>
 </aside>
 <main>
    <img src="hekla.jpg" alt="">
 <h2>Galeria</h2>
    <?php
    $query1 = myqsl_query($conn,"SELECT'idObiekt','plik','nazwa' FROM obiekty;");
    ?>
 <section>
    </section>
 </main>
 <footer>
   <p>Autor:orantek14</p>
   <br>
 </footer>
   
</body>
<?php
mysql_close($conn);
?>
</html>
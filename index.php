<!DOCTYPE html>
<html lang="es">
<head>
  <!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projecte Welcome</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fafafa;
            margin: 0;
        }
        header, footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 1em;
        }
        footer {
            position: fixed;
            bottom: 0;
            width: 100%;
        }
        main {
            padding: 2em;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            text-align: center;
        }
        td {
            width: 20%;
            padding: 10px;
            vertical-align: top;
        }
        img {
            width: 230px;
            border-radius: 8px;
        }
        a {
            text-decoration: none;
            color: #333;
            font-weight: bold;
        }
        a:hover {
            color: #0077cc;
        }
    </style>
</head>
<body>
    <h  GNU nano 4.8                      index.php                                  
        <?php
        $imgs = scandir("./img",SCANDIR_SORT_ASCENDING);
        foreach( $imgs as $img ) {
            if( $img=="." || $img==".." )
                continue;
            if( substr($img,-3)=="jpg" or substr($img,-3)=="png"){
                $name = substr($img,0,-4);
            }else if (substr($img,-4)=="jpeg") {
                $name = substr($img,0,-5);
            }
            echo "<a href='profile/$name.html'>";
            echo "<img src='img/$img' width='130'>";
            echo $name."</a>";
            echo "<div></div>";

        }
    ?>
    </il>
</body>
eader>
        <h1>Projecte Welcome</h1>
        <nav>
            <p>Llistat de fitxes dels alumnes</p>
        </nav>
    </header>

    <main>
        <section>
            <table>
                <tr>
                <?php
                $dirProfiles = './profiles';
                $dirImages = './images';
                $profiles = scandir($dirProfiles, SCANDIR_SORT_ASCENDING);
                $count = 0;

                foreach ($profiles as $file) {
                    if ($file == '.' || $file == '..') continue;
                   
                    if (substr($file, -5) == '.html') {
                        $name = substr($file, 0, -5);

                        // Buscar imagen con distintas extensiones
                        $imagePath = "";
                        if (file_exists("$dirImages/$name.jpg")) {
                            $imagePath = "$dirImages/$name.jpg";
                        } elseif (file_exists("$dirImages/$name.jpeg")) {
                            $imagePath = "$dirImages/$name.jpeg";
                        } elseif (file_exists("$dirImages/$name.png")) {
                            $imagePath = "$dirImages/$name.png";
                        }

                        echo "<td><article>";
                        if ($imagePath != "") {
                            echo "<img src='$imagePath' alt='Imatge de $name'>";
                        } else {
                            echo "<img src='https://via.placeholder.com/130x130?text=No+image' alt='Sense imatge'>";
                        }
                        echo "<br><a href='$dirProfiles/$file'>$name</a>";
                        echo "</article></td>";

                        $count++;
                        if ($count % 5 == 0) echo "</tr><tr>";
                    }
                }

                // Completar la última fila si no hay 5 elementos
                while ($count % 5 != 0) {
                    echo "<td></td>";
                    $count++;
                }
                ?>
                </tr>
            </table>
        </section>
    </main>

    <footer>
        <p>Projecte creat per l'equip Marín-Cardizales</p>
    </footer>
</body>
</html>  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projecte Welcome</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fafafa;
            margin: 0;
        }
        header, footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 1em;
        }
        footer {
            position: fixed;
            bottom: 0;
            width: 100%;
        }
        main {
            padding: 2em;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            text-align: center;
        }
        td {
            width: 20%;
            padding: 10px;
            vertical-align: top;
        }
        img {
            width: 230px;
            border-radius: 8px;
        }
        a {
            text-decoration: none;
            color: #333;
            font-weight: bold;
        }
        a:hover {
            color: #0077cc;
        }
    </style>
</head>
<body>
    <header>
        <h1>Projecte Welcome</h1>
        <nav>
            <p>Llistat de fitxes dels alumnes</p>
        </nav>
    </header>

    <main>
        <section>
            <table>
                <tr>
                <?php
                $dirProfiles = './profiles';
                $dirImages = './images';
                $profiles = scandir($dirProfiles, SCANDIR_SORT_ASCENDING);
                $count = 0;

                foreach ($profiles as $file) {
                    if ($file == '.' || $file == '..') continue;
                   
                    if (substr($file, -5) == '.html') {
                        $name = substr($file, 0, -5);

                        // Buscar imagen con distintas extensiones
                        $imagePath = "";
                        if (file_exists("$dirImages/$name.jpg")) {
                            $imagePath = "$dirImages/$name.jpg";
                        } elseif (file_exists("$dirImages/$name.jpeg")) {
                            $imagePath = "$dirImages/$name.jpeg";
                        } elseif (file_exists("$dirImages/$name.png")) {
                            $imagePath = "$dirImages/$name.png";
                        }

                        echo "<td><article>";
                        if ($imagePath != "") {
                            echo "<img src='$imagePath' alt='Imatge de $name'>";
                        } else {
                            echo "<img src='https://via.placeholder.com/130x130?text=No+image' alt='Sense imatge'>";
                        }
                        echo "<br><a href='$dirProfiles/$file'>$name</a>";
                        echo "</article></td>";

                        $count++;
                        if ($count % 5 == 0) echo "</tr><tr>";
                    }
                }

                // Completar la última fila si no hay 5 elementos
                while ($count % 5 != 0) {
                    echo "<td></td>";
                    $count++;
                }
                ?>
                </tr>
            </table>
        </section>
    </main>

    <footer>
        <p>Projecte creat per l'equip Marín-Cardizales</p>
    </footer>
</body>
</html><!DOCTYPE html>
<html lang="es">
<head>
  <!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projecte Welcome</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fafafa;
            margin: 0;
        }
        header, footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 1em;
        }
        footer {
            position: fixed;
            bottom: 0;
            width: 100%;
        }
        main {
            padding: 2em;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            text-align: center;
        }
        td {
            width: 20%;
            padding: 10px;
            vertical-align: top;
        }
        img {
            width: 230px;
            border-radius: 8px;
        }
        a {
            text-decoration: none;
            color: #333;
            font-weight: bold;
        }
        a:hover {
            color: #0077cc;
        }
    </style>
</head>
<body>
    <h  GNU nano 4.8                      index.php                                  
        <?php
        $imgs = scandir("./img",SCANDIR_SORT_ASCENDING);
        foreach( $imgs as $img ) {
            if( $img=="." || $img==".." )
                continue;
            if( substr($img,-3)=="jpg" or substr($img,-3)=="png"){
                $name = substr($img,0,-4);
            }else if (substr($img,-4)=="jpeg") {
                $name = substr($img,0,-5);
            }
            echo "<a href='profile/$name.html'>";
            echo "<img src='img/$img' width='130'>";
            echo $name."</a>";
            echo "<div></div>";

        }
    ?>
    </il>
</body>
eader>
        <h1>Projecte Welcome</h1>
        <nav>
            <p>Llistat de fitxes dels alumnes</p>
        </nav>
    </header>

    <main>
        <section>
            <table>
                <tr>
                <?php
                $dirProfiles = './profiles';
                $dirImages = './images';
                $profiles = scandir($dirProfiles, SCANDIR_SORT_ASCENDING);
                $count = 0;

                foreach ($profiles as $file) {
                    if ($file == '.' || $file == '..') continue;
                   
                    if (substr($file, -5) == '.html') {
                        $name = substr($file, 0, -5);

                        // Buscar imagen con distintas extensiones
                        $imagePath = "";
                        if (file_exists("$dirImages/$name.jpg")) {
                            $imagePath = "$dirImages/$name.jpg";
                        } elseif (file_exists("$dirImages/$name.jpeg")) {
                            $imagePath = "$dirImages/$name.jpeg";
                        } elseif (file_exists("$dirImages/$name.png")) {
                            $imagePath = "$dirImages/$name.png";
                        }

                        echo "<td><article>";
                        if ($imagePath != "") {
                            echo "<img src='$imagePath' alt='Imatge de $name'>";
                        } else {
                            echo "<img src='https://via.placeholder.com/130x130?text=No+image' alt='Sense imatge'>";
                        }
                        echo "<br><a href='$dirProfiles/$file'>$name</a>";
                        echo "</article></td>";

                        $count++;
                        if ($count % 5 == 0) echo "</tr><tr>";
                    }
                }

                // Completar la última fila si no hay 5 elementos
                while ($count % 5 != 0) {
                    echo "<td></td>";
                    $count++;
                }
                ?>
                </tr>
            </table>
        </section>
    </main>

    <footer>
        <p>Projecte creat per l'equip Marín-Cardizales</p>
    </footer>
</body>
</html>  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projecte Welcome</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: yellow;
            margin: 0;
        }
        header, footer {
            background-color: red;
            color: white;
            text-align: center;
            padding: 1em;
        }
        footer {
            position: fixed;
            bottom: 0;
            width: 100%;
        }
        main {
            padding: 2em;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            text-align: center;
        }
        td {
            width: 30%;
            padding: 10px;
            vertical-align: top;
        }
        img {
            width: 200px;
            border-radius: 8px;
        }
        a {
            text-decoration: none;
            color: white;
            font-weight: bold;
        }
        a:hover {
            color: black;
        }
    </style>
</head>
<body>
    <header>
        <h1>Projecte Welcome MARIN-CARDIZALES</h1>
        <nav>
            <p>Llistat de les fitxes dels alumnes</p>
        </nav>
    </header>

    <main>
        <section>
            <table>
                <tr>
                <?php
                $dirProfiles = './profiles';
                $dirImages = './images';
                $profiles = scandir($dirProfiles, SCANDIR_SORT_ASCENDING);
                $count = 0;

                foreach ($profiles as $file) {
                    if ($file == '.' || $file == '..') continue;
                   
                    if (substr($file, -5) == '.html') {
                        $name = substr($file, 0, -5);

                        // Buscar distintes extensions d'imatge al directori
                        $imagePath = "";
                        if (file_exists("$dirImages/$name.jpg")) {
                            $imagePath = "$dirImages/$name.jpg";
                        } elseif (file_exists("$dirImages/$name.jpeg")) {
                            $imagePath = "$dirImages/$name.jpeg";
                        } elseif (file_exists("$dirImages/$name.png")) {
                            $imagePath = "$dirImages/$name.png";
                        }

                        echo "<td><article>";
                        if ($imagePath != "") {
                            echo "<img src='$imagePath' alt='Imatge de $name'>";
                        } else {
                            echo "<img src='https://via.placeholder.com/130x130?text=No+image' alt='Sense imatge'>";
                        }
                        echo "<br><a href='$dirProfiles/$file'>$name</a>";
                        echo "</article></td>";

                        $count++;
                        if ($count % 5 == 0) echo "</tr><tr>";
                    }
                }

                while ($count % 5 != 0) {
                    echo "<td></td>";
                    $count++;
                }
                ?>
                </tr>
            </table>
        </section>
    </main>

    <footer>
        <p>Projecte creat per l'equip Marín-Cardizales</p>
    </footer>
</body>
</html>

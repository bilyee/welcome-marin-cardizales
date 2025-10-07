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
            padding: 0;
        }
        header, footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 1em;
        }
        footer {
            bottom: 0;
            position: fixed;
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
        <h1>Projecte Welcome 1</h1>
        <nav>
            <p>Llistat de fitxes dels alumnes</p>
        </nav>
    </header>

    <main>
        <section>
            <table>
                <tr>
                <?php
                $profile = scandir("./profile",SCANDIR_SORT_ASCENDING);
                $count = 0;
                foreach( $profile as $html ) {
                    if( $html=="." || $html==".." )
                        continue;
                    if( substr($html,-5)==".html"){
                        $name = substr($html,0,-5);
                        $imagePath = "./img/$name.jpg";

                        // Si no hi ha .jpg, provarem amb les altres extensions

                        if (!file_exists($imagePath)) {
                            if (file_exists("./img/$name.png")) {
                                $imagePath = "./img/$name.png";
                            } else if (file_exists("./img/$name.jpeg")) {
                                $imagePath = "./img/$name.jpeg";
                            } else {
                                $imagePath = ""; // No hi ha imatge
                            }
                        }

                        echo "<td>";
                        echo "<article>";
                        if ($imagePath != "") {
                            echo "<img src='$imagePath' alt='Imatge de $name'>";
                        } else {
                            echo "<img src='https://via.placeholder.com/130x130?text=No+image' alt='Sense imatge'>";
                        }
                        echo "<br>";
                        echo "<a href='profile/$html'>$name</a>";
                        echo "</article>";
                        echo "</td>";

                        $count++;

                        // Quan arribem a 5 columnes, fem una nova fila
                        if ($count % 5 == 0) {
                            echo "</tr><tr>";
                        }
                    }
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

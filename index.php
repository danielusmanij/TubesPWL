
<!doctype html>
<html lang="en">
<head>
    <meta name="author" content="Bioskop Daniel Umanji - 1772040">
    <meta name="author" content="Bioskop Nandi Agung- 1772050">
    <meta name="author" content="Bioskop eggy Herlandy- 1772035">
    <meta name="description" content="PHP Navigation and PHP Data Object (PDO)">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tugas Besar Bioskop</title>
</head>
<body>
<div class="page">
        <header>
            <h2>Squid Bioskop</h2>
        </header>
        <nav class="flex-container">

            <div><a href="?menu=hm">Home</a></div>
            <div><a href="?menu=rg">Registrasi</a></div>
            <div><a href="?menu=fm">Film</a></div>
            <div><a href="?menu=ab">About</a></div>

        </nav>
        <main>
            <?php
            $targetMenu = filter_input(INPUT_GET, 'menu');
            switch ($targetMenu) {
                case 'hm';
                    include_once 'view/home.php';
                    break;
                case 'rg';
                    include_once 'view/regis.php';
                    break;
                case 'fm';
                    include_once 'view/film.php';
                    break;
                default;
                    include_once 'view/home.php';
            }
            ?>
        </main>
        <footer>
            Pemrograman Web 2 &copy;2019
        </footer>

</div>
</body>

</html>



<header>

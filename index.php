<!doctype html>
<html lang="nl">
<head>
    <meta charset="utf-8">
    <title>Basketbal Divisie</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="icon" href="favicon.ico" type="image/x-icon" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="fontawesome/css/all.css">
    <link href="/your-path-to-fontawesome/css/fontawesome.css" rel="stylesheet">
    <link href="/your-path-to-fontawesome/css/brands.css" rel="stylesheet">
    <link href="/your-path-to-fontawesome/css/solid.css" rel="stylesheet">

    <!-- Hier worden de fonts al voor je ingeladen! -->
    <link href="https://fonts.googleapis.com/css2?family=Faster+One&family=Roboto:ital,wght@0,400;0,500;0,700;1,400;1,500&family=Roboto+Mono:wght@400;500&display=swap" rel="stylesheet">
</head>

<body>

    <div class="container">
        <header>
            <h1>Basketbal Divisie</h1>
        </header>

        <main>
            <div class="row">
                <div class="mono-regular"></div>
                    <div class="left-box">
                            <h2>Aantal overtredingen:</h2>
                            <div class="mono-bold">
                                <p>Deze competitie is gemiddeld zo'n <strong><?php echo file_get_contents('files/average.txt') ?></strong> overtredingen per wedstrijd.</p>
                            </div>
                        </div>
                        <div class="box-container">
                            <h2>Aantal overtredingen</h2>
                            <h2>sum</h2>
                            <p><strong><?php echo nl2br(file_get_contents("files/sum.txt"));?></strong></p>
                        </div>
                    </div>

                </div>
            </div>
                <div class="galery-container">
                    <div class="galery-bar">
                        <div class="galery-icon">
                            <i onclick="toggle1()" class="fa-solid fa-arrow-left"></i>
                            <h2 id="listName" class="mono-bold" ></h2>
                            <i onclick="toggle2()" onclick="set-click" onclic class="fa-solid fa-arrow-right"></i>
                        </div>
                    </div>
                    <div class="box-galery">
                        <div class="mono-regular">
                            <p id="str-1" class="mono-regular"><strong><?php echo nl2br(file_get_contents("files/zwartboek.txt"));; ?></strong></p>
                            <p id="str-2" style="display: none;" class="mono-regular"><strong><?php echo file_get_contents("files/draaitabel_scheids.txt") ?></strong></p>
                            <p id="str-3" style="display: none;"><?php echo nl2br(file_get_contents("files/draaitabel_stadion.txt")) ?></p>
                        </div>
                    </div>
                </div>
        </main>

        <footer>
            <p>Deze website is gemaakt in het kader van een praktijkopdracht bij de opleiding Software Developer, Curio Breda.</p>
            <p>&copy; Bradley, Jorn.</p>
        </footer>
    </div>
    <script>
        function toggle1(){
            var element = document.getElementById("str-1");
            element.classList.toggle("active");
            document.getElementById("str-2").style.display = "none";
            document.getElementById("str-1").style.display = "block";
            document.getElementById("listName").innerHTML = "Zwartboek";
        }
        
        function toggle2(){
            document.getElementById("Cp").innerHTML = timeClicked;
            var element = document.getElementById("str-2");
            element.classList.toggle("active");
            document.getElementById("str-1").style.display = "none";
            document.getElementById("str-2").style.display = "block";
            document.getElementById("listName").innerHTML = "Draaitabel scheidsrechters";

        }
        function toggle3(){
            var timeClicked = 2;
            var element = document.getElementById("str-3");
            element.classList.toggle("active");
            document.getElementById("str-2").style.display = "none";
            document.getElementById("str-3").style.display = "block";
            document.getElementById("listName").innerHTML = "Draaitabel teams";
        }
    </script>

</body>
</html>

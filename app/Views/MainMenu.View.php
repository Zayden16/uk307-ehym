<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>WeBau AG | Werkstatt</title>
    <link rel="stylesheet" href="public/css/app.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700&display=swap" rel="stylesheet"> 

</head>

<body>
    <div id="sideNav">
        <h1 id="title">WeBau AG | Werkstatt</h1>
        <a href="" id="nav-active-page">Home</a>
        <a href="createorder">Auftrag Erfassen</a>
        <a href="orders">Aufträge</a>
        <a href="#">Abgeschlossene Aufträge</a>
        <a href="#">Werkzeuge</a>
        <a href="addresses">Adresse erfassen</a>
    </div>

    <div id="particles-wrapper">
        <div id="flex-container" class="flex-container">
            <div>
                <h2>
                Aufträge
                </h2>
                <p class="mm-counter">
                <?php print$amountOfOrders;?>
                </p>
            </div>

            <div>
                <h2>
                    Abgeschlossene Aufträge
                </h2>
                <p class="mm-counter">
                <?php 
                print$amountOfOrdersClosed;?>
                </p>
            </div>
            <div>
                <h2>
                    Werkzeuge
                </h2>
                <p class="mm-counter">
                    <?php print $amountOfTools;?>
                </p>
            </div>

            <div>
                <h2>
                    Adresse erfassen
                </h2>
                <p class="mm-counter">
                    <?php print $amountOfAddresses;?>
                </p>
            </div>

        </div>
    </div>


    <main>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>
    <script src="public/js/app.js"></script>

</body>

</html>
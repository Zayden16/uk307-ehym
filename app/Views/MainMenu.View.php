<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>WeBau AG | Werkstatt</title>
    <link rel="stylesheet" href="public/css/app.css">
    <link rel="stylesheet" href="public/css/styles.css">

</head>

<body>

    <div id="sideNav">
        <h1 id="title">WeBau AG | Werkstatt</h1>
        <a href="#" id="nav-active-page">Home</a>
        <a href="#">Auftrag Erfassen</a>
        <a href="#">Aktive Aufträge</a>
        <a href="#">Abgeschlossene Aufträge</a>
    </div>
    <div id="particles-js">
        <div class="flex-container">
            <div>
                <h2>
                    Aktive Aufträge
                </h2>
                <p>
                    Placeholder Value
                </p>
            </div>

            <div>
                <h2>
                    Abgeschlossene Aufträge
                </h2>
                <p>
                    Placeholder Value
                </p>
            </div>
            <div>
                <h2>
                    Werkzeuge
                </h2>
                <p class="mm-counter">
                    <?php print $tools[0]; ?>
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
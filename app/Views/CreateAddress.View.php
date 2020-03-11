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
        <a href="mainmenu" >Home</a>
        <a href="createorder">Auftrag Erfassen</a>
        <a href="orders">Aufträge</a>
        <a href="#">Abgeschlossene Aufträge</a>
        <a href="#">Werkzeuge</a>
        <a href="addresses" id="nav-active-page">Adresse erfassen</a>
    </div>


    <main>
    <div class="form-wrapper">
        <form method="post">
            <h1>Adresse erfassen:</h1>
            <label for="name">Name:</label>
            <input class="form-input" name="name" type="text" value=""required /> <br />

            <label for="email">E-Mail:</label>
            <input class="form-input" name="email" type="email" required /> <br />

            <label for="telephone">Telefon:</label>
            <input class="form-input" name="telephone" type="text" /> <br />

            <label for="addressL1">Adresse (I):</label>
            <input class="form-input" name="addressL1" type="text" /> <br />

            <label for="addressL2">Adresse (II):</label>
            <input class="form-input" name="addressL2" type="text" /> <br />
            
            <button type="submit" value="Submit">Submit</button>
            <button id="reset-button" type="reset">Zurücksetzen</button>
        </form>
    </div>

    </main>

    <script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>
    <script src="public/js/app.js"></script>

</body>

</html>
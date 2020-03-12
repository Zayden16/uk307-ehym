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
        <a href="orders">Aktive Aufträge</a>
        <a href="addresses" id="nav-active-page">Adresse erfassen</a>
    </div>

    <main>
    <div class="form-wrapper">
        <form method="post", id = "listForm">
        <ul id="errorList"></ul>
            <h1>Adresse erfassen:</h1>


    <div class="form-group">
    <label for="name">Name:</label><br>
            <input class="form-input" name="name" type="text" id="name" /> <br />
    </div>

    <div class="form-group">
            <label for="email">E-Mail:</label><br>
            <input class="form-input" name="email" type="email" id="email"  /> <br />
            </div>

            <div class="form-group">
            <label for="telephone">Telefon:</label><br>
            <input class="form-input" type="tel" id="phone" name="phone" pattern="^(0|0041|\+41)?[1-9\s][0-9\s]{1,12}$"> <br />
            </div>

            <div class="form-group">
            <label for="addressL1">Adresse (I):</label><br>
            <input class="form-input" name="addressL1" type="text" id="adr" /> <br />
            </div>
            <div class="form-group">
            <label for="addressL2">Adresse (II):</label>
            <input class="form-input"s name="addressL2" type="text" /> <br />
            </div>
            <button id ="submit" type="submit" value="Submit">Submit</button>
            <button id="reset-button" type="reset">Zurücksetzen</button>
        </form>
    </div>

    </main>

    <script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>
    <script src="public/js/app.js"></script>

</body>
<script src="public/js/scriptList.js"></script>
</html>
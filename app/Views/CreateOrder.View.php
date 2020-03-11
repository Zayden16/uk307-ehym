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
        <a href="mainmenu">Home</a>
        <a href="createorder" id="nav-active-page">Auftrag Erfassen</a>
        <a href="orders">Aufträge</a>
        <a href="#">Abgeschlossene Aufträge</a>
        <a href="#">Werkzeuge</a>
        <a href="#">Addressen</a>
    </div>

    <div class="form-wrapper">
        <form>
            <h1>Auftrag erfassen:</h1>
            <label for="name">Name:</label>
            <input class="form-input" name="name" type="text" required /> <br />

            <label for="email">E-Mail:</label>
            <input class="form-input" name="email" type="email" required /> <br />

            <label for="telephone">Telefon:</label>
            <input class="form-input" name="telephone" type="text" /> <br />

            <?php
$options = array(
1 => 'Option1',
2 => 'Option2',
3 => 'Option3',
4 => 'Option4',
5 => 'Option5'
);
?>

            <label for="importance">Dringlichkeit:</label>
            <select class="form-input" id="importance">
                <?php foreach($options as $option => $value): ?>
                <option value="<?php echo $option; ?>"><?php echo $value; ?></option>
                <?php endforeach; ?>
            </select><br />

            <label for="tool">Betreffendes Werkzeug:</label>
            <input class="form-input" name="tool" type="text" required /> <br />

            <button type="submit" value="Submit">Submit</button>
            <input type="reset">
        </form>
    </div>


    <main>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>
    <script src="public/js/app.js"></script>

</body>

</html>
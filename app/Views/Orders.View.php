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
        <a href="createorder">Auftrag Erfassen</a>
        <a href="orders" id="nav-active-page">Aktive Aufträge</a>
        <a href="addresses">Adresse erfassen</a>
    </div>
    <div class="form-wrapper">
        <h1>Aufträge:</h1>

        <table class="generic-table">
            <tr>
                <th>AuftragsID</th>
                <th>Name</th>
                <th>Status</th>
                <th>Werkzeug</th>
                <th>Dringlichkeit</th>
                <th>Dauer</th>
                <th>Bearbeiten</th>
            </tr>
            <?php
            foreach($orders as $order){
                echo "<tr>";
                    echo "<td>$order->orderId</td>";
                    echo "<td>$order->addressName</td>";
                    echo "<td>$order->statusName</td>";
                    echo "<td>$order->toolName</td>";
                    echo "<td>$order->importanceName</td>";
                    echo "<td>$order->totalTime</td>";
                    echo "<td> <button onClick=editObject(" . $order->orderId . ")>Bearbeiten</button></td>";
            }
            ?>




        </table>
    </div>


    <main>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>
    <script src="public/js/app.js"></script>
    <script src="public/js/onedit.js"></script>

</body>

</html>
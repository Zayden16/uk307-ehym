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
        <a href="orders" id="nav-active-page">Aufträge</a>
        <a href="addresses">Adresse erfassen</a>
    </div>
    <div class="form-wrapper">
        <h1>Auftrag bearbeiten:</h1>

        <main>

            <div class="form-wrapper">
                <form method="post">
                    <h1>Auftrag bearbeiten:</h1>
                    <label for="address">Adresse:</label>
                    <select class="form-input" name="address" id="address-picker" required>
                        <?php
                        echo"<option value=" . $selectedOrder->f_addressId . ">" . $selectedOrder->addressName . ", " . "</option>";
                        foreach ($adr as $currentAdr) {
                            echo"<option value=" . $currentAdr['addressID'] . ">" . $currentAdr['name'] . ", " . $currentAdr['email'] . "</option>";
                        }
                        ?>
                    </select>

                    <label for="importance-picker">Dringlichkeit:</label>
                    <select class="form-input" name="importance" id="importance-picker">
                        <?php
                        echo"<option value=" . $selectedOrder->f_importanceId . ">" . $selectedOrder->importanceName . "</option>";
                        foreach ($importan as $currentImportance) {
                            echo"<option value=" . $currentImportance->importanceID . ">" . $currentImportance->importanceText . "</option>";
                        }
                        ?>
                    </select>

                    <label for="tool">Betreffendes Werkzeug:</label>
                    <select class="form-input" name="tool" id="tool-picker">
                        <?php
                        echo"<option value=" . $selectedOrder->f_toolId . ">" . $selectedOrder->toolName . "</option>";
                        foreach ($tools as $currentTool) {
                            echo"<option value=" . $currentTool->toolID . ">" . $currentTool->toolName . "</option>";
                        }
                        ?>
                    </select>

                    <label for="status">Status:</label>
                    <select class="form-input" name="status" id="status-picker">
                        <?php
                        echo"<option value=" . $selectedOrder->f_statusId . ">" . $selectedOrder->statusName . "</option>";
                        foreach ($stati as $currentStatus) {
                            echo"<option value=" . $currentStatus->statusID . ">" . $currentStatus->statusName . "</option>";
                        }
                        ?>
                    </select>

                    <button type="submit">Submit</button>
                    <button id="reset-button" type="reset">Zurücksetzen</button>
                </form>
            </div>


        </main>


    <script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>
    <script src="public/js/app.js"></script>

</body>

</html>
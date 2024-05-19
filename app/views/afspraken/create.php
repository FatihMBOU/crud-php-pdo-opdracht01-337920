<?php require_once APPROOT . '/views/includes/header.php'; ?>

<div class="container">
    <div class="row mt-3">
        <div class="col-3"></div>
        <div class="col-6">
            <h3><?= $data['title']; ?></h3>
        </div>
        <div class="col-3"></div>
    </div>

    <div class="row mt-3">
        <div class="col-3"></div>
        <div class="col-6">

        <div class="container">
    <h1>Bling Bling Nagelstudio Chantal</h1>
    <form action="<?= URLROOT; ?>/afspraken/create" method="post">
        <label for="basiskleur1">Kies 4 basiskleuren voor uw nagels:</label><br>
        <input type="color" id="basiskleur1" name="basiskleur1" value="#ffcccc">
        <input type="color" id="basiskleur2" name="basiskleur2" value="#9999ff">
        <input type="color" id="basiskleur3" name="basiskleur3" value="#ff6699">
        <input type="color" id="basiskleur4" name="basiskleur4" value="#ffff66"><br><br>

        <label for="telefoonnummer">Uw telefoonnummer:</label><br>
        <input type="tel" id="telefoonnummer" name="telefoonnummer" pattern="[0-9]{2} [0-9]{1} [0-9]{4} [0-9]{2} [0-9]{2}" placeholder="+31 6 2570 51 41" required><br><br>

        <label for="email">Uw e-mailadres:</label><br>
        <input type="email" id="email" name="email" placeholder="randomguy@nowhere.com" required><br><br>

        <label for="afspraakdatum">Afspraak datum:</label><br>
        <input type="datetime-local" id="afspraakdatum" name="afspraakdatum" required><br><br>

        <label>Soort behandeling:</label><br>
        <input type="checkbox" id="nagelbijt" name="behandeling[]" value="Nagelbijt arrangement (termijnbetaling mogelijk) €180">
        <label for="nagelbijt">Nagelbijt arrangement (termijnbetaling mogelijk) €180</label><br>
        <input type="checkbox" id="luxe_manicure" name="behandeling[]" value="Luxe manicure (massage en handpakking) €30">
        <label for="luxe_manicure">Luxe manicure (massage en handpakking) €30</label><br>
        <input type="checkbox" id="nagelreparatie" name="behandeling[]" value="Nagelreparatie per nagel (in eerste week gratis) €5">
        <label for="nagelreparatie">Nagelreparatie per nagel (in eerste week gratis) €5</label><br><br>

        <input type="hidden" id="verzendingstijd" name="verzendingstijd"><br>

        <input type="submit" value="Sla op">
        <input type="reset" value="Reset">
    </form>
</div>
    <div class="row mt-3">
        <div class="col-3"></div>
        <div class="col-6">
            <a href="<?= URLROOT; ?>/homepages/index">Homepage</a>
        </div>
        <div class="col-3"></div>
    </div>
</div>

<?php require_once APPROOT . '/views/includes/footer.php'; ?>

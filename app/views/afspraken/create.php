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
            <form action="<?= URLROOT; ?>/afspraken/create" method="post">
                <div class="mb-3">
                    <label for="inputBasiskleur1" class="form-label">Basiskleur 1:</label>
                    <input name="basiskleur1" type="text" class="form-control" id="inputBasiskleur1" placeholder="Vul hier de basiskleur 1 in">
                </div>
                <div class="mb-3">
                    <label for="inputBasiskleur2" class="form-label">Basiskleur 2:</label>
                    <input name="basiskleur2" type="text" class="form-control" id="inputBasiskleur2" placeholder="Vul hier de basiskleur 2 in">
                </div>
                <div class="mb-3">
                    <label for="inputBasiskleur3" class="form-label">Basiskleur 3:</label>
                    <input name="basiskleur3" type="text" class="form-control" id="inputBasiskleur3" placeholder="Vul hier de basiskleur 3 in">
                </div>
                <div class="mb-3">
                    <label for="inputBasiskleur4" class="form-label">Basiskleur 4:</label>
                    <input name="basiskleur4" type="text" class="form-control" id="inputBasiskleur4" placeholder="Vul hier de basiskleur 4 in">
                </div>
                <div class="mb-3">
                    <label for="inputTelefoonnummer" class="form-label">Telefoonnummer:</label>
                    <input name="telefoonnummer" type="text" class="form-control" id="inputTelefoonnummer" placeholder="Vul hier het telefoonnummer in">
                </div>
                <div class="mb-3">
                    <label for="inputEmail" class="form-label">Email:</label>
                    <input name="email" type="email" class="form-control" id="inputEmail" placeholder="Vul hier het emailadres in">
                </div>
                <div class="mb-3">
                    <label for="inputAfspraakdatum" class="form-label">Afspraakdatum:</label>
                    <input name="afspraakdatum" type="datetime-local" class="form-control" id="inputAfspraakdatum">
                </div>
                <div class="mb-3">
                    <label for="inputBehandeling" class="form-label">Behandeling:</label>
                    <textarea name="behandeling" class="form-control" id="inputBehandeling" rows="3" placeholder="Vul hier de behandeling in"></textarea>
                </div>

                <div class="d-grid">
                    <button type="submit" class="btn btn-success">Sla op</button>
                </div>
            </form>
        </div>
        <div class="col-3"></div>
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

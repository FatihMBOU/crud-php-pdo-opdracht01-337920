<?php require_once APPROOT . '/views/includes/header.php'; ?>

<div class="container">
    <div class="row">
        <div class="col-12">
            <h3><?= $data['title']; ?></h3>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Basiskleur 1</th>
                        <th>Basiskleur 2</th>
                        <th>Basiskleur 3</th>
                        <th>Basiskleur 4</th>
                        <th>Telefoonnummer</th>
                        <th>Email</th>
                        <th>Afspraakdatum</th>
                        <th>Behandeling</th>
                        <th>Verzendingstijd</th>
                    </tr>
                </thead>
                <tbody>
                    <?= $data['dataRows']; ?>
                </tbody>
            </table>
        </div>
    </div>
    
    <div class="row">
        <div class="col-12">
            <a href="<?= URLROOT; ?>/homepages/index">Homepage</a>
        </div>
    </div>
</div>

<?php require_once APPROOT . '/views/includes/footer.php'; ?>

<?php
class Afspraken extends BaseController
{
    private $afspraakModel;

    public function __construct()
    {
        $this->afspraakModel = $this->model('Afspraak');
    }

    public function index()
    {
        // Haal alle afspraken op
        $afspraken = $this->afspraakModel->getAfspraken();

        // Initialiseer een lege string om de tabelrijen in op te slaan
        $dataRows = "";

        // Loop door elke afspraak en creëer een tabelrij
        foreach ($afspraken as $afspraak) {
            $dataRows .= "<tr>
                            <td>{$afspraak->basiskleur1}</td>
                            <td>{$afspraak->basiskleur2}</td>
                            <td>{$afspraak->basiskleur3}</td>
                            <td>{$afspraak->basiskleur4}</td>
                            <td>{$afspraak->telefoonnummer}</td>
                            <td>{$afspraak->email}</td>
                            <td>{$afspraak->afspraakdatum}</td>
                            <td>{$afspraak->behandeling}</td>
                            <td>{$afspraak->verzendingstijd}</td>           
                        </tr>";
        }

        // Data voor de view
        $data = [
            'title' => 'Afspraken',
            'dataRows' => $dataRows
        ];

        // Laad de view met de gegeven data
        $this->view('afspraken/index', $data);
    }

    /**
     * Toont het formulier voor het aanmaken van een nieuwe afspraak.
     */

    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Roep de createAfspraak-methode aan van het afspraakModel-object om de afspraak op te slaan
            $result = $this->afspraakModel->createAfspraak($_POST);

            if ($result) {
                // Toon een succesmelding als de afspraak succesvol is toegevoegd
                echo '<div class="alert alert-success" role="alert">
                        Uw afspraak is succesvol toegevoegd. U wordt doorgestuurd naar de index-pagina.
                      </div>';

                // Stuur de gebruiker na 3 seconden door naar de index-pagina
                header("Refresh:3; url=" . URLROOT . "/afspraken/index");
            } else {
                // Toon een foutmelding als er een probleem is opgetreden bij het toevoegen van de afspraak
                echo '<div class="alert alert-danger" role="alert">
                        Er is een fout opgetreden bij het toevoegen van de afspraak. Probeer het later opnieuw.
                      </div>';
            }
        }

        // Data voor de view
        $data = [
            'title' => 'Nieuwe afspraak maken'
        ];

        // Laad de view met de gegeven data
        $this->view('afspraken/create', $data);
    }
}
?>

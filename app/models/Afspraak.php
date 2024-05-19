<?php
class Afspraak
{
    private $db;

    public function __construct()
    {
        // Maak een nieuw database object dat verbinding maakt met de MySQL-server
        $this->db = new Database();
    }

    /**
     * Haal alle afspraken op uit de Afspraken-tabel
     */
    public function getAfspraken()
    {
        try {
            // Maak een SQL-query om de gewenste informatie op te halen uit de database
            $sql = 'SELECT id,
                           basiskleur1,
                           basiskleur2,
                           basiskleur3,
                           basiskleur4,
                           telefoonnummer,
                           email,
                           afspraakdatum,
                           behandeling,
                           verzendingstijd
                    FROM afspraak';

            // Bereid de query voor het PDO-object voor
            $this->db->query($sql);

            // Geef de opgehaalde informatie terug aan de controller
            return $this->db->resultSet();
        } catch (PDOException $e) {
            // Behandel de uitzondering hier, bijvoorbeeld loggen of een foutmelding weergeven
            echo 'Er is een fout opgetreden: ' . $e->getMessage();
        }
    }

    /**
     * Voeg een nieuwe afspraak toe aan de Afspraken-tabel
     */
    public function createAfspraak($postData)
    {
        try {
            // Maak een SQL-query om de ingevulde gegevens van het formulier naar de database te schrijven
            $sql = 'INSERT INTO afspraak (basiskleur1,
                                           basiskleur2,
                                           basiskleur3,
                                           basiskleur4,
                                           telefoonnummer,
                                           email,
                                           afspraakdatum,
                                           behandeling,
                                           verzendingstijd)
                    VALUES (:basiskleur1,
                            :basiskleur2,
                            :basiskleur3,
                            :basiskleur4,
                            :telefoonnummer,
                            :email,
                            :afspraakdatum,
                            :behandeling,
                            :verzendingstijd)';

            // Bereid de query voor het PDO-object voor
            $this->db->query($sql);

            // Koppel de waarden uit het formulier aan de parameters in de query
            $this->db->bind(':basiskleur1', $postData['basiskleur1']);
            $this->db->bind(':basiskleur2', $postData['basiskleur2']);
            $this->db->bind(':basiskleur3', $postData['basiskleur3']);
            $this->db->bind(':basiskleur4', $postData['basiskleur4']);
            $this->db->bind(':telefoonnummer', $postData['telefoonnummer']);
            $this->db->bind(':email', $postData['email']);
            $this->db->bind(':afspraakdatum', $postData['afspraakdatum']);
            $this->db->bind(':behandeling', $postData['behandeling']);
            $this->db->bind(':verzendingstijd', date('Y-m-d H:i:s'));
           
            // Voer de query uit zodat de gegevens naar de database worden geschreven
            return $this->db->execute();
        } catch (PDOException $e) {
            // Behandel de uitzondering hier, bijvoorbeeld loggen of een foutmelding weergeven
            echo 'Er is een fout opgetreden: ' . $e->getMessage();
        }
    }
}
?>

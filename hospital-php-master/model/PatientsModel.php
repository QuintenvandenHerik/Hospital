<?php

    function getPatients() {
        $db = openDatabaseConnection();
        $sql_select_all="SELECT * FROM patients INNER JOIN species ON patients.species_id = species.species_id INNER JOIN clients ON patients.client_id = clients.client_id";
        $query = $db->prepare($sql_select_all);
        $query->execute();
        $db = null;

        return $query->fetchAll();

    }

?>
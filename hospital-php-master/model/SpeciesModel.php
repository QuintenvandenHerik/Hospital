<?php 

    function getSpecies() {
        $db = openDatabaseConnection();
        $sql_select_species="SELECT * FROM species";
        $query = $db->prepare($sql_select_species);
        $query->execute();
        $db = null;

        return $query->fetchAll();

    }

?>
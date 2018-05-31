<?php 

    function getSpecies() {
        $db = openDatabaseConnection();
        $sql_select_species="SELECT * FROM species";
        $query = $db->prepare($sql_select_species);
        $query->execute();
        $db = null;

        return $query->fetchAll();

    }

    function createSpecie($data) {
        $specie = $data['specie'];
        $db = openDatabaseConnection();
        $sql_add_post = "INSERT INTO species (species_description) VALUES ('$specie')";
        $query = $db->prepare($sql_add_post);
        $query->execute();
        $db = null;
    }

    function getSpecie($id) {
        $db = openDatabaseConnection();
        $sql_select_all="SELECT * FROM species WHERE species_id = $id";
        $query = $db->prepare($sql_select_all);
        $query->execute();
        $db = null;

        return $query->fetch();
    }

    function editSpecie($data) {
        $id = $data['species_id'];
        $specie = $data['species_description'];
        $db = openDatabaseConnection();
        $sql_edit_post = "UPDATE species SET species_description = '$specie' WHERE species_id = $id";        
        $query = $db->prepare($sql_edit_post);
        $query->execute();
        $db = null;
    }

    function deleteSpecie($id) {
        $db = openDatabaseConnection();
        $sql_delete_id = "DELETE FROM species WHERE species_id = $id";
        $query = $db->prepare($sql_delete_id);
        $query->execute();
        $db = null;
    }
?>
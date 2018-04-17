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
        $person = $data['?'];
        $day = $data['?'];
        $month = $data['?'];
        $year = $data['?'];
        $db = openDatabaseConnection();
        $sql_add_post = "INSERT INTO patients (?, ?, ?, ?) VALUES ('$?', '$?', '$?', '$?')";
        $query = $db->prepare($sql_add_post);
        $query->execute();
        $db = null;

        // TODO: check if the insert worked.
        // if yes, then return true
        // if no, then return false
        RETURN true;
    }

    function getSpecie($id) {
        $db = openDatabaseConnection();
        $sql_select_all="SELECT * FROM patients WHERE id=" . $id . " ORDER BY ?, ?, ?, ?";
        $query = $db->prepare($sql_select_all);
        $query->execute();
        $db = null;

        return $query->fetch();
    }

    function editSpecie($data) {
        $id = $data['id'];
        $person = $data['person'];
        $day = $data['day'];
        $month = $data['month'];
        $year = $data['year'];
        $db = openDatabaseConnection();
        $sql_edit_post = "UPDATE patients SET ? = '$?', ? = $?, ? = $?, ? = $? WHERE id = $id";        
        $query = $db->prepare($sql_edit_post);
        $query->execute();
        $db = null;

        // TODO: check if the insert worked.
        // if yes, then return true
        // if no, then return false
        RETURN true;
    }

    function deleteSpecie($id) {
        $db = openDatabaseConnection();
        $sql_delete_id = "DELETE FROM patients WHERE id= $id";
        $query = $db->prepare($sql_delete_id);
        $query->execute();
        $db = null;
    }
?>
?>
<?php 
	
    function getClients() {
        $db = openDatabaseConnection();
        $sql_select_clients="SELECT * FROM clients";
        $query = $db->prepare($sql_select_clients);
        $query->execute();
        $db = null;

        return $query->fetchAll();

    }
    
?>
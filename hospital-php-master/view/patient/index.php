    <h2>Patiënts</h2>
    <table class="mainTable">
        <thead>
            <tr>
                <th>Name</th>
                <th>Species</th>
                <th>Status</th>
                <th>Client</th>
                <th colspan="2">Action</th>
            </tr>
        </thead>
        <tbody>

            <?php
                foreach($getPatients as $row) {
                    printf("<tr><td>%s</td><td>%s</td><td>%s</td><td>%s %s</td><td class='center'><a href='%s%s/%u'>edit</a></td><td class='center'><a href='%s%s/%u'>delete</a></td></tr>", 
                    $row["patient_name"], $row["species_description"], $row["patient_status"], $row["client_firstname"], $row["client_lastname"], URL, 'edit', $row['patient_id'], URL, 'delete', $row["patient_id"]);
                }
            ?>

        </tbody>
    </table>
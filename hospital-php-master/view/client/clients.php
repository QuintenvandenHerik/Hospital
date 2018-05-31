    <h2>Clients</h2>
    <table class="mainTable">
        <thead>
            <tr>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Phone</th>
                <th>E-mail</th>
                <th colspan="2">Action</th>
            </tr>
        </thead>
        <tbody>

            <?php
                foreach($getClients as $row) {
                    printf("<tr><td>%s</td><td>%s</td><td>0%s</td><td>%s</td><td class='center'><a href='%s%s/%u'>edit</a></td><td class='center'><a href='%s%s/%u'>delete</a></td></tr>", 
                    $row["client_firstname"], $row["client_lastname"], $row["client_phone"], $row["client_email"], URL, 'clients/edit', $row['client_id'], URL, 'clients/delete', $row["client_id"]);
                }
            ?>

        </tbody>
    </table>
        <p><a href="<?= URL ?>clients/create">Create</a></p>
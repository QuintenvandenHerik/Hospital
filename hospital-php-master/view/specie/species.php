    <h2>Species</h2>
    <table class="mainTable">
        <thead>
            <tr>
                <th>#</th>
                <th>Description</th>
                <th colspan="2">Action</th>
            </tr>
        </thead>
        <tbody>

            <?php
                foreach($getSpecies as $row) {
                    printf("<tr><td>%s</td><td>%s</td><td class='center'><a href='%s%s/%u'>edit</a></td><td class='center'><a href='%s%s/%u'>delete</a></td></tr>", 
                    $row["species_id"], $row["species_description"], URL, 'edit', $row['species_id'], URL, 'delete', $row["species_id"]);
                }
            ?>

        </tbody>
    </table>
        <p><a href="<?= URL ?>species/create">Create</a></p>
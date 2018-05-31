    <h1>New patient</h1>
    <form action="<?= URL ?>patients/createAction" method="post">
    	<select name="species_id">
		<?php
			foreach($species as $row) {
				printf("<option value='%s'>%s</option>", 
                $row['species_id'], $row["species_description"]);
            }
		?>
  		</select>
  		<select name="client_id">
		<?php
			foreach($clients as $row) {
				printf("<option value='%s'>%s %s | 0%s | %s</option>", 
                $row['client_id'], $row["client_firstname"], $row["client_lastname"], $row["client_phone"], $row["client_email"]);
            }
		?>
  		</select>
        <input type="text" min="1" max="50" required="" name="name" placeholder="name">
        <input type="text" min="1" max="255" required="" name="status" placeholder="status">
		<label>Gender:</label>
        <input required type="radio" name="gender" value="Male">Male 
        <input required type="radio" name="gender" value="Female">Female
        <input type="submit" name="submit" value="Add patient">
    </form>
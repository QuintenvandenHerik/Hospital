    <form action="<?= URL ?>species/editAction" method="post">
    	<label>Specie:</label>
        <input type="text" value="<?php echo $species_description; ?>" name="species_description" required="" placeholder="name">
        <input type="hidden" name="species_id" value="<?php echo $species_id; ?>">
        <input type="submit" name="submit" value="Edit specie">
    </form>
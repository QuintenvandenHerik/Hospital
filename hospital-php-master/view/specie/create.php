    <h1>New Specie</h1>
    <form action="<?= URL ?>species/createAction" method="post">
        <input type="text" min="1" max="50" required="" name="specie" placeholder="specie">
        <input type="submit" name="submit" value="Add specie">
    </form>
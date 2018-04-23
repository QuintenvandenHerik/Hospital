    <form action="<?= URL ?>patient/createAction" method="post">
        <input type="text" min="1" max="255" required="" name="name" placeholder="name">
        <input type="text" min="1" max="255" required="" name="status" placeholder="status">
        <input type="submit" name="submit" value="Add patient">
    </form>
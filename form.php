<form action="Controller/schoolController.php" method="post">
    <input type="text" name="city_user" value="<?= isset($school['city']) ? $school['city'] : '' ?>">
    <input type="number" name="capacity_user" value="<?= isset($school['capacity']) ? $school['capacity'] : '' ?>">
    <input type="hidden" name="id" value="<?= isset($_GET['id']) ? $_GET['id'] : '' ?>">
    <button name="<?= isset($_GET['id']) ? 'update' : 'create' ?>">Go</button>
</form>

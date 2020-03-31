<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <p>
        <?= isset($_GET['success']) ? $_GET['success'] : '' ?>
    </p>
    <?php require_once('form.php') ?>
    <?php
        require_once('connec.php');
        require_once ('Model/schoolModel.php');
        $schools = getAllSchools();
    ?>
    <table>
        <thead>
            <tr>
                <th>
                    Ville
                </th>
                <th>
                    Capacity
                </th>
                <th>
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($schools as $school) : ?>
            <tr>
                <td>
                    <a href="edit.php?id=<?= $school['id'] ?>">
                        <?= $school['city'] ?>
                    </a>
                </td>
                <td>
                    <?= $school['capacity'] ?>
                </td>
                <td>
                    <form action="Controller/schoolController.php" method="post">
                        <input type="hidden" name="id" value="<?= $school['id'] ?>">
                        <button name="delete">
                            Supprimer
                        </button>
                    </form>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>

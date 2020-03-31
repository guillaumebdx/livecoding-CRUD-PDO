<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit</title>
</head>
<body>

    <?php
        require_once('connec.php');
        require_once ('Model/schoolModel.php');
        $school = findSchoolById($_GET['id']);
        require_once('form.php')
    ?>
</body>
</html>

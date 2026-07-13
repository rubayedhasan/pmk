<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
</head>

<body>
    <p>Admin Panel</p>

    <div style="width: 1500px; height: 1500px; border: 1px solid green; display:flex; gap:24px;">

        <div style="width: 500px; height: 1500px; border: 1px solid red;">
            <a href="?sample_1=true">sample-1</a>
            <a href="?sample_2=true">sample-2</a>
        </div>
        <div style="width: 1000px; height: 1500px; border: 1px solid blue;">

            <?php
            if (isset($_GET["sample_1"])) {
                include('../includes/sapmle-1.php');
            } else if (isset($_GET["sample_2"])) {
                include('../includes/sample-2.php');
            } else {
                echo "login";
            }

            ?>
        </div>
    </div>
</body>

</html>
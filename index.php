<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PMK | Home</title>
    <!-- Linked Fav Icon  -->
    <link rel="shortcut icon" href="./assets/logo/main-logo.png" type="image/x-icon">

    <!-- linked bootstrap stylesheet  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <!-- Linked my custom stylesheet  -->
    <link rel="stylesheet" href="./styles/shinny-effect.css">
    <link rel="stylesheet" href="./styles/button.css">
    <link rel="stylesheet" href="./styles/main.css">
</head>


<body>
    <!-- Linked section:: Navar/Header  -->
    <?php include_once("./navbar.php") ?>

    <?php include_once("./banner.php") ?>

    <!-- section::Main  -->
    <main>
        <!-- Linked section:: About  -->
        <?php include_once("./about.php"); ?>

        <!-- Linked section:: Executive Message  -->
        <?php include_once("./executive.php") ?>

        <!-- Linked section:: PMK At a Glance  -->
        <?php include_once("./glance.php") ?>


        <div style="margin:50px 0">
            <h3>Remaining sections (In Progress)</h3>
            <p>founder information</p>
            <p>project (as linked clickable card)</p>
            <p>Our impact or pmk at a glance (count down)</p>
            <p>our Story (Gallery & videos)</p>
            <p>Project Work Update section (categorizes recent project update blog type )</p>
            <p>latest news section (blog type)</p>
            <p>partner & supports </p>
        </div>
    </main>


    <!-- Linked section:: Footer  -->
    <?php include_once("./footer.php") ?>

    <!-- Linked font awesome script  -->
    <script src="https://kit.fontawesome.com/ff87b718c4.js" crossorigin="anonymous"></script>


    <!-- Linked Bootstrap script  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

    <!-- Linked my custom script  -->
    <script src="./js/button.js"></script>
    <script src="./js/main.js"></script>
</body>

</html>
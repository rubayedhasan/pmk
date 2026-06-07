<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PMK Latest news </title>

    <!-- Linked custom stylesheet  -->
    <link rel="stylesheet" href="./styles/recent-activities.css">
</head>

<body>
    <main>
        <!-- section:: Project Update  -->
        <section id="project-update">
            <div class="container-width">
                <hgroup class="section-container">
                    <h3 class="section-title">
                        Projects in Action
                    </h3>
                </hgroup>

                <!--project update container  -->
                <?php include_once("./includes/project-update.php"); ?>

            </div>
        </section>

        <!-- section:: Latest News  -->
        <section id="latest-news">
            <div class="container-width">
                <hgroup class="section-container">
                    <h3 class="section-title">
                        Recent Activities & Updates
                    </h3>
                </hgroup>

                <!-- recent activity container  -->
                <?php include_once("./includes/latest-news.php") ?>

            </div>
        </section>
    </main>
</body>

</html>
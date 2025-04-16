<?php include 'partials/main.php' ?>

<head>
    <?php $title = "Starter Page";
    include "partials/title-meta.php"; ?>

    <?php include 'partials/head-css.php' ?>
</head>

<body>

    <div class="wrapper">

        <?php include 'partials/sidenav.php' ?>

        <!-- Start Page Content here -->
        <div class="page-content">

            <?php include 'partials/topbar.php' ?>

            <main>

                <div class="container py-6">

                    <?php $subtitle = "Menu";
                    $title = "Starter Page";
                    include "partials/page-title.php" ?>

                </div>

            </main>

        </div>
        <!-- End Page content -->

    </div>

    <?php include 'partials/footer-scripts.php' ?>

</body>

</html>
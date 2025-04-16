<?php include 'partials/main.php' ?>

<head>
    <?php $title = "Skeleton";
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

                    <?php $subtitle = "Components";
                    $title = "Skeleton";
                    include "partials/page-title.php" ?>

                    <div class="grid 2xl:grid-cols-2 grid-cols-1 gap-6">
                        <div class="card">
                            <div class="p-6">
                                <h4 class="card-title mb-4">Example</h4>

                                <h3 class="h-4 bg-gray-200 rounded-md w-2/5"></h3>
                                <ul class="mt-5 space-y-3">
                                    <li class="w-full h-4 bg-gray-200 rounded-md"></li>
                                    <li class="w-full h-4 bg-gray-200 rounded-md"></li>
                                    <li class="w-full h-4 bg-gray-200 rounded-md"></li>
                                    <li class="w-full h-4 bg-gray-200 rounded-md"></li>
                                </ul>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Complex combination</h4>
                            </div>

                            <div class="p-6">
                                <h3 class="h-4 bg-gray-200 rounded-md mb-3" style="width: 40%;"></h3>

                                <div class="flex">
                                    <div class="flex-shrink-0">
                                        <span class="w-12 h-12 block bg-gray-200 rounded-full"></span>
                                    </div>

                                    <div class="ms-4 mt-2 w-full">
                                        <h3 class="h-4 bg-gray-200 rounded-md" style="width: 40%;"></h3>
                                        <ul class="mt-5 space-y-3">
                                            <li class="w-full h-4 bg-gray-200 rounded-md"></li>
                                            <li class="w-full h-4 bg-gray-200 rounded-md"></li>
                                            <li class="w-full h-4 bg-gray-200 rounded-md"></li>
                                            <li class="w-full h-4 bg-gray-200 rounded-md"></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Active animation</h4>
                            </div>

                            <div class="p-6">
                                <div class="flex animate-pulse">
                                    <div class="flex-shrink-0">
                                        <span class="w-12 h-12 block bg-gray-200 rounded-full"></span>
                                    </div>

                                    <div class="ms-4 mt-2 w-full">
                                        <h3 class="h-4 bg-gray-200 rounded-md" style="width: 40%;"></h3>
                                        <ul class="mt-5 space-y-3">
                                            <li class="w-full h-4 bg-gray-200 rounded-md"></li>
                                            <li class="w-full h-4 bg-gray-200 rounded-md"></li>
                                            <li class="w-full h-4 bg-gray-200 rounded-md"></li>
                                            <li class="w-full h-4 bg-gray-200 rounded-md"></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </main>

        </div>
        <!-- End Page content -->

    </div>

    <?php include 'partials/footer-scripts.php' ?>

</body>

</html>
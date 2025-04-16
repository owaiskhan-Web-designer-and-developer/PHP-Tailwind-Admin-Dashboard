<?php include 'partials/main.php' ?>

<head>
    <?php $title = "Tooltip";
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
                    $title = "Tooltip";
                    include "partials/page-title.php" ?>

                    <div class="grid 2xl:grid-cols-2 grid-cols-1 gap-6">
                        <div class="card">
                            <div class="p-6">
                                <h4 class="card-title mb-4">Placement Tooltips</h4>

                                <div class="flex flex-wrap gap-2">
                                    <div class="hs-tooltip">
                                        <button class="btn bg-primary text-white hs-tooltip-toggle"
                                            data-fc-placement="bottom">
                                            Tooltip Top
                                        </button>
                                        <span
                                            class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 py-1 px-2 bg-gray-900 text-xs font-medium text-white rounded shadow-sm"
                                            role="tooltip">
                                            Tooltip on top
                                        </span>
                                    </div>

                                    <div class="hs-tooltip  [--placement:right]">
                                        <button class="btn bg-primary text-white hs-tooltip-toggle">
                                            Tooltip Right
                                        </button>
                                        <div class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 py-1 px-2 bg-gray-900 text-xs font-medium text-white rounded shadow-sm"
                                            role="tooltip">
                                            Right Tooltip
                                        </div>
                                    </div>

                                    <div class="hs-tooltip  [--placement:left]">
                                        <button class="btn bg-primary text-white hs-tooltip-toggle">
                                            Tooltip Left
                                        </button>
                                        <div class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 py-1 px-2 bg-gray-900 text-xs font-medium text-white rounded shadow-sm"
                                            role="tooltip">
                                            Left Tooltip
                                        </div>
                                    </div>

                                    <div class="hs-tooltip [--placement:bottom]">
                                        <button class="btn bg-primary text-white hs-tooltip-toggle">
                                            Tooltip bottom
                                        </button>
                                        <div class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 py-1 px-2 bg-gray-900 text-xs font-medium text-white rounded shadow-sm"
                                            role="tooltip">
                                            Bottom Tooltip
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </main>

        </div> <!-- End Page content -->

    </div>

    <?php include 'partials/footer-scripts.php' ?>

</body>

</html>
<?php include 'partials/main.php' ?>

<head>
    <?php $title = "Vector Maps";
    include "partials/title-meta.php"; ?>

    <!-- plugin css -->
    <link href="assets/libs/jsvectormap/css/jsvectormap.min.css" rel="stylesheet" type="text/css">

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

                    <?php $subtitle = "Maps";
                    $title = "Vector";
                    include "partials/page-title.php" ?>

                    <div class="grid lg:grid-cols-2 grid-cols-1 gap-6">

                        <div class="lg:col-span-2">
                            <div class="card">
                                <div class="p-6">
                                    <h4 class="card-title mb-4">World Vector Map</h4>

                                    <div class="mb-3">
                                        <div id="world-map-markers" style="height: 360px"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="p-6">
                                <h4 class="card-title mb-4">Canada Vector Map</h4>

                                <div class="mb-3">
                                    <div id="canada-vector-map" style="height: 360px"></div>
                                </div>
                            </div>
                        </div>


                        <div class="card">
                            <div class="p-6">
                                <h4 class="card-title mb-4">Russia Vector Map</h4>

                                <div class="mb-3">
                                    <div id="russia-vector-map" style="height: 360px"></div>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="p-6">
                                <h4 class="card-title mb-4">Italy Vector Map</h4>

                                <div class="mb-3">
                                    <div id="italy-vector-map" style="height: 360px"></div>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="p-6">
                                <h4 class="card-title mb-4">Iraq Vector Map</h4>

                                <div class="mb-3">
                                    <div id="iraq-vector-map" style="height: 360px"></div>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="p-6">
                                <h4 class="card-title mb-4">Spain Vector Map</h4>

                                <div class="mb-3">
                                    <div id="spain-vector-map" style="height: 360px"></div>
                                </div>
                            </div>
                        </div> <!-- end card body -->

                    </div><!-- end grid-->

                </div>

            </main>

        </div>
        <!-- End Page content -->

    </div>

    <?php include 'partials/footer-scripts.php' ?>

    <!-- Vector Map Js -->
    <script src="assets/libs/jsvectormap/js/jsvectormap.min.js"></script>
    <script src="assets/libs/jsvectormap/maps/canada.js"></script>
    <script src="assets/libs/jsvectormap/maps/iraq.js"></script>
    <script src="assets/libs/jsvectormap/maps/italy.js"></script>
    <script src="assets/libs/jsvectormap/maps/russia.js"></script>
    <script src="assets/libs/jsvectormap/maps/spain.js"></script>
    <script src="assets/libs/jsvectormap/maps/us-aea-en.js"></script>
    <script src="assets/libs/jsvectormap/maps/us-lcc-en.js"></script>
    <script src="assets/libs/jsvectormap/maps/us-mill-en.js"></script>
    <script src="assets/libs/jsvectormap/maps/world-merc.js"></script>
    <script src="assets/libs/jsvectormap/maps/world.js"></script>

    <!-- Vector Map Demo js-->
    <script src="assets/js/pages/maps-vector.js"></script>

</body>

</html>
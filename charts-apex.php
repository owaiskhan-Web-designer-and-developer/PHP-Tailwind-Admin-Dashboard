<?php include 'partials/main.php' ?>

<head>
    <?php $title = "Apex Chart";
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

                    <?php $subtitle = "Charts";
                    $title = "Apex Chart";
                    include "partials/page-title.php" ?>

                    <div class="grid lg:grid-cols-2 gap-6">
                        <div class="card">
                            <div class="p-6">
                                <h4 class="card-title mb-4">Line with Data Labels</h4>

                                <div id="line_chart_datalabel" class="apex-charts" dir="ltr"></div>
                            </div>
                        </div><!--end card-->

                        <div class="card">
                            <div class="p-6">
                                <h4 class="card-title mb-4">Dashed Line</h4>

                                <div id="line_chart_dashed" class="apex-charts" dir="ltr"></div>
                            </div>
                        </div><!--end card-->

                        <div class="card">
                            <div class="p-6">
                                <h4 class="card-title mb-4">Spline Area</h4>

                                <div id="spline_area" class="apex-charts" dir="ltr"></div>
                            </div>
                        </div><!--end card-->

                        <div class="card">
                            <div class="p-6">
                                <h4 class="card-title mb-4">Column Chart</h4>

                                <div id="column_chart" class="apex-charts" dir="ltr"></div>
                            </div>
                        </div><!--end card-->

                        <div class="card">
                            <div class="p-6">
                                <h4 class="card-title mb-4">Column with Data Labels</h4>

                                <div id="column_chart_datalabel" class="apex-charts" dir="ltr"></div>
                            </div>
                        </div><!--end card-->

                        <div class="card">
                            <div class="p-6">
                                <h4 class="card-title mb-4">Bar Chart</h4>

                                <div id="bar_chart" class="apex-charts" dir="ltr"></div>
                            </div>
                        </div><!--end card-->

                        <div class="card">
                            <div class="p-6">
                                <h4 class="card-title mb-4">Line, Column & Area Chart</h4>

                                <div id="mixed_chart" class="apex-charts" dir="ltr"></div>
                            </div>
                        </div><!--end card-->

                        <div class="card">
                            <div class="p-6">
                                <h4 class="card-title mb-4">Radial Chart</h4>

                                <div id="radial_chart" class="apex-charts" dir="ltr"></div>
                            </div>
                        </div><!--end card-->


                        <div class="card">
                            <div class="p-6">
                                <h4 class="card-title mb-4">Pie Chart</h4>

                                <div id="pie_chart" class="apex-charts" dir="ltr"></div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="p-6">
                                <h4 class="card-title mb-4">Donut Chart</h4>

                                <div id="donut_chart" class="apex-charts" dir="ltr"></div>
                            </div>
                        </div>
                    </div>

                </div>

            </main>

        </div>
        <!-- End Page content -->

    </div>

    <!-- Apex Chart Plugin Js -->
    <script src="assets/libs/apexcharts/apexcharts.min.js"></script>

    <!-- Apex Chart Demo Js -->
    <script src="assets/js/pages/charts-apex.js"></script>

    <?php include 'partials/footer-scripts.php' ?>

</body>

</html>
<?php include 'partials/main.php' ?>

<head>
    <?php $title = "Editor";
    include "partials/title-meta.php"; ?>

    <!-- quill css -->
    <link href="assets/libs/quill/quill.core.css" rel="stylesheet" type="text/css">
    <link href="assets/libs/quill/quill.bubble.css" rel="stylesheet" type="text/css">
    <link href="assets/libs/quill/quill.snow.css" rel="stylesheet" type="text/css">

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

                    <?php $subtitle = "Apps";
                    $title = "Editor";
                    include "partials/page-title.php" ?>

                    <div class="flex flex-col gap-6">
                        <div class="card">
                            <div class="card-header">
                                <div class="flex justify-between items-center">
                                    <h4 class="card-title">Snow Editor</h4>
                                </div>
                            </div>

                            <div class="p-6">
                                <!-- Quill Editors -->
                                <div id="snow-editor" style="height: 300px;">
                                    <h3><span class="ql-size-large">Hello World!</span></h3>
                                    <p><br></p>
                                    <h3>This is a simple editable area.</h3>
                                    <p><br></p>
                                    <ul>
                                        <li>Select a text to reveal the toolbar.</li>
                                        <li>Edit rich document on-the-fly, so elastic!</li>
                                    </ul>
                                    <p><br></p>
                                    <p>End of simple area</p>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header">
                                <div class="flex justify-between items-center">
                                    <h4 class="card-title">Bubble Editor</h4>

                                </div>
                            </div>

                            <div class="p-6">
                                <!-- Bubble Editors -->
                                <div id="bubble-editor" style="height: 300px;">
                                    <h3><span class="ql-size-large">Hello World!</span></h3>
                                    <p><br></p>
                                    <h3>This is a simple editable area.</h3>
                                    <p><br></p>
                                    <ul>
                                        <li>Select a text to reveal the toolbar.</li>
                                        <li>Edit rich document on-the-fly, so elastic!</li>
                                    </ul>
                                    <p><br></p>
                                    <p>End of simple area</p>
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

    <!-- quill js -->
    <script src="assets/libs/quill/quill.min.js"></script>

    <script src="assets/js/pages/form-editor.js"></script>

</body>

</html>
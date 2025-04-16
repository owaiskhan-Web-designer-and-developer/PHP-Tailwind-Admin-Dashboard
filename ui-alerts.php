<?php include 'partials/main.php' ?>

<head>
    <?php $title = "Alerts";
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
                    $title = "Alerts";
                    include "partials/page-title.php" ?>

                    <div class="grid 2xl:grid-cols-2 grid-cols-1 gap-6">
                        <div class="card">
                            <div class="p-6">
                                <h4 class="card-title mb-4">Basic Alert</h4>

                                <div class="space-y-4">
                                    <div class="bg-primary text-sm text-white rounded-md p-4" role="alert">
                                        <span class="font-bold">Primary</span> alert! You should check in on some of
                                        those fields below.
                                    </div>
                                    <div class="bg-secondary text-sm text-white rounded-md p-4" role="alert">
                                        <span class="font-bold">Secondary</span> alert! You should check in on some of
                                        those fields below.
                                    </div>
                                    <div class="bg-info text-sm text-white rounded-md p-4" role="alert">
                                        <span class="font-bold">Info</span> alert! You should check in on some of those
                                        fields below.
                                    </div>
                                    <div class="bg-success text-sm text-white rounded-md p-4" role="alert">
                                        <span class="font-bold">Success</span> alert! You should check in on some of
                                        those fields below.
                                    </div>
                                    <div class="bg-danger text-sm text-white rounded-md p-4" role="alert">
                                        <span class="font-bold">Danger</span> alert! You should check in on some of
                                        those fields below.
                                    </div>
                                    <div class="bg-warning  text-sm text-white rounded-md p-4" role="alert">
                                        <span class="font-bold">Warning</span> alert! You should check in on some of
                                        those fields below.
                                    </div>
                                    <div class="bg-dark text-sm text-white rounded-md p-4" role="alert">
                                        <span class="font-bold">Dark</span> alert! You should check in on some of those
                                        fields below.
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="p-6">
                                <h4 class="card-title mb-4">Soft color variants Alert</h4>

                                <div class="space-y-4">
                                    <div class="bg-primary/25 text-primary text-sm rounded-md p-4" role="alert">
                                        <span class="font-bold">Primary</span> alert! You should check in on some of
                                        those fields below.
                                    </div>
                                    <div class="bg-secondary/25 text-secondary text-sm rounded-md p-4" role="alert">
                                        <span class="font-bold">Secondary</span> alert! You should check in on some of
                                        those fields below.
                                    </div>
                                    <div class="bg-info/25 text-info text-sm rounded-md p-4" role="alert">
                                        <span class="font-bold">Info</span> alert! You should check in on some of those
                                        fields below.
                                    </div>
                                    <div class="bg-success/25 text-success text-sm rounded-md p-4" role="alert">
                                        <span class="font-bold">Success</span> alert! You should check in on some of
                                        those fields below.
                                    </div>
                                    <div class="bg-danger/25 text-danger text-sm rounded-md p-4" role="alert">
                                        <span class="font-bold">Danger</span> alert! You should check in on some of
                                        those fields below.
                                    </div>
                                    <div class="bg-warning/25 text-warning  text-sm rounded-md p-4" role="alert">
                                        <span class="font-bold">Warning</span> alert! You should check in on some of
                                        those fields below.
                                    </div>
                                    <div class="bg-dark/25 text-default-900 text-sm rounded-md p-4" role="alert">
                                        <span class="font-bold">Dark</span> alert! You should check in on some of those
                                        fields below.
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="p-6">
                                <h4 class="card-title mb-4">Dismiss button</h4>

                                <div id="dismiss-alert"
                                    class="hs-removing:translate-x-5 hs-removing:opacity-0 transition duration-300 bg-teal-50 border border-teal-200 rounded-md p-4"
                                    role="alert">
                                    <div class="flex items-center gap-3">
                                        <div class="flex-shrink-0">
                                            <i class="i-tabler-circle-check] text-xl"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="text-sm text-teal-800 font-medium">
                                                File has been successfully uploaded.
                                            </div>
                                        </div>
                                        <button data-hs-remove-element="#dismiss-alert" type="button" id="dismiss-test"
                                            class="ms-auto h-8 w-8 rounded-full bg-gray-200 flex justify-center items-center">
                                            <i class="i-tabler-x text-xl"></i>
                                        </button>
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
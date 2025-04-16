<?php include 'partials/main.php' ?>

<head>
    <?php $title = "Dashboard";
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
                    $title = "Progress";
                    include "partials/page-title.php" ?>

                    <div class="grid 2xl:grid-cols-2 grid-cols-1 gap-6">
                        <div class="card">
                            <div class="card-header">
                                <div class="flex justify-between items-center">
                                    <h4 class="card-title mb-4">Basic Examples</h4>

                                </div>
                            </div>
                            <div class="p-6">
                                <div class="flex w-full h-1.5 bg-gray-200 rounded-full overflow-hidden ">
                                    <div class="flex flex-col justify-center overflow-hidden bg-primary"
                                        role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header">
                                <div class="flex justify-between items-center">
                                    <h4 class="card-title mb-4">Labels Examples</h4>

                                </div>
                            </div>
                            <div class="p-6">
                                <div class="flex w-full h-4 bg-gray-200 rounded-full overflow-hidden">
                                    <div class="flex flex-col justify-center overflow-hidden bg-primary text-xs text-white text-center"
                                        role="progressbar" style="width: 57%" aria-valuenow="57" aria-valuemin="0"
                                        aria-valuemax="100">57%</div>
                                </div>
                            </div>
                        </div>


                        <div class="card">
                            <div class="card-header">
                                <div class="flex justify-between items-center">
                                    <h4 class="card-title mb-4">Height</h4>

                                </div>
                            </div>
                            <div class="p-6">
                                <div class="flex flex-col gap-2">
                                    <div class="flex w-full h-1.5 bg-gray-200 rounded-full overflow-hidden">
                                        <div class="flex flex-col justify-center overflow-hidden bg-primary"
                                            role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                    </div>
                                    <div class="flex w-full h-4 bg-gray-200 rounded-full overflow-hidden">
                                        <div class="flex flex-col justify-center overflow-hidden bg-primary"
                                            role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                    </div>
                                    <div class="flex w-full h-6 bg-gray-200 rounded-full overflow-hidden">
                                        <div class="flex flex-col justify-center overflow-hidden bg-primary"
                                            role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="card">
                            <div class="card-header">
                                <div class="flex justify-between items-center">
                                    <h4 class="card-title mb-4">Vertical progress</h4>

                                </div>
                            </div>
                            <div class="p-6">
                                <div class="flex space-x-8">
                                    <div
                                        class="flex flex-col flex-nowrap justify-end w-2 h-32 bg-gray-200 rounded-full overflow-hidden">
                                        <div class="bg-primary overflow-hidden" role="progressbar" style="height: 25%"
                                            aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div
                                        class="flex flex-col flex-nowrap justify-end w-2 h-32 bg-gray-200 rounded-full overflow-hidden">
                                        <div class="bg-primary overflow-hidden" role="progressbar" style="height: 50%"
                                            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div
                                        class="flex flex-col flex-nowrap justify-end w-2 h-32 bg-gray-200 rounded-full overflow-hidden">
                                        <div class="bg-primary overflow-hidden" role="progressbar" style="height: 75%"
                                            aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div
                                        class="flex flex-col flex-nowrap justify-end w-2 h-32 bg-gray-200 rounded-full overflow-hidden">
                                        <div class="bg-primary overflow-hidden" role="progressbar" style="height: 90%"
                                            aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div
                                        class="flex flex-col flex-nowrap justify-end w-2 h-32 bg-gray-200 rounded-full overflow-hidden">
                                        <div class="bg-primary overflow-hidden" role="progressbar" style="height: 17%"
                                            aria-valuenow="17" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="card">
                            <div class="card-header">
                                <div class="flex justify-between items-center">
                                    <h4 class="card-title mb-4">Multiple bars</h4>

                                </div>
                            </div>
                            <div class="p-6">
                                <div class="flex w-full h-1.5 bg-gray-200 rounded-full overflow-hidden">
                                    <div class="flex flex-col justify-center overflow-hidden bg-sky-400"
                                        role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                    <div class="flex flex-col justify-center overflow-hidden bg-sky-700"
                                        role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                    <div class="flex flex-col justify-center overflow-hidden bg-gray-800"
                                        role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                    <div class="flex flex-col justify-center overflow-hidden bg-orange-600"
                                        role="progressbar" style="width: 5%" aria-valuenow="5" aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header">
                                <div class="flex justify-between items-center">
                                    <h4 class="card-title mb-4">Four directions Popovers</h4>

                                </div>
                            </div>
                            <div class="p-6">
                                <div class="flex flex-col items-center justify-center gap-3">
                                    <div class="w-full h-4 bg-black/10 rounded-full">
                                        <div class="bg-indigo-600 h-4 rounded-full w-3/12 animate-strip"
                                            style="background-image:linear-gradient(45deg,hsla(0,0%,100%,.15) 25%,transparent 0,transparent 50%,hsla(0,0%,100%,.15) 0,hsla(0,0%,100%,.15) 75%,transparent 0,transparent);background-size:1rem 1rem">
                                        </div>
                                    </div>
                                    <div class="w-full h-4 bg-black/10 rounded-full">
                                        <div class="bg-purple-600 h-4 rounded-full w-4/12 animate-strip"
                                            style="background-image:linear-gradient(45deg,hsla(0,0%,100%,.15) 25%,transparent 0,transparent 50%,hsla(0,0%,100%,.15) 0,hsla(0,0%,100%,.15) 75%,transparent 0,transparent);background-size:1rem 1rem">
                                        </div>
                                    </div>
                                    <div class="w-full h-4 bg-black/10 rounded-full">
                                        <div class="bg-blue-600 h-4 rounded-full w-5/12 animate-strip"
                                            style="background-image:linear-gradient(45deg,hsla(0,0%,100%,.15) 25%,transparent 0,transparent 50%,hsla(0,0%,100%,.15) 0,hsla(0,0%,100%,.15) 75%,transparent 0,transparent);background-size:1rem 1rem">
                                        </div>
                                    </div>
                                    <div class="w-full h-4 bg-black/10 rounded-full">
                                        <div class="bg-green-600 h-4 rounded-full w-6/12 animate-strip"
                                            style="background-image:linear-gradient(45deg,hsla(0,0%,100%,.15) 25%,transparent 0,transparent 50%,hsla(0,0%,100%,.15) 0,hsla(0,0%,100%,.15) 75%,transparent 0,transparent);background-size:1rem 1rem">
                                        </div>
                                    </div>
                                    <div class="w-full h-4 bg-black/10 rounded-full">
                                        <div class="bg-yellow-600 h-4 rounded-full w-7/12 animate-strip"
                                            style="background-image:linear-gradient(45deg,hsla(0,0%,100%,.15) 25%,transparent 0,transparent 50%,hsla(0,0%,100%,.15) 0,hsla(0,0%,100%,.15) 75%,transparent 0,transparent);background-size:1rem 1rem">
                                        </div>
                                    </div>
                                    <div class="w-full h-4 bg-black/10 rounded-full">
                                        <div class="bg-red-600 h-4 rounded-full w-8/12 animate-strip"
                                            style="background-image:linear-gradient(45deg,hsla(0,0%,100%,.15) 25%,transparent 0,transparent 50%,hsla(0,0%,100%,.15) 0,hsla(0,0%,100%,.15) 75%,transparent 0,transparent);background-size:1rem 1rem">
                                        </div>
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
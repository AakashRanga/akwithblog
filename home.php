<?php include('header.php'); ?>
<style>
    .small-font {
        font-size: 14px;
    }

    .smaller-font {
        font-size: 12px;
    }

    /* Ensure images are responsive */
    .card-img-top,
    .img-fluid {
        width: 100%;
        height: auto;
    }

    @media (max-width: 767px) {
        .desktop-layout {
            display: none;
        }

        .mobile-layout {
            display: block !important;
        }

        .card-view .col {
            margin-top: 0;
        }

        .card-view .col:first-child {
            margin-top: 20px;
        }

        .card-body.pb-zero {
            padding-bottom: 0;
        }

    }
</style>

<body>
    <p style="margin-top:100px;"></p>

    <div class="container overflow-hidden">
        <div class="row gy-5">
            <!-- Main content -->
            <div class="col-md-8 order-1 order-md-1 card-view">
                <ul class="nav nav-tabs title-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" style="background-color:black !important;" href="#">Recent Post</a>
                    </li>
                </ul>

                <div class="row row-cols-1 row-cols-md-2 g-4">
                    <div class="col">
                        <div class="card removecardborder">
                            <div class="desktop-layout">
                                <div class="row">
                                    <div class="col-md-12">
                                        <img src="images/access.jpg" class="card-img-top img-fluid" alt="...">

                                    </div>
                                    <div class="col-md-12">
                                        <div class="card-body cardtext">
                                            <h5 class="card-title">Build A Google Gemini Chatbot with HTML CSS and JavaScript</h5>
                                            <p class="card-text"><small class="text-muted">August 04, 2024</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mobile-layout d-none">
                                <div class="row g-0">
                                    <div class="col-4 p-0">
                                        <div class="card-body px-0 pb-0">
                                            <img src="images/access.jpg" class="img-fluid rounded-start" alt="...">
                                        </div>
                                    </div>
                                    <div class="col-8 p-0">
                                        <div class="card-body pb-0">
                                            <h5 class="card-title small-font">Build A Google Gemini Chatbot with HTML CSS and JavaScript</h5>
                                            <p class="card-text"><small class="text-muted">August 04, 2024</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card removecardborder">
                            <div class="desktop-layout">
                                <img src="images/access.jpg" class="card-img-top img-fluid" alt="...">
                                <div class="card-body cardtext">
                                    <h5 class="card-title">Build A Google Gemini Chatbot with HTML CSS and JavaScript</h5>
                                    <p class="card-text"><small class="text-muted">August 04, 2024</small></p>
                                </div>
                            </div>
                            <div class="mobile-layout d-none">
                                <div class="row g-0">
                                    <div class="col-4 p-0">
                                        <div class="card-body px-0 pb-0">
                                            <img src="images/access.jpg" class="img-fluid rounded-start" alt="...">
                                        </div>
                                    </div>
                                    <div class="col-8 p-0">
                                        <div class="card-body pb-0">
                                            <h5 class="card-title small-font">Build A Google Gemini Chatbot with HTML CSS and JavaScript</h5>
                                            <p class="card-text"><small class="text-muted">August 04, 2024</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card removecardborder">
                            <div class="desktop-layout">
                                <img src="images/access.jpg" class="card-img-top img-fluid" alt="...">
                                <div class="card-body cardtext">
                                    <h5 class="card-title">Build A Google Gemini Chatbot with HTML CSS and JavaScript</h5>
                                    <p class="card-text"><small class="text-muted">August 04, 2024</small></p>
                                </div>
                            </div>
                            <div class="mobile-layout d-none">
                                <div class="row g-0">
                                    <div class="col-4 p-0">
                                        <div class="card-body px-0 pb-0">
                                            <img src="images/access.jpg" class="img-fluid rounded-start" alt="...">
                                        </div>
                                    </div>
                                    <div class="col-8 p-0">
                                        <div class="card-body pb-0">
                                            <h5 class="card-title small-font">Build A Google Gemini Chatbot with HTML CSS and JavaScript</h5>
                                            <p class="card-text"><small class="text-muted">August 04, 2024</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card removecardborder">
                            <div class="desktop-layout">
                                <img src="images/access.jpg" class="card-img-top img-fluid" alt="...">
                                <div class="card-body cardtext">
                                    <h5 class="card-title">Build A Google Gemini Chatbot with HTML CSS and JavaScript</h5>
                                    <p class="card-text"><small class="text-muted">August 04, 2024</small></p>
                                </div>
                            </div>
                            <div class="mobile-layout d-none">
                                <div class="row g-0">
                                    <div class="col-4 p-0">
                                        <div class="card-body px-0 pb-0">
                                            <img src="images/access.jpg" class="img-fluid rounded-start" alt="...">
                                        </div>
                                    </div>
                                    <div class="col-8 p-0">
                                        <div class="card-body">
                                            <h5 class="card-title small-font">Build A Google Gemini Chatbot with HTML CSS and JavaScript</h5>
                                            <p class="card-text"><small class="text-muted">August 04, 2024</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sidebar -->
            <div class="col-md-4 order-2 order-md-2 card-view">
                <ul class="nav nav-tabs title-nav mb-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" style="background-color:black !important;" href="#">Technology</a>
                    </li>
                </ul>

                <div class="card mb-3 removecardborder" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-4 col-md-4 p-0">
                            <div class="card-body px-0 pb-0">
                                <img src="images/access.jpg" class="img-fluid rounded-start" alt="...">
                            </div>
                        </div>
                        <div class="col-8 col-md-8 p-0">
                            <div class="card-body pb-zero">
                                <h5 class="card-title small-font">30+ Free Login & Registration Form Templates in HTML & CSS</h5>
                                <p class="card-text"><small class="text-muted">August 04, 2024</small></p>
                            </div>
                        </div>
                    </div>
                    <div class="row g-0">
                        <div class="col-4 col-md-4 p-0">
                            <div class="card-body px-0 pb-0">
                                <img src="images/access.jpg" class="img-fluid rounded-start" alt="...">
                            </div>
                        </div>
                        <div class="col-8 col-md-8 p-0">
                            <div class="card-body">
                                <h5 class="card-title small-font">30+ Free Login & Registration Form Templates in HTML & CSS</h5>
                                <p class="card-text"><small class="text-muted">August 04, 2024</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer>The End...</footer>
</body>
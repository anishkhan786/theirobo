<?php $__env->startSection('content'); ?>
<nav class="navbar navbar-main navbar-expand-lg  px-0 mx-4 shadow-none border-radius-xl z-index-sticky " id="navbarBlur" data-scroll="false">
    <div class="container-fluid py-1 px-3">
        <?php echo $__env->make('layouts.navbars.auth.topnav', ['title' => 'Admin Dashboard'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="sidenav-toggler sidenav-toggler-inner d-xl-block d-none ">
            <a href="javascript:;" class="nav-link p-0">
                <div class="sidenav-toggler-inner">
                    <i class="sidenav-toggler-line bg-white"></i>
                    <i class="sidenav-toggler-line bg-white"></i>
                    <i class="sidenav-toggler-line bg-white"></i>
                </div>
            </a>
        </div>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
            <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                <div class="input-group">
                    <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
                    <input type="text" class="form-control" placeholder="Type here...">
                </div>
            </div>
            <ul class="navbar-nav  justify-content-end">
                <li class="nav-item d-flex align-items-center">
                    <?php echo $__env->make('auth.logout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </li>
                <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                    <a href="javascript:;" class="nav-link text-white p-0" id="iconNavbarSidenav">
                        <div class="sidenav-toggler-inner">
                            <i class="sidenav-toggler-line bg-white"></i>
                            <i class="sidenav-toggler-line bg-white"></i>
                            <i class="sidenav-toggler-line bg-white"></i>
                        </div>
                    </a>
                </li>
               
                
            </ul>
        </div>
    </div>
</nav>
<!-- End Navbar -->
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-xl-7">
            <div class="card">
                <div class="card-header d-flex pb-0 p-3">
                    <div class="text-center" style="display: flex; justify-content: center;
    width: 100%;">
                        <h6 class="my-auto">The Able Mind</h6>
                    </div>

                    <div class="nav-wrapper text-center ms-auto w-50">
                        <ul class="nav nav-pills nav-fill p-1" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link mb-0 px-0 py-1 active" data-bs-toggle="tab" href="#cam1" role="tab" aria-controls="cam1" aria-selected="true">
                                    User
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href="#cam2" role="tab" aria-controls="cam2" aria-selected="false">
                                Counsellor
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href="#cam3" role="tab" aria-controls="cam3" aria-selected="false">
                                    Chats
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="dropdown pt-2">
                        <a href="javascript:;" class="text-secondary ps-4" id="dropdownCam" data-bs-toggle="dropdown" aria-expanded="false">
                            <!-- <i class="fas fa-ellipsis-v"></i> -->
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end me-sm-n4 px-2 py-3" aria-labelledby="dropdownCam">
                            <li><a class="dropdown-item border-radius-md" href="javascript:;">Pause</a></li>
                            <li><a class="dropdown-item border-radius-md" href="javascript:;">Stop</a></li>
                            <li><a class="dropdown-item border-radius-md" href="javascript:;">Schedule</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item border-radius-md text-danger" href="javascript:;">Remove</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card-body p-3 mt-2">
                    <div class="tab-content " id="v-pills-tabContent">
                        <div class="tab-pane fade show position-relative active height-400 border-radius-lg" id="cam1" role="tabpanel" aria-labelledby="cam1">
                            <div class="card z-index-2">
                                <div class="card-header p-3 pb-0">
                                    <h6>User chart</h6>
                                </div>
                                <div class="card-body p-3">
                                    <div class="chart">
                                        <canvas id="bar-chart" class="chart-canvas" height="300"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade position-relative height-400 border-radius-lg" id="cam2" role="tabpanel" aria-labelledby="cam2">
                            <div class="card z-index-2">
                                <div class="card-header p-3 pb-0">
                                    <h6>Counsellor chart</h6>
                                </div>
                                <div class="card-body p-3">
                                    <div class="chart">
                                        <canvas id="mixed-chart" class="chart-canvas" height="300"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade position-relative height-400 border-radius-lg" id="cam3" role="tabpanel" aria-labelledby="cam3">
                        <div class="card z-index-2">
                    <div class="card-header p-3 pb-0">
                        <h6>Chats Chart</h6>
                    </div>
                    <div class="card-body p-3">
                        <div class="chart">
                            <canvas id="line-chart-gradient" class="chart-canvas" height="300"></canvas>
                        </div>
                    </div>
                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-5 ms-auto mt-xl-0 mt-4">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-8 my-auto">
                                    <div class="numbers">
                                        <p class="text-sm mb-0 text-capitalize font-weight-bold opacity-7"><?php echo e(date('l')); ?>

                                        </p>
                                        <h5 class="font-weight-bolder mb-0">
                                            <?php echo e(date("jS \of F Y ")); ?>

                                        </h5>
                                    </div>
                                </div>
                                <div class="col-4 text-end">

                                    <a class="nav-link" href="<?php echo e(route('all-clear-cache')); ?>" title="Clear-Cache">
                                        <i class="fa fa-refresh" aria-hidden="true" style="color: #4e9372;"></i>
                                    </a>
                                    <!-- <button onclick="startFCM()"  class="btn btn-danger btn-flat" title="Device Token Refresh"> Device Token </button> -->
                                    <h5 class="mb-0 text-end me-1">Clear-Cache</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body text-center">
                            <h1 class="text-gradient text-primary"><span id="status1" countto="11">10</span> <span class="text-lg ms-n2"><i class="fa fa-user me-sm-1 tam-icon-text" aria-hidden="true" style="color: #f4645f; font-size: large; font-weight: 500 "></i></span></h1>
                            <h6 class="mb-0 font-weight-bolder">New User Registrations</h6>
                            <p class="opacity-8 mb-0 text-sm">Today</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mt-md-0 mt-4">
                    <div class="card">
                        <div class="card-body text-center">
                            <h1 class="text-gradient text-primary"> <span id="status2" countto="05">05</span> <span class="text-lg ms-n1"> <i class="fa fa-comment-dots me-sm-1 tam-icon-text" aria-hidden="true" style="color: #f4645f; font-size: large; font-weight: 500 "></i></span></h1>
                            <h6 class="mb-0 font-weight-bolder">Feel Better in 15</h6>
                            <p class="opacity-8 mb-0 text-sm">Today</p><br>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body text-center">
                            <h1 class="text-gradient text-primary"><span id="status3" countto="30">30</span> <span class="text-lg ms-n2"> <i class="fa fa-user me-sm-1 tam-icon-text" aria-hidden="true" style="color: #f4645f; font-size: large; font-weight: 500 "></i></span></h1>
                            <h6 class="mb-0 font-weight-bolder">Active Counsellors</h6>
                            <p class="opacity-8 mb-0 text-sm">Today</p><br>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mt-md-0 mt-4">
                    <div class="card">
                        <div class="card-body text-center">
                            <h1 class="text-gradient text-primary"><span id="status4" countto="15">15</span> <span class="text-lg ms-n2"><i class="fa fa-comment-dots me-sm-1 tam-icon-text" aria-hidden="true" style="color: #f4645f; font-size: large; font-weight: 500 "></i></span></h1>
                            <h6 class="mb-0 font-weight-bolder">Therapy Over Text</h6>
                            <p class="opacity-8 mb-0 text-sm">Today</p><br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php echo $__env->make('layouts.footers.auth.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('js'); ?>
<script src="/assets/js/plugins/countup.min.js"></script>
<script src="/assets/js/plugins/chartjs.min.js"></script>
<script src="/assets/js/plugins/round-slider.min.js"></script>
<script src="../../assets/js/plugins/chartjs.min.js"></script>
<script>
    // Rounded slider
    const setValue = function(value, active) {
        document.querySelectorAll("round-slider").forEach(function(el) {
            if (el.value === undefined) return;
            el.value = value;
        });
        const span = document.querySelector("#value");
        span.innerHTML = value;
        if (active)
            span.style.color = 'red';
        else
            span.style.color = 'black';
    }

    document.querySelectorAll("round-slider").forEach(function(el) {
        el.addEventListener('value-changed', function(ev) {
            if (ev.detail.value !== undefined)
                setValue(ev.detail.value, false);
            else if (ev.detail.low !== undefined)
                setLow(ev.detail.low, false);
            else if (ev.detail.high !== undefined)
                setHigh(ev.detail.high, false);
        });

        el.addEventListener('value-changing', function(ev) {
            if (ev.detail.value !== undefined)
                setValue(ev.detail.value, true);
            else if (ev.detail.low !== undefined)
                setLow(ev.detail.low, true);
            else if (ev.detail.high !== undefined)
                setHigh(ev.detail.high, true);
        });
    });

    // Count To
    if (document.getElementById('status1')) {
        const countUp = new CountUp('status1', document.getElementById("status1").getAttribute("countTo"));
        if (!countUp.error) {
            countUp.start();
        } else {
            console.error(countUp.error);
        }
    }
    if (document.getElementById('status2')) {
        const countUp = new CountUp('status2', document.getElementById("status2").getAttribute("countTo"));
        if (!countUp.error) {
            countUp.start();
        } else {
            console.error(countUp.error);
        }
    }
    if (document.getElementById('status3')) {
        const countUp = new CountUp('status3', document.getElementById("status3").getAttribute("countTo"));
        if (!countUp.error) {
            countUp.start();
        } else {
            console.error(countUp.error);
        }
    }
    if (document.getElementById('status4')) {
        const countUp = new CountUp('status4', document.getElementById("status4").getAttribute("countTo"));
        if (!countUp.error) {
            countUp.start();
        } else {
            console.error(countUp.error);
        }
    }
    if (document.getElementById('status5')) {
        const countUp = new CountUp('status5', document.getElementById("status5").getAttribute("countTo"));
        if (!countUp.error) {
            countUp.start();
        } else {
            console.error(countUp.error);
        }
    }
    if (document.getElementById('status6')) {
        const countUp = new CountUp('status6', document.getElementById("status6").getAttribute("countTo"));
        if (!countUp.error) {
            countUp.start();
        } else {
            console.error(countUp.error);
        }
    }

    // Chart Doughnut Consumption by room
</script>
<script>
    var ctx5 = document.getElementById("bar-chart").getContext("2d");

    new Chart(ctx5, {
        type: "bar",
        data: {
            labels: ['16-20', '21-25', '26-30', '31-36', '36-42', '42+'],
            datasets: [{
                label: "Sales by age",
                weight: 5,
                borderWidth: 0,
                borderRadius: 4,
                backgroundColor: '#275642',
                data: [15, 20, 12, 60, 20, 15],
                fill: false,
                maxBarThickness: 35
            }],
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: false,
                }
            },
            scales: {
                y: {
                    grid: {
                        drawBorder: false,
                        display: true,
                        drawOnChartArea: true,
                        drawTicks: false,
                        borderDash: [5, 5]
                    },
                    ticks: {
                        display: true,
                        padding: 10,
                        color: '#9ca2b7'
                    }
                },
                x: {
                    grid: {
                        drawBorder: false,
                        display: false,
                        drawOnChartArea: true,
                        drawTicks: true,
                    },
                    ticks: {
                        display: true,
                        color: '#9ca2b7',
                        padding: 10
                    }
                },
            },
        },
    });
    // Mixed chart
    var ctx7 = document.getElementById("mixed-chart").getContext("2d");

    new Chart(ctx7, {
        data: {
            labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
            datasets: [{
                    type: "bar",
                    label: "Organic Search",
                    weight: 5,
                    tension: 0.4,
                    borderWidth: 0,
                    pointBackgroundColor: "#275642",
                    borderColor: "#275642",
                    backgroundColor: '#275642',
                    borderRadius: 4,
                    borderSkipped: false,
                    data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
                    maxBarThickness: 10,
                },
                {
                    type: "line",
                    label: "Referral",
                    tension: 0.4,
                    borderWidth: 0,
                    pointRadius: 0,
                    pointBackgroundColor: "#FFD28C",
                    borderColor: "#FFD28C",
                    borderWidth: 3,
                    // backgroundColor: gradientStroke1,
                    data: [30, 90, 40, 140, 290, 290, 340, 230, 400],
                    fill: true,
                }
            ],
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: false,
                }
            },
            interaction: {
                intersect: false,
                mode: 'index',
            },
            scales: {
                y: {
                    grid: {
                        drawBorder: false,
                        display: true,
                        drawOnChartArea: true,
                        drawTicks: false,
                        borderDash: [5, 5]
                    },
                    ticks: {
                        display: true,
                        padding: 10,
                        color: '#b2b9bf',
                        font: {
                            size: 11,
                            family: "Open Sans",
                            style: 'normal',
                            lineHeight: 2
                        },
                    }
                },
                x: {
                    grid: {
                        drawBorder: false,
                        display: true,
                        drawOnChartArea: true,
                        drawTicks: true,
                        borderDash: [5, 5]
                    },
                    ticks: {
                        display: true,
                        color: '#b2b9bf',
                        padding: 10,
                        font: {
                            size: 11,
                            family: "Open Sans",
                            style: 'normal',
                            lineHeight: 2
                        },
                    }
                },
            },
        },
    });
     // Line chart with gradient
     var ctx2 = document.getElementById("line-chart-gradient").getContext("2d");

var gradientStroke1 = ctx2.createLinearGradient(0, 230, 0, 50);

gradientStroke1.addColorStop(1, 'rgba(94, 114, 228, 0.2)');
gradientStroke1.addColorStop(0.2, 'rgba(72,72,176,0.0)');
gradientStroke1.addColorStop(0, 'rgba(94, 114, 228,0)'); //purple colors

var gradientStroke2 = ctx2.createLinearGradient(0, 230, 0, 50);

gradientStroke2.addColorStop(1, 'rgba(20,23,39,0.2)');
gradientStroke2.addColorStop(0.2, 'rgba(72,72,176,0.0)');
gradientStroke2.addColorStop(0, 'rgba(20,23,39,0)'); //purple colors

new Chart(ctx2, {
    type: "line",
    data: {
        labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        datasets: [{
                label: "Mobile apps",
                tension: 0.4,
                borderWidth: 0,
                pointRadius: 0,
                borderColor: "#FFD28C",
                borderWidth: 3,
                // backgroundColor: gradientStroke1,
                fill: true,
                data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
                maxBarThickness: 6

            },
            {
                label: "Websites",
                tension: 0.4,
                borderWidth: 0,
                pointRadius: 0,
                borderColor: "#275642",
                borderWidth: 3,
                backgroundColor: gradientStroke2,
                fill: true,
                data: [30, 90, 40, 140, 290, 290, 340, 230, 400],
                maxBarThickness: 6
            },
        ],
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
            legend: {
                display: false,
            }
        },
        interaction: {
            intersect: false,
            mode: 'index',
        },
        scales: {
            y: {
                grid: {
                    drawBorder: false,
                    display: true,
                    drawOnChartArea: true,
                    drawTicks: false,
                    borderDash: [5, 5]
                },
                ticks: {
                    display: true,
                    padding: 10,
                    color: '#b2b9bf',
                    font: {
                        size: 11,
                        family: "Open Sans",
                        style: 'normal',
                        lineHeight: 2
                    },
                }
            },
            x: {
                grid: {
                    drawBorder: false,
                    display: false,
                    drawOnChartArea: false,
                    drawTicks: false,
                    borderDash: [5, 5]
                },
                ticks: {
                    display: true,
                    color: '#b2b9bf',
                    padding: 10,
                    font: {
                        size: 11,
                        family: "Open Sans",
                        style: 'normal',
                        lineHeight: 2
                    },
                }
            },
        },
    },
});
</script>

<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\anish\Downloads\app\resources\views/dashboards/admin-dashboard.blade.php ENDPATH**/ ?>
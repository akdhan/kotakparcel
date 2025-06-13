<!DOCTYPE html>
<html lang="en">
<!-- [Head] start -->

<head>
  <title>Kotak Parcel Cerdas untuk Efisiensi keamanan Pengiriman barang </title>
  <!-- [Meta] -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Mantis is made using Bootstrap 5 design framework. Download the free admin template & use it for your project.">
  <meta name="keywords" content="Mantis, Dashboard UI Kit, Bootstrap 5, Admin Template, Admin Dashboard, CRM, CMS, Bootstrap Admin Template">
  <meta name="author" content="CodedThemes">

  <!-- [Favicon] icon -->
  <link rel="icon" href="../assets/images/favicon.svg" type="image/x-icon"> <!-- [Google Font] Family -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;400;500;600;700&display=swap" id="main-font-link">
<!-- [Tabler Icons] https://tablericons.com -->
<link rel="stylesheet" href="../assets/fonts/tabler-icons.min.css" >
<!-- [Feather Icons] https://feathericons.com -->
<link rel="stylesheet" href="../assets/fonts/feather.css" >
<!-- [Font Awesome Icons] https://fontawesome.com/icons -->
<link rel="stylesheet" href="../assets/fonts/fontawesome.css" >
<!-- [Material Icons] https://fonts.google.com/icons -->
<link rel="stylesheet" href="../assets/fonts/material.css" >
<!-- [Template CSS Files] -->
<link rel="stylesheet" href="../assets/css/style.css" id="main-style-link" >
<link rel="stylesheet" href="../assets/css/style-preset.css" >

<style> 
.btn-buka-kotak {
    background: linear-gradient(135deg, #ff6a00, #ffbb00);
    color: white;
    font-weight: bold;
    font-size: 1.2rem;
    border: none;
    padding: 15px 30px;
    border-radius: 50px;
    box-shadow: 0 8px 20px rgba(255, 165, 0, 0.4);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    position: relative;
    overflow: hidden;
}

.btn-buka-kotak:hover {
    transform: scale(1.05);
    box-shadow: 0 12px 25px rgba(255, 140, 0, 0.6);
}

.btn-buka-kotak::before {
    content: "✨";
    position: absolute;
    left: -30px;
    top: 50%;
    transform: translateY(-50%);
    font-size: 2rem;
    animation: moveSparkle 1.5s infinite linear;
}

@keyframes moveSparkle {
    0% { left: -30px; opacity: 0; }
    50% { left: 50%; opacity: 1; }
    100% { left: 110%; opacity: 0; }
}
</style>

</head>
<!-- [Head] end -->
<!-- [Body] Start -->

<body data-pc-preset="preset-1" data-pc-direction="ltr" data-pc-theme="light">
  <!-- [ Pre-loader ] start -->
<div class="loader-bg">
  <div class="loader-track">
    <div class="loader-fill"></div>
  </div>
</div>
<!-- [ Pre-loader ] End -->
 <!-- [ Sidebar Menu ] start -->
<nav class="pc-sidebar">
  <div class="navbar-wrapper">
    <div class="m-header">
      <a href="/" class="b-brand text-primary"><h3 class="mb-1" >📦 Kotak Parcel </h3></a>
    </div>
    <div class="navbar-content">
      <ul class="pc-navbar">
        <li class="pc-item">
          <a href="/" class="pc-link">
            <span class="pc-micon">
              <svg class="pc-icon">
                <use xlink:href="#dashboard"></use>
              </svg>
            </span>
            <span class="pc-mtext">Dashboard</span>
          </a>
        </li>
        <li class="pc-item">
          <a href="blynk" class="pc-link">
            <span class="pc-micon">
                <svg class="pc-icon">
                <use xlink:href="#dashboard"></use>
              </svg>
            </span>              
            <span class="pc-mtext">Dashboard Blynk</span>
          </a>
        </li>
        <li class="pc-item">
          <a href="pakets" class="pc-link">
            <span class="pc-micon">
                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-truck-delivery"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M7 17m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" /><path d="M17 17m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" /><path d="M5 17h-2v-4m-1 -8h11v12m-4 0h6m4 0h2v-6h-8m0 -5h5l3 5" /><path d="M3 9l4 0" /></svg>
              </span>              
            <span class="pc-mtext">Pesanan Aktif</span>
          </a>
        </li>
        <li class="pc-item">
          <a href="history" class="pc-link">
            <span class="pc-micon">
                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-shopping-cart-copy"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 19a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" /><path d="M11.5 17h-5.5v-14h-2" /><path d="M6 5l14 1l-1 7h-13" /><path d="M15 19l2 2l4 -4" /></svg>
            </span>
            <span class="pc-mtext">Pesanan Selesai</span>
          </a>
        </li>
        <li class="pc-item">
          <a href="transaksis" class="pc-link">
            <span class="pc-micon">
                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-shopping-cart"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M6 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" /><path d="M17 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" /><path d="M17 17h-11v-14h-2" /><path d="M6 5l14 1l-1 7h-13" /></svg>
            </span>
            <span class="pc-mtext">Transaksi Keseluruhan</span>
          </a>
        </li>
        <li class="pc-item">
            <a href="/pakets/create" class="pc-link">
              <span class="pc-micon">
                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-shopping-cart-plus"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 19a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" /><path d="M12.5 17h-6.5v-14h-2" /><path d="M6 5l14 1l-.86 6.017m-2.64 .983h-10.5" /><path d="M16 19h6" /><path d="M19 16v6" /></svg>
              </span>
              <span class="pc-mtext">Tambah Paket</span>
            </a>
          </li>
          <li class="pc-item pc-hasmenu">
            <a href="#!" class="pc-link">
              <span class="pc-micon">
                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-package-export"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 21l-8 -4.5v-9l8 -4.5l8 4.5v4.5" /><path d="M12 12l8 -4.5" /><path d="M12 12v9" /><path d="M12 12l-8 -4.5" /><path d="M15 18h7" /><path d="M19 15l3 3l-3 3" /></svg>
              </span>
              <span class="pc-mtext" data-i18n="Tracking Paket">Tracking Paket</span>
              <span class="pc-arrow"><i data-feather="chevron-right"></i></span>
            </a>
            <ul class="pc-submenu">
              <li class="pc-item"><a class="pc-link" href="https://jne.co.id/tracking-package" target="_blank" rel="noopener noreferrer" data-i18n="JNE">JNE</a></li>
              <li class="pc-item"><a class="pc-link" href="https://jet.co.id/track" target="_blank" rel="noopener noreferrer" data-i18n="JNT">JNT</a></li>
              <li class="pc-item"><a class="pc-link" href="https://tiki.id/id/track" target="_blank" rel="noopener noreferrer" data-i18n="TIKI">TIKI</a></li>
              <li class="pc-item"><a class="pc-link" href="https://www.posindonesia.co.id/id/tracking" target="_blank" rel="noopener noreferrer" data-i18n="POS">POS</a></li>
              <li class="pc-item"><a class="pc-link" href="https://spx.co.id/track" target="_blank" rel="noopener noreferrer" data-i18n="Shopee">Shopee</a></li>
              <li class="pc-item"><a class="pc-link" href="https://express.grab.com/id" target="_blank" rel="noopener noreferrer" data-i18n="Grab">Grab</a></li>
            </ul>            
          </li>
        {{-- <li class="pc-item pc-caption">
          <label data-i18n="Widget">Other</label>
          <i class="pc-micon">
            <svg class="pc-icon">
              <use xlink:href="#line-chart"></use>
            </svg>
          </i>
        </li> --}}
      </ul>
    </div>
  </div>
</nav>
<!-- [ Sidebar Menu ] end --> <!-- [ Header Topbar ] start -->
<header class="pc-header">
  <div class="header-wrapper"> <!-- [Mobile Media Block] start -->
<div class="me-auto pc-mob-drp">
  <ul class="list-unstyled">
    <!-- ======= Menu collapse Icon ===== -->
    <li class="pc-h-item pc-sidebar-collapse">
      <a href="#" class="pc-head-link ms-0" id="sidebar-hide">
        <i class="ti ti-menu-2"></i>
      </a>
    </li>
    <li class="pc-h-item pc-sidebar-popup">
      <a href="#" class="pc-head-link ms-0" id="mobile-collapse">
        <i class="ti ti-menu-2"></i>
      </a>
    </li>
    <li class="dropdown pc-h-item d-inline-flex d-md-none">
      <a
        class="pc-head-link dropdown-toggle arrow-none m-0"
        data-bs-toggle="dropdown"
        href="#"
        role="button"
        aria-haspopup="false"
        aria-expanded="false"
      >
        <i class="ti ti-search"></i>
      </a>
      <div class="dropdown-menu pc-h-dropdown drp-search">
        <form class="px-3">
          <div class="form-group mb-0 d-flex align-items-center">
            <i data-feather="search"></i>
            <input type="search" class="form-control border-0 shadow-none" placeholder="Search here. . .">
          </div>
        </form>
      </div>
    </li>
    <li class="pc-h-item d-none d-md-inline-flex">
      <form class="header-search">
        <i data-feather="search" class="icon-search"></i>
        <input type="search" class="form-control" placeholder="Search here. . .">
      </form>
    </li>
  </ul>
</div>
<!-- [Mobile Media Block end] -->
<div class="ms-auto">
  <ul class="list-unstyled">
    <li class="dropdown pc-h-item">
      <a
      class="pc-head-link dropdown-toggle arrow-none me-0"
      data-bs-toggle="dropdown"
      href="#"
      role="button"
      aria-haspopup="false"
      aria-expanded="false"
    >
      <i>
        <svg class="pc-icon"><use xlink:href="#mail"></use></svg>
      </i>
    </a>
      <div class="dropdown-menu dropdown-notification dropdown-menu-end pc-h-dropdown">
        <div class="dropdown-header d-flex align-items-center justify-content-between">
          <h5 class="m-0">Message</h5>
          <a href="#!" class="pc-head-link bg-transparent"><i class="ti ti-x text-danger"></i></a>
        </div>
        <div class="dropdown-divider"></div>
        <div class="dropdown-header px-0 text-wrap header-notification-scroll position-relative" style="max-height: calc(100vh - 215px)">
          <div class="list-group list-group-flush w-100">
            <a class="list-group-item list-group-item-action">
              <div class="d-flex">
                <div class="flex-grow-1 ms-1">
                  <span class="float-end text-muted">3:00 AM</span>
                  <p class="text-body mb-1">Terjadi percobaan pengambilan kotak</p>
                  <span class="text-muted">23 April 2025</span>
                </div>
              </div>
            </a>
            <a class="list-group-item list-group-item-action">
              <div class="d-flex">
                <div class="flex-grow-1 ms-1">
                  <span class="float-end text-muted">6:00 PM</span>
                  <p class="text-body mb-1">Ada paket yang datang, silahkan cek kotak</p>
                  <span class="text-muted">23 Maret 2025</span>
                </div>
              </div>
            </a>
            <a class="list-group-item list-group-item-action">
              <div class="d-flex">
                <div class="flex-grow-1 ms-1">
                  <span class="float-end text-muted">2:45 PM</span>
                  <p class="text-body mb-1">Ada paket yang datang, silahkan cek kotak</b></p>
                  <span class="text-muted">25 Februari 2025</span>
                </div>
              </div>
            </a>
            <a class="list-group-item list-group-item-action">
              <div class="d-flex">
                <div class="flex-grow-1 ms-1">
                  <span class="float-end text-muted">11:10 PM</span>
                  <p class="text-body mb-1">Terjadi percobaan pengambilan kotak</b></p>
                  <span class="text-muted">20 Februari 2025</span>
                </div>
              </div>
            </a>
          </div>
        </div>
        <div class="dropdown-divider"></div>
      </div>
    </li>
    <li class="dropdown pc-h-item header-user-profile">
      <a
        class="pc-head-link dropdown-toggle arrow-none me-0"
        data-bs-toggle="dropdown"
        href="#"
        role="button"
        aria-haspopup="false"
        data-bs-auto-close="outside"
        aria-expanded="false"
      >
        <img src="../assets/images/user/avatar-2.jpg" alt="user-image" class="user-avtar">
        <span>{{ Auth::user()->name }}</span>
      </a>
      <div class="dropdown-menu dropdown-user-profile dropdown-menu-end pc-h-dropdown">
        <div class="dropdown-header">
          <div class="d-flex mb-1">
            <div class="flex-shrink-0">
              <img src="../assets/images/user/avatar-2.jpg" alt="user-image" class="user-avtar wid-35">
            </div>
            <div class="flex-grow-1 ms-3">
              <h6 class="mb-1">{{ Auth::user()->name }}</h6>
              <span>Pemilik Rumah</span>
            </div>
            <a href="#" class="pc-head-link bg-transparent" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
              <i class="ti ti-power text-danger"></i>
          </a>
          
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
          </form>
          </div>
        </div>
        <ul class="nav drp-tabs nav-fill nav-tabs" id="mydrpTab" role="tablist">
          <li class="nav-item" role="presentation">
            <button
              class="nav-link active"
              id="drp-t1"
              data-bs-toggle="tab"
              data-bs-target="#drp-tab-1"
              type="button"
              role="tab"
              aria-controls="drp-tab-1"
              aria-selected="true"
              ><i class="ti ti-user"></i> Profile</button>
          </li>
          <li class="nav-item" role="presentation">
            <button
              class="nav-link"
              id="drp-t2"
              data-bs-toggle="tab"
              data-bs-target="#drp-tab-2"
              type="button"
              role="tab"
              aria-controls="drp-tab-2"
              aria-selected="false"
              ><i class="ti ti-settings"></i> Setting</button
            >
          </li>
        </ul>
        <div class="tab-content" id="mysrpTabContent">
          <div class="tab-pane fade show active" id="drp-tab-1" role="tabpanel" aria-labelledby="drp-t1" tabindex="0">
            <a href="#!" class="dropdown-item">
              <i class="ti ti-edit-circle"></i>
              <span>Edit Profile</span>
            </a>
            <a href="#!" class="dropdown-item">
              <i class="ti ti-user"></i>
              <span>View Profile</span>
            </a>
            <a href="#!" class="dropdown-item">
              <i class="ti ti-clipboard-list"></i>
              <span>Social Profile</span>
            </a>
            <a href="#!" class="dropdown-item">
              <i class="ti ti-wallet"></i>
              <span>Billing</span>
            </a>
            <a href="#" class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
              <i class="ti ti-power"></i>
              <span>Logout</span>
            </a>
            
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
            </form>            
          </div>
          <div class="tab-pane fade" id="drp-tab-2" role="tabpanel" aria-labelledby="drp-t2" tabindex="0">
            <a href="#!" class="dropdown-item">
              <i class="ti ti-help"></i>
              <span>Support</span>
            </a>
            <a href="#!" class="dropdown-item">
              <i class="ti ti-user"></i>
              <span>Account Settings</span>
            </a>
            <a href="#!" class="dropdown-item">
              <i class="ti ti-lock"></i>
              <span>Privacy Center</span>
            </a>
            <a href="#!" class="dropdown-item">
              <i class="ti ti-messages"></i>
              <span>Feedback</span>
            </a>
            <a href="#!" class="dropdown-item">
              <i class="ti ti-list"></i>
              <span>History</span>
            </a>
          </div>
        </div>
      </div>
    </li>
  </ul>
</div>
 </div>
</header>
<!-- [ Header ] end -->



  <!-- [ Main Content ] start -->
  <div class="pc-container">
    <div class="pc-content">
      <!-- [ breadcrumb ] start -->
      <div class="page-header">
        <div class="page-block">
          <div class="row align-items-center">
            <div class="col-md-12">
              <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                {{-- <li class="breadcrumb-item"><a href="/">Dashboard</a></li> --}}
              </ul>
            </div>
            <div class="col-md-12">
              <div class="page-header-title">
                <h2 class="mb-0">Dashboard</h2>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- [ breadcrumb ] end -->

      <!-- [ Main Content ] start -->
      <div class="row">
        <!-- [ sample-page ] start -->
        <div class="col-md-6 col-xl-3">
          <div class="card alert alert-success">
            <div class="card-body">
              <h4 class="mb-2 f-w-400 text-muted">Paket Aktif</h4>
              <h3 class="mb-3">{{ $jumlahPaket }}<span class="badge bg-light-primary border border-primary"></h3>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-xl-3">
          <div class="card alert alert-warning">
            <div class="card-body">
              <h4 class="mb-2 f-w-400 text-muted">Paket Selesai</h4>
              <h3 class="mb-3">{{ $jumlahHistory }} <span class="badge bg-light-success border border-success"></span></h3>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-xl-3">
          <div class="card alert alert-primary">
            <div class="card-body">
              <h4 class="mb-2 f-w-400 text-muted">Total Paket</h4>
              <h3 class="mb-3">{{ $totalTransaksi }}<span class="badge bg-light-warning border border-warning"></span></h3>
            </div>
          </div>
        </div>
        {{-- <div class="col-md-6 col-xl-3">
          <div class="card">
            <div class="card-body">
              <h6 class="mb-2 f-w-400 text-muted">Total Sales</h6>
              <h4 class="mb-3">$35,078 <span class="badge bg-light-danger border border-danger"><i
                    class="ti ti-trending-down"></i> 27.4%</span></h4>
              <p class="mb-0 text-muted text-sm">You made an extra <span class="text-danger">$20,395</span> this year
              </p>
            </div>
          </div>
        </div> --}}
        
<div class="col-md-12 col-xl-10">
  <div class="d-flex align-items-center justify-content-between mb-3">
    <h3 class="mb-0">Paket</h3>
  </div>
  <div class="card">
    <div class="card-body">
      <canvas id="monthlyChart" height="100"></canvas>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const monthLabels = @json($monthLabels);
    const paketSelesai = @json($monthHistory);
    const paketBerjalan = @json($monthPaket).map((total, index) => total - paketSelesai[index]);

    const ctx = document.getElementById('monthlyChart').getContext('2d');

    const gradientBerjalan = ctx.createLinearGradient(0, 0, 0, 400);
    gradientBerjalan.addColorStop(0, 'rgba(75, 205, 75, 0.5)');
    gradientBerjalan.addColorStop(1, 'rgba(75, 205, 75, 0)');

    const gradientSelesai = ctx.createLinearGradient(0, 0, 0, 400);
    gradientSelesai.addColorStop(0, 'rgba(255, 205, 86, 0.5)');
    gradientSelesai.addColorStop(1, 'rgba(255, 205, 86, 0)');

    const monthlyChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: monthLabels,
            datasets: [
                {
                    label: 'Paket Aktif',
                    data: paketBerjalan,
                    fill: true,
                    backgroundColor: gradientBerjalan,
                    borderColor: 'rgba(50, 205, 50, 1)',
                    tension: 0.4,
                    pointRadius: 5,
                    pointHoverRadius: 7,
                    borderWidth: 2
                },
                {
                    label: 'Paket Selesai',
                    data: paketSelesai,
                    fill: true,
                    backgroundColor: gradientSelesai,
                    borderColor: 'rgba(255, 205, 86, 1)',
                    tension: 0.4,
                    pointRadius: 5,
                    pointHoverRadius: 7,
                    borderWidth: 2
                }
            ]
        },
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true,
                    ticks: {
                        stepSize: 1,
                        callback: function(value) {
                            return Number.isInteger(value) ? value : '';
                        }
                    },
                    title: {
                        display: true,
                        text: 'Jumlah Paket'
                    }
                },
                x: {
                    title: {
                        display: true,
                        text: 'Bulan'
                    }
                }
            },
            plugins: {
                legend: {
                    position: 'bottom'
                },
                tooltip: {
                    mode: 'index',
                    intersect: false
                }
            },
            interaction: {
                mode: 'nearest',
                axis: 'x',
                intersect: false
            }
        }
    });
</script>

        <div class="text-center mt-5">
            <button class="btn-buka-kotak" onclick="alert('Kotak dibuka! 🚀')">
             TEKAN UNTUK BUKA KOTAK
            </button>
        </div>   
      </div>
    </div>
  </div>
  <!-- [ Main Content ] end -->
  <footer class="pc-footer">
    <div class="footer-wrapper container-fluid">
      <div class="row">
        <div class="col-sm my-1">
        </div>
        <div class="col-auto my-1">
          <ul class="list-inline footer-link mb-0">
            <li class="list-inline-item"><a href="/">Home</a></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>

  <!-- [Page Specific JS] start -->
  <script src="../assets/js/plugins/apexcharts.min.js"></script>
  <script src="../assets/js/pages/dashboard-default.js"></script>
  <!-- [Page Specific JS] end -->
  <!-- Required Js -->
  <script src="../assets/js/plugins/popper.min.js"></script>
  <script src="../assets/js/plugins/simplebar.min.js"></script>
  <script src="../assets/js/plugins/bootstrap.min.js"></script>
  <script src="../assets/js/fonts/custom-font.js"></script>
  <script src="../assets/js/fonts/custom-ant-icon.js"></script>
  <script src="../assets/js/pcoded.js"></script>
  <script src="../assets/js/plugins/feather.min.js"></script>

     
  <script>
    layout_change('light');
  </script>
     
  <script>
    change_box_container('false');
  </script>
    
  <script>
    layout_rtl_change('false');
  </script>
   
  <script>
    preset_change('preset-1');
  </script>
   
  <script>
    font_change('Public-Sans');
  </script>

</body>
<!-- [Body] end -->

</html>

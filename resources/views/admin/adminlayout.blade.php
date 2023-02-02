 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
     <!-- Primary Meta Tags -->
     <title>Q-News | Trang quản trị</title>
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <meta name="title" content="Volt - Free Bootstrap 5 Dashboard">
     <meta name="author" content="Themesberg">
     <meta name="description"
         content="Volt is a free and open source Bootstrap 5 Admin Dashboard featuring 11 example pages, 100 components and 3 plugins with Vanilla JS.">
     <meta name="keywords"
         content="bootstrap 5, bootstrap, bootstrap 5 admin dashboard, free bootstrap 5 dashboard, bootstrap 5 dashboard, bootstrap 5 charts, bootstrap 5 calendar, bootstrap 5 datepicker, bootstrap 5 tables, bootstrap 5 datatable, vanilla js datatable, themesberg, themesberg dashboard, themesberg admin dashboard" />
     <link rel="canonical" href="https://themesberg.com/product/admin-dashboard/volt-bootstrap-5-dashboard">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
     <!-- Open Graph / Facebook -->
     <meta property="og:type" content="website">
     <meta property="og:url" content="https://demo.themesberg.com/volt">
     <meta property="og:title" content="Volt - Free Bootstrap 5 Dashboard">
     <meta property="og:description"
         content="Volt is a free and open source Bootstrap 5 Admin Dashboard featuring 11 example pages, 100 components and 3 plugins with Vanilla JS.">
     <meta property="og:image"
         content="https://themesberg.s3.us-east-2.amazonaws.com/public/products/volt-bootstrap-5-dashboard/volt-bootstrap-5-dashboard-preview.jpg">

     <!-- Twitter -->
     <meta property="twitter:card" content="summary_large_image">
     <meta property="twitter:url" content="https://demo.themesberg.com/volt">
     <meta property="twitter:title" content="Volt - Free Bootstrap 5 Dashboard">
     <meta property="twitter:description"
         content="Volt is a free and open source Bootstrap 5 Admin Dashboard featuring 11 example pages, 100 components and 3 plugins with Vanilla JS.">
     <meta property="twitter:image"
         content="https://themesberg.s3.us-east-2.amazonaws.com/public/products/volt-bootstrap-5-dashboard/volt-bootstrap-5-dashboard-preview.jpg">
     <base href="{{ asset('/') }}">
     <!-- Favicon -->
     <link rel="apple-touch-icon" sizes="120x120" href="admin/assets/img/favicon/apple-touch-icon.png">
     <link rel="icon" type="image/png" sizes="32x32" href="admin/assets/img/favicon/favicon-32x32.png">
     <link rel="icon" type="image/png" sizes="16x16" href="admin/assets/img/favicon/favicon-16x16.png">
     <link rel="manifest" href="admin/assets/img/favicon/site.webmanifest">
     <link rel="mask-icon" href="admin/assets/img/favicon/safari-pinned-tab.svg" color="#ffffff">
     <meta name="msapplication-TileColor" content="#ffffff">
     <meta name="theme-color" content="#ffffff">

     <!-- Fontawesome -->
     <link type="text/css"
         href="admin/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">

     <!-- Notyf -->
     <link type="text/css" href="admin/vendor/notyf/notyf.min.css" rel="stylesheet">

     <!-- Volt CSS -->
     <script src="//js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
     <script type="text/javascript">
                 bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
     </script>
         
     <link type="text/css" href="admin/css/volt.css" rel="stylesheet">
     <link type="text/css" href="style.css" rel="stylesheet">
    <script src="{{ asset('js/jquery.min.js') }}"></script>
   

     <!-- NOTICE: You can use the _analytics.html partial to include production code specific code & trackers -->

 </head>

 <body>
<script>
  
</script>
     <nav class="navbar navbar-dark navbar-theme-primary px-4 col-12 d-md-none">
         <a class="navbar-brand mr-lg-5" href="admin/index.html">
             <img class="navbar-brand-dark" src="admin/assets/img/brand/light.svg" alt="Volt logo" /> <img
                 class="navbar-brand-light" src="admin/assets/img/brand/dark.svg" alt="Volt logo" />
         </a>
         <div class="d-flex align-items-center">
             <button class="navbar-toggler d-md-none collapsed" type="button" data-toggle="collapse"
                 data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false"
                 aria-label="Toggle navigation">
                 <span class="navbar-toggler-icon"></span>
             </button>
         </div>
     </nav>

     <div class="container-fluid bg-soft" id="#pjax-container">
         <div class="row">
             <div class="col-12">

                 @include('admin.menu')
                 <main class="content">
                     <nav class="navbar navbar-top navbar-expand navbar-dashboard navbar-dark pl-0 pr-2 pb-0">
                         <div class="container-fluid px-0">
                             <div class="d-flex justify-content-between w-100" id="navbarSupportedContent">
                                
                                <div class="d-flex">
                                     <!-- Search form -->
                                     <form class="navbar-search form-inline" id="navbar-search-main">
                                         <div class="input-group input-group-merge search-bar">
                                             <span class="input-group-text" id="topbar-addon"><span
                                                     class="fas fa-search"></span></span>
                                             <input type="text" class="form-control" id="topbarInputIconLeft"
                                                 placeholder="Tìm kiếm" aria-label="Search"
                                                 aria-describedby="topbar-addon">
                                         </div>
                                     </form>
                                 </div>
                                 <div class="noticf">
                                    @if (session()->get('success'))
                                    <span style="color: rgb(13, 48, 23);
                                    background-color: rgba(121, 255, 210, 0.493);">{{ session()->get('success') }}</span>    
                                    @elseif (session()->get('error'))
                                    <span style="color: rgb(48, 13, 13);
                                    background-color: rgba(255, 121, 121, 0.493);">{{ session()->get('error') }}</span> @endif
                                 </div>
                                 <!-- Navbar links -->
                                 <ul class="navbar-nav
         align-items-center">
     <li class="nav-item dropdown">
         <a class="nav-link text-dark mr-lg-3 icon-notifications" data-unread-notifications="true" href="#"
             role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
             <span class="icon icon-sm">
                 <span class="fas fa-bell bell-shake"></span>
                 <span class="icon-badge rounded-circle unread-notifications"></span>
             </span>
         </a>
         <div class="dropdown-menu dashboard-dropdown dropdown-menu-lg dropdown-menu-center mt-2 py-0">
             <div class="list-group list-group-flush">
                 <a href="#"
                     class="text-center text-primary font-weight-bold border-bottom border-light py-3">Thông
                     Báo</a>
                 <a href="admin/pages/calendar.html"
                     class="list-group-item list-group-item-action border-bottom border-light">
                     <div class="row align-items-center">
                         <div class="col-auto">
                             <!-- Avatar -->
                             <img alt="Image placeholder" src="admin/assets/img/team/profile-picture-1.jpg"
                                 class="user-avatar lg-avatar rounded-circle">
                         </div>
                         <div class="col pl-0 ml--2">
                             <div class="d-flex justify-content-between align-items-center">
                                 <div>
                                     <h4 class="h6 mb-0 text-small">Quang Đạt</h4>
                                 </div>
                                 <div class="text-right">
                                     <small class="text-danger"> 2 Tiếng Trước</small>
                                 </div>
                             </div>
                             <p class="font-small mt-1 mb-0">thời gian trôi qua nhanh
                                 quá</p>
                         </div>
                     </div>
                 </a>

                 <a href="#" class="dropdown-item text-center text-primary font-weight-bold py-3">Xem
                     tất cả</a>
             </div>
         </div>
     </li>
     <li class="nav-item dropdown">
         <a class="nav-link pt-1 px-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
             aria-expanded="false">
             <div class="media d-flex align-items-center">
                 <img class="user-avatar md-avatar rounded-circle" alt="Image placeholder"
                     src="admin/assets/img/team/profile-picture-3.jpg">
                 <div class="media-body ml-2 text-dark align-items-center d-none d-lg-block">
                     <span class="mb-0 font-small font-weight-bold">{{ auth()->user()->name }}</span>
                 </div>
             </div>
         </a>
         <div class="dropdown-menu dashboard-dropdown dropdown-menu-right mt-2">
             <a class="dropdown-item font-weight-bold" href="#"><span class="far fa-user-circle"></span>Sửa
                 Thông Tin</a>
             <a class="dropdown-item font-weight-bold" href="#"><span class="fas fa-cog"></span>Cài đặt</a>
             <a class="dropdown-item font-weight-bold" href="#"><span
                     class="fas fa-envelope-open-text"></span>Tin nhắn</a>
             <a class="dropdown-item font-weight-bold" href="#"><span class="fas fa-user-shield"></span>Hỗ
                 trợ</a>
             <div role="separator" class="dropdown-divider"></div>


             <a class="dropdown-item font-weight-bold" href="{{ route('logout') }}"
                 onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                 <span class="fas fa-sign-out-alt text-danger"></span> {{ __('Đăng Xuất') }}
             </a>
             <form action="{{ Route('logout') }}" method="post" id="logout-form">
                 @csrf

             </form>

             </a>
         </div>
     </li>
     </ul>
     </div>
     </div>
     </nav>

     <div class="noidunghicnh">

         @yield('main')
     </div>


     <footer class="footer section py-5">
         <div class="row">
             <div class="col-12 col-lg-6 mb-4 mb-lg-0">
                 <p class="mb-0 text-center text-xl-left">Bản Quyền © <span class="current-year"></span> <a
                         class="text-primary font-weight-normal" href="#" target="_blank">Q-News</a>
                 </p>
             </div>

             <div class="col-12 col-lg-6">
                 {{-- <ul
                                     class="list-inline list-group-flush list-group-borderless text-center text-xl-right mb-0">
                                     <li class="list-inline-item px-0 px-sm-2">
                                         <a href="https://themesberg.com/about">About</a>
                                     </li>
                                     <li class="list-inline-item px-0 px-sm-2">
                                         <a href="https://themesberg.com/themes">Themes</a>
                                     </li>
                                     <li class="list-inline-item px-0 px-sm-2">
                                         <a href="https://themesberg.com/blog">Blog</a>
                                     </li>
                                     <li class="list-inline-item px-0 px-sm-2">
                                         <a href="https://themesberg.com/contact">Contact</a>
                                     </li>
                                 </ul> --}}
             </div>
         </div>
     </footer>
     </main>

     </div>

     </div>
     </div>


     <script>
         $("#idTL").on("change", function() {
             getData($(this).val());
         });
         getData($("#idTL").val());

         function getData(id) {
             $.ajax({
                 url: "http://localhost/qnews/api/loai-tin/" + id,
                 success: function(result) {
                     var html = '';
                     var data = (result);


                     var isarr = false;

                     data['data'].forEach(item => {
                         isarr = true;
                         var selec = '';
                         if (item['idLT'] == $("#validLT").val()) {
                             selec = "selected";
                             // console.log(item['idLT']+$("#validLT").val());
                         }
                         html += '  <option ' + selec + ' value ="' + item['idLT'] + '">' + item['Ten'] +
                             '</option> ';
                         // console.log(item['Ten']);
                     });

                     if (isarr) {
                         $('#idLT').prop("disabled", false);
                     } else $('#idLT').prop("disabled", true);
                     $('#idLT').html(html);
                 }
             });
         }


         if ($('.img-thumnail img').attr('src') == '') {
             $('.img-thumnail img').hide();
         }
         $('#Anh').on('change', () => {

             $(".img-review").fadeIn("fast").attr('src', URL.createObjectURL(event.target.files[0]));
             $(".form-file-text").text(URL.createObjectURL(event.target.files[0]));
             $('.img-thumnail').show();
         });
     </script>
     <!-- Core -->
     <script src="admin/vendor/popper.js/dist/umd/popper.min.js"></script>
     <script src="admin/vendor/bootstrap/dist/js/bootstrap.min.js"></script>

     <!-- Vendor JS -->
     <script src="admin/vendor/onscreen/dist/on-screen.umd.min.js"></script>

     <!-- Slider -->
     <script src="admin/vendor/nouislider/distribute/nouislider.min.js"></script>

     <!-- Jarallax -->
     <script src="admin/vendor/jarallax/dist/jarallax.min.js"></script>

     <!-- Smooth scroll -->
     <script src="admin/vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>

     <!-- Count up -->
     <script src="admin/vendor/countup.js/dist/countUp.umd.js"></script>

     <!-- Notyf -->
     <script src="admin/vendor/notyf/notyf.min.js"></script>

     <!-- Charts -->
     <script src="admin/vendor/chartist/dist/chartist.min.js"></script>
     <script src="admin/vendor/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>

     <!-- Datepicker -->
     <script src="admin/vendor/vanillajs-datepicker/dist/js/datepicker.min.js"></script>

     <!-- Simplebar -->
     <script src="admin/vendor/simplebar/dist/simplebar.min.js"></script>

     <!-- Github buttons -->
     <script async defer src="https://buttons.github.io/buttons.js"></script>

     <!-- Volt JS -->
     <script src="admin/assets/js/volt.js"></script>


     </body>

 </html>

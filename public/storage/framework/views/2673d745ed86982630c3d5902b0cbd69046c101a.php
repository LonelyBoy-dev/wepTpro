<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
    <meta charset="utf-8" />
    <title>
        <?php if(isset($title)): ?>
            <?php echo e($title); ?> |
        <?php endif; ?>

        <?php echo e(option('info_site_title', 'طراحی سایت')); ?>

    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Premium Bootstrap 5 Landing Page Template" />
    <meta name="keywords" content="Saas, Software, multi-uses, HTML, Clean, Modern" />
    <meta name="Version" content="v3.2.1" />
    <meta name="robots" content="index, follow"/>
    <meta name="SiteRoot" id="SiteRoot" content="<?php echo e(asset('')); ?>">
    <meta name="theme_asset" id="theme_asset" content="<?php echo e(theme_asset('')); ?>">
    <meta name="csrf-token" id="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <?php echo $__env->yieldPushContent('meta'); ?>
    <!-- favicon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo e(option('info_icon', theme_asset('images/favicon-32x32.png'))); ?>">
    <?php echo $__env->yieldPushContent('befor-styles'); ?>
    <!-- Bootstrap -->
    <link href="<?php echo e(theme_asset('css/bootstrap.min.css')); ?>" rel="stylesheet" type="text/css" />
    <!-- tobii css -->
    <link href="<?php echo e(theme_asset('css/tobii.min.css')); ?>" rel="stylesheet" type="text/css" />
    <!-- Slider -->
    <link rel="stylesheet" href="<?php echo e(theme_asset('css/tiny-slider.css')); ?>"/>
    <!-- Icons -->
    <link href="<?php echo e(theme_asset('css/materialdesignicons.min.css')); ?>" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="<?php echo e(theme_asset('css/line.css')); ?>">
    <!-- Main Css -->
    <?php if(Cookie::get('setCookieTheme')): ?>
    <link href="<?php echo e(theme_asset('css/'.Cookie::get('setCookieTheme').'.min.css')); ?>" rel="stylesheet" type="text/css" id="theme-opt" />
    <?php else: ?>
    <link href="<?php echo e(theme_asset('css/style.min.css')); ?>" rel="stylesheet" type="text/css" id="theme-opt" />
    <?php endif; ?>

    <?php if(Cookie::get('setCookieColor')): ?>
    <link href="<?php echo e(theme_asset('css/colors/'.Cookie::get('setCookieColor').'.css')); ?>" rel="stylesheet" id="color-opt">
    <?php else: ?>
    <link href="<?php echo e(theme_asset('css/colors/default.css')); ?>" rel="stylesheet" id="color-opt">
    <?php endif; ?>

    <?php echo $__env->yieldPushContent('styles'); ?>
</head>

<body>
<!-- Loader -->
<!-- <div id="preloader">
    <div id="status">
        <div class="spinner">
            <div class="double-bounce1"></div>
            <div class="double-bounce2"></div>
        </div>
    </div>
</div> -->
<!-- Loader -->

<!-- Navbar STart -->
<header id="topnav" class="defaultscroll sticky">
    <div class="container">
        <!-- Logo container-->
        <div>

            <a class="logo" href="<?php echo e(route('front.index')); ?>">
                <?php if(Cookie::get('setCookieTheme')=="style"): ?>
                <img height="24" src="<?php echo e(asset(option('info_logo', theme_asset('img/logo.png')))); ?>" alt="<?php echo e(option('info_site_title', 'لوگو سایت')); ?>">
                <?php else: ?>
                    <?php if(option('info_logo_dark')): ?>
                <img height="24" src="<?php echo e(asset(option('info_logo_dark', theme_asset('img/logo.png')))); ?>" alt="<?php echo e(option('info_site_title', 'لوگو سایت')); ?>">
                        <?php else: ?>
                        <img height="24" src="<?php echo e(asset(option('info_logo', theme_asset('img/logo.png')))); ?>" alt="<?php echo e(option('info_site_title', 'لوگو سایت')); ?>">
                    <?php endif; ?>
                    <?php endif; ?>
            </a>
        </div>

        <!-- End Logo container-->
        <div class="menu-extras">
            <div class="menu-item">
                <!-- Mobile menu toggle-->
                <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
                    <div class="lines">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </a>
                <!-- End mobile menu toggle-->
            </div>
        </div>

        <div id="navigation">
            <!-- Navigation Menu-->
            <?php echo $__env->make('front::partials.menu.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div><!--end navigation-->
    </div><!--end container-->
</header><!--end header-->
<!-- Navbar End -->

<?php echo $__env->yieldContent('content'); ?>

<!-- Footer Start -->
<footer class="footer footer-bar">
    <div class="container text-center">
        <div class="row align-items-center">
            <div class="col-sm-6">
                <div class="text-sm-start">
                    <p class="mb-0">© <script>document.write(new Date().getFullYear())</script> لنـدریــک. طراحی شده با  <i class="mdi mdi-heart text-danger"></i> توسط  <a href="https://www.rtl-theme.com/author/tn_plugin/" target="_blank" class="text-reset">جعفر عباسی </a>.</p>
                </div>
            </div>

            <div class="col-sm-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                <ul class="list-unstyled social-icon foot-social-icon text-sm-end mb-0">
                    <li class="list-inline-item mb-0"><a href="javascript:void(0)" class="rounded"><i data-feather="facebook" class="fea icon-sm fea-social"></i></a></li>
                    <li class="list-inline-item mb-0"><a href="javascript:void(0)" class="rounded"><i data-feather="instagram" class="fea icon-sm fea-social"></i></a></li>
                    <li class="list-inline-item mb-0"><a href="javascript:void(0)" class="rounded"><i data-feather="twitter" class="fea icon-sm fea-social"></i></a></li>
                    <li class="list-inline-item mb-0"><a href="javascript:void(0)" class="rounded"><i data-feather="linkedin" class="fea icon-sm fea-social"></i></a></li>
                </ul><!--end icon-->
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->
</footer><!--end footer-->
<!-- Footer End -->

<!-- Back to top -->
<a href="#" onclick="topFunction()" id="back-to-top" class="btn btn-icon btn-primary back-to-top"><i data-feather="arrow-up" class="icons"></i></a>
<!-- Back to top -->

<!-- Style switcher --> <div id="style-switcher" class="bg-light border p-3 pt-2 pb-2" onclick="toggleSwitcher()">
    <div>
        <h6 class="title text-center">رنگ خود را انتخاب کنید </h6>
        <ul class="pattern">
            <li class="list-inline-item">
                <a class="color1" href="javascript: void(0);" onclick="setColor('default')"></a>
            </li>
            <li class="list-inline-item">
                <a class="color2" href="javascript: void(0);" onclick="setColor('green')"></a>
            </li>
            <li class="list-inline-item">
                <a class="color3" href="javascript: void(0);" onclick="setColor('purple')"></a>
            </li>
            <li class="list-inline-item">
                <a class="color4" href="javascript: void(0);" onclick="setColor('red')"></a>
            </li>
            <li class="list-inline-item">
                <a class="color5" href="javascript: void(0);" onclick="setColor('skyblue')"></a>
            </li>
            <li class="list-inline-item">
                <a class="color6" href="javascript: void(0);" onclick="setColor('skobleoff')"></a>
            </li>
            <li class="list-inline-item">
                <a class="color7" href="javascript: void(0);" onclick="setColor('cyan')"></a>
            </li>
            <li class="list-inline-item">
                <a class="color8" href="javascript: void(0);" onclick="setColor('slateblue')"></a>
            </li>
            <li class="list-inline-item">
                <a class="color9" href="javascript: void(0);" onclick="setColor('yellow')"></a>
            </li>
        </ul>

        <h6 class="title text-center pt-3 mb-0 border-top">تنظیمات قالب </h6>
        <ul class="text-center list-unstyled mb-0">
            <li class="d-grid"><a href="javascript:void(0)" class=" " onclick="setTheme('style-rtl')"> </a></li>
            <li class="d-grid"><a href="javascript:void(0)" class=" " onclick="setTheme('style')"> </a></li>
            <li class="d-grid"><a href="javascript:void(0)" class=" " onclick="setTheme('style-dark-rtl')"> </a></li>
            <li class="d-grid"><a href="javascript:void(0)" class=" " onclick="setTheme('style-dark')"> </a></li>
            <li class="d-grid"><a href="javascript:void(0)" class="btn btn-sm btn-block btn-dark dark-version t-dark mt-2" onclick="setTheme('style-dark')">تیره </a></li>
            <li class="d-grid"><a href="javascript:void(0)" class="btn btn-sm btn-block btn-dark light-version t-light mt-2" onclick="setTheme('style')">روشن </a></li>
        </ul>
    </div>
    <div class="bottom">
        <a href="javascript: void(0);" class="settings bg-white shadow d-block"><i class="mdi mdi-cog ms-1 mdi-24px position-absolute mdi-spin text-primary"></i></a>
    </div>
</div>
<!-- end Style switcher -->

<!-- jquery -->
<script src="<?php echo e(theme_asset('js/jquery-3.3.1.min.js')); ?>"></script>
<!-- javascript -->
<script src="<?php echo e(theme_asset('js/bootstrap.bundle.min.js')); ?>"></script>
<!-- tobii js -->
<script src="<?php echo e(theme_asset('js/tobii.min.js')); ?>"></script>
<!-- SLIDER -->
<script src="<?php echo e(theme_asset('js/tiny-slider.js')); ?>"></script>
<!-- Contact -->
<script src="<?php echo e(theme_asset('js/contact.js')); ?>"></script>
<!-- Icons -->
<script src="<?php echo e(theme_asset('js/feather.min.js')); ?>"></script>
<!-- Switcher -->
<script src="<?php echo e(theme_asset('js/switcher.js')); ?>"></script>
<!-- Main Js -->
<script src="<?php echo e(theme_asset('js/plugins.init.js')); ?>"></script><!--Note: All init js like tiny slider, counter, countdown, maintenance, lightbox, gallery, swiper slider, aos animation etc.-->
<script src="<?php echo e(theme_asset('js/app.js')); ?>"></script><!--Note: All important javascript like page loader, menu, sticky menu, menu-toggler, one page menu etc. -->
</body>

</html><?php /**PATH C:\xampp\htdocs\laravelshop\local\themes\myWebsite\src/resources/views/layouts/master.blade.php ENDPATH**/ ?>
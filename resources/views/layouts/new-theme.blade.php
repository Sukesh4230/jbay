<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>Phoenix</title>


    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('img/favicons/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('img/favicons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/favicons/favicon-16x16.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/favicons/favicon.ico') }}">
    <link rel="manifest" href="{{ asset('img/favicons/manifest.json') }}">
    <meta name="msapplication-TileImage" content="{{ asset('img/favicons/mstile-150x150.png') }}">
    <meta name="theme-color" content="#ffffff">
    <script src="{{ asset('vendors/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
    <script src=""></script>
    <script src="{{ asset('js/config.js') }}"></script>


    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&amp;display=swap"
        rel="stylesheet">
    <link href="{{ asset('vendors/simplebar/simplebar.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link href="{{ asset('css/theme-rtl.min.css') }}" type="text/css" rel="stylesheet" id="style-rtl">
    <link href="{{ asset('css/theme.min.css') }}" type="text/css" rel="stylesheet" id="style-default">
    <link href="{{ asset('css/user-rtl.min.css') }}" type="text/css" rel="stylesheet" id="user-style-rtl">
    <link href="{{ asset('css/user.min.css') }}" type="text/css" rel="stylesheet" id="user-style-default">
    <script>
        var isRTL = JSON.parse(localStorage.getItem('isRTL'));
        if (isRTL) {
            var linkDefault = document.getElementById('style-default');
            var userLinkDefault = document.getElementById('user-style-default');
            linkDefault.setAttribute('disabled', true);
            userLinkDefault.setAttribute('disabled', true);
            document.querySelector('html').setAttribute('dir', 'rtl');
        } else {
            var linkRTL = document.getElementById('style-rtl');
            var userLinkRTL = document.getElementById('user-style-rtl');
            linkRTL.setAttribute('disabled', true);
            userLinkRTL.setAttribute('disabled', true);
        }
    </script>
</head>


<body>

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
        <div class="container-fluid px-0">
            <nav class="navbar navbar-vertical navbar-expand-lg">
                <script>
                    var navbarStyle = localStorage.getItem("phoenixNavbarStyle");
                    if (navbarStyle && navbarStyle !== 'transparent') {
                        document.querySelector('body').classList.add(`navbar-${navbarStyle}`);
                    }
                </script>
                <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
                    <!-- scrollbar removed-->
                    <div class="navbar-vertical-content">
                        <ul class="navbar-nav flex-column" id="navbarVerticalNav">
                            
                            <li class="nav-item">
                                <!-- label-->
                                <p class="navbar-vertical-label">Apps
                                </p>
                                <hr class="navbar-vertical-line" />
                                <!-- parent pages-->
                                <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1"
                                        href="#e-commerce" asd="index" role="button" data-bs-toggle="collapse"
                                        aria-expanded="false" aria-controls="e-commerce">
                                        <div class="d-flex align-items-center">
                                            <div class="dropdown-indicator-icon"><span
                                                    class="fas fa-caret-right"></span></div><span
                                                class="nav-link-icon"><span
                                                    data-feather="shopping-cart"></span></span><span
                                                class="nav-link-text">E commerce</span>
                                        </div>
                                    </a>
                                    <div class="parent-wrapper label-1">
                                        <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse"
                                            id="e-commerce">
                                            <li class="collapsed-nav-item-title d-none">E commerce
                                            </li>
                                            <li class="nav-item"><a class="nav-link dropdown-indicator"
                                                    href="#admin" asd="index" data-bs-toggle="collapse"
                                                    aria-expanded="true" aria-controls="e-commerce">
                                                    <div class="d-flex align-items-center">
                                                        <div class="dropdown-indicator-icon"><span
                                                                class="fas fa-caret-right"></span></div><span
                                                            class="nav-link-text">Admin</span>
                                                    </div>
                                                </a>
                                                <!-- more inner pages-->
                                                <div class="parent-wrapper">
                                                    <ul class="nav collapse parent show" data-bs-parent="#e-commerce"
                                                        id="admin">
                                                        <li class="nav-item"><a class="nav-link"
                                                                href="apps/e-commerce/admin/add-product.html"
                                                                asd="index" data-bs-toggle=""
                                                                aria-expanded="false">
                                                                <div class="d-flex align-items-center"><span
                                                                        class="nav-link-text">Add product</span>
                                                                </div>
                                                            </a>
                                                            <!-- more inner pages-->
                                                        </li>
                                                        <li class="nav-item"><a class="nav-link"
                                                                href="apps/e-commerce/admin/products.html"
                                                                asd="index" data-bs-toggle=""
                                                                aria-expanded="false">
                                                                <div class="d-flex align-items-center"><span
                                                                        class="nav-link-text">Products</span>
                                                                </div>
                                                            </a>
                                                            <!-- more inner pages-->
                                                        </li>
                                                        <li class="nav-item"><a class="nav-link"
                                                                href="apps/e-commerce/admin/customers.html"
                                                                asd="index" data-bs-toggle=""
                                                                aria-expanded="false">
                                                                <div class="d-flex align-items-center"><span
                                                                        class="nav-link-text">Customers</span>
                                                                </div>
                                                            </a>
                                                            <!-- more inner pages-->
                                                        </li>
                                                        <li class="nav-item"><a class="nav-link"
                                                                href="apps/e-commerce/admin/customer-details.html"
                                                                asd="index" data-bs-toggle=""
                                                                aria-expanded="false">
                                                                <div class="d-flex align-items-center"><span
                                                                        class="nav-link-text">Customer details</span>
                                                                </div>
                                                            </a>
                                                            <!-- more inner pages-->
                                                        </li>
                                                        <li class="nav-item"><a class="nav-link"
                                                                href="apps/e-commerce/admin/orders.html"
                                                                asd="index" data-bs-toggle=""
                                                                aria-expanded="false">
                                                                <div class="d-flex align-items-center"><span
                                                                        class="nav-link-text">Orders</span>
                                                                </div>
                                                            </a>
                                                            <!-- more inner pages-->
                                                        </li>
                                                        <li class="nav-item"><a class="nav-link"
                                                                href="apps/e-commerce/admin/order-details.html"
                                                                asd="index" data-bs-toggle=""
                                                                aria-expanded="false">
                                                                <div class="d-flex align-items-center"><span
                                                                        class="nav-link-text">Order details</span>
                                                                </div>
                                                            </a>
                                                            <!-- more inner pages-->
                                                        </li>
                                                        <li class="nav-item"><a class="nav-link"
                                                                href="apps/e-commerce/admin/refund.html"
                                                                asd="index" data-bs-toggle=""
                                                                aria-expanded="false">
                                                                <div class="d-flex align-items-center"><span
                                                                        class="nav-link-text">Refund</span>
                                                                </div>
                                                            </a>
                                                            <!-- more inner pages-->
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="nav-item"><a class="nav-link dropdown-indicator"
                                                    href="#landing" asd="index" data-bs-toggle="collapse"
                                                    aria-expanded="true" aria-controls="e-commerce">
                                                    <div class="d-flex align-items-center">
                                                        <div class="dropdown-indicator-icon"><span
                                                                class="fas fa-caret-right"></span></div><span
                                                            class="nav-link-text">Landing</span>
                                                    </div>
                                                </a>
                                                <!-- more inner pages-->
                                                <div class="parent-wrapper">
                                                    <ul class="nav collapse parent show" data-bs-parent="#e-commerce"
                                                        id="landing">
                                                        <li class="nav-item"><a class="nav-link"
                                                                href="apps/e-commerce/landing/homepage.html"
                                                                asd="index" data-bs-toggle=""
                                                                aria-expanded="false">
                                                                <div class="d-flex align-items-center"><span
                                                                        class="nav-link-text">Homepage</span>
                                                                </div>
                                                            </a>
                                                            <!-- more inner pages-->
                                                        </li>
                                                        <li class="nav-item"><a class="nav-link"
                                                                href="apps/e-commerce/landing/product-details.html"
                                                                asd="index" data-bs-toggle=""
                                                                aria-expanded="false">
                                                                <div class="d-flex align-items-center"><span
                                                                        class="nav-link-text">Product details</span>
                                                                </div>
                                                            </a>
                                                            <!-- more inner pages-->
                                                        </li>
                                                        <li class="nav-item"><a class="nav-link"
                                                                href="apps/e-commerce/landing/products-filter.html"
                                                                asd="index" data-bs-toggle=""
                                                                aria-expanded="false">
                                                                <div class="d-flex align-items-center"><span
                                                                        class="nav-link-text">Products filter</span>
                                                                </div>
                                                            </a>
                                                            <!-- more inner pages-->
                                                        </li>
                                                        <li class="nav-item"><a class="nav-link"
                                                                href="apps/e-commerce/landing/cart.html"
                                                                asd="index" data-bs-toggle=""
                                                                aria-expanded="false">
                                                                <div class="d-flex align-items-center"><span
                                                                        class="nav-link-text">Cart</span>
                                                                </div>
                                                            </a>
                                                            <!-- more inner pages-->
                                                        </li>
                                                        <li class="nav-item"><a class="nav-link"
                                                                href="apps/e-commerce/landing/checkout.html"
                                                                asd="index" data-bs-toggle=""
                                                                aria-expanded="false">
                                                                <div class="d-flex align-items-center"><span
                                                                        class="nav-link-text">Checkout</span>
                                                                </div>
                                                            </a>
                                                            <!-- more inner pages-->
                                                        </li>
                                                        <li class="nav-item"><a class="nav-link"
                                                                href="apps/e-commerce/landing/shipping-info.html"
                                                                asd="index" data-bs-toggle=""
                                                                aria-expanded="false">
                                                                <div class="d-flex align-items-center"><span
                                                                        class="nav-link-text">Shipping info</span>
                                                                </div>
                                                            </a>
                                                            <!-- more inner pages-->
                                                        </li>
                                                        <li class="nav-item"><a class="nav-link"
                                                                href="apps/e-commerce/landing/profile.html"
                                                                asd="index" data-bs-toggle=""
                                                                aria-expanded="false">
                                                                <div class="d-flex align-items-center"><span
                                                                        class="nav-link-text">Profile</span>
                                                                </div>
                                                            </a>
                                                            <!-- more inner pages-->
                                                        </li>
                                                        <li class="nav-item"><a class="nav-link"
                                                                href="apps/e-commerce/landing/favourite-stores.html"
                                                                asd="index" data-bs-toggle=""
                                                                aria-expanded="false">
                                                                <div class="d-flex align-items-center"><span
                                                                        class="nav-link-text">Favourite stores</span>
                                                                </div>
                                                            </a>
                                                            <!-- more inner pages-->
                                                        </li>
                                                        <li class="nav-item"><a class="nav-link"
                                                                href="apps/e-commerce/landing/wishlist.html"
                                                                asd="index" data-bs-toggle=""
                                                                aria-expanded="false">
                                                                <div class="d-flex align-items-center"><span
                                                                        class="nav-link-text">Wishlist</span>
                                                                </div>
                                                            </a>
                                                            <!-- more inner pages-->
                                                        </li>
                                                        <li class="nav-item"><a class="nav-link"
                                                                href="apps/e-commerce/landing/order-tracking.html"
                                                                asd="index" data-bs-toggle=""
                                                                aria-expanded="false">
                                                                <div class="d-flex align-items-center"><span
                                                                        class="nav-link-text">Order tracking</span>
                                                                </div>
                                                            </a>
                                                            <!-- more inner pages-->
                                                        </li>
                                                        <li class="nav-item"><a class="nav-link"
                                                                href="apps/e-commerce/landing/invoice.html"
                                                                asd="index" data-bs-toggle=""
                                                                aria-expanded="false">
                                                                <div class="d-flex align-items-center"><span
                                                                        class="nav-link-text">Invoice</span>
                                                                </div>
                                                            </a>
                                                            <!-- more inner pages-->
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- parent pages-->
                                <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1"
                                        href="#project-management" asd="index" role="button"
                                        data-bs-toggle="collapse" aria-expanded="false"
                                        aria-controls="project-management">
                                        <div class="d-flex align-items-center">
                                            <div class="dropdown-indicator-icon"><span
                                                    class="fas fa-caret-right"></span></div><span
                                                class="nav-link-icon"><span
                                                    data-feather="clipboard"></span></span><span
                                                class="nav-link-text">Project management</span>
                                        </div>
                                    </a>
                                    <div class="parent-wrapper label-1">
                                        <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse"
                                            id="project-management">
                                            <li class="collapsed-nav-item-title d-none">Project management
                                            </li>
                                            <li class="nav-item"><a class="nav-link"
                                                    href="apps/project-management/create-new.html" asd="index"
                                                    data-bs-toggle="" aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Create new</span>
                                                    </div>
                                                </a>
                                                <!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link"
                                                    href="apps/project-management/project-list-view.html"
                                                    asd="index" data-bs-toggle="" aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Project list view</span>
                                                    </div>
                                                </a>
                                                <!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link"
                                                    href="apps/project-management/project-card-view.html"
                                                    asd="index" data-bs-toggle="" aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Project card view</span>
                                                    </div>
                                                </a>
                                                <!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link"
                                                    href="apps/project-management/project-board-view.html"
                                                    asd="index" data-bs-toggle="" aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Project board view</span>
                                                    </div>
                                                </a>
                                                <!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link"
                                                    href="apps/project-management/todo-list.html" asd="index"
                                                    data-bs-toggle="" aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Todo list</span>
                                                    </div>
                                                </a>
                                                <!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link"
                                                    href="apps/project-management/project-details.html" asd="index"
                                                    data-bs-toggle="" aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Project details</span>
                                                    </div>
                                                </a>
                                                <!-- more inner pages-->
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- parent pages-->
                                <div class="nav-item-wrapper"><a class="nav-link label-1" href="apps/chat.html"
                                        asd="index" role="button" data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                                    data-feather="message-square"></span></span><span
                                                class="nav-link-text-wrapper"><span
                                                    class="nav-link-text">Chat</span></span>
                                        </div>
                                    </a>
                                </div>
                                <!-- parent pages-->
                                <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1"
                                        href="#email" asd="index" role="button" data-bs-toggle="collapse"
                                        aria-expanded="false" aria-controls="email">
                                        <div class="d-flex align-items-center">
                                            <div class="dropdown-indicator-icon"><span
                                                    class="fas fa-caret-right"></span></div><span
                                                class="nav-link-icon"><span data-feather="mail"></span></span><span
                                                class="nav-link-text">Email</span>
                                        </div>
                                    </a>
                                    <div class="parent-wrapper label-1">
                                        <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse"
                                            id="email">
                                            <li class="collapsed-nav-item-title d-none">Email
                                            </li>
                                            <li class="nav-item"><a class="nav-link" href="apps/email/inbox.html"
                                                    asd="index" data-bs-toggle="" aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Inbox</span>
                                                    </div>
                                                </a>
                                                <!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link"
                                                    href="apps/email/email-detail.html" asd="index"
                                                    data-bs-toggle="" aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Email detail</span>
                                                    </div>
                                                </a>
                                                <!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link" href="apps/email/compose.html"
                                                    asd="index" data-bs-toggle="" aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Compose</span>
                                                    </div>
                                                </a>
                                                <!-- more inner pages-->
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- parent pages-->
                                <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1"
                                        href="#events" asd="index" role="button" data-bs-toggle="collapse"
                                        aria-expanded="false" aria-controls="events">
                                        <div class="d-flex align-items-center">
                                            <div class="dropdown-indicator-icon"><span
                                                    class="fas fa-caret-right"></span></div><span
                                                class="nav-link-icon"><span
                                                    data-feather="bookmark"></span></span><span
                                                class="nav-link-text">Events</span>
                                        </div>
                                    </a>
                                    <div class="parent-wrapper label-1">
                                        <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse"
                                            id="events">
                                            <li class="collapsed-nav-item-title d-none">Events
                                            </li>
                                            <li class="nav-item"><a class="nav-link"
                                                    href="apps/events/create-an-event.html" asd="index"
                                                    data-bs-toggle="" aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Create an event</span>
                                                    </div>
                                                </a>
                                                <!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link"
                                                    href="apps/events/event-detail.html" asd="index"
                                                    data-bs-toggle="" aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Event detail</span>
                                                    </div>
                                                </a>
                                                <!-- more inner pages-->
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- parent pages-->
                                <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1"
                                        href="#social" asd="index" role="button" data-bs-toggle="collapse"
                                        aria-expanded="false" aria-controls="social">
                                        <div class="d-flex align-items-center">
                                            <div class="dropdown-indicator-icon"><span
                                                    class="fas fa-caret-right"></span></div><span
                                                class="nav-link-icon"><span data-feather="share-2"></span></span><span
                                                class="nav-link-text">Social</span>
                                        </div>
                                    </a>
                                    <div class="parent-wrapper label-1">
                                        <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse"
                                            id="social">
                                            <li class="collapsed-nav-item-title d-none">Social
                                            </li>
                                            <li class="nav-item"><a class="nav-link" href="apps/social/profile.html"
                                                    asd="index" data-bs-toggle="" aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Profile</span>
                                                    </div>
                                                </a>
                                                <!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link" href="apps/social/settings.html"
                                                    asd="index" data-bs-toggle="" aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Settings</span>
                                                    </div>
                                                </a>
                                                <!-- more inner pages-->
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- parent pages-->
                                <div class="nav-item-wrapper"><a class="nav-link label-1" href="apps/calendar.html"
                                        asd="index" role="button" data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                                    data-feather="calendar"></span></span><span
                                                class="nav-link-text-wrapper"><span
                                                    class="nav-link-text">Calendar</span></span>
                                        </div>
                                    </a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <!-- label-->
                                <p class="navbar-vertical-label">Pages
                                </p>
                                <hr class="navbar-vertical-line" />
                                <!-- parent pages-->
                                <div class="nav-item-wrapper"><a class="nav-link label-1" href="pages/starter.html"
                                        asd="index" role="button" data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                                    data-feather="compass"></span></span><span
                                                class="nav-link-text-wrapper"><span
                                                    class="nav-link-text">Starter</span></span>
                                        </div>
                                    </a>
                                </div>
                                <!-- parent pages-->
                                <div class="nav-item-wrapper"><a class="nav-link label-1" href="pages/pages/faq.html"
                                        asd="index" role="button" data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                                    data-feather="help-circle"></span></span><span
                                                class="nav-link-text-wrapper"><span
                                                    class="nav-link-text">Faq</span></span>
                                        </div>
                                    </a>
                                </div>
                                <!-- parent pages-->
                                <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1"
                                        href="#pricing" asd="index" role="button" data-bs-toggle="collapse"
                                        aria-expanded="false" aria-controls="pricing">
                                        <div class="d-flex align-items-center">
                                            <div class="dropdown-indicator-icon"><span
                                                    class="fas fa-caret-right"></span></div><span
                                                class="nav-link-icon"><span data-feather="tag"></span></span><span
                                                class="nav-link-text">Pricing</span>
                                        </div>
                                    </a>
                                    <div class="parent-wrapper label-1">
                                        <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse"
                                            id="pricing">
                                            <li class="collapsed-nav-item-title d-none">Pricing
                                            </li>
                                            <li class="nav-item"><a class="nav-link"
                                                    href="pages/pages/pricing/pricing-column.html" asd="index"
                                                    data-bs-toggle="" aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Pricing column</span>
                                                    </div>
                                                </a>
                                                <!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link"
                                                    href="pages/pages/pricing/pricing-grid.html" asd="index"
                                                    data-bs-toggle="" aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Pricing grid</span>
                                                    </div>
                                                </a>
                                                <!-- more inner pages-->
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- parent pages-->
                                <div class="nav-item-wrapper"><a class="nav-link label-1"
                                        href="pages/pages/notifications.html" asd="index" role="button"
                                        data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                                    data-feather="bell"></span></span><span
                                                class="nav-link-text-wrapper"><span
                                                    class="nav-link-text">Notifications</span></span>
                                        </div>
                                    </a>
                                </div>
                                <!-- parent pages-->
                                <div class="nav-item-wrapper"><a class="nav-link label-1"
                                        href="pages/pages/members.html" asd="index" role="button"
                                        data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                                    data-feather="users"></span></span><span
                                                class="nav-link-text-wrapper"><span
                                                    class="nav-link-text">Members</span></span>
                                        </div>
                                    </a>
                                </div>
                                <!-- parent pages-->
                                <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1"
                                        href="#errors" asd="index" role="button" data-bs-toggle="collapse"
                                        aria-expanded="false" aria-controls="errors">
                                        <div class="d-flex align-items-center">
                                            <div class="dropdown-indicator-icon"><span
                                                    class="fas fa-caret-right"></span></div><span
                                                class="nav-link-icon"><span
                                                    data-feather="alert-triangle"></span></span><span
                                                class="nav-link-text">Errors</span>
                                        </div>
                                    </a>
                                    <div class="parent-wrapper label-1">
                                        <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse"
                                            id="errors">
                                            <li class="collapsed-nav-item-title d-none">Errors
                                            </li>
                                            <li class="nav-item"><a class="nav-link" href="pages/errors/404.html"
                                                    asd="index" data-bs-toggle="" aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">404</span>
                                                    </div>
                                                </a>
                                                <!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link" href="pages/errors/500.html"
                                                    asd="index" data-bs-toggle="" aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">500</span>
                                                    </div>
                                                </a>
                                                <!-- more inner pages-->
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- parent pages-->
                                <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1"
                                        href="#authentication" asd="index" role="button"
                                        data-bs-toggle="collapse" aria-expanded="false"
                                        aria-controls="authentication">
                                        <div class="d-flex align-items-center">
                                            <div class="dropdown-indicator-icon"><span
                                                    class="fas fa-caret-right"></span></div><span
                                                class="nav-link-icon"><span data-feather="lock"></span></span><span
                                                class="nav-link-text">Authentication</span>
                                        </div>
                                    </a>
                                    <div class="parent-wrapper label-1">
                                        <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse"
                                            id="authentication">
                                            <li class="collapsed-nav-item-title d-none">Authentication
                                            </li>
                                            <li class="nav-item"><a class="nav-link dropdown-indicator"
                                                    href="#simple" asd="index" data-bs-toggle="collapse"
                                                    aria-expanded="true" aria-controls="authentication">
                                                    <div class="d-flex align-items-center">
                                                        <div class="dropdown-indicator-icon"><span
                                                                class="fas fa-caret-right"></span></div><span
                                                            class="nav-link-text">Simple</span>
                                                    </div>
                                                </a>
                                                <!-- more inner pages-->
                                                <div class="parent-wrapper">
                                                    <ul class="nav collapse parent show"
                                                        data-bs-parent="#authentication" id="simple">
                                                        <li class="nav-item"><a class="nav-link"
                                                                href="pages/authentication/simple/sign-in.html"
                                                                asd="index" data-bs-toggle=""
                                                                aria-expanded="false">
                                                                <div class="d-flex align-items-center"><span
                                                                        class="nav-link-text">Sign in</span>
                                                                </div>
                                                            </a>
                                                            <!-- more inner pages-->
                                                        </li>
                                                        <li class="nav-item"><a class="nav-link"
                                                                href="pages/authentication/simple/sign-up.html"
                                                                asd="index" data-bs-toggle=""
                                                                aria-expanded="false">
                                                                <div class="d-flex align-items-center"><span
                                                                        class="nav-link-text">Sign up</span>
                                                                </div>
                                                            </a>
                                                            <!-- more inner pages-->
                                                        </li>
                                                        <li class="nav-item"><a class="nav-link"
                                                                href="pages/authentication/simple/sign-out.html"
                                                                asd="index" data-bs-toggle=""
                                                                aria-expanded="false">
                                                                <div class="d-flex align-items-center"><span
                                                                        class="nav-link-text">Sign out</span>
                                                                </div>
                                                            </a>
                                                            <!-- more inner pages-->
                                                        </li>
                                                        <li class="nav-item"><a class="nav-link"
                                                                href="pages/authentication/simple/forgot-password.html"
                                                                asd="index" data-bs-toggle=""
                                                                aria-expanded="false">
                                                                <div class="d-flex align-items-center"><span
                                                                        class="nav-link-text">Forgot password</span>
                                                                </div>
                                                            </a>
                                                            <!-- more inner pages-->
                                                        </li>
                                                        <li class="nav-item"><a class="nav-link"
                                                                href="pages/authentication/simple/reset-password.html"
                                                                asd="index" data-bs-toggle=""
                                                                aria-expanded="false">
                                                                <div class="d-flex align-items-center"><span
                                                                        class="nav-link-text">Reset password</span>
                                                                </div>
                                                            </a>
                                                            <!-- more inner pages-->
                                                        </li>
                                                        <li class="nav-item"><a class="nav-link"
                                                                href="pages/authentication/simple/lock-screen.html"
                                                                asd="index" data-bs-toggle=""
                                                                aria-expanded="false">
                                                                <div class="d-flex align-items-center"><span
                                                                        class="nav-link-text">Lock screen</span>
                                                                </div>
                                                            </a>
                                                            <!-- more inner pages-->
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="nav-item"><a class="nav-link dropdown-indicator"
                                                    href="#split" asd="index" data-bs-toggle="collapse"
                                                    aria-expanded="true" aria-controls="authentication">
                                                    <div class="d-flex align-items-center">
                                                        <div class="dropdown-indicator-icon"><span
                                                                class="fas fa-caret-right"></span></div><span
                                                            class="nav-link-text">Split</span>
                                                    </div>
                                                </a>
                                                <!-- more inner pages-->
                                                <div class="parent-wrapper">
                                                    <ul class="nav collapse parent show"
                                                        data-bs-parent="#authentication" id="split">
                                                        <li class="nav-item"><a class="nav-link"
                                                                href="pages/authentication/split/sign-in.html"
                                                                asd="index" data-bs-toggle=""
                                                                aria-expanded="false">
                                                                <div class="d-flex align-items-center"><span
                                                                        class="nav-link-text">Sign in</span>
                                                                </div>
                                                            </a>
                                                            <!-- more inner pages-->
                                                        </li>
                                                        <li class="nav-item"><a class="nav-link"
                                                                href="pages/authentication/split/sign-up.html"
                                                                asd="index" data-bs-toggle=""
                                                                aria-expanded="false">
                                                                <div class="d-flex align-items-center"><span
                                                                        class="nav-link-text">Sign up</span>
                                                                </div>
                                                            </a>
                                                            <!-- more inner pages-->
                                                        </li>
                                                        <li class="nav-item"><a class="nav-link"
                                                                href="pages/authentication/split/sign-out.html"
                                                                asd="index" data-bs-toggle=""
                                                                aria-expanded="false">
                                                                <div class="d-flex align-items-center"><span
                                                                        class="nav-link-text">Sign out</span>
                                                                </div>
                                                            </a>
                                                            <!-- more inner pages-->
                                                        </li>
                                                        <li class="nav-item"><a class="nav-link"
                                                                href="pages/authentication/split/forgot-password.html"
                                                                asd="index" data-bs-toggle=""
                                                                aria-expanded="false">
                                                                <div class="d-flex align-items-center"><span
                                                                        class="nav-link-text">Forgot password</span>
                                                                </div>
                                                            </a>
                                                            <!-- more inner pages-->
                                                        </li>
                                                        <li class="nav-item"><a class="nav-link"
                                                                href="pages/authentication/split/reset-password.html"
                                                                asd="index" data-bs-toggle=""
                                                                aria-expanded="false">
                                                                <div class="d-flex align-items-center"><span
                                                                        class="nav-link-text">Reset password</span>
                                                                </div>
                                                            </a>
                                                            <!-- more inner pages-->
                                                        </li>
                                                        <li class="nav-item"><a class="nav-link"
                                                                href="pages/authentication/split/lock-screen.html"
                                                                asd="index" data-bs-toggle=""
                                                                aria-expanded="false">
                                                                <div class="d-flex align-items-center"><span
                                                                        class="nav-link-text">Lock screen</span>
                                                                </div>
                                                            </a>
                                                            <!-- more inner pages-->
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- parent pages-->
                                <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1"
                                        href="#layouts" asd="index" role="button" data-bs-toggle="collapse"
                                        aria-expanded="false" aria-controls="layouts">
                                        <div class="d-flex align-items-center">
                                            <div class="dropdown-indicator-icon"><span
                                                    class="fas fa-caret-right"></span></div><span
                                                class="nav-link-icon"><span data-feather="layout"></span></span><span
                                                class="nav-link-text">Layouts</span>
                                        </div>
                                    </a>
                                    <div class="parent-wrapper label-1">
                                        <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse"
                                            id="layouts">
                                            <li class="collapsed-nav-item-title d-none">Layouts
                                            </li>
                                            <li class="nav-item"><a class="nav-link"
                                                    href="demo/vertical-sidenav.html" asd="index"
                                                    data-bs-toggle="" aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Vertical sidenav</span>
                                                    </div>
                                                </a>
                                                <!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link" href="demo/dark-mode.html"
                                                    asd="index" data-bs-toggle="" aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Dark mode</span>
                                                    </div>
                                                </a>
                                                <!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link"
                                                    href="demo/sidenav-collapse.html" asd="index"
                                                    data-bs-toggle="" aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Sidenav collapse</span>
                                                    </div>
                                                </a>
                                                <!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link" href="demo/darknav.html"
                                                    asd="index" data-bs-toggle="" aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Darknav</span>
                                                    </div>
                                                </a>
                                                <!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link" href="demo/topnav-slim.html"
                                                    asd="index" data-bs-toggle="" aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Topnav slim</span>
                                                    </div>
                                                </a>
                                                <!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link" href="demo/navbar-top-slim.html"
                                                    asd="index" data-bs-toggle="" aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Navbar top slim</span>
                                                    </div>
                                                </a>
                                                <!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link" href="demo/navbar-top.html"
                                                    asd="index" data-bs-toggle="" aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Navbar top</span>
                                                    </div>
                                                </a>
                                                <!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link" href="demo/horizontal-slim.html"
                                                    asd="index" data-bs-toggle="" aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Horizontal slim</span>
                                                    </div>
                                                </a>
                                                <!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link" href="demo/combo-nav.html"
                                                    asd="index" data-bs-toggle="" aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Combo nav</span>
                                                    </div>
                                                </a>
                                                <!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link" href="demo/combo-nav-slim.html"
                                                    asd="index" data-bs-toggle="" aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Combo nav slim</span>
                                                    </div>
                                                </a>
                                                <!-- more inner pages-->
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item">
                                <!-- label-->
                                <p class="navbar-vertical-label">Modules
                                </p>
                                <hr class="navbar-vertical-line" />
                                <!-- parent pages-->
                                <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1"
                                        href="#forms" asd="index" role="button" data-bs-toggle="collapse"
                                        aria-expanded="false" aria-controls="forms">
                                        <div class="d-flex align-items-center">
                                            <div class="dropdown-indicator-icon"><span
                                                    class="fas fa-caret-right"></span></div><span
                                                class="nav-link-icon"><span
                                                    data-feather="file-text"></span></span><span
                                                class="nav-link-text">Forms</span>
                                        </div>
                                    </a>
                                    <div class="parent-wrapper label-1">
                                        <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse"
                                            id="forms">
                                            <li class="collapsed-nav-item-title d-none">Forms
                                            </li>
                                            <li class="nav-item"><a class="nav-link dropdown-indicator"
                                                    href="#basic" asd="index" data-bs-toggle="collapse"
                                                    aria-expanded="false" aria-controls="forms">
                                                    <div class="d-flex align-items-center">
                                                        <div class="dropdown-indicator-icon"><span
                                                                class="fas fa-caret-right"></span></div><span
                                                            class="nav-link-text">Basic</span>
                                                    </div>
                                                </a>
                                                <!-- more inner pages-->
                                                <div class="parent-wrapper">
                                                    <ul class="nav collapse parent" data-bs-parent="#forms"
                                                        id="basic">
                                                        <li class="nav-item"><a class="nav-link"
                                                                href="modules/forms/basic/form-control.html"
                                                                asd="index" data-bs-toggle=""
                                                                aria-expanded="false">
                                                                <div class="d-flex align-items-center"><span
                                                                        class="nav-link-text">Form control</span>
                                                                </div>
                                                            </a>
                                                            <!-- more inner pages-->
                                                        </li>
                                                        <li class="nav-item"><a class="nav-link"
                                                                href="modules/forms/basic/input-group.html"
                                                                asd="index" data-bs-toggle=""
                                                                aria-expanded="false">
                                                                <div class="d-flex align-items-center"><span
                                                                        class="nav-link-text">Input group</span>
                                                                </div>
                                                            </a>
                                                            <!-- more inner pages-->
                                                        </li>
                                                        <li class="nav-item"><a class="nav-link"
                                                                href="modules/forms/basic/select.html" asd="index"
                                                                data-bs-toggle="" aria-expanded="false">
                                                                <div class="d-flex align-items-center"><span
                                                                        class="nav-link-text">Select</span>
                                                                </div>
                                                            </a>
                                                            <!-- more inner pages-->
                                                        </li>
                                                        <li class="nav-item"><a class="nav-link"
                                                                href="modules/forms/basic/checks.html" asd="index"
                                                                data-bs-toggle="" aria-expanded="false">
                                                                <div class="d-flex align-items-center"><span
                                                                        class="nav-link-text">Checks</span>
                                                                </div>
                                                            </a>
                                                            <!-- more inner pages-->
                                                        </li>
                                                        <li class="nav-item"><a class="nav-link"
                                                                href="modules/forms/basic/range.html" asd="index"
                                                                data-bs-toggle="" aria-expanded="false">
                                                                <div class="d-flex align-items-center"><span
                                                                        class="nav-link-text">Range</span>
                                                                </div>
                                                            </a>
                                                            <!-- more inner pages-->
                                                        </li>
                                                        <li class="nav-item"><a class="nav-link"
                                                                href="modules/forms/basic/floating-labels.html"
                                                                asd="index" data-bs-toggle=""
                                                                aria-expanded="false">
                                                                <div class="d-flex align-items-center"><span
                                                                        class="nav-link-text">Floating labels</span>
                                                                </div>
                                                            </a>
                                                            <!-- more inner pages-->
                                                        </li>
                                                        <li class="nav-item"><a class="nav-link"
                                                                href="modules/forms/basic/layout.html" asd="index"
                                                                data-bs-toggle="" aria-expanded="false">
                                                                <div class="d-flex align-items-center"><span
                                                                        class="nav-link-text">Layout</span>
                                                                </div>
                                                            </a>
                                                            <!-- more inner pages-->
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="nav-item"><a class="nav-link dropdown-indicator"
                                                    href="#advance" asd="index" data-bs-toggle="collapse"
                                                    aria-expanded="false" aria-controls="forms">
                                                    <div class="d-flex align-items-center">
                                                        <div class="dropdown-indicator-icon"><span
                                                                class="fas fa-caret-right"></span></div><span
                                                            class="nav-link-text">Advance</span>
                                                    </div>
                                                </a>
                                                <!-- more inner pages-->
                                                <div class="parent-wrapper">
                                                    <ul class="nav collapse parent" data-bs-parent="#forms"
                                                        id="advance">
                                                        <li class="nav-item"><a class="nav-link"
                                                                href="modules/forms/advance/advance-select.html"
                                                                asd="index" data-bs-toggle=""
                                                                aria-expanded="false">
                                                                <div class="d-flex align-items-center"><span
                                                                        class="nav-link-text">Advance select</span>
                                                                </div>
                                                            </a>
                                                            <!-- more inner pages-->
                                                        </li>
                                                        <li class="nav-item"><a class="nav-link"
                                                                href="modules/forms/advance/date-picker.html"
                                                                asd="index" data-bs-toggle=""
                                                                aria-expanded="false">
                                                                <div class="d-flex align-items-center"><span
                                                                        class="nav-link-text">Date picker</span>
                                                                </div>
                                                            </a>
                                                            <!-- more inner pages-->
                                                        </li>
                                                        <li class="nav-item"><a class="nav-link"
                                                                href="modules/forms/advance/editor.html"
                                                                asd="index" data-bs-toggle=""
                                                                aria-expanded="false">
                                                                <div class="d-flex align-items-center"><span
                                                                        class="nav-link-text">Editor</span>
                                                                </div>
                                                            </a>
                                                            <!-- more inner pages-->
                                                        </li>
                                                        <li class="nav-item"><a class="nav-link"
                                                                href="modules/forms/advance/file-uploader.html"
                                                                asd="index" data-bs-toggle=""
                                                                aria-expanded="false">
                                                                <div class="d-flex align-items-center"><span
                                                                        class="nav-link-text">File uploader</span>
                                                                </div>
                                                            </a>
                                                            <!-- more inner pages-->
                                                        </li>
                                                        <li class="nav-item"><a class="nav-link"
                                                                href="modules/forms/advance/rating.html"
                                                                asd="index" data-bs-toggle=""
                                                                aria-expanded="false">
                                                                <div class="d-flex align-items-center"><span
                                                                        class="nav-link-text">Rating</span>
                                                                </div>
                                                            </a>
                                                            <!-- more inner pages-->
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="nav-item"><a class="nav-link"
                                                    href="modules/forms/validation.html" asd="index"
                                                    data-bs-toggle="" aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Validation</span>
                                                    </div>
                                                </a>
                                                <!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link"
                                                    href="modules/forms/wizard.html" asd="index"
                                                    data-bs-toggle="" aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Wizard</span>
                                                    </div>
                                                </a>
                                                <!-- more inner pages-->
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- parent pages-->
                                <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1"
                                        href="#icons" asd="index" role="button" data-bs-toggle="collapse"
                                        aria-expanded="false" aria-controls="icons">
                                        <div class="d-flex align-items-center">
                                            <div class="dropdown-indicator-icon"><span
                                                    class="fas fa-caret-right"></span></div><span
                                                class="nav-link-icon"><span data-feather="grid"></span></span><span
                                                class="nav-link-text">Icons</span>
                                        </div>
                                    </a>
                                    <div class="parent-wrapper label-1">
                                        <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse"
                                            id="icons">
                                            <li class="collapsed-nav-item-title d-none">Icons
                                            </li>
                                            <li class="nav-item"><a class="nav-link"
                                                    href="modules/icons/feather.html" asd="index"
                                                    data-bs-toggle="" aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Feather</span>
                                                    </div>
                                                </a>
                                                <!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link"
                                                    href="modules/icons/font-awesome.html" asd="index"
                                                    data-bs-toggle="" aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Font awesome</span>
                                                    </div>
                                                </a>
                                                <!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link"
                                                    href="modules/icons/unicons.html" asd="index"
                                                    data-bs-toggle="" aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Unicons</span>
                                                    </div>
                                                </a>
                                                <!-- more inner pages-->
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- parent pages-->
                                <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1"
                                        href="#tables" asd="index" role="button" data-bs-toggle="collapse"
                                        aria-expanded="false" aria-controls="tables">
                                        <div class="d-flex align-items-center">
                                            <div class="dropdown-indicator-icon"><span
                                                    class="fas fa-caret-right"></span></div><span
                                                class="nav-link-icon"><span
                                                    data-feather="columns"></span></span><span
                                                class="nav-link-text">Tables</span>
                                        </div>
                                    </a>
                                    <div class="parent-wrapper label-1">
                                        <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse"
                                            id="tables">
                                            <li class="collapsed-nav-item-title d-none">Tables
                                            </li>
                                            <li class="nav-item"><a class="nav-link"
                                                    href="modules/tables/basic-tables.html" asd="index"
                                                    data-bs-toggle="" aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Basic tables</span>
                                                    </div>
                                                </a>
                                                <!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link"
                                                    href="modules/tables/advance-tables.html" asd="index"
                                                    data-bs-toggle="" aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Advance tables</span>
                                                    </div>
                                                </a>
                                                <!-- more inner pages-->
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- parent pages-->
                                <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1"
                                        href="#components" asd="index" role="button"
                                        data-bs-toggle="collapse" aria-expanded="false"
                                        aria-controls="components">
                                        <div class="d-flex align-items-center">
                                            <div class="dropdown-indicator-icon"><span
                                                    class="fas fa-caret-right"></span></div><span
                                                class="nav-link-icon"><span
                                                    data-feather="package"></span></span><span
                                                class="nav-link-text">Components</span>
                                        </div>
                                    </a>
                                    <div class="parent-wrapper label-1">
                                        <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse"
                                            id="components">
                                            <li class="collapsed-nav-item-title d-none">Components
                                            </li>
                                            <li class="nav-item"><a class="nav-link"
                                                    href="modules/components/accordion.html" asd="index"
                                                    data-bs-toggle="" aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Accordion</span>
                                                    </div>
                                                </a>
                                                <!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link"
                                                    href="modules/components/avatar.html" asd="index"
                                                    data-bs-toggle="" aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Avatar</span>
                                                    </div>
                                                </a>
                                                <!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link"
                                                    href="modules/components/alerts.html" asd="index"
                                                    data-bs-toggle="" aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Alerts</span>
                                                    </div>
                                                </a>
                                                <!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link"
                                                    href="modules/components/badge.html" asd="index"
                                                    data-bs-toggle="" aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Badge</span>
                                                    </div>
                                                </a>
                                                <!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link"
                                                    href="modules/components/breadcrumb.html" asd="index"
                                                    data-bs-toggle="" aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Breadcrumb</span>
                                                    </div>
                                                </a>
                                                <!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link"
                                                    href="modules/components/button.html" asd="index"
                                                    data-bs-toggle="" aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Buttons</span>
                                                    </div>
                                                </a>
                                                <!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link"
                                                    href="modules/components/calendar.html" asd="index"
                                                    data-bs-toggle="" aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Calendar</span>
                                                    </div>
                                                </a>
                                                <!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link"
                                                    href="modules/components/card.html" asd="index"
                                                    data-bs-toggle="" aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Card</span>
                                                    </div>
                                                </a>
                                                <!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link dropdown-indicator"
                                                    href="#carousel" asd="index" data-bs-toggle="collapse"
                                                    aria-expanded="false" aria-controls="components">
                                                    <div class="d-flex align-items-center">
                                                        <div class="dropdown-indicator-icon"><span
                                                                class="fas fa-caret-right"></span></div><span
                                                            class="nav-link-text">Carousel</span>
                                                    </div>
                                                </a>
                                                <!-- more inner pages-->
                                                <div class="parent-wrapper">
                                                    <ul class="nav collapse parent" data-bs-parent="#components"
                                                        id="carousel">
                                                        <li class="nav-item"><a class="nav-link"
                                                                href="modules/components/carousel/bootstrap.html"
                                                                asd="index" data-bs-toggle=""
                                                                aria-expanded="false">
                                                                <div class="d-flex align-items-center"><span
                                                                        class="nav-link-text">Bootstrap</span>
                                                                </div>
                                                            </a>
                                                            <!-- more inner pages-->
                                                        </li>
                                                        <li class="nav-item"><a class="nav-link"
                                                                href="modules/components/carousel/swiper.html"
                                                                asd="index" data-bs-toggle=""
                                                                aria-expanded="false">
                                                                <div class="d-flex align-items-center"><span
                                                                        class="nav-link-text">Swiper</span>
                                                                </div>
                                                            </a>
                                                            <!-- more inner pages-->
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="nav-item"><a class="nav-link"
                                                    href="modules/components/collapse.html" asd="index"
                                                    data-bs-toggle="" aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Collapse</span>
                                                    </div>
                                                </a>
                                                <!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link"
                                                    href="modules/components/dropdown.html" asd="index"
                                                    data-bs-toggle="" aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Dropdown</span>
                                                    </div>
                                                </a>
                                                <!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link"
                                                    href="modules/components/list-group.html" asd="index"
                                                    data-bs-toggle="" aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">List group</span>
                                                    </div>
                                                </a>
                                                <!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link"
                                                    href="modules/components/modal.html" asd="index"
                                                    data-bs-toggle="" aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Modals</span>
                                                    </div>
                                                </a>
                                                <!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link dropdown-indicator"
                                                    href="#navs-_and_-Tabs" asd="index"
                                                    data-bs-toggle="collapse" aria-expanded="false"
                                                    aria-controls="components">
                                                    <div class="d-flex align-items-center">
                                                        <div class="dropdown-indicator-icon"><span
                                                                class="fas fa-caret-right"></span></div><span
                                                            class="nav-link-text">Navs &amp; Tabs</span>
                                                    </div>
                                                </a>
                                                <!-- more inner pages-->
                                                <div class="parent-wrapper">
                                                    <ul class="nav collapse parent" data-bs-parent="#components"
                                                        id="navs-_and_-Tabs">
                                                        <li class="nav-item"><a class="nav-link"
                                                                href="modules/components/navs-and-tabs/navs.html"
                                                                asd="index" data-bs-toggle=""
                                                                aria-expanded="false">
                                                                <div class="d-flex align-items-center"><span
                                                                        class="nav-link-text">Navs</span>
                                                                </div>
                                                            </a>
                                                            <!-- more inner pages-->
                                                        </li>
                                                        <li class="nav-item"><a class="nav-link"
                                                                href="modules/components/navs-and-tabs/navbar.html"
                                                                asd="index" data-bs-toggle=""
                                                                aria-expanded="false">
                                                                <div class="d-flex align-items-center"><span
                                                                        class="nav-link-text">Navbar</span>
                                                                </div>
                                                            </a>
                                                            <!-- more inner pages-->
                                                        </li>
                                                        <li class="nav-item"><a class="nav-link"
                                                                href="modules/components/navs-and-tabs/tabs.html"
                                                                asd="index" data-bs-toggle=""
                                                                aria-expanded="false">
                                                                <div class="d-flex align-items-center"><span
                                                                        class="nav-link-text">Tabs</span>
                                                                </div>
                                                            </a>
                                                            <!-- more inner pages-->
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="nav-item"><a class="nav-link"
                                                    href="modules/components/offcanvas.html" asd="index"
                                                    data-bs-toggle="" aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Offcanvas</span>
                                                    </div>
                                                </a>
                                                <!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link"
                                                    href="modules/components/progress-bar.html" asd="index"
                                                    data-bs-toggle="" aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Progress bar</span>
                                                    </div>
                                                </a>
                                                <!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link"
                                                    href="modules/components/placeholder.html" asd="index"
                                                    data-bs-toggle="" aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Placeholder</span>
                                                    </div>
                                                </a>
                                                <!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link"
                                                    href="modules/components/pagination.html" asd="index"
                                                    data-bs-toggle="" aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Pagination</span>
                                                    </div>
                                                </a>
                                                <!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link"
                                                    href="modules/components/popovers.html" asd="index"
                                                    data-bs-toggle="" aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Popovers</span>
                                                    </div>
                                                </a>
                                                <!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link"
                                                    href="modules/components/scrollspy.html" asd="index"
                                                    data-bs-toggle="" aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Scrollspy</span>
                                                    </div>
                                                </a>
                                                <!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link"
                                                    href="modules/components/spinners.html" asd="index"
                                                    data-bs-toggle="" aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Spinners</span>
                                                    </div>
                                                </a>
                                                <!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link"
                                                    href="modules/components/toast.html" asd="index"
                                                    data-bs-toggle="" aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Toast</span>
                                                    </div>
                                                </a>
                                                <!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link"
                                                    href="modules/components/tooltips.html" asd="index"
                                                    data-bs-toggle="" aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Tooltips</span>
                                                    </div>
                                                </a>
                                                <!-- more inner pages-->
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- parent pages-->
                                <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1"
                                        href="#utilities" asd="index" role="button"
                                        data-bs-toggle="collapse" aria-expanded="false" aria-controls="utilities">
                                        <div class="d-flex align-items-center">
                                            <div class="dropdown-indicator-icon"><span
                                                    class="fas fa-caret-right"></span></div><span
                                                class="nav-link-icon"><span data-feather="tool"></span></span><span
                                                class="nav-link-text">Utilities</span>
                                        </div>
                                    </a>
                                    <div class="parent-wrapper label-1">
                                        <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse"
                                            id="utilities">
                                            <li class="collapsed-nav-item-title d-none">Utilities
                                            </li>
                                            <li class="nav-item"><a class="nav-link"
                                                    href="modules/utilities/background.html" asd="index"
                                                    data-bs-toggle="" aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Background</span>
                                                    </div>
                                                </a>
                                                <!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link"
                                                    href="modules/utilities/borders.html" asd="index"
                                                    data-bs-toggle="" aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Borders</span>
                                                    </div>
                                                </a>
                                                <!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link"
                                                    href="modules/utilities/colors.html" asd="index"
                                                    data-bs-toggle="" aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Colors</span>
                                                    </div>
                                                </a>
                                                <!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link"
                                                    href="modules/utilities/display.html" asd="index"
                                                    data-bs-toggle="" aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Display</span>
                                                    </div>
                                                </a>
                                                <!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link"
                                                    href="modules/utilities/flex.html" asd="index"
                                                    data-bs-toggle="" aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Flex</span>
                                                    </div>
                                                </a>
                                                <!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link"
                                                    href="modules/utilities/float.html" asd="index"
                                                    data-bs-toggle="" aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Float</span>
                                                    </div>
                                                </a>
                                                <!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link"
                                                    href="modules/utilities/interactions.html" asd="index"
                                                    data-bs-toggle="" aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Interactions</span>
                                                    </div>
                                                </a>
                                                <!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link"
                                                    href="modules/utilities/opacity.html" asd="index"
                                                    data-bs-toggle="" aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Opacity</span>
                                                    </div>
                                                </a>
                                                <!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link"
                                                    href="modules/utilities/overflow.html" asd="index"
                                                    data-bs-toggle="" aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Overflow</span>
                                                    </div>
                                                </a>
                                                <!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link"
                                                    href="modules/utilities/position.html" asd="index"
                                                    data-bs-toggle="" aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Position</span>
                                                    </div>
                                                </a>
                                                <!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link"
                                                    href="modules/utilities/shadows.html" asd="index"
                                                    data-bs-toggle="" aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Shadows</span>
                                                    </div>
                                                </a>
                                                <!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link"
                                                    href="modules/utilities/sizing.html" asd="index"
                                                    data-bs-toggle="" aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Sizing</span>
                                                    </div>
                                                </a>
                                                <!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link"
                                                    href="modules/utilities/spacing.html" asd="index"
                                                    data-bs-toggle="" aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Spacing</span>
                                                    </div>
                                                </a>
                                                <!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link"
                                                    href="modules/utilities/typography.html" asd="index"
                                                    data-bs-toggle="" aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Typography</span>
                                                    </div>
                                                </a>
                                                <!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link"
                                                    href="modules/utilities/vertical-align.html" asd="index"
                                                    data-bs-toggle="" aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Vertical align</span>
                                                    </div>
                                                </a>
                                                <!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link"
                                                    href="modules/utilities/visibility.html" asd="index"
                                                    data-bs-toggle="" aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Visibility</span>
                                                    </div>
                                                </a>
                                                <!-- more inner pages-->
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- parent pages-->
                                <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1"
                                        href="#multi-level" asd="index" role="button"
                                        data-bs-toggle="collapse" aria-expanded="false"
                                        aria-controls="multi-level">
                                        <div class="d-flex align-items-center">
                                            <div class="dropdown-indicator-icon"><span
                                                    class="fas fa-caret-right"></span></div><span
                                                class="nav-link-icon"><span
                                                    data-feather="layers"></span></span><span
                                                class="nav-link-text">Multi level</span>
                                        </div>
                                    </a>
                                    <div class="parent-wrapper label-1">
                                        <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse"
                                            id="multi-level">
                                            <li class="collapsed-nav-item-title d-none">Multi level
                                            </li>
                                            <li class="nav-item"><a class="nav-link dropdown-indicator"
                                                    href="#level-two" asd="index" data-bs-toggle="collapse"
                                                    aria-expanded="false" aria-controls="multi-level">
                                                    <div class="d-flex align-items-center">
                                                        <div class="dropdown-indicator-icon"><span
                                                                class="fas fa-caret-right"></span></div><span
                                                            class="nav-link-text">Level two</span>
                                                    </div>
                                                </a>
                                                <!-- more inner pages-->
                                                <div class="parent-wrapper">
                                                    <ul class="nav collapse parent" data-bs-parent="#multi-level"
                                                        id="level-two">
                                                        <li class="nav-item"><a class="nav-link" href="#!.html"
                                                                asd="index" data-bs-toggle=""
                                                                aria-expanded="false">
                                                                <div class="d-flex align-items-center"><span
                                                                        class="nav-link-text">Item 1</span>
                                                                </div>
                                                            </a>
                                                            <!-- more inner pages-->
                                                        </li>
                                                        <li class="nav-item"><a class="nav-link" href="#!.html"
                                                                asd="index" data-bs-toggle=""
                                                                aria-expanded="false">
                                                                <div class="d-flex align-items-center"><span
                                                                        class="nav-link-text">Item 2</span>
                                                                </div>
                                                            </a>
                                                            <!-- more inner pages-->
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="nav-item"><a class="nav-link dropdown-indicator"
                                                    href="#level-three" asd="index" data-bs-toggle="collapse"
                                                    aria-expanded="false" aria-controls="multi-level">
                                                    <div class="d-flex align-items-center">
                                                        <div class="dropdown-indicator-icon"><span
                                                                class="fas fa-caret-right"></span></div><span
                                                            class="nav-link-text">Level three</span>
                                                    </div>
                                                </a>
                                                <!-- more inner pages-->
                                                <div class="parent-wrapper">
                                                    <ul class="nav collapse parent" data-bs-parent="#multi-level"
                                                        id="level-three">
                                                        <li class="nav-item"><a class="nav-link" href="#!.html"
                                                                asd="index" data-bs-toggle=""
                                                                aria-expanded="false">
                                                                <div class="d-flex align-items-center"><span
                                                                        class="nav-link-text">Item 3</span>
                                                                </div>
                                                            </a>
                                                            <!-- more inner pages-->
                                                        </li>
                                                        <li class="nav-item"><a class="nav-link dropdown-indicator"
                                                                href="#item-4" asd="index"
                                                                data-bs-toggle="collapse" aria-expanded="false"
                                                                aria-controls="level-three">
                                                                <div class="d-flex align-items-center">
                                                                    <div class="dropdown-indicator-icon"><span
                                                                            class="fas fa-caret-right"></span></div>
                                                                    <span class="nav-link-text">Item 4</span>
                                                                </div>
                                                            </a>
                                                            <!-- more inner pages-->
                                                            <div class="parent-wrapper">
                                                                <ul class="nav collapse parent"
                                                                    data-bs-parent="#level-three" id="item-4">
                                                                    <li class="nav-item"><a class="nav-link"
                                                                            href="#!.html" asd="index"
                                                                            data-bs-toggle="" aria-expanded="false">
                                                                            <div class="d-flex align-items-center">
                                                                                <span class="nav-link-text">Item
                                                                                    5</span>
                                                                            </div>
                                                                        </a>
                                                                        <!-- more inner pages-->
                                                                    </li>
                                                                    <li class="nav-item"><a class="nav-link"
                                                                            href="#!.html" asd="index"
                                                                            data-bs-toggle="" aria-expanded="false">
                                                                            <div class="d-flex align-items-center">
                                                                                <span class="nav-link-text">Item
                                                                                    6</span>
                                                                            </div>
                                                                        </a>
                                                                        <!-- more inner pages-->
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="nav-item"><a class="nav-link dropdown-indicator"
                                                    href="#level-four" asd="index" data-bs-toggle="collapse"
                                                    aria-expanded="false" aria-controls="multi-level">
                                                    <div class="d-flex align-items-center">
                                                        <div class="dropdown-indicator-icon"><span
                                                                class="fas fa-caret-right"></span></div><span
                                                            class="nav-link-text">Level four</span>
                                                    </div>
                                                </a>
                                                <!-- more inner pages-->
                                                <div class="parent-wrapper">
                                                    <ul class="nav collapse parent" data-bs-parent="#multi-level"
                                                        id="level-four">
                                                        <li class="nav-item"><a class="nav-link" href="#!.html"
                                                                asd="index" data-bs-toggle=""
                                                                aria-expanded="false">
                                                                <div class="d-flex align-items-center"><span
                                                                        class="nav-link-text">Item 6</span>
                                                                </div>
                                                            </a>
                                                            <!-- more inner pages-->
                                                        </li>
                                                        <li class="nav-item"><a class="nav-link dropdown-indicator"
                                                                href="#item-7" asd="index"
                                                                data-bs-toggle="collapse" aria-expanded="false"
                                                                aria-controls="level-four">
                                                                <div class="d-flex align-items-center">
                                                                    <div class="dropdown-indicator-icon"><span
                                                                            class="fas fa-caret-right"></span></div>
                                                                    <span class="nav-link-text">Item 7</span>
                                                                </div>
                                                            </a>
                                                            <!-- more inner pages-->
                                                            <div class="parent-wrapper">
                                                                <ul class="nav collapse parent"
                                                                    data-bs-parent="#level-four" id="item-7">
                                                                    <li class="nav-item"><a class="nav-link"
                                                                            href="#!.html" asd="index"
                                                                            data-bs-toggle="" aria-expanded="false">
                                                                            <div class="d-flex align-items-center">
                                                                                <span class="nav-link-text">Item
                                                                                    8</span>
                                                                            </div>
                                                                        </a>
                                                                        <!-- more inner pages-->
                                                                    </li>
                                                                    <li class="nav-item"><a
                                                                            class="nav-link dropdown-indicator"
                                                                            href="#item-9" asd="index"
                                                                            data-bs-toggle="collapse"
                                                                            aria-expanded="false"
                                                                            aria-controls="item-7">
                                                                            <div class="d-flex align-items-center">
                                                                                <div class="dropdown-indicator-icon">
                                                                                    <span
                                                                                        class="fas fa-caret-right"></span>
                                                                                </div><span class="nav-link-text">Item
                                                                                    9</span>
                                                                            </div>
                                                                        </a>
                                                                        <!-- more inner pages-->
                                                                        <div class="parent-wrapper">
                                                                            <ul class="nav collapse parent"
                                                                                data-bs-parent="#item-7"
                                                                                id="item-9">
                                                                                <li class="nav-item"><a
                                                                                        class="nav-link"
                                                                                        href="#!.html"
                                                                                        asd="index"
                                                                                        data-bs-toggle=""
                                                                                        aria-expanded="false">
                                                                                        <div
                                                                                            class="d-flex align-items-center">
                                                                                            <span
                                                                                                class="nav-link-text">Item
                                                                                                10</span>
                                                                                        </div>
                                                                                    </a>
                                                                                    <!-- more inner pages-->
                                                                                </li>
                                                                                <li class="nav-item"><a
                                                                                        class="nav-link"
                                                                                        href="#!.html"
                                                                                        asd="index"
                                                                                        data-bs-toggle=""
                                                                                        aria-expanded="false">
                                                                                        <div
                                                                                            class="d-flex align-items-center">
                                                                                            <span
                                                                                                class="nav-link-text">Item
                                                                                                11</span>
                                                                                        </div>
                                                                                    </a>
                                                                                    <!-- more inner pages-->
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item">
                                <!-- label-->
                                <p class="navbar-vertical-label">Documentation
                                </p>
                                <hr class="navbar-vertical-line" />
                                <!-- parent pages-->
                                <div class="nav-item-wrapper"><a class="nav-link label-1"
                                        href="documentation/getting-started.html" asd="index" role="button"
                                        data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                                    data-feather="life-buoy"></span></span><span
                                                class="nav-link-text-wrapper"><span class="nav-link-text">Getting
                                                    started</span></span>
                                        </div>
                                    </a>
                                </div>
                                <!-- parent pages-->
                                <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1"
                                        href="#customization" asd="index" role="button"
                                        data-bs-toggle="collapse" aria-expanded="false"
                                        aria-controls="customization">
                                        <div class="d-flex align-items-center">
                                            <div class="dropdown-indicator-icon"><span
                                                    class="fas fa-caret-right"></span></div><span
                                                class="nav-link-icon"><span
                                                    data-feather="settings"></span></span><span
                                                class="nav-link-text">Customization</span>
                                        </div>
                                    </a>
                                    <div class="parent-wrapper label-1">
                                        <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse"
                                            id="customization">
                                            <li class="collapsed-nav-item-title d-none">Customization
                                            </li>
                                            <li class="nav-item"><a class="nav-link"
                                                    href="documentation/customization/styling.html" asd="index"
                                                    data-bs-toggle="" aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Styling</span>
                                                    </div>
                                                </a>
                                                <!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link"
                                                    href="documentation/customization/plugin.html" asd="index"
                                                    data-bs-toggle="" aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Plugin</span>
                                                    </div>
                                                </a>
                                                <!-- more inner pages-->
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- parent pages-->
                                <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1"
                                        href="#layouts-doc" asd="index" role="button"
                                        data-bs-toggle="collapse" aria-expanded="false"
                                        aria-controls="layouts-doc">
                                        <div class="d-flex align-items-center">
                                            <div class="dropdown-indicator-icon"><span
                                                    class="fas fa-caret-right"></span></div><span
                                                class="nav-link-icon"><span data-feather="table"></span></span><span
                                                class="nav-link-text">Layouts doc</span>
                                        </div>
                                    </a>
                                    <div class="parent-wrapper label-1">
                                        <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse"
                                            id="layouts-doc">
                                            <li class="collapsed-nav-item-title d-none">Layouts doc
                                            </li>
                                            <li class="nav-item"><a class="nav-link"
                                                    href="documentation/layouts/vertical-navbar.html" asd="index"
                                                    data-bs-toggle="" aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Vertical navbar</span>
                                                    </div>
                                                </a>
                                                <!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link"
                                                    href="documentation/layouts/horizontal-navbar.html"
                                                    asd="index" data-bs-toggle="" aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Horizontal navbar</span>
                                                    </div>
                                                </a>
                                                <!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link"
                                                    href="documentation/layouts/combo-navbar.html" asd="index"
                                                    data-bs-toggle="" aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Combo navbar</span>
                                                    </div>
                                                </a>
                                                <!-- more inner pages-->
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- parent pages-->
                                <div class="nav-item-wrapper"><a class="nav-link label-1"
                                        href="documentation/gulp.html" asd="index" role="button"
                                        data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-icon font-awesome"><span
                                                    class="fa-brands fa-gulp fs-0 ms-1 me-1"></span></span><span
                                                class="nav-link-text-wrapper"><span
                                                    class="nav-link-text">Gulp</span></span>
                                        </div>
                                    </a>
                                </div>
                                <!-- parent pages-->
                                <div class="nav-item-wrapper"><a class="nav-link label-1"
                                        href="documentation/design-file.html" asd="index" role="button"
                                        data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                                    data-feather="figma"></span></span><span
                                                class="nav-link-text-wrapper"><span class="nav-link-text">Design
                                                    file</span></span>
                                        </div>
                                    </a>
                                </div>
                                <!-- parent pages-->
                                <div class="nav-item-wrapper"><a class="nav-link label-1" href="changelog.html"
                                        asd="index" role="button" data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                                    data-feather="git-merge"></span></span><span
                                                class="nav-link-text-wrapper"><span
                                                    class="nav-link-text">Changelog</span></span>
                                        </div>
                                    </a>
                                </div>
                                <!-- parent pages-->
                                <div class="nav-item-wrapper"><a class="nav-link label-1" href="showcase.html"
                                        asd="index" role="button" data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                                    data-feather="monitor"></span></span><span
                                                class="nav-link-text-wrapper"><span
                                                    class="nav-link-text">Showcase</span></span>
                                        </div>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="navbar-vertical-footer">
                    <button
                        class="btn navbar-vertical-toggle border-0 fw-semi-bold w-100 text-start white-space-nowrap"><span
                            class="uil uil-left-arrow-to-left fs-0"></span><span
                            class="uil uil-arrow-from-right fs-0"></span><span
                            class="navbar-vertical-footer-text ms-2">Collapsed View</span></button>
                </div>
            </nav>
            <nav class="navbar navbar-top navbar-expand" id="navbarDefault">
                <div class="collapse navbar-collapse justify-content-between">
                    <div class="navbar-logo">

                        <button class="btn navbar-toggler navbar-toggler-humburger-icon hover-bg-transparent"
                            type="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse"
                            aria-controls="navbarVerticalCollapse" aria-expanded="false"
                            aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span
                                    class="toggle-line"></span></span></button>
                        <a class="navbar-brand me-1 me-sm-3" href="index.html">
                            <div class="d-flex align-items-center">
                                <div class="d-flex align-items-center"><img src="{{ asset('img/icons/logo.png') }}"
                                        alt="phoenix" width="27" />
                                    <p class="logo-text ms-2 d-none d-sm-block">phoenix</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="search-box d-none d-lg-block" data-list='{"valueNames":["title"]}'
                        style="width:25rem;">
                        <form class="position-relative" data-bs-toggle="search" data-bs-display="static">
                            <input class="form-control form-control-sm rounded-pill search-input fuzzy-search"
                                type="search" placeholder="Search..." aria-label="Search" />
                            <span class="fas fa-search search-box-icon"></span>

                        </form>
                        <div class="btn-close position-absolute end-0 top-50 translate-middle cursor-pointer shadow-none"
                            data-bs-dismiss="search">
                            <button class="btn btn-link btn-close-falcon p-0" aria-label="Close"></button>
                        </div>
                        <div class="dropdown-menu border font-base start-0 py-0 overflow-hidden w-100">
                            <div class="scrollbar list pb-3" style="max-height: 30rem;">
                                <h6 class="dropdown-header text-1000 fs--2 py-2">24 <span
                                        class="text-500">results</span></h6>
                                <hr class="text-200 my-0" />
                                <h6 class="dropdown-header text-1000 fs--1 border-bottom py-2 lh-sm">Recently Searched
                                </h6><a class="dropdown-item" href="apps/e-commerce/landing/product-details.html">
                                    <div class="d-flex align-items-center">

                                        <div class="fw-normal text-1000 title"><span
                                                class="fa-solid fa-clock-rotate-left"
                                                data-fa-transform="shrink-2"></span> Store Macbook</div>
                                    </div>
                                </a>
                                <a class="dropdown-item" href="apps/e-commerce/landing/product-details.html">
                                    <div class="d-flex align-items-center">

                                        <div class="fw-normal text-1000 title"> <span
                                                class="fa-solid fa-clock-rotate-left"
                                                data-fa-transform="shrink-2"></span> MacBook Air - 13″</div>
                                    </div>
                                </a>

                                <hr class="text-200 my-0" />
                                <h6 class="dropdown-header text-1000 fs--1 border-bottom py-2 lh-sm">Products</h6><a
                                    class="dropdown-item py-2 d-flex align-items-center"
                                    href="apps/e-commerce/landing/product-details.html">
                                    <div class="file-thumbnail me-2"><img class="h-100 w-100 fit-cover rounded-3"
                                            src="{{ asset('img/products/3.png') }}" alt="" /></div>
                                    <div class="flex-1">
                                        <h6 class="mb-0 text-1000 title">MacBook Air - 13″</h6>
                                        <p class="fs--2 mb-0 d-flex text-700"><span class="fw-medium text-600">8GB
                                                Memory - 1.6GHz - 128GB Storage</span></p>
                                    </div>
                                </a>
                                <a class="dropdown-item py-2 d-flex align-items-center"
                                    href="apps/e-commerce/landing/product-details.html">
                                    <div class="file-thumbnail me-2"><img class="img-fluid"
                                            src="{{ asset('img/products/3.png') }}" alt="" /></div>
                                    <div class="flex-1">
                                        <h6 class="mb-0 text-1000 title">MacBook Pro - 13″</h6>
                                        <p class="fs--2 mb-0 d-flex text-700"><span
                                                class="fw-medium text-600 ms-2">30 Sep at 12:30 PM</span></p>
                                    </div>
                                </a>

                                <hr class="text-200 my-0" />
                                <h6 class="dropdown-header text-1000 fs--1 border-bottom py-2 lh-sm">Quick Links</h6>
                                <a class="dropdown-item" href="apps/e-commerce/landing/product-details.html">
                                    <div class="d-flex align-items-center">

                                        <div class="fw-normal text-1000 title"><span
                                                class="fa-solid fa-link text-900"
                                                data-fa-transform="shrink-2"></span> Support MacBook House</div>
                                    </div>
                                </a>
                                <a class="dropdown-item" href="apps/e-commerce/landing/product-details.html">
                                    <div class="d-flex align-items-center">

                                        <div class="fw-normal text-1000 title"> <span
                                                class="fa-solid fa-link text-900"
                                                data-fa-transform="shrink-2"></span> Store MacBook″</div>
                                    </div>
                                </a>

                                <hr class="text-200 my-0" />
                                <h6 class="dropdown-header text-1000 fs--1 border-bottom py-2 lh-sm">Files</h6><a
                                    class="dropdown-item" href="apps/e-commerce/landing/product-details.html">
                                    <div class="d-flex align-items-center">

                                        <div class="fw-normal text-1000 title"><span
                                                class="fa-solid fa-file-zipper text-900"
                                                data-fa-transform="shrink-2"></span> Library MacBook folder.rar</div>
                                    </div>
                                </a>
                                <a class="dropdown-item" href="apps/e-commerce/landing/product-details.html">
                                    <div class="d-flex align-items-center">

                                        <div class="fw-normal text-1000 title"> <span
                                                class="fa-solid fa-file-lines text-900"
                                                data-fa-transform="shrink-2"></span> Feature MacBook extensions.txt
                                        </div>
                                    </div>
                                </a>
                                <a class="dropdown-item" href="apps/e-commerce/landing/product-details.html">
                                    <div class="d-flex align-items-center">

                                        <div class="fw-normal text-1000 title"> <span
                                                class="fa-solid fa-image text-900"
                                                data-fa-transform="shrink-2"></span> MacBook Pro_13.jpg</div>
                                    </div>
                                </a>

                                <hr class="text-200 my-0" />
                                <h6 class="dropdown-header text-1000 fs--1 border-bottom py-2 lh-sm">Members</h6><a
                                    class="dropdown-item py-2 d-flex align-items-center"
                                    href="pages/pages/members.html">
                                    <div class="avatar avatar-l status-online  me-2 text-900">
                                        <img class="rounded-circle " src="{{ asset('img/team/10.png') }}"
                                            alt="" />

                                    </div>
                                    <div class="flex-1">
                                        <h6 class="mb-0 text-1000 title">Carry Anna</h6>
                                        <p class="fs--2 mb-0 d-flex text-700">anna@technext.it</p>
                                    </div>
                                </a>
                                <a class="dropdown-item py-2 d-flex align-items-center"
                                    href="pages/pages/members.html">
                                    <div class="avatar avatar-l  me-2 text-900">
                                        <img class="rounded-circle " src="{{ asset('img/team/12.png') }}"
                                            alt="" />

                                    </div>
                                    <div class="flex-1">
                                        <h6 class="mb-0 text-1000 title">John Smith</h6>
                                        <p class="fs--2 mb-0 d-flex text-700">smith@technext.it</p>
                                    </div>
                                </a>

                                <hr class="text-200 my-0" />
                                <h6 class="dropdown-header text-1000 fs--1 border-bottom py-2 lh-sm">Related Searches
                                </h6><a class="dropdown-item" href="apps/e-commerce/landing/product-details.html">
                                    <div class="d-flex align-items-center">

                                        <div class="fw-normal text-1000 title"><span
                                                class="fa-brands fa-firefox-browser text-900"
                                                data-fa-transform="shrink-2"></span> Search in the Web MacBook</div>
                                    </div>
                                </a>
                                <a class="dropdown-item" href="apps/e-commerce/landing/product-details.html">
                                    <div class="d-flex align-items-center">

                                        <div class="fw-normal text-1000 title"> <span
                                                class="fa-brands fa-chrome text-900"
                                                data-fa-transform="shrink-2"></span> Store MacBook″</div>
                                    </div>
                                </a>

                            </div>
                            <div class="text-center">
                                <p class="fallback fw-bold fs-1 d-none">No Result Found.</p>
                            </div>
                        </div>
                    </div>
                    <ul class="navbar-nav navbar-nav-icons flex-row">
                        <li class="nav-item">
                            <div class="theme-control-toggle fa-icon-wait px-2">
                                <input class="form-check-input ms-0 theme-control-toggle-input" type="checkbox"
                                    data-theme-control="phoenixTheme" value="dark" id="themeControlToggle" />
                                <label class="mb-0 theme-control-toggle-label theme-control-toggle-light"
                                    for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left"
                                    title="Switch theme"><span class="icon" data-feather="moon"></span></label>
                                <label class="mb-0 theme-control-toggle-label theme-control-toggle-dark"
                                    for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left"
                                    title="Switch theme"><span class="icon" data-feather="sun"></span></label>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false"><span class="text-700"
                                    data-feather="bell" style="height:20px;width:20px;"></span></a>

                            <div class="dropdown-menu dropdown-menu-end notification-dropdown-menu py-0 shadow border border-300 navbar-dropdown-caret"
                                id="navbarDropdownNotfication" aria-labelledby="navbarDropdownNotfication">
                                <div class="card position-relative border-0">
                                    <div class="card-header p-2">
                                        <div class="d-flex justify-content-between">
                                            <h5 class="text-black mb-0">Notificatons</h5>
                                            <button class="btn btn-link p-0 fs--1 fw-normal" type="button">Mark all
                                                as read</button>
                                        </div>
                                    </div>
                                    <div class="card-body p-0"></div>
                                    <div class="scrollbar-overlay">
                                        <div class="overflow-auto" style="height: 27rem;">
                                            <div class="border-300">
                                                <div
                                                    class="p-3 border-300 notification-card position-relative read border-bottom">
                                                    <div
                                                        class="d-flex align-items-center justify-content-between position-relative">
                                                        <div class="d-flex">
                                                            <div class="avatar avatar-m status-online me-3"><img
                                                                    class="rounded-circle"
                                                                    src="{{ asset('img/team/30.png') }}"
                                                                    alt="" />
                                                            </div>
                                                            <div class="me-3 flex-1">
                                                                <h4 class="fs--1 text-black">Jessie Samson</h4>
                                                                <p class="fs--1 text-1000 mb-2 mb-sm-3"><span
                                                                        class='me-1'>💬</span>Mentioned you in a
                                                                    comment.<span
                                                                        class="ms-2 text-500 fw-bold fs--2">10m</span>
                                                                </p>
                                                                <p class="text-800 fs--1 mb-0"><span
                                                                        class="me-1 fas fa-clock"></span><span
                                                                        class="fw-bold">10:41 AM </span>August 7,2021
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="font-sans-serif d-none d-sm-block">
                                                            <button
                                                                class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle"
                                                                type="button" data-bs-toggle="dropdown"
                                                                data-boundary="window" aria-haspopup="true"
                                                                aria-expanded="false"
                                                                data-bs-reference="parent"><span
                                                                    class="fas fa-ellipsis-h fs--2 text-900"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                                    class="dropdown-item" href="#!">Mark as
                                                                    unread</a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="p-3 border-300 notification-card position-relative unread border-bottom">
                                                    <div
                                                        class="d-flex align-items-center justify-content-between position-relative">
                                                        <div class="d-flex">
                                                            <div class="avatar avatar-m status-online me-3">
                                                                <div class="avatar-name rounded-circle"><span>J</span>
                                                                </div>
                                                            </div>
                                                            <div class="me-3 flex-1">
                                                                <h4 class="fs--1 text-black">Jane Foster</h4>
                                                                <p class="fs--1 text-1000 mb-2 mb-sm-3"><span
                                                                        class='me-1'>📅</span>Created an event.<span
                                                                        class="ms-2 text-500 fw-bold fs--2">20m</span>
                                                                </p>
                                                                <p class="text-800 fs--1 mb-0"><span
                                                                        class="me-1 fas fa-clock"></span><span
                                                                        class="fw-bold">10:20 AM </span>August 7,2021
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="font-sans-serif d-none d-sm-block">
                                                            <button
                                                                class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle"
                                                                type="button" data-bs-toggle="dropdown"
                                                                data-boundary="window" aria-haspopup="true"
                                                                aria-expanded="false"
                                                                data-bs-reference="parent"><span
                                                                    class="fas fa-ellipsis-h fs--2 text-900"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                                    class="dropdown-item" href="#!">Mark as
                                                                    unread</a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="p-3 border-300 notification-card position-relative unread border-bottom">
                                                    <div
                                                        class="d-flex align-items-center justify-content-between position-relative">
                                                        <div class="d-flex">
                                                            <div class="avatar avatar-m status-online me-3"><img
                                                                    class="rounded-circle avatar-placeholder"
                                                                    src="{{ asset('img/team/avatar.png') }}"
                                                                    alt="" />
                                                            </div>
                                                            <div class="me-3 flex-1">
                                                                <h4 class="fs--1 text-black">Jessie Samson</h4>
                                                                <p class="fs--1 text-1000 mb-2 mb-sm-3"><span
                                                                        class='me-1'>👍</span>Liked your
                                                                    comment.<span
                                                                        class="ms-2 text-500 fw-bold fs--2">1h</span>
                                                                </p>
                                                                <p class="text-800 fs--1 mb-0"><span
                                                                        class="me-1 fas fa-clock"></span><span
                                                                        class="fw-bold">9:30 AM </span>August 7,2021
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="font-sans-serif d-none d-sm-block">
                                                            <button
                                                                class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle"
                                                                type="button" data-bs-toggle="dropdown"
                                                                data-boundary="window" aria-haspopup="true"
                                                                aria-expanded="false"
                                                                data-bs-reference="parent"><span
                                                                    class="fas fa-ellipsis-h fs--2 text-900"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                                    class="dropdown-item" href="#!">Mark as
                                                                    unread</a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="border-300">
                                                <div
                                                    class="p-3 border-300 notification-card position-relative unread border-bottom">
                                                    <div
                                                        class="d-flex align-items-center justify-content-between position-relative">
                                                        <div class="d-flex">
                                                            <div class="avatar avatar-m status-online me-3"><img
                                                                    class="rounded-circle"
                                                                    src="{{ asset('img/team/57.png') }}"
                                                                    alt="" />
                                                            </div>
                                                            <div class="me-3 flex-1">
                                                                <h4 class="fs--1 text-black">Kiera Anderson</h4>
                                                                <p class="fs--1 text-1000 mb-2 mb-sm-3"><span
                                                                        class='me-1 fs--2'>💬</span>Mentioned you in a
                                                                    comment.<span
                                                                        class="ms-2 text-500 fw-bold fs--2"></span>
                                                                </p>
                                                                <p class="text-800 fs--1 mb-0"><span
                                                                        class="me-1 fas fa-clock"></span><span
                                                                        class="fw-bold">9:11 AM </span>August 7,2021
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="font-sans-serif d-none d-sm-block">
                                                            <button
                                                                class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle"
                                                                type="button" data-bs-toggle="dropdown"
                                                                data-boundary="window" aria-haspopup="true"
                                                                aria-expanded="false"
                                                                data-bs-reference="parent"><span
                                                                    class="fas fa-ellipsis-h fs--2 text-900"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                                    class="dropdown-item" href="#!">Mark as
                                                                    unread</a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="p-3 border-300 notification-card position-relative unread border-bottom">
                                                    <div
                                                        class="d-flex align-items-center justify-content-between position-relative">
                                                        <div class="d-flex">
                                                            <div class="avatar avatar-m status-online me-3"><img
                                                                    class="rounded-circle"
                                                                    src="{{ asset('img/team/59.png') }}"
                                                                    alt="" />
                                                            </div>
                                                            <div class="me-3 flex-1">
                                                                <h4 class="fs--1 text-black">Herman Carter</h4>
                                                                <p class="fs--1 text-1000 mb-2 mb-sm-3"><span
                                                                        class='me-1'>👤</span>Tagged you in a
                                                                    comment.<span
                                                                        class="ms-2 text-500 fw-bold fs--2"></span>
                                                                </p>
                                                                <p class="text-800 fs--1 mb-0"><span
                                                                        class="me-1 fas fa-clock"></span><span
                                                                        class="fw-bold">10:58 PM </span>August 7,2021
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="font-sans-serif d-none d-sm-block">
                                                            <button
                                                                class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle"
                                                                type="button" data-bs-toggle="dropdown"
                                                                data-boundary="window" aria-haspopup="true"
                                                                aria-expanded="false"
                                                                data-bs-reference="parent"><span
                                                                    class="fas fa-ellipsis-h fs--2 text-900"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                                    class="dropdown-item" href="#!">Mark as
                                                                    unread</a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="p-3 border-300 notification-card position-relative read ">
                                                    <div
                                                        class="d-flex align-items-center justify-content-between position-relative">
                                                        <div class="d-flex">
                                                            <div class="avatar avatar-m status-online me-3"><img
                                                                    class="rounded-circle"
                                                                    src="{{ asset('img/team/58.png') }}"
                                                                    alt="" />
                                                            </div>
                                                            <div class="me-3 flex-1">
                                                                <h4 class="fs--1 text-black">Benjamin Button</h4>
                                                                <p class="fs--1 text-1000 mb-2 mb-sm-3"><span
                                                                        class='me-1'>👍</span>Liked your
                                                                    comment.<span
                                                                        class="ms-2 text-500 fw-bold fs--2"></span>
                                                                </p>
                                                                <p class="text-800 fs--1 mb-0"><span
                                                                        class="me-1 fas fa-clock"></span><span
                                                                        class="fw-bold">10:18 AM </span>August 7,2021
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="font-sans-serif d-none d-sm-block">
                                                            <button
                                                                class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle"
                                                                type="button" data-bs-toggle="dropdown"
                                                                data-boundary="window" aria-haspopup="true"
                                                                aria-expanded="false"
                                                                data-bs-reference="parent"><span
                                                                    class="fas fa-ellipsis-h fs--2 text-900"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                                    class="dropdown-item" href="#!">Mark as
                                                                    unread</a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer p-0 border-top border-0">
                                        <div class="my-2 text-center fw-bold fs--2 text-600"><a class="fw-bolder"
                                                href="pages/pages/notifications.html">Notification history</a></div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" id="navbarDropdownNindeDots" href="#" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <svg width="16" height="16" viewbox="0 0 16 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="2" cy="2" r="2" fill="currentColor">
                                    </circle>
                                    <circle cx="2" cy="8" r="2" fill="currentColor">
                                    </circle>
                                    <circle cx="2" cy="14" r="2" fill="currentColor">
                                    </circle>
                                    <circle cx="8" cy="8" r="2" fill="currentColor">
                                    </circle>
                                    <circle cx="8" cy="14" r="2" fill="currentColor">
                                    </circle>
                                    <circle cx="14" cy="8" r="2" fill="currentColor">
                                    </circle>
                                    <circle cx="14" cy="14" r="2" fill="currentColor">
                                    </circle>
                                    <circle cx="8" cy="2" r="2" fill="currentColor">
                                    </circle>
                                    <circle cx="14" cy="2" r="2" fill="currentColor">
                                    </circle>
                                </svg>
                            </a>
                        </li>
                        <li class="nav-item dropdown"><a class="nav-link lh-1 pe-0" id="navbarDropdownUser"
                                href="#!" role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <div class="avatar avatar-l ">
                                    <img class="rounded-circle " src="{{ asset('img/team/57.png') }}"
                                        alt="" />

                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-profile shadow border border-300"
                                aria-labelledby="navbarDropdownUser">
                                <div class="card position-relative border-0">
                                    <div class="card-body p-0">
                                        <div class="text-center pt-4 pb-3">
                                            <div class="avatar avatar-xl ">
                                                <img class="rounded-circle " src="{{ asset('img/team/57.png') }}"
                                                    alt="" />

                                            </div>
                                            <h6 class="mt-2 text-black">Jerry Seinfield</h6>
                                        </div>
                                        <div class="mb-3 mx-3">
                                            <input class="form-control form-control-sm" id="statusUpdateInput"
                                                type="text" placeholder="Update your status" />
                                        </div>
                                    </div>
                                    <div class="overflow-auto scrollbar" style="height: 10rem;">
                                        <ul class="nav d-flex flex-column mb-2 pb-1">
                                            <li class="nav-item"><a class="nav-link px-3" href="#!"> <span
                                                        class="me-2 text-900" data-feather="user"></span>Profile</a>
                                            </li>
                                            <li class="nav-item"><a class="nav-link px-3" href="#!"><span
                                                        class="me-2 text-900"
                                                        data-feather="pie-chart"></span>Dashboard</a></li>
                                            <li class="nav-item"><a class="nav-link px-3" href="#!"> <span
                                                        class="me-2 text-900" data-feather="lock"></span>Posts &amp;
                                                    Activity</a></li>
                                            <li class="nav-item"><a class="nav-link px-3" href="#!"> <span
                                                        class="me-2 text-900"
                                                        data-feather="settings"></span>Settings &amp; Privacy </a>
                                            </li>
                                            <li class="nav-item"><a class="nav-link px-3" href="#!"> <span
                                                        class="me-2 text-900" data-feather="help-circle"></span>Help
                                                    Center</a></li>
                                            <li class="nav-item"><a class="nav-link px-3" href="#!"> <span
                                                        class="me-2 text-900"
                                                        data-feather="globe"></span>Language</a></li>
                                        </ul>
                                    </div>
                                    <div class="card-footer p-0 border-top">
                                        <ul class="nav d-flex flex-column my-3">
                                            <li class="nav-item"><a class="nav-link px-3" href="#!"> <span
                                                        class="me-2 text-900" data-feather="user-plus"></span>Add
                                                    another account</a></li>
                                        </ul>
                                        <hr />
                                        <div class="px-3"> <a
                                                class="btn btn-phoenix-secondary d-flex flex-center w-100"
                                                href="#!"> <span class="me-2" data-feather="log-out">
                                                </span>Sign out</a></div>
                                        <div class="my-2 text-center fw-bold fs--2 text-600"><a
                                                class="text-600 me-1" href="#!">Privacy policy</a>&bull;<a
                                                class="text-600 mx-1" href="#!">Terms</a>&bull;<a
                                                class="text-600 ms-1" href="#!">Cookies</a></div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="content">
                <div class="pb-5">
                    <div class="row g-4">
                        <div class="col-12 col-xxl-6">
                            <div class="mb-8">
                                <h2 class="mb-2">Ecommerce Dashboard</h2>
                                <h5 class="text-700 fw-semi-bold">Here’s what’s going on at your business right now
                                </h5>
                            </div>
                            <div class="row align-items-center g-4">
                                <div class="col-12 col-md-auto">
                                    <div class="d-flex align-items-center"><img
                                            src="{{ asset('img/icons/illustrations/4l.png') }}" alt=""
                                            height="46" width="46" />
                                        <div class="ms-3">
                                            <h4 class="mb-0">57 new orders</h4>
                                            <p class="text-800 fs--1 mb-0">Awating processing</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-auto">
                                    <div class="d-flex align-items-center"><img
                                            src="{{ asset('img/icons/illustrations/3l.png') }}" alt=""
                                            height="46" width="46" />
                                        <div class="ms-3">
                                            <h4 class="mb-0">5 orders</h4>
                                            <p class="text-800 fs--1 mb-0">On hold</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-auto">
                                    <div class="d-flex align-items-center"><img
                                            src="{{ asset('img/icons/illustrations/2l.png') }}" alt=""
                                            height="46" width="46" />
                                        <div class="ms-3">
                                            <h4 class="mb-0">15 products</h4>
                                            <p class="text-800 fs--1 mb-0">Out of stock</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr class="bg-200 mb-6 mt-4" />
                            <div class="row flex-between-center mb-4 g-3">
                                <div class="col-auto">
                                    <h3>Total sells</h3>
                                    <p class="text-700 lh-sm mb-0">Payment received across all channels</p>
                                </div>
                                <div class="col-8 col-sm-4">
                                    <select class="form-select form-select-sm mt-2" id="select-gross-revenue-month">
                                        <option>Mar 1 - 31, 2022</option>
                                        <option>April 1 - 30, 2022</option>
                                        <option>May 1 - 31, 2022</option>
                                    </select>
                                </div>
                            </div>
                            <div class="echart-total-sales-chart" style="min-height:320px;width:100%"
                                data-echart-responsive="data-echart-responsive"></div>
                        </div>
                        <div class="col-12 col-xxl-6">
                            <div class="row g-3">
                                <div class="col-12 col-md-6">
                                    <div class="card h-100">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between">
                                                <div>
                                                    <h5 class="mb-1">Total orders<span
                                                            class="badge badge-phoenix badge-phoenix-warning rounded-pill fs--1 ms-2"><span
                                                                class="badge-label">-6.8%</span></span></h5>
                                                    <h6 class="text-700">Last 7 days</h6>
                                                </div>
                                                <h4>16,247</h4>
                                            </div>
                                            <div class="d-flex justify-content-center px-4 py-6">
                                                <div class="echart-total-orders" style="height:85px;width:115px">
                                                </div>
                                            </div>
                                            <div class="mt-2">
                                                <div class="d-flex align-items-center mb-2">
                                                    <div class="bullet-item bg-primary me-2"></div>
                                                    <h6 class="text-900 fw-semi-bold flex-1 mb-0">Completed</h6>
                                                    <h6 class="text-900 fw-semi-bold mb-0">52%</h6>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <div class="bullet-item bg-primary-100 me-2"></div>
                                                    <h6 class="text-900 fw-semi-bold flex-1 mb-0">Pending payment</h6>
                                                    <h6 class="text-900 fw-semi-bold mb-0">48%</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="card h-100">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between">
                                                <div>
                                                    <h5 class="mb-1">New customers<span
                                                            class="badge badge-phoenix badge-phoenix-warning rounded-pill fs--1 ms-2">
                                                            <span class="badge-label">+26.5%</span></span></h5>
                                                    <h6 class="text-700">Last 7 days</h6>
                                                </div>
                                                <h4>356</h4>
                                            </div>
                                            <div class="pb-0 pt-4">
                                                <div class="echarts-new-customers" style="height:180px;width:100%;"
                                                    data-echart-responsive="true"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="card h-100">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between">
                                                <div>
                                                    <h5 class="mb-2">Top coupons</h5>
                                                    <h6 class="text-700">Last 7 days</h6>
                                                </div>
                                            </div>
                                            <div class="pb-4 pt-3">
                                                <div class="echart-top-coupons" style="height:115px;width:100%;">
                                                </div>
                                            </div>
                                            <div>
                                                <div class="d-flex align-items-center mb-2">
                                                    <div class="bullet-item bg-primary me-2"></div>
                                                    <h6 class="text-900 fw-semi-bold flex-1 mb-0">Percentage discount
                                                    </h6>
                                                    <h6 class="text-900 fw-semi-bold mb-0">72%</h6>
                                                </div>
                                                <div class="d-flex align-items-center mb-2">
                                                    <div class="bullet-item bg-primary-200 me-2"></div>
                                                    <h6 class="text-900 fw-semi-bold flex-1 mb-0">Fixed card discount
                                                    </h6>
                                                    <h6 class="text-900 fw-semi-bold mb-0">18%</h6>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <div class="bullet-item bg-info me-2"></div>
                                                    <h6 class="text-900 fw-semi-bold flex-1 mb-0">Fixed product
                                                        discount</h6>
                                                    <h6 class="text-900 fw-semi-bold mb-0">10%</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="card h-100">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between">
                                                <div>
                                                    <h5 class="mb-2">Paying vs non paying</h5>
                                                    <h6 class="text-700">Last 7 days</h6>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-center pt-3">
                                                <div style="height:145px;width:140px">
                                                    <canvas id="payingCustomerChart"></canvas>
                                                </div>
                                            </div>
                                            <div class="mt-3">
                                                <div class="d-flex align-items-center mb-2">
                                                    <div class="bullet-item bg-primary me-2"></div>
                                                    <h6 class="text-900 fw-semi-bold flex-1 mb-0">Paying customer</h6>
                                                    <h6 class="text-900 fw-semi-bold mb-0">30%</h6>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <div class="bullet-item bg-primary-100 me-2"></div>
                                                    <h6 class="text-900 fw-semi-bold flex-1 mb-0">Non-paying customer
                                                    </h6>
                                                    <h6 class="text-900 fw-semi-bold mb-0">70%</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mx-n4 px-4 mx-lg-n6 px-lg-6 bg-white pt-7 border-y border-300">
                    <div data-list='{"valueNames":["product","customer","rating","review","time"],"page":6}'>
                        <div class="row align-items-end justify-content-between pb-5 g-3">
                            <div class="col-auto">
                                <h3>Latest reviews</h3>
                                <p class="text-700 lh-sm mb-0">Payment received across all channels</p>
                            </div>
                            <div class="col-12 col-md-auto">
                                <div class="row g-2 gy-3">
                                    <div class="col-auto flex-1">
                                        <div class="search-box">
                                            <form class="position-relative" data-bs-toggle="search"
                                                data-bs-display="static">
                                                <input class="form-control search-input search form-control-sm"
                                                    type="search" placeholder="Search" aria-label="Search" />
                                                <span class="fas fa-search search-box-icon"></span>

                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <button class="btn btn-sm btn-phoenix-secondary bg-white hover-bg-100 me-2"
                                            type="button">All products</button>
                                        <button class="btn btn-sm btn-phoenix-secondary bg-white hover-bg-100"
                                            type="button" data-bs-toggle="dropdown" data-boundary="window"
                                            aria-haspopup="true" aria-expanded="false"
                                            data-bs-reference="parent"><span
                                                class="fas fa-ellipsis-h fs--2"></span></button>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                            <li><a class="dropdown-item" href="#">Another action</a></li>
                                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive mx-n1 px-1 scrollbar">
                            <table class="table fs--1 mb-0 border-top border-200">
                                <thead>
                                    <tr>
                                        <th class="white-space-nowrap fs--1 ps-0 align-middle">
                                            <div class="form-check mb-0 fs-0">
                                                <input class="form-check-input" type="checkbox" />
                                            </div>
                                        </th>
                                        <th class="sort white-space-nowrap align-middle" scope="col"></th>
                                        <th class="sort white-space-nowrap align-middle" scope="col"
                                            style="min-width:360px;" data-sort="product">PRODUCT</th>
                                        <th class="sort align-middle" scope="col" data-sort="customer"
                                            style="min-width:200px;">CUSTOMER</th>
                                        <th class="sort align-middle" scope="col" data-sort="rating"
                                            style="min-width:110px;">RATING</th>
                                        <th class="sort align-middle" scope="col" style="max-width:350px;"
                                            data-sort="review">REVIEW</th>
                                        <th class="sort text-start ps-5 align-middle" scope="col"
                                            data-sort="status">STATUS</th>
                                        <th class="sort text-end align-middle" scope="col" data-sort="time">
                                            TIME</th>
                                        <th class="sort text-end pe-0 align-middle" scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody class="list" id="table-latest-review-body">
                                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                        <td class="fs--1 align-middle ps-0">
                                            <div class="form-check mb-0 fs-0">
                                                <input class="form-check-input" type="checkbox" />
                                            </div>
                                        </td>
                                        <td class="align-middle product white-space-nowrap py-0">
                                            <div class="rounded-2 border"><img
                                                    src="{{ asset('img//products/1.png') }}" alt=""
                                                    width="53" /></div>
                                        </td>
                                        <td class="align-middle product white-space-nowrap"><a class="fw-semi-bold"
                                                href="apps/e-commerce/landing/product-details.html">Fitbit Sense
                                                Advanced Smartwatch with Tools fo...</a></td>
                                        <td class="align-middle customer white-space-nowrap"><a
                                                class="d-flex align-items-center" href="#!">
                                                <div class="avatar avatar-l">
                                                    <div class="avatar-name rounded-circle"><span>R</span></div>
                                                </div>
                                                <h6 class="mb-0 ms-3 text-900">Richard Dawkins</h6>
                                            </a></td>
                                        <td class="align-middle rating white-space-nowrap fs--2"><span
                                                class="fa fa-star text-warning"></span><span
                                                class="fa fa-star text-warning"></span><span
                                                class="fa fa-star text-warning"></span><span
                                                class="fa fa-star text-warning"></span><span
                                                class="fa fa-star text-warning"></span>
                                        </td>
                                        <td class="align-middle review" style="min-width:350px;">
                                            <p class="fs--1 fw-semi-bold text-1000 mb-0">This Fitbit is fantastic! I
                                                was trying to be in better shape and needed some motivation, so I
                                                decided to treat myself to a new Fitbit.</p>
                                        </td>
                                        <td class="align-middle text-start ps-5 status"><span
                                                class="badge badge-phoenix fs--2 badge-phoenix-success"><span
                                                    class="badge-label">Approved</span><span class="ms-1"
                                                    data-feather="check"
                                                    style="height:12.8px;width:12.8px;"></span></span></td>
                                        <td class="align-middle text-end time white-space-nowrap">
                                            <div class="hover-hide">
                                                <h6 class="text-1000 mb-0">Just now</h6>
                                            </div>
                                        </td>
                                        <td class="align-middle white-space-nowrap text-end pe-0">
                                            <div class="position-relative">
                                                <div class="hover-actions">
                                                    <button class="btn btn-sm btn-phoenix-secondary me-1 fs--2"><span
                                                            class="fas fa-check"></span></button>
                                                    <button class="btn btn-sm btn-phoenix-secondary fs--2"><span
                                                            class="fas fa-trash"></span></button>
                                                </div>
                                            </div>
                                            <div class="font-sans-serif btn-reveal-trigger position-static">
                                                <button
                                                    class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs--2"
                                                    type="button" data-bs-toggle="dropdown"
                                                    data-boundary="window" aria-haspopup="true"
                                                    aria-expanded="false" data-bs-reference="parent"><span
                                                        class="fas fa-ellipsis-h fs--2"></span></button>
                                                <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                        class="dropdown-item" href="#!">View</a><a
                                                        class="dropdown-item" href="#!">Export</a>
                                                    <div class="dropdown-divider"></div><a
                                                        class="dropdown-item text-danger" href="#!">Remove</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                        <td class="fs--1 align-middle ps-0">
                                            <div class="form-check mb-0 fs-0">
                                                <input class="form-check-input" type="checkbox" />
                                            </div>
                                        </td>
                                        <td class="align-middle product white-space-nowrap py-0">
                                            <div class="rounded-2 border"><img
                                                    src="{{ asset('img//products/2.png') }}" alt=""
                                                    width="53" /></div>
                                        </td>
                                        <td class="align-middle product white-space-nowrap"><a class="fw-semi-bold"
                                                href="apps/e-commerce/landing/product-details.html">iPhone 13 pro
                                                max-Pacific Blue-128GB storage</a></td>
                                        <td class="align-middle customer white-space-nowrap"><a
                                                class="d-flex align-items-center" href="#!">
                                                <div class="avatar avatar-l"><img class="rounded-circle"
                                                        src="{{ asset('img/team/59.png') }}" alt="" />
                                                </div>
                                                <h6 class="mb-0 ms-3 text-900">Ashley Garrett</h6>
                                            </a></td>
                                        <td class="align-middle rating white-space-nowrap fs--2"><span
                                                class="fa fa-star text-warning"></span><span
                                                class="fa fa-star text-warning"></span><span
                                                class="fa fa-star text-warning"></span><span
                                                class="fa-regular fa-star text-warning-300"></span><span
                                                class="fa-regular fa-star text-warning-300"></span>
                                        </td>
                                        <td class="align-middle review" style="min-width:350px;">
                                            <p class="fs--1 fw-semi-bold text-1000 mb-0">The order was delivered ahead
                                                of schedule. To give us additional time, you should leave the packaging
                                                sealed with plastic.</p>
                                        </td>
                                        <td class="align-middle text-start ps-5 status"><span
                                                class="badge badge-phoenix fs--2 badge-phoenix-success"><span
                                                    class="badge-label">Approved</span><span class="ms-1"
                                                    data-feather="check"
                                                    style="height:12.8px;width:12.8px;"></span></span></td>
                                        <td class="align-middle text-end time white-space-nowrap">
                                            <div class="hover-hide">
                                                <h6 class="text-1000 mb-0">Just now</h6>
                                            </div>
                                        </td>
                                        <td class="align-middle white-space-nowrap text-end pe-0">
                                            <div class="position-relative">
                                                <div class="hover-actions">
                                                    <button class="btn btn-sm btn-phoenix-secondary me-1 fs--2"><span
                                                            class="fas fa-check"></span></button>
                                                    <button class="btn btn-sm btn-phoenix-secondary fs--2"><span
                                                            class="fas fa-trash"></span></button>
                                                </div>
                                            </div>
                                            <div class="font-sans-serif btn-reveal-trigger position-static">
                                                <button
                                                    class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs--2"
                                                    type="button" data-bs-toggle="dropdown"
                                                    data-boundary="window" aria-haspopup="true"
                                                    aria-expanded="false" data-bs-reference="parent"><span
                                                        class="fas fa-ellipsis-h fs--2"></span></button>
                                                <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                        class="dropdown-item" href="#!">View</a><a
                                                        class="dropdown-item" href="#!">Export</a>
                                                    <div class="dropdown-divider"></div><a
                                                        class="dropdown-item text-danger" href="#!">Remove</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                        <td class="fs--1 align-middle ps-0">
                                            <div class="form-check mb-0 fs-0">
                                                <input class="form-check-input" type="checkbox" />
                                            </div>
                                        </td>
                                        <td class="align-middle product white-space-nowrap py-0">
                                            <div class="rounded-2 border"><img
                                                    src="{{ asset('img//products/3.png') }}" alt=""
                                                    width="53" /></div>
                                        </td>
                                        <td class="align-middle product white-space-nowrap"><a class="fw-semi-bold"
                                                href="apps/e-commerce/landing/product-details.html">Apple MacBook Pro
                                                13 inch-M1-8/256GB-space</a></td>
                                        <td class="align-middle customer white-space-nowrap"><a
                                                class="d-flex align-items-center" href="#!">
                                                <div class="avatar avatar-l"><img class="rounded-circle"
                                                        src="{{ asset('img/team/58.png') }}" alt="" />
                                                </div>
                                                <h6 class="mb-0 ms-3 text-900">Woodrow Burton</h6>
                                            </a></td>
                                        <td class="align-middle rating white-space-nowrap fs--2"><span
                                                class="fa fa-star text-warning"></span><span
                                                class="fa fa-star text-warning"></span><span
                                                class="fa fa-star text-warning"></span><span
                                                class="fa fa-star text-warning"></span><span
                                                class="fa fa-star-half-alt star-icon text-warning"></span>
                                        </td>
                                        <td class="align-middle review" style="min-width:350px;">
                                            <p class="fs--1 fw-semi-bold text-1000 mb-0">Its a Mac, after all. Once
                                                you've gone Mac, there's no going back. My first Mac lasted over nine
                                                years, and this is my second.</p>
                                        </td>
                                        <td class="align-middle text-start ps-5 status"><span
                                                class="badge badge-phoenix fs--2 badge-phoenix-warning"><span
                                                    class="badge-label">Pending</span><span class="ms-1"
                                                    data-feather="clock"
                                                    style="height:12.8px;width:12.8px;"></span></span></td>
                                        <td class="align-middle text-end time white-space-nowrap">
                                            <div class="hover-hide">
                                                <h6 class="text-1000 mb-0">Just now</h6>
                                            </div>
                                        </td>
                                        <td class="align-middle white-space-nowrap text-end pe-0">
                                            <div class="position-relative">
                                                <div class="hover-actions">
                                                    <button class="btn btn-sm btn-phoenix-secondary me-1 fs--2"><span
                                                            class="fas fa-check"></span></button>
                                                    <button class="btn btn-sm btn-phoenix-secondary fs--2"><span
                                                            class="fas fa-trash"></span></button>
                                                </div>
                                            </div>
                                            <div class="font-sans-serif btn-reveal-trigger position-static">
                                                <button
                                                    class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs--2"
                                                    type="button" data-bs-toggle="dropdown"
                                                    data-boundary="window" aria-haspopup="true"
                                                    aria-expanded="false" data-bs-reference="parent"><span
                                                        class="fas fa-ellipsis-h fs--2"></span></button>
                                                <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                        class="dropdown-item" href="#!">View</a><a
                                                        class="dropdown-item" href="#!">Export</a>
                                                    <div class="dropdown-divider"></div><a
                                                        class="dropdown-item text-danger" href="#!">Remove</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                        <td class="fs--1 align-middle ps-0">
                                            <div class="form-check mb-0 fs-0">
                                                <input class="form-check-input" type="checkbox" />
                                            </div>
                                        </td>
                                        <td class="align-middle product white-space-nowrap py-0">
                                            <div class="rounded-2 border"><img
                                                    src="{{ asset('img//products/4.png') }}" alt=""
                                                    width="53" /></div>
                                        </td>
                                        <td class="align-middle product white-space-nowrap"><a class="fw-semi-bold"
                                                href="apps/e-commerce/landing/product-details.html">Apple iMac
                                                24&quot; 4K Retina Display M1 8 Core CPU...</a></td>
                                        <td class="align-middle customer white-space-nowrap"><a
                                                class="d-flex align-items-center" href="#!">
                                                <div class="avatar avatar-l"><img
                                                        class="rounded-circle avatar-placeholder"
                                                        src="{{ asset('img/team/avatar.png') }}" alt="" />
                                                </div>
                                                <h6 class="mb-0 ms-3 text-900">Eric McGee</h6>
                                            </a></td>
                                        <td class="align-middle rating white-space-nowrap fs--2"><span
                                                class="fa fa-star text-warning"></span><span
                                                class="fa fa-star text-warning"></span><span
                                                class="fa fa-star text-warning"></span><span
                                                class="fa-regular fa-star text-warning-300"></span><span
                                                class="fa-regular fa-star text-warning-300"></span>
                                        </td>
                                        <td class="align-middle review" style="min-width:350px;">
                                            <p class="fs--1 fw-semi-bold text-1000 mb-0">Personally, I like the
                                                minimalist style, but I wouldn't choose it if I were searching for a
                                                computer that I would use frequently. It's...<a href='#!'>See
                                                    more</a></p>
                                        </td>
                                        <td class="align-middle text-start ps-5 status"><span
                                                class="badge badge-phoenix fs--2 badge-phoenix-warning"><span
                                                    class="badge-label">Pending</span><span class="ms-1"
                                                    data-feather="clock"
                                                    style="height:12.8px;width:12.8px;"></span></span></td>
                                        <td class="align-middle text-end time white-space-nowrap">
                                            <div class="hover-hide">
                                                <h6 class="text-1000 mb-0">Nov 09, 3:23 AM</h6>
                                            </div>
                                        </td>
                                        <td class="align-middle white-space-nowrap text-end pe-0">
                                            <div class="position-relative">
                                                <div class="hover-actions">
                                                    <button class="btn btn-sm btn-phoenix-secondary me-1 fs--2"><span
                                                            class="fas fa-check"></span></button>
                                                    <button class="btn btn-sm btn-phoenix-secondary fs--2"><span
                                                            class="fas fa-trash"></span></button>
                                                </div>
                                            </div>
                                            <div class="font-sans-serif btn-reveal-trigger position-static">
                                                <button
                                                    class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs--2"
                                                    type="button" data-bs-toggle="dropdown"
                                                    data-boundary="window" aria-haspopup="true"
                                                    aria-expanded="false" data-bs-reference="parent"><span
                                                        class="fas fa-ellipsis-h fs--2"></span></button>
                                                <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                        class="dropdown-item" href="#!">View</a><a
                                                        class="dropdown-item" href="#!">Export</a>
                                                    <div class="dropdown-divider"></div><a
                                                        class="dropdown-item text-danger" href="#!">Remove</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                        <td class="fs--1 align-middle ps-0">
                                            <div class="form-check mb-0 fs-0">
                                                <input class="form-check-input" type="checkbox" />
                                            </div>
                                        </td>
                                        <td class="align-middle product white-space-nowrap py-0">
                                            <div class="rounded-2 border"><img
                                                    src="{{ asset('img//products/5.png') }}" alt=""
                                                    width="53" /></div>
                                        </td>
                                        <td class="align-middle product white-space-nowrap"><a class="fw-semi-bold"
                                                href="apps/e-commerce/landing/product-details.html">Razer Kraken v3 x
                                                Wired 7.1 Surroung Sound Gam...</a></td>
                                        <td class="align-middle customer white-space-nowrap"><a
                                                class="d-flex align-items-center" href="#!">
                                                <div class="avatar avatar-l"><img
                                                        class="rounded-circle avatar-placeholder"
                                                        src="{{ asset('img/team/avatar.png') }}" alt="" />
                                                </div>
                                                <h6 class="mb-0 ms-3 text-900">Kim Carroll</h6>
                                            </a></td>
                                        <td class="align-middle rating white-space-nowrap fs--2"><span
                                                class="fa fa-star text-warning"></span><span
                                                class="fa fa-star text-warning"></span><span
                                                class="fa fa-star text-warning"></span><span
                                                class="fa fa-star text-warning"></span><span
                                                class="fa-regular fa-star text-warning-300"></span>
                                        </td>
                                        <td class="align-middle review" style="min-width:350px;">
                                            <p class="fs--1 fw-semi-bold text-1000 mb-0">It performs exactly as
                                                expected. There are three of these in the family.</p>
                                        </td>
                                        <td class="align-middle text-start ps-5 status"><span
                                                class="badge badge-phoenix fs--2 badge-phoenix-warning"><span
                                                    class="badge-label">Pending</span><span class="ms-1"
                                                    data-feather="clock"
                                                    style="height:12.8px;width:12.8px;"></span></span></td>
                                        <td class="align-middle text-end time white-space-nowrap">
                                            <div class="hover-hide">
                                                <h6 class="text-1000 mb-0">Nov 09, 2:15 PM</h6>
                                            </div>
                                        </td>
                                        <td class="align-middle white-space-nowrap text-end pe-0">
                                            <div class="position-relative">
                                                <div class="hover-actions">
                                                    <button class="btn btn-sm btn-phoenix-secondary me-1 fs--2"><span
                                                            class="fas fa-check"></span></button>
                                                    <button class="btn btn-sm btn-phoenix-secondary fs--2"><span
                                                            class="fas fa-trash"></span></button>
                                                </div>
                                            </div>
                                            <div class="font-sans-serif btn-reveal-trigger position-static">
                                                <button
                                                    class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs--2"
                                                    type="button" data-bs-toggle="dropdown"
                                                    data-boundary="window" aria-haspopup="true"
                                                    aria-expanded="false" data-bs-reference="parent"><span
                                                        class="fas fa-ellipsis-h fs--2"></span></button>
                                                <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                        class="dropdown-item" href="#!">View</a><a
                                                        class="dropdown-item" href="#!">Export</a>
                                                    <div class="dropdown-divider"></div><a
                                                        class="dropdown-item text-danger" href="#!">Remove</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                        <td class="fs--1 align-middle ps-0">
                                            <div class="form-check mb-0 fs-0">
                                                <input class="form-check-input" type="checkbox" />
                                            </div>
                                        </td>
                                        <td class="align-middle product white-space-nowrap py-0">
                                            <div class="rounded-2 border"><img
                                                    src="{{ asset('img//products/6.png') }}" alt=""
                                                    width="53" /></div>
                                        </td>
                                        <td class="align-middle product white-space-nowrap"><a class="fw-semi-bold"
                                                href="apps/e-commerce/landing/product-details.html">PlayStation 5
                                                DualSense Wireless Controller</a></td>
                                        <td class="align-middle customer white-space-nowrap"><a
                                                class="d-flex align-items-center" href="#!">
                                                <div class="avatar avatar-l"><img class="rounded-circle"
                                                        src="{{ asset('img/team/57.png') }}" alt="" />
                                                </div>
                                                <h6 class="mb-0 ms-3 text-900">Barbara Lucas</h6>
                                            </a></td>
                                        <td class="align-middle rating white-space-nowrap fs--2"><span
                                                class="fa fa-star text-warning"></span><span
                                                class="fa fa-star text-warning"></span><span
                                                class="fa fa-star text-warning"></span><span
                                                class="fa fa-star text-warning"></span><span
                                                class="fa-regular fa-star text-warning-300"></span>
                                        </td>
                                        <td class="align-middle review" style="min-width:350px;">
                                            <p class="fs--1 fw-semi-bold text-1000 mb-0">The controller is quite comfy
                                                for me. Despite its increased size, the controller still fits well in my
                                                hands.</p>
                                        </td>
                                        <td class="align-middle text-start ps-5 status"><span
                                                class="badge badge-phoenix fs--2 badge-phoenix-success"><span
                                                    class="badge-label">Approved</span><span class="ms-1"
                                                    data-feather="check"
                                                    style="height:12.8px;width:12.8px;"></span></span></td>
                                        <td class="align-middle text-end time white-space-nowrap">
                                            <div class="hover-hide">
                                                <h6 class="text-1000 mb-0">Nov 08, 8:53 AM</h6>
                                            </div>
                                        </td>
                                        <td class="align-middle white-space-nowrap text-end pe-0">
                                            <div class="position-relative">
                                                <div class="hover-actions">
                                                    <button class="btn btn-sm btn-phoenix-secondary me-1 fs--2"><span
                                                            class="fas fa-check"></span></button>
                                                    <button class="btn btn-sm btn-phoenix-secondary fs--2"><span
                                                            class="fas fa-trash"></span></button>
                                                </div>
                                            </div>
                                            <div class="font-sans-serif btn-reveal-trigger position-static">
                                                <button
                                                    class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs--2"
                                                    type="button" data-bs-toggle="dropdown"
                                                    data-boundary="window" aria-haspopup="true"
                                                    aria-expanded="false" data-bs-reference="parent"><span
                                                        class="fas fa-ellipsis-h fs--2"></span></button>
                                                <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                        class="dropdown-item" href="#!">View</a><a
                                                        class="dropdown-item" href="#!">Export</a>
                                                    <div class="dropdown-divider"></div><a
                                                        class="dropdown-item text-danger" href="#!">Remove</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                        <td class="fs--1 align-middle ps-0">
                                            <div class="form-check mb-0 fs-0">
                                                <input class="form-check-input" type="checkbox" />
                                            </div>
                                        </td>
                                        <td class="align-middle product white-space-nowrap py-0">
                                            <div class="rounded-2 border"><img
                                                    src="{{ asset('img//products/7.png') }}" alt=""
                                                    width="53" /></div>
                                        </td>
                                        <td class="align-middle product white-space-nowrap"><a class="fw-semi-bold"
                                                href="apps/e-commerce/landing/product-details.html">2021 Apple
                                                12.9-inch iPad Pro (Wi‑Fi, 128GB) -...</a></td>
                                        <td class="align-middle customer white-space-nowrap"><a
                                                class="d-flex align-items-center" href="#!">
                                                <div class="avatar avatar-l"><img class="rounded-circle"
                                                        src="{{ asset('img/team/3.png') }}" alt="" />
                                                </div>
                                                <h6 class="mb-0 ms-3 text-900">Ansolo Lazinatov</h6>
                                            </a></td>
                                        <td class="align-middle rating white-space-nowrap fs--2"><span
                                                class="fa fa-star text-warning"></span><span
                                                class="fa fa-star text-warning"></span><span
                                                class="fa fa-star text-warning"></span><span
                                                class="fa fa-star text-warning"></span><span
                                                class="fa fa-star-half-alt star-icon text-warning"></span>
                                        </td>
                                        <td class="align-middle review" style="min-width:350px;">
                                            <p class="fs--1 fw-semi-bold text-1000 mb-0">The response time and service
                                                I received when contacted the designers were Phenomenal!</p>
                                        </td>
                                        <td class="align-middle text-start ps-5 status"><span
                                                class="badge badge-phoenix fs--2 badge-phoenix-warning"><span
                                                    class="badge-label">Pending</span><span class="ms-1"
                                                    data-feather="clock"
                                                    style="height:12.8px;width:12.8px;"></span></span></td>
                                        <td class="align-middle text-end time white-space-nowrap">
                                            <div class="hover-hide">
                                                <h6 class="text-1000 mb-0">Nov 07, 9:00 PM</h6>
                                            </div>
                                        </td>
                                        <td class="align-middle white-space-nowrap text-end pe-0">
                                            <div class="position-relative">
                                                <div class="hover-actions">
                                                    <button class="btn btn-sm btn-phoenix-secondary me-1 fs--2"><span
                                                            class="fas fa-check"></span></button>
                                                    <button class="btn btn-sm btn-phoenix-secondary fs--2"><span
                                                            class="fas fa-trash"></span></button>
                                                </div>
                                            </div>
                                            <div class="font-sans-serif btn-reveal-trigger position-static">
                                                <button
                                                    class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs--2"
                                                    type="button" data-bs-toggle="dropdown"
                                                    data-boundary="window" aria-haspopup="true"
                                                    aria-expanded="false" data-bs-reference="parent"><span
                                                        class="fas fa-ellipsis-h fs--2"></span></button>
                                                <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                        class="dropdown-item" href="#!">View</a><a
                                                        class="dropdown-item" href="#!">Export</a>
                                                    <div class="dropdown-divider"></div><a
                                                        class="dropdown-item text-danger" href="#!">Remove</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                        <td class="fs--1 align-middle ps-0">
                                            <div class="form-check mb-0 fs-0">
                                                <input class="form-check-input" type="checkbox" />
                                            </div>
                                        </td>
                                        <td class="align-middle product white-space-nowrap py-0">
                                            <div class="rounded-2 border"><img
                                                    src="{{ asset('img//products/8.png') }}" alt=""
                                                    width="53" /></div>
                                        </td>
                                        <td class="align-middle product white-space-nowrap"><a class="fw-semi-bold"
                                                href="apps/e-commerce/landing/product-details.html">Amazon Basics
                                                Matte Black Wired Keyboard - US ...</a></td>
                                        <td class="align-middle customer white-space-nowrap"><a
                                                class="d-flex align-items-center" href="#!">
                                                <div class="avatar avatar-l"><img class="rounded-circle"
                                                        src="{{ asset('img/team/26.png') }}" alt="" />
                                                </div>
                                                <h6 class="mb-0 ms-3 text-900">Emma watson</h6>
                                            </a></td>
                                        <td class="align-middle rating white-space-nowrap fs--2"><span
                                                class="fa fa-star text-warning"></span><span
                                                class="fa fa-star text-warning"></span><span
                                                class="fa fa-star text-warning"></span><span
                                                class="fa-regular fa-star text-warning-300"></span><span
                                                class="fa-regular fa-star text-warning-300"></span>
                                        </td>
                                        <td class="align-middle review" style="min-width:350px;">
                                            <p class="fs--1 fw-semi-bold text-1000 mb-0">I have started using this
                                                theme in the last week and it has really impressed me very much, the
                                                support is second to none.</p>
                                        </td>
                                        <td class="align-middle text-start ps-5 status"><span
                                                class="badge badge-phoenix fs--2 badge-phoenix-warning"><span
                                                    class="badge-label">Pending</span><span class="ms-1"
                                                    data-feather="clock"
                                                    style="height:12.8px;width:12.8px;"></span></span></td>
                                        <td class="align-middle text-end time white-space-nowrap">
                                            <div class="hover-hide">
                                                <h6 class="text-1000 mb-0">Nov 07, 11:20 AM</h6>
                                            </div>
                                        </td>
                                        <td class="align-middle white-space-nowrap text-end pe-0">
                                            <div class="position-relative">
                                                <div class="hover-actions">
                                                    <button class="btn btn-sm btn-phoenix-secondary me-1 fs--2"><span
                                                            class="fas fa-check"></span></button>
                                                    <button class="btn btn-sm btn-phoenix-secondary fs--2"><span
                                                            class="fas fa-trash"></span></button>
                                                </div>
                                            </div>
                                            <div class="font-sans-serif btn-reveal-trigger position-static">
                                                <button
                                                    class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs--2"
                                                    type="button" data-bs-toggle="dropdown"
                                                    data-boundary="window" aria-haspopup="true"
                                                    aria-expanded="false" data-bs-reference="parent"><span
                                                        class="fas fa-ellipsis-h fs--2"></span></button>
                                                <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                        class="dropdown-item" href="#!">View</a><a
                                                        class="dropdown-item" href="#!">Export</a>
                                                    <div class="dropdown-divider"></div><a
                                                        class="dropdown-item text-danger" href="#!">Remove</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                        <td class="fs--1 align-middle ps-0">
                                            <div class="form-check mb-0 fs-0">
                                                <input class="form-check-input" type="checkbox" />
                                            </div>
                                        </td>
                                        <td class="align-middle product white-space-nowrap py-0">
                                            <div class="rounded-2 border"><img
                                                    src="{{ asset('img//products/9.png') }}" alt=""
                                                    width="53" /></div>
                                        </td>
                                        <td class="align-middle product white-space-nowrap"><a class="fw-semi-bold"
                                                href="apps/e-commerce/landing/product-details.html">Amazon Basics
                                                Mesh, Mid-Back, Swivel Office De...</a></td>
                                        <td class="align-middle customer white-space-nowrap"><a
                                                class="d-flex align-items-center" href="#!">
                                                <div class="avatar avatar-l"><img class="rounded-circle"
                                                        src="{{ asset('img/team/29.png') }}" alt="" />
                                                </div>
                                                <h6 class="mb-0 ms-3 text-900">Rowen Atkinson</h6>
                                            </a></td>
                                        <td class="align-middle rating white-space-nowrap fs--2"><span
                                                class="fa fa-star text-warning"></span><span
                                                class="fa fa-star text-warning"></span><span
                                                class="fa fa-star text-warning"></span><span
                                                class="fa fa-star text-warning"></span><span
                                                class="fa fa-star text-warning"></span>
                                        </td>
                                        <td class="align-middle review" style="min-width:350px;">
                                            <p class="fs--1 fw-semi-bold text-1000 mb-0">The best experience we could
                                                hope for. Customer service team is amazing and the quality of their
                                                products is unsurpassed. Great theme ...<a href='#!'>See more</a>
                                            </p>
                                        </td>
                                        <td class="align-middle text-start ps-5 status"><span
                                                class="badge badge-phoenix fs--2 badge-phoenix-success"><span
                                                    class="badge-label">Approved</span><span class="ms-1"
                                                    data-feather="check"
                                                    style="height:12.8px;width:12.8px;"></span></span></td>
                                        <td class="align-middle text-end time white-space-nowrap">
                                            <div class="hover-hide">
                                                <h6 class="text-1000 mb-0">Nov 07, 2:00 PM</h6>
                                            </div>
                                        </td>
                                        <td class="align-middle white-space-nowrap text-end pe-0">
                                            <div class="position-relative">
                                                <div class="hover-actions">
                                                    <button class="btn btn-sm btn-phoenix-secondary me-1 fs--2"><span
                                                            class="fas fa-check"></span></button>
                                                    <button class="btn btn-sm btn-phoenix-secondary fs--2"><span
                                                            class="fas fa-trash"></span></button>
                                                </div>
                                            </div>
                                            <div class="font-sans-serif btn-reveal-trigger position-static">
                                                <button
                                                    class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs--2"
                                                    type="button" data-bs-toggle="dropdown"
                                                    data-boundary="window" aria-haspopup="true"
                                                    aria-expanded="false" data-bs-reference="parent"><span
                                                        class="fas fa-ellipsis-h fs--2"></span></button>
                                                <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                        class="dropdown-item" href="#!">View</a><a
                                                        class="dropdown-item" href="#!">Export</a>
                                                    <div class="dropdown-divider"></div><a
                                                        class="dropdown-item text-danger" href="#!">Remove</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                        <td class="fs--1 align-middle ps-0">
                                            <div class="form-check mb-0 fs-0">
                                                <input class="form-check-input" type="checkbox" />
                                            </div>
                                        </td>
                                        <td class="align-middle product white-space-nowrap py-0">
                                            <div class="rounded-2 border"><img
                                                    src="{{ asset('img//products/10.png') }}" alt=""
                                                    width="53" /></div>
                                        </td>
                                        <td class="align-middle product white-space-nowrap"><a class="fw-semi-bold"
                                                href="apps/e-commerce/landing/product-details.html">Apple Magic Mouse
                                                (Wireless, Rechargable) - Si...</a></td>
                                        <td class="align-middle customer white-space-nowrap"><a
                                                class="d-flex align-items-center" href="#!">
                                                <div class="avatar avatar-l">
                                                    <div class="avatar-name rounded-circle"><span>A</span></div>
                                                </div>
                                                <h6 class="mb-0 ms-3 text-900">Anthony Hopkins</h6>
                                            </a></td>
                                        <td class="align-middle rating white-space-nowrap fs--2"><span
                                                class="fa fa-star text-warning"></span><span
                                                class="fa fa-star text-warning"></span><span
                                                class="fa fa-star text-warning"></span><span
                                                class="fa fa-star text-warning"></span><span
                                                class="fa-regular fa-star text-warning-300"></span>
                                        </td>
                                        <td class="align-middle review" style="min-width:350px;">
                                            <p class="fs--1 fw-semi-bold text-1000 mb-0">This template has allowed me
                                                to convert my existing web app into a great looking, easy to use UI in
                                                less than 2 weeks. Very easy to us...<a href='#!'>See more</a>
                                            </p>
                                        </td>
                                        <td class="align-middle text-start ps-5 status"><span
                                                class="badge badge-phoenix fs--2 badge-phoenix-success"><span
                                                    class="badge-label">Approved</span><span class="ms-1"
                                                    data-feather="check"
                                                    style="height:12.8px;width:12.8px;"></span></span></td>
                                        <td class="align-middle text-end time white-space-nowrap">
                                            <div class="hover-hide">
                                                <h6 class="text-1000 mb-0">Nov 06, 8:00 AM</h6>
                                            </div>
                                        </td>
                                        <td class="align-middle white-space-nowrap text-end pe-0">
                                            <div class="position-relative">
                                                <div class="hover-actions">
                                                    <button class="btn btn-sm btn-phoenix-secondary me-1 fs--2"><span
                                                            class="fas fa-check"></span></button>
                                                    <button class="btn btn-sm btn-phoenix-secondary fs--2"><span
                                                            class="fas fa-trash"></span></button>
                                                </div>
                                            </div>
                                            <div class="font-sans-serif btn-reveal-trigger position-static">
                                                <button
                                                    class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs--2"
                                                    type="button" data-bs-toggle="dropdown"
                                                    data-boundary="window" aria-haspopup="true"
                                                    aria-expanded="false" data-bs-reference="parent"><span
                                                        class="fas fa-ellipsis-h fs--2"></span></button>
                                                <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                        class="dropdown-item" href="#!">View</a><a
                                                        class="dropdown-item" href="#!">Export</a>
                                                    <div class="dropdown-divider"></div><a
                                                        class="dropdown-item text-danger" href="#!">Remove</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                        <td class="fs--1 align-middle ps-0">
                                            <div class="form-check mb-0 fs-0">
                                                <input class="form-check-input" type="checkbox" />
                                            </div>
                                        </td>
                                        <td class="align-middle product white-space-nowrap py-0">
                                            <div class="rounded-2 border"><img
                                                    src="{{ asset('img//products/11.png') }}" alt=""
                                                    width="53" /></div>
                                        </td>
                                        <td class="align-middle product white-space-nowrap"><a class="fw-semi-bold"
                                                href="apps/e-commerce/landing/product-details.html">Echo Dot (4th Gen)
                                                _ Smart speaker with Alexa ...</a></td>
                                        <td class="align-middle customer white-space-nowrap"><a
                                                class="d-flex align-items-center" href="#!">
                                                <div class="avatar avatar-l"><img class="rounded-circle"
                                                        src="{{ asset('img/team/8.png') }}" alt="" />
                                                </div>
                                                <h6 class="mb-0 ms-3 text-900">Jennifer Schramm</h6>
                                            </a></td>
                                        <td class="align-middle rating white-space-nowrap fs--2"><span
                                                class="fa fa-star text-warning"></span><span
                                                class="fa fa-star text-warning"></span><span
                                                class="fa fa-star text-warning"></span><span
                                                class="fa fa-star text-warning"></span><span
                                                class="fa fa-star-half-alt star-icon text-warning"></span>
                                        </td>
                                        <td class="align-middle review" style="min-width:350px;">
                                            <p class="fs--1 fw-semi-bold text-1000 mb-0">The theme is really beautiful
                                                and the support answer very quickly and is friendly. Buy it, you will
                                                not regret it.</p>
                                        </td>
                                        <td class="align-middle text-start ps-5 status"><span
                                                class="badge badge-phoenix fs--2 badge-phoenix-warning"><span
                                                    class="badge-label">Pending</span><span class="ms-1"
                                                    data-feather="clock"
                                                    style="height:12.8px;width:12.8px;"></span></span></td>
                                        <td class="align-middle text-end time white-space-nowrap">
                                            <div class="hover-hide">
                                                <h6 class="text-1000 mb-0">Nov 05, 4:00 AM</h6>
                                            </div>
                                        </td>
                                        <td class="align-middle white-space-nowrap text-end pe-0">
                                            <div class="position-relative">
                                                <div class="hover-actions">
                                                    <button class="btn btn-sm btn-phoenix-secondary me-1 fs--2"><span
                                                            class="fas fa-check"></span></button>
                                                    <button class="btn btn-sm btn-phoenix-secondary fs--2"><span
                                                            class="fas fa-trash"></span></button>
                                                </div>
                                            </div>
                                            <div class="font-sans-serif btn-reveal-trigger position-static">
                                                <button
                                                    class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs--2"
                                                    type="button" data-bs-toggle="dropdown"
                                                    data-boundary="window" aria-haspopup="true"
                                                    aria-expanded="false" data-bs-reference="parent"><span
                                                        class="fas fa-ellipsis-h fs--2"></span></button>
                                                <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                        class="dropdown-item" href="#!">View</a><a
                                                        class="dropdown-item" href="#!">Export</a>
                                                    <div class="dropdown-divider"></div><a
                                                        class="dropdown-item text-danger" href="#!">Remove</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                        <td class="fs--1 align-middle ps-0">
                                            <div class="form-check mb-0 fs-0">
                                                <input class="form-check-input" type="checkbox" />
                                            </div>
                                        </td>
                                        <td class="align-middle product white-space-nowrap py-0">
                                            <div class="rounded-2 border"><img
                                                    src="{{ asset('img//products/12.png') }}" alt=""
                                                    width="53" /></div>
                                        </td>
                                        <td class="align-middle product white-space-nowrap"><a class="fw-semi-bold"
                                                href="apps/e-commerce/landing/product-details.html">HORI Racing Wheel
                                                Apex for PlayStation 4_3, an...</a></td>
                                        <td class="align-middle customer white-space-nowrap"><a
                                                class="d-flex align-items-center" href="#!">
                                                <div class="avatar avatar-l"><img
                                                        class="rounded-circle avatar-placeholder"
                                                        src="{{ asset('img/team/avatar.png') }}" alt="" />
                                                </div>
                                                <h6 class="mb-0 ms-3 text-900">Raymond Mims</h6>
                                            </a></td>
                                        <td class="align-middle rating white-space-nowrap fs--2"><span
                                                class="fa fa-star text-warning"></span><span
                                                class="fa fa-star text-warning"></span><span
                                                class="fa fa-star text-warning"></span><span
                                                class="fa fa-star text-warning"></span><span
                                                class="fa-regular fa-star text-warning-300"></span>
                                        </td>
                                        <td class="align-middle review" style="min-width:350px;">
                                            <p class="fs--1 fw-semi-bold text-1000 mb-0">As others mentioned, the team
                                                behind this theme is super responsive. I sent a message during the
                                                weekend, fully expecting a response a...<a href='#!'>See more</a>
                                            </p>
                                        </td>
                                        <td class="align-middle text-start ps-5 status"><span
                                                class="badge badge-phoenix fs--2 badge-phoenix-success"><span
                                                    class="badge-label">Approved</span><span class="ms-1"
                                                    data-feather="check"
                                                    style="height:12.8px;width:12.8px;"></span></span></td>
                                        <td class="align-middle text-end time white-space-nowrap">
                                            <div class="hover-hide">
                                                <h6 class="text-1000 mb-0">Nov 04, 6:53 PM</h6>
                                            </div>
                                        </td>
                                        <td class="align-middle white-space-nowrap text-end pe-0">
                                            <div class="position-relative">
                                                <div class="hover-actions">
                                                    <button class="btn btn-sm btn-phoenix-secondary me-1 fs--2"><span
                                                            class="fas fa-check"></span></button>
                                                    <button class="btn btn-sm btn-phoenix-secondary fs--2"><span
                                                            class="fas fa-trash"></span></button>
                                                </div>
                                            </div>
                                            <div class="font-sans-serif btn-reveal-trigger position-static">
                                                <button
                                                    class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs--2"
                                                    type="button" data-bs-toggle="dropdown"
                                                    data-boundary="window" aria-haspopup="true"
                                                    aria-expanded="false" data-bs-reference="parent"><span
                                                        class="fas fa-ellipsis-h fs--2"></span></button>
                                                <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                        class="dropdown-item" href="#!">View</a><a
                                                        class="dropdown-item" href="#!">Export</a>
                                                    <div class="dropdown-divider"></div><a
                                                        class="dropdown-item text-danger" href="#!">Remove</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    {{--  <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                      <td class="fs--1 align-middle ps-0">
                        <div class="form-check mb-0 fs-0">
                          <input class="form-check-input" type="checkbox" />
                        </div>
                      </td>
                      <td class="align-middle product white-space-nowrap py-0">
                        <div class="rounded-2 border"><img src="assets/img//products/13.png" alt="" width="53" /></div>
                      </td>
                      <td class="align-middle product white-space-nowrap"><a class="fw-semi-bold" href="apps/e-commerce/landing/product-details.html">Nintendo Switch with Neon Blue and Neon Red Jo...</a></td>
                      <td class="align-middle customer white-space-nowrap"><a class="d-flex align-items-center" href="#!">
                          <div class="avatar avatar-l"><img class="rounded-circle" src="assets/img/team/9.png" alt="" />
                          </div>
                          <h6 class="mb-0 ms-3 text-900">Michael Jenkins</h6>
                        </a></td>
                      <td class="align-middle rating white-space-nowrap fs--2"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span>
                      </td>
                      <td class="align-middle review" style="min-width:350px;">
                        <p class="fs--1 fw-semi-bold text-1000 mb-0">I had a bit of a hard time at first but after I contacted the team they were able to help me set up the theme. It's really good and I ...<a href='#!'>See more</a></p>
                      </td>
                      <td class="align-middle text-start ps-5 status"><span class="badge badge-phoenix fs--2 badge-phoenix-warning"><span class="badge-label">Pending</span><span class="ms-1" data-feather="clock" style="height:12.8px;width:12.8px;"></span></span></td>
                      <td class="align-middle text-end time white-space-nowrap">
                        <div class="hover-hide">
                          <h6 class="text-1000 mb-0">Nov 04, 12:00 PM</h6>
                        </div>
                      </td>
                      <td class="align-middle white-space-nowrap text-end pe-0">
                        <div class="position-relative">
                          <div class="hover-actions">
                            <button class="btn btn-sm btn-phoenix-secondary me-1 fs--2"><span class="fas fa-check"></span></button>
                            <button class="btn btn-sm btn-phoenix-secondary fs--2"><span class="fas fa-trash"></span></button>
                          </div>
                        </div>
                        <div class="font-sans-serif btn-reveal-trigger position-static">
                          <button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs--2" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                      <td class="fs--1 align-middle ps-0">
                        <div class="form-check mb-0 fs-0">
                          <input class="form-check-input" type="checkbox" />
                        </div>
                      </td>
                      <td class="align-middle product white-space-nowrap py-0">
                        <div class="rounded-2 border"><img src="assets/img//products/14.png" alt="" width="53" /></div>
                      </td>
                      <td class="align-middle product white-space-nowrap"><a class="fw-semi-bold" href="apps/e-commerce/landing/product-details.html">Oculus Rift S PC-Powered VR Gaming Headset</a></td>
                      <td class="align-middle customer white-space-nowrap"><a class="d-flex align-items-center" href="#!">
                          <div class="avatar avatar-l"><img class="rounded-circle avatar-placeholder" src="assets/img/team/avatar.png" alt="" />
                          </div>
                          <h6 class="mb-0 ms-3 text-900">Kristine Cadena</h6>
                        </a></td>
                      <td class="align-middle rating white-space-nowrap fs--2"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span>
                      </td>
                      <td class="align-middle review" style="min-width:350px;">
                        <p class="fs--1 fw-semi-bold text-1000 mb-0">Excellent. All my doubts were answered by the team quickly. I highly recommend it.</p>
                      </td>
                      <td class="align-middle text-start ps-5 status"><span class="badge badge-phoenix fs--2 badge-phoenix-warning"><span class="badge-label">Pending</span><span class="ms-1" data-feather="clock" style="height:12.8px;width:12.8px;"></span></span></td>
                      <td class="align-middle text-end time white-space-nowrap">
                        <div class="hover-hide">
                          <h6 class="text-1000 mb-0">Nov 03, 8:53 AM</h6>
                        </div>
                      </td>
                      <td class="align-middle white-space-nowrap text-end pe-0">
                        <div class="position-relative">
                          <div class="hover-actions">
                            <button class="btn btn-sm btn-phoenix-secondary me-1 fs--2"><span class="fas fa-check"></span></button>
                            <button class="btn btn-sm btn-phoenix-secondary fs--2"><span class="fas fa-trash"></span></button>
                          </div>
                        </div>
                        <div class="font-sans-serif btn-reveal-trigger position-static">
                          <button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs--2" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                      <td class="fs--1 align-middle ps-0">
                        <div class="form-check mb-0 fs-0">
                          <input class="form-check-input" type="checkbox" />
                        </div>
                      </td>
                      <td class="align-middle product white-space-nowrap py-0">
                        <div class="rounded-2 border"><img src="assets/img//products/15.png" alt="" width="53" /></div>
                      </td>
                      <td class="align-middle product white-space-nowrap"><a class="fw-semi-bold" href="apps/e-commerce/landing/product-details.html">Sony X85J 75 Inch Sony 4K Ultra HD LED Smart G...</a></td>
                      <td class="align-middle customer white-space-nowrap"><a class="d-flex align-items-center" href="#!">
                          <div class="avatar avatar-l"><img class="rounded-circle" src="assets/img/team/24.png" alt="" />
                          </div>
                          <h6 class="mb-0 ms-3 text-900">Suzanne Martinez</h6>
                        </a></td>
                      <td class="align-middle rating white-space-nowrap fs--2"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star-half-alt star-icon text-warning"></span><span class="fa-regular fa-star text-warning-300"></span>
                      </td>
                      <td class="align-middle review" style="min-width:350px;">
                        <p class="fs--1 fw-semi-bold text-1000 mb-0">This theme is great. Clean and easy to understand. Perfect for those who don't have time to start everything from scratch. The support...<a href='#!'>See more</a></p>
                      </td>
                      <td class="align-middle text-start ps-5 status"><span class="badge badge-phoenix fs--2 badge-phoenix-success"><span class="badge-label">Approved</span><span class="ms-1" data-feather="check" style="height:12.8px;width:12.8px;"></span></span></td>
                      <td class="align-middle text-end time white-space-nowrap">
                        <div class="hover-hide">
                          <h6 class="text-1000 mb-0">Nov 03, 10:43 AM</h6>
                        </div>
                      </td>
                      <td class="align-middle white-space-nowrap text-end pe-0">
                        <div class="position-relative">
                          <div class="hover-actions">
                            <button class="btn btn-sm btn-phoenix-secondary me-1 fs--2"><span class="fas fa-check"></span></button>
                            <button class="btn btn-sm btn-phoenix-secondary fs--2"><span class="fas fa-trash"></span></button>
                          </div>
                        </div>
                        <div class="font-sans-serif btn-reveal-trigger position-static">
                          <button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs--2" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                          </div>
                        </div>
                      </td>
                    </tr>  --}}
                                </tbody>
                            </table>
                        </div>
                        <div class="row align-items-center py-1">
                            <div class="pagination d-none"></div>
                            <div class="col d-flex fs--1">
                                <p class="mb-0 d-none d-sm-block me-3 fw-semi-bold text-900"
                                    data-list-info="data-list-info"></p><a class="fw-semi-bold" href="#!"
                                    data-list-view="*">View all<span class="fas fa-angle-right ms-1"
                                        data-fa-transform="down-1"></span></a><a class="fw-semi-bold d-none"
                                    href="#!" data-list-view="less">View Less</a>
                            </div>
                            <div class="col-auto d-flex">

                                <button class="btn btn-link px-1 me-1" type="button" title="Previous"
                                    data-list-pagination="prev"><span
                                        class="fas fa-chevron-left me-2"></span>Previous</button>
                                <button class="btn btn-link px-1 ms-1" type="button" title="Next"
                                    data-list-pagination="next">Next<span
                                        class="fas fa-chevron-right ms-2"></span></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row gx-6">
                    <div class="col-12 col-xl-6">
                        <div class="mb-5 mt-7">
                            <h3>Top regions by revenue</h3>
                            <p class="text-700">Where you generated most of the revenue</p>
                        </div>
                        <div class="table-responsive scrollbar">
                            <table class="table fs--2 mb-0">
                                <thead>
                                    <tr>
                                        <th class="border-top border-200 ps-0 align-middle" scope="col"
                                            style="width:32%">COUNTRY</th>
                                        <th class="border-top border-200 align-middle" scope="col"
                                            style="width:17%">USERS</th>
                                        <th class="border-top border-200 text-end align-middle" scope="col"
                                            style="width:16%">TRANSACTIONS</th>
                                        <th class="border-top border-200 text-end align-middle" scope="col"
                                            style="width:20%">REVENUE</th>
                                        <th class="border-top border-200 text-end pe-0 align-middle" scope="col"
                                            style="width:17%">CONV. RATE</th>
                                    </tr>
                                </thead>
                                <tbody class="list">
                                    <tr>
                                        <td></td>
                                        <td class="align-middle py-4">
                                            <h4 class="mb-0 fw-normal">377,620</h4>
                                        </td>
                                        <td class="align-middle text-end py-4">
                                            <h4 class="mb-0 fw-normal">236</h4>
                                        </td>
                                        <td class="align-middle text-end py-4">
                                            <h4 class="mb-0 fw-normal">$15,758</h4>
                                        </td>
                                        <td class="align-middle text-end py-4 pe-0">
                                            <h4 class="mb-0 fw-normal">10.32%</h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="white-space-nowrap ps-0" style="width:32%">
                                            <div class="d-flex align-items-center">
                                                <h6 class="mb-0 me-3">1. </h6><a href="#!">
                                                    <div class="d-flex align-items-center"><img
                                                            src="{{ asset('img/country/india.png') }}"
                                                            alt="" width="24" />
                                                        <p class="mb-0 ps-3 text-primary fw-bold fs--1">India</p>
                                                    </div>
                                                </a>
                                            </div>
                                        </td>
                                        <td class="align-middle" style="width:17%">
                                            <h6 class="mb-0">92896<span
                                                    class="text-700 fw-semi-bold ms-2">(41.6%)</span></h6>
                                        </td>
                                        <td class="align-middle text-end" style="width:17%">
                                            <h6 class="mb-0">67<span
                                                    class="text-700 fw-semi-bold ms-2">(34.3%)</span></h6>
                                        </td>
                                        <td class="align-middle text-end" style="width:17%">
                                            <h6 class="mb-0">$7560<span
                                                    class="text-700 fw-semi-bold ms-2">(36.9%)</span></h6>
                                        </td>
                                        <td class="align-middle text-end pe-0" style="width:17%">
                                            <h6>14.01%</h6>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="white-space-nowrap ps-0" style="width:32%">
                                            <div class="d-flex align-items-center">
                                                <h6 class="mb-0 me-3">2. </h6><a href="#!">
                                                    <div class="d-flex align-items-center"><img
                                                            src="{{ asset('img/country/china.png') }}"
                                                            alt="" width="24" />
                                                        <p class="mb-0 ps-3 text-primary fw-bold fs--1">China</p>
                                                    </div>
                                                </a>
                                            </div>
                                        </td>
                                        <td class="align-middle" style="width:17%">
                                            <h6 class="mb-0">50496<span
                                                    class="text-700 fw-semi-bold ms-2">(32.8%)</span></h6>
                                        </td>
                                        <td class="align-middle text-end" style="width:17%">
                                            <h6 class="mb-0">54<span
                                                    class="text-700 fw-semi-bold ms-2">(23.8%)</span></h6>
                                        </td>
                                        <td class="align-middle text-end" style="width:17%">
                                            <h6 class="mb-0">$6532<span
                                                    class="text-700 fw-semi-bold ms-2">(26.5%)</span></h6>
                                        </td>
                                        <td class="align-middle text-end pe-0" style="width:17%">
                                            <h6>23.56%</h6>
                                        </td>
                                    </tr>
                                    {{--  <tr>
                      <td class="white-space-nowrap ps-0" style="width:32%">
                        <div class="d-flex align-items-center">
                          <h6 class="mb-0 me-3">3. </h6><a href="#!">
                            <div class="d-flex align-items-center"><img src="assets/img/country/usa.png" alt="" width="24" />
                              <p class="mb-0 ps-3 text-primary fw-bold fs--1">USA</p>
                            </div>
                          </a>
                        </div>
                      </td>
                      <td class="align-middle" style="width:17%">
                        <h6 class="mb-0">45679<span class="text-700 fw-semi-bold ms-2">(24.3%)</span></h6>
                      </td>
                      <td class="align-middle text-end" style="width:17%">
                        <h6 class="mb-0">35<span class="text-700 fw-semi-bold ms-2">(19.7%)</span></h6>
                      </td>
                      <td class="align-middle text-end" style="width:17%">
                        <h6 class="mb-0">$5432<span class="text-700 fw-semi-bold ms-2">(16.9%)</span></h6>
                      </td>
                      <td class="align-middle text-end pe-0" style="width:17%">
                        <h6>10.23%</h6>
                      </td>
                    </tr>
                    <tr>
                      <td class="white-space-nowrap ps-0" style="width:32%">
                        <div class="d-flex align-items-center">
                          <h6 class="mb-0 me-3">4. </h6><a href="#!">
                            <div class="d-flex align-items-center"><img src="assets/img/country/south-korea.png" alt="" width="24" />
                              <p class="mb-0 ps-3 text-primary fw-bold fs--1">South Korea</p>
                            </div>
                          </a>
                        </div>
                      </td>
                      <td class="align-middle" style="width:17%">
                        <h6 class="mb-0">36453<span class="text-700 fw-semi-bold ms-2">(19.7%)</span></h6>
                      </td>
                      <td class="align-middle text-end" style="width:17%">
                        <h6 class="mb-0">22<span class="text-700 fw-semi-bold ms-2">(9.54%)</span></h6>
                      </td>
                      <td class="align-middle text-end" style="width:17%">
                        <h6 class="mb-0">$4673<span class="text-700 fw-semi-bold ms-2">(11.6%)</span></h6>
                      </td>
                      <td class="align-middle text-end pe-0" style="width:17%">
                        <h6>8.85%</h6>
                      </td>
                    </tr>
                    <tr>
                      <td class="white-space-nowrap ps-0" style="width:32%">
                        <div class="d-flex align-items-center">
                          <h6 class="mb-0 me-3">5. </h6><a href="#!">
                            <div class="d-flex align-items-center"><img src="assets/img/country/vietnam.png" alt="" width="24" />
                              <p class="mb-0 ps-3 text-primary fw-bold fs--1">Vietnam</p>
                            </div>
                          </a>
                        </div>
                      </td>
                      <td class="align-middle" style="width:17%">
                        <h6 class="mb-0">15007<span class="text-700 fw-semi-bold ms-2">(11.9%)</span></h6>
                      </td>
                      <td class="align-middle text-end" style="width:17%">
                        <h6 class="mb-0">17<span class="text-700 fw-semi-bold ms-2">(6.91%)</span></h6>
                      </td>
                      <td class="align-middle text-end" style="width:17%">
                        <h6 class="mb-0">$2456<span class="text-700 fw-semi-bold ms-2">(10.2%)</span></h6>
                      </td>
                      <td class="align-middle text-end pe-0" style="width:17%">
                        <h6>6.01%</h6>
                      </td>
                    </tr>  --}}
                                </tbody>
                            </table>
                        </div>
                        <div class="d-flex align-items-center justify-content-between py-2 fs--1 mb-1">
                            <p class="mb-0 d-none d-sm-block me-3 fw-semi-bold text-900" data-list-info="">1 to 5
                                <span class="text-600"> Items of </span> 15</p><a class="fw-semi-bold"
                                href="#!" data-list-view="*">View all<span class="fas fa-angle-right ms-2"
                                    data-fa-transform="down-1"></span></a>
                        </div>
                    </div>
                    <div class="col-12 col-xl-6">
                        <div class="mx-n4 mx-lg-n6 ms-xl-0 h-100">
                            <div class="h-100 w-100 py-5">
                                <div class="googlemap revenue-map h-100" style="min-height: 300px;"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mx-n4 px-4 mx-lg-n6 px-lg-6 bg-white pt-6 pb-9 border-top border-300">
                    <div class="row g-6">
                        <div class="col-12 col-xl-6">
                            <div class="me-xl-4">
                                <div>
                                    <h3>Projection vs actual</h3>
                                    <p class="mb-1 text-700">Actual earnings vs projected earnings</p>
                                </div>
                                <div class="echart-projection-actual" style="height:300px; width:100%"
                                    data-echart-responsive="data-echart-responsive"></div>
                            </div>
                        </div>
                        <div class="col-12 col-xl-6">
                            <div>
                                <h3>Returning customer rate</h3>
                                <p class="mb-1 text-700">Rate of customers returning to your shop over time</p>
                            </div>
                            <div class="echart-returning-customer" style="height:300px;"
                                data-echart-responsive="data-echart-responsive"></div>
                        </div>
                    </div>
                </div>
                <footer class="footer position-absolute">
                    <div class="row g-0 justify-content-between align-items-center h-100">
                        <div class="col-12 col-sm-auto text-center">
                            <p class="mb-0 mt-2 mt-sm-0 text-900">Thank you for creating with Phoenix<span
                                    class="d-none d-sm-inline-block"></span><span
                                    class="d-none d-sm-inline-block mx-1">|</span><br class="d-sm-none" />2022
                                &copy;<a class="mx-1" href="https://themewagon.com">Themewagon</a></p>
                        </div>
                        <div class="col-12 col-sm-auto text-center">
                            <p class="mb-0 text-600">v1.7.0</p>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script>
            var navbarTopStyle = localStorage.getItem('phoenixNavbarTopStyle');
            var navbarTop = document.querySelector('.navbar-top');
            if (navbarTopStyle === 'darker') {
                navbarTop.classList.add('navbar-darker');
            }

            var navbarVerticalStyle = localStorage.getItem('phoenixNavbarVerticalStyle');
            var navbarVertical = document.querySelector('.navbar-vertical');
            if (navbarVerticalStyle === 'darker') {
                navbarVertical.classList.add('navbar-darker');
            }
        </script>
    </main>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->


    <div class="offcanvas offcanvas-end settings-panel border-0" id="settings-offcanvas" tabindex="-1"
        aria-labelledby="settings-offcanvas">
        <div class="offcanvas-header align-items-start border-bottom flex-column">
            <div class="pt-1 w-100 mb-6 d-flex justify-content-between align-items-start">
                <div>
                    <h5 class="mb-2 me-2 lh-sm"><span class="fas fa-palette me-2 fs-0"></span>Theme Customizer</h5>
                    <p class="mb-0 fs--1">Explore different styles according to your preferences</p>
                </div>
                <button class="btn p-1 fw-bolder" type="button" data-bs-dismiss="offcanvas"
                    aria-label="Close"><span class="fas fa-times fs-0"> </span></button>
            </div>
            <button class="btn btn-phoenix-secondary w-100" data-theme-control="reset"><span
                    class="fas fa-arrows-rotate me-2 fs--2"></span>Reset to default</button>
        </div>
        <div class="offcanvas-body scrollbar px-card" id="themeController">
            <div class="border rounded-3 p-4">
                <div class="d-flex justify-content-between align-items-center">
                    <h5 class="setting-panel-item-title mb-1">RTL </h5>
                    <div class="form-check form-switch mb-0">
                        <input class="form-check-input" type="checkbox" data-theme-control="isRTL" />
                    </div>
                </div>
                <p class="mb-0 text-700">Change text direction</p>
            </div>
            <div class="setting-panel-item">
                <h5 class="setting-panel-item-title">Color Scheme</h5>
                <div class="row gx-2">
                    <div class="col-6">
                        <input class="btn-check" id="themeSwitcherLight" name="theme-color" type="radio"
                            value="light" data-theme-control="phoenixTheme" />
                        <label class="btn d-inline-block btn-navbar-style fs--1" for="themeSwitcherLight"> <span
                                class="mb-2 rounded d-block"><img class="img-fluid img-prototype mb-0"
                                    src="{{ asset('img/generic/default-light.png') }}"
                                    alt="" /></span><span class="label-text">Light</span></label>
                    </div>
                    <div class="col-6">
                        <input class="btn-check" id="themeSwitcherDark" name="theme-color" type="radio"
                            value="dark" data-theme-control="phoenixTheme" />
                        <label class="btn d-inline-block btn-navbar-style fs--1" for="themeSwitcherDark"> <span
                                class="mb-2 rounded d-block"><img class="img-fluid img-prototype mb-0"
                                    src="{{ asset('img/generic/default-dark.png') }}" alt="" /></span><span
                                class="label-text"> Dark</span></label>
                    </div>
                </div>
            </div>
            <div class="setting-panel-item">
                <h5 class="setting-panel-item-title">Navigation Type</h5>
                <div class="row gx-2">
                    <div class="col-6">
                        <input class="btn-check" id="navbarPositionVertical" name="navigation-type"
                            type="radio" value="vertical" data-theme-control="phoenixNavbarPosition"
                            data-page-url="documentation/layouts/vertical-navbar.html" />
                        <label class="btn d-inline-block btn-navbar-style fs--1" for="navbarPositionVertical"> <span
                                class="mb-2 rounded d-block"><img class="img-fluid img-prototype d-dark-none"
                                    src="{{ asset('img/generic/default-light.png') }}" alt="" /><img
                                    class="img-fluid img-prototype d-light-none"
                                    src="{{ asset('img/generic/default-dark.png') }}" alt="" /></span><span
                                class="label-text">Vertical</span></label>
                    </div>
                    <div class="col-6">
                        <input class="btn-check" id="navbarPositionHorizontal" name="navigation-type"
                            type="radio" value="horizontal" data-theme-control="phoenixNavbarPosition"
                            data-page-url="documentation/layouts/horizontal-navbar.html" />
                        <label class="btn d-inline-block btn-navbar-style fs--1" for="navbarPositionHorizontal">
                            <span class="mb-2 rounded d-block"><img class="img-fluid img-prototype d-dark-none"
                                    src="{{ asset('img/generic/top-default.png') }}" alt="" /><img
                                    class="img-fluid img-prototype d-light-none"
                                    src="{{ asset('img/generic/top-default-dark.png') }} "
                                    alt="" /></span><span class="label-text"> Horizontal</span></label>
                    </div>
                    <div class="col-6">
                        <input class="btn-check" id="navbarPositionCombo" name="navigation-type" type="radio"
                            value="combo" data-theme-control="phoenixNavbarPosition"
                            data-page-url="documentation/layouts/combo-navbar.html" />
                        <label class="btn d-inline-block btn-navbar-style fs--1" for="navbarPositionCombo"> <span
                                class="mb-2 rounded d-block"><img class="img-fluid img-prototype d-dark-none"
                                    src="{{ asset('img/generic/nav-combo-light.png') }}" alt="" /><img
                                    class="img-fluid img-prototype d-light-none"
                                    src="{{ asset('img/generic/nav-combo-dark.png') }}"
                                    alt="" /></span><span class="label-text"> Combo</span></label>
                    </div>
                </div>
            </div>
            <div class="setting-panel-item">
                <h5 class="setting-panel-item-title">Vertical Navbar Appearance</h5>
                <div class="row gx-2">
                    <div class="col-6">
                        <input class="btn-check" id="navbar-style-default" type="radio" name="config.name"
                            value="default" data-theme-control="phoenixNavbarVerticalStyle" />
                        <label class="btn d-block w-100 btn-navbar-style fs--1" for="navbar-style-default"> <img
                                class="img-fluid img-prototype d-dark-none"
                                src="{{ asset('img/generic/default-light.png') }}" alt="" /><img
                                class="img-fluid img-prototype d-light-none"
                                src="{{ asset('img/generic/default-dark.png') }}" alt="" /><span
                                class="label-text d-dark-none"> Default</span><span
                                class="label-text d-light-none">Default</span></label>
                    </div>
                    <div class="col-6">
                        <input class="btn-check" id="navbar-style-dark" type="radio" name="config.name"
                            value="darker" data-theme-control="phoenixNavbarVerticalStyle" />
                        <label class="btn d-block w-100 btn-navbar-style fs--1" for="navbar-style-dark"> <img
                                class="img-fluid img-prototype d-dark-none"
                                src="{{ asset('img/generic/vertical-darker.png') }}" alt="" /><img
                                class="img-fluid img-prototype d-light-none"
                                src="{{ asset('img/generic/vertical-lighter.png') }}" alt="" /><span
                                class="label-text d-dark-none"> Darker</span><span
                                class="label-text d-light-none">Lighter</span></label>
                    </div>
                </div>
            </div>
            <div class="setting-panel-item">
                <h5 class="setting-panel-item-title">Horizontal Navbar Shape</h5>
                <div class="row gx-2">
                    <div class="col-6">
                        <input class="btn-check" id="navbarShapeDefault" name="navbar-shape" type="radio"
                            value="default" data-theme-control="phoenixNavbarTopShape"
                            data-page-url="documentation/layouts/horizontal-navbar.html" />
                        <label class="btn d-inline-block btn-navbar-style fs--1" for="navbarShapeDefault"> <span
                                class="mb-2 rounded d-block"><img class="img-fluid img-prototype d-dark-none mb-0"
                                    src="{{ asset('img/generic/top-default.png') }}" alt="" /><img
                                    class="img-fluid img-prototype d-light-none mb-0"
                                    src="{{ asset('img/generic/top-default-dark.png') }}"
                                    alt="" /></span><span class="label-text">Default</span></label>
                    </div>
                    <div class="col-6">
                        <input class="btn-check" id="navbarShapeSlim" name="navbar-shape" type="radio"
                            value="slim" data-theme-control="phoenixNavbarTopShape"
                            data-page-url="documentation/layouts/vertical-navbar.html#horizontal-navbar-slim" />
                        <label class="btn d-inline-block btn-navbar-style fs--1" for="navbarShapeSlim"> <span
                                class="mb-2 rounded d-block"><img class="img-fluid img-prototype d-dark-none mb-0"
                                    src="{{ asset('img/generic/top-slim.png') }}" alt="" /><img
                                    class="img-fluid img-prototype d-light-none mb-0"
                                    src="{{ asset('img/generic/top-slim-dark.png') }}"
                                    alt="" /></span><span class="label-text"> Slim</span></label>
                    </div>
                </div>
            </div>
            <div class="setting-panel-item">
                <h5 class="setting-panel-item-title">Horizontal Navbar Appearance</h5>
                <div class="row gx-2">
                    <div class="col-6">
                        <input class="btn-check" id="navbarTopDefault" name="navbar-top-style" type="radio"
                            value="default" data-theme-control="phoenixNavbarTopStyle" />
                        <label class="btn d-inline-block btn-navbar-style fs--1" for="navbarTopDefault"> <span
                                class="mb-2 rounded d-block"><img class="img-fluid img-prototype d-dark-none mb-0"
                                    src="{{ asset('img/generic/top-default.png') }}" alt="" /><img
                                    class="img-fluid img-prototype d-light-none mb-0"
                                    src="{{ asset('img/generic/top-style-darker.png') }}"
                                    alt="" /></span><span class="label-text">Default</span></label>
                    </div>
                    <div class="col-6">
                        <input class="btn-check" id="navbarTopDarker" name="navbar-top-style" type="radio"
                            value="darker" data-theme-control="phoenixNavbarTopStyle" />
                        <label class="btn d-inline-block btn-navbar-style fs--1" for="navbarTopDarker"> <span
                                class="mb-2 rounded d-block"><img class="img-fluid img-prototype d-dark-none mb-0"
                                    src="{{ asset('img/generic/navbar-top-style-light.png') }}"
                                    alt="" /><img class="img-fluid img-prototype d-light-none mb-0"
                                    src="{{ asset('img/generic/top-style-lighter.png') }}"
                                    alt="" /></span><span class="label-text d-dark-none">Darker</span><span
                                class="label-text d-light-none">Lighter</span></label>
                    </div>
                </div>
            </div><a class="bun btn-primary d-grid mb-3 text-white dark__text-100 mt-5 btn btn-primary"
                href="https://themes.getbootstrap.com/product/phoenix-admin-dashboard-webapp-template/"
                target="_blank">Purchase template</a>
        </div>
    </div>
    <a class="card setting-toggle" href="#settings-offcanvas" data-bs-toggle="offcanvas">
        <div class="card-body d-flex align-items-center px-2 py-1">
            <div class="position-relative rounded-start" style="height:34px;width:28px">
                <div class="settings-popover"><span class="ripple"><span
                            class="fa-spin position-absolute all-0 d-flex flex-center"><span
                                class="icon-spin position-absolute all-0 d-flex flex-center">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="#ffffff"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M19.7369 12.3941L19.1989 12.1065C18.4459 11.7041 18.0843 10.8487 18.0843 9.99495C18.0843 9.14118 18.4459 8.28582 19.1989 7.88336L19.7369 7.59581C19.9474 7.47484 20.0316 7.23291 19.9474 7.03131C19.4842 5.57973 18.6843 4.28943 17.6738 3.20075C17.5053 3.03946 17.2527 2.99914 17.0422 3.12011L16.393 3.46714C15.6883 3.84379 14.8377 3.74529 14.1476 3.3427C14.0988 3.31422 14.0496 3.28621 14.0002 3.25868C13.2568 2.84453 12.7055 2.10629 12.7055 1.25525V0.70081C12.7055 0.499202 12.5371 0.297594 12.2845 0.257272C10.7266 -0.105622 9.16879 -0.0653007 7.69516 0.257272C7.44254 0.297594 7.31623 0.499202 7.31623 0.70081V1.23474C7.31623 2.09575 6.74999 2.8362 5.99824 3.25599C5.95774 3.27861 5.91747 3.30159 5.87744 3.32493C5.15643 3.74527 4.26453 3.85902 3.53534 3.45302L2.93743 3.12011C2.72691 2.99914 2.47429 3.03946 2.30587 3.20075C1.29538 4.28943 0.495411 5.57973 0.0322686 7.03131C-0.051939 7.23291 0.0322686 7.47484 0.242788 7.59581L0.784376 7.8853C1.54166 8.29007 1.92694 9.13627 1.92694 9.99495C1.92694 10.8536 1.54166 11.6998 0.784375 12.1046L0.242788 12.3941C0.0322686 12.515 -0.051939 12.757 0.0322686 12.9586C0.495411 14.4102 1.29538 15.7005 2.30587 16.7891C2.47429 16.9504 2.72691 16.9907 2.93743 16.8698L3.58669 16.5227C4.29133 16.1461 5.14131 16.2457 5.8331 16.6455C5.88713 16.6767 5.94159 16.7074 5.99648 16.7375C6.75162 17.1511 7.31623 17.8941 7.31623 18.7552V19.2891C7.31623 19.4425 7.41373 19.5959 7.55309 19.696C7.64066 19.7589 7.74815 19.7843 7.85406 19.8046C9.35884 20.0925 10.8609 20.0456 12.2845 19.7729C12.5371 19.6923 12.7055 19.4907 12.7055 19.2891V18.7346C12.7055 17.8836 13.2568 17.1454 14.0002 16.7312C14.0496 16.7037 14.0988 16.6757 14.1476 16.6472C14.8377 16.2446 15.6883 16.1461 16.393 16.5227L17.0422 16.8698C17.2527 16.9907 17.5053 16.9504 17.6738 16.7891C18.7264 15.7005 19.4842 14.4102 19.9895 12.9586C20.0316 12.757 19.9474 12.515 19.7369 12.3941ZM10.0109 13.2005C8.1162 13.2005 6.64257 11.7893 6.64257 9.97478C6.64257 8.20063 8.1162 6.74905 10.0109 6.74905C11.8634 6.74905 13.3792 8.20063 13.3792 9.97478C13.3792 11.7893 11.8634 13.2005 10.0109 13.2005Z"
                                        fill="#2A7BE4"></path>
                                </svg></span></span></span></div>
            </div><small class="text-uppercase text-700 fw-bold py-2 pe-2 ps-1 rounded-end">customize</small>
        </div>
    </a>


    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
   

</body>

</html>

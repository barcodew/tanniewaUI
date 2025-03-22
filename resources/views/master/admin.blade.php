<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tanniewa Putra - @yield('tittle')</title>
    <link rel="icon" type="image/png" href="AdminAssets/images/favicon.png" sizes="16x16">
    <link rel="stylesheet" href="AdminAssets/css/remixicon.css">
    <link rel="stylesheet" href="AdminAssets/css/lib/bootstrap.min.css">
    <link rel="stylesheet" href="AdminAssets/css/lib/apexcharts.css">
    <link rel="stylesheet" href="AdminAssets/css/lib/dataTables.min.css">
    <link rel="stylesheet" href="AdminAssets/css/lib/editor-katex.min.css">
    <link rel="stylesheet" href="AdminAssets/css/lib/editor.atom-one-dark.min.css">
    <link rel="stylesheet" href="AdminAssets/css/lib/editor.quill.snow.css">
    <link rel="stylesheet" href="AdminAssets/css/lib/flatpickr.min.css">
    <link rel="stylesheet" href="AdminAssets/css/lib/full-calendar.css">
    <link rel="stylesheet" href="AdminAssets/css/lib/jquery-jvectormap-2.0.5.css">
    <link rel="stylesheet" href="AdminAssets/css/lib/magnific-popup.css">
    <link rel="stylesheet" href="AdminAssets/css/lib/slick.css">
    <link rel="stylesheet" href="AdminAssets/css/lib/prism.css">
    <link rel="stylesheet" href="AdminAssets/css/lib/file-upload.css">
    <link rel="stylesheet" href="AdminAssets/css/lib/audioplayer.css">
    <link rel="stylesheet" href="AdminAssets/css/style.css">

    <style>
        .logo-text-bd {
            font-family: 'Arial', sans-serif;
            font-size: 24px;
            font-weight: bold;
            color: #333;
            margin-left: 10px;
            background: linear-gradient(120deg, #b60d22, #c0081e);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
    </style>
</head>

<body>
    <aside class="sidebar">
        <button type="button" class="sidebar-close-btn">
            <iconify-icon icon="radix-icons:cross-2"></iconify-icon>
        </button>
        <div>
            <a href="/dashboard" class="sidebar-logo">
                <img src="AdminAssets/images/LogoTanniewa.png" alt="site logo" class="light-logo">
                <img src="AdminAssets/images/LogoTanniewa.png" alt="site logo" class="dark-logo">
                <img src="AdminAssets/images/LogoTanniewa.png" alt="site logo" class="logo-icon">
                <span class="logo-text-bd">Tanniewa Putra</span>
            </a>
        </div>
        <div class="sidebar-menu-area">
            <ul class="sidebar-menu" id="sidebar-menu">
                <li class="dropdown">
                    <a href="javascript:void(0)">
                        <iconify-icon icon="solar:home-smile-angle-outline" class="menu-icon"></iconify-icon>
                        <span>Dashboard</span>
                    </a>
                    <ul class="sidebar-submenu">
                        <li>
                            <a href="index.html"><i class="ri-circle-fill circle-icon text-primary-600 w-auto"></i>
                                AI</a>
                        </li>
                        <li>
                            <a href="index-2.html"><i class="ri-circle-fill circle-icon text-warning-main w-auto"></i>
                                CRM</a>
                        </li>
                        <li>
                            <a href="index-3.html"><i class="ri-circle-fill circle-icon text-info-main w-auto"></i>
                                eCommerce</a>
                        </li>
                        <li>
                            <a href="index-4.html"><i class="ri-circle-fill circle-icon text-danger-main w-auto"></i>
                                Cryptocurrency</a>
                        </li>
                        <li>
                            <a href="index-5.html"><i class="ri-circle-fill circle-icon text-success-main w-auto"></i>
                                Investment</a>
                        </li>
                        <li>
                            <a href="index-6.html"><i class="ri-circle-fill circle-icon text-purple w-auto"></i> LMS</a>
                        </li>
                        <li>
                            <a href="index-7.html"><i class="ri-circle-fill circle-icon text-info-main w-auto"></i> NFT
                                & Gaming</a>
                        </li>
                        <li>
                            <a href="index-8.html"><i class="ri-circle-fill circle-icon text-danger-main w-auto"></i>
                                Medical</a>
                        </li>
                        <li>
                            <a href="index-9.html"><i class="ri-circle-fill circle-icon text-purple w-auto"></i>
                                Analytics</a>
                        </li>
                        <li>
                            <a href="index-10.html"><i class="ri-circle-fill circle-icon text-warning-main w-auto"></i>
                                POS & Inventory </a>
                        </li>
                        <li>
                            <a href="index-11.html"><i class="ri-circle-fill circle-icon text-success-main w-auto"></i>
                                Finance & Banking </a>
                        </li>
                        <li>
                            <a href="index-12.html"><i class="ri-circle-fill circle-icon text-danger-main w-auto"></i>
                                Booking System</a>
                        </li>
                        <li>
                            <a href="index-13.html"><i class="ri-circle-fill circle-icon text-info-main w-auto"></i>
                                Help Desk</a>
                        </li>
                        <li>
                            <a href="index-14.html"><i class="ri-circle-fill circle-icon text-warning-main w-auto"></i>
                                Podcast </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-menu-group-title">Application</li>
                <li>
                    <a href="email.html">
                        <iconify-icon icon="mage:email" class="menu-icon"></iconify-icon>
                        <span>Email</span>
                    </a>
                </li>
                <li>
                    <a href="chat-message.html">
                        <iconify-icon icon="bi:chat-dots" class="menu-icon"></iconify-icon>
                        <span>Chat</span>
                    </a>
                </li>
                <li>
                    <a href="calendar-main.html">
                        <iconify-icon icon="solar:calendar-outline" class="menu-icon"></iconify-icon>
                        <span>Calendar</span>
                    </a>
                </li>
                <li>
                    <a href="kanban.html">
                        <iconify-icon icon="material-symbols:map-outline" class="menu-icon"></iconify-icon>
                        <span>Kanban</span>
                    </a>
                </li>
                <li class="dropdown">
                    <a href="javascript:void(0)">
                        <iconify-icon icon="hugeicons:invoice-03" class="menu-icon"></iconify-icon>
                        <span>Invoice</span>
                    </a>
                    <ul class="sidebar-submenu">
                        <li>
                            <a href="invoice-list.html"><i
                                    class="ri-circle-fill circle-icon text-primary-600 w-auto"></i> List</a>
                        </li>
                        <li>
                            <a href="invoice-preview.html"><i
                                    class="ri-circle-fill circle-icon text-warning-main w-auto"></i> Preview</a>
                        </li>
                        <li>
                            <a href="invoice-add.html"><i
                                    class="ri-circle-fill circle-icon text-info-main w-auto"></i> Add new</a>
                        </li>
                        <li>
                            <a href="invoice-edit.html"><i
                                    class="ri-circle-fill circle-icon text-danger-main w-auto"></i> Edit</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="javascript:void(0)">
                        <i class="ri-robot-2-line text-xl me-14 d-flex w-auto"></i>
                        <span>Ai Application</span>
                    </a>
                    <ul class="sidebar-submenu">
                        <li>
                            <a href="text-generator.html"><i
                                    class="ri-circle-fill circle-icon text-primary-600 w-auto"></i> Text Generator</a>
                        </li>
                        <li>
                            <a href="code-generator.html"><i
                                    class="ri-circle-fill circle-icon text-warning-main w-auto"></i> Code Generator</a>
                        </li>
                        <li>
                            <a href="image-generator.html"><i
                                    class="ri-circle-fill circle-icon text-info-main w-auto"></i> Image Generator</a>
                        </li>
                        <li>
                            <a href="voice-generator.html"><i
                                    class="ri-circle-fill circle-icon text-danger-main w-auto"></i> Voice Generator</a>
                        </li>
                        <li>
                            <a href="video-generator.html"><i
                                    class="ri-circle-fill circle-icon text-success-main w-auto"></i> Video
                                Generator</a>
                        </li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="javascript:void(0)">
                        <i class="ri-btc-line text-xl me-14 d-flex w-auto"></i>
                        <span>Crypto Currency</span>
                    </a>
                    <ul class="sidebar-submenu">
                        <li>
                            <a href="wallet.html"><i class="ri-circle-fill circle-icon text-primary-600 w-auto"></i>
                                Wallet</a>
                        </li>
                        <li>
                            <a href="marketplace.html"><i
                                    class="ri-circle-fill circle-icon text-warning-main w-auto"></i> Marketplace</a>
                        </li>
                        <li>
                            <a href="marketplace-details.html"><i
                                    class="ri-circle-fill circle-icon text-warning-main w-auto"></i> Marketplace
                                Details</a>
                        </li>
                        <li>
                            <a href="portfolio.html"><i
                                    class="ri-circle-fill circle-icon text-warning-main w-auto"></i> Portfolios</a>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-menu-group-title">UI Elements</li>

                <li class="dropdown">
                    <a href="javascript:void(0)">
                        <iconify-icon icon="solar:document-text-outline" class="menu-icon"></iconify-icon>
                        <span>Components</span>
                    </a>
                    <ul class="sidebar-submenu">
                        <li>
                            <a href="typography.html"><i
                                    class="ri-circle-fill circle-icon text-primary-600 w-auto"></i> Typography</a>
                        </li>
                        <li>
                            <a href="colors.html"><i class="ri-circle-fill circle-icon text-warning-main w-auto"></i>
                                Colors</a>
                        </li>
                        <li>
                            <a href="button.html"><i class="ri-circle-fill circle-icon text-success-main w-auto"></i>
                                Button</a>
                        </li>
                        <li>
                            <a href="dropdown.html"><i class="ri-circle-fill circle-icon text-lilac-600 w-auto"></i>
                                Dropdown</a>
                        </li>
                        <li>
                            <a href="alert.html"><i class="ri-circle-fill circle-icon text-warning-main w-auto"></i>
                                Alerts</a>
                        </li>
                        <li>
                            <a href="card.html"><i class="ri-circle-fill circle-icon text-danger-main w-auto"></i>
                                Card</a>
                        </li>
                        <li>
                            <a href="carousel.html"><i class="ri-circle-fill circle-icon text-info-main w-auto"></i>
                                Carousel</a>
                        </li>
                        <li>
                            <a href="avatar.html"><i class="ri-circle-fill circle-icon text-success-main w-auto"></i>
                                Avatars</a>
                        </li>
                        <li>
                            <a href="progress.html"><i class="ri-circle-fill circle-icon text-primary-600 w-auto"></i>
                                Progress bar</a>
                        </li>
                        <li>
                            <a href="tabs.html"><i class="ri-circle-fill circle-icon text-warning-main w-auto"></i>
                                Tab & Accordion</a>
                        </li>
                        <li>
                            <a href="pagination.html"><i
                                    class="ri-circle-fill circle-icon text-danger-main w-auto"></i> Pagination</a>
                        </li>
                        <li>
                            <a href="badges.html"><i class="ri-circle-fill circle-icon text-info-main w-auto"></i>
                                Badges</a>
                        </li>
                        <li>
                            <a href="tooltip.html"><i class="ri-circle-fill circle-icon text-lilac-600 w-auto"></i>
                                Tooltip & Popover</a>
                        </li>
                        <li>
                            <a href="videos.html"><i class="ri-circle-fill circle-icon text-cyan w-auto"></i>
                                Videos</a>
                        </li>
                        <li>
                            <a href="star-rating.html"><i class="ri-circle-fill circle-icon text-indigo w-auto"></i>
                                Star Ratings</a>
                        </li>
                        <li>
                            <a href="tags.html"><i class="ri-circle-fill circle-icon text-purple w-auto"></i> Tags</a>
                        </li>
                        <li>
                            <a href="list.html"><i class="ri-circle-fill circle-icon text-red w-auto"></i> List</a>
                        </li>
                        <li>
                            <a href="calendar.html"><i class="ri-circle-fill circle-icon text-yellow w-auto"></i>
                                Calendar</a>
                        </li>
                        <li>
                            <a href="radio.html"><i class="ri-circle-fill circle-icon text-orange w-auto"></i>
                                Radio</a>
                        </li>
                        <li>
                            <a href="switch.html"><i class="ri-circle-fill circle-icon text-pink w-auto"></i>
                                Switch</a>
                        </li>
                        <li>
                            <a href="image-upload.html"><i
                                    class="ri-circle-fill circle-icon text-primary-600 w-auto"></i> Upload</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="javascript:void(0)">
                        <iconify-icon icon="heroicons:document" class="menu-icon"></iconify-icon>
                        <span>Forms</span>
                    </a>
                    <ul class="sidebar-submenu">
                        <li>
                            <a href="form.html"><i class="ri-circle-fill circle-icon text-primary-600 w-auto"></i>
                                Input Forms</a>
                        </li>
                        <li>
                            <a href="form-layout.html"><i
                                    class="ri-circle-fill circle-icon text-warning-main w-auto"></i> Input Layout</a>
                        </li>
                        <li>
                            <a href="form-validation.html"><i
                                    class="ri-circle-fill circle-icon text-success-main w-auto"></i> Form
                                Validation</a>
                        </li>
                        <li>
                            <a href="wizard.html"><i class="ri-circle-fill circle-icon text-danger-main w-auto"></i>
                                Form Wizard</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="javascript:void(0)">
                        <iconify-icon icon="mingcute:storage-line" class="menu-icon"></iconify-icon>
                        <span>Table</span>
                    </a>
                    <ul class="sidebar-submenu">
                        <li>
                            <a href="table-basic.html"><i
                                    class="ri-circle-fill circle-icon text-primary-600 w-auto"></i> Basic Table</a>
                        </li>
                        <li>
                            <a href="table-data.html"><i
                                    class="ri-circle-fill circle-icon text-warning-main w-auto"></i> Data Table</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="javascript:void(0)">
                        <iconify-icon icon="solar:pie-chart-outline" class="menu-icon"></iconify-icon>
                        <span>Chart</span>
                    </a>
                    <ul class="sidebar-submenu">
                        <li>
                            <a href="line-chart.html"><i
                                    class="ri-circle-fill circle-icon text-danger-main w-auto"></i> Line Chart</a>
                        </li>
                        <li>
                            <a href="column-chart.html"><i
                                    class="ri-circle-fill circle-icon text-warning-main w-auto"></i> Column Chart</a>
                        </li>
                        <li>
                            <a href="pie-chart.html"><i
                                    class="ri-circle-fill circle-icon text-success-main w-auto"></i> Pie Chart</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="widgets.html">
                        <iconify-icon icon="fe:vector" class="menu-icon"></iconify-icon>
                        <span>Widgets</span>
                    </a>
                </li>
                <li class="dropdown">
                    <a href="javascript:void(0)">
                        <iconify-icon icon="flowbite:users-group-outline" class="menu-icon"></iconify-icon>
                        <span>Users</span>
                    </a>
                    <ul class="sidebar-submenu">
                        <li>
                            <a href="users-list.html"><i
                                    class="ri-circle-fill circle-icon text-primary-600 w-auto"></i> Users List</a>
                        </li>
                        <li>
                            <a href="users-grid.html"><i
                                    class="ri-circle-fill circle-icon text-warning-main w-auto"></i> Users Grid</a>
                        </li>
                        <li>
                            <a href="add-user.html"><i class="ri-circle-fill circle-icon text-info-main w-auto"></i>
                                Add User</a>
                        </li>
                        <li>
                            <a href="view-profile.html"><i
                                    class="ri-circle-fill circle-icon text-danger-main w-auto"></i> View Profile</a>
                        </li>
                        <li>
                            <a href="users-role-permission.html"><i
                                    class="ri-circle-fill circle-icon text-info-main w-auto"></i> User Role &
                                Permission</a>
                        </li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="javascript:void(0)">
                        <i class="ri-user-settings-line text-xl me-14 d-flex w-auto"></i>
                        <span>Role & Access</span>
                    </a>
                    <ul class="sidebar-submenu">
                        <li>
                            <a href="role-access.html"><i
                                    class="ri-circle-fill circle-icon text-primary-600 w-auto"></i> Role & Access</a>
                        </li>
                        <li>
                            <a href="assign-role.html"><i
                                    class="ri-circle-fill circle-icon text-warning-main w-auto"></i> Assign Role</a>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-menu-group-title">Application</li>

                <li class="dropdown">
                    <a href="javascript:void(0)">
                        <iconify-icon icon="simple-line-icons:vector" class="menu-icon"></iconify-icon>
                        <span>Authentication</span>
                    </a>
                    <ul class="sidebar-submenu">
                        <li>
                            <a href="sign-in.html"><i class="ri-circle-fill circle-icon text-primary-600 w-auto"></i>
                                Sign In</a>
                        </li>
                        <li>
                            <a href="sign-up.html"><i class="ri-circle-fill circle-icon text-warning-main w-auto"></i>
                                Sign Up</a>
                        </li>
                        <li>
                            <a href="forgot-password.html"><i
                                    class="ri-circle-fill circle-icon text-info-main w-auto"></i> Forgot Password</a>
                        </li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="javascript:void(0)">
                        <iconify-icon icon="solar:gallery-wide-linear" class="menu-icon"></iconify-icon>
                        <span>Gallery</span>
                    </a>
                    <ul class="sidebar-submenu">
                        <li>
                            <a href="gallery-grid.html"><i
                                    class="ri-circle-fill circle-icon text-primary-600 w-auto"></i> Gallery Grid</a>
                        </li>
                        <li>
                            <a href="gallery.html"><i class="ri-circle-fill circle-icon text-danger-600 w-auto"></i>
                                Gallery Grid Desc</a>
                        </li>
                        <li>
                            <a href="gallery-masonry.html"><i
                                    class="ri-circle-fill circle-icon text-info-main w-auto"></i> Gallery Masonry</a>
                        </li>
                        <li>
                            <a href="gallery-hover.html"><i
                                    class="ri-circle-fill circle-icon text-info-main w-auto"></i> Gallery Hover
                                Effect</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="pricing.html">
                        <iconify-icon icon="hugeicons:money-send-square" class="menu-icon"></iconify-icon>
                        <span>Pricing</span>
                    </a>
                </li>
                <li class="dropdown">
                    <a href="javascript:void(0)">
                        <i class="ri-news-line text-xl me-14 d-flex w-auto"></i>
                        <span>Blog</span>
                    </a>
                    <ul class="sidebar-submenu">
                        <li>
                            <a href="blog.html"><i class="ri-circle-fill circle-icon text-primary-600 w-auto"></i>
                                Blog</a>
                        </li>
                        <li>
                            <a href="blog-details.html"><i
                                    class="ri-circle-fill circle-icon text-warning-main w-auto"></i> Blog Details</a>
                        </li>
                        <li>
                            <a href="add-blog.html"><i class="ri-circle-fill circle-icon text-info-main w-auto"></i>
                                Add Blog</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="testimonials.html">
                        <i class="ri-star-line text-xl me-14 d-flex w-auto"></i>
                        <span>Testimonial</span>
                    </a>
                </li>
                <li>
                    <a href="faq.html">
                        <iconify-icon icon="mage:message-question-mark-round" class="menu-icon"></iconify-icon>
                        <span>FAQs</span>
                    </a>
                </li>
                <li>
                    <a href="error.html">
                        <iconify-icon icon="streamline:straight-face" class="menu-icon"></iconify-icon>
                        <span>404</span>
                    </a>
                </li>
                <li>
                    <a href="terms-condition.html">
                        <iconify-icon icon="octicon:info-24" class="menu-icon"></iconify-icon>
                        <span>Terms & Conditions</span>
                    </a>
                </li>
                <li>
                    <a href="coming-soon.html">
                        <i class="ri-rocket-line text-xl me-14 d-flex w-auto"></i>
                        <span>Coming Soon</span>
                    </a>
                </li>
                <li>
                    <a href="access-denied.html">
                        <i class="ri-folder-lock-line text-xl me-14 d-flex w-auto"></i>
                        <span>Access Denied</span>
                    </a>
                </li>
                <li>
                    <a href="maintenance.html">
                        <i class="ri-hammer-line text-xl me-14 d-flex w-auto"></i>
                        <span>Maintenance</span>
                    </a>
                </li>
                <li>
                    <a href="blank-page.html">
                        <i class="ri-checkbox-multiple-blank-line text-xl me-14 d-flex w-auto"></i>
                        <span>Blank Page</span>
                    </a>
                </li>
                <li class="dropdown">
                    <a href="javascript:void(0)">
                        <iconify-icon icon="icon-park-outline:setting-two" class="menu-icon"></iconify-icon>
                        <span>Settings</span>
                    </a>
                    <ul class="sidebar-submenu">
                        <li>
                            <a href="company.html"><i class="ri-circle-fill circle-icon text-primary-600 w-auto"></i>
                                Company</a>
                        </li>
                        <li>
                            <a href="notification.html"><i
                                    class="ri-circle-fill circle-icon text-warning-main w-auto"></i> Notification</a>
                        </li>
                        <li>
                            <a href="notification-alert.html"><i
                                    class="ri-circle-fill circle-icon text-info-main w-auto"></i> Notification
                                Alert</a>
                        </li>
                        <li>
                            <a href="theme.html"><i class="ri-circle-fill circle-icon text-danger-main w-auto"></i>
                                Theme</a>
                        </li>
                        <li>
                            <a href="currencies.html"><i
                                    class="ri-circle-fill circle-icon text-danger-main w-auto"></i> Currencies</a>
                        </li>
                        <li>
                            <a href="language.html"><i class="ri-circle-fill circle-icon text-danger-main w-auto"></i>
                                Languages</a>
                        </li>
                        <li>
                            <a href="payment-gateway.html"><i
                                    class="ri-circle-fill circle-icon text-danger-main w-auto"></i> Payment Gateway</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </aside>

    <main class="dashboard-main">
        <div class="navbar-header">
            <div class="row align-items-center justify-content-between">
                <div class="col-auto">
                    <div class="d-flex flex-wrap align-items-center gap-4">
                        <button type="button" class="sidebar-toggle">
                            <iconify-icon icon="heroicons:bars-3-solid"
                                class="icon text-2xl non-active"></iconify-icon>
                            <iconify-icon icon="iconoir:arrow-right" class="icon text-2xl active"></iconify-icon>
                        </button>
                        <button type="button" class="sidebar-mobile-toggle">
                            <iconify-icon icon="heroicons:bars-3-solid" class="icon"></iconify-icon>
                        </button>
                        <form class="navbar-search">
                            <input type="text" name="search" placeholder="Search">
                            <iconify-icon icon="ion:search-outline" class="icon"></iconify-icon>
                        </form>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="d-flex flex-wrap align-items-center gap-3">
                        <button type="button" data-theme-toggle
                            class="w-40-px h-40-px bg-neutral-200 rounded-circle d-flex justify-content-center align-items-center"></button>
                        <div class="dropdown d-none d-sm-inline-block">
                            <button
                                class="has-indicator w-40-px h-40-px bg-neutral-200 rounded-circle d-flex justify-content-center align-items-center"
                                type="button" data-bs-toggle="dropdown">
                                <img src="AdminAssets/images/lang-flag.png" alt="image"
                                    class="w-24 h-24 object-fit-cover rounded-circle">
                            </button>
                            <div class="dropdown-menu to-top dropdown-menu-sm">
                                <div
                                    class="py-12 px-16 radius-8 bg-primary-50 mb-16 d-flex align-items-center justify-content-between gap-2">
                                    <div>
                                        <h6 class="text-lg text-primary-light fw-semibold mb-0">Choose Your Language
                                        </h6>
                                    </div>
                                </div>

                                <div class="max-h-400-px overflow-y-auto scroll-sm pe-8">
                                    <div
                                        class="form-check style-check d-flex align-items-center justify-content-between mb-16">
                                        <label class="form-check-label line-height-1 fw-medium text-secondary-light"
                                            for="english">
                                            <span
                                                class="text-black hover-bg-transparent hover-text-primary d-flex align-items-center gap-3">
                                                <img src="AdminAssets/images/flags/flag1.png" alt=""
                                                    class="w-36-px h-36-px bg-success-subtle text-success-main rounded-circle flex-shrink-0">
                                                <span class="text-md fw-semibold mb-0">English</span>
                                            </span>
                                        </label>
                                        <input class="form-check-input" type="radio" name="crypto"
                                            id="english">
                                    </div>

                                    <div
                                        class="form-check style-check d-flex align-items-center justify-content-between mb-16">
                                        <label class="form-check-label line-height-1 fw-medium text-secondary-light"
                                            for="japan">
                                            <span
                                                class="text-black hover-bg-transparent hover-text-primary d-flex align-items-center gap-3">
                                                <img src="AdminAssets/images/flags/flag2.png" alt=""
                                                    class="w-36-px h-36-px bg-success-subtle text-success-main rounded-circle flex-shrink-0">
                                                <span class="text-md fw-semibold mb-0">Japan</span>
                                            </span>
                                        </label>
                                        <input class="form-check-input" type="radio" name="crypto"
                                            id="japan">
                                    </div>

                                    <div
                                        class="form-check style-check d-flex align-items-center justify-content-between mb-16">
                                        <label class="form-check-label line-height-1 fw-medium text-secondary-light"
                                            for="france">
                                            <span
                                                class="text-black hover-bg-transparent hover-text-primary d-flex align-items-center gap-3">
                                                <img src="AdminAssets/images/flags/flag3.png" alt=""
                                                    class="w-36-px h-36-px bg-success-subtle text-success-main rounded-circle flex-shrink-0">
                                                <span class="text-md fw-semibold mb-0">France</span>
                                            </span>
                                        </label>
                                        <input class="form-check-input" type="radio" name="crypto"
                                            id="france">
                                    </div>

                                    <div
                                        class="form-check style-check d-flex align-items-center justify-content-between mb-16">
                                        <label class="form-check-label line-height-1 fw-medium text-secondary-light"
                                            for="germany">
                                            <span
                                                class="text-black hover-bg-transparent hover-text-primary d-flex align-items-center gap-3">
                                                <img src="AdminAssets/images/flags/flag4.png" alt=""
                                                    class="w-36-px h-36-px bg-success-subtle text-success-main rounded-circle flex-shrink-0">
                                                <span class="text-md fw-semibold mb-0">Germany</span>
                                            </span>
                                        </label>
                                        <input class="form-check-input" type="radio" name="crypto"
                                            id="germany">
                                    </div>

                                    <div
                                        class="form-check style-check d-flex align-items-center justify-content-between mb-16">
                                        <label class="form-check-label line-height-1 fw-medium text-secondary-light"
                                            for="korea">
                                            <span
                                                class="text-black hover-bg-transparent hover-text-primary d-flex align-items-center gap-3">
                                                <img src="AdminAssets/images/flags/flag5.png" alt=""
                                                    class="w-36-px h-36-px bg-success-subtle text-success-main rounded-circle flex-shrink-0">
                                                <span class="text-md fw-semibold mb-0">South Korea</span>
                                            </span>
                                        </label>
                                        <input class="form-check-input" type="radio" name="crypto"
                                            id="korea">
                                    </div>

                                    <div
                                        class="form-check style-check d-flex align-items-center justify-content-between mb-16">
                                        <label class="form-check-label line-height-1 fw-medium text-secondary-light"
                                            for="bangladesh">
                                            <span
                                                class="text-black hover-bg-transparent hover-text-primary d-flex align-items-center gap-3">
                                                <img src="AdminAssets/images/flags/flag6.png" alt=""
                                                    class="w-36-px h-36-px bg-success-subtle text-success-main rounded-circle flex-shrink-0">
                                                <span class="text-md fw-semibold mb-0">Bangladesh</span>
                                            </span>
                                        </label>
                                        <input class="form-check-input" type="radio" name="crypto"
                                            id="bangladesh">
                                    </div>

                                    <div
                                        class="form-check style-check d-flex align-items-center justify-content-between mb-16">
                                        <label class="form-check-label line-height-1 fw-medium text-secondary-light"
                                            for="india">
                                            <span
                                                class="text-black hover-bg-transparent hover-text-primary d-flex align-items-center gap-3">
                                                <img src="AdminAssets/images/flags/flag7.png" alt=""
                                                    class="w-36-px h-36-px bg-success-subtle text-success-main rounded-circle flex-shrink-0">
                                                <span class="text-md fw-semibold mb-0">India</span>
                                            </span>
                                        </label>
                                        <input class="form-check-input" type="radio" name="crypto"
                                            id="india">
                                    </div>
                                    <div
                                        class="form-check style-check d-flex align-items-center justify-content-between">
                                        <label class="form-check-label line-height-1 fw-medium text-secondary-light"
                                            for="canada">
                                            <span
                                                class="text-black hover-bg-transparent hover-text-primary d-flex align-items-center gap-3">
                                                <img src="AdminAssets/images/flags/flag8.png" alt=""
                                                    class="w-36-px h-36-px bg-success-subtle text-success-main rounded-circle flex-shrink-0">
                                                <span class="text-md fw-semibold mb-0">Canada</span>
                                            </span>
                                        </label>
                                        <input class="form-check-input" type="radio" name="crypto"
                                            id="canada">
                                    </div>
                                </div>
                            </div>
                        </div><!-- Language dropdown end -->

                        <div class="dropdown">
                            <button
                                class="has-indicator w-40-px h-40-px bg-neutral-200 rounded-circle d-flex justify-content-center align-items-center"
                                type="button" data-bs-toggle="dropdown">
                                <iconify-icon icon="mage:email" class="text-primary-light text-xl"></iconify-icon>
                            </button>
                            <div class="dropdown-menu to-top dropdown-menu-lg p-0">
                                <div
                                    class="m-16 py-12 px-16 radius-8 bg-primary-50 mb-16 d-flex align-items-center justify-content-between gap-2">
                                    <div>
                                        <h6 class="text-lg text-primary-light fw-semibold mb-0">Message</h6>
                                    </div>
                                    <span
                                        class="text-primary-600 fw-semibold text-lg w-40-px h-40-px rounded-circle bg-base d-flex justify-content-center align-items-center">05</span>
                                </div>

                                <div class="max-h-400-px overflow-y-auto scroll-sm pe-4">

                                    <a href="javascript:void(0)"
                                        class="px-24 py-12 d-flex align-items-start gap-3 mb-2 justify-content-between">
                                        <div
                                            class="text-black hover-bg-transparent hover-text-primary d-flex align-items-center gap-3">
                                            <span
                                                class="w-40-px h-40-px rounded-circle flex-shrink-0 position-relative">
                                                <img src="AdminAssets/images/notification/profile-3.png"
                                                    alt="">
                                                <span
                                                    class="w-8-px h-8-px bg-success-main rounded-circle position-absolute end-0 bottom-0"></span>
                                            </span>
                                            <div>
                                                <h6 class="text-md fw-semibold mb-4">Kathryn Murphy</h6>
                                                <p class="mb-0 text-sm text-secondary-light text-w-100-px">hey! there
                                                    i’m...</p>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-column align-items-end">
                                            <span class="text-sm text-secondary-light flex-shrink-0">12:30 PM</span>
                                            <span
                                                class="mt-4 text-xs text-base w-16-px h-16-px d-flex justify-content-center align-items-center bg-warning-main rounded-circle">8</span>
                                        </div>
                                    </a>

                                    <a href="javascript:void(0)"
                                        class="px-24 py-12 d-flex align-items-start gap-3 mb-2 justify-content-between">
                                        <div
                                            class="text-black hover-bg-transparent hover-text-primary d-flex align-items-center gap-3">
                                            <span
                                                class="w-40-px h-40-px rounded-circle flex-shrink-0 position-relative">
                                                <img src="AdminAssets/images/notification/profile-4.png"
                                                    alt="">
                                                <span
                                                    class="w-8-px h-8-px  bg-neutral-300 rounded-circle position-absolute end-0 bottom-0"></span>
                                            </span>
                                            <div>
                                                <h6 class="text-md fw-semibold mb-4">Kathryn Murphy</h6>
                                                <p class="mb-0 text-sm text-secondary-light text-w-100-px">hey! there
                                                    i’m...</p>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-column align-items-end">
                                            <span class="text-sm text-secondary-light flex-shrink-0">12:30 PM</span>
                                            <span
                                                class="mt-4 text-xs text-base w-16-px h-16-px d-flex justify-content-center align-items-center bg-warning-main rounded-circle">2</span>
                                        </div>
                                    </a>

                                    <a href="javascript:void(0)"
                                        class="px-24 py-12 d-flex align-items-start gap-3 mb-2 justify-content-between bg-neutral-50">
                                        <div
                                            class="text-black hover-bg-transparent hover-text-primary d-flex align-items-center gap-3">
                                            <span
                                                class="w-40-px h-40-px rounded-circle flex-shrink-0 position-relative">
                                                <img src="AdminAssets/images/notification/profile-5.png"
                                                    alt="">
                                                <span
                                                    class="w-8-px h-8-px bg-success-main rounded-circle position-absolute end-0 bottom-0"></span>
                                            </span>
                                            <div>
                                                <h6 class="text-md fw-semibold mb-4">Kathryn Murphy</h6>
                                                <p class="mb-0 text-sm text-secondary-light text-w-100-px">hey! there
                                                    i’m...</p>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-column align-items-end">
                                            <span class="text-sm text-secondary-light flex-shrink-0">12:30 PM</span>
                                            <span
                                                class="mt-4 text-xs text-base w-16-px h-16-px d-flex justify-content-center align-items-center bg-neutral-400 rounded-circle">0</span>
                                        </div>
                                    </a>

                                    <a href="javascript:void(0)"
                                        class="px-24 py-12 d-flex align-items-start gap-3 mb-2 justify-content-between bg-neutral-50">
                                        <div
                                            class="text-black hover-bg-transparent hover-text-primary d-flex align-items-center gap-3">
                                            <span
                                                class="w-40-px h-40-px rounded-circle flex-shrink-0 position-relative">
                                                <img src="AdminAssets/images/notification/profile-6.png"
                                                    alt="">
                                                <span
                                                    class="w-8-px h-8-px bg-neutral-300 rounded-circle position-absolute end-0 bottom-0"></span>
                                            </span>
                                            <div>
                                                <h6 class="text-md fw-semibold mb-4">Kathryn Murphy</h6>
                                                <p class="mb-0 text-sm text-secondary-light text-w-100-px">hey! there
                                                    i’m...</p>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-column align-items-end">
                                            <span class="text-sm text-secondary-light flex-shrink-0">12:30 PM</span>
                                            <span
                                                class="mt-4 text-xs text-base w-16-px h-16-px d-flex justify-content-center align-items-center bg-neutral-400 rounded-circle">0</span>
                                        </div>
                                    </a>

                                    <a href="javascript:void(0)"
                                        class="px-24 py-12 d-flex align-items-start gap-3 mb-2 justify-content-between">
                                        <div
                                            class="text-black hover-bg-transparent hover-text-primary d-flex align-items-center gap-3">
                                            <span
                                                class="w-40-px h-40-px rounded-circle flex-shrink-0 position-relative">
                                                <img src="AdminAssets/images/notification/profile-7.png"
                                                    alt="">
                                                <span
                                                    class="w-8-px h-8-px bg-success-main rounded-circle position-absolute end-0 bottom-0"></span>
                                            </span>
                                            <div>
                                                <h6 class="text-md fw-semibold mb-4">Kathryn Murphy</h6>
                                                <p class="mb-0 text-sm text-secondary-light text-w-100-px">hey! there
                                                    i’m...</p>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-column align-items-end">
                                            <span class="text-sm text-secondary-light flex-shrink-0">12:30 PM</span>
                                            <span
                                                class="mt-4 text-xs text-base w-16-px h-16-px d-flex justify-content-center align-items-center bg-warning-main rounded-circle">8</span>
                                        </div>
                                    </a>

                                </div>
                                <div class="text-center py-12 px-16">
                                    <a href="javascript:void(0)" class="text-primary-600 fw-semibold text-md">See All
                                        Message</a>
                                </div>
                            </div>
                        </div><!-- Message dropdown end -->

                        <div class="dropdown">
                            <button
                                class="has-indicator w-40-px h-40-px bg-neutral-200 rounded-circle d-flex justify-content-center align-items-center"
                                type="button" data-bs-toggle="dropdown">
                                <iconify-icon icon="iconoir:bell" class="text-primary-light text-xl"></iconify-icon>
                            </button>
                            <div class="dropdown-menu to-top dropdown-menu-lg p-0">
                                <div
                                    class="m-16 py-12 px-16 radius-8 bg-primary-50 mb-16 d-flex align-items-center justify-content-between gap-2">
                                    <div>
                                        <h6 class="text-lg text-primary-light fw-semibold mb-0">Notifications</h6>
                                    </div>
                                    <span
                                        class="text-primary-600 fw-semibold text-lg w-40-px h-40-px rounded-circle bg-base d-flex justify-content-center align-items-center">05</span>
                                </div>

                                <div class="max-h-400-px overflow-y-auto scroll-sm pe-4">
                                    <a href="javascript:void(0)"
                                        class="px-24 py-12 d-flex align-items-start gap-3 mb-2 justify-content-between">
                                        <div
                                            class="text-black hover-bg-transparent hover-text-primary d-flex align-items-center gap-3">
                                            <span
                                                class="w-44-px h-44-px bg-success-subtle text-success-main rounded-circle d-flex justify-content-center align-items-center flex-shrink-0">
                                                <iconify-icon icon="bitcoin-icons:verify-outline"
                                                    class="icon text-xxl"></iconify-icon>
                                            </span>
                                            <div>
                                                <h6 class="text-md fw-semibold mb-4">Congratulations</h6>
                                                <p class="mb-0 text-sm text-secondary-light text-w-200-px">Your profile
                                                    has been Verified. Your profile has been Verified</p>
                                            </div>
                                        </div>
                                        <span class="text-sm text-secondary-light flex-shrink-0">23 Mins ago</span>
                                    </a>

                                    <a href="javascript:void(0)"
                                        class="px-24 py-12 d-flex align-items-start gap-3 mb-2 justify-content-between bg-neutral-50">
                                        <div
                                            class="text-black hover-bg-transparent hover-text-primary d-flex align-items-center gap-3">
                                            <span
                                                class="w-44-px h-44-px bg-success-subtle text-success-main rounded-circle d-flex justify-content-center align-items-center flex-shrink-0">
                                                <img src="AdminAssets/images/notification/profile-1.png"
                                                    alt="">
                                            </span>
                                            <div>
                                                <h6 class="text-md fw-semibold mb-4">Ronald Richards</h6>
                                                <p class="mb-0 text-sm text-secondary-light text-w-200-px">You can
                                                    stitch between artboards</p>
                                            </div>
                                        </div>
                                        <span class="text-sm text-secondary-light flex-shrink-0">23 Mins ago</span>
                                    </a>

                                    <a href="javascript:void(0)"
                                        class="px-24 py-12 d-flex align-items-start gap-3 mb-2 justify-content-between">
                                        <div
                                            class="text-black hover-bg-transparent hover-text-primary d-flex align-items-center gap-3">
                                            <span
                                                class="w-44-px h-44-px bg-info-subtle text-info-main rounded-circle d-flex justify-content-center align-items-center flex-shrink-0">
                                                AM
                                            </span>
                                            <div>
                                                <h6 class="text-md fw-semibold mb-4">Arlene McCoy</h6>
                                                <p class="mb-0 text-sm text-secondary-light text-w-200-px">Invite you
                                                    to prototyping</p>
                                            </div>
                                        </div>
                                        <span class="text-sm text-secondary-light flex-shrink-0">23 Mins ago</span>
                                    </a>

                                    <a href="javascript:void(0)"
                                        class="px-24 py-12 d-flex align-items-start gap-3 mb-2 justify-content-between bg-neutral-50">
                                        <div
                                            class="text-black hover-bg-transparent hover-text-primary d-flex align-items-center gap-3">
                                            <span
                                                class="w-44-px h-44-px bg-success-subtle text-success-main rounded-circle d-flex justify-content-center align-items-center flex-shrink-0">
                                                <img src="AdminAssets/images/notification/profile-2.png"
                                                    alt="">
                                            </span>
                                            <div>
                                                <h6 class="text-md fw-semibold mb-4">Annette Black</h6>
                                                <p class="mb-0 text-sm text-secondary-light text-w-200-px">Invite you
                                                    to prototyping</p>
                                            </div>
                                        </div>
                                        <span class="text-sm text-secondary-light flex-shrink-0">23 Mins ago</span>
                                    </a>

                                    <a href="javascript:void(0)"
                                        class="px-24 py-12 d-flex align-items-start gap-3 mb-2 justify-content-between">
                                        <div
                                            class="text-black hover-bg-transparent hover-text-primary d-flex align-items-center gap-3">
                                            <span
                                                class="w-44-px h-44-px bg-info-subtle text-info-main rounded-circle d-flex justify-content-center align-items-center flex-shrink-0">
                                                DR
                                            </span>
                                            <div>
                                                <h6 class="text-md fw-semibold mb-4">Darlene Robertson</h6>
                                                <p class="mb-0 text-sm text-secondary-light text-w-200-px">Invite you
                                                    to prototyping</p>
                                            </div>
                                        </div>
                                        <span class="text-sm text-secondary-light flex-shrink-0">23 Mins ago</span>
                                    </a>
                                </div>

                                <div class="text-center py-12 px-16">
                                    <a href="javascript:void(0)" class="text-primary-600 fw-semibold text-md">See All
                                        Notification</a>
                                </div>

                            </div>
                        </div><!-- Notification dropdown end -->

                        <div class="dropdown">
                            <button class="d-flex justify-content-center align-items-center rounded-circle"
                                type="button" data-bs-toggle="dropdown">
                                <img src="AdminAssets/images/user.png" alt="image"
                                    class="w-40-px h-40-px object-fit-cover rounded-circle">
                            </button>
                            <div class="dropdown-menu to-top dropdown-menu-sm">
                                <div
                                    class="py-12 px-16 radius-8 bg-primary-50 mb-16 d-flex align-items-center justify-content-between gap-2">
                                    <div>
                                        <h6 class="text-lg text-primary-light fw-semibold mb-2">Shaidul Islam</h6>
                                        <span class="text-secondary-light fw-medium text-sm">Admin</span>
                                    </div>
                                    <button type="button" class="hover-text-danger">
                                        <iconify-icon icon="radix-icons:cross-1" class="icon text-xl"></iconify-icon>
                                    </button>
                                </div>
                                <ul class="to-top-list">
                                    <li>
                                        <a class="dropdown-item text-black px-0 py-8 hover-bg-transparent hover-text-primary d-flex align-items-center gap-3"
                                            href="view-profile.html">
                                            <iconify-icon icon="solar:user-linear"
                                                class="icon text-xl"></iconify-icon> My Profile</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item text-black px-0 py-8 hover-bg-transparent hover-text-primary d-flex align-items-center gap-3"
                                            href="email.html">
                                            <iconify-icon icon="tabler:message-check"
                                                class="icon text-xl"></iconify-icon> Inbox</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item text-black px-0 py-8 hover-bg-transparent hover-text-primary d-flex align-items-center gap-3"
                                            href="company.html">
                                            <iconify-icon icon="icon-park-outline:setting-two"
                                                class="icon text-xl"></iconify-icon> Setting</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item text-black px-0 py-8 hover-bg-transparent hover-text-danger d-flex align-items-center gap-3"
                                            href="javascript:void(0)">
                                            <iconify-icon icon="lucide:power" class="icon text-xl"></iconify-icon> Log
                                            Out</a>
                                    </li>
                                </ul>
                            </div>
                        </div><!-- Profile dropdown end -->
                    </div>
                </div>
            </div>
        </div>


        @yield('content')



        <footer class="d-footer">
            <div class="row align-items-center justify-content-between">
                <div class="col-auto">
                    <p class="mb-0">© 2025 Tanniewa Putra. All Rights Reserved.</p>
                </div>
                <div class="col-auto">
                    <p class="mb-0">Made by <span class="text-primary-600">Barcodew</span></p>
                </div>
            </div>
        </footer>
    </main>
    <script src="AdminAssets/js/lib/jquery-3.7.1.min.js"></script>
    <script src="AdminAssets/js/lib/bootstrap.bundle.min.js"></script>
    <script src="AdminAssets/js/lib/apexcharts.min.js"></script>
    <script src="AdminAssets/js/lib/dataTables.min.js"></script>
    <script src="AdminAssets/js/lib/iconify-icon.min.js"></script>
    <script src="AdminAssets/js/lib/jquery-ui.min.js"></script>
    <script src="AdminAssets/js/lib/jquery-jvectormap-2.0.5.min.js"></script>
    <script src="AdminAssets/js/lib/jquery-jvectormap-world-mill-en.js"></script>
    <script src="AdminAssets/js/lib/magnifc-popup.min.js"></script>
    <script src="AdminAssets/js/lib/slick.min.js"></script>
    <script src="AdminAssets/js/lib/prism.js"></script>
    <script src="AdminAssets/js/lib/file-upload.js"></script>
    <script src="AdminAssets/js/lib/audioplayer.js"></script>
    <script src="AdminAssets/js/app.js"></script>

    <script>
        // ================================ Balance Statistics Chart Start ================================
        var options = {
            series: [{
                name: 'Net Profit',
                data: [20000, 16000, 14000, 25000, 45000, 18000, 28000, 11000, 26000, 48000, 18000, 22000]
            }, {
                name: 'Revenue',
                data: [15000, 18000, 19000, 20000, 35000, 20000, 18000, 13000, 18000, 38000, 14000, 16000]
            }],
            colors: ['#487FFF', '#FF9F29'],
            labels: ['Active', 'New', 'Total'],
            legend: {
                show: false
            },
            chart: {
                type: 'bar',
                height: 250,
                toolbar: {
                    show: false
                },
            },
            grid: {
                show: true,
                borderColor: '#D1D5DB',
                strokeDashArray: 4, // Use a number for dashed style
                position: 'back',
            },
            plotOptions: {
                bar: {
                    borderRadius: 4,
                    columnWidth: 10,
                },
            },
            dataLabels: {
                enabled: false
            },
            stroke: {
                show: true,
                width: 2,
                colors: ['transparent']
            },
            xaxis: {
                categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
            },
            yaxis: {
                categories: ['0', '5000', '10,000', '20,000', '30,000', '50,000', '60,000', '60,000', '70,000',
                    '80,000', '90,000', '100,000'
                ],
            },
            fill: {
                opacity: 1,
                width: 18,
            },
        };

        var chart = new ApexCharts(document.querySelector("#balanceStatistics"), options);
        chart.render();
        // ================================ Balance Statistics Chart End ================================

        // ================================ Expense Statistics Chart start ================================
        var options = {
            series: [30, 30, 30, 30],
            chart: {
                height: 240,
                type: 'pie',
            },
            labels: ['Entertainment', 'Bill Expense', 'Others', 'Investment'],
            colors: ['#02BCAF', '#F0437D', '#1C52F6', '#43DCFF'],
            legend: {
                show: true
            },
            responsive: [{
                breakpoint: 480,
                options: {
                    chart: {
                        width: 200
                    },
                    legend: {
                        position: 'bottom'
                    }
                }
            }]
        };

        var chart = new ApexCharts(document.querySelector("#expenseStatistics"), options);
        chart.render();
        // ================================ Expense Statistics Chart End ================================

        // ================================ Expense Statistics Chart start ================================
        $('.officer-slider').slick({
            slidesToShow: 5,
            slidesToScroll: 1,
            arrows: false,
            dots: false,
            speed: 800,
            centerPadding: '20px',
            infinite: true,
            autoplaySpeed: 2000,
            centerMode: true,
            autoplay: true,
            rtl: $('html').attr('dir') === 'rtl' ? true : false,
        });
        // ================================ Expense Statistics Chart End ================================
    </script>
</body>

</html>

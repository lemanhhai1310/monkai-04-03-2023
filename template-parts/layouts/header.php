<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="REFRESH" content="1800"/>
    <title><?= /** @var TYPE_NAME  */
        (isset($data['title'])) ? $data['title'] : ''; ?> - MonKai</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <!--CSS-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@400;500;600;700;800&family=Unbounded:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.16.3/dist/css/uikit.min.css" />
    <link rel="stylesheet" href="style.css?v=<?php echo(time()) ?>">

    <!--JS-->
    <script src="https://cdn.jsdelivr.net/npm/@shinsenter/defer.js/dist/defer_plus.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.16.3/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.16.3/dist/js/uikit-icons.min.js"></script>
    <script src="js/app.js?v=<?php echo(time()) ?>"></script>
</head>
<body>
<!--app-->
<div id="app" class="uk-height-viewport uk-offcanvas-content uk-overflow-hidden uk-position-relative">
    <!--header-->
    <nav class="header uk-navbar-container uk-navbar-transparent">
        <div class="uk-container uk-container-expand">
            <div uk-navbar>

                <div class="uk-navbar-left">
                    <a href="" class="uk-navbar-item uk-logo uk-visible@m"><img src="images/logo.png" alt=""></a>
                </div>

                <div class="uk-navbar-center">
                    <ul class="uk-navbar-nav uk-visible@m">
                        <li class="uk-active">
                            <a href="#">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <mask id="mask0_5_332" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="16" height="16">
                                        <rect width="16" height="16" fill="white"/>
                                    </mask>
                                    <g mask="url(#mask0_5_332)">
                                        <path d="M8.00004 14.6666C7.07782 14.6666 6.21115 14.4916 5.40004 14.1416C4.58893 13.7916 3.88337 13.3166 3.28337 12.7166C2.68337 12.1166 2.20837 11.4111 1.85837 10.6C1.50837 9.78887 1.33337 8.9222 1.33337 7.99998C1.33337 7.07776 1.50837 6.21109 1.85837 5.39998C2.20837 4.58887 2.68337 3.88331 3.28337 3.28331C3.88337 2.68331 4.58893 2.20831 5.40004 1.85831C6.21115 1.50831 7.07782 1.33331 8.00004 1.33331C8.92226 1.33331 9.78893 1.50831 10.6 1.85831C11.4112 2.20831 12.1167 2.68331 12.7167 3.28331C13.3167 3.88331 13.7917 4.58887 14.1417 5.39998C14.4917 6.21109 14.6667 7.07776 14.6667 7.99998C14.6667 8.9222 14.4917 9.78887 14.1417 10.6C13.7917 11.4111 13.3167 12.1166 12.7167 12.7166C12.1167 13.3166 11.4112 13.7916 10.6 14.1416C9.78893 14.4916 8.92226 14.6666 8.00004 14.6666ZM7.33337 13.3V12C6.96671 12 6.65282 11.8694 6.39171 11.6083C6.1306 11.3472 6.00004 11.0333 6.00004 10.6666V9.99998L2.80004 6.79998C2.76671 6.99998 2.73615 7.19998 2.70837 7.39998C2.6806 7.59998 2.66671 7.79998 2.66671 7.99998C2.66671 9.34442 3.10837 10.5222 3.99171 11.5333C4.87504 12.5444 5.98893 13.1333 7.33337 13.3ZM11.9334 11.6C12.1556 11.3555 12.3556 11.0916 12.5334 10.8083C12.7112 10.525 12.8584 10.2305 12.975 9.92498C13.0917 9.61942 13.1806 9.30554 13.2417 8.98331C13.3028 8.66109 13.3334 8.33331 13.3334 7.99998C13.3334 6.91109 13.0306 5.91665 12.425 5.01665C11.8195 4.11665 11.0112 3.46665 10 3.06665V3.33331C10 3.69998 9.86948 4.01387 9.60837 4.27498C9.34726 4.53609 9.03337 4.66665 8.66671 4.66665H7.33337V5.99998C7.33337 6.18887 7.26949 6.3472 7.14171 6.47498C7.01393 6.60276 6.8556 6.66665 6.66671 6.66665H5.33337V7.99998H9.33337C9.52226 7.99998 9.6806 8.06387 9.80837 8.19165C9.93615 8.31942 10 8.47776 10 8.66665V10.6666H10.6667C10.9556 10.6666 11.2167 10.7528 11.45 10.925C11.6834 11.0972 11.8445 11.3222 11.9334 11.6Z" fill="currentColor" fill-opacity="1"/>
                                    </g>
                                </svg>
                                <span>Explorer</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <mask id="mask0_5_337" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="16" height="16">
                                        <rect width="16" height="16" fill="white"/>
                                    </mask>
                                    <g mask="url(#mask0_5_337)">
                                        <path d="M8.00004 11.3333C8.18893 11.3333 8.34726 11.2694 8.47504 11.1416C8.60282 11.0139 8.66671 10.8555 8.66671 10.6666V8.66665H10.6834C10.8723 8.66665 11.0278 8.60276 11.15 8.47498C11.2723 8.3472 11.3334 8.18887 11.3334 7.99998C11.3334 7.81109 11.2695 7.65276 11.1417 7.52498C11.0139 7.3972 10.8556 7.33331 10.6667 7.33331H8.66671V5.31665C8.66671 5.12776 8.60282 4.9722 8.47504 4.84998C8.34726 4.72776 8.18893 4.66665 8.00004 4.66665C7.81115 4.66665 7.65282 4.73053 7.52504 4.85831C7.39726 4.98609 7.33337 5.14442 7.33337 5.33331V7.33331H5.31671C5.12782 7.33331 4.97226 7.3972 4.85004 7.52498C4.72782 7.65276 4.66671 7.81109 4.66671 7.99998C4.66671 8.18887 4.7306 8.3472 4.85837 8.47498C4.98615 8.60276 5.14448 8.66665 5.33337 8.66665H7.33337V10.6833C7.33337 10.8722 7.39726 11.0278 7.52504 11.15C7.65282 11.2722 7.81115 11.3333 8.00004 11.3333ZM8.00004 14.6666C7.07782 14.6666 6.21115 14.4916 5.40004 14.1416C4.58893 13.7916 3.88337 13.3166 3.28337 12.7166C2.68337 12.1166 2.20837 11.4111 1.85837 10.6C1.50837 9.78887 1.33337 8.9222 1.33337 7.99998C1.33337 7.07776 1.50837 6.21109 1.85837 5.39998C2.20837 4.58887 2.68337 3.88331 3.28337 3.28331C3.88337 2.68331 4.58893 2.20831 5.40004 1.85831C6.21115 1.50831 7.07782 1.33331 8.00004 1.33331C8.92226 1.33331 9.78893 1.50831 10.6 1.85831C11.4112 2.20831 12.1167 2.68331 12.7167 3.28331C13.3167 3.88331 13.7917 4.58887 14.1417 5.39998C14.4917 6.21109 14.6667 7.07776 14.6667 7.99998C14.6667 8.9222 14.4917 9.78887 14.1417 10.6C13.7917 11.4111 13.3167 12.1166 12.7167 12.7166C12.1167 13.3166 11.4112 13.7916 10.6 14.1416C9.78893 14.4916 8.92226 14.6666 8.00004 14.6666ZM8.00004 13.3333C9.47782 13.3333 10.7362 12.8139 11.775 11.775C12.8139 10.7361 13.3334 9.47776 13.3334 7.99998C13.3334 6.5222 12.8139 5.26387 11.775 4.22498C10.7362 3.18609 9.47782 2.66665 8.00004 2.66665C6.52226 2.66665 5.26393 3.18609 4.22504 4.22498C3.18615 5.26387 2.66671 6.5222 2.66671 7.99998C2.66671 9.47776 3.18615 10.7361 4.22504 11.775C5.26393 12.8139 6.52226 13.3333 8.00004 13.3333Z" fill="currentColor"/>
                                    </g>
                                </svg>
                                <span>GEnerate</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <mask id="mask0_5_327" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="16" height="16">
                                        <rect width="16" height="16" fill="white"/>
                                    </mask>
                                    <g mask="url(#mask0_5_327)">
                                        <path d="M4.66667 11.3333H11.3333C11.4667 11.3333 11.5667 11.2722 11.6333 11.15C11.7 11.0278 11.6889 10.9111 11.6 10.8L9.76667 8.35C9.7 8.26111 9.61111 8.21667 9.5 8.21667C9.38889 8.21667 9.3 8.26111 9.23333 8.35L7.5 10.6667L6.26667 9.01667C6.2 8.92778 6.11111 8.88333 6 8.88333C5.88889 8.88333 5.8 8.92778 5.73333 9.01667L4.4 10.8C4.31111 10.9111 4.3 11.0278 4.36667 11.15C4.43333 11.2722 4.53333 11.3333 4.66667 11.3333ZM3.33333 14C2.96667 14 2.65278 13.8694 2.39167 13.6083C2.13056 13.3472 2 13.0333 2 12.6667V3.33333C2 2.96667 2.13056 2.65278 2.39167 2.39167C2.65278 2.13056 2.96667 2 3.33333 2H12.6667C13.0333 2 13.3472 2.13056 13.6083 2.39167C13.8694 2.65278 14 2.96667 14 3.33333V12.6667C14 13.0333 13.8694 13.3472 13.6083 13.6083C13.3472 13.8694 13.0333 14 12.6667 14H3.33333ZM3.33333 12.6667H12.6667V3.33333H3.33333V12.6667Z" fill="currentColor" fill-opacity="1"/>
                                    </g>
                                </svg>
                                <span>Creation</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="uk-navbar-right">
                    <?php if ($isLogin): ?>
                        <div class="uk-navbar-item">
                            <div class="header__pay">100 <img src="images/Asset11.png" alt=""></div>
                        </div>
                        <div class="uk-navbar-item">
                            <div class="header__user uk-cover-container uk-border-circle">
                                <svg class="uk-position-center" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <mask id="mask0_50_815" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="24">
                                        <rect width="24" height="24" fill="#D9D9D9"/>
                                    </mask>
                                    <g mask="url(#mask0_50_815)">
                                        <path d="M5.85 17.1C6.7 16.45 7.65 15.9375 8.7 15.5625C9.75 15.1875 10.85 15 12 15C13.15 15 14.25 15.1875 15.3 15.5625C16.35 15.9375 17.3 16.45 18.15 17.1C18.7333 16.4167 19.1875 15.6417 19.5125 14.775C19.8375 13.9083 20 12.9833 20 12C20 9.78333 19.2208 7.89583 17.6625 6.3375C16.1042 4.77917 14.2167 4 12 4C9.78333 4 7.89583 4.77917 6.3375 6.3375C4.77917 7.89583 4 9.78333 4 12C4 12.9833 4.1625 13.9083 4.4875 14.775C4.8125 15.6417 5.26667 16.4167 5.85 17.1ZM12 13C11.0167 13 10.1875 12.6625 9.5125 11.9875C8.8375 11.3125 8.5 10.4833 8.5 9.5C8.5 8.51667 8.8375 7.6875 9.5125 7.0125C10.1875 6.3375 11.0167 6 12 6C12.9833 6 13.8125 6.3375 14.4875 7.0125C15.1625 7.6875 15.5 8.51667 15.5 9.5C15.5 10.4833 15.1625 11.3125 14.4875 11.9875C13.8125 12.6625 12.9833 13 12 13ZM12 22C10.6167 22 9.31667 21.7375 8.1 21.2125C6.88333 20.6875 5.825 19.975 4.925 19.075C4.025 18.175 3.3125 17.1167 2.7875 15.9C2.2625 14.6833 2 13.3833 2 12C2 10.6167 2.2625 9.31667 2.7875 8.1C3.3125 6.88333 4.025 5.825 4.925 4.925C5.825 4.025 6.88333 3.3125 8.1 2.7875C9.31667 2.2625 10.6167 2 12 2C13.3833 2 14.6833 2.2625 15.9 2.7875C17.1167 3.3125 18.175 4.025 19.075 4.925C19.975 5.825 20.6875 6.88333 21.2125 8.1C21.7375 9.31667 22 10.6167 22 12C22 13.3833 21.7375 14.6833 21.2125 15.9C20.6875 17.1167 19.975 18.175 19.075 19.075C18.175 19.975 17.1167 20.6875 15.9 21.2125C14.6833 21.7375 13.3833 22 12 22ZM12 20C12.8833 20 13.7167 19.8708 14.5 19.6125C15.2833 19.3542 16 18.9833 16.65 18.5C16 18.0167 15.2833 17.6458 14.5 17.3875C13.7167 17.1292 12.8833 17 12 17C11.1167 17 10.2833 17.1292 9.5 17.3875C8.71667 17.6458 8 18.0167 7.35 18.5C8 18.9833 8.71667 19.3542 9.5 19.6125C10.2833 19.8708 11.1167 20 12 20ZM12 11C12.4333 11 12.7917 10.8583 13.075 10.575C13.3583 10.2917 13.5 9.93333 13.5 9.5C13.5 9.06667 13.3583 8.70833 13.075 8.425C12.7917 8.14167 12.4333 8 12 8C11.5667 8 11.2083 8.14167 10.925 8.425C10.6417 8.70833 10.5 9.06667 10.5 9.5C10.5 9.93333 10.6417 10.2917 10.925 10.575C11.2083 10.8583 11.5667 11 12 11Z" fill="#D9D9D9"/>
                                    </g>
                                </svg>
                                <canvas width="40" height="40"></canvas>
                            </div>
                        </div>
                    <?php else: ?>
                        <div class="uk-navbar-item">
                            <a href="#modal-login" uk-toggle class="header__btnLogin uk-button uk-button-secondary uk-button-small uk-border-rounded"><span>login</span></a>
                        </div>
                    <?php endif; ?>
                </div>

            </div>
        </div>
    </nav>
    <!--/header-->

    <!--main-->
    <main class="uk-section-xsmall uk-light">

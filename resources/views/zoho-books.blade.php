@extends('layouts.app')
@section('title', 'Best Software Development Company - Trionova Technology')
@section('content')

    <head>
        <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5JZ9G2GT');</script>
<!-- End Google Tag Manager -->
        <link rel="stylesheet" type="text/css" href="{{ asset('/css/owl.carousel.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('/css/zoho.css') }}">

    </head>

  

    <body>
        <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5JZ9G2GT"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
        <section class="header-section-parent">
            <div class="header-content-wrap">
                <div class="compliance-badge"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                        fill="none">
                        <path fill="url(#a)"
                            d="m.49 7.824 1.16-1.165c.315-.315.491-.742.49-1.186V3.828A1.677 1.677.0 013.815 2.15l1.644-.002c.445.0.871-.177 1.186-.492L7.806.492A1.677 1.677.0 0110.177.49l1.164 1.161c.315.315.742.49 1.186.49l1.645-.001a1.677 1.677.0 011.678 1.675l.002 1.644c0 .445.177.871.492 1.186l1.164 1.161a1.677 1.677.0 01.002 2.371l-1.161 1.164a1.677 1.677.0 00-.49 1.186l.001 1.645a1.677 1.677.0 01-1.675 1.678l-1.644.002c-.445.0-.871.177-1.186.492l-1.161 1.164a1.677 1.677.0 01-2.371.002L6.659 16.35a1.677 1.677.0 00-1.186-.49l-1.645.001A1.677 1.677.0 012.15 14.186l-.002-1.644c0-.445-.177-.871-.492-1.186L.492 10.194A1.677 1.677.0 01.49 7.823z">
                        </path>
                        <path fill="#995c01" fill-rule="evenodd"
                            d="M12.592 7.107 8.298 11.52 5.726 9.544l.641-.837 1.83 1.405 3.638-3.741.756.736h.001z"
                            clip-rule="evenodd"></path>
                        <defs>
                            <linearGradient id="a" x1="2.78" x2="21.49" y1="4.841" y2="17.35"
                                gradientUnits="userSpaceOnUse">
                                <stop stop-color="#ffbd17"></stop>
                                <stop offset=".14" stop-color="#ffba17"></stop>
                                <stop offset=".77" stop-color="#ffa617"></stop>
                            </linearGradient>
                        </defs>
                    </svg>
                    <div>&nbsp;GST compliant accounting software&nbsp;</div>
                    <div></div>
                </div>
                <h1 class="include-compliance-badge"><span>Comprehensive</span> accounting platform for growing businesses
                </h1>
                <p>Manage end-to-end accounting—from banking &amp; e-invoicing to inventory &amp; payroll with the best
                    accounting software in India.</p>
                <div class="header-cta-container"><a href="/"
                        class="primary-cta-style cta-style signup-cta">Start my free trial</a>
                    <button onclick="showPopupForm(!0)" class="secondary-cta cta-style">Request a demo</button>
                </div>
            </div>
            <div class="dash-animation-wrap"><img class="hero-bg-circle" src="{{asset('images/zoho-books/bg-circle.webp')}}"
                    alt="Decorative background circle">
                <div class="dashboard-animation">
                    <div class="dash-scrollable-wrap d-flex" aria-hidden="true">
                        <div class="dashboard-widgets-parent d-flex">
                            <div class="vendor-portal-parent widget-parent">
                                <h5>Vendor portal</h5><img src="{{asset('images/zoho-books/brandon.png')}}" alt="Vendor portal illustration">
                                <p class="name">Brandon Phil</p>
                                <p class="email">brandon@zillium.com</p>
                                <ul>
                                    <li>Home</li>
                                    <li>Purchase Order</li>
                                    <li>Invoices</li>
                                    <li>Payment Received</li>
                                    <li>Statement</li>
                                </ul>
                            </div>
                            <div class="same-column">
                                <div class="table-widget-parent widget-parent">
                                    <h5>Zylker Corp</h5>
                                    <table class="invoice-data">
                                        <tbody>
                                            <tr>
                                                <td>Inv. no:</td>
                                                <td>123</td>
                                            </tr>
                                            <tr>
                                                <td>Date</td>
                                                <td>10/02/2024</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <table class="invoice-data-full">
                                        <tbody>
                                            <tr>
                                                <td>#</td>
                                                <td>Item name</td>
                                                <td>QTY</td>
                                                <td>Price</td>
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>Lav Mic</td>
                                                <td>3</td>
                                                <td>₹999.00</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Hue Light</td>
                                                <td>1</td>
                                                <td>₹499.00</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <p>₹1,498.00</p>
                                </div>
                                <div class="timer-widget-parent widget-parent"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="16" height="16" fill="none">
                                        <g fill="#fff" clip-path="url(#a)" opacity=".4">
                                            <path
                                                d="M13.393 3.048A7.246 7.246.0 008.235.912c-1.948.0-3.78.759-5.158 2.136A7.247 7.247.0 00.941 8.206c0 1.948.759 3.78 2.136 5.158A7.247 7.247.0 008.235 15.5c1.948.0 3.78-.759 5.158-2.136a7.247 7.247.0 002.136-5.158c0-1.948-.759-3.78-2.136-5.158zM8.235 13.904A5.705 5.705.0 012.537 8.206a5.705 5.705.0 015.698-5.699 5.705 5.705.0 015.699 5.699 5.705 5.705.0 01-5.699 5.698z">
                                            </path>
                                            <path d="M9.033 5.812v-.797H7.438V9.004h3.191V7.408H9.033V5.812z"></path>
                                        </g>
                                        <defs>
                                            <clipPath>
                                                <path fill="#fff" d="M.94.912H15.53V15.5H.94z"></path>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    <h5>TIMER</h5>
                                    <p>00:00:00</p>
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td><svg xmlns="http://www.w3.org/2000/svg" width="21" height="21"
                                                        fill="none">
                                                        <g opacity=".4">
                                                            <rect width="18.235" height="18.235" x=".941" y="1.794"
                                                                stroke="#fff" stroke-width="1.824" rx="9.118"></rect>
                                                            <path fill="#fff"
                                                                d="M12.794 10.912 8.69 14.07V7.753l4.103 3.159z"></path>
                                                        </g>
                                                    </svg></td>
                                                <td><svg xmlns="http://www.w3.org/2000/svg" width="21" height="21"
                                                        fill="none">
                                                        <g opacity=".4">
                                                            <rect width="18.235" height="18.235" x="1.029" y="1.794"
                                                                stroke="#fff" stroke-width="1.824" rx="9.118"></rect>
                                                            <rect width="5.471" height="5.471" x="7.411" y="8.176"
                                                                fill="#fff" rx=".912"></rect>
                                                        </g>
                                                    </svg></td>
                                                <td><svg xmlns="http://www.w3.org/2000/svg" width="17" height="18"
                                                        fill="none">
                                                        <g clip-path="url(#a)" opacity=".4">
                                                            <path fill="#fff"
                                                                d="M16.441 3.783h-3.718V.706H3.748v3.077H.029v1.795h1.432v11.54h13.57V5.578h1.41V3.783zM5.543 2.501h5.385v1.282H5.543V2.501zm7.693 12.822h-9.98V5.578h9.98v9.745z">
                                                            </path>
                                                        </g>
                                                        <defs>
                                                            <clipPath>
                                                                <path fill="#fff" d="M.03.706H16.44v16.412H.03z"></path>
                                                            </clipPath>
                                                        </defs>
                                                    </svg></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="inventory-widget-parent widget-parent"><img
                                    src="{{asset('images/zoho-books/dash-inventory.webp')}}" alt="Zoho Books inventory dashboard">
                                <div class="item-info-parent d-flex">
                                    <div>
                                        <p class="name">Zylker paint</p>
                                        <p class="price">₹200.00</p>
                                    </div>
                                    <p class="item-num">12312</p>
                                </div>
                                <table>
                                    <tbody>
                                        <tr>
                                            <td>Opening-stock</td>
                                            <td>210.00</td>
                                        </tr>
                                        <tr>
                                            <td>Stock in Hand</td>
                                            <td>150.00</td>
                                        </tr>
                                        <tr>
                                            <td>Committed Stock</td>
                                            <td>100.00</td>
                                        </tr>
                                        <tr>
                                            <td>Available for Sale</td>
                                            <td>50.00</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <p class="pieces">pcs</p>
                            </div>
                            <div class="same-column">
                                <div class="dash-customer-widget widget-parent customer"><img
                                        src="{{asset('images/zoho-books/customer.webp')}}" alt="Zoho Books customer management">
                                    <p>Customers</p>
                                </div>
                                <div class="banking-widget-parent widget-parent">
                                    <h5>Banking</h5>
                                    <div class="banking-widget-wrap">
                                        <p class="company">Zylker Corp <span>XXXX 1234</span></p>
                                        <p class="price"><img src="{{asset('images/zoho-books/hero-star.png')}}"
                                                alt="Rating star icon">
                                            ₹70,000.00</p>
                                        <div class="detail-wrap d-flex">
                                            <div class="date-price">
                                                <p class="date">10/02/2024</p>
                                                <p class="price-status">₹2,000.00</p>
                                            </div>
                                            <p class="status">Matched</p>
                                        </div>
                                        <div class="detail-wrap d-flex">
                                            <div class="date-price">
                                                <p class="date">18/02/2024</p>
                                                <p class="price-status">₹2,000.00</p>
                                            </div>
                                            <p class="status">Categorized</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="dashboard-widgets-parent d-flex">
                            <div class="vendor-portal-parent widget-parent">
                                <h5>Vendor portal</h5><img src="{{asset('images/zoho-books/brandon.png')}}" alt="Vendor portal illustration">
                                <p class="name">Brandon Phil</p>
                                <p class="email">brandon@zillium.com</p>
                                <ul>
                                    <li>Home</li>
                                    <li>Purchase Order</li>
                                    <li>Invoices</li>
                                    <li>Payment Received</li>
                                    <li>Statement</li>
                                </ul>
                            </div>
                            <div class="same-column">
                                <div class="table-widget-parent widget-parent">
                                    <h5>Zylker Corp</h5>
                                    <table class="invoice-data">
                                        <tbody>
                                            <tr>
                                                <td>Inv. no:</td>
                                                <td>123</td>
                                            </tr>
                                            <tr>
                                                <td>Date</td>
                                                <td>10/02/2024</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <table class="invoice-data-full">
                                        <tbody>
                                            <tr>
                                                <td>#</td>
                                                <td>Item name</td>
                                                <td>QTY</td>
                                                <td>Price</td>
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>Lav Mic</td>
                                                <td>3</td>
                                                <td>₹999.00</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Hue Light</td>
                                                <td>1</td>
                                                <td>₹499.00</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <p>₹1,498.00</p>
                                </div>
                                <div class="timer-widget-parent widget-parent"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="16" height="16" fill="none">
                                        <g fill="#fff" clip-path="url(#a)" opacity=".4">
                                            <path
                                                d="M13.393 3.048A7.246 7.246.0 008.235.912c-1.948.0-3.78.759-5.158 2.136A7.247 7.247.0 00.941 8.206c0 1.948.759 3.78 2.136 5.158A7.247 7.247.0 008.235 15.5c1.948.0 3.78-.759 5.158-2.136a7.247 7.247.0 002.136-5.158c0-1.948-.759-3.78-2.136-5.158zM8.235 13.904A5.705 5.705.0 012.537 8.206a5.705 5.705.0 015.698-5.699 5.705 5.705.0 015.699 5.699 5.705 5.705.0 01-5.699 5.698z">
                                            </path>
                                            <path d="M9.033 5.812v-.797H7.438V9.004h3.191V7.408H9.033V5.812z"></path>
                                        </g>
                                        <defs>
                                            <clipPath>
                                                <path fill="#fff" d="M.94.912H15.53V15.5H.94z"></path>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    <h5>TIMER</h5>
                                    <p>00:00:00</p>
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td><svg xmlns="http://www.w3.org/2000/svg" width="21" height="21"
                                                        fill="none">
                                                        <g opacity=".4">
                                                            <rect width="18.235" height="18.235" x=".941" y="1.794"
                                                                stroke="#fff" stroke-width="1.824" rx="9.118">
                                                            </rect>
                                                            <path fill="#fff"
                                                                d="M12.794 10.912 8.69 14.07V7.753l4.103 3.159z"></path>
                                                        </g>
                                                    </svg></td>
                                                <td><svg xmlns="http://www.w3.org/2000/svg" width="21" height="21"
                                                        fill="none">
                                                        <g opacity=".4">
                                                            <rect width="18.235" height="18.235" x="1.029" y="1.794"
                                                                stroke="#fff" stroke-width="1.824" rx="9.118">
                                                            </rect>
                                                            <rect width="5.471" height="5.471" x="7.411" y="8.176"
                                                                fill="#fff" rx=".912"></rect>
                                                        </g>
                                                    </svg></td>
                                                <td><svg xmlns="http://www.w3.org/2000/svg" width="17" height="18"
                                                        fill="none">
                                                        <g clip-path="url(#a)" opacity=".4">
                                                            <path fill="#fff"
                                                                d="M16.441 3.783h-3.718V.706H3.748v3.077H.029v1.795h1.432v11.54h13.57V5.578h1.41V3.783zM5.543 2.501h5.385v1.282H5.543V2.501zm7.693 12.822h-9.98V5.578h9.98v9.745z">
                                                            </path>
                                                        </g>
                                                        <defs>
                                                            <clipPath>
                                                                <path fill="#fff" d="M.03.706H16.44v16.412H.03z"></path>
                                                            </clipPath>
                                                        </defs>
                                                    </svg></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="inventory-widget-parent widget-parent"><img
                                    src="{{asset('images/zoho-books/dash-inventory.webp')}}" alt="Zoho Books inventory dashboard">
                                <div class="item-info-parent d-flex">
                                    <div>
                                        <p class="name">Zylker paint</p>
                                        <p class="price">₹200.00</p>
                                    </div>
                                    <p class="item-num">12312</p>
                                </div>
                                <table>
                                    <tbody>
                                        <tr>
                                            <td>Opening-stock</td>
                                            <td>210.00</td>
                                        </tr>
                                        <tr>
                                            <td>Stock in Hand</td>
                                            <td>150.00</td>
                                        </tr>
                                        <tr>
                                            <td>Committed Stock</td>
                                            <td>100.00</td>
                                        </tr>
                                        <tr>
                                            <td>Available for Sale</td>
                                            <td>50.00</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <p class="pieces">pcs</p>
                            </div>
                            <div class="same-column">
                                <div class="dash-customer-widget widget-parent customer"><img
                                        src="{{asset('images/zoho-books/customer.webp')}}" alt="Zoho Books customer management">
                                    <p>Customers</p>
                                </div>
                                <div class="banking-widget-parent widget-parent">
                                    <h5>Banking</h5>
                                    <div class="banking-widget-wrap">
                                        <p class="company">Zylker Corp <span>XXXX 1234</span></p>
                                        <p class="price"><img src="{{asset('images/zoho-books/hero-star.png')}}"
                                                alt="Rating star icon">
                                            ₹70,000.00</p>
                                        <div class="detail-wrap d-flex">
                                            <div class="date-price">
                                                <p class="date">10/02/2024</p>
                                                <p class="price-status">₹2,000.00</p>
                                            </div>
                                            <p class="status">Matched</p>
                                        </div>
                                        <div class="detail-wrap d-flex">
                                            <div class="date-price">
                                                <p class="date">18/02/2024</p>
                                                <p class="price-status">₹2,000.00</p>
                                            </div>
                                            <p class="status">Categorized</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="home-db-img"><img src="{{ asset('images/zoho-books/inr-db.webp') }}"
                        alt="Dashboard of  shows key business metrics and financial reports on a laptop screen.">
                </div>
                <div class="dashboard-animation">
                    <div class="dash-scrollable-wrap right d-flex" aria-hidden="true">
                        <div class="dashboard-widgets-parent d-flex">
                            <div class="same-column">
                                <div class="profit-loss-parent widget-parent">
                                    <h5>P &amp; L Report</h5>
                                    <table class="income">
                                        <tbody>
                                            <tr>
                                                <th>Income</th>
                                                <td><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path
                                                            d="m256.3.6-39.6 39.6L404.5 228H.3v56h404.2L216.7 471.8l39.6 39.6L511.7 256z">
                                                        </path>
                                                    </svg></td>
                                            </tr>
                                            <tr>
                                                <td>Sales</td>
                                                <td>₹200,000.00</td>
                                            </tr>
                                            <tr>
                                                <td>Services</td>
                                                <td>₹200,000.00</td>
                                            </tr>
                                            <tr>
                                                <td>Others</td>
                                                <td>₹200,000.00</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <table class="expense">
                                        <tbody>
                                            <tr>
                                                <th>Expenses</th>
                                                <td><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path
                                                            d="m256.3.6-39.6 39.6L404.5 228H.3v56h404.2L216.7 471.8l39.6 39.6L511.7 256z">
                                                        </path>
                                                    </svg></td>
                                            </tr>
                                            <tr>
                                                <td>Accounting</td>
                                                <td>₹0.00</td>
                                            </tr>
                                            <tr>
                                                <td>Marketing</td>
                                                <td>₹200,000.00</td>
                                            </tr>
                                            <tr>
                                                <td>Employees</td>
                                                <td>₹200,000.00</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="dash-customer-widget widget-parent vendor"><img
                                        src="{{asset('images/zoho-books/vendor.webp')}}" alt="Zoho Books vendor management">
                                    <p>Vendors</p>
                                </div>
                            </div>
                            <div class="projects-widget-parent widget-parent">
                                <h5>Projects</h5>
                                <div class="billed-unbilled d-flex">
                                    <div><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                            <path
                                                d="M429.7 455.3V318.7l-46.2-67.6 44.3-52.5V55.2l72-.3-.2-56L12.1 1l.2 56 63.5-.3v142.6l54.7 53.1-52.8 64v140.4l-65.6.3.2 56 487.4-2-.2-56-69.8.2zM131.8 175.7V56.5l239.9-1v122.7l-58.5 69.4 60.5 88.5v119.5l-239.9 1v-120l72.8-88.3-74.8-72.6z">
                                            </path>
                                            <path d="M209.7 355h92.5v56h-92.5z"></path>
                                        </svg>
                                        <p class="price">₹906.12</p>
                                        <p>UNBILLED HOURS</p>
                                    </div>
                                    <div><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                            <path d="M147 131.8h214v56H147z"></path>
                                            <path
                                                d="m465 513.5-122-70.4-91.2 67.7-83-67.3L47 513.3V-1.5h418v515zM174.6 372.8l78.8 63.9 85.6-63.5 67.5 38.9V57h-301v355.3l69.1-39.5z">
                                            </path>
                                            <path d="M147.5 243.8h117v56h-117z"></path>
                                        </svg>
                                        <p class="price">₹306.31</p>
                                        <p>BILLED HOURS</p>
                                    </div>
                                </div>
                                <div class="d-flex datas">
                                    <div class="progress-circle data-25"><span class="progress-text">25%</span></div>
                                    <div class="data-name">
                                        <p class="task">UX design</p>
                                        <p class="name">Freida</p>
                                    </div>
                                    <div>
                                        <p class="task">Budget Hours</p>
                                        <div class="progress-bar data-25"></div>
                                    </div>
                                </div>
                                <div class="d-flex datas">
                                    <div class="progress-circle data-25"><span class="progress-text">25%</span></div>
                                    <div class="data-name">
                                        <p class="task">Marketing</p>
                                        <p class="name">Rosa</p>
                                    </div>
                                    <div>
                                        <p class="task">Budget Hours</p>
                                        <div class="progress-bar data-25"></div>
                                    </div>
                                </div>
                                <div class="d-flex datas">
                                    <div class="progress-circle data-15"><span class="progress-text">15%</span></div>
                                    <div class="data-name">
                                        <p class="task">DB migration</p>
                                        <p class="name">Amudhan</p>
                                    </div>
                                    <div>
                                        <p class="task">Budget Hours</p>
                                        <div class="progress-bar data-15"></div>
                                    </div>
                                </div>
                                <div class="d-flex datas">
                                    <div class="progress-circle data-70"><span class="progress-text">70%</span></div>
                                    <div class="data-name">
                                        <p class="task">Web development</p>
                                        <p class="name">Heisernberg</p>
                                    </div>
                                    <div>
                                        <p class="task">Budget Hours</p>
                                        <div class="progress-bar data-70"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="same-column">
                                <div class="dash-customer-widget widget-parent accountant"><img
                                        src="{{asset('images/zoho-books/accountant.webp')}}" alt="Zoho Books accountant portal">
                                    <p>Accountant</p>
                                </div>
                                <div class="audit-trail-parent widget-parent">
                                    <h5>Audit Trail</h5>
                                    <div class="d-flex">
                                        <div class="container">
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td>Date:</td>
                                                        <td class="date">
                                                            <p>12/05/2024</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Terms:</td>
                                                        <td class="due">Due on receipt</td>
                                                    </tr>
                                                    <tr>
                                                        <td>P.O:</td>
                                                        <td class="due">52739</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <div class="empty-box">
                                                <div class="empty-line"></div>
                                            </div>
                                        </div>
                                        <div class="version-container">
                                            <p>V1</p>
                                            <p>V2</p>
                                            <p>V3</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="dashboard-widgets-parent d-flex">
                            <div class="same-column">
                                <div class="profit-loss-parent widget-parent">
                                    <h5>P &amp; L Report</h5>
                                    <table class="income">
                                        <tbody>
                                            <tr>
                                                <th>Income</th>
                                                <td><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path
                                                            d="m256.3.6-39.6 39.6L404.5 228H.3v56h404.2L216.7 471.8l39.6 39.6L511.7 256z">
                                                        </path>
                                                    </svg></td>
                                            </tr>
                                            <tr>
                                                <td>Sales</td>
                                                <td>₹200,000.00</td>
                                            </tr>
                                            <tr>
                                                <td>Services</td>
                                                <td>₹200,000.00</td>
                                            </tr>
                                            <tr>
                                                <td>Others</td>
                                                <td>₹200,000.00</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <table class="expense">
                                        <tbody>
                                            <tr>
                                                <th>Expenses</th>
                                                <td><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path
                                                            d="m256.3.6-39.6 39.6L404.5 228H.3v56h404.2L216.7 471.8l39.6 39.6L511.7 256z">
                                                        </path>
                                                    </svg></td>
                                            </tr>
                                            <tr>
                                                <td>Accounting</td>
                                                <td>₹0.00</td>
                                            </tr>
                                            <tr>
                                                <td>Marketing</td>
                                                <td>₹200,000.00</td>
                                            </tr>
                                            <tr>
                                                <td>Employees</td>
                                                <td>₹200,000.00</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="dash-customer-widget widget-parent vendor"><img
                                        src="{{asset('images/zoho-books/vendor.webp')}}" alt="Zoho Books vendor management">
                                    <p>Vendors</p>
                                </div>
                            </div>
                            <div class="projects-widget-parent widget-parent">
                                <h5>Projects</h5>
                                <div class="billed-unbilled d-flex">
                                    <div><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                            <path
                                                d="M429.7 455.3V318.7l-46.2-67.6 44.3-52.5V55.2l72-.3-.2-56L12.1 1l.2 56 63.5-.3v142.6l54.7 53.1-52.8 64v140.4l-65.6.3.2 56 487.4-2-.2-56-69.8.2zM131.8 175.7V56.5l239.9-1v122.7l-58.5 69.4 60.5 88.5v119.5l-239.9 1v-120l72.8-88.3-74.8-72.6z">
                                            </path>
                                            <path d="M209.7 355h92.5v56h-92.5z"></path>
                                        </svg>
                                        <p class="price">₹906.12</p>
                                        <p>UNBILLED HOURS</p>
                                    </div>
                                    <div><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                            <path d="M147 131.8h214v56H147z"></path>
                                            <path
                                                d="m465 513.5-122-70.4-91.2 67.7-83-67.3L47 513.3V-1.5h418v515zM174.6 372.8l78.8 63.9 85.6-63.5 67.5 38.9V57h-301v355.3l69.1-39.5z">
                                            </path>
                                            <path d="M147.5 243.8h117v56h-117z"></path>
                                        </svg>
                                        <p class="price">₹306.31</p>
                                        <p>BILLED HOURS</p>
                                    </div>
                                </div>
                                <div class="d-flex datas">
                                    <div class="progress-circle data-25"><span class="progress-text">25%</span></div>
                                    <div class="data-name">
                                        <p class="task">UX design</p>
                                        <p class="name">Freida</p>
                                    </div>
                                    <div>
                                        <p class="task">Budget Hours</p>
                                        <div class="progress-bar data-25"></div>
                                    </div>
                                </div>
                                <div class="d-flex datas">
                                    <div class="progress-circle data-25"><span class="progress-text">25%</span></div>
                                    <div class="data-name">
                                        <p class="task">Marketing</p>
                                        <p class="name">Rosa</p>
                                    </div>
                                    <div>
                                        <p class="task">Budget Hours</p>
                                        <div class="progress-bar data-25"></div>
                                    </div>
                                </div>
                                <div class="d-flex datas">
                                    <div class="progress-circle data-15"><span class="progress-text">15%</span></div>
                                    <div class="data-name">
                                        <p class="task">DB migration</p>
                                        <p class="name">Amudhan</p>
                                    </div>
                                    <div>
                                        <p class="task">Budget Hours</p>
                                        <div class="progress-bar data-15"></div>
                                    </div>
                                </div>
                                <div class="d-flex datas">
                                    <div class="progress-circle data-70"><span class="progress-text">70%</span></div>
                                    <div class="data-name">
                                        <p class="task">Web development</p>
                                        <p class="name">Heisernberg</p>
                                    </div>
                                    <div>
                                        <p class="task">Budget Hours</p>
                                        <div class="progress-bar data-70"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="same-column">
                                <div class="dash-customer-widget widget-parent accountant"><img
                                        src="{{asset('images/zoho-books/accountant.webp')}}" alt="Zoho Books accountant portal">
                                    <p>Accountant</p>
                                </div>
                                <div class="audit-trail-parent widget-parent">
                                    <h5>Audit Trail</h5>
                                    <div class="d-flex">
                                        <div class="container">
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td>Date:</td>
                                                        <td class="date">
                                                            <p>12/05/2024</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Terms:</td>
                                                        <td class="due">Due on receipt</td>
                                                    </tr>
                                                    <tr>
                                                        <td>P.O:</td>
                                                        <td class="due">52739</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <div class="empty-box">
                                                <div class="empty-line"></div>
                                            </div>
                                        </div>
                                        <div class="version-container">
                                            <p>V1</p>
                                            <p>V2</p>
                                            <p>V3</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>



       
        <section class="webinar-band-parent no-speaker" data-time-value="Jul. 10, 2025, 3:00 PM">
            <div class="webinar-parent-wrapper d-flex" onclick="this.classList.toggle(&quot;active&quot;)">
                <p class="webinar-type mb-0">Free Webinar</p>
                <div class="webinar-inner-wrap d-flex">
                    <p class="webinar-title mb-0">Upgrade your books: A CA’s guide to seamless accounting migration</p>
                    <div class="webinar-date d-flex">
                        <p class="mb-0">Jul 10, 2025 (3:00 PM IST)</p>
                    </div>
                </div><a class="d-flex" href="{{url('contact')}}" target="_blank">Register Now <span
                        class="triangle"></span></a>
            </div>
        </section>
        <section class="pt-0 pb-0">
            <div class="promo-carousel-wrapper carousel-container">
                <div class="promo-carousel-container carousel-content d-flex" style="height: 522px;">
                    <div class="promo-testimonial-carousel partner-section active" style="left: 0%;">
                        <div class="partner-section-heading">
                            <h2 class="fw-700">Make the switch to the <span>future of business accounting</span></h2>
                        </div>
                        <div class="promo-testimonial-container d-flex">
                            <div class="customer-list-container">
                                <div class="customer-list d-flex"><img class="profile-img"
                                        src="{{asset('images/zoho-books/naveedh.png')}}" alt="profile">
                                    <div class="customer-list-content d-flex">
                                        <p class="customer-testimonial-quoting fw-700">"Most versatile accounting software
                                            for every business need"</p>
                                        <div class="customer-name-designation">
                                            <p>test V.V, CO-FOUNDER</p><img class="customer-company-logo"
                                                src="{{asset('images/zoho-books/make-your-own-perfume.png')}}"
                                                alt="Make Your Own Perfume">
                                        </div>
                                    </div>
                                </div>
                                <div class="customer-list d-flex"><img class="profile-img"
                                        src="{{asset('images/zoho-books/naveedh.png')}}" alt="SATYAN THUKRAL">
                                    <div class="customer-list-content d-flex">
                                        <p class="customer-testimonial-quoting fw-700">"Backbone of my company's finance
                                            and operations"</p>
                                        <div class="customer-name-designation">
                                            <p>SATYAN THUKRAL, CEO</p><img class="customer-company-logo"
                                                src="{{asset('images/zoho-books/make-your-own-perfume.png')}}"
                                                alt="Caple">
                                        </div>
                                    </div>
                                </div>
                                <div class="customer-list d-flex"><img class="profile-img"
                                        src="{{asset('images/zoho-books/naveedh.png')}}" alt="VISHWADH KANDULA">
                                    <div class="customer-list-content d-flex">
                                        <p class="customer-testimonial-quoting fw-700">"Best accounting software made for
                                            businesses worldwide"</p>
                                        <div class="customer-name-designation">
                                            <p>VISHWADH KANDULA, CEO</p><img class="customer-company-logo"
                                                src="{{asset('images/zoho-books/make-your-own-perfume.png')}}"
                                                alt="MIVI">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="customer-quote"><img src="{{asset('images/zoho-books/quotes-testimonial.svg')}}"
                                    alt="testimonial-quotes">
                                I TRUST <span>ZOHO&nbsp;BOOKS</span> FOR MY BUSINESS</div>
                        </div>
                    </div>
                    <div class="promo-testimonial-carousel partner-section" style="left: 100%;">
                        <div class="partner-section-heading">
                            <h2 class="fw-700">Make the switch to the <span>future of business accounting</span></h2>
                        </div>
                        <div class="promo-testimonial-container d-flex">
                            <div class="customer-list-container">
                                <div class="customer-list d-flex"><img class="profile-img"
                                        src="{{asset('images/zoho-books/naveedh.png')}}"
                                        alt="TARUN KUMAR JAIN">
                                    <div class="customer-list-content d-flex">
                                        <p class="customer-testimonial-quoting fw-700">"User-friendly, comprehensive, and
                                            highly compliant"</p>
                                        <div class="customer-name-designation">
                                            <p>TARUN KUMAR JAIN, DIRECTOR</p><img class="customer-company-logo"
                                                src="{{asset('images/zoho-books/make-your-own-perfume.png')}}"
                                                alt="Carrier Wheels">
                                        </div>
                                    </div>
                                </div>
                                <div class="customer-list d-flex"><img class="profile-img"
                                        src="{{asset('images/zoho-books/naveedh.png')}}"
                                        alt="SHAMAL NAMBOLAN">
                                    <div class="customer-list-content d-flex">
                                        <p class="customer-testimonial-quoting fw-700">"One accounting solution for
                                            multiple outlets"</p>
                                        <div class="customer-name-designation">
                                            <p>SHAMAL NAMBOLAN, DIRECTOR</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="customer-list d-flex"><img class="profile-img"
                                        src="{{asset('images/zoho-books/naveedh.png')}}" alt="ABDURAHMAN">
                                    <div class="customer-list-content d-flex">
                                        <p class="customer-testimonial-quoting fw-700">"End-to-end accounting and inventory
                                            management made simple"</p>
                                        <div class="customer-name-designation">
                                            <p>ABDURAHMAN, COMMERCIAL MANAGER</p><img class="customer-company-logo"
                                                src="{{asset('images/zoho-books/make-your-own-perfume.png')}}"
                                                alt="Nubra Group">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="customer-quote"><img src="{{asset('images/zoho-books/quotes-testimonial.svg')}}"
                                    alt="testimonial-quotes">
                                I TRUST <span>ZOHO&nbsp;BOOKS</span> FOR MY BUSINESS</div>
                        </div>
                    </div>
                </div>
                <div class="carousel-indicator-parent d-flex"><a href="#" target="_blank">Visit our
                        wall of love<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path d="m256.3.6-39.6 39.6L404.5 228H.3v56h404.2L216.7 471.8l39.6 39.6L511.7 256z"></path>
                        </svg></a>
                    <div class="carousel-indicators d-flex"><span class="carousel-indicator-item active"></span>
                        <span class="carousel-indicator-item"></span>
                    </div>
                </div>
            </div>
        </section>
        <section class="spotlight-section-parent">
            <div class="spotlight-section-wrap d-flex">
                <div class="spotlight-section-left-wrap">
                    <div class="sticky-element"><span class="section-tag">Spotlight</span>
                        <h2>Engineered to Unlock Business Growth</h2>
                    </div>
                </div>
                <div class="spotlight-section-right-wrap">
                    <div class="spotlight-section-left">
                        <div class="spotlight-tile slide-up-element animate"><a class="tile-link"
                                href="#" target="_blank"
                                aria-label="GST compliance"></a>
                            <div class="spotlight-tile-wrap">
                                <h3><span class="spotlight-icons"><svg xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 512 512">
                                            <path d="m242.8 331.7-72.6-66.4L208 224l33.2 30.3 83.9-83.8 39.6 39.6z"></path>
                                            <path
                                                d="m256.9 511.8-11.2-4.9c-2.2-1-54.7-24-107-61.2-65.2-46.4-104.2-121.2-104.2-2e2V52.1L256.7 2l220.8 50.1v194.5c0 79-39.1 153.9-104.5 200.2-51.6 36.5-102.7 59.1-104.9 60l-11.2 5zm-85.8-111.7c33.8 24 68.4 41.9 85.7 50.2 16.9-8.2 50.6-25.7 83.8-49.2 50.6-35.9 80.9-93.6 80.9-154.5V96.9L256.6 59.5 90.5 96.9v148.8c0 60.8 30.2 118.5 80.6 154.4z">
                                            </path>
                                        </svg>
                                    </span>GST compliance
                                    <span class="goto-icon"><svg xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 512 512">
                                            <path
                                                d="m256.3.6-39.6 39.6L404.5 228H.3v56h404.2L216.7 471.8l39.6 39.6L511.7 256z">
                                            </path>
                                        </svg></span>
                                </h3>
                                <p>Generate e-invoices, e-Way bills, and delivery challans. Calculate liabilities
                                    automatically, and file tax returns directly.</p><img
                                    src="{{asset('images/zoho-books/gst-compliant.png')}}"
                                    alt="VAT return report, marked as filed, with VAT on sales and purchases listed"
                                    loading="lazy">
                                <div class="hover-cta-img"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <path d="m256.3.6-39.6 39.6L404.5 228H.3v56h404.2L216.7 471.8l39.6 39.6L511.7 256z">
                                        </path>
                                    </svg></div>
                            </div>
                        </div>
                        <div class="spotlight-tile slide-up-element animate"><a class="tile-link"
                                href="/in/books/accounting-software-features/#bank-reconciliation" target="_blank"
                                aria-label="Connected banking"></a>
                            <div class="spotlight-tile-wrap">
                                <h3><span class="spotlight-icons"><svg xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 512 512">
                                            <path
                                                d="m468.3 244.9 29.7 24 35.2-43.5L255.9.8-21.3 225.4l35.2 43.5 29.7-24H72v210.3H31.3v56h451.5v-56h-29.6V244.9h15.1zm-69.1-56H112.8L256 72.9l143.2 116zm-271.2 56h101.6v210.3H128V244.9zm269.3 210.3H285.6V244.9h111.6v210.3z">
                                            </path>
                                        </svg>
                                    </span>Connected banking
                                    <span class="goto-icon"><svg xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 512 512">
                                            <path
                                                d="m256.3.6-39.6 39.6L404.5 228H.3v56h404.2L216.7 471.8l39.6 39.6L511.7 256z">
                                            </path>
                                        </svg></span>
                                </h3>
                                <p>Simplify online payments. Fetch bank feeds, categorize entries automatically, and
                                    reconcile them effortlessly.</p><img
                                    src="{{asset('images/zoho-books/connected-banking.png')}}" alt="Zoho Books connected banking"
                                    loading="lazy">
                                <div class="hover-cta-img"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <path d="m256.3.6-39.6 39.6L404.5 228H.3v56h404.2L216.7 471.8l39.6 39.6L511.7 256z">
                                        </path>
                                    </svg></div>
                            </div>
                        </div>
                        <div class="spotlight-tile slide-up-element animate"><a class="tile-link"
                                href="#" target="_blank"
                                aria-label="Sell globally"></a>
                            <div class="spotlight-tile-wrap">
                                <h3><span class="spotlight-icons"><svg xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 512 512">
                                            <path
                                                d="M437 75.6C388.6 27.2 324.4.6 256 .6s-132.7 26.6-181 75-75 112.6-75 181 26.6 132.7 75 181c48.4 48.4 112.6 75 181 75s132.7-26.6 181-75c48.4-48.4 75-112.6 75-181s-26.6-132.7-75-181zm17 153h-81.2c-1.7-22.3-5.3-45.1-10.6-67.2-7.8-32.1-19.2-62.7-34-91.3C394.5 95.8 443.8 156 454 228.6zM204.1 338.1c-4.3-17.6-7.2-35.7-8.8-53.5h121.4c-6.3 76.5-37.1 135.1-60.8 170-24.1-35-41.5-74.1-51.8-116.5zm-8.8-109.5c2.8-34.1 10.6-67.6 23.5-99.8 9.7-24.4 22.5-48.5 37.4-70.2 24.1 34.8 41.4 73.8 51.7 116 4.3 17.8 7.3 36.1 8.9 54H195.3zM184.1 69.9c-6.4 12.4-12.3 25.1-17.4 38.1-15.5 38.9-24.7 79.3-27.6 120.5H58c10.2-72.6 59.6-132.9 126.1-158.6zM58 284.6h81.2c1.7 22.1 5.2 44.7 10.5 66.7 7.8 32.3 19.3 63 34.2 91.9-66.4-25.8-115.7-86-125.9-158.6zm269.8 158.7c21-40.5 40.6-94.2 45.1-158.7H454c-10.2 72.7-59.7 133-126.2 158.7z">
                                            </path>
                                        </svg>
                                    </span>Sell globally
                                    <span class="goto-icon"><svg xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 512 512">
                                            <path
                                                d="m256.3.6-39.6 39.6L404.5 228H.3v56h404.2L216.7 471.8l39.6 39.6L511.7 256z">
                                            </path>
                                        </svg></span>
                                </h3>
                                <p>Manage foreign transactions with our multi-currency feature. Apply exchange rates
                                    automatically or manually.</p><img src="{{asset('images/zoho-books/sell-globally.png')}}"
                                    alt="Numbers with global currency symbols highlights ' multi-currency feature"
                                    loading="lazy">
                                <div class="hover-cta-img"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <path d="m256.3.6-39.6 39.6L404.5 228H.3v56h404.2L216.7 471.8l39.6 39.6L511.7 256z">
                                        </path>
                                    </svg></div>
                            </div>
                        </div>
                        <div class="spotlight-tile slide-up-element animate"><a class="tile-link"
                                href="#" target="_blank"
                                aria-label="Collaboration"></a>
                            <div class="spotlight-tile-wrap">
                                <h3><span class="spotlight-icons"><svg xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 512 512">
                                            <path
                                                d="M-.4-.1v511.6l127.6-127.6h384.4V-.1H-.4zm456 328H104l-48.4 48.4V55.9h4e2v272z">
                                            </path>
                                        </svg>
                                    </span>Collaboration
                                    <span class="goto-icon"><svg xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 512 512">
                                            <path
                                                d="m256.3.6-39.6 39.6L404.5 228H.3v56h404.2L216.7 471.8l39.6 39.6L511.7 256z">
                                            </path>
                                        </svg></span>
                                </h3>
                                <p>Work as a team, assign roles, permissions, and use customer and vendor portals for
                                    transparent, secure communication.</p><img
                                    src="{{asset('images/zoho-books/collaboration.png')}}"
                                    alt="Chat feature in  that allows collaboration with team members, accountants and customers"
                                    loading="lazy">
                                <div class="hover-cta-img"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <path d="m256.3.6-39.6 39.6L404.5 228H.3v56h404.2L216.7 471.8l39.6 39.6L511.7 256z">
                                        </path>
                                    </svg></div>
                            </div>
                        </div>
                    </div>
                    <div class="spotlight-section-right">
                        <div class="spotlight-tile slide-up-element animate"><a class="tile-link"
                                href="#" target="_blank"
                                aria-label="Accounting Across Devices"></a>
                            <div class="spotlight-tile-wrap">
                                <h3><span class="spotlight-icons"><svg xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 512 512">
                                            <path
                                                d="M41.6-.3v512h428V-.3h-428zm372 56v40h-316v-40h316zm0 96v168h-316v-168h316zm-316 304v-80h316v80h-316z">
                                            </path>
                                            <circle cx="255.6" cy="415.7" r="28"></circle>
                                        </svg>
                                    </span>Accounting Across Devices
                                    <span class="goto-icon"><svg xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 512 512">
                                            <path
                                                d="m256.3.6-39.6 39.6L404.5 228H.3v56h404.2L216.7 471.8l39.6 39.6L511.7 256z">
                                            </path>
                                        </svg></span>
                                </h3>
                                <p>Whether you’re on the web, smartphone or desktop app, promptly send quotes right after
                                    meetings, track business expenses, log time, and view reports!</p><img
                                    src="{{asset('images/zoho-books/mobile-app.png')}}"
                                    alt="Mobile interface from the  app that's available on Android, iOS, Windows displays a quote with options for quick actions"
                                    loading="lazy">
                                <div class="hover-cta-img"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <path d="m256.3.6-39.6 39.6L404.5 228H.3v56h404.2L216.7 471.8l39.6 39.6L511.7 256z">
                                        </path>
                                    </svg></div>
                            </div>
                        </div>
                        <div class="spotlight-tile slide-up-element animate"><a class="tile-link"
                                href="#" target="_blank"
                                aria-label="Automation"></a>
                            <div class="spotlight-tile-wrap">
                                <h3><span class="spotlight-icons"><svg xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 512 512">
                                            <path
                                                d="M283.6 164.2v-47.7c20.2-10.2 34-31.2 34-55.3.0-34.2-27.8-62-62-62s-62 27.8-62 62c0 24.1 13.8 45 34 55.3v47.7H-.4v348h512v-348h-228zm-28-109c3.3.0 6 2.7 6 6s-2.7 6-6 6-6-2.7-6-6 2.7-6 6-6zm2e2 401h-4e2v-236h4e2v236z">
                                            </path>
                                            <path d="M139.6 290.2h56v96h-56zm176 0h56v96h-56z"></path>
                                        </svg>
                                    </span>Automation
                                    <span class="goto-icon"><svg xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 512 512">
                                            <path
                                                d="m256.3.6-39.6 39.6L404.5 228H.3v56h404.2L216.7 471.8l39.6 39.6L511.7 256z">
                                            </path>
                                        </svg></span>
                                </h3>
                                <p>Trigger emails or notifications for reminders or alerts. Set recurring actions,
                                    schedules, and field updates.</p><img src="{{asset('images/zoho-books/automation.png')}}"
                                    alt="Automation workflow feature in  shows option to set triggers and filters for doing specific actions"
                                    loading="lazy">
                                <div class="hover-cta-img"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <path d="m256.3.6-39.6 39.6L404.5 228H.3v56h404.2L216.7 471.8l39.6 39.6L511.7 256z">
                                        </path>
                                    </svg></div>
                            </div>
                        </div>
                        <div class="spotlight-tile slide-up-element animate"><a class="tile-link"
                                href="#" target="_blank"
                                aria-label="Customization"></a>
                            <div class="spotlight-tile-wrap">
                                <h3><span class="spotlight-icons"><svg xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 512 512">
                                            <path d="M-.4-.3v512h512V-.3H-.4zm456 456h-4e2v-4e2h4e2v4e2z"></path>
                                            <path
                                                d="M335.6 263.7c46.3.0 84-37.7 84-84s-37.7-84-84-84c-33.4.0-62.4 19.6-75.9 48H103.6v56H254c9 36.7 42.2 64 81.6 64zm0-112c15.4.0 28 12.6 28 28s-12.6 28-28 28-28-12.6-28-28 12.6-28 28-28zm-156 276c38 0 70.1-25.3 80.5-60h147.5v-56H257.3c-12.6-30.5-42.7-52-77.7-52-46.3.0-84 37.7-84 84s37.7 84 84 84zm0-112c15.4.0 28 12.6 28 28s-12.6 28-28 28-28-12.6-28-28 12.6-28 28-28z">
                                            </path>
                                        </svg>
                                    </span>Customization
                                    <span class="goto-icon"><svg xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 512 512">
                                            <path
                                                d="m256.3.6-39.6 39.6L404.5 228H.3v56h404.2L216.7 471.8l39.6 39.6L511.7 256z">
                                            </path>
                                        </svg></span>
                                </h3>
                                <p>Customize  to suit your business with custom templates and fields. Get custom
                                    reports, too!</p><img src="{{asset('images/zoho-books/customization.png')}}"
                                    alt="Visualisation of the various customization options available on  to address unique business needs"
                                    loading="lazy">
                                <div class="hover-cta-img"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <path d="m256.3.6-39.6 39.6L404.5 228H.3v56h404.2L216.7 471.8l39.6 39.6L511.7 256z">
                                        </path>
                                    </svg></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="user-fav-parent">
            <div class="user-fav-parent-container">
                <div class="user-fav-parent-wrapper"><span class="section-tag">User favorites</span>
                    <h2>Do it all,<br><span>and then some more!</span></h2>
                    <div class="user-fav-tiles-wrap">
                        <div class="user-fav-tiles slide-up-element animate">
                            <h3>Receivables</h3>
                            <p>Raise tax-compliant, professional invoices and quotes in no time. Offer multiple payment
                                options, automate invoices and reminders, and send online payment links.</p><img
                                src="{{asset('images/zoho-books/receivables.png')}}"
                                alt="Illustration of a sample invoice with essential details like amount, invoice date, due date etc.  "
                                loading="lazy">
                        </div>
                        <div class="user-fav-tiles slide-up-element animate">
                            <h3>Payables</h3>
                            <p>Track vendor bills and other expenses easily. Add recurring expenses. Include client expenses
                                on invoices. Make payments from  with partner bank integrations.</p><img
                                src="{{asset('images/zoho-books/payables.png')}}"
                                alt="Summary of payables with their amount and status" loading="lazy">
                        </div>
                        <div class="user-fav-tiles slide-up-element animate">
                            <h3>Inventory</h3>
                            <p>Track your inventory. Update stock information automatically as you make purchases or sales.
                                Set replenishing thresholds and reminders too!</p><img
                                src="{{asset('images/zoho-books/inventory.png')}}"
                                alt="Inventory management dashboard displays stock details of a particular product"
                                loading="lazy">
                        </div>
                        <div class="user-fav-tiles slide-up-element animate">
                            <h3>Projects</h3>
                            <p>Send project quotes quickly, accommodate partial payments, and log time. Bill for resources,
                                job completions, time spent, or expenses attached to a project.</p><img
                                src="{{asset('images/zoho-books/projects.png')}}" alt="Zoho Books project management" loading="lazy">
                        </div>
                        <div class="user-fav-tiles slide-up-element animate">
                            <h3>Reports</h3>
                            <p>Get actionable insights on your cash flow, taxes, profit and loss, and sales on demand. Opt
                                to get selected reports periodically sent to yourself and your team.</p>
                            <picture>
                                <source srcset="{{asset('images/zoho-books/reports-for-mobile.png')}}"
                                    media="(max-width: 768px)"><img src="{{asset('images/zoho-books/reports.png')}}"
                                    alt="Some financial reports available on  like profit and loss, cash flow statement, tax reports and more."
                                    loading="lazy">
                            </picture>
                        </div>
                    </div><a class="explore-feature-cta cta-style secondary-cta"
                        href="#"">Explore Features</a>
                </div>
            </div>
        </section>
        <div class="pricing-section-container">
            <div class="pricing-heading-section"><span class="section-tag">Pricing</span>
                <h2>The Perfect Balance of Features and Affordability</h2>
            </div>
            <link rel="stylesheet"
                href="#"
                media="all" onload="this.media=&quot;all&quot;">
            <div class="pricing-wrapper yearly">
                <div class="pricing-section-top-wrap max-width-1280">
                    <div class="edition-month-year-toggle">
                        <div class="pricing-note-info in-pricing-note-info">
                            <div class="pricing-note-container">
                                <div class="country-info">
                                    <div class="edition-flag edition-image-india"></div>
                                    <ul class="select-edition editions-list">
                                        <li onfocusout="hideSelectList()" style="position:relative">
                                            <div onclick="selectListAction(!0)"><a href="javascript:void(0)">
                                                    <div class="choose-edition-text">India
                                                        <svg xml:space="preserve" viewBox="0 0 25 25"
                                                            class="down-arrow-img">
                                                            <path
                                                                d="M12.7 19.9c-.3 0-.7-.2-.9-.4L1.2 7.1c-.4-.5-.3-1.3.2-1.7.5-.4 1.2-.4 1.6.1l9.7 11.3 9.2-11.3c.4-.5 1.2-.6 1.7-.2.5.4.6 1.2.2 1.7L13.7 19.4c-.3.3-.6.5-1 .5.1 0 0 0 0 0z">
                                                            </path>
                                                        </svg>
                                                    </div>
                                                </a></div>
                                            <div class="edition-select-list" style="display: none;">
                                                <div class="edition-list-container">
                                                    <div class="edition-select-list-item left"
                                                        onclick="switchEdition(&quot;au&quot;)"><a
                                                            href="javascript:void(0)">
                                                            <div class="edition-image-australia"></div>
                                                            <div class="edition-label">Australia</div>
                                                        </a></div>
                                                    <div class="edition-select-list-item left"
                                                        onclick="switchEdition(&quot;bh&quot;)"><a
                                                            href="javascript:void(0)">
                                                            <div class="edition-image-bh"></div>
                                                            <div class="edition-label">Bahrain</div>
                                                        </a></div>
                                                    <div class="edition-select-list-item left"
                                                        onclick="switchEdition(&quot;ca&quot;)"><a
                                                            href="javascript:void(0)">
                                                            <div class="edition-image-canada"></div>
                                                            <div class="edition-label">Canada</div>
                                                        </a></div>
                                                    <div class="edition-select-list-item left"
                                                        onclick="switchEdition(&quot;de-de&quot;)"><a
                                                            href="javascript:void(0)">
                                                            <div class="edition-image-de"></div>
                                                            <div class="edition-label">Germany</div>
                                                        </a></div>
                                                    <div class="edition-select-list-item left"
                                                        onclick="switchEdition(&quot;in&quot;)"><a
                                                            href="javascript:void(0)">
                                                            <div class="edition-image-india"></div>
                                                            <div class="edition-label">India</div>
                                                        </a></div>
                                                    <div class="edition-select-list-item left"
                                                        onclick="switchEdition(&quot;ke&quot;)"><a
                                                            href="javascript:void(0)">
                                                            <div class="edition-image-ke"></div>
                                                            <div class="edition-label">Kenya</div>
                                                        </a></div>
                                                    <div class="edition-select-list-item left"
                                                        onclick="switchEdition(&quot;kw&quot;)"><a
                                                            href="javascript:void(0)">
                                                            <div class="edition-image-kw"></div>
                                                            <div class="edition-label">Kuwait</div>
                                                        </a></div>
                                                    <div class="edition-select-list-item left"
                                                        onclick="switchEdition(&quot;es-mx&quot;)"><a
                                                            href="javascript:void(0)">
                                                            <div class="edition-image-mx"></div>
                                                            <div class="edition-label">Mexico</div>
                                                        </a></div>
                                                </div>
                                                <div class="edition-list-container">
                                                    <div class="edition-select-list-item"
                                                        onclick="switchEdition(&quot;om&quot;)"><a
                                                            href="javascript:void(0)">
                                                            <div class="edition-image-om"></div>
                                                            <div class="edition-label">Oman</div>
                                                        </a></div>
                                                    <div class="edition-select-list-item"
                                                        onclick="switchEdition(&quot;qa&quot;)"><a
                                                            href="javascript:void(0)">
                                                            <div class="edition-image-qa"></div>
                                                            <div class="edition-label">Qatar</div>
                                                        </a></div>
                                                    <div class="edition-select-list-item"
                                                        onclick="switchEdition(&quot;sa&quot;)"><a
                                                            href="javascript:void(0)">
                                                            <div class="edition-image-sa"></div>
                                                            <div class="edition-label">Saudi Arabia</div>
                                                        </a></div>
                                                    <div class="edition-select-list-item"
                                                        onclick="switchEdition(&quot;za&quot;)"><a
                                                            href="javascript:void(0)">
                                                            <div class="edition-image-za"></div>
                                                            <div class="edition-label">South Africa</div>
                                                        </a></div>
                                                    <div class="edition-select-list-item"
                                                        onclick="switchEdition(&quot;ae&quot;)"><a
                                                            href="javascript:void(0)">
                                                            <div class="edition-image-uae"></div>
                                                            <div class="edition-label">United Arab Emirates</div>
                                                        </a></div>
                                                    <div class="edition-select-list-item"
                                                        onclick="switchEdition(&quot;uk&quot;)"><a
                                                            href="javascript:void(0)">
                                                            <div class="edition-image-uk"></div>
                                                            <div class="edition-label">United Kingdom</div>
                                                        </a></div>
                                                    <div class="edition-select-list-item"
                                                        onclick="switchEdition(&quot;us&quot;)"><a
                                                            href="javascript:void(0)">
                                                            <div class="edition-image-us"></div>
                                                            <div class="edition-label">United States</div>
                                                        </a></div>
                                                </div>
                                                <div class="edition-select-list-item global"
                                                    onclick="switchEdition(&quot;global&quot;)"><a
                                                        href="javascript:void(0)">
                                                        <div class="edition-image-global"></div>
                                                        <div class="edition-label">Global</div>
                                                    </a></div>
                                            </div>
                                            <style>
                                                .edition-select-list-item.global {
                                                    border-top: 1px solid #ccc
                                                }

                                                .edition-select-list-item.left:last-child {
                                                    border-bottom: none
                                                }

                                                @media screen and (max-width:750px) {
                                                    .edition-select-list-item.global {
                                                        border-top: none
                                                    }
                                                }
                                            </style>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="month-year-toggle"><span class="monthly-toggle">Monthly</span>
                            <span class="toggle-switch" onclick="togglePricing(this)">
                                <div class="toggle-switch-indicator"></div>
                            </span><span class="yearly-toggle">Yearly <span class="caveat">(Save up to 25%)</span></span>
                        </div>
                    </div>
                </div>
                <div class="free-plan-container">
                    <h3>Free Plan</h3>
                    <p>Free accounting solution for small and micro-businesses</p><a class="pricing-cta free-trial-cta"
                        href="#">Get started for free</a>
                </div>
                <div class="pricing-container-parent">
                    <div class="pricing-explore-container max-width-1280">
                        <div class="pricing-container">
                            <div class="pricing-item-wrap free">
                                <div class="plan-head-container">
                                    <h3>FREE</h3>
                                    <p>Get started with free accounting software for solopreneurs and micro businesses</p>
                                </div>
                                <div class="pricing-body-container">
                                    <div class="pricing-amount-container"><span class="price-free"><span
                                                class="pricing-currency">₹</span>0</span></div>
                                    <p class="billing-method monthly">Price/Org/Month</p>
                                    <p class="billing-method yearly">Price/Org/Month Billed Annually</p><a
                                        class="pricing-cta free-trial-cta signup-cta" target="_blank"
                                        href="#">Get started for free</a>
                                </div>
                            </div>
                            <div class="pricing-item-wrap">
                                <div class="plan-head-container">
                                    <h3>STANDARD</h3>
                                    <p>Efficiently organize your transactions, accounts, reports, and books</p>
                                </div>
                                <div class="pricing-body-container">
                                    <div class="pricing-amount-container">
                                        <p class="price-monthly"><span class="pricing-currency">₹</span>899</p>
                                        <p class="price-yearly"><span class="pricing-currency">₹</span>749</p>
                                    </div>
                                    <p class="billing-method monthly">Price/Org/Month</p>
                                    <p class="billing-method yearly">Price/Org/Month Billed Annually</p><a
                                        class="pricing-cta free-trial-cta signup-cta" target="_blank"
                                        href="#">Start my free trial</a>
                                </div>
                            </div>
                            <div class="pricing-item-wrap highlight">
                                <div class="highlightTag">Most Popular</div>
                                <div class="plan-head-container">
                                    <h3>PROFESSIONAL</h3>
                                    <p>Confidently take on projects, track your inventory, and handle purchases</p>
                                </div>
                                <div class="pricing-body-container">
                                    <div class="pricing-amount-container">
                                        <p class="price-monthly"><span class="pricing-currency">₹</span>1,799</p>
                                        <p class="price-yearly"><span class="pricing-currency">₹</span>1,499</p>
                                    </div>
                                    <p class="billing-method monthly">Price/Org/Month</p>
                                    <p class="billing-method yearly">Price/Org/Month Billed Annually</p><a
                                        class="pricing-cta free-trial-cta signup-cta active" target="_blank"
                                        href="#">Start my free trial</a>
                                </div>
                            </div>
                            <div class="pricing-item-wrap">
                                <div class="plan-head-container">
                                    <h3>PREMIUM</h3>
                                    <p>Enhanced customization and automation to streamline business processes</p>
                                </div>
                                <div class="pricing-body-container">
                                    <div class="pricing-amount-container">
                                        <p class="price-monthly"><span class="pricing-currency">₹</span>3,599</p>
                                        <p class="price-yearly"><span class="pricing-currency">₹</span>2,999</p>
                                    </div>
                                    <p class="billing-method monthly">Price/Org/Month</p>
                                    <p class="billing-method yearly">Price/Org/Month Billed Annually</p><a
                                        class="pricing-cta free-trial-cta signup-cta" target="_blank"
                                        href="#">Start my free trial</a>
                                </div>
                            </div>
                            <div class="pricing-item-wrap">
                                <div class="plan-head-container">
                                    <h3>ELITE</h3>
                                    <p>Advanced accounting bundled with full-fledged inventory management</p>
                                </div>
                                <div class="pricing-body-container">
                                    <div class="pricing-amount-container">
                                        <p class="price-monthly"><span class="pricing-currency">₹</span>5,999</p>
                                        <p class="price-yearly"><span class="pricing-currency">₹</span>4,999</p>
                                    </div>
                                    <p class="billing-method monthly">Price/Org/Month</p>
                                    <p class="billing-method yearly">Price/Org/Month Billed Annually</p><a
                                        class="pricing-cta free-trial-cta signup-cta" target="_blank"
                                        href="/#">Start my free trial</a>
                                </div>
                            </div>
                            <div class="pricing-item-wrap">
                                <div class="plan-head-container">
                                    <h3>ULTIMATE</h3>
                                    <p>Gain deeper insights with advanced business intelligence capabilities</p>
                                </div>
                                <div class="pricing-body-container">
                                    <div class="pricing-amount-container">
                                        <p class="price-monthly"><span class="pricing-currency">₹</span>9,599</p>
                                        <p class="price-yearly"><span class="pricing-currency">₹</span>7,999</p>
                                    </div>
                                    <p class="billing-method monthly">Price/Org/Month</p>
                                    <p class="billing-method yearly">Price/Org/Month Billed Annually</p><a
                                        class="pricing-cta free-trial-cta signup-cta" target="_blank"
                                        href="#">Start my free trial</a>
                                </div>
                            </div>
                        </div><a class="explore-more-button max-width-1280" href="#">Explore all
                            plans</a>
                    </div>
                </div>
                <p class="tax-exclusion">*Prices are exclusive of local taxes.</p>
            </div>
            <script>
                function togglePricing() {
                    const t = document.querySelector(".pricing-wrapper");
                    t.classList.toggle("yearly"), t.classList.toggle("monthly")
                }
            </script>
        </div>

        <section class="various-user-parent">
            <div class="various-user-container"><span class="section-tag">Tailored for you</span>
                <h2>An accounting solution for every need and every business</h2>
                <div class="various-users-tile-wrapper d-flex">
                    <div class="various-user-tile">
                        <div><img src="{{asset('images/zoho-books/small.png')}}" alt="Small-scale business illustration" loading="lazy">
                            <h3>Small-scale business</h3>
                            <p>Get paid on time, track expenses, automate tasks, and make informed financial decisions.</p>
                        </div>
                        <div><a href="#"
                                aria-label="Learn more about small scale business accounting software"><svg
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path d="m256.3.6-39.6 39.6L404.5 228H.3v56h404.2L216.7 471.8l39.6 39.6L511.7 256z">
                                    </path>
                                </svg></a></div>
                    </div>
                    <div class="various-user-tile">
                        <div><img src="{{asset('images/zoho-books/medium.png')}}" alt="Mid-market business illustration" loading="lazy">
                            <h3>Mid-market business</h3>
                            <p>Go global! Use multi-currency feature, advanced integrations, analytics, and customization.
                            </p>
                        </div>
                        <div><a href="/in/books/medium-sized-accounting"
                                aria-label="Explore accounting solutions for medium-sized businesses"><svg
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path d="m256.3.6-39.6 39.6L404.5 228H.3v56h404.2L216.7 471.8l39.6 39.6L511.7 256z">
                                    </path>
                                </svg></a></div>
                    </div>
                    <div class="various-user-tile">
                        <div><img src="{{asset('images/zoho-books/student.png')}}" alt="Student using accounting software" loading="lazy">
                            <h3>For students</h3>
                            <p>Developed exclusively for students to experiment and self-learn cloud accounting.</p>
                        </div>
                        <div><a href="#"
                                aria-label="Explore accounting software for hands-on student learning"><svg
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path d="m256.3.6-39.6 39.6L404.5 228H.3v56h404.2L216.7 471.8l39.6 39.6L511.7 256z">
                                    </path>
                                </svg></a></div>
                    </div>
                    <div class="various-user-tile">
                        <div><img src="{{asset('images/zoho-books/ca.png')}}" alt="Accountant illustration" loading="lazy">
                            <h3>For accountants</h3>
                            <p>An expert accountant community to manage books and streamline finances.</p>
                        </div>
                        <div><a href="/in/books/accountant" aria-label="Get listed as an accountant"><svg
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path d="m256.3.6-39.6 39.6L404.5 228H.3v56h404.2L216.7 471.8l39.6 39.6L511.7 256z">
                                    </path>
                                </svg></a></div>
                    </div>
                </div>
            </div>
        </section>

        <div class="addon-integrations-parent-wrap">
            <div class="addon-integrations-parent"><span class="section-tag">Integrations</span>
                <h2>Connect and conquer</h2>
                <h3>Orchestrate success connecting with the apps you love</h3>
                <div class="addon-integ-wrapper">
                    <div class="addon-list d-flex">
                        <div class="integration-tile integration-hsbc"></div>
                        <div class="integration-tile integration-standardchartered"></div>
                        <div class="integration-tile integration-kotak"></div>
                        <div class="integration-tile integration-icici"></div>
                        <div class="integration-tile integration-yesbank"></div>
                        <div class="integration-tile integration-paypal"></div>
                        <div class="integration-tile integration-razorpay"></div>
                        <div class="integration-tile integration-paytm"></div>
                        <div class="integration-tile integration-payu"></div>
                        <div class="integration-tile integration-eazypay"></div>
                        <div class="integration-tile integration-slack"></div>
                        <div class="integration-tile integration-zapier"></div>
                        <div class="integration-tile integration-gsuite"></div>
                        <div class="integration-tile integration-microsoft"></div>
                        <div class="integration-tile integration-twilio"></div>
                        <div class="integration-tile integration-crm"></div>
                        <div class="integration-tile integration-expense"></div>
                        <div class="integration-tile integration-analytics"></div>
                        <div class="integration-tile integration-payroll"></div>
                        <div class="integration-tile integration-inventory"></div>
                        <div class="integration-tile integration-billing"></div>
                        <div class="integration-tile integration-commerce"></div>
                        <div class="integration-tile integration-hsbc"></div>
                        <div class="integration-tile integration-standardchartered"></div>
                        <div class="integration-tile integration-kotak"></div>
                        <div class="integration-tile integration-icici"></div>
                        <div class="integration-tile integration-yesbank"></div>
                        <div class="integration-tile integration-paypal"></div>
                        <div class="integration-tile integration-razorpay"></div>
                        <div class="integration-tile integration-paytm"></div>
                        <div class="integration-tile integration-payu"></div>
                        <div class="integration-tile integration-eazypay"></div>
                        <div class="integration-tile integration-slack"></div>
                        <div class="integration-tile integration-zapier"></div>
                        <div class="integration-tile integration-gsuite"></div>
                        <div class="integration-tile integration-microsoft"></div>
                        <div class="integration-tile integration-twilio"></div>
                        <div class="integration-tile integration-crm"></div>
                        <div class="integration-tile integration-expense"></div>
                        <div class="integration-tile integration-analytics"></div>
                        <div class="integration-tile integration-payroll"></div>
                        <div class="integration-tile integration-inventory"></div>
                        <div class="integration-tile integration-billing"></div>
                        <div class="integration-tile integration-commerce"></div>
                    </div>
                </div><a href="/in/books/addons/">More Integrations</a>
            </div>
        </div>

        <div class="page-container-margin container-max-width">
            <section class="platform-parent">
                <div class="platform-section">
                    <div class="mobile-section">
                        <div class="platform-section-text-container"><span>Mobile App</span>
                            <h3>Carry your accounts wherever you go!</h3><a href="/in/books/accounting-mobile-apps/"
                                class="platform-cta" target="_blank" aria-label="viewMore"><svg
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path d="m256.3.6-39.6 39.6L404.5 228H.3v56h404.2L216.7 471.8l39.6 39.6L511.7 256z">
                                    </path>
                                </svg></a>
                        </div><img loading="lazy" src="{{asset('images/zoho-books/mobile-app.png')}}"
                            alt=" mobile app interface shows the banking module" class="mobile-img">
                        <div class="platform-section-store-link"><a class="app-store"
                                href="#"
                                target="_blank" rel="noopener noreferrer"><img loading="lazy"
                                    src="{{asset('images/zoho-books/apple-store.svg')}}" alt="App Store Logo">
                            </a><a class="play-store"
                                href="#"
                                target="_blank" rel="noopener noreferrer"><img loading="lazy"
                                    src="{{asset('images/zoho-books/play-store.svg')}}" alt="Android App Logo"></a></div>
                    </div>
                    <div class="desktop-section">
                        <div class="platform-section-text-container"><span>Desktop App</span>
                            <h3>A simple, secure, standalone desktop solution</h3><a
                                href="" class="platform-cta" target="_blank"
                                aria-label="viewMore"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path d="m256.3.6-39.6 39.6L404.5 228H.3v56h404.2L216.7 471.8l39.6 39.6L511.7 256z">
                                    </path>
                                </svg></a>
                        </div><img loading="lazy" src="{{asset('images/zoho-books/desktop-app.png')}}"
                            alt=" desktop app shows the dashboard screen" class="desktop-img">
                        <div class="platform-section-store-link"><a class="microsoft-store"
                                href="#"
                                target="_blank" rel="noopener noreferrer"><img loading="lazy"
                                    src="{{asset('images/zoho-books/in-microsoft.png')}}" alt="Microsoft Store Logo"></a></div>
                    </div>
                </div>
            </section>
        </div>
        <section class="privacy-section"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                <path
                    d="M404.1 217.1h-12.4v-81.5C391.6 60.8 330.8.0 256 0S120.4 60.8 120.4 135.6v81.5H108c-33.5.0-60.7 27.2-60.7 60.7v173.4c0 33.5 27.2 60.7 60.7 60.7h296.1c33.5.0 60.7-27.2 60.7-60.7V277.9c0-33.6-27.2-60.8-60.7-60.8zm-215.4-81.5c0-37.1 30.2-67.3 67.3-67.3s67.3 30.2 67.3 67.3v81.5H188.7v-81.5z">
                </path>
            </svg>
            <h2 class="text-align-center">Choose privacy.<br>Choose Zoho.</h2>
            <p>At Zoho, we take pride in our perpetual efforts to surpass all expectations in providing security and privacy
                to our customers in this increasingly connected world.</p><img loading="lazy"
                src="{{asset('images/zoho-books/privacy-badges.png')}}"
                alt="GDPR and other quality, privacy, and security compliance badges">
        </section>

                {{-- Popup Form --}}

        {{-- <div id="call-to-action"
            class="container subscribe-popup contact-form-style-01 position-relative text-center mfp-hide">
            <div class="row g-0 align-items-stretch ">

                <!-- Left Side: Image -->
                <div class="col-lg-6 col-md-12 br-17px">
                    <img src="{{ asset('images/mobile-app/cta.webp') }}" alt="App Promo"
                        class="img-fluid w-100 h-100 object-fit-cover br-17px">
                </div>

                <!-- Right Side: Form -->
                <div class="col-lg-6 col-md-12 bg-white align-items-center bl-17px">
                    <h5 class="text-dark pt-5  pb-1">start your business</h5>
                    <!-- <h3 class="text-dark pt-1  pb-1"><span class="text-blue">Mobile App
                        </span>Development</h3> -->
                    <div class="w-100">

                        <!-- HubSpot form container -->
                        <div id="hubspot-form-container"></div>

                        <!-- HubSpot script -->

                    </div>
                </div>

            </div>
        </div> --}}

        <div id="call-to-action"
            class="container subscribe-popup contact-form-style-01 position-relative text-center mfp-hide">

            <div class="row g-0 bg-white align-items-stretch" style="position: relative; border-radius: 17px;">

                <div class="form-bg"></div>

                <!-- Left Image -->
                <div class="col-lg-6 col-md-12 br-17px" style="z-index: 1;">
                    <div class="form-part1-container">
                        <div>
                            <h1>Let's get you set up.</h1>
                            <p>
                                We specialize in building scalable, secure, and high-performance software solutions that help businesses streamline operations and stay ahead of the competition. Whether you need a custom web application, enterprise system, or mobile solution, our team is ready to deliver excellence at every stage. Share your project requirements with us, and let’s create something exceptional that drives measurable results.
                            </p>
                        </div>

                        <div class="margin-contain">
                            <h1>More than four million businesses around the world.</h1>

                            {{-- swiper --}}

                            <div class="sponsor-slider">
                <div class="slider-track">

                    <!-- ===== SET 1 ===== -->
                    <div class="sponsor">
                        <div class="sponsor-card sponsor-platinum"><img
                                src="{{asset('images/images/ride.webp')}}"></div>
                    </div>
                    <div class="sponsor">
                        <div class="sponsor-card sponsor-platinum  "><img
                                src="{{asset('images/images/client2.jpg')}}"></div>
                    </div>
                    <div class="sponsor">
                        <div class="sponsor-card sponsor-platinum  "><img
                                src="{{asset('images/images/client3.jpg')}}"></div>
                    </div>
                    <div class="sponsor">
                        <div class="sponsor-card sponsor-platinum  "><img
                                src="{{asset('images/images/client4.jpg')}}"></div>
                    </div>
                    <div class="sponsor">
                        <div class="sponsor-card sponsor-platinum  "><img
                                src="{{asset('images/images/client5.jpg')}}"></div>
                    </div>
                    <div class="sponsor">
                        <div class="sponsor-card sponsor-platinum  "><img
                                src="{{asset('images/images/client6.jpg')}}"></div>
                    </div>
                    <div class="sponsor">
                        <div class="sponsor-card sponsor-platinum  "><img
                                src="{{asset('images/images/client7.jpg')}}"></div>
                    </div>
                    <div class="sponsor">
                        <div class="sponsor-card sponsor-platinum  "><img
                                src="{{asset('images/images/client8.jpg')}}"></div>
                    </div>
                    <div class="sponsor">
                        <div class="sponsor-card sponsor-platinum  "><img
                                src="{{asset('images/images/client9.jpg')}}"></div>
                    </div>
                    <div class="sponsor">
                        <div class="sponsor-card sponsor-platinum  "><img
                                src="{{asset('images/images/client10.jpg')}}"></div>
                    </div>
                    <div class="sponsor">
                        <div class="sponsor-card sponsor-platinum  "><img
                                src="{{asset('images/images/client11.webp')}}"></div>
                    </div>
                    <div class="sponsor">
                        <div class="sponsor-card sponsor-platinum  "><img
                                src="{{asset('images/images/client16.webp')}}"></div>
                    </div>
                    <div class="sponsor">
                        <div class="sponsor-card sponsor-platinum  "><img
                                src="{{asset('images/images/client17.png')}}"></div>
                    </div>
                    <div class="sponsor">
                        <div class="sponsor-card sponsor-platinum  "><img
                                src="{{asset('images/images/client18.png')}}"></div>
                    </div>

                    <!-- ===== SET 2 (DUPLICATE) ===== -->
                    <div class="sponsor">
                        <div class="sponsor-card sponsor-platinum"><img
                                src="{{asset('images/images/ride.webp')}}"></div>
                    </div>
                    <div class="sponsor">
                        <div class="sponsor-card sponsor-platinum  "><img
                                src="{{asset('images/images/client2.jpg')}}"></div>
                    </div>
                    <div class="sponsor">
                        <div class="sponsor-card sponsor-platinum  "><img
                                src="{{asset('images/images/client3.jpg')}}"></div>
                    </div>
                    <div class="sponsor">
                        <div class="sponsor-card sponsor-platinum  "><img
                                src="{{asset('images/images/client4.jpg')}}"></div>
                    </div>
                    <div class="sponsor">
                        <div class="sponsor-card sponsor-platinum  "><img
                                src="{{asset('images/images/client5.jpg')}}"></div>
                    </div>
                    <div class="sponsor">
                        <div class="sponsor-card sponsor-platinum  "><img
                                src="{{asset('images/images/client6.jpg')}}"></div>
                    </div>
                    <div class="sponsor">
                        <div class="sponsor-card sponsor-platinum  "><img
                                src="{{asset('images/images/client7.jpg')}}"></div>
                    </div>
                    <div class="sponsor">
                        <div class="sponsor-card sponsor-platinum  "><img
                                src="{{asset('images/images/client8.jpg')}}"></div>
                    </div>
                    <div class="sponsor">
                        <div class="sponsor-card sponsor-platinum  "><img
                                src="{{asset('images/images/client9.jpg')}}"></div>
                    </div>
                    <div class="sponsor">
                        <div class="sponsor-card sponsor-platinum  "><img
                                src="{{asset('images/images/client10.jpg')}}"></div>
                    </div>
                    <div class="sponsor">
                        <div class="sponsor-card sponsor-platinum  "><img
                                src="{{asset('images/images/client11.webp')}}"></div>
                    </div>
                    <div class="sponsor">
                        <div class="sponsor-card sponsor-platinum  "><img
                                src="{{asset('images/images/client16.webp')}}"></div>
                    </div>
                    <div class="sponsor">
                        <div class="sponsor-card sponsor-platinum  "><img
                                src="{{asset('images/images/client17.png')}}"></div>
                    </div>
                    <div class="sponsor">
                        <div class="sponsor-card sponsor-platinum  "><img
                                src="{{asset('images/images/client18.png')}}"></div>
                    </div>

                </div>
            </div>

                        </div>

                    </div>
                </div>

                <!-- Right Form -->
                <div class="col-lg-6 col-md-12 align-items-center bl-17px" style="z-index: 1;">

                    <div class="form-part2-container">
                        <h5 class="text-dark pb-1">
                            Start your business
                        </h5>

                        @include('common.contact-form')
                    </div>

                </div>

            </div>

        </div>

        {{-- Popup Form --}}


        


        <script>
            "use strict";

            function findMaxHeight(e) {
                var t = Array.prototype.slice.call(e).map(function(e) {
                    return e.offsetHeight
                });
                return Math.max.apply(null, t)
            }
            var carouselTimerObj = {};

            function initCarousel(e) {
                var t, n = e.classList.contains("prevent-auto-carousel"),
                    i = e.classList.contains("fade-carousel"),
                    a = parseInt(e.dataset.interval) || 6e3,
                    r = e.querySelector(".carousel-content"),
                    c = window.requestAnimationFrame && window.cancelAnimationFrame,
                    o = e.querySelectorAll(".carousel-content > *"),
                    s = e.querySelectorAll(".carousel-indicators > *"),
                    l = e.querySelectorAll(".carousel-images > img"),
                    u = e.querySelector(".lButton"),
                    d = e.querySelector(".rButton"),
                    m = {
                        itemLength: o.length,
                        indicatorLength: s.length,
                        imageLength: l.length
                    },
                    v = 0,
                    h = Array.prototype.slice.call(o),
                    g = e.querySelector(".carousel-content .active");

                function L(e) {
                    return c ? requestAnimationFrame(e) : e()
                }
                g && (v = h.indexOf(g)),
                    "complete" === document.readyState ? L(function() {
                        return r.style.height = "".concat(findMaxHeight(o), "px")
                    }) : document.addEventListener("readystatechange", function(e) {
                        L(function() {
                            return r.style.height = "".concat(findMaxHeight(o), "px")
                        })
                    });
                var f = !!window.matchMedia && window.matchMedia("(max-width: 478px)");

                function y(e, t) {
                    if (c) {
                        var n = function() {
                                (new Date).getTime() - i >= t && (e(),
                                        i = (new Date).getTime()),
                                    carouselTimerObj.id = requestAnimationFrame(n)
                            },
                            i = (new Date).getTime();
                        carouselTimerObj.id = requestAnimationFrame(n)
                    } else
                        carouselTimerObj.id = setInterval(e, t)
                }

                function w(e) {
                    M(),
                        L(function() {
                            return T(e)
                        }),
                        n || y(T, a)
                }

                function p() {
                    var e = this.nextItem;
                    v !== e && w(e)
                }

                function E(e) {
                    for (var t = 0; t < e.length; t++)
                        e[t].addEventListener("click", p.bind({
                            nextItem: t
                        }))
                }

                function T() {
                    for (var e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : (v + 1) % m.itemLength, t =
                            0; t < m.itemLength; t++)
                        i ? A(e, o, s, l, m) : q(e, o, s, l, m)
                }

                function A(e, t, n, i, a) {
                    for (var r = 0; r < t.length; r++)
                        r === e ? (v = r,
                            t[r].classList.add("active"),
                            t[r].style.opacity = "1",
                            a.indicatorLength && n[r].classList.add("active"),
                            a.imageLength && i[r].classList.add("active")) : (t[r].classList.remove("active"),
                            t[r].style.opacity = "0",
                            a.indicatorLength && n[r].classList.remove("active"),
                            a.imageLength && i[r].classList.remove("active"))
                }

                function q(e, t, n, i, a) {
                    for (var r = 0; r < t.length; r++) {
                        var c = 0;
                        r < e ? c = -100 * Math.abs(r - e) : r > e && (c = 100 * Math.abs(r - e)),
                            t[r].style.left = "".concat(c, "%"),
                            r === e ? (v = r,
                                t[r].classList.add("active"),
                                a.indicatorLength && n[r].classList.add("active"),
                                a.imageLength && i[r].classList.add("active")) : (t[r].classList.remove("active"),
                                a.indicatorLength && n[r].classList.remove("active"),
                                a.imageLength && i[r].classList.remove("active"))
                    }
                }

                function x(t) {
                    var n = [],
                        i = [],
                        a = 0,
                        r = 0,
                        c = m.itemLength;
                    t && (c = (o = e.querySelectorAll(".carousel-content > *")).length,
                        s = e.querySelectorAll(".carousel-indicators > *"));
                    for (var l = 0; l < c; l++)
                        "none" !== window.getComputedStyle(o[l]).display && (n[a++] = o[l]),
                        "none" !== window.getComputedStyle(s[l]).display && (i[r++] = s[l]);
                    o = n,
                        m.itemLength = o.length,
                        s = i,
                        m.indicatorLength = s.length,
                        t && (E(s),
                            w(0))
                }
                (f && f.matches || !1 === f) && x(),
                    w(v),
                    m.indicatorLength && E(s),
                    m.imageLength && E(l),
                    d && d.addEventListener("click", function() {
                            v === m.indicatorLength - 1 ? w(0) : w(v + 1)
                        }
                        .bind()),
                    u && u.addEventListener("click", function() {
                            w(0 === v ? m.indicatorLength - 1 : v - 1)
                        }
                        .bind());
                var b = 0,
                    S = 0;

                function M() {
                    c ? cancelAnimationFrame(carouselTimerObj.id) : clearInterval(carouselTimerObj.id)
                }

                function O() {
                    y(T, a)
                }

                function F() {
                    M()
                }
                if (window.addEventListener("resize", function(e) {
                        clearTimeout(S),
                            S = setTimeout(function() {
                                var t = Math.max(document.documentElement.clientWidth, window.innerWidth || 0);
                                (b <= 478 && t > 478 || b > 478 && t <= 478) && (b = t,
                                    x(e)),
                                L(function() {
                                    return r.style.height = "".concat(findMaxHeight(o), "px")
                                })
                            }, 250)
                    }),
                    n || (r.addEventListener("mouseenter", F),
                        r.addEventListener("mouseleave", O)),
                    window.TouchEvent) {
                    var j = function(e) {
                            M(),
                                e.changedTouches && (D = e.changedTouches[0].clientX)
                        },
                        C = function(e) {
                            if (y(T, a),
                                e.changedTouches) {
                                var t = e.changedTouches[0].clientX,
                                    n = Math.abs(D - t),
                                    i = D < t ? -1 : 1,
                                    r = 1 === i ? v + 1 < m.itemLength : v - 1 >= 0;
                                n >= 50 && r && w(v + i)
                            }
                        },
                        I = !1;
                    try {
                        var H = Object.defineProperty({}, "passive", {
                            get: function() {
                                I = !0
                            }
                        });
                        window.addEventListener("testPassive", null, H)
                    } catch (e) {}
                    var D = 0;
                    r.addEventListener("touchstart", j, !!I && {
                            passive: !0
                        }),
                        r.addEventListener("touchend", C),
                        t = function() {
                            r.removeEventListener("touchstart", j, !!I && {
                                    passive: !0
                                }),
                                r.removeEventListener("touchend", C)
                        }
                }
                return {
                    clearAnimationTimer: M,
                    removeCarouselEventListeners: function() {
                        r.removeEventListener("mouseenter", F),
                            r.removeEventListener("mouseleave", O),
                            t()
                    },
                    requestAnimationInterval: y,
                    navigateTo: T
                }
            }
            var carouselElemFunction = {};
            window.addEventListener("DOMContentLoaded", function() {
                document.querySelectorAll(".carousel-container").forEach(function(e) {
                    carouselElemFunction[e.classList[0]] = initCarousel(e)
                })
            });
        </script>
        <script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>



        <script src="{{ asset('js/bootstrap.min.js') }}"></script>

        <script src="{{ asset('js/owl.carousel.min.js') }}"></script>

    </body>
@endsection

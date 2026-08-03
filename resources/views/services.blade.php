<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services - HydroShield Construction Chemicals</title>
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Outfit:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- Vite CSS/JS -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

    <!-- Top Contact Bar -->
    <header class="top-bar">
        <div class="container top-bar-content">
            <div class="top-bar-left">
                <a href="tel:+923001234567" class="contact-link">
                    <svg class="icon icon-xs" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.94.725l.548 2.2a1 1 0 01-.321.988l-1.305.98a10.582 10.582 0 004.872 4.872l.98-1.305a1 1 0 01.988-.321l2.2.548a1 1 0 01.725.94V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                    </svg>
                    <span>+92 300 123 4567</span>
                </a>
                <a href="mailto:info@hydrashield.pk" class="contact-link">
                    <svg class="icon icon-xs" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                    </svg>
                    <span>info@hydrashield.pk</span>
                </a>
            </div>
            <div class="top-bar-right">
                <a href="#" class="top-link">Chat Support</a>
                <div class="language-selector">
                    <span>English (US)</span>
                    <svg class="icon icon-xs" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Navigation -->
    <nav class="main-nav">
        <div class="container nav-content">
            <!-- Logo -->
            <a href="/" class="logo">
                <div class="logo-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" fill="#005c4e"/>
                        <path d="M12 8v8M9 11h6" stroke="white" stroke-width="2"/>
                    </svg>
                </div>
                <div class="logo-text">
                    <span class="brand-name">HydroShield</span>
                    <span class="brand-tagline">CONSTRUCTION CHEMICALS</span>
                </div>
            </a>

            <!-- Menu Links -->
            <ul class="nav-links">
                <li><a href="/">Home</a></li>
                <li><a href="#">Solutions</a></li>
                <li><a href="/products">Products</a></li>
                <li><a href="/services" class="active">Services</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">About</a></li>
            </ul>

            <!-- Nav Actions -->
            <div class="nav-actions">
                <a href="#" class="cart-btn">
                    <svg class="icon" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                    <span class="cart-badge">2</span>
                </a>
                <a href="#" class="login-btn">
                    <svg class="icon" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                    </svg>
                    <span>Login</span>
                </a>
                <a href="#" class="book-btn">
                    <svg class="icon" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                    </svg>
                    <span>Book Inspection</span>
                </a>
            </div>
        </div>
    </nav>

    <!-- Breadcrumb Area -->
    <div class="breadcrumb-container">
        <div class="container">
            <span class="breadcrumb-text">
                <a href="/">Home</a> &rsaquo; 
                <strong>Services</strong>
            </span>
        </div>
    </div>

    <!-- Services Hero Section -->
    <section class="services-hero">
        <div class="services-hero-overlay"></div>
        <div class="container services-hero-grid">
            
            <!-- Left Side: Content & Action buttons -->
            <div class="services-hero-content">
                <span class="iso-badge">ISO 9001:2015 CERTIFIED</span>
                
                <h1 class="services-hero-title">
                    Precision Engineering for Structural Durability
                </h1>
                
                <p class="services-hero-subtitle">
                    From industrial waterproofing to advanced thermal protection, Construcs delivers chemical solutions that safeguard your investments against the elements.
                </p>

                <!-- Hero Actions -->
                <div class="services-hero-actions">
                    <a href="#" class="btn-hero-inspection">
                        <svg class="icon" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z"></path>
                        </svg>
                        <span>Book Free Inspection</span>
                    </a>
                    
                    <a href="#" class="btn-hero-quotation">
                        <svg class="icon" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 14.25v2.25m3-4.5v4.5m3-6.75v6.75m3-9v9M6 20.25h12A2.25 2.25 0 0020.25 18V6A2.25 2.25 0 0018 3.75H6A2.25 2.25 0 003.75 6v12A2.25 2.25 0 006 20.25z"></path>
                        </svg>
                        <span>Request Quotation</span>
                    </a>
                </div>

                <!-- Stats Row -->
                <div class="services-stats-row">
                    <div class="s-stat-item">
                        <span class="s-stat-num">15+</span>
                        <span class="s-stat-label">Years Experience</span>
                    </div>
                    <div class="s-stat-item">
                        <span class="s-stat-num">8,000+</span>
                        <span class="s-stat-label">Projects Completed</span>
                    </div>
                    <div class="s-stat-item">
                        <span class="s-stat-num">200+</span>
                        <span class="s-stat-label">Premium Products</span>
                    </div>
                    <div class="s-stat-item">
                        <span class="s-stat-num">50+</span>
                        <span class="s-stat-label">Certified Engineers</span>
                    </div>
                </div>
            </div>

            <!-- Right Side: Service Quick Find Widget Box -->
            <div class="services-quick-find-card">
                <h3 class="quick-find-title">Service Quick Find</h3>
                
                <div class="quick-find-buttons">
                    <button class="btn-quick-find">
                        <svg class="icon icon-sm" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15a4.5 4.5 0 004.5 4.5H18a3.75 3.75 0 001.332-7.257 3 3 0 00-3.758-3.848 5.25 5.25 0 00-10.233 2.33A4.502 4.502 0 002.25 15z"></path>
                        </svg>
                        <span>Waterproofing</span>
                    </button>
                    <button class="btn-quick-find">
                        <svg class="icon icon-sm" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v18m0-18l-3 3m3-3l3 3m-3 12l-3-3m3 3l3-3"></path>
                        </svg>
                        <span>Heat Proofing</span>
                    </button>
                </div>

                <div class="search-problem-container">
                    <label class="search-problem-label">Search Problem or Service</label>
                    <div class="search-input-group">
                        <input type="text" placeholder="e.g. Roof Leakage" class="search-problem-input">
                        <button class="btn-problem-search">
                            <svg class="icon icon-sm" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                            <span>Search</span>
                        </button>
                    </div>
                </div>

                <button class="btn-analyze-infra">Analyze Infrastructure</button>
            </div>
            
        </div>
    </section>

    <!-- Nine Core Protection Disciplines Categories Grid -->
    <section class="service-categories-section">
        <div class="container">
            <!-- Section Header -->
            <div class="categories-header">
                <span class="categories-tag">• SERVICE CATEGORIES</span>
                <h2 class="categories-title">Nine core protection disciplines</h2>
                <p class="categories-subtitle">
                    Every category is engineered around a specific failure mode — from hydro staticpressure to solar heat gain — matched to certified product systems.
                </p>
            </div>

            <!-- Categories Grid -->
            <div class="categories-grid">
                <!-- Card 1 -->
                <div class="category-card">
                    <div class="card-top-info">
                        <div class="card-icon-box bg-blue">
                            <svg class="icon icon-sm" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25"></path>
                            </svg>
                        </div>
                        <span class="services-count">42 services</span>
                    </div>
                    <h3 class="category-card-title">Roof Waterproofing</h3>
                    <p class="category-card-desc">Membrane & coating systems for flat and sloped roofs.</p>
                </div>

                <!-- Card 2 -->
                <div class="category-card">
                    <div class="card-top-info">
                        <div class="card-icon-box bg-green">
                            <svg class="icon icon-sm" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v1.5M12 19.5V21M3 12h1.5m16.5 0H21m-1.5-5.625l-1.06 1.06m-9.38 9.38l-1.06 1.06M18 18.25l-1.06-1.06M5.625 5.625l-1.06 1.06M12 9a3 3 0 100 6 3 3 0 000-6z"></path>
                            </svg>
                        </div>
                        <span class="services-count">42 services</span>
                    </div>
                    <h3 class="category-card-title">Heat Proofing</h3>
                    <p class="category-card-desc">Reflective and insulating systems that cut indoor heat gain.</p>
                </div>

                <!-- Card 3 -->
                <div class="category-card">
                    <div class="card-top-info">
                        <div class="card-icon-box bg-red-orange">
                            <svg class="icon icon-sm" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25"></path>
                            </svg>
                        </div>
                        <span class="services-count">42 services</span>
                    </div>
                    <h3 class="category-card-title">Basement Waterproofing</h3>
                    <p class="category-card-desc">Below-grade tanking against hydrostatic water pressure.</p>
                </div>

                <!-- Card 4 -->
                <div class="category-card">
                    <div class="card-top-info">
                        <div class="card-icon-box bg-yellow-orange">
                            <svg class="icon icon-sm" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12a7.5 7.5 0 11-15 0 7.5 7.5 0 0115 0z"></path>
                            </svg>
                        </div>
                        <span class="services-count">42 services</span>
                    </div>
                    <h3 class="category-card-title">Bathroom Waterproofing</h3>
                    <p class="category-card-desc">Wet-area membranes beneath tile for leak-free bathrooms.</p>
                </div>

                <!-- Card 5 -->
                <div class="category-card">
                    <div class="card-top-info">
                        <div class="card-icon-box bg-dark-blue">
                            <svg class="icon icon-sm" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 7.5l-.625 10.632a2.25 2.25 0 01-2.247 2.118H6.622a2.25 2.25 0 01-2.247-2.118L3.75 7.5M10 11.25h4M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125z"></path>
                            </svg>
                        </div>
                        <span class="services-count">42 services</span>
                    </div>
                    <h3 class="category-card-title">Water Tank Waterproofing</h3>
                    <p class="category-card-desc">Potable-safe linings for overhead and underground tanks.</p>
                </div>

                <!-- Card 6 -->
                <div class="category-card">
                    <div class="card-top-info">
                        <div class="card-icon-box bg-teal">
                            <svg class="icon icon-sm" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18L9 11.25l4.306 4.307a11.95 11.95 0 015.814-5.519l2.74-1.22m0 0l-5.94-2.28m5.94 2.28l-2.28 5.941"></path>
                            </svg>
                        </div>
                        <span class="services-count">42 services</span>
                    </div>
                    <h3 class="category-card-title">Concrete Repair</h3>
                    <p class="category-card-desc">Structural crack injection and spalled concrete restoration.</p>
                </div>

                <!-- Card 7 -->
                <div class="category-card">
                    <div class="card-top-info">
                        <div class="card-icon-box bg-red-brown">
                            <svg class="icon icon-sm" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12a7.5 7.5 0 11-15 0 7.5 7.5 0 0115 0z"></path>
                            </svg>
                        </div>
                        <span class="services-count">42 services</span>
                    </div>
                    <h3 class="category-card-title">Floor Coating</h3>
                    <p class="category-card-desc">Epoxy & PU systems for industrial and commercial floors.</p>
                </div>

                <!-- Card 8 -->
                <div class="category-card">
                    <div class="card-top-info">
                        <div class="card-icon-box bg-amber">
                            <svg class="icon icon-sm" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <span class="services-count">42 services</span>
                    </div>
                    <h3 class="category-card-title">Protective Coating</h3>
                    <p class="category-card-desc">Anti-corrosive and chemical-resistant coating systems.</p>
                </div>

                <!-- Card 9 -->
                <div class="category-card">
                    <div class="card-top-info">
                        <div class="card-icon-box bg-hex-blue">
                            <svg class="icon icon-sm" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.57-.598-3.751A11.956 11.956 0 0112 2.684z"></path>
                            </svg>
                        </div>
                        <span class="services-count">42 services</span>
                    </div>
                    <h3 class="category-card-title">Roof Protection</h3>
                    <p class="category-card-desc">UV and weathering protection for long-term roof life.</p>
                </div>
            </div>

            <!-- View All Categories Link -->
            <div class="view-all-categories-wrapper">
                <a href="#" class="view-all-categories-btn">
                    <span>View All Categories</span>
                    <svg class="icon icon-xs arrow-icon" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"></path>
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <!-- Flagship Service Systems Section -->
    <section class="featured-services-section">
        <div class="container">
            <!-- Section Header -->
            <div class="featured-header">
                <span class="featured-tag">• FEATURED SERVICES</span>
                <h2 class="featured-title">Flagship service systems</h2>
                <p class="featured-subtitle">
                    Our most requested, fully warrantied service packages — scroll to compare specs.
                </p>
            </div>

            <!-- Scrollable Cards Row -->
            <div class="featured-scroll-container">
                
                <!-- Card 1 -->
                <div class="featured-card">
                    <div class="card-media-wrapper">
                        <span class="media-badge">Roofing</span>
                        <div class="media-placeholder"></div>
                    </div>
                    <div class="card-content-box">
                        <h3 class="card-title">Roof Waterproofing</h3>
                        <p class="card-desc">APP/SBS membrane + reflective top coat for flat and low-slope roofs.</p>
                        
                        <h4 class="speciality-title">Speciality</h4>
                        <ul class="speciality-list">
                            <li>
                                <svg class="icon icon-xs check-green" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
                                </svg>
                                <span>Residential,</span>
                            </li>
                            <li>
                                <svg class="icon icon-xs check-green" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
                                </svg>
                                <span>Warranty - 10 year</span>
                            </li>
                            <li>
                                <svg class="icon icon-xs check-green" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
                                </svg>
                                <span>Commercial</span>
                            </li>
                            <li>
                                <svg class="icon icon-xs check-green" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
                                </svg>
                                <span>Starting at - $180/sqft</span>
                            </li>
                        </ul>

                        <div class="card-btn-group">
                            <button class="btn-card-primary">View Details</button>
                            <button class="btn-card-secondary">Book Service</button>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="featured-card">
                    <div class="card-media-wrapper">
                        <span class="media-badge">Roofing</span>
                        <div class="media-placeholder"></div>
                    </div>
                    <div class="card-content-box">
                        <h3 class="card-title">Industrial Heat Proofing</h3>
                        <p class="card-desc">Reflective elastomeric system that lowers roof surface temperature.</p>
                        
                        <h4 class="speciality-title">Speciality</h4>
                        <ul class="speciality-list">
                            <li>
                                <svg class="icon icon-xs check-green" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
                                </svg>
                                <span>Residential,</span>
                            </li>
                            <li>
                                <svg class="icon icon-xs check-green" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
                                </svg>
                                <span>Warranty - 10 year</span>
                            </li>
                            <li>
                                <svg class="icon icon-xs check-green" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
                                </svg>
                                <span>Commercial</span>
                            </li>
                            <li>
                                <svg class="icon icon-xs check-green" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
                                </svg>
                                <span>Starting at - $180/sqft</span>
                            </li>
                        </ul>

                        <div class="card-btn-group">
                            <button class="btn-card-primary">View Details</button>
                            <button class="btn-card-secondary">Book Service</button>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="featured-card">
                    <div class="card-media-wrapper">
                        <span class="media-badge">Roofing</span>
                        <div class="media-placeholder"></div>
                    </div>
                    <div class="card-content-box">
                        <h3 class="card-title">Concrete Repair</h3>
                        <p class="card-desc">Polymer-modified mortar and crack injection for structural integrity.</p>
                        
                        <h4 class="speciality-title">Speciality</h4>
                        <ul class="speciality-list">
                            <li>
                                <svg class="icon icon-xs check-green" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
                                </svg>
                                <span>Residential,</span>
                            </li>
                            <li>
                                <svg class="icon icon-xs check-green" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
                                </svg>
                                <span>Warranty - 10 year</span>
                            </li>
                            <li>
                                <svg class="icon icon-xs check-green" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
                                </svg>
                                <span>Commercial</span>
                            </li>
                            <li>
                                <svg class="icon icon-xs check-green" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
                                </svg>
                                <span>Starting at - $180/sqft</span>
                            </li>
                        </ul>

                        <div class="card-btn-group">
                            <button class="btn-card-primary">View Details</button>
                            <button class="btn-card-secondary">Book Service</button>
                        </div>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="featured-card">
                    <div class="card-media-wrapper">
                        <span class="media-badge">Roofing</span>
                        <div class="media-placeholder"></div>
                    </div>
                    <div class="card-content-box">
                        <h3 class="card-title">Floor Coating</h3>
                        <p class="card-desc">Epoxy/PU flooring systems for chemicals, abrasion, and heavy traffic.</p>
                        
                        <h4 class="speciality-title">Speciality</h4>
                        <ul class="speciality-list">
                            <li>
                                <svg class="icon icon-xs check-green" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
                                </svg>
                                <span>Residential,</span>
                            </li>
                            <li>
                                <svg class="icon icon-xs check-green" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
                                </svg>
                                <span>Warranty - 10 year</span>
                            </li>
                            <li>
                                <svg class="icon icon-xs check-green" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
                                </svg>
                                <span>Commercial</span>
                            </li>
                            <li>
                                <svg class="icon icon-xs check-green" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
                                </svg>
                                <span>Starting at - $180/sqft</span>
                            </li>
                        </ul>

                        <div class="card-btn-group">
                            <button class="btn-card-primary">View Details</button>
                            <button class="btn-card-secondary">Book Service</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Service Process Section -->
    <section class="process-section">
        <div class="container">
            <!-- Section Header -->
            <div class="process-header">
                <span class="process-tag">• OUR SERVICE PROCESS</span>
                <h2 class="process-title">From inspection to warranty handover</h2>
                <p class="process-subtitle">
                    A fixed nine-stage engineering workflow — the same layered cross-section, applied every time.
                </p>
            </div>

            <!-- Steps Grid -->
            <div class="process-steps-row">
                
                <!-- Step 1 -->
                <div class="process-step">
                    <div class="step-card">
                        <svg class="icon step-icon" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m9-.75a9 9 0 11-18 0 9 9 0 0118 0zm-9 3.75h.008v.008H12v-.008z"></path>
                        </svg>
                        <span class="step-num">01</span>
                    </div>
                    <span class="step-label">Book Free Inspection</span>
                </div>

                <!-- Step 2 -->
                <div class="process-step">
                    <div class="step-card">
                        <svg class="icon step-icon" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 3.104v17.792M14.25 3.104v17.792M3 9.75h18M3 14.25h18"></path>
                        </svg>
                        <span class="step-num">02</span>
                    </div>
                    <span class="step-label">Site Visit</span>
                </div>

                <!-- Step 3 -->
                <div class="process-step">
                    <div class="step-card">
                        <svg class="icon step-icon" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 14.25v2.25m3-4.5v4.5m3-6.75v6.75m3-9v9M6 20.25h12A2.25 2.25 0 0020.25 18V6A2.25 2.25 0 0018 3.75H6A2.25 2.25 0 003.75 6v12A2.25 2.25 0 006 20.25z"></path>
                        </svg>
                        <span class="step-num">03</span>
                    </div>
                    <span class="step-label">Technical Assessment</span>
                </div>

                <!-- Step 4 -->
                <div class="process-step">
                    <div class="step-card">
                        <svg class="icon step-icon" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.42 15.071L2.002 24.49l-1.98-1.96 9.403-9.403a7.5 7.5 0 111.996 1.944zM16.5 10.5a1.5 1.5 0 100-3 1.5 1.5 0 000 3z"></path>
                        </svg>
                        <span class="step-num">04</span>
                    </div>
                    <span class="step-label">Solution Recommendation</span>
                </div>

                <!-- Step 5 -->
                <div class="process-step">
                    <div class="step-card">
                        <svg class="icon step-icon" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.57-.598-3.751A11.956 11.956 0 0112 2.684z"></path>
                        </svg>
                        <span class="step-num">05</span>
                    </div>
                    <span class="step-label">Quotation Approval</span>
                </div>

                <!-- Step 6 -->
                <div class="process-step">
                    <div class="step-card">
                        <svg class="icon step-icon" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.57-.598-3.751A11.956 11.956 0 0112 2.684z"></path>
                        </svg>
                        <span class="step-num">06</span>
                    </div>
                    <span class="step-label">Material Preparation</span>
                </div>

                <!-- Step 7 -->
                <div class="process-step">
                    <div class="step-card">
                        <svg class="icon step-icon" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.57-.598-3.751A11.956 11.956 0 0112 2.684z"></path>
                        </svg>
                        <span class="step-num">07</span>
                    </div>
                    <span class="step-label">Professional Application</span>
                </div>

                <!-- Step 8 -->
                <div class="process-step">
                    <div class="step-card">
                        <svg class="icon step-icon" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.57-.598-3.751A11.956 11.956 0 0112 2.684z"></path>
                        </svg>
                        <span class="step-num">08</span>
                    </div>
                    <span class="step-label">Quality Inspection</span>
                </div>

                <!-- Step 9 -->
                <div class="process-step">
                    <div class="step-card">
                        <svg class="icon step-icon" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.57-.598-3.751A11.956 11.956 0 0112 2.684z"></path>
                        </svg>
                        <span class="step-num">09</span>
                    </div>
                    <span class="step-label">Warranty Handover</span>
                </div>

            </div>
        </div>
    </section>

    <!-- Industry Standards Section -->
    <section class="industries-serve-section">
        <div class="container">
            <!-- Section Header -->
            <div class="industries-serve-header">
                <span class="industries-serve-tag">• INDUSTRIES WE SERVE</span>
                <h2 class="industries-serve-title">Sector-specific protection standards</h2>
                <p class="industries-serve-subtitle">
                    Different occupancy, different exposure. Our specs adapt to the building type.
                </p>
            </div>

            <!-- Scrollable Gradients Row -->
            <div class="industries-scroll-container">
                <!-- Card 1 -->
                <div class="industry-grad-card grad-blue-dark">
                    <span class="industry-label-text">Residential</span>
                </div>
                <!-- Card 2 -->
                <div class="industry-grad-card grad-green-dark">
                    <span class="industry-label-text">Commercial</span>
                </div>
                <!-- Card 3 -->
                <div class="industry-grad-card grad-red-brown-dark">
                    <span class="industry-label-text">Industrial</span>
                </div>
                <!-- Card 4 -->
                <div class="industry-grad-card grad-gold-dark">
                    <span class="industry-label-text">Factories</span>
                </div>
                <!-- Card 5 -->
                <div class="industry-grad-card grad-blue-ocean">
                    <span class="industry-label-text">Warehouses</span>
                </div>
                <!-- Card 6 -->
                <div class="industry-grad-card grad-teal-dark">
                    <span class="industry-label-text">Hospitals</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Comparison Table Section -->
    <section class="comparison-section">
        <div class="container">
            <!-- Section Header -->
            <div class="comparison-header">
                <h2 class="comparison-title">Compare coverage at a glance</h2>
                <p class="comparison-subtitle">
                    Every tier is backed by a written warranty and third-party product certification.
                </p>
            </div>

            <!-- Table Container -->
            <div class="comparison-table-wrapper">
                <table class="comparison-table">
                    <thead>
                        <tr>
                            <th class="feature-col-header"></th>
                            <th class="tier-col-header">
                                <div class="tier-header-inner">
                                    <span class="tier-name">Basic</span>
                                    <span class="tier-price">$ 4,500+</span>
                                </div>
                            </th>
                            <th class="tier-col-header standard-header-cell">
                                <div class="tier-header-inner">
                                    <span class="popular-badge">Most Popular</span>
                                    <span class="tier-name">Standard</span>
                                    <span class="tier-price">$ 9,500+</span>
                                </div>
                            </th>
                            <th class="tier-col-header">
                                <div class="tier-header-inner">
                                    <span class="tier-name">Premium</span>
                                    <span class="tier-price">$ 18,000+</span>
                                </div>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="feature-name">WARRANTY</td>
                            <td class="feature-val">3 years</td>
                            <td class="feature-val font-semibold">5 years</td>
                            <td class="feature-val">10 years</td>
                        </tr>
                        <tr>
                            <td class="feature-name">RECOMMENDED PROJECT SIZE</td>
                            <td class="feature-val">Up to 1,500 sqft</td>
                            <td class="feature-val font-semibold">1,500–5,000 sqft</td>
                            <td class="feature-val">5,000+ sqft / industrial</td>
                        </tr>
                        <tr>
                            <td class="feature-name">INSPECTION & ASSESSMENT</td>
                            <td class="feature-val text-teal">✓</td>
                            <td class="feature-val text-teal font-semibold">✓</td>
                            <td class="feature-val text-teal">✓</td>
                        </tr>
                        <tr>
                            <td class="feature-name">STANDARD MEMBRANE SYSTEM</td>
                            <td class="feature-val text-teal">✓</td>
                            <td class="feature-val text-teal font-semibold">✓</td>
                            <td class="feature-val text-teal">✓</td>
                        </tr>
                        <tr>
                            <td class="feature-name">PREMIUM MEMBRANE SYSTEM</td>
                            <td class="feature-val text-gray-300">—</td>
                            <td class="feature-val text-teal font-semibold">✓</td>
                            <td class="feature-val text-teal">✓</td>
                        </tr>
                        <tr>
                            <td class="feature-name">STRUCTURAL CRACK REPAIR</td>
                            <td class="feature-val text-gray-300">—</td>
                            <td class="feature-val font-semibold">1 visit/yr</td>
                            <td class="feature-val text-teal">✓</td>
                        </tr>
                        <tr>
                            <td class="feature-name">ANNUAL MAINTENANCE VISIT</td>
                            <td class="feature-val text-gray-300">—</td>
                            <td class="feature-val text-gray-300 font-semibold">—</td>
                            <td class="feature-val">2 visits/yr</td>
                        </tr>
                        <tr>
                            <td class="feature-name">PRIORITY RESPONSE LINE</td>
                            <td class="feature-val text-gray-300">—</td>
                            <td class="feature-val text-gray-300 font-semibold">—</td>
                            <td class="feature-val text-teal">✓</td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td class="feature-name border-none"></td>
                            <td class="action-cell">
                                <button class="btn-tier-outline">Choose Basic</button>
                            </td>
                            <td class="action-cell">
                                <button class="btn-tier-filled">Choose Standard</button>
                            </td>
                            <td class="action-cell">
                                <button class="btn-tier-outline">Choose Premium</button>
                            </td>
                        </tr>
                    </tfoot>
                </table>
            </div>

            <!-- Custom Package Action Link -->
            <div class="custom-package-wrapper">
                <a href="#" class="custom-package-link">
                    <span>Request Custom Package</span>
                    <svg class="icon icon-xs arrow-icon" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"></path>
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <!-- Engineering Discipline Section -->
    <section class="discipline-section">
        <div class="container discipline-grid">
            <!-- Left Side: Teal Stat Card -->
            <div class="discipline-stat-card">
                <span class="card-meta-tag">WHY HYDROSHIELD</span>
                
                <div class="stat-block">
                    <span class="stat-number">98.6%</span>
                    <p class="stat-desc">Client-reported leak-free rate across projects still within warranty period, audited annually.</p>
                </div>
                
                <div class="card-divider"></div>
                
                <div class="stat-block">
                    <span class="stat-number">10 yr</span>
                    <p class="stat-desc">Maximum warranty coverage on premium roof and industrial systems.</p>
                </div>
            </div>

            <!-- Right Side: Details List -->
            <div class="discipline-details">
                <h2 class="discipline-title">Engineering discipline, not guesswork</h2>
                
                <div class="discipline-list">
                    <!-- Item 1 -->
                    <div class="discipline-item">
                        <span class="item-num">01</span>
                        <div class="item-body">
                            <h4 class="item-title">Certified Engineers</h4>
                            <p class="item-desc">Every project scoped and signed off by a licensed structural or civil engineer.</p>
                        </div>
                    </div>
                    <!-- Item 2 -->
                    <div class="discipline-item">
                        <span class="item-num">02</span>
                        <div class="item-body">
                            <h4 class="item-title">Experienced Technicians</h4>
                            <p class="item-desc">Application crews factory-trained and certified by our chemical partners.</p>
                        </div>
                    </div>
                    <!-- Item 3 -->
                    <div class="discipline-item">
                        <span class="item-num">03</span>
                        <div class="item-body">
                            <h4 class="item-title">Premium Construction Chemicals</h4>
                            <p class="item-desc">Sourced from globally recognised waterproofing and coating manufacturers.</p>
                        </div>
                    </div>
                    <!-- Item 4 -->
                    <div class="discipline-item">
                        <span class="item-num">04</span>
                        <div class="item-body">
                            <h4 class="item-title">Quality Assurance</h4>
                            <p class="item-desc">Multi-stage inspection checkpoints before any warranty is issued.</p>
                        </div>
                    </div>
                    <!-- Item 5 -->
                    <div class="discipline-item">
                        <span class="item-num">05</span>
                        <div class="item-body">
                            <h4 class="item-title">Long-term Warranty</h4>
                            <p class="item-desc">Written warranty coverage up to 10 years on qualifying systems.</p>
                        </div>
                    </div>
                    <!-- Item 6 -->
                    <div class="discipline-item">
                        <span class="item-num">06</span>
                        <div class="item-body">
                            <h4 class="item-title">Modern Equipment</h4>
                            <p class="item-desc">Hot-air welders, spray rigs and moisture-mapping instruments on every job.</p>
                        </div>
                    </div>
                    <!-- Item 7 -->
                    <div class="discipline-item">
                        <span class="item-num">07</span>
                        <div class="item-body">
                            <h4 class="item-title">Nationwide Service</h4>
                            <p class="item-desc">Regional depots enabling site visits across all major divisions.</p>
                        </div>
                    </div>
                    <!-- Item 8 -->
                    <div class="discipline-item">
                        <span class="item-num">08</span>
                        <div class="item-body">
                            <h4 class="item-title">After-sales Support</h4>
                            <p class="item-desc">Scheduled warranty check-ins and rapid-response repair line.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Service Coverage Section -->
    <section class="coverage-section">
        <div class="container coverage-grid">
            <!-- Left Side: Interactive Map Card -->
            <div class="map-card-wrapper">
                <div class="map-container">
                    <!-- Bangladesh Map Shape (using inline SVG for crisp rendering) -->
                    <svg class="map-svg" viewBox="0 0 300 400" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M120 70C130 50 150 40 170 50C190 60 180 80 190 90C200 100 215 110 200 130C185 150 205 170 215 190C225 210 210 230 195 240C180 250 175 270 170 290C165 310 150 330 130 340C110 350 90 330 85 310C80 290 95 270 90 250C85 230 70 210 75 190C80 170 95 150 90 130C85 110 95 90 110 80C115 75 115 75 120 70Z" fill="#d1e0dd" />
                    </svg>

                    <!-- Markers -->
                    <div class="map-marker pin-rangpur" style="top: 20%; left: 35%;">
                        <span class="marker-dot"></span>
                        <span class="marker-label">Rangpur</span>
                    </div>
                    
                    <div class="map-marker pin-mymensingh" style="top: 18%; left: 63%;">
                        <span class="marker-dot"></span>
                        <span class="marker-label">Mymensingh</span>
                    </div>

                    <div class="map-marker pin-rajshahi" style="top: 36%; left: 40%;">
                        <span class="marker-dot"></span>
                        <span class="marker-label">Rajshahi</span>
                    </div>

                    <div class="map-marker pin-sylhet" style="top: 36%; left: 75%;">
                        <span class="marker-dot"></span>
                        <span class="marker-label">Sylhet</span>
                    </div>

                    <div class="map-marker pin-dhaka active-marker" style="top: 55%; left: 54%;">
                        <span class="marker-dot-large"></span>
                        <span class="marker-label bold-label">Dhaka</span>
                    </div>

                    <div class="map-marker pin-chattogram" style="top: 76%; left: 70%;">
                        <span class="marker-dot"></span>
                        <span class="marker-label">Chattogram</span>
                    </div>

                    <div class="map-marker pin-khulna" style="top: 80%; left: 35%;">
                        <span class="marker-dot"></span>
                        <span class="marker-label">Khulna</span>
                    </div>

                    <div class="map-marker pin-barishal" style="top: 86%; left: 47%;">
                        <span class="marker-dot"></span>
                        <span class="marker-label">Barishal</span>
                    </div>
                </div>
            </div>

            <!-- Right Side: Text & City List -->
            <div class="coverage-details">
                <span class="coverage-tag">• SERVICE COVERAGE AREAS</span>
                <h2 class="coverage-title">Site teams across Bangladesh</h2>
                <p class="coverage-subtitle">
                    Free inspections dispatched from regional depots — same-week scheduling in major divisions.
                </p>

                <div class="city-list-grid">
                    <!-- Column 1 -->
                    <div class="city-col">
                        <div class="city-item">
                            <span class="city-bullet"></span>
                            <span class="city-name">Dhaka</span>
                        </div>
                        <div class="city-item">
                            <span class="city-bullet"></span>
                            <span class="city-name">Khulna</span>
                        </div>
                        <div class="city-item">
                            <span class="city-bullet"></span>
                            <span class="city-name">Sylhet</span>
                        </div>
                        <div class="city-item">
                            <span class="city-bullet"></span>
                            <span class="city-name">Rangpur</span>
                        </div>
                    </div>
                    <!-- Column 2 -->
                    <div class="city-col">
                        <div class="city-item">
                            <span class="city-bullet"></span>
                            <span class="city-name">Chattogram</span>
                        </div>
                        <div class="city-item">
                            <span class="city-bullet"></span>
                            <span class="city-name">Rajshahi</span>
                        </div>
                        <div class="city-item">
                            <span class="city-bullet"></span>
                            <span class="city-name">Barishal</span>
                        </div>
                        <div class="city-item">
                            <span class="city-bullet"></span>
                            <span class="city-name">Mymensingh</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Help Today Section -->
    <section class="cta-help-section">
        <div class="cta-help-overlay"></div>
        <div class="container cta-help-content">
            <span class="cta-help-tag">• GET EXPERT HELP TODAY</span>
            <h2 class="cta-help-title">Need Professional Waterproofing Experts?</h2>
            <p class="cta-help-subtitle">
                Speak to a certified engineer today. Free site inspection, transparent quotation, no obligation.
            </p>

            <!-- CTA Buttons -->
            <div class="cta-help-btn-group">
                <a href="#" class="btn-cta-inspection">
                    <svg class="icon" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z"></path>
                    </svg>
                    <span>Book Free Inspection</span>
                </a>
                <a href="#" class="btn-cta-quotation">
                    <svg class="icon" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 14.25v2.25m3-4.5v4.5m3-6.75v6.75m3-9v9M6 20.25h12A2.25 2.25 0 0020.25 18V6A2.25 2.25 0 0018 3.75H6A2.25 2.25 0 003.75 6v12A2.25 2.25 0 006 20.25z"></path>
                    </svg>
                    <span>Request Quotation</span>
                </a>
                <a href="#" class="btn-cta-call">
                    <svg class="icon" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-2.824-1.802-5.14-4.118-6.942-6.94l1.293-.97c.362-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H3.6c-1.243 0-2.25 1.007-2.25 2.25v2.25z"></path>
                    </svg>
                    <span>Call Expert</span>
                </a>
                <a href="#" class="btn-cta-whatsapp">
                    <svg class="icon" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946C.06 5.348 5.397.01 12.008.01c3.202.001 6.212 1.246 8.477 3.514 2.266 2.268 3.507 5.28 3.505 8.484-.004 6.657-5.34 11.997-11.953 11.997-2.005-.001-3.973-.504-5.73-1.464L0 24zm6.59-4.846c1.6.95 3.197 1.451 4.785 1.453 5.312 0 9.637-4.307 9.64-9.605.002-2.567-1-4.982-2.822-6.799-1.82-1.818-4.24-2.82-6.81-2.82-5.32 0-9.645 4.307-9.648 9.605-.001 1.777.495 3.505 1.436 5.045l-1.012 3.7.195-.195z"></path>
                    </svg>
                    <span>WhatsApp</span>
                </a>
            </div>

            <!-- Features Checklist -->
            <div class="cta-help-checklist">
                <div class="chk-item">
                    <span class="chk-tick">✓</span>
                    <span>Free Inspection</span>
                </div>
                <div class="chk-item">
                    <span class="chk-tick">✓</span>
                    <span>24-Hour Response</span>
                </div>
                <div class="chk-item">
                    <span class="chk-tick">✓</span>
                    <span>Written Warranty</span>
                </div>
                <div class="chk-item">
                    <span class="chk-tick">✓</span>
                    <span>No Hidden Charges</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Localized Footer Section -->
    <footer class="site-footer">
        <div class="container">
            <!-- 5-column Links Grid -->
            <div class="footer-links-grid">
                <!-- Brand Column -->
                <div class="footer-brand-col">
                    <a href="#" class="footer-logo">
                        <div class="logo-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" fill="#005c4e"/>
                                <path d="M12 8v8M9 11h6" stroke="white" stroke-width="2"/>
                            </svg>
                        </div>
                        <span style="color: #004c54; font-weight: 800; font-size: 1.35rem; font-family: 'Outfit', sans-serif;">HydroShield</span>
                    </a>
                    <p class="footer-brand-desc">Pakistan's trusted waterproofing and heat proofing specialists since 2009.</p>
                    
                    <div class="footer-certifications">
                        <span class="cert-title">CERTIFIED BY</span>
                        <div class="cert-pills">
                            <span class="cert-pill">ISO 9001</span>
                            <span class="cert-pill">PSQCA</span>
                            <span class="cert-pill">Sika Partner</span>
                            <span class="cert-pill">Fosroc</span>
                        </div>
                    </div>

                    <div class="footer-socials">
                        <a href="#" class="social-icon">fb</a>
                        <a href="#" class="social-icon">in</a>
                        <a href="#" class="social-icon">yt</a>
                        <a href="#" class="social-icon">wa</a>
                    </div>
                </div>

                <!-- Column 2: Solutions -->
                <div class="footer-links-col">
                    <h4 class="footer-col-title">Solutions</h4>
                    <ul class="footer-links-list">
                        <li><a href="#">Roof Waterproofing</a></li>
                        <li><a href="#">Heat Proofing</a></li>
                        <li><a href="#">Basement Waterproofing</a></li>
                        <li><a href="#">Water Tank Sealing</a></li>
                        <li><a href="#">Wall Damp Proofing</a></li>
                    </ul>
                </div>

                <!-- Column 3: Products -->
                <div class="footer-links-col">
                    <h4 class="footer-col-title">Products</h4>
                    <ul class="footer-links-list">
                        <li><a href="#">Crystalline Systems</a></li>
                        <li><a href="#">Membrane Systems</a></li>
                        <li><a href="#">Heat Proof Coatings</a></li>
                        <li><a href="#">Sealants & Adhesives</a></li>
                        <li><a href="#">View All Products</a></li>
                    </ul>
                </div>

                <!-- Column 4: Services -->
                <div class="footer-links-col">
                    <h4 class="footer-col-title">Services</h4>
                    <ul class="footer-links-list">
                        <li><a href="#">Site Inspection</a></li>
                        <li><a href="#">Professional Installation</a></li>
                        <li><a href="#">Annual Maintenance</a></li>
                        <li><a href="#">Technical Consultation</a></li>
                        <li><a href="#">Emergency Repair</a></li>
                    </ul>
                </div>

                <!-- Column 5: Company -->
                <div class="footer-links-col">
                    <h4 class="footer-col-title">Company</h4>
                    <ul class="footer-links-list">
                        <li><a href="#">About HydroShield</a></li>
                        <li><a href="#">Our Engineers</a></li>
                        <li><a href="#">Case Studies</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Careers</a></li>
                    </ul>
                </div>
            </div>

            <!-- Two Dark Teal Cards Row -->
            <div class="footer-cards-row">
                <!-- Newsletter Card -->
                <div class="footer-card-box">
                    <h4 class="footer-box-title">Newsletter</h4>
                    <p class="footer-box-desc">Product updates, seasonal tips, and exclusive offers.</p>
                    <form class="newsletter-form" onsubmit="event.preventDefault();">
                        <input type="email" placeholder="your@email.com" class="newsletter-input" required>
                        <button type="submit" class="newsletter-submit">Subscribe</button>
                    </form>
                </div>

                <!-- Business Hours Card -->
                <div class="footer-card-box">
                    <h4 class="footer-box-title">Business Hours</h4>
                    <div class="hours-grid" style="display: flex; flex-direction: column; gap: 0.5rem; width: 100%; font-size: 0.92rem;">
                        <div style="display: flex; justify-content: space-between;">
                            <span style="font-weight: 600;">Monday – Friday</span>
                            <span>9:00 am – 6:00 pm</span>
                        </div>
                        <div style="display: flex; justify-content: space-between;">
                            <span style="font-weight: 600;">Saturday</span>
                            <span>9:00 am – 4:00 pm</span>
                        </div>
                        <div style="display: flex; justify-content: space-between;">
                            <span style="font-weight: 600;">Sunday</span>
                            <span>Closed</span>
                        </div>
                        <div style="display: flex; justify-content: space-between;">
                            <span style="font-weight: 600;">Emergency Line</span>
                            <span>24/7 Available</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bottom Row: Copyright & Payments -->
            <div class="footer-bottom-row" style="display: flex; justify-content: space-between; align-items: center; border-top: 1px solid rgba(0,0,0,0.05); padding-top: 2rem; flex-wrap: wrap; gap: 1rem;">
                <p class="copyright-text" style="color: #475569; font-size: 0.9rem; margin: 0;">© 2025 HydroShield Construction Chemicals (Pvt.) Ltd. All rights reserved.</p>
                <div class="payment-partners" style="display: flex; align-items: center; gap: 0.5rem; flex-wrap: wrap;">
                    <span style="font-size: 0.82rem; font-weight: 600; color: #475569;">We Accept:</span>
                    <span class="cert-pill" style="font-size: 0.75rem; font-weight: 700; padding: 0.25rem 0.6rem; border: 1px solid #cbd5e1; border-radius: 4px; background: #fff;">Visa</span>
                    <span class="cert-pill" style="font-size: 0.75rem; font-weight: 700; padding: 0.25rem 0.6rem; border: 1px solid #cbd5e1; border-radius: 4px; background: #fff;">Mastercard</span>
                    <span class="cert-pill" style="font-size: 0.75rem; font-weight: 700; padding: 0.25rem 0.6rem; border: 1px solid #cbd5e1; border-radius: 4px; background: #fff;">JazzCash</span>
                    <span class="cert-pill" style="font-size: 0.75rem; font-weight: 700; padding: 0.25rem 0.6rem; border: 1px solid #cbd5e1; border-radius: 4px; background: #fff;">Easypaisa</span>
                    <span class="cert-pill" style="font-size: 0.75rem; font-weight: 700; padding: 0.25rem 0.6rem; border: 1px solid #cbd5e1; border-radius: 4px; background: #fff;">Bank Transfer</span>
                </div>
            </div>
        </div>
    </footer>

</body>
</html>

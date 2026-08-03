<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HydroShield - Construction Chemicals Bangladesh</title>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Vite Assets -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

    <!-- Top Bar -->
    <header class="top-bar">
        <div class="container top-bar-content">
            <div class="contact-info">
                <a href="tel:+8801700000000" class="contact-link">
                    <svg class="icon" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path>
                    </svg>
                    <span>+880 1700 000000</span>
                </a>
                <a href="mailto:info@hydroshield.com.bd" class="contact-link">
                    <svg class="icon" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
                        <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                    </svg>
                    <span>info@hydroshield.com.bd</span>
                </a>
            </div>
            <div class="top-bar-right">
                <a href="#" class="top-link">Chat Support</a>
                <span class="separator">|</span>
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
                <li><a href="#" class="active">Home</a></li>
                <li><a href="#">Solution</a></li>
                <li><a href="/products">Products</a></li>
                <li><a href="/services">Services</a></li>
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

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="hero-bg"></div>
        <div class="hero-overlay"></div>
        <div class="container hero-container">
            <!-- Hero Left: Content -->
            <div class="hero-content">
                <div class="platform-badge">
                    <span class="badge-dot"></span>
                    <span>Bangladesh's Leading Construction Chemical Platform</span>
                </div>
                
                <h1 class="hero-title">
                    Protect Your Building with Professional Waterproofing & Heat Proofing
                </h1>
                
                <p class="hero-subtitle">
                    High-performance construction chemicals and expert application services for residential, commercial, and industrial buildings across Bangladesh.
                </p>

                <!-- Search Bar -->
                <div class="search-box">
                    <input type="text" placeholder="Search product..." class="search-input">
                    <button class="search-submit">
                        <svg class="icon" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                        <span>Search</span>
                    </button>
                </div>

                <!-- Stats Footer -->
                <div class="hero-stats">
                    <div class="stat-item">
                        <div class="stat-number">15+</div>
                        <div class="stat-label">Years Experience</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">8,000+</div>
                        <div class="stat-label">Projects Done</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">99%</div>
                        <div class="stat-label">Client Satisfaction</div>
                    </div>
                </div>
            </div>

            <!-- Hero Right: Quick Request Form -->
            <div class="hero-form-wrapper">
                <div class="request-card">
                    <h3 class="card-title">QUICK SERVICE REQUEST</h3>
                    <form class="request-form">
                        <div class="form-group">
                            <input type="text" placeholder="Your Name" required class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="tel" placeholder="Phone Number" required class="form-control">
                        </div>
                        <div class="form-group">
                            <select class="form-control select-control" required>
                                <option value="" disabled selected>Select Service</option>
                                <option value="waterproofing">Waterproofing</option>
                                <option value="heatproofing">Heat Proofing</option>
                                <option value="chemical-treatment">Chemical Treatment</option>
                            </select>
                        </div>
                        <button type="submit" class="submit-btn">Get Free Inspection</button>
                    </form>
                    <p class="card-footer-text">No commitment, 100% free consultation.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Solutions Section -->
    <section class="solutions-section">
        <div class="container">
            <div class="solutions-header">
                <span class="solutions-badge">OUR SOLUTIONS</span>
                <h2 class="solutions-title">Built to Protect. Engineered to Last.</h2>
                <p class="solutions-subtitle">
                    Two specialized solution lines — backed by 15 years of field experience, ISO-certified products, and certified applicator teams.
                </p>
            </div>

            <div class="solutions-grid">
                <!-- Waterproofing Card -->
                <div class="solution-card">
                    <div class="card-header-img" style="background-image: url('/waterproofing.jpg');">
                        <div class="img-overlay overlay-blue"></div>
                        <div class="header-img-content">
                            <span class="card-tagline">STOP LEAKS. PROTECT STRUCTURES.</span>
                            <h3 class="card-headline">Waterproofing Solutions</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <p class="card-desc">
                            Certified waterproofing systems that shield your building from water infiltration, concrete degradation, and long-term structural damage — with up to 10-year written warranty.
                        </p>
                        
                        <div class="features-list">
                            <div class="feature-item">
                                <svg class="check-icon" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>Crystalline & membrane systems</span>
                            </div>
                            <div class="feature-item">
                                <svg class="check-icon" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>Concrete crack injection</span>
                            </div>
                            <div class="feature-item">
                                <svg class="check-icon" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>Tank & basement sealing</span>
                            </div>
                            <div class="feature-item">
                                <svg class="check-icon" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>Expansion joint treatment</span>
                            </div>
                        </div>

                        <div class="apps-section">
                            <h4 class="apps-title">Applications</h4>
                            <div class="apps-badges">
                                <span class="app-badge">Flat Roofs</span>
                                <span class="app-badge">Basements</span>
                                <span class="app-badge">Water Tanks</span>
                                <span class="app-badge">Retaining Walls</span>
                                <span class="app-badge">Bathrooms</span>
                            </div>
                        </div>

                        <a href="#" class="view-solution-link">
                            <span>View Solution</span>
                            <svg class="arrow-icon" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Heatproofing Card -->
                <div class="solution-card">
                    <div class="card-header-img" style="background-image: url('/heatproofing.jpg');">
                        <div class="img-overlay overlay-orange"></div>
                        <div class="header-img-content">
                            <span class="card-tagline">CUT ROOF HEAT. LOWER ENERGY BILLS.</span>
                            <h3 class="card-headline">Heat Proofing Solutions</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <p class="card-desc">
                            Advanced reflective and elastomeric coatings that reduce roof surface temperature by up to 20°C, dramatically cutting indoor heat and air-conditioning costs all year round.
                        </p>
                        
                        <div class="features-list">
                            <div class="feature-item">
                                <svg class="check-icon" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>Solar-reflective elastomeric coatings</span>
                            </div>
                            <div class="feature-item">
                                <svg class="check-icon" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>Polyurethane foam systems</span>
                            </div>
                            <div class="feature-item">
                                <svg class="check-icon" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>Aluminum reflective sheets</span>
                            </div>
                            <div class="feature-item">
                                <svg class="check-icon" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>Multi-layer thermal barriers</span>
                            </div>
                        </div>

                        <div class="apps-section">
                            <h4 class="apps-title">Applications</h4>
                            <div class="apps-badges">
                                <span class="app-badge">Residential Roofs</span>
                                <span class="app-badge">Factory Sheds</span>
                                <span class="app-badge">Commercial Buildings</span>
                                <span class="app-badge">Warehouses</span>
                            </div>
                        </div>

                        <a href="#" class="view-solution-link">
                            <span>View Solution</span>
                            <svg class="arrow-icon" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Problems We Solve Section -->
    <section class="problems-section">
        <div class="container">
            <div class="problems-header">
                <span class="problems-badge">PROBLEMS WE SOLVE</span>
                <h2 class="problems-title">Every Building Problem Has a Proven Solution</h2>
                <p class="problems-subtitle">
                    We've diagnosed and resolved over 8,000 unique construction problems. Hover any card to see the exact solution we apply.
                </p>
            </div>

            <div class="problems-grid">
                <!-- Card 1: Roof Leakage -->
                <div class="problem-card">
                    <!-- Default Side -->
                    <div class="problem-card-content">
                        <div class="problem-icon-wrapper">
                            <svg class="problem-icon" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 9.172V5L8 4z"></path>
                            </svg>
                        </div>
                        <h3 class="problem-card-title">Roof Leakage</h3>
                        <p class="problem-card-desc">
                            Water pooling and seeping through flat or sloped roofs during rain.
                        </p>
                        <a href="#" class="see-solution-link">
                            <span>See Solution</span>
                            <svg class="arrow-icon" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                        </a>
                    </div>
                    <!-- Solution Hover Overlay -->
                    <div class="solution-overlay">
                        <h3 class="solution-title">Waterproofing Solution</h3>
                        <p class="solution-desc">
                            We apply multi-layer elastomeric PU membrane coating reinforced with geotextile fabric to form a seamless, flexible, 100% waterproof seal.
                        </p>
                        <span class="solution-action">Get Quote &rarr;</span>
                    </div>
                </div>

                <!-- Card 2: Basement Leakage -->
                <div class="problem-card">
                    <div class="problem-card-content">
                        <div class="problem-icon-wrapper">
                            <svg class="problem-icon" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                            </svg>
                        </div>
                        <h3 class="problem-card-title">Basement Leakage</h3>
                        <p class="problem-card-desc">
                            Hydrostatic pressure forcing water through foundation walls and floors.
                        </p>
                        <a href="#" class="see-solution-link">
                            <span>See Solution</span>
                            <svg class="arrow-icon" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                        </a>
                    </div>
                    <div class="solution-overlay">
                        <h3 class="solution-title">Basement Solution</h3>
                        <p class="solution-desc">
                            High-pressure polyurethane chemical injection grouting to stop active water leaks, combined with crystalline slurry coating.
                        </p>
                        <span class="solution-action">Get Quote &rarr;</span>
                    </div>
                </div>

                <!-- Card 3: Wall Dampness -->
                <div class="problem-card">
                    <div class="problem-card-content">
                        <div class="problem-icon-wrapper">
                            <svg class="problem-icon" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path>
                            </svg>
                        </div>
                        <h3 class="problem-card-title">Wall Dampness</h3>
                        <p class="problem-card-desc">
                            Rising moisture and white efflorescence appearing on interior walls.
                        </p>
                        <a href="#" class="see-solution-link">
                            <span>See Solution</span>
                            <svg class="arrow-icon" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                        </a>
                    </div>
                    <div class="solution-overlay">
                        <h3 class="solution-title">Damp Proofing Solution</h3>
                        <p class="solution-desc">
                            Injection of silicone-based damp-proofing cream to create a permanent horizontal barrier, with anti-salt plastering treatment.
                        </p>
                        <span class="solution-action">Get Quote &rarr;</span>
                    </div>
                </div>

                <!-- Card 4: Extreme Roof Heat -->
                <div class="problem-card">
                    <div class="problem-card-content">
                        <div class="problem-icon-wrapper">
                            <svg class="problem-icon" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 002 2h-2a2 2 0 00-2-2z"></path>
                            </svg>
                        </div>
                        <h3 class="problem-card-title">Extreme Roof Heat</h3>
                        <p class="problem-card-desc">
                            Roof surface exceeding 70°C causing unbearable indoor temperatures.
                        </p>
                        <a href="#" class="see-solution-link">
                            <span>See Solution</span>
                            <svg class="arrow-icon" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                        </a>
                    </div>
                    <div class="solution-overlay">
                        <h3 class="solution-title">Heat Proofing Solution</h3>
                        <p class="solution-desc">
                            Application of thermal reflective coating (cool roof paint) to reflect up to 90% of solar radiation, cooling interiors by 5-10°C.
                        </p>
                        <span class="solution-action">Get Quote &rarr;</span>
                    </div>
                </div>

                <!-- Card 5: Factory / Shed Heat -->
                <div class="problem-card">
                    <div class="problem-card-content">
                        <div class="problem-icon-wrapper">
                            <svg class="problem-icon" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                            </svg>
                        </div>
                        <h3 class="problem-card-title">Factory / Shed Heat</h3>
                        <p class="problem-card-desc">
                            Industrial GI sheet roofs radiating heat onto work floors below.
                        </p>
                        <a href="#" class="see-solution-link">
                            <span>See Solution</span>
                            <svg class="arrow-icon" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                        </a>
                    </div>
                    <div class="solution-overlay">
                        <h3 class="solution-title">Industrial Insulation</h3>
                        <p class="solution-desc">
                            Ceramic-filled high reflective elastomeric coating combined with under-roof reflective bubble insulation to protect workspace heat index.
                        </p>
                        <span class="solution-action">Get Quote &rarr;</span>
                    </div>
                </div>

                <!-- Card 6: Water Tank Leakage -->
                <div class="problem-card">
                    <div class="problem-card-content">
                        <div class="problem-icon-wrapper">
                            <svg class="problem-icon" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 9.172V5L8 4z"></path>
                            </svg>
                        </div>
                        <h3 class="problem-card-title">Water Tank Leakage</h3>
                        <p class="problem-card-desc">
                            Cracks and pinholes in concrete overhead or underground tanks.
                        </p>
                        <a href="#" class="see-solution-link">
                            <span>See Solution</span>
                            <svg class="arrow-icon" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                        </a>
                    </div>
                    <div class="solution-overlay">
                        <h3 class="solution-title">Tank Waterproofing</h3>
                        <p class="solution-desc">
                            Application of non-toxic, food-grade epoxy coating or flexible cementitious coating to seal cracks and ensure drinking water safety.
                        </p>
                        <span class="solution-action">Get Quote &rarr;</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Recommended Products Section -->
    <section class="products-section">
        <div class="container">
            <div class="products-header">
                <span class="products-badge">RECOMMENDED PRODUCTS</span>
                <h2 class="products-title">Top Products for This Solution</h2>
            </div>

            <div class="products-grid">
                <!-- Product 1: UltraSeal 5000 -->
                <div class="product-card">
                    <div class="product-img-wrapper">
                        <img src="/product_ultraseal.jpg" alt="UltraSeal 5000" class="product-img">
                    </div>
                    <div class="product-body">
                        <span class="product-tag tag-bestseller">Bestseller</span>
                        <h3 class="product-card-title">UltraSeal 5000</h3>
                        <p class="product-card-desc">Hybrid Polyurethane Membrane</p>
                        
                        <div class="product-rating">
                            <svg class="star-icon" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <span class="rating-text">4.9</span>
                            <span class="rating-count">(120+ Reviews)</span>
                        </div>

                        <button class="add-to-cart-btn">
                            <svg class="cart-icon" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>
                            <span>Add to Cart</span>
                        </button>
                    </div>
                </div>

                <!-- Product 2: ThermoShield Pro -->
                <div class="product-card">
                    <div class="product-img-wrapper">
                        <img src="/product_thermoshield.jpg" alt="ThermoShield Pro" class="product-img">
                    </div>
                    <div class="product-body">
                        <span class="product-tag tag-eco">Eco-Friendly</span>
                        <h3 class="product-card-title">ThermoShield Pro</h3>
                        <p class="product-card-desc">Reflective Heat Barrier</p>
                        
                        <div class="product-rating">
                            <svg class="star-icon" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <span class="rating-text">4.8</span>
                            <span class="rating-count">(85 Reviews)</span>
                        </div>

                        <button class="add-to-cart-btn">
                            <svg class="cart-icon" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>
                            <span>Add to Cart</span>
                        </button>
                    </div>
                </div>

                <!-- Product 3: GroutMax Industrial -->
                <div class="product-card">
                    <div class="product-img-wrapper">
                        <img src="/product_groutmax.jpg" alt="GroutMax Industrial" class="product-img">
                    </div>
                    <div class="product-body">
                        <span class="product-tag tag-heavy">Heavy Duty</span>
                        <h3 class="product-card-title">GroutMax Industrial</h3>
                        <p class="product-card-desc">Crystalline Waterproofing</p>
                        
                        <div class="product-rating">
                            <svg class="star-icon" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <span class="rating-text">4.7</span>
                            <span class="rating-count">(200+ Reviews)</span>
                        </div>

                        <button class="add-to-cart-btn">
                            <svg class="cart-icon" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>
                            <span>Add to Cart</span>
                        </button>
                    </div>
                </div>

                <!-- Product 4: DampFix Injector -->
                <div class="product-card">
                    <div class="product-img-wrapper">
                        <img src="/product_dampfix.jpg" alt="DampFix Injector" class="product-img">
                    </div>
                    <div class="product-body">
                        <span class="product-tag tag-new">New Launch</span>
                        <h3 class="product-card-title">DampFix Injector</h3>
                        <p class="product-card-desc">Injection Damp Proofing</p>
                        
                        <div class="product-rating">
                            <svg class="star-icon" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <span class="rating-text">5.0</span>
                            <span class="rating-count">(12 Reviews)</span>
                        </div>

                        <button class="add-to-cart-btn">
                            <svg class="cart-icon" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>
                            <span>Add to Cart</span>
                        </button>
                    </div>
                </div>
            </div>

            <!-- View All Products Footer -->
            <div class="products-footer">
                <a href="#" class="view-all-link">
                    <span>View All Products</span>
                    <svg class="arrow-icon" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="services-section">
        <div class="container">
            <div class="services-header">
                <span class="services-badge">PROFESSIONAL SERVICES</span>
                <h2 class="services-title">Expert Application by Certified Teams</h2>
            </div>

            <div class="services-grid">
                <!-- Service 1: Roof Waterproofing -->
                <div class="service-card">
                    <div class="service-img-wrapper" style="background-image: url('/service_roof.jpg');">
                        <div class="service-badge-icon">
                            <svg fill="currentColor" viewBox="0 0 20 20">
                                <path d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 9.172V5L8 4z"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="service-body">
                        <h3 class="service-card-title">Roof Waterproofing</h3>
                        <p class="service-card-desc">Complete waterproofing system for flat and sloped roofs using certified membrane and crystalline products.</p>
                        
                        <div class="process-section">
                            <h4 class="process-title">Process</h4>
                            <ul class="process-list">
                                <li><span class="step-num">1</span> Surface inspection & repair</li>
                                <li><span class="step-num">2</span> Primer application</li>
                                <li><span class="step-num">3</span> Membrane installation</li>
                                <li><span class="step-num">4</span> Protection layer & warranty</li>
                            </ul>
                        </div>

                        <a href="#" class="book-service-link">
                            <span>Book Service</span>
                            <svg class="arrow-icon" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Service 2: Heat Proofing Treatment -->
                <div class="service-card">
                    <div class="service-img-wrapper" style="background-image: url('/service_heat.jpg');">
                        <div class="service-badge-icon">
                            <svg fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 2a1 1 0 011 1v2.586l.707-.707a1 1 0 011.414 1.414l-2.414 2.414a1 1 0 01-1.414 0L6.879 6.293a1 1 0 011.414-1.414l.707.707V3a1 1 0 011-1zm0 10a4 4 0 100-8 4 4 0 000 8z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="service-body">
                        <h3 class="service-card-title">Heat Proofing Treatment</h3>
                        <p class="service-card-desc">Multi-layer reflective coating system applied by certified technicians to dramatically cut roof temperatures.</p>
                        
                        <div class="process-section">
                            <h4 class="process-title">Process</h4>
                            <ul class="process-list">
                                <li><span class="step-num">1</span> Thermal assessment</li>
                                <li><span class="step-num">2</span> Surface preparation</li>
                                <li><span class="step-num">3</span> 3-coat application</li>
                                <li><span class="step-num">4</span> Quality check & report</li>
                            </ul>
                        </div>

                        <a href="#" class="book-service-link">
                            <span>Book Service</span>
                            <svg class="arrow-icon" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Service 3: Basement Waterproofing -->
                <div class="service-card">
                    <div class="service-img-wrapper" style="background-image: url('/service_basement.jpg');">
                        <div class="service-badge-icon">
                            <svg fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="service-body">
                        <h3 class="service-card-title">Basement Waterproofing</h3>
                        <p class="service-card-desc">Negative-side and positive-side waterproofing solutions including injection grouting and drainage systems.</p>
                        
                        <div class="process-section">
                            <h4 class="process-title">Process</h4>
                            <ul class="process-list">
                                <li><span class="step-num">1</span> Hydrostatic assessment</li>
                                <li><span class="step-num">2</span> Crack injection</li>
                                <li><span class="step-num">3</span> Membrane application</li>
                                <li><span class="step-num">4</span> Drainage installation</li>
                            </ul>
                        </div>

                        <a href="#" class="book-service-link">
                            <span>Book Service</span>
                            <svg class="arrow-icon" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Service 4: Free Site Inspection -->
                <div class="service-card">
                    <div class="service-img-wrapper" style="background-image: url('/service_inspection.jpg');">
                        <div class="service-badge-icon">
                            <svg fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="service-body">
                        <h3 class="service-card-title">Free Site Inspection</h3>
                        <p class="service-card-desc">An on-site visit by a qualified engineer to diagnose your exact problem and recommend the right solution.</p>
                        
                        <div class="process-section">
                            <h4 class="process-title">Process</h4>
                            <ul class="process-list">
                                <li><span class="step-num">1</span> Site visit booked</li>
                                <li><span class="step-num">2</span> Engineer assessment</li>
                                <li><span class="step-num">3</span> Photographic report</li>
                                <li><span class="step-num">4</span> Quotation within 24hrs</li>
                            </ul>
                        </div>

                        <a href="#" class="book-service-link">
                            <span>Book Service</span>
                            <svg class="arrow-icon" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Service 5: Annual Maintenance -->
                <div class="service-card">
                    <div class="service-img-wrapper" style="background-image: url('/service_maintenance.jpg');">
                        <div class="service-badge-icon">
                            <svg fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.533 1.533 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="service-body">
                        <h3 class="service-card-title">Annual Maintenance</h3>
                        <p class="service-card-desc">Scheduled maintenance visits to inspect, re-treat, and extend the life of your waterproofing or heat proofing system.</p>
                        
                        <div class="process-section">
                            <h4 class="process-title">Process</h4>
                            <ul class="process-list">
                                <li><span class="step-num">1</span> Annual inspection</li>
                                <li><span class="step-num">2</span> Crack & joint re-sealing</li>
                                <li><span class="step-num">3</span> Topcoat reapplication</li>
                                <li><span class="step-num">4</span> Warranty renewal</li>
                            </ul>
                        </div>

                        <a href="#" class="book-service-link">
                            <span>Book Service</span>
                            <svg class="arrow-icon" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Service 6: Annual Maintenance (Variation) -->
                <div class="service-card">
                    <div class="service-img-wrapper" style="background-image: url('/service_maintenance.jpg');">
                        <div class="service-badge-icon">
                            <svg fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.533 1.533 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="service-body">
                        <h3 class="service-card-title">Annual Maintenance</h3>
                        <p class="service-card-desc">Scheduled maintenance visits to inspect, re-treat, and extend the life of your waterproofing or heat proofing system.</p>
                        
                        <div class="process-section">
                            <h4 class="process-title">Process</h4>
                            <ul class="process-list">
                                <li><span class="step-num">1</span> Annual inspection</li>
                                <li><span class="step-num">2</span> Crack & joint re-sealing</li>
                                <li><span class="step-num">3</span> Topcoat reapplication</li>
                                <li><span class="step-num">4</span> Warranty renewal</li>
                            </ul>
                        </div>

                        <a href="#" class="book-service-link">
                            <span>Book Service</span>
                            <svg class="arrow-icon" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- View All Products Footer -->
            <div class="services-footer">
                <a href="#" class="view-all-products-link">
                    <span>View All Products</span>
                    <svg class="arrow-icon" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <!-- How We Work Section -->
    <section class="how-we-work-section">
        <div class="container">
            <div class="work-header">
                <span class="work-badge">HOW WE WORK</span>
                <h2 class="work-title">From Inspection to Warranty — We Handle Everything</h2>
                <p class="work-subtitle">A streamlined 5-step process designed to deliver results with zero hassle for you.</p>
            </div>

            <div class="work-steps-grid">
                <!-- Step 1 -->
                <div class="work-step-card">
                    <div class="step-icon-box">
                        <svg class="step-icon" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                        </svg>
                        <span class="step-badge-num">01</span>
                    </div>
                    <h3 class="step-card-title">Site Inspection</h3>
                    <p class="step-card-desc">Certified engineer visits within 24 hours for an on-site assessment and photographic report.</p>
                </div>

                <!-- Step 2 -->
                <div class="work-step-card">
                    <div class="step-icon-box">
                        <svg class="step-icon" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 9.172V5L8 4z"></path>
                        </svg>
                        <span class="step-badge-num">02</span>
                    </div>
                    <h3 class="step-card-title">Problem Analysis</h3>
                    <p class="step-card-desc">Lab-grade diagnosis of the root cause with a written technical recommendation.</p>
                </div>

                <!-- Step 3 -->
                <div class="work-step-card">
                    <div class="step-icon-box">
                        <svg class="step-icon" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 17v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2m3.293-7.707a1 1 0 111.414 1.414L9 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4z"></path>
                        </svg>
                        <span class="step-badge-num">03</span>
                    </div>
                    <h3 class="step-card-title">Quotation</h3>
                    <p class="step-card-desc">Fixed, transparent pricing delivered within 24 hours — no hidden charges, ever.</p>
                </div>

                <!-- Step 4 -->
                <div class="work-step-card">
                    <div class="step-icon-box">
                        <svg class="step-icon" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.533 1.533 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z"></path>
                        </svg>
                        <span class="step-badge-num">04</span>
                    </div>
                    <h3 class="step-card-title">Installation</h3>
                    <p class="step-card-desc">Certified applicators execute the work with product QC checkpoints at every stage.</p>
                </div>

                <!-- Step 5 -->
                <div class="work-step-card">
                    <div class="step-icon-box">
                        <svg class="step-icon" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                        </svg>
                        <span class="step-badge-num">05</span>
                    </div>
                    <h3 class="step-card-title">Warranty Support</h3>
                    <p class="step-card-desc">Written warranty, annual inspection visits, and a dedicated 24/7 support helpline.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section class="why-choose-us-section">
        <div class="container">
            <div class="why-header">
                <span class="why-badge">WHY CHOOSE US</span>
                <h2 class="why-title">The Most Trusted Name in Construction Chemicals</h2>
            </div>

            <!-- Stats Grid Row -->
            <div class="why-stats-grid">
                <!-- Stat Card 1 -->
                <div class="why-stat-card">
                    <div class="why-stat-icon">
                        <svg fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <div class="why-stat-num">15+</div>
                    <div class="why-stat-label">Years in Industry</div>
                </div>

                <!-- Stat Card 2 -->
                <div class="why-stat-card">
                    <div class="why-stat-icon">
                        <svg fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <div class="why-stat-num">8,000+</div>
                    <div class="why-stat-label">Projects Completed</div>
                </div>

                <!-- Stat Card 3 -->
                <div class="why-stat-card">
                    <div class="why-stat-icon">
                        <svg fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M7 2a1 1 0 00-.707 1.707L7 4.414V7a1 1 0 002 0V4.414l.707-.707A1 1 0 009 2H7zm2 6a1 1 0 00-2 0v5a3 3 0 006 0V8a1 1 0 10-2 0v5a1 1 0 11-2 0V8z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <div class="why-stat-num">200+</div>
                    <div class="why-stat-label">Chemical Products</div>
                </div>

                <!-- Stat Card 4 -->
                <div class="why-stat-card">
                    <div class="why-stat-icon">
                        <svg fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <div class="why-stat-num">50+</div>
                    <div class="why-stat-label">Certified Engineers</div>
                </div>
            </div>

            <!-- Features Grid Rows -->
            <div class="why-features-grid">
                <!-- Feature 1 -->
                <div class="why-feature-card">
                    <div class="feature-card-icon">
                        <svg fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                        </svg>
                    </div>
                    <div class="feature-card-content">
                        <h4 class="feature-card-title">ISO Certified Products</h4>
                        <p class="feature-card-desc">Every product carries ISO 9001 quality certification and PSQCA approval.</p>
                    </div>
                </div>

                <!-- Feature 2 -->
                <div class="why-feature-card">
                    <div class="feature-card-icon">
                        <svg fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4M7.5 8.25h9m-9 3h9m-9 3h9m-9 3h9M3.375 3.75h17.25c.621 0 1.125.504 1.125 1.125v15c0 .621-.504 1.125-1.125 1.125H3.375c-.621 0-1.125-.504-1.125-1.125v-15c0-.621.504-1.125 1.125-1.125z"></path>
                        </svg>
                    </div>
                    <div class="feature-card-content">
                        <h4 class="feature-card-title">Trained Engineers</h4>
                        <p class="feature-card-desc">Applicators certified directly by Sika, Fosroc, and BASF training programs.</p>
                    </div>
                </div>

                <!-- Feature 3 -->
                <div class="why-feature-card">
                    <div class="feature-card-icon">
                        <svg fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
                    </div>
                    <div class="feature-card-content">
                        <h4 class="feature-card-title">Written Warranty</h4>
                        <p class="feature-card-desc">Formal written warranties on every project — up to 10 years coverage.</p>
                    </div>
                </div>

                <!-- Feature 4 -->
                <div class="why-feature-card">
                    <div class="feature-card-icon">
                        <svg fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 18.75a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0h6m-9 0H3.375a1.125 1.125 0 01-1.125-1.125V14.25m17.25 4.5a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0h1.125c.621 0 1.129-.504 1.129-1.125V11.25M3 14.25h16.5M3 14.25v-3.75A1.125 1.125 0 014.125 9.375h15.75A1.125 1.125 0 0121 10.5v3.75m-18 0h18M12 9.375V3.75m0 5.625h16.5m-16.5 0v3.75m16.5-3.75v3.75"></path>
                        </svg>
                    </div>
                    <div class="feature-card-content">
                        <h4 class="feature-card-title">Nationwide Delivery</h4>
                        <p class="feature-card-desc">Products shipped to 40+ cities within 24–48 hours with live tracking.</p>
                    </div>
                </div>

                <!-- Feature 5 -->
                <div class="why-feature-card">
                    <div class="feature-card-icon">
                        <svg fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.114 5.636a9 9 0 010 12.728M16.463 8.288a5.25 5.25 0 010 7.424M6.75 8.25l4.72-4.72a.75.75 0 011.28.53v15.88a.75.75 0 01-1.28.53l-4.72-4.72H4.51c-.88 0-1.704-.507-1.938-1.354A9.01 9.01 0 012.25 12c0-.83.112-1.633.322-2.396C2.806 8.756 3.63 8.25 4.51 8.25H6.75z"></path>
                        </svg>
                    </div>
                    <div class="feature-card-content">
                        <h4 class="feature-card-title">24/7 Technical Support</h4>
                        <p class="feature-card-desc">Dedicated WhatsApp and phone hotline for all product and application queries.</p>
                    </div>
                </div>

                <!-- Feature 6 -->
                <div class="why-feature-card">
                    <div class="feature-card-icon">
                        <svg fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 6.75V15m6-6v8m-9-3.75h12M3 12a9 9 0 1118 0 9 9 0 01-18 0z"></path>
                        </svg>
                    </div>
                    <div class="feature-card-content">
                        <h4 class="feature-card-title">40+ Cities Covered</h4>
                        <p class="feature-card-desc">Active service teams across Dhaka, Chittagong, Sylhet, and beyond.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Industries We Serve Section -->
    <section class="industries-section">
        <div class="container">
            <div class="industries-header">
                <span class="industries-badge">INDUSTRIES WE SERVE</span>
                <h2 class="industries-title">Every Sector. Every Structure.</h2>
                <p class="industries-subtitle">Our certified solutions protect buildings across all major industry sectors in Bangladesh.</p>
            </div>

            <div class="industries-grid">
                <!-- Card 1: Residential -->
                <div class="industry-card">
                    <div class="industry-icon-wrapper">
                        <svg class="industry-icon" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path>
                        </svg>
                    </div>
                    <h3 class="industry-card-title">Residential</h3>
                    <p class="industry-card-desc">Villas, apartments, and housing societies across Bangladesh.</p>
                </div>

                <!-- Card 2: Commercial -->
                <div class="industry-card">
                    <div class="industry-icon-wrapper">
                        <svg class="industry-icon" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M4 4a2 2 0 012-2h8a2 2 0 012 2v12a1 1 0 110 2h-3a1 1 0 01-1-1v-2a1 1 0 00-1-1H7a1 1 0 00-1 1v2a1 1 0 01-1 1H2a1 1 0 110-2V4zm2 2h2v2H6V6zm2 4H6v2h2v-2zm2-4h2v2h-2V6zm2 4h-2v2h2v-2z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <h3 class="industry-card-title">Commercial</h3>
                    <p class="industry-card-desc">Offices, plazas, malls, and high-rise commercial buildings.</p>
                </div>

                <!-- Card 3: Industrial -->
                <div class="industry-card">
                    <div class="industry-icon-wrapper">
                        <svg class="industry-icon" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M5 2a1 1 0 011 1v1h1a1 1 0 011 1v3.586l.707-.707a1 1 0 111.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 111.414-1.414l.707.707V5H5a1 1 0 010-2h1zM4 14a2 2 0 012-2h8a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <h3 class="industry-card-title">Industrial</h3>
                    <p class="industry-card-desc">Factories, processing plants, and manufacturing facilities.</p>
                </div>

                <!-- Card 4: Warehouse -->
                <div class="industry-card">
                    <div class="industry-icon-wrapper">
                        <svg class="industry-icon" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M4 3a2 2 0 100 4h12a2 2 0 100-4H4z"></path>
                            <path fill-rule="evenodd" d="M3 8h14v7a2 2 0 01-2 2H5a2 2 0 01-2-2V8zm5 3a1 1 0 011-1h2a1 1 0 110 2H9a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <h3 class="industry-card-title">Warehouse</h3>
                    <p class="industry-card-desc">Storage facilities, cold stores, and logistics hubs.</p>
                </div>

                <!-- Card 5: Hospital -->
                <div class="industry-card">
                    <div class="industry-icon-wrapper">
                        <svg class="industry-icon" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M12 2a1 1 0 011 1v3h3a1 1 0 110 2h-3v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H7a1 1 0 110-2h3V8H7a1 1 0 110-2h3V3a1 1 0 011-1z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <h3 class="industry-card-title">Hospital</h3>
                    <p class="industry-card-desc">Healthcare facilities requiring sterile waterproofing solutions.</p>
                </div>

                <!-- Card 6: Hotel -->
                <div class="industry-card">
                    <div class="industry-icon-wrapper">
                        <svg class="industry-icon" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M5 4a2 2 0 012-2h6a2 2 0 012 2v14a1 1 0 110 2H5a1 1 0 110-2V4zm2 2h6v4H7V6zm0 6h2v2H7v-2zm4 0h2v2h-2v-2z"></path>
                        </svg>
                    </div>
                    <h3 class="industry-card-title">Hotel</h3>
                    <p class="industry-card-desc">Hospitality sector from boutique hotels to 5-star resorts.</p>
                </div>

                <!-- Card 7: Government -->
                <div class="industry-card">
                    <div class="industry-icon-wrapper">
                        <svg class="industry-icon" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10.894 2.553a1 1 0 00-1.788 0l-7 14a1 1 0 001.169 1.409l5-1.429A1 1 0 009 15.571V11a1 1 0 112 0v4.571a1 1 0 00.725.962l5 1.428a1 1 0 001.17-1.408l-7-14z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <h3 class="industry-card-title">Government</h3>
                    <p class="industry-card-desc">Public sector buildings, schools, and civic infrastructure.</p>
                </div>

                <!-- Card 8: Data Centers -->
                <div class="industry-card">
                    <div class="industry-icon-wrapper">
                        <svg class="industry-icon" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <h3 class="industry-card-title">Data Centers</h3>
                    <p class="industry-card-desc">Mission-critical facilities requiring precision waterproofing.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Projects Section -->
    <section class="projects-featured-section">
        <div class="container">
            <div class="projects-featured-header">
                <span class="projects-featured-badge">FEATURED PROJECTS</span>
                <h2 class="projects-featured-title">Proven Results Across Bangladesh</h2>
            </div>

            <div class="projects-featured-grid">
                <!-- Project 1: Pearl Towers -->
                <div class="project-featured-card">
                    <div class="project-featured-img-wrapper" style="background-image: url('/project_skyscrapers.jpg');">
                        <div class="project-featured-tag">ROOF WATERPROOFING</div>
                    </div>
                    <div class="project-featured-body">
                        <h3 class="project-featured-card-title">Pearl Towers Dhaka</h3>
                        <div class="project-featured-location">
                            <svg class="location-icon" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                            </svg>
                            <span>Banani, Dhaka</span>
                        </div>
                        <p class="project-featured-info"><strong>Products:</strong> HydroSeal Ultra + FlexBond WP</p>
                        <p class="project-featured-info"><strong>Area Treated:</strong> 12,000 sqft</p>
                        
                        <a href="#" class="view-case-link">
                            <span>View Case Study</span>
                            <svg class="arrow-icon" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Project 2: EPZ Factory -->
                <div class="project-featured-card">
                    <div class="project-featured-img-wrapper" style="background-image: url('/service_heat.jpg');">
                        <div class="project-featured-tag">HEAT PROOFING TREATMENT</div>
                    </div>
                    <div class="project-featured-body">
                        <h3 class="project-featured-card-title">EPZ Factory Complex</h3>
                        <div class="project-featured-location">
                            <svg class="location-icon" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                            </svg>
                            <span>EPZ, Chittagong</span>
                        </div>
                        <p class="project-featured-info"><strong>Products:</strong> ThermoCool Coat Pro</p>
                        <p class="project-featured-info"><strong>Area Treated:</strong> 45,000 sqft</p>
                        
                        <a href="#" class="view-case-link">
                            <span>View Case Study</span>
                            <svg class="arrow-icon" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Project 3: Sylhet Civic Center -->
                <div class="project-featured-card">
                    <div class="project-featured-img-wrapper" style="background-image: url('/service_basement.jpg');">
                        <div class="project-featured-tag">BASEMENT WATERPROOFING</div>
                    </div>
                    <div class="project-featured-body">
                        <h3 class="project-featured-card-title">Sylhet Civic Center</h3>
                        <div class="project-featured-location">
                            <svg class="location-icon" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                            </svg>
                            <span>Zindabazar, Sylhet</span>
                        </div>
                        <p class="project-featured-info"><strong>Products:</strong> CrystalGuard Pro System</p>
                        <p class="project-featured-info"><strong>Area Treated:</strong> 8,500 sqft</p>
                        
                        <a href="#" class="view-case-link">
                            <span>View Case Study</span>
                            <svg class="arrow-icon" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- View All Products Footer -->
            <div class="projects-featured-footer">
                <a href="#" class="view-all-products-link">
                    <span>View All Products</span>
                    <svg class="arrow-icon" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials-section">
        <div class="container">
            <div class="testimonials-header">
                <span class="testimonials-badge">CLIENT TESTIMONIALS</span>
                <h2 class="testimonials-title">What Our Clients Say</h2>
            </div>

            <!-- Testimonial Card Slider Wrapper -->
            <div class="testimonials-slider">
                <!-- Slide 1 -->
                <div class="testimonial-card">
                    <span class="quote-mark">“</span>
                    
                    <div class="rating-stars">
                        <svg class="star-icon-gold" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                        <svg class="star-icon-gold" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                        <svg class="star-icon-gold" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                        <svg class="star-icon-gold" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                        <svg class="star-icon-gold" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                    </div>

                    <p class="testimonial-text">
                        "HydroShield waterproofed our 12-story commercial tower in Gulshan — flawless execution, zero leaks through two monsoon seasons. Their crystalline system is genuinely different from what we'd tried before."
                    </p>

                    <div class="client-meta">
                        <div class="client-avatar">AM</div>
                        <div class="client-info">
                            <div class="client-name-row">
                                <span class="client-name">Ahsan Malik</span>
                                <span class="verified-badge">
                                    <svg class="verified-icon" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                    </svg>
                                    <span>Verified</span>
                                </span>
                            </div>
                            <span class="client-role">Property Developer · AML Developments</span>
                        </div>
                    </div>
                </div>

                <!-- Slider Navigation Controls -->
                <div class="slider-controls">
                    <button class="control-btn prev-btn">
                        <svg class="control-arrow" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"></path>
                        </svg>
                    </button>
                    
                    <div class="slider-dots">
                        <span class="slider-dot-dash"></span>
                        <span class="slider-dot"></span>
                        <span class="slider-dot"></span>
                    </div>

                    <button class="control-btn next-btn">
                        <svg class="control-arrow" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Knowledge Center Section -->
    <section class="knowledge-section">
        <div class="container">
            <div class="knowledge-header">
                <span class="knowledge-badge">KNOWLEDGE CENTER</span>
                <h2 class="knowledge-title">Expert Insights & Technical Guides</h2>
            </div>

            <div class="knowledge-grid">
                <!-- Article 1 -->
                <div class="article-card">
                    <div class="article-img-wrapper" style="background-image: url('/waterproofing.jpg');">
                        <div class="article-tags">
                            <span class="article-tag">WATERPROOFING GUIDE</span>
                        </div>
                    </div>
                    <div class="article-body">
                        <div class="article-meta">
                            <span class="meta-item">
                                <svg class="meta-icon" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                                </svg>
                                <span>8 min read</span>
                            </span>
                            <span class="meta-item">
                                <svg class="meta-icon" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>
                                <span>12 Jul 2025</span>
                            </span>
                        </div>
                        <h3 class="article-card-title">Complete Waterproofing Guide for Flat Roofs in Bangladesh</h3>
                        
                        <div class="article-author">
                            <div class="author-avatar">TH</div>
                            <div class="author-info">
                                <h4 class="author-name">Eng. Tariq Hussain</h4>
                                <p class="author-role">Sr. Waterproofing Engineer</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Article 2 -->
                <div class="article-card">
                    <div class="article-img-wrapper" style="background-image: url('/product_thermoshield.jpg');">
                        <div class="article-tags">
                            <span class="article-tag">BUYING GUIDE</span>
                            <span class="article-tag">GUIDE</span>
                        </div>
                    </div>
                    <div class="article-body">
                        <div class="article-meta">
                            <span class="meta-item">
                                <svg class="meta-icon" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                                </svg>
                                <span>12 min read</span>
                            </span>
                            <span class="meta-item">
                                <svg class="meta-icon" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>
                                <span>05 Jun 2025</span>
                            </span>
                        </div>
                        <h3 class="article-card-title">Crystalline vs Membrane Waterproofing: Which Is Right?</h3>
                        
                        <div class="article-author">
                            <div class="author-avatar">KM</div>
                            <div class="author-info">
                                <h4 class="author-name">Eng. Khalid Mehmood</h4>
                                <p class="author-role">Technical Director</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Article 3 -->
                <div class="article-card">
                    <div class="article-img-wrapper" style="background-image: url('/service_inspection.jpg');">
                        <div class="article-tags">
                            <span class="article-tag">BUYING GUIDE</span>
                        </div>
                    </div>
                    <div class="article-body">
                        <div class="article-meta">
                            <span class="meta-item">
                                <svg class="meta-icon" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                                </svg>
                                <span>5 min read</span>
                            </span>
                            <span class="meta-item">
                                <svg class="meta-icon" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>
                                <span>18 May 2025</span>
                            </span>
                        </div>
                        <h3 class="article-card-title">Why Monsoon Season Exposes Poor Waterproofing</h3>
                        
                        <div class="article-author">
                            <div class="author-avatar">AS</div>
                            <div class="author-info">
                                <h4 class="author-name">Amna Siddiqui</h4>
                                <p class="author-role">Construction Consultant</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- View All Products Footer -->
            <div class="knowledge-footer">
                <a href="#" class="view-all-products-link">
                    <span>View All Products</span>
                    <svg class="arrow-icon" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <!-- Call to Action (CTA) Section -->
    <section class="cta-section" style="background-image: linear-gradient(rgba(0, 55, 62, 0.9), rgba(0, 30, 34, 0.95)), url('/service_inspection.jpg');">
        <div class="container">
            <div class="cta-content">
                <span class="cta-badge">GET EXPERT HELP TODAY</span>
                <h2 class="cta-title">Need Professional Waterproofing<br class="desktop-br">Experts?</h2>
                <p class="cta-subtitle">Speak to a certified engineer today. Free site inspection, transparent<br class="desktop-br">quotation, no obligation.</p>
                
                <!-- Action Buttons Group -->
                <div class="cta-buttons">
                    <a href="#" class="cta-btn btn-white">
                        <svg class="btn-icon" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                        <span>Book Free Inspection</span>
                    </a>
                    
                    <a href="#" class="cta-btn btn-outline">
                        <svg class="btn-icon" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 17v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2m3.293-7.707a1 1 0 111.414 1.414L9 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4z"></path>
                        </svg>
                        <span>Request Quotation</span>
                    </a>
                    
                    <a href="#" class="cta-btn btn-outline">
                        <svg class="btn-icon" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.94.725l.548 2.2a1 1 0 01-.321.988l-1.305.98a10.582 10.582 0 004.872 4.872l.98-1.305a1 1 0 01.988-.321l2.2.548a1 1 0 01.725.94V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                        </svg>
                        <span>Call Expert</span>
                    </a>
                    
                    <a href="#" class="cta-btn btn-whatsapp">
                        <!-- WhatsApp SVG Icon -->
                        <svg class="btn-icon" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946C.06 5.348 5.397.01 12.008.01c3.202.001 6.212 1.246 8.477 3.514 2.266 2.268 3.507 5.28 3.505 8.484-.004 6.657-5.34 11.997-11.953 11.997-2.005-.001-3.973-.502-5.724-1.455L0 24zm6.59-4.846c1.6.95 3.188 1.449 4.725 1.45 5.489 0 9.952-4.43 9.955-9.885.002-2.643-1.022-5.127-2.885-6.993C16.577 1.86 14.103.834 11.47.834c-5.492 0-9.957 4.431-9.96 9.887-.001 2.01.528 3.974 1.529 5.704L1.9 22.23l6.027-1.579c1.62.983 3.197 1.488 4.725 1.49l.005-.001zM18.06 14.92c-.31-.157-1.838-.908-2.124-1.01-.286-.104-.495-.158-.703.158-.207.31-.806.994-.988 1.2-.182.207-.364.233-.674.077-.31-.156-1.31-.483-2.496-1.543-.923-.824-1.546-1.84-1.727-2.152-.18-.31-.02-.477.136-.633.14-.14.31-.363.466-.544.156-.18.208-.31.312-.518.104-.207.052-.39-.026-.545-.078-.156-.702-1.691-.962-2.313-.253-.61-.512-.527-.703-.537-.18-.01-.39-.01-.6-.01-.208 0-.547.078-.833.39-.286.31-1.093 1.07-1.093 2.61 0 1.54 1.12 3.03 1.275 3.239.156.207 2.2 3.36 5.33 4.71.745.32 1.326.51 1.78.654.748.24 1.43.205 1.968.125.6-.09 1.838-.75 2.098-1.44.26-.69.26-1.28.18-1.4-.08-.12-.285-.2-.596-.356z"/>
                        </svg>
                        <span>WhatsApp</span>
                    </a>
                </div>

                <!-- Bottom Features List -->
                <ul class="cta-features">
                    <li>
                        <svg class="check-icon" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <span>Free Inspection</span>
                    </li>
                    <li>
                        <svg class="check-icon" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <span>24-Hour Response</span>
                    </li>
                    <li>
                        <svg class="check-icon" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <span>Written Warranty</span>
                    </li>
                    <li>
                        <svg class="check-icon" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <span>No Hidden Charges</span>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Footer Section -->
    <footer class="site-footer">
        <div class="container">
            <!-- Top Footer Links Grid -->
            <div class="footer-links-grid">
                <!-- Column 1: Brand Info -->
                <div class="footer-brand-col">
                    <a href="#" class="footer-logo">
                        <svg class="logo-icon-svg" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 2.69l5.66 5.66a8 8 0 1 1-11.31 0z"/>
                        </svg>
                        <span>HydroShield</span>
                    </a>
                    <p class="footer-brand-desc">Bangladesh's trusted waterproofing and heat proofing specialists since 2009.</p>
                    
                    <div class="footer-certifications">
                        <span class="cert-title">CERTIFIED BY</span>
                        <div class="cert-pills">
                            <span class="cert-pill">ISO 9001</span>
                            <span class="cert-pill">BSTI</span>
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

            <!-- Middle Cards: Newsletter & Hours -->
            <div class="footer-cards-row">
                <!-- Newsletter Box -->
                <div class="footer-card-box newsletter-box">
                    <h3 class="footer-box-title">Newsletter</h3>
                    <p class="footer-box-desc">Product updates, seasonal tips, and exclusive offers.</p>
                    <form class="newsletter-form" onsubmit="event.preventDefault();">
                        <input type="email" placeholder="your@email.com" class="newsletter-input" required>
                        <button type="submit" class="newsletter-submit">Subscribe</button>
                    </form>
                </div>

                <!-- Business Hours Box -->
                <div class="footer-card-box hours-box">
                    <h3 class="footer-box-title">Business Hours</h3>
                    <div class="hours-list">
                        <div class="hours-row">
                            <span class="hours-day">Monday – Friday</span>
                            <span class="hours-time">9:00 am – 6:00 pm</span>
                        </div>
                        <div class="hours-row">
                            <span class="hours-day">Saturday</span>
                            <span class="hours-time">9:00 am – 4:00 pm</span>
                        </div>
                        <div class="hours-row">
                            <span class="hours-day">Sunday</span>
                            <span class="hours-time font-bold text-red">Closed</span>
                        </div>
                        <div class="hours-row">
                            <span class="hours-day">Emergency Line</span>
                            <span class="hours-time font-bold">24/7 Available</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bottom Copyright & Payment Row -->
            <div class="footer-bottom-row">
                <p class="copyright-text">© 2025 HydroShield Construction Chemicals (Pvt.) Ltd. All rights reserved.</p>
                <div class="payment-partners">
                    <span class="payment-title">We Accept:</span>
                    <div class="payment-badges">
                        <span class="payment-badge">Visa</span>
                        <span class="payment-badge">Mastercard</span>
                        <span class="payment-badge">bKash</span>
                        <span class="payment-badge">Nagad</span>
                        <span class="payment-badge">Bank Transfer</span>
                    </div>
                </div>
            </div>
        </div>
    </footer>

</body>
</html>

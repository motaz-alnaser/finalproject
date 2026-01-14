<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activities - PRISM FLUX</title>
    <link rel="stylesheet" href="{{ asset('css/templatemo-prism-flux.css') }}">
    <script src="{{ asset('js/templatemo-prism-scripts.js') }}"></script>


</head>
<body>
    <!-- Loading Screen -->
    <div class="loader" id="loader">
        <div class="loader-content">
            <div class="loader-prism">
                <div class="prism-face"></div>
                <div class="prism-face"></div>
                <div class="prism-face"></div>
            </div>
            <div style="color: var(--accent-purple); font-size: 18px; text-transform: uppercase; letter-spacing: 3px;">Loading Activities...</div>
        </div>
    </div>

    <!-- Navigation Header -->
    <header class="header" id="header">
        <nav class="nav-container">
            <a href="index.html" class="logo">
                <div class="logo-icon">
                    <div class="logo-prism">
                        <div class="prism-shape"></div>
                    </div>
                </div>
                <span class="logo-text">
                    <span class="prism">PRISM</span>
                    <span class="flux">FLUX</span>
                </span>
            </a>
            
            <ul class="nav-menu" id="navMenu">
                <li><a href="index.html" class="nav-link">Home</a></li>
                <li><a href="activities.html" class="nav-link active">Activities</a></li>
                <li><a href="#stats" class="nav-link">Metrics</a></li>
                <li><a href="#skills" class="nav-link">Arsenal</a></li>
                <li><a href="#contact" class="nav-link">Contact</a></li>
            </ul>
            
            <div class="menu-toggle" id="menuToggle">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </nav>
    </header>

    <!-- Page Header -->
    <section class="hero" style="min-height: 40vh; padding: 120px 20px 60px;">
        <div class="philosophy-container">
            <div class="prism-line"></div>
            <h1 class="philosophy-headline" style="font-size: 48px;">Discover Experiences</h1>
            <p class="philosophy-subheading" style="max-width: 700px; margin: 0 auto;">
                Browse our curated collection of immersive activities across categories.
            </p>
        </div>
    </section>

    <!-- Filters -->
    <section class="stats-section" style="padding: 60px 30px;">
        <div class="philosophy-container">
            <div class="filters-container" style="display: flex; gap: 20px; flex-wrap: wrap; justify-content: center; margin-bottom: 40px;">
                <select class="filter-select" style="background: var(--carbon-medium); border: 1px solid var(--metal-dark); color: var(--text-primary); padding: 12px 20px; border-radius: 30px; min-width: 180px;">
                    <option>All Categories</option>
                    <option>Sports</option>
                    <option>Adventures</option>
                    <option>Cultural</option>
                </select>
                <select class="filter-select" style="background: var(--carbon-medium); border: 1px solid var(--metal-dark); color: var(--text-primary); padding: 12px 20px; border-radius: 30px; min-width: 180px;">
                    <option>All Locations</option>
                    <option>Riyadh</option>
                    <option>Jeddah</option>
                    <option>Dammam</option>
                </select>
                <input type="text" placeholder="Search activities..." style="background: var(--carbon-medium); border: 1px solid var(--metal-dark); color: var(--text-primary); padding: 12px 20px; border-radius: 30px; min-width: 250px;">
            </div>

            <!-- Activities Grid -->
            <div class="activities-grid" style="display: grid; grid-template-columns: repeat(auto-fill, minmax(300px, 1fr)); gap: 30px;">
                <!-- Activity Card 1 -->
                <div class="stat-card" style="height: auto; padding: 25px;">
                    <div class="card-image" style="width: 100%; height: 180px; margin-bottom: 20px;">
                        <img src="images/activity1.jpg" alt="Morning Yoga Session" style="width: 100%; height: 100%; object-fit: cover; filter: grayscale(30%);">
                    </div>
                    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 15px;">
                        <span class="tech-badge" style="background: rgba(153, 69, 255, 0.1); border-color: var(--accent-purple);">Sports</span>
                        <div style="color: var(--accent-yellow); display: flex; align-items: center; gap: 5px;">
                            <span>4.8</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                                <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                            </svg>
                        </div>
                    </div>
                    <h3 class="card-title" style="font-size: 20px; margin-bottom: 10px;">Morning Yoga Session</h3>
                    <p class="stat-description" style="margin-bottom: 20px;">King Abdullah Park, Riyadh</p>
                    <div style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="stat-number" style="font-size: 24px; color: var(--accent-cyan);">150 JOD</div>
                        <a href="activity-details.html" class="card-cta" style="padding: 8px 20px; font-size: 14px;">Book Now</a>
                    </div>
                </div>

                <!-- Activity Card 2 -->
                <div class="stat-card" style="height: auto; padding: 25px;">
                    <div class="card-image" style="width: 100%; height: 180px; margin-bottom: 20px;">
                        <img src="images/activity2.jpg" alt="Desert Camping Adventure" style="width: 100%; height: 100%; object-fit: cover; filter: grayscale(30%);">
                    </div>
                    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 15px;">
                        <span class="tech-badge" style="background: rgba(255, 51, 51, 0.1); border-color: var(--accent-red);">Adventures</span>
                        <div style="color: var(--accent-yellow); display: flex; align-items: center; gap: 5px;">
                            <span>4.9</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                                <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                            </svg>
                        </div>
                    </div>
                    <h3 class="card-title" style="font-size: 20px; margin-bottom: 10px;">Desert Camping Adventure</h3>
                    <p class="stat-description" style="margin-bottom: 20px;">Rub' al Khali, Saudi Arabia</p>
                    <div style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="stat-number" style="font-size: 24px; color: var(--accent-cyan);">450 JOD</div>
                        <a href="activity-details.html" class="card-cta" style="padding: 8px 20px; font-size: 14px;">Book Now</a>
                    </div>
                </div>

                <!-- Activity Card 3 -->
                <div class="stat-card" style="height: auto; padding: 25px;">
                    <div class="card-image" style="width: 100%; height: 180px; margin-bottom: 20px;">
                        <img src="images/activity3.jpg" alt="Beginner Art Workshop" style="width: 100%; height: 100%; object-fit: cover; filter: grayscale(30%);">
                    </div>
                    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 15px;">
                        <span class="tech-badge" style="background: rgba(0, 168, 255, 0.1); border-color: var(--accent-blue);">Cultural</span>
                        <div style="color: var(--accent-yellow); display: flex; align-items: center; gap: 5px;">
                            <span>4.7</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                                <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                            </svg>
                        </div>
                    </div>
                    <h3 class="card-title" style="font-size: 20px; margin-bottom: 10px;">Beginner Art Workshop</h3>
                    <p class="stat-description" style="margin-bottom: 20px;">Art Center, Jeddah</p>
                    <div style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="stat-number" style="font-size: 24px; color: var(--accent-cyan);">200 JOD</div>
                        <a href="activity-details.html" class="card-cta" style="padding: 8px 20px; font-size: 14px;">Book Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-content">
            <div class="footer-brand">
                <div class="footer-logo">
                    <div class="logo-icon">
                        <div class="logo-prism">
                            <div class="prism-shape"></div>
                        </div>
                    </div>
                    <span class="logo-text">
                        <span class="prism">PRISM</span>
                        <span class="flux">FLUX</span>
                    </span>
                </div>
                <p class="footer-description">
                    Refracting complex challenges into brilliant solutions through the convergence of art, science, and technology.
                </p>
                <div class="footer-social">
                    <a href="#" class="social-icon">f</a>
                    <a href="#" class="social-icon">t</a>
                    <a href="#" class="social-icon">in</a>
                    <a href="#" class="social-icon">ig</a>
                </div>
            </div>
            
            <div class="footer-section">
                <h4>Services</h4>
                <div class="footer-links">
                    <a href="#">Web Development</a>
                    <a href="#">App Development</a>
                    <a href="#">Cloud Solutions</a>
                    <a href="#">AI Integration</a>
                </div>
            </div>
            
            <div class="footer-section">
                <h4>Company</h4>
                <div class="footer-links">
                    <a href="#">About Us</a>
                    <a href="#">Our Team</a>
                    <a href="#">Careers</a>
                    <a href="#">Press Kit</a>
                </div>
            </div>
            
            <div class="footer-section">
                <h4>Resources</h4>
                <div class="footer-links">
                    <a href="#">Documentation</a>
                    <a href="#">API Reference</a>
                    <a href="#">Blog</a>
                    <a href="#">Support</a>
                </div>
            </div>
        </div>
        
        <div class="footer-bottom">
            <div class="copyright">
                © 2026 PRISM FLUX. All rights reserved.
            </div>
            <div class="footer-credits">
                Designed by <a href="https://templatemo.com" rel="nofollow" target="_blank">TemplateMo</a>
            </div>
        </div>
    </footer>

    <script src="templatemo-prism-scripts.js"></script>
    <script>
        // Keep loader functionality
        window.addEventListener('load', () => {
            setTimeout(() => {
                const loader = document.getElementById('loader');
                loader.classList.add('hidden');
            }, 1000);
        });

        // Animated counter for stats
        function animateCounter(element) {
            const target = parseInt(element.dataset.target);
            const duration = 2000;
            const step = target / (duration / 16);
            let current = 0;
            
            const counter = setInterval(() => {
                current += step;
                if (current >= target) {
                    element.textContent = target.toLocaleString();
                    clearInterval(counter);
                } else {
                    element.textContent = Math.floor(current).toLocaleString();
                }
            }, 16);
        }

        // Initialize counters
        document.addEventListener('DOMContentLoaded', function() {
            const statNumbers = document.querySelectorAll('.stat-number[data-target]');
            statNumbers.forEach(number => {
                animateCounter(number);
            });
        });
    </script>
</body>
</html>
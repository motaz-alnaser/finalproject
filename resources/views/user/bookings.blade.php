<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookings - PRISM FLUX</title>
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
            <div style="color: var(--accent-purple); font-size: 18px; text-transform: uppercase; letter-spacing: 3px;">Loading Bookings...</div>
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
                <li><a href="activities.html" class="nav-link">Activities</a></li>
                <li><a href="#stats" class="nav-link">Metrics</a></li>
                <li><a href="#skills" class="nav-link">Arsenal</a></li>
                <li><a href="#contact" class="nav-link">Contact</a></li>
            </ul>
            
            <div style="display: flex; align-items: center; gap: 15px;">
                <div style="display: flex; align-items: center; gap: 10px; color: var(--text-primary);">
                    <img src="images/user-avatar.jpg" alt="Mohammed Ahmed" style="width: 40px; height: 40px; border-radius: 50%; object-fit: cover;">
                    <span>Mohammed Ahmed</span>
                </div>
                <div class="menu-toggle" id="menuToggle">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </nav>
    </header>

    <!-- Page Header -->
    <section class="hero" style="min-height: 30vh; padding: 120px 20px 60px;">
        <div class="philosophy-container">
            <div class="prism-line"></div>
            <h1 class="philosophy-headline" style="font-size: 48px;">My Bookings</h1>
            <p class="philosophy-subheading" style="max-width: 700px; margin: 0 auto;">
                Manage all your upcoming, past, and cancelled bookings
            </p>
        </div>
    </section>

    <!-- Bookings Content -->
    <section class="stats-section" style="padding: 60px 30px;">
        <div class="philosophy-container">
            <!-- Tabs -->
            <div style="display: flex; gap: 20px; margin-bottom: 40px; flex-wrap: wrap;">
                <button class="category-tab active" data-tab="upcoming" style="padding: 12px 30px;">Upcoming</button>
                <button class="category-tab" data-tab="past" style="padding: 12px 30px;">Past</button>
                <button class="category-tab" data-tab="cancelled" style="padding: 12px 30px;">Cancelled</button>
            </div>

            <!-- Upcoming Bookings -->
            <div class="bookings-tab active" id="upcoming">
                <div class="stat-card" style="padding: 25px; margin-bottom: 20px;">
                    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
                        <div style="background: rgba(0, 255, 136, 0.1); border: 1px solid var(--accent-green); color: var(--accent-green); padding: 5px 15px; border-radius: 20px; font-weight: bold;">Pending</div>
                        <div style="color: var(--text-secondary);">January 15, 2026</div>
                    </div>
                    <div style="display: grid; grid-template-columns: 120px 1fr auto; gap: 20px;">
                        <div class="card-image" style="width: 100%; height: 100px; border-radius: 10px;">
                            <img src="images/activity1.jpg" alt="Morning Yoga Session" style="width: 100%; height: 100%; object-fit: cover;">
                        </div>
                        <div>
                            <h3 class="card-title" style="font-size: 20px; margin-bottom: 10px;">Morning Yoga Session</h3>
                            <p class="stat-description" style="margin-bottom: 10px;">King Abdullah Park, Riyadh</p>
                            <div style="color: var(--text-secondary);">7:00 AM</div>
                        </div>
                        <div style="display: flex; flex-direction: column; gap: 10px; justify-content: center;">
                            <div style="text-align: right;">
                                <div style="color: var(--text-secondary); font-size: 14px;">Booking #12345</div>
                                <div class="stat-number" style="font-size: 20px; color: var(--accent-cyan);">150 JOD</div>
                            </div>
                            <div style="display: flex; flex-direction: column; gap: 10px;">
                                <button class="card-cta" style="padding: 8px 20px; font-size: 14px; background: linear-gradient(135deg, var(--metal-dark), var(--carbon-medium));">Cancel Booking</button>
                                <a href="activity-details.html" class="card-cta" style="padding: 8px 20px; font-size: 14px;">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="stat-card" style="padding: 25px;">
                    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
                        <div style="background: rgba(0, 255, 136, 0.1); border: 1px solid var(--accent-green); color: var(--accent-green); padding: 5px 15px; border-radius: 20px; font-weight: bold;">Pending</div>
                        <div style="color: var(--text-secondary);">January 22, 2026</div>
                    </div>
                    <div style="display: grid; grid-template-columns: 120px 1fr auto; gap: 20px;">
                        <div class="card-image" style="width: 100%; height: 100px; border-radius: 10px;">
                            <img src="images/activity2.jpg" alt="Desert Camping Adventure" style="width: 100%; height: 100%; object-fit: cover;">
                        </div>
                        <div>
                            <h3 class="card-title" style="font-size: 20px; margin-bottom: 10px;">Desert Camping Adventure</h3>
                            <p class="stat-description" style="margin-bottom: 10px;">Wadi Rum, Maan</p>
                            <div style="color: var(--text-secondary);">8:00 AM</div>
                        </div>
                        <div style="display: flex; flex-direction: column; gap: 10px; justify-content: center;">
                            <div style="text-align: right;">
                                <div style="color: var(--text-secondary); font-size: 14px;">Booking #12346</div>
                                <div class="stat-number" style="font-size: 20px; color: var(--accent-cyan);">450 JOD</div>
                            </div>
                            <div style="display: flex; flex-direction: column; gap: 10px;">
                                <button class="card-cta" style="padding: 8px 20px; font-size: 14px; background: linear-gradient(135deg, var(--metal-dark), var(--carbon-medium));">Cancel Booking</button>
                                <a href="activity-details.html" class="card-cta" style="padding: 8px 20px; font-size: 14px;">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Past Bookings -->
            <div class="bookings-tab" id="past" style="display: none;">
                <div class="stat-card" style="padding: 25px; margin-bottom: 20px;">
                    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
                        <div style="background: rgba(0, 255, 136, 0.1); border: 1px solid var(--accent-green); color: var(--accent-green); padding: 5px 15px; border-radius: 20px; font-weight: bold;">Completed</div>
                        <div style="color: var(--text-secondary);">January 5, 2026</div>
                    </div>
                    <div style="display: grid; grid-template-columns: 120px 1fr auto; gap: 20px;">
                        <div class="card-image" style="width: 100%; height: 100px; border-radius: 10px;">
                            <img src="images/activity3.jpg" alt="Beginner Art Workshop" style="width: 100%; height: 100%; object-fit: cover;">
                        </div>
                        <div>
                            <h3 class="card-title" style="font-size: 20px; margin-bottom: 10px;">Beginner Art Workshop</h3>
                            <p class="stat-description" style="margin-bottom: 10px;">Art Center, Jeddah</p>
                            <div style="color: var(--text-secondary);">4:00 PM</div>
                        </div>
                        <div style="display: flex; flex-direction: column; gap: 10px; justify-content: center;">
                            <div style="text-align: right;">
                                <div style="color: var(--text-secondary); font-size: 14px;">Booking #12344</div>
                                <div class="stat-number" style="font-size: 20px; color: var(--accent-cyan);">200 SAR</div>
                            </div>
                            <div style="display: flex; flex-direction: column; gap: 10px;">
                                <button class="card-cta" style="padding: 8px 20px; font-size: 14px;">Rate Activity</button>
                                <a href="activity-details.html" class="card-cta" style="padding: 8px 20px; font-size: 14px;">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="stat-card" style="padding: 25px;">
                    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
                        <div style="background: rgba(0, 255, 136, 0.1); border: 1px solid var(--accent-green); color: var(--accent-green); padding: 5px 15px; border-radius: 20px; font-weight: bold;">Completed</div>
                        <div style="color: var(--text-secondary);">December 28, 2025</div>
                    </div>
                    <div style="display: grid; grid-template-columns: 120px 1fr auto; gap: 20px;">
                        <div class="card-image" style="width: 100%; height: 100px; border-radius: 10px;">
                            <img src="images/activity4.jpg" alt="Saudi Cooking Class" style="width: 100%; height: 100%; object-fit: cover;">
                        </div>
                        <div>
                            <h3 class="card-title" style="font-size: 20px; margin-bottom: 10px;">Jordan Cooking Class</h3>
                            <p class="stat-description" style="margin-bottom: 10px;">Heritage Kitchen, Amman</p>
                            <div style="color: var(--text-secondary);">6:00 PM</div>
                        </div>
                        <div style="display: flex; flex-direction: column; gap: 10px; justify-content: center;">
                            <div style="text-align: right;">
                                <div style="color: var(--text-secondary); font-size: 14px;">Booking #12343</div>
                                <div class="stat-number" style="font-size: 20px; color: var(--accent-cyan);">250 SAR</div>
                            </div>
                            <div style="display: flex; flex-direction: column; gap: 10px;">
                                <button class="card-cta" style="padding: 8px 20px; font-size: 14px;">Rate Activity</button>
                                <a href="activity-details.html" class="card-cta" style="padding: 8px 20px; font-size: 14px;">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Cancelled Bookings -->
            <div class="bookings-tab" id="cancelled" style="display: none;">
                <div class="stat-card" style="padding: 25px;">
                    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
                        <div style="background: rgba(239, 68, 68, 0.1); border: 1px solid var(--error); color: var(--error); padding: 5px 15px; border-radius: 20px; font-weight: bold;">Cancelled</div>
                        <div style="color: var(--text-secondary);">December 20, 2025</div>
                    </div>
                    <div style="display: grid; grid-template-columns: 120px 1fr auto; gap: 20px;">
                        <div class="card-image" style="width: 100%; height: 100px; border-radius: 10px;">
                            <img src="images/activity5.jpg" alt="Red Sea Diving Trip" style="width: 100%; height: 100%; object-fit: cover;">
                        </div>
                        <div>
                            <h3 class="card-title" style="font-size: 20px; margin-bottom: 10px;">Red Sea Diving Trip</h3>
                            <p class="stat-description" style="margin-bottom: 10px;">Jeddah, Saudi Arabia</p>
                            <div style="color: var(--text-secondary);">9:00 AM</div>
                        </div>
                        <div style="display: flex; flex-direction: column; gap: 10px; justify-content: center;">
                            <div style="text-align: right;">
                                <div style="color: var(--text-secondary); font-size: 14px;">Booking #12342</div>
                                <div class="stat-number" style="font-size: 20px; color: var(--accent-cyan);">600 SAR</div>
                            </div>
                            <div style="display: flex; flex-direction: column; gap: 10px;">
                                <a href="activity-details.html" class="card-cta" style="padding: 8px 20px; font-size: 14px;">View Details</a>
                            </div>
                        </div>
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
    <!-- <script src="global.js"></script> -->
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
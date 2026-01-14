<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile - PRISM FLUX</title>
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
            <div style="color: var(--accent-purple); font-size: 18px; text-transform: uppercase; letter-spacing: 3px;">Loading Profile...</div>
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

    <!-- Profile Header -->
    <section class="hero" style="min-height: 30vh; padding: 120px 20px 60px; background: linear-gradient(180deg, var(--primary-black) 0%, rgba(153, 69, 255, 0.05) 100%);">
        <div class="philosophy-container">
            <div style="display: flex; align-items: end; gap: 30px;">
                <div style="position: relative;">
                    <img src="images/user-avatar.jpg" alt="Mohammed Ahmed" style="width: 120px; height: 120px; border-radius: 50%; object-fit: cover; border: 3px solid var(--accent-purple);">
                    <button style="position: absolute; bottom: 0; right: 0; background: var(--accent-purple); border: none; border-radius: 50%; width: 36px; height: 36px; display: flex; align-items: center; justify-content: center; cursor: pointer;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                            <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                        </svg>
                    </button>
                </div>
                <div>
                    <h1 class="philosophy-headline" style="font-size: 36px; margin-bottom: 10px;">Mohammed Ahmed</h1>
                    <p style="color: var(--text-secondary); margin-bottom: 20px;">Member since January 2025</p>
                    <div style="display: flex; gap: 30px;">
                        <div style="text-align: center;">
                            <div class="stat-number" style="font-size: 24px; color: var(--accent-cyan);">12</div>
                            <div style="color: var(--text-secondary);">Booked Activities</div>
                        </div>
                        <div style="text-align: center;">
                            <div class="stat-number" style="font-size: 24px; color: var(--accent-cyan);">8</div>
                            <div style="color: var(--text-secondary);">Reviews</div>
                        </div>
                        <div style="text-align: center;">
                            <div class="stat-number" style="font-size: 24px; color: var(--accent-cyan);">4.7</div>
                            <div style="color: var(--text-secondary);">Avg Rating</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Profile Content -->
    <section class="stats-section" style="padding: 60px 30px;">
        <div class="philosophy-container">
            <div style="display: grid; grid-template-columns: 300px 1fr; gap: 40px;">
                <!-- Sidebar -->
                <div class="stat-card" style="padding: 25px;">
                    <nav style="display: flex; flex-direction: column; gap: 15px;">
                        <a href="profile.html" class="nav-link active" style="padding: 12px 20px; border-radius: 10px; background: rgba(153, 69, 255, 0.1); color: var(--accent-cyan); text-decoration: none; display: flex; align-items: center; gap: 10px;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                <circle cx="12" cy="7" r="4"></circle>
                            </svg>
                            Account Info
                        </a>
                        <a href="bookings" class="nav-link" style="padding: 12px 20px; border-radius: 10px; color: var(--text-secondary); text-decoration: none; display: flex; align-items: center; gap: 10px; transition: all 0.3s ease;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                                <line x1="16" y1="2" x2="16" y2="6"></line>
                                <line x1="8" y1="2" x2="8" y2="6"></line>
                                <line x1="3" y1="10" x2="21" y2="10"></line>
                            </svg>
                            Bookings
                        </a>
                       
                        <a href="#" class="nav-link" style="padding: 12px 20px; border-radius: 10px; color: var(--text-secondary); text-decoration: none; display: flex; align-items: center; gap: 10px; transition: all 0.3s ease;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                <polyline points="16 17 21 12 16 7"></polyline>
                                <line x1="21" y1="12" x2="9" y2="12"></line>
                            </svg>
                            Logout
                        </a>
                    </nav>
                </div>

                <!-- Main Content -->
                <div>
                    <div class="stat-card" style="padding: 30px; margin-bottom: 40px;">
                        <h2 class="section-title" style="font-size: 28px; margin-bottom: 20px;">Account Information</h2>
                        <form id="profileForm">
                            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 15px; margin-bottom: 25px;">
                                <div class="form-group">
                                    <label for="firstName" style="display: block; color: var(--text-secondary); margin-bottom: 10px; text-transform: uppercase; font-size: 12px; letter-spacing: 1px;">First Name</label>
                                    <input type="text" id="firstName" value="Mohammed" style="width: 100%; padding: 15px; background: var(--carbon-dark); border: 1px solid var(--metal-dark); border-radius: 8px; color: var(--text-primary); font-size: 14px;">
                                </div>
                                <div class="form-group">
                                    <label for="lastName" style="display: block; color: var(--text-secondary); margin-bottom: 10px; text-transform: uppercase; font-size: 12px; letter-spacing: 1px;">Last Name</label>
                                    <input type="text" id="lastName" value="Ahmed" style="width: 100%; padding: 15px; background: var(--carbon-dark); border: 1px solid var(--metal-dark); border-radius: 8px; color: var(--text-primary); font-size: 14px;">
                                </div>
                            </div>
                            
                            <div class="form-group" style="margin-bottom: 25px;">
                                <label for="email" style="display: block; color: var(--text-secondary); margin-bottom: 10px; text-transform: uppercase; font-size: 12px; letter-spacing: 1px;">Email Address</label>
                                <input type="email" id="email" value="mohammed@example.com" style="width: 100%; padding: 15px; background: var(--carbon-dark); border: 1px solid var(--metal-dark); border-radius: 8px; color: var(--text-primary); font-size: 14px;">
                            </div>
                            
                            <div class="form-group" style="margin-bottom: 25px;">
                                <label for="phone" style="display: block; color: var(--text-secondary); margin-bottom: 10px; text-transform: uppercase; font-size: 12px; letter-spacing: 1px;">Phone Number</label>
                                <input type="tel" id="phone" value="+966 50 123 4567" style="width: 100%; padding: 15px; background: var(--carbon-dark); border: 1px solid var(--metal-dark); border-radius: 8px; color: var(--text-primary); font-size: 14px;">
                            </div>
                            
                            <div class="form-group" style="margin-bottom: 30px;">
                                <label for="bio" style="display: block; color: var(--text-secondary); margin-bottom: 10px; text-transform: uppercase; font-size: 12px; letter-spacing: 1px;">Bio</label>
                                <textarea id="bio" rows="4" style="width: 100%; padding: 15px; background: var(--carbon-dark); border: 1px solid var(--metal-dark); border-radius: 8px; color: var(--text-primary); font-size: 14px; resize: vertical;">Outdoor enthusiast and adventure lover. I enjoy discovering new places and trying different activities.</textarea>
                            </div>
                            
                            <button type="submit" class="card-cta" style="padding: 12px 30px;">Save Changes</button>
                        </form>
                    </div>

                    <div class="stat-card" style="padding: 30px;">
                        <h2 class="section-title" style="font-size: 28px; margin-bottom: 20px;">Upcoming Activities</h2>
                        <div style="display: flex; align-items: start; gap: 20px; margin-bottom: 20px; padding-bottom: 20px; border-bottom: 1px solid var(--metal-dark);">
                            <div style="text-align: center; min-width: 80px;">
                                <div style="font-size: 24px; font-weight: 900; color: var(--accent-cyan);">15</div>
                                <div style="color: var(--text-secondary);">JAN</div>
                            </div>
                            <div style="flex: 1;">
                                <h3 class="card-title" style="font-size: 20px; margin-bottom: 10px;">Morning Yoga Session</h3>
                                <p class="stat-description" style="margin-bottom: 10px;">King Abdullah Park, Amman</p>
                                <div style="color: var(--text-secondary);">7:00 AM</div>
                            </div>
                            <div>
                                <a href="activity_details" class="card-cta" style="padding: 8px 20px; font-size: 14px;">View Details</a>
                            </div>
                        </div>
                        <div style="display: flex; align-items: start; gap: 20px;">
                            <div style="text-align: center; min-width: 80px;">
                                <div style="font-size: 24px; font-weight: 900; color: var(--accent-cyan);">22</div>
                                <div style="color: var(--text-secondary);">JAN</div>
                            </div>
                            <div style="flex: 1;">
                                <h3 class="card-title" style="font-size: 20px; margin-bottom: 10px;">Desert Camping Adventure</h3>
                                <p class="stat-description" style="margin-bottom: 10px;">Wadi Rum, Maan</p>
                                <div style="color: var(--text-secondary);">8:00 AM</div>
                            </div>
                            <div>
                                <a href="activity-details.blade.php" class="card-cta" style="padding: 8px 20px; font-size: 14px;">View Details</a>
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
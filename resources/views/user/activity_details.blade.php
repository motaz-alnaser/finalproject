<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Morning Yoga Session - PRISM FLUX</title>
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
            <div style="color: var(--accent-purple); font-size: 18px; text-transform: uppercase; letter-spacing: 3px;">Loading Activity...</div>
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
            
            <div class="menu-toggle" id="menuToggle">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </nav>
    </header>

    <!-- Breadcrumb -->
    <div style="padding: 20px 30px; background: rgba(18, 18, 18, 0.95); border-bottom: 1px solid var(--metal-dark);">
        <div class="philosophy-container">
            <p style="color: var(--text-secondary);"><a href="index.html" style="color: var(--accent-cyan); text-decoration: none;">Home</a> > <a href="activities.html" style="color: var(--accent-cyan); text-decoration: none;">Activities</a> > Morning Yoga Session</p>
        </div>
    </div>

    <!-- Activity Details -->
    <section class="stats-section" style="padding: 60px 30px;">
        <div class="philosophy-container">
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 40px; margin-bottom: 60px;">
                <!-- Gallery -->
                <div>
                    <div class="card-image" style="width: 100%; height: 400px; margin-bottom: 20px; border-radius: 20px;">
                        <img src="images/activity1.jpg" alt="Morning Yoga Session" style="width: 100%; height: 100%; object-fit: cover;">
                    </div>
                    <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 10px;">
                        <div class="card-image" style="height: 120px; border-radius: 10px;">
                            <img src="images/activity1-thumb1.jpg" alt="Thumbnail 1" style="width: 100%; height: 100%; object-fit: cover;">
                        </div>
                        <div class="card-image" style="height: 120px; border-radius: 10px;">
                            <img src="images/activity1-thumb2.jpg" alt="Thumbnail 2" style="width: 100%; height: 100%; object-fit: cover;">
                        </div>
                        <div class="card-image" style="height: 120px; border-radius: 10px;">
                            <img src="images/activity1-thumb3.jpg" alt="Thumbnail 3" style="width: 100%; height: 100%; object-fit: cover;">
                        </div>
                    </div>
                </div>

                <!-- Info -->
                <div>
                    <div style="display: flex; justify-content: space-between; align-items: start; margin-bottom: 20px;">
                        <span class="tech-badge" style="background: rgba(153, 69, 255, 0.1); border-color: var(--accent-purple);">Sports</span>
                        <div style="color: var(--accent-yellow); display: flex; align-items: center; gap: 5px;">
                            <span>4.8</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                                <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                            </svg>
                            <span>(124 reviews)</span>
                        </div>
                    </div>
                    <h1 class="philosophy-headline" style="font-size: 36px; margin-bottom: 20px; background: linear-gradient(135deg, var(--text-primary), var(--accent-purple)); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">Morning Yoga Session</h1>
                    <p style="color: var(--text-secondary); margin-bottom: 30px; display: flex; align-items: center; gap: 10px;">
                        <span>📍</span> King Abdullah Park, Amman
                    </p>

                    <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 30px;">
                        <img src="images/host.jpg" alt="Sarah Ahmed" style="width: 60px; height: 60px; border-radius: 50%; object-fit: cover;">
                        <div>
                            <h4 style="color: var(--text-primary); margin-bottom: 5px;">Sarah Ahmed</h4>
                            <p style="color: var(--text-secondary); font-size: 14px;">Certified Yoga Instructor</p>
                        </div>
                    </div>

                    <div style="background: rgba(153, 69, 255, 0.1); border: 1px solid var(--accent-purple); border-radius: 15px; padding: 20px; margin-bottom: 30px;">
                        <div style="display: flex; align-items: center; gap: 20px; margin-bottom: 15px;">
                            <div class="stat-number" style="font-size: 32px; color: var(--accent-cyan);">150 JOD</div>
                            <div style="text-decoration: line-through; color: var(--text-dim);">200 JOD</div>
                            <span style="background: var(--accent-green); color: var(--primary-black); padding: 3px 10px; border-radius: 20px; font-weight: bold;">25% OFF</span>
                        </div>
                        <button class="card-cta" style="width: 100%;">Book This Activity</button>
                    </div>

                    <div class="form-group">
                        <label for="date" style="display: block; color: var(--text-secondary); margin-bottom: 10px; text-transform: uppercase; font-size: 12px; letter-spacing: 1px;">Select Date</label>
                        <input type="date" id="date" style="width: 100%; padding: 15px; background: var(--carbon-dark); border: 1px solid var(--metal-dark); border-radius: 8px; color: var(--text-primary); font-size: 14px;">
                    </div>
                </div>
            </div>

            <!-- Description -->
            <div class="stat-card" style="padding: 30px; margin-bottom: 40px;">
                <h2 class="section-title" style="font-size: 28px; margin-bottom: 20px;">About This Activity</h2>
                <p class="stat-description" style="margin-bottom: 20px;">
                    Join us for a peaceful morning yoga session in one of Riyadh's most beautiful parks. This session is designed for all levels, from beginners to advanced practitioners. The session will begin with breathing and relaxation exercises, followed by a series of yoga poses that help improve flexibility, balance, and strength.
                </p>
                <p class="stat-description" style="margin-bottom: 30px;">
                    You'll be guided by certified yoga instructor Sarah Ahmed, who has over 10 years of experience teaching yoga. The session will take place outdoors among beautiful nature, providing a complete mind-body experience.
                </p>

                <h3 style="color: var(--text-primary); margin-bottom: 15px; font-size: 20px;">What You'll Get:</h3>
                <ul style="color: var(--text-secondary); margin-bottom: 20px; padding-right: 20px;">
                    <li style="margin-bottom: 10px;">One-hour yoga session</li>
                    <li style="margin-bottom: 10px;">Personal yoga mat</li>
                    <li style="margin-bottom: 10px;">Refreshment after session</li>
                    <li>Personalized tips to improve your practice</li>
                </ul>

                <h3 style="color: var(--text-primary); margin-bottom: 15px; font-size: 20px;">What to Bring:</h3>
                <ul style="color: var(--text-secondary); padding-right: 20px;">
                    <li style="margin-bottom: 10px;">Comfortable clothing</li>
                    <li style="margin-bottom: 10px;">Water bottle</li>
                    <li>Small towel (optional)</li>
                </ul>
            </div>

            <!-- Reviews -->
            <div class="stat-card" style="padding: 30px;">
                <h2 class="section-title" style="font-size: 28px; margin-bottom: 20px;">Reviews & Ratings</h2>
                <div style="display: flex; align-items: center; gap: 30px; margin-bottom: 30px;">
                    <div style="font-size: 48px; font-weight: 900; color: var(--accent-cyan);">4.8</div>
                    <div>
                        <div style="color: var(--accent-yellow); display: flex; align-items: center; gap: 5px; margin-bottom: 5px;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                                <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                                <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                                <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                                <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                                <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                            </svg>
                        </div>
                        <p style="color: var(--text-secondary);">Based on 124 reviews</p>
                    </div>
                </div>

                <div style="margin-bottom: 20px;">
                    <div style="display: flex; align-items: start; gap: 15px; margin-bottom: 15px;">
                        <img src="images/reviewer1.jpg" alt="Khalid Mohammed" style="width: 50px; height: 50px; border-radius: 50%; object-fit: cover;">
                        <div>
                            <h4 style="color: var(--text-primary); margin-bottom: 5px;">Khalid Mohammed</h4>
                            <p style="color: var(--text-secondary); font-size: 14px; margin-bottom: 10px;">January 15, 2026</p>
                            <div style="color: var(--accent-yellow); display: flex; align-items: center; gap: 5px; margin-bottom: 10px;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                                    <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                                    <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                                    <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                                    <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                                    <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                </svg>
                            </div>
                            <p class="stat-description">Amazing experience! Sarah was incredible and made the session enjoyable and beneficial. The location is beautiful amidst nature. Highly recommend!</p>
                        </div>
                    </div>

                    <div style="display: flex; align-items: start; gap: 15px;">
                        <img src="images/reviewer2.jpg" alt="Nora Al-Saadi" style="width: 50px; height: 50px; border-radius: 50%; object-fit: cover;">
                        <div>
                            <h4 style="color: var(--text-primary); margin-bottom: 5px;">Nora Al-Saadi</h4>
                            <p style="color: var(--text-secondary); font-size: 14px; margin-bottom: 10px;">January 10, 2026</p>
                            <div style="color: var(--accent-yellow); display: flex; align-items: center; gap: 5px; margin-bottom: 10px;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                                    <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                                    <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                                    <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                                    <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                </svg>
                            </div>
                            <p class="stat-description">It was my first time doing yoga, and I was a bit nervous. But Sarah made me feel comfortable right from the start. The session was excellent and the place was very peaceful.</p>
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
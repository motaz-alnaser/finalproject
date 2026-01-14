@extends('layout.master')

@section('title', 'Owner Dashboard - PRISM FLUX')
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/templatemo-prism-flux.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owner_admin.css') }}">
@endsection

@section('header')
    <header class="admin-header">
        <div class="header-title">
            <h1>Dashboard</h1>
            <p>Welcome back, Sarah Ahmed</p>
        </div>
        <div class="header-user">
            <img src="{{ asset('images/host.jpg') }}" alt="Sarah Ahmed" class="user-avatar">
            <span>Sarah Ahmed</span>
        </div>
    </header>
@endsection

@section('sidebar')
    <div class="sidebar-logo">
        PRISM <span>FLUX</span>
    </div>

    <nav class="sidebar-nav">
        <a href="{{ route('owner.dashboard') }}" class="active">Dashboard</a>
        <a href="{{ route('owner.add_activity') }}">Add Activity</a>
        <a href="{{ route('owner.bookings') }}">Bookings</a>
        <a href="{{ route('owner.earnings') }}">Earnings</a>
    </nav>
@endsection

@section('content')
    <section class="stats-section">
        <div class="philosophy-container">
            <!-- Stats Cards -->
            <div class="dashboard-stats-grid">
                <!-- Stat Card 1 -->
                <div class="stat-card">
                    <div class="stat-card-icon" style="background: rgba(153, 69, 255, 0.1);">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                            <line x1="16" y1="2" x2="16" y2="6"></line>
                            <line x1="8" y1="2" x2="8" y2="6"></line>
                            <line x1="3" y1="10" x2="21" y2="10"></line>
                        </svg>
                    </div>
                    <div class="stat-number" data-target="124">124</div>
                    <div class="stat-label">Bookings This Month</div>
                </div>

                <!-- Stat Card 2 -->
                <div class="stat-card">
                    <div class="stat-card-icon" style="background: rgba(249, 115, 22, 0.1);">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <rect x="2" y="4" width="20" height="16" rx="2"></rect>
                            <path d="M12 10v6"></path>
                            <path d="M8 10h8"></path>
                        </svg>
                    </div>
                    <div class="stat-number" data-target="12450">12,450 SAR</div>
                    <div class="stat-label">Revenue This Month</div>
                </div>

                <!-- Stat Card 3 -->
                <div class="stat-card">
                    <div class="stat-card-icon" style="background: rgba(59, 130, 246, 0.1);">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                            <circle cx="12" cy="12" r="3"></circle>
                        </svg>
                    </div>
                    <div class="stat-number" data-target="2845">2,845</div>
                    <div class="stat-label">Activity Views</div>
                </div>

                <!-- Stat Card 4 -->
                <div class="stat-card">
                    <div class="stat-card-icon" style="background: rgba(250, 204, 21, 0.1);">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                        </svg>
                    </div>
                    <div class="stat-number" data-target="48">4.8</div>
                    <div class="stat-label">Average Rating</div>
                </div>
            </div>

            <!-- Recent Activities Table -->
            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
                <h2 class="section-title" style="font-size: 24px; color: var(--text-primary);">My Activities</h2>
                <a href="{{ route('owner.add_activity') }}" class="card-cta">Add New Activity</a>
            </div>

            <div class="stat-card">
                <table class="admin-table">
                    <thead>
                        <tr>
                            <th>Actions</th>
                            <th>Status</th>
                            <th>Revenue</th>
                            <th>Bookings</th>
                            <th>Category</th>
                            <th>Activity</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <button class="action-btn">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M12 20h9"></path>
                                        <path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path>
                                    </svg>
                                </button>
                                <button class="action-btn">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <polyline points="3 6 5 6 21 6"></polyline>
                                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                    </svg>
                                </button>
                            </td>
                            <td><span class="status-badge status-active">Active</span></td>
                            <td>6,300 JOD</td>
                            <td>42</td>
                            <td>Sports</td>
                            <td>
                                <div style="display: flex; align-items: center; gap: 15px;">
                                    <!-- <div class="card-image" style="width: 50px; height: 50px; border-radius: 8px; overflow: hidden;"> -->
                                        <!-- <img src="{{ asset('images/activity1.jpg') }}" alt="Morning Yoga Session" style="width: 100%; height: 100%; object-fit: cover;"> -->
                                    </div>
                                    <span>Morning Yoga Session</span>
                                </div>
                            </td>
                        </tr>
                        <!-- يمكنك إضافة المزيد من الصفوف هنا -->
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script>
        window.addEventListener('load', () => {
            setTimeout(() => {
                const loader = document.getElementById('loader');
                if (loader) loader.classList.add('hidden');
            }, 1000);
        });

        // Animated counter for stats
        function animateCounter(element) {
            const target = parseInt(element.dataset.target.replace(/,/g, ''));
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

        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('.stat-number[data-target]').forEach(animateCounter);
        });
    </script>
@endsection
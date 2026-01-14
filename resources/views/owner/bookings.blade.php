@extends('layout.master')

@section('title', 'Owner Bookings - PRISM FLUX')
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/templatemo-prism-flux.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owner_admin.css') }}">
@endsection

@section('header')
    <header class="admin-header">
        <div class="header-title">
            <h1>Manage Bookings</h1>
            <p>View and manage all bookings for your activities</p>
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
        <a href="{{ route('owner.dashboard') }}" class="{{ request()->routeIs('owner.dashboard') ? 'active' : '' }}">Dashboard</a>
        <a href="{{ route('owner.add_activity') }}" class="{{ request()->routeIs('owner.add_activity') ? 'active' : '' }}">Add Activity</a>
        <a href="{{ route('owner.bookings') }}" class="{{ request()->routeIs('owner.bookings') ? 'active' : '' }}">Bookings</a>
        <a href="{{ route('owner.earnings') }}" class="{{ request()->routeIs('owner.earnings') ? 'active' : '' }}">Earnings</a>
    </nav>
@endsection

@section('content')
    <section class="stats-section">
        <div class="philosophy-container">
            <!-- Filters -->
            <div class="filters-bar">
                <select>
                    <option>All Activities</option>
                    <option>Morning Yoga Session</option>
                    <option>Desert Camping Adventure</option>
                </select>
                <select>
                    <option>All Statuses</option>
                    <option>Confirmed</option>
                    <option>Pending</option>
                    <option>Completed</option>
                </select>
                <input type="text" placeholder="Search bookings...">
            </div>

            <!-- Bookings Table -->
            <div class="stat-card">
                <table class="admin-table">
                    <thead>
                        <tr>
                            <th>Actions</th>
                            <th>Status</th>
                            <th>Amount</th>
                            <th>Participants</th>
                            <th>Date & Time</th>
                            <th>Customer</th>
                            <th>Activity</th>
                            <th>Booking ID</th>
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
                            <td><span class="status-badge status-confirmed">Confirmed</span></td>
                            <td>150 JOD</td>
                            <td>1</td>
                            <td>Jan 15, 2026<br>7:00 AM</td>
                            <td>Mohammed Ahmed</td>
                            <td>
                                <div style="display: flex; align-items: center; gap: 10px;">
                                    <!-- <div class="card-image" style="width: 40px; height: 40px; border-radius: 5px; overflow: hidden;">
                                        <img src="{{ asset('images/activity1.jpg') }}" alt="Morning Yoga Session" style="width: 100%; height: 100%; object-fit: cover;">
                                    </div> -->
                                    <span>Morning Yoga Session</span>
                                </div>
                            </td>
                            <td>#12345</td>
                        </tr>

                        <!-- يمكنك إضافة المزيد من الصفوف بنفس الهيكل -->
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
                            <td><span class="status-badge status-pending">Pending</span></td>
                            <td>200 JOD</td>
                            <td>2</td>
                            <td>Jan 20, 2026<br>4:00 PM</td>
                            <td>Layla Mansour</td>
                            <td>
                                <div style="display: flex; align-items: center; gap: 10px;">
                                    <div class="card-image" style="width: 40px; height: 40px; border-radius: 5px; overflow: hidden;">
                                        <img src="{{ asset('images/activity2.jpg') }}" alt="Desert Camping" style="width: 100%; height: 100%; object-fit: cover;">
                                    </div>
                                    <span>Desert Camping Adventure</span>
                                </div>
                            </td>
                            <td>#12346</td>
                        </tr>
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
    </script>
@endsection
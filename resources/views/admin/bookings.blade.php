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
            <img src="{{ asset('images/host.jpg') }}" alt="Admin User" class="user-avatar">
            <span>Sarah Ahmed</span>
        </div>
    </header>
@endsection

@section('sidebar')
    <div class="sidebar-logo">
        PRISM <span>FLUX</span>
    </div>

    <nav class="sidebar-nav">
        <a href="{{ route('admin.dashboard') }}" class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">Dashboard</a>
        <a href="{{ route('admin.users') }}" class="{{ request()->routeIs('admin.users') ? 'active' : '' }}">Users</a>
        <a href="{{ route('admin.activities') }}" class="{{ request()->routeIs('admin.activities') ? 'active' : '' }}">Activities</a>
        <a href="{{ route('admin.create_activity') }}" class="{{ request()->routeIs('admin.create_activity') ? 'active' : '' }}">Create Activity</a>
        <a href="{{ route('admin.edit_activity') }}" class="{{ request()->routeIs('admin.edit_activity') ? 'active' : '' }}">Edit Activity</a>
        <a href="{{ route('admin.bookings') }}" class="{{ request()->routeIs('admin.bookings') ? 'active' : '' }}">Bookings</a>
        <a href="{{ route('admin.admin_profile') }}" class="{{ request()->routeIs('admin.admin_profile') ? 'active' : '' }}">Admin Profile</a>
        <a href="{{ route('admin.reviews') }}" class="{{ request()->routeIs('admin.reviews') ? 'active' : '' }}">Reviews & Ratings</a>

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
                                
                                    <span>Morning Yoga Session</span>
                                </div>
                            </td>
                            <td>#12345</td>
                        </tr>
                        <!-- يمكنك تكرار <tr> هنا لكل حجز -->
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script src="{{ asset('js/templatemo-prism-scripts.js') }}" defer></script>
    <script>
        window.addEventListener('load', () => {
            setTimeout(() => {
                const loader = document.getElementById('loader');
                if (loader) loader.classList.add('hidden');
            }, 1000);
        });
    </script>
@endsection
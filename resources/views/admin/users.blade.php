@extends('layout.master')

@section('title', 'Admin Users - PRISM FLUX')
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/templatemo-prism-flux.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owner_admin.css') }}">
@endsection

@section('header')
    <header class="admin-header">
        <div class="header-title">
            <h1>User Management</h1>
            <p>Manage all platform users</p>
        </div>
        <div class="header-user">
            <img src="{{ asset('images/admin-avatar.jpg') }}" alt="Admin User" class="user-avatar">
            <span>Admin User</span>
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
                    <option>All Roles</option>
                    <option>Regular Users</option>
                    <option>Activity Hosts</option>
                    <option>Admins</option>
                </select>
                <select>
                    <option>All Statuses</option>
                    <option>Active</option>
                    <option>Inactive</option>
                    <option>Suspended</option>
                </select>
                <input type="text" placeholder="Search users...">
            </div>

            <!-- Users Table -->
            <div class="stat-card">
                <table class="admin-table">
                    <thead>
                        <tr>
                            <th>Actions</th>
                            <th>Joined</th>
                            <th>Status</th>
                            <th>Role</th>
                            <th>Email</th>
                            <th>User</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- User Row 1 -->
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
                            <td>Jan 2025</td>
                            <td><span class="status-badge status-active">Active</span></td>
                            <td>Regular User</td>
                            <td>mohammed@example.com</td>
                            <td>
                                <div style="display: flex; align-items: center; gap: 10px;">
                                    <div style="width: 40px; height: 40px; border-radius: 50%; overflow: hidden;">
                                        <!-- <img src="{{ asset('images/user-avatar.jpg') }}" alt="Mohammed Ahmed" style="width: 100%; height: 100%; object-fit: cover;"> -->
                                    </div>
                                    <span>Mohammed Ahmed</span>
                                </div>
                            </td>
                        </tr>

                        <!-- User Row 2 -->
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
                            <td>Jan 2025</td>
                            <td><span class="status-badge status-active">Active</span></td>
                            <td>Activity Host</td>
                            <td>sarah@example.com</td>
                            <td>
                                <div style="display: flex; align-items: center; gap: 10px;">
                                    <div style="width: 40px; height: 40px; border-radius: 50%; overflow: hidden;">
                                        <!-- <img src="{{ asset('images/host.jpg') }}" alt="Sarah Ahmed" style="width: 100%; height: 100%; object-fit: cover;"> -->
                                    </div>
                                    <span>Sarah Ahmed</span>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script src="{{ asset('js/templatemo-prism-scripts.js') }}" defer></script>
@endsection
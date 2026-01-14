@extends('layout.master')

@section('title', 'Admin Settings - PRISM FLUX')
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/templatemo-prism-flux.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owner_admin.css') }}">
@endsection

@section('header')
    <header class="admin-header">
        <div class="header-title">
            <h1>Activity Management</h1>
            <p>Manage all platform activities</p>
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
                    <option>All Categories</option>
                    <option>Sports</option>
                    <option>Adventures</option>
                    <option>Cultural</option>
                </select>
                <select>
                    <option>All Statuses</option>
                    <option>Active</option>
                    <option>Pending</option>
                    <option>Rejected</option>
                    <option>Archived</option>
                </select>
                <input type="text" placeholder="Search activities...">
                
                <!-- زر Create Activity -->
<a href="{{ route('admin.create_activity') }}" class="create-btn">+ Create New Activity</a>
            <!-- Activities Table -->
            <div class="stat-card">
                <table class="admin-table">
                    <thead>
                        <tr>
                            <th>Actions</th>
                            <th>Status</th>
                            <th>Bookings</th>
                            <th>Category</th>
                            <th>Host</th>
                            <th>Activity</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- نشاط 1 -->
                        <tr>
                            <td>
                                <!-- زر تعديل (يرسل إلى صفحة edit_activity مع ID النشاط) -->
                                <a href="{{ route('admin.edit_activity', ['id' => 1]) }}" class="action-btn">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M12 20h9"></path>
                                        <path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path>
                                    </svg>
                                </a>
                                <!-- زر حذف (يمكنك ربطه لاحقاً بـ DELETE أو confirm modal) -->
                                <button class="action-btn">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <polyline points="3 6 5 6 21 6"></polyline>
                                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                    </svg>
                                </button>
                            </td>
                            <td><span class="status-badge status-active">Active</span></td>
                            <td>42</td>
                            <td>Sports</td>
                            <td>Sarah Ahmed</td>
                            <td>
                                <span>Morning Yoga Session</span>
                            </td>
                        </tr>

                        <!-- نشاط 2 (مثال إضافي) -->
                        <tr>
                            <td>
                                <a href="{{ route('admin.edit_activity', ['id' => 2]) }}" class="action-btn">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M12 20h9"></path>
                                        <path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path>
                                    </svg>
                                </a>
                                <button class="action-btn">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <polyline points="3 6 5 6 21 6"></polyline>
                                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                    </svg>
                                </button>
                            </td>
                            <td><span class="status-badge status-pending">Pending</span></td>
                            <td>8</td>
                            <td>Adventures</td>
                            <td>Ali Hassan</td>
                            <td>
                                <span>Desert Camping Adventure</span>
                            </td>
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
@extends('layout.master')

@section('title', 'Admin Profile - PRISM FLUX')
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/templatemo-prism-flux.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owner_admin.css') }}">
@endsection

@section('header')
    <header class="admin-header">
        <div class="header-title">
            <h1>Admin Profile</h1>
            <p>Manage your profile details</p>
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
            <div class="profile-layout">
                <!-- Sidebar (الذي طلبت حذفه) -->
                <!-- ⚠️ تم حذفه تمامًا كما طلبت -->

                <!-- Main Content -->
                <div class="profile-content">
                    <h2 class="section-title">Account Information</h2>
                    <form id="profileForm">
                        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 15px; margin-bottom: 25px;">
                            <div class="form-group">
                                <label for="firstName">First Name</label>
                                <input type="text" id="firstName" value="Mohammed">
                            </div>
                            <div class="form-group">
                                <label for="lastName">Last Name</label>
                                <input type="text" id="lastName" value="Ahmed">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <input type="email" id="email" value="mohammed@example.com">
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone Number</label>
                            <input type="tel" id="phone" value="+966 50 123 4567">
                        </div>
                        <div class="form-group">
                            <label for="bio">Bio</label>
                            <textarea id="bio" rows="4">Outdoor enthusiast and adventure lover. I enjoy discovering new places and trying different activities.</textarea>
                        </div>
                        <button type="submit" class="card-cta">Save Changes</button>
                    </form>
                </div>
            </div>

            <!-- Upcoming Activities -->
            
    
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

@section('footer')
    <p>&copy; 2026 PRISM FLUX Admin Panel. All rights reserved.</p>
@endsection
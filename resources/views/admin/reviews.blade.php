@extends('layout.master')

@section('title', 'Admin Reviews - PRISM FLUX')
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/templatemo-prism-flux.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owner_admin.css') }}">
@endsection

@section('header')
    <header class="admin-header">
        <div class="header-title">
            <h1>Manage Reviews</h1>
            <p>View and manage all user reviews for activities</p>
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
                    <option>All Activities</option>
                    <option>Morning Yoga Session</option>
                    <option>Desert Camping Adventure</option>
                    <option>Beginner Art Workshop</option>
                </select>
                <select>
                    <option>All Statuses</option>
                    <option>Approved</option>
                    <option>Pending</option>
                    <option>Rejected</option>
                </select>
                <input type="text" placeholder="Search reviews...">
            </div>

            <!-- Reviews Table -->
            <div class="stat-card">
                <table class="reviews-table">
                    <thead>
                        <tr>
                            <th>Actions</th>
                            <th>Status</th>
                            <th>Rating</th>
                            <th>Review</th>
                            <th>Activity</th>
                            <th>User</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Review Row 1 -->
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
                            <td><span class="status-badge status-approved">Approved</span></td>
                            <td>
                                <div class="star-rating">
                                    <svg class="star" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><polygon points="12,2 15.09,8.26 22,9.27 16.5,14.08 17.74,21.09 12,17.74 6.26,21.09 7.5,14.08 2,9.27 8.91,8.26"/></svg>
                                    <svg class="star" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><polygon points="12,2 15.09,8.26 22,9.27 16.5,14.08 17.74,21.09 12,17.74 6.26,21.09 7.5,14.08 2,9.27 8.91,8.26"/></svg>
                                    <svg class="star" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><polygon points="12,2 15.09,8.26 22,9.27 16.5,14.08 17.74,21.09 12,17.74 6.26,21.09 7.5,14.08 2,9.27 8.91,8.26"/></svg>
                                    <svg class="star" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><polygon points="12,2 15.09,8.26 22,9.27 16.5,14.08 17.74,21.09 12,17.74 6.26,21.09 7.5,14.08 2,9.27 8.91,8.26"/></svg>
                                    <svg class="star empty" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="12,2 15.09,8.26 22,9.27 16.5,14.08 17.74,21.09 12,17.74 6.26,21.09 7.5,14.08 2,9.27 8.91,8.26"/></svg>
                                </div>
                            </td>
                            <td>Great session! Very relaxing and well-guided.</td>
                            <td>Morning Yoga Session</td>
                            <td>Ahmed Khalil</td>
                            <td>Jan 10, 2026</td>
                        </tr>

                        <!-- Review Row 2 -->
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
                            <td>
                                <div class="star-rating">
                                    <svg class="star" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><polygon points="12,2 15.09,8.26 22,9.27 16.5,14.08 17.74,21.09 12,17.74 6.26,21.09 7.5,14.08 2,9.27 8.91,8.26"/></svg>
                                    <svg class="star" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><polygon points="12,2 15.09,8.26 22,9.27 16.5,14.08 17.74,21.09 12,17.74 6.26,21.09 7.5,14.08 2,9.27 8.91,8.26"/></svg>
                                    <svg class="star" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><polygon points="12,2 15.09,8.26 22,9.27 16.5,14.08 17.74,21.09 12,17.74 6.26,21.09 7.5,14.08 2,9.27 8.91,8.26"/></svg>
                                    <svg class="star" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><polygon points="12,2 15.09,8.26 22,9.27 16.5,14.08 17.74,21.09 12,17.74 6.26,21.09 7.5,14.08 2,9.27 8.91,8.26"/></svg>
                                    <svg class="star empty" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="12,2 15.09,8.26 22,9.27 16.5,14.08 17.74,21.09 12,17.74 6.26,21.09 7.5,14.08 2,9.27 8.91,8.26"/></svg>
                                </div>
                            </td>
                            <td>The camping was fun but the food could be better.</td>
                            <td>Desert Camping Adventure</td>
                            <td>Layla Mansour</td>
                            <td>Jan 12, 2026</td>
                        </tr>

                        <!-- Review Row 3 -->
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
                            <td><span class="status-badge status-rejected">Rejected</span></td>
                            <td>
                                <div class="star-rating">
                                    <svg class="star" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><polygon points="12,2 15.09,8.26 22,9.27 16.5,14.08 17.74,21.09 12,17.74 6.26,21.09 7.5,14.08 2,9.27 8.91,8.26"/></svg>
                                    <svg class="star empty" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="12,2 15.09,8.26 22,9.27 16.5,14.08 17.74,21.09 12,17.74 6.26,21.09 7.5,14.08 2,9.27 8.91,8.26"/></svg>
                                    <svg class="star empty" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="12,2 15.09,8.26 22,9.27 16.5,14.08 17.74,21.09 12,17.74 6.26,21.09 7.5,14.08 2,9.27 8.91,8.26"/></svg>
                                    <svg class="star empty" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="12,2 15.09,8.26 22,9.27 16.5,14.08 17.74,21.09 12,17.74 6.26,21.09 7.5,14.08 2,9.27 8.91,8.26"/></svg>
                                    <svg class="star empty" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="12,2 15.09,8.26 22,9.27 16.5,14.08 17.74,21.09 12,17.74 6.26,21.09 7.5,14.08 2,9.27 8.91,8.26"/></svg>
                                </div>
                            </td>
                            <td>Inappropriate language used in review.</td>
                            <td>Beginner Art Workshop</td>
                            <td>Omar Fathi</td>
                            <td>Jan 11, 2026</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection
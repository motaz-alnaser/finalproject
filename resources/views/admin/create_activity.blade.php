@extends('layout.master')

@section('title', 'Create Activity - PRISM FLUX')
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/templatemo-prism-flux.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owner_admin.css') }}">
@endsection

@section('header')
    <header class="admin-header">
        <div class="header-title">
            <h1>Create New Activity</h1>
            <p>Create a new activity listing for your community</p>
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
            <!-- نحتفظ بالتصميم الأصلي تمامًا، فقط نضعه داخل كارت مركّز -->
            <div class="stat-card centered-form-card">
                <form id="addActivityForm">
                    <!-- Left Column -->
                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 30px;">
                        <div>
                            <div class="form-group" style="margin-bottom: 25px;">
                                <label for="activityTitle" style="display: block; color: var(--text-secondary); margin-bottom: 10px; text-transform: uppercase; font-size: 12px; letter-spacing: 1px;">Activity Title</label>
                                <input type="text" id="activityTitle" name="title" required style="width: 100%; padding: 15px; background: var(--carbon-dark); border: 1px solid var(--metal-dark); border-radius: 8px; color: var(--text-primary); font-size: 14px;">
                            </div>
                            
                            <div class="form-group" style="margin-bottom: 25px;">
                                <label for="category" style="display: block; color: var(--text-secondary); margin-bottom: 10px; text-transform: uppercase; font-size: 12px; letter-spacing: 1px;">Category</label>
                                <select id="category" name="category" required style="width: 100%; padding: 15px; background: var(--carbon-dark); border: 1px solid var(--metal-dark); border-radius: 8px; color: var(--text-primary); font-size: 14px;">
                                    <option value="">Select Category</option>
                                    <option value="sports">Sports</option>
                                    <option value="adventures">Adventures</option>
                                    <option value="cultural">Cultural</option>
                                </select>
                            </div>
                            
                            <div class="form-group" style="margin-bottom: 25px;">
                                <label for="location" style="display: block; color: var(--text-secondary); margin-bottom: 10px; text-transform: uppercase; font-size: 12px; letter-spacing: 1px;">Location</label>
                                <input type="text" id="location" name="location" required style="width: 100%; padding: 15px; background: var(--carbon-dark); border: 1px solid var(--metal-dark); border-radius: 8px; color: var(--text-primary); font-size: 14px;" placeholder="e.g., King Abdullah Park, Amman">
                            </div>
                            
                            <div class="form-group" style="margin-bottom: 25px;">
                                <label for="price" style="display: block; color: var(--text-secondary); margin-bottom: 10px; text-transform: uppercase; font-size: 12px; letter-spacing: 1px;">Price (JOD)</label>
                                <input type="number" id="price" name="price" required min="0" step="0.01" style="width: 100%; padding: 15px; background: var(--carbon-dark); border: 1px solid var(--metal-dark); border-radius: 8px; color: var(--text-primary); font-size: 14px;">
                            </div>
                            
                            <div class="form-group" style="margin-bottom: 25px;">
                                <label for="capacity" style="display: block; color: var(--text-secondary); margin-bottom: 10px; text-transform: uppercase; font-size: 12px; letter-spacing: 1px;">Max Capacity</label>
                                <input type="number" id="capacity" name="capacity" required min="1" style="width: 100%; padding: 15px; background: var(--carbon-dark); border: 1px solid var(--metal-dark); border-radius: 8px; color: var(--text-primary); font-size: 14px;">
                            </div>
                        </div>
                        
                        <!-- Right Column -->
                        <div>
                            <div class="form-group" style="margin-bottom: 25px;">
                                <label for="description" style="display: block; color: var(--text-secondary); margin-bottom: 10px; text-transform: uppercase; font-size: 12px; letter-spacing: 1px;">Description</label>
                                <textarea id="description" name="description" rows="6" required style="width: 100%; padding: 15px; background: var(--carbon-dark); border: 1px solid var(--metal-dark); border-radius: 8px; color: var(--text-primary); font-size: 14px; resize: vertical;" placeholder="Describe your activity in detail..."></textarea>
                            </div>
                            
                            <div class="form-group" style="margin-bottom: 25px;">
                                <label style="display: block; color: var(--text-secondary); margin-bottom: 10px; text-transform: uppercase; font-size: 12px; letter-spacing: 1px;">Activity Images</label>
                                <div style="border: 2px dashed var(--metal-dark); border-radius: 10px; padding: 30px; text-align: center; cursor: pointer; transition: all 0.3s ease;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" style="margin-bottom: 15px; color: var(--text-secondary);">
                                        <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                                        <circle cx="8.5" cy="8.5" r="1.5"></circle>
                                        <polyline points="21 15 16 10 5 21"></polyline>
                                    </svg>
                                    <p style="color: var(--text-secondary); margin-bottom: 10px;">Drag & drop images here</p>
                                    <p style="color: var(--text-dim); font-size: 12px;">or click to browse files</p>
                                    <input type="file" multiple accept="image/*" style="display: none;">
                                </div>
                            </div>
                            
                            <div style="display: flex; gap: 15px;">
                                <button type="submit" class="card-cta" style="flex: 1; padding: 12px;">Publish Activity</button>
                                <button type="button" class="card-cta" style="flex: 1; padding: 12px; background: linear-gradient(135deg, var(--metal-dark), var(--carbon-medium));">Save Draft</button>
                            </div>
                        </div>
                    </div>
                </form>
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

        // Form submission
        document.getElementById('addActivityForm').addEventListener('submit', (e) => {
            e.preventDefault();
            alert('Activity published successfully!');
        });

        // Image upload area interaction
        const imageUploadArea = document.querySelector('.image-upload-area-vertical');
        if (imageUploadArea) {
            imageUploadArea.addEventListener('click', () => {
                imageUploadArea.querySelector('input[type="file"]').click();
            });
        }
    </script>
@endsection
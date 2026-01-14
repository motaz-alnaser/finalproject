@extends('layout.master')

@section('title', 'Edit Activity - PRISM FLUX')
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/templatemo-prism-flux.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owner_admin.css') }}">
@endsection

@section('header')
    <!-- Header (مثل الداشبورد) -->
    <nav class="nav-container">
        <div>
            <h1 style="font-size: 28px; color: var(--text-primary);">Edit Activity</h1>
            <p style="color: var(--text-secondary);">edit activity listing for your community</p>
        </div>
        <div style="display: flex; align-items: center; gap: 20px;">
            <div style="display: flex; align-items: center; gap: 10px; color: var(--text-primary);">
                <img src="{{ asset('images/host.jpg') }}" alt="Admin User" style="width: 40px; height: 40px; border-radius: 50%; object-fit: cover;">
                <span>Sarah Ahmed</span>
            </div>
        </div>
    </nav>
@endsection

@section('sidebar')
    <!-- Sidebar (مثل الداشبورد) -->
    <div class="sidebar-logo">
        PRISM <span>FLUX</span>
    </div>

    <nav class="sidebar-nav">
        <a href="{{ route('admin.dashboard') }}">Dashboard</a>
          <a href="{{ route('admin.users') }}">Users</a>
        <a class="active" href="{{ route('admin.activities') }}">Activities</a>
        <a href="{{ route('admin.create_activity') }}">Create Activity</a>
         <a href="{{ route('admin.edit_activity') }}">Edite  Activity</a>
         <a href="{{ route('admin.bookings') }}">Bookings</a>
          <a href="{{ route('admin.admin_profile') }}">Admin Profile</a>
                  <a href="{{ route('admin.reviews') }}" class="{{ request()->routeIs('admin.reviews') ? 'active' : '' }}">Reviews & Ratings</a>

    </nav>
@endsection

@section('content')
    <main style="margin-right: 280px;">
        <!-- Add Activity Form -->
        <section class="stats-section" style="padding: 60px 30px 40px;">
            <div class="philosophy-container">
                <div class="stat-card" style="padding: 40px;">
                    <form id="addActivityForm">
                        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 30px;">
                            <!-- Left Column -->
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
    </main>
@endsection

@section('scripts')
    <script src="{{ asset('js/templatemo-prism-scripts.js') }}" defer></script>
    <script src="global.js"></script>
    <script>
        window.addEventListener('load', () => {
            setTimeout(() => {
                const loader = document.getElementById('loader');
                loader.classList.add('hidden');
            }, 1000);
        });

        // Form submission
        document.getElementById('addActivityForm').addEventListener('submit', (e) => {
            e.preventDefault();
            alert('Activity published successfully!');
        });
    </script>
@endsection

@extends('layouts.app')

@section('title', 'Admin Dashboard | GEMS')

@section('content')
<div class="bg-gray-100 min-h-screen py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        {{-- HEADER --}}
        <div class="flex justify-between items-center mb-8">
            <h1 class="text-3xl font-bold text-gray-900">Admin Dashboard</h1>

            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit"
                    class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-lg transition-colors">
                    Logout
                </button>
            </form>
        </div>

        {{-- DASHBOARD CARDS --}}
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

            {{-- CONTACT SUBMISSIONS --}}
            <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-200 hover:shadow-md transition-shadow">
                <div class="w-12 h-12 bg-teal-100 text-teal-600 rounded-xl flex items-center justify-center text-2xl mb-4">
                    ✉️
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Contact Submissions</h3>
                <p class="text-gray-600 mb-4">
                    View and manage messages from the Contact Us page.
                </p>
                <a href="{{ route('admin.contacts.index') }}"
                   class="text-teal-600 font-semibold hover:text-teal-700 inline-flex items-center">
                    Manage Submissions
                    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M9 5l7 7-7 7" />
                    </svg>
                </a>
            </div>

            {{-- GALLERY MANAGEMENT --}}
            <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-200 hover:shadow-md transition-shadow">
                <div class="w-12 h-12 bg-purple-100 text-purple-600 rounded-xl flex items-center justify-center text-2xl mb-4">
                    🖼️
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Gallery</h3>
                <p class="text-gray-600 mb-4">
                    Upload and manage images shown on the website gallery.
                </p>
                <a href="{{ route('admin.gallery.index') }}"
                   class="text-purple-600 font-semibold hover:text-purple-700 inline-flex items-center">
                    Manage Gallery
                    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M9 5l7 7-7 7" />
                    </svg>
                </a>
            </div>

            {{-- GOOGLE REVIEWS --}}
            <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-200 hover:shadow-md transition-shadow">
                <div class="w-12 h-12 bg-amber-100 text-amber-600 rounded-xl flex items-center justify-center text-2xl mb-4">
                    ⭐
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Google Reviews</h3>
                <p class="text-gray-600 mb-4">
                    Manage reviews displayed on the homepage.
                </p>
                <a href="{{ route('admin.reviews.index') }}"
                   class="text-amber-600 font-semibold hover:text-amber-700 inline-flex items-center">
                    Manage Reviews
                    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M9 5l7 7-7 7" />
                    </svg>
                </a>
            </div>

            {{-- USERS (COMING SOON) --}}
            <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-200 opacity-60">
                <div class="w-12 h-12 bg-gray-100 text-gray-400 rounded-xl flex items-center justify-center text-2xl mb-4">
                    👥
                </div>
                <h3 class="text-xl font-bold text-gray-400 mb-2">Users (Coming Soon)</h3>
                <p class="text-gray-400">
                    Management of user accounts and permissions.
                </p>
            </div>

        </div>
    </div>
</div>
@endsection

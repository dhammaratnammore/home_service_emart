@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="card border-0 shadow-lg overflow-hidden">
                <div class="row g-0">
                    <!-- Left Section with Profile Image -->
                    <div class="col-md-5 bg-gradient-indigo d-flex flex-column align-items-center justify-content-center p-4 py-5 text-white">
                        <div class="position-relative mb-4">
                            <img src="https://ui-avatars.com/api/?name={{ urlencode(Auth::user()->name) }}&background=ffffff&color=4f46e5&size=150"
                                 alt="Profile Picture"
                                 class="rounded-circle shadow"
                                 width="150"
                                 height="150">
                            <div class="position-absolute bottom-0 right-0 bg-white rounded-full p-2 shadow-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                            </div>
                        </div>
                        <h3 class="h4 font-weight-bold mb-1">{{ Auth::user()->name ?? 'User' }}</h3>
                        <p class="small text-indigo-100 mb-3">{{ Auth::user()->email ?? 'Email' }}</p>
                        <div class="badge bg-white text-indigo-600 px-3 py-1 rounded-pill shadow-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 inline-block mr-1" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                            </svg>
                            Verified Account
                        </div>
                    </div>

                    <!-- Right Section with Details & Logout -->
                    <div class="col-md-7 d-flex align-items-center">
                        <div class="p-4 p-lg-5 w-100">
                            <h2 class="h4 font-weight-bold text-gray-800 mb-4">Profile Information</h2>
                            
                            <div class="list-group list-group-flush">
                                <div class="list-group-item border-0 px-0 py-3 d-flex align-items-center">
                                    <div class="flex-shrink-0 bg-indigo-50 p-2 rounded-circle">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                        </svg>
                                    </div>
                                    <div class="ms-3">
                                        <h3 class="text-xs font-semibold text-gray-500 mb-0">FULL NAME</h3>
                                        <p class="mb-0 text-gray-900">{{ Auth::user()->name }}</p>
                                    </div>
                                </div>
                                
                                <div class="list-group-item border-0 px-0 py-3 d-flex align-items-center">
                                    <div class="flex-shrink-0 bg-indigo-50 p-2 rounded-circle">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                        </svg>
                                    </div>
                                    <div class="ms-3">
                                        <h3 class="text-xs font-semibold text-gray-500 mb-0">EMAIL ADDRESS</h3>
                                        <p class="mb-0 text-gray-900">{{ Auth::user()->email }}</p>
                                    </div>
                                </div>
                                
                                <div class="list-group-item border-0 px-0 py-3 d-flex align-items-center">
                                    <div class="flex-shrink-0 bg-indigo-50 p-2 rounded-circle">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                        </svg>
                                    </div>
                                    <div class="ms-3">
                                        <h3 class="text-xs font-semibold text-gray-500 mb-0">MEMBER SINCE</h3>
                                        <p class="mb-0 text-gray-900">{{ Auth::user()->created_at->format('F d, Y') }}</p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="mt-4 pt-4 border-top">
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-danger btn-sm w-100 d-flex align-items-center justify-content-center py-2 px-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                                        </svg>
                                        Sign Out
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .bg-gradient-indigo {
        background: linear-gradient(135deg, #4f46e5 0%, #7c3aed 100%);
    }
    .card {
        border-radius: 12px;
    }
    .rounded-circle {
        border: 4px solid rgba(255,255,255,0.2);
    }
</style>
@endsection
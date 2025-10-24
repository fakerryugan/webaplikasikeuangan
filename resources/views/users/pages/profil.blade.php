@extends('users.layouts.app')

@section('content')
<div class="min-h-screen bg-gray-100">
    <div class="max-w-[480px] mx-auto bg-white min-h-screen pb-24 relative overflow-x-hidden">

    <div class="text-white px-4 py-6 rounded-b-3xl"
     style="background: linear-gradient(to bottom right, #00C94D 50%, #00A73A 50%);">
    <div class="flex items-center justify-between mb-6"></div>

    <div>
        <h1 class="text-lg font-bold leading-tight text-center">Profile</h1>
    </div>
    
        <div class="flex flex-col items-center pb-8">
            <div class="relative mt-4">
                <img src="https://ui-avatars.com/api/?name={{ urlencode($profil['name']) }}&background=16A34A&color=fff" 
                     class="w-24 h-24 rounded-full border-4 border-white">
                <button class="absolute bottom-0 right-0 bg-white text-green-600 rounded-full p-1 shadow">
                    ✎
                </button>
            </div>
        </div>
    </div>

    <div class="p-4 space-y-4 -mt-6">
        <!-- Personal Info -->
        <div class="bg-green-50 rounded-2xl p-4 shadow">
            <div class="flex justify-between items-center mb-3">
                <h2 class="font-semibold text-gray-700">Personal Info</h2>
                <a href="#" class="text-green-600 font-medium">Edit</a>
            </div>
            <div class="space-y-2 text-gray-700">
                <div class="flex items-center space-x-2">
                    <span>👤</span>
                    <p>{{ $profil['name'] }}</p>
                </div>
                <div class="flex items-center space-x-2">
                    <span>📧</span>
                    <p>{{ $profil['email'] }}</p>
                </div>
                <div class="flex items-center space-x-2">
                    <span>📞</span>
                    <p>{{ $profil['phone'] }}</p>
                </div>
            </div>
        </div>

        <!-- Account Setting -->
        <div class="bg-green-50 rounded-2xl p-4 shadow">
            <h2 class="font-semibold text-gray-700 mb-3">Account Setting</h2>
            <div class="space-y-2 text-gray-700">
                <div class="flex items-center space-x-2">
                    <span>🔒</span>
                    <a href="#" class="hover:text-green-600">Ganti Password</a>
                </div>
                <div class="flex items-center space-x-2">
                    <span>⚙️</span>
                    <a href="#" class="hover:text-green-600">Menu Setting</a>
                </div>
            </div>
        </div>

        <!-- Opsi Lain -->
        <div class="bg-green-50 rounded-2xl p-4 shadow">
            <h2 class="font-semibold text-gray-700 mb-3">Opsi Lain</h2>
            <div class="space-y-2 text-gray-700">
                <div class="flex items-center space-x-2">
                    <span>↩️</span>
                    <a href="#" class="hover:text-green-600">Log Out</a>
                </div>
                <div class="flex items-center space-x-2">
                    <span>🗑️</span>
                    <a href="#" class="text-red-600 font-semibold hover:text-red-700">Hapus Akun</a>
                </div>
            </div>
        </div>
    </div>

</body>
@endsection

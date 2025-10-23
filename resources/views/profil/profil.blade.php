@extends('layouts.app')

@section('content')
<body class="bg-gray-100">

    <!-- Header Hijau -->
    <div class="bg-gradient-to-br from-green-500 to-green-700 text-white rounded-b-3xl relative">
        <div class="p-4 flex items-center">
            <a href="#" class="text-white text-2xl mr-3">←</a>
            <h1 class="text-xl font-semibold">Profil</h1>
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

    <!-- Bottom Navigation -->
    <div class="fixed bottom-0 left-0 right-0 bg-white border-t flex justify-around items-center py-3">
        <a href="#" class="text-gray-500 text-xl">🏠</a>
        <a href="#" class="text-gray-500 text-xl">📊</a>
        <a href="#" class="bg-green-600 text-white text-3xl rounded-full px-3 py-0.5 shadow-lg">＋</a>
        <a href="#" class="text-gray-500 text-xl">📋</a>
        <a href="#" class="text-green-600 text-xl">👤</a>
    </div>

</body>
@endsection

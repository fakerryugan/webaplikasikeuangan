<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ __('Forget Password') }}</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[linear-gradient(45deg,_#00A73A_0%,_#FFFFFF_44%,_#17AF4C_100%)] flex items-center justify-center min-h-screen">

  <!-- Container -->
  <div class="w-full flex flex-col items-center justify-center px-4 sm:px-6 md:px-8">

    <!-- Title -->
    <div class="text-center mb-5">
      <h2 class="text-gray-900 text-xl sm:text-2xl font-semibold">Forget Password?</h2>
      <p class="text-gray-700 text-sm sm:text-base">Masukkan email yang sudah terdaftar untuk memulihkan akun</p>
    </div>

    <!-- Form Card -->
    <div class="bg-gradient-to-br from-[#07EB5E] to-[#00983A] rounded-[1.5rem] shadow-[0_0_40px_rgba(0,0,0,0.3)] w-full max-w-sm p-6 sm:p-8 flex flex-col items-center">

      <!-- Form -->
      <form class="space-y-4 w-full" method="POST" action="{{ route('password.email') }}">
        @csrf
        <div>
          <label for="email" class="block text-white text-sm font-medium mb-1">{{ __('Email') }}</label>
          <input id="email" name="email" type="email" placeholder="sample@gmail.com"
                 class="w-full bg-white/90 text-gray-700 rounded-xl px-3 py-2 focus:ring-2 focus:ring-green-400 focus:outline-none placeholder-gray-400"
                 required autofocus>
        </div>
        
        @if (session('status'))
            <p class="mt-3 text-sm text-center italic font-medium" style="color: #003DA6;">
            {{ session('status') }}
            </p>
        @endif

        <!-- Button -->
        <button type="submit" 
          class="w-full bg-gradient-to-r from-[#00DA19] to-[#00740E] hover:from-[#00E01C] hover:to-[#006B0D] text-white font-semibold py-3 rounded-2xl shadow-[0_4px_10px_rgba(0,0,0,0.3)] transition-transform transform hover:scale-[1.02]">
          {{ __('Email Password Reset Link') }}
        </button>
      </form>

      @if ($errors->any())
        <p class="mt-3 text-sm text-center italic font-medium text-red-200">
          {{ $errors->first('email') }}
        </p>
      @endif
    </div>
  </div>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ __('Register Your Account') }}</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[linear-gradient(45deg,_#00A73A_0%,_#FFFFFF_44%,_#17AF4C_100%)] flex items-center justify-center min-h-screen">

  <!-- Container -->
  <div class="flex flex-col items-center justify-center w-full px-4">

    <!-- Title di atas form -->
    <div class="text-center mb-4">
      <h2 class="text-gray-900 text-xl font-semibold">Register Your Account</h2>
      <p class="text-gray-700 text-sm">Enter your email and password to Register</p>
    </div>

    <!-- Form Card -->
    <div class="bg-gradient-to-br from-[#07EB5E] to-[#00983A] rounded-[1.5rem] shadow-[0_0_40px_rgba(0,0,0,0.3)] w-full max-w-sm p-6 flex flex-col items-center">

      <!-- Buttons -->
      <div class="flex w-full gap-2 mb-4">
        <button class="flex-1 flex items-center justify-center gap-2 bg-white text-gray-700 py-2 px-3 rounded-xl shadow hover:scale-105 transition">
          <img src="https://www.svgrepo.com/show/475656/google-color.svg" class="w-5 h-5" alt="">
          <span class="text-sm sm:text-base">{{ __('Login with Google') }}</span>
        </button>

        <button class="flex-1 flex items-center justify-center gap-2 bg-white text-gray-700 py-2 px-3 rounded-xl shadow hover:scale-105 transition">
          <img src="https://www.svgrepo.com/show/475627/apple-black.svg" class="w-5 h-5" alt="">
          <span class="text-sm sm:text-base">{{ __('Login with Apple') }}</span>
        </button>
      </div>

      <!-- Divider -->
      <div class="relative flex py-3 items-center w-full mb-2">
        <div class="flex-grow border-t border-white/50"></div>
        <span class="flex-shrink mx-2 text-white/70 text-xs">{{ __('OR') }}</span>
        <div class="flex-grow border-t border-white/50"></div>
      </div>

      <!-- Form -->
      <form class="space-y-3 w-full" method="POST" action="{{ route('register') }}">
        @csrf
        <div>
          <label class="text-white text-sm">{{ __('Name') }}</label>
          <input id="name" name="name" type="text" placeholder="{{ __('Your name') }}" class="w-full bg-white/90 text-gray-700 border-none rounded-xl px-3 py-2 focus:ring-2 focus:ring-green-400 focus:outline-none" required>
        </div>
        <div>
          <label class="text-white text-sm">{{ __('Email') }}</label>
          <input id="email" name="email" type="email" placeholder="sample@gmail.com" class="w-full bg-white/90 text-gray-700 border-none rounded-xl px-3 py-2 focus:ring-2 focus:ring-green-400 focus:outline-none" required>
        </div>

        <!-- Password -->
        <div>
          <label class="text-white text-sm">{{ __('Password') }}</label>
          <div class="relative">
            <input id="password" name="password" type="password" placeholder="********"
              class="w-full bg-white/90 text-gray-700 border-none rounded-xl px-3 py-2
                     focus:ring-2 focus:ring-green-400 focus:outline-none" required>

            <!-- Tombol toggle -->
            <button type="button" id="togglePassword" class="absolute right-3 top-2.5 text-gray-500">
              <svg id="eyeOpen1" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none"
                viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M2.458 12C3.732 7.943 7.523 5 12 5
                         c4.478 0 8.268 2.943 9.542 7
                         -1.274 4.057-5.064 7-9.542 7
                         -4.477 0-8.268-2.943-9.542-7z" />
              </svg>
              <svg id="eyeClosed1" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 hidden" fill="none"
                viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M13.875 18.825A10.05 10.05 0 0112 19
                         c-4.478 0-8.268-2.943-9.542-7
                         a10.05 10.05 0 012.062-3.368M6.23 6.23
                         A9.956 9.956 0 0112 5c4.478 0 8.268 2.943
                         9.542 7a9.97 9.97 0 01-4.132 5.411M15 12a3 3 0 11-6 0
                         3 3 0 016 0z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M3 3l18 18" />
              </svg>
            </button>
          </div>

          <!-- Pesan validasi password -->
          <p id="passwordRequirements" class="text-red-500 text-xs mt-1 hidden">
            Minimal 8 karakter, mengandung huruf besar, kecil, angka, dan simbol.
          </p>
        </div>

        <!-- Confirm Password -->
        <div>
          <label class="text-white text-sm">{{ __('Confirm Password') }}</label>
          <div class="relative">
            <input id="password_confirmation" name="password_confirmation" type="password" placeholder="********"
              class="w-full bg-white/90 text-gray-700 border-none rounded-xl px-3 py-2
                     focus:ring-2 focus:ring-green-400 focus:outline-none" required>

            <button type="button" id="toggleConfirm" class="absolute right-3 top-2.5 text-gray-500">
              <svg id="eyeOpen2" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none"
                viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M2.458 12C3.732 7.943 7.523 5 12 5
                         c4.478 0 8.268 2.943 9.542 7
                         -1.274 4.057-5.064 7-9.542 7
                         -4.477 0-8.268-2.943-9.542-7z" />
              </svg>
              <svg id="eyeClosed2" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 hidden" fill="none"
                viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M13.875 18.825A10.05 10.05 0 0112 19
                         c-4.478 0-8.268-2.943-9.542-7
                         a10.05 10.05 0 012.062-3.368M6.23 6.23
                         A9.956 9.956 0 0112 5c4.478 0 8.268 2.943
                         9.542 7a9.97 9.97 0 01-4.132 5.411M15 12a3 3 0 11-6 0
                         3 3 0 016 0z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M3 3l18 18" />
              </svg>
            </button>
          </div>

          <!-- Pesan error konfirmasi -->
          <p id="confirmError" class="text-red-500 text-xs mt-1 hidden">
            Konfirmasi password tidak cocok.
          </p>
        </div>

        <!-- Remember -->
        <div class="flex items-center text-white/90">
          <input id="remember" type="checkbox" class="h-4 w-4 text-green-500 focus:ring-green-400 border-white rounded">
          <label for="remember" class="ml-2 text-sm">{{ __('Remember Me') }}</label>
        </div>

        <!-- Button -->
        <button type="submit" 
          class="w-full bg-gradient-to-r from-[#00DA19] to-[#00740E]
                 hover:from-[#00E01C] hover:to-[#006B0D]
                 text-white font-semibold py-3 rounded-2xl
                 shadow-[0_4px_10px_rgba(0,0,0,0.3)]
                 transition-transform transform hover:scale-[1.02]">
          {{ __('Register') }}
        </button>
      </form>

      <p class="text-white/80 text-sm mt-4">
        {{ __("Already have an account?") }} 
        <a href="{{ route('login') }}" class="underline text-white font-semibold">{{ __('Login') }}</a>
      </p>
    </div>
  </div>

  <!-- SCRIPT -->
  <script>
    // Toggle password visibility
    function toggleVisibility(inputId, eyeOpenId, eyeClosedId) {
      const input = document.getElementById(inputId);
      const eyeOpen = document.getElementById(eyeOpenId);
      const eyeClosed = document.getElementById(eyeClosedId);

      const type = input.getAttribute('type') === 'password' ? 'text' : 'password';
      input.setAttribute('type', type);
      eyeOpen.classList.toggle('hidden');
      eyeClosed.classList.toggle('hidden');
    }

    document.getElementById('togglePassword').addEventListener('click', () => {
      toggleVisibility('password', 'eyeOpen1', 'eyeClosed1');
    });

    document.getElementById('toggleConfirm').addEventListener('click', () => {
      toggleVisibility('password_confirmation', 'eyeOpen2', 'eyeClosed2');
    });

    // Password validation real-time
    const passwordInput = document.getElementById("password");
    const passwordRequirements = document.getElementById("passwordRequirements");
    const confirmInput = document.getElementById("password_confirmation");
    const confirmError = document.getElementById("confirmError");

    passwordInput.addEventListener("input", function() {
      const password = passwordInput.value;
      const minLength = password.length >= 8;
      const hasUpper = /[A-Z]/.test(password);
      const hasLower = /[a-z]/.test(password);
      const hasNumber = /\d/.test(password);
      const hasSymbol = /[!@#$%^&*(),.?":{}|<>]/.test(password);

      // Muncul saat mulai mengetik
      if (password.length > 0) {
        passwordRequirements.classList.remove("hidden");
      } else {
        passwordRequirements.classList.add("hidden");
      }

      // Hilang jika semua valid
      if (minLength && hasUpper && hasLower && hasNumber && hasSymbol) {
        passwordRequirements.classList.add("hidden");
      } else {
        passwordRequirements.classList.remove("hidden");
        passwordRequirements.classList.remove("text-green-500");
        passwordRequirements.classList.add("text-red-500");
      }
    });

    // Cek kecocokan konfirmasi password
    confirmInput.addEventListener("input", function() {
      const password = passwordInput.value;
      const confirm = confirmInput.value;

      if (confirm.length > 0 && confirm !== password) {
        confirmError.classList.remove("hidden");
      } else {
        confirmError.classList.add("hidden");
      }
    });
  </script>

</body>
</html>

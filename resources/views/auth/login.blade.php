<x-guest-layout>
    <style>
        .login-label {
            color: #181113 !important;
        }

        .login-link {
            color: #b5838d !important;
            text-decoration: underline;
        }

        .login-link:hover {
            color: #181113 !important;
        }

        .login-btn {
            background-color: #b5838d !important;
            color: white !important;
            border-radius: 0.75rem !important;
        }

        .login-btn:hover {
            background-color: #88636f !important;
        }

        .login-checkbox:checked {
            background-color: #b5838d !important;
            border-color: #b5838d !important;
        }

        .login-checkbox:focus {
            border-color: #b5838d !important;
            --tw-ring-color: #b5838d !important;
        }

        .login-focus:focus {
            border-color: #b5838d !important;
            box-shadow: 0 0 0 2px #b5838d !important;
        }

        .min-h-screen {
            background-color: #f8f6f6 !important;
        }
    </style>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" dir="rtl" :value="__('البريد الإلكتروني')" class="login-label" />
            <x-text-input id="email" class="block mt-1 w-full login-focus" type="email" name="email"
                :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" dir="rtl" :value="__('كلمة المرور')" class="login-label" />

            <x-text-input id="password" class="block mt-1 w-full login-focus" type="password" name="password" required
                autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4" dir="rtl">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox"
                    class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 shadow-sm login-checkbox"
                    name="remember">
                <span class="ms-2 text-sm login-label">{{ __('تذكرني') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">

            <x-primary-button class="ms-3 login-btn">
                {{ __('تسجيل الدخول') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
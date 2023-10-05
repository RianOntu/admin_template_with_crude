
<x-guest-layout>
    <!-- Session Status -->
   
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <p>SIGN IN BELOW:</p>
    
<div class="form">
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" class="email_label" />
            <x-text-input id="email" class="block mt-1 w-full email_input" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" placeholder="Email" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" class="password_label" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full password_input"
                            type="password"
                            name="password"
                            placeholder="Password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-start mt-4">
          

            <x-primary-button class="mr-3 btn btn-primary">
                {{ __('Log in') }}
            </x-primary-button>
            @if (Route::has('password.request'))
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                {{ __('Forgot your password?') }}
            </a>
        @endif
        </div>
    </form>
</div>
    
</x-guest-layout>

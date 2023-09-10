<x-guest-layout>
    <form method="POST" action="{{ route('registerBoss') }}">
        @csrf
        <!-- Company ID -->
        <div class="mt-4">
            <x-input-label for="signupCompanyName" :value="__('Company Name')" />
            <x-text-input id="signupCompanyName" class="block mt-1 w-full" type="text" name="signupCompanyName" :value="old('signupCompanyName')" required autocomplete="signupCompanyName" />
            <x-input-error :messages="$errors->get('signupCompanyName')" class="mt-2" />
        </div>

        <!-- Company Post Code -->
        <div class="mt-4">
            <x-input-label for="signupCompanyPostCode" :value="__('Company Post Code')" />
            <x-text-input id="signupCompanyPostCode" class="block mt-1 w-full" type="text" name="signupCompanyPostCode" :value="old('signupCompanyPostCode')" required autocomplete="signupCompanyName" />
            <x-input-error :messages="$errors->get('signupCompanyPostCode')" class="mt-2" />
        </div>

        <!-- Company Address -->
        <div class="mt-4">
            <x-input-label for="signupCompanyAddress" :value="__('Company Address')" />
            <x-text-input id="signupCompanyAddress" class="block mt-1 w-full" type="text" name="signupCompanyAddress" :value="old('signupCompanyAddress')" required autocomplete="signupCompanyName" />
            <x-input-error :messages="$errors->get('signupCompanyAddress')" class="mt-2" />
        </div>



        <!-- User Name -->
        <div class="mt-4">
            <x-input-label for="userName" :value="__('Username')" />
            <x-text-input id="userName" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="mt-4 flex" style="justify-content: space-around;">
            <!-- First Name -->
            <div>
                <x-input-label for="firstName" :value="__('First Name')" />
                <x-text-input id="firstName" class="block mt-1 w-full" type="text" name="firstName" :value="old('firstName')" required autofocus autocomplete="firstName" />
                <x-input-error :messages="$errors->get('firstName')" class="mt-2" />
            </div>

            <!-- Last Name -->
            <div>
                <x-input-label for="lastName" :value="__('Last Name')" />
                <x-text-input id="lastName" class="block mt-1 w-full" type="text" name="lastName" :value="old('lastName')" required autofocus autocomplete="lastName" />
                <x-input-error :messages="$errors->get('lastName')" class="mt-2" />
            </div>
        </div>
        

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

    <div class="mt-6 text-center">
        <x-primary-button>
            {{ __('Register') }}
        </x-primary-button>
    </div>
    <div class="mt-5 text-center">
        <a class="underline text-sm text-baseColor text-baseColor hover:text-baseColor-900 hover:text-baseColorDark rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
            {{ __('Already registered?') }}
        </a>
    </div>
        
    </form>
</x-guest-layout>

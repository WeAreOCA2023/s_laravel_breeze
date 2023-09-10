<x-guest-layout>
    <form method="POST" action="{{ route('registerBoss') }}">
        @csrf
        <!-- Company ID -->
        <div class="mt-4">
            <x-input-label for="signupCompanyName" :value="__('Company Name')" />
            <x-text-input id="signupCompanyName" class="block mt-1 w-full" type="text" name="signupCompanyName" :value="old('signupCompanyName')" required />
            <x-input-error :messages="$errors->get('signupCompanyName')" class="mt-2" />
        </div>

        <!-- Company Post Code -->
        <div class="mt-4">
            <x-input-label for="signupCompanyPostCode" :value="__('Company Post Code')" />
            <x-text-input id="signupCompanyPostCode" class="block mt-1 w-full" type="text" name="signupCompanyPostCode" :value="old('signupCompanyPostCode')" required />
            <x-input-error :messages="$errors->get('signupCompanyPostCode')" class="mt-2" />
        </div>

        <!-- Company Address -->
        <div class="mt-4">
            <x-input-label for="signupCompanyAddress" :value="__('Company Address')" />
            <x-text-input id="signupCompanyAddress" class="block mt-1 w-full" type="text" name="signupCompanyAddress" :value="old('signupCompanyAddress')" required />
            <x-input-error :messages="$errors->get('signupCompanyAddress')" class="mt-2" />
        </div>



        <!-- User Name -->
        <div class="mt-4">
            <x-input-label for="signupBossUserName" :value="__('Username')" />
            <x-text-input id="signupBossUserName" class="block mt-1 w-full" type="text" name="signupBossUserName" :value="old('signupBossUserName')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('signupBossUserName')" class="mt-2" />
        </div>

        <div class="mt-4 flex" style="justify-content: space-around;">
            <!-- First Name -->
            <div>
                <x-input-label for="signupBossFirstName" :value="__('First Name')" />
                <x-text-input id="signupBossFirstName" class="block mt-1 w-full" type="text" name="signupBossFirstName" :value="old('signupBossFirstName')" required/>
                <x-input-error :messages="$errors->get('signupBossFirstName')" class="mt-2" />
            </div>

            <!-- Last Name -->
            <div>
                <x-input-label for="signupBossLastName" :value="__('Last Name')" />
                <x-text-input id="signupBossLastName" class="block mt-1 w-full" type="text" name="signupBossLastName" :value="old('signupBossLastName')" required />
                <x-input-error :messages="$errors->get('signupBossLastName)" class="mt-2" />
            </div>
        </div>
        

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="signupBossEmail" :value="__('Email')" />
            <x-text-input id="signupBossEmail" class="block mt-1 w-full" type="email" name="signupBossEmail" :value="old('signupBossEmail')" required autocomplete="email" />
            <x-input-error :messages="$errors->get('signupBossEmail')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="signupBossPassword" :value="__('Password')" />
            <x-text-input id="signupBossPassword" class="block mt-1 w-full" type="password" name="signupBossPassword" required autocomplete="signupBossPassword" />
            <x-input-error :messages="$errors->get('signupBossPassword')" class="mt-2" />
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

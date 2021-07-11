<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
    <div class="mt-4">
        <x-jet-authentication-card-logo />
    </div>

    <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
        <form method="POST" action="">
            @csrf
            <div class="mt-4">
                <x-jet-label for="" value="{{ __('Product Subscription') }}" />
                <div>
                <x-jet-input id="userName" class="form-radio h-4 w-4 text-indigo-600 transition duration-150 ease-in-out" type="radio" name="userName" required autofocus />
                    English Academy
                </div>
                <div>
                    <x-jet-input id="userName" class="form-radio h-4 w-4 text-indigo-600 transition duration-150 ease-in-out" type="radio" name="userName" required autofocus />
                    Skill Academy
                </div>
                <div>
                    <x-jet-input id="userName" class="form-radio h-4 w-4 text-indigo-600 transition duration-150 ease-in-out" type="radio" name="userName" required autofocus />
                    Ruangguru
                </div>
            </div>
            <div class="mt-4">
                <x-jet-label for="userName" value="{{ __('Fullname') }}" />
                <x-jet-input id="userName" class="block mt-1 w-full" type="text" name="userName" :value="old('userName')" required autofocus />
            </div>
            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>
            <div class="mt-4">
                <x-jet-label for="userPhoneNumber" value="{{ __('Contact Number') }}" />
                <x-jet-input id="userPhoneNumber" class="block mt-1 w-full" type="number" name="userPhoneNumber" required />
            </div>
            <div class="mt-4">
                <x-jet-label for="userPhoneNumber" value="{{ __('Street Address') }}" />
                <x-jet-input id="userPhoneNumber" class="block mt-1 w-full" type="text" name="userPhoneNumber" required />
            </div>
            <div class="mt-4">
                <x-jet-label for="village" value="{{ __('Village') }}" />
                <x-jet-input id="village" class="block mt-1 w-full" type="text" name="village" required />
            </div>
            <div class="mt-4">
                <x-jet-label for="subDistrict" value="{{ __('Sub-District') }}" />
                <x-jet-input id="subDistrict" class="block mt-1 w-full" type="text" name="subDistrict" required />
            </div>
            <div class="mt-4">
                <x-jet-label for="district" value="{{ __('District') }}" />
                <x-jet-input id="district" class="block mt-1 w-full" type="text" name="district" required />
            </div>
            <div class="mt-4">
                <x-jet-label for="city" value="{{ __('City') }}" />
                <x-jet-input id="city" class="block mt-1 w-full" type="text" name="city" required />
            </div>
            <div class="mt-4">
                <x-jet-label for="province" value="{{ __('Province') }}" />
                <x-jet-input id="province" class="block mt-1 w-full" type="text" name="province" required />
            </div>
            <div class="mt-4">
                <x-jet-label for="postalCode" value="{{ __('zip code / postal code') }}" />
                <x-jet-input id="postalCode" class="block mt-1 w-full" type="text" name="postalCode" required />
            </div>
            <x-jet-button class="mt-4">
                {{ __('Submit') }}
            </x-jet-button>
        </form>
    </div>
</div>

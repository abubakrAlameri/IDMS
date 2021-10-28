<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('الاسم')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('البريد الاكتروني')" />

                <x-input id="email" 
                class="block mt-1 w-full" 
                type="email" name="email" 
                :value="old('email')" required />
            </div>
            {{-- address --}}
            <div class="mt-4">
                <x-label for="adress" :value="__('العنوان')" />

                <x-input id="adress" class="block mt-1 w-full" type="text" name="adress" :value="old('adress')" required />
            </div>
            {{-- gender --}}
            <div class="mt-4 flex justify-end">
                <div class="flex mt-4 text-right">
                  <x-label for="male" :value="__('ذكر')" />
                    
                   <x-radio id='male' name="gender" value="male" checked />
                </div>

                <div class="flex ml-4 mt-4 text-right">
                    <x-label for="female" :value="__('أنثى')" />
                    
                   <x-radio id='female' name='gender' value="female" />
                </div>

            </div>
            <div class="mt-4">
                <x-label for="phone" :value="__('رقم الهاتف')" />

                <x-input id="phone" class="block mt-1 w-full"
                                type="text"
                                name="phone"
                                :value="old('phone')"
                                required />
            </div>
            <div class="mt-4">
                <x-label for="countery" :value="__('الدولة')" />

                <x-input id="country" class="block mt-1 w-full"
                                type="text"
                                name="countery"
                                :value="old('country')"
                                required />
            </div>
            <div class="mt-4">
                <x-label for="attachment" :value="__('صورة شخصية ')" />

                <x-input id="attachment" class="block mt-1 w-full"
                                type="file"
                                accept="image/png, image/jpeg"
                                :value="old('attachment')"
                                name="attachment"
                                required />
            </div> 
            <div class="mt-4">
                <x-label for="age" :value="__('العمر')" />

                <x-input id="age" class="block mt-1 w-full"
                                type="number"
                                name="age"
                                :value="old('age')"
                                required />
            </div>
            <div class="mt-4">
                <x-label for="height" :value="__('الطول')" />

                <x-input id="height" class="block mt-1 w-full"
                                type="number"
                                name="height"
                                :value="old('height')"
                                required />
            </div>
            <div class="mt-4">
                <x-label for="weight" :value="__('الوزن')" />

                <x-input id="weight" class="block mt-1 w-full"
                                type="number"
                                name="weight"
                                :value="old('weight')"
                                required />
            </div>
            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('كلمة المرور')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('تأكيد كلمة المرور')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-strat mt-4">

                <x-button class="mr-4">
                    {{ __('تسجيل') }}
                </x-button>
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('هل لديك حساب بالفعل؟') }}
                </a>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>

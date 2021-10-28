<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <div class="mb-4 text-sm text-gray-600 text-right">
            {{ __('شكرا لتسجيلك لقد قمنا بارسال رابط تاكيد الى بريدك الاكتروني قم بتفقد حسابك') }}
        </div>

        @if (session('status') == 'verification-link-sent')
            <div class="mb-4 font-medium text-sm text-green-600 text-right">
                {{ __('تم ارسال رابط التاكيد مرة اخرى') }}
            </div>
        @endif

        <div class="mt-4 flex items-center justify-between">
            <form method="POST" action="{{ route('verification.send') }}">
                @csrf

                <div>
                    <x-button>
                        {{ __('اعادة ارسال رابط التاكيد') }}
                    </x-button>
                </div>
            </form>

            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900">
                    {{ __('تسجيل خروج') }}
                </button>
            </form>
        </div>
    </x-auth-card>
</x-guest-layout>

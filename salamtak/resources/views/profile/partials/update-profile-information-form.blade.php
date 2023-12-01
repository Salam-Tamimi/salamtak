<section dir="rtl" style="padding: 1.5%;">
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('معلومات الحساب') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600" style="font-size: 20px;">
            {{ __("تعديل معلومات حسابك والبريد الإلكتروني.") }}
        </p>
    </header>

    <form dir="rtl" id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <div style="margin-top:2%;">
            <x-input-label style="font-size: 20px;" for="name" :value="__('الإسم')" />
            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $user->name)" required autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>

        <div style="margin-top:2%;">
            <x-input-label style="font-size: 20px;" for="email" :value="__('البريد الإلكتروني')" />
            <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $user->email)" required autocomplete="username" />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div style="margin-top:2%;">
                    <p class="text-sm mt-2 text-gray-800">
                        {{ __('Your email address is unverified.') }}

                        <button form="send-verification" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            {{ __('Click here to re-send the verification email.') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 font-medium text-sm text-green-600">
                            {{ __('A new verification link has been sent to your email address.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>

        <div class="flex items-center gap-4" style="margin-top:2%;">
            <x-primary-button style="font-size: 20px;padding: 0.5% 1%; background-color:rgb(68, 68, 198); color:white; border:none;">{{ __('حفظ') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
                <p 
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600"
                >{{ __('تم حفظ التعديلات.') }}</p>
            @endif
        </div>
    </form>
</section>

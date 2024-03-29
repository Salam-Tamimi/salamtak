<section dir="rtl" style="padding: 1.5%;">
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('تعديل كلمة المرور') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __('تأكد من أن حسابك يستخدم كلمة مرور طويلة وعشوائية ليظل آمنًا.') }}
        </p>
    </header>

    <form dir="rtl" method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('put')

        <div style="margin-top:2%;">
            <x-input-label for="current_password" :value="__('كلمة المرور الحالية')" />
            <x-text-input id="current_password" name="current_password" type="password" class="mt-1 block w-full" autocomplete="current-password" />
            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
        </div>

        <div style="margin-top:2%;">
            <x-input-label for="password" :value="__('كلمة المرور الجديدة')" />
            <x-text-input id="password" name="password" type="password" class="mt-1 block w-full" autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
        </div>

        <div style="margin-top:2%;">
            <x-input-label for="password_confirmation" :value="__('تأكيد كلمة المرور الجديدة')" />
            <x-text-input id="password_confirmation" name="password_confirmation" type="password" class="mt-1 block w-full" autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
        </div>

        <div style="margin-top:2%;" class="flex items-center gap-4">
            <x-primary-button style="font-size: 20px;padding: 0.5% 1%; background-color:rgb(68, 68, 198); color:white; border:none;">{{ __('حفظ') }}</x-primary-button>

            @if (session('status') === 'password-updated')
            <script>
                // Redirect the user back to the previous page after 2 seconds
                setTimeout(function(){
                    window.location.href = document.referrer;
                });
            </script> 
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600"
                    >{{ __('تم حفظ التعديلات.') }}
                </p>
            @endif
        </div>
    </form>
</section>

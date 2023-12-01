<section class="space-y-6" dir="rtl" style="padding: 1.5%;">
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('حذف الحساب') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __('بمجرد حذف حسابك، سيتم حذف جميع موارده وبياناته نهائيًا. قبل حذف حسابك، يرجى تنزيل أي بيانات أو معلومات ترغب في الاحتفاظ بها.') }}
        </p>
    </header>

    <x-danger-button
        x-data=""
        x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"
        style="font-size: 20px;padding: 0.5% 1%; background-color:rgb(215, 44, 44); color:white; border:none;"
    >{{ __('حذف الحساب') }}</x-danger-button>

    <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
        <form dir="rtl" method="post" action="{{ route('profile.destroy') }}" class="p-6">
            @csrf
            @method('delete')

            <h2 class="text-lg font-medium text-gray-900">
                {{ __('هل انت متأكد من حذف الحساب ؟') }}
            </h2>

            <p class="mt-1 text-sm text-gray-600">
                {{ __('بمجرد حذف حسابك، سيتم حذف جميع موارده وبياناته نهائيًا. الرجاء إدخال كلمة المرور الخاصة بك لتأكيد رغبتك في حذف حسابك نهائيًا.') }}
            </p>

            <div class="mt-6">
                <x-input-label for="password" value="{{ __('Password') }}" class="sr-only" />

                <x-text-input
                    id="password"
                    name="password"
                    type="password"
                    class="mt-1 block w-3/4"
                    placeholder="{{ __('Password') }}"
                />

                <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
            </div>

            <div class="mt-6 flex justify-end">
                <x-secondary-button x-on:click="$dispatch('close')">
                    {{ __('تراجع') }}
                </x-secondary-button>

                <x-danger-button class="ml-3">
                    {{ __('حذف الحساب') }}
                </x-danger-button>
            </div>
        </form>
    </x-modal>
</section>

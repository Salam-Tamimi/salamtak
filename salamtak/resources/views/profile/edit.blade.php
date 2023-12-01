{{-- <x-app-layout> --}}
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('الحساب الشخصي') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-custom-color shadow sm:rounded-lg"  style=" margin-right:15%;margin-left:15%;">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-custom-color shadow sm:rounded-lg"  style=" margin-right:15%;margin-left:15%;">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-custom-color shadow sm:rounded-lg"  style=" margin-right:15%;margin-left:15%;">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>

    <style>
        .max-w-xl {
            margin: auto;
        }

        .bg-custom-color {
            /* Your custom background color */
            background-color: #your-color-code;
            border: 1px solid #e5e7eb;
            border-radius: 0.375rem;
        }

        .shadow {
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
        }

        .sm:rounded-lg {
            border-radius: 0.5rem;
        }

        .py-12 {
            padding-top: 3rem;
            padding-bottom: 3rem;
        }
    </style>
{{-- </x-app-layout> --}}

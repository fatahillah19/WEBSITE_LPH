<x-guest-layout>
    <div class="mb-6 text-center">
        <h2 class="text-2xl font-bold text-green-700">Pendaftaran Akun</h2>
        <p class="text-sm text-gray-600">LPH Global Halal Center</p>
    </div>

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div>
            <x-input-label for="name" :value="__('Nama Lengkap / Perusahaan')" />
            <x-text-input id="name" class="block mt-1 w-full focus:border-green-500 focus:ring-green-500" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" placeholder="Masukkan nama lengkap" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="email" :value="__('Alamat Email')" />
            <x-text-input id="email" class="block mt-1 w-full focus:border-green-500 focus:ring-green-500" type="email" name="email" :value="old('email')" required autocomplete="username" placeholder="contoh@email.com" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="phone_number" :value="__('Nomor WhatsApp')" />
            <x-text-input id="phone_number" class="block mt-1 w-full focus:border-green-500 focus:ring-green-500" type="text" name="phone_number" :value="old('phone_number')" required placeholder="08123xxx" />
            <x-input-error :messages="$errors->get('phone_number')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="password" class="block mt-1 w-full focus:border-green-500 focus:ring-green-500"
                            type="password"
                            name="password"
                            required autocomplete="new-password" 
                            placeholder="Minimal 8 karakter"/>
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Konfirmasi Password')" />
            <x-text-input id="password_confirmation" class="block mt-1 w-full focus:border-green-500 focus:ring-green-500"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" 
                            placeholder="Ulangi password"/>
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="mt-6 p-3 bg-gray-50 rounded-lg border border-gray-100">
            <label for="terms" class="inline-flex items-start">
                <input id="terms" type="checkbox" class="mt-1 rounded border-gray-300 text-green-600 shadow-sm focus:ring-green-500" name="terms" required>
                <span class="ms-2 text-sm text-gray-600 leading-relaxed">
                    Saya menyatakan data yang diisi benar dan setuju dengan <a href="#" class="underline text-green-700 hover:text-green-900 font-semibold">Syarat & Ketentuan</a> LPH Global Halal Center.
                </span>
            </label>
            <x-input-error :messages="$errors->get('terms')" class="mt-2" />
        </div>

        <div class="flex flex-col space-y-4 mt-6">
            <x-primary-button class="w-full justify-center bg-green-600 hover:bg-green-700 py-3">
                {{ __('Daftar Sekarang') }}
            </x-primary-button>

            <div class="text-center">
                <a class="text-sm text-gray-600 hover:text-green-700 underline rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500" href="{{ route('login') }}">
                    {{ __('Sudah punya akun? Masuk di sini') }}
                </a>
            </div>
        </div>
    </form>
</x-guest-layout>
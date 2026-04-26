<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-green-800 leading-tight">
            {{ __('Dashboard Utama Admin - LPH GHC') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg border-t-4 border-green-600">
                <div class="p-6 text-gray-900">
                    <h3 class="text-lg font-bold mb-2">Selamat Datang, Administrator!</h3>
                    <p class="text-gray-600 italic mb-6">"Professional, Terpercaya, untuk Halal yang Mendunia"</p>
                    
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        <div class="p-4 bg-green-50 rounded-lg border border-green-100 text-center">
                            <span class="block text-2xl font-bold text-green-700">0</span>
                            <span class="text-sm text-gray-500">Total Pengajuan</span>
                        </div>
                        <div class="p-4 bg-yellow-50 rounded-lg border border-yellow-100 text-center">
                            <span class="block text-2xl font-bold text-yellow-700">0</span>
                            <span class="text-sm text-gray-500">Menunggu Verifikasi</span>
                        </div>
                        <div class="p-4 bg-blue-50 rounded-lg border border-blue-100 text-center">
                            <span class="block text-2xl font-bold text-blue-700 text-sm">0</span>
                            <span class="text-sm text-gray-500 font-bold">Auditor Aktif</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
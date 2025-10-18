<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Tambah Produk Baru') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">

                @if (session('success'))
                    <div class="mb-4 p-4 bg-green-100 text-green-800 rounded-md">
                        {{ session('success') }}
                    </div>
                @endif

                <form action="{{ route('product-store') }}" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label class="block text-gray-700 dark:text-gray-300">Nama Produk</label>
                        <input type="text" name="product_name" class="mt-1 w-full border-gray-300 rounded-md" required>
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 dark:text-gray-300">Satuan</label>
                        <input type="text" name="unit" class="mt-1 w-full border-gray-300 rounded-md" required>
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 dark:text-gray-300">Tipe</label>
                        <input type="text" name="type" class="mt-1 w-full border-gray-300 rounded-md" required>
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 dark:text-gray-300">Informasi</label>
                        <textarea name="information" class="mt-1 w-full border-gray-300 rounded-md"></textarea>
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 dark:text-gray-300">Kuantitas</label>
                        <input type="number" name="qty" class="mt-1 w-full border-gray-300 rounded-md" required>
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 dark:text-gray-300">Produsen</label>
                        <input type="text" name="producer" class="mt-1 w-full border-gray-300 rounded-md" required>
                    </div>

                    <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700">
                        Simpan
                    </button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>

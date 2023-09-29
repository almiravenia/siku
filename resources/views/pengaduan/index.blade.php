<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Pengaduan') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b text-gray-900">

                    <div class="mb-0">
                        <label for="base-input" class="pt-4 block mb-2 text-sm font-medium text-gray-900 dark:text-black">NO AK</label>
                        <input type="text" id="base-input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                    </div>

                    <div class="mb-0">
                        <label for="base-input" class="pt-4 block mb-2 text-sm font-medium text-gray-900 dark:text-black">Nama</label>
                        <input type="text" id="base-input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                    </div>

                    <div class="mb-0">
                        <label for="base-input" class="pt-4 block mb-2 text-sm font-medium text-gray-900 dark:text-black">Pangkat</label>
                        <input type="text" id="base-input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                    </div>
                    <div class="mb-0">
                        <label for="base-input" class="pt-4 block mb-2 text-sm font-medium text-gray-900 dark:text-black">Kelas</label>
                        <input type="text" id="base-input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                    </div>
                    <div class="mb-0">
                        <label for="base-input" class="pt-4 block mb-2 text-sm font-medium text-gray-900 dark:text-black">TON</label>
                        <input type="text" id="base-input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                    </div>



                    <div class="mb-0">
                        <label for="base-input" class="pt-4 block mb-2 text-sm font-medium text-gray-900 dark:text-black">Tanggal</label>
                        <input type="text" id="base-input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                    </div>
                    <div class="mb-0">
                        <label for="base-input" class="pt-4 block mb-2 text-sm font-medium text-gray-900 dark:text-black">Pelanggaran</label>
                        <input type="text" id="base-input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                    </div>

                    <label for="countries" class="pt-6 block mb-2 text-sm font-medium text-gray-900 dark:text-black">Sanksi</label>
                    <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                    <option>Teguran</option>
                    <option>Canada</option>
                    <option>France</option>
                    <option>Germany</option>
                    </select>

                    <div class="mb-0">
                        <label for="base-input" class="pt-4 block mb-2 text-sm font-medium text-gray-900 dark:text-black">Mulai</label>
                        <input type="text" id="base-input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                    </div>

                    <div class="mb-0">
                        <label for="base-input" class="pt-4 block mb-2 text-sm font-medium text-gray-900 dark:text-black">Selesai</label>
                        <input type="text" id="base-input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                    </div>

                    <div class="mb-0">
                        <label for="base-input" class="pt-4 block mb-2 text-sm font-medium text-gray-900 dark:text-black">Foto Pelanggaran</label>
                    </div>
                    <div class="flex items-center justify-center w-full">
                        <label for="dropzone-file" class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 hover:bg-gray-100 dark:hover:border-gray-500">
                            <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
                                </svg>
                                <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                                <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
                            </div>
                            <input id="dropzone-file" type="file" class="hidden" />
                        </label>
                    </div>

                    <div class="pt-8 flex flex-col items-center justify-center">
                        <x-primary-button class="ml-3">
                            {{ __('Simpan') }}
                        </x-primary-button>
                    </div>
                </div>
            </div>
        </div>
    </div>


</x-app-layout>

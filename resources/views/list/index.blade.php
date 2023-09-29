<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('List') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b text-gray-900">
                    List coming soon.

<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
            <tr>
                <th scope="col" class="px-6 py-4">Nama</th>
                            <th scope="col" class="px-6 py-4">NO. AK</th>
                            <th scope="col" class="px-6 py-4">Pangkat</th>
                            <th scope="col" class="px-6 py-4">Kelas</th>
                            <th scope="col" class="px-6 py-4">TON</th>
                            <th scope="col" class="px-6 py-4"><div class="flex items-center">
                                Nilai
                            <a href="#"><svg class="w-3 h-3 ml-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
            <path d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z"/>
          </svg></a></div></th>
          <th scope="col" class="px-6 py-4 text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
            <tr class="bg-white border-b">
                <td class="whitespace-nowrap px-6 py-4">{{$item['nama']}}</td>
                <td class="whitespace-nowrap px-6 py-4">{{$item['noak']}}</td>
                <td class="whitespace-nowrap px-6 py-4">{{$item['pangkat']}}</td>
                <td class="whitespace-nowrap px-6 py-4">D.03</td>
                <td class="whitespace-nowrap px-6 py-4">2/A</td>
                <td class="whitespace-nowrap px-6 py-4">100</td>
                <td class="px-6 py-4 text-center">
                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline text-center">Edit</a>
                </td>
                @endforeach
            </tr>
        </tbody>
    </table>
</div>





<label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Select your country</label>
<select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
  <option>United States</option>
  <option>Canada</option>
  <option>France</option>
  <option>Germany</option>
</select>

<div class="mb-6">
    <label for="base-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Base input</label>
    <input type="text" id="base-input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
</div>


                </div>
            </div>
        </div>
    </div>


</x-app-layout>

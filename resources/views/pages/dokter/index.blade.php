<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Master Dokter') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @if (session()->has('Success'))
                    <div class="p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg" role="alert">
                        <span class="font-medium">{{ session()->get('Success') }}</span>
                    </div>
                @endif
                    <div class="flex">
                        <a class="" href="{{ route('dokter.create') }}"><button
                                class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">TAMBAH
                                DOKTER</button>
                        </a>
                    </div>
                    <br>
                    <div class="overflow-x-auto relative">
                        <table class="w-full text-sm text-left text-gray-500 ">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                                <tr>
                                    <th scope="col" class="py-3 px-6">
                                        NO
                                    </th>
                                    <th scope="col" class="py-3 px-6">
                                        NIP
                                    </th>
                                    <th scope="col" class="py-3 px-6">
                                        NAMA
                                    </th>
                                    <th scope="col" class="py-3 px-6">
                                        AKSI
                                    </th>
                                </tr>
                            <tbody>
                                @foreach ($dokter as $key => $d)
                                    <tr class="bg-white ">
                                        <td class="py-4 px-6">{{ $key + 1 }}</td>
                                        <td class="py-4 px-6">{{ $d->nip }}</td>
                                        <td class="py-4 px-6">{{ $d->nama }}</td>
                                        <td>
                                            <div class="m-3">
                                                <a href="{{ route('dokter.edit', $d->id) }}"><button type="button"
                                                        class="py-2 px-3 text-xs font-medium text-center text-white
                                        bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">Edit</button>
                                                </a>
                                            </div>
                                            <div class="m-3">
                                                <form action="{{ route('dokter.destroy', $d->id) }}" method="POST">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit"
                                                        class="py-2 px-3 text-xs font-medium text-center text-white
                                                 bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300">Delete</button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                            </thead>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>

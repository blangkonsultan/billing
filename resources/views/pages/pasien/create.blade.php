<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Pegawai') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">


                    <div class="mb-6">
                        <h1 class="text-center text-5xl font-extrabold dark:text-black">TAMBAH PASIEN</h1>
                    </div>
                    <form action="{{ route('pasien.store') }}" method="POST">
                        @csrf
                        <div class="mb-6">
                            <label for="text"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-black-300">NAMA</label>
                            <input type="text" value="{{ old('nama') }}" name="nama"
                                class="shadow-sm bg-white-50 border border-gray-300 text-black-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                placeholder="">
                            @if ($errors->first('nama'))
                                <small class="text-red-700 font-semi-bold">{{ $errors->first('nama') }}</small>
                            @endif
                        </div>
                        <div class="mb-6">
                            <label for="date"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-black-300">TANGGAL
                                LAHIR</label>
                            <input type="date" value="{{ old('tgl_lahir') }}" name="tgl_lahir"
                                class="shadow-sm bg-white-50 border border-gray-300 text-black-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                placeholder="">
                            @if ($errors->first('tgl_lahir'))
                                <small class="text-red-700 font-semi-bold">{{ $errors->first('tgl_lahir') }}</small>
                            @endif
                        </div>

                        <div class="mb-6">
                            <label for="countries"
                                class="block mb-2 text-sm font-medium text-black-900 dark:text-black-400">JENIS
                                KELAMIN</label>
                            <select name="jenis_kelamin"
                                class="bg-gray-50 border border-gray-300 text-black-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                                <option value="">Pilih Jenis Kelamin</option>
                                <option value="1" {{ old('jenis_kelamin') == '1' ? 'selected' : '' }}>Pria</option>
                                <option value="2" {{ old('jenis_kelamin') == '2' ? 'selected' : '' }}>Wanita
                                </option>
                            </select>
                            @if ($errors->first('gender'))
                                <small class="text-red-700 font-semi-bold">{{ $errors->first('jenis_kelamin') }}</small>
                            @endif
                        </div>

                        <div class="mb-6">
                            <label for="date"
                                class="block mb-2 text-sm font-medium text-black-900 dark:text-black-300">ALAMAT</label>
                            <input type="textarea" value="{{ old('alamat') }}" name="alamat"
                                class="shadow-sm bg-white-50 border border-gray-300 text-black-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                placeholder="">
                            @if ($errors->first('alamat'))
                                <small class="text-red-700 font-semi-bold">{{ $errors->first('alamat') }}</small>
                            @endif
                        </div>



                        <button type="submit"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center ">SIMPAN</button>
                    </form>


                </div>
            </div>
        </div>
    </div>
</x-app-layout>

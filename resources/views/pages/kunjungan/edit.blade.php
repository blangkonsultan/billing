<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Kunjungan') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">


                    <div class="mb-6">
                        <h1 class="text-center text-5xl font-extrabold dark:text-black">EDIT KUNJUNGAN</h1>
                    </div>
                    <form action="{{ route('kunjungan.update', $kunjungan->id) }}" method="POST">
                        @csrf
                        @method('put')
                        <div class="mb-6">
                            <label for="countries"
                                class="block mb-2 text-sm font-medium text-black-900 dark:text-black-400">layanan</label>
                            <select name="pasien_id"
                                class="bg-gray-50 border border-gray-300 text-black-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                                <option value="">Pilih Pasien</option>
                                @foreach ($pasien as $p)
                                    <option value="{{ $p->id }}"
                                        {{ $kunjungan->pasien_id == $p->id ? 'selected' : '' }}>{{ $p->id }} - {{ $p->nama }}</option>
                                @endforeach
                            </select>
                            @if ($errors->first('pasien_id'))
                                <small class="text-red-700 font-semi-bold">{{ $errors->first('pasien_id') }}</small>
                            @endif
                        </div>
                        <div class="mb-6">
                            <label for="countries"
                                class="block mb-2 text-sm font-medium text-black-900 dark:text-black-400">LAYANAN</label>
                            <select name="layanan_id"
                                class="bg-gray-50 border border-gray-300 text-black-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                                <option value="">Pilih Layanan</option>
                                @foreach ($layanan as $l)
                                    <option value="{{ $l->id }}"
                                        {{ $kunjungan->layanan_id == $l->id ? 'selected' : '' }}>{{ $l->nama }}</option>
                                @endforeach
                            </select>
                            @if ($errors->first('layanan_id'))
                                <small class="text-red-700 font-semi-bold">{{ $errors->first('layanan_id') }}</small>
                            @endif
                        </div>
                        <div class="mb-6">
                            <label for="countries"
                                class="block mb-2 text-sm font-medium text-black-900 dark:text-black-400">PEJAMIN</label>
                            <select name="penjamin_id"
                                class="bg-gray-50 border border-gray-300 text-black-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                                <option value="">Pilih Penjamin</option>
                                @foreach ($penjamin as $pj)
                                    <option value="{{ $pj->id }}"
                                        {{ $kunjungan->penjamin_id == $pj->id ? 'selected' : '' }}>{{ $pj->nama }}</option>
                                @endforeach
                            </select>
                            @if ($errors->first('penjamin_id'))
                                <small class="text-red-700 font-semi-bold">{{ $errors->first('penjamin_id') }}</small>
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

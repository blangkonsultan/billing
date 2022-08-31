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
                        <div class="mb-6">
                            <button type="button" name="add" id="dynamic-ar"
                                class="btn btn-outline-primary">Tambah
                                Layanan</button>
                        </div>
                        <table class="table table-bordered " >
                            <tbody id="dynamicAddRemove">
                                @foreach ($pelayanan as $key => $p)
                                <tr>
                                    {{-- {{ dd($p->unit_id) }} --}}
                                    <td vol>
                                        <div class="mb-6">
                                            <label for="countries"
                                                class="block mb-2 text-sm font-medium text-black-900 dark:text-black-400">UNIT</label>
                                            <select name="addMore[{{ $key }}][unit_id]"
                                                class="bg-gray-50 border border-gray-300 text-black-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                                                <option value="">Pilih Unit</option>
                                                @foreach ($pelayanan as $p)
                                                    <option value="{{ $p->unit->id }}"
                                                        {{ $p->unit->id == $p->unit_id ? 'selected' : '' }}>
                                                         {{ $p->unit_id }}-{{ $p->unit->id }}-{{ $p->unit->nama }}
                                                    </option>
                                                @endforeach

                                            </select>
                                            @if ($errors->first('addMore[{{ $key }}][unit_id]'))
                                                <small
                                                    class="text-red-700 font-semi-bold">{{ $errors->first('addMore['.$key.'][unit_id]') }}</small>
                                            @endif
                                        </div>
                                    </td>
                                    <td>
                                        <div class="mb-6">
                                            <button type="button" onclick="hapusPelayanan($p->id)" class="btn btn-outline-danger remove-input-field">Delete</button>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <button type="submit"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center ">SIMPAN</button>
                    </form>


                </div>
            </div>
        </div>
    </div>
    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript">
        var i = 0;
        $("#dynamic-ar").click(function() {
            ++i;
            $("#dynamicAddRemove").append(
                            '<tr>'+
                                '<td vol>'+
                                    '<div class="mb-6">'+
                                        '<label for="countries"'+
                                            'class="block mb-2 text-sm font-medium text-black-900 dark:text-black-400">UNIT</label>'+
                                        '<select name="addMore['+i+'][unit_id]"'+
                                            'class="bg-gray-50 border border-gray-300 text-black-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">'+
                                            '<option value="">Pilih Unit</option>'+
                                            '@foreach ($pelayanan as $p)'+
                                                    '<option value="{{ $p->unit->id }}"'+
                                                        '{{ $p->unit_id == $p->unit->id ? "selected" : '' }}>'+
                                                        '{{ $p->unit->nama }}'+
                                                    '</option>'+
                                                '@endforeach'+
                                        '</select>'+
                                        '@if ($errors->first("addMore['+i+'][unit_id]"))'+
                                            '<small'+
                                               ' class="text-red-700 font-semi-bold">{{ $errors->firt("addMore['+i+'][unit_id]") }}</small>'+
                                        '@endif'+
                                    '</div>'+
                                '<td>'+
                                    '<div class="mb-6">'+
                                        '<button type="button" onclick="delete($p->id)" class="btn btn-outline-danger remove-input-field">Delete</button>'+
                                    '</div>'+
                                '</td>'+
                            '</tr>');
        });
        $(document).on('click', '.remove-input-field', function() {
            $(this).parents('tr').remove();
        });
    </script>
    <script>
        function hapusPelayanan(idP){
                let id = $('#my_id').val();
                $.ajax({
                    type: 'delete',
                    url: "{{route('pelayanan.destroy',"+idP+")}}",
                    data: {
                        _token: '{{csrf_token()}}',
                    },
                    success: function () {
                    alert('Successfully Deleted');
                    }
                 }).fail(function(){
                console.log('problem with route = digitizing/delete');
                });
        }
    </script>
</x-app-layout>

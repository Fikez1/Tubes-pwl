<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Cabang') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <!--CONTENT HERE-->
                    <x-primary-button tag="a" href="{{
                        route('toko')}}">Tambah Data Barang</x-primary-button>
                        <br/>
                    <!-- KONTEN DISINI -->
                    <x-table>
                        <x-slot name="header">
                            <tr>
                                <th>#</th>
                                <th>cabang 1. </th>
                                <th>cabang 2. </th>
                                <th>cabang 3. </th>
                                <th>cabang 4. </th>
                                <th>cabang 5. </th>
                            </tr>
                        </x-slot>
                        
                        @php $num=1; @endphp
                        @foreach($tokos as $toko)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $toko->id_toko }}</td>
                                <td>{{ $toko->nama_toko }}</td>
                                <td>{{ $toko->alamat }}</td>
                                <td>{{ $toko->telepon }}</td>
                                <td>{{ $toko->created_at }}</td>
                                <td>{{ $toko->updated_at }}</td>
                                <td>
                                    <img src="{{ asset('storage/Toko/'.$toko->cabang) }}" width="100px" alt="Branch Image"/>
                                </td>
                                <td>{{ $toko->quantity }}</td>
                                <td>{{ $toko->tokoshelf->code }}-{{ $toko->tokoshelf->name }}</td>
                                <x-primary-button tag="a" href="{{
                                    route('toko.edit', $toko->id)}}">Edit</x-primary-button>
                            </td>
                        </tr>
                        @endforeach
                    </x-table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

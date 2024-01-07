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
                        route('cabang')}}">Tambah Data Barang</x-primary-button>
                        <br/>
                    <!-- KONTEN DISINI -->
                    <x-table>
                        <x-slot name="header">
                            <tr>
                                <th>AKSI</th>
            
                                <th>NamaToko</th>
                                <th>NamaBarang</th>
                                <th>StokBarang</th>
                                <th>Image</th>
                                <th>Quantity</th>
                                <th>Cabang Shelf</th>
                            </tr>
                        </x-slot>
                        
                        @php $num=1; @endphp
                        @foreach($cabangs as $cabang)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $cabang->id_cabang }}</td>
                                <td>{{ $cabang->nama_cabang }}</td>
                                <td>{{ $cabang->alamat }}</td>
                                <td>{{ $cabang->telepon }}</td>
                                <td>{{ $cabang->created_at }}</td>
                                <td>{{ $cabang->updated_at }}</td>
                                <td>
                                    <img src="{{ asset('storage/Cabang/'.$cabang->toko) }}" width="100px" alt="Branch Image"/>
                                </td>
                                <td>{{ $cabang->quantity }}</td>
                                <td>{{ $cabang->cabangshelf->code }}-{{ $cabang->cabangshelf->name }}</td>
                                <x-primary-button tag="a" href="{{
                                    route('cabang.edit', $cabang->id)}}">Edit</x-primary-button>
                            </td>
                        </tr>
                        @endforeach
                    </x-table>
                    <!-- AKHIR KONTEN -->
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

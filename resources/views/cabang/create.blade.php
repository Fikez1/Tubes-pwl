<!-- CONTENT HERE -->
<form method="post" action="{{ route('cabang.store') }}" enctype="multipart/form-data" class="mt-6 space-y-6">
    @csrf
    <div class="max-w-xl">
        <x-input-label for="cabang" value="NamaTokoCabang"/>
        <x-text-input id="cabang" type="" name="title" class="mt-1 block w-full" value="{{ old('cabang')}}" required/>
        <x-input-error class="mt-2" :messages="$errors->get('cabang')" />
    </div>

    <div class="max-w-xl">
        <x-input-label for="Barang" value="Stok Barang"/>
        <x-text-input id="barang" type="number" name="NamaBarang" class="mt-1 block w-full" value="{{ old('cabang')}}" required/>
        <x-input-error class="mt-2" :messages="$errors->get('cabang')" />
    </div>

    <div class="max-w-xl">
        <x-input-label for="Alamat" value="Alamat Toko"/>
        <x-text-input id="alamat" type="title" name="Alamat Toko" class="mt-1 block w-full" value="{{ old('cabang')}}"
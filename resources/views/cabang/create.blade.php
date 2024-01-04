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
        <x-text-input id="barang" type="number" name="NamaBarang" class="mt-1 block w-full" value="{{ old('barang')}}" required/>
        <x-input-error class="mt-2" :messages="$errors->get('barang')" />
    </div>

    <div class="max-w-xl">
        <x-input-label for="Alamat" value="Alamat Toko"/>
        <x-text-input id="alamat" type="title" name="Alamat Toko" class="mt-1 block w-full" value="{{ old('alamat')}}" required/>
        <x-input-error class="mt-2" :messages="$errors->get('Alamat')"/>
    </div>

    <div class="max-w-xl">
        <x-input-label for="NoTelp" value="Telepon"/>
        <x-text-input id="NoTelp" type="number" name="Telepon" class="mt-1 block w-full" value="{{ old('telepon')}}" required/>
        <x-input-error class="mt-2" :messages="$errors->get('Telepon')"/>
    </div>

    <div class="max-w-xl">
        <x-input-label for="Transaksi" value="Transaksi"/>
        <x-text-input id="Transaksi" type="number" name="Transaksi" class="mt-1 block w-full" value="{{ old('number')}}" required/>
        <x-input-error class="mt-2" :messages="$errors->get('Telepon')"/>
    </div>

    <div class="max-w-xl">
        <x-input-label for="cabangshelf" value="cabangtoko"/>
        <x-select-input id="cabangshelf" name="cabangshelf_id" class="mt-1 block w-full" required>
            <option value="">Open this select menu</option> 
            @foreach ( $cabangshelfs as $key => $value )
            @if(old ('cabangshelf_id') == $key)
            <option value="{{ $key }}" selected>{{
                $value }}</option>
                @else
                <option value="{{ $key }}">{{ $value }}</option>
                @endif
                @endforeach
        </x-select-input>
    </div>

    <div class="max-w-xl">
        <x-input-label for="barang" value="Stok Barang"/>
        <x-file-input id="barang" nama="barang" class="mt-1 block w-full"/>
        <x-input-error class="mt-2" :messages="$errors->get('barang')" />
    </div>

    <x-secondary-button tag="a" href="{{
        route('cabang')}}">Cancel</x-secondary-button>
        <x-primary-button name="save_and_create" value="true">Save & Create Another</x-primary-button>
        <x-primary-button name="save" value="true">Save</x-primary-button>
    </form>
                
            @endforeach


    
<x-app-layout>
    @section('title', 'Profil')
    <x-slot name='header'>
    </x-slot>
    <x-slot name='slot'>
        @if (session('success'))
            <div class="popup">
                <div class="flex justify-center items-center h-full open text-xl ">{{ session('success') }}</div>
            </div>
        @endif
    <div class="flex pl-32 pt-20 bg-white underline decoration-solid">
        <a href="{{ route('dashboard') }}" class="font-semibold text-2xl leading-tight text_black kalam hover">{{ __('Profil') }}</a>
        @if (Auth::user()->is_admin)
         <p class="font-semibold text-2xl leading-tight px-1">|</p>
         <a href="{{ route('carousels.show') }}" class="font-semibold text-2xl leading-tight text_black kalam hover">{{ __('Images') }}</a>
        @endif
    </div>

        <div class="pt-12 flex justify-center bg-white">
           
            <div class="border border-solid w-3/5 py-8 bg-white rounded-lg shadow-xl ">
                <div class="flex flex_col_800 mb-8">
                    <p class="w-1/2 pl-16 text_black open text-xl flex_row_800 w_100">Nom: {{ $user->lastname }}</p>
                    <p class="w-1/2 pl-16 text_black open text-xl flex_row_800 w_100 mt_800">Prénom: {{ $user->name }}</p>
                </div>
                <div class="flex flex_col_800 mb-8">
                    <p class="w-1/2 pl-16 text_black open text-xl w_100">Email: {{ $user->email }}</p>
                    <p class="w-1/2 pl-16 text_black open text-xl w_100 mt_800">N° tel: 0101010101</p>
                </div>
                <div class="flex justify-end pr-16">
                    <a href="{{ route('profile.edit', ['address' => $address]) }}" class="border border-solid p-1 rounded-lg bg_pink px-4 kalam text-base hover">Modifier</a>
                </div>
            </div>

        </div>
      
        <div class="py-12 flex justify-center bg-white">
           
            <div class="border border-solid w-3/5 py-8 bg-white rounded-lg shadow-xl">
                @if ($address)
                <div class="flex flex_col_800 mb-8">
                    <p class="w-1/2 pl-16 text_black open text-xl w_100 mt_800">N°/Rue: {{ $address->street }}</p>
                    <p class="w-1/2 pl-16 text_black open text-xl w_100 mt_800">Code postal: {{ $address->postal_code }}</p>
                </div>
                <div class="flex flex_col_800 mb-8">
                    <p class="w-1/2 pl-16 text_black open text-xl w_100">Ville: {{ $address->city }}</p>
                    <p class="w-1/2 pl-16 text_black open text-xl w_100 mt_800">Pays: {{ $address->country }}</p>
                </div> 
                @else
                <div class="flex flex_col_800 mb-8">
                    <p class="w-1/2 pl-16 text_black open text-xl w_100">N°/Rue:</p>
                    <p class="w-1/2 pl-16 text_black open text-xl w_100 mt_800">Code postal:</p>
                </div>
                <div class="flex flex_col_800 mb-8">
                    <p class="w-1/2 pl-16 text_black open text-xl w_100">Ville:</p>
                    <p class="w-1/2 pl-16 text_black open text-xl w_100 mt_800">Pays:</p>
                </div> 
                @endif
                <div class="flex justify-end pr-16">
                    @if ($address)
                    <a href="{{ route('addresses.edit',['address' => $address]) }}" class="border border-solid p-1 rounded-lg bg_pink px-4 kalam text-base hover">Modifier</a>
                        @else
                            <a href="{{ route('addresses.create') }}" class="border border-solid p-1 rounded-lg bg_pink px-4 kalam text-base hover">Ajouter</a>
                        @endif
                </div>
            </div>

        </div>
    </x-slot>
</x-app-layout>

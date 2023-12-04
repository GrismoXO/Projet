<x-guest-layout>
    @section('title', 'Modification d\'articles')
  <x-slot name="create">
        @if (session('success'))
            <div class="popup">
                <div class="flex justify-center items-center h-full open text-xl ">{{ session('success') }}</div>
            </div>
        @endif
        <div class="flex justify-center items-center h-screen h_100">
          <div class="rounded-lg w-3/5 border-solid border my-4 shadow-xl ">
            <div class="bg-white rounded-lg ">
                <div class="flex justify-between p-4">
                    <h2 class="font-semibold text-3xl leading-tight kalam">
                        {{ __('Modification d\'un article') }}
                    </h2>
                <a href="{{ route('products.product', $product)}}">
                    <p class="kalam text-2xl font-bold hover">X</p>
                  </a>
                </div>
            <div class="my-5">
                @foreach ($errors->all() as $error)
                <span class="open">{{$error}}</span> {{-- Affiche un message d'erreur si les champs requis du formulaire ne sont pas remplis --}}
                @endforeach
            </div>
    
            <form action="{{ route('products.update', $product) }}" method="post" enctype="multipart/form-data" class="flex flex-col px-4 pb-4 w-full " > 
                @method('put')
                @csrf
                <div class="flex justify-between mb-4 mt-4 flex_col_800 w_100">
                    <input id="title" name="title" class="rounded-lg w-2/5 open w_100 " value="{{ $product->title}}">
                    <input type="number" id="price" name="price" step="0.01" class="rounded-lg w-2/5 open w_100 mt_800" value="{{ $product->price}}">
                </div>
                <div class="h-32 mb-4 ">
                    <textarea id="description" name="description" class="rounded-lg w-full h-full open" placeholder="Description du produit...">{{ $product->description}}</textarea>
                </div>
                <div class="flex justify-between w-4/5 mb-4 flex_col_800 w_100">
                    <input type="number" id="stock" name="stock" class="rounded-lg w-2/5 open w_100" value="{{ $product->stock }}">
                </div>
                <div class="flex justify-between mb-4 flex_col_800">
                    <label for="image" class="flex items-center pl-1 kalam">Image du produit :</label>
                    <input id="image" type="file" name="image" class="rounded-lg kalam text-sm mt_800 hover">
                </div>
                <div class="h-28 mb-4">
                    <textarea id="alt" name="alt" class="rounded-lg w-full h-full open" placeholder="Description du produit... ">{{ $product->alt}}</textarea>
                </div>
                <div class="flex justify-end">                   
                <button class="border rounded-lg p-2 kalam bg_pink hover">Modifier</button>
                </div>
            </form>
    
        </div>
    </div>
    </div>
  </x-slot>
</x-guest-layout>

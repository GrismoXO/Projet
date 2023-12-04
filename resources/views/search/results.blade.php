<x-app-layout>
  @section('title', 'Boutique')
  @section('meta-description', 'Boutique, j\'ai sélectionné avec soin les meilleurs produits, pour votre bien-être.Notre sélection de produits bien-être.')
  <x-slot name="header">
    @vite (['resources/js/heroShop.js'])
    <div class="flex flex-col justify-center items-center h-full">
      <h1 class="text-4xl kalam">Notre sélection de produits bien-être</h1>
      <p class="pt-6 open text-xl w-1/2 text-center">J'ai sélectionné avec soin les meilleurs produits, pour votre bien-être.</p>
  </div>
    </x-slot>
  <x-slot name="slot">
    @if (session('success'))
          <div class="popup">
              <div class="flex justify-center items-center h-full open text-xl ">{{ session('success') }}</div>
          </div>
      @endif
    <div class="bg-white flex justify-center pb-20">
      <section class="pt-8 party flex flex-col">
          <x-search/>
        <div class="h-12"></div>
        <div class="w-full flex justify-center"><h2 class="kalam text-4xl bg-white flex justify-center">Résultats de recherche pour "{{ $query }}"</h2></div>
        <div class="w-full flex justify-center">
          <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 w-4/5 pt-10">
            @if (count($products))
              @foreach ($products as $product)
                <div class="rounded overflow-hidden shadow-lg flex flex-col bg-white hover">
                  <a href="{{ route('products.product', $product) }}"></a>
                  <div class="relative flex justify-center"><a href="{{ route('products.product', $product) }}" class="">
                    <img class="p-2 object-countain object-center rounded-lg h-60 " src="{{ 'storage/'.$product->image }}" alt="{{$product->alt}}">
                  </div>
                  <div class="px-6 py-4 mb-aut">
                    <a href="{{ route('products.product', $product) }}" class=" text-xl hover:text-indigo-600 transition duration-500 ease-in-out kalam font-bold mb-2 flex justify-center">{{ $product->title}}</a> 
                      <div class="open text-lg mt-1 flex justify-center">{{$product->price}} €</div>
                  </div>
                </div>
              @endforeach
            @else
              <div class="flex justify-center-center pt-10 w-full flex-col"><p class="flex justify-center open text-lg bg-white ">Aucun résultat trouvé.</p></div>
            @endif
          </div>
        </div>
      </section>
    </div>
  </x-slot>
</x-app-layout>

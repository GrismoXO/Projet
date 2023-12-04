<x-app-layout>
    @section('title', 'Boutique')
    <x-slot name="header">    
    </x-slot>
    <x-slot name="slot">
        @if (session('success'))
            <div class="popup">
                <div class="flex justify-center items-center h-full open text-xl ">{{ session('success') }}</div>
            </div>
        @endif
            <div class="bg-white pb-20 pt-20">
                <div class="h-20 "></div>
                <div class="" role="dialog" aria-modal="true">
                    <section class="flex justify-center pb-8">
                        <div class="h-8"></div>
                        <div class=" border border-solid w-4/5 bg-white shadow-lg rounded-lg ">
                            <div class="hover">
                                <a href="{{ route('shop', $product)}}">
                                    <p class="kalam text-2xl font-bold flex justify-end pr-4 pt-4">X</p>
                                </a>
                            </div>
                            <div class="flex justify-around pb-6 flex_col_800">
                                <section class="flex items-center center">
                                    <div class="p-4">
                                        <img src="{{ asset('storage/'.$product->image) }}" class="object-contain h-72" alt="{{$product->alt}}">
                                    </div>
                                </section>
                                <section class="flex justify-evenly " >
                                    <div class="mt-10">
                                        <div>
                                        <h2 class="text-2xl kalam font-bold"> {{$product->title}} </h2>
                                        </div>
                                        <div class="flex flex-col mt-4">
                                            <h4 class="font-medium kalam text-xl ">Description :</h4>
                                            <p class="open text-xl mt-2"> {{ $product->description }} </p>
                                        </div>
                                        @auth
                                            @if (Auth::user()->is_admin)
                                                <div class="flex mt-4">
                                                    <a href="{{ route('products.edit', $product) }}"><i class="fa-solid fa-pen-to-square text-2xl mr-2 hover text_pink"></i></a>         
                                                    <form method="POST" action="{{ route('products.destroy', $product) }}" >
                                                    @csrf
                                                    @method("DELETE")
                                                    <button><i class="fa-regular fa-trash-can text-2xl text-red-600 hover"></i></button>
                                                    </form>
                                                </div>  
                                         @endif
                                        @endauth
                                    </div>
                                </section>
                                <section class="flex justify-evenly mt-10">
                                    <div>
                                        <div>
                                            <p class="text-2xl font-medium kalam">Prix :</p>
                                            <p class="text-2xl mt-2 open">{{ $product->price }} €</p>
                                        </div>
                                        <div >
                                            <form action="{{route('addCart', $product )}}" method="post" class="flex flex-col cart">
                                                @csrf
                                                <label for="quantity_cart" class="mt-2 text-xl kalam">Quantité</label>
                                                <input type="number" id="quantity_cart" name="quantity_cart" class="rounded-lg mt-2 w-16 open" value="1">
                                                <button class="mt-4 border border-solid rounded-lg bg_black text_white p-2 kalam text-xl hover">Ajouter</button>
                                            </form>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>                   
                    </section>
                    <section class="bg-white gal flex flex-col items-center pb-8">
                        <div class="w-full flex flex-col justify-center party">
                            <div class="h-8"></div>
                            <h2 class="flex justify-center text-3xl kalam">Produits Similaires</h2>
                            <div class="flex justify-center pt-6 gap-6">
                                @foreach ($products as $product)
                                    <a href="{{ route('products.product', $product) }}">
                                        <img src="{{ asset('storage/'.$product->image)}}" class="object-contain h-72" alt="{{$product->alt}}">
                                        <h2 class="text-2xl kalam font-bold flex justify-center"> {{$product->title}} </h2>
                                    </a>
                                @endforeach
                            </div>
                            <div class="flex justify-center pt-6">
                                <p class="open text-xl flex items-center text_black">Pour retourner à la boutique</p>
                            </div>
                            <div class=" w-full flex justify-center ">
                                <a href="{{ route('shop')}}" class=" flex justify-center border-solid border rounded-lg  p-2 mt-4 bg_pink w-32 kalam text-xl hover">Cliquer ici</a>
                            </div>
                        </div>                       
                    </section>
                </div> 
            </div>
    </x-slot>
</x-app-layout>
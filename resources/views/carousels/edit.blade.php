<x-guest-layout>
    @section('title', 'Modifier l\'image')
    <x-slot name = 'create'>
        <div class="flex justify-center items-center h-screen h_100">
            <div class="rounded-lg  border-solid border shadow-xl w-3/5 my-4 z-10">
              <div class="bg-white rounded-lg ">
                  <div class="flex justify-between p-4">
                      <h2 class="font-semibold text-3xl leading-tight kalam">
                          {{ __('Créer un article') }}
                      </h2>
                  <a href="{{ route('dashboard')}}">
                      <p class="kalam text-2xl font-bold hover">X</p>
                  </a>
                  </div>
                  <div class="my-5">
                      @foreach ($errors->all() as $error)
                      <span class="open">{{$error}}</span>
                      @endforeach
                  </div>
      
                <form action="{{ route('carousels.store') }}" method="post" enctype="multipart/form-data" class="flex flex-col px-4 pb-4 w-full " > 
                    @csrf
                    <div class="flex justify-between mb-4 mt-4 flex_col_800 w_100">
                        <span>Titre</span>
                        <input id="title" name="title" class="rounded-lg w-2/5 w_100 open" value = '{{ $carousel->title }}'>
                    </div>
                    <div class="flex justify-between mb-4 flex_col_800">
                        <label for="image" class="flex items-center pl-1 kalam">Image :</label>
                        <input id="image" type="file" name="image" class="rounded-lg kalam text-sm mt_800 hover">
                    </div>
                    <div class="h-28 mb-4">
                        <span>Description de l'image</span>
                        <textarea id="alt" name="alt" class="rounded-lg w-full h-full open" value = '{{ $carousel->description }}'></textarea>
                    </div>
                    <div class="flex justify-end">                   
                    <button type="submit" class="border rounded-lg p-2 kalam bg_pink hover">Modifier</button>
                    </div>
                </form>
            </div>
        </div>
      </div>
    </x-slot>
</x-guest-layout>
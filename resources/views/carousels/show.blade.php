<x-app-layout>
    @section('title', 'Profil')
    <x-slot name="header">
    </x-slot>
    <x-slot name='slot'>
    <div class="flex pl-32 pt-20 bg-white pb-8 underline decoration-solid bg_pink_opa">
        <a href="{{ route('dashboard') }}" class="font-semibold text-2xl leading-tight kalam hover">{{ __('Profil') }}</a>
        @if (Auth::user()->is_admin)
         <p class="font-semibold text-xl leading-tight px-1">|</p>
         <a href="{{ route('carousels.show') }}" class="font-semibold text-2xl leading-tight kalam hover">{{ __('Images') }}</a>
        @endif
    </div>
<div class="flex flex-col bg-white h-screen">
    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8 w-full">
      <div class="inline-block w-full py-2 sm:px-6 lg:px-8">
        <div class="overflow-hidden">
            <table class="w-full text-left text-sm font-light">
                <thead class="border-b font-medium dark:border-neutral-500">
                <tr>
                    <th scope="col" class="px-6 py-4">Image</th>
                    <th scope="col" class="px-6 py-4">Description de l'image</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($carousels as $image)
                    <tr class="border-b dark:border-neutral-500">
                        <td class="whitespace-nowrap px-6 py-4 "> <img src="{{ asset('storage/'.$image->image)}}" class="object-contain h-20 w-20" alt="{{ $image->alt }}"></td>
                        <td class="whitespace-nowrap px-6 py-4">{{ $image->alt }}</td>
                        <td>
                            <form method="POST" action="{{ route('carousels.destroy', $image) }}" >
                                @csrf
                                @method("DELETE")
                                <button type="submit"><i class="fa-regular fa-trash-can text-2xl hover text-red-600"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
      </div>
    </div>
  </div>
    </x-slot>
</x-app-layout>
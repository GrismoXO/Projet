<x-app-layout>
    @section('title', 'Clin d\'oeil')
    @section('meta-description', 'Clin d\'oeil. Je m\'appelle Vanessa, je suis Esthéticienne.')
    <x-slot name="header">
        @vite(['resources/js/heroContact.js'])
        <div class="flex flex-col justify-center items-center h-full">
            <h1 class="text-4xl kalam h1_800 pt_8">Clin d'oeil</h1>
            <p class="pt-6 open text-xl w-1/2 text-center ">Je serai ravie d'avoir de vos nouvelles et surtout de vous rencontrer en personne. Vous trouverez ci-dessous nos coordonnées. A bientôt !</p>
        </div>
    </x-slot>
    <x-slot name="slot">
        <section class="pt-20 pb-20 bg-white">
            <div class="flex justify-center"><h2 class="kalam text-2xl">Ma philosophie</h2></div>
            <div class="flex justify-center around pt-6">
                <div class="flex flex-col items-center">
                    <img src="{{ asset('storage/icons/manucure.png')}}" alt="logo manucure" class="h-20 w-20 mb-4">
                    <span class="kalam">Manucure</span>
                    <p class="w-1/2 text-center pt-2 none_500">Prendre soins de vous en embellisent vos mains</p>
                </div>
                <div class="flex flex-col items-center">
                    <img src="{{ asset('storage/icons/epilation.png')}}" alt="logo épilation" class="h-20 w-20 mb-4">
                    <span class="kalam">Épilation</span>
                    <p  class="w-1/2 text-center pt-2 none_500">Attentionner de votre bien-être</p>
                </div>
                <div class="flex flex-col items-center">
                    <img src="{{ asset('storage/icons/maquillage.png')}}" alt=" logo maquillage" class="h-20 w-20 mb-4">
                    <span class="kalam">Maquillage</span>
                    <p  class="w-1/2 text-center pt-2 none_500">Je sublime votre béauté exterieure</p>  
                </div>
            </div>
        </section><section class="bg_pink flex z-40 story gift gift_800 justify-center ">
            <div class="party flex gap-20 gap_800 flex_col_800">
                <div class="p-8 flex justify-center w_50 w_100 w-1/2">
                    <img src="{{asset('storage/profiles/profile2.jpg')}}" alt="photo de la propriètaire" class=" w_50_800 h-full objet-cover ">
                </div>
                <div class="pt-8 pt_800 w-1/2 w_100 center flex_col_800">
                    <h2 class="text-3xl mb-8 mt-8 kalam w_100 center">Clin d'oeil</h2>
                    <p class="open w_100 center  p_800 w-2/3">Je m'appelle Vanessa, je suis Esthéticienne. J'ai créé mon entreprise en 2021, après l'optention de mon CAP d'esthétique, j'ai décidé de découvrir le monde de l'onglerie en suivant différentes formations. Je suis styliste ongulaire spécialisé dans le nail Art. J'ai choisie de m'installer en zone rural afin de toucher cette clientèle souvent oubliée. Mon institut est le reflet de mon image, minutieuse et passionée par le monde de la beauté, je suis la pour vous embellir et prendre soin de vous.</p>
                </div>
            </div>
        </section>
        <section class="bg-white gal pb-20">
            <div class="h-8"></div>
            <h2 class="flex justify-center text-3xl kalam">Galerie</h2>
            <div class="flex items-center justify-center w-full h-full py-24 sm:py-8 px-4 z-40 none_500">
                <div class="w-full relative flex items-center justify-center">
                    <button aria-label="slide backward" class="absolute z-30 left-0 ml-10 focus:outline-none focus:bg-gray-400 focus:ring-2 focus:ring-offset-2 focus:ring-gray-400 cursor-pointer" id="prev">
                        <svg class="dark:text-gray-900" width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7 1L1 7L7 13" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                    <div class="w-full h-full mx-auto overflow-x-hidden overflow-y-hidden party">
                        <div id="slider" class="h-full flex  gap-2 items-center justify-start transition ease-out duration-700">
                            @foreach ($carousels as $image)
                            <div class="flex flex-col sm:w-auto  ">
                                <img src="{{ asset('storage/'.$image->image)}}" alt="{{$image->alt}}" class="object-contain object-center w-full  h-80" />
                                <p class="flex justify-center">{{ $image->title}}</p>
                            </div> 
                            @endforeach
                        </div>
                    </div>
                    <button aria-label="slide forward" class="absolute z-30 right-0 mr-10 focus:outline-none focus:bg-gray-400 focus:ring-2 focus:ring-offset-2 focus:ring-gray-400" id="next">
                        <svg class="dark:text-gray-900" width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 1L7 7L1 13" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                </div>
            </div>
        </section>
    </x-slot>
</x-app-layout>
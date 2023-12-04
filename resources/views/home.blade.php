<x-app-layout>
    @section('title', 'L\'ancre de la douceur')
    @section('meta-description', 'Une envie... Un moment... Laissez-vous sublimer avec L\'ancre de la Douceur.Clin d\'oeil. Galerie')
    <x-slot name="header">
        @vite(['resources/js/hero.js'])
                <div class="flex justify-center">
                <h1 class=" font text-4xl kalam text-center h1_800 h1_500 h1 text-white rounded-lg p-4 pt_8 pt_350">Une envie... Un moment... <br> Laissez-vous sublimer avec L'ancre de la Douceur</h1>
                </div>
                <div class="h-8"></div>
                <div class="flex justify-center gap-4">
                    <div class="flex justify-center"><a href="https://romain00qs.setmore.com/romainpeixoto" class="flex justify-center border-solid border rounded-lg py-2 px-6 bg_pink kalam text-xl hover">Prendre RDV</a></div>
                    <div class="flex justify-center"><button class="text-xl kalam border-2 border-solid  px-6 py-2 rounded-lg hover prices btn_hero">Mes services</button></div> 
                </div>
                <div style="height:3rem"></div>
                <div class="w-full flex justify-center none_500">
                    <div class="flex w-3/5 text-white flex_col_800 w_100">
                        <div class=" flex flex-col justify-center items-center w-1/3 w_100">
                            <h4 class="kalam text-2xl">Contact</h4>
                            <p class="open text-base">Facebook</p>
                            <p class="open text-base">Tik Tok</p>
                            <p class="open text-base">Instagram</p>
                        </div>
                        <div class=" flex flex-col justify-center items-center w-1/3 w_100 mt_800">
                            <h4 class="kalam text-2xl">Horaires</h4>
                            <p class="open text-base">Lun au Ven 8h - 12h</p>
                            <p class="open text-base"> 14h - 19h</p>
                            <p class="open text-base">Sam 9h - 12h</p>
                        </div>
                        <div class=" flex flex-col justify-center items-center w-1/3 w_100 mt_800">
                            <h4 class="kalam text-2xl">Localisation</h4>
                            <p class="open text-base">Lotissement Le Parc</p>
                            <p class="open text-base">14 Rue de la croix piquet</p>
                            <p class="open text-base">63440 POUZOL</p>
                        </div>
                    </div>
                </div>
        </section>
    </x-slot>  
    <x-slot name="slot">
        @vite(['resources/js/modal.js','resources/js/carousel.js'])
        <section class="bg-white z-40">
            <div class="h-16"></div>
            <h2 class="flex justify-center text-3xl kalam">Nos services</h2>
            <div class="h-12"></div>
            <div class="map blur_price z-20"></div>
            <div class="flex justify-center around">
                <div>
                    <img src="{{ asset('storage/icons/manucure.png')}}" alt="logo manucure" class="h-20 w-20 mb-4">
                    <span class="kalam">Manucure</span>
                </div>
                <div class="mx-48 m_0_800">
                    <img src="{{ asset('storage/icons/epilation.png')}}" alt="logo épilation" class="h-20 w-20 mb-4">
                    <span class="kalam">Épilation</span>
                </div>
                <div>
                    <img src="{{ asset('storage/icons/maquillage.png')}}" alt=" logo maquillage" class="h-20 w-20 mb-4">
                    <span class="kalam">Maquillage</span>   
                </div>
            </div>
            <div class="map z-20">
                <div class='fixed h-screen justify-center items-center z-20 w-full bg-white/50 top-0 left-0 hidden' id='price'>
                    <div class='w-3/5 border border-solid rounded-lg shadow-lg bg-white flex items-center flex-col pt-12 pb-12'>
                        <div class='flex justify-end py-4 pr-12 w-full'><button class='kalam hover text-xl'>X</button></div>
                        <div class='flex flex-col justify-center w-full'>
                            <div class='flex w-full'>
                                <div class='flex justify-center w-1/3 kalam text-xl'>Services</div>
                                <div class='flex justify-center w-1/3 kalam text-xl'>Temps</div>
                                <div class='flex justify-center w-1/3 kalam text-xl'>Prix</div>
                            </div>
                            <div class='h-4'></div>
                            <div class='flex w-full'>
                                <div class='flex justify-center w-1/3 open'>Extension de gel (semi permanent inclu)</div>
                                <div class='flex justify-center w-1/3 open'>120 min</div>
                                <div class='flex justify-center w-1/3 open'>55,00 €</div>
                            </div>
                            <div class='flex w-full'>
                                <div class='flex justify-center w-1/3 open'>Capsules américaine (semi permanent inclu)</div>
                                <div class='flex justify-center w-1/3 open'>90 min</div>
                                <div class='flex justify-center w-1/3 open'>45,00  €</div>
                            </div>
                            <div class='flex w-full'>
                                <div class='flex justify-center w-1/3 open'>Semi permanent</div>
                                <div class='flex justify-center w-1/3 open'>75 min</div>
                                <div class='flex justify-center w-1/3 open'>28,00  €</div>
                            </div>
                            <div class='flex w-full'>
                                <div class='flex justify-center w-1/3 open'>Rehaussement cil</div>
                                <div class='flex justify-center w-1/3 open'>60 min</div>
                                <div class='flex justify-center w-1/3 open'>50,00  €</div>
                            </div>
                            <div class='flex w-full'>
                                <div class='flex justify-center w-1/3 open'>Forfait 1/2 jambes, maillot ou aisselles</div>
                                <div class='flex justify-center w-1/3 open'>45 min</div>
                                <div class='flex justify-center w-1/3 open'>24,50  €</div>
                            </div>
                            <div class='flex w-full'>
                                <div class='flex justify-center w-1/3 open'>Forfait jambes complètes, maillot ou aisselles</div>
                                <div class='flex justify-center w-1/3 open'>55 min</div>
                                <div class='flex justify-center w-1/3 open'>34,00  €</div>
                            </div>
                            <div class='flex w-full'>
                                <div class='flex justify-center w-1/3 open'>Forfait visage</div>
                                <div class='flex justify-center w-1/3 open'>21 min</div>
                                <div class='flex justify-center w-1/3 open'>33,00  €</div>
                            </div>
                            <div class='flex w-full'>
                                <div class='flex justify-center w-1/3 open'>Epilation aisselles</div>
                                <div class='flex justify-center w-1/3 open'>15 min</div>
                                <div class='flex justify-center w-1/3 open'>11,20  €</div>
                            </div>
                            <div class='flex w-full'>
                                <div class='flex justify-center w-1/3 open'>Soin flash du visage</div>
                                <div class='flex justify-center w-1/3 open'>30 min</div>
                                <div class='flex justify-center w-1/3 open'>29,00  €</div>
                            </div>
                            <div class='flex w-full'>
                                <div class='flex justify-center w-1/3 open'>Soin intensif jeunesse</div>
                                <div class='flex justify-center w-1/3 open'>90 min</div>
                                <div class='flex justify-center w-1/3 open'>69,00  €</div>
                            </div>
                            <div class='flex w-full'>
                                <div class='flex justify-center w-1/3 open'>Maquillage de jour</div>
                                <div class='flex justify-center w-1/3 open'>60 min</div>
                                <div class='flex justify-center w-1/3 open'>40,00  €</div>
                            </div>
                            <div class='flex w-full'>
                                <div class='flex justify-center w-1/3 open'>Maquillage soirée</div>
                                <div class='flex justify-center w-1/3 open'>60 min</div>
                                <div class='flex justify-center w-1/3 open'>35,00  €</div>
                            </div>
                            <div class='flex w-full'>
                                <div class='flex justify-center w-1/3 open'>Maquillage mariée + essaie</div>
                                <div class='flex justify-center w-1/3 open'>45 min</div>
                                <div class='flex justify-center w-1/3 open'>50,00  €</div>
                            </div>
                            <div class="flex justify-end pt-6 pr-6"><a href="https://romain00qs.setmore.com/romainpeixoto" class="flex justify-center border-solid border rounded-lg py-2 px-6 bg_pink kalam text-xl hover">Prendre RDV</a></div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="flex mt-12 justify-center"><p class="open text-xl flex items-center text_black">Pour connaitre les tarifs</p></div>
            <div class="flex mt-8 justify-center"><button class="text-xl kalam border border-solid bg_pink px-4 py-2 rounded-lg hover prices">Cliquez ici</button></div>           
            <div class="h-16"></div>
        </section>
        <section class="bg_pink flex z-40 story gift gift_800 justify-center ">
            <div class="party flex gap-20 gap_800 flex_col_800">
                <div class="p-8 flex justify-center w_50 w_100 w-1/2">
                    <img src="{{asset('storage/profiles/profile2.jpg')}}" alt="photo de la propriètaire" class=" w_50_800 h-full objet-cover ">
                </div>
                <div class="pt-8 pt_800 w-1/2 w_100 center flex_col_800">
                    <h2 class="text-3xl mb-8 mt-8 kalam w_100 center">Clin d'oeil</h2>
                    <p class="open w_100 center  p_800 w-2/3">Bienvenue chez l'ancre de la douceur. Je crois en la puissance de la beauté pour éléver votre confiance et illuminer votre essence unique. Esthéticienne passionnée, minutieuse et à l'écoute de vos besoin afin de vous offrir une expérience de soin exceptionnelle.</p>
                    <div class="flex pt-10 justify-center pb-2"><a href="{{ route ('story')}}" class="text-xl kalam border border-solid bg-white px-4 py-2 rounded-lg hover prices">En savoir +</a></div>    
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
        <section class="contact bg_pink flex justify-center gift_800 ">
            <div class="party flex flex_col_800 center">
                <div class="w-1/2 flex flex-col pt-20 justify-center items-center center w_100">
                    <h2 class="text-3xl mb-8  kalam w_100 center">Carte cadeau</h2>
                    <p class="open w_100 center pb-8 p_800 w-2/3">Envie de faire plaisir! Laissez-vous tenter par la carte cardeau. Disponible dans la boutique.</p>
                    <div class="flex  justify-center pb-8"><a href="{{ route ('shop')}}" class="text-xl kalam border border-solid bg-white px-4 py-2 rounded-lg hover prices">En savoir +</a></div>    

                </div>
                <div class="p-8 flex justify-center w_100 w-1/2">
                    <img src="{{asset('storage/profiles/gift_cart.jpg')}}" alt="photo de la carte cadeaux" class=" w_50_800 object-coutain h-full">
                </div>
            </div>
        </section>
        <section class="bg-white contact flex gift_800">
            <div class="w-full flex justify-center">
                <div class="flex  w-3/5  rounded-lg flex_col_800 w_100">
                    <div class=" flex flex-col justify-center items-center w-1/3 w_100">

                        <i class="fa-solid fa-mobile-screen text-4xl pb-4"></i>
                        <h4 class="kalam text-2xl">Contact</h4>
                        <p class="open text-base">Facebook</p>
                        <p class="open text-base">Tik Tok</p>
                        <p class="open text-base">Instagram</p>
                    </div>
                    <div class=" flex flex-col justify-center items-center w-1/3 w_100 mt_800">
                        <i class="fa-regular fa-clock text-4xl pb-4"></i>
                        <h4 class="kalam text-2xl">Horaires</h4>
                        <p class="open text-base">Lun au Ven 8h - 12h</p>
                        <p class="open text-base"> 14h - 19h</p>
                        <p class="open text-base">Sam 9h - 12h</p>
                    </div>
                    <div class=" flex flex-col justify-center items-center w-1/3 w_100 mt_800">
                        <i class="fa-solid fa-location-dot text-4xl pb-4"></i>
                        <h4 class="kalam text-2xl">Localisation</h4>
                        <p class="open text-base">Lotissement Le Parc</p>
                        <p class="open text-base">14 Rue de la Croix Piquet</p>
                        <p class="open text-base">63440 POUZOL</p>
                    </div>
                </div>
            </div>
        </section>
    </x-slot>
</x-app-layout>
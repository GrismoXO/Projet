<x-app-layout>
    @section('title', 'Contact')
    @section('meta-description', 'Je serai ravie d\'avoir de vos nouvelles et surtout de vous rencontrer en personne. Vous trouverez ci-dessous mes coordonnées. A bientôt !')>    <x-slot name='header'>
        @vite(['resources/js/heroContact.js'])
        
        <div class="flex flex-col justify-center items-center h-full">
            <h1 class="text-4xl kalam h1_800 pt_8">Contact</h1>
            <p class="pt-6 open text-xl w-1/2 text-center">Je serai ravie d'avoir de vos nouvelles et surtout de vous rencontrer en personne. Vous trouverez ci-dessous mes coordonnées. A bientôt !</p>
        </div>
    </x-slot>
    <x-slot name="slot">
        <section class="bg-white flex gift gift_800">
            <div class="w-full flex justify-center">
                <div class="flex w-3/5 rounded-lg flex_col_800 w_100">
                    <div class=" flex flex-col justify-center items-center w-1/3 w_100">

                        <i class="fa-solid fa-mobile-screen text-4xl pb-4"></i>
                        <h4 class="kalam text-2xl">Contacts</h4>
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
                        <p class="open text-base">14 Rue de la croix piquet</p>
                        <p class="open text-base">63440 POUZOL</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="flex gift_800 bg_contact flex_col_500">
            <div class="w-1/2 w_100">
                <img src="{{asset('storage/photo/bureauContact.jpg')}}" alt="photo de l'interieur de l'institue" class="profile h-full w-full">
            </div>
            <div class="w-1/2 w_100">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2767.3758571900125!2d2.9706158504142253!3d46.08348501760678!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f7314d94e4f5eb%3A0x7d56b2adf6fee641!2s14%20Rue%20de%20la%20Croix%20Piquet%2C%2063440%20Pouzol!5e0!3m2!1sfr!2sfr!4v1693473929792!5m2!1sfr!2sfr" width="400" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="w_100 w-full h-full"></iframe>
            </div>
        </section>
        <section class="bg-white flex justify-center pb-20 pt-20">
            <div >
                <h2 class="kalam text-4xl flex justify-center p_800">Envoyez-moi un Message</h2>
                <p class="open text-lg flex justify-center pt-4 p_800">et je vous répondrai dans les plus brefs délais. Merci!</p>
                <form action="" method="get" class=" form_contact pt-4 w_100 p_800">
                    @csrf
                    <div class="flex justify-between pt-4 flex_col_500">
                        <input type="text" name="name" id="name" placeholder="Nom *" class="border">
                        <input type="email" name="email" id="email" placeholder="Email *">
                        <input type="tel" name="phone" id="phone" placeholder="Numéro de téléphone *">
                    </div>
                    <div class="pt-6">
                        <input type="text" name="object" id="object" placeholder="Objet" class="w-full">
                    </div>
                    <div class="pt-6">
                        <textarea name="message" id="message" cols="30" rows="10" placeholder="Ecrivez-ici *" class="w-full"></textarea>
                    </div>
                    <div class="flex justify-end pt-2 "><button type="submit" class="border p-2 border-solid  rounded-lg mt-4 bg_pink w-32 kalam text-xl hover">Envoyer</button></div>
                </form>
        </div>
        </section>
    </x-slot>
</x-app-layout>
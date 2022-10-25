<?php include_once("partials/site/header.php"); ?>

<section class="w-full relative">
    <div class="w-full">
        <img class="hidden md:block -bottom-36 w-90% xl:w-80% 2xl:w-70% md:pt-20 mx-auto" src="assets/img/front-hero-circle.png" alt="">
        <img class="md:hidden w-full translate-y-14" src="assets/img/front-hero-circle_crop.png" alt="">
    </div>
    <div class="w-full h-screen absolute top-0">
        <div class="w-full  absolute bottom-28 md:bottom-96 lg:bottom-40 xl:bottom-2 text-blue">
            <div class="container">
               <h1 class="hidden md:block heading-xl"><span x-html="$t('welcome_to_varva')">Välkommen till <span class="italic">Varva. </span><br>Det cirkulära svaret <br><span class="italic">på jordhälsa</span>.</span></h1>
                <h1 class="block md:hidden heading-xl" x-html="$t('welcome_to_varva')"></h1>
            </div>
        </div>
    </div>
</section>

<!-- Account for hero img top offset -->
<section class="pt-24">
    <div class="container">
        <h4 class="uppercase font-bold">Mission</h4>
        <h2 class="max-w-7xl text-[38px] leading-[48px] md:heading-lg font-spectral font-light mt-6 md:mt-10" x-html="$t('mission')">Vår mission är skapa levande jordar genom regenerativa metoder, samtidigt som vi erbjuder fantastiska råvaror. <br> <span class="italic">Det kommer att bli utsökt!</span></h2>
    </div>
</section>


<section class="mt-10 md:mt-36">
    <div class="container">
        <div class="flex flex-col md:flex-row space-y-5 md:space-y-0 md:space-x-5">
            <div class="max-w-xs">
                <p class="text-lg" x-html="$t('vision')"><span class="italic">Varva</span> vill inspirera en ny generation jordbrukare och konsumenter genom att göra jordhälsa till vår främsta uppgift och låta hälsosamma livsmedel bli naturliga (bi)produkter.</p>
            </div>
            <div class="flex-1">
                <img class="w-full object-cover" src="./assets/img/hens.jpg" alt="">
            </div>
            <div class="flex-1 hidden md:block pt-20">
                <img class="w-full object-cover" src="./assets/img/eggs.jpg" alt="">
            </div>
            <div class="flex-1">
                <img class="w-full hidden md:block object-cover" src="./assets/img/cows.jpg" alt="">
            </div>
        </div>
        <!-- <div class="w-90% md:w-80% ml-auto mt-10 md:mt-16">
            <h2 class="text-2xl md:text-4xl lg:text-[56px] lg:leading-[4.5rem] font-spectral font-light mx-auto"  x-html="$t('benefits')">Vi ”varvar” tekniker från <span class="">småskaligt,</span><br class="hidden md:block">regenerativt, blandat jordbruk<br class="hidden md:block"> med storskalig spannmålsodling.</h2>
        </div> -->
    </div>
</section>


<section class="mt-20 md:mt-40 mb-32 md:mb-52">
    <div class="container">
        <h2 class="hidden md:block text-[38px] leading-[48px] md:heading-lg font-spectral font-light"><span x-html="$t('our_by_product')">Våra (bi) produkter</h2>
        <h2 class="block md:hidden text-[38px] leading-[48px] md:heading-lg font-spectral font-light" x-html="$t('our_by_product')"></h2>


        <div class="grid md:grid-cols-3 gap-32 sm:gap-10 2xl:gap-40 mt-8 md:mt-12">
            <div class="">
                <img class="w-full h-[180px] xl:h-[280px] object-cover" src="./assets/img/egg_sandwich.png" alt="">
                <p class="text-[24px] md:text-[36px] mt-8" x-html="$t('eggs_from')">Grönbetesägg</p>
                <p class="md:text-[24px] mt-4 pr-4" x-html="$t('locally_produced_eggs')">Lokalt producerade ägg från våra grönbetshöns</p>
                <p class="text-[14px] md:text-[18px] mt-4" x-text="$t('pickup_locations')">Pick up locations in Malmö</p>
                <a href="./products" class="block mt-10">
                    <div class="bg-blue rounded-full max-w-xs uppercase text-white text-center text-lg md:text-xl px-8 py-5 md:px-12 md:py-7 transition ease-in-out duration-100 hover:bg-transparent border-2 border-blue hover:text-blue">
                        <span  x-text="$t('view_alternatives')">View options</span>
                    </div>
                </a>

            </div>
            <div class="">
                <img class="h-[180px] xl:h-[280px] object-cover mx-auto" src="./assets/img/hen_icon.png" alt="">
                <p class="text-[24px] md:text-[36px] mt-8" x-text="$t('kokhona')">Kokhöna</p>
                <p class="md:text-[24px] mt-4 pr-4" x-text="$t('buy_season_hen')">Från våra betande får på fälten i Påarp.</p>
                <p class="text-[14px] md:text-[18px] mt-4" x-text="$t('pickup_locations')">Pick up locations in Malmö</p>
                <a href="./products#kokhona" class="block mt-10">
                    <div class="bg-blue rounded-full max-w-xs uppercase text-white text-center text-lg md:text-xl px-8 py-5 md:px-12 md:py-7 transition ease-in-out duration-100 hover:bg-transparent border-2 border-blue hover:text-blue">
                        <span  x-text="$t('view_alternatives')">View options</span>
                    </div>
                </a>
            </div>
            <div class="">
                <img class="mx-auto h-[180px] xl:h-[280px] object-cover" src="./assets/img/sheep2.png" alt="">
                <p class="text-[24px] md:text-[36px] mt-8" x-text="$t('meat_box')" >Köttlåda</p>
                <p class="md:text-[24px] mt-4 pr-4" x-text="$t('from_our_grazing_sheep')">Från våra betande får på fälten i Påarp. </p>
                <p class="text-[14px] md:text-[18px] mt-4" x-text="$t('pickup_locations')">Pick up locations in Malmö</p>
                <a href="./products#farkott" class="block mt-10">
                    <div class="bg-blue rounded-full max-w-xs uppercase text-white text-center text-lg md:text-xl px-8 py-5 md:px-12 md:py-7 transition ease-in-out duration-100 hover:bg-transparent border-2 border-blue hover:text-blue">
                        <span  x-text="$t('view_alternatives')">View options</span>
                    </div>
                </a>
            </div>
        </div>

    </div>
</section>


<!-- <section class="mt-20 md:mt-40 mb-32 md:mb-52">
    <div class="container">
        <h4 class="uppercase font-bold" x-text="$t('our_products')">VÅRA PRODUKTER</h4>
        <div class="mt-10">
            <div class="flex flex-col-reverse md:flex-row space-y-10 md:space-y-0 md:space-x-36">
                <div class="">
                    <h3 class="text-3xl md:text-6xl font-spectral font-light mobile:mt-10" x-text="$t('soil_health_as_a_service')">Jordhälsa som tjänst</h3>
                    <p class="text-xl md:text-3xl md:leading-10 font-light max-w-3xl md:pr-10 mt-5" x-html="$t('soil_health_as_a_service_desc')">En levande jord är avgörande för jordbrukets långsiktiga hållbarhet. I vår första produkt återknyter vi växtodlare och djurproducenter för att skapa ett mer integrerat, regenerativt system som är till ömsesidig nytta för alla.<br><br>Genom att återföra djuren till odlingsmarken sluter vi cirkeln, minskar beroendet av externa insatsmedel och bygger upp friska jordar.</p>
                    <a href="./methods" class="block mt-10">
                        <div class="button-rounded--blue">
                            <span x-text="$t('find_out_more')">Läs mer</span>
                            <svg width="27" height="22" viewBox="0 0 27 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0 11L24 11" stroke="currentColor" stroke-width="2" />
                                <path d="M17 2L25 11L17 20" stroke="currentColor" stroke-width="2" stroke-linecap="square" />
                            </svg>
                        </div>
                    </a>
                </div>
                <div class="w-75% md:w-auto mx-auto">
                    <img class="object-cover" src="./assets/img/soil_health.jpg" alt="">
                </div>
            </div>

            <div class="flex flex-col lg:flex-row space-y-14 lg:space-y-0 lg:space-x-36 2xl:justify-center mt-20 lg:mt-40 ">
                <div class="w-70% md:w-40% lg:w-auto max-w-sm flex flex-col md:flex-row md:space-x-10 lg:space-x-0 lg:flex-col items-center mobile:mx-auto pt-20">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-full" viewBox="0 0 366.772 451.411">
                        <path id="Egg" d="M366.772,253.633c0,109.231-82.1,197.778-183.386,197.778S0,362.864,0,253.633,82.1,0,183.386,0,366.772,144.4,366.772,253.633Z" fill="#e28d03" />
                    </svg>
                    <div class="hidden md:block ">
                        <svg class="mt-16" xmlns="http://www.w3.org/2000/svg" class="w-full" viewBox="0 0 283.648 124.449">
                            <g id="animal_icons" data-name="animal icons" opacity="0.995">
                                <g id="Group_4" data-name="Group 4" transform="translate(0 5.224)">
                                    <path id="Path_3" data-name="Path 3" d="M24.957,58.581C28.368,29.344,49.836,8.407,60.542,8.357,74.5,8.293,76.091,37.2,76.09,56.962c0,27.848,3.182,65.4-22.875,65.4C17.207,122.358,21.991,84.006,24.957,58.581Z" transform="translate(-22.944 -8.357)" fill="#a2c8f5" />
                                    <path id="Path_4" data-name="Path 4" d="M147.32,58.581c-3.411-29.237-24.878-50.174-35.584-50.224C97.778,8.293,96.187,37.2,96.187,56.962c0,27.848-3.182,65.4,22.875,65.4C155.07,122.358,150.286,84.006,147.32,58.581Z" transform="translate(-36.271 -8.357)" fill="#a2c8f5" />
                                </g>
                                <path id="Path_5" data-name="Path 5" d="M53.4,124.448h.253v0c29.4-.3,53.148-26.283,53.148-56.6C106.8,37.355,86.262,0,69.816,0c-8.8,0-9.4,15.427-9.957,29.771-.478,12.279-.924,23.766-6.457,24.1-5.533-.337-5.98-11.823-6.457-24.1C46.386,15.427,45.787,0,36.987,0,20.541,0,0,37.355,0,67.846c0,30.318,23.749,56.305,53.148,56.6v0Z" transform="translate(176.845)" fill="#a2c8f5" fill-rule="evenodd" />
                            </g>
                        </svg>
                        <p class="text-md text-[#a2c8f5] mt-5" x-text="$t('mutton_and_beef')">Får och nöt kommer snart</p>
                    </div>
                </div>
                <div>
                    <h4 class="uppercase font-bold" x-text="$t('our_by_products')">Våra (Bi) Produkter</h4>
                    <h3 class="text-3xl md:text-6xl font-spectral font-light mt-10" x-text="$t('eggs_from')">Ägg från grönbeteshöns</h3>
                    <p class="text-xl md:text-3xl md:leading-10 font-light max-w-3xl md:pr-10 mt-5" x-html="$t('eggs_from_desc')">
                        Efter att fåren betat ett område fortsätter våra grönbeteshöns med arbetet där de bidrar med att minska parasiter, sprida fårspillningen, och tillföra ytterligare näring. Medan våra djur regenererar jorden genererar de samtidigt näringsrika livsmedel som vi vill dela med oss av till dig.<br><br>Som första (bi)produkt erbjuder vi äggabonnemang från våra värphöns på bete. Du prenumererar på en höna för 30 ägg i månaden, och i slutet av säsongen kan du välja att ta emot din höna för en mustig vintergryta.
                    </p>
                    <a href="./products" class="block mt-10">
                        <div class="button-rounded--blue">
                            <span  x-text="$t('buy_now')">Köp här</span>
                            <svg width="27" height="22" viewBox="0 0 27 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0 11L24 11" stroke="currentColor" stroke-width="2" />
                                <path d="M17 2L25 11L17 20" stroke="currentColor" stroke-width="2" stroke-linecap="square" />
                            </svg>
                        </div>
                    </a>
                </div>
            </div>

        </div>
    </div>
</section> -->


<!--
<section class="mt-20 md:mt-48">
    <div class="container">
        <h4 class="uppercase font-bold" x-text="$t('our_partners')">VÅRA PARTNERS</h4>

        <div class="pt-5 mt-8 md:mt-0 md:p-20">
            <div class="flex flex-col lg:flex-row space-y-20 md:space-x-32">
                <div class="md:max-w-xl md:pr-10">
                    <img class="w-70% object-cover" src="./assets/img/krokstorp.jpg" alt="">
                    <h3 class="text-3xl md:text-5xl font-spectral font-light italic mt-12">Krokstorp Gård</h3>
                    <p class="max-w-lg text-xl md:text-2xl font-light mt-6" x-text="$t('krokstorp_gard')">
                        Martin Krokstorp på Krokstorps gård i Påarp utanför Helsingborg, en av de mest innovativa växtodlarna i Sverige, har välvilligt accepterat att fungera som pilotgård för vår nyutvecklade tjänst på jordhälsa. Den 27 augusti planterade vi 4 fotbollsplaner (3 ha) av hans mark med en mångfalds- vallblandning som innehåller över 10 olika gräs, baljväxter och örter. Om allt går bra hoppas vi kunna utöka programmet till 10 hektar nästa år.
                    </p>
                </div>
                <div class="md:max-w-xl md:pr-10 md:mt-40 2xl:mt-60">
                    <img class="w-70% object-cover" src="./assets/img/mansgard.jpg" alt="">
                    <h3 class="text-3xl md:text-5xl font-spectral font-light italic mt-12">Sigvard Månsgård</h3>
                    <p class="max-w-lg text-xl md:text-2xl font-light mt-6" x-text="$t('sigvard_mansgard')">
                        Mina Kandi med familj föder upp naturbetesfår nära Åstorp. De förädlar själva på gården och säljer direkt till konsument. Mina kommer att låna ut några tackor till oss under den här säsongen så att vi kan regenerera jorden på Krokstorps Gård. När deras tjänstgöring som jordförnyare upphör i slutet av växtsäsongen kommer de att slaktas och förädlas till utmärkta, näringsrika produkter och erbjudas till våra medlemmar.
                    </p>
                </div>

            </div>
            <div class="flex flex-col lg:flex-row space-y-20 md:space-x-32 mt-16">
                <div class="md:max-w-xl md:pr-10 md:mt-20">
                    <img class="w-70% object-cover" src="./assets/img/mmm_logo.jpg" alt="">
                    <h3 class="text-3xl md:text-5xl font-spectral font-light italic mt-12">MiljöMatematik</h3>
                    <p class="max-w-lg text-xl md:text-2xl font-light mt-6" x-text="$t('miljo_matematik')">
                        MiljöMatematiks mission är att transformera livsmedelssystemet och bidra till att maten blir en del av lösningen i stället för en del av problemet. Miljömatematik stöder oss med djup kunskap inom området och ett bra nätverk för framtida expansion.
                    </p>
                </div>
                <div class="md:max-w-xl md:pr-10 md:mt-40 2xl:mt-60">
                    <img class="w-70% object-cover" src="./assets/img/logo_joel_lindqvist_final_black.jpg" alt="">
                    <h3 class="text-3xl md:text-5xl font-spectral font-light italic mt-12">Mat- & Chokladstudion</h3>
                    <p class="max-w-lg text-xl md:text-2xl font-light mt-6" x-html="$t('mat_chokladstudion')">
                        Vi är stolta över att kunna presentera vårt samarbete med Mat- & Chokladstudion i Malmö. Mat- & Chokladstudion anser att det är omöjligt att må bra av mat som är på bekostnad av något annat; en grundvärdering även i vårt företag.<br><br>Mat- & Chokladstudion blir vårt första leveransställe för äggabonnemang i Malmö.
                    </p>
                </div>
            </div>
        </div>

    </div>
</section> -->


<!--
<section class="mt-10 md:mt-28 pb-20 md:pb-40">
    <div class="container">
        <div class="w-full relative">
            <img class="w-full object-cover" src="./assets/img/pilot_sheep.jpg" alt="">
            <div class="md:absolute -top-10 -right-10 bg-blue text-white px-8 md:px-10 py-12 md:py-20 mt-4">
                <h4 class="uppercase font-bold" x-text="$t('our_pilot')">VÅRT PILOTPROJEKT</h4>
                <ul class="space-y-6 list-disc list-outside pl-5 mt-12" x-html="$t('our_pilot_html')">
                    <li class="text-lg md:text-xl">Tre hektar sådda med en mångfald av gräs, baljväxter och örter.</li>
                    <li class="text-lg md:text-xl">Betas av får från Sigvardsmans gård med roterande bete.</li>
                    <li class="text-lg md:text-xl">Grönbeteshöns för ytterligare näringsgiva och skadedjursbekämpning.</li>
                </ul>
            </div>
            <div class=" md:ml-20 mt-4 md:mt-10">
                <img class="w-full max-w-screen-lg object-cover" src="./assets/img/smart_fence.jpg" alt="">
                <p class="text-gray-800 mt-2" x-text="$t('our_piot_img_caption')">Före och efter betesdrift med en kompakt fårflock.</p>
            </div>
        </div>
    </div>
</section> -->

<?php include_once("partials/site/footer.php"); ?>
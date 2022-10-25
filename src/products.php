<?php include_once("partials/site/header.php"); ?>

<!-- Fix to make sure buy buttons show up after lang change -->
<div x-data @langchange.window="location.reload()"></div>

<div x-data="{show_map: false, expanded: false}">
    <section class="pt-20">
        <div class="container">
            <div class="flex flex-col lg:flex-row mt-8 md:mt-12">
                <div class="order-2 lg:order-1 lg:w-40% pt-6 lg:p-0">
                    <p class="text-[24px] md:text-[36px]" x-html="$t('eggs_from')"></p>
                    <p x-show="$locale() == 'sv'" x-cloak class="max-w-xl md:text-[24px] mt-4" >Vi flyttar dagligen våra höns till ny betesmark, då utnyttjar vi naturens egen metod för att snabbt öka bördigheten i jorden.</p>
                    <p x-show="$locale() == 'en'" x-cloak class="max-w-xl md:text-[24px] mt-4" >We move our hens to new pasture daily, then we use nature's own method to quickly increase fertility in the soil.</p>
                    <div class="hidden md:block h-40"></div>
                </div>
                <div class="order-1 lg:order-2 lg:w-60%">
                    <img class="w-full h-full object-cover" src="./assets/img/egg_sandwich.png" alt="">
                </div>
            </div>
        </div>
    </section>


    <section class="pt-28">
        <div class="container">
            <div x-show="$locale() == 'sv'" x-cloak>
                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-x-10 gap-y-14">
                    <div class="">
                        <p class="text-[24px] md:text-[36px] font-semibold">Nyfiken</p>
                        <p class="text-[20px] md:text-[24px] mt-4 max-w-xs font-normal">Prova våra kvalitetsägg innan du prenumererar</p>
                        <p class="text-[16px] md:text-[18px] mt-2 max-w-xs">12 ägg, levererade till ditt valda utlämningsställe</p>
                        <p class="mt-4 text-[24px] font-semibold">72 kr</p>
                        <p class="mt-4 md:text-[18px] font-semibold text-[#3D3D3D]">6.00 kr/ägg</p>
                        <p class="mt-14 md:text-[18px] font-semibold text-[#3D3D3D]">Slut för säsongen</p>
                    </div>
                    <div class="">
                        <p class="text-[24px] md:text-[36px] font-semibold">Foodie</p>
                        <p class="text-[20px] md:text-[24px] mt-4 max-w-xs font-normal">Perfekt för matälskare som vill ha kvalitetsprodukter</p>
                        <p class="text-[16px] md:text-[18px] mt-2 max-w-xs">30 ägg, levererade till ditt valda utlämningsställe</p>
                        <p class="mt-4 text-[24px] font-semibold">150 kr</p>
                        <p class="mt-4 md:text-[18px] font-semibold text-[#3D3D3D]">5.00 kr/ägg</p>
                        <!-- ägg subscription ADD TO CART -->
                        <p class="mt-14 md:text-[18px] font-semibold text-[#3D3D3D]">Slut för säsongen</p>
                    </div>
                    <div class="relative">
                        <div class="relative z-20">
                            <p class="text-[24px] md:text-[36px] font-semibold">Jordhjälte</p>
                            <p class="text-[20px] md:text-[24px] mt-4 max-w-xs font-normal">Hjälper oss att uppfylla vårt markuppdrag på lång sikt</p>
                            <p class="text-[16px] md:text-[18px] mt-2 max-w-xs">Abonnera på ägg varje månad, levererade till ditt valda utlämningsställe</p>
                            <p class="mt-4 text-[24px] font-semibold">Fr. 450 kr</p>
                            <br><br>
                            <!-- <p class="mt-4 md:text-[18px] font-semibold text-[#3D3D3D]">4.44 kr/ägg</p> -->
                            <!-- Egg subscription ADD TO CART -->
                            <a href="#abonnemang-2023" class="block mt-8">
                                <div class="inline-block bg-blue rounded-full text-white text-center text-[20px] md:text-xl px-10 py-4 transition ease-in-out duration-100 hover:bg-transparent border-2 border-blue hover:text-blue">
                                    <span>Se alternativ</span>
                                </div>
                            </a>
                        </div>
                        <div class="absolute right-0 w-32 h-32 -top-20 lg:-left-16 z-10 flex items-center justify-center rounded-full bg-[#D37A28] transform rotate-12 lg:-rotate-12">
                            <span class="text-[28px] text-white font-semibold">2023</span>
                        </div>
                    </div>
                    <div class="">
                        <p class="text-[24px] md:text-[36px] font-semibold">Restaurang / Café</p>
                        <p class="text-[20px] md:text-[24px] mt-4 max-w-xs font-normal">Gå med i vår växande skara restaurang- och kafékunder</p>
                        <p class="text-[16px] md:text-[18px] mt-2 max-w-xs">Anpassade kvantiteter levererade till dörren, för säsongslånga beställningar</p>
                        <p class="mt-4 text-[24px] font-semibold">&nbsp;</p>
                        <p class="mt-4 md:text-[18px] font-semibold text-[#3D3D3D]">&nbsp;</p>
                        <a href="./about-us#contact" class="block mt-8">
                            <div class="inline-block bg-blue rounded-full text-white text-center text-[20px] md:text-xl px-10 py-4 transition ease-in-out duration-100 hover:bg-transparent border-2 border-blue hover:text-blue">
                                <span>Kontakta oss</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Products ENG -->
            <div x-show="$locale() == 'en'">
                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-x-10 gap-y-14">
                    <div class="">
                        <p class="text-[24px] md:text-[36px] font-semibold">Nyfiken</p>
                        <p class="text-[20px] md:text-[24px] mt-4 max-w-xs font-normal">Try out our amazing quality eggs, before subscribing</p>
                        <p class="text-[16px] md:text-[18px] mt-2 max-w-xs">An order of 12 eggs, delivered to your chosen pickup location</p>
                        <p class="mt-4 text-[24px] font-semibold"><span class="line-through text-[#9d9d9d] md:text-[21px]">72</span> 60 kr</p>
                        <p class="mt-4 md:text-[18px] font-semibold text-[#3D3D3D]">5.00 kr/egg</p>
                        <p class="mt-14 md:text-[18px] font-semibold text-[#3D3D3D]">Out of stock for the season</p>
                        </a>
                    </div>
                    <div class="">
                        <p class="text-[24px] md:text-[36px] font-semibold">Foodie</p>
                        <p class="text-[20px] md:text-[24px] mt-4 max-w-xs font-normal">Perfect for food lovers that want quality produce</p>
                        <p class="text-[16px] md:text-[18px] mt-2 max-w-xs">30 eggs, delivered to your chosen pickup location</p>
                        <p class="mt-4 text-[24px] font-semibold"><span class="line-through text-[#9d9d9d] md:text-[21px]">150</span> 135 kr</p>
                        <p class="mt-4 md:text-[18px] font-semibold text-[#3D3D3D]">4.50 kr/egg</p>
                        <p class="mt-14 md:text-[18px] font-semibold text-[#3D3D3D]">Out of stock for the season</p>
                    </div>
                    <div class="relative">
                        <div class="relative z-20">
                            <p class="text-[24px] md:text-[36px] font-semibold">Jordhjälte</p>
                            <p class="text-[20px] md:text-[24px] mt-4 max-w-xs font-normal">Helping us fulfil our soil mission over the long term</p>
                            <p class="text-[16px] md:text-[18px] mt-2 max-w-xs">Subscribe to eggs each month, delivered to your chosen delivery location</p>
                            <p class="mt-4 text-[24px] font-semibold">SP. 450 kr</p>
                            <br>
                            <!-- <p class="mt-4 md:text-[18px] font-semibold text-[#3D3D3D]">4.44 kr/egg</p> -->
                            <a href="#abonnemang-2023" class="block mt-8">
                                <div class="inline-block bg-blue rounded-full text-white text-center text-[20px] md:text-xl px-10 py-4 transition ease-in-out duration-100 hover:bg-transparent border-2 border-blue hover:text-blue">
                                    <span>Show alternatives</span>
                                </div>
                            </a>
                        </div>
                        <div class="absolute right-0 w-32 h-32 -top-20 lg:-left-16 z-10 flex items-center justify-center rounded-full bg-[#D37A28] transform rotate-12 lg:-rotate-12">
                            <span class="text-[28px] text-white font-semibold">2023</span>
                        </div>
                    </div>
                    <div class="">
                        <p class="text-[24px] md:text-[36px] font-semibold">Restaurang / Café</p>
                        <p class="text-[20px] md:text-[24px] mt-4 max-w-xs font-normal">Join our growing list of  restaurants & cafe customers </p>
                        <p class="text-[16px] md:text-[18px] mt-2 max-w-xs">Custom quantities delivered to the door, for season-long orders</p>
                        <p class="mt-4 text-[24px] font-semibold">Custom to order</p>
                        <p class="mt-4 md:text-[18px] font-semibold text-[#3D3D3D]">&nbsp;</p>
                        <a href="./about-us#contact" class="block mt-8">
                            <div class="inline-block bg-blue rounded-full text-white text-center text-[20px] md:text-xl px-10 py-4 transition ease-in-out duration-100 hover:bg-transparent border-2 border-blue hover:text-blue">
                                <span>Contact us</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="mt-10 mb-20 md:mb-40 pt-20" id="abonnemang-2023">
        <div class="container">
            <div>
                <!-- x-show="!expanded" x-collapse x-cloak -->
                <div  class="bg-[#e5e7e8] p-6 md:px-16 md:py-14 relative">
                    <div class="hidden lg:block absolute w-20 h-20 -top-10 left-[55%] rotate-45 -z-10 bg-[#e5e7e8]"></div>
                    <p x-show="$locale() == 'sv'" class="text-[24px] md:text-[36px] font-semibold">Äggabonnemang säsongen 2023</p>
                    <p x-show="$locale() == 'en'" class="text-[24px] md:text-[36px] font-semibold">Egg subscription season 2023</p>
                    <div class="">
                        <div class="">
                            <p x-show="$locale() == 'sv'" class="text-[20px] md:text-[24px] mt-4 max-w-lg font-normal">
                                Ägg levererade till ditt valda utlämningsställe varje månad. Abonnemanget löper 6 månader från maj 2023. Tre olika storlekar, välj hur många ägg du vill ha i månaden.
                            </p>
                            <p x-show="$locale() == 'en'" class="text-[20px] md:text-[24px] mt-4 max-w-lg font-normal">
                                Eggs delivered to your chosen delivery point every month. The subscription runs for 6 months from May 2023. Three different sizes, choose how many eggs you want per month.
                            </p>
                            <p x-show="$locale() == 'sv'" class="text-[20px] md:text-[24px] mt-4 ">Beställ innan årsskiftet så får du 5% rabatt!</p>
                            <p x-show="$locale() == 'en'" class="text-[20px] md:text-[24px] mt-4 ">Order before the turn of the year for a 5% discount!</p>
                        </div>
                    </div>
                    <!-- <p><span class="font-light">Beställ innan årsskiftet så får du 5% rabatt.</span></p>
                    <p><span class="font-light">Med 100% ångerrätt fram till 1 mars. </span></p> -->
                    <div class="grid md:grid-cols-3 gap-14 mt-20">
                        <div class="">
                            <p class="text-3xl md:text-4xl font-semibold">15 <span class="lowercase" x-text="$t('eggs')"></span></p>
                            <!-- <p class="text-[20px] md:text-[24px] mt-4 max-w-xs font-normal">Perfect for food lovers that want quality produce</p> -->
                            <p class="text-[16px] md:text-[18px] mt-2 max-w-xs">Ett 15 <span x-text="$t('pack_each_month')"></span></p>
                            <p class="mt-4 text-[24px] font-semibold"><span class="line-through text-[#9d9d9d] md:text-[21px]">450</span> 428 kr</p>
                            <p class="mt-4 md:text-[18px] font-semibold text-[#3D3D3D]">4.75 kr/<span class="lowercase" x-text="$t('egg')"></span></p>

                        </div>
                        <div class="">
                            <p class="text-3xl md:text-4xl font-semibold">30 <span class="lowercase" x-text="$t('eggs')"></span></p>
                            <!-- <p class="text-[20px] md:text-[24px] mt-4 max-w-xs font-normal">Perfect for food lovers that want quality produce</p> -->
                            <p class="text-[16px] md:text-[18px] mt-2 max-w-xs">2 x 15 <span x-text="$t('pack_each_month')"></span></p>
                            <p class="mt-4 text-[24px] font-semibold"><span class="line-through text-[#9d9d9d] md:text-[21px]">800</span> 760 kr</p>
                            <p class="mt-4 md:text-[18px] font-semibold text-[#3D3D3D]">4.22 kr/<span class="lowercase" x-text="$t('egg')"></span></p>

                        </div>
                        <div class="">
                            <p class="text-3xl md:text-4xl font-semibold">45 <span class="lowercase" x-text="$t('eggs')"></span></p>
                            <!-- <p class="text-[20px] md:text-[24px] mt-4 max-w-xs font-normal">Perfect for food lovers that want quality produce</p> -->
                            <p class="text-[16px] md:text-[18px] mt-2 max-w-xs">3 x 15 <span x-text="$t('pack_each_month')"></span></p>
                            <p class="mt-4 text-[24px] font-semibold"><span class="line-through text-[#9d9d9d] md:text-[21px]">1200</span> 1140 kr</p>
                            <p class="mt-4 md:text-[18px] font-semibold text-[#3D3D3D]">4.22 kr/<span class="lowercase" x-text="$t('egg')"></span></p>

                        </div>
                    </div>
                    <div class="mt-20">
                        <p class="text-2xl font-semibold mb-6" x-text="$t('how_many_eggs_per_month')">Hur många ägg vill du ha varje månad?</p>
                        <div x-show="$locale() == 'sv'">
                            <div id='product-component-1664114696965'></div>
                        </div>
                        <div x-show="$locale() == 'en'">
                            <div id='product-component-1664114764113'></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mt-20 mb-20 md:mb-40">
        <div class="container">
            <div class="flex flex-col md:flex-row items-center justify-end">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-20 md:w-40" viewBox="0 0 152.952 127.296">
                    <g id="Map_icon" data-name="Map icon" transform="translate(-545.755 -942.383)">
                        <path id="Path_381" data-name="Path 381" d="M-10902.931-22329.768l13.638-75.437,23.053-12.1,25.22,4.025,17.622-12.527,24.32,6.063,45.361,63.438-39.593-10.41-30.089,24.813-38.693-5.23Z" transform="translate(11450 23397.801)" fill="none" stroke="#2867d3" stroke-width="2"/>
                        <path id="Path_382" data-name="Path 382" d="M-10778.132-22382.389l2.7,60.953" transform="translate(11362.603 23367.396)" fill="none" stroke="#2867d3" stroke-width="1"/>
                        <line id="Line_14" data-name="Line 14" x1="25.174" y1="50.648" transform="translate(629.613 975.983)" fill="none" stroke="#2867d3" stroke-width="1"/>
                        <path id="Exclusion_1" data-name="Exclusion 1" d="M22.556,70.4h0c-.056-.086-5.677-8.912-11.278-19.241C8,45.122,5.395,39.787,3.524,35.3,1.186,29.7,0,25.416,0,22.574A22.484,22.484,0,0,1,3.852,9.952a22.61,22.61,0,0,1,9.925-8.177,22.557,22.557,0,0,1,31.335,20.8c0,2.841-1.187,7.125-3.524,12.73-1.87,4.482-4.479,9.817-7.753,15.859C28.234,61.492,22.613,70.317,22.556,70.4Zm0-60.3a12.422,12.422,0,1,0,4.847.98A12.394,12.394,0,0,0,22.556,10.107Z" transform="translate(590.354 942.383)" fill="#2867d3"/>
                        <line id="Line_15" data-name="Line 15" x1="14.985" y1="65.932" transform="translate(609.834 984.375)" fill="none" stroke="#2867d3" stroke-width="1"/>
                    </g>
                </svg>
                <p class="mt-10 md:mt-0 md:ml-20 text-2xl">Se våra <a @click.prevent="show_map = !show_map" class="underline">utlämningställen</a></p>
            </div>
        </div>
    </section>


    <section class="mt-28 mb-20">
        <div class="container">
            <div class="flex flex-col md:flex-row md:space-x-6">
                <div class="order-2 md:order-1 md:w-40% pt-8 md:pt-0">
                    <div x-show="$locale() == 'sv'">
                        <p class="text-[24px] md:text-[36px] font-semibold">Var kommer våra<br> ägg ifrån?</p>
                        <p class="md:text-[24px] mt-4 font-bold">Naturligt beteende i<br> naturliga miljöer</p>
                        <p class="max-w-md md:text-[20px] mt-8">Djuren är naturens sätt att cykla näringsämnen, bygga bördig jord, minska skadedjur och förvalta landskapet, om vi låter dem göra det. Genom att hantera djuren på ett holistiskt sätt och att dagligen rotera dem genom landskapet kan vi utnyttja denna fantastiska potential och samtidigt skapa produktiva och motståndskraftiga system. I år kan du köpa (bi)produkterna från detta system, uppfödda på vår första kunds gård i Påarp utanför Helsingborg.</p>
                    </div>
                    <div x-show="$locale() == 'en'">
                        <p class="text-[24px] md:text-[36px] font-semibold">Where do our<br> eggs come from?</p>
                        <p class="md:text-[24px] mt-4 font-bold">  Natural behavior in<br>natural environments</p>
                        <p class="max-w-md md:text-[18px] mt-8">Animals are nature's way of cycling nutrients, building fertile soil, reducing pests and managing the landscape, if we let them do it. By handling the animals in a holistic way and rotating them through the landscape on a daily basis, we can utilize this fantastic potential and at the same time create productive and resilient systems. This year you can buy the (bi) products from this system, bred on our first customer's farm in Påarp outside Helsingborg.</p>
                    </div>
                </div>
                <div class="order-1 md:order-2 md:w-60%">
                    <img src="assets/img/free_range.jpg" alt="">
                </div>
            </div>
        </div>
    </section>



    <!-- Kokhöna -->
    <section class="pt-20 relative" id="kokhona">
        <div class="container">
            <div class="flex flex-col md:flex-row mt-8 md:mt-12">
                <div class="md:order-2">
                    <img class="w-60" src="./assets/img/hen_icon.png" alt="">
                </div>
                <div class="mt-10 md:mt-0">
                    <div x-show="$locale() == 'sv'" x-cloak>
                        <p class="text-[24px] md:text-[36px]" x-text="$t('kokhona')">Kokhöna</p>
                        <p class="max-w-lg md:text-[24px] mt-4">Köp en av säsongens hönor för en mustig vintergryta. </p>
                        <div class="max-w-xs mt-5">
                            <p>Upphämtning från 11 Oktober</p>
                            <small class="text-black">Vikt ca 1.2kg</small>
                        </div>
                        <!-- <a href="/methods" class="underline block mt-10 ">Läs mer om hönsens bidrag till friskare jordar.</a> -->

                        <p class="mt-14 text-[24px] font-semibold">130 kr</p>
                        <p class="mt-4 md:text-[18px] font-semibold text-[#3D3D3D]">108.33 kr/kg
                        <div class="mt-10">
                            <div id='product-component-1663697526660'></div>
                        </div>
                    </div>

                    <div x-show="$locale() == 'en'" x-cloak>
                        <p class="text-[24px] md:text-[36px]" x-text="$t('kokhona')">Kokhöna</p>
                        <p class="max-w-lg md:text-[24px] mt-4">Buy one of this seasons hens for a hearty winter stew.</p>
                        <div class="max-w-xs mt-5">
                            <p>Pickup from 11 October</p>
                            <small class="text-black">Weight about 1.2kg</small>
                        </div>
                        <!-- <a href="/methods" class="underline block mt-10 ">Läs mer om hönsens bidrag till friskare jordar.</a> -->

                        <p class="mt-14 text-[24px] font-semibold">130 kr</p>
                        <p class="mt-4 md:text-[18px] font-semibold text-[#3D3D3D]">108.33 kr/kg
                        <div class="mt-10">
                            <div id='product-component-1663697799004'></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- SHeep -->
    <section class="pt-20 mt-20" id="farkott">
        <div class="container">
            <div class="flex flex-col lg:flex-row mt-8 md:mt-12">
                <div class="order-2 lg:order-1 lg:w-40% pt-6 lg:p-0">
                    <div x-show="$locale() == 'sv'" x-cloak>
                        <p class="text-[24px] md:text-[36px]">Kött från våra får</p>
                        <p class="max-w-lg md:text-[24px] mt-4">Våra tackor går på planerat bete vilket ger dem en bredare diet. Det innebär bättre kött och bättre jordhälsa.</p>
                        <a href="/methods" class="underline block mt-10 ">Läs mer om fårens bidrag till friskare jordar.</a>
                    </div>

                    <div x-show="$locale() == 'en'" x-cloak>
                        <p class="text-[24px] md:text-[36px]">Meat from our sheep</p>
                        <p  class="max-w-xl md:text-[24px] mt-4">Our ewes go on planned pasture which gives them a wider diet. This means better meat and better soil health.</p>
                        <a href="/methods" class="underline block mt-10 ">Read more about the sheep's contribution to healthy soils.</a>
                    </div>
                    <div class="hidden md:block h-40"></div>
                </div>
                <div class="order-1 lg:order-2 lg:w-60%">
                    <img class="w-full h-full object-cover" src="./assets/img/sheep_thin.jpg" alt="">
                </div>
            </div>
        </div>
    </section>


    <section id="" class="relative py-28 md:py-40">
        <div class="container">
            <div x-show="$locale() == 'sv'" x-cloak>
                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-x-10 gap-y-14">
                    <div class="">
                        <p class="text-[24px] md:text-[36px] font-semibold">Höstlåda</p>
                        <p class="text-[20px] md:text-[24px] mt-4 max-w-xs font-normal">Perfekt för höstens grillkvällar.</p>
                        <p class="text-[16px] md:text-[18px] mt-2 max-w-xs">
                            Innehåll:<br>
                            Grillkorv 1,5 kg<br>
                            Köttbullar 1 kg<br>
                            Burgare 4 st<br><br>
                            <br>
                            <small>Totalt ca 3kg</small>
                            <br>
                            <br>
                            Levererat till ditt valda utlämningsställe från och med november
                        </p>
                        <p class="mt-8 text-[24px] font-semibold">1000 kr</p>
                        <p class="mt-4 md:text-[18px] font-semibold text-[#3D3D3D]">333.33 kr/kg</p>
                        <!-- hostlada ADD TO CART -->
                        <div id='product-component-1662106968150' class="mt-4"></div>
                    </div>
                    <div class="">
                        <p class="text-[24px] md:text-[36px] font-semibold">Jullåda</p>
                        <p class="text-[20px] md:text-[24px] mt-4 max-w-xs font-normal">För det närproducerade julbordet.</p>
                        <p class="text-[16px] md:text-[18px] mt-2 max-w-xs">
                            Innehåll:<br>
                            En bit fårfiol<br>
                            Prinskorv 300g<br>
                            Salami 2 st<br>
                            Köttbullar 300g<br><br>
                            <small>Totalt ca 3kg</small>
                            <br>
                            <br>
                            Levererat till ditt valda utlämningsställe från och med november
                        </p>
                        <p class="mt-8 text-[24px] font-semibold">800 kr</p>
                        <p class="mt-4 md:text-[18px] font-semibold text-[#3D3D3D]">266.66 kr/kg</p>
                        <!-- jullada ADD TO CART -->
                        <div id='product-component-1662107186385' class="mt-4"></div>
                    </div>
                </div>
            </div>
            <!-- Products ENG -->
            <div x-show="$locale() == 'en'">
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-x-10 gap-y-14">
                    <div class="">
                        <p class="text-[24px] md:text-[36px] font-semibold">Autumn box</p>
                        <p class="text-[20px] md:text-[24px] mt-4 max-w-xs font-normal">Perfect for autumn barbecue evenings.</p>
                        <p class="text-[16px] md:text-[18px] mt-2 max-w-xs">
                            Contents:<br>
                            Sausage for grilling 1,5 kg<br>
                            Meatballs 1 kg<br>
                            Burgers 4 st<br><br>
                            <br>
                            <small>Total about 3kg</small>
                            <br>
                            <br>
                            Delivered to your chosen pickup location from November onwards
                        </p>
                        <p class="mt-8 text-[24px] font-semibold">1000 kr</p>
                        <p class="mt-4 md:text-[18px] font-semibold text-[#3D3D3D]">333.33 kr/kg</p>
                        <!-- hostlada ADD TO CART -->
                        <div id='product-component-1662406494240' class="mt-4"></div>
                    </div>
                    <div class="">
                        <p class="text-[24px] md:text-[36px] font-semibold">Christmas box</p>
                        <p class="text-[20px] md:text-[24px] mt-4 max-w-xs font-normal">For the locally produced Christmas table.</p>
                        <p class="text-[16px] md:text-[18px] mt-2 max-w-xs">
                            Contents:<br>
                            One piece of mutton fiddle<br>
                            Cocktail sausage 300g<br>
                            Salami 2 st<br>
                            Meatballs 300g<br><br>
                            <small>Total about 3kg</small>
                            <br>
                            <br>
                            Delivered to your chosen pickup location from November onwards
                        </p>
                        <p class="mt-8 text-[24px] font-semibold">800 kr</p>
                        <p class="mt-4 md:text-[18px] font-semibold text-[#3D3D3D]">266.66 kr/kg</p>
                        <!-- jullada ADD TO CART -->
                        <div id='product-component-1662406728887' class="mt-4"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="absolute w-20 h-20 right-0 top-0 md:w-32 md:h-32 z-10 flex items-center justify-center rounded-full bg-[#D37A28] transform rotate-12 md:-rotate-12">
            <span class="md:text-[28px] text-white font-semibold">Är du medlem?</span>
        </div> -->
    </section>



    <section class="mb-24 md:mb-44">
        <div class="container">
            <div class="relative">
                <div x-show="$locale() == 'sv'">
                    <h2 class="text-[64px] leading-[70px] md:heading-lg font-spectral font-light"><span>Har du frågor om en<br>beställning?</h2>
                </div>
                <div x-show="$locale() == 'en'">
                    <h2 class="text-[64px] leading-[70px] md:heading-lg font-spectral font-light"><span>Have a question about your<br>egg orders?</h2>
                </div>
                <div class="absolute -bottom-16 md:bottom-0 right-0 w-44">
                    <a class="underline" href="https://m.me/varva.co"><img src="assets/img/fb-chat.png" alt=""></a>

                </div>
            </div>

        </div>
    </section>


    <div x-show="show_map" x-cloak class="relative z-50" aria-labelledby="modal-title" role="dialog" aria-modal="true">

      <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>

      <div class="fixed inset-0 z-10 overflow-y-auto">
        <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
          <div class="relative transform overflow-hidden rounded-lg bg-white px-4 pt-5 pb-4 text-left shadow-xl transition-all sm:my-8 sm:p-6">
            <div>

            </div>
            <div class="mt-5 sm:mt-6">
                <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1YOYNWd90ATws-XgtVGn98S2LSdM1ulo&ehbc=2E312F" class="w-full h-[500px] xl:w-[1080px] xl:h-[800px]"></iframe>
                <button @click="show_map = !show_map" type="button" class="mt-10 inline-flex mx-auto justify-center rounded-md border border-transparent bg-blue px-4 py-2 text-base font-medium text-white shadow-sm hover:bg-[#222222] focus:outline-none sm:text-sm">Stäng</button>
            </div>
          </div>
        </div>
      </div>
    </div>

</div>

<?php include_once("partials/shopify/product-egg-subscription.php"); ?>
<?php include_once("partials/shopify/product-egg-subscription-sv.php"); ?>
<?php include_once("partials/shopify/product-kohona.php"); ?>
<?php include_once("partials/shopify/product-kohona-en.php"); ?>

<?php include_once("partials/shopify/product-hostlada.php"); ?>
<?php include_once("partials/shopify/product-jullada.php"); ?>
<?php include_once("partials/shopify/product-autum-en.php"); ?>
<?php include_once("partials/shopify/product-christmasbox-en.php"); ?>
<?php include_once("partials/site/footer.php"); ?>
<?php include_once("partials/site/header.php"); ?>


<!-- Account for hero img top offset -->
<section class="pt-32 md:pt-44 pb-20 md:pb-40">
    <div class="container">
        <h4 class="uppercase font-bold" x-text="$t('about_us')">Om oss</h4>
        <h2 class="heading-lg font-spectral font-light mt-6 md:mt-10" x-html="$t('grazing_entrepreneurs')">Betes<span class="sm:hidden">-<br></span>entreprenörer</h2>
        <p class="max-w-xl text-xl text-gray-500 mt-10" x-text="$t('about_us_desc')">
            Vi är en grupp människor intresserade av att utmana status quo och hitta nya sätt att förbättra vår närmiljö. Vi känner en känsla av tillhörighet och ansvar för den jord som vi är så beroende av, och VARVA är vårt sätt att visa vår tacksamhet genom att förbättra jordhälsan i vår region.
        </p>
        <div class="bg-beige mt-10">
            <div class="py-12 max-w-7xl lg:py-24">
                <div class="space-y-12 lg:grid lg:grid-cols-3 lg:gap-8 lg:space-y-0">
                    <div class="space-y-5 sm:space-y-4">
                        <h4 class="uppercase font-bold" x-text="$t('our_team')">Vårt team</h4>
                        <!-- <h2 class="text-3xl font-extrabold tracking-tight sm:text-4xl">Our Team</h2> -->
                    </div>
                    <div class="lg:col-span-2">
                        <ul role="list" class="space-y-12 sm:grid md:grid-cols-2 sm:gap-x-6 sm:gap-y-12 sm:space-y-0 lg:gap-x-8">
                        <li>
                            <div class="space-y-4">
                                <div class="aspect-w-3 aspect-h-2">
                                    <img class="object-cover shadow-lg rounded-lg" src="./assets/img/Olof_alt2.jpg" alt="">
                                </div>
                                <div class="text-lg leading-6 font-medium space-y-1">
                                    <h3>Olof Hallström</h3>
                                </div>
                                <div class="text-lg">
                                    <p class="text-gray-500" x-text="$t('olof_hallstrom')">Jag har en bakgrund som ingenjör i ekosystemsteknik med flera års erfarenhet som entreprenör där jag jobbade med att ge tillgång till ren energi till familjer i Afrika och Indien. Jag brinner för att odla hälsosam mat och min källa till inspiration kommer från att vara den förändring jag vill se i vårt samhälle. Jag är 39 år gammal och bor i Malmö med min fru Kim och dotter Maia.</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="space-y-4">
                                <div class="aspect-w-3 aspect-h-2">
                                    <img class="object-cover shadow-lg rounded-lg" src="./assets/img/fotoellenekmoreau.jpg" alt="">
                                </div>
                                <div class="text-lg leading-6 font-medium space-y-1">
                                    <h3>Caroline Karlsson</h3>
                                </div>
                                <div class="text-lg">
                                    <p class="text-gray-500" x-text="$t('caroline_karlsson')">
                                        Jag är en serieentreprenör som har arbetat med mat och hållbarhet i många år, bland annat på min tidigare restaurang Mineral i Malmö. Studerar för tillfället Regenerativ odling och Permakultur. En passion sedan många år är att odla både för mat och mångfald, och jag drivs av viljan att förändra de system som byggts upp på ohållbara grunder. Jag är 35 år och bor i Malmö med min hund Ester.
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="space-y-4">
                                <div class="aspect-w-3 aspect-h-2">
                                    <img class="object-cover shadow-lg rounded-lg" src="./assets/img/IMG_3888.jpg" alt="">
                                </div>
                                <div class="text-lg leading-6 font-medium space-y-1">
                                    <h3>Gustav Gullstrand</h3>
                                </div>
                                <div class="text-lg">
                                    <p class="text-gray-500" x-text="$t('gustav_gullstrand')">
                                        Har studerat miljövetenskap. Bor i Malmö, odlar på distans i norra Skåne. Förutom möjligheten för jordbruk att bli en lösning för många miljöproblem, är jag också fascinerad av den överlägsna livsmedelskvaliteten som bara kan hittas i icke-konventionella jordbrukssystem.</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="space-y-4">
                                <div class="aspect-w-3 aspect-h-2">
                                    <img class="object-cover bg-top shadow-lg rounded-lg" src="./assets/img/christina_berneheim.jpg" alt="">
                                </div>
                                <div class="text-lg leading-6 font-medium space-y-1">
                                    <h3>Christina Berneheim</h3>
                                </div>
                                <div class="text-lg">
                                    <p class="text-gray-500" x-text="$t('christina_berneheim')">
                                        Jag har en internationell och tvärvetenskaplig bakgrund inom naturskydd, landsbygdsutveckling och samhällsvetenskap. Min passion är att vara en del av och stödja initiativ för regenerativt jordbruk i syfte att förbättra jordbrukarnas lönsamhet, öka den sociala resiliensen och bidra till att bekämpa klimatförändringarna. Jag är 35 år gammal och bor på en gård utanför Lövestad med min partner och min hund.
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="space-y-4">
                                <div class="aspect-w-3 aspect-h-2">
                                    <img class="object-cover shadow-lg rounded-lg" src="./assets/img/Per_IMG_1643972838065.jpg" alt="">
                                </div>
                                <div class="text-lg leading-6 font-medium space-y-1">
                                    <h3>Per Hult</h3>
                                </div>
                                <div class="text-lg">
                                    <p class="text-gray-500" x-text="$t('per_hult')">
                                        Jag är maskiningenjör och regenerativ jordbrukare i norra Skåne. Jag föddes in i en jordbrukarfamilj och tidigt i mitt vuxna liv hittade jag vägen till regenerativt jordbruk. Först i teorin och senare i praktiken när jag och min fru köpte vår gård av mina farföräldrar. För mig finns det inget annat sätt att bedriva jordbruk än ett sätt som förnyar den mark vi har förmånen att ta hand om.
                                    </p>
                                </div>
                            </div>
                        </li>

                        <!-- More people... -->
                        </ul>
                    </div>
                    </div>
                </div>
            </div>
    </div>
</section>

<section class="pt-28 pb-20 md:pb-60" id="contact">
    <div class="container">
        <h4 class="uppercase font-bold" x-text="$t('contact')">Kontakt</h4>
        <p class="text-xl md:text-2xl xl:text-3xl xl:leading-10 font-light max-w-4xl mt-10 md:mt-20" x-html="$t('contact_desc')">
            Vill du komma i kontakt med oss? Maila oss gärna på  <a href="mailto:info@varva.co" class="underline font-bold">info@varva.co</a>
        </p>
        <p class="text-lg mt-10" x-html="$t('contact_question')">Frågor? Kolla in vår <a href="./q&a" class="underline">Q&A</a></p>
    </div>
</section>


<?php include_once("partials/site/footer.php"); ?>
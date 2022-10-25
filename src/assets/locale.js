

var locale;
console.log(window.localStorage._x_lang)
if(window.localStorage._x_lang){
    if(window.localStorage._x_lang == '"sv"' ){
        locale = "sv";
    }else if(window.localStorage._x_lang == '"en"'){
        locale = "en";
    }
}else{
    locale = 'sv';
}


// the translation data
// you can load/fetch these from files or keep them hardcoded.
let messages = {
	en: {
		welcome_to_varva: 'Welcome to <span class="italic">Varva.</span><br>The circular answer<br><span class="italic">to soil health</span>.',
		// can have variables
		mission: 'We’re on a mission to revitalise our soils, whilst putting great produce on people’s plates.<br> <span class="italic">It’s going to be delicious.</span>',
        vision: '<span class="italic">Varva</span> wants to inspire a new generation of farmers and consumers by making soil health our primary endeavour and letting healthy foods become natural by-products.',
        benefits: 'We bring the benefits of <span class="">small scale</span>,<br class="hidden md:block">regenerative, mixed farming<br class="hidden md:block">techniques to broadacre farmers.',
        our_products: 'OUR PRODUCTS',
        soil_health_as_a_service: 'Soil health as a Service',
        soil_health_as_a_service_desc: 'Thriving soil is essential for the long term sustainability of agriculture. In our first product we reconnect cropping farmers and animal producers to create a more integrated regenerative system that is mutually beneficial to all.<br><br>We bring grazing animals to cropping farms, where they help close the circle by regenerating land with their hooves and mouths - as nature intended. This reduces the dependence on external inputs and builds healthy soils.',
        find_out_more: 'Find out more',
        learn_more: 'Learn more',
        our_by_products: 'OUR (BY)PRODUCTS',
        our_by_product: 'Our (by) products',
        egg: 'Egg',
        eggs: 'Eggs',
        eggs_from: 'Eggs from pastured laying hens',
        eggs_from_desc: 'After the crops have been grazed, pastured hens add their benefits to the soil by reducing parasites and distributing manure. While our animals regenerate soil, they simultaneously generate nutrient dense food that we want to share with you.<br><br>As a start, we provide egg subscriptions from our hens on pasture. You subscribe to a hen for 30 eggs a month, and at the end of the season you can opt to receive your hen for a rich winter stew.',
        locally_produced_eggs: 'Locally produced eggs from our rotational<br>farming practices',
        locally_produced_eggs_desc: 'Locally produced, premium eggs. For soil health, the climate and your tastebuds',
        pickup_locations: 'Pick up locations in Malmö & Påarp',
        buy_now: 'Buy now',
        mutton_and_beef: 'Mutton & Beef coming soon',
        our_partners: 'OUR PARTNERS',
        krokstorp_gard: 'Martin Krokstorp at Krokstorps gård in Påarp outside Helsingborg, one of the most innovative row-crop farmers in Sweden has graciously accepted to act as pilot farm for our newly developed soil health subscription service. On Aug 27th 2021 we planted 4 football fields (3ha) of his land with a multispecies ley-mixture containing both grass, legumes and forbs. If all goes well we hope to expand the program to 10ha in 2022.',
        sigvard_mansgard: 'Sigvard Månsgård is run by Mina Kandi with family who raise and sell premium pastured mutton near Åstorp. Mina has agreed to lend us some ewes during this season so that we can regenerate the soil at Krokstorps Gård. After their soil regeneration service ends at the end of this growing season, they will be turned into excellent, nutrient dense produce and offered to our members.',
        miljo_matematik: 'MiljöMatematiks mission is to transform the food system and contribute to food becoming part of the solution instead of part of the problem. Miljömatematik supports us with deep knowledge in the field and a great network for future expansion.',
        mat_chokladstudion:'We are proud to announce our partnership with Mat- & Chokladstudion in Malmö. Mat- & Chokladstudion believes that food must do good to nature in order to do good to ourselves; a value that is at the core of our company as well.<br><br>Mat- & Chokladstudion becomes our first delivery point for egg subscriptions in Malmö. ',
        our_pilot:'OUR PILOT',
        our_pilot_html:'<li class="text-lg md:text-xl">Three hectares of diverse ley species</li><li class="text-lg md:text-xl">Grazed by sheep from Sigvard Månsgård</li><li class="text-lg md:text-xl">Pastured laying hens for additional fertility and pest control</li>',
        our_piot_img_caption: 'Before and after grazing with a compact flock of sheep',
        egg_subscription: 'Egg subscription',
        view_alternatives: 'View alternatives',
        our_pastured_egg_subscription: 'Our pastured egg subscriptions',
        our_pastured_egg_subscription_desc: 'One subscription gives you 30 premium eggs per month delivered to <br class="hidden md:block"><a  class="underline" href="https://www.matochchokladstudion.se/om-oss">Mat och Choklad Studion</a> in Malmö or to be picked up at Krokstorp Gård in Påarp. We are currently working to add more pick-up locations which will be communicated here. You can sign up to multiple subscriptions if you want.<br><br>Deliveries start from mid May and run until November (at least 6 months).<br><br>After the season is over, you will be able to purchase your hen for consumption. We will also offer single purchases whenever there are spare eggs, but you will only be guaranteed eggs if you are a subscriber. More info about that will come later.',
        egg_subscription_procsess: 'What is the process to become an egg subscriber?',
        egg_subscription_procsess_html: '<li>Sign up for an egg-subscription below</li><li>Select if you want to add a supportive membership</li><li>Select if you want to purchase your hen after the season is over (not alive)</li>',
        egg_subscription_after_subscribing: 'What happens after subscribing?',
        egg_subscription_after_subscribing_html: '<li>We will be posting continuously throughout spring on Instagram, Facebook and on this website about our progress with building our mobile infrastructure</li><li>Our 700 hens arrive, 16 weeks old, by mid April. After 3-4 weeks they start laying eggs</li><li>In early May you will receive an email with more details on the pick-up schedule and a link where you can select your preferred pick-up location.</li>',
        by_products: 'By-products',
        buy_our_by_products: 'Buy our by-products',
        memberships: 'Memberships',
        support_and_influence: 'Support and influence the direction of our movement',
        contact:'Contact',
        contact_desc:'Want to get in touch? Please contact us at <a href="mailto:info@varva.co" class="underline font-bold">info@varva.co</a>',
        contact_question:'Questions? Checkout our <a href="./q&a" class="underline">Q&A</a>',
        about_us:'About us',
        our_methods:'Our methods',
        natural_behaviour:'Natural behaviour<br>in natural habitat',
        natural_behaviour_desc:'Animals are nature’s way to cycle nutrients, build healthy soil, reduce pests, and manage the land - if we let them. By managing animals holistically and rotating them daily across the landscape, we can harness this amazing potential while creating productive and resilient systems. In 2022, you can purchase the by-products from this system, raised locally on the farm of our first client in Påarp outside Helsingborg.',
        holistic_management:'Holistic management<br>and regenerative practises',
        holistic_management_part_1:'We design all our systems to mimic how nature builds resilient ecosystems. The more interactions between different types of organisms, i.e. diversity, the more efficient and stable the system will be. This is what holistic management and regenerative agriculture is all about.',
        holistic_management_part_2:'The sheep that we lend from our Partner Mina Kandi, are kept in a compact flock and moved daily across the pasture using electric fencing to mimic their behaviour in the wild protecting themselves from predators. As competition for food is high and they litter their food with the excrements they are constantly moving. In this system the grass is heavily grazed, trampled and manured on during one day, and then allowed to fully recover before the sheep come back to the same spot. This is how all great plains in the world have functioned for thousands of years and it happens to be one of the most efficient ways to bring atmospheric CO2 into the soil as stable carbon.<br><br>However, nature is even more marvelous than this. Additionally, because of competition within the herd, individual animals cannot afford to pick and choose which plants to eat, they simply have to eat whatever they find before someone else eats it. This gives the animals a much broader diet, producing healthier animals and tastier meat while at the same time avoiding overgrazing popular plants and managing weeds that typically proliferate in traditional grazing systems.',
        holistic_management_part_3:'To increase the number of interactions we are integrating layer hens into this system. Our layer hens follow the sheep in a similar manner with 3-4 days delay so that they reach the sheep paddocks around the time flylarvea and other insects hatch in the sheep manure, thus providing an excellent source of animal protein. The hens are experts at distributing manure, managing pests, and adding fertility to the land, fertility that can be used in subsequent crops. In addition, the hens pick up many important vitamins and minerals not found in their conventional feed from grazing our multi species pasture which is why our eggs have such high quality and great taste.<br><br>Regenerating nature is and should be rewarding!',
        grazing_entrepreneurs: 'Grazing entrepreneurs',
        our_team: 'Our team',
        about_us_desc: 'We are a group of people interested in challenging the status quo and finding new ways to improve our immediate environment. We feel a sense of belonging and responsibility towards the soil from which we so utterly depend, and VARVA is our way of showing our gratitude by improving soil health in our region.',
        olof_hallstrom: 'I have a background in environmental engineering, and several years of experience as an entrepreneur providing access to clean energy to the bottom of the pyramid in Africa and India. Being passionate about growing healthy food, my source of inspiration comes from being the change I would like to see in our society. I am 39 years old and live in Malmö with my wife Kim and daughter Maia.',
        caroline_karlsson: 'I am a serial entrepreneur who has worked with food and sustainability for many years, including at my former restaurant Mineral in Malmö. Currently studying Regenerative cultivation and Permaculture. A passion for many years is to grow both for food and diversity, and I am driven by the desire to change the systems that have been built on unsustainable foundations. I am 35 years old and live in Malmö with my dog Ester',
        gustav_gullstrand: 'Studied Environmental science. Lives in Malmö, farming at a distance in northern Skåne. Apart from the possibility for farming to become a solution for many environmental problems, I´m also fascinated by the superior food quality that can only be found in non-conventional agricultural systems.',
        christina_berneheim: 'I have an international and interdisciplinary background in areas of nature conservation, rural development and social sciences. My passion is to be a part of and support initiatives on regenerative agriculture with the aim to improve farmers’ bottom line, increase social resilience, and help combat climate change. I am 35 years old and am about to start farming outside Lövestad together with my partner and our dog.',
        per_hult: 'I´m a mechanical engineer and regenerative farmer in northern Skåne. I was born into a family of farmers and early in my adult life I found my way to regenerative farming. First in theory and later in practice when me and my wife bought our farm from my grandparents. For me there is no other way to farm than a way that regenerates the land we have the privilage to take care of.',
        q_a_desc:' Having a hard time getting a grip of what we do, and why? <br>We hear you. Below are some common questions and answers.',
        q_a_wondering_something:'Wondering something not answered? Feel free to reach out!',
        become_a_member: 'Become a member <br class="">and start regenerating our soils!',
        this_spring: 'This spring we, among other things, are building:',
        building_list: '<li>2 egg mobiles for our 700 brown layer hens</li><li>A certified mobile egg packery</li><li>Fodder silos</li><li>Water waggons</li><li>A 140m2 greenhouse (in case of bird flu restrictions)</li>',
        investments: 'To manage these investments of 300,000SEK we ask you for a voluntary contribution of 200 SEK in the form of a VARVA supportive membership fee. A membership gives you early access and the right to vote for future (by)products as well as influence the direction of our movement towards a more inspiring agriculture. It also gives you early-bird access to future by-products including egg subscriptions as well as opportunities to visit us and learn about our operations at specific dates communicated later in the season.',
        error_404: 'Sorry, we couldn’t find that!',
        error_prompt: 'Try the menu or go <a href="/" class="underline">home</a>',
        meat_box: 'Meat box',
        from_our_grazing_sheep: 'From our grazing sheep in the fields of Påarp.',
        kokhona: 'Cooking hen',
        buy_season_hen: 'Buy one of the seasons hens',
        how_many_eggs_per_month: 'How many eggs do you want each month?',
        pack_each_month: 'packs each month',
	},




	sv: {
		welcome_to_varva: 'Välkommen till <span class="italic">Varva.</span><br>Det cirkulära svaret<br><span class="italic">på jordhälsa</span>.',
		mission: 'Vår mission är skapa levande jordar genom regenerativa metoder, samtidigt som vi erbjuder fantastiska råvaror. <br> <span class="italic">Det kommer att bli utsökt!</span>',
        vision: '<span class="italic">Varva</span> vill inspirera en ny generation jordbrukare och konsumenter genom att göra jordhälsa till vår främsta uppgift och låta hälsosamma livsmedel bli naturliga (bi)produkter.',
        benefits: 'Vi ”varvar” tekniker från <span class="">småskaligt,</span><br class="hidden md:block">regenerativt, blandat jordbruk<br class="hidden md:block"> med storskalig spannmålsodling.',
        our_products: 'VÅRA PRODUKTER',
        soil_health_as_a_service: 'Jordhälsa som tjänst',
        soil_health_as_a_service_desc: 'En levande jord är avgörande för jordbrukets långsiktiga hållbarhet. I vår första produkt återknyter vi växtodlare och djurproducenter för att skapa ett mer integrerat, regenerativt system som är till ömsesidig nytta för alla.<br><br>Genom att återföra djuren till odlingsmarken sluter vi cirkeln, minskar beroendet av externa insatsmedel och bygger upp friska jordar.',
        find_out_more: 'Läs mer',
        learn_more: 'Läs mer',
        our_by_products: 'Våra (Bi) Produkter',
        our_by_product: 'Våra (bi) produkter',
        egg: 'Ägg',
        eggs: 'Ägg',
        eggs_from: 'Ägg från grönbeteshöns',
        eggs_from_desc: 'Efter att fåren betat ett område fortsätter våra grönbeteshöns med arbetet där de bidrar med att minska parasiter, sprida fårspillningen, och tillföra ytterligare näring. Medan våra djur regenererar jorden genererar de samtidigt näringsrika livsmedel som vi vill dela med oss av till dig.<br><br>Som första (bi)produkt erbjuder vi äggabonnemang från våra värphöns på bete. Du prenumererar på en höna för 30 ägg i månaden, och i slutet av säsongen kan du välja att ta emot din höna för en mustig vintergryta.',
        locally_produced_eggs: 'Lokalt producerade ägg från våra grönbetshöns',
        locally_produced_eggs_desc: 'Locally produced eggs. For soil health, the climate and your tastebuds',
        pickup_locations: 'Utlämningsställen i Malmö & Påarp',
        buy_now: 'Köp här',
        mutton_and_beef: 'Får och nöt kommer snart',
        our_partners: 'VÅRA PARTNERS',
        krokstorp_gard: 'Martin Krokstorp på Krokstorps gård i Påarp utanför Helsingborg, en av de mest innovativa växtodlarna i Sverige, har välvilligt accepterat att fungera som pilotgård för vår nyutvecklade tjänst på jordhälsa. Den 27 augusti planterade vi 4 fotbollsplaner (3 ha) av hans mark med en mångfalds- vallblandning som innehåller över 10 olika gräs, baljväxter och örter. Om allt går bra hoppas vi kunna utöka programmet till 10 hektar nästa år.',
        sigvard_mansgard: 'Mina Kandi med familj föder upp naturbetesfår nära Åstorp. De förädlar själva på gården och säljer direkt till konsument. Mina kommer att låna ut några tackor till oss under den här säsongen så att vi kan regenerera jorden på Krokstorps Gård. När deras tjänstgöring som jordförnyare upphör i slutet av växtsäsongen kommer de att slaktas och förädlas till utmärkta, näringsrika produkter och erbjudas till våra medlemmar.',
        miljo_matematik: 'MiljöMatematiks mission är att transformera livsmedelssystemet och bidra till att maten blir en del av lösningen i stället för en del av problemet. Miljömatematik stöder oss med djup kunskap inom området och ett bra nätverk för framtida expansion.',
        mat_chokladstudion:'Vi är stolta över att kunna presentera vårt samarbete med Mat- & Chokladstudion i Malmö. Mat- & Chokladstudion anser att det är omöjligt att må bra av mat som är på bekostnad av något annat; en grundvärdering även i vårt företag.<br><br>Mat- & Chokladstudion blir vårt första leveransställe för äggabonnemang i Malmö.',
        our_pilot:'VÅRT PILOTPROJEKT',
        our_pilot_html:'<li class="text-lg md:text-xl">Tre hektar sådda med en mångfald av gräs, baljväxter och örter.</li><li class="text-lg md:text-xl">Betas av får från Sigvardsmans gård med roterande bete.</li><li class="text-lg md:text-xl">Grönbeteshöns för ytterligare näringsgiva och skadedjursbekämpning.</li>',
        our_piot_img_caption: 'Före och efter betesdrift med en kompakt fårflock.',
        egg_subscription: 'Äggabonnemang',
        view_alternatives: 'Se alternativ',
        our_pastured_egg_subscription: 'Våra grönbetesäggsabonnemang',
        our_pastured_egg_subscription_desc: 'Ett abonnemang ger dig 30 premiumägg per månad för upphämtning på <br class="hidden md:block"><a class="underline" href="https://www.matochchokladstudion.se/om-oss">Mat och Choklad Studion</a> i Malmö eller på Krokstorp Gård i Påarp. Vi arbetar just nu med att lägga till fler upphämtningsplatser som kommer att kommuniceras här. Du kan teckna flera abonnemang om du vill.<br><br>Leveranserna börjar från mitten av maj och pågår fram till november (minst 6 månader).<br><br>När säsongen är slut kommer du att kunna köpa din höna för konsumtion. Vi kommer också att erbjuda köp av enskilda flak från hemsidan när det finns överblivna ägg, men du kommer bara att vara garanterad ägg om du är prenumerant. Mer information om detta kommer senare.',
        egg_subscription_procsess: 'Hur går det till för att bli äggprenumerant?',
        egg_subscription_procsess_html: '<li>  Registrera dig för ett äggabonnemang nedan</li><li> Välj om du vill bli en stödjande medlem</li><li>Välj om du vill köpa din höna när säsongen är slut (inte levande).</li>',
        egg_subscription_after_subscribing: 'Vad händer sen?',
        egg_subscription_after_subscribing_html: '<li>Vi kommer att publicera kontinuerligt under våren på Instagram, Facebook och här om våra framsteg med att bygga upp vår mobila infrastruktur.</li><li>Våra 700 värphöns anländer 16 veckor gamla i mitten av april. Efter 3-4 veckor börjar de lägga ägg.</li><li>I början av maj får du ett e-postmeddelande med mer information om hämtningsschema och en länk där du kan välja önskad hämtningsplats.</li>',
        by_products: 'Biprodukter',
        buy_our_by_products: 'Köp våra biprodukter',
        memberships: 'Medlemskap',
        support_and_influence: 'Stöd och påverka riktningen för vår rörelse',
        contact:'Kontakt',
        contact_desc:'Vill du komma i kontakt med oss? Maila oss gärna på  <a href="mailto:info@varva.co" class="underline font-bold">info@varva.co</a>',
        contact_question:'Frågor? Kolla in vår <a href="./q&a" class="underline">Q&A</a>',
        about_us:'Om oss',
        our_methods:'Våra metoder',
        natural_behaviour:'Naturligt beteende<br>i naturliga miljöer',
        natural_behaviour_desc:'Djuren är naturens sätt att cykla näringsämnen, bygga bördig jord, minska skadedjur och förvalta landskapet, om vi låter dem göra det. Genom att hantera djuren på ett holistiskt sätt och att dagligen rotera dem genom landskapet kan vi utnyttja denna fantastiska potential och samtidigt skapa produktiva och motståndskraftiga system. I år kan du köpa (bi)produkterna från detta system, uppfödda på vår första kunds gård i Påarp utanför Helsingborg.',
        holistic_management:'Holistic Management<br> och regenerativt jordbruk',
        holistic_management_part_1:'Vi utformar alla våra system så att de efterliknar hur naturen bygger upp motståndskraftiga ekosystem. Ju fler interaktioner mellan olika typer av organismer (mångfald) desto effektivare och stabilare blir systemet. Detta är vad holistisk management och regenerativt jordbruk handlar om.',
        holistic_management_part_2:'Fåren som vi lånar från vår partner Mina Kandi hålls i en kompakt flock och förflyttas dagligen över betesmarken med hjälp av mobilt elstängsel för att efterlikna hur de skyddar sig från rovdjur i vilt tillstånd. Eftersom konkurrensen om födan är stor och de kissar och bajsar på sin mat måste de ständigt vara i rörelse. I detta system betas, trampas och gödslas gräset hårt under en dag och får sedan återhämta sig helt innan djuren återvänder till samma plats. Detta är hur alla stora slätter i världen har fungerat i tusentals år och det råkar vara ett av de mest effektiva sätten att återföra atmosfärisk koldioxid till marken som stabilt markkol.<br><br>Naturen är dock ännu mer fantastisk än så. På grund av konkurrens inom flocken har enskilda djur dessutom inte råd att välja vilka växter de vill äta, utan de måste helt enkelt äta vad de hittar innan någon annan gör det. Detta ger djuren en mycket bredare diet, vilket ger friskare djur och godare kött, samtidigt som man undviker överbetning av populära växter samt hanterar ”ogräs” som vanligtvis sprider sig i traditionella betessystem.',
        holistic_management_part_3:'För att öka antalet interaktioner ytterligare integrerar vi värphöns i detta system. Våra värphöns följer fåren på ett liknande sätt med 3-4 dagars fördröjning, så att de når fårhagen då fluglarver och andra insekter kläcks i fårspillningen. Detta är en utmärkt källa till animaliskt protein. Hönorna är experter på att sprida spillning, hantera skadedjur och ge marken näring som kan användas i efterföljande grödor. Dessutom får hönsen i sig många viktiga vitaminer och mineraler när de är ute på grönbete som inte finns i deras konventionella foder, vilket är en av anledningarna till att våra ägg har så hög kvalitet och god smak.<br><br>Att regenerera naturen är och bör vara givande!',
        grazing_entrepreneurs: 'Betes<span class="sm:hidden">-<br></span>entreprenörer',
        our_team: 'Vårt team',
        about_us_desc: 'Vi är en grupp människor intresserade av att utmana status quo och hitta nya sätt att förbättra vår närmiljö. Vi känner en känsla av tillhörighet och ansvar för den jord som vi är så beroende av, och VARVA är vårt sätt att visa vår tacksamhet genom att förbättra jordhälsan i vår region.',
        olof_hallstrom: 'Jag har en bakgrund som ingenjör i ekosystemsteknik med flera års erfarenhet som entreprenör där jag jobbade med att ge tillgång till ren energi till familjer i Afrika och Indien. Jag brinner för att odla hälsosam mat och min källa till inspiration kommer från att vara den förändring jag vill se i vårt samhälle. Jag är 39 år gammal och bor i Malmö med min fru Kim och dotter Maia.',
        caroline_karlsson: 'Jag är en serieentreprenör som har arbetat med mat och hållbarhet i många år, bland annat på min tidigare restaurang Mineral i Malmö. Studerar för tillfället Regenerativ odling och Permakultur. En passion sedan många år är att odla både för mat och mångfald, och jag drivs av viljan att förändra de system som byggts upp på ohållbara grunder. Jag är 35 år och bor i Malmö med min hund Ester.',
        gustav_gullstrand: 'Har studerat miljövetenskap. Bor i Malmö, odlar på distans i norra Skåne. Förutom möjligheten för jordbruk att bli en lösning för många miljöproblem, är jag också fascinerad av den överlägsna livsmedelskvaliteten som bara kan hittas i icke-konventionella jordbrukssystem.',
        christina_berneheim: 'Jag har en internationell och tvärvetenskaplig bakgrund inom naturskydd, landsbygdsutveckling och samhällsvetenskap. Min passion är att vara en del av och stödja initiativ för regenerativt jordbruk i syfte att förbättra jordbrukarnas lönsamhet, öka den sociala resiliensen och bidra till att bekämpa klimatförändringarna. Jag är 35 år gammal och bor på en gård utanför Lövestad med min partner och min hund.',
        per_hult: 'Jag är maskiningenjör och regenerativ jordbrukare i norra Skåne. Jag föddes in i en jordbrukarfamilj och tidigt i mitt vuxna liv hittade jag vägen till regenerativt jordbruk. Först i teorin och senare i praktiken när jag och min fru köpte vår gård av mina farföräldrar. För mig finns det inget annat sätt att bedriva jordbruk än ett sätt som förnyar den mark vi har förmånen att ta hand om.',
        q_a_desc:'Svårt att få grepp om vad vi gör, och varför?<br>Vi hör dig. Nedan finns några vanliga frågor och svar.',
        q_a_wondering_something:'Undrar du något som inte är med? Hör gärna av dig!',
        become_a_member: 'Bli medlem och börja återskapa våra jordar och ekosystem!',
        this_spring: 'I vår bygger vi bland annat:',
        building_list: '<li>2 mobila hönshus för våra 700 bruna värphöns.</li><li>Ett certifierat mobilt äggpackeri.</li><li>Fodersilos</li><li>Vattenvagnar</li><li>Ett växthus på 140 m2 (i händelse av restriktioner för fågelinfluensa).</li>',
        investments: 'För att hantera dessa investeringar på runt 300 000 kronor ber vi dig om ett frivilligt bidrag på 200 kronor i form av ett stödjande medlemskap. Ett medlemskap ger dig rätt att rösta om framtida biprodukter och påverka riktningen för vår rörelse mot ett mer inspirerande jordbruk. Det ger dig också tidig tillgång till framtida (bi)produkter inklusive ägg-abonnemang samt möjligheter att besöka oss och lära dig mer om vår verksamhet och mission vid särskilda datum som meddelas senare under säsongen.',
        error_404: 'Tyvärr, vi kunde inte hitta det där!',
        error_prompt: 'Försök med menyn, eller gå tillbaka till <a href="/" class="underline">start</a>',
        meat_box: 'Köttlåda',
        from_our_grazing_sheep: 'Från våra betande får på fälten i Påarp.',
        kokhona: 'Kokhöna',
        buy_season_hen: 'Köp en av säsongens hönor',
        how_many_eggs_per_month: 'Hur många ägg vill du ha varje månad?',
        pack_each_month: 'pack varje månad',
	},
};

// finally, pass them to AlpineI18n:
document.addEventListener('alpine-i18n:ready', function () {
    console.log(locale)
    window.AlpineI18n.create(locale, messages);
});
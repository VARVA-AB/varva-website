<?php include_once("partials/site/header.php"); ?>


<!-- Account for hero img top offset -->
<section class="pt-32 md:pt-44">
    <div class="container">
        <h2 class="heading-lg font-spectral font-light mt-6 md:mt-10">Q&A</h2>
        <p class="text-xl md:text-2xl xl:text-3xl xl:leading-10 font-light max-w-4xl mt-10 md:mt-20" x-html="$t('q_a_desc')">
            Svårt att få grepp om vad vi gör, och varför?<br>Vi hör dig. Nedan finns några vanliga frågor och svar.
        </p>

        <p class="text-lg mt-10" x-html="$t('q_a_wondering_something')">Undrar du något som inte är med? Hör gärna av dig!</p>
        <p class="text-lg underline mt-1"><a href="mailto:info@varva.co">info@varva.co</a></p>

    </div>
</section>


<section class="pb-20 md:pb-40 mt-32">
    <div class="container">
        <div class="w-full max-w-screen-xl">
            <div class="space-y-4 my-6">

                <div x-data="{ questionTopics: [
                    {
                        name: 'Our methods',
                        questions: [
                            {
                                q: 'If your main focus is soil health and food production is only secondary and a by-product of your main focus, is there not a risk that the produce will be of lower quality?',
                                a: 'Actually, no. The quality of any produce is directly connected to the health of the land where it grows or lives. So by focusing on soil health and ecosystem restoration we are actually simultaneously focusing on improving the quality of our produce.'
                            },
                            {
                                q: 'How do the farmers sow in the new crop after the animals have grazed to minimize soil disturbance (not use a plow)?',
                                a: 'There are several methods for doing this depending on what is important to the farmer. Some farmers choose to use herbicide after sowing to kill off the old crops, where other farmers prefer to mechanically disturb the upper parts of the soil to remove the old crop. In some parts of the world they use a roller crimper to flatten and kill-off the old crops without disturbing the soil or using herbicides, but our season in Sweden is too short for that method to be effective. We would like to test using our grazing animals as the tool for removing the old crops after sowing the new.'
                            },
                            {
                                q: 'Do your plants not compete with the cash-crops like wheat?',
                                a: 'We have planted a diverse mixture of grass, legumes and forbs on the land where we will keep our animals this season, and these plants will grow there for the entire season without any “cash-crops”. Our plants will feed the soil food web, power-charged by our animals during the entire season, and next year a cash-crop will be able to make use of the additional fertility and biology in the soil.'
                            },
                            {
                                q: 'If the farmer uses herbicides and pesticides, will our by-products not absorb these substances?',
                                a: 'The whole point with our soil-health service is to increase the resilience of the soil, thus enabling the farmer to reduce/eliminate his/her use of synthetics. Herbicides and pesticides are typically used early in the season on monocultures such as wheat to remove any unwanted crops or pests. We plant a diverse mixture of perennial plants that are much more resilient than a monoculture. Actually we welcome weeds into our pasture which are typically forbs with unique minerals and vitamins, as long as they are managed correctly so they do not proliferate uncontrollably. Pests are also much less common in diverse mixtures of plants. We thus need no synthetic inputs for our methods so about 1 year has passed since any synthetics have been applied to the land we manage.'
                            },
                            {
                                q: 'Why are you not organically certified or only work with certified farmers?',
                                a: 'There are several layers to this question. First of all, we prefer to develop a relationship of trust with our customers rather than paying a third party for that trust. We need to earn your trust by openly and continuously communicating about how we farm and what is important to us.<br><br>Secondly, our mission is to change the sector towards higher diversity and resiliency with reduced dependency on fossil fuel inputs. Working with conventional farmers is where we make the most impact towards that mission.'
                            },
                            {
                                q: ' Why do you not keep the animals over winter?',
                                a: 'This is as is often the case in agriculture, a complex question. For the herbivores that we lend from nearby ranchers, we do not have the last say on when to send them to slaughter. In the future, as we scale our business it might be interesting to keep some grazing animals over the winter to maximize the soil-health service we can provide to farmers as well as the improved animal welfare compared to an indoor feedlot, but with the limited resources available to us this year, it would be too difficult. Our layer hens could very well over-winter in our polytunnel so that we can continue to serve our subscribers their monthly eggs. We have not yet decided if we will do this or not. In the polytunnel they cannot perform their soil-regenerating service which is our main objective, however, they do produce excellent compost for our vegetable garden next year. Will keep you posted on our thinking around this.'
                            },
                            {
                                q: 'Do you feed the hens or is it enough with what they can forage?',
                                a: 'We feed our hens a full ration of organic layer feed and see the foraging as a complement to their diet that improves their health and egg quality. Some pastured egg producers lower or eliminate the feed ration, but this typically hurts the quality and quantity of eggs laid, and it would be difficult for us to guarantee our subscribers their full share. However, we are working with our farmers to source the grains, which are the bulk of their feed, locally from the farm where we provide our soil-health service and in doing so at least close the circle as much as we can. We hope to have this implemented already towards the end of this season. Stay tuned.'
                            },
                            {
                                q: 'What breeds of birds are you using?',
                                a: 'We would love to tell you that we only use heritage birds in our flocks. However, it is almost impossible to source heritage birds at the scale we want in Sweden. The Swedish agricultural system is very industrialized and even if we do not like it, we just have to be practical rather than be led purely by ideology. We use Bovans Brown this year, which is one of 4 different breeds available at any scale.'
                            },
                            {
                                q: 'How do you know when to move your animals and how much area they need to graze?',
                                a: 'We use a decision-making framework called Holistic Management for our grazing plan as well as for our business in general. This means we use our holistic context and a variety of inputs through-out the season to continuously update our grazing plan with the aim to reach our intended goals such as maximizing soil building, minimizing weed proliferation etc. As a simple rule of thumb we aim to design our paddocks so that in maximum 2 days the animals graze half of the available forage and trample half.'
                            },
                            {
                                q: 'Who is responsible for the daily care of the animals?',
                                a: 'VARVA is responsible and we are there every day.'
                            },
                        ]
                    },
                    {
                        name: 'Sales and deliveries',
                        questions: [
                            {
                                q: 'What happens if I cannot pick up my eggs on time?',
                                a: 'We will send an email and update our website prior to the start of deliveries with detailed information about delivery schedules etc. We are also working on adding more convenient pick-up locations to make it as easy as possible for our subscribers.'
                            },
                            {
                                q: 'What happens if VARVA fails to deliver any (by)product that has already been pre-paid?',
                                a: 'In case of small short-comings in, say failing to deliver the last 10 eggs at the end of the season, we will compensate with eggs the following season, or make arrangements for suitable compensation from other (by)products with similar or exceeding value. In the case of large short-comings however, like suffering bird flu and canceling all deliveries, there is a standard buy-back clause included in your purchase agreement.'
                            },
                        ]
                    }
                ]}">
                    <!--
                    {
                        q: 'question',
                        a: 'Red2'
                    },
                    -->
                    <template x-for="questionTopic in questionTopics">

                        <div class="mt-20">
                            <!-- Category name -->
                            <p x-text="questionTopic.name" class="text-18 lg:text-28 uppercase font-bold"></p>

                            <template x-for="question in questionTopic.questions">
                                    <div x-data={show:false} class="border-b border-blue text-14 lg:text-16">
                                        <a x-on:click.prevent="show=!show" class="cursor-pointer focus:outline-none">
                                            <div class="flex justify-between items-center py-4
                                                md:px-8 md:py-6">
                                                <p class="font-semibold"><span x-html="question.q"></span></p>
                                                <div class="w-10% text-right">
                                                    <svg class="w-5 h-5 md:w-7 md:h-7 transform transition-all duration-300 ease-in-out inline"
                                                        :class="{'rotate-180' : show === true }" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                                                </div>
                                            </div>
                                        </a>


                                        <div class="relative max-h-0 overflow-hidden transition-all duration-500"
                                        x-ref="collapse-{{loop.index}}"
                                        :style="show !== false ? 'max-height: ' + $refs['collapse-{{loop.index}}'].scrollHeight + 'px' : ''"
                                        >
                                            <div class="px-4 pb-4 md:px-8 md:pb-8">
                                            <span x-html="question.a"></span>
                                            </div>
                                        </div>
                                    </div>
                            </template>
                        </div>
                    </template>

                </div>

            </div>
        </div>
    </div>
</section>





<?php include_once("partials/site/footer.php"); ?>
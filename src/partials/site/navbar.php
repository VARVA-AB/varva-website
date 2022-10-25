

<div x-data="{ open: false, subMenu: '', toggle() { this.open = ! this.open } }">

<nav class="w-full py-4 fixed z-50"
    :class="open ? 'bg-blue' : 'bg-beige'">
    <div class="container">
        <div class="flex justify-between">
            <div class="w-28 font-bold transition duration-150 ease-in-out"
                :class="open ? 'text-white' : 'text-blue'">
                <a href="/">
                    <?php include "partials/svg/logo.php" ?>
                </a>
            </div>
            <div class="flex items-center">
                <a href="./products" class="text-xs md:text-sm text-blue uppercase py-1.5 px-5 border-2 rounded-full border-blue transition ease-in-out duration-100 hover:bg-blue  hover:text-white" x-text="$t('egg_subscription')">Egg subscription</a>
                <button class="ml-4 md:ml-8"
                    @click="toggle();">
                    <div class="w-6 h-6 relative rounded-full transform transition duration-150 ease-in-out hover:scale-125"
                        :class="open ? 'bg-beige scale-150' : 'bg-blue'">
                        <div x-show="open" class="absolute-center">
                            <svg class="w-2 h-2" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7.00072 5.586L11.9507 0.636002L13.3647 2.05L8.41472 7L13.3647 11.95L11.9507 13.364L7.00072 8.414L2.05072 13.364L0.636719 11.95L5.58672 7L0.636719 2.05L2.05072 0.636002L7.00072 5.586Z" fill="black"/>
                            </svg>
                        </div>
                    </div>
                </button>
            </div>
        </div>
    </div>
</nav>


<!-- MENU -->
<div class="w-full h-screen bg-blue fixed z-40"
    x-cloak
    x-init="$watch('open', opening => toggleClass(opening, $el))"
    x-show="open" x-transition.opacity.duration.300ms>

    <div class="relative w-full h-full">
        <div class="w-full h-full flex flex-col justify-center text-white font-spectral font-light pl-6 md:pl-28 mobile:pb-20 ">
            <div class="flex flex-col justify-center space-y-4 md:space-y-8">
                <a href="./products" class="text-3xl md:text-5xl" x-text="$t('by_products')">By-products</a>
                <a href="./memberships#memberships" class="text-3xl md:text-5xl" x-text="$t('memberships')">Memberships</a>
                <a href="./about-us#contact" class="text-3xl md:text-5xl" x-text="$t('contact')">Contact</a>
            </div>

            <div class="flex flex-col space-y-3 mt-16">
                <a href="./methods" class="text-2xl md:text-2xl" x-text="$t('our_methods')">Our methods</a>
                <a href="./about-us" class="text-2xl md:text-2xl" x-text="$t('about_us')">About us</a>
                <a href="./q&a" class="text-2xl md:text-2xl ">Q&A</a>
            </div>
        </div>
        <div class="absolute bottom-10 text-white pl-6 md:pl-28">
            <p>
                VARVA Regenerative AB
            </p>
            <p>
                <a href="mailto:info@varva.co">info@varva.co</a>
            </p>
        </div>
        <div class="absolute bottom-32 md:bottom-10 right-10 md:right-36 text-white">
            <template x-if="$locale() == 'sv'">
                <button x-on:click="lang = 'en', $locale('en'), toggle(), $dispatch('langchange');" class="underline">EN</button>
            </template>
            <template x-if="$locale() == 'en'">
                <button x-on:click="lang = 'sv', $locale('sv'), toggle(), $dispatch('langchange');" class="underline">SV</button>
            </template>
        </div>
    </div>
</div>

</div>

<script>
function toggleClass(opening, $el){
    if(opening){
        $el.classList.remove('collapse')
        $el.classList.add('expand')
    }else{
        $el.classList.remove('expand')
        $el.classList.add('collapse')
    }
}
</script>







<?php //include "partials/site/menu.php" ?>


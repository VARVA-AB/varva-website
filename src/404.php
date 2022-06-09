<?php include_once("partials/site/header.php"); ?>

<!-- Account for hero img top offset -->
<section class="pt-44 relative h-screen">
    <div class="container">
        <h4 class="uppercase font-bold">404</h4>
        <h2 class="heading-lg font-spectral font-light mt-10" x-html="$t('error_404')">Sorry, we couldn’t find that!</h2>
        <p class="text-xl md:text-2xl xl:text-3xl xl:leading-10 font-light max-w-4xl mt-6 md:mt-8" x-html="$t('error_prompt')">
            Try the menu or go <a href="/" class="underline">home</a>
        </p>
    </div>
    <div class="hidden md:block absolute bottom-0 right-0">
        <img src="./assets/img/hen_half.jpg" alt="">
    </div>
</section>
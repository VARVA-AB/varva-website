

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>VARVA - Det cirkulära svaret på jordhälsa.</title>
    <meta name="title" content="VARVA - Det cirkulära svaret på jordhälsa.">
    <meta name="description" content="Varva inspirerar en ny generation jordbrukare och konsumenter genom att göra jordhälsa till vår främsta uppgift.">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://varva.co/">
    <meta property="og:title" content="VARVA - Det cirkulära svaret på jordhälsa.">
    <meta property="og:description" content="Varva inspirerar en ny generation jordbrukare och konsumenter genom att göra jordhälsa till vår främsta uppgift.">
    <meta property="og:image" content="https://varva.co/assets/img/meta_img.jpg">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://varva.co/">
    <meta property="twitter:title" content="VARVA - Det cirkulära svaret på jordhälsa.">
    <meta property="twitter:description" content="Varva inspirerar en ny generation jordbrukare och konsumenter genom att göra jordhälsa till vår främsta uppgift.">
    <meta property="twitter:image" content="https://varva.co/assets/img/meta_img.jpg">


    <link rel="apple-touch-icon" sizes="180x180" href="./assets/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="./assets/favicon/site.webmanifest">
    <link rel="mask-icon" href="./assets/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter&family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&family=Spectral:ital,wght@0,300;0,400;1,300;1,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="./assets/compiled.css">


    <script type="module">
        import AlpineI18n from 'https://cdn.jsdelivr.net/npm/alpinejs-i18n@2.2.x/dist/module.esm.js'

        document.addEventListener('alpine:init', () => {
            window.Alpine.plugin(AlpineI18n)
        })
    </script>
    <!-- Alpine Plugins -->
    <script defer src="https://unpkg.com/@alpinejs/persist@3.x.x/dist/cdn.min.js"></script>
    <!-- Alpine Core -->
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <script src="./assets/locale.js"></script>

</head>


<div>
    <body>

    <!-- Messenger Chat Plugin Code -->
    <div id="fb-root"></div>

    <!-- Your Chat Plugin code -->
    <div id="fb-customer-chat" class="fb-customerchat"
        theme_color="#2867D3">
    </div>

    <script>
      var chatbox = document.getElementById('fb-customer-chat');
      chatbox.setAttribute("page_id", "109468174834110");
      chatbox.setAttribute("attribution", "biz_inbox");
    </script>

    <!-- Your SDK code -->
    <script>
      window.fbAsyncInit = function() {
        FB.init({
          xfbml            : true,
          version          : 'v14.0'
        });
      };

      (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/sv_SE/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script>

    <div x-data="{ lang: $persist('sv')  }">

        <?php include "partials/site/navbar.php" ?>

        <main>


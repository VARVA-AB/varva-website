<?php include_once("partials/site/header.php"); ?>


<!-- Account for hero img top offset -->
<section class="pt-32 md:pt-44 pb-20 md:pb-40" id="memberships">
    <div class="container">
        <h4 class="uppercase font-bold" x-text="$t('memberships')">Medlemskap</h4>
        <h2 class="heading-lg font-spectral font-light mt-6 md:mt-10" x-html="$t('become_a_member')">Bli medlem och börja återskapa våra jordar och ekosystem!</h2>
        <p class="text-xl md:text-2xl xl:text-3xl xl:leading-10 font-light max-w-4xl mt-10 md:mt-20" x-html="$t('this_spring')">
            I vår bygger vi bland annat:
        </p>
        <ul class="list-disc list-inside space-y-4 text-xl md:text-2xl xl:text-3xl xl:leading-10 font-light pl-4 mt-8" x-html="$t('building_list')">
            <li>2 mobila hönshus för våra 700 bruna värphöns.</li>
            <li>Ett certifierat mobilt äggpackeri.</li>
            <li>Fodersilos</li><li>Vattenvagnar</li>
            <li>Ett växthus på 140 m2 (i händelse av restriktioner för fågelinfluensa).</li>
        </ul>
        <p class="text-xl md:text-2xl font-light max-w-4xl mt-6 md:mt-8" x-html="$t('investments')">
            För att hantera dessa investeringar på runt 300 000 kronor ber vi dig om ett frivilligt bidrag på 200 kronor i form av ett stödjande medlemskap. Ett medlemskap ger dig rätt att rösta om framtida biprodukter och påverka riktningen för vår rörelse mot ett mer inspirerande jordbruk. Det ger dig också tidig tillgång till framtida (bi)produkter inklusive ägg-abonnemang samt möjligheter att besöka oss och lära dig mer om vår verksamhet och mission vid särskilda datum som meddelas senare under säsongen.
        </p>

    </div>
</section>


<section class="mt-10 mb-20 2xl:mb-40">
    <div class="container">
        <div class="max-w-4xl">
            <div id='product-component-6641438425145'></div>
        </div>
    </div>
</section>






<script type="text/javascript">
/*<![CDATA[*/
(function () {
var scriptURL = 'https://sdks.shopifycdn.com/buy-button/latest/buy-button-storefront.min.js';
if (window.ShopifyBuy) {
    if (window.ShopifyBuy.UI) {
    ShopifyBuyInit();
    } else {
    loadScript();
    }
} else {
    loadScript();
}
function loadScript() {
    var script = document.createElement('script');
    script.async = true;
    script.src = scriptURL;
    (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(script);
    script.onload = ShopifyBuyInit;
}
function ShopifyBuyInit() {
    var client = ShopifyBuy.buildClient({
    domain: 'varvaab.myshopify.com',
    storefrontAccessToken: '9a69bb40c14c0c87ba80fbf61aa29c68',
    });
    ShopifyBuy.UI.onReady(client).then(function (ui) {
        ui.createComponent('product', {
            id: '6641438425145',
            node: document.getElementById('product-component-6641438425145'),
            moneyFormat: '%7B%7Bamount_no_decimals%7D%7D%20kr',
            options: {
                "product": {
                    "styles": {
                    "product": {
                        "@media (min-width: 601px)": {
                        "max-width": "100%",
                        "margin-left": "0",
                        "margin-bottom": "50px"
                        },
                        "text-align": "left"
                    },
                    "title": {
                        "font-family": "Open Sans, sans-serif",
                        "font-weight": "normal",
                        "font-size": "26px"
                    },
                    "button": {
                        "font-family": "Open Sans, sans-serif",
                        "font-size": "16px",
                        "padding-top": "16px",
                        "padding-bottom": "16px"
                    },
                    "quantityInput": {
                        "font-size": "16px",
                        "padding-top": "16px",
                        "padding-bottom": "16px"
                    },
                    "price": {
                        "font-family": "Open Sans, sans-serif",
                        "font-size": "18px"
                    },
                    "compareAt": {
                        "font-family": "Open Sans, sans-serif",
                        "font-size": "15.299999999999999px"
                    },
                    "unitPrice": {
                        "font-family": "Open Sans, sans-serif",
                        "font-size": "15.299999999999999px"
                    },
                    "description": {
                        "font-family": "Open Sans, sans-serif"
                    }
                    },
                    "layout": "horizontal",
                    "contents": {
                    "img": true,
                    "imgWithCarousel": false,
                    "button": false,
                    "buttonWithQuantity": true,
                    "description": true
                    },
                    "width": "100%",
                    "text": {
                    "button": "Add to cart"
                    },
                    "googleFonts": [
                    "Open Sans"
                    ]
                },
                "productSet": {
                    "styles": {
                    "products": {
                        "@media (min-width: 601px)": {
                        "margin-left": "-20px"
                        }
                    }
                    }
                },
                "modalProduct": {
                    "contents": {
                    "img": false,
                    "imgWithCarousel": true,
                    "button": false,
                    "buttonWithQuantity": true
                    },
                    "styles": {
                    "product": {
                        "@media (min-width: 601px)": {
                        "max-width": "100%",
                        "margin-left": "0px",
                        "margin-bottom": "0px"
                        }
                    },
                    "button": {
                        "font-family": "Open Sans, sans-serif",
                        "font-size": "16px",
                        "padding-top": "16px",
                        "padding-bottom": "16px"
                    },
                    "quantityInput": {
                        "font-size": "16px",
                        "padding-top": "16px",
                        "padding-bottom": "16px"
                    },
                    "title": {
                        "font-family": "Helvetica Neue, sans-serif",
                        "font-weight": "bold",
                        "font-size": "26px",
                        "color": "#4c4c4c"
                    },
                    "price": {
                        "font-family": "Helvetica Neue, sans-serif",
                        "font-weight": "normal",
                        "font-size": "18px",
                        "color": "#4c4c4c"
                    },
                    "compareAt": {
                        "font-family": "Helvetica Neue, sans-serif",
                        "font-weight": "normal",
                        "font-size": "15.299999999999999px",
                        "color": "#4c4c4c"
                    },
                    "unitPrice": {
                        "font-family": "Helvetica Neue, sans-serif",
                        "font-weight": "normal",
                        "font-size": "15.299999999999999px",
                        "color": "#4c4c4c"
                    },
                    "description": {
                        "font-family": "Helvetica Neue, sans-serif",
                        "font-weight": "normal",
                        "font-size": "14px",
                        "color": "#4c4c4c"
                    }
                    },
                    "googleFonts": [
                    "Open Sans"
                    ],
                    "text": {
                    "button": "Add to cart"
                    }
                },
                "option": {},
                "cart": {
                    "styles": {
                    "button": {
                        "font-family": "Open Sans, sans-serif",
                        "font-size": "16px",
                        "padding-top": "16px",
                        "padding-bottom": "16px"
                    }
                    },
                    "text": {
                    "total": "Subtotal",
                    "button": "Checkout"
                    },
                    "popup": false,
                    "googleFonts": [
                    "Open Sans"
                    ]
                },
                "toggle": {
                    "styles": {
                    "toggle": {
                        "font-family": "Open Sans, sans-serif"
                    },
                    "count": {
                        "font-size": "16px"
                    }
                    },
                    "googleFonts": [
                    "Open Sans"
                    ]
                }
                },
            });
        });
    }
})();
/*]]>*/
</script>

<?php include_once("partials/site/footer.php"); ?>
<?php include_once("partials/site/header.php"); ?>


<!-- Account for hero img top offset -->
<section class="pt-32 md:pt-44 pb-20 md:pb-40" id="memberships">
    <div class="container">
        <h4 class="uppercase font-bold">Memberships</h4>
        <h2 class="heading-lg font-spectral font-light mt-6 md:mt-10">Become a member and start regenerating our soils!</h2>
        <p class="text-xl md:text-2xl xl:text-3xl xl:leading-10 font-light max-w-4xl mt-10 md:mt-20">
            This spring we, among other things, are building:

        </p>
        <ul class="list-disc list-inside space-y-4 text-xl md:text-2xl xl:text-3xl xl:leading-10 font-light pl-4 mt-8">
                <li>2 egg mobiles for our 700 brown layer hens</li>
                <li>A certified mobile egg packery</li>
                <li>Fodder silos</li>
                <li>Water waggons</li>
                <li>A 140m2 greenhouse (in case of bird flu restrictions)</li>
            </ul>
        <p class="text-xl md:text-2xl font-light max-w-4xl mt-6 md:mt-8">
            To manage these investments of 300,000SEK we ask you for a voluntary contribution of 200 SEK in the form of a lifetime membership fee. A membership gives you the right to vote for future by-products and influence the direction of our movement towards a more inspiring agriculture. It also gives you early-bird access to future by-products including egg subscriptions as well as opportunities to visit us and learn about our operations at specific dates communicated later in the season.
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
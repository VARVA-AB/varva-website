<?php include_once("partials/site/header.php"); ?>


<!-- Account for hero img top offset -->
<section class="pt-44">
    <div class="container">
        <h4 class="uppercase font-bold" x-text="$t('our_by_products')">Våra (Bi) Produkter</h4>
        <h2 class="heading-lg font-spectral font-light mt-10" x-html="$t('natural_behaviour')">Naturligt beteende<br>i naturliga miljöer</h2>
        <p class="text-xl md:text-2xl xl:text-3xl xl:leading-10 font-light max-w-4xl mt-6 md:mt-8" x-text="$t('natural_behaviour_desc')">
            Djuren är naturens sätt att cykla näringsämnen, bygga bördig jord, minska skadedjur och förvalta landskapet, om vi låter dem göra det. Genom att hantera djuren på ett holistiskt sätt och att dagligen rotera dem genom landskapet kan vi utnyttja denna fantastiska potential och samtidigt skapa produktiva och motståndskraftiga system. I år kan du köpa (bi)produkterna från detta system, uppfödda på vår första kunds gård i Påarp utanför Helsingborg.
        </p>
    </div>
</section>

<section class="xl:flex xl:flex-row-reverse 2xl:block relative mt-10 md:mt-20 mb-20">
    <img class="xl:w-50% 2xl:w-full bg-right 2xl:bg-center object-cover" src="./assets/img/hens_wide.jpg" alt="">
    <div class="xl:w-50% 2xl:w-auto 2xl:absolute-center-y left-20 bg-blue text-white p-8 pt-4 md:p-16">
        <div class="max-w-3xl">
            <svg class="mobile:-translate-y-14" xmlns="http://www.w3.org/2000/svg" width="64.68" height="79.606" viewBox="0 0 64.68 79.606">
                <path id="Path_6" data-name="Path 6" d="M64.68,44.728c0,19.263-14.479,34.878-32.34,34.878S0,63.991,0,44.728,14.479,0,32.34,0,64.68,25.466,64.68,44.728Z" fill="#d37a28" />
            </svg>

            <h4 class="uppercase font-bold mobile:-mt-4 md:mt-6" x-text="$t('our_pastured_egg_subscription')">Våra grönbetesäggsabonnemang</h4>
            <p class="max-w-xl mt-4" x-html="$t('our_pastured_egg_subscription_desc')">
                Ett abonnemang ger dig 30 premiumägg per månad för upphämtning på <br class="hidden md:block"><a class="underline" href="https://www.matochchokladstudion.se/om-oss">Mat och Choklad Studion</a> i Malmö eller på Krokstorp Gård i Påarp. Vi arbetar just nu med att lägga till fler upphämtningsplatser som kommer att kommuniceras här. Du kan teckna flera abonnemang om du vill.
                <br><br>
                Leveranserna börjar från mitten av maj och pågår fram till november (minst 6 månader).
                <br><br>
                När säsongen är slut kommer du att kunna köpa din höna för konsumtion. Vi kommer också att erbjuda köp av enskilda flak från hemsidan när det finns överblivna ägg, men du kommer bara att vara garanterad ägg om du är prenumerant. Mer information om detta kommer senare.
            </p>


            <p class="font-bold mt-8" x-text="$t('egg_subscription_procsess')">Hur går det till för att bli äggprenumerant?</p>
            <ul class="list-disc space-y-4 pl-4 mt-4" x-html="$t('egg_subscription_procsess_html')">
                <li>Registrera dig för ett äggabonnemang nedan</li>
                <li> Välj om du vill bli en stödjande medlem</li>
                <li>Välj om du vill köpa din höna när säsongen är slut (inte levande).</li>
                <!-- <li>Select if you are interested in purchasing any of the mutton from our soil regenerating sheep</li> -->
            </ul>

            <p class="font-bold mt-8" x-text="$t('egg_subscription_after_subscribing')">Vad händer sen?</p>
            <ul class="list-disc space-y-4 pl-4 mt-4" x-html="$t('egg_subscription_after_subscribing_html')">
                <li>Vi kommer att publicera kontinuerligt under våren på Instagram, Facebook och här om våra framsteg med att bygga upp vår mobila infrastruktur.</li>
                <li>Våra 700 värphöns anländer 16 veckor gamla i mitten av april. Efter 3-4 veckor börjar de lägga ägg.</li>
                <li>I början av maj får du ett e-postNotes med mer information om hämtningsschema och en länk där du kan välja önskad hämtningsplats.</li>
            </ul>
        </div>
    </div>
</section>

<section class="mt-10 md:mt-20 mb-20">
    <div class="container">
        <div class="relative max-w-screen-lg mx-auto">
            <div class="max-w-lg">
                <!-- Egg subscription ADD TO CART -->
                <div id='product-component-1643719330127'></div>
                <!-- MEMBERSHIP ADD TO CART -->
                <div>
                    <div class="flex flex-col sm:flex-row sm:items-center justify-between">
                        <div class="md:w-50%">
                            <p class="text-md">VARVA one-time supportive membership</p>
                            <p class="text-sm text-[#4a4a4a]">+200 kr</p>
                        </div>
                        <div class="mobile:ml-auto">
                            <div id='product-component-1645648635161'></div>
                        </div>
                    </div>
                    <div class="max-w-sm pt-2">
                        <p class="text-sm text-[#616161]">
                            Gives you early access and the right to vote for future (by)products as well as influence the direction of our movement towards a more inspiring agriculture.
                            <br>
                            Add more than one if you feel like it!
                        </p>
                    </div>
                </div>
                <div class="mt-5">
                    <div class="flex flex-col sm:flex-row sm:items-center justify-between">
                        <div class="md:w-50%">
                            <p class="text-md">Hen pre-order</p>
                            <p class="text-sm text-[#4a4a4a]">+0 kr (Payed later)</p>
                        </div>
                        <div class="mobile:ml-auto">
                            <div id='product-component-1645649807518'></div>
                        </div>
                    </div>
                    <div class="max-w-sm pt-2">
                        <p class="text-sm text-[#616161]">Non-binding. We'll send you an email with price and link to pay this autumn</p>
                    </div>
                </div>
            </div>
            <div class="xl:absolute-center-y right-0 mt-12 md:mt-0">
                <div class="w-72 h-72 flex flex-col items-center justify-center text-center bg-blue rounded-full text-white transform md:rotate-6 p-8">

                    <p class="text-4xl font-spectral italic">Varva</p>
                    <p class="lowercase" x-text="$t('memberships')">medlemskap</p>
                    <p class="mt-4" x-text="$t('support_and_influence')">
                        Stöd och påverka riktningen för vår rörelse
                    </p>
                    <a class="block underline mt-2" href="./memberships" x-text="$t('learn_more')">Läs mer</a>
                </div>

            </div>
        </div>
    </div>
</section>

<script type="text/javascript">
    /*<![CDATA[*/
    (function() {
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
            ShopifyBuy.UI.onReady(client).then(function(ui) {
                ui.createComponent('product', {
                    id: '6583560831033',
                    node: document.getElementById('product-component-1643719330127'),
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
                            "layout": "vertical",
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
                            "contents": {
                                "note": true,
                                "button": true
                            },
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
                                "button": "Checkout",
                                "noteDescription": "Notes",
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


<!-- MEMBERSHIP ADD TO CART -->
<script type="text/javascript">
    /*<![CDATA[*/
    (function() {
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
            ShopifyBuy.UI.onReady(client).then(function(ui) {
                ui.createComponent('product', {
                    id: '6641438425145',
                    node: document.getElementById('product-component-1645648635161'),
                    moneyFormat: '%7B%7Bamount_no_decimals%7D%7D%20kr',
                    options: {
                        "product": {
                            "styles": {
                                "product": {
                                    "@media (min-width: 601px)": {
                                        "max-width": "calc(25% - 20px)",
                                        "margin-left": "20px",
                                        "margin-bottom": "50px"
                                    }
                                },
                                "title": {
                                    "font-family": "Open Sans, sans-serif",
                                    "font-weight": "normal"
                                },
                                "button": {
                                    "font-family": "Open Sans, sans-serif",
                                    "font-size": "16px",
                                    "padding-top": "16px",
                                    "padding-bottom": "16px",
                                    "background-color": "#78b657!important",
                                    "color": "#ffffff",
                                    "border-left": "1px solid!important",
                                    "border-right": "1px solid!important",
                                    "border-top": "1px solid!important",
                                    "border-bottom": "1px solid!important",
                                    "border-radius": "3px!important",
                                    "border-color": "#78b657!important",

                                },
                                "quantityInput": {
                                    "font-size": "16px",
                                    "padding-top": "16px",
                                    "padding-bottom": "16px"
                                },
                                "price": {
                                    "font-family": "Open Sans, sans-serif"
                                },
                                "compareAt": {
                                    "font-family": "Open Sans, sans-serif"
                                },
                                "unitPrice": {
                                    "font-family": "Open Sans, sans-serif"
                                },
                                "description": {
                                    "font-family": "Open Sans, sans-serif"
                                }
                            },
                            "contents": {
                                "img": false,
                                "button": false,
                                "buttonWithQuantity": true,
                                "title": false,
                                "price": false
                            },
                            "text": {
                                "button": "Add"
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
                                    "padding-bottom": "16px",
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
                            "contents": {
                                "note": true,
                                "button": true
                            },
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
                                "button": "Checkout",
                                "noteDescription": "Notes",
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

<!-- HEN PRE-ORDER -->
<script type="text/javascript">
    /*<![CDATA[*/
    (function() {
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
            ShopifyBuy.UI.onReady(client).then(function(ui) {
                ui.createComponent('product', {
                    id: '6683074330681',
                    node: document.getElementById('product-component-1645649807518'),
                    moneyFormat: '%7B%7Bamount_no_decimals%7D%7D%20kr',
                    options: {
                        "product": {
                            "styles": {
                                "product": {
                                    "@media (min-width: 601px)": {
                                        "max-width": "calc(25% - 20px)",
                                        "margin-left": "20px",
                                        "margin-bottom": "50px"
                                    }
                                },
                                "title": {
                                    "font-family": "Open Sans, sans-serif",
                                    "font-weight": "normal"
                                },
                                "button": {
                                    "font-family": "Open Sans, sans-serif",
                                    "font-size": "16px",
                                    "padding-top": "16px",
                                    "padding-bottom": "16px",
                                    "background-color": "#78b657!important",
                                    "color": "#ffffff",
                                    "border-left": "1px solid!important",
                                    "border-right": "1px solid!important",
                                    "border-top": "1px solid!important",
                                    "border-bottom": "1px solid!important",
                                    "border-radius": "3px!important",
                                    "border-color": "#78b657!important"
                                },
                                "quantityInput": {
                                    "font-size": "16px",
                                    "padding-top": "16px",
                                    "padding-bottom": "16px"
                                },
                                "price": {
                                    "font-family": "Open Sans, sans-serif"
                                },
                                "compareAt": {
                                    "font-family": "Open Sans, sans-serif"
                                },
                                "unitPrice": {
                                    "font-family": "Open Sans, sans-serif"
                                },
                                "description": {
                                    "font-family": "Open Sans, sans-serif"
                                }
                            },
                            "contents": {
                                "img": false,
                                "button": false,
                                "buttonWithQuantity": true,
                                "title": false,
                                "price": false
                            },
                            "text": {
                                "button": "Add"
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
                            "contents": {
                                "note": true,
                                "button": true
                            },
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
                                "button": "Checkout",
                                "noteDescription": "Notes",
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
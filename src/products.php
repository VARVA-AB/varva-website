<?php include_once("partials/site/header.php"); ?>


<!-- Account for hero img top offset -->
<section class="pt-44">
    <div class="container">
        <h4 class="uppercase font-bold">Our (By)products</h4>
        <h2 class="heading-lg font-spectral font-light mt-10">Natural behaviour<br>in natural habitat</span></h2>
        <p class="text-xl md:text-2xl xl:text-3xl xl:leading-10 font-light max-w-4xl mt-6 md:mt-8">
            Animals are nature’s way to cycle nutrients, build healthy soil, reduce pests, and manage the land - if we let them. By managing animals holistically and rotating them daily across the landscape, we can harness this amazing potential while creating productive and resilient systems. In 2022, you can purchase the by-products from this system, raised locally on the farm of our first client in Påarp outside Helsingborg.
        </p>
    </div>
</section>

<section class="xl:flex xl:flex-row-reverse 2xl:block relative mt-10 md:mt-20 mb-20">
    <img class="xl:w-50% 2xl:w-full bg-right 2xl:bg-center object-cover" src="./assets/img/hen_full.jpg" alt="">
    <div class="xl:w-50% 2xl:w-auto 2xl:absolute-center-y left-20 bg-blue text-white p-8 pt-4 md:p-16">
        <div class="max-w-3xl">
            <svg class="mobile:-translate-y-14" xmlns="http://www.w3.org/2000/svg" width="64.68" height="79.606" viewBox="0 0 64.68 79.606">
                <path id="Path_6" data-name="Path 6" d="M64.68,44.728c0,19.263-14.479,34.878-32.34,34.878S0,63.991,0,44.728,14.479,0,32.34,0,64.68,25.466,64.68,44.728Z" fill="#d37a28"/>
            </svg>

            <h4 class="uppercase font-bold mobile:-mt-4 md:mt-6">Our pastured egg subscriptions</h4>
            <p class="max-w-xl mt-4">
                One subscription gives you 30 premium eggs per month delivered to Malmö or to be picked up at Krokstorp Gård in Påarp. We are currently working to add more pick-up locations which will be communicated here. You can sign up to multiple subscriptions if you want.
                <br><br>
                Deliveries start from mid May and run until November (at least 6 months).
                <br><br>
                After the season is over, you will be able to purchase your hen for consumption. We will also offer single purchases whenever there are spare eggs, but you will only be guaranteed eggs if you are a subscriber. More info about that will come later.
            </p>


            <p class="font-bold mt-8">What is the process to become an egg subscriber?</p>
            <ul class="list-disc space-y-4 pl-4 mt-4">
                <li>Sign up for an egg-subscription below</li>
                <li>Select if you want to become a supportive member</li>
                <li>Select if you want to purchase your hen after the season is over (not alive)</li>
                <li>Select if you are interested in purchasing any of the mutton from our soil regenerating sheep</li>
            </ul>

            <p class="font-bold mt-8">What happens after subscribing?</p>
            <ul class="list-disc space-y-4 pl-4 mt-4">
                <li>We will be posting continuously throughout spring on Instagram, Facebook and on this website about our progress with building our mobile infrastructure</li>
                <li>Our 700 hens arrive, 16 weeks old, by mid April. After 3-4 weeks they start laying eggs</li>
                <li>In early May you will receive an email with more details on the pick-up schedule and a link where you can select your preferred pick-up location.</li>
            </ul>
        </div>
    </div>
</section>

<section class="mt-10 md:mt-20 mb-20">
    <div class="container">
        <div class="relative">
            <div class="max-w-lg">
                <!-- Egg subscription ADD TO CART -->
                <div id='product-component-1643719330127'></div>
                <!-- MEMBERSHIP ADD TO CART -->
                <div>
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-md">VARVA Lifetime membership</p>
                            <p class="text-sm text-[#4a4a4a]">+200 kr</p>
                        </div>
                        <div id='product-component-1645648635161'></div>
                    </div>
                    <div class="max-w-sm pt-2">
                        <p class="text-sm text-[#616161]">Gives you a lifetime membership in VARVA, with the right to vote for future by-products and influence the direction of our movement towards a more inspiring agriculture.</p>
                    </div>
                </div>
                <div class="mt-5">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-md">Hen pre-order</p>
                            <p class="text-sm text-[#4a4a4a]">Payed later</p>
                        </div>
                        <div id='product-component-1645649807518'></div>
                    </div>
                    <div class="max-w-sm pt-2">
                        <p class="text-sm text-[#616161]">Non-binding. We'll send you an email with price and link to pay this autumn</p>
                    </div>
                </div>
            </div>
            <div class="xl:absolute-center-y right-0 mt-12 md:mt-0">
                <div class="w-72 h-72 flex flex-col items-center justify-center text-center bg-blue rounded-full text-white transform md:rotate-6 p-8">

                    <p class="text-4xl font-spectral italic">Varva</p>
                    <p>membership</p>
                    <p class="mt-4">
                        Support and influence the direction of our movement
                    </p>
                    <a class="block underline mt-2" href="./memberships">Learn more</a>
                </div>

            </div>
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


<!-- MEMBERSHIP ADD TO CART -->
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
        "background-color": "#fff!important",
        "color":"#4a4a4a",
        "border-left": "1px solid!important",
        "border-right": "1px solid!important",
        "border-top": "1px solid!important",
        "border-bottom": "1px solid!important",
        "border-radius": "3px!important",
        "border-color": "#d3dbe2!important"
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

<!-- HEN PRE-ORDER -->
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
        "background-color": "#fff!important",
        "color":"#4a4a4a",
        "border-left": "1px solid!important",
        "border-right": "1px solid!important",
        "border-top": "1px solid!important",
        "border-bottom": "1px solid!important",
        "border-radius": "3px!important",
        "border-color": "#d3dbe2!important"
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
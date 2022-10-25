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
        id: '6896436543545',
        node: document.getElementById('product-component-1664114696965'),
        moneyFormat: '%7B%7Bamount_no_decimals%7D%7D%20kr',
        options: {
  "product": {
    "styles": {
      "product": {
        "@media (min-width: 601px)": {
          "max-width": "calc(25% - 20px)",
          "margin-left": "20px",
          "margin-bottom": "50px"
        },
        "text-align": "left"
      },
      "title": {
        "font-family": "Open Sans, sans-serif",
        "font-weight": "normal"
      },
      "button": {
        "font-family": "Open Sans, sans-serif",
        "font-size": "20px",
        "font-weight": "600",
        "padding-top": "1.5rem",
        "padding-bottom": "1.5rem",
        "margin-bottom": "5px",
        "box-sizing": "border-box",
        "-moz-box-sizing": "border-box",
        "-webkit-box-sizing": "border-box",
        ":hover": {
          "background-color": "#245dbe"
        },
        "background-color": "#2867d3",
        ":focus": {
          "background-color": "#245dbe"
        },
        "border-radius": "40px",
        "padding-left": "48px",
        "padding-right": "48px"
      },
      "quantityInput": {
        "font-size": "18px",
        "padding-top": "17px",
        "padding-bottom": "17px"
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
      "title": false,
      "price": false
    },
    "text": {
      "button": "Köp nu"
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
        "font-size": "18px",
        "padding-top": "17px",
        "padding-bottom": "17px",
        ":hover": {
          "background-color": "#245dbe"
        },
        "background-color": "#2867d3",
        ":focus": {
          "background-color": "#245dbe"
        },
        "border-radius": "40px",
        "padding-left": "48px",
        "padding-right": "48px"
      },
      "quantityInput": {
        "font-size": "18px",
        "padding-top": "17px",
        "padding-bottom": "17px"
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
        "font-size": "18px",
        "padding-top": "17px",
        "padding-bottom": "17px",
        ":hover": {
          "background-color": "#245dbe"
        },
        "background-color": "#2867d3",
        ":focus": {
          "background-color": "#245dbe"
        },
        "border-radius": "40px"
      }
    },
    "text": {
      "total": "Subtotal",
      "button": "Checkout",
      "noteDescription": "Meddelande"
    },
    "contents": {
      "note": true
    },
    "popup": false,
    "googleFonts": [
      "Open Sans"
    ]
  },
  "toggle": {
    "styles": {
      "toggle": {
        "font-family": "Open Sans, sans-serif",
        "background-color": "#2867d3",
        ":hover": {
          "background-color": "#245dbe"
        },
        ":focus": {
          "background-color": "#245dbe"
        }
      },
      "count": {
        "font-size": "18px"
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
// Barcody https://lindell.me/JsBarcode/

JsBarcode("#barcode1", "bagietka 2ab z pradawnej odm. pszen. 250", {});

JsBarcode("#barcode2", "1234", {
    format: "pharmacode",
    lineColor: "#0aa",
    width: 4,
    height: 40,
    displayValue: false
});

JsBarcode(".barcode3").init();


// QRcody https://davidshimjs.github.io/qrcodejs/


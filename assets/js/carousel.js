// IIFE to protect the global scope
(() => {

    // opt-out of sloppy mode, and enforce variable declarations
    "use strict";

    // define a number variable
    let counter = 1;

    // set a timer to change photos
    setInterval(function () {

        // get the radio button associated to photos by name
        // check it => which makes linked image appear
        document.getElementById('item-' + counter).checked = true;

        // increment the counter to go to next photo
        counter++;

        // once the last photo is reached, go back to the first
        if (counter > 4) {
            counter = 1;
        }

        // set to 3 seconds
    }, 3000);

})();
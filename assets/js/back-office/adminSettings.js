(() => {

    // * ------------ opt-out of sloppy mode, and enforce variable declarations
    "use strict";

    /*--------------------------------------------
    *        disable paste in email field
    *---------------------------------------------*/
    window.onload = () => {
        editMail.onpaste = (event) => event.preventDefault();
    }

})();
(() => {
    /*--------------------------------------------
    *        disable paste in email field
    *---------------------------------------------*/
    window.onload = () => {
        editMail.onpaste = (event) => event.preventDefault();
    }

})();
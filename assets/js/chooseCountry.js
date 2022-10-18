(() => {
    "use strict";

    // * ------------ add id to main tag for styling purposes
    // document.querySelector("main").setAttribute("id", "addVictimMain");

    /*--------------------------------------------
    *              Country selector
    *---------------------------------------------*/
    // * ------------ DOM elements
    let countryOfOrigin = document.getElementById("countryOfOrigin");
    let countryOfCrime = document.getElementById("countryOfCrime");
    let newSelect = "";

    // * ------------ create select options from json file
    $.getJSON('./../json/countries.json', function (data) {

        for (var key in data) {
            newSelect += "<option value=" + data[key].code + ">" + data[key].name + "</option>";
            countryOfOrigin.innerHTML = newSelect;
            countryOfCrime.innerHTML = newSelect;
        }

    });

})();
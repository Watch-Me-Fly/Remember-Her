(
    () => {

        // * ------------ opt-out of sloppy mode, and enforce variable declarations
        "use strict";

        /**--------------------------------------------
         *                 Photo Modal
         *---------------------------------------------**/
        //* ------------ DOM elements
        // Get the modal
        const modal = document.getElementById("personalPicModal");

        // Get the image from article
        const img = document.getElementById("victimPhotoImg");

        // Get the image element from the modal 
        const modalImg = document.getElementById("modalImage");

        // get the caption element from the modal
        const captionText = document.getElementById("caption");

        // * ------------ add event to image click
        // when clicked on article image =>
        img.onclick = function () {

            // 1. modal is opened
            modal.style.display = "block";

            // 2. modal's image src is set to same src as article's image
            modalImg.src = this.src;

            // 3. article image's "alt" text used to display victim's name in caption 
            captionText.innerHTML = this.alt;

        }

        // * ------------ Add modal close button
        // Get the element that closes the modal
        var closeModal = document.getElementById("closeModal");

        // When the user clicks on (x) => 
        closeModal.onclick = function () {

            // close the modal
            modal.style.display = "none";

        }
    }

)();
(
    () => {
        /**--------------------------------------------
         *                 Photo Modal
         *---------------------------------------------**/
        // Get the modal
        const modal = document.getElementById("personalPicModal");

        // Get the image from article
        const img = document.getElementById("victimPhotoImg");

        // Get the image element from the modal 
        const modalImg = document.getElementById("modalImage");

        // insert image inside the modal 

        // get the caption element from the modal
        const captionText = document.getElementById("caption");

        // when clicked on article image =>
        img.onclick = function () {

            // 1. modal is opened
            modal.style.display = "block";

            // 2. modal's image src is set to same src as article's image
            modalImg.src = this.src;

            // 3. article image's "alt" text used to display victim's name in caption 
            captionText.innerHTML = this.alt;

        }

        // Get the element that closes the modal
        var closeModal = document.getElementById("closeModal");

        // When the user clicks on (x) => 
        closeModal.onclick = function () {

            // close the modal
            modal.style.display = "none";

        }
    }

)();
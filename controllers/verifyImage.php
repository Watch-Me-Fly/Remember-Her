<?php

    /**============================================
     *           Image upload verifications
     *=============================================**/

function verifyImage()
    {
        if ( isset($_FILES['photo']) && $_FILES['photo']['error'] == 0 )
        {
            //-- ---------- verify image size ----------- --//
            if ( $_FILES['photo']['size'] <= 200000 )
            {
            //-- ---------- verify image type ----------- --//
                // get file info
                $imageInfo = pathinfo($_FILES['photo']['name']);
                // select the extension from the info
                $extension = $imageInfo['extension'];
                // define which extensions are accepted
                $allowedExtensions = ['jpg', 'jpeg', 'png', 'gif'];
                // if file is of the accepted extension type
                if ( in_array($extension, $allowedExtensions) )
                {
                    //-- ------- rename the uploaded image -------- --//
                    $name = $_POST['firstName'] . '-' . $_POST['lastName'];

                    //-- ------- accept the uploaded file -------- --//
                    // & move it to the new location
                    move_uploaded_file($_FILES['photo']['tmp_name'],
                    $_SERVER['DOCUMENT_ROOT'] . './uploads/'. $name . "." . $extension
                    );

                    $photoName = $name . "." . $extension;
                    return $photoName;
                }
            }
        }
    }

?>
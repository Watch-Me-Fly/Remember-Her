<?php
    require_once('views/components/addVictimForm.php');

    /**============================================
     *           Add victim confirmation
     *=============================================**/

    /**============================================
     *           Image upload verifications
     *=============================================**/
        $victimPhoto = $_FILES['photo'];

     //-- ------- verify file is uploaded -------- --//
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
                    // accept the uploaded file, and move it to the new location
                    move_uploaded_file($_FILES['photo']['tmp_name'],
                    'uploads/'. basename($_FILES['photo']['name'])  
                    );
                    
                    // ANCHOR rename the uploaded file
                }
            }
        }
    // ANCHOR secure form ? is there a way ?

    // newsletter

?>
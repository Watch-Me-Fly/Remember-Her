<?php
class AddMurderController extends Murder
{
    private $postCreationDate;
    private $firstName;
    private $lastName;
    private $age;
    private $countryOfOrigin;
    private $photo;
    private $twitterTag;
    private $source1;
    private $source2;
    private $source3;
    private $source4;
    private $source5;
    private $isEnabled;
    private $reasonForCrime;
    private $crimeTool;
    private $countryOfCrime;
    private $dateOfDeath;
    private $killerRelationship;
    private $story;
    private $punishment;

    public function __construct(
        string $postCreationDate,
        string $firstName, 
        string $lastName, 
        int $age, 
        string $countryOfOrigin,
        array $photo,
        ?string $twitterTag, 
        string $source1,
        ?string $source2, 
        ?string $source3,
        ?string $source4, 
        ?string $source5, 
        int $isEnabled,
        string $reasonForCrime, 
        string $crimeTool, 
        string $countryOfCrime, 
        string $dateOfDeath, 
        string $killerRelationship, 
        string $story,
        string $punishment
    )
    {
        $this->postCreationDate = (string) $postCreationDate;
        $this->firstName = (string) $firstName;
        $this->lastName = (string) $lastName;
        $this->age = (int) $age;
        $this->countryOfOrigin = (string) $countryOfOrigin;
        $this->photo = (array) $photo;
        $this->twitterTag = (string) $twitterTag;
        $this->source1 = (string) $source1;
        $this->source2 = (string) $source2;
        $this->source3 = (string) $source3;
        $this->source4 = (string) $source4;
        $this->source5 = (string) $source5;
        $this->isEnabled = (int) $isEnabled;
        $this->reasonForCrime = (string) $reasonForCrime;
        $this->crimeTool = (string) $crimeTool;
        $this->countryOfCrime = (string) $countryOfCrime;
        $this->dateOfDeath = (int) $dateOfDeath;
        $this->killerRelationship = (string) $killerRelationship;
        $this->story = (string) $story;
        $this->punishment = (string) $punishment;
    }

    public function addArticle()
    {
        // verify uploaded image file
        $this->verifyImage();

        $this->setArticle(
            $this->postCreationDate,
            $this->firstName, 
            $this->lastName, 
            $this->age, 
            $this->countryOfOrigin,
            $this->photo,
            $this->twitterTag, 
            $this->source1,
            $this->source2, 
            $this->source3,
            $this->source4, 
            $this->source5,
            $this->isEnabled,
            $this->reasonForCrime, 
            $this->crimeTool, 
            $this->countryOfCrime, 
            $this->dateOfDeath, 
            $this->killerRelationship, 
            $this->story,
            $this->punishment
        );
    }
    /**============================================
     *           Image upload verifications
     *=============================================**/
    private function verifyImage()
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
                }
            }
        }
    }

}

?>
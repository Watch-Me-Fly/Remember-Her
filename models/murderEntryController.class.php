<?php
class AddMurderController extends Murder
{
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
    private $enabledBy;
    private $reasonForCrime;
    private $crimeTool;
    private $countryOfCrime;
    private $dateOfDeath;
    private $killerRelationship;
    private $story;
    private $punishment;

    public function __construct(
        string $firstName, 
        string $lastName, 
        int $age, 
        string $countryOfOrigin,
        string $photo,
        ?string $twitterTag, 
        string $source1,
        ?string $source2, 
        ?string $source3,
        ?string $source4,
        ?string $source5, 
        int $isEnabled,
        int $enabledBy,
        string $reasonForCrime, 
        string $crimeTool, 
        string $countryOfCrime, 
        string $dateOfDeath, 
        string $killerRelationship, 
        string $story,
        string $punishment
    )
    {
        $this->firstName = (string) $firstName;
        $this->lastName = (string) $lastName;
        $this->age = (int) $age;
        $this->countryOfOrigin = (string) $countryOfOrigin;
        $this->photo = (string) $photo;
        $this->twitterTag = (string) $twitterTag;
        $this->source1 = (string) $source1;
        $this->source2 = (string) $source2;
        $this->source3 = (string) $source3;
        $this->source4 = (string) $source4;
        $this->source5 = (string) $source5;
        $this->isEnabled = (int) $isEnabled;
        $this->enabledBy = (int) $enabledBy;
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
        $this->setArticle(
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
            $this->enabledBy,
            $this->reasonForCrime, 
            $this->crimeTool, 
            $this->countryOfCrime, 
            $this->dateOfDeath,
            $this->killerRelationship, 
            $this->story,
            $this->punishment
        );
    }

    
}

?>
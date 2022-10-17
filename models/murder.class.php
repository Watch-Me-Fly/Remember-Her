<?php

require_once('victim.class.php');

class Murder extends Victim
{
    protected $reasonForCrime;
    protected $crimeTool;
    protected $countryOfCrime;
    protected $dateOfDeath;
    protected $killerRelationship;
    protected $story;

    public function __construct(
        int $id,
        string $postCreationDate,
        string $firstName, 
        string $lastName, 
        int $age, 
        string $countryOfOrigin, 
        string $photo,
        string $twitterTag, 
        string $source1,
        string $source2, 
        string $source3, 
        string $source4, 
        string $source5, 
        bool $isEnabled = false,
        string $reasonForCrime, 
        string $crimeTool, 
        string $countryOfCrime, 
        int $dateOfDeath, 
        string $killerRelationship, 
        string $story
    )
    {
        parent::__construct(...func_get_args());
        $this->reasonForCrime = (string) $reasonForCrime;
        $this->crimeTool = (string) $crimeTool;
        $this->countryOfCrime = (string) $countryOfCrime;
        $this->dateOfDeath = (int) $dateOfDeath;
        $this->killerRelationship = (string) $killerRelationship;
        $this->story = (string) $story;
    }

    // -- -------------- getters
    public function getReasonForCrime():string
    {
        return $this->reasonForCrime;
    }
    public function getCrimeTool():string
    {
        return $this->crimeTool;
    }
    public function getCountryOfCrime():string
    {
        return $this->countryOfCrime;
    }
    public function getDateOfDeath():int
    {
        return $this->dateOfDeath;
    }
    public function getKillerRelationship():string
    {
        return $this->killerRelationship;
    }
    public function getStory():string
    {
        return $this->story;
    }
    // -- -------------- setters
    public function setReasonForCrime(string $reasonForCrime)
    {
        $this->reasonForCrime = $reasonForCrime;
    }
    public function setCrimeTool(string $crimeTool)
    {
        $this->crimeTool = $crimeTool;
    }
    public function setCountryOfCrime(string $countryOfCrime)
    {
        $this->countryOfCrime = $countryOfCrime;
    }
    public function setDateOfDeath(int $dateOfDeath)
    {
        $this->dateOfDeath = $dateOfDeath;
    }
    public function setKillerRelationship(string $killerRelationship)
    {
        $this->killerRelationship = $killerRelationship;
    }
    public function setStory(string $story)
    {
        $this->story = $story;
    }
    // -- -------------- Article
    // ANCHOR : do i really need it ?
    public function getArticle()
    {
        return json_encode([
            'id' => $this->id,
            'postCreationDate' => $this->postCreationDate,
            'firstName' => $this->firstName,
            'lastName' => $this->lastName,
            'age' => $this->age,
            'countryOfOrigin' => $this->countryOfOrigin, 
            'photo' => $this->photo, 
            'reasonForCrime' => $this->reasonForCrime,
            'crimeTool' => $this->crimeTool, 
            'countryOfCrime' => $this->countryOfCrime, 
            'dateOfDeath' => $this->dateOfDeath, 
            'killerRelationship' => $this->killerRelationship, 
            'story' => $this->story,
            'twitterTag' => $this->twitterTag, 
            'source1' => $this->source1,
            'source2' => $this->source2, 
            'source3' => $this->source3, 
            'source4' => $this->source4, 
            'source5' => $this->source5, 
            'isEnabled' => $this->isEnabled,
        ]);
    }

}


?>
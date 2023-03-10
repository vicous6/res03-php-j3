<?php class User {

    // private attribute
    private int $id;
    private string $firstName;
    private string $lastName;
    private string $email;

    // public constructor
    public function __construct(string $firstName,string $lastName,string $email)
    {
        $this->id = -1;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
    }

    // public getter
    public function getFirstName() : string
    {
        return $this->firstName;
    }
     public function getLastName() : string
    {
        return $this->lastName;
    }
     public function getEmail() : string
    {
        return $this->email;
    }

    // public setter
    public function SetFirstName(string $firstName) : void
    {
        $this->firstName= $firstName;
    }
     public function setLastName(string $lastName) : void
    {
        $this->lastName = $lastName;
    }
       public function setEmail(string $email) : void
    {
        $this->email = $email;
    }



    // public method
    
    public function speak() : void
    {
        echo ($this->$firstName ." ". $this->$lastName);
  
    }
}

?>
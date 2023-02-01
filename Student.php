<?php class Student {

    // private attribute
    private int $id;
    private string $firstName;
    private string $lastName;
    private string $email;
     private array $grades;

    // public constructor
    public function __construct(string $firstName,string $lastName,string $email)
    {
        $this->id = -1;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->grades = [];
        
    }

    // public getter
     public function getId() : int
    {
        return $this->id;
    }
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
      public function getGrades() : array
    {
        return $this->grades;
    }

    // public setter
      public function setId(int $id) : void
    {
        $this->id=$id;
    }
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
      public function setGrades(array $grades) : void
    {
        $this->grades= $grades;
    }



    // public method
    
    public function getFullName() : string
    {
        return ($this->firstName ." ". $this->lastName);
  
    }
      public function addGrade(int $value) : array
    {
        array_push($this->grades , $value);
        
        // autre facon de faire (+simple)
        // $this->$grades[]=$value;
        return ($this->grades);
  
    }
        public function removeGrade(int $value) : array
    {
        
        $first = array_search($value, $this->grades);
        if($first !== false){
             unset($this->grades[$first]);
         
         
        
        }
         return ($this->grades);
  
    }
        public function getAverage() : ? float
    {
        
        $average = 0;
        
        foreach( $grades as $grade){
            
            $average = $average + $grade;
        }
        
        $count = count($grades);
        
        if($count !== 0){
            
            return $average/$count;
        }else{
            
            return null;
        }
        
  
    }
}

?>
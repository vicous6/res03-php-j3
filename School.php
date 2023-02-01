<?php class School {

    // private attribute
    private int $id;
    private User $teacher;
      private array $students;

    // public constructor
    public function __construct( User $teacher)
    {
        $this->id = -1;
        $this->teacher = $teacher;
        $this->students = [];
    }

    // public getter
    public function getId() : int
    {
        return $this->id;
    }

    // public setter
    public function setId(int $id) : void
    {
        $this->id = $id;
    }

    // public method
    public function addStudent(Student $student) : array
    {
        
            $this->students[]=$student;
       
            return $this->students;
       
        
       
    }
    
     public function removeStudent(Student $student) : array
    {
        
             
        foreach($this->students as $key=>$stud){
            
            if($stud->getId() === $student->getId()){
                
                unset($this->students[$key]);
                
            }
            
        }
         
     return $this->students;
        
   
}
    
}

?>
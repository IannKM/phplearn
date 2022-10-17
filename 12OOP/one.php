<link rel="stylesheet" href="styles.css">
<?php 

// Class and instance
class Person {
    public $fname;
    public $sname;
    private $age;
    
}

$p = new Person(); #creating an instance 
$p-> fname = 'ian';
$p-> sname = 'php';


/* echo '<pre>';
print_r ($p);
echo '</pre>'.'<br>';

echo $p-> fname.'<br>'; #to print individual */

$p2 = new Person(); 
$p2-> fname = 'Lance';
$p2-> sname = 'Lott';



         /* using constructors */

class GuyX {
public $f_name;
public $s_name;
private $p_ID;
            
public function __construct($f_name, $s_name)
{
                      
    $this->f_name = $f_name;   #saving the info in the property of the class
    $this->s_name = $s_name;

} 
        #how to use the private modifier
public function setID($p_ID)
{           
        $this->p_ID = $p_ID;
}          

public function getID()
{
    return $this->p_ID;
}


 }

$g = new GuyX("Bart", "Simpson");
$g-> setID(22);
echo '<pre>';
print_r ($g);
echo '</pre>'.'<br>';
echo $g->getID(). '<br>';

    
/* STATIC Properties and Methods */

    #go to the next page to ONE_CONTINUATION view about static Properties and Methods

// Create Person class in Person.php





// Create instance of person




// Using setter and getter






?>
<br>
<br>
<a href='../11FS/index.php'><button class="btn0">BACK</button></a>
<a href="../12OOP/one_continuation.php"><button class="btn1">NEXT</button></a>
<br></br>
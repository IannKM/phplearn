<?php
class Fellow {
    public string $fname; # you can specify type
    public string $sname;
    protected int $age;
    public static int $counter = 0;

    public function setAge($age)
    {
        $this->age = $age;
    }
    public function getAge()
    {
       return $this->age; 
    }

    /* STATIC Properties and Methods */
    public function __construct($fname, $sname)
    {
        $this->fname = $fname;
        $this->sname = $sname;
        self::$counter++;
    }

    public static function getCounter()
    {
        return self::$counter;
    }



}




?>
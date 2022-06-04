<?php
 abstract class books
{
    public $desc="";
    public $getDescription;
    public $bookid;
    public function  bookId($desc)
    {
        return $desc;


    }
}


 abstract class boharatdecorator
{
  
     public abstract $getDescription;

}
abstract class computers
{
    public function computers($desc)
    {
        $desc = "computers";


    }
     public function bookId($bookid)
    {
       return 005;

    }

}
abstract class self_help
{
    public function self_help($desc)
    {
        $desc = "self_help";


    }
     public function bookId($bookid)
    {
       return 158;

    }

}
abstract class religion
{
    public function religion($desc)
    {
        $desc = "religion";


    }
     public function bookId($bookid)
    {
       return 200;

    }

}
?>
<?php
 abstract class books
{
    public $desc;
    public $getDescription;
    
    public function  bookId()
    {


    }
}

 abstract class boharatdecorator($books)
{
    public string getDescription();

}
public class computers:books
{
    public computers()
    {
        desc="computers";


    }
    public override double bookId()
    {
       return 005;

    }

}
?>
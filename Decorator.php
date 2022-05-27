<?php
public abstract class books
{
    public string desc="";
    public string getDescription ();
    {
        return desc;


    }
    public abstract bookId();
}

public abstract class boharatdecorator:books
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
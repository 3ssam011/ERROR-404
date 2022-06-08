<?php
include_once"ContextPayFess.php";
include_once"BookFess.php";
include_once"BusFess.php";
include_once"UniformFess.php";
include_once"YearFess.php";
include_once"PayCash.php";
include_once"PayFawry.php";
include_once"PayVisa.php";
$Cost="";
$total=0;
if(isset($_POST['payf']))
{
    $Cost=$_POST['payf'];
    $x=new Fess(new YearFess());
    $result=$x->PayMyFess();
    $total+=$result;
    echo "Your Year Fess is: ";
    echo $result; 
    echo ("<br>");
}

if(isset($_POST['Bus']))
{
    $Cost=$_POST['Bus'];
    $x=new Fess(new BusFees());
    $result=$x->PayMyFess();
    $total+=$result;
    echo "Your Bus Fess is: ";
    echo $result;
    echo ("<br>");
}

if(isset($_POST['Uniform']))
{
    $Cost=$_POST['Uniform'];
    $x=new Fess(new UniformFess());
    $result=$x->PayMyFess();
    $total+=$result;
    echo "Your Uniform Fess is: ";
    echo $result;
    echo ("<br>");
}

if(isset($_POST['Book']))
{
    $Cost=$_POST['Book'];
    $x=new Fess(new BookFess());
    $result=$x->PayMyFess();
    $total+=$result;
    echo "Your Book Fess is: ";
    echo $result;
    echo ("<br>");
}

echo "Your Total is: ";
echo $total;
echo ("<br>");
$u=$_POST['Pay'];
if($u=="PayC")
{
    $x=new PayCash();
    $x->IPay();
    echo ("<br>");
}

if($u=="PayV")
{
    $x=new PAyVisa();
    $x->IPay();
    echo ("<br>");
}

if($u=="PayF")
{
    $x=new PayFawry();
    $x->IPay();
    echo ("<br>");
}

?>
function PutForm()
{
var form = document.createElement("form");   
var p=document.createElement("lapel");   
var x = document.createElement("INPUT");           
form.method = "POST";
form.action = "Hire.php";   
//lapel1
p.innerText="Enter Name";        
p.setAttribute("id", "text");              
form.appendChild(p);
//1   
x.setAttribute("id", "text");   
x.setAttribute("type", "text");             
x.setAttribute("placeholder", "Enter Fullname");  
x.setAttribute("required","true");
x.setAttribute("name","FullName");
form.appendChild(x);
//br
var br=document.createElement("br");
form.appendChild(br);
//label2
var pp=document.createElement("lapel"); 
pp.innerText="Enter Email";
pp.setAttribute("id","text");
form.appendChild(pp);
//2         
x = document.createElement("INPUT");
x.setAttribute("id", "text");                                
x.setAttribute("type", "email");            
x.setAttribute("placeholder", "Enter Email"); 
x.setAttribute("required","true");
x.setAttribute("name","Email");              
form.appendChild(x);
//br2
br=document.createElement("br");
form.appendChild(br);   

//date
x = document.createElement("INPUT");
x.setAttribute("id", "text");                                
x.setAttribute("type", "date");                   
x.setAttribute("name","Date");  
form.appendChild(x); 
//br3
br=document.createElement("br");
form.appendChild(br);   
//radio
var type="T";
for(let i=0;i<3;i++)
{
      
    x = document.createElement("INPUT");
    x.setAttribute("id", "text");                                
    x.setAttribute("type", "radio");                 
    x.setAttribute("required","true");    
    x.setAttribute("value",type);
    x.setAttribute("name","type"); 
    if(i==0)
    {
        pp=document.createElement("lapel"); 
        pp.innerText="Teacher";
        pp.setAttribute("id","text");
        form.appendChild(pp);
        type="S";
    }
    if(i==1)
    {
        pp=document.createElement("lapel"); 
        pp.innerText="Student";
        pp.setAttribute("id","text");
        form.appendChild(pp);
        type="HR"
    }
    if(i==2)
    {
        
        pp=document.createElement("lapel"); 
        pp.innerText="HR";
        pp.setAttribute("id","text");
        form.appendChild(pp);
    }
    form.appendChild(x);
}
//br3
br=document.createElement("br");
form.appendChild(br);  
//form.submit();
var submit=document.createElement("button"); 
submit.innerText="Submit";
submit.setAttribute("id", "jsb");
form.appendChild(submit);
document.body.appendChild(form);
  

}  
              

function hideOptionPhoto(){ 
var element = document.getElementById("Photo1");
element.parentNode.removeChild(Photo);   
};



//FIRE
function FireForm()
{
var form = document.createElement("form");   
var p=document.createElement("lapel");   
var x = document.createElement("INPUT");           
form.method = "POST";
form.action = "Fire.php";   
//lapel1
p.innerText="Enter Name";        
p.setAttribute("id", "text");              
form.appendChild(p);
//1   
x.setAttribute("id", "text");   
x.setAttribute("type", "text");             
x.setAttribute("placeholder", "Enter Fullname");  
x.setAttribute("required","true");
x.setAttribute("name","FullName");
form.appendChild(x);
//br
var br=document.createElement("br");
form.appendChild(br);
//label2
var pp=document.createElement("lapel"); 
pp.innerText="Enter ID";
pp.setAttribute("id","text");
form.appendChild(pp);
//2         
x = document.createElement("INPUT");
x.setAttribute("id", "id");                                
x.setAttribute("type", "text");            
x.setAttribute("placeholder", "Enter ID"); 
x.setAttribute("required","true");
x.setAttribute("name","ID");              
form.appendChild(x);
//br2
br=document.createElement("br");
form.appendChild(br);   

//br3
br=document.createElement("br");
form.appendChild(br);   
//radio
var type="T";
for(let i=0;i<3;i++)
{
      
    x = document.createElement("INPUT");
    x.setAttribute("id", "text");                                
    x.setAttribute("type", "radio");                 
    x.setAttribute("required","true");    
    x.setAttribute("value",type);
    x.setAttribute("name","type"); 
    if(i==0)
    {
        pp=document.createElement("lapel"); 
        pp.innerText="Teacher";
        pp.setAttribute("id","text");
        form.appendChild(pp);
        type="S";
    }
    if(i==1)
    {
        pp=document.createElement("lapel"); 
        pp.innerText="Student";
        pp.setAttribute("id","text");
        form.appendChild(pp);
        type="HR"
    }
    if(i==2)
    {
        
        pp=document.createElement("lapel"); 
        pp.innerText="HR";
        pp.setAttribute("id","text");
        form.appendChild(pp);
    }
    form.appendChild(x);
}
//br3
br=document.createElement("br");
form.appendChild(br);  
//form.submit();
var submit=document.createElement("button"); 
submit.innerText="Submit";
submit.setAttribute("id", "jsb");
form.appendChild(submit);
document.body.appendChild(form);
  

}  
              

function hideOptionPhoto(){ 
var element = document.getElementById("Photo1");
element.parentNode.removeChild(Photo);   
};

//Update
function UpdateForm()
{
var form = document.createElement("form");   
var p=document.createElement("lapel");   
var x = document.createElement("INPUT");           
form.method = "POST";
form.action = "Hire.php";   
//lapel1
p.innerText="Enter Name";        
p.setAttribute("id", "text");              
form.appendChild(p);
//1   
x.setAttribute("id", "text");   
x.setAttribute("type", "text");             
x.setAttribute("placeholder", "Enter Fullname");  
x.setAttribute("required","true");
x.setAttribute("name","FullName");
form.appendChild(x);
//br
var br=document.createElement("br");
form.appendChild(br);
//label2
var pp=document.createElement("lapel"); 
pp.innerText="Enter Email";
pp.setAttribute("id","text");
form.appendChild(pp);
//2         
x = document.createElement("INPUT");
x.setAttribute("id", "text");                                
x.setAttribute("type", "email");            
x.setAttribute("placeholder", "Enter Email"); 
x.setAttribute("required","true");
x.setAttribute("name","Email");              
form.appendChild(x);
//br2
br=document.createElement("br");
form.appendChild(br);   

//date
x = document.createElement("INPUT");
x.setAttribute("id", "text");                                
x.setAttribute("type", "date");                   
x.setAttribute("name","Date");  
form.appendChild(x); 
//br3
br=document.createElement("br");
form.appendChild(br);   
//radio
var type="T";
for(let i=0;i<3;i++)
{
      
    x = document.createElement("INPUT");
    x.setAttribute("id", "text");                                
    x.setAttribute("type", "radio");                 
    x.setAttribute("required","true");    
    x.setAttribute("value",type);
    x.setAttribute("name","type"); 
    if(i==0)
    {
        pp=document.createElement("lapel"); 
        pp.innerText="Teacher";
        pp.setAttribute("id","text");
        form.appendChild(pp);
        type="S";
    }
    if(i==1)
    {
        pp=document.createElement("lapel"); 
        pp.innerText="Student";
        pp.setAttribute("id","text");
        form.appendChild(pp);
        type="HR"
    }
    if(i==2)
    {
        
        pp=document.createElement("lapel"); 
        pp.innerText="HR";
        pp.setAttribute("id","text");
        form.appendChild(pp);
    }
    form.appendChild(x);
}
//br3
br=document.createElement("br");
form.appendChild(br);  
//form.submit();
var submit=document.createElement("button"); 
submit.innerText="Submit";
submit.setAttribute("id", "jsb");
form.appendChild(submit);
document.body.appendChild(form);
  

}  
              

function hideOptionPhoto(){ 
var element = document.getElementById("Photo1");
element.parentNode.removeChild(Photo);   
};
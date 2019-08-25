function lmail()
{
var mail = document.forms["login"]["email"].value;
if (mail == "")
    {
  alert("E-mail cannot be blank!");
        return false;
    }
}
function mail()
{
var mail = document.forms["myform"]["email"].value;
if (mail == "")
    {
  alert("E-mail cannot be blank!");
        return false;
    }
}

function box()
{
if(!document.myform.tnca.checked)
    {
        alert("You must accept terms and conditions!");
        return false;
    }
    
}
function age()
{
   if(document.forms["myform"]["age"].value<18)
   {
       alert("You are under age!");
       return false;
   } 
}
function pwd()
{
    var pass=document.myform.password.value;
    var repass=document.myform.repassword.value;
   
    if(pass!=repass)
    {
        alert("Password mismatched!");
        return false;
    }
    mail();
    box();
    age();
    
}
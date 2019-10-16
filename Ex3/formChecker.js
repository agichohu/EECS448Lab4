function validate()
{
    email = document.getElementById("username").value;
    password = document.getElementById("password").value;
   ValidateEmail();
   validatePassword();
   validateShipping();
}

function ValidateEmail()
{
  if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email))
  {
    return (true)
  }
    alert("You have entered an invalid email address!")
    return (false)
}

function validatePassword()
{
  if(password.length>0)
  {
    return true;
  }
  else {
    alert("enter valid password")
    return false;

  }
}


function validateShipping()
{
  var chx = document.getElementsByTagName('shipping').value;
   for (var i=0; i<chx.length; i++) {
     // If you have more than one radio group, also check the name attribute
     // for the one you want as in && chx[i].name == 'choose'
     // Return true from the function on first match of a checked item
     if (chx[i].type == 'radio' && chx[i].checked) {
       return true;
     }
   }
   // End of the loop, return false
   alert("please select shipping option");
   return false;

}

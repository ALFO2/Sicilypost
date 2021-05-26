
var cont=0;

function validazione(inputtxt,tipo)
{
 switch (tipo) {
 case "password":
         var passw=  /^[A-Za-z]\w{7,20}$/;

         if(inputtxt.value == "") {
         return 0;
         }
         if(!inputtxt.value.match(/[0-9]/g) && !inputtxt.value.match(/[^-\w]/g) && !inputtxt.value.match(/[a-z]/g) && inputtxt.value.length < 8 )
         {
          return 0;
         }
         else {
           return 1;
         }

 break;

 case "nome":
        if(inputtxt.value == "") {
        return 0;
        }

        //minimum password length validation
        if(inputtxt.value.length < 2) {
        return 0;
        }
        if(inputtxt.value.match(/[1-9]/g))
        {
         return 0;
        }
        else
        {
        return 1;
        }
 break;

 case "email":
       if(inputtxt.value == "") {
       return 0;
       }
       else {
         return 1;
       }
 break;

 case "cf":
 if(inputtxt.value.length < 17) {
  return 1;
 }
 return 0;
 break;

 default:

 }
}

function solonumeri(var1,var2)
{
  if(!document.getElementById(var1).value.match(/[1-9]/g))
  {
     document.getElementById(var1).value=null;
  }
  if (document.getElementById(var1).value.length>var2) {
     document.getElementById(var1).value=null ;
  }

}

function see(var1,var2){
  if (document.getElementById(var1).checked == true) {
    document.getElementById(var2).type="text";
  }else
  {
    document.getElementById(var2).type="password";
  }

}

function uguale(var1,var2,var3)
{
  if (document.getElementById(var1).value==document.getElementById(var2).value) {
  document.getElementById(var3).innerHTML = 'Uguale'  ;
  }

}


function va_login(var1,var2,var3,var4) {
       var x =validazione(document.getElementById(var1),var3);
           if (x==1)
          {
              document.getElementById(var2).innerHTML = null  ;
              return 1;
          }
       else
          {
              document.getElementById(var2).innerHTML = "Non vadido"  ;
              return 0;
            }

}

function Ajax(var2) {
   var xmlhttp = new XMLHttpRequest();
    xmlhttp.open("GET",var2, true);
    xmlhttp.send();
  }

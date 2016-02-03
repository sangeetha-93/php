<script type="text/javascript">
<!--
      function fun()
      {
      
         if( document.myForm.n1.value == "" )
         {
            alert( "Please provide first name!" );
            document.myForm.n1.focus() ;
            return false;
         }
         
         if( document.myForm.n2.value == "" )
         {
            alert( "Please provide last name!" );
            document.myForm.n2.focus() ;
            return false;
         }

         if( document.myForm.n3.value == "" )
         {
            alert( "Please provide user name!" );
            document.myForm.n3.focus() ;
            return false;
         }

         if( document.myForm.n4.value == "" )
         {
            alert( "Please provide password!!" );
            document.myForm.n4.focus() ;
            return false;
         }

         if( document.myForm.n5.value == "" )
         {
            alert( "Please provide contact number" );
            document.myForm.n5.focus() ;
            return false;
         }

         if( document.myForm.n7.value == "" )
         {
            alert( "Please provide password!!" );
            document.myForm.n7.focus() ;
            return false;
         }
          if(document.getElementById("d1").value == "")
          {
            alert("Please select value"); // prompt user
            document.getElementById("d1").focus(); //set focus back to control
            return false;
          }
 

           if(document.getElementById("d2").value == "")
          {
            alert("Please select value"); // prompt user
            document.getElementById("d2").focus(); //set focus back to control
            return false;
          }


           if(document.getElementById("d3").value == "")
          {
            alert("Please select value"); // prompt user
            document.getElementById("d3").focus(); //set focus back to control
            return false;
          }



      }
      function ValidateEmail(inputText)  
{  
var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;  
if(inputText.value.match(mailformat))  
{  
document.myForm.n6.focus();  
alert("You have entered an valid email address!");  
return true;  
}  
else  
{  
alert("You have entered an invalid email address!");  
document.myForm.n6.focus();  
return false;  
}  
} 

     
   //-->
</script>

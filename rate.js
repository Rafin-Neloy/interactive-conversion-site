
function isValid(){
      var T=document.forms["Formm"]["t"].value;
      var box1=document.forms["Formm"]["field1"].value;
      var box2=document.forms["Formm"]["field2"].value;
      
      
      if(t===""||field1===""||field2==="")
      {
        document.getElementById("terror").innerHTML="Field Empty";
        document.getElementById("fiedld1error").innerHTML="Field Empty";
        document.getElementById("field2error").innerHTML="Field Empty";
        return false;
      }
    }
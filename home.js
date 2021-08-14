function validate(type) {
    if(document.form1.textinput.value=='')
    {
    return false;
    }else{

 if($_POST['option']=='1'){
       var res=100*document.form1.textinput.value;
        var unit=" Centimeter";
            
        }
        else if($_POST['option']=='2'){
            var res=0.305*document.form1.textinput.value;
        var unit=" meter";
        }
       
document.getElementById("result").innerHTML;
return false;
    }
}
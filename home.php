<!DOCTYPE html>
<html>
<head>
<title>home</title>
<script  src="home.js"></script>

</head>
<body>


<form name='home.php' action='' method='post' 
    onSubmit='return validate();'>
    
    <fieldset>
    
    <label for="home">home [Home]</label>
    <br><br>
    <label>1.<a href='home.php '>Home </a></label>
    <label>2.<a href='rate.php'>Conversion Rate </a></label>
    <label>3.<a href='history.php'>History </a></label>
    <br><br>

    <label for="conveter">Conveter:</label>
     <br>
        <select name="conveter" id="conveter">
        <option value="select">Select</option>
        <option value="1">Centimeter</option>
        <option value="2">Meter</option>
    
    </select>
    <br><br>
    <label for="value">Value:</label>
    <input type="text" id="value" name="textinput" >
    <br><br>
    <label for="result">Result:</label>
    <input type="text" id="result" name="result">
    </fieldset>
    <br><br>
    <input type=button value='submit'onClick=validate('conveter');
       
    </form>
    <br>




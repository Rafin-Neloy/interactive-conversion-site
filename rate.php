<!DOCTYPE html>
<html>
<head>
<title>rate</title>
<script src="rate.js"></script>
</head>
<body>


<form action="<?php htmlspecialchars($_SERVER['PHP_SELF'])?>" method="POST" onsubmit="return isValid()" name="Formmm" id="XForm">
    <fieldset>
    
    <label for="rate">rate [Conversion Rate]</label>
    
    <br><br>
    <label>1.<a href='home.php '>Home </a></label>
    <label>2.<a href='rate.php'>Conversion Rate </a></label>
    <label>3.<a href='history.php'>History </a></label>
    
   
    <br>
   

    <label for="value">Convetersion Rate:</label>
    <br>
    <input type="text" id="t" name="r"> <input type="text" id="field1" name="field1"><input type="text" id="field2" name="field2">
    <br>
    
    </fieldset>
    <br>
    <button type="submit">Submit</button>
      
    </form>

    <br>

</body>
</html>
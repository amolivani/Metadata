<?php
if (isset($_POST['group'])) { // "group" is mutual name of radio buttons
  switch ($_POST['group']) {
    case 'Sec':  // Value of first radio button
      header('Location: readme_index.php');
      break;
    case 'SSec':  // Value of second radio button
      header('Location: dict_index.php');
      break;
    default:
      break;
  }    
}
?>
 
<body style="background-color:white;"> 
<style>
  * {
    box-sizing: border-box;
  }

  body {
    font-family: Arial, Helvetica, sans-serif;
  }

/* Style the header */
  .header {
    background-color: #D96B27;
    padding: 15px;
    text-align: center;
    font-size: 15px;
    color: #fff;
    display: block;

  }

  .clearfix {
    overflow: auto;
}

  .img {
  background-color: #fff; 
  width: 50px;
  height: 50px;
  display: block;
  vertical-align: middle;
  }

</style>
<body style="background-color: white; background-repeat: no-repeat; height: 100%; background-position: center;
  background-size: cover;
  position: relative; "> 
  <div class="header">  
<div class="clearfix">
<img class="img" src="logo.png" style="display: inline; float: left;"> <h1 align="center" style="color: #fff; display: inline;">Exporting Metadata</h1>
</div>
</div>
<br> 
<br> <!-- just indenting -->
<br>
<br>
<br>
<br>
<br>
<br>
<br>



<td align="center" class="bgcolor_03">
  <form action="" method="POST" >
    <input type="radio" class="import" name="group" id="group" value="Sec" style="font-size:75%;color:#D96B27" />
    ReadMe
    <input type="radio" class="import" name="group" id="group2" value="SSec" style="font-size:75%;color:#D96B27" />
    Data Dictionary
    <br />
    <br>
    <input type="submit" value="Done" style="font-size:75%;color:#D96B27; border: 1px solid #D96B27" />
  </form>
 <style>
 form {
  text-align: center;
  vertical-align: middle;
  font-family: tahoma; 
  color: black;
  font-size:150%;

}
</style>
</td>
</body>

<?php
//get data from form  
$name = $_REQUEST['name'];
$number= $_REQUEST['number'];

if(empty($name || empty ($number)){
   echo "Please Fill All Data";
}
else {
       mail("chakribabu.feb@gmail.com","GRAND TEST MESSAGE","From: $name <$number>");
    echo "<script type="text/javascript">alert('YOUR MESSAGE SEND SUCCESSFULLY');window.history.log(-1);</script>"
}
?>

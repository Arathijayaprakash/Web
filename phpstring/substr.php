<html>
<head>
<title>String Function:Substr():2</title>
</head>
<body>
<b>If the length is non-negative, the returned string will start at the start'th position in string AND count the length.</b><br/><br/>
<?php
echo "Substring with positive length:".
substr("abcdef",2,2)."<br/>";
?>
</br>
<?php
echo "Substring with positive length:".
substr("NBPATELPILUDARA",2,4)."<br/>";
 ?></br>
 <?php
echo "Substring with positive length:".
substr("abcdef",-3,2)."<br/>";
 ?>
</br>
<?php
echo "Substring with positive length:".
substr("NBPATELPILUDARA",-5,2)."<br/>";
?>
</br>
<b>If the length is negative, the returned string will start at the start'th position in string AND count the length.</b><br/><br/>
<?php
echo "Substring with negative length:".
substr("abcdef",2,-2)."<br/>";
?>
</br>
<?php
echo "Substring with negative length:".
substr("NBPATELPILUDARA",2,-4).
"<br/>";
?>
</br>
<?php
echo "Substring with negative length:".
substr("abcdef",-2,-2)."<br/>";
?>
</br>
<?php
echo"Substring with negative length:".
substr("NBPATELPILUDARA",-2,-4).
"<br/>";
?>
</br>
<?php
echo "Substring with negative length:".
substr("NBPATELPILUDARA",-4,-2).
"<br/>";?></br>
<?php
echo "Substring with negative length:".
substr("NBPATELPILUDARA",-5,-4).
"<br/>";
?></br>   
 </body>
</html>

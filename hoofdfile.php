<?php
include('includefile.php');

@$regex = $_POST['regex'];
$string = $_POST['input'];

  switch ($regex) {
    case 'alfabetisch':
      echo alfabetisch($string);
      break;
    case 'numeric':
      echo numeric($string);
      break;
    case 'postcode':
      echo postcode($string);
      break;
    case 'mobiel':
      echo mobiel($string);
      break;
    case 'gender':
      echo gender($string);
      break;
    case 'email':
      echo email($string);
      break;
    case 'adres':
      echo adres($string);
      break;
    default:
      echo "Error! Wilt u het alstublieft nog een keer invullen!";
      break;
  }
//laat zien of de functie werken of niet
?>
<!DOCTYPE html>
<html>
  	<head>
		<meta charset="utf-8" />
		<title>regex</title>
  	</head>
    	<body align="center">
        <br /><br />
         <a href="regex.php"><input type="submit" name="terug" value="terug"></input></a>
    </body>
</html>

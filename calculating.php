<!DOCTYPE html>
<html>
  	<head>
		<meta charset="utf-8" />
		<title>calculator</title>
		<style>
      body{
        background-color: #0099cc;
        font-size: 35px;
      }
     </style>
  	</head>
    <body>
      <div align="center">
        <?php
        @$first = $_POST['first'];
        @$second = $_POST['second'];
        @$method = $_POST['operator'];

        include('includefile.php');


          //als je de methode kiest, wordt die functie aangeroepen
            switch ($method) {
              case 'add':
                echo optellen($first, $second);
                break;
              case 'subtract':
                echo subtract($first, $second);
                break;
              case 'multiply':
                echo multiply($first, $second);
                break;
              case 'divide':
                echo divide($first, $second);
                break;
              case 'opposite':
                echo opposite($first, $second);
                break;
              default:
                echo "false";
                break;
            }

        ?>
        <br />
        <br />
      <a href="calculator.php"><button type="submit" name="terug"  value="terug">terug</button> </a>
    </div>
  </body>
</html>

<!DOCTYPE html>
<html>
  	<head>
		<meta charset="utf-8" />
		<title>regex</title>
  	</head>
  	<body align="center">
      <h1>Check mijn reguliere expressies!</h1>
        <form method="post" action="hoofdfile.php">
          <input type="text" name="input">
          <br /><br />
            <input type="radio" name="regex" value="alfabetisch">Alfabetisch<br>
            <input type="radio" name="regex" value="numeric">Numeriek<br>
            <input type="radio" name="regex" value="postcode">Postcode<br>
            <input type="radio" name="regex" value="mobiel">Mobiel nummer*<br>
            <input type="radio" name="regex" value="gender">Geslacht<br>
            <input type="radio" name="regex" value="email">Email<br>
            <input type="radio" name="regex" value="adres">Adres<br>
          <br /><br />
      <button type="submit" name="submit"  value="submit">submit</button>
      </form>
    <p>* = Zonder streepjes, bijv. 0647247402!</p>
  </body>
</html>


<!--mobiel nummer met streepjes en verschillende adressen zoals met spatie!-->

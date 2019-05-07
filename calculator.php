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
      <div align="center" >
        <h1>calculator</h1>
          <form method="post" action="calculating.php">
            <h3>First Value:<br/>
              <input type="text"  name="first">
            </h3>
            <h3>Second Value:<br/>
              <input type="text"  name="second">
            </h3>
            <select name= "operator">
              <option font-size="30px"></option>
              <option value="add" ><p>add</p></option>
              <option value="subtract"><p>substract</p></option>
              <option value="multiply"><p>multiply</p></option>
              <option value="divide"><p>divide</p></option>
              <option value="opposite"><p>mulitply by -1</p></option><br />
            </select>
            <button type="submit" name="submit"  value="submit">calculate</button>
          </form>
        </div>
  	</body>
</html>

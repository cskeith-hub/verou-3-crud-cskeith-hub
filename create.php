<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add pokèmon</title>
</head>
<body>
<form action="index.php?action=create" method="post">
  <label for="name">Name:</label><br>
  <input type="text" id="name" name="pokeName" value=""><br>

  <label for="type">Type:</label><br>
  <input type="text" id="type" name="type" value=""><br>

  <label for="hp">Hp:</label><br>
  <input type="text" id="hp" name="hp" value=""><br>

  <label for="ability">Ability:</label><br>
  <input type="text" id="ability" name="ability" value=""><br>

  <label for="attack1">Attack1:</label><br>
  <input type="text" id="attack1" name="attack1" value=""><br>

  <label for="attack2">Attack2:</label><br>
  <input type="text" id="attack2" name="attack2" value=""><br>

  <label for="resistance">Resistance:</label><br>
  <input type="text" id="resistance" name="resistance" value=""><br>

  <label for="weakness">Weakness:</label><br>
  <input type="text" id="weakness" name="weakness" value=""><br>

  <br>
  <input type="submit" name="submit" value="submit">
</form> 
</body>
</html>
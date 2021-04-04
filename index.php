<!DOCTYPE html>
<html>
<head>
<!-- Copyright 2021 EonHub. All Rights Reserved. -->
<title>PlistGen</title>
<link rel="stylesheet" href="css/main.css">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, viewport-fit=cover">
</head>
<body>

<center>
    <img src="gen.png">
    <h1>PlistGen</h1>
    <p>EonHub's Local Plist Generator</p>
    <form action="php/gen.php" method="post">
        <input class="txt" type="text" name="name" placeholder="Example: plistname"><br>
        <input class="txt" type="text" name="url" placeholder="Example: ipaname"><br>
        <input class="txt" type="text" name="title" placeholder="Example: AppName"><br>
        <input class="button" type="submit" name="submit" value="Generate">
    </form>
</center>


</body>
</html>
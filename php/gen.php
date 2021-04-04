<?php
$filename = htmlspecialchars($_POST['name']);
$link = htmlspecialchars($_POST['url']);
$installtxt = htmlspecialchars($_POST['title']);
$myfile = fopen('../plists/'. $filename .'.plist', "w") or die("Unable to open file!");
$txt = '<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE plist PUBLIC "-//Apple//DTD PLIST 1.0//EN" "http://www.apple.com/DTDs/PropertyList-1.0.dtd …">
<plist version="1.0">
<dict>
<key>items</key>
<array>
<dict>
<key>assets</key>
<array>
<dict>
<key>kind</key>
<string>software-package</string>
<key>url</key>
<string>https://cdn.eonhubapp.com/free/ipas/'. $link .'.ipa</string>
</dict>
<dict>
<key>kind</key>
<string>display-image</string>
<key>url</key>
<string>https://app.eonhubapp.com/img/icon.png</string>
</dict>
<dict>
<key>kind</key>
<string>full-size-image</string>
<key>url</key>
<string>https://app.eonhubapp.com/img/icon.png</string>
</dict>
</array>
<key>metadata</key>
<dict>
<key>bundle-identifier</key>
<string>1</string>
<key>bundle-version</key>
<string>1</string>
<key>kind</key>
<string>software</string>
<key>title</key>
<string>'. $installtxt .' & ✌🏻EonHub✌🏻</string>
</dict>
</dict>
</array>
</dict>
</plist>';
fwrite($myfile, $txt);
fclose($myfile);
header('Location: ../index.php');
echo('Test');
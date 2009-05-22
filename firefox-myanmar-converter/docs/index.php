<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
  <meta http-equiv="Content-Type"
 content="text/html; charset=UTF-8" />
  <link rel="stylesheet" href="styles/myanmar-converter-extension.css" type="text/css" />
  <title>Myanmar Converter Firefox Extension</title>
  <style type="text/css">
  *[@lang='my'] { font-family: Padauk, Myanmar3; }
  body {background: #fffff0; }
  div#body { margin-left: 100px; }
  h1,h2,h3,h4,h5 {
  border-top-width: 0.1em;
  border-bottom-width: 0.1em;
  border-top-style: none;
  border-bottom-style: solid;
  color:  #c07000;
}
h1 { font-size: 16pt; padding-top: 0px; }
h2 { font-size: 14pt; }
h3 { font-size: 13pt; }
h4 { font-size: 12pt; }
h5 { font-size: 12pt; }
  </style>
   <?php
  include('../ThanLwinSoft/_shared/DownloadList.php');
  ?>
</head>
<body>
<a href="http://thanlwinsoft.co.uk/" title="ThanLwinSoft" style="float:left;"><img src="images/ThanLwin.jpg" alt="ThanLwinSoft" /></a>
<div id="body">
<h1>Myanmar Converter Firefox Extension</h1>
<p lang="my">မြန်မာ ဝက်ဘ်စာမျက်နှာမှာ ဇော်ဂျီးက ယူနီကုတ် ၅ ဒသမ ၁ အထိ ပြောင်းပါသည်။</p>
<h2 lang="my">လိုအပ်ချက်များ</h2>
<ul>
<li>Java 1.6 အပေါင်း။</li>
<li>မြန်မာယူနီကုတ် ၅ ဒသမ ၁ ဖောင့်၊ ဥပမာ <a href="http://scripts.sil.org/Padauk">ပိတောက်</a> သို့မဟုက် မြန်မာ၃ ဖောင့်များ သုံးလို့ရပါသည်။</li>
</ul>
<h2>What does it do?</h2>
<p>This extension automatically detects if a web page is using Zaw Gyi One fonts and converts the text to Unicode 5.1.
This means that you only need to install a Unicode 5.1 font, you don't need to have ZawGyiOne installed.
</p>

<h2>Requirements</h2>
<ul>
<li>Java 1.6 plugin to be installed</li>
<li>A Myanmar Unicode 5.1 font to be installed such as <a href="http://scripts.sil.org/Padauk">Padauk</a> or Myanmar3.</li>
</ul>

<h2>Why convert from ZawGyi to Unicode 5.1?</h2>
<p>
Having both ZawGyi and Unicode 5.1 fonts causes problems when the font is not explicitly defined by the web page.
If the wrong font is selected, then the Myanmar text will display wrongly. 
Unicode 5.1 has many advantages over Zaw Gyi:
</p>
<ul>
<li>Unicode 5.1 has only one spelling for a Myanmar word, Zaw Gyi can have multiple spellings for the same word.</li>
<li>Sorting and searching are much easier with Unicode 5.1.</li>
<li>Localized software will use Unicode 5.1.</li>
<li>Myanmar spell checking becomes possible with Unicode 5.1.</li>
<li>Mon, Karen, Shan can be displayed correctly with Unicode 5.1</li>
</ul>
<h2>Install</h2>
<?php
$dir = new DownloadList("/var/www/MyanmarConverter/","/MyanmarConverter");
$dir->listDir();
?>
</div>
</body>
</html>
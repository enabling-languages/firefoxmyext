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

.centre {
  text-align: center;
}

p.centre img {
    padding-bottom: 2em;
}

.enTranslation {
	width: 45%;
	display: inline-block;
	vertical-align: top;
	margin-right: 1%;
}

h2.myTranslation, h3.myTranslation { font-weight: bold; }

.myTranslation {
	width: 45%;
	display: inline-block;
	font-family: ThanLwin, Padauk, Myanmar3, Parabaik;
	vertical-align: top;	
	margin-left: 1%;
}

  </style>
   <?php
  include('../ThanLwinSoft/_shared/DownloadList.php');
  ?>
</head>
<body>
<a href="http://thanlwinsoft.co.uk/" title="ThanLwinSoft" style="float:left;"><img src="images/ThanLwin.jpg" alt="ThanLwinSoft" /></a>
<div id="body">
<h1 class="enTranslation">Myanmar Converter Firefox Extension</h1>
<h1 lang="my" class="myTranslation">Firefox ကိုတိုးချဲ့အထူးပြုထားသောမြန်မာစာပြောင်းလဲခြင်း</h1>

<h2 class="enTranslation">What does it do?</h2>
<h2 lang="my" class="myTranslation">သူကဘာလုပ်လဲ?</h2>
<p class="enTranslation">
This extension automatically detects if a web page is using Zaw Gyi One fonts and converts the text to Unicode.
This means that you only need to install a Unicode font, you don't need to have ZawGyi installed.
</p>
<p lang="my" class="myTranslation">
web page တစ်ခုသည် စကားလုံးများကို ဇော်ဂျီဖောင့်ဖြင့် အသုံးပြုရေးသားထားလျှင် ဤတိုးချဲ့အထူးပြုချက်မှ ယူနီကုတ်သို့ အလိုအ​​လျောက် ရှာဖွေပြောင်းလဲပေးနိုင်သည်။ ထိုကြောင့် သင်သည် ယူနီကုတ်ဖောင့် တစ်မျိုးတည်းကိုသာ ထည့်သွင်းရန်လိုအပ်ပြီး၊ ဇော်ဂျီဖောင့်ကို ထည့်သွင်းရန် မလိုအပ်ပါဟု ဆိုလိုခြင်းပင်ဖြစ်သည်။
</p>

<h2 class="enTranslation">Requirements</h2>
<h2 lang="my" class="myTranslation">လိုအပ်ချက်များ</h2>
<p class="enTranslation">
A Myanmar Unicode font to be installed such as <a href="http://scripts.sil.org/Padauk">Padauk</a> or Myanmar3.</p>
<p lang="my" class="myTranslation">
ဖော်ပြပါ မြန်မာယူနီကုတ်ဖောင့်များ၊ ဥပမာ <a href="http://scripts.sil.org/Padauk">ပိတောက်</a> သို့မဟုက် မြန်မာ-၃ ဖောင့်များ ထည့်သွင်းအသုံးပြု၍ရပါသည်။</p>

<h2 class="enTranslation">Why convert from ZawGyi to Unicode?</h2>
<h2 lang="my" class="myTranslation">ဘာလို့ ဇော်ဂျီကနေ ယူနီကုတ်ကို ပြောင်းတာလဲ?</h2>
<p class="enTranslation">
Having both ZawGyi and Unicode fonts causes problems when the font is not explicitly defined by the web page.
If the wrong font is selected, then the Myanmar text will display wrongly. 
Unicode has many advantages over Zaw Gyi:
</p>
<p lang="my" class="myTranslation">
ဇော်ဂျီဖောင့် နှင့် ယူနီကုတ်ဖောင့် နှစ်မျိုးလုံးရှိနေခြင်းသည် web page အနေဖြင့် မည်သည့်ဖောင့်ဆိုသည်ကို ပြတ်သားစွာ မဖော်ပြနိုင်သော ပြဿနာများကို ဖြစ်စေနိုင်ပါသည်။ မှားယွင်းသောဖောင့်ကို​ ရွေးချယ်မိခဲ့မည်ဆိုလျှင်ဖြင့် မြန်မာစာလုံးများ သည်လည်း မှားယွင်းစွာ ဖော်ပြနေပါလိမ့်မည်။ ယူနီကုတ်တွင် ဇော်ဂျီထက်သာလွန်သော အကျိုးကျေးဇူးများရှိပေသည်။
</p>
<ul class="enTranslation">
<li>Unicode has only one spelling for a Myanmar word, Zaw Gyi can have multiple spellings for the same word.</li>
<li>Alphabetical sorting and searching for words are much easier with Unicode.</li>
<li>Localized software will use Unicode.</li>
<li>Myanmar spell checking becomes possible with Unicode.</li>
<li>Mon, Karen, Shan can be displayed correctly with Unicode.</li>
</ul>
<ul lang="my" class="myTranslation">
<li>မြန်မာစကားလုံး တစ်လုံးအတွက် ယူနီကုတ်တွင် စာလုံးပေါင်းပုံ တစ်မျိုးတည်းသာ ရှိပါသည်။ တူညီတဲ့ စကားလုံးအတွက်ဇော်ဂျီတွင် စာလုံးပေါင်းပုံများ အများအပြား ရှိနိုင်ပါသည်။</li>
<li>ယူနီကုတ်ဖြင့် အက္ခရာစဉ်အလိုက် စကားလုံး အမျိုးအစားခွဲခြင်း၊ ရှာဖွေခြင်းများကို ပိုမိုလွယ်ကူစွာလုပ်​ဆောင်နိုင်ပါသည်။</li>
<li>အများနှင့်ဆိုင်သောအဆင့်မှီဆော့ဝဲလ်များသည် ယူနီကုတ်ကိုသာ အသုံးပြုပါလိမ့်မည်။ </li>
<li>ယူနီကုတ်ဖြင့် မြန်မာစာ စာလုံးပေါင်းသတ်ပုံ စစ်ဆေးခြင်းများ ဖြစ်လာနိုင်ဖွယ်ရှိပါသည်။</li>
<li>ယူနီကုတ်ဖြင့် မွန်၊ ကရင်၊ ရှမ်း စကားလုံးများကို မှန်ကန်စွာ ပြသနိုင်ပါသည်။</li>
</ul>
<h2 class="enTranslation">Install</h2>
<h2 lang="my" class="myTranslation">ထည့်သွင်းသည်</h2>
<?php
$dir = new DownloadList("/var/www/MyanmarConverter/","/MyanmarConverter");
$dir->listDir();
?>
<h2 class="enTranslation">Usage</h2>
<h2 lang="my" class="myTranslation">အသုံးပြုပုံ</h2>
<p class="enTranslation">
Many Myanmar web pages are using ZawGyi or other fonts which are not following the Unicode Standard correctly. The "Myanmar Converter" Firefox Extension allows people with only genuine Myanmar Unicode fonts installed to read these pages by converting the text to Unicode when the page opens.
</p>
<p lang="my" class="myTranslation">
မြန်မာ web page ​တော်တော်များများသည် ယူနီကုတ်အဆင့်အတန်းကို မှန်ကန်စွာမလိုက်နာသော ဇော်ဂျီ သို့မဟုတ် အခြားဖောင့် များကို အသုံးပြုနေကြပါသည်။ စစ်မှန်သော မြန်မာယူနီကုတ်ဖောင့် တစ်မျိုးတည်းကိုသာ ထည့်သွင်းအသုံးပြုထားသော သူများအနေဖြင့် ထိုစာမျက်နှာများကို ဖတ်ရှုနိုင်ရန် စာမျက်နှာဖွင့်လိုက်သောအခါ Firefox ကို တိုးချဲ့ အထူးပြုထားသော မြန်မာစာပြောင်းလဲခြင်း (The "Myanmar Converter" Firefox Extension) ၏ စာသားများကို ယူနီကုတ်သို့ ပြောင်းလဲပေးခြင်းအားဖြင့် ဖတ်ရှုနိုင်ပါသည်။
</p>
<p class="enTranslation">
The Myanmar text will display wrongly like this:
</p>
<p lang="my" class="myTranslation">
မြန်မာစာလုံးများသည် ဤကဲ့သို့ မှားယွင်းစွာဖော်ပြနေပါမည်-
<p class="centre">
<img src="images/beforeConversion.png" />
</p>

<p class="enTranslation">
Select Tools/Myanmar Converter from the menu.
</p>
<p lang="my" class="myTranslation">
မီနူး ပေါ်မှ Tools ဆိုသည့် ကိရိယာထဲမှ Myanmar Converter ဆိုသည့် အရာကို ရွေးချယ်ပါ။ 
</p>
<p class="centre">
<img src="images/state1.png" alt="Ubuntu Software Center/Myanmar"/>
</p>

<p class="enTranslation">
The Myanmar Converter Options dialog should appear. You can choose to match the Hostname exactly or with a suffix. The Pathname can also be match exactly or with a prefix. Check the Enable conversion for Pattern check box and click the Add button.
</p>
<p lang="my" class="myTranslation">
မြန်မာစာဖောင့်ပြောင်းလဲရာ၌ ရွေးချယ်ပိုင်ခွင့်များ (Myanmar Converter Options) ဆိုသည့် dialog တစ်ခု ပေါ်လာပါမည်၊ ပြီးနောက် သင်သည် အဓိကဆာလ်ဗာအမည် (Hostname) အတွက် အားလုံးကိုတိတိကျကျတွဲပါ (match exactyl) သို့မဟုတ် ​ရှေ့မှစ၍အားလုံးကိုတွဲပါ (match as suffix) ကိုရွေးချယ်ရပြီး လမ်းကြောင်းခွဲအမည် (Partname) အတွက်လည်း အားလုံး ကိုတိတိကျကျတွဲပါ (match exactyl) သို့မဟုတ် အနောက်မှစ၍အားလုံးကိုတွဲပါ (match as prefix) ကို ရွေးချယ်ရပါမည်။ ထို့နောက် ပုံစံအလိုက်ပြောင်းလဲ​နိုင်သောစနစ် (Enable conversion for Pattern) ဆိုသည့် check box လေးကို အမှန်ပေးပြီး Add ဆိုသည့် ခလုပ်ကိုနှိပ်လိုက်ရပါမည်။</p>
<p  class="centre">
<img src="images/state2.png" />
</p>

<p class="enTranslation">Add more entries as required. Click the OK button when finished.</p>
<p lang="my" class="myTranslation">လိုအပ်သောအခြား အချက်အလက်များကို ပေါင်းထည့်ပါ။ အားလုံးပြည့်စုံပြီးသည့်နောက် OK ဆိုသည့်ခလုပ်ကို ပါ။</p> 
<p  class="centre">
<img src="images/state3.png" />
</p>

<p class="enTranslation">Reload the web page and the Myanmar text should display correctly.</p>
<p lang="my" class="myTranslation">web page ကို reload ပြန်လုပ်ခိုင်းပြီးလျှင်ဖြင့် မြန်မာစာလုံးများသည် တိကျမှန်ကန်စွာ ထွက်ပေါ်လာပါလိမ့်မည်။</p>
<p  class="centre">
<img src="images/afterConversion.png" />
</p>

<p class="enTranslation">
It is also possible to send Myanmar text to people using Zawgyi or other fonts from within a web page such as Gmail or Facebook. Select the textarea, right click with the mouse and then choose Myanmar Unicode Converter/Send form as:Zawgyi-One or whichever font is appropriate.
</p>
<p lang="my" class="myTranslation">
ဤတိုးချဲ့အထူးပြုချက်သည် Gmail သို့မဟုတ် Facebook ကဲ့သို့သော web page များတွင် ဇော်ဂျီ သို့မဟုတ် အခြား​ဖောင့်များ အသုံးပြုနေသော လူများအတွက် မြန်မာစကားလုံးများ​ ပေးပို့ရန်လည်းပဲ ဖြစ်နိုင်ပါသည်။ စာသားပါရှိသော textarea ကိုမောက်စ်​တင်လိုက်ပါ၊ ထို့နောက် မောက်စ်ညာဘက်ကို ကလစ်လိုက်ပါ၊ ပြီး​လျှင် Myanmar Unicode Converter ထဲမှ Send form as:Zawgyi-One သို့မဟုတ် သင့်လျော်သောဖောင့်ကို ရွေးချယ်ပြီး ပေးပို့နိုင်ပါသည်။
</p>
<p  class="centre">
<img src="images/gmail.png" />
</p>

<h2 class="enTranslation">Myanmar spell-checking</h2>
<h2 lang="my" class="myTranslation">မြန်မာစာ စာလုံးပေါင်းသတ်ပုံစစ်ဆေးခြင်း</h2>
<p class="enTranslation">Choose the textarea where you went to spell-check and right click with the mouse. Choose Check Spelling and Languages/ Burmese/Myanmar.</p>
<p lang="my" class="myTranslation">သင်စစ်ဆေးလိုသော textarea ကိုရွေး​၍ မောက်စ်ညာဘက်ကိုကလစ်လိုက်ပါ၊ Check Spelling ကိုအမှန်ခြစ်ပြီး Languages ထဲမှ Burmese/Myanmar ကို အမှန်ခြစ်ပါ။</p>
<p  class="centre">
<img src="images/spallCheck1.png" />
</p>

<p class="enTranslation">
Myanmar does not usually have spaces between words, but you can automatically insert
ZWSP instead. Choose <em>Myanmar Unicode Converter/Separate words as you type (with ZWSP)</em> and spell-checking should become correct.
</p>
<p lang="my" class="myTranslation">မြန်မာစကားတွင် အများအားဖြင့် စကားလုံးတစ်လုံးနှင့်တစ်လုံးကြားတွင် နေရာလွတ်ချန်ခြင်းမရှိပေ။ သို့သော် သင်သည် သုညအကျယ်အစားထိုးခြင်းကို အလိုအလျောက် ဖြည့်ဆွက်နိုင်ပါသည်။ ထို့ကြောင့် <em>Myanmar Unicode Converter ထဲမှ Separate words as you type (with ZWSP)</em> ကို ထပ်မံရွေးချယ်ပေးရပါမည်။ ထိုမှသာ စာလုံးပေါင်းသတ်ပုံကို မှန်ကန်စွာ ခွဲခြား စစ်ဆေးပေးနိုင်မည် ဖြစ်သည်။
</p>
<p  class="centre">
<img src="images/spallCheck2.png" style="vertical-align: top;"/>
<img src="images/spallCheck2.1.png" style="vertical-align: top;"/>
</p>

<p class="enTranslation">
In the example below, "ဖြားနာသည်", the word "ဖြား" should be spelled "ဖျား", so a red line is shown underneath to show the error. If you right click with the mouse, a list of possible correct words is shown, so you can correct the spelling.
</p>
<p lang="my" class="myTranslation">
အောက်ဖော်ပြပါ ဥပမာ "ဖြားနာသည်" တွင် "ဖျား" ကို "ဖြား" ဟု မှားယွင်း ရေးသားထားပါသည်။ ထို့ကြောင့် မှားယွင်းသောစာလုံးပေါင်း "​ဖြား" ကို မျဉ်းအနီသား၍ အမှားပြထားပါမည်။
ထိုစကားလုံးပေါ်တွင် မောက်စ်၏ညာဘက်ကိုကလစ်လိုက်ပါက ဖြစ်နိုင်ချေရှိသောစကားလုံးအစီအစဉ်တစ်ခု ဖော်ပြပေးပါမည်။ ထို့ကြောင့်သင်သည် စာလုံးပေါင်းကို မှန်ကန်စွာ ပြင်ဆင်ပေးနိုင်ပါသည်။
</p>
<p class="centre" >
<img src="images/spallCheck3.png" style="vertical-align: top;"/>
<img src="images/spallCheck4.png" style="vertical-align: top;"/>
<img src="images/spallCheck5.png" style="vertical-align: top;"/>
</p>

<p class="enTranslation">
This extension does not understand the meaning of Myanmar words, so it can only check if the spelling of a word may be correct. It cannot tell whether that spelling is actually correct in that particular sentence. In the example below, "ဖျားရောင်း" was typed, but "​ဖြားယောင်း" is actually correct. However, both "ဖျား" and "ရောင်း" are correct spellings of words, so the extension does not realize they are wrong in this situation. The same problem occurs with spell-checking in other languages like English as well, so this is not an excuse to avoid checking it yourself.
</p>
<p lang="my" class="myTranslation">
ဤတိုးချဲ့အထူးပြုချက်သည် မြန်မာစကားလုံးများ၏ အနက်အဓိပ္ပာယ်ကို နားမလည်နိုင်ပါ။ ထို့ကြောင့် တိုးချဲ့အထူးပြုချက်သည် စကားလုံးတစ်လုံး၏ စာလုံးပေါင်း မှန်ကန်မှု ရှိ၊ မရှိကိုသာလျှင် စစ်ဆေးနိုင်ပါသည်။ သူသည် သက်ဆိုင်ရာဝါကျအလိုက် မည်သို့စာလုံးပေါင်းရမည်ကို မှန်ကန်စွာ ​မပြောနိုင်ပေ။ အောက်ပါဥပမာတွင် သွေးဆောင်ဖြားယောင်းသည်ဟု အဓိပ္ပာယ်ရသော "​ဖြားယောင်း" ကို "ဖျားရောင်း" ဟုမှားယွင်းရေးသားထားသည်။ သို့သော် "ဖျား" နှင့် "ရောင်း" သည် မှန်ကန်သော စာလုံးပေါင်းရှိသည့် စကားလုံးများဖြစ်ပေသည်။ ထို့ကြောင့် ဤသို့သော အခြေအနေမျိုးတွင် တိုးချဲ့အထူးပြုချက်သည် ထိုစကားလုံးများကို မှာယွင်းသည်ဟု သိနိုင်မည်မဟုတ်ပေ။ စာလုံးပေါင်းသတ်ပုံစစ်ဆေးခြင်းနှင့် ပတ်သတ်၍ English စသည့် အခြားဘာသာစကားများတွင် လည်း တူညီသောပြဿနာများ ဖြစ်ပွားနေပါသည်။ ထို​ကြောင့် စာလုံးပေါင်းသတ်ပုံစစ်ဆေးခြင်း ပြီးပြည့်စုံရန် သင်ကိုယ်တိုင်စစ်ဆေးခြင်းသည် ပို၍ကောင်းသောနည်းလမ်းတစ်ခု ဖြစ်သည်ကို သတိပြုရန် လိုပေသည်။
</p>
<p  class="centre">
<img src="images/spallCheck6.png" />
</p>
</div>
</body>
</html>

<?php

$data = [
    "vertaling",
    "ترجمة",
    "tərcümə",
    "пераклад",
    "превод",
    "অনুবাদ",
    "prijevod",
    "traducció",
    "Hubad",
    "Překlad",
    "cyfieithu",
    "Oversættelse",
    "Übersetzung",
    "Μετάφραση",
    "Translation",
    "Traduko",
    "Traducción",
    "tõlkimine",
    "Itzulpena",
    "ترجمه",
    "Käännös",
    "Traduction",
    "aistriúchán",
    "tradución",
    "અનુવાદ",
    "अनुवाद",
    "Prijevod",
    "tradiksyon",
    "Fordítás",
    "թարգմանություն",
    "Terjemahan",
    "þýðingar",
    "Traduzione",
    "תִרגוּם",
    "翻訳",
    "Ngartekne",
    "თარგმანი",
    "аударма",
    "ការបកប្រែ",
    "ಅನುವಾದ",
    "번역",
    "ການແປພາສາ",
    "Vertimas",
    "tulkojums",
    "превод",
    "വിവർത്തനം",
    "орчуулга",
    "भाषांतर",
    "terjemahan",
    "traduzzjoni",
    "ဘာသာပြန်ချက်",
    "अनुवाद",
    "Vertaling",
    "Oversettelse",
    "ਅਨੁਵਾਦ",
    "Tłumaczenie",
    "Traducere",
    "Перевод",
    "පරිවර්තනය",
    "preklad",
    "prevod",
    "përkthim",
    "превод",
    "Phetolelo",
    "tarjamahan",
    "Översättning",
    "tafsiri",
    "மொழிபெயர்ப்பு",
    "అనువాద",
    "Тарҷумаи",
    "การแปล",
    "pagsasalin",
    "Çeviri",
    "переклад",
    "ترجمہ میں",
    "tarjima",
    "Dịch",
    "יבערזעצונג",
    "翻译",
    "Ukuhumusha",
];

$word = $data[array_rand($data)];
$word = mb_strtoupper(mb_substr($word, 0, 1)).mb_substr($word, 1);

return 'Y'.$word;

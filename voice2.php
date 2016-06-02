<?php

set_time_limit(0);

// include("./Snoopy.class.php");
// 
$todaykeyWord = $_POST["todayKeyWord"];
// $url = $_POST["url"];
// $snoopy = new Snoopy;
// $snoopy ->fetch($url);
// echo $snoopy ->results;
//DIE;
$urlValue = file_get_contents($_POST["url"]);

$reval  = "";
$reval .= "<body class=\" \" onmousemove=\"handleData()\">\n";
$reval .= "<input type=\"hidden\" id=\"handeFlag\"  value=\"1\">\n";
$reval .= "    <div id=\"contentDiv\"></div><div id=\"oldContent\">\n";

$reval2 = "<body class=\" \">\n";

$urlValue = str_replace($reval2, $reval ,$urlValue);

$reval  = "";
$reval .= "    </div>\n";
$reval .= "<script src=\"./jquery-1.11.3.js\"></script>\n";
$reval .= "    <script type=\"text/javascript\">\n";
$reval .= " function handleData()\n";
$reval .= "    {\n";

$reval .= "        var handeFlag = $(\"#handeFlag\").val();\n";
$reval .= "        if(handeFlag ==1)\n";
$reval .= "        {\n";

$reval .= "            var kongge = new RegExp(\" \",\"g\");\n";
$reval .= "            var titleContent = $(\".custom-title-noline\").text().replace(kongge,\"\");\n";
$reval .= "            var title = titleContent.substring(0,titleContent.indexOf(\"2016-\"));\n";
$reval .= "            var rerrr = new RegExp(\"[0-9]\",\"g\");\n";
$reval .= "            var author = titleContent.replace(title,'').replace(\"罗辑思维\",'').replace(rerrr,'').replace(\"--\",\"\");\n";
$reval .= "            var mp3Valie = $(\".custom-audio\").attr('data-src');\n";
$reval .= "            var firstImage = $(\".js-view-image-item\").attr(\"data-src\").replace(\"https\",\"http\");\n";
$reval .= "            var temp = $(\".js-view-image-item\");\n";
$reval .= "            $(temp[0]).remove();\n";
$reval .= "            var contentHtml = $(\".custom-richtext.js-lazy-container.js-view-image-list\");\n";


$reval .= "            var tempContentHtml = \"\";\n";
$reval .= "            var contentHtml = $(\".content-body.js-page-content\");\n";
$reval .= "            var templent = contentHtml.children().length;\n";
$reval .= "            for(i=0; i<templent; i++)\n";
$reval .= "            {\n";
$reval .= "                if(i>2 && i < templent-6)\n";
$reval .= "                {\n";
$reval .= "                   tempContentHtml += contentHtml.children().eq(i).html();\n";
$reval .= "                }\n";
$reval .= "            }\n";


$reval .= "            var reval  = \"\";\n";
$reval .= "            reval += \"[语音]" . date("Y.m.d") ." ". $todaykeyWord ."《\"+ $.trim(title) +\"》\";\n";
$reval .= "            reval += \"[align=left][size=5][color=#2e8b57]罗胖微信语音[/color][/size]\";\n";
$reval .= "            reval += \"[audio]\";\n";
$reval .= "            reval += mp3Valie+\"!64k.mp3\";\n";
$reval .= "            reval += \"[/audio][/align]\";\n";
$reval .= "            reval += \"[align=center][color=#ff0000][b]". $todaykeyWord ."[/b][/color][/align]<br>语音文字<br>今天您往下拖<br>\";\n";
$reval .= "            reval += \"[img=201,0]\";\n";
$reval .= "            reval += firstImage;\n";
$reval .= "            reval += \"[/img]<br/>今日微信推送<br/>[align=center][font=微软雅黑][b]\"+ $.trim(title) +\"[/b][/font][/align][align=center]\"+ author +\"[/align][/align]\";\n";
$reval .= "\n";
$reval .= "            \n";
$reval .= "            \n";
$reval .= "            $(\"#oldContent\").html(\"\");\n";
$reval .= "            $(\"#contentDiv\").html(reval).append(tempContentHtml); \n";
$reval .= "            $(\"#handeFlag\").val(2);\n";
$reval .= "        }\n";

$reval .= "        if(typeof $(\".search-bar\") != \"undefined\")\n";
$reval .= "        {\n";
$reval .= "            $(\".search-bar\").remove();\n";
$reval .= "        }\n";
$reval .= "        if(typeof $(\".js-right-icon.hide\") != \"undefined\")\n";
$reval .= "        {\n";
$reval .= "            $(\".js-right-icon.hide\").remove();\n";
$reval .= "        }\n";
$reval .= "        \n";
$reval .= "        if($(\"#handeFlag\").val() == 2)\n";
$reval .= "        {\n";
$reval .= "            $(\"#oldContent\").remove();\n";
$reval .= "            var newHtml = $(\"#contentDiv\").html();\n";

$reval .= "            var reee = new RegExp(\"https\",\"g\");\n";
$reval .= "            newHtml = newHtml.replace(reee ,'http');\n";

$reval .= "            reee = new RegExp(\"<img\",\"g\");\n";
$reval .= "            newHtml = newHtml.replace(reee ,'<br/><img ');\n";
$reval .= "            reee = new RegExp('!730x0.jpg\">',\"g\");\n";
$reval .= "            newHtml = newHtml.replace(reee ,'\"/><br/><br/>');\n";

$reval .= "            $(\"#contentDiv\").html(newHtml);\n";
$reval .= "            $(\"#handeFlag\").val(3)\n";
$reval .= "        }\n";

$reval .= "    }\n";

$reval .= "    </script>\n";
$reval .= "    </body>\n";

$urlValue = str_replace("</body>", $reval ,$urlValue);
echo $urlValue ;
?>
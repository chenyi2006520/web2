<?php 
date_default_timezone_set("PRC");

$urlValue = file_get_contents($_POST["url"]);

$reval = "";
$reval .= "<body class=\" \"  onmousemove=\"handleData()\">\n";#$reval .= "    <input type=\"button\" value=\"处理数据\" id=\"handelClick\">\n";
$reval .= "<input type=\"hidden\" id=\"handeFlag\"  value=\"1\">\n";#$reval .= "    <br/>\n";#$reval .= "    <br/>\n";
$reval .= "    <div id=\"contentDiv\"></div><div id=\"oldContent\">\n";

$reval2 = "<body class=\" \">\n";

$urlValue = str_replace($reval2, $reval2.$reval, $urlValue);

$reval = "";
$reval .= "    </div>\n";
$reval .= "<script src=\"./jquery-1.11.3.js\"></script>\n";
$reval .= "    <script type=\"text/javascript\">\n";
$reval .= " function handleData()\n";
$reval .= "    {\n";
$reval .= "        var handeFlag = $(\"#handeFlag\").val();\n";
$reval .= "        if(handeFlag == 1)\n";
$reval .= "        {\n";
$reval .= "                        var titleContent = $(\".custom-title-noline\").text();\n";
$reval .= "                        var title = titleContent.substring(0,titleContent.indexOf(\"2016-\"));\n";
$reval .= "                        var titleDiv = $(\".custom-title-noline\").html();\n";
$reval .= "                        var contentHtml = $(\".content-body.js-page-content\");\n";
$reval .= "                        var reval  = \"\";\n";
$reval .= "                        reval += \"[font=Helvetica,][font=inherit][b]\"+ $.trim(title) +\"[/b][align=left][color=rgb(140, 140, 140)][font=inherit][size=12px]2016-3-3[color=#607fa6][font=inherit] 罗辑思维[/font][/color][/size][/font][/color][/align][/font][/font]<br/>\";\n";
$reval .= "                        \n";
$reval .= "                        var tempContentHtml = \"\";\n";
$reval .= "                        \n";
$reval .= "                        var templent = contentHtml.children().length;\n";
$reval .= "                        for(i=1; i<templent; i++)\n";
$reval .= "                        {\n";
$reval .= "                            tempContentHtml += contentHtml.children().eq(i).html();\n";
$reval .= "                        }\n";
$reval .= "                        \n";
$reval .= "                        tempContentHtml =  reval +  tempContentHtml ; \n";
$reval .= "                        $(\"#contentDiv\").html(tempContentHtml)\n";
$reval .= "                        $(\"#handeFlag\").val(2);\n";
$reval .= "                        \n";
$reval .= "         }\n";

$reval .= "        \n";
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

$urlValue = str_replace("</body>", $reval, $urlValue);
echo $urlValue;
?>
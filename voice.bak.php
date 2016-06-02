<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <script src="./jquery-2.2.0.js"></script>
</head>

<body>
    <input type="button" value = "点………………………………" id="btnClick2" />
    <div id="contentV"></div>
    <iframe style="display: block;"   id="IContent" name="IContent" width="100%" height="900" src="<?php echo $_POST["url"] ?>"></iframe>
    <script type="text/javascript">
        $(function() {
            $("#btnClick2").click(function(){
                //var htmlContents = $(document.getElementById('IContent').contentWindow.document.body).find("div.content-body").children().length;
                var htmlContents = $("#IContent").contents().find('.content-body').html();
                alert(htmlContents);
                $("#contentV").html(htmlContents);
            });
        });

        function handleData() {
            var handeFlag = $("#handeFlag").val();
            if (handeFlag == 1) {
                var kongge = new RegExp(" ", "g");
                var titleContent = $(".custom-title-noline").text().replace(kongge, "");
                var title = titleContent.substring(0, titleContent.indexOf("2016-"));
                var rerrr = new RegExp("[0-9]", "g");
                var author = titleContent.replace(title, '').replace("罗辑思维", '').replace(rerrr, '').replace("--", "");
                var mp3Valie = $(".custom-audio").attr('data-src');
                var firstImage = $(".js-view-image-item").attr("data-src").replace("https", "http");
                var temp = $(".js-view-image-item");
                $(temp[0]).remove();
                var contentHtml = $(".custom-richtext.js-lazy-container.js-view-image-list");
                var tempContentHtml = "";
                var contentHtml = $(".content-body.js-page-content");
                var templent = contentHtml.children().length;
                for (i = 0; i < templent; i++) {
                    if (i > 2 && i < templent - 6) {
                        tempContentHtml += contentHtml.children().eq(i).html();
                    }
                }
                var reval = "";
                reval += "[语音]2016.02.17 开始《" + $.trim(title) + "》";
                reval += "[align=left][size=5][color=#2e8b57]罗胖微信语音[/color][/size]";
                reval += "[audio]";
                reval += mp3Valie + "!64k.mp3";
                reval += "[/audio][/align]";
                reval += "[align=center][color=#ff0000][b]开始[/b][/color][/align]<br>语音文字<br>今天您往下拖<br>";
                reval += "[img=201,0]";
                reval += firstImage;
                reval += "[/img]<br/>今日微信推送<br/>[align=center][font=微软雅黑][b]" + $.trim(title) + "[/b][/font][/align][align=center]" + author + "[/align][/align]";



                $("#oldContent").html("");
                $("#contentDiv").html(reval).append(tempContentHtml);
                $("#handeFlag").val(2);
            }
            if (typeof $(".search-bar") != "undefined") {
                $(".search-bar").remove();
            }
            if (typeof $(".js-right-icon.hide") != "undefined") {
                $(".js-right-icon.hide").remove();
            }

            if ($("#handeFlag").val() == 2) {
                $("#oldContent").remove();
                var newHtml = $("#contentDiv").html();
                var reee = new RegExp("https", "g");
                newHtml = newHtml.replace(reee, 'http');
                reee = new RegExp("<img", "g");
                newHtml = newHtml.replace(reee, '<br/><img ');
                reee = new RegExp('!730x0.jpg">', "g");
                newHtml = newHtml.replace(reee, '"/><br/><br/>');
                $("#contentDiv").html(newHtml);
                $("#handeFlag").val(3)
            }
        }
    </script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    
         <script src="./my97/WdatePicker.js"></script>    

</head>
<body>
    <input type="text" name="g_time_s" id="g_time_s"  onFocus="WdatePicker({dateFmt:'yyyy-MM-dd HH:mm:ss', maxDate:'#F{$dp.$D(\'g_time_e\')}'})"/> 
    <input type="text" name="g_time_e" id="g_time_e"  onFocus="WdatePicker({dateFmt:'yyyy-MM-dd HH:mm:ss', minDate:'#F{$dp.$D(\'g_time_s\')}'})"/>
</body>
</html>
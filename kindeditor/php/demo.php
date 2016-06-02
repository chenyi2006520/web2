<?php
	$htmlData = '';
	if (!empty($_POST['content1'])) {
		if (get_magic_quotes_gpc()) {
			$htmlData = stripslashes($_POST['content1']);
		} else {
			$htmlData = $_POST['content1'];
		}
	}
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8" />
	<title>KindEditor PHP</title>
	<link rel="stylesheet" href="../themes/default/default.css" />
	<link rel="stylesheet" href="../plugins/code/prettify.css" />
	<script charset="utf-8" src="../kindeditor-All.js"></script>
	<script charset="utf-8" src="../lang/zh-CN.js"></script>
	<script charset="utf-8" src="../plugins/code/prettify.js"></script>
	<script>
		KindEditor.ready(function(K) {
			var editor1 = K.create('textarea[name="content1"]', {
				cssPath : '../plugins/code/prettify.css',
				uploadJson : '../php/upload_json.php',
				fileManagerJson : '../php/file_manager_json.php',
				allowFileManager : true,
				afterCreate : function() {
					var self = this;
					K.ctrl(document, 13, function() {
						self.sync();
						K('form[name=example]')[0].submit();
					});
					K.ctrl(self.edit.doc, 13, function() {
						self.sync();
						K('form[name=example]')[0].submit();
					});
				}
			});
			prettyPrint();
			
			var uploadbutton = K.uploadbutton({
					button : K('#ke-upload-button')[0],
					fieldName : 'imgFile',
					url : '../php/upload_json.php',
					afterUpload : function(data) {
						if (data.error === 0) {
							alert(data.url);
						} else {
							alert(data.message);
						}
					}
				});
				uploadbutton.fileBox.change(function(e) {
				uploadbutton.submit();
			});
			
			var dialog = K.dialog({
				width : 500,
				title : '测试窗口',
				body : '<div style="margin:10px;"><strong>内容</strong></div>',
				closeBtn : {
					name : '关闭',
					click : function(e) {
						dialog.remove();
					}
				},
				yesBtn : {
					name : '确定',
					click : function(e) {
						alert(this.value);
					}
				},
				noBtn : {
					name : '取消',
					click : function(e) {
						dialog.remove();
					}
				}
			});
		});
	</script>
</head>
<body>
	<?php echo $htmlData; ?>
	<form name="example" method="post" action="demo.php">
		<textarea name="content1" style="width:700px;height:200px;visibility:hidden;"><?php echo htmlspecialchars($htmlData); ?></textarea>
		<br />
		<input type="submit" name="button" value="提交内容" /> (提交快捷键: Ctrl + Enter)
	</form>
</body>
</html>


<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>工艺作业指导书编辑器--<?php echo ($meta_title); ?></title>
		<!--引入bootstrap-->
<!-- 新 Bootstrap 核心 CSS 文件 -->
<link rel="stylesheet" href="/instructor/Public/bootstrap-3.3.5/css/bootstrap.min.css">

<!-- 可选的Bootstrap主题文件（一般不用引入） -->
<link rel="stylesheet" href="/instructor/Public/bootstrap-3.3.5/css/bootstrap-theme.min.css">

<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
<script src="/instructor/Public/bootstrap-3.3.5/js/jquery.min.js"></script>

<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
<script src="/instructor/Public/bootstrap-3.3.5/js/bootstrap.min.js"></script>
		 
	</head>
	<body>
	
	<style type="text/css">
		.edui-for-hougelou .edui-icon {
    background-position: -700px -40px;
}
	</style>
<form class="form-inline">
	<div class="form-group">
		<div class="input-group">
			<div class="input-group-addon">车型</div>
			<input type="text" class="form-control" id="cx" placeholder="">
			<div class="input-group-addon">工序名称</div>
			<input type="text" class="form-control" style="width: 200px;" placeholder="请输入工序名称……">
		</div>
		<div class="input-group">
			<div class="input-group-addon">车间</div>
			<input type="text" class="form-control" style="width: 120px;" id="cj" placeholder="">

			<div class="input-group-addon">工位</div>
			<input type="text" class="form-control" style="width: 60px;" id="gw" placeholder="">

			<div class="input-group-addon">工序</div>
			<input type="text" class="form-control" style="width: 60px;" id="gx" placeholder="">
		</div>
	</div>


  <!-- 加载编辑器的容器 -->
    <script id="container" name="content" type="text/plain" style="width: 95%;height: 600px;">
        这里写你的初始化内容
    </script>
    <!-- 配置文件 -->
    <script type="text/javascript" src="/instructor/Public/utf8-php/ueditor.config.js"></script>
    <!-- 编辑器源码文件 -->
    <script type="text/javascript" src="/instructor/Public/utf8-php/ueditor.all.js"></script>
    <!-- 实例化编辑器 -->
    <script type="text/javascript">
    //var bw=$(window).width()*0.95;
        var ue = UE.getEditor('container',{
      //initialFrameWidth : bw,
      //  initialFrameHeight: 600,
       toolbars:[
            ['fullscreen', 'source', '|', 'undo', 'redo', '|',
                'bold', 'italic', 'underline', 'fontborder', 'strikethrough', 'superscript', 'subscript', 'removeformat', 'formatmatch', 'hougelou', 'autotypeset', 'blockquote', 'pasteplain', '|', 'forecolor', 'backcolor', 'insertorderedlist', 'insertunorderedlist', 'selectall', 'cleardoc', '|',
                'rowspacingtop', 'rowspacingbottom', 'lineheight', '|',
                'customstyle', 'paragraph', 'fontfamily', 'fontsize', '|',
                'directionalityltr', 'directionalityrtl', 'indent', '|',
                'justifyleft', 'justifycenter', 'justifyright', 'justifyjustify', '|', 'touppercase', 'tolowercase', '|',
                'link', 'unlink', 'anchor', '|', 'imagenone', 'imageleft', 'imageright', 'imagecenter', '|',
                'insertimage', 'emotion', 'scrawl', 'insertvideo', 'music', 'attachment', 'map', 'gmap', 'insertframe','insertcode', 'webapp', 'pagebreak', 'template', 'background', '|',
                'horizontal', 'date', 'time', 'spechars', 'snapscreen', 'wordimage', '|',
                'inserttable', 'deletetable', 'insertparagraphbeforetable', 'insertrow', 'deleterow', 'insertcol', 'deletecol', 'mergecells', 'mergeright', 'mergedown', 'splittocells', 'splittorows', 'splittocols', '|',
                'print', 'preview', 'searchreplace', 'help']
        ]
        //当鼠标放在工具栏上时显示的tooltip提示,留空支持自动多语言配置，否则以配置值为准
        ,labelMap:{
        'hougelou': 'hello,后阁楼'
        }

        });
        
         baidu.editor.commands['hougelou'] = { execCommand: function() { this.execCommand('insertHtml', "<img src='http://www.hougelou.com/images/logo.png' />"); return true; }, queryCommandState: function() { } };
    </script>


<div class="form-group">
		<div class="input-group">
			<div class="input-group-addon">编制</div>
			<input type="text" class="form-control" id="bzplaceholder="">
			<div class="input-group-addon">校对</div>
			<input type="text" class="form-control" id="jd" placeholder="">
				<div class="input-group-addon">审核</div>
			<input type="text" class="form-control" id="" placeholder="">
				<div class="input-group-addon">批准</div>
			<input type="text" class="form-control" id="pz" placeholder="">
		</div>
	</div>





</form>
	

	
底部
	</body>
</html>
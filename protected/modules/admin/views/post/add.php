<!-- 添加内容页 -->
<div class="admin-content">
  <!-- 标题  -->
  <div class="am-cf am-padding">
    <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">新增内容</strong></div>
  </div><!-- 标题  -->
  
  <!-- 表单 -->
  <div class="am-tabs am-margin" data-am-tabs>
  	<!-- 表单切换导航 -->
    <ul class="am-tabs-nav am-nav am-nav-tabs">
      <li class="am-active"><a href="#tab2">详细描述</a></li>
    </ul><!-- 表单切换导航 -->
    
    <!-- 表单面板 -->
    <div class="am-tabs-bd">
      <!-- 表单面板二 -->
      <div class="am-tab-panel am-fade am-in am-active" id="tab2">
        <form class="am-form" id="form_2" action="/admin/post/add" method="post">
          <div class="am-g am-margin-top">
            <div class="am-u-sm-4 am-u-md-2 am-text-right">文章标题</div>
            <div class="am-u-sm-8 am-u-md-4">
              <input type="text" class="am-input-sm" name="Post[title]">
            </div>
            <div class="am-hide-sm-only am-u-md-6"></div>
          </div>
          
          <div class="am-g am-margin-top">
	          <div class="am-u-sm-4 am-u-md-2 am-text-right">类别</div>
	          <div class="am-u-sm-8 am-u-md-10">
	            <div class="am-btn-group" data-am-button>
	            <?php foreach ($types as $key=>$item) {?>
	              <label class="am-btn am-btn-default am-btn-xs">
	                <input type="radio" name="Post[type_id]" value="<?php echo $item['id'];?>"> <?php echo $item['name'];?>
	              </label>
	             <?php }?>
	            </div>
	          </div>
	      </div>
          
          <div class="am-g am-margin-top">
            <div class="am-u-sm-4 am-u-md-2 am-text-right">文章作者</div>
            <div class="am-u-sm-8 am-u-md-4 am-u-end col-end">
              <input type="text" class="am-input-sm" name="Post[author]">
            </div>
          </div>
          <div class="am-g am-margin-top-sm">
            <div class="am-u-sm-12 am-u-md-2 am-text-right admin-form-text">内容描述</div>
            <div class="am-u-sm-12 am-u-md-10">
              <textarea id="editor_id" rows="10" placeholder="请使用富文本编辑插件" name="Post[content]"></textarea>
            </div>
          </div>
        </form>
      </div><!-- 表单面板二 -->
      
    </div><!-- 表单面板 -->
  </div><!-- 表单 -->
  
  <!-- 按钮 -->
  <div class="am-margin">
    <button type="button" class="am-btn am-btn-primary am-btn-xs" id="btn_save">提交保存</button>
    <button type="button" class="am-btn am-btn-primary am-btn-xs" id="btn_cancel">放弃保存</button>
  </div><!-- 按钮 -->
  
</div><!-- 添加内容页 -->
  

<script type="text/javascript">

window.onload = myfunc;

function myfunc(){
	$("#btn_save").on('click',function(){
			$("#form_2").submit();
		});
}

</script>

						
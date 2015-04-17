  <!-- content start -->
  <div class="admin-content">

    <div class="am-cf am-padding">
      <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">内容列表</strong></div>
    </div>

    <div class="am-g">
      <div class="am-u-sm-12">
        <form class="am-form">
          <table class="am-table am-table-striped am-table-hover table-main">
            <thead>
              <tr>
                <th class="table-id">ID</th>
                <th class="table-title">标题</th>
                <th class="table-type">类别</th>
                <th class="table-author am-hide-sm-only">作者</th>
                <th class="table-date am-hide-sm-only">修改日期</th>
                <th class="table-set">操作</th>
              </tr>
          </thead>
          <tbody>
            <?php foreach ($posts as $key=>$item) {?>
            <tr>
              <td><?php echo $item['id']; ?></td>
              <td><a href="/admin/post/view/id/<?php echo $item['id']; ?>"><?php echo $item['title']; ?></a></td>
              <td><?php echo $item['type']; ?></td>
              <td class="am-hide-sm-only"><?php echo $item['author']; ?></td>
              <td class="am-hide-sm-only"><?php echo date('Y-m-d H:i:s',$item['update_time']); ?></td>
              <td>
                <div class="am-btn-toolbar">
                  <div class="am-btn-group am-btn-group-xs">
                    <a class="am-btn am-btn-default am-btn-xs am-text-danger" href="/admin/post/del?id=<?php echo $item['id']; ?>"><span class="am-icon-trash-o"></span> 删除</a>
                  </div>
                </div>
              </td>
            </tr>
            <?php }?>
          </tbody>
        </table>
        </form>
      </div>
    </div>
  </div>
  <!-- content end -->
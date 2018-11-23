<?php
$this->title='分类列表';
$this->params['breadcrumbs']=[['label'=>'分类列表']];

?>
        <!-- Page Content -->

            <!-- Page Breadcrumb -->

            <!-- /Page Breadcrumb -->

            <!-- Page Body -->
            <div class="page-body">

                <button type="button" tooltip="添加分类" class="btn btn-sm btn-azure btn-addon" onClick="javascript:window.location.href = '<?php echo \yii\helpers\Url::to(['category/add']);?>'"> <i class="fa fa-plus"></i> 添加分类
                </button>
                <div class="row">
                    <div class="col-lg-12 col-sm-12 col-xs-12">
                        <div class="widget">
                            <div class="widget-body">
                                <div class="flip-scroll">
                                    <table class="table table-bordered table-hover">
                                        <thead class="">
                                        <tr>
                                            <th class="text-center">序号</th>
                                            <th class="text-center">分类类别</th>
                                            <th class="text-center">分类名称</th>
                                            <th class="text-center">创建时间</th>
                                            <th class="text-center">操作</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach($cates as $k=>$v):?>
                                        <tr>
                                            <td align="center"><?php echo $k+1;?></td>
                                            <td align="center"><?php echo $v['type']==1?'狗粮':'猫粮';?></td>
                                            <td><?php echo str_repeat('|---',$v['level']).$v['title'];?></td>
                                            <td align="center"><?php echo $v['create_time'];?></td>
                                            <td align="center">
                                                <a href="/admin/user/edit/id/6.html" class="btn btn-primary btn-sm shiny">
                                                    <i class="fa fa-edit"></i> 编辑
                                                </a>
                                                <a href="#" onClick="warning('确实要删除吗', '<?php echo \yii\helpers\Url::to(['category/delete','id'=>$v['id']]);?>')" class="btn btn-danger btn-sm shiny">
                                                    <i class="fa fa-trash-o"></i> 删除
                                                </a>
                                            </td>
                                        </tr>
                                        <?php endforeach;?>
                                        </tbody>
                                    </table>
                                </div>
                                <div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /Page Body -->

        <!-- /Page Content -->

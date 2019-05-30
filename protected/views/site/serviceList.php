<?php
/*
 *Author: hehao
 *Email:  mickeymousesysu@gmail.com
 *Date: 2014-01-01 
 *Function:
 *  
 */

switch($typeid) {
    case MisService::WEEK_SERVICE:
        $name = '周报表';
        break;
    case MisService::MONTH_SERVICE:
        $name = '月报表';
        break;
    case MisService::SURVEY_SERVICE:
        $name = '服务调查表';
        break;
    case MisService::STAT_SERVICE:
        $name = '服务统计表';
        break;
    case MisService::TABLE_SERVICE:
        $name = '表格下载';
        break;
    default:
        $name = '';
}

$this->pageTitle=Yii::app()->name . ' - '.$name;
$this->breadcrumbs=array(
            '服务列表',
            $name,
);        

$this->widget('bootstrap.widgets.TbGridView', array(
    'type'=>'striped bordered condensed',
    'id' => 'mis-service-grid',
    'dataProvider' => $model->search($typeid),
    'pager'=>array('class'=>'CLinkPager',
            'maxButtonCount'=>10,
            'header'=>'', 
            'firstPageLabel'=>'首页', 
            'lastPageLabel'=>'末页',
            'prevPageLabel'=>'上一页',
            'nextPageLabel'=>'下一页',
            ),
     'nullDisplay'=>' ',
     'template'=>"{summary}{items}{pager}",
     'summaryText'=>"第{start}-{end}条 | 共{count}条 | {page}/{pages}页",
     'filter'=>$model,
     'columns'=>array(
        array('name' => 'content', 'type' => 'raw', 'value' => '$data->content'),
        'date',
    ),
)); 
?>






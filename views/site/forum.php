<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use hscstudio\chart\ChartNew;
use kartik\social\Disqus;
$this->title = 'Forum Diskusi';

?>
<div class="site-index">

    <div class="body-content">


<?php // = $form->field($modelImport,'fileImport')->fileInput()->label('Import Excel') ?>
<div class="box box-success">
            <div class="box-header">
              <i class="fa fa-comments-o"></i>

              <h3 class="box-title">Forum Diskusi</h3>

              <div class="box-tools pull-right" data-toggle="tooltip" title="Status">
                <div class="btn-group" data-toggle="btn-toggle">
                  <button type="button" class="btn btn-default btn-sm active"><i class="fa fa-square text-green"></i>
                  </button>
                  <button type="button" class="btn btn-default btn-sm"><i class="fa fa-square text-red"></i></button>
                </div>
              </div>
            </div>
            <div class="box-body chat" id="chat-box">
			<?php 


echo Disqus::widget();




?>
            </div>
           
          </div>

</div>
</div>

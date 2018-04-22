<?php
use yii\helpers\Html;

/* @var $this \yii\web\View */
/* @var $content string */

?>

<header class="main-header">

    <?= Html::a('<span class="logo-mini"><img src="'.Yii::$app->request->baseUrl.'/cover/bps.png" width="42"></span><span class="logo-lg"><img src="'.Yii::$app->request->baseUrl.'/cover/bps.png" width="42">' . Yii::$app->name . '</span>', Yii::$app->homeUrl, ['class' => 'logo']) ?>

    <nav class="navbar navbar-static-top" role="navigation">

        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">

            <ul class="nav navbar-nav">

                <!-- Messages: style can be found in dropdown.less-->

                <!-- Tasks: style can be found in dropdown.less -->
              <!-- User Account: style can be found in dropdown.less -->

                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="<?= Yii::$app->request->baseUrl ?>/cover/user.png" class="user-image" alt="User Image"/>
                        <span class="hidden-xs"><?= $user=Yii::$app->user->identity->username?></span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            <img src="<?= Yii::$app->request->baseUrl ?>/cover/user.png" class="img-circle"
                                 alt="User Image"/>

                            <p class="text-capitalize">
                                <?= $user?> 
                                <small>Member since <?= date("d M Y",Yii::$app->user->identity->created_at)?></small>
                            </p>
                        </li>

                        <!-- Menu Footer-->
                        <li class="user-footer">
                            
							<div class="pull-left">
                                <?= Html::a(
                                    'Ganti Password',
                                    ['mimin/user/update', 'id' =>Yii::$app->user->identity->id],
                                    ['data-method' => 'post', 'class' => 'btn btn-default btn-flat']
                                ) ?>
                            </div>
							
                            <div class="pull-right">
                                <?= Html::a(
                                    'Sign out',
                                    ['/site/logout'],
                                    ['data-method' => 'post', 'class' => 'btn btn-default btn-flat']
                                ) ?>
                            </div>
                        </li>
                    </ul>
                </li>

                <!-- User Account: style can be found in dropdown.less -->
            </ul>
        </div>
    </nav>
</header>

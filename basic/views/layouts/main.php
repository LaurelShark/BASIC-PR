<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<? $user = $_SESSION['user'] ?>

<? if($user): ?>
    <?php
        $isAdmin = is_a($user, \app\models\Admin::className());
        $isMetodist = is_a($user, \app\models\Metodist::className());
        $isTeacher = is_a($user, \app\models\Teacher::className());
        $isStudent = is_a($user, \app\models\Student::className());

        if($isAdmin) {
            $cssFile = "a_style.css";

            $links = [
                [
                    'content' => 'My Dashboard',
                    'controller' => 'admincab/index'
                ],
                [
                    'content' => 'Metodists',
                    'controller' => 'metodist/index'
                ],
                [
                    'content' => 'Teachers',
                    'controller' => 'teacher/index'
                ],
                [
                    'content' => 'Students',
                    'controller' => 'student/index'
                ],
                [
                    'content' => 'Results',
                    'controller' => 'results/index'
                ],
                [
                    'content' => 'Department',
                    'controller' => 'department/index'
                ], 
                [
                    'content' => 'Faculty',
                    'controller' => 'faculty/index'
                ],
                [
                    'content' => 'University',
                    'controller' => 'university/index'
                ]

            ];
        } else if($isMetodist) {
            $cssFile = "m_style.css";

            $links = [
                [
                    'content' => 'My Dashboard',
                    'controller' => 'metodistcab/index'
                ],
                [
                    'content' => 'Metodists',
                    'controller' => 'metodist/index'
                ],
                [
                    'content' => 'Teachers',
                    'controller' => 'teacher/index'
                ],
                [
                    'content' => 'Students',
                    'controller' => 'student/index'
                ]
            ];
        } else if($isTeacher) {
            $cssFile = "t_style.css";

            $links = [
                [
                    'content' => 'My Dashboard',
                    'controller' => 'teachercab/index'
                ],
                [
                    'content' => 'Metodists',
                    'controller' => 'metodist/index'
                ],
                [
                    'content' => 'Teachers',
                    'controller' => 'teacher/index'
                ],
                [
                    'content' => 'Students',
                    'controller' => 'student/index'
                ]
            ];
        } else if($isStudent) {
            $cssFile = "s_style.css";

            $links = [
                [
                    'content' => 'My Dashboard',
                    'controller' => 'studentcab/index'
                ],
                [
                    'content' => 'Metodists',
                    'controller' => 'metodist/index'
                ],
                [
                    'content' => 'Teachers',
                    'controller' => 'teacher/index'
                ],
                [
                    'content' => 'Students',
                    'controller' => 'student/index'
                ]
            ];
        }
    ?>

    <link href="css/<?= $cssFile ?>" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <script src="http://cdn.ckeditor.com/4.6.1/standard/ckeditor.js"></script>

    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Ukraine, Kyiv</a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">

                    <? foreach($links as $link): ?>
                        <li
                            <? if($_GET['r'] == $link['controller']): ?>
                                class="active"
                            <? endif ?>
                            >
                                <a href="<?= \yii\helpers\Url::to([$link['controller']]) ?>">
                                    <?= $link['content'] ?>
                                </a>
                        </li>
                    <? endforeach ?>

                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">Welcome, <?= $user->getName() ?> </a></li>
                    <li><a href="<?= \yii\helpers\Url::to(['login/index']) ?>">Logout</a></li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </nav>

<? endif ?>


<?= $content ?>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

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
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <script src="http://cdn.ckeditor.com/4.6.1/standard/ckeditor.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" async src="https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.2/MathJax.js?config=TeX-MML-AM_CHTML">
    </script>
</head>
<body>
<?php $this->beginBody() ?>

<?php
if (!session_status() == PHP_SESSION_ACTIVE) {
    session_start();
}
$user = isset($_SESSION['user']) ? $_SESSION['user'] : false;
?>

<?php if($user): ?>
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
                ],
                [
                    'content' => 'Groups',
                    'controller' => 'group/index'
                ],
                [
                    'content' => 'Groups of Students',
                    'controller' => 'studentsgroup/index'
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
                ],
                [
                    'content' => 'Groups',
                    'controller' => 'group/index'
                ],
                [
                    'content' => 'Disciples',
                    'controller' => 'disciple/index'
                ],
                [
                    'content' => 'Plans',
                    'controller' => 'plan/index'
                ],
                [
                    'content' => 'Lections',
                    'controller' => 'lections/index'
                ],
                [
                    'content' => 'Tasks',
                    'controller' => 'tasks/index'
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
        } else if($isStudent) {
            $cssFile = "style.css";

            $links = [
                [
                    'content' => 'My Dashboard',
                    'controller' => 'studentcab/index'
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
                    'content' => 'Groups',
                    'controller' => 'group/index'
                ],
                [
                    'content' => 'Disciples',
                    'controller' => 'disciple/index'
                ],
                [
                    'content' => 'Plans',
                    'controller' => 'plan/index'
                ],
                [
                    'content' => 'Lections',
                    'controller' => 'lections/index'
                ],
                [
                    'content' => 'Tasks',
                    'controller' => 'tasks/index'
                ],
                [
                    'content' => 'Results',
                    'controller' => 'results/index'
                ],
                [
                    'content' => 'Specialities',
                    'controller' => 'speciality/index'
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
        }


        function renderItem($item) {
            $isActive = $_GET['r'] == $item['controller'];
            $activeClass = $isActive ? 'class="active"' : '';
            $url = \yii\helpers\Url::to([$item['controller']]);
            $content = $item['content'];
            return "<li $activeClass><a href='$url'>$content</a></li>";
        }
    ?>

    <link href="css/<?= $cssFile ?>" rel="stylesheet">


    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="http://mathpar.com"><img src="http://mathpar.com/img/logo.png" style="width: 60%; background: black; border-radius: 100px;"></a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">

                <ul class="nav navbar-nav">
                    <?= renderItem($links[0]) ?>
                    <div class="dropdown" style="display: inline-block; margin-left: 20px;">
                        <button id="crud-dropdown" class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Panels
                            <span class="caret"></span></button>
                        <ul class="dropdown-menu">
                            <?php foreach(array_slice($links, 1) as $link): ?>
                                <?= renderItem($link) ?>
                            <?php endforeach ?>
                        </ul>
                    </div>


                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">Welcome, <?= $user->getName() ?> </a></li>
                    <li><a href="<?= \yii\helpers\Url::to(['login/index']) ?>">Logout</a></li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </nav>

    <style>
        #crud-dropdown {
            border: 0;
            background: transparent;
        }
        .dropdown-menu li.active > a {
            opacity: 0.5;
        }
        .dropdown-menu {
            border-radius: 0;
        }
    </style>

<?php endif ?>


<?= $content ?>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

<?php
/**
 * Created by PhpStorm.
 * User: alosha
 * Date: 11/26/17
 * Time: 3:42 AM
 */
$this->title = $task['Name'];
?>

<form action="<?=\Yii::$app->request->url?>" method="POST">
    <div style="margin-left: 25px; margin-right: 25px">
        <h1><?= $task['Name'] ?></h1>

        <br>

        <? foreach($questions as $qi => $question): ?>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <?= $question['text'] ?>
                </div>
                <div class="panel-body">
                    <? $answers = json_decode($question['answers']) ?>
                    <? foreach($answers as $ai => $answer): ?>
                        <input type="radio" name="<?=$qi?>" value="<?=$ai?>"> <?= $answer ?> <br>
                <? endforeach; ?>
                </div>
            </div>
        <? endforeach; ?>

        <br>

        <input class="btn btn-default" type="submit" value="Submit">
        <input type="hidden" name="_csrf" value="<?=Yii::$app->request->getCsrfToken()?>" />
    </div>
</form>
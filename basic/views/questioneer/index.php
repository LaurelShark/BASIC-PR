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

        <?php foreach($questions as $qi => $question): ?>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <?= $question['text'] ?>
                </div>
                <div class="panel-body">
                    <div id="section_<?=$qi?>" class="section">
                        <div class="btn-toolbar">
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm run_section" tabindex="32767" title="Run this section (also Ctrl-Enter at source code)"><i class="glyphicon glyphicon-play"></i></button>
                                <button type="button" class="btn btn-sm toggle_latex" tabindex="32767" title="Toggle output mode Mathpar\LaTeX (also Ctrl-Alt-R at source code)"><i class="glyphicon glyphicon-random"></i></button>
                            </div>
                            <div class="btn-group pull-right">
<!--                                <button class="btn btn-sm clear_expr" tabindex="32767" title="Clear expressions (also Ctrl-Alt-C at source code)">C</button>-->
                            </div>
                        </div>
                        <textarea class="form-control" name="task" rows="5" style="overflow: hidden; word-wrap: break-word; resize: horizontal; height: 114px;"
                        ><?= $question['task_intro'] ?></textarea>
                        <input type="hidden" class="res_panel" value="" name="<?=$qi?>">
                        <div class="tex_panel" id="section_<?=$qi?>_tex">No result yet</div>
                        <div class="tex_original"></div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>

        <br>

        <script>
            MathJax.Hub.Config({
                tex2jax: {
                    inlineMath: [['$','$'], ['\\(','\\)']],
                    processEscapes: true
                }
            });

            $(".run_section").click(function(e) {
                console.log('kek')
                e.stopPropagation()
                var section = $(this).closest(".section")
                var task = section.find("textarea[name=task]").val()

                $.ajax({
                    type: "POST",
                    url: "<?=\yii\helpers\Url::to(["mathpar/call"])?>",
                    data: JSON.stringify({
                        "sectionId": 1,
                        "task": task
                    }),
                    success: function(data){
                        var response = JSON.parse(data)

                        console.log(response)

                        function removeEmptyLines(s) {
                            return s.split('\n').filter(function(x) { return x; }).join('\n')
                        }

                        var result = removeEmptyLines(response.result)
                        var latex = removeEmptyLines(response.latex)
                        var task = response.task

                        section.find(".res_panel").val(result)
                        section.find(".tex_panel").html(latex).show()
                        section.find(".tex_original").html(latex).hide()

                        MathJax.Hub.Queue(["Typeset",MathJax.Hub,section.find(".tex_panel").attr('id')]);

                        section.find("textarea").hide()
                    }
                });
            })

            $(".toggle_latex").click(function(e) {
                var section = $(this).closest(".section")
                var textarea = section.find("textarea[name=task]")

                if(textarea.css('display') == 'none') {
                    textarea.show()
                    section.find(".res_panel").hide()
                    section.find(".tex_panel").hide()
                    section.find(".tex_original").hide()
                } else {
                    textarea.hide()
                    section.find(".res_panel").show()
                    section.find(".tex_panel").show()
                    section.find(".tex_original").hide()
                }
            })

            $(".tex_panel").click(function() {
                var section = $(this).closest(".section")
                $(this).hide()
                section.find(".tex_original").show()
            })
        </script>

        <style>
            /*.tex_panel > span {*/
                /*display: block;*/
                /*margin-top: 8px;*/
            /*}*/

            .tex_panel,.tex_original {
                white-space: pre-wrap;
                border: 1px solid #aaa;
                border-radius: 5px;
                padding: 5px;
            }

            .tex_original {
                white-space: pre-wrap;
            }
        </style>

        <input class="btn btn-default" type="submit" value="Submit">
        <input type="hidden" name="_csrf" value="<?=Yii::$app->request->getCsrfToken()?>" />
    </div>
</form>
<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<?php $form = ActiveForm::begin(); ?>
<div id="first_page">
    <?= $form->field($model, 'title')->textInput(['maxlength' => 72])->label("Название вашего сайта:"); ?>

    <h3>Что нужно сделать: </h3>
    <input type="button" onclick="create()" value="Создать новый">
    <input type="button" onclick="update()" value="Обновить старый"><br><br>
    <div id="domain_block" style="display:none">
        <?= $form->field($model, 'domain')->textInput(['maxlength' => 72])->label("Доменное имя:"); ?>

        <?= $form->field($model, 'registr')->checkbox(["label" => 'Требуется зарегистрировать'])->label(false) ?>

        <?= $form->field($model, 'success')->checkbox(["label" => 'Уже зарегистрировано и доступно для управления'])->label(false) ?>
    </div>
    <div id="problem_block" style="display:none">
        <h3>Что не устраивает в существующем интернет-магазине?</h3>
        <?= $form->field($model, 'design')->checkbox(["label" => 'Дизайн'])->label(false) ?>
        <?= $form->field($model, 'admin')->checkbox(["label" => 'Админка'])->label(false) ?>
        <?= $form->field($model, 'speed')->checkbox(["label" => 'Быстродействие'])->label(false) ?>
        <?= $form->field($model, 'usability')->checkbox(["label" => 'Удобство для покупателей'])->label(false) ?>
        <?= $form->field($model, 'ranging')->checkbox(["label" => 'Позиция в Google'])->label(false) ?>
        <label><input type="checkbox" onchange="showElseProblem()" id="check_else"> Другое</label><br><br>
    </div>
    <?= $form->field($model, 'else_problem')->textarea(["placeholder" => "Напишите, что еще вы хотите изменить в своем интернет-магазине", "style" => "display:none"])->label(false) ?>

    <?= $form->field($model, 'name')->label('Ваше ФИО:') ?>
    <?= $form->field($model, 'email')->label('Ваш email:') ?>
    <?= $form->field($model, 'phone')->label('Ваш телефон:') ?>
    <input type="button" onclick="next()" class="btn btn-primary" value="Вперед →">
</div>
<div id="second_page" style="display:none">
    <h3>Аудитория</h3><br>
    <?= $form->field($model, 'sex')->textInput(["class" => "js-range-slider"])->label('Целевая аудитория вашего сайта:') ?>
    <?= $form->field($model, 'age')->textInput(["class" => "js-range-slider"])->label('Возраст:') ?>
    <h3>Социальная группа:</h3>
    <?= $form->field($model, 'middle')->checkbox(["label" => 'Средний класс'])->label(false) ?>
    <?= $form->field($model, 'top')->checkbox(["label" => 'Топ-менеджеры, директора и собственники'])->label(false) ?>
    <label><input type="checkbox" id="check_class" onchange="showElseClass()"> Другое</label>
    <br><br>
    <?= $form->field($model, 'else_class')->textarea(["placeholder" => "Опишите наиболее типичных посетителей вашего сайта", "style" => "display:none"])->label(false) ?>
    <?= $form->field($model, 'locations')->textarea()->label("География аудитории (города, области, страны):") ?>
    <div class="form-group">
        <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary']) ?>
    </div>
</div>
<?php ActiveForm::end(); ?>
<!--jQuery-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>-->

<!--Plugin JavaScript file-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.0/js/ion.rangeSlider.min.js"></script>
<script>
    $(".js-range-slider").ionRangeSlider({
        type: "double",
        min: 0,
        max: 100,
        from: 0,
        to: 100,
        grid: true
    });
function next(){
    $("#first_page").css("display", "none");
    $("#second_page").css("display", "block");
}

function create(){
    $("#domain_block").css("display", "block");
    $("#problem_block").css("display", "none");
}
function update(){
    $("#domain_block").css("display", "block");
    $("#problem_block").css("display", "block");
}
function showElseProblem(){
    if($("#check_else").is(':checked')) {
        $("#entryform-else_problem").css("display", "block");
    } else {
        $("#entryform-else_problem").css("display", "none");
    }
}
function showElseClass(){
    if($("#check_class").is(':checked')) {
        $("#entryform-else_class").css("display", "block");
    } else {
        $("#entryform-else_class").css("display", "none");
    }
}

</script>
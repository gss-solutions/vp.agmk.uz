<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\captcha\Captcha;

/* @var $this yii\web\View */
/* @var $model common\models\Treatment */
/* @var $form yii\widgets\ActiveForm */

?>

<section class="treatment">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-push-6 col-xs-12">
                <div class="treatment-form">
                    <?php $form = ActiveForm::begin(); ?>
                    <?php echo $form->errorSummary($model); ?>
                        <fieldset class="treatment-form-fieldset">
                            <legend class="treatment-form-title" align="center"><h1>Отправить обращение</h1></legend>

                            <?= $form->field($model, 'fio')->textInput(['maxlength' => true, 'class' => 'input form-control', "aria-invalid" => "true"])->
                                label('Ф.И.О<span class="star">*</span>', ['class' => 'input-title input-title-first']); ?>

                            <?= $form->field($model, 'address')->textInput(['maxlength' => true, 'class' => 'input form-control'])->
                            label('Адрес<span class="star">*</span>', ['class' => 'input-title']); ?>

                            <?= $form->field($model, 'email')->textInput(['maxlength' => true, 'class' => 'input form-control'])->
                            label('Электронная почта<span class="star">*</span>', ['class' => 'input-title']); ?>

                            <?= $form->field($model, 'phone')->textInput(['maxlength' => true, 'class' => 'input form-control'])->
                            label('Телефон<span class="star">*</span>', ['class' => 'input-title']); ?>

                            <?= $form->field($model, 'sex')->dropDownList(array('0'=>'Выберите пол', '1'=>'Мужской','2'=>'Женский'),
                                ['options' => ['0' => ['selected'=>true]], 'class' => 'select'])->
                            label('Пол<span class="star">*</span>', ['class' => 'input-title']); ?>

                            <?= $form->field($model, 'birthday')->textInput(['class' => 'input form-control'])->
                            label('Год рождения<span class="star">*</span>', ['class' => 'input-title']); ?>

                            <?= $form->field($model, 'status_person')->dropDownList(array('0'=>'Выберите статус', '1'=>'Занят-работает','2'=>'Безработный','3'=>'Пенсионер','4'=>'Студент'),
                                ['options' => ['0' => ['selected'=>true]], 'class' => 'select'])->
                            label('Статус<span class="star">*</span>', ['class' => 'input-title']); ?>

                            <?= $form->field($model, 'businessman')->checkbox(['label' => false, 'class' => 'input-checked'])->
                            label('Предприниматель', ['class' => 'input-checked-title']);  ?>

                            <?= $form->field($model, 'businessman_type')->textInput(['maxlength' => true, 'class' => 'input form-control hidden'])->
                            label('Наименование субъекта предпринимательства', ['id' => 'treatment-businessman_type_label', 'class' => 'input-title hidden']); ?>

                            <?= $form->field($model, 'text')->textarea(['rows' => '10'])->
                            label('Текст обращения', ['class' => 'input-title']); ?>

                            <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                                'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                            ])->label('Введите проверочный код с картинки<span class="star">*</span>', ['class' => 'input-title']) ?>


                            <div class="form-button">
                                <input type="submit" value="Отправить обращение" class="button">
                            </div>
                        </fieldset>
                    <?php ActiveForm::end(); ?>
                </div>
            </div>
            <div class="col-md-6 col-md-pull-6 col-xs-12 col-sm-12">
                <div class="treatment-form treatment-form-status">
                    <form action="#">
                        <fieldset class="treatment-form-fieldset">
                            <legend class="treatment-form-title" align="center"><h1>Проверить статус обращения</h1></legend>

                            <label for="status" class="input-title input-title-first">Код проверки состояния<span class="star">*</span></label>
                            <input id="status" type="text" class="input input-red" >

                            <div class="form-button">
                                <input type="button" value="Проверить" class="button">
                            </div>
                        </fieldset>
                    </form>
                </div>
                <div class="treatment-text">
                    <h1>Публичная оферта</h1>
                    <p>Уважаемые пользователи!</p>

                    <p>Вам предоставляется возможность отправки обращений в электронной форме непосредственно Генеральному Директору АО "Алмалыкский ГМК".
                        При этом направляемое Вами обращение является официальным.</p>

                    <p>В связи с этим, просим Вас не забывать следующее:</p>

                    <p>1. Если Вы обращаетесь как физическое лицо, то Вам необходимо указать фамилию имя, отчество, сведения о месте жительства и изложить суть обращения. В обращении юридического лица следует указать его полное наименование, местонахождение (почтовый адрес) и изложить суть обращения.</p>

                    <p>2. Обратите внимание! Запрещается подача обращений, содержащих клевету, оскорбления и ложные доносы.</p>

                    <p>3. Также хотим напомнить, что Вам могут отказать в рассмотрении обращения на следующих основаниях:</p>

                    <p>• в случае некорректности содержания обращения (употребление нецензурных, либо оскорбительных выражений, наличие угроз, предложений, лишенных логики и смысла и т.д.);</p>

                    <p>• если текст обращения содержит непонятные сокращения или рекламные материалы, в нем нет конкретных заявлений, жалоб или предложений.</p>

                    <p>4. Также, не рассматривается обращение одного и того же пользователя, содержащее вопрос, на который многократно предоставлялся ответ, за исключением случаев, когда в обращении приведены новые доводы или указано на новые обстоятельства.</p>

                    <p>Данные требования установлены исходя из действующего законодательства Республики Узбекистан.</p>
                </div>

            </div>

        </div>
    </div>
</section>

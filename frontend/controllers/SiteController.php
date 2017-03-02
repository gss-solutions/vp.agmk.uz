<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use frontend\models\ContactForm;
use common\models\Treatment;
use yii\filters\VerbFilter;


/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Creates a new Treatment model.
     * If creation is successful, the browser will be redirected to the 'index' page.
     * @return mixed
     */
    public function actionIndex()
    {
        $model = new Treatment();

        $model = $this->makeTreatment($model);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            Yii::$app->session->setFlash('success', 'Спасибо за Ваше обращение. Оно будет расмотренно в ближайшее время.
                Дополнительная информация отправлена на email указынный в обращении.');
            return $this->refresh();
        } else {
            return $this->render('index', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Displays contact page.
     *
     * @return mixed
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail(Yii::$app->params['adminEmail'])) {
                Yii::$app->session->setFlash('success', 'Thank you for contacting us. We will respond to you as soon as possible.');
            } else {
                Yii::$app->session->setFlash('error', 'There was an error sending your message.');
            }

            return $this->refresh();
        } else {
            return $this->render('contact', [
                'model' => $model,
            ]);
        }
    }

    private function makeTreatment(Treatment $treatment)
    {
        $treatment->status_treatment = $treatment::STATUS_TREATMENT['1'];
        $treatment->created_at = date('U');
        $treatment->code = $this->getCode();
        $treatment->file = '';
        $treatment->ip = Yii::$app->request->userIP;
        $treatment->updated_at = date('U');

        return $treatment;
    }

    private function getCode($length = 8){
        $code = $this->generateCode();
        $treatment_code = Treatment::findOne(['code' => $code]);
        while(isset($treatment_code))
            $code = $this->generateCode();
        return $code;
    }

    private function generateCode($length = 8){
        $chars = 'abdefhiknrstyzABDEFGHKNQRSTYZ23456789';
        $numChars = strlen($chars);
        $string = '';
        for ($i = 0; $i < $length; $i++) {
            $string .= substr($chars, rand(1, $numChars) - 1, 1);
        }
        return $string;
    }
}

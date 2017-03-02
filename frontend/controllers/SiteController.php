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
     * Displays homepage.
     *
     * @return mixed
     */
    /*public function actionIndex()
    {
        return $this->render('index');
    }*/


    /**
     * Creates a new Treatment model.
     * If creation is successful, the browser will be redirected to the 'view' page.
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
            //return $this->redirect(['view', 'id' => $model->id]);
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
        $treatment->status_treatment = '1';
        $treatment->created_at = '1111';
        $treatment->code = '222';
        $treatment->file = 'dsfdsf';
        $treatment->ip = '192.168.0.131';
        $treatment->updated_at = '1111';

        return $treatment;
    }

    private function makeCustomer(CustomerRecord $customer_record, PhoneRecord $phone_record)
    {
        $name = $customer_record->name;
        $birth_date = new \DateTime($customer_record->birth_date);

        $customer = new Customer($name, $birth_date);
        $customer->notes = $customer_record->notes;
        $customer->phones[] = new Phone($phone_record->number);

        return $customer;
    }
}

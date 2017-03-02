<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;


/**
 * This is the model class for table "treatment".
 *
 * @property integer $id
 * @property string $fio
 * @property string $address
 * @property string $email
 * @property string $phone
 * @property integer $sex
 * @property integer $birthday
 * @property string $status_person
 * @property string $status_treatment
 * @property integer $businessman
 * @property string $businessman_type
 * @property string $text
 * @property string $file
 * @property string $answer
 * @property string $code
 * @property integer $created_at
 * @property integer $updated_at
 * @property string $ip
 */
class Treatment extends \yii\db\ActiveRecord
{
    public $verifyCode;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'treatment';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fio', 'address', 'email', 'phone', 'sex', 'birthday', 'status_person', 'status_treatment', 'code', 'created_at', 'updated_at'], 'required'],
            [['sex', 'businessman'], 'integer'],
            ['sex', 'in', 'range' => [ 1, 2 ], 'message' => 'Выберите «Пол».'],
            ['status_person', 'in', 'range' => [ 1,2,3,4 ], 'message' => 'Выберите «Статус».'],
            ['email', 'email', 'message' => 'Значение поля «Электронная почта» не является коректным email адресом.'],
            ['birthday', 'match', 'pattern' => '/^[1-2][0-9][0-9][0-9]$/i', 'message' => 'Укажите только год рождения, без даты. Например: 1972'],
            ['birthday', 'integer', 'message' => 'Укажите только год рождения, без даты. Например: 1972'],
            [['fio', 'address', 'email', 'phone', 'businessman_type'], 'string', 'max' => 255],
            [['status_person', 'status_treatment', 'file', 'code'], 'string', 'max' => 32],
            [['ip'], 'string', 'max' => 15],
            [['ip'], 'ip'],
            [['text'], 'safe'],
            [['answer'], 'safe'],
            ['verifyCode', 'captcha'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'fio' => 'Ф.И.О.',
            'address' => 'Адрес',
            'email' => 'Электронная почта',
            'phone' => 'Телефон',
            'sex' => 'Пол',
            'birthday' => 'Год рождения',
            'status_person' => 'Статус',
            'status_treatment' => 'Status Treatment',
            'businessman' => 'Предприниматель',
            'businessman_type' => 'Businessman Type',
            'text' => 'Текст обращения',
            'file' => 'Файл',
            'answer' => 'Ответ',
            'code' => 'Code',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'ip' => 'Ip',
            'verifyCode' => 'Введите проверочный код с картинки',
        ];
    }


    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Treatment::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'sex' => $this->sex,
            'birthday' => $this->birthday,
            'businessman' => $this->businessman,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'fio', $this->fio])
            ->andFilterWhere(['like', 'address', $this->address])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'phone', $this->phone])
            ->andFilterWhere(['like', 'status_person', $this->status_person])
            ->andFilterWhere(['like', 'status_treatment', $this->status_treatment])
            ->andFilterWhere(['like', 'businessman_type', $this->businessman_type])
            ->andFilterWhere(['like', 'text', $this->text])
            ->andFilterWhere(['like', 'file', $this->file])
            ->andFilterWhere(['like', 'answer', $this->answer])
            ->andFilterWhere(['like', 'code', $this->code])
            ->andFilterWhere(['like', 'ip', $this->ip]);

        return $dataProvider;
    }
}

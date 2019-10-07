<?php
namespace app\controllers;

use yii\rest\ActiveController;
use app\models\Customers;

class CustomersController extends ActiveController
{
    
    public $modelClass = 'app\models\Customers';
    
    public function actionCreateCustomers()
    {
        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        $customers = new Customers();
        $customers->scenario = Customers::SCENARIO_CREATE;
        $customers->attributes = \yii::$app->request->post();
        if($customers->validate())
        {
            $customers->save();
            return array('status' => true, 'data'=> 'successfully');
        }
        else
        {
            return array('status'=>false,'data'=>$customers->getErrors());    
        }
    }

    public function actionGetCustomers()
    {
        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        $customers = Customers::find()->all();
        if(count($customers) > 0 )
        {
            return array('status' => true, 'data'=> $customers);
        }
        else
        {
            return array('status'=>false,'data'=> 'No customers Found');
        }
    }

    public function actionUpdateCustomers()
    {
        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;     
        $attributes = \yii::$app->request->post();
        
        $customers = Customers::find()->where(['id' => $attributes['id'] ])->one();
        if(count($customers) > 0 )
        {
            $customers->attributes = \yii::$app->request->post();
            $customers->save();
            return array('status' => true, 'data'=> 'updated successfully');
        }
        else
        {
           return array('status'=>false,'data'=> 'No customers Found');
        }
   }


}
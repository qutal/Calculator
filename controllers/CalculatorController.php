<?php


namespace app\controllers;


use app\models\CalcaForm;
use app\models\PageForm;
use app\models\Table;
use Yii;
use yii\web\Controller;

class CalculatorController extends Controller
{

   public function actionShow(){
       $res=Table::find()->asArray()->all();
       return $this->render('show',['res'=>$res]);
   }

    public function actionIndex(){
        $model=new PageForm();
        $table=new Table();

        if($model->load(Yii::$app->request->post()) && $model->validate()){

            if(Yii::$app->request->post('submit')==='done'){
                $c1=$model->firstCount;
                $c2=$model->secondCount;
                $s=$model->sign;
                $table->sign=$s;
                $table->first_count=$c1;
                $table->second_count=$c2;
                switch ($s){
                    case '+':$table->res=$c1+$c2;break;
                    case '-':$table->res=$c1-$c2;break;
                    case '/':
                        if($c2==0){
                            $table->res = 'Деление на 0';
                            break;
                        }else {
                            $table->res = $c1 / $c2;
                            break;
                        }
                    case '*':$table->res=$c1*$c2;break;
                }
                $res=$table->res;
                $table->save();
                Yii::$app->session->setFlash('res','Первое число:'.$c1.', второе число:'.$c2.', знак:'.$s.', ответ:'.$res);
                return $this->render('index',['model'=>$model]);
            }
        }else{
            return $this->render('index',['model'=>$model,'ready'=>false]);
        }
    }
}
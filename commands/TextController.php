<?php 
namespace app\commands;

use yii\console\Controller;

class TextController extends Controller
{    
    public function actionIndex()
    {
        echo "Konzolna app \n";
    }

    public function actionNext()
    {
        echo "Druga akcija \n";
    }

    public function actionHello($name)
    {
        echo "Hi .. " . $name . "\n";
    }
}
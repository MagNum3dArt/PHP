<?php

namespace app\controllers;

use app\models\User;
use Yii;
use \yii\web\Controller;

class UserController extends Controller
{
    public function actionLogin()
    {
        return $this->render('login');
    }

    public function actionRegister()
    {
        $user = new User();

        if ($user->load(Yii::$app->request->post())) {
            if ($user->validate()) {

                //Save Base
                $user->save();

                //send Message
                Yii::$app->getSession()->setFlash('success', 'You are now registered and can log in');

                //Redirect
                //return $this->redirect('index.php?r=job');
                return $this->goHome();
            }
        }

        return $this->render('register', [
            'user' => $user,
        ]);
    }

}

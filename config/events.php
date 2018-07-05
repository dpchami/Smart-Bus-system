<?php 
use Da\User\Controller\SecurityController;
use Da\User\Event\UserEvent;
use yii\base\Event;

Event::on(SecurityController::class, FormEvent::EVENT_AFTER_LOGIN, function (FormEvent $event) {
    $identity = $event->identity;
     //               var_dump($identity); die();

}

 ?>
<?php
$errorString="";
     if(isset($_POST['send'])){
         //forma zapolnena, proverka!
         $name=$_POST['name'];
         
         if(trim($name)==""){
             $errorString.='<br>Не введено имя при вводе';
         }
$email= filter_input(INPUT_POST, 'email',FILTER_VALIDATE_EMAIL);
         if(!$email){
            $errorString.='<br>Эмайл не валидный';
         }
         
         $message=$_POST['message'];
         if(trim($message)==""){
             $errorString.='<br>Пишите ваш коментарий';
         }
         //------------------------------------------------
         if($errorString==""){
             $myemail='info@firma.ee';//mail kuda otpravlyaetsa soobwenie
             $subject='Message from company site';
             $comments="Здравствуйте!
               Teie kontakt andmed
               Name: $name
               E-mail: $email
               Teie message: $message
               End message";
             mail($myemail,$subject,$comments);
             //redirect
            header('location: contact?message=send');
         }else{
             
             //error
             header('location: contact?message='.$rerrorString);            
         }
         
         
         
     }else{//no send
         header('location: contact?message=Форма не заполнена!');
     }


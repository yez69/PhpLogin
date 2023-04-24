<?php
   include_once "./RootClasses/Controller.php";
   include_once "./ViewModels/LoginViewModel.php";

   class LoginViewModel extends Controller{
      public function Login(){
         $loginVM = new LoginViewModel();
         parent::ToViewWVM("./Views/" + __FUNCTION__, $loginVM);
      }
   }

   $LoginViewModel = new $LoginViewModel();


<?php
   class Controller{
      protected function ToView(string $viewPath){
         header("location: $viewPath");
      }
      protected function ToViewWVM(string $viewPath, object $viewModel){
         $viewModelSerialized = serialize($viewModel);
         echo <<< END
            <form action="$viewPath" method="post">
               <input type="hidden" value="$viewModelSerialized">
               <button type="submit" id="submit"></button>
            </form>
            <script>
               document.getElementById("submit").click();
            </script>
         END;
      }
   }

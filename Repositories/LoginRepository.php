<?php

   class LoginRepository{
      private static function getDBCon() : mysqli{
         return new mysqli("localhost", "root", "", "loginSystem");
      }
      public static function getUsersByeEmail(string $email) : array{
         $conn = LoginRepository::getDBCon();

         $stmt = $conn->prepare("select * from users where email = '?';");
         $stmt->bind_param("s", $email);
         $stmt->execute();
         $result = $stmt->get_result();
         $users = $result->fetch_all(MYSQLI_ASSOC);

         $conn->close();

         return $users;
      }
   }
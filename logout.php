<?php
session_start( );

//destroy all sessions
if (session_destroy( )) {
  //redirect to main of home page.
   header("Location: 네비게이터.php");
   }
?>
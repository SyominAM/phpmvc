<?php
  class PagesController {
    public function home() {
      $start = 'ZZZ';
      require_once('views/pages/home.php');
    }

    public function error() {
      require_once('views/pages/error.php');
    }
  }
?>
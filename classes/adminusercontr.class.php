<?php
  class AdminUserContr extends AdminUser {
    public function createAdmin($name,$password) {
      $this->setAdmin($name,$password);
    }
  }

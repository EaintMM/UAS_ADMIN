<?php
  class ApplicantsContr extends Applicants {
    public function createApplicant($title,$ename,$mmname,$gender) {
      $this->setApplicant($title,$ename,$mmname,$gender);
    }
  }

<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
      // $this->sendEmail();
        return view('Home/index');
    }

    private function sendEmail()
    {
      $email = \Config\Services::email();

      $email->setTo("tixixem518@fincainc.com");
      $email->setSubject("Test Email");
      $email->setMessage("Hello from <i>CodeIgniter App</i>");

      if ($email->send()) {
        echo "Email sent";
      } else {
        echo "Email not sent";
      }
    }
}

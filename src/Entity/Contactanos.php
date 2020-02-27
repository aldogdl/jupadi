<?php

namespace App\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Captcha\Bundle\CaptchaBundle\Validator\Constraints as CaptchaAssert;

class Contactanos
{

  /**
  * @Assert\NotBlank(message="El Email es necesario.")
  * @Assert\Email(message="El Email no es valido.")
  */
  private $email;

  /**
  * @Assert\NotBlank(message="El Email es necesario.")
  */
  private $comentario;

  /**
   * @CaptchaAssert\ValidCaptcha(message = "CAPTCHA validation failed, try again.")
   */
  protected $captchaCode;


  public function getEmail()
  {
    return $this->email;
  }

  public function setEmail($email)
  {
    $this->email = $email;
  }

  public function getComentario()
  {
    return $this->comentario;
  }

  public function setComentario($comentario)
  {
    $this->comentario = $comentario;
  }

  public function getCaptchaCode()
  {
    return $this->captchaCode;
  }

  public function setCaptchaCode($captchaCode)
  {
    $this->captchaCode = $captchaCode;
  }
}

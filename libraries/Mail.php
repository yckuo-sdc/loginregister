<?php
use PHPMailer\PHPMailer;

class Mail extends PHPMailer\PHPMailer {
    public $Host     = 'smtp.tainan.gov.tw';
    public $Mailer   = 'smtp';
    public $SMTPAuth = true;
    public $Username = '';
    public $Password = '';
    public $WordWrap = 75;
	public $Port = 25;
	public $SMTPAutoTLS = false;
	public $SMTPSecure = false;

    public function __construct($Username, $Password){
        $this->Username = $Username;
        $this->Password = $Password;
    }

    public function subject($subject) {
        $this->Subject = $subject;
    }

    public function body($body) {
        $this->Body = $body;
    }

    public function send() {
        $this->AltBody = strip_tags(stripslashes($this->Body))."\n\n";
        $this->AltBody = str_replace(" ", "\n\n", $this->AltBody);
        return parent::send();
    }
}


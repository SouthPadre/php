<?php

namespace Users;

class User
{
	public $fIO;
	public $email;
	public $sex;
	public $age;
	public $phone;

	public function __construct($fIO, $email, $sex = null, $age = null, $phone = null)
	{
		$this->fIO = $fIO;
		$this->email = $email;
		$this->sex = $sex ?? null;
		$this->age = $age ?? null; 
		$this->phone = $phone ?? null; 
	}

	private function notifyOnEmail($message) 
	{
		$this->send("email ($this->email)", $message);
	}

	private function notifyOnPhone($message)
	{
		$this->send("phone ($this->phone)", $message);
	}

	public function notify($message)
	{
		$this->censor($message);
		$this->notifyOnEmail($message);
		if ($this->phone) {
			$this->notifyOnPhone($message);
		}
	}

	private function censor(&$message)
	{
		 if ($this->age < 18) {
		 	$message = str_replace('fuck', '****', $message);
		}
	}

	private function send($device, $message)
	{
		echo "<p>Уведомление клиенту: $this->fIO на $device : $message</p>";
	}
}

// $user1 = new User('Jonas', 'jonas@mail.ru');
// $user1->notify("hello my fuckolin fuck skcdfuck");
// $user1 = new User('Smith', 'jonas@mail.ru', 'male', 17);
// $user1->notify("fuck");
// $user1 = new User('Hantz', 'jonas@mail.ru', 'male', 20);
// $user1->notify("hello");
// $user1 = new User('Henry', 'jonas@mail.ru', 'male', 20, '79280303233');
// $user1->notify("Bye-Bye fuck boy");

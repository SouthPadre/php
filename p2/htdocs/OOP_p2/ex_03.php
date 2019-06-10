<?php
namespace Plane;
class BlackBox
{
	private $data = [];

	public function addLog($message)
	{
		$this->data[] = $message;
	}

	public function getDataByEngineer(Engineer $enginer)
	{
		return $this->data;
	}
}

class Plane
{
	protected $blackBox;

	public function __construct()
	{
		$this->blackBox = new BlackBox;
	}

	public function flyAndCrush()
	{
		$this->flyProcess();
		$this->crushProcess();
	}

	protected function flyProcess()
	{
		$this->addLog('Полет нормальный ');
	}

	private function crushProcess()
	{
		$this->addLog('Отказал двигатель, самолет падает ');
	}

	protected function addLog($message)
	{
		$this->blackBox->addLog($message . date('m/d/Y h:i:s a'));
	}

	public function getBoxForEngineers(Engineer $engineer)
	{
		$engineer->setBox($this->blackBox);
	}
}

class Engineer
{
	private $blackBox;

	public function setBox(BlackBox $blackBox)
	{
		$this->blackBox = $blackBox;
	}

	public function takeBox(Plane $plane)
	{
		$plane->getBoxForEngineers($this);	
	}

	public function decodeBox()
	{
		foreach ($this->blackBox->getDataByEngineer($this) as $log) {
			echo "<p>$log</p>";
		}
	}
}

$fly = new Plane;
$fly->flyAndCrush();
$engineer = new Engineer;
$engineer->takeBox($fly);
$engineer->decodeBox();

class NewPlane extends Plane
{
	protected function flyProcess()
	{
		$this->addLog('ПОЛЕТААААЕМ ');
	}
}

$fly = new NewPlane;
$fly->flyAndCrush();
$engineer->takeBox($fly);
$engineer->decodeBox();







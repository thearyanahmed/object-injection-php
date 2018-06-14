<?php 

class App 
{
	public $log = 'DailyLog.txt';
	public $logData = 'Some Log Data';

	public function aRandomRegularTask()
	{
		echo "[+] The task was completed successfuly !  <br>";
		$this->logData = 'Done Successfully!';
	}

	public function __destruct()
	{
		file_put_contents(__DIR__ . '/' . $this->log, $this->logData);
		echo "[+] Logs written to log file!<br>[+] Object terminated!<br>";
	}
}

$userInput = @$_GET['data'] ?: '';
$data = unserialize($userInput);

$app = new App;
$app->aRandomRegularTask();

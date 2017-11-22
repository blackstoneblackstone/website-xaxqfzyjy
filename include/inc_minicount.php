<?php
/******************************************************
//本类的用途是用于实现简单的网站访问统计
//最后修改日期 2008-11-11 By dedecms 用户 老李
******************************************************/
class minicount
{
	var $dataPth;

	function __construct($dataPth = "minidata/")
	{
		$this->dataPath = $dataPth;
	}

	//解决PHP4不支持__construct问题
	function minicount($dataPth = "minidata/")
	{
		$this->dataPath = $dataPth;
	}

	function diplay($format="a%t%y%m%l%"){
		//echo $format;

		$this->updateCount($this->dataPath.$this->getMainFileName());		//更新总流量
		$this->updateCount($this->dataPath.$this->getTodayFileName());		//更新今天流量
		$this->updateCount($this->dataPath.$this->getMonthFileName());		//更新今月流量

		$search = array("'a%'i",
			"'t%'i",
			"'y%'i",
			"'m%'i",
			"'l%'i",
		);

		$replace = array($this->getCount($this->dataPath.$this->getMainFileName()),
			$this->getCount($this->dataPath.$this->getTodayFileName()),
			$this->getCount($this->dataPath.$this->getYesterdayFileName()),
			$this->getCount($this->dataPath.$this->getMonthFileName()),
			$this->getCount($this->dataPath.$this->getLastMonthFileName())
		);

		echo preg_replace ($search, $replace, $format);
	}

	function updateCount($f)
	{
		//echo $this->dataPath;
		$handle = fopen($f, "a+") or die("找不到文件");
		$counter = fgets($handle,1024);
		$counter = intval($counter);
		$counter++;
		fclose($handle);

		//写入统计
		$handle = fopen($f, "w") or die("打不开文件");
		fputs($handle,$counter) or die("写入失败");
		fclose($handle);
	}

	function getCount($f)
	{
		$handle = fopen($f, "a+") or die("找不到文件");
		$counter = fgets($handle,1024);
		$counter = intval($counter);
		fclose($handle);
		return $counter;
	}

	function getMainFileName()
	{
		return "counter.txt";
	}

	function getYesterdayFileName()
	{
		return "day/".date("Ymd",strtotime('-1 day')).".txt";
	}

	function getTodayFileName()
	{
		return "day/".date("Ymd").".txt";
	}

	function getMonthFileName()
	{
		return "month/".date("Ym").".txt";
	}

	function getLastMonthFileName()
	{
		return "month/".date("Ym",strtotime('-1 month')).".txt";
	}
}
?>
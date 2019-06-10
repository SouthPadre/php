<?php
namespace Interfaces;

interface Reader
{
	public function read() :array;
}

interface Writer
{
	public function write(array $data);
}

interface Converter
{
	public function convert($item);
}

class FileReader implements Reader
{
	public $filename;

	public function __construct($filename)
	{
		$this->filename = $filename;
	}

	public function read():array
	{
		return explode("\n", file_get_contents($this->filename));
	}
}

class FileWriter implements Writer
{
	public $filename;

	public function __construct($filename)
	{
		$this->filename = $filename;
	}

	public function write(array $data)
	{
		$str = implode(' ', $data);
		file_put_contents($this->filename, $str);
	}
}

class PolinomCrc32Converter implements Converter
{
	public function convert($item)
	{
		return crc32($item);
	}
}

class ReverseConverter implements Converter
{
	public function convert($item)
	{
		return strrev($item);
	}
}
	
class Import
{
	public $reader;
	public $writer;
	public $converters = [];

	public function from(Reader $reader)
	{
		$this->reader = $reader;
		return $this;
	}

	public function to(Writer $writer)
	{
		$this->writer = $writer;
		return $this;
	}

	public function with(Converter $converter)
	{
		$this->converters[] = $converter;
		return $this;
	}

	public function execute()
	{
		foreach ($this->reader->read() as $element){
			foreach ($this->converters as $converter) {
				$element = $converter->convert($element);
			}
			$data[] = $element;
		}
		$this->writer->write($data);
	}
}

$import1 = new Import();
$import1->from(new FileReader('asdf'));
$import1->to(new FileWriter('qwert'));
// $import1->with(new PolinomCrc32Converter);
$import1->with(new ReverseConverter);
$import1->execute();

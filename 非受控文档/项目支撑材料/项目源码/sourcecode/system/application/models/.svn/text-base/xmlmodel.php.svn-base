<?php
/*
 * XML工厂
 */
class Xmlmodel extends Model{
	
	function Xmlmodel(){
		parent::Model();
	}
	
	function xmlFactoryElement($flag,$message){
		$output = "<?xml version=\"1.0\" encoding=\"UTF-8\" ?>
					<return>
						<flag>".$flag."</flag>
						<message>".$message."</message>";
		return $output;
	}
	
	function xmlFactoryMaker($array,$name){
		$output = "<".$name.">";
		foreach($array as $keyName => $value){
			$output .= "<".$keyName.">".$value."</".$keyName.">";
		}
		$output .="</".$name.">";
		return $output;
	}
	
	function xmlFactoryEndElement($output){
		$output .="</return>";
		return $output;
	}
	
	function xmlError(){
		$output =  $this->xmlFactoryElement('0','无法获取您所需数据');
		$output = $this->xmlFactoryEndElement($output);
		return $output;
	}
	
	function xmlFactoryFront($frontElement){
		return "<".$frontElement.">";
	}
	
	function xmlFactoryEnd($endElement){
		return "</".$endElement.">";
	}
	
	function returnXmlFactory($flag,$message){
		$output = $this->xmlFactoryElement($flag,$message);
		$output = $this->xmlFactoryEndElement($output);
		return $output;
	}
} //end Xmlmodel
<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pbcoparse
{
	function Pbcoparse()
	{		
	}
	
	private function xmlFactoryElement($flag,$message){
		$output = "<?xml version=\"1.0\" encoding=\"UTF-8\" ?>
					<return>
						<flag>".$flag."</flag>
						<message>".$message."</message>";
		return $output;
	}
	
	private function returnXmlFactory($flag,$message){
		$output = $this->xmlFactoryElement($flag,$message);
		$output = $this->xmlFactoryEndElement($output);
		return $output;
	}
	
	private function xmlFactoryEndElement($output){
		$output .="</return>";
		return $output;
	}
	
	function xmlTest($file,&$msg){
		$path = "./xsd";
		libxml_use_internal_errors(true);
		$xml = new DOMDocument();
		if($xml->load($file)){
			if(!$xml->schemaValidate($path."/pbco.xsd")){
				$errors = libxml_get_errors();
				$msg = $this->xmlFactoryElement('0',"XML Errors");
			    foreach ($errors as $error) {
			        $msg .=  $this->display_xml_error($error);
			    }
			    libxml_clear_errors();
			    $msg = $this->xmlFactoryEndElement($msg);
			    return FALSE;
			}
			else{
				return TRUE;
			}
		}
		else{
			$msg = $this->returnXmlFactory('0',"Can't load XML file");
			return FALSE;
		} 
	}
	
	private function display_xml_error($error){
		$return = "<error>";
	    switch ($error->level) {
	        case LIBXML_ERR_WARNING:
	        	$return .= "<errorLevel>0</errorLevel>";
	            $return .= "<errorMessage>Warning ".$error->code.": ";
	            break;
	         case LIBXML_ERR_ERROR:
	         	$return .= "<errorLevel>1</errorLevel>";
	         	$return .= "<errorMessage>Error ".$error->code.": ";
	            break;
	        case LIBXML_ERR_FATAL:
	        	$return .= "<errorLevel>2</errorLevel>";
	         	$return .= "<errorMessage>Fatal Error ".$error->code.": ";
	            break;
	    }
		
	    $return .= trim($error->message) ."</errorMessage>";
	    $return .= "<line>".$error->line."</line>";
	    $return .= "<column>".$error->column."</column>";
	
	    if ($error->file) {
	    	$errorFile = basename($error->file);
	    	$return .= "<file>".$errorFile."</file>";
	    }
	    $return .= "</error>";
	    return $return;
	}
	
	function parse($file)
	{
		$xml = new XMLReader();
		$xml->open($file);

		while ($xml->read())
		{
			switch($xml->name)
			{
				case 'resources':
					while($xml->read())
					{
						if($xml->nodeType == XMLReader::ELEMENT)
						{
							if($xml->name == 'id')
							{
								$xml->read();
								$roleid = $xml->value;
								$case['resources'][$roleid]['roleid'] = $roleid;
							}
							if($xml->name == 'role')
							{
								$xml->read();
								$case['resources'][$roleid]['role'] = $xml->value;
							}
							if($xml->name == 'name')
							{
								$xml->read();
								$case['resources'][$roleid]['name'] = $xml->value;
							}
						}
						if($xml->nodeType == XMLReader::END_ELEMENT)
						{
							if($xml->name == 'resources')
								break;
						}
					}
					break;
				case 'tasks':
					while($xml->read())
					{
						if($xml->nodeType == XMLReader::ELEMENT)
						{
							if($xml->name == 'id')
							{
								$xml->read();
								$task['taskid'] = $xml->value;
							}
							if($xml->name == 'name')
							{
								$xml->read();
								$task['taskname'] =  $xml->value;
							}
							if($xml->name == 'description')
							{
								$xml->read();
								$task['description'] =  $xml->value;
							}
							if($xml->name == 'isparent')
							{
								$xml->read();
								$task['isparent'] =  $xml->value;
							}
							if($xml->name == 'ismilestone')
							{
								$xml->read();
								$task['ismilestone'] =  $xml->value;
							}
							if($xml->name == 'duration')
							{
								$xml->read();
								$task['duration'] =  $xml->value;
							}
							if($xml->name == 'parentid')
							{
								$xml->read();
								$task['parentid'] =  $xml->value;						
							}
							if($xml->name == 'predecessorids')
							{
								$xml->read();
								$task['predecessorids'] =  $xml->value;
//								$xml->read();
//								$value = $xml->value;
//								if($value)
//								{
//									$array = preg_split('/\,/', $value);
//									if($array)
//									{
//										foreach($array as $row)
//										{
//											$task['predecessorids'][] = $row;
//										}
//									}
//								}

							}
							if($xml->name == 'resourceids')
							{
								$xml->read();
								$task['resourceids'] =  $xml->value;
							}
							if($xml->name == 'inputs')
							{
								$xml->read();
								$task['inputs'] =  $xml->value;
							}
							if($xml->name == 'outputs')
							{
								$xml->read();
								$task['outputs'] =  $xml->value;
							}	
						}
						if($xml->nodeType == XMLReader::END_ELEMENT)
						{
							if($xml->name == 'task')
								$tasks[$task['taskid']] = $task;
							if($xml->name == 'tasks')
								break;
						}	
					}
					break;
				default:
					if($xml->nodeType == XMLReader::ELEMENT && $xml->name != 'pbco')
					{		
						if($xml->name == 'name')
						{
							$xml->read();
							$case['casename'] =  $xml->value;
						}
						if($xml->name == 'version')
						{
							$xml->read();
							$case['version'] =  $xml->value;
						}
						if($xml->name == 'description')
						{
							$xml->read();
							$case['description'] =  $xml->value;
						}
						if($xml->name == 'author')
						{
							$xml->read();
							$case['author'] =  $xml->value;
						}
						if($xml->name == 'email')
						{
							$xml->read();
							$case['email'] =  $xml->value;
						}
						if($xml->name == 'creationdate')
						{
							$xml->read();
							$case['creationdate'] =  $xml->value;
						}
						if($xml->name == 'lastmodified')
						{
							$xml->read();
							$case['lastmodified'] =  $xml->value;
						}
					}
					break;
			}			
		}
		$case['tasks'] = $tasks;	
		return $case;	
	}
}
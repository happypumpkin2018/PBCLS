<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pbcoparse
{
	function Pbcoparse()
	{		
	}
	
	function parse($file)
	{
//		echo 'xxxxxxxxxxxxxxxxxxxxxxxxxxxx'.\n;
//		echo $file;
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
//					$case['taskids'] = '';
					while($xml->read())
					{
						if($xml->nodeType == XMLReader::ELEMENT)
						{
							if($xml->name == 'id')
							{
								$xml->read();
								$task['taskid'] = $xml->value;
//								if($case['taskids'] == '')
//									$case['taskids'] = $task['id'];
//								else 
//									$case['taskids'] .= ','.$task['id'];
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
								if($xml->value)
								{
									$task['parentid'] =  $xml->value;
									$tasks[$xml->value]['childrenids'][] = $task['id'];
								}							
							}
							if($xml->name == 'predecessorids')
							{
								$xml->read();
								$value = $xml->value;
								if($value)
								{
									$array = preg_split('/\,/', $value);
									if($array)
									{
										foreach($array as $row)
										{
											$task['predecessorids'][] = $row;
											$tasks[$row]['successorids'][] = $task['id'];
										}
									}
								}

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
							{
								if(isset($tasks[$task['id']]['successorids']))
								{
									foreach($tasks[$task['id']]['successorids'] as $key => $value)
									{
										$task['successorids'][] = $value;
									}
								}
								$tasks[$task['id']] = $task;
								unset($task);
							}
							if($xml->name == 'tasks')
								break;
						}	
					}
					break;
				default:
					if($xml->nodeType == XMLReader::ELEMENT && $xml->name != 'pbco')
					{
//						
//						$key = $xml->name;
//						$xml->read();
//						$value = $xml->value;
//						$case[$key] = $value;		
						if($xml->name == 'name')
						{
							$xml->read();
							$task['casename'] =  $xml->value;
						}
						if($xml->name == 'version')
						{
							$xml->read();
							$task['version'] =  $xml->value;
						}
						if($xml->name == 'description')
						{
							$xml->read();
							$task['description'] =  $xml->value;
						}
						if($xml->name == 'author')
						{
							$xml->read();
							$task['author'] =  $xml->value;
						}
						if($xml->name == 'email')
						{
							$xml->read();
							$task['email'] =  $xml->value;
						}
						if($xml->name == 'creationdate')
						{
							$xml->read();
							$task['creationdate'] =  $xml->value;
						}
						if($xml->name == 'lastmodified')
						{
							$xml->read();
							$task['lastmodified'] =  $xml->value;
						}
					}
					break;
			}			
		}
		$case['tasks'] = $tasks;	
		return $case;	
	}
}
<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class PBCOParse
{
	function PBCOParse()
	{		
	}
	
	function parse($file)
	{
		$xml = new XMLReader();
		$xml->open($file);

		while ($xml->read())
		{
			switch($xml->name)
			{
				case 'Resources':
					while($xml->read())
					{
						if($xml->nodeType == XMLReader::ELEMENT)
						{
							if($xml->name == 'ID')
							{
								$xml->read();
								$roleId = $xml->value;
							}
							if($xml->name == 'Role')
							{
								$xml->read();
								$case['Resources'][$roleId]['Role'] = $xml->value;
							}
							if($xml->name == 'Name')
							{
								$xml->read();
								$case['Resources'][$roleId]['Name'] = $xml->value;
							}
						}
						if($xml->nodeType == XMLReader::END_ELEMENT)
						{
							if($xml->name == 'Resources')
								break;
						}
					}
					break;
				case 'Tasks':
					while($xml->read())
					{
						if($xml->nodeType == XMLReader::ELEMENT)
						{
							if($xml->name == 'ID')
							{
								$xml->read();
								$task['ID'] = $xml->value;
							}
							elseif($xml->name == 'Name')
							{
								$xml->read();
								$task['name'] =  $xml->value;
							}
							elseif($xml->name == 'Description')
							{
								$xml->read();
								$task['description'] =  $xml->value;
							}
							elseif($xml->name == 'Duration')
							{
								$xml->read();
								if($xml->value)
								{
									$task['duration'] =  $xml->value;
									if($task['duration'] == '0')
									{
										$task['isMileStone'] = 1;
									}
								}
							}
							elseif($xml->name == 'ParentID')
							{
								$xml->read();
								if($xml->value)
								{
									$task['parentID'] =  $xml->value;
									$tasks[$xml->value]['childrenIDs'][] = $task['ID'];
								}							
							}
							elseif($xml->name == 'PredecessorID')
							{
								$xml->read();
								if($xml->value)
								{
									$task['predecessorIDs'][] =  $xml->value;
									$tasks[$xml->value]['successorIDs'][] = $task['ID'];
								}
							}
							elseif($xml->name == 'ResourceID')
							{
								$xml->read();
								if($xml->value)
								{
									$task['resourceIDs'][] =  $xml->value;
								}
							}
							elseif($xml->name == 'Input')
							{
								$xml->read();
								if($xml->value)
								{
									$task['inputs'][] =  $xml->value;
								}
							}
							elseif($xml->name == 'Output')
							{
								$xml->read();
								if($xml->value)
								{
									$task['outputs'][] =  $xml->value;	
								}
							}
							else  //$xml->name == 'Task'
							{
								$task['isMileStone'] = 0;
							}	
						}
						if($xml->nodeType == XMLReader::END_ELEMENT)
						{
							if($xml->name == 'Task')
							{
								if(isset($tasks[$task['ID']]['successorIDs']))
								{
									foreach($tasks[$task['ID']]['successorIDs'] as $key => $value)
									{
										$task['successorIDs'][] = $value;
									}
								}
								$tasks[$task['ID']] = $task;
								unset($task);
							}
							if($xml->name == 'Tasks')
								break;
						}	
					}
					break;
				default:
					if($xml->nodeType == XMLReader::ELEMENT && $xml->name != 'PBCO')
					{
						$key = $xml->name;
						$xml->read();
						$value = $xml->value;
						$case[$key] = $value;		
					}
					break;
			}			
		}
		$case['tasks'] = $tasks;	
		return $case;	
	}
}
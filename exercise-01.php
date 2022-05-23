<?php
error_reporting(0);

class Config
{
    public $values = [  //changed visibility from private to public to allow access beyond class
        'first'     => "apple",
        'third'    => "banana"
    ];

    public function &getValues() //added ampersand(&) to return a reference of $values
    {
        return $this->values;
    }

    public function setValues($key, $value)
    {
        return $this->values[$key] = $value;
    }
}

$config = new Config();

$config->getValues()['second'] = 'mango'; /*This will throw an error unless the getValues function
returns a reference to the $values property and this is done by using ampersand(&) 
*/
$config->values['second'] = 'mango'; //option 2

$config->setValues('second', 'mango'); //option 3

echo $config->getValues()['first'] . PHP_EOL;
echo $config->getValues()['second'] . PHP_EOL;
echo $config->values['third'] . PHP_EOL; /*This will only work if visibility of $values is
changed from private to public */

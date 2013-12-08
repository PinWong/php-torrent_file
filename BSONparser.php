<?php
/*
 *  c风格，不用正则
 *  string    5:xxxxx             string(var)
 *	int       i100e               int(var)
 *	list      l[string|int]e      array
 *	directory d[list|string|int]e array
 */
class BSONparser
{
	private $fileHandler;
	private $file;
    private $fileSize;
    private $fileContent;

    private $currentChar;
    private $currentIndex = 0;
    private $level = 0; // 默认为0，
    private $typeStack = array( 0 => 'O' );
    private $currentDKey = null;

    private $objectData = array();       // 返回结果
    private $handlerStack;

	function __construct($file)
	{
		if( !file_exists($file) ) throw new Exception("file not exists.", 101);
        if( ($this->fileSize =
               filesize($file)) == 0 ) throw new Exception("file is empty.", 102);

		$this->file = $file;
	}

	public function parser()
	{
		$this->fileHandler = fopen($this->file, 'r');
        $this->fileContent = fread($this->fileHandler, $this->fileSize);
        fclose($this->fileHandler);

        return $this->_run();
	}

    private function _run()
    {
        while( $this->currentIndex < $this->fileSize )
        {
            if( $this->currentIndex === 0 )
            {
                $this->currentChar = substr($this->fileContent, 0, 1);
                $this->_each($this->currentChar);
            }else{
                $this->currentChar = substr($this->fileContent, $this->currentIndex, 1);
                $this->_each($this->currentChar);
            }
        }

        $this->parsePieces();

        return $this->objectData;
    }

    private function _phash($data)
    {
        if(($len = strlen($data)) >= 256){
            return '['.$len.']'.md5($data);
        }
        return $data;
    }

    /**
     * 输入类型
     * @param $charType
     */
    private function _each($charType)
    {
        switch($charType)
        {
            case 'd':
                {
                    $this->parseDectionary();
                    break;
                }
            case 'l':
                {
                    $this->parseList();
                    break;
                }
            case 'i':             // i999e
                {
                    $this->parseInterge();
                    break;
                }
            case 'e':
                {
                    $this->parseEnd();
                    break;
                }
            default :             // 9:abcdefghi
                {
                    $this->parseString();
                    break;
                }
        }
    }

    private function parseDectionary()
    {
        $this->pushStack('D');
        $this->currentIndex++;
    }

    private function parseList()
    {
        $this->pushStack('L');
        $this->currentIndex++;
    }

    private function parseString()
    {
        $len = $this->parseInt();
        $this->currentIndex++; // 跳过:
        $tmp = substr($this->fileContent, $this->currentIndex, $len);
        $this->currentIndex += $len;

        if( $this->getType() == 'D')
        {
            if($this->currentDKey)
            {
                $this->objectData[$this->currentDKey] = $tmp;
                $this->currentDKey = null;
            }else
            {
                $this->currentDKey = $tmp;
                $this->objectData[$this->currentDKey] = array();
            }
        }else
        {
            $this->objectData[] = $tmp;
        }
    }

    private function parseEnd()
    {
        $this->popStack();
        $this->currentIndex++;
    }

    private function parseInterge()
    {
        $this->pushStack('I');
        $this->currentIndex++; // 999e
        $tmp = $this->parseInt();
        $this->objectData[] = $tmp;
    }

    private function pushStack($type)
    {
        // save this level handler                 parsent
        $this->handlerStack[$this->level] = array( 'key' => $this->currentDKey, 'handler' => $this->objectData );
        $this->currentDKey = null;
        $this->objectData = array();
        $this->level++;
        $this->typeStack[$this->level] = $type; // child
    }

    private function popStack()
    {
        unset($this->typeStack[$this->level]);
        $this->level--;
        if($this->level == 0){
            return;
        }
        $parsent = $this->handlerStack[$this->level];

        //var_dump($parsent);
        //echo '</pre>';

        unset($this->handlerStack[$this->level]);
        $parsent_key = $parsent['key'];
        $parsent_handler = $parsent['handler'];

        if($parsent_key)
        {
            $parsent_handler[$parsent_key] = $this->objectData;
            $this->objectData = $parsent_handler;;
            $this->currentDKey = null;
        }else
        {
            $parsent_handler[] = $this->objectData;
            $this->objectData = $parsent_handler;
            $this->currentDKey = null;
        }
    }

    private function getType()
    {
        return $this->typeStack[$this->level];
    }

    /**
     * string to int
     * @return int
     */
    private function parseInt()
    {
        $tmp = '';
        while( ( $ord = ord( $chr = substr($this->fileContent, $this->currentIndex, 1) ) ) >= 48 && $ord <= 57 )
        {
            $tmp .= $chr;
            $this->currentIndex++;
        }
        return intval($tmp);
    }

    private function parsePieces()
    {
        $pieces = $this->objectData['info']['pieces'];
        $len = strlen($pieces);
        $index = 0;
        while( $index < $len)
        {
            $tmp[] = substr($pieces, $index, 20);
            $index += 20;
        }
        $this->objectData['info']['pieces'] = $tmp;
    }
}

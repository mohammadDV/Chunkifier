<?php


interface ChunkInterface {
    public function handleData();
    public function createDir();
    public function getTypeFile();
}


class Chunk implements chunkInterface {

    private $content;
    private $size;
    private $increse;
    private $dir;
    private $end;
    private $fileSize;
    public $message;

    // Preparing data for chunking
    public function __construct(string $file,string $dir,array $config)
    {
        $this->content  = file_get_contents($file);
        $this->size     = $config["file_size"];
        $this->increse  = $config["incrementalـnumber"];
        $this->end      = $config["incrementalـnumber"];
        $this->dir      = $dir;
    }

    // Chunking the file
    public function handleData()
    {
        
        try {
            $lengthOrginal  = $length = strlen($this->content);
            $i              = 1;
            while ($length > 0) {
                $file_name      = "00" . $i;
                $start          = $i === 1 ? 0     : $this->end;
                $this->fileSize = $i === 1 ? $this->size : $this->fileSize + $this->increse;
                $this->end      = $start + $this->fileSize;
                $this->end      <= $lengthOrginal ?: $this->end = $lengthOrginal;
                $contentNewFile = substr($this->content,$start,$this->fileSize); 
                $newFile        = fopen($this->dir . DIRECTORY_SEPARATOR . $file_name,"w+");
                if(fwrite($newFile,$contentNewFile) == false)
                {
                    $this->message =  "Writing file has error :" . $file_name;
                    break;
                }
                fclose($newFile);
                $length -= $this->fileSize; 
                $i++;
            }
        }catch (Exception $e){
            $this->message = $e->getMessage();
        }
    }

    // Create directory
    public function createDir() {

        try {
            if(!file_exists($this->dir)) {
                mkdir($this->dir,0777,true);
            }
        }catch (Exception $e) {
            $this->message = $e->getMessage();
        }
    }

    // Get type of file
    public function getTypeFile()
    {
        $this->content = str_replace("0", "",$this->content);
        return !empty($this->content) ? "Normal file" : "Sparse file";
    }


}
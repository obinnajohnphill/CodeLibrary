<?
  
class opprtunityOwnerClass
{   
    
	private $reportName = "Obinna's test";
	
	 public function setReportName($reportName){ 
        $this->reportName = $reportName; 
    }
    public function getReportName(){ 
        return $this->reportName; 
    }

	
    function validate()
    {
         $reportName = $this->getReportName();
		 
        if ($reportName != "Obinna's test") {
            $this ->wrongName();
        } else {
            $this->rightName();
        }
    }

	
    function wrongName()
    {
		$reportName = $this->getReportName();
        echo 'You have the wrong report name:&nbsp;'.$reportName.'<br><br>';
    }
	
    function rightName()
    {
		$reportName = $this->getReportName();
        echo 'The right report name:&nbsp;'.$reportName.'<br><br>';
    }

}

?>
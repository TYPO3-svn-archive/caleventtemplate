<?php
//require_once (t3lib_extMgm::extPath('cal').'controller/class.tx_cal_registry.php');
	
	/* 
	* @author: Thomas Kowtsch
	*/
	class tx_caleventtemplate_cloneevents {
		
		var $info = '';
		var $pageIDForPlugin;
		var $starttime;
		var $endtime;
		var $extConf;
		
		function tx_caleventtemplate_cloneevents() {
			$this->extConf = unserialize($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['cal']);
/*			$this->pageIDForPlugin = $pageIDForPlugin;
			if($starttime == null) {
				$starttime = $this->extConf['recurrenceStart'];
			}
			$this->starttime = $starttime;
			if($endtime == null) {
				$endtime = $this->extConf['recurrenceEnd'];
			}
			$this->endtime = $endtime;
*/
		}
		

	}
	
if (defined('TYPO3_MODE') && $TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/caleventtemplate/mod1/class.tx_caleventtemplate_cloneevents.php']) {
	require_once($TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/caleventtemplate/mod1/class.tx_caleventtemplate_cloneevents.php']);
}

?>

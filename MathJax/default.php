<?php
if(!defined('APPLICATION')) die();



$PluginInfo['MathJax'] = array(
   'Name' => 'LoadMathJax',
   'Description' => 'Adds MathJax JavaScript to forum so that your users can use LaTeX in comments.',
   'Version' => '1.0',
   'Author' => "Z. Hlousek",
   'AuthorEmail' => 'zhlousek@edudotonline.com',
);

class LoadMathJax extends Gdn_Plugin {

	public function Base_Render_Before(&$Sender) {
		$this->_LoadMathjax($Sender);
	}

	private function _LoadMathJax($Sender){
		$Sender->Head->AddString('
		<script type="text/javascript"
		src="http://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS_HTML">
		</script>
		');
	}
	
	public function Setup(){}
}

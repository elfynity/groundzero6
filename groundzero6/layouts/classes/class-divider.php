<?php
class SectionDividers{
	
	private $background_color;
	private $height; 
	
	public function divider($background_color, $height) {
		
		if($background_color && $height) {
			$divider = '<div class="path" style="background-color:'. $background_color.'; height:'. $height.'px"></div>';
			
			return $divider;		
		}
	}
}
<?php
	
	function game_time_table_init(&$options, $memberInfo, &$args){
		if ($memberInfo['group'] == 'students') {
        // Disable filter button
        $options->AllowFilters=0;
    }
		return TRUE;
	}

	function game_time_table_header($contentType, $memberInfo, &$args){
		$header='';

		switch($contentType){
			case 'tableview':
				$header='';
				break;

			case 'detailview':
				$header='';
				break;

			case 'tableview+detailview':
				$header='';
				break;

			case 'print-tableview':
				$header='';
				break;

			case 'print-detailview':
				$header='';
				break;

			case 'filters':
				$header='';
				break;
		}

		return $header;
	}

	function game_time_table_footer($contentType, $memberInfo, &$args){
		$footer='';

		switch($contentType){
			case 'tableview':
				$footer='';
				break;

			case 'detailview':
				$footer='';
				break;

			case 'tableview+detailview':
				$footer='';
				break;

			case 'print-tableview':
				$footer='';
				break;

			case 'print-detailview':
				$footer='';
				break;

			case 'filters':
				$footer='';
				break;
		}

		return $footer;
	}

	function game_time_table_before_insert(&$data, $memberInfo, &$args){

		return TRUE;
	}

	function game_time_table_after_insert($data, $memberInfo, &$args){

		return TRUE;
	}

	function game_time_table_before_update(&$data, $memberInfo, &$args){

		return TRUE;
	}

	function game_time_table_after_update($data, $memberInfo, &$args){

		return TRUE;
	}

	function game_time_table_before_delete($selectedID, &$skipChecks, $memberInfo, &$args){

		return TRUE;
	}

	function game_time_table_after_delete($selectedID, $memberInfo, &$args){

	}

	function game_time_table_dv($selectedID, $memberInfo, &$html, &$args){

	}

	function game_time_table_csv($query, $memberInfo, &$args){

		return $query;
	}
	function game_time_table_batch_actions(&$args){

		return array();
	}

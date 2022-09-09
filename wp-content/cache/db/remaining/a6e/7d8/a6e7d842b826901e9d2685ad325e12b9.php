šûc<?php exit; ?>a:6:{s:10:"last_error";s:0:"";s:10:"last_query";s:302:"
			SELECT DISTINCT t.term_id, tr.object_id
			FROM wp_terms AS t  INNER JOIN wp_term_taxonomy AS tt ON t.term_id = tt.term_id INNER JOIN wp_term_relationships AS tr ON tr.term_taxonomy_id = tt.term_taxonomy_id
			WHERE tt.taxonomy IN ('wp_theme') AND tr.object_id IN (11)
			ORDER BY t.name ASC
			
		";s:11:"last_result";a:1:{i:0;O:8:"stdClass":2:{s:7:"term_id";s:1:"2";s:9:"object_id";s:2:"11";}}s:8:"col_info";a:2:{i:0;O:8:"stdClass":13:{s:4:"name";s:7:"term_id";s:7:"orgname";s:7:"term_id";s:5:"table";s:1:"t";s:8:"orgtable";s:8:"wp_terms";s:3:"def";s:0:"";s:2:"db";s:21:"nzdravkovic_portfolio";s:7:"catalog";s:3:"def";s:10:"max_length";i:1;s:6:"length";i:20;s:9:"charsetnr";i:63;s:5:"flags";i:32801;s:4:"type";i:8;s:8:"decimals";i:0;}i:1;O:8:"stdClass":13:{s:4:"name";s:9:"object_id";s:7:"orgname";s:9:"object_id";s:5:"table";s:2:"tr";s:8:"orgtable";s:21:"wp_term_relationships";s:3:"def";s:0:"";s:2:"db";s:21:"nzdravkovic_portfolio";s:7:"catalog";s:3:"def";s:10:"max_length";i:2;s:6:"length";i:20;s:9:"charsetnr";i:63;s:5:"flags";i:32801;s:4:"type";i:8;s:8:"decimals";i:0;}}s:8:"num_rows";i:1;s:10:"return_val";i:1;}
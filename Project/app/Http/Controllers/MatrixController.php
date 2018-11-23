<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Phpml\Math\Matrix;

class MatrixController extends Controller
{
    //
    
	function get_row(){
		$matrix = new Matrix([
		    [3, 3, 3],
		    [4, 2, 1],
		    [5, 6, 7],
		]);
		echo $matrix->getRows();
		echo "dim" . $matrix->getDeterminant();
	}
}

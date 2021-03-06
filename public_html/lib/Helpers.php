<?php

use Apfelbox\FileDownload\FileDownload;
/**
* ClassName
*
* @author   Fabian Siatama
*
* Se definen varias utilidades comunes a toda la aplicacion
*/
class Helpers
{
	public static function getDateTimeNow()
	{
		return date('Y-m-d H:i:s');
	}

	public static function getDateNow()
	{
		return date('Y-m-d');
	}

	public static function getDate($string)
	{
		return DateTime::createFromFormat('Y-m-d', $string);
	}

	public static function arraySortByValue($key, $desc = false)
	{
		return function ($a, $b) use ($key, $desc) {
			$operator = ($desc) ? -1 : 1 ;
			return $operator * strnatcmp($a[$key], $b[$key]);
		};
	}

	public static function arrayGet($array, $key)
	{
		if (is_null($key)) return $array;

		if (isset($array[$key])) return $array[$key];

		foreach (explode('.', $key) as $segment)
		{
			if ( ! is_array($array) || ! array_key_exists($segment, $array))
			{
				return '';
			}

			$array = $array[$segment];
		}

		return $array;
	}

	public static function getRequire($path)
	{
		if (file_exists($path)) {
			return require $path;
		}
		exit('File does not exist at path {$path}');
	}

	public static function filterValuesToArray($value)
	{
		$arrFilters = explode('||', $value);
		$arrFields  = [];

		foreach($arrFilters as $key => $filter) {
			$field = explode(':', $filter);

			$arrFields[$field[0]] = $field[1];
		}

		return $arrFields;
	}

	/**
	 * jsonChart
	 *
	 * @param mixed $arr_data        array con los datos.
	 * @param mixed $eje_x           Description.
	 * @param mixed $filas           Description.
	 * @param mixed $columnas        Description.
	 * @param mixed $typeChart		 Description.
	 * @param mixed $serie_adicional Description.
	 *
	 * @access public
	 * @static
	 *
	 * @return mixed Value.
	 */
	public static function jsonChart($arr_data, $eje_x, $series, $typeChart, $xAxisname = '', $pYAxisName = '')
	{
		$arrCategories = [];
		$rowData       = [];
		$arr_cols      = [];
		$arr_chart     = [];

		$arr_chart['xAxis'] = $eje_x;
		$arr_chart['series'] = $series;

		$arr_chart['chart'] = [
			'decimalprecision'     => '4'
			,'palette'             => '4'
			,'formatnumberscale'   => '0'
			/*,'numberscalevalue'    => '1000000'
			,'numberscaleunit'     => 'M'*/
			,'theme'               => 'fint'
			,'xAxisname'           => $xAxisname
			,'yaxisname'           => $pYAxisName
			,'theme'               => 'fint'
			,'rotatevalues'        => '1'
			,'divlineisdashed'     => '1'
			,'placevaluesinside'   => '1'
			,'exportenabled'       => '1'
			,'showPercentValues'   => '1'
			,'areaovercolumns'     => '0'
			,'showaboutmenuitem'   => '0'
			,'showlabels'          => '1'
			,'showBorder'          => '0'
			,'palettecolors'       => '#008ee4,#6baa01,#f8bd19,#e44a00,#33bdda,#d35400,#bdc3c7,#95a5a6,#34495e,#1abc9c'
		];

		if ($typeChart == LINEAL || $typeChart == AREA) {
			$arr_chart['chart']['showvalues'] = '0';
			$arr_chart['chart']['palette']    = '1';
		} elseif ($typeChart == PIE) {
			$arr_chart['chart']['forcedecimals'] = '1';
			$arr_chart['chart']['showlabels']    = '0';
			$arr_chart['chart']['showlegend']    = '1';
		}

		foreach ($arr_data as $row) {

			$seriesname = '';

			foreach ($row as $key => $value) {

				$label = $row[$eje_x];

				if ($key == $eje_x) {

					$arrCategories['category'][] = ['label' => $value];

				} elseif (array_key_exists($key, $series)) {

					$seriesname = $series[$key];

					$tooltext = ($typeChart == PIE) ? $label : number_format($value,2) ;

					$rowData[$seriesname][] = [
						'value'    => $value,
						'tooltext' => $tooltext,
						'label'    => $label
					];

				}
			}

		}

		$arr_chart['categories'] = $arrCategories;

		foreach ($rowData as $key => $value) {
			$arr_chart['dataset'][] = [
				'seriesname' => $key,
				'data' => $value
			];
		}

		/*$arr_chart['styles']['definition'] = [
			[
				'name'     => 'Anim1',
				'type'     => 'animation',
				'param'    => '_xscale',
				'start'    => '0',
				'duration' => '1'
			],[
				'name'     => 'Anim2',
				'type'     => 'animation',
				'param'    => '_alpha',
				'start'    => '0',
				'duration' => '1'
			],[
				'name'  => 'DataShadow',
				'type'  => 'Shadow',
				'alpha' => '20'
			]
		];
		$arr_chart['application'] = [
			[
				'toobject' => 'DIVLINES',
				'styles'   => 'Anim1'
			],[
				'toobject' => 'HGRID',
				'styles'   => 'Anim2'
			],[
				'toobject' => 'DATALABELS',
				'styles'   => 'DataShadow'
			],[
				'toobject' => 'DATALABELS',
				'styles'   => 'Anim2'
			]
		];*/


		return $arr_chart;
	}

	public static function getPeriodColumnSql($period, $withPeriodName = true, $fieldPeriodName = '')
	{
		$fieldPeriodName = (empty($fieldPeriodName)) ? 'periodo' : $fieldPeriodName ;
		$column          = 'anio AS ' . $fieldPeriodName;
		$periodName      = '""';
		switch ($period) {
			case 6:
				if ($withPeriodName) {
					$periodName = 'anio, " '.Lang::get('indicador.reports.semester').' "';
				}
				$column = '
					(CASE
					   WHEN 0 < ' . $fieldPeriodName . ' AND ' . $fieldPeriodName . ' <= 6 THEN CONCAT('.$periodName.', "1")
					   WHEN 6 < ' . $fieldPeriodName . ' THEN CONCAT('.$periodName.', "2")
					 END
					) AS ' . $fieldPeriodName . '
				';
			break;
			case 3:
				if ($withPeriodName) {
					$periodName = 'anio, " '.Lang::get('indicador.reports.quarter').' "';
				}
				$column = '
					(CASE
					   WHEN 0 < ' . $fieldPeriodName . ' AND ' . $fieldPeriodName . ' <= 3 THEN CONCAT('.$periodName.', "1")
					   WHEN 3 < ' . $fieldPeriodName . ' AND ' . $fieldPeriodName . ' <= 6 THEN CONCAT('.$periodName.', "2")
					   WHEN 6 < ' . $fieldPeriodName . ' AND ' . $fieldPeriodName . ' <= 9 THEN CONCAT('.$periodName.', "3")
					   WHEN 9 < ' . $fieldPeriodName . ' THEN CONCAT('.$periodName.', "4")
					 END
					) AS ' . $fieldPeriodName . '
				';
			break;
			case 1:
				$periodName1  = ($withPeriodName) ? 'anio, " ' . Lang::get('indicador.months.1')  . '"' : '1' ;
				$periodName2  = ($withPeriodName) ? 'anio, " ' . Lang::get('indicador.months.2')  . '"' : '2' ;
				$periodName3  = ($withPeriodName) ? 'anio, " ' . Lang::get('indicador.months.3')  . '"' : '3' ;
				$periodName4  = ($withPeriodName) ? 'anio, " ' . Lang::get('indicador.months.4')  . '"' : '4' ;
				$periodName5  = ($withPeriodName) ? 'anio, " ' . Lang::get('indicador.months.5')  . '"' : '5' ;
				$periodName6  = ($withPeriodName) ? 'anio, " ' . Lang::get('indicador.months.6')  . '"' : '6' ;
				$periodName7  = ($withPeriodName) ? 'anio, " ' . Lang::get('indicador.months.7')  . '"' : '7' ;
				$periodName8  = ($withPeriodName) ? 'anio, " ' . Lang::get('indicador.months.8')  . '"' : '8' ;
				$periodName9  = ($withPeriodName) ? 'anio, " ' . Lang::get('indicador.months.9')  . '"' : '9' ;
				$periodName10 = ($withPeriodName) ? 'anio, " ' . Lang::get('indicador.months.10') . '"' : '10' ;
				$periodName11 = ($withPeriodName) ? 'anio, " ' . Lang::get('indicador.months.11') . '"' : '11' ;
				$periodName12 = ($withPeriodName) ? 'anio, " ' . Lang::get('indicador.months.12') . '"' : '12' ;
				$column = '
					(CASE
					   WHEN 1  = ' . $fieldPeriodName . ' THEN CONCAT(' . $periodName1 . ')
					   WHEN 2  = ' . $fieldPeriodName . ' THEN CONCAT(' . $periodName2 . ')
					   WHEN 3  = ' . $fieldPeriodName . ' THEN CONCAT(' . $periodName3 . ')
					   WHEN 4  = ' . $fieldPeriodName . ' THEN CONCAT(' . $periodName4 . ')
					   WHEN 5  = ' . $fieldPeriodName . ' THEN CONCAT(' . $periodName5 . ')
					   WHEN 6  = ' . $fieldPeriodName . ' THEN CONCAT(' . $periodName6 . ')
					   WHEN 7  = ' . $fieldPeriodName . ' THEN CONCAT(' . $periodName7 . ')
					   WHEN 8  = ' . $fieldPeriodName . ' THEN CONCAT(' . $periodName8 . ')
					   WHEN 9  = ' . $fieldPeriodName . ' THEN CONCAT(' . $periodName9 . ')
					   WHEN 10 = ' . $fieldPeriodName . ' THEN CONCAT(' . $periodName10 . ')
					   WHEN 11 = ' . $fieldPeriodName . ' THEN CONCAT(' . $periodName11 . ')
					   WHEN 12 = ' . $fieldPeriodName . ' THEN CONCAT(' . $periodName12 . ')
					 END
					) AS ' . $fieldPeriodName . '
				';
			break;
		}
		return $column;
	}

	public static function getPeriodName($period, $number)
	{
		$periodName = Lang::get('indicador.reports.annual');
		switch ($period) {
			case 6:
				$periodName = Lang::get('indicador.reports.semester').' '.$number;
			break;
			case 3:
				$periodName = Lang::get('indicador.reports.quarter').' '.$number;
			break;
			case 1:
				$periodName = Lang::get('indicador.months.'.$number);
			break;
		}
		return $periodName;
	}

	public static function getPeriodRange($period)
	{
		$periodRange = [];
		switch ($period) {
			case 12:
				$periodRange = [
					1 => ['1']
				];
			break;
			case 6:
				$periodRange = [
					1 => ['1','2','3','4','5','6'],
					2 => ['7','8','9','10','11','12']
				];
			break;
			case 3:
				$periodRange = [
					1 => ['1','2','3'],
					2 => ['4','5','6'],
					3 => ['7','8','9'],
					4 => ['10','11','12']
				];
			break;
			case 1:
				$periodRange = [
					1  => ['1'],
					2  => ['2'],
					3  => ['3'],
					4  => ['4'],
					5  => ['5'],
					6  => ['6'],
					7  => ['7'],
					8  => ['8'],
					9  => ['9'],
					10 => ['10'],
					11 => ['11'],
					12 => ['12']
				];
			break;
		}
		return $periodRange;
	}

	public static function findKeyInArrayMulti($array, $key, $value)
	{
		foreach ($array as $subarray){

			if (isset($subarray[$key]) && $subarray[$key] == $value) {
				return $subarray;
			}
		}

		return false;
	}

	public static function arrayColumn( array $array, $column_key, $index_key = null )
	{
		$result = [];
		foreach ($array as $key => $row) {
			if ( isset($row[$column_key]) ) {

				$result[ $index_key ? $v[$index_key] : $key ] = $row[$column_key];

			}
		}
		return $result;
	}

	public static function download($fileName, $deleteFile = true)
	{
		$filePath = PATH_REPORTS . $fileName;

		$fileDownload = FileDownload::createFromFilePath($filePath);

		$result = $fileDownload->sendDownload($fileName);

		if ($deleteFile) {
			unlink($filePath);
		}
		return $result;
	}

	public static function uploadImage($name, $fileName, $dir)
	{
		$result         = new stdClass();
		$file           = $_FILES[$name];
		$tamano         = $file['size'];
		$info           = getimagesize($file['tmp_name']);
		$tmp            = $file['name'];
		$ext            = substr(strrchr($file['name'], '.'), 1);
		$nombre_archivo = md5($name.$fileName).".".$ext;
		$contentType    = $info['mime'];

		if ($tamano > 1000000) {
			$result->reason		= "You can upload images with weights greater than 1Mb";
			$result->success    = false;

		} elseif ($contentType =='image/jpeg' || $contentType =='image/gif' || $contentType =='image/png' ) {

			if(isset($_FILES[$name]) && move_uploaded_file($file['tmp_name'], $dir.$nombre_archivo)){

				list($width, $height, $type, $attr) = getimagesize($dir.$file['name']);
				$result->newImage	= $nombre_archivo;
				$result->imageWidth	= $width;
				$result->imageHeight= $height;
				$result->reason		= $dir.$nombre_archivo;
				$result->success    = true;
			} else {

				$result->reason		= "Unable to Upload";
				$result->success    = false;
			}
		} else {
			
			$result->reason		= "Invalid File in ".$tmp.". Please only upload images files";
			$result->success    = false;
		}
		return $result;
	}

	public static function getUpdateInfo($product, $trade)
	{
		require_once PATH_MODELS.'Repositories/Update_infoRepo.php';

		//self::getRequire(PATH_MODELS.'Repositories/Update_infoRepo.php');
		$update_infoRepo = new Update_infoRepo;

		$result = $update_infoRepo->updateInfo(compact('product', 'trade'));

		if (!$result['success'] || $result['total'] == 0) {
			return false;
		}

		$row = array_shift($result['data']);

		$dateFrom = self::getDate($row['update_info_from']);
		$dateTo   = self::getDate($row['update_info_to']);

		$yearsAvailable = range($dateFrom->format('Y'), $dateTo->format('Y'));

		return compact('dateFrom', 'dateTo', 'yearsAvailable');

	}

	/**
	 * linear regression function
	 * @param $x array x-coords
	 * @param $y array y-coords
	 * @returns array() m=>slope, b=>intercept
	 */
	public static function linearRegression(array $y, $x =[]) {

		// calculate number points
		$n = count($y);

		if ( empty($x) ) {
			//si no se tiene informacion del eje x, se calcula un valor progresivo 1,2,3,4 ya que se trata de una progresion lineal
			$x = [];
			$i = 0;
			foreach ($y as $key => $value) {
				$i      += 1;
				$x[$key] = $i;
			}
		}

		// ensure both arrays of points are the same size
		if ($n != count($x)) {

			trigger_error("linearRegression(): Number of elements in coordinate arrays do not match.", E_USER_ERROR);

		}

		// calculate sums
		$x_sum = array_sum($x);
		$y_sum = array_sum($y);

		$xx_sum = 0;
		$xy_sum = 0;

		foreach ($x as $key => $value) {
			if ( ! isset( $y[$key] ) ) {

				trigger_error('linearRegression(): key '. $key . ' unavailable on Y array', E_USER_ERROR);

			}
			$xy_sum += ( $x[$key] * $y[$key] );
			$xx_sum += ( $x[$key] * $x[$key] );
		}
		// calculate slope
		$m = (($n * $xy_sum) - ($x_sum * $y_sum)) / (($n * $xx_sum) - ($x_sum * $x_sum));

		// calculate intercept
		$b = ($y_sum - ($m * $x_sum)) / $n;

		// return result
		return array("m"=>$m, "b"=>$b);

	}

	public static function naturalLogarithm($value)
	{
		$value = floatval($value);
		$result = ($value == 0) ? 0 : log($value) ;
		return $result;
	}

	/**
     * sendEmail
     * 
     * @param mixed \array [ 'email' => 'ppp@domain.com', 'name' => 'Jhon Doe' ].
     * @param mixed $message       Description.
     * @param mixed $subject       Description.
     * @param mixed \array $arrAttachedFile  ['file1', 'file2', ....].
     *
     * @access public
     * @static
     *
     * @return mixed Value.
     */
	public static function sendEmail(array $arrEmail , $message, $subject, array $arrAttachedFile = [])
	{
		$mail = new PHPMailer;

		$mail->isSMTP();
		//Enable SMTP debugging
		// 0 = off (for production use)
		// 1 = client messages
		// 2 = client and server messages
		$mail->SMTPDebug = 0;
		//Ask for HTML-friendly debug output
		//$mail->Debugoutput = 'html';
		//Set the hostname of the mail server
		$mail->Host = 'mail.paulacastano.com';
		//Set the SMTP port number - likely to be 25, 465 or 587
		$mail->Port = 25;

		//Whether to use SMTP authentication
		$mail->SMTPAuth = true;

		$mail->Username = 'contacto@paulacastano.com';
		
		$mail->Password = 'P4ul4C4st4no';

		//Set who the message is to be sent from
		$mail->setFrom('contacto@paulacastano.com', 'Paula Castano.');
		//Set an alternative reply-to address
		//$mail->addReplyTo('replyto@example.com', 'First Last');
		//Set who the message is to be sent to
		foreach ($arrEmail as $key => $row) {

			if ( !empty($row['email']) ) {
				
				$name = ( ! empty($row['name'] ) ) ? $row['name'] : '' ;

				$mail->addAddress($row['email'], $name);
			}
		}
		//Set the subject line
		$mail->Subject = $subject;
		//Read an HTML message body from an external file, convert referenced images to embedded,
		//convert HTML into a basic plain-text alternative body
		$mail->msgHTML($message);
		//Replace the plain text body with one created manually
		//$mail->AltBody = 'This is a plain-text message body';
		//Attach an image file
		foreach ($arrAttachedFile as $file) {
			if(is_file($file)){
				$mail->addAttachment($file);
			}
		}
		//activar utf8 para acentos
		$mail->CharSet = "UTF-8";
		//$mail->Encoding = "quotedprintable";
		
		//send the message, check for errors
		if (!$mail->send()){
			return [
				'success' => false,
				'error'   => 'Mailer Error: ' . $mail->ErrorInfo
			];
		}
		
		return [
			'success' => true
		];
	}

}

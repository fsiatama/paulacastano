<?php

class Inflector {

	public static function camel($value)
	{
		$segments = explode('-', $value);

		array_walk($segments, function (&$item) {
			$item = static::cleanVarName($item);
			$item = ucfirst($item);
		});

		return implode('', $segments);
	}

	public static function underCamel($value)
	{
		$segments = explode('_', $value);

		array_walk($segments, function (&$item) {
			$item = static::cleanVarName($item);
			$item = ucfirst($item);
		});

		return implode('', $segments);
	}

	public static function lowerCamel($value)
	{
		return lcfirst(static::camel($value));
	}

	public static function underscore($value)
	{
		$segments = explode(' ', $value);

		array_walk($segments, function (&$item) {
			$item = static::cleanVarName($item);
			$item = strtolower($item);
		});

		return implode('_', $segments);
	}

	public static function slug($value)
	{
		$segments = explode(' ', $value);

		array_walk($segments, function (&$item) {
			$item = static::cleanVarName($item);
			$item = strtolower($item);
		});

		return implode('-', $segments);
	}

	public static function cleanVarName($string)
	{
		$string = static::cleanOutputString($string);
		$string = str_replace(
		    array('.', ',', '-'),
		    '',
		    $string
		);
		
		$string = strtolower($string);

		return $string;
	}

	public static function cleanInputString($string)
	{
		$string = static::cleanOutputString($string);
		$string = strip_tags($string);
		
		$string = strtoupper($string);

		return $string;
	}

	public static function cleanInputEmail($string)
	{
		$string = static::cleanOutputString($string);
		$string = strip_tags($string);
		$string = filter_var($string, FILTER_SANITIZE_EMAIL);
		
		$string = strtolower($string);

		return $string;
	}

	public static function cleanOutputString($string)
	{
		if(is_array($string)){
			$tmp = array();
			foreach($string as $key => $valor){
				$tmp[$key] = $this->cleanOutputString($valor);
			}
			return $tmp;
		}
	 
	    $string = trim($string);
		
		$string = str_replace(
	        array('á', 'à', 'ä', 'â', 'ª', 'Á', 'À', 'Â', 'Ä'),
	        array('a', 'a', 'a', 'a', 'a', 'A', 'A', 'A', 'A'),
	        $string
	    );
	 
	    $string = str_replace(
	        array('é', 'è', 'ë', 'ê', 'É', 'È', 'Ê', 'Ë'),
	        array('e', 'e', 'e', 'e', 'E', 'E', 'E', 'E'),
	        $string
	    );
	 
	    $string = str_replace(
	        array('í', 'ì', 'ï', 'î', 'Í', 'Ì', 'Ï', 'Î'),
	        array('i', 'i', 'i', 'i', 'I', 'I', 'I', 'I'),
	        $string
	    );
	 
	    $string = str_replace(
	        array('ó', 'ò', 'ö', 'ô', 'Ó', 'Ò', 'Ö', 'Ô'),
	        array('o', 'o', 'o', 'o', 'O', 'O', 'O', 'O'),
	        $string
	    );
	 
	    $string = str_replace(
	        array('ú', 'ù', 'ü', 'û', 'Ú', 'Ù', 'Û', 'Ü'),
	        array('u', 'u', 'u', 'u', 'U', 'U', 'U', 'U'),
	        $string
	    );
	 
	    $string = str_replace(
	        array('ñ', 'Ñ', 'ç', 'Ç'),
	        array('n', 'N', 'c', 'C',),
	        $string
	    );
		
		//Esta parte se encarga de eliminar cualquier caracter extraño
	    $string = str_replace(
	        array("\\", "¨", "º", "°",/* "/", "-",*/ "~",
	             "#",  "|", "!", "\"",
	             "$", "%", "&",
	             "(", ")", "?", "'", "¡",
	             "¿", "[", "^", "`", "]",
	             "+", "}", "{", "¨", "´",
	             ">", "<", ";", "U2022", "°", "•", "", 
	             ""),
	        '',
	        $string
	    );
		
	    return $string;
	}

	public static function compress($string)
	{
		$string = preg_replace('!/\*[^*]*\*+([^/][^*]*\*+)*/!', '', $string);
		/* remove tabs, spaces, newlines, etc. */
		$string = str_replace(array("\r\n", "\r", "\n", "\t", '  ', '    ', '    '), '', $string);
		return $string;
	}

}
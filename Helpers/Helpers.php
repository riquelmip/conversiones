<?php

interface IConvertidor
{
    public function convertir($valor, $unidad_desde, $unidad_hasta);
}

class ConversorLongitud implements IConvertidor
{
    private $factores_conversion = array(
        "metro" => 1,
        "centimetro" => 0.01,
        "pie" => 0.3048,
        "pulgada" => 0.0254,
        "yarda" => 0.9144
    );

    public function convertir($valor, $unidad_desde, $unidad_hasta)
    {
        $unidad_desde = strtolower($unidad_desde);
        $unidad_hasta = strtolower($unidad_hasta);

        if (array_key_exists($unidad_desde, $this->factores_conversion) && array_key_exists($unidad_hasta, $this->factores_conversion)) {
            return $valor * $this->factores_conversion[$unidad_desde] / $this->factores_conversion[$unidad_hasta];
        } else {
            //throw new Exception("No se puede convertir entre estas unidades de medida.");
            return 0;
        }
    }
}

class ConversorMasa implements IConvertidor
{
    private $factores_conversion = array(
        "kilogramo" => 1,
        "gramo" => 0.001,
        "libra" => 0.453592,
        "onza" => 0.0283495,
        "tonelada" => 1000
    );

    public function convertir($valor, $unidad_desde, $unidad_hasta)
    {
        $unidad_desde = strtolower($unidad_desde);
        $unidad_hasta = strtolower($unidad_hasta);

        if (array_key_exists($unidad_desde, $this->factores_conversion) && array_key_exists($unidad_hasta, $this->factores_conversion)) {
            return $valor * $this->factores_conversion[$unidad_desde] / $this->factores_conversion[$unidad_hasta];
        } else {
            //throw new Exception("No se puede convertir entre estas unidades de medida.");
            return 0;
        }
    }
}

class ConversorVolumen implements IConvertidor
{
    private $factores_conversion = array(
        "metro_cubico" => 1,
        "litro" => 0.001,
        "galon" => 0.00378541,
        "pie_cubico" => 0.0283168,
        "pulgada_cubica" => 0.0000163871
    );

    public function convertir($valor, $unidad_desde, $unidad_hasta)
    {
        $unidad_desde = strtolower($unidad_desde);
        $unidad_hasta = strtolower($unidad_hasta);

        if (array_key_exists($unidad_desde, $this->factores_conversion) && array_key_exists($unidad_hasta, $this->factores_conversion)) {
            return $valor * $this->factores_conversion[$unidad_desde] / $this->factores_conversion[$unidad_hasta];
        } else {
            //throw new Exception("No se puede convertir entre estas unidades de medida.");
            return 0;
        }
    }
}
class ConversorMoneda implements IConvertidor
{
    private $tasas_conversion = array(
        "USD" => array(
            "EUR" => 0.84,
            "GBP" => 0.72,
            "JPY" => 109.73,
            "CAD" => 1.26,
            "AUD" => 1.30
        ),
        "EUR" => array(
            "USD" => 1.19,
            "GBP" => 0.86,
            "JPY" => 131.51,
            "CAD" => 1.52,
            "AUD" => 1.57
        ),
        "GBP" => array(
            "USD" => 1.39,
            "EUR" => 1.16,
            "JPY" => 151.26,
            "CAD" => 1.74,
            "AUD" => 1.80
        ),
        "JPY" => array(
            "USD" => 0.0091,
            "EUR" => 0.0076,
            "GBP" => 0.0066,
            "CAD" => 0.011,
            "AUD" => 0.012
        ),
        "CAD" => array(
            "USD" => 0.79,
            "EUR" => 0.66,
            "GBP" => 0.57,
            "JPY" => 88.94,
            "AUD" => 1.03
        ),
        "AUD" => array(
            "USD" => 0.77,
            "EUR" => 0.63,
            "GBP" => 0.56,
            "JPY" => 82.40,
            "CAD" => 0.97
        )
    );

    public function convertir($valor, $moneda_desde, $moneda_hasta)
    {
        $moneda_desde = strtoupper($moneda_desde);
        $moneda_hasta = strtoupper($moneda_hasta);

        if (array_key_exists($moneda_desde, $this->tasas_conversion) && array_key_exists($moneda_hasta, $this->tasas_conversion[$moneda_desde])) {
            return $valor * $this->tasas_conversion[$moneda_desde][$moneda_hasta];
        } else {
            throw new Exception("No se puede convertir entre estas monedas.");
        }
    }
}

class ConversorTiempo implements IConvertidor
{
    private $factores_conversion = array(
        "segundo" => 1,
        "minuto" => 60,
        "hora" => 3600,
        "dia" => 86400,
        "semana" => 604800
    );

    public function convertir($valor, $unidad_desde, $unidad_hasta)
    {
        $unidad_desde = strtolower($unidad_desde);
        $unidad_hasta = strtolower($unidad_hasta);

        if (array_key_exists($unidad_desde, $this->factores_conversion) && array_key_exists($unidad_hasta, $this->factores_conversion)) {
            return $valor * $this->factores_conversion[$unidad_desde] / $this->factores_conversion[$unidad_hasta];
        } else {
            //throw new Exception("No se puede convertir entre estas unidades de medida.");
            return 0;
        }
    }
}

class ConversorDatos implements IConvertidor
{
    private $factores_conversion = array(
        "bit" => 1,
        "byte" => 8,
        "kilobyte" => 8192,
        "megabyte" => 8388608,
        "gigabyte" => 8589934592,
        "terabyte" => 8796093022208,
    );

    public function convertir($valor, $unidad_desde, $unidad_hasta)
    {
        $unidad_desde = strtolower($unidad_desde);
        $unidad_hasta = strtolower($unidad_hasta);

        if (array_key_exists($unidad_desde, $this->factores_conversion) && array_key_exists($unidad_hasta, $this->factores_conversion)) {
            return $valor * $this->factores_conversion[$unidad_desde] / $this->factores_conversion[$unidad_hasta];
        } else {
            throw new Exception("No se puede convertir entre estas unidades de medida.");
        }
    }
}

//Retorla la url del proyecto
function base_url()
{
    return BASE_URL;
}

//Retorla la url del Assets
function media()
{
    return BASE_URL . "/Assets";
}

//Muestra información formateada
function dep($data)
{
    $format  = print_r('<pre>');
    $format .= print_r($data);
    $format .= print_r('</pre>');
    return $format;
}

//Elimina exceso de espacios entre palabras
function strClean($strCadena)
{
    $string = preg_replace(['/\s+/', '/^\s|\s$/'], [' ', ''], $strCadena);
    $string = trim($string); //Elimina espacios en blanco al inicio y al final
    $string = stripslashes($string); // Elimina las \ invertidas
    $string = str_ireplace("<script>", "", $string);
    $string = str_ireplace("</script>", "", $string);
    $string = str_ireplace("<script src>", "", $string);
    $string = str_ireplace("<script type=>", "", $string);
    $string = str_ireplace("SELECT * FROM", "", $string);
    $string = str_ireplace("DELETE FROM", "", $string);
    $string = str_ireplace("INSERT INTO", "", $string);
    $string = str_ireplace("SELECT COUNT(*) FROM", "", $string);
    $string = str_ireplace("DROP TABLE", "", $string);
    $string = str_ireplace("OR '1'='1", "", $string);
    $string = str_ireplace('OR "1"="1"', "", $string);
    $string = str_ireplace('OR ´1´=´1´', "", $string);
    $string = str_ireplace("is NULL; --", "", $string);
    $string = str_ireplace("is NULL; --", "", $string);
    $string = str_ireplace("LIKE '", "", $string);
    $string = str_ireplace('LIKE "', "", $string);
    $string = str_ireplace("LIKE ´", "", $string);
    $string = str_ireplace("OR 'a'='a", "", $string);
    $string = str_ireplace('OR "a"="a', "", $string);
    $string = str_ireplace("OR ´a´=´a", "", $string);
    $string = str_ireplace("OR ´a´=´a", "", $string);
    $string = str_ireplace("--", "", $string);
    $string = str_ireplace("^", "", $string);
    $string = str_ireplace("[", "", $string);
    $string = str_ireplace("]", "", $string);
    $string = str_ireplace("==", "", $string);
    return $string;
}

//Genera una contraseña de 10 caracteres
function passGenerator($length = 10)
{
    $pass = "";
    $longitudPass = $length;
    $cadena = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";
    $longitudCadena = strlen($cadena);

    for ($i = 1; $i <= $longitudPass; $i++) {
        $pos = rand(0, $longitudCadena - 1);
        $pass .= substr($cadena, $pos, 1);
    }
    return $pass;
}

//Genera un token
function token()
{
    $r1 = bin2hex(random_bytes(10));
    $r2 = bin2hex(random_bytes(10));
    $r3 = bin2hex(random_bytes(10));
    $r4 = bin2hex(random_bytes(10));
    $token = $r1 . '-' . $r2 . '-' . $r3 . '-' . $r4;
    return $token;
}

//Formato para valores monetarios
function formatMoney($cantidad)
{
    $cantidad = number_format($cantidad, 2, SPD, SPM);
    return $cantidad;
}

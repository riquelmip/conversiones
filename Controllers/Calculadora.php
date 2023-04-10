<?php

class Calculadora extends Controllers
{
    private $convertidor;

    public function __construct()
    {
        parent::__construct();
    }

    public function Calculadora()
    {
        $data['page_tag'] = "Calculadora de Conversión";
        $data['page_title'] = "Calculadora de Conversión";
        $data['page_name'] = "calculadora";
        $this->views->getView($this, "calculadora", $data);
    }

    public function convertir()
    {
        if ($_POST) {

            $tipo = $_POST['tipo'];
            $valor = $_POST['valor'];
            $unidad_desde = $_POST['unidad1'];
            $unidad_hasta = $_POST['unidad2'];

            if (doubleval($valor) >= 0) {
                if ($tipo == 'Longitud') {
                    $this->convertidor = new ConversorLongitud();
                } else if ($tipo == 'Masa') {
                    $this->convertidor = new ConversorMasa();
                } else if ($tipo == 'Volumen') {
                    $this->convertidor = new ConversorVolumen();
                } else if ($tipo == 'Moneda') {
                    $this->convertidor = new ConversorMoneda();
                } else if ($tipo == 'Tiempo') {
                    $this->convertidor = new ConversorTiempo();
                } else if ($tipo == 'Datos') {
                    $this->convertidor = new ConversorDatos();
                }
                $arrResponse = array('estado' => true, 'resultado' => round($this->convertidor->convertir($valor, $unidad_desde, $unidad_hasta), 2), 'ud_final' => $unidad_hasta);
                echo json_encode($arrResponse, JSON_UNESCAPED_UNICODE);
                die();
            } else {
                $arrResponse = array('estado' => false, 'msg' => 'No puede convertir un número negativo');
                echo json_encode($arrResponse, JSON_UNESCAPED_UNICODE);
                die();
            }
        }
    }

    public function getSelects()
    {
        if ($_POST) {

            $tipo = $_POST['tipo'];


            $htmlUnidades = "";
            $arrDataUnidades = array(
                "Longitud" => array(
                    "metro",
                    "centimetro",
                    "pie",
                    "pulgada",
                    "yarda",
                ),
                "Masa" => array(
                    "kilogramo",
                    "gramo",
                    "libra",
                    "onza",
                    "tonelada"
                ),
                "Volumen" => array(
                    "metro_cubico",
                    "litro",
                    "galon",
                    "pie_cubico",
                    "pulgada_cubica"
                ),
                "Moneda" => array(
                    "USD",
                    "EUR",
                    "GBP",
                    "JPY",
                    "CAD",
                    "AUD"
                ),
                "Tiempo" => array(
                    "segundo",
                    "minuto",
                    "hora",
                    "dia",
                    "semana"
                ),
                "Datos" => array(
                    "bit",
                    "byte",
                    "kilobyte",
                    "megabyte",
                    "gigabyte",
                    "terabyte",
                ),

            );

            if ($tipo == 'Longitud') {
                $arr = $arrDataUnidades['Longitud'];
            } else if ($tipo == 'Masa') {
                $arr = $arrDataUnidades['Masa'];
            } else if ($tipo == 'Volumen') {
                $arr = $arrDataUnidades['Volumen'];
            } else if ($tipo == 'Moneda') {
                $arr = $arrDataUnidades['Moneda'];
            } else if ($tipo == 'Tiempo') {
                $arr = $arrDataUnidades['Tiempo'];
            } else if ($tipo == 'Datos') {
                $arr = $arrDataUnidades['Datos'];
            }

            if (count($arr) > 0) {
                foreach ($arr as $unidad) {
                    $htmlUnidades .= '<option value="' . $unidad . '">' . $unidad . '</option>';
                }
            }

            $arrResponse = array('estado' => true, 'unidades' => $htmlUnidades);
            echo json_encode($arrResponse, JSON_UNESCAPED_UNICODE);
            die();
        }
    }
}

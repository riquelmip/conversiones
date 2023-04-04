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
        $this->views->getView($this, "index", $data);
    }

    public function convertir()
    {
        if ($_POST) {
            $tipo = $_POST['tipo'];
            $valor = $_POST['valor'];
            $unidad_desde = $_POST['unidad1'];
            $unidad_hasta = $_POST['unidad2'];

            if ($tipo == 'Longitud') {
                $this->convertidor = new ConversorLongitud();
                $arrResponse = array('estado' => true, 'resultado' => $this->convertidor->convertir($valor, $unidad_desde, $unidad_hasta), 'ud_final' => $unidad_hasta);
            } else if ($tipo == 'Masa') {
                $this->convertidor = new ConversorMasa();
                $arrResponse = array('estado' => true, 'resultado' => $this->convertidor->convertir($valor, $unidad_desde, $unidad_hasta), 'ud_final' => $unidad_hasta);
            } else if ($tipo == 'Volumen') {
                $this->convertidor = new ConversorVolumen();
                $arrResponse = array('estado' => true, 'resultado' => $this->convertidor->convertir($valor, $unidad_desde, $unidad_hasta), 'ud_final' => $unidad_hasta);
            } else if ($tipo == 'Moneda') {
                $this->convertidor = new ConversorMoneda(20.0);
                $arrResponse = array('estado' => true, 'resultado' => $this->convertidor->convertir($valor, $unidad_desde, $unidad_hasta), 'ud_final' => $unidad_hasta);
            } else if ($tipo == 'Tiempo') {
                $this->convertidor = new ConversorTiempo();
                $arrResponse = array('estado' => true, 'resultado' => $this->convertidor->convertir($valor, $unidad_desde, $unidad_hasta), 'ud_final' => $unidad_hasta);
            }
            echo json_encode($arrResponse, JSON_UNESCAPED_UNICODE);
            die();
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
                    "MXN"
                ),
                "Tiempo" => array(
                    "segundo",
                    "minuto",
                    "hora",
                    "dia",
                    "semana"
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

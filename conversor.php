<?php

// interface IConvertidor
// {
//     public function convertir($valor, $unidad_desde, $unidad_hasta);
// }

// class ConversorLongitud implements IConvertidor
// {
//     private $factores_conversion = array(
//         "metro" => 1,
//         "centimetro" => 0.01,
//         "pie" => 0.3048,
//         "pulgada" => 0.0254,
//         "yarda" => 0.9144
//     );

//     public function convertir($valor, $unidad_desde, $unidad_hasta)
//     {
//         $unidad_desde = strtolower($unidad_desde);
//         $unidad_hasta = strtolower($unidad_hasta);

//         if (array_key_exists($unidad_desde, $this->factores_conversion) && array_key_exists($unidad_hasta, $this->factores_conversion)) {
//             return $valor * $this->factores_conversion[$unidad_desde] / $this->factores_conversion[$unidad_hasta];
//         } else {
//             throw new Exception("No se puede convertir entre estas unidades de medida.");
//         }
//     }
// }

// class ConversorMasa implements IConvertidor
// {
//     private $factores_conversion = array(
//         "kilogramo" => 1,
//         "gramo" => 0.001,
//         "libra" => 0.453592,
//         "onza" => 0.0283495,
//         "tonelada" => 1000
//     );

//     public function convertir($valor, $unidad_desde, $unidad_hasta)
//     {
//         $unidad_desde = strtolower($unidad_desde);
//         $unidad_hasta = strtolower($unidad_hasta);

//         if (array_key_exists($unidad_desde, $this->factores_conversion) && array_key_exists($unidad_hasta, $this->factores_conversion)) {
//             return $valor * $this->factores_conversion[$unidad_desde] / $this->factores_conversion[$unidad_hasta];
//         } else {
//             throw new Exception("No se puede convertir entre estas unidades de medida.");
//         }
//     }
// }

// class ConversorVolumen implements IConvertidor
// {
//     private $factores_conversion = array(
//         "metro_cubico" => 1,
//         "litro" => 0.001,
//         "galon" => 0.00378541,
//         "pie_cubico" => 0.0283168,
//         "pulgada_cubica" => 0.0000163871
//     );

//     public function convertir($valor, $unidad_desde, $unidad_hasta)
//     {
//         $unidad_desde = strtolower($unidad_desde);
//         $unidad_hasta = strtolower($unidad_hasta);

//         if (array_key_exists($unidad_desde, $this->factores_conversion) && array_key_exists($unidad_hasta, $this->factores_conversion)) {
//             return $valor * $this->factores_conversion[$unidad_desde] / $this->factores_conversion[$unidad_hasta];
//         } else {
//             throw new Exception("No se puede convertir entre estas unidades de medida.");
//         }
//     }
// }

// class ConversorMoneda implements IConvertidor
// {
//     private $tasa_cambio;

//     public function __construct($tasa_cambio)
//     {
//         $this->tasa_cambio = $tasa_cambio;
//     }

//     public function convertir($valor, $moneda_desde, $moneda_hasta)
//     {
//         if ($moneda_desde == "USD" && $moneda_hasta == "MXN") {
//             return $valor * $this->tasa_cambio;
//         } elseif ($moneda_desde == "MXN" && $moneda_hasta == "USD") {
//             return $valor / $this->tasa_cambio;
//         } else {
//             throw new Exception("No se puede convertir entre estas unidades de medida.");
//         }
//     }
// }

// class ConversorTiempo implements IConvertidor
// {
//     private $factores_conversion = array(
//         "segundo" => 1,
//         "minuto" => 60,
//         "hora" => 3600,
//         "dia" => 86400,
//         "semana" => 604800
//     );

//     public function convertir($valor, $unidad_desde, $unidad_hasta)
//     {
//         $unidad_desde = strtolower($unidad_desde);
//         $unidad_hasta = strtolower($unidad_hasta);

//         if (array_key_exists($unidad_desde, $this->factores_conversion) && array_key_exists($unidad_hasta, $this->factores_conversion)) {
//             return $valor * $this->factores_conversion[$unidad_desde] / $this->factores_conversion[$unidad_hasta];
//         } else {
//             throw new Exception("No se puede convertir entre estas unidades de medida.");
//         }
//     }
// }

// class CalculadoraConversion
// {
//     private $convertidores = array();

//     public function __construct()
//     {
//         $this->convertidores[] = new ConversorLongitud();
//         $this->convertidores[] = new ConversorMasa();
//         $this->convertidores[] = new ConversorVolumen();
//         $this->convertidores[] = new ConversorMoneda(20.0);
//         $this->convertidores[] = new ConversorTiempo();
//     }

//     public function convertir($valor, $unidad_desde, $unidad_hasta)
//     {
//         foreach ($this->convertidores as $convertidor) {
//             try {
//                 return $convertidor->convertir($valor, $unidad_desde, $unidad_hasta);
//             } catch (Exception $ex) {
//                 // No se pudo convertir con este convertidor, intentar con el siguiente
//             }
//         }

//         throw new Exception("No se pudo convertir entre estas unidades de medida.");
//     }
// }

/*
Este código cumple con los principios SOLID de la siguiente manera:

S: Single Responsibility Principle (SRP)
    Cada clase tiene una única responsabilidad y un único motivo de cambio, que es la conversión de una unidad de medida específica.
O: Open/Closed Principle (OCP)
    El código es abierto a la extensión (se pueden agregar nuevos convertidores fácilmente), pero cerrado a la modificación (no es necesario modificar las clases existentes para agregar nuevos convertidores).
L: Liskov Substitution Principle (LSP)
    Todas las clases que implementan la interfaz IConvertidor pueden ser utilizadas indistintamente por la clase CalculadoraConversion.
I: Interface Segregation Principle (ISP)
    La interfaz IConvertidor está diseñada para ser lo más pequeña posible, conteniendo solo un método convertir que es común a todas las clases que la implementan.
D: Dependency Inversion Principle (DIP)
    La clase CalculadoraConversion depende de una abstracción (IConvertidor) en lugar de depender de clases concretas. Esto permite que se puedan agregar nuevos convertidores sin modificar la clase CalculadoraConversion.


La clase CalculadoraConversion es la clase principal que se encarga de realizar las conversiones de unidades de medida. Esta clase contiene un método convertir que toma como parámetros la cantidad a convertir, la unidad de medida de origen y la unidad de medida de destino. El método busca la clase correspondiente a la unidad de medida de origen en el arreglo de instancias de convertidores y utiliza el método convertir de esa clase para realizar la conversión.

El arreglo de instancias de convertidores se utiliza para almacenar instancias de todas las clases que implementan la interfaz IConvertidor. Cada instancia representa un tipo de conversión (por ejemplo, longitud, masa, etc.). El uso de un arreglo permite agregar nuevos tipos de conversión simplemente agregando una nueva instancia al arreglo, sin tener que modificar la clase CalculadoraConversion.

El foreach se utiliza para iterar por cada instancia del arreglo y verificar si la unidad de medida de origen se corresponde con la unidad de medida que maneja la instancia. Si se encuentra una instancia que maneja la unidad de medida de origen, se utiliza su método convertir para realizar la conversión.

*/
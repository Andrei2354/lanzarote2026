<?php

class Idioma
{
    private static $instancia = null;
    public static $lit = array();

    function __construct($idioma='ES')
    {
        // Usar DIRECTORY_SEPARATOR para compatibilidad entre sistemas
        $ruta = $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'lang' . DIRECTORY_SEPARATOR . strtolower($idioma) . '.txt';
        
        // Normalizar la ruta (convertir barras)
        $ruta = str_replace(['/', '\\'], DIRECTORY_SEPARATOR, $ruta);
        
        // Verificar si el archivo existe antes de abrirlo
        if (!file_exists($ruta)) {
            error_log("Archivo de idioma no encontrado: $ruta");
            return;
        }
        
        $descriptor = fopen($ruta, 'r');

        if ($descriptor) {
            while($linea = fgets($descriptor)) {
                $linea = trim($linea);
                
                // Saltar líneas vacías o comentarios
                if (empty($linea) || $linea[0] == '#') {
                    continue;
                }

                $partes_linea = explode(':', $linea, 2); // Limitar a 2 partes por si hay : en el valor
                
                if (count($partes_linea) == 2) {
                    self::$lit[trim($partes_linea[0])] = trim($partes_linea[1]);
                }
            }
            fclose($descriptor);
        }
    }

    public static function getInstancia(): Idioma {
        if(self::$instancia == null) {
            self::$instancia = new Idioma();
        }
        return self::$instancia;
    }

    static function lit($campo)
    {
        self::getInstancia();
        // Retornar el campo mismo si no existe la traducción
        return self::$lit[$campo] ?? $campo;
    }

    public function __clone()
    {
        throw new Exception("No se puede clonar un Singleton");
    }
}
<?php

class AulasController
{

    static function pintar()
    {
        $aulas = new Aulas();


        if(Campo::val('pagina'))
        {
    
            ob_clean();
            
            echo self::Pintar_Aulas(Campo::val('pagina'));
        
        
            exit;
     

        }
        

        $select = new Select(['options' => $aulas->cargar(),'nombre' =>'Aulas']);

        return "
            <div class=\"container contenido\">
                <section class=\"page-section calendario\" id=\"calendario\">
                    " . $select->pintar() . "
                    <div id=\"place_calendario\">" .
                        self::Pintar_Aulas(1) .
                    "</div>

                    <script>
                        document.addEventListener('DOMContentLoaded', () => {
                            const select = document.querySelector('select[name=\"Aulas\"]');

                            select.addEventListener('change', () => {
                                const idCurso = select.value;

                                fetch('?pagina=' + idCurso)
                                    .then(r => r.text())
                                    .then(html => {
                                        document.getElementById('place_calendario').innerHTML = html;
                                    });
                            });
                        });
                    </script>

                </section>
            </div>
        ";

    }  


    static function Pintar_Aulas($id)
    {
        $query = new Query("
            SELECT 
                nombre                            AS Nombre,
            FROM 
                aulas 
            WHERE id = '{$id}';
        ");

        $calendario = [];
        while ($registro = $query->recuperar())
        {
            $calendario[$registro['nombre']] = $registro;
        }



        return "
            <table>
                <tr>
                    <td>nombre</td>
                </tr>
                <tr>
                    <td style=\"background:{$calendario['08:00-08:55']['L']['color_modulo']}\">}</td>
                </tr>

           </table>
        
        ";
    }
}
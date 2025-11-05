<?php

    class Template
    {
        

        static function header($titulo,$descripcion='',$author='1DAW')
        {
            return "
            
                <!DOCTYPE html>
                <html lang=\"zxx\">

                <head>
                    <meta charset=\"UTF-8\">
                    <meta name=\"description\" content=\"Male_Fashion Template\">
                    <meta name=\"keywords\" content=\"Male_Fashion, unica, creative, html\">
                    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
                    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
                    <title>Male-Fashion | Template</title>

                    <!-- Google Font -->
                    <link href=\"https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&display=swap\"
                    rel=\"stylesheet\">

                    <!-- Css Styles -->
                    <link rel=\"stylesheet\" href=\"Plantilla/malefashion-master/css/bootstrap.min.css\" type=\"text/css\">
                    <link rel=\"stylesheet\" href=\"Plantilla/malefashion-master/css/font-awesome.min.css\" type=\"text/css\">
                    <link rel=\"stylesheet\" href=\"Plantilla/malefashion-master/css/elegant-icons.css\" type=\"text/css\">
                    <link rel=\"stylesheet\" href=\"Plantilla/malefashion-master/css/magnific-popup.css\" type=\"text/css\">
                    <link rel=\"stylesheet\" href=\"Plantilla/malefashion-master/css/nice-select.css\" type=\"text/css\">
                    <link rel=\"stylesheet\" href=\"Plantilla/malefashion-master/css/owl.carousel.min.css\" type=\"text/css\">
                    <link rel=\"stylesheet\" href=\"Plantilla/malefashion-master/css/slicknav.min.css\" type=\"text/css\">
                    <link rel=\"stylesheet\" href=\"Plantilla/malefashion-master/css/style.css\" type=\"text/css\">
                </head>
                <body id=\"page-top\">
            
            ";
        }


        // static function nav()
        // {

        //     return "
        //         <!-- Page Preloder -->
        //             <div id=\"preloder\">
        //                 <div class=\"loader\"></div>
        //             </div>

        //             <!-- Offcanvas Menu Begin -->
        //             <div class=\"offcanvas-menu-overlay\"></div>
        //             <div class=\"offcanvas-menu-wrapper\">
        //                 <div class=\"offcanvas__option\">
        //                     <div class=\"offcanvas__links\">
        //                         <a href=\"#\">Sign in</a>
        //                         <a href=\"#\">FAQs</a>
        //                     </div>
        //                     <div class=\"offcanvas__top__hover\">
        //                         <span>Usd <i class=\"arrow_carrot-down\"></i></span>
        //                         <ul>
        //                             <li>USD</li>
        //                             <li>EUR</li>
        //                             <li>USD</li>
        //                         </ul>
        //                     </div>
        //                 </div>
        //                 <div class=\"offcanvas__nav__option\">
        //                     <a href=\"#\" class=\"search-switch\"><img src=\"Plantilla/malefashion-master/img/icon/search.png\" alt=\"\"></a>
        //                     <a href=\"#\"><img src=\"Plantilla/malefashion-master/img/icon/heart.png\" alt=\"\"></a>
        //                     <a href=\"#\"><img src=\"Plantilla/malefashion-master/img/icon/cart.png\" alt=\"\"> <span>0</span></a>
        //                     <div class=\"price\">$0.00</div>
        //                 </div>
        //                 <div id=\"mobile-menu-wrap\"></div>
        //                 <div class=\"offcanvas__text\">
        //                     <p>Free shipping, 30-day return or refund guarantee.</p>
        //                 </div>
        //             </div>
        //     ";

        // }


        static function footer(){

            return "
            <footer class=\"footer\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-lg-3 col-md-6 col-sm-6\">
                            <div class=\"footer__about\">
                                <div class=\"footer__logo\">
                                    <a href=\"#\"><img src=\"Plantilla/malefashion-master/img/footer-logo.png\" alt=\"\"></a>
                                </div>
                                <p>The customer is at the heart of our unique business model, which includes design.</p>
                                <a href=\"#\"><img src=\"Plantilla/malefashion-master/img/payment.png\" alt=\"\"></a>
                            </div>
                        </div>
                        <div class=\"col-lg-2 offset-lg-1 col-md-3 col-sm-6\">
                            <div class=\"footer__widget\">
                                <h6>Shopping</h6>
                                <ul>
                                    <li><a href=\"#\">Clothing Store</a></li>
                                    <li><a href=\"#\">Trending Shoes</a></li>
                                    <li><a href=\"#\">Accessories</a></li>
                                    <li><a href=\"#\">Sale</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class=\"col-lg-2 col-md-3 col-sm-6\">
                            <div class=\"footer__widget\">
                                <h6>Shopping</h6>
                                <ul>
                                    <li><a href=\"#\">Contact Us</a></li>
                                    <li><a href=\"#\">Payment Methods</a></li>
                                    <li><a href=\"#\">Delivary</a></li>
                                    <li><a href=\"#\">Return & Exchanges</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class=\"col-lg-3 offset-lg-1 col-md-6 col-sm-6\">
                            <div class=\"footer__widget\">
                                <h6>NewLetter</h6>
                                <div class=\"footer__newslatter\">
                                    <p>Be the first to know about new arrivals, look books, sales & promos!</p>
                                    <form action=\"#v\">
                                        <input type=\"text\" placeholder=\"Your email\">
                                        <button type=\"submit\"><span class=\"icon_mail_alt\"></span></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-lg-12 text-center\">
                            <div class=\"footer__copyright__text\">
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                <p>Copyright ©
                                    <script>
                                        document.write(new Date().getFullYear());
                                    </script>2020
                                    All rights reserved | This template is made with <i class=\"fa fa-heart-o\"
                                    aria-hidden=\"true\"></i> by <a href=\"https://colorlib.com\" target=\"_blank\">Colorlib</a>
                                </p>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        ";

        }


        static function seccion($seccion)
        {

            switch($seccion)
            {
                case 'usuarios':
                    $contenido = Usuario::pintar();
                break;

                default:
                    $contenido = Portada::pintar();
                break;
            }

            return $contenido;


        }

                static function navegacion($total_registros, $pagina)
        {
            $pagina_siguiente = ($total_registros == LISTADO_TOTAL_POR_PAGINA)?  "<li class=\"page-item\"><a class=\"page-link\" href=\"/?seccion=usuarios&oper=list&pagina={$pagina}\">Siguiente</a></li>" : '';
            $pagina_anterior  = ($pagina != 1)? "<li class=\"page-item\"><a class=\"page-link\" href=\"/?seccion=usuarios&oper=list&pagina=". ($pagina-2) ."\">Anterior</a></li>" : '';

            return "
                <nav>
                    <ul class=\"pagination\">
                        {$pagina_anterior}
                        {$pagina_siguiente}
                    </ul>
                </nav>
            ";



        }


    }
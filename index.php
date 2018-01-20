<?php
            //require the autolaod file
            require_once ('vendor/autoload.php');

            //create an instance of the base class
            $f3 = Base::instance();

            //Set debug level
            $f3->set('DEBUG',3);

            //define a default route
            $f3->route('GET /',function() {
                    $template = new Template();
                    echo $template->render ('/pages/home.html');
                }
            );
            //run fat free
            $f3->run();
?>
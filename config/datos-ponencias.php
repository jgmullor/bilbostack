<?php

$app['ponencias'] = array(
    'track1_ponencia1' => array(
        'track'   => '1',
        'slug'    => 'track1_ponencia1',
        'titulo'  => 'Montando un escenario de integración continua',
        'empieza' => '9:00', 'termina' => '9:50',
        'ponente' => 'ibon-landa',
        'descripcion' => <<<HTML
<p>Durante esta sesión se mostrará de forma práctica cómo es posible montar un 
escenario de integración continua dónde se pueda construir el software cada vez
que se realiza  alguna modificación y pasar las pruebas de forma automatizada,
a la vez que se hace uso de una plataforma de Cloud Computing para desplegarla
durante el proceso.</p>

<p>Durante la sesión se empleará Azure WebSites como plataforma de Cloud
Computing dónde desplegar las aplicaciones, plataforma que permite trabajar
con GitHub, TFS Service, Bitbucket o CodePlex para crear escenarios de
integración continua.</p>
HTML
    ),

    'track1_ponencia2' => array(
        'track'   => '1',
        'slug'    => 'track1_ponencia2',
        'titulo'  => 'Prácticas ágiles para cambiar el desarrollo del software',
        'empieza' => '10:05', 'termina' => '10:55',
        'ponente' => 'rodrigo-corral',
        'descripcion' => <<<HTML
<p>En lo últimos años las metodologías ágiles han emergido con fuerza pero aun
con más fuerza han emergido una serie de prácticas de universal aplicación que
han cambiado de forma radical la manera en la que hacemos software. La
priorización por valor, el conocimiento compartido, la automatización del
testeo, la disminución de los desperdicios, las construcciones automatizadas
y la integración continua son algunas de estas técnicas que pueden ayudarte
a construir software de manera más eficiente y con mayor calidad.</p>

<p>En esta charla repasaremos alguna de estas técnicas enfocándonos en ver las 
dificultades de su implantación y las ventajas de su uso.</p>
HTML
    ),

    'track1_ponencia3' => array(
        'track'   => '1',
        'slug'    => 'track1_ponencia3',
        'titulo'  => 'Silex, desarrollo web ágil y profesional con PHP',
        'empieza' => '11:10', 'termina' => '12:00',
        'ponente' => 'javier-eguiluz',
        'descripcion' => <<<HTML
<p>Silex es el microframework de moda en el mundo PHP. Silex te permite
desarrollar aplicaciones web profesionales con una agilidad sin precedentes.
Su aprendizaje es tan rápido y sencillo que podrás dominarlo en menos de
una hora.</p>

<p>Durante la sesión se mostrará en la práctica cómo crear una aplicación
partiendo de cero. Además, se explicarán buenas prácticas, creación de tests,
alto rendimiento y definición de servicios.</p>
HTML
    ),

    'track1_ponencia4' => array(
        'track'   => '1',
        'slug'    => 'track1_ponencia4',
        'titulo'  => 'Desarrollo Web ágil con Python y Django',
        'empieza' => '12:15', 'termina' => '13:05',
        'ponente' => 'mikel-trujillo-y-jon-eguiluz',
        'descripcion' => <<<HTML
<p>Expondremos los entresijos de lo que para muchos es el framework más sexy de
 desarrollo Web del momento, adoptado por webs como The New York Times, The
 Guardian o The Washington Post y empresas como Google o Yahoo.</p>

<p>La meta fundamental de Django es facilitar la creación de sitios web
complejos. Django pone énfasis en el re-uso, la conectividad y extensibilidad
de componentes, el desarrollo rápido y el principio No te repitas (DRY, del
inglés Don’t Repeat Yourself)</p>
HTML
    ),

    'track1_ponencia5' => array(
        'track'   => '1',
        'slug'    => 'track1_ponencia5',
        'titulo'  => 'SEO y programadores. Peleas de barro.',
        'empieza' => '13:20', 'termina' => '14:10',
        'ponente' => 'carlos-sanchez',
        'descripcion' => <<<HTML
<p>SEOs y programadores. No se entienden, no se aman. Dejemos que se peleen en
el barro. Ambos saldrán vencedores.</p>

<p>Hoy en día no se puede entender el SEO sin desarrollo técnico ni
programadores sin conocimientos de SEO. Tras esta pelea conoceremos casos
prácticos de aplicación de trabajo muy técnico en tareas SEO imprescindibles,
aplicados en sitios de alto tráfico.</p>
HTML
    ),


    'track2_ponencia1' => array(
        'track'   => '2',
        'slug'    => 'track2_ponencia1',
        'titulo'  => 'Funciones de tiempo y temporizadores en JavaScript',
        'empieza' => '9:00', 'termina' => '9:50',
        'ponente' => 'pablo-garaizar',
        'descripcion' => <<<HTML
<p>En la última década hemos asistido a la evolución de JavaScript como un
lenguaje de apoyo a la interacción en aplicaciones web al lenguaje de
referencia para el desarrollo de aplicaciones multiplataforma en infinidad
de contextos. Muchas de estas aplicaciones exigen una gestión temporal precisa,
tanto en el registro de marcas temporales como en la definición de tareas
programadas en el futuro.</p>

<p>En esta charla conoceremos cuáles son los mecanismos de temporización
disponibles en JavaScript. El objetivo principal es que podamos responder a
preguntas tales como: qué grado de precisión puedo alcanzar realizando pruebas
que se apoyan en esta función de tiempo? ¿Qué mecanismo de temporización
debería utilizar para gestionar los eventos en mi juego? ¿Qué nuevas API están
siendo desarrolladas para mejorar este aspecto?</p>
HTML
    ),

    'track2_ponencia2' => array(
        'track'   => '2',
        'slug'    => 'track2_ponencia2',
        'titulo'  => 'UX, la opción para unificar diseño multidispositvos',
        'empieza' => '10:05', 'termina' => '10:55',
        'ponente' => 'david-barahona',
        'descripcion' => <<<HTML
<p>HTML5 vs Desarrollo Nativo: casos y tecnologías, enfoques de trabajo,
cuando ser homogéneo, cuando mimetizarse con los ecosistemas, una muestra de
casos reales.</p>

<p>Responsive vs mobile: pros y contras, diseño responsive, diseño mobile
independiente, web app, analizamos algunos ejemplos.</p>

<p>Eventos e Interacciones: nuevos enfoques en dispositivos mobile/desktop,
interfaz gráfica, navegación por gestos.</p>

<p>Profecías y Porvenires: analizamos lo que viene, algunos pronósticos para
los próximos años.</p>
HTML
    ),

    'track2_ponencia3' => array(
        'track'   => '2',
        'slug'    => 'track2_ponencia3',
        'titulo'  => 'Css preprocessors',
        'empieza' => '11:10', 'termina' => '12:00',
        'ponente' => 'naiara-abaroa',
        'descripcion' => <<<HTML
<p>El modo de maquetar web y la filosofía de utilización de las css ha cambiado
con las Css Preprocessors, estas no solo nos permiten trabajar de manera más
ágil, sino que nos ayudan a ordenar y optimizar el código.</p>

<p>Ventajas: más rapidez en el trabajo, optimizar las hojas de estilo para que
sean más ligeras, ordenar el código de manera que sea reutilizable y
mantenible.</p>

<p>Cuáles: Oocss, Less, Sass, Smacss, Stylus, ...</p>

<p>Características principales: Oocss (qué es, la filosofía, consejos de
utilización. Cómo instalarlo.); Less (qué es, funciones principales: variables
y mixings. Cómo instalarlo.); Sass (qué es, funciones principales: variables,
mixings, imports. Cómo instalarlo.)</p>

<p>El uso: cuál utilizar, cuándo, utilización de varios a la vez… consejos
sacados de la experiencia personal.</p>
HTML
    ),

    'track2_ponencia4' => array(
        'track'   => '2',
        'slug'    => 'track2_ponencia4',
        'titulo'  => 'SignalR, comunicación “real-time” en tus aplicaciones',
        'empieza' => '12:15', 'termina' => '13:05',
        'ponente' => 'gerard_lopez',
        'descripcion' => <<<HTML
<p>¿Comunicación en tiempo real? ¿Enviar mensajes desde el servidor a los
diferentes clientes?</p>

<p>Veremos cómo la librería ASP.NET SignalR nos permite añadir esta
funcionalidad a nuestras aplicaciones de una manera increíblemente simple,
haciendo uso de la especificación de WebSockets de HTML5 pero sin olvidar la 
compatibilidad con fallbacks cuando no esté soportado. Analizaremos tanto los
posibles escenarios cómo la implementación para crear aplicaciones
“real-time”.</p>
HTML
    ),

    'track2_ponencia5' => array(
        'track'   => '2',
        'slug'    => 'track2_ponencia5',
        'titulo'  => 'Motores de Render en HTML5',
        'empieza' => '13:20', 'termina' => '14:10',
        'ponente' => 'joseba-rodriguez',
        'descripcion' => <<<HTML
<p>Uno de los elementos más críticos para crear un juego es el pintado, que
tiene que ser rápido y eficiente. HTML5 proporciona nuevas herramientas para
poder crear gráficos interactivos en tiempo real.</p>

<p>El objetivo de la charla es exponer y discutir diferentes técnicas y
opciones para crear un motor de render de alto rendimiento, que haga que los
gráficos de nuestro juego se muevan de forma fluida.</p>
HTML
    ),
);

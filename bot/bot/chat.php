<?php
include "Bot.php";
$bot = new Bot;
$questions = [
    //CONCEPTOS BASICOS
    
    "que es la nutricion?" => "la nutricion es la ingesta de alimentos en relacion con las necesidades dieteticas
    del organismo. Una buena nutricion es un elemento fundamental de la buena salud",

    "que es el ejercicio?" =>"se llama ejercicio fisico a cualquier actividad fisica que mejore y mantiene la actitud fisica, la salud y el bienestar de la persona",

    "que es la salud?"=> "es un estado de bienestar o de equilibrio, el termino salud se contrapone al de enfermedad, y es objeto de especial atencion por parte de la edicina y de las ciencias de la salud",

    "que son las calorias?"=>"cuando se habla de calorias se refiere a la energia que las personas obtienen de los alimentos y beidas que consumen, y la energia que usa nuestro propio uerpo en la actividad fisica",

    // calorias 

    "cuales son los alimentos con mas calorias?"=>"los alimentos con mas calorias son los siguientes <br>
    1.- aceites vegetales:aportan hasta 900 calorias por cada 100 gramos <Br>
    2.- mayonesa clasica: aporta 831 calorias por cada 100 gramos <br>
    3.-mantequilla: aporta 750 calorias por cada 100 gramos de producto <br>
    4.-nueces:aporta 640 calorias por cada 100 gramos <br>
    5.-Tocino: aporta 645 calorias por cada 100 gramos <br>
    6.- Avellanas aportan alrededor de 620 calorias por cada 100 gramos <br>
    ",
    "cuales son los alimentos con menos calorias?"=>"los alimentos con menos calorias son los siguientes <br>
    1.- Frutas: las manzanas y la papaya aportan muy pocas calorias <br>
    2.-verduras: todo tipo de verduras tienen muy pocas calorias ademas contienen fibra, vitaminas y minerales <br>
    3.-papas <br>
    4.-Huevos<br>
    5.-Pescados magros: como bacalao, merluza, lenguado, abadejo y gallo <br>
    6.-esparragos: con cero calorias <br>
    7.- pollo o pavo: aves con poca grasa si se les quita la piel <br>
    8.- cereales integrales: contienen mucha fibra y proteinas",


   // ejercicio 
    "cuales son los beneficios del ejercicio?"=> "1.-disminucion del riesgo de enfermedades cronicas,<br> 2.-una mejora del humor y de la salud mental,<br> 3.-Niveles estables de energia durante el dia,<br> 4.-Ralentizacion del proceso de envejecimiento,<br> 5.-Mejora de la salud cerebral",
   

    "cuales son los tipos de ejercicio mas comunes?"=> "<strong>Cardio:</strong> cualquier actividad que haga aumentar tu ritmo cardiaco y te haga respirar mas rapido se puede considerar cardio. <br> <br>

   <strong> cardio moderado: </strong> caminar a paso ligero, bailar, hacer jogging, ciclismo, natacion. <br> <br>

    <strong>cardio intenso:</strong> running, ciclismo rapido, caminar a paso ligero en subida, vueltas de natacion.<br> <br>

    <strong>entrenamiento de fuerza:</strong> cualquier tipo de actividad que use resistencia para ganar fuerza muscular",
    "rutina de ejercicios" => " <ul>
    <li> calentamiento: realiza unos 10 minutos de carrera en el sitio, alternando elevacion de rodillas al pecho talones y hacia los gluteos.</li><br>

    <li> flexiones de brazos  o lagartijas: 3 series de 12 repeticiones de cada una. Recuerda separar las manos del ancho de los hombros y que queden alineados con estos </li><br> 

    <li>Sentadillas: 3 series de 10 repeticiones. Si eres principiante puedes realizarlo con ayuda de una silla delante tuyo. Los pies deben estar separados del ancho de la cadera </li><br>

    <li>fondos de triceps: 3 series de 12 repeticiones. con ayuda de una silla o un banco, debes colocar las manos alli y distanciar los pies para bajar la cadera mientras flexionas los codos y los llevas hacia atras </li><br>

    <li> zancadas con piernas altrnadas: 2 series de 14 repeticiones. Recuerda que la rodilla flexionada no debe psar la punta del pie </li> <br>

    <li> elevaciones laterales de brazos: 3 serires de 15 repeticiones. Con peso en ambas manos pueden ser botellas de agua, mancuernas, bolsas de arena, piedras o paquetes de harina.  </li> <br>
    
    <li> abdominales: 2 serires de 20 repeticiones, debemos levantar el torso sin forzar el cuello e intentar unir simultaneamente codo con rodilla contraria, simulando un movimiento de pedaleo constante con las piernas</li><br>

    <li> tabla: 3 series de 20 segundos cada una. colocando los antebrazos en el piso y las puntas de los pies apoyados, debemos contraer isometricamente el abdomen para mantener el cuerpo en linea recta por 20 segundos aproximadamente </li><br>
    <li> remo horizontal: 2 series de 15 epeticiones con peso en ambas manos y torso hacia adelante, elevamos ambas manos simultaneamente </li><br>
    <li> saltar: 3 series de 8 minutos cada una. puedes saltar la ritmo que quieras y con el salto que desees. bajar poco a poco la intensidad. </li><br>
    </ul>",




   
    
       
    //name
    "como te llamas?" =>"Soy NutriBot y estoy para servirte",
    "cual es tu nombre?" =>"Soy NutriBot y estoy para servirte",
    "tienes nombre?" =>"Soy NutriBot y estoy para servirte",


    //saludo
    "hola" =>"Hola que tal!",
    "un saludo" =>"como te va",
    "hello" =>"un gusto de verte",
    "como estas?"=>"muy bien, y tu, ¿que tal? ",
    "a que te dedicas?"=> "me dedico a investigar la informacion necesaria para tu salud",
    "cual es tu edad?"=>"soy muy joven a penas tengo unas semanas de creacion",

 
    //despedida
    "adios" =>"cuidate",
    "hasta la proxima" =>"nos vemos pronto",
    "nos vemos" =>"te estare esperando",
    "bye" =>"Good bye ♥",
    "see you" =>"see you lader ♥",
    //
    "what is your name?" =>" my name is CoroBot",
   


    "tu nombre es?" => "Mi nombre es " . $bot->getName(),
    "tu eres?" => "Yo soy un sistema inteligente capaz de ayudarte a responder cuestiones sobre la nutricion "
    
];

if (isset($_GET['msg'])) {
   
    $msg = strtolower($_GET['msg']);
    $bot->hears($msg, function (Bot $botty) {
        global $msg;
        global $questions;
        if ($msg == 'hi' || $msg == "hello") {
            $botty->reply('Hola');
        } elseif ($botty->ask($msg, $questions) == "") {
            $botty->reply("Lo siento, Las preguntas deben estar relacionadas con nutricion.");
        } else {
            $botty->reply($botty->ask($msg,$questions));
        }
    });
}

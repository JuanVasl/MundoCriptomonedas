@extends('layouts.app')
@section('title', 'Reglas de oro')
@section('content')

</head>
<body bgcolor="#E8F9FD">
    <div>
  <center><h1>Reglas de oro de las interfaces</h1></center>  
    <p class="centrarestetexto">Los diseñadores deben resolver problemas todos los días, y encontrar la solución adecuada involucra una investigación profunda y pruebas cuidadosamente planificadas. Sería magnífico descubrir un enfoque único para todos o una fórmula secreta que automáticamente resolviera todos los problemas de diseño de nuestra interfaz. Es posible que todavía no tengamos la respuesta para eso, pero sí conocemos ciertos atajos que a veces podemos tomar.</p>
    <p>El Objetivo es conocer las ocho reglas de oro para diseñar de la mejor manera una interfaz clara, amigable, llamativa y coherente, que pueda resolver un problema del día  de una manera eficaz y sin ningún error al momento de la resolución sobré dicho problema. El creador de las reglas es ben shneiderman, que es un científico informático  estadounidense y profesor en el Laboratorio de Interacción Humano-Computadora de la Universidad de Maryland. En su popular libro ”Diseño la interfaz de usuario: Estrategias para una interacción hombre-computadora efectiva”, Shneiderman revela sus ocho reglas de oro del diseñó de interfaces siguientes:</p>
   <h2> 1) Trabaja por la consistencia</h2>
    <p>Diseñar “interfaces consistentes” significa utilizar los mismos patrones de diseño y las mismas secuencias de acciones para situaciones similares. Esto incluye, pero no se limita a, el uso correcto del color, la tipografía y la terminología en las pantallas de aviso, comandos y menús a lo largo del viaje de tu usuario</p>
    <p>Recuerda: una interfaz coherente permitirá a tus usuarios completar sus tareas y objetivos con mucha más facilidad.</p>
    <h2>2) Permite que los usuarios frecuentes utilicen atajos</h2>
    <p>Hablando de utilizar las reglas de UI como accesos directos, tus usuarios también se beneficiarán de los accesos directos, especialmente si necesitan completar las mismas tareas con frecuencia.
        Los usuarios expertos pueden encontrar útiles las siguientes características:
        </p>
<ol>
<li>Abreviaturas</li>
<li>Teclas de función</li>
<li>Comandos ocultos</li>
<li>Macro facilites</li>
</ol>
<h2>3) Ofrece comentarios informativos</h2>
<p>Necesitas mantener a tus usuarios informados de lo que está ocurriendo en cada etapa de su proceso. Esta retroalimentación debe ser significativa, relevante, clara y adaptada al contexto.</p>
<h2>4) Diseña un diálogo para notificar la conclusión</h2>
<p>Déjame explicar. Las secuencias de acciones necesitan tener un principio, medio y final. Una vez que una tarea sea completada, otorga un poco de tranquilidad a tu usuario proporcionándole comentarios informativos y opciones bien definidas para el siguiente paso, si ese es el caso. ¡No dejes que se lo pregunten!</p>
<h2>5) Ofrece un manejo simple de errores</h2>
<p>Una buena interfaz debe estar diseñada para evitar errores tanto como sea posible. Pero cuando los errores ocurren, tu sistema necesita hacer que sea fácil para el usuario entender el problema y saber cómo resolverlo. Las métodos para manejar los errores incluyen desplegar notificaciones de error claras junto a sugerencias descriptivas para resolver el problema.</p>
<h2>6) Permite una reversión fácil de acciones</h2>
<p>Es un alivio instantáneo encontrar esa opción de "deshacer" después de cometer un error. Tus usuarios se sentirán menos ansiosos y será más probable que exploren opciones si saben que existe una forma fácil de revertir cualquier accidente.</p>
<p>Esta regla se puede aplicar a cualquier acción, grupo de acciones o entrada de datos. Puede abarcar desde un simple botón hasta un historial completo de acciones.</p>
<h2>7) Soporta un punto de control interno</h2>
<p>Es importante proporcionar control y libertad a tus usuarios para que puedan sentir que están a cargo del sistema, y no al revés. Evita sorpresas, interrupciones o cualquier cosa que no haya sido solicitada por los usuarios.</p>
<p>Los usuarios deben ser los iniciadores de las acciones en vez de ser los que respondan.</p>
<h2>8) Reduce la carga de memoria a corto plazo</h2>
<p>Nuestra capacidad de atención es limitada y cualquier cosa que podamos hacer para facilitar el trabajo de nuestros usuarios, es mejor. Para nosotros es más fácil reconocer la información que recordarla. Aquí, podemos mencionar a uno de los principios de Nielsen que describen el "reconocimiento sobre el recuerdo". Si mantenemos nuestras interfaces simples y consistentes, obedeciendo a patrones, estándares y convenciones, ya estamos contribuyendo a un mejor reconocimiento y facilidad de uso.</p>
<p>Hay varias características que podemos añadir para ayudar a nuestros usuarios según sus objetivos. Por ejemplo, en un entorno de comercio electrónico, una lista de artículos vistos recientemente o que hayan sido comprados.</p>
</div>
</body>
</html>

@endsection
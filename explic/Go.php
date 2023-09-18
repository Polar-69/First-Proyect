<?php
include "../template/base.php";
?>
<div class="content">
    <div class="row">
        <div class="col-12">
            
            <h1 class="encabezado">Go:</h1>

            <p class="text-tl">El lenguaje Go (también llamado GoLang) es un lenguaje de programación de código abierto, de propósito general, desarrollado por los ingenieros de Google para crear software confiable y eficiente.</p>

            <p class="text-tl">Robert Griesemer, Rob Pike y Ken Thompson comenzaron a diseñar Go alrededor de 2007. Pero fue hasta 2011 cuando se presentó su primera versión estable.</p>

            <p class="text-tl">El diseño de Go está inspirado en lenguajes como Algol, Pascal, C, Modula, Oberon, Smalltalk y Newsqueak. Hereda elementos del lenguaje Oberon y su sintaxis es de C. La OOP de Go se parece más a Smalltalk pero en Go, puede adjuntar métodos a cualquier tipo. Y la concurrencia es principalmente de Newsqueak, que también es un lenguaje de Rob Pike y está muy inspirado en el papel de Hoare de CSP (Comunicar procesos secuenciales).</p>

            <p class="text-tl">Algunas de las ventajas que ofrece Go son:</p>

            <p class="text-tl">Escrito estáticamente:</p>
    
            <p class="text-tl">Significa que debe declarar tipos para todas sus variables y funciones (y devolver variables) en el momento de la compilación. Si bien esto puede parecer como un inconveniente, esta es una gran ventaja, ya que se encontrarán muchos errores en el momento de la compilación. Este factor juega un papel muy importante cuando aumenta el tamaño de su equipo, ya que los tipos declarados hacen que las funciones y las bibliotecas sean más legibles y más fáciles de entender.</p>

            <p class="text-tl">Velocidad de compilación:</p>

            <p class="text-tl">El código Go se compila realmente rápido, por lo que no es necesario esperar esos tiempos tan largos. De hecho, el comando ‘go run’ enciende tu programa Go tan rápidamente que ni siquiera tienes la sensación de que tu código se compiló primero. Se siente como un lenguaje interpretado.</p>

            <p class="text-tl">Velocidad de ejecución:</p>

            <p class="text-tl">Go se compila directamente al código de la máquina, dependiendo del sistema operativo (Linux / Windows / Mac) y la arquitectura del conjunto de instrucciones de la CPU (x86, x86–64, brazo, etc.) de la máquina en la que se está compilando el código . Por lo tanto, se ejecuta muy rápido.</p>

            <p class="text-tl">Portátil:</p>

            <p class="text-tl">Debido a que el código se compila directamente al código de la máquina, por lo tanto, los binarios se vuelven portátiles. La portabilidad aquí significa que puede recoger el binario de tu máquina (digamos Linux, x86–64) y ejecutarlo directamente en su servidor (si su servidor también está ejecutando Linux en una arquitectura x86–64).</p>

            <p class="text-tl">Esto es posible ya que los binarios de Go están vinculados estáticamente, lo que significa que cualquier biblioteca de sistema operativo compartida que necesite su programa se incluye en el binario en el momento de la compilación. No están vinculados dinámicamente al momento de ejecutar el programa.</p>

            <p class="text-tl">Concurrencia:</p>

            <p class="text-tl">Go tiene soporte de primera clase para la concurrencia. La concurrencia es uno de los principales puntos de venta de Go. Los diseñadores de lenguajes han diseñado el modelo de concurrencia en torno al documento «Comunicando procesos secuenciales» de Tony Hoare.</p>

            <p class="text-tl">Golang tiene características similares a otros lenguajes de programación, pero proporciona una alternativa única en general. El principal objetivo de diseño de Go es facilitar la compilación rápida, a diferencia de otros lenguajes comunes.</p>

            <p class="text-tl">Cuando se compara con C ++, Go reduce la cantidad de errores y dependencias en tiempo de ejecución al tiempo que aumenta la seguridad de la memoria.</p>

            <p class="text-tl">Ruby proporciona un enfoque más seguro, pero requiere un intérprete y demora más en compilar. Java es otro lenguaje de programación popular, sin embargo, requiere una máquina virtual para ejecutar el código. Go elimina esta necesidad y también combate la complejidad y verbosidad del propio código Java.</p>
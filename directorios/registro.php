<?php
include "../template/base.php";
?>
<div class="content">
    <div class="row">
        <div class="col-12">
            <h1 class="encabezado">Bienvenido al registro:</h1>
            <h2 class="text-reg">Aqui podras registrarte para formar parte de nuestra comunidad.</h2>
            <div class="form-registrer">
                <h2 class="subtitle-form">Por favor rellene el formulario:</h2>
                <form action="../bd/reg.php" method="POST">


                    <input class="form-control" type="text" placeholder="Ingresar nombre" name="nombre" id="nombre" required>
                    <br/>
                    


                    <input class="form-control" type="text" placeholder="Ingresar apellidos" name="apellidos" id="apellidos" required>
                    <br/>
                    


                    <input class="form-control" type="text" placeholder="Ingresar usuario" name="usuario" id="usuario" required>
                    <br/>



                    <input class="form-control" type="password" placeholder="Ingresar contraseña" name="pass" id="password" required>
                    <br/>


                    <input class="form-control" type="date" placehelder="fecha" name="fecha" id="date" required>
                    <br/>

                    <select class="form-select" name="sexo">
                        <option selected>Masculino</option>
                        <option value="1">Femenino</option>
                        <option value="2">Inseguro</option>
                    </select>
                    <br/>

                    <input class="form-bottom" type="submit" value="Enviar">

                </form>
            </div>
<%-- 
    Document   : index
    Created on : 12-oct-2016, 13:02:58
    Author     : Sammy Guergachi <sguergachi at gmail.com>
--%>
<%@page import="java.sql.SQLException"%>
<%@page import="java.sql.ResultSet"%>
<%@page import="java.sql.Statement"%>
<%@page import="javax.swing.JOptionPane"%>
<%@page import="java.sql.Connection"%>
<%@ page import="java.util.*" %>
<%@page import="java.sql.Array"%>
<%@page import="Modelo.Propiedad"%>
<%@ page import="java.text.SimpleDateFormat"%>
<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="Bootstrap/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="Css/Login.css"/>
         <link rel="shortcut icon" href="Imagenes/logo.png" type="image/png">
        <title>Login</title>
    </head>
    <body>


        <div class="container well" id="sha">
            <div class="row">
                <div class="col-xs-12">
                    <%
                       
                        String foto = "";
                        if (request.getAttribute("Foto") != null && request.getAttribute("F") != null) {
                            foto = (String) request.getAttribute("Foto");

                    %>
                    <img src=<%=foto%> class="img-responsive" id="avatar">
                    <% } else {%>
                    <img src="Imagenes/usua.jpg" class="img-responsive" id="avatar">
                    <% }%>
                </div>
            </div>

            <form class="login" action="ValidacionLogin" method="POST">
                <div class="form-group">

                    <div class="input-group">     
                        <span class="input-group-addon glyphicon glyphicon-user"> </span>
                        <input id="Documento" type="text" class="form-control" placeholder="Numero De Documento" name="Documento" onchange="validacion('Documento');"  required autofocus>                   
                    </div>
                </div>


                <div class="form-group">
                    <div class="input-group">     
                        <span class="input-group-addon glyphicon glyphicon-asterisk"> </span>
                        <input id="pass" type="password" class="form-control" placeholder="Contraseña ****" name="pass" onchange="validacion('pass');" required>
                    </div>
                </div>



                <button class="btn btn-lg btn-primary btn-block" type="submit" onclick='verificar();'>iniciar sesión</button>

                <div class="right checkbox-inline text-info ">

                    <label class="right checkbox ">
                        <input class=" checkbox active" type="checkbox" value="1" name="NocerrarSess"> No cerrar sesión
                    </label>
                    <p class="help-block text-center"><a href="#">¿No puedes acceder a tu cuenta?</a></p>
                    <p class="help-block text-center">¿No tiene una cuenta? <a href="RegistroUsuario.jsp"> Cree una.</a></p>
                </div>

            </form>

        </div>

        <script src="JS/ValidarIniSess.js"></script>
        <script src="JS/reloj.js"></script>
        <script src="Bootstrap/js/bootstrap.min.js"></script>
        <script src="Bootstrap/js/Jquery.js"></script>
    </body>
</html>

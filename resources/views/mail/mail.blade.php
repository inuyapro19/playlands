<html>
<head>
<meta charset="utf-8">
<style type="text/css">
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
</style>
</head>

<body>
<table width="800" border="0" align="center" cellpadding="0" cellspacing="0" style="border:#C9CACF solid 1px;">
  <tr>
    <td><img src="{{asset('front/imagenes/header-formulario.jpg')}}" width="800" height="150"  alt=""/></td>
  </tr>
  <tr>
    <td><span style="color: #03081E; font-family:Arial; font-size:14px; font-weight:bold; padding:10px 20px; display:block;">NOMBRE:</span></td>
  </tr>
  <tr>
    <td><span style="color: #03081E; font-family:Arial; font-size:14px; padding:10px 20px; display:block;">{{$nombre}}</span></td>
  </tr>
  <tr>
    <td><span style="color: #03081E; font-family:Arial; font-size:14px; font-weight:bold; padding:10px 20px; display:block;">TELÉFONO:</span></td>
  </tr>
  <tr>
    <td><span style="color: #03081E; font-family:Arial; font-size:14px; padding:10px 20px; display:block;">{{$telefono}}</span></td>
  </tr>
  <tr>
    <td><span style="color: #03081E; font-family:Arial; font-size:14px; font-weight:bold; padding:10px 20px; display:block;">E-MAIL:</span></td>
  </tr>
  <tr>
    <td><span style="color: #03081E; font-family:Arial; font-size:14px; padding:10px 20px; display:block;">{{$email}}</span></td>
  </tr>
  <tr>
    <td><span style="color: #03081E; font-family:Arial; font-size:14px; font-weight:bold; padding:10px 20px; display:block;">CIUDAD:</span></td>
  </tr>
  <tr>
    <td><span style="color: #03081E; font-family:Arial; font-size:14px; padding:10px 20px; display:block;">{{$ciudad}}</span></td>
  </tr>
  <tr>
    <td><span style="color: #03081E; font-family:Arial; font-size:14px; font-weight:bold; padding:10px 20px; display:block;">MENSAJE:</span></td>
  </tr>
  <tr>
    <td><span style="color: #03081E; font-family:Arial; font-size:14px; padding:10px 20px 50px 20px; display:block;">{{$mensaje}}</span></td>
  </tr>
  <tr>
    <td height="50" align="center" valign="middle" bgcolor="#92b72d"><span style="color:#FFF; font-family:Arial; font-size:14px; font-weight:bold; display:block;"> MENSAJE DE RESPALDO GENERADO AUTOMATICAMENTE - WWW.PLAYLANDKIDS.CL</span></td>
  </tr>
  
</table>
</body>
</html>
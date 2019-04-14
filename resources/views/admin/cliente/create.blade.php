<html>
<head></head>
<body>
<h1>Criar novo Clientes</h1>
<form method="post" action="/admin/client/cadastrar">
    {!! csrf_field() !!}
    <label for="name">Nome</label>
    <input type="text" id="name" name="name"/>
    <label for="email">E-mail</label>
    <input type="text" name="email" id="email">
    <button type="submit">Enviar</button>
</form>
</body>
</html>
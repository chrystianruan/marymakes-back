<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    <form action="https://marymakes-back-production.up.railway.app/api/new/user" method="POST">
        @csrf
        <div style="display: flex; flex-wrap: wrap; flex-direction: column">
            <div>
                <label>Email</label>
                <input type="email" name="email">
            </div>

            <div>
                <label>Senha</label>
                <input type="password">
            </div>

            <div>
                <button>Enviar</button>
            </div>
        </div>
    </form>
</body>
</html>
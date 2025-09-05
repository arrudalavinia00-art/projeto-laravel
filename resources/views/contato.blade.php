<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato</title>
    <style>
        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            background: linear-gradient(120deg, #f8fafc 0%, #e0e7ef 100%);
            color: #22223b;
            margin: 0;
            padding: 0;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        .container {
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 4px 24px rgba(34,34,59,0.08);
            padding: 32px 40px;
            max-width: 480px;
            width: 100%;
            text-align: center;
        }
        h1 {
            color: #3a86ff;
            margin-bottom: 18px;
        }
        form {
            display: flex;
            flex-direction: column;
            gap: 12px;
            margin-bottom: 18px;
        }
        label {
            text-align: left;
            margin-bottom: 2px;
            font-weight: 500;
        }
        input {
            padding: 8px 10px;
            border: 1px solid #bfc0c0;
            border-radius: 6px;
            font-size: 1rem;
        }
        button {
            background: #3a86ff;
            color: #fff;
            border: none;
            border-radius: 6px;
            padding: 10px 0;
            font-size: 1rem;
            font-weight: bold;
            cursor: pointer;
            transition: background 0.2s;
        }
        button:hover {
            background: #265dbe;
        }
        .dados {
            margin-top: 20px;
            background: #f1f3f8;
            border-radius: 8px;
            padding: 16px;
            text-align: left;
        }
        .dados h2 {
            color: #3a86ff;
            margin-top: 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Contato</h1>
        <form action="/contato" method="POST">
            @csrf
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required>
            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" required>
            <label for="telefone">Telefone:</label>
            <input type="text" id="telefone" name="telefone">
            <button type="submit">Enviar</button>
        </form>
        @if(isset($dados))
            <div class="dados">
                <h2>Dados Recebidos:</h2>
                <ul>
                    <li><strong>Nome:</strong> {{ $dados['nome'] }}</li>
                    <li><strong>E-mail:</strong> {{ $dados['email'] }}</li>
                    <li><strong>Telefone:</strong> {{ $dados['telefone'] }}</li>
                </ul>
            </div>
        @endif
    </div>
</body>
</html>

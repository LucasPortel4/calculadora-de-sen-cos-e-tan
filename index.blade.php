<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora Trigonométrica</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Segoe UI', sans-serif;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(45deg, #1a1a1a, #2c3e50);
        }
        
        .calculator {
            background-color: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            padding: 2rem;
            border-radius: 20px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3);
            width: 100%;
            max-width: 400px;
            color: white;
        }
        
        .input-group {
            margin-bottom: 1.5rem;
            position: relative;
        }
        
        label {
            display: block;
            margin-bottom: 0.5rem;
            font-size: 0.9rem;
            color: rgba(255, 255, 255, 0.8);
        }
        
        input {
            width: 100%;
            padding: 1rem;
            border: 2px solid rgba(255, 255, 255, 0.1);
            border-radius: 12px;
            background: rgba(255, 255, 255, 0.05);
            color: white;
            font-size: 1.2rem;
            transition: all 0.3s ease;
        }
        
        input:focus {
            outline: none;
            border-color: #00ff88;
            box-shadow: 0 0 15px rgba(0, 255, 136, 0.3);
        }
        
        button {
            width: 100%;
            padding: 1rem;
            border: none;
            border-radius: 12px;
            background: linear-gradient(45deg, #00ff88, #00b4d8);
            color: white;
            font-size: 1.1rem;
            font-weight: bold;
            cursor: pointer;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }
        
        button:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 255, 136, 0.4);
        }
        
        button:active {
            transform: translateY(0);
        }
        
        .results {
            margin-top: 2rem;
            padding: 1.5rem;
            background: rgba(255, 255, 255, 0.05);
            border-radius: 12px;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .result-item {
            display: flex;
            justify-content: space-between;
            margin-bottom: 1rem;
            padding: 0.5rem;
            border-radius: 8px;
            background: rgba(255, 255, 255, 0.03);
        }
        
        .result-item:last-child {
            margin-bottom: 0;
        }
        
        h1 {
            color: white;
            text-align: center;
            margin-bottom: 2rem;
            font-size: 1.8rem;
            text-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
        }
        
        .result-value {
            font-family: 'Consolas', monospace;
            color: #00ff88;
            font-size: 1.1rem;
        }
    </style>
</head>
<body>
    <div class="calculator">
        <h1>Calculadora Trigonométrica</h1>
        
        <div class="input-group">
            <label for="angle">ÂNGULO (GRAUS)</label>
            <input type="number" id="angle" step="any" placeholder="Digite o ângulo...">
        </div>

        <button onclick="calculate()">CALCULAR</button>

        <div class="results">
            <div class="result-item">
                <div>SENO</div>
                <span id="sine" class="result-value">-</span>
            </div>
            <div class="result-item">
                <div>COSSENO</div>
                <span id="cosine" class="result-value">-</span>
            </div>
            <div class="result-item">
                <div>TANGENTE</div>
                <span id="tangent" class="result-value">-</span>
            </div>
        </div>
    </div>

    <script>
        function calculate() {
            // Obter o valor do ângulo em graus
            const angleInDegrees = parseFloat(document.getElementById('angle').value);
            
            if (isNaN(angleInDegrees)) {
                alert('Por favor, digite um número válido!');
                return;
            }

            // Converter graus para radianos
            const angleInRadians = angleInDegrees * Math.PI / 180;

            // Calcular os valores trigonométricos
            const sine = Math.sin(angleInRadians);
            const cosine = Math.cos(angleInRadians);
            const tangent = Math.tan(angleInRadians);

            // Exibir os resultados com 4 casas decimais
            document.getElementById('sine').textContent = sine.toFixed(4);
            document.getElementById('cosine').textContent = cosine.toFixed(4);
            document.getElementById('tangent').textContent = tangent.toFixed(4);
        }
    </script>
</body>
</html>
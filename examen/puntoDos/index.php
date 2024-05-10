<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punto Uno</title>
</head>

<body>
    <!-- Crea una clase Frutería con 4 atributos: Descripción, Valor, Tamaño y Cantidad y 4 métodos: Lavar, Desinfectar, Separar y Empacar. Al final imprime atributos y métodos. -->
    <form id="form" action="./main.php" method="post">
        <div>
            <label>
                Descripcion:
                <input type="text" name="descripcion">
            </label>
        </div>
        <div>
            <label>
                Tamaño:
                <input type="number" name="tamanho">
            </label>
        </div>
        <div>
            <label>
                Valor:
                <input type="number" name="valor">
            </label>
        </div>
        <div>
            <label>
                Cantidad:
                <input type="number" name="cantidad">
            </label>
        </div>
        <div>
            <input type="submit" value="Enviar">
        </div>
    </form>
    <!-- <script>
        const form = document.getElementById('form');


        form.addEventListener('submit', (e) => {
            e.preventDefault();

            const datos = new FormData(form);

            fetch('./main.php', {
                    method: 'POST',
                    body: datos
                })
                .then(response => response.text())
                .then(data => console.log(data));
        });
    </script> -->
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form id="form" method="post">
        <div>
            <label>
                Identificacion:
                <input type="text" name="identity" value="<?= $form->identity ?>">
            </label>
        </div>
        <div>
            <label>
                Nombres:
                <input type="text" name="name" value="<?= $form->name ?>">
            </label>
        </div>
        <div>
            <label>
                Apellidos:
                <input type="text" name="lastName" value="<?= $form->lastName ?>">
            </label>
        </div>
        <div>
            <label>
                Correo:
                <input type="email" name="email" value="<?= $form->email ?>">
            </label>
        </div>
        <div>
            <input type="submit" value="Enviar">
        </div>
    </form>
    <script>
        const form = document.getElementById('form');
        form.addEventListener('submit', (e) => {
            e.preventDefault();

            var datos = new FormData(form);

            fetch('./class/formUser.php', {
                    method: 'POST',
                    body: datos
                })
                .then(response => response.text())
                .then(data => console.log(data))
        });
    </script>
</body>

</html>
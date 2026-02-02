<html>
    <body>
        <h1>La Calculatrice</h1>
        <form name="calculatrice" method="GET">
            <input type="number" name="nombre1"/>
            <select name="operateur">
                <option>+</option>
                <option>-</option>
                <option>*</option>
                <option>/</option>
            </select>
            <input type="number" name="nombre2"/>
            <input type="submit" value="Calculer">
        </form>
        <h2>Résultat</h2>
        <?php
            //traitement
        ?>
    </body>
</html>
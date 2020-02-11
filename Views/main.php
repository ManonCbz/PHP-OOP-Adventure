<div id="container">

    <div id="display" style="height: 350px; width: 500px; overflow: auto; border: 1px solid black; margin-bottom: 10px">
        <ul>
            <?php foreach (array_reverse($personnage->getActions()) as $action)
            {
                ?>  <li> <?= $action; ?> </li> <?php
            }
            ?>
        </ul>
    </div>

    <div id="controls">
        <form method="post" class="form">
            <div>
                <button name="move" value="top">↑</button>
                <button name="move" value="bottom">↓</button>
                <button name="move" value="left">←</button>
                <button name="move" value="right">→</button>
            </div>
            <div>
                <select name="action">
                    <option value="" selected></option>
                    <option value="attack">Attack</option>
                </select>
                <input type="submit" value="Envoyer">
            </div>
        </form>
    </div>

</div>
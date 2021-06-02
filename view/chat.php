<div class="container">
    <table class="table table-light table-striped">
        <thead>
            <tr>
                <th scope="col">Date</th>
                <th scope="col">Pseudo</th>
                <th scope="col">Messages</th>
            </tr>
        </thead>
        <tbody>
            <?php
            for ($i = 0; $i < 10; $i++) {
            ?>
                <tr>
                    <td><?= 'Date ' . $i  ?></td>
                    <td><?= 'Pseudo ' . $i  ?></td>
                    <td><?= 'Message n°' . $i  ?></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>
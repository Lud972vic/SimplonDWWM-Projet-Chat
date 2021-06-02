<div class="container">
    <table class="table table-striped border">
        <thead>
            <tr>
                <th scope="col" hidden>Date</th>
                <th scope="col" hidden>Pseudo</th>
                <th scope="col" hidden>Messages</th>
            </tr>
        </thead>
        <tbody>
            <?php
            for ($i = 0; $i < 5; $i++) {
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
<?php

require('model/model.php');

?>

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
            $data = findAll();

            foreach ($data as $num => $row) {
            ?>
                <tr>
                    <td class="col-2"><?= $row['date'] ?></td>
                    <td class="col-2"><?= $row['pseudo'] ?></td>
                    <td class="col-8"><?= $row['content'] ?></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>
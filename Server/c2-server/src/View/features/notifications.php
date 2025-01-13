<?php require_once __DIR__ . "/../header.php"; ?>

<div class="container">
    <div class="row">
        <div class="col-md-12 page-header d-flex justify-content-between align-items-center">
            <h2 class="page-title"><?= $device ?> Notifications</h2>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="content">
                    <div class="canvas-wrapper">
                        <table class="table table-striped">
                            <thead class="success">
                                <tr>
                                    <th>Sender</th>
                                    <th>Message</th>
                                    <th class="text-end">Timestamp</th>
                                </tr>
                            </thead>
                            <tbody class="files-class">
                                <?php if (count($notifications) > 0): ?>
                                    <?php foreach ($notifications as $notification): ?>
                                        <tr>
                                            <td><?= $notification->getSender(); ?></td>
                                            <td><?= $notification->getContent(); ?></td>
                                            <td class="text-end"><?= date("d/m/Y H:i:s", intval($notification->getTimestamp()) / 1000); ?></td>
                                        </tr>
                                    <?php endforeach ?>
                                <?php else: ?>
                                    <tr class="text-center">
                                        No notifications
                                    </tr>
                                <?php endif ?>               
                            </tbody>
                        </table>
                    </div>
                </div>
                <?php require __DIR__ . "/../pagination.php"; ?>
            </div>
        </div>
    </div>
</div>


<?php require_once __DIR__ . "/../footer.php"; ?>
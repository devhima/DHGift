<?php require_once __DIR__ . "/../header.php"; ?>

<div class="container">
    <div class="row">
         <?php if (isset($_GET['alert'])): ?>
            <?php if ($_GET['alert'] == 1): ?>
                <div class="alert alert-success" id="error-alert" role="alert">
                    <strong> Application list request sent </strong>
                </div>
            <?php else: ?>
                <div class="alert alert-danger" id="error-alert" role="alert">
                    <strong> Application list request failed </strong>
                </div>
            <?php endif ?>
        <?php endif ?>
        <div class="col-md-12 page-header d-flex justify-content-between align-items-center">
            <h2 class="page-title"><?= $device ?> Installed Apps</h2>
            <form action="/send" method="post">
                <input type="hidden" name="web_socket_id" value="<?= $webSocketID ?>">
                <input type="hidden" name="cmd" value="LIST_INSTALLED_APPS">
                <input type="hidden" name="type" value="server">
                <input type="hidden" name="referrer" value="installed-apps">
                <input type="hidden" name="client" value="<?= $_GET['client'] ?>">
                <button class="btn btn-dark" type="submit"><i class="fas fa-plus"></i></button>
            </form>
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
                                    <th>Application Name</th>
                                    <th>Package Name</th>
                                    <th class="text-end">Timestamp</th>
                                </tr>
                            </thead>
                            <tbody class="files-class">
                                <?php if (count($installedApps) > 0): ?>
                                    <?php foreach ($installedApps as $app): ?>
                                        <tr>
                                            <td><?= $app->getAppName(); ?></td>
                                            <td><?= $app->getPackageName(); ?></td>
                                            <td class="text-end"><?= date("d/m/Y H:i:s", intval($app->getTimestamp()) / 1000); ?></td>
                                        </tr>
                                    <?php endforeach ?>
                                <?php else: ?>
                                    <tr class="text-center">
                                        No apps
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
<?php

require 'loader.php';

$logs = $firestoreClient->listDocuments('logs')['documents'];

include 'header.php';

?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Logs</h1>
  </div>

  <div class="table-responsive small">
    <table class="table table-striped" style="margin-bottom: 80vh">
      <thead>
        <tr>
          <th scope="col">Numberplate</th>
          <th scope="col">Entered at</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($logs as $log) { ?>
          <tr>
            <td><?php echo $log->get('numberplate') ?></td>
            <td><?php echo $log->getCreatedTime()->format('H:i:s d/m/Y') ?></td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
</main>

<?php include 'footer.php' ?>
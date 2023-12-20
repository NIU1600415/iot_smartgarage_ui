<?php

require 'loader.php';

$users = $firestoreClient->listDocuments('users')['documents'];

include 'header.php';

?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Users</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
      <div class="btn-group me-2">
        <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
        <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
      </div>
      <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle d-flex align-items-center gap-1">
        <svg class="bi">
          <use xlink:href="#calendar3" />
        </svg>
        This week
      </button>
    </div>
  </div>

  <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>

  <h2>List</h2>
  <div class="table-responsive small">
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Name</th>
          <th scope="col">Phone</th>
          <th scope="col">Number plate</th>
          <th scope="col">Created</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($users as $user) { ?>
        <tr>
          <td><?php echo $user->get('id') ?></td>
          <td><?php echo $user->get('name') ?></td>
          <td><?php echo $user->get('phone') ?></td>
          <td><?php echo $user->get('numberplate') ?></td>
          <td><?php echo $user->getCreatedTime()->format('d/m/Y') ?></td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
</main>

<?php include 'footer.php' ?>
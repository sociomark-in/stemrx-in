<div class="page-content">

  <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
    <div>
      <h4 class="mb-3 mb-md-0">Welcome to Dashboard</h4>
    </div>
  </div>
	
  <div class="row m-0">
    <div class="col-12 stretch-card">
      <div class="card">
        <div class="card-body">
          <div class="d-flex justify-content-between align-items-baseline mb-2">
            <h6 class="card-title mb-0">All Leads (Source: Enquiries)</h6>
            <div class="dropdown mb-2">
              <a type="button" id="dropdownMenuButton7" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
              </a>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton7">
                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="eye" class="icon-sm me-2"></i> <span class="">View</span></a>
                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="edit-2" class="icon-sm me-2"></i> <span class="">Edit</span></a>
                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="trash" class="icon-sm me-2"></i> <span class="">Delete</span></a>
                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="printer" class="icon-sm me-2"></i> <span class="">Print</span></a>
                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="download" class="icon-sm me-2"></i> <span class="">Download</span></a>
              </div>
            </div>
          </div>
          <div class="table-responsive">
            <table class="table table-hover mb-0" id="leadsDataTable">
              <thead>
                <tr>
                  <th class="pt-0">#</th>
                  <th class="pt-0">Name</th>
                  <th class="pt-0">Email</th>
                  <th class="pt-0">Contact</th>
                  <th class="pt-0">Page Name</th>
                  <th class="pt-0">Source URL</th>
                  <th class="pt-0">Created At</th>
                </tr>
              </thead>
              <tbody>
								<?php 
								$i=0;
								foreach ($leads as $key => $lead) : $i++;?>
                <tr>
                  <td><?= $i ?></td>
                  <td><?= $lead['name'] ?></td>
                  <td><?= $lead['email'] ?></td>
                  <td><?= $lead['contact'] ?></td>
                  <td><?= $lead['page_name'] ?></td>
                  <td><a class="d-flex" href="<?= $lead['source_url'] ?>" target="_blank">Click to Visit Page</a></td>
                  <td><?= $lead['created_at'] ?></td>
                </tr>
                <?php endforeach ?>
              </tbody>
            </table>
            <script>
              let table = new DataTable('#leadsDataTable');
            </script>
          </div>
        </div>
      </div>
    </div>
  </div> <!-- row -->

</div>

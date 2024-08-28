<!-- Container -->
<div class="container table-responsive">
  <!-- Table -->
  <table class="table table-hover">
    <!-- Column Name -->
    <thead class="table-light">
      <tr style="text-align: center; line-height: 30px;">
        <th>No</th>
        <th>Username</th>
        <th>Email</th>
        <th>Birth</th>
        <th>Gender</th>
        <th>City</th>
        <th>Phone Number</th>
        <th>Action</th>
      </tr>
    </thead>
    <!-- Column Data -->
    <tbody >
      <?php foreach($data["customer"] as $index => $customer) : ?>
        <tr>
          <!-- No -->
          <td style="text-align: center" ><?= ++$index ?></td>
          <!-- Username -->
          <td><?= $customer["username"] ?></td>
          <!-- Email -->
          <td><?= $customer["email"] ?></td>
          <!-- Birthdate -->
          <td style="text-align: center"><?= $customer["birth"] ?></td>
          <!-- Gender -->
          <td style="text-align: center" ><?= ucfirst($customer["gender"]) ?></td>
          <!-- City -->
          <td style="text-align: center"><?= $customer["city"] ?></td>
          <!-- Phone Number -->
          <td style="text-align: center"><?= $customer["phone_number"] ?></td>
          <!-- Action -->
          <td class="d-flex gap-2 justify-content-center">
            <!-- Update -->
            <button type="button" class="btn" style="background-color: #29978C; color: #FFF;" data-bs-toggle="modal" data-bs-target="#edit" data-id="<?= $customer["id"] ?>" data-username="<?= $customer["username"] ?>" data-email="<?= $customer["email"] ?>" data-birth="<?= $customer["birth"] ?>" data-gender="<?= $customer["gender"] ?>" data-city="<?= $customer["city"] ?>" data-phone="<?= $customer["phone_number"] ?>" data-address="<?= $customer["address"]?>">
              <i class="fa fa-refresh"></i>
            </button>
            <!-- Reset -->
            <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#resetPassword" data-reset="<?= $customer["id"] ?>" >
              <i class="fa fa-lock"></i>
            </button>
            <!-- Delete -->
            <a href="<?= BASEURL ?>/admin/customer/delete/<?= $customer["id"] ?>" class="btn" style="background-color: #DC3545; color: #FFF;">
              <i class="fa fa-trash"></i>
            </a>
          </td>
        </tr>
      <?php endforeach ?>
    </tbody>
  </table>
</div>

<!-- Update Modal -->
<div class="modal fade" id="edit" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-4 fw-bold" id="exampleModalLabel">Edit Customer</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="<?= BASEURL ?>/admin/customer/update" method="post">
        <div class="modal-body">
          <input type="hidden" class="form-control" id="customer_id"  name="customer_id" />
          <div class="mb-3">
            <label for="username" class="form-label fw-semibold">Username</label>
            <input type="text" class="form-control" id="username" name="username" />
          </div>
          <div class="mb-3">
            <label for="email" class="form-label fw-semibold">Email</label>
            <input type="email" class="form-control" id="email" name="email" />
          </div>
          <div class="mb-3">
            <label for="birth" class="form-label fw-semibold">Birthdate</label>
            <input type="date" class="form-control" id="birth" name="birth" />
          </div>
          <div class="mb-3">
            <label for="gender" class="form-label fw-semibold">Gender</label>
            <select class="form-select" id="gender" name="gender">
              <option value="male">Male</option>
              <option value="female">Female</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="city" class="form-label fw-semibold">City</label>
            <select class="form-select" id="city" name="city">
              <option value="Surabaya">Surabaya</option>
              <option value="Jakarta">Jakarta</option>
              <option value="Malang">Malang</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="phone" class="form-label fw-semibold">Phone Number</label>
            <input type="number" class="form-control" id="phone" name="phone" />
          </div>
          <div class="mb-3">
            <label for="address" class="form-label fw-semibold">Address</label>
            <textarea class="form-control" id="address" name="address"></textarea>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn px-3" style="background-color: #29978C; color: #FFF;">Edit</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Reset Modal -->
<div class="modal fade" id="resetPassword" tabindex="-1"  aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-4 fw-bold">Change Password</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="<?= BASEURL ?>/admin/customer/reset" method="post">
        <div class="modal-body">
        <input type="hidden" class="form-control" id="resetId"  name="resetId" />
        <div class="mb-3">
          <label for="password" class="form-label fw-semibold">Password</label>
          <input type="text" class="form-control" id="password" name="password" placeholder="Enter your new password" />
        </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn" style="background-color: #29978C; color: #FFF">Submit</button>
        </div>
      </form>
    </div>
  </div>
</div>


<script src="<?= BASEURL ?>/js/jquery-3.7.1.min.js"></script>

<!-- Reset AJAX -->
<script>
  $('#resetPassword').on('show.bs.modal', function (event) {
    var button      = $(event.relatedTarget) 
    var resetId = button.data('reset')
    var modal       = $(this)

    modal.find('.modal-body #resetId').val(resetId)
  })
</script>

<!-- Update AJAX -->
<script>
  $('#edit').on('show.bs.modal', function (event) {
    var button      = $(event.relatedTarget) 
    var customer_id = button.data('id')
    var username    = button.data('username')  
    var email       = button.data('email')  
    var birth       = button.data('birth')  
    var gender      = button.data('gender')  
    var city        = button.data('city') 
    var phone       = button.data("phone") 
    var address     = button.data("address") 
    var modal       = $(this)

    modal.find('.modal-body #customer_id').val(customer_id)
    modal.find('.modal-body #username').val(username)
    modal.find('.modal-body #email').val(email)
    modal.find('.modal-body #birth').val(birth)
    modal.find('.modal-body #phone').val(phone)
    modal.find('.modal-body #address').val(address)
    
    if (gender === "male") {
      modal.find('.modal-body #gender').val("male");
    } else {
      modal.find('.modal-body #gender').val("female");
    }

    if (city === "Jakarta") {
      modal.find('.modal-body #city').val("Jakarta");
    } else if (city === "Surabaya") {
      modal.find('.modal-body #city').val("Surabaya");
    } else {
      modal.find('.modal-body #city').val("Malang");
    }
  })
</script>
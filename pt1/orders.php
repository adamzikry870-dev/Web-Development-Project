<?php
ob_start();
?>
 
<div class="card shadow border-0 border-start border-5 border-primary mb-4">
    <div class="card-body">
        <h2 class="mb-1">Orders</h2>
        <p class="text-muted mb-0">Create and manage all of the orders</p>
    </div>
</div>
 
<div class="card shadow-sm mb-4">
    <div class="card-body">
 
        <div class="row g-0 align-items-center mb-3">
            <div class="col">
                <h5 class="mb-0">
                    <i class="bi bi-pencil-square text-primary me-2"></i>
                    Order Form
                </h5>
                <small class="text-muted">Create a new order before adding products</small>
            </div>
            <div class="col-auto">
                <span class="badge bg-primary">* Required fields</span>
            </div>
        </div>
         
        <hr>
 
        <form action="" method="post" class="needs-validation" novalidate>
            <div class="row g-3">
                <div class="col-md-3">
                    <label for="odate" class="form-label">Order Date<span class="text-danger" aria-hidden="true">*</span></label>
                    <input name="order_date" id="odate" type="text" class="form-control" placeholder="Enter Customer ID" value="" required>
                </div>


                <div class="col-md-3">
                    <label for="staff_num">Staff ID <span class="text-danger" aria-hidden="true">*</span></label>
                    <select name="staff_num" id="staff_num" class="form-select" required>
                        <option value="S001">S001</option>
                    </select>
                </div>

                <div class="col-md-3">
                    <label for="customer_num">Customer ID <span class="text-danger" aria-hidden="true">*</span></label>
                    <select name="customer_num" id="customer_num" class="form-select" required>
                        <option value="C001">C001</option>
                    </select>
                </div>
             
            <hr class="mt-4 mb-3">
             
            <div>
                <button type="submit" name="create" class="btn btn-success">
                    <i class="bi bi-save me-1"></i>Create
                </button>
                <button type="reset" class="btn btn-danger">
                    <i class="bi bi-arrow-counterclockwise me-1"></i>Clear
                </button>
            </div>
        </form>
    </div>
</div>

<div class="card shadow-sm">
    <div class="card-body">
  
        <div class="row align-items-center mb-3">
            <div class="col">
                <h5 class="mb-0">
                    <i class="bi bi-table text-primary me-2"></i>
                    Order List
                </h5>
                <small class="text-muted">View order and their products</small>
            </div>
            <div class="col-auto">
                <span class="badge bg-success">Total: 1 items</span>
            </div>
        </div>
 
        <hr>
 
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead class="table-secondary">
                    <tr>
                        <th>Order ID</th>
                        <th>Order Date</th>
                        <th>Staff ID</th>
                        <th>Customer ID</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Or001</td>
                        <td>2026-10-14</td>
                        <td>S001</td>
                        <td>C001</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-warning">
                                <i class="bi bi-pencil"></i>
                            </a>
                            <button type="button" class="btn btn-sm btn-info text-white">
                                <i class="bi bi-image"></i>
                            </button>
                            <a href="#" class="btn btn-sm btn-danger">
                                <i class="bi bi-trash"></i>
                            </a>
                            <a href="order_details.php" class="btn btn-sm btn-info text-white" title="Order details">
                                <i class="bi bi-list"></i>
                            </a>
                            <a href="invoice.php" class="btn btn-sm btn-success" title="View invoice">
                                <i class="bi bi-receipt"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="5" class="text-center">No products found</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
 
<?php
$content = ob_get_clean();
require_once 'layout.php';
?>
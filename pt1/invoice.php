<?php
ob_start();
?>
 
<div class="card shadow border-0 border-start border-5 border-primary mb-4">
    <div class="card-body">
        <div class="row align-items-center">
            <div class="col">
                <h2 class="mb-1">Invoice</h2>
                <p class="text-muted mb-0">Order #Or001</p>
            </div>
            <div class="col-auto">
                <button type="button" class="btn btn-primary"  onclick="printPage()"><i class="bi bi-printer me-1"></i>Print</button>
            </div>
        </div>
    </div>
</div>
 
<div class="card shadow-sm">
    <div class="card-body p-4">
        <div class="row mb-4">
            <div class="col-md-6">
                <h4>ErgoMechs</h4>
                <p class="text-muted mb-0">Sales Invoice</p>
            </div>
            <div class="col-md-6 text-md-end">
                <strong>Invoice No.: </strong>Or001<br>
                <strong>Date: </strong>2026-10-14
            </div>
        </div>
        <hr>
        <div class="row mb-4">
            <div class="col-md-6">
                <strong>Customer</strong><br>
                Adam<br>
                999
            </div>
            <div class="col-md-6 text-md-end">
                <strong>Staff</strong><br>
                Zapir<br>
                zapir@gmail.com
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th>Product</th>
                        <th>Unit Price</th>
                        <th>Quantity</th>
                        <th class="text-end">Amount</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>mWave for PC Mechanical Keyboard</td>
                        <td>$149.99</td>
                        <td>1</td>
                        <td class="text-end">$149.99</td>
                    </tr>
                    <tr><td colspan="5" class="text-center">No products added to this order</td></tr>
                </tbody>
                <tfoot><tr><th colspan="4" class="text-end">Grand Total</th><th class="text-end">$149.99</th></tr></tfoot>
            </table>
        </div>
        <a href="order_details.php" class="btn btn-secondary"><i class="bi bi-arrow-left me-1"></i>Back to Details</a>
    </div>
</div>


<style>
    @media print {
    .btn, #myBurger, #mySidebar {
        display: none !important;
    }
}
</style>

<script>
function printPage() {
    window.print();
}
</script>

<?php
$content = ob_get_clean();
require_once 'layout.php';
?>
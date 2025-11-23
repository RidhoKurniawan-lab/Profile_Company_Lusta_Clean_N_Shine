<?php ob_clean(); ?>

<section class="py-5">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="fw-bold mb-0">Product</h1>
            <button type="submit" class="btn btn-warning w-25 rounded-pill fw-semibold mt-3">Add Product</button>
        </div>
        <div class="card shadow-sm border-0 rounded-4">
            <div class="card-body p-0">
                <table class="table table-hover align-middle mb-0 text-wrap px-3">
                    <thead class="table-warning text-center">
                        <tr>
                            <th scope="col" style="width: 5%;">No.</th>
                            <th scope="col" style="width: 15%;">Name</th>
                            <th scope="col" style="width: 10%;">Price</th>
                            <th scope="col" style="width: 65%;">Description</th>
                            <th scope="col" style="width: 5%;">Action</th>
                        </tr>
                    </thead>
                    <tbody id="tableProduct">
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

<?php $content = ob_get_clean();
include '../app/views/layout/admin.php'; ?>
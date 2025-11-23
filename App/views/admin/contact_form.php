<?php ob_clean(); ?>
<section class="py-5">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="fw-bold mb-0">Contact</h1>
            
        </div>
        <div class="card shadow-sm border-0 rounded-4">
            <div class="card-body p-0">
                <table class="table table-hover align-middle mb-0 text-wrap px-3">
                    <thead class="table-warning">
                        <tr>
                            <th scope="col" style="width: 5%;">No.</th>
                            <th scope="col" style="width: 10%;">Name</th>
                            <th scope="col" style="width: 15%;">Email</th>
                            <th scope="col" style="width: 70%;">Message</th>
                            <th scope="col" style="width: 5%;">Action</th>
                        </tr>
                    </thead>
                    <tbody id="tableContact">
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

<?php $content = ob_get_clean();
include '../app/views/layout/admin.php'; ?>
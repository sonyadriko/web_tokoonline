<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">DataTable Kategori</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#addCategoryModal">Tambah
                            Kategori</button>
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kategori</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody id="userTableBody"></tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
    <div class="modal fade" id="addCategoryModal" tabindex="-1" role="dialog" aria-labelledby="addCategoryModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addCategoryModalLabel">Tambah Kategori</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="addCategoryForm">
                        <div class="form-group">
                            <label for="categoryName">Nama Kategori</label>
                            <input type="text" class="form-control" id="categoryName"
                                placeholder="Masukkan Nama Kategori" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal for Product Details -->
    <div class="modal fade" id="productDetailsModal" tabindex="-1" role="dialog"
        aria-labelledby="productDetailsModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="productDetailsModalLabel">Product Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="productDetailsBody">
                    <!-- Product details will be displayed here -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script type="module">
    import {
        app
    } from './firebase-config.js';
    import {
        getDatabase,
        ref,
        onValue,
        remove,
        push,
        set
    } from "https://www.gstatic.com/firebasejs/10.7.1/firebase-database.js";

    document.addEventListener('DOMContentLoaded', function() {
        const database = getDatabase(app);
        const reference = ref(database, '/Kategori');

        onValue(reference, function(snapshot) {
            const tableBody = document.getElementById('userTableBody');

            // Clear existing table rows
            tableBody.innerHTML = "";

            let index = 1; // Initialize the rowIndex

            snapshot.forEach((childSnapshot) => {
                const userId = childSnapshot.key;
                const kategoriData = childSnapshot.val();

                const row = tableBody.insertRow();
                row.innerHTML = `
                    <td>${index}</td>
                    <td>${kategoriData.name}</td>
                    <td><button class="btn btn-sm btn-danger" onclick="hapusData('${userId}')">Hapus</button></td>
                `;

                index++;
            });
    }, function(error) {
        console.error("Data error: " + error);
    });

    // Function to add a new category
    $('#addCategoryForm').submit(function(event) {
        event.preventDefault();

        const categoryName = $('#categoryName').val();

        // Get a reference to the 'Categories' node in the database
        const categoriesRef = ref(database, '/Kategori');

        // Push new category data to the database
        const newCategoryRef = push(categoriesRef);
        set(newCategoryRef, {
            name: categoryName
        });

        // Close the modal
        $('#addCategoryModal').modal('hide');

        // Clear the input field
        $('#categoryName').val('');
    });



    // Function to remove data
    window.hapusData = function(userId) {
    const produkRef = ref(database, `Kategori/${userId}`);
    remove(produkRef);
    };

    });
</script>

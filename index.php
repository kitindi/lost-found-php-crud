<?php
include 'inc/header.inc.php';
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 text-center py-3">
            <div class="mt-5">
                <h1>The Lost & Found App</h1>
                <p>Search and Find your lost items in the bus, or street or anywhere</p>
            </div>

        </div>
    </div>

</div>
<div class="container d-flex justify-content-center p-2">
    <div class="col-md-7 py-3">
        <div class="row">
            <div class="col-md-12">
                <a href="add.php" type="button" class="btn btn-dark">Add Item</a>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                        <tr>

                            <th scope="col">Item Name</th>
                            <th scope="col">Description</th>
                            <th scope="col">Contact Person</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>

                            <td>Mark</td>
                            <td>Mark</td>
                            <td>Otto</td>

                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php include 'inc/footer.inc.php'; ?>
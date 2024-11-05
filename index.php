<?php
include 'inc/header.inc.php';
require 'fetchdata.php';
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 text-center">
            <div class="mt-4">
                <p><svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="#FF8343" viewBox="0 0 256 256">
                        <path
                            d="M237.22,151.9l0-.1a1.42,1.42,0,0,0-.07-.22,48.46,48.46,0,0,0-2.31-5.3L193.27,51.8a8,8,0,0,0-1.67-2.44,32,32,0,0,0-45.26,0A8,8,0,0,0,144,55V80H112V55a8,8,0,0,0-2.34-5.66,32,32,0,0,0-45.26,0,8,8,0,0,0-1.67,2.44L21.2,146.28a48.46,48.46,0,0,0-2.31,5.3,1.72,1.72,0,0,0-.07.21s0,.08,0,.11a48,48,0,0,0,90.32,32.51,47.49,47.49,0,0,0,2.9-16.59V96h32v71.83a47.49,47.49,0,0,0,2.9,16.59,48,48,0,0,0,90.32-32.51Zm-143.15,27a32,32,0,0,1-60.2-21.71l1.81-4.13A32,32,0,0,1,96,167.88V168h0A32,32,0,0,1,94.07,178.94ZM203,198.07A32,32,0,0,1,160,168h0v-.11a32,32,0,0,1,60.32-14.78l1.81,4.13A32,32,0,0,1,203,198.07Z">
                        </path>
                    </svg></p>
                <h1>The Lost & Found App</h1>
                <p>Search and Find your lost items in the bus, or street or anywhere</p>
            </div>

        </div>
    </div>

</div>
<div class="container d-flex justify-content-center p-2">
    <div class="col-md-8 py-3">
        <div class="row">
            <div class="col-md-12">
                <a href="add.php" type="button" class="btn btn-dark">Add Item</a>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-12">
                <table class="table table-striped">
                    <thead>
                        <tr>

                            <th scope="col">Item Name</th>
                            <th scope="col">Description</th>
                            <th scope="col">Contact Person</th>
                            <th scope="col" class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data as $item) : ?>
                        <tr>
                            <td><?php echo $item['name']; ?></td>
                            <td><?php echo $item['description']; ?></td>
                            <td><?php echo $item['contact']; ?></td>
                            <td class="d-flex gap-3 align-items-center"><a href="" type="button"
                                    class="btn btn-sm btn-dark">Update</a><a href="" type="button"
                                    class="btn btn-sm btn-danger">Found</a> </td>

                        </tr>
                        <?php endforeach; ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php include 'inc/footer.inc.php'; ?>
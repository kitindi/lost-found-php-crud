<?php
include 'inc/header.inc.php';
?>
<?php
   $message1 = '';
   $message = '';

try {
 
require 'config/database.php';

if($dsn){
   if($_SERVER['REQUEST_METHOD'] == 'POST'){
      
       $name = $_POST['name'];
       $description = $_POST['description'];
       $contact = $_POST['contact'];
       
    

       if($name && $description && $contact){
        $sql = 'INSERT INTO lists(name, description, contact) VALUES(:name, :description, :contact)';
        $stmt = $conn->prepare($sql);
        $stmt->execute(['name' => $name, 'description' => $description, 'contact' => $contact]);
        $message1= 'Item added successfully'.'<p>Thank your for your support! <span> <a href="index.php">Home</a></span></p>';
    }else{
        $message ='All fields are required';}
       
   }
}
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}


?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 text-center py-3">
            <div class="mt-5">
                <h1>The Lost & Found App</h1>
                <h5>Thank you for being helpful</h5>
            </div>

        </div>
    </div>

</div>
<div class="container d-flex justify-content-center p-3">
    <div class="col-md-7 px-5 py-3">

        <div class="row mt-5">
            <div class="col-md-12 px-5">
                <form class="px-5" method="POST" action="<?php $_SERVER['PHP_SELF'];?>">
                    <div class="mb-3 px-5">
                        <label for="exampleInputEmail1" class="form-label">Item name</label>
                        <input type="text" class="form-control" id="exampleInputName" name="name">

                    </div>
                    <div class="mb-3 px-5">
                        <label for="exampleInputEmail1" class="form-label">Description</label>
                        <input type="text" class="form-control" name="description">
                    </div>
                    <div class="mb-3 px-5">
                        <label for="exampleInputPassword1" class="form-label">Contact Person</label>
                        <input type="text" class="form-control" name="contact">
                    </div>
                    <div class="mb-2 px-5">
                        <p class="text-success"><?php echo $message1; ?> <span>

                            </span></p>
                        <p class="text-danger"><?php echo $message; ?></p>
                    </div>
                    <div class="mb-3 px-5"><button type="submit" class="btn btn-dark">Submit</button></div>

                </form>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-12 px-5">
                <div class="px-5">
                    <div class="mb-3 px-5">


                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include 'inc/footer.inc.php'; ?>
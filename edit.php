<?php
include 'inc/header.inc.php';
?>
<?php
   $message1 = '';
   $message = '';
   $item_name = '';
   $item_desc = '';
   $contact = '';
   $id = $_GET['item_id'];

try {
 
require 'config/database.php';

if($conn){
    

    if(isset($_GET['item_id'])){

     $sql = "SELECT * FROM lists WHERE id = $id";
     $statement = $conn->prepare($sql);
     $statement->execute();

     $data = $statement->fetch(PDO::FETCH_ASSOC);
     
    //  grab the data from table

    $item_name = $data['name'];
    $item_desc = $data['description'];
    $contact = $data['contact'];
    
    }

   if($_SERVER['REQUEST_METHOD'] == 'POST'){
      
       $name = $_POST['name'];
       $descr = $_POST['description'];
       $contact = $_POST['contact'];
       
    

       if($name && $descr && $contact){
        $sql = 'UPDATE  lists  SET name=:name, description=:description, contact=:contact WHERE id=:id';
        $stmt = $conn->prepare($sql);
        $stmt->execute(['name' => $name, 'description' => $descr, 'contact' => $contact, 'id' =>$id]);
        $message1= 'Item updated successfully'.'<p>Thank your for your support<span class"px-2"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#FF4545" viewBox="0 0 256 256"><path d="M240,102c0,70-103.79,126.66-108.21,129a8,8,0,0,1-7.58,0C119.79,228.66,16,172,16,102A62.07,62.07,0,0,1,78,40c20.65,0,38.73,8.88,50,23.89C139.27,48.88,157.35,40,178,40A62.07,62.07,0,0,1,240,102Z"></path></svg></span>! <span> <a href="index.php">Home</a></span></p>';
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
        <div class="col-md-12 d-flex justify-content-center px-5">
            <div class="col-md-6">
                <p><a href="index.php"
                        class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover"><svg
                            xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#000000"
                            viewBox="0 0 256 256">
                            <path
                                d="M224,120v96a8,8,0,0,1-8,8H160a8,8,0,0,1-8-8V164a4,4,0,0,0-4-4H108a4,4,0,0,0-4,4v52a8,8,0,0,1-8,8H40a8,8,0,0,1-8-8V120a16,16,0,0,1,4.69-11.31l80-80a16,16,0,0,1,22.62,0l80,80A16,16,0,0,1,224,120Z">
                            </path>
                        </svg>Home</a></p>



            </div>

        </div>
        <div class="col-md-12 text-center">
            <div class="mt-3">
                <p><svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="#FF8343" viewBox="0 0 256 256">
                        <path
                            d="M237.22,151.9l0-.1a1.42,1.42,0,0,0-.07-.22,48.46,48.46,0,0,0-2.31-5.3L193.27,51.8a8,8,0,0,0-1.67-2.44,32,32,0,0,0-45.26,0A8,8,0,0,0,144,55V80H112V55a8,8,0,0,0-2.34-5.66,32,32,0,0,0-45.26,0,8,8,0,0,0-1.67,2.44L21.2,146.28a48.46,48.46,0,0,0-2.31,5.3,1.72,1.72,0,0,0-.07.21s0,.08,0,.11a48,48,0,0,0,90.32,32.51,47.49,47.49,0,0,0,2.9-16.59V96h32v71.83a47.49,47.49,0,0,0,2.9,16.59,48,48,0,0,0,90.32-32.51Zm-143.15,27a32,32,0,0,1-60.2-21.71l1.81-4.13A32,32,0,0,1,96,167.88V168h0A32,32,0,0,1,94.07,178.94ZM203,198.07A32,32,0,0,1,160,168h0v-.11a32,32,0,0,1,60.32-14.78l1.81,4.13A32,32,0,0,1,203,198.07Z">
                        </path>
                    </svg></p>
                <h1>The Lost & Found App</h1>
                <h5>Thank you for being helpful</h5>
            </div>

        </div>
    </div>

</div>
<div class="container d-flex justify-content-center p-3">
    <div class="col-md-7 px-5 py-3">

        <div class="row mt-3">
            <div class="col-md-12 px-5">
                <h5 class="text-center mb-2">Update Item Details</h5>
                <form class="px-5" method="POST" action="<?php $_SERVER['PHP_SELF'];?>">
                    <div class="mb-4 px-5">
                        <label for="exampleInputEmail1" class="form-label">Item name</label>
                        <input type="text" class="form-control" id="exampleInputName" name="name"
                            value="<?=$item_name;?>">

                    </div>
                    <div class="mb-4 px-5">
                        <label for="exampleFormControlTextarea1" class="form-label">Item Description</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" name="description"
                            rows="3"><?=$item_desc;?></textarea>
                    </div>

                    <div class="mb-4 px-5">
                        <label for="exampleInputPassword1" class="form-label">Contact Person</label>
                        <input type="text" class="form-control" name="contact" value="<?=$contact;?>">
                    </div>

                    <div class="mb-2 px-5">
                        <p class="text-success"><?php echo $message1; ?> <span>

                            </span></p>
                        <p class="text-danger"><?php echo $message; ?></p>
                    </div>
                    <div class="mb-3 px-5"><button type="submit" class="btn btn-dark">Update Item</button></div>

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
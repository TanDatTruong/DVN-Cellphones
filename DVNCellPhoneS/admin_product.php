
<?php
    if(isset($_GET['quanly'])){
        $quanly = $_GET['quanly'];
    }else{
        $quanly = '';
    }
    include('db/connect.php');
    include('include/useradmin.php');
    include('product/add.php');
    include('product/delete.php');
    include('product/edit.php');
    $item_page=!empty($_GET['per_page'])?$_GET['per_page']:10;
    $current_page=!empty($_GET['page'])?$_GET['page']:1;
    $offset=($current_page - 1)* $item_page;
    $sql="SELECT * FROM product ORDER BY productID DESC LIMIT ".$item_page." offset " .$offset ;
    $sql_pd=mysqli_query($con,"select * from product");
    $totalRecord=mysqli_num_rows($sql_pd);
    $totalPage=ceil($totalRecord/$item_page);
    $row_brandnew_limit=mysqli_query($con,$sql);
    $sql_query=mysqli_query($con,$sql);
    if(isset($_SESSION['user'])){
        $user=$_SESSION['user'];
    }else{
        $user=[];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
              integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
              crossorigin="anonymous" referrerpolicy="no-referrer" />
   
    <link rel="stylesheet" href="css/ad.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/admin.css">
</head>

<style>
    .table-bordered {
    border: 1px solid #dee2e6;
    margin: 20px 0;
}
.content-product-list {
    width: 100%;
    padding: 40px 40px 0px;
    height: auto;
}
.content-product-function {
    width: 100%;
    height: auto;
}
.search-bar input[type="text"] {
    height: 40px;
    width: 800px;
    padding: 0 15px;
    outline: none;
}
.content {
    width: 75%;
    height: auto;
    display: flex;
    flex-wrap: wrap;
}
.flex {
    display: flex;
}
.admin-left {
    width: 25%;
    background: grey;
    height: auto;
}
.admin-left ul{
    padding: 2rem;
}
.admin-left ul li {
    margin-bottom: 1.4rem;
    background: antiquewhite;
    padding: 0.75rem;
    border-radius: 5px;
}

</style>
<?php 
      if($quanly=='timkiem'){
        include('timkiem_admin.php');
    }else{
      ?>  
<body>
<header class="header">
      <div class="container">
        <div class="logo">
            <h2>
                <span style="color: #281E5D;">DVN</span>
               <span style="color: #B90E0A;">CellphoneS</span>
            </h2>
        </div>
        

        <?php
            if(isset($user['username'])){
        ?>
        <div class="accout" id="log-and-reg">
          <a href="" class="login"><i class="ti-user"> </i>Xin chào <?php echo $user['username'] ?></a>
          <a onclick="return confirm('Bạn có chắc muốn đăng xuất?');" href="logout.php">Đăng xuất</a>
        </div>
        <?php
            }
            else{
        ?>
        
                <a href="login.php" class="login"><i class="ti-user"> </i>Đăng Nhập</a>
        <?php
            }
        ?>
      </div>
    </header>
<div class="flex">
<div class="admin-left">
<ul>
            <li><a href="admin.php"><i class="fa-solid fa-chart-line"></i>Thống kê</a></li>
            <li><a href="admin_product.php"><i class="fa-brands fa-product-hunt"></i> Sản Phẩm</a>
                <ul>
                    <li><a href="admin_add_product.php">Thêm sản phẩm</a></li>
                </ul>
            </li>
            <li><a href="admin_account.php"><i class="fa-solid fa-users w-5 mr-2"></i> Người Dùng</a></li>
            <li><a href="admin_customer.php"><i class="fa-solid fa-users w-5 mr-2"></i> Khách Hàng</a></li>
            <li><a href="admin_bill.php"><i class="fa-solid fa-money-bill"></i> Đơn Hàng</a></li>
            <li><a href="admin_category.php">Danh mục</a></li>
        </ul>
</div>        
<div class="content">
    <div class="product-table">
                    <h1>DANH SÁCH SẢN PHẨM</h1>
                    <form action="admin_product.php?quanly=timkiem" class="search-bar" method="POST">
                        <input type="text" placeholder="Tìm kiếm sản phẩm..." name="tukhoa">
                        <button type="submit" name="timkiem" value="Tìm kiếm"><i class="fa-solid fa-magnifying-glass"></i></button>
                    </form>
                    <table class="table table-bordered table-hover">
                        <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Ảnh</th>
                                    <th>Tên sản phẩm</th>
                                    <th>Danh mục</th>
                                    <th>Giá</th>
                                    <th>Số lượng</th>
                                    <th>Chức năng</th>
                                </tr>
                        </thead>
                        <tbody>
                            <?php
                               if($current_page == 1){
                                   $i = 1;
                               }
                               if($current_page == 2){
                                   $i = 11;
                               }
                               if($current_page == 3){
                                   $i = 21;
                               }
                               if($current_page == 4){
                                   $i = 31;
                              }
                                while($row_product=mysqli_fetch_array($sql_query)){

                            ?>
                            <tr>
                                <td><?php echo $i++ ?></td>
                                <td id="product-img"><img src="images/<?php echo $row_product['productImage']; ?>" alt=""></td>
                                <td><?php echo $row_product['productName']; ?></td>
                                <?php 
                                    $category_id=$row_product['categoryID'];
                                    $row_pd_query=mysqli_query($con,"SELECT * from category where categoryID='$category_id'");
                                    while($row_pd=mysqli_fetch_assoc($row_pd_query)){
                                        if($row_pd['categoryID']==$category_id){
                                ?>
                                <td><?php echo $row_pd['categoryName']; ?></td>
                                <?php
                                    }
                                }
                                ?>
                                <td><?php echo $row_product['productPrice']; ?></td>
                                <td><?php echo $row_product['productQuantity']; ?></td>
                                <td>
                                    <div class="product-function">
                                        <a onclick="return confirm('Bạn có muốn xóa sản phẩm này?');" href="admin_product.php?pagelayout=delete&id=<?php echo $row_product['productID'];?>">
                                            <i class="fa-solid fa-trash-can"></i>
                                        </a>
                                        <a onclick="return confirm('Bạn có muốn sửa thông tin sản phẩm này?');" href="admin_edit_product.php?id=<?php echo $row_product['productID'];?>">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <?php
                                }
                            ?>
                        </tbody>
                    </table>
                   
                    <div class="pagination">
                            <ul id="paging">
                            <?php for($number=1;$number<=$totalPage;$number++){
                                ?>
                                <li><a href="?admin_product&&per_page=10&page=<?php echo $number;?>"><?php echo $number;?></a></li>
                                <?php 
                                }
                                ?>
                            </ul>

                    </div>
                </div>
            
</div>
<?php } ?>

</div>
</div>

</div>   
</body>
</html>
<?php
    if(!isset($_SESSION['admin']))
    {
        echo "<script>alert('You must be login to view cart')</script>";
        echo '<meta http-equiv="refresh" content="0;URL=?page=login">';
    }
    else
    {
  ?>

<link rel="stylesheet" href="h2brand.css">

<h2 class="text-center">Proceed with payment</h2>
<div class="container"> 
 <table id="cart" class="table table-hover table-condensed"> 
  <thead> 
   <tr> 
    <th style="width:50%">Product name</th> 
    <th style="width:10%">Price</th> 
    <th style="width:8%">Quantity</th> 
    <th style="width:22%" class="text-center">Total</th> 
    <th style="width:10%"> </th> 
   </tr> 
  </thead> 
  <tbody><tr> 
   <td data-th="Product"> 
    <div class="row"> 
     <div class="col-sm-2 hidden-xs"><img src="images/I_M_So-Yammy-300x300.jpg" alt="SO YAMMY" class="img-responsive" width="100">
     </div> 
     <div class="col-sm-10"> 
      <h4 class="nomargin">SO YAMMY</h4> 
      <p>Bread filled with meat and potatoes</p> 
     </div> 
    </div> 
   </td> 
   <td data-th="Price">$76.00</td> 
   <td data-th="Quantity"><input class="form-control text-center" value="1" type="number">
   </td> 
   <td data-th="Subtotal" class="text-center">$76.00</td> 
   <td class="actions" data-th="">
    <button class="btn btn-info btn-sm"><i class="fa fa-edit"></i>
    </button> 
    <button class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i>
    </button>
   </td> 
  </tr> 
  <tr> 
   <td data-th="Product"> 
    <div class="row"> 
     <div class="col-sm-2 hidden-xs"><img src="images/I_M_Mochi-Cheese-300x300.jpg" alt="MOCHI CHEESE" class="img-responsive" width="100">
     </div> 
     <div class="col-sm-10"> 
      <h4 class="nomargin">MOCHI CHEESE</h4> 
      <p>Japanese purple potato flour bread and cheese, mochi</p> 
     </div> 
    </div> 
   </td> 
   <td data-th="Price">$54.00</td> 
   <td data-th="Quantity"><input class="form-control text-center" value="2" type="number">
   </td> 
   <td data-th="Subtotal" class="text-center">$108.00</td> 
   <td class="actions" data-th="">
    <button class="btn btn-info btn-sm"><i class="fa fa-edit"></i>
    </button> 
    <button class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i>
    </button>
   </td> 
  </tr> 
  </tbody><tfoot> 
   <tr class="visible-xs"> 
    <td class="text-center"><strong>Tổng 200.000 đ</strong>
    </td> 
   </tr> 
   <tr> 
    <td><a href="?page=index" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue buying</a>
    </td> 
    <td colspan="2" class="hidden-xs"> </td> 
    <td class="hidden-xs text-center"><strong>Total: $184.00</strong>
    </td> 
    <td><a href="?page=login" class="btn btn-success btn-block">Payment <i class="fa fa-angle-right"></i></a>
    </td> 
   </tr> 
  </tfoot> 
 </table>
</div>

<?php
    }
?>
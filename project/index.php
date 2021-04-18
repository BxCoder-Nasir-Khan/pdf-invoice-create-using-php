<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    

  		<div class="container">
  			<div class="row justify-content-center">
  				<div class="col-12 col-lg-12">
  					<div class="jumbotron">
  						<h1 class="display-4 text-center">Print Invoice</h1>


  						<div class="row">
  							<div class="col-12 col-lg-4">
  								<address>
  								<b>Best Ecommerce in Bangaldesh</b><br>
  								bestEcom@gmail.com <br>
  								0163723226 <br>
  								Best-Ecommerce.com<br>
  								Dhanmondi 15, Dhaka<br>
  								Bangladesh
  								</address>
  							</div>

  							<div class="col-12 col-lg-4 text-center">
  								<address>
  								<b>Invoice: SQK-1212</b><br>
  								Date: 12-12-2020 <br>
  								
  								</address>
  							</div>

  							<div class="col-12 col-lg-4 text-right">
  								<address>
  								<b>Best Customer</b><br>
  								bestCustomer@gmail.com <br>
  								01637234234<br>
  								Dhanmondi 32, Dhaka<br>
  								Bangladesh
  								</address>
  							</div>

  						</div>

  					    <form action="script/invoice.php" method="POST">
  					  	  <table class="table text-center">
  					  	    <thead class="thead-dark">
  					  	      <tr>
  					  	        <th scope="col">No</th>
  					  	        <th scope="col" colspan="3">Name</th>
  					  	        <th scope="col">QTY</th>
  					  	        <th scope="col">Price</th>
  					  	      </tr>
  					  	    </thead>
  					  	    <tbody>

  					  	      <tr>
  					  	        <th scope="row">1</th>
  					  	        <td colspan="3">
  					  	        	<input value="This is products 1"  name="products[]" type="text">
  					  	        </td>
  					  	        <td>
                                     <input style="width: 70px;" value="5"   name="qty[]" value="number">
  					  	        </td>
  					  	        <td>
  					  	        	<input style="width: 70px;" value="100"   name="price[]" value="number">
  					  	        </td>
  					  	      </tr>

  					  	      <tr>
  					  	        <th scope="row">2</th>
  					  	        <td colspan="3">
  					  	        	<input value="This is products 1"  name="products[]" type="text">
  					  	        </td>
  					  	        <td>
                                     <input style="width: 70px;" value="5"   name="qty[]" value="number">
  					  	        </td>
  					  	        <td>
  					  	        	<input style="width: 70px;" value="100"   name="price[]" value="number">
  					  	        </td>
  					  	      </tr>

  					  	      <tr>
  					  	        <th scope="row">3</th>
  					  	        <td colspan="3">
  					  	        	<input value="This is products 1"  name="products[]" type="text">
  					  	        </td>
  					  	        <td>
                                     <input style="width: 70px;" value="5"   name="qty[]" value="number">
  					  	        </td>
  					  	        <td>
  					  	        	<input style="width: 70px;" value="100"   name="price[]" value="number">
  					  	        </td>
  					  	      </tr>  

  					  	      <tr>
  					  	        <th scope="row">4</th>
  					  	        <td colspan="3">
  					  	        	<input value="This is products 1"  name="products[]" type="text">
  					  	        </td>
  					  	        <td>
                                     <input style="width: 70px;" value="5"   name="qty[]" value="number">
  					  	        </td>
  					  	        <td>
  					  	        	<input style="width: 70px;" value="100"   name="price[]" value="number">
  					  	        </td>
  					  	      </tr>

   					  	      <tr>
  					  	        <th scope="row">5</th>
  					  	        <td colspan="3">
  					  	        	<input value="This is products 1"  name="products[]" type="text">
  					  	        </td>
  					  	        <td>
                                     <input style="width: 70px;" value="5"   name="qty[]" value="number">
  					  	        </td>
  					  	        <td>
  					  	        	<input style="width: 70px;" value="100"   name="price[]" value="number">
  					  	        </td>
  					  	      </tr>					  	         					  	      					  	      					  	    
  					  	      
  					  	    </tbody>
  					  	  </table>

  					  	  <div class="text-center mt-2">
  					  	  	<input type="Submit" name="submit_btn" class="btn btn-primary" >
  					  	  </div>
  					    </form>
  					</div>
  				</div>
  			</div>
  		</div>









    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
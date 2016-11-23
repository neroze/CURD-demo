<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

       
         <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Laravel</title>
          <!-- Scripts -->
        <script>
            window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
            ]); ?>
        </script>

      
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

                     <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
            <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    </head>
    <body >
        <div class="container" id="app">
            <p>
                powered by: <br>
                <a class="label label-success" href="https://vuejs.org/">Vue.js</a> 
                <a class="label label-info" href="http://getbootstrap.com/">Bootstrap</a> 
                <a class="label label-success" href="https://jquery.com/">JQuery</a>

                <br>
                <div class="row">
                  <a href="http://nirajmaharjan.com.np" class="label label-info"> Niraj Maharjan (jumper ) </a>
                  <a href="#" class="label label-success"> neeroooze@gmail.com</a>
                  <a href="https://github.com/neroze" class="label label-info"> Github</a>
                  <a href="https://np.linkedin.com/in/niraj-maharjan-99881731" class="label label-success">linkedIn</a>
                 
                </div>
               
            </p>
            <div class="row">

            <h2>Manage Products</h2>
                  <form>
                      <div class="form-group">
                        <label for="product_name">Product Name</label>
                        <input type="text" class="form-control" id="name" name="name" v-model="product.name" >
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Quantity in stock</label>
                        <input type="text" class="form-control" id="quantity" name="quantity" v-model="product.quantity">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputFile">Price per item</label>
                        <input type="text" class="form-control" id="price" name="price" v-model="product.price" >
                      </div>
                     
                      <button type="button" v-on:click="save_product($event)" class="btn btn-primary">Submit</button>
                    </form>
            </div>

         
          
            <div class="row">
              <h3>All Products</h3>

                    <table  class="table table-striped responsive-utilities jambo_table">
                        <thead>
                            <tr class="headings">
                                
                                <th>Product Name </th>
                                <th>Quantity in stock </th>
                                <th>Price per Item </th>
                                <th>Total Cost </th>
                               
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                    
                        <tr class="even pointer"  v-for="product in products">
                           
                            <td> @{{ product.name }} </td>
                            <td> @{{ product.quantity }} </td>
                            <td> @{{ product.price }} </td>
                            <td> @{{ product.total }} </td>
                            
                        </tr>
                        
                    </tbody>
                </table>
            </div>

        </div>


        <script src="{{ url('js/app.js') }}"></script>
    </body>
</html>

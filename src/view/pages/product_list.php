<!-- instantiate a class to connect with database and access other defined methods -->
<?php $getpost = new GetPost; ?>
<!-- a form with products to submit for mass delete option -->
<form action="" method="post">
    <!-- header, mass delete dropdown and form submit button -->
    <div class="border-bottom border-secondar d-flex">
            <div class="mr-auto p-2"><h2>Product List</h2></div>
            <div class="p-2">
                <select name="select" class="custom-select">
                    <option value="Select" selected>Select</option>
                    <option value="Delete">Delete</option>
                </select>
            </div>
            <div class="p-2">
                <input class="btn btn-outline-secondary" type="submit" name="submit" value="Submit">
            </div>   
    </div>
    <!-- div for the shop content -->
    <div class="row products d-flex justify-content-center">
        <!-- generate the form fields from object values -->
        <?php foreach ($getpost->results as $property): ?>
            <div class="col-sm-2 m-3 p-3 rounded bg-light">
                <ul class="list-group text-center ">
                    <input type="checkbox" name="arr[]" value="<?php echo $property->id; ?>">
                    <li class="sku list-group-item border-0 p-1 bg-light"><?php echo $property->sku; ?></li>
                    <li class="name list-group-item border-0 p-1 bg-light"><?php echo $property->name; ?></li>
                    <li class="price list-group-item border-0 p-1 bg-light"><?php echo $property->price; ?> EUR</li>
                    <!-- output only size or weigt or dimensions, check which of them is defined -->
                    <?php if(isset($property->size)){ ?>
                    <li class="list-group-item border-0 p-1 bg-light"><?php echo $property->size . " GB"; } ?></li>
                    <?php if(isset($property->weight)){ ?>
                    <li class="list-group-item border-0 p-1 bg-light"><?php echo $property->weight . " Kg"; } ?></li>
                    <?php if(isset($property->height)){ ?>
                    <li class="list-group-item border-0 p-1 bg-light"><?php echo $property->height; ?>x<?php 
                    echo $property->width;?>x<?php echo $property->length . " cm";} ?></li>        
                </ul>
            </div>
        <?php endforeach; ?>
    </div>
</form>
<!-- instantiate a class to delete the selected product blocks-->
<?php $delete = new MassDelete; ?>

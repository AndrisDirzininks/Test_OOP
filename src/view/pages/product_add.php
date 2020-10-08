<!-- a form with products to submit -->
<form action="" method="post">
    <!-- header and form submit button -->
    <div class="border-bottom border-secondar d-flex">
            <div class="mr-auto p-2"><h2>Product Add</h2></div>
            <div class="p-2">
                <input class="btn btn-outline-secondary" type="submit" name="submit" value="Submit">
            </div>   
    </div>
    <!-- all input field tags here -->
    <div>
        <ul class="list-group text-left" >
            <li class="list-group-item border-0 p-1 bg-light">
                <label for="sku">SKU</label><br>
                <input type="text" id="sku" name="Sku" maxlength="20" value="" required/>
            </li>
            <li class="list-group-item border-0 p-1 bg-light">
                <label for="name">Name</label><br>
                <input type="text" id="name" name="Name" maxlength="30" value="" required/>
            </li>
            <li class="list-group-item border-0 p-1 bg-light">
                <label for="price">Price</label><br>
                <input type="number" id="price" name="Price" step="0.01" min="0.01" max="10000"  value="" required/>
            </li>
            <!-- dinamic fields here -->
            <!-- type switcher -->
            <li class="list-group-item border-0 p-1 bg-light">
                    <label for="type">Choose the product type</label><br>
                    <select name="select" id="type" class="custom-select"  required>
                        <option value="">Select</option>
                        <option value="Size">DVD</option>
                        <option value="Weight">Book</option>
                        <option value="Dimensions">Furniture</option>
                    </select>
            <!-- the currently hidden input fields that become visible when type is choosen - managed with js -->
            </li>
            <!-- DVD -->
            <li class="list-group-item border-0 p-1 bg-light d-none" id="_size" >
                <label for="size">Size</label><br>
                <input type="number" id="size" name= "Size" step="0.01" min="1" max="20" value="" />

                <p>Please enter disc size in GB</p>
            </li>
            <!-- Book -->
            <li class="list-group-item border-0 p-1 bg-light d-none" id="_weight" >
                <label for="weight">Weight</label><br>
                <input type="number" id="weight" name= "Weight" step="0.01" min="1" max="100" value="" />
                <p>Please enter book weight in Kg</p>
            </li>
            <!-- Furniture -->
            <li class="list-group-item border-0 bg-light d-none" id="_dimensions" >
                <label for="">Dimensions</label><br>
                <label for="height">Height</label><br>
                <input type="number" id="height" name= "Height" value="" step="1" min="1" max="250"/><br>
                <label for="width">Width</label><br>
                <input type="number" id="width" name= "Width" value="" step="1" min="1" max="250"/><br>
                <label for="length">Length</label><br>
                <input type="number" id="length" name= "Length" value="" step="1" min="1" max="250"/>
                <p>Please enter furniture dimensions in cm</p>
            </li>
        </ul>
    </div>
</form>
<!-- instantiate a class to add the submitted form to database-->
<?php $add = new TypeCaseFactory; ?>


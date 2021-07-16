<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<form action="submitt" method="POST">
    @csrf
    <div class= mb-3>
        <div class="form-floating">
            <textarea name ="product" class="form-control" placeholder="Leave a comment here" id="product" style="height: 100px"></textarea>
            <label for="floatingTextarea2">Product</label>
        </div>        
    </div>

    <div class= mb-3>
        <div class="form-floating">
            <textarea name="address" class="form-control" placeholder="Leave a comment here" id="address" style="height: 100px"></textarea>
            <label for="floatingTextarea2">Address</label>
        </div>        
    </div>

    <div class="row g-2">
        <div class="col-md">
            <div class="form-floating">
            <input name="price" type="number" class="form-control" id="price" placeholder="Phone Number">
            <label for="floatingInputGrid">Price</label>
            </div>
    </div>

    <div class="mt-5">
        <div class="d-grid gap-2">
            <button class="btn btn-primary" type="submit">Submit</button>
        </div>
    </div>
</form>



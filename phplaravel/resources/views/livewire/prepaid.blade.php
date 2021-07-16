<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<form action="submit" method="POST">
    @csrf
    <div class="row g-2">
        <div class="col-md">
            <div class="form-floating">
            <input name="phone" type="number" class="form-control" placeholder="Phone Number">
            <label for="phone">Phone Number</label>
            </div>
        </div>
        <div class="col-md">
            <div class="form-floating">
            <select class="form-select" name="value" aria-label="Floating label select example" >
                <option selected>Open this select menu</option>
                <option value="10.000">10.000</option>
                <option value="50.000">50.000</option>
                <option value="100.000">100.000</option>
            </select>
            <label for="value">Value</label>
            </div>
        </div>
    </div>
    <div class="mt-5">
        <div class="d-grid gap-2">
            <button class="btn btn-primary" type="submit">Submit</button>
        </div>
    </div>
</form>



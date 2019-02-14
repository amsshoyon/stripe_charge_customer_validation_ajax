<div class="container" style="margin-top: 100px;">
    <div class="row">
        <div class="cart col-md-8 offset-md-2">
            <div class="cart-header">
                <h2>Shoping</h2>
            </div>
            <div class="cart-body">
                <form action="payments.php" method="POST">
                    <div class="form-group">
                        <label for="">select items</label>
                        <select name="item" id="" class="form-control">
                            <option value="Item 1">Item 1</option>
                            <option value="Item 2">Item 2</option>
                            <option value="Item 3">Item 3</option>
                            <option value="Item 4">Item 4</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Number of items</label>
                        <input type="number" name="number" class="form-control" placeholder="Number of items">
                    </div>
                    <input type="submit" value="Submit" class="btn btn-success">
                </form>

            </div>
        </div>
    </div>
</div>

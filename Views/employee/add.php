
<div class="container">
  <h2 class="text-center" style="color: green;">Thêm nhân viên</h2>
  <div class="row">
    <div class="col-sm-8 offset-sm-2">
      <form action="" class="was-validated" method="post">
        <div class="form-group">
          <label for="uname">name:</label>
          <input type="text" class="form-control" id="name" placeholder="Enter username" name="name" required>
          <div class="valid-feedback">Valid.</div>
          <div class="invalid-feedback">Please fill out this field.</div>
        </div>

        <div class="form-group">
          <label for="pwd">age</label>
          <input type="number" class="form-control" id="pwd" placeholder="Enter age" name="age" required>
          <div class="valid-feedback">Valid.</div>
          <div class="invalid-feedback">Please fill out this field.</div>
        </div>

        <div class="form-group">
          <label for="pwd">sex</label>
          <input type="number" class="form-control" id="pwd" placeholder="Enter sex" name="sex" required>
          <div class="valid-feedback">Valid.</div>
          <div class="invalid-feedback">Please fill out this field.</div>
        </div>

        <div class="form-group">
          <label for="sel1">Loại nhân viên</label>
          <select class="form-control" id="sel1" name="employee_type">
            <option value="0">Nhân viên hợp đồng</option>
            <option value="1">Nhân viên chính thức</option>         
          </select>
        </div>
        <button type="submit" name="submit" class="btn btn-lg btn-primary">Thêm</button>

      </div>
    </div>
    
  </form>
</div>

</body>
</html>
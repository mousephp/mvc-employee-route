
<div class="container">
  <h2 class="text-center" style="color: green;">Sửa nhân viên</h2>
  <div class="row">
    <div class="col-sm-8 offset-sm-2">
      <form action="" class="was-validated" method="post">
        <div class="form-group">
          <label for="uname">name</label>
          <input type="text" class="form-control" id="name" placeholder="Enter username" name="name" required value="<?php echo $get_em_id['name'];?>" >
          <div class="valid-feedback">Valid.</div>
          <div class="invalid-feedback">Please fill out this field.</div>
        </div>

        <div class="form-group">
          <label for="pwd">age</label>
          <input type="number" class="form-control" id="pwd" placeholder="Enter age" name="age" required  value="<?php echo $get_em_id['age'];?>">
          <div class="valid-feedback">Valid.</div>
          <div class="invalid-feedback">Please fill out this field.</div>
        </div>

        <div class="form-group">
          <label for="pwd">sex</label>
          <!-- <input type="number" class="form-control" id="pwd" placeholder="Enter sex" name="sex" required  value="<?php// echo $get_em_id['sex'];?>">
          -->
          <br>
          <input type="radio" name="sex" value="1" <?php if ($get_em_id['sex']=="1")  echo "checked";?> >Nữ
          <input type="radio" name="sex" value="2" <?php if ( $get_em_id['sex']=="2") echo "checked";?> >Nam

          <div class="valid-feedback">Valid.</div>
          <div class="invalid-feedback">Please fill out this field.</div>
        </div>

        <div class="form-group">
          <label for="sel1">Loại nhân viên</label>
          <select class="form-control" id="sel1" name="employee_type">

            <option value="0" <?php if($get_em_id['employee_type']=='0')echo 'selected';   ?> >
              Nhân viên hợp đồng 
            </option>

            <option value="1" <?php if($get_em_id['employee_type']=='1')  echo 'selected';  ?> >
              Nhân viên chính thức
            </option>

          </select>
        </div>
        <button type="submit" name="submit" class="btn btn-lg btn-primary">Sửa</button>

      </div>
    </div>
    
  </form>
</div>

</body>
</html> 
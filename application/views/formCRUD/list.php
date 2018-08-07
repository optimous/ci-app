<div class="row">
    <div class="col-lg-6 margin-tb">
        <h2>List</h2>
    </div>
    <div class="col-lg-6 text-right">
        <a class="btn btn-success" href="<?php echo base_url('formCRUD/create') ?>"> Create New Form</a>
    </div>
</div>
<table class="table table-bordered">
  <thead>
      <tr>
          <th>Name</th>
          <th>Email</th>
          <th>Date of birth</th>
          <th>Favorite color</th>
          <th width="220px">Action</th>
      </tr>
  </thead>
  <tbody>
   <?php foreach ($data as $form) { ?>      
      <tr>
          <td><?php echo $form->name; ?></td>
          <td><?php 
            $date = new DateTime($form->date_of_birth);
            echo $date->format('m-d-Y H:i:s');
          ?></td>          
          <td><?php echo $form->email; ?></td>   
          <td><div style="background-color: <?php echo $form->favorite_color; ?>; width:30px; height: 30px; float: left;"></div>&nbsp;&nbsp;<?php echo $form->favorite_color; ?></td>   
      <td>
        <form method="DELETE" action="<?php echo base_url('formCRUD/delete/'.$form->id);?>">
          <a class="btn btn-info" href="<?php echo base_url('formCRUD/'.$form->id) ?>"> show</a>
         <a class="btn btn-primary" href="<?php echo base_url('formCRUD/edit/'.$form->id) ?>"> Edit</a>
          <button type="submit" class="btn btn-danger"> Delete</button>
        </form>
      </td>     
      </tr>
      <?php } ?>
  </tbody>
</table>
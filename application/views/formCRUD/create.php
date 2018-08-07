<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Form</h2>
            <center><div id="result"></div></center>
        </div>
    </div>
</div>
<form id="myform" method="post" action="<?php echo base_url('formCRUDCreate');?>">
    <?php
    if ($this->session->flashdata('errors')){
        echo '<div class="alert alert-danger">';
        echo $this->session->flashdata('errors');
        echo "</div>";
    }
    ?>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="name"><strong>Name:</strong></label>
                <input type="text" name="name" class="form-control">
            </div> 
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="date_of_birth"><strong>Date of birth:</strong></label>
                <input type="text" name="date_of_birth" class="form-control datepicker" pattern="[0-9]{4}-(0[1-9]|1[012])-(0[1-9]|1[0-9]|2[0-9]|3[01])">
            </div> 
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="email"><strong>Email:</strong></label>
                <input type="email" name="email" class="form-control">
            </div> 
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="favorite_color"><strong>Favorite color:</strong></label>
                <input type="color" name="favorite_color" class="form-control">
            </div> 
        </div>

        <div  class="col-xs-6 col-sm-6 col-md-6">
            <a class="btn btn-primary" href="<?php echo base_url('formCRUD');?>"> Back</a>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6 text-right">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>    
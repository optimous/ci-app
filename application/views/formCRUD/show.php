<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Show data</h2>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Name:</strong> <?php echo $form->name; ?>
        </div> 
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Date of birth:</strong> <?php echo $form->date_of_birth; ?>
        </div> 
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Email:</strong> <?php echo $form->email; ?>
        </div> 
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Favorite color:</strong> <?php echo $form->favorite_color; ?>
        </div> 
    </div>

    <div  class="col-xs-6 col-sm-6 col-md-6">
        <a class="btn btn-primary" href="<?php echo base_url('formCRUD');?>"> Back</a>
    </div>

</div>

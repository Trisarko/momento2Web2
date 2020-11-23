<!-- Edit User -->

<section id="register">
        <div class="container">
            <div class="row ">
    
                <div class="col-md-4 my-4">

                    <form method="POST" action="<?php echo base_url().'/users/sendUpdateRegistry?id='.$registry->id?>" class="needs-validation" novalidate>
                        <h3 class="text-center">EDITAR ANIMAL</h3>

                        <div class="form-row mt-5">

                            <div class="form-group col-md-6">
                                <label for="name">Nombre <span class="red">*</span></label>
                                <input type="text" value="<?php echo $registry->name?>" class="form-control" id="name" name="name" required>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="age">Edad<span class="red">*</span></label>
                                <input type="text" value="<?php echo $registry->age?>" class="form-control" id="age" name="age" required>
                            </div>

                        </div>
    
                        <div class="form-row">

                            <div class="form-group col-md-6">
                                <label for="type">Tipo de Animal<span class="red">*</span></label>
                                <input type="text" min="8" max="10" value="<?php echo $registry->type?>" class="form-control" id="type" name="type" max="9999999999" required>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="description">Descripción<span class="red">*</span></label>
                                <input type="text" min="8" max="10" value="<?php echo $registry->description?>" class="form-control" id="description" name="description" required>
                            </div>

                        </div>
                        <div>
                        <div class="form-group col-md-6">
                                <label for="food">Comida<span class="red">*</span></label>
                                <input type="text" min="8" max="10" value="<?php echo $registry->food?>" class="form-control" id="food" name="food" required>
                            </div>
                        </div>
                       
                        <br>
                        <button type="submit" class="btn btn-secondary btn-block" id="sendinformation">Enviar
                            información</button>                       

                    </form>
                    <span class="font-weight-bold"><a href="" class="card-link text-success"><small
                                class="text-muted">Recuerda llenar todos los campos!!! *</small></a></span></p>

                                </div>

                <div class="col-md-8 mt-5">
                    <div class="card">                        
                            <div class="carousel-item active">
                                <img src="<?php echo base_url('assets/img/habitat.jpg')?>" class="d-block w-100" alt="...">
                           
                        </div>
                    </div>
                </div>
                    
            </div>
        </div>
    </section>
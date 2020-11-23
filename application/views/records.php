<!--List Appointments-->
<section id="appoint">
    
    <div class="container">
        <div class="row">
            <div class="col-sm">

            </div>
            <div class="col-sm-12">


                <table class="table">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Edad</th>
                            <th scope="col">Tipo Animal</th>
                            <th scope="col">Descripción</th> 
                            <th scope="col">Comida</th>                           
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
                    foreach($records as $records){
                        $template = "<tr>
                                        <td>{$records->id}</td>
                                        <td>{$records->name}</td>
                                        <td>{$records->age}</td>
                                        <td>{$records->type}</td>
                                        <td>{$records->description}</td> 
                                        <td>{$records->food}</td>                                       
                                        <td> <a href='http://localhost/ExamenSegundoMomento/users/editRegistry?id={$records->id}'' class='btn btn-warning'>Edit</a> </td>
                                        <td> <a href='http://localhost/ExamenSegundoMomento/users/deleteRegistry?id={$records->id}' class='btn btn-danger'>Delete</a> </td>  
                                    </tr>";
                        echo $template;
                    }                        
                    ?> 
                    </tbody>
                </table>    
                
            </div>
            <div class="col-sm">

            </div>
        </div>
    </div>

   
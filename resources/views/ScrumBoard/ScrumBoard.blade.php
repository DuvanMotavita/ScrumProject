@extends('layouts.app')
@section('content')
    <!-- Main content -->
    <section id="section1" class="content">
      <div class="row">
            <div class="Title">
            <h1>Proyectos de Scrum</h1>
            </div>
        <div id="app" class="col-md-12">

                <div class="col-md-4 Frame Box">
                    <a href="">
                        <div class="Frame">
                            <div class="boximage">
                                <img  class="image"  src="images/Logo.png" alt="">  
                            </div>
                            <div>Applicacion 1</div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 Frame Box">
                  <a href="">
                        <div class="Frame">
                            <div class="boximage">
                                <img  class="image"  src="images/Logo.png" alt="">  
                            </div>
                            <div>Applicacion 2</div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 Frame Box">
                  <a data-toggle="modal" data-target=".bd-example-modal-lg">
                    <div class="Frame">
                        <div class="boximage">
                            <img  class="image"  src="images/Plus.png" alt="">  
                        </div>
                        <div>Agregar nuevo tablero</div>
                    </div>
                   </a>
                </div>
        </div>    
       </div>         
    </section>
    <!-- /.content <-->
        <!-- Main content -->
    <section  class="content">
        
    </section>
    <!-- /.content <-->
    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
 <!--Header-->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Agrega un proyecto</h4>
            </div>
            <!--Body-->
            <div class="modal-body">
                <p>Envia tu proyecto, descripcion e integrantes.</p>
                <br>
                <div class="md-form">
                    <i class="fa fa-pencil prefix"></i>
                    <input type="text" id="form22" class="form-control">
                    <label for="form42">Nombre del proyecto</label>
                </div>

                <form>
                    <div class="file-field">
                        <div class="btn btn-primary btn-sm">
                            <span>Choose file</span>
                            <input type="file">
                        </div>
                        <div class="file-path-wrapper">
                           <input class="file-path validate" type="text" placeholder="Upload your file">
                        </div>
                    </div>
                </form>
  

                <div class="md-form">
                    <i class="fa fa-commenting-o prefix"></i>
                    <textarea type="text" id="form32" class="md-textarea"></textarea>
                    <label for="form34">Descripcion</label>
                </div>

                <div class="md-form">
                    <i class="fa  fa-group prefix"></i>
                    <textarea type="text" id="form8" class="md-textarea"></textarea>
                    <label for="form8">Integrantes</label>
                </div>
                <div class="chip">
                    <img src="http://mdbootstrap.com/images/avatars/img%20(3).jpg" alt="Contact Person"> Jane Doe
                </div>
                <div class="text-xs-center">
                    <button class="btn btn-primary">Enviar</button>
                </div>
            </div>
            <!--Footer-->
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
      </div>
    </div>
@endsection
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Autores</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="./dashboard-inicio">Inicio</a></li>
              <li class="breadcrumb-item active">Autores</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">

                <div class="input-group rounded">
                    <button type="button" class="btn btn-success"><i class="fa fa-pen"> Registrar nuevo Autor</i></button>
                    <input style="margin-left: 20px; margin-right: 10px" type="search" class="form-control rounded" placeholder="Buscar" aria-label="Search" aria-describedby="search-addon" />
                    <span class="input-group-text border-0" id="search-addon">
                      <button class="button fas fa-search" style="border: 1px;"></button>
                    </span>
                </div>

              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th>ID Autores</th>
                      <th>Nombres</th>
                      <th>Apellidos</th>
                      <th>Foto</th>
                      <th>Acciones</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Trident</td>
                      <td>Internet Explorer 5.0</td>
                      <td>Internet Explorer 5.0</td>
                      <td>Internet Explorer 5.0</td>
                      <td><button class="badge-btn bg-danger">
                          <i class="fa fa-trash-alt"></i> Eliminar</button>
                          <button class="badge-btn bg-blue">
                          <i class="fa fa-pen"></i> Editar</button>
                        </td>
                    </tr>
                    <tr>
                      <td>Trident</td>
                      <td>Internet Explorer 7</td>
                      <td>Internet Explorer 7</td>
                      <td>Internet Explorer 7</td>
                      <td><button class="badge-btn bg-danger">
                          <i class="fa fa-trash-alt"></i> Eliminar</button>
                          <button class="badge-btn bg-blue">
                          <i class="fa fa-pen"></i> Editar</button>
                        </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
        </div>
      </div>    
    </section>  
  </div>  
<style></style>

<x-admin-layout>
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Gallaries</small></h3>
      </div>
    </div>

    <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
              <li><a class="close-link"><i class="fa fa-times"></i></a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <div class="row">
              <div class="col-md-12">
                <div class="panel panel-default">
                  <div class="panel-heading">Upload New image </div>
                  <div class="panel-body">
                    <table class="table">
                      <tr>
                        <th width="200px">Image</th>
                        <td>
                         <form class="form-horizontal" action="{{ url()->route('admin.gallaries.store') }}"
                           method="post" enctype="multipart/form-data">
                           @csrf
                            <div class="form-group">       
                                  <input type="file" class="form-control-file" id="image" name="image" onchange="previewFile(this)" required >
                                  <img id="previewImg" alt=" preview image" style="max-width:130px;margin-top:20px;" />
                                @error('content')
                                <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                                </span>
                                @enderror  
                           </div>
                           {{ Form::submit('Upload', ['class' => 'btn btn-info btn-sm']) }}
                         </form>
                        </td>
                      </tr>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</x-admin-layout>

<script>
  function previewFile(input){
      var file= $("input[type =file]").get(0).files[0];
      if(file){
        var reader = new FileReader();
        reader.onload = function(){
          $('#previewImg').attr("src",reader.result);
        }
        reader.readAsDataURL(file);
      }
  }
</script>
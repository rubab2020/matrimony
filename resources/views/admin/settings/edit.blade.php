<style></style>

<x-admin-layout>
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Setting</small></h3>
      </div>
    </div>

    <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>View Items</h2>
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
                  <div class="panel-heading">View Items </div>
                  <div class="panel-body">
                    <table class="table">
                      <tr>
                        <th width="200px">Name</th>
                        <td>{{ $setting->name }}</td>
                      </tr>
                      <tr>
                        <th width="200px">Content</th>
                        <td>
                         <form class="form-horizontal" action="{{ url()->route('admin.setting.update', $setting->id) }}"
                           method="post" enctype="multipart/form-data">
                           @csrf
                           @method('put')
                            <div class="form-group"> 
                               @if($setting->id < 7)
                                  <textarea class="form-control @error('content') is-invalid @enderror"
                                     rows="5" id="content" type="content" name="content" required > {{ $setting->content ?? old('content')}}
                                   </textarea>
                                @else
                                  <input type="file" class="form-control-file" id="content" name="content" onchange="previewFile(this)" required >
                                  <img id="previewImg" alt=" preview image" style="max-width:130px;margin-top:20px;" />
                                @endif
                                @error('content')
                                <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                                </span>
                                @enderror  
                           </div>
                           {{ Form::submit('Update', ['class' => 'btn btn-info btn-sm']) }}
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
<x-admin-layout>
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Customer</small></h3>
      </div>
      <div class="">
        <!-- <a href="{{ url()->route('admin.users.create') }}" class="btn btn-sm btn-primary pull-right">Add New User</a> -->
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
            <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap"
              cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Profile Picture</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @php ($i = 0)
                @foreach($settings as $setting)
                   <tr>
                      <td>{{ ++$i }}</td>
                      <td>{{ $setting->name }}</td>
                      @if($i < 7)
                       <td>{{ substr($setting->content,0,50) }}</td>
                      @else
                        <td><image height="100px" src="{{asset('/assets/admin/images/setting/'.$setting->content)}}"></td>
                      @endif
                      <td>
                        <div class="btn-group" role="group" aria-label="...">
                          <a href="{{ route('admin.setting.show', $setting->id) }}" class="btn btn-xs btn-success"><i
                              class="fa fa-eye"></i></a>
                          <a href="{{ route('admin.setting.edit', $setting->id) }}" class="btn btn-xs btn-success">
                            <i class="fa fa-pencil-alt"></i>
                          </a>
                        </div>
                      </td>                
                    </tr>
                  @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</x-admin-layout>
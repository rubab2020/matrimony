<x-admin-layout>
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Users</small></h3>
      </div>
      <div class="">
        <a href="{{ url()->route('admin.gallaries.create') }}" class="btn btn-sm btn-primary pull-right">Add New image </a>
      </div>
    </div>

    <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Gallaries</h2>
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
                  <th>SL</th>
                  <th>Image</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @php ($i = 0)
                @foreach($gallaries as $gallary)
                <tr>
                  <td>{{ ++$i }}</td>
                  <td><image height="100px" src="{{asset('/assets/admin/images/gallaries/'.$gallary->image)}}"></td>
                  <td>
                    <div class="btn-group" role="group" aria-label="...">
                      <a href="{{ route('admin.gallaries.show', $gallary->id) }}" class="btn btn-xs btn-success"><i
                          class="fa fa-eye"></i></a>
                      <form action="{{ route('admin.gallaries.destroy', $gallary->id) }}" method="post" class="btn-group">
                        {{ csrf_field() }}
                        {{ method_field('delete') }}
                        <button title="Delete" type="submit" class="btn btn-xs btn-danger"
                          onclick="return confirm('Are you sure you want to delete?')"><i
                            class="fa fa-times"></i>&nbsp;</button>
                      </form>
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
<x-admin-layout>
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Users</small></h3>
      </div>
      <div class="">
        <a href="{{ url()->route('admin.users.create') }}" class="btn btn-sm btn-primary pull-right">Add New User</a>
      </div>
    </div>

    <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Users</h2>
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
                  <th>Name</th>
                  <th>Email</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @php ($i = 0)
                @foreach($users as $user)
                <tr>
                  <td>{{ ++$i }}</td>
                  <td>{{ $user->name }}</td>
                  <td>{{ $user->email }}</td>
                  <td>
                    <div class="btn-group" role="group" aria-label="...">
                      <a href="{{ route('admin.users.show', $user->id) }}" class="btn btn-xs btn-success"><i
                          class="fa fa-eye"></i></a>
                      <a href="{{ route('admin.users.edit', $user->id) }}" class="btn btn-xs btn-success">
                        <i class="fa fa-pencil-alt"></i>
                      </a>
                      <form action="{{ route('admin.users.destroy', $user->id) }}" method="post" class="btn-group">
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
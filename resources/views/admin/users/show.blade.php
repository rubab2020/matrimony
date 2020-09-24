<style></style>

<x-admin-layout>
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>User</small></h3>
      </div>
    </div>

    <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>View User</h2>
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
                  <div class="panel-heading">View User </div>
                  <div class="panel-body">
                    <table class="table">
                      <tr>
                        <th width="200px">Name</th>
                        <td>{{ $user->name }}</td>
                      </tr>
                      <tr>
                        <td>Email</td>
                        <td>{{ $user->email }}</td>
                      </tr>
                      <tr>
                        <td>Permissions</td>
                        <td>
                          @foreach($user->permissions as $permission)
                          <span class="badge">{{ $permission->name ?? '' }}</span>
                          @endforeach
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

<script></script>
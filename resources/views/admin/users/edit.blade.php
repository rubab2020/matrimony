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
            <h2>Edit User</h2>
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
                  <div class="panel-heading">Edit User</div>
                  <div class="panel-body">
                    <form class="form-horizontal" action="{{ url()->route('admin.users.update', $user->id) }}"
                      method="post">
                      @csrf
                      @method('put')

                      <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label control-label">{{ __('Name') }}</label>

                        <div class="col-md-6">
                          <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                            name="name" value="{{ $user->name ?? old('name') }}" required autofocus>

                          @error('name')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                          @enderror
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="email"
                          class="col-sm-2 col-form-label control-label">{{ __('E-Mail Address') }}</label>

                        <div class="col-md-6">
                          <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                            name="email" value="{{ $user->email ?? old('email') }}" required>

                          @error('email')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                          @enderror
                        </div>
                      </div>

                      @if($user->id == auth()->user()->id)
                      <div class="form-group row">
                        <label for="password" class="col-sm-2 col-form-label control-label">{{ __('Password') }}</label>

                        <div class="col-md-6">
                          <input id="password" type="password"
                            class="form-control @error('password') is-invalid has-erro @enderror" name="password"
                            autocomplete="new-password">

                          @error('password')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                          @enderror
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="password-confirm"
                          class="col-sm-2 col-form-label control-label">{{ __('Confirm Password') }}</label>

                        <div class="col-md-6">
                          <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                            autocomplete="new-password">
                        </div>
                      </div>
                      @endif

                      <div class="form-group">
                        <label class="control-label col-sm-2">Permissions</label>
                        <div class="col-sm-10">
                          @foreach($permissions as $key => $permission)
                          <div class="col-sm-3">
                            <label><input type="checkbox" class="icheck" name="permissions[]"
                                {{ $user->can($permission) ? 'checked="checked"' : ''}} value="{{ $key }}">
                              {{ $permission }}</label>
                          </div>
                          @endforeach

                        </div>
                      </div>
                      {{ Form::submit('Update', ['class' => 'btn btn-info btn-sm']) }}
                    </form>
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
<style></style>

<x-admin-layout>
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Pages</small></h3>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2></h2>
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
                                    <div class="panel-heading" style="text-align:centre;"><strong>Edit Page</strong></div>
                                    <div class="panel-body">
                                        <form class="form-horizontal" id="submitform" action="{{ url()->route('admin.pages.update',$page->id) }}"
                                            method="post">
                                            @csrf
                                            @method('put')

                                            <div class="form-group row">
                                                <label for="title"
                                                    class="col-sm-2 col-form-label control-label">{{ __('title') }}</label>

                                                <div class="col-md-6">
                                                    <input id="title" type="text"
                                                        class="form-control @error('title') is-invalid @enderror"
                                                        name="title" value="{{ $page->title ?? old('title') }}" required 
                                                        autocomplete="title" autofocus>

                                                    @error('title')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group row"> 
                                                 <label for="content"
                                                      class="col-sm-2 col-form-label control-label">{{ __('content') }}</label>
                                                 <div class="col-md-6">     
                                                     <textarea class="form-control @error('content') is-invalid @enderror"
                                                         rows="9" id="editor" type="content" name="editor" value=""  required > {{ $page->content ?? old('content') }}
                                                      </textarea>
                                                      @error('content')
                                                        <span class="invalid-feedback" role="alert">
                                                          <strong>{{ $message }}</strong>
                                                        </span>
                                                      @enderror 
                                                  </div> 
                                           </div>
                                            {{ Form::submit('Update Page', ['class' => 'btn btn-success btn-sm']) }}
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
<script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>
<script>
     CKEDITOR.replace( 'editor',{
        filebrowserUploadUrl: "{{route('admin.pages.upload', ['_token' => csrf_token() ])}}",
		filebrowserUploadMethod: 'form'
     });
</script>

@extends('layouts.admin_layouts.admin_layout')
@section('admin_title','Category');
@section('content')

        <div class="content">
            <div class="content-header">
                <!-- leftside content header -->
                <div class="leftside-content-header">
                    <ul class="breadcrumbs">
                        <li><i class="fa fa-columns" aria-hidden="true"></i><a href="#">Catalogues</a></li>
                        <li><a>Catagory</a></li>
                    </ul>
                </div>
            </div>
            <div class="row animated fadeInUp">
                <div class="col-sm-12 col-md-12 ">
                    <h4 class="section-subtitle"><b>Add Category</b></h4>
                    <div class="panel">
                        <div class="panel-content">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="panel-content">
                                        <div class="form-group">
                                            <label for="state-success" class="control-label">Category Name</label>
                                            <input type="text" class="form-control" id="state-success">
                                        </div>
                                        <div class="form-group">
                                            <label for="state-warning" class="control-label">Select Catagory Level</label>
                                            <select class="form-control" name="cars" id="cars">
                                                <option value="volvo">Volvo</option>
                                                <option value="saab">Saab</option>
                                                <option value="mercedes">Mercedes</option>
                                                <option value="audi">Audi</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="state-error" class="control-label">Category Discount</label>
                                            <input type="text" class="form-control" id="state-error">
                                        </div>
                                        <div class="form-group">
                                            <label for="textareaMaxLength" class="control-label">Category Discription</label>
                                            <textarea class="form-control" rows="3" id="textareaMaxLength" placeholder="Write a comment" maxlength="100"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="textareaMaxLength" class="control-label">Meta Discription</label>
                                            <textarea class="form-control" rows="3" id="textareaMaxLength" placeholder="Write a comment" maxlength="100"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="panel-content">
                                        <div class="form-group">
                                            <label for="state-warning" class="control-label">Select Section</label>
                                            <select class="form-control" name="cars" id="cars">
                                                <option value="volvo">Volvo</option>
                                                <option value="saab">Saab</option>
                                                <option value="mercedes">Mercedes</option>
                                                <option value="audi">Audi</option>
                                            </select>
                                        </div>
                                        <div class="form-group has-feedback">
                                            <label for="state-warning-feedback" class="control-label">Category Image</label>
                                            <input type="file" class="form-control" id="state-warning-feedback">
                                            <span class="glyphicon glyphicon-warning-sign form-control-feedback"></span>
                                        </div>
                                        <div class="form-group">
                                            <label for="state-warning-feedback" class="control-label">Category URL</label>
                                            <input type="text" class="form-control" id="state-warning-feedback">
                                            <span class="glyphicon glyphicon-warning-sign form-control-feedback"></span>
                                        </div>
                                        <div class="form-group">
                                            <label for="textareaMaxLength" class="control-label">Meta Title</label>
                                            <textarea class="form-control" rows="3" id="textareaMaxLength" placeholder="Write a comment" maxlength="100"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="textareaMaxLength" class="control-label">Meta Keywords</label>
                                            <textarea class="form-control" rows="3" id="textareaMaxLength" placeholder="Write a comment" maxlength="100"></textarea>
                                        </div>
                                    </div>
                                </div>

                                <input style="width:83px;margin-left:27px;" class="btn btn-md btn-success" type="submit" value="Submit">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection

@section('admin_css')
    <link rel="stylesheet" href="{{asset('admin')}}/vendor/select2/css/select2.min.css">
    <link rel="stylesheet" href="{{asset('admin')}}/vendor/select2/css/select2-bootstrap.min.css">
@endsection
@section('admin_js')
    <script src="{{asset('admin')}}/vendor/jquery/jquery-1.12.3.min.js"></script>
    <script src="{{asset('admin')}}/vendor/bootstrap_max-lenght/bootstrap-maxlength.js"></script>
    <script src="{{asset('admin')}}/vendor/select2/js/select2.min.js"></script>
    <script src="{{asset('admin')}}/javascripts/examples/forms/advanced.js"></script>
@endsection

@extends('admin/layouts/master')
@section('content-wrapper')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                修改分类
                <small> 修改分类信息</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{ url('admin') }}"><i class="fa fa-dashboard"></i> 首页</a></li>
                <li class="active" > <a href="{{ url('admin/category') }}">分类管理</a> </li>
                <li class="active" href="#">新增分类</li>
            </ol>
        </section>
        <!-- Main content -->
        <section class="content container-fluid">
            <!--------------------------
              | Your Page Content Here |
              -------------------------->
            <form role="form" action="{{ url('/admin/category', $category->id ) }}" method="post">
                {{csrf_field()}}
                {{ method_field('PUT') }}
                @include('admin/common/_message')
                <div class="box-body">
                    <div class="form-group ">
                        <label for="exampleInputEmail1">名称</label>
                        <input type="text"  value="{{ old('name',$category->name)}}" class="form-control" id="inputName" name="name" placeholder="">
                        @if ($errors->has('name'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                        @endif
                        <p class="help-block">输入分类名称</p>
                    </div>
                    <div class="form-group ">
                        <label for="">父级</label> ----->
                        <label for="">{{$category->getParentName()}}</label>
                        {{--<p class="help-block">请输入父级目录</p>--}}
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">排序</label>
                        <input type="text" value="{{old('sort',$category->sort)}}" class="form-control" name="sort" id="inputsort" placeholder="" >
                        @if ($errors->has('sort'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                        @endif
                        <p class="help-block">请输入整数,越小越靠前.</p>
                    </div>
                    <div class="form-group">
                        <label>状态:</label>
                        <div>
                            @foreach($category->pitchStatus(true) as $key => $value)
                                <div class="radio-inline">
                                    <label>
                                        <input type="radio" name="status" id="optionsRadios1" value="{{ $key }}" @if(old('status',$category->status) == $key) checked @endif >
                                        {{$value}}
                                    </label>
                                </div>
                            @endforeach
                        </div>
                        <p class="help-block">选择状态.</p>
                    </div>
                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">提交</button>
                </div>
            </form>

        </section>
        <!-- /.content -->
    </div>
@endsection

@section('js')
@endsection
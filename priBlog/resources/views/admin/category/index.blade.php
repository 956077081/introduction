@extends("admin/layouts/master")
@section("title","仪表盘")
@section("content-wrapper")
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->

        <section class="content-header">
            <h1>
                类别管理
                <small>内容分类</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> 首页</a></li>
                <li class="active">主页</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content container-fluid">

            <div class="box">
                <form action="{{ url('admin/category') }} " method="get">
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-3">
                                <input type="text" class="form-control" placeholder="名称" name="name" value="{{ request()->get('name') }}">
                            </div>
                            <div class="col-md-3">
                                <select name="status" class="form-control">
                                    <option value="">全部</option>
                                    <option value="{{ \App\Category::STATUS_YES }}" @if(request()->get('status')== \App\Category::STATUS_YES) selected @endif>启用</option>
                                    <option value="{{\App\Category::STATUS_NO}}"    @if(request()->get('status') == \App\Category::STATUS_NO) selected @endif>禁止</option>

                                </select>

                            </div>

                            <div class="col-md-3">
                                <button type="submit" class="btn btn-primary btn-sm">
                                    <span class=" glyphicon glyphicon-search"> 搜索 </span>
                                </button>

                                <a class="btn btn-default btn-sm" href="{{url('admin/category')}}">
                                    <span class=" glyphicon glyphicon-book"> 全部 </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    @include('admin/common/_message')
                </form>
            </div>

                <div class="box">
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                    <div class="box-header">
                        <a href="{{ url('/admin/category/create') }}" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-plus"></span> 增加</a>
                        <a href="javascript:;" class="js-delete btn btn-danger btn-sm"><span class="glyphicon glyphicon-remove"></span>删除</a>

                        <form action="{{ url('admin/category') }}" method="post" id="js-delete-form" style="display:none">
                            {{csrf_field()}}
                            {{--在laravel  资源路由还提供了两种额外了提交方式 put 和delete --}}
                            {{--<input type="hidden" name="_method" value="DELETE" >  相当于--}}
                            {{method_field('DELETE')}}
                        </form>

                    </div>
                    <table class="table table-hover">
                        <tbody><tr>
                            <th><input type="checkbox" class="js-delete-all"></th>
                            <th>ID</th>
                            <th>名称</th>
                            <th>状态</th>
                            <th>优先级</th>
                            <th>创建时间</th>
                            <th> 操作</th>
                        </tr>
                        @foreach($categories as $category)
                            <tr>
                                <th><input type="checkbox" class="ids" value=" {{ $category->id }}"></th>
                                <td>{{ $category->id }}</td>
                                <td> {{ $category->linkName() }} </td>
                                <td> {{ $category->pitchStatus() }} </td>
                                <td>{{ $category->sort }}</td>
                                <td>{{ $category->created_at }}</td>
                                <td> {{ $category->updated_at }}</td>
                                <td><a  href="{{ url('admin/category',[$category->id ,'edit'])}}">编辑</a></td>
                                <td><a  data-id="{{ $category->id }}" class="js-delete-one" href="javascript:;">删除</a></td>
                            </tr>
                        @endforeach
                        </tbody></table>
                    <ul class="pagination">
                        {{ $categories->links()}}
                    </ul>
                </div>
                <!-- /.box-body -->
            </div>

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
@section('js')
    <script>
        //全选
        $('.js-delete-all').click(function () {
            //去自己的状态

            var status = $(this).prop('checked');
            //设置其他的状态
            $('.ids').prop('checked',status);
            //1,2,3
        })
        //删除选中
        //删除选中项
        $('.js-delete').click(function () {
            var checkBox=$('.ids:checked');//返回的为一个集合
            if(checkBox.length == 0){
                return;
            }
            var arrids=[];
            for(var i=0;i<checkBox.length;i++){
                arrids.push( $(checkBox[i] ).val() );//将所选中的元素的带有的id中传到 arrids中
            }
            var idsStr=arrids.toString();
            var action = $("#js-delete-form").attr('action'); //得到ID值
            action =  action +'/'+idsStr
            $("#js-delete-form").attr('action',action);
            $("#js-delete-form").submit();
            //上传表单
        })      //删除单项
        $('.js-delete-one').click(function () {
            if(!confirm("您确定要删除吗?")){
                return;
            }
            //得到表单的action

            var id = $(this).attr('data-id');
            //吧id填充到表单中去
            var action = $("#js-delete-form").attr('action'); //得到ID值
            action =  action +'/'+id;
            $("#js-delete-form").attr('action',action);
            $("#js-delete-form").submit();
        });



    </script>
@endsection
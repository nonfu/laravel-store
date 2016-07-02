@extends('layouts.master')

@section('Digital shop', 'Page Title')

@section('sidebar')
    @parent
@endsection

@section('content')

    <div style="margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
        <div class="panel panel-info">
            <div class="panel-heading">
                <div class="panel-title">用户注册</div>
                <div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="signinlink" href="/auth/login">已有帐号？前往登录>></a></div>
            </div>
            <div class="panel-body" >
                <form method="POST" action="/auth/register"  class="form-horizontal" role="form">
                    {!! csrf_field() !!}
                    <div class="form-group">
                        <label for="email" class="col-md-3 control-label">邮箱</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="email" placeholder="邮箱地址">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="firstname" class="col-md-3 control-label">用户名</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="name" placeholder="用户名">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password" class="col-md-3 control-label">密码</label>
                        <div class="col-md-9">
                            <input type="password" class="form-control" name="password" placeholder="密码">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password" class="col-md-3 control-label">确认密码</label>
                        <div class="col-md-9">
                            <input type="password" class="form-control" name="password_confirmation" placeholder="确认密码">
                        </div>
                    </div>
                    <div class="form-group">
                        <!-- Button -->
                        <div class="col-md-offset-3 col-md-9">
                            <button type="submit" id="btn-signup" class="btn btn-success"><i class="fa fa-hand-o-right"></i> 注册</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection

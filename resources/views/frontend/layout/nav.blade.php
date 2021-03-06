<div class="blog-masthead">
  <div class="container">
    <ul class="nav navbar-nav navbar-left">
      <li>
        <a class="blog-nav-item " href="/posts">首页</a>
      </li>
      <li>
        <a class="blog-nav-item" href="/posts/create" target="_new">写文章</a>
      </li>
      <li>
        <a class="blog-nav-item" href="/user/notices" target="_new">通知</a>
      </li>
      <li>
        <input name="query" type="text" class="form-control" style="margin-top:10px" placeholder="搜索词"/>
      </li>
      <li>
        <button id="search" class="btn btn-default" style="margin-top:10px" type="submit">Go!</button>
      </li>
    </ul>

    <ul class="nav navbar-nav navbar-right">
      @if(Auth::id())
      <li class="dropdown">
        <div>
          <img src="/storage/9f0b0/iB.jpeg" alt="" class="img-rounded" style="border-radius:500px; height: 30px">
          <a href="#" class="blog-nav-item dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
            {{ Auth::user()->name }}
            <span class="caret"></span>
          </a>
          <ul class="dropdown-menu">
            <li><a href="/user/detail/{{ Auth::id() }}">我的主页</a></li>
            <li><a href="/user/home/{{ Auth::id() }}">我的空间</a></li>
            <li><a href="/user/setting/{{ Auth::id() }}">个人设置</a></li>
            <li><a href="/user/logout">登出</a></li>
          </ul>
        </div>
      </li>
      @else
      <a class="blog-nav-item" href="/user/register">注册</a>
      <a class="blog-nav-item" href="/user/login">登录</a>
      @endif
      <a href="/backend" class="blog-nav-item">登录后台</a>
    </ul>
  </div>
</div>
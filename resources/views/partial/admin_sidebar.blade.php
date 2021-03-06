<div class="container-fluid">
  <div class="row">
    <nav class="col-md-2 d-none d-md-block bg-light sidebar">
      <div class="sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="{{ url()->current() == route('admin.dashboard') ? 'nav-link active' : 'nav-link'}}" href="/admin/dashboard">
              <span data-feather="home"></span>
              ダッシュボード
            </a>
          </li>
          <li class="nav-item">
            <a class="{{ url()->current() == route('admin.order') ? 'nav-link active' : 'nav-link'}}" href="/admin/order">
              <span data-feather="file"></span>
              注文
            </a>
          </li>
          <li class="nav-item">
            <a class="{{ url()->current() == route('admin.products') ? 'nav-link active' : 'nav-link'}}" href="/admin/products">
              <span data-feather="shopping-cart"></span>
              商品
            </a>
          </li>
          <li class="nav-item">
            <a class="{{ url()->current() == route('admin.users') ? 'nav-link active' : 'nav-link'}}" href="/admin/users">
              <span data-feather="users"></span>
              顧客管理
            </a>
          </li>
          <li class="nav-item">
            <a class="{{ url()->current() == route('admin.customorder') ? 'nav-link active' : 'nav-link'}}" href="/admin/customorder">
              <span data-feather="inbox"></span>
              受注制作見積もり
            </a>
          </li>
          <li class="nav-item">
            <a class="{{ url()->current() == route('admin.contact') ? 'nav-link active' : 'nav-link'}}" href="/admin/contact">
              <span data-feather="flag"></span>
              お問い合わせ
            </a>
          </li>
          <li class="nav-item">
            <a class="{{ url()->current() == route('admin.config') ? 'nav-link active' : 'nav-link'}}" href="/admin/config">
              <span data-feather="layers"></span>
              デザイン変更
            </a>
          </li>
        </ul>
      </div>
    </nav>
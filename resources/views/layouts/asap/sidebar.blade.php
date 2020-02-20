<style>
  .nav-pills .nav-link.active, .nav-pills .show>.nav-link {
      color: #000;
      background-color: #d2f3fe;
  }
  .device-item {
    color: white;
  }
</style>
<aside class="main-sidebar sidebar-dark elevation-4" style="background-color: #cc0000;">

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div align="left" style="padding-top: 10px;"><a href="#"><i class="fa fa-cog" style="font-size: 25px; color: white;"></i></a></div>
    
    <div align="center" style="padding-bottom: 50px; padding-top: 30px;">
      <div class="image">
        <a href="{{ route('home') }}">
          <img width="45%" src="{{ asset('frontend/dist/img/logosedania.png') }}" class="img-circle elevation-2" alt="User Image">
        </a>
      </div>
      <div class="info">
      <p style="color: white; padding-top: 3px; font-size: 14px;">{{ auth()->user()->name }}</p>
        <a href="#" class="d-block"></a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-30">
      <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">
        <h3 style="color: white;">BUILDING ABC</h3>
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link active">
            <p>
              Floor 1
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview" style="display: none;">
            <li class="nav-item">
              <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">
                <li class="keuppoo nav-item has-treeview menu-open">
                  <a href="#" class="nav-link">
                    <p style="text-decoration: underline; font-weight: bold; color: white;">
                      NORTH
                      <i class="right fas fa-angle-left"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview" style="display: block;">
                    <li class="nav-item">
                      <a href="./index.html" class="nav-link">
                        <p class="device-item">Office MD</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="./index.html" class="nav-link">
                        <p class="device-item">Hall 1</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="./index.html" class="nav-link">
                        <p class="device-item">Pantry</p>
                      </a>
                    </li>
                  </ul>
                </li>

              </ul>
            </li>
            <li class="nav-item">
              <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">
                <li class="keuppoo nav-item has-treeview menu-open">
                  <a href="#" class="nav-link">
                    <p style="text-decoration: underline; font-weight: bold; color: white;">
                      SOUTH
                      <i class="right fas fa-angle-left"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview" style="display: block;">
                    <li class="nav-item">
                      <a href="./index.html" class="nav-link">
                        <p class="device-item">Office 2</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="./index.html" class="nav-link">
                        <p class="device-item">Office 3</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="./index.html" class="nav-link">
                        <p class="device-item">Hall 2</p>
                      </a>
                    </li>
                  </ul>
                </li>

              </ul>
            </li>
          </ul>
        </li>
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link active">
            <p>
              Floor 2
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview" style="display: none;">
            <li class="nav-item">
              <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">
                <li class="keuppoo nav-item has-treeview menu-open">
                  <a href="#" class="nav-link">
                    <p style="text-decoration: underline; font-weight: bold; color: white;">
                      NORTH
                      <i class="right fas fa-angle-left"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview" style="display: block;">
                    <li class="nav-item">
                      <a href="./index.html" class="nav-link">
                        <p class="device-item">Office MD</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="./index.html" class="nav-link">
                        <p class="device-item">Hall 1</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="./index.html" class="nav-link">
                        <p class="device-item">Pantry</p>
                      </a>
                    </li>
                  </ul>
                </li>

              </ul>
            </li>
            <li class="nav-item">
              <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">
                <li class="keuppoo nav-item has-treeview menu-open">
                  <a href="#" class="nav-link">
                    <p style="text-decoration: underline; font-weight: bold; color: white;">
                      SOUTH
                      <i class="right fas fa-angle-left"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview" style="display: block;">
                    <li class="nav-item">
                      <a href="./index.html" class="nav-link">
                        <p class="device-item">Office 2</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="./index.html" class="nav-link">
                        <p class="device-item">Office 3</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="./index.html" class="nav-link">
                        <p class="device-item">Hall 2</p>
                      </a>
                    </li>
                  </ul>
                </li>

              </ul>
            </li>
          </ul>
        </li>
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link active">
            <p>
              Floor 3
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview" style="display: none;">
            <li class="nav-item">
              <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">
                <li class="keuppoo nav-item has-treeview menu-open">
                  <a href="#" class="nav-link">
                    <p style="text-decoration: underline; font-weight: bold; color: white;">
                      NORTH
                      <i class="right fas fa-angle-left"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview" style="display: block;">
                    <li class="nav-item">
                      <a href="./index.html" class="nav-link">
                        <p class="device-item">Office MD</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="./index.html" class="nav-link">
                        <p class="device-item">Hall 1</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="./index.html" class="nav-link">
                        <p class="device-item">Pantry</p>
                      </a>
                    </li>
                  </ul>
                </li>

              </ul>
            </li>
            <li class="nav-item">
              <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">
                <li class="keuppoo nav-item has-treeview menu-open">
                  <a href="#" class="nav-link">
                    <p style="text-decoration: underline; font-weight: bold; color: white;">
                      SOUTH
                      <i class="right fas fa-angle-left"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview" style="display: block;">
                    <li class="nav-item">
                      <a href="./index.html" class="nav-link">
                        <p class="device-item">Office 2</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="./index.html" class="nav-link">
                        <p class="device-item">Office 3</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="./index.html" class="nav-link">
                        <p class="device-item">Hall 2</p>
                      </a>
                    </li>
                  </ul>
                </li>

              </ul>
            </li>
          </ul>
        </li>
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link active">
            <p>
              Floor 4
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview" style="display: none;">
            <li class="nav-item">
              <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">
                <li class="keuppoo nav-item has-treeview menu-open">
                  <a href="#" class="nav-link">
                    <p style="text-decoration: underline; font-weight: bold; color: white;">
                      NORTH
                      <i class="right fas fa-angle-left"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview" style="display: block;">
                    <li class="nav-item">
                      <a href="./index.html" class="nav-link">
                        <p class="device-item">Office MD</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="./index.html" class="nav-link">
                        <p class="device-item">Hall 1</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="./index.html" class="nav-link">
                        <p class="device-item">Pantry</p>
                      </a>
                    </li>
                  </ul>
                </li>

              </ul>
            </li>
            <li class="nav-item">
              <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">
                <li class="keuppoo nav-item has-treeview menu-open">
                  <a href="#" class="nav-link">
                    <p style="text-decoration: underline; font-weight: bold; color: white;">
                      SOUTH
                      <i class="right fas fa-angle-left"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview" style="display: block;">
                    <li class="nav-item">
                      <a href="./index.html" class="nav-link">
                        <p class="device-item">Office 2</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="./index.html" class="nav-link">
                        <p class="device-item">Office 3</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="./index.html" class="nav-link">
                        <p class="device-item">Hall 2</p>
                      </a>
                    </li>
                  </ul>
                </li>

              </ul>
            </li>
          </ul>
        </li>
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link active">
            <p>
              Floor 5
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview" style="display: none;">
            <li class="nav-item">
              <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">
                <li class="keuppoo nav-item has-treeview menu-open">
                  <a href="#" class="nav-link">
                    <p style="text-decoration: underline; font-weight: bold; color: white;">
                      NORTH
                      <i class="right fas fa-angle-left"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview" style="display: block;">
                    <li class="nav-item">
                      <a href="./index.html" class="nav-link">
                        <p class="device-item">Office MD</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="./index.html" class="nav-link">
                        <p class="device-item">Hall 1</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="./index.html" class="nav-link">
                        <p class="device-item">Pantry</p>
                      </a>
                    </li>
                  </ul>
                </li>

              </ul>
            </li>
            <li class="nav-item">
              <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">
                <li class="keuppoo nav-item has-treeview menu-open">
                  <a href="#" class="nav-link">
                    <p style="text-decoration: underline; font-weight: bold; color: white;">
                      SOUTH
                      <i class="right fas fa-angle-left"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview" style="display: block;">
                    <li class="nav-item">
                      <a href="./index.html" class="nav-link">
                        <p class="device-item">Office 2</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="./index.html" class="nav-link">
                        <p class="device-item">Office 3</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="./index.html" class="nav-link">
                        <p class="device-item">Hall 2</p>
                      </a>
                    </li>
                  </ul>
                </li>

              </ul>
            </li>
          </ul>
        </li>

      </ul>
      <br>
      <br>
      <br>
      <br>
      <h6 style="color: white;">
        <a href="{{ route('logout') }}" class="nav-link active" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
          
          <p style="color: white;">
                <i style="color: white;" class="nav-icon fas fa-power-off"></i>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
          </p>
        </a>
      </h6>
    </nav>
    <!-- /.sidebar-menu -->

  </div>
  <!-- /.sidebar -->
</aside>
<div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3">
        <div class="info d-flex">
          <i class="nav-icon fa-solid fa-user-secret" style="color: white;"></i>
          <a href="#" style="margin-left: 10px; text-decoration: none;">Joel Abril</a>
        </div>
        <div class="info d-flex">
          <i class="nav-icon fa-solid fa-user-secret" style="color: white;"></i>
          <a href="#" style="margin-left: 10px; text-decoration: none;">Camilo Caballero</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

          <li class="nav-header">CONTROL DE INVENTARIO</li>
          <li class="nav-item">
            <a href="/ArTeM02-039/SimulacroAlquilartemis/alquilartemis/home" class="nav-link <?php if ($routesArray[4] == "home"): ?> active <?php endif ?>">
            <i class="nav-icon fa-solid fa-house"></i>
              <p>
                Home
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="/ArTeM02-039/SimulacroAlquilartemis/alquilartemis/inventario" class="nav-link <?php if ($routesArray[4] == "inventario"): ?> active <?php endif ?>">
            <i class="nav-icon fa-solid fa-boxes-stacked"></i>
              <p>
                Inventario
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/ArTeM02-039/SimulacroAlquilartemis/alquilartemis/compraMaterial" class="nav-link <?php if ($routesArray[4] == "compraMaterial"): ?> active <?php endif ?>">
              <i class="nav-icon fa-solid fa-store"></i>
              <p>
                Compra de Materiales
              </p>
            </a>    
          </li>
          <li class="nav-item">
            <a href="/ArTeM02-039/SimulacroAlquilartemis/alquilartemis/alquiler" class="nav-link <?php if ($routesArray[4] == "alquiler"): ?> active <?php endif ?>">
            <i class="nav-icon fa-solid fa-truck-fast"></i>
              <p>
                Alquiler
              </p>
            </a>    
          </li>
          <li class="nav-item">
            <a href="/ArTeM02-039/SimulacroAlquilartemis/alquilartemis/devoluciones" class="nav-link <?php if ($routesArray[4] == "devoluciones"): ?> active <?php endif ?>">
              <i class="nav-icon fas fa-columns"></i>
              <p>
                Devoluciones
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/ArTeM02-039/SimulacroAlquilartemis/alquilartemis/liquidaciones" class="nav-link <?php if ($routesArray[4] == "liquidaciones"): ?> active <?php endif ?>">
            <i class="nav-icon fa-solid fa-cash-register"></i>
              <p>
                Liquidaciones
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
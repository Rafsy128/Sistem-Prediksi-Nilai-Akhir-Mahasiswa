<!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-navy-primary elevation-4" style="background-color:#123088;color:white">

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info" style="color:white">
        Artificial Intelegence
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false" style="color:white">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
		<?php if($_SESSION['role']=='1'){?>
          <li class="nav-item">
            <a href="index.php" class="nav-link <?php if($title=='UNIT'){echo 'active';}?>">
              <i class="fas fa-users"></i>
              <p style="color:white">Dashboard</p>
            </a>
          </li>
          
          <li class="nav-item has-treeview  <?php if($title=='input data' ||$title=='datamhs.php' ){echo 'menu-open';}?> ">
            <a href="#" class="nav-link  <?php if($title=='input data' ||$title=='datamhs.php' ){echo 'active';}?>">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p style="color:white">
                
                <i class="right fas fa-angle-left"></i>
                Data Mahasiswa
              </p>
            </a>
            <ul class="nav nav-treeview">
              
            <li class="nav-item">
            <a href="index.php?inputdata" class="nav-link  <?php if($title=='INPUT DATA'){echo 'active';}?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p style="color:white">input data mahasiswa</p>
                </a>
              </li>
              <li class="nav-item">  
              <a href="index.php?datamhs" class="nav-link  <?php if($title=='Data Mahasiswa'){echo 'active';}?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p style="color:white">data mahasiswa</p>
                </a>
              </li>
            </ul>
          </li>
          
          <li class="nav-item has-treeview  <?php if($title=='TRAINING DATA' ||$title=='TESTING DATA' ){echo 'menu-open';}?> ">
            <a href="#" class="nav-link  <?php if($title=='TRAINING DATA' ||$title=='TESTING DATA' ){echo 'active';}?>">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p style="color:white">
                
                <i class="right fas fa-angle-left"></i>
                Prediksi
              </p>
            </a>
            <ul class="nav nav-treeview">
              
              <li class="nav-item">
                <a href="index.php?testing" class="nav-link  <?php if($title=='TESTING DATA'){echo 'active';}?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p style="color:white">Testing Data</p>
                </a>
              </li>
            </ul>
          </li>


          
         
		<?php }else if($_SESSION['role']=='2'){?>
          <li class="nav-item">
            <a href="index.php" class="nav-link <?php if($title=='DASHBOARD'){echo 'active';}?>">
              <i class="fas fa-users"></i>
              <p style="color:white">Dashboard</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="index.php?prediksi" class="nav-link <?php if($title=='HASIL PREDIKSI NILAI AKHIR'){echo 'active';}?>">
              <i class="fas fa-users"></i>
              <p style="color:white">Hasil Prediksi Nilai Akhir</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="index.php?perencanaan" class="nav-link <?php if($title=='BUAT PERENCANAAN STUDI'){echo 'active';}?>">
              <i class="fas fa-users"></i>
              <p style="color:white">Buat Perencanaan Studi</p>
            </a>
          </li>
         
		<?php }?> 
        
          <li class="nav-item">
            <a href="index.php?logout" class="nav-link <?php if($title=='logout'){echo 'active';}?>">
              <i class="fas fa-copy"></i>
              <p style="color:white">Logout</p>
            </a>
          </li>
         
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
<aside>
    <div class="sidebar sidebar-light sidebar-main sidebar-expand-md">
      <ul class="nav nav-sidebar" data-nav-type="accordion">

        <!-- Main -->
        <li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Main</div> 
          <i class="icon-menu" title="Main"></i>
        </li>

        <li class="nav-item nav-item-submenu">
          <li class="nav-item">

            <a onclick="init(); gallery2();" style="cursor:pointer;" class="nav-link"><i class="icon-home4"></i> <span>Dashboard</span></a>
            <ul class="nav nav-group-sub"></ul>
          
          </li>
        </li>

        <li class="nav-item nav-item-submenu">
          <li class="nav-item">

            <a onclick="init(); listTourism();" style="cursor:pointer;" class="nav-link"><i class="icon-list"></i> <span>List Tourism</span></a>
            <ul class="nav nav-group-sub"></ul>
          
          </li>
        </li>

        <li class="nav-item nav-item-submenu">
          <a href="#" class="nav-link"><i class="icon-compass4"></i> <span>Tourism Around You</span></a>
          
          <ul class="nav nav-group-sub">
            <ul class="nav-item">
                <div class=" form-group" style="color: #26a69a; ; padding-left: 18px" > 

                <label for="inputradius" style="font-size: 10pt";>Radius : </label>
                <label  id="nilai"  style="font-size: 10pt";>0</label> m
                <div></div>
                <input  type="range" onchange="init();tourism_sekitar_user();cekkk();" id="inputradius" 
                        name="inputradius" data-highlight="true" min="0" max="20" value="0" >
                <script>
                  function cekkk()
                  {
                    document.getElementById('nilai').innerHTML=document.getElementById('inputradius').value*100
                  }
                </script>
              </div>
            </ul> 
          </ul>
        </li>

        <li class="nav-item nav-item-submenu">
          <a href="#" class="nav-link"><i class="icon-search4"></i> <span>Search Tourism By</span></a>

          <ul class="nav nav-group-sub">              
              <li class="sub">
                  <a style="cursor:pointer;"><i class="icon-search4" style="margin-top:10px; margin-left:50px; margin-bottom:10px"></i> By Name</a>
                  <ul class="sub">
                    <li style="margin-top:10px; margin-left:50px; margin-right:20px"><input id="input_name" type="text" class="form-control" style="width: 100%"></li>                             
                    <li style="margin-top:10px; margin-left:50px ; margin-bottom: 10px"><a onclick="init();cari_tourism(1)" style="cursor:pointer;">Search</a></li>
                  </ul>
              </li>

              <li class="nav-item nav-group-sub">
                  <a style="cursor:pointer;"><i class="icon-search4"></i> By Address</a>
                  <ul class="sub">
                    <li style="margin-top:10px; margin-left:50px; margin-right:20px"><input id="input_address" type="text" class="form-control" style="width: 100%"></li>                             
                    <li style="margin-top:10px; margin-left:50px"><a onclick="init();cari_tourism(2)" style="cursor:pointer;">Search</a></li>
                  </ul>
              </li>

              <li class="sub">
                  <a style="cursor:pointer;background:none"><i class="icon-search4" style="margin-top:10px; margin-left:50px; margin-bottom: 10px"></i> By Type</a>
                  <ul class="sub">
                    <li style="margin-top:10px; margin-left:50px; margin-bottom: 10px; margin-right:20px">
                    <select class="form-control kota text-center" style="width:100%;margin-top:10px" id="select_jenis">
                      <?php                      
                      include('../connect.php');    
                      $querysearch="SELECT id, name FROM tourism_type"; 
                      $hasil=mysqli_query($conn, $querysearch);

                        while($baris = mysqli_fetch_array($hasil)){
                            $id=$baris['id'];
                            $name=$baris['name'];
                            echo "<option value='$id'>$name</option>";
                        }
                      ?>
                    </select>
                    </li>                             
                    <li style="margin-top:10px; margin-left:50px; margin-bottom: 10px"><a onclick="init();cari_tourism(3)" style="cursor:pointer;">Search</a></li>
                  </ul>
              </li>

              <li class="sub">
                  <a style="cursor:pointer;"><i class="icon-search4" style="margin-top:10px; margin-left:50px; margin-bottom: 10px"></i> By Facility</a>
                  <ul class="sub">
                    <li style="margin-top:10px; margin-left:50px; margin-right:20px" ><input id="input_fasility" type="text" class="form-control" style="width: 100%"></li>                                 
                    <li style="margin-top:10px; margin-left:50px; margin-bottom: 10px"><a onclick="init();cari_tourism(4)" style="cursor:pointer;background:none">Search</a></li>
                  </ul>
              </li>
            </ul>
        </li>

        <li class="nav-item nav-item-submenu">
          <a href="#" class="nav-link"><i class="icon-gear"></i> 
            <span>Coming Soon</span></a>
        </li>

        <li class="nav-item nav-item-submenu">
          <a href="#" class="nav-link"><i class="icon-gear"></i> 
            <span>Coming Soon</span></a>
        </li>

        <li class="nav-item nav-item-submenu">
          <a href="../" class="nav-link"><i class="icon-point-left"></i> 
            <span>Back to Menu</span></a>
        </li>
      </ul>
    </div>

</aside>
<!--sidebar end
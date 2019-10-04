        
        
 <?php
          $mainmenu = \App\Menu::where('aktif','Y')->orderBy('urutan')->get(); ?>
          @foreach ($mainmenu as $key)
            <li class="treeview">
            @if(empty($key->link))
               <a> {{ $key->nama_menu }} </a>
            @else
              <a href="{{$key->link}}"><img src="../adminlte/{{$key->gambar}}" width='20'>&nbsp;&nbsp;&nbsp; <span>{{$key->nama_menu}}</span></a>
            @endif
          <!-- submenu query -->
          <?php    $submenu = \App\Submenu::where('id_main',$key->id_main)->where('aktif','Y')->orderBy('urutan')->get(); ?>

              @if(sizeof($submenu)>0)
                  <ul class='treeview-menu'>
                @foreach ($submenu as $sub)
                    <li>
                       <a href="{{$sub->link_sub}}"><img src="../adminlte/{{$sub->gambar}}" width='20'>&nbsp;&nbsp;&nbsp; <span>{{$sub->nama_sub}}</span></a>
                    </li>
                @endforeach
                  </ul>
                </li>
              @else
                </li>
              @endif
          @endforeach
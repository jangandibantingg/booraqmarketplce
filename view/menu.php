<?php

if($page == 'beranda'){
 $curentberanda="current";
}elseif ($page == 'tentang-kami') {
  $tentangkami="current";
}

 ?>



<div id="mainMenu" class="menu-creative">
                        <div class="container">
                            <nav>
                              <ul>
                              <li class=""><a href="beranda.aspx">beranda</a></li>
                              <li class=""><a href="tentang-kami.aspx">tentang kami</a></li>
                              <li class""><a href="market-place.aspx">market place</a></li>
                              <li class""><a href="article.aspx">artikel</a></li>
                              <li class""><a href="info-sholat.aspx">info sholat</a></li>
                              <li class=""><a href="jadi-mitra.aspx">Jadi Mitra</a></li>
                              <?php
                              if(!empty($_SESSION['user_session'])){
                                echo "<li><a href='./?page=profile&act=edit-profile'><i class='fa fa-user-astronaut'></i> Profile </a></li>";
                                echo "<li><a href='./logout.html'><i class='fa fa-power-off'></i> Logout </a></li>";
                              }else{

                               ?>
                              <li class=""><a href="login.aspx">Login</a></li>
                              <?php
                            }
                               ?>

                          </ul>
                            </nav>
                        </div>
                    </div>

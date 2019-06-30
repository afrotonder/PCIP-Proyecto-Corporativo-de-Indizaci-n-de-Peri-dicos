<?php $Q = array() ; ?>
<div class="page-sidebar-wrapper">
    <!-- BEGIN SIDEBAR -->
    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
    <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
    <div class="page-sidebar navbar-collapse collapse">
        <!-- BEGIN SIDEBAR MENU -->
        <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
        <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
        <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
        <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
        <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
        <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
        <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
          <li style="margin-left: 20px;"><h1> Filter By </h1></li>
            <li class="heading"><h3 class="uppercase"> Organizations </h3></li>
                <ul>
                        <form id="form1" method="post">
                          <input type="checkbox" name="org1" value="PUCPR" onchange="document.getElementById('form1').submit()" <? if(isset($_POST['org1'])) echo "checked='checked'";?> />PUCPR
                      </br></br>
                          <input type="checkbox" name="org2" value="PCIP" onchange="document.getElementById('form1').submit()" <? if(isset($_POST['org2'])) echo "checked='checked'";?> /> PCIP
                </ul>
            <li class="heading"> <h3 class="uppercase"> Newspapers </h3></li>
                <ul>
                        <input type="checkbox" name="np1" value="El Nuevo Dia" onchange="document.getElementById('form1').submit()" <? if(isset($_POST['np1'])) { echo "checked='checked'"; array_push($Q, $_POST['np1']); } ?> /> El Nuevo Dia
                          </br></br>
                        <input type="checkbox" name="np2" value="El Vocero" onchange="document.getElementById('form1').submit()" <? if(isset($_POST['np2'])) { echo "checked='checked'"; array_push($Q, $_POST['np2']); } ?> /> El Vocero
                          </br></br>
                        <input type="checkbox" name="np3" value="El Mundo" onchange="document.getElementById('form1').submit()" <? if(isset($_POST['np3'])) { echo "checked='checked'"; array_push($Q, $_POST['np3']); } ?> /> El Mundo
                          </br></br>
                        <input type="checkbox" name="np4" value="El Imparcial" onchange="document.getElementById('form1').submit()" <? if(isset($_POST['np4'])) { echo "checked='checked'"; array_push($Q, $_POST['np4']); } ?> /> El Imparcial
                          </br></br>
                        <input type="checkbox" name="np5" value="El Diario" onchange="document.getElementById('form1').submit()" <? if(isset($_POST['np5'])) { echo "checked='checked'"; array_push($Q, $_POST['np5']); } ?> /> El Diario
                          </br></br>
                        <input type="checkbox" name="np6" value="El Reportero" onchange="document.getElementById('form1').submit()" <? if(isset($_POST['np6'])) { echo "checked='checked'"; array_push($Q, $_POST['np6']); } ?> /> El Reportero
                          </br></br>
                        <input type="checkbox" name="np7" value="El Dia" onchange="document.getElementById('form1').submit()" <? if(isset($_POST['np7'])) { echo "checked='checked'"; array_push($Q, $_POST['np7']); } ?> /> El Dia
                          </br></br>
                        <input type="checkbox" name="np8" value="El Detallista" onchange="document.getElementById('form1').submit()" <? if(isset($_POST['np8'])) { echo "checked='checked'"; array_push($Q, $_POST['np8']); } ?> /> El Detallista
                          </br></br>
                        <input type="checkbox" name="np9" value="El Visitante" onchange="document.getElementById('form1').submit()" <? if(isset($_POST['np9'])) { echo "checked='checked'"; array_push($Q, $_POST['np9']); } ?> /> El Visitante
                          </br></br>
                        <input type="checkbox" name="np10" value="Claridad" onchange="document.getElementById('form1').submit()" <? if(isset($_POST['np10'])) { echo "checked='checked'"; array_push($Q, $_POST['np10']); } ?> /> Claridad
                          </br></br>
                        <input type="checkbox" name="np11" value="Dialogo" onchange="document.getElementById('form1').submit()" <? if(isset($_POST['np11'])) { echo "checked='checked'"; array_push($Q, $_POST['np11']); } ?> /> Dialogo
                          </br></br>
                        <input type="checkbox" name="np12" value="Momento" onchange="document.getElementById('form1').submit()" <? if(isset($_POST['np12'])) { echo "checked='checked'"; array_push($Q, $_POST['np12']); } ?> /> Momento
                          </br></br>
                        <input type="checkbox" name="np13" value="Agrotemas" onchange="document.getElementById('form1').submit()" <? if(isset($_POST['np13'])) { echo "checked='checked'"; array_push($Q, $_POST['np13']); } ?> > Agrotemas
                          </br></br>
                        <input type="checkbox" name="np14" value="La Perla del Sur" onchange="document.getElementById('form1').submit()" <? if(isset($_POST['np14'])) { echo "checked='checked'"; array_push($Q, $_POST['np14']); } ?> /> La Perla del Sur
                          </br></br>
                        <input type="checkbox" name="np15" value="La Estrella del Sur" onchange="document.getElementById('form1').submit()" <? if(isset($_POST['np15'])) { echo "checked='checked'"; array_push($Q, $_POST['np15']); } ?> /> La Estrella del Sur
                          </br></br>
                        <input type="checkbox" name="np16" value="La Democracia" onchange="document.getElementById('form1').submit()" <? if(isset($_POST['np16'])) { echo "checked='checked'"; array_push($Q, $_POST['np16']); } ?> /> La Democracia
                          </br></br>
                        <input type="checkbox" name="np17" value="The San Juan Star" onchange="document.getElementById('form1').submit()" <? if(isset($_POST['np17'])) { echo "checked='checked'"; array_push($Q, $_POST['np17']); } ?> /> The San Juan Star
                          </br></br>
                        <input type="checkbox" name="np18" value="Primera Hora" onchange="document.getElementById('form1').submit()" <? if(isset($_POST['np18'])) { echo "checked='checked'"; array_push($Q, $_POST['np18']); } ?> /> Primera Hora
                          </br></br>
                        <input type="checkbox" name="np19" value="Caribbean Business" onchange="document.getElementById('form1').submit()" <? if(isset($_POST['np19'])) { echo "checked='checked'"; array_push($Q, $_POST['np19']); } ?> /> Caribbean Business
                          </br></br>
                        <input type="checkbox" name="np20" value="Prensa Libre" onchange="document.getElementById('form1').submit()" <? if(isset($_POST['np20'])) { echo "checked='checked'"; array_push($Q, $_POST['np20']); } ?> /> Prensa Libre
                          </br></br>
                      </form>
                    <form id="clearcheck" method="post">
                      <button type="submit" class="btn btn-7 btn-7b" style="background-color:#099DAA;color:#ffffff" name="clr" value="clear" onchange=" document.getElementById('clearcheck').submit()"> clear all </button>
                    </form>
                      <!-- onclick="$('input:checkbox').prop('checked', false); " -->
                </ul>

          </ul>
    </div>
</div>

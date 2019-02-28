
<?php 
	$enlazes=<<<EOD
	<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700' rel='stylesheet' type='text/css'>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <!-- <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css'> -->
  <!-- <script src='https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js'></script> -->

  <link rel='stylesheet' href='https://cdn.metroui.org.ua/v4/css/metro-all.min.css'>
  <link rel='stylesheet' type='text/css' href='style1.css'>
  <link rel='stylesheet' href='styles-replaced1.css'>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
EOD;
	$body= <<<EOD
<div class="rende">
<!-- Primer Nivel -->
<div class="tiles">
    <div data-role="tile" class="tiles__tile" data-tile="1">
      <i class="icon fa fa-lock"></i>
      <span class="branding-bar">Seguridades</span>
    </div>
    <div data-role="tile" class="tiles__tile" data-tile="2">
      <i class="icon fa fa-calculator"></i>
      <span class="branding-bar">Contabilidad</span>
    </div>
    <div data-role="tile" class="tiles__tile" data-tile="3">
      <i class="icon fa fa-money"></i>
      <span class="branding-bar">Presupuesto</span>
    </div>
    <div data-role="tile" class="tiles__tile" data-tile="4">
      <i class="icon fa fa-briefcase"></i>
      <span class="branding-bar">Cartera</span>
    </div>
    <div data-role="tile" class="tiles__tile" data-tile="5">
      <i class="icon fa fa-usd"></i>
      <span class="branding-bar">Tesorería</span>
    </div>
    <div data-role="tile" class="tiles__tile" data-tile="6">
      <i class="icon fa fa-list-alt"></i>
      <span class="branding-bar">Inventarios y bienes de consumo</span>
    </div>
    <div data-role="tile" class="tiles__tile" data-tile="7">
      <i class="icon fa fa-usd"></i>
      <span class="branding-bar">Activos fijos</span>
    </div>
    <div data-role="tile" class="tiles__tile" data-tile="8">
      <i class="icon fa fa-th-list"></i>
      <span class="branding-bar">Nómina</span>
    </div>
    <div data-role="tile" class="tiles__tile" data-tile="9">
      <i class="icon fa fa-check"></i>
      <span class="branding-bar">Garantías y Pólizas</span>
    </div>
    <div data-role="tile" class="tiles__tile" data-tile="10">
      <i class="icon fa fa-users"></i>
      <span class="branding-bar">Talento Humano</span>
    </div>
    <div data-role="tile" class="tiles__tile" data-tile="11">
      <i class="icon fa fa-file-text"></i>
      <span class="branding-bar">Facturación Electrónica</span>
    </div>
    <div data-role="tile" class="tiles__tile" data-tile="12">
      <i class="icon fa fa-th-large"></i>
      <span class="branding-bar">Catálogos del Sistema</span>
    </div>
    <div data-role="tile" class="tiles__tile" data-tile="13">
      <i class="icon fa fa-th"></i>
      <span class="branding-bar">Catálogo de Proveedores</span>
    </div>
    <div data-role="tile" class="tiles__tile" data-tile="14">
      <i class="icon fa fa-file"></i>
      <span class="branding-bar">Contratos/PAC</span>
    </div>
    <div data-role="tile" class="tiles__tile" data-tile="15">
      <i class="icon fa fa-th-large"></i>
      <span class="branding-bar">Catálogo de Proyectos</span>
    </div>
    <div data-role="tile" class="tiles__tile" data-tile="16">
      <i class="icon fa fa-legal"></i>
      <span class="branding-bar">Anexos SRI</span>
    </div>
    <div data-role="tile" class="tiles__tile" data-tile="17">
      <i class="icon fa fa-info-circle"></i>
      <span class="branding-bar">Mesa Ayuda</span>
    </div>
    <div data-role="tile" class="tiles__tile" data-tile="18">
      <i class="icon fa fa-table"></i>
      <span class="branding-bar">Planificación de Proyectos</span>
    </div>
    <div data-role="tile" class="tiles__tile" data-tile="19">
      <i class="icon fa fa-calendar-o"></i>
      <span class="branding-bar">Planificación Institucional</span>
    </div>
    <div data-role="tile" class="tiles__tile" data-tile="20">
      <i class="icon fa fa-shopping-cart"></i>
      <span class="branding-bar">Compras Públicas</span>
    </div>
  </div>

  <!-- Segundo Nivel -->
<div class="content">
  <div class="content__item" id="1">
    <div class="encabezado">
      <div class="arrow-left">
        <i class="fa fa-arrow-left"></i>
      </div>
      <span class="level1title"></span>
    </div>
    <div class="line-break"></div>

    <div class="content-wrap">
      <div data-role="tile" data-tile="1a"  data-size="wide">        
        <span class="branding-bar">Gestión de Seguridades</span>
      </div>
    </div>
    <div class="content-wrap">
      <div data-role="tile" data-tile="2a" data-size="wide">        
        <span class="branding-bar">Reportes y Consultas de Seguridades</span>
      </div>
    </div>
    <div class="content-wrap">
      <div data-role="tile" data-size="wide">        
        <span class="branding-bar">Administración de Tablas Globales</span>
      </div>
    </div>
  </div>

  <div class="content__item" id="2">
    <div class="content-wrap">
      <div data-role="tile">        
        <span class="branding-bar">Gestión de Parámetros y Datos de Contabilidad</span>
      </div>
    </div>
    <div class="content-wrap">
      <div data-role="tile">
        <span class="branding-bar">Inicialización, apertura y cierre de Ejercicios</span>
      </div>
    </div>
    <div class="content-wrap">
      <div data-role="tile">
        
        <span class="branding-bar">Operaciones de Contabilidad</span>
      </div>
    </div>
    <div class="content-wrap">
      <div data-role="tile">
        <span class="branding-bar">Reportes de Contabilidad</span>
      </div>
    </div>
  </div>
  <div class="content__item" id="3">
    <div class="content-wrap">
      <div data-role="tile">
        <span class="branding-bar">Gestionar Parámetros y Datos de Presupuestos</span>
      </div>
    </div>
    <div class="content-wrap">
      <div data-role="tile">
        <span class="branding-bar">Inicialización, apertura y cierre de períodos</span>
      </div>
    </div>
    <div class="content-wrap">
      <div data-role="tile">
        <span class="branding-bar">Operaciones de Presupuesto</span>
      </div>
    </div>
    <div class="content-wrap">
      <div data-role="tile">
        <span class="branding-bar">Reportes de Presupuesto</span>
      </div>
    </div>
  </div>
  <div class="content__item" id="4">
    <div class="content-wrap">
      <div data-role="tile">
        <span class="branding-bar">Gestión de Parámetros y Datos de Cartera</span>
      </div>
    </div>
    <div class="content-wrap">
      <div data-role="tile">
        <span class="branding-bar">Inicialización, apertura y cierre de ejercicio</span>
      </div>
    </div>
    <div class="content-wrap">
      <div data-role="tile">
        <span class="branding-bar">Operaciones de Cartera</span>
      </div>
    </div>
    <div class="content-wrap">
      <div data-role="tile">
        <span class="branding-bar">Reportes de Cartera</span>
      </div>
    </div>
  </div>
  <div class="content__item" id="5">
    <div class="content-wrap">
      <div data-role="tile">
        <span class="branding-bar">Gestión de Parámetros y Datos de Tesorería</span>
      </div>
    </div>
    <div class="content-wrap">
      <div data-role="tile">
        <span class="branding-bar">Operaciones de Tesorería</span>
      </div>
    </div>
    <div class="content-wrap">
      <div data-role="tile">
        <span class="branding-bar">Reportes de Tesorería</span>
      </div>
    </div>
  </div>
  <div class="content__item" id="6">
    <div class="content-wrap">
      <div data-role="tile">
        <span class="branding-bar">Gestión de Parámetros y Datos de Inventarios</span>
      </div>
    </div>
    <div class="content-wrap">
      <div data-role="tile">
        <span class="branding-bar">Inicialización, apertura y cierre</span>
      </div>
    </div>
    <div class="content-wrap">
      <div data-role="tile">
        <span class="branding-bar">Operaciones de Inventarios y Bienes de Consumo</span>
      </div>
    </div>
    <div class="content-wrap">
      <div data-role="tile">
        <span class="branding-bar">Reportes de Inventarios y Bienes de Consumo</span>
      </div>
    </div>
  </div>
  <div class="content__item" id="7">
    <div class="content-wrap">
      <div data-role="tile">
        <span class="branding-bar">Gestión de Parámetros y Datos de Activos Fijos</span>
      </div>
    </div>
    <div class="content-wrap">
      <div data-role="tile">
        <span class="branding-bar">Inicialización, apertura y cierre</span>
      </div>
    </div>
    <div class="content-wrap">
      <div data-role="tile">
        <span class="branding-bar">Operaciones de Activos Fijos</span>
      </div>
    </div>
    <div class="content-wrap">
      <div data-role="tile">
        <span class="branding-bar">Reportes de Activos Fijos</span>
      </div>
    </div>
  </div>
  <div class="content__item" id="8">
    <div class="content-wrap">
      <div data-role="tile">
        <span class="branding-bar">Gestión de Parámetros y Datos</span>
      </div>
    </div>
    <div class="content-wrap">
      <div data-role="tile">
        <span class="branding-bar">Inicialización, apertura y cierre de nóminas</span>
      </div>
    </div>
    <div class="content-wrap">
      <div data-role="tile">
        <span class="branding-bar">Operaciones de Nómina</span>
      </div>
    </div>
    <div class="content-wrap">
      <div data-role="tile">
        <span class="branding-bar">Reportes y Consultas de Nómina</span>
      </div>
    </div>
  </div>
  <div class="content__item" id="9">
    <div class="content-wrap">
      <div data-role="tile">
        <span class="branding-bar">Gestión de Parámetros y Datos</span>
      </div>
    </div>
    <div class="content-wrap">
      <div data-role="tile">
        <span class="branding-bar">Operaciones</span>
      </div>
    </div>
    <div class="content-wrap">
      <div data-role="tile">
        <span class="branding-bar">Reportes de Garantías y Pólizas</span>
      </div>
    </div>
  </div>
  <div class="content__item" id="10">
    <div class="content-wrap">
      <div data-role="tile">
        <span class="branding-bar">Gestión de Parámetros y Datos</span>
      </div>
    </div>
    <div class="content-wrap">
      <div data-role="tile">
        <span class="branding-bar">Inicialización, apertura y cierre</span>
      </div>
    </div>
    <div class="content-wrap">
      <div data-role="tile">
        <span class="branding-bar">Operaciones de Talento Humano</span>
      </div>
    </div>
    <div class="content-wrap">
      <div data-role="tile">
        <span class="branding-bar">Reportes y Consultas</span>
      </div>
    </div>
  </div>
  <div class="content__item" id="11">
    <div class="content-wrap">
      <div data-role="tile">
        <span class="branding-bar">Gestión de Parámetros y Datos de Facturación</span>
      </div>
    </div>
    <div class="content-wrap">
      <div data-role="tile">
        <span class="branding-bar">Operaciones de Facturación Electrónica</span>
      </div>
    </div>
    <div class="content-wrap">
      <div data-role="tile">
        <span class="branding-bar">Reportes y Consultas de Facturación Electrónica</span>
      </div>
    </div>
  </div>
  <div class="content__item" id="12">
    <div class="content-wrap">
      <div data-role="tile">
        <span class="branding-bar">Parámetros Globales</span>
      </div>
    </div>
    <div class="content-wrap">
      <div data-role="tile">
        <span class="branding-bar">Servidores SMTP</span>
      </div>
    </div>
    <div class="content-wrap">
      <div data-role="tile">
        <span class="branding-bar">Gestionar Entidades</span>
      </div>
    </div>
    <div class="content-wrap">
      <div data-role="tile">
        <span class="branding-bar">Gestionar Información General de la Entidad</span>
      </div>
    </div>
    <div class="content-wrap">
      <div data-role="tile">
        <span class="branding-bar">Gestionar Información del Personal</span>
      </div>
    </div>
    <div class="content-wrap">
      <div data-role="tile">
        <span class="branding-bar">Gestionar Firmas de Comprobantes</span>
      </div>
    </div>
    <div class="content-wrap">
      <div data-role="tile">
        <span class="branding-bar">Gestionar Parámetros Alfresco</span>
      </div>
    </div>
  </div>
  <div class="content__item" id="13">
    <div class="content-wrap">
      <div data-role="tile">
        <span class="branding-bar">Operaciones de Proveedores</span>
      </div>
    </div>
    <div class="content-wrap">
      <div data-role="tile">
        <span class="branding-bar">Reportes de Proveedores</span>
      </div>
    </div>
  </div>
  <div class="content__item" id="14">
    <div class="content-wrap">
      <div data-role="tile">
        <span class="branding-bar">Gestión de Parámetros y Datos de Contratos</span>
      </div>
    </div>
    <div class="content-wrap">
      <div data-role="tile">
        <span class="branding-bar">Operaciones de Contratos</span>
      </div>
    </div>
    <div class="content-wrap">
      <div data-role="tile">
        <span class="branding-bar">Reportes de Contratos</span>
      </div>
    </div>
  </div>
  <div class="content__item" id="15">
    <div class="content-wrap">
      <div data-role="tile">
        <span class="branding-bar">Gestión de Parámetros y Datos</span>
      </div>
    </div>
    <div class="content-wrap">
      <div data-role="tile">
        <span class="branding-bar">Reportes y Consultas de Proyectos</span>
      </div>
    </div>
  </div>
  <div class="content__item" id="16">
    <div class="content-wrap">
      <div data-role="tile">
        <span class="branding-bar">Gestionar Anexo Transaccional Simplificado (ATS)</span>
      </div>
    </div>
    <div class="content-wrap">
      <div data-role="tile">
        <span class="branding-bar">Gestionar Formulario 104 Declaración IVA</span>
      </div>
    </div>
    <div class="content-wrap">
      <div data-role="tile">
        <span class="branding-bar">Generar XML Formulario 104 Declaración IVA</span>
      </div>
    </div>
    <div class="content-wrap">
      <div data-role="tile">
        <span class="branding-bar">Generar Anexo Gastos Personales</span>
      </div>
    </div>
    <div class="content-wrap">
      <div data-role="tile">
        <span class="branding-bar">Reportes</span>
      </div>
    </div>
  </div>
  <div class="content__item" id="17">
    <div class="content-wrap">
      <div data-role="tile">
        <span class="branding-bar">Gestión de Parámetros y Datos de Mesa de Ayuda</span>
      </div>
    </div>
    <div class="content-wrap">
      <div data-role="tile">
        <span class="branding-bar">Operaciones de Mesa de Ayuda</span>
      </div>
    </div>
    <div class="content-wrap">
      <div data-role="tile">
        <span class="branding-bar">Reportes y Consultas de Mesa de Ayuda</span>
      </div>
    </div>
  </div>
  <div class="content__item" id="18">
    <div class="content-wrap">
      <div data-role="tile">
        <span class="branding-bar">Gestión de Parámetros y Datos del POA</span>
      </div>
    </div>
    <div class="content-wrap">
      <div data-role="tile">
        <span class="branding-bar">Gestión del Plan Operativo Anual (POA)</span>
      </div>
    </div>
    <div class="content-wrap">
      <div data-role="tile">
        <span class="branding-bar">Reportes y Consultas del POA</span>
      </div>
    </div>
  </div>
  <div class="content__item" id="19">
    <div class="content-wrap">
      <div data-role="tile">
        <span class="branding-bar">Catálogo de Proyectos</span>
      </div>
    </div>
    <div class="content-wrap">
      <div data-role="tile">
        <span class="branding-bar">Planificación de Proyectos</span>
      </div>
    </div>
    <div class="content-wrap">
      <div data-role="tile">
        <span class="branding-bar">Contratos/PAC</span>
      </div>
    </div>
  </div>
  <div class="content__item" id="20">
    <div class="content-wrap">
      <div data-role="tile">
        <span class="branding-bar">Gestionar de Parámetros y Datos</span>
      </div>
    </div>
    <div class="content-wrap">
      <div data-role="tile">
        <span class="branding-bar">Operaciones de Compras</span>
      </div>
    </div>
    <div class="content-wrap">
      <div data-role="tile">
        
        <span class="branding-bar">Reportes y Consultas</span>
      </div>
    </div>
  </div>
</div> 

<!-- Tercer Nivel -->
<div class="content3">
  <div class="content3__item" id="1a">
    <div class="encabezado">
        <div class="arrow-left">
          <i class="fa fa-arrow-left"></i>
        </div>
        <span class="level1title"></span>
    </div>
    <div class="line-break"></div>
    
    <div class="content-wrap3" id="xlx" onclick="location.href='www.facebook.com'" >
      <div data-role="tile" data-size="wide">
          <span class="branding-bar">Gestionar Información Entidad</span>
      </div>
    </div>
    <div class="content-wrap3">
      <div data-role="tile" data-size="wide">
        <span class="branding-bar">Gestionar Parámetros de Seguridad</span>
      </div>
    </div>
    <div class="content-wrap3">
      <div data-role="tile" data-size="wide">
        <span class="branding-bar">Gestionar Horarios de Acceso</span>
      </div>
    </div>
    <div class="content-wrap3">
      <div data-role="tile" data-size="wide">
        <span class="branding-bar">Gestionar Horarios de Acceso</span>
      </div>
    </div>
    <div class="content-wrap3">
      <div data-role="tile" data-size="wide">
        <span class="branding-bar">Gestionar Perfiles</span>
      </div>
    </div>
    <div class="content-wrap3">
      <div data-role="tile" data-size="wide">
        <span class="branding-bar">Gestionar Usuarios</span>
      </div>
    </div>
    <div class="content-wrap3">
      <div data-role="tile" data-size="wide">
        <span class="branding-bar">Gestionar Permisos</span>
      </div>
    </div>
    <div class="content-wrap3">
      <div data-role="tile" data-size="wide">
        <span class="branding-bar">Gestionar Menú del Sistema</span>
      </div>
    </div>
  </div>

  <div class="content3__item" id="2a">
    <div class="arrow" id="arrow-lvl3">
        <div class="arrow-left">
          <i class="fa fa-arrow-left"></i>
        </div>
        <span class="level1title"></span>
    </div>
    <div class="line-break"></div>
    
    <div class='content-wrap3'>
      <div data-role="tile">
        <span class="branding-bar">Reportes de Seguridad</span>
      </div>
    </div>
    <div class="content-wrap3">
      <div data-role="tile">
        <span class="branding-bar">Reportes de Auditoría del Sistema</span>
      </div>
    </div>
    <div class="content-wrap3">
      <div data-role="tile">
        <span class="branding-bar">Consultas de Seguridad</span>
      </div>
    </div>
  </div>
</div>
</div>
EOD;

	$PiePagina=  <<<EOD
      	<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
        <script  src="index.js"></script>
        <!-- <script src='https://code.jquery.com/jquery-3.3.1.min.js'></script> -->
       <script src='https://cdn.metroui.org.ua/v4/js/metro.min.js'></script>
               
EOD;

 ?>

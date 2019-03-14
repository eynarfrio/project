<?php 
/*$this->Form->templates([
    'inputContainer' => '{{content}}'
]);*/


$myTemplates = [
  'checkboxWrapper' => '<label class="col-md-6">{{label}}</label>',
    'inputContainer' => '{{content}}',
];
$this->Form->setTemplates($myTemplates);
$this->Form->templates($myTemplates);
?>
<style type="text/css">
  .oculto{
    display: none;
  }


  select[name='car_categoria_1']{
    color: #0095ff;
    border-color: #0095ff;
  }
  select[name='car_categoria_2']{
    color: #ffc000;
    border-color: #ffc000;
  }
  select[name='car_categoria_3']{
    color: green;
    border-color: green;
  }
</style>
    <section class="content-header">
      <h1>
        Específico Ficha Forma de Diseño para Bienes Muebles Historico-Artiticos      
      </h1>
    </section>
    <!-- Main content -->
    <section class="content">
      <?php echo $this->Form->create($d_bienes, ['url' => ['action' => 'guarda'],'enctype' => 'multipart/form-data']); ?>
      <?php echo $this->Form->control('id', ['type' => 'hidden']); ?>
      <?php echo $this->Form->control('id_reg_patrimonio', ['type' => 'hidden','value' => $idPatrimonio]); ?>
      <!-- <form method="post" action="/paginas/guarda"> -->
      <div class="row">
	<div class="col-md-12">
		<div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">1. IDENTIFICACION</h3>
            </div>

              <div class="box-body">
                <div class="form-group row">

                		<div class="col-md-6">
                			<label for="">Tipo de Bien</label>
                      <?php 
                      $opciones = [
                      '' => '',
'PINTURA' => '1: PINTURA',
'ESCULTURA' => '2: ESCULTURA',
'CERAMICA' => '3: CERAMICA',
'CRISTALERIA' => '4: CRISTALERIA',
'TEXTILERIA Y TEJIDOS EN FIBRA DE ORIGEN VEGETAL Y ANIMAL' => '5: TEXTILERIA Y TEJIDOS EN FIBRA DE ORIGEN VEGETAL Y ANIMAL',
'TALABARTERIA' => '6: TALABARTERIA',
'ARMERIA' => '7: ARMERIA',
'SIGILOGRAFIA' => '8: SIGILOGRAFIA',
'FILATELIA' => '9: FILATELIA',
'FOTOGRAFIA' => '10: FOTOGRAFIA',
'DOCUMENTOS EN DIFERENTES TIPOS DE SOPORTE' => '11: DOCUMENTOS EN DIFERENTES TIPOS DE SOPORTE',
'OBJETOS DOMESTICOS' => '12: OBJETOS DOMESTICOS',
'OBJETOS DE TRABAJO' => '13: OBJETOS DE TRABAJO',
'OBJETOS PARA RITUALES' => '14: OBJETOS PARA RITUALES',
'NUMISMATICO' => '15: NUMISMATICO',
'OBJETOS DE MADERA' => '16: OBJETOS DE MADERA',
'SUBACUATICO' => '17: SUBACUATICO',
'MALACOLOGICO' => '18: MALACOLOGICO',
'LITICO' => '19: LITICO',
'METALISTERIA' => '20: METALISTERIA',
'OTRO' => '21: OTRO',
                      ];
                      echo $this->Form->select('iden_tipo_bien', $opciones, ['class' => 'form-control']);?> 
                			

                	</div>
                	<div class="col-md-6">
                			<label for="exampleInputEmail1">Numero de inventario</label>
                      <?php echo $this->Form->text('iden_num_inven', ['class' => 'form-control']);?>
                	</div>

            </div>


            <div class="form-group row">

                		<div class="col-md-6">
                			<label for="">Época</label>

<?php
$opciones = [
'' => '',
'Siglo XVI' => '1: Siglo XVI',
'Siglo XVII' => '2: Siglo XVII',
'Siglo XVIII. 1er. tercio' => '3: Siglo XVIII. 1er. tercio',
'Siglo XVIII. 2do. tercio' => '4: Siglo XVIII. 2do. tercio',
'Siglo XVIII. 3er tercio' => '5: Siglo XVIII. 3er tercio',
'Primera mitad del siglo XIX' => '6: Primera mitad del siglo XIX',
'Segunda mitad del siglo XIX' => '7: Segunda mitad del siglo XIX',
'Primera mitad del siglo XX' => '8: Primera mitad del siglo XX',
'Segunda mitad del siglo XX' => '9: Segunda mitad del siglo XX',
'Primera mitad del siglo XXI' => '10: Primera mitad del siglo XXI',
];
                      echo $this->Form->select('iden_epoca', $opciones, ['class' => 'form-control']);?> 


                	</div>
                	<div class="col-md-6">
                			<label for="">Número de Inventario.Ant.</label>
                      
                      
                  <?php echo $this->Form->text('iden_num_inven_ant', ['class' => 'form-control']);?>
                	</div>

            </div>


            <div class="row">
            	<div class="col-md-6">
        
<?php 
$this->Form->setTemplates(['radioWrapper' => '<label class="col-md-6">{{label}}</label>']);
?>
            		<label>Estilo</label>
                <div class="radio">
                  
                <?php 
$options = [
'Pintura flamenca' => '1:Pintura flamenca',
'Manierismo' => '2:Manierismo',
'Barroco' => '3:Barroco',
'Neoclásico' => '4:Neoclásico',
'Mestizo' => '5:Mestizo',
'Pintura profana' => '6:Pintura profana',
'Indigenista' => '7:Indigenista',
'Dada' => '8:Dada',
'Figurativo' => '9:Figurativo',
'Impresionismo' => '10:Impresionismo',
'Expresionista' => '11:Expresionista',
'Cubista' => '12:Cubista',
'Otros' => '13:Otros'
];
echo $this->Form->radio('ides_estilo', $options);
                ?>
                </div>
                <?php echo $this->Form->text('iden_estilo_otros', ['class' => 'form-control','placeholder' => 'Otros']);?>
            	</div>

            	<div class="col-md-6">
            		<label for="">Escuela</label>

<?php 
$opciones = [
'' => '',
'Escuela potosina' => 'Escuela potosina',
'Escuela cuzqueña' => 'Escuela cuzqueña',
'Escuela collao' => 'Escuela collao',
'Otros' => 'Otros',
];                
echo $this->Form->select('iden_escuela', $opciones, ['class' => 'form-control']);?> 
<br>
<?php echo $this->Form->text('iden_escuela_otros', ['class' => 'form-control','placeholder' => 'Otros']);?>
            	</div>

            </div>

            <div class="form-group row">
            	<div class="col-md-6">
                	<label for="">Autor/atribución</label>
                  <?php echo $this->Form->text('iden_autor_atrib', ['class' => 'form-control']);?>
                  	
                </div>
                <div class="col-md-6">
                	<label for="">Origen/procedencia</label>
                  <?php echo $this->Form->text('iden_origen_proce', ['class' => 'form-control']);?>
                  	
                </div>
            </div>
            <div class="form-group row">
            	<div class="col-md-6">
                	<label for="">Obtencion</label>
                  <?php echo $this->Form->text('iden_obtencion', ['class' => 'form-control']);?>
                </div>
                <div class="col-md-6">
                	<label for="">Fecha Adquisicion</label><br>
                  <?php echo $this->Form->date('fecha_adquisicion', ['class' => 'form-control','minYear' => 1800]);?>
                </div>
            </div>


              </div>
              <!-- /.box-body -->

            
          </div>
	</div>
</div>



<div class="row">
	<div class="col-md-12">
		<div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">2. LOCALIZACIÓN </h3>
            </div>

              <div class="box-body">
                <div class="form-group row">
                	<div class="col-md-6">

                	</div>
                	<div class="col-md-3">
                			<label for="exampleInputEmail1">COMUNIDAD</label>
                      <?php echo $this->Form->text('loc_comunidad', ['class' => 'form-control']);?>
                	</div>
                  <div class="col-md-3">
                      <label for="exampleInputEmail1">CIUDAD</label>
                      <?php echo $this->Form->text('loc_ciudad', ['class' => 'form-control']);?>
                  </div>
            	</div>


            <div class="form-group row">
            	<div class="col-md-6">
                	<label for="">INMUEBLE</label>
                  <?php echo $this->Form->text('loc_inmueble', ['class' => 'form-control']);?>
                </div>
                <div class="col-md-6">
                	<label for="">SUB-CONTENEDOR/UBICACIO / UBICACION</label>
                  <?php echo $this->Form->text('loc_subcontenedor', ['class' => 'form-control']);?>
                </div>
            </div>
            <div class="form-group row">
            	<div class="col-md-6">
                	<label for="">DIRECCIÓN</label>
                  <?php echo $this->Form->text('loc_direccion', ['class' => 'form-control']);?>
                </div>
                <div class="col-md-6">
                	<label for="">Código institucional</label>
                  <?php echo $this->Form->text('loc_cod_institucional', ['class' => 'form-control']);?>
                </div>
            </div>

              </div>

          </div>
	</div>
</div>



<div class="row">
	<div class="col-md-12">
		<div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">3. MARCO LEGAL </h3>
            </div>

              <div class="box-body">
                <div class="form-group row">
                	<div class="col-md-6">
                		<label>Reconocimiento Internacional</label>
                    <?php 
$opciones = [
'' => '',
'Individual' => 'Individual',
'De conjunto' => 'De conjunto'
];                
echo $this->Form->select('marc_recono_inter', $opciones, ['class' => 'form-control']);?> 

                	</div>
                	<div class="col-md-6">
                		<label>Patrimonio Cultural</label>
                    <?php echo $this->Form->select('marc_patri_cultu', $opciones, ['class' => 'form-control']);?> 
                		
                	</div>
            	</div>
            	<div class="form-group row">
                	<div class="col-md-6">
                		<label>Patrimonio Cultural Departamental</label>
                		<?php echo $this->Form->select('marc_patri_cultu_dep', $opciones, ['class' => 'form-control']);?> 
                	</div>
                	<div class="col-md-6">
                		<label>Patrimonio Cultural Municipal</label>
                		<?php echo $this->Form->select('marc_patri_cultu_muni', $opciones, ['class' => 'form-control']);?> 
                	</div>
            	</div>

            	<div class="row">
            		<div class="col-md-6">
            		<label>Forma de ingreso</label>
                		<div class="checkbox">
                <?php 
$options = [
'Custodia' => '1: Custodia',
'Donación ' => '2: Donación ',
'Incautación' => '3: Incautación',
'Repatriación' => '4: Repatriación',
'Adquisición' => '5: Adquisición',
'Otros,especifique' => '6: Otros,especifique',
'Persona o entidad que entregó la pieza' => '7: Persona o entidad que entregó lieza',
// 'Tipo de documento de entrega' => '8: Tipo de documento de entrega',
];
echo $this->Form->select('marc_forma_ing', $options, [
    'multiple' => 'checkbox'
]);
                ?>


              			</div>
                    <?php echo $this->Form->text('marc_forma_ing_texto', ['class' => 'form-control']);?>
          			</div>

          			<div class="col-md-6" id="iddiv-tipo-doc" >
            		<label> 8: Tipo de documento de entrega</label>
                		<div class="checkbox">

                      <?php 
$options = [
'Acta' => '8-1: Acta',
'Acta notarial' => '8-2: Acta notarial ',
'Nota simple' => '8-3: Nota simple',
'Nota notariada' => '8-4: Nota notariada',
'Inventario' => '8-5: Inventario',
'Recibo' => '8-6: Recibo',
'Persona o entidad que entregó la pieza' => '7: Persona o entidad que entregó la pieza',
'Sin documento' => '8-7: Sin documento',
'Otros' => '8-8: Otros',
];
echo $this->Form->select('marc_tipo_doc_entre', $options, [
    'multiple' => 'checkbox'
]);
                ?>

              			</div>
                    <?php echo $this->Form->text('marc_tipo_doc_entre_otros', ['class' => 'form-control']);?>
          			</div>

				</div>          

              </div>

          </div>
	</div>
</div>



<div class="row">
	<div class="col-md-12">
		<div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">4. CARACTERÍSTICAS ESPECÍFICAS</h3>
            </div>

              <div class="box-body">
                <div class="form-group row">
                	<div class="col-md-12">
                		<label>Categoría</label>
                    <?php 
$opciones = [
'' => '',
'Bienes muebles arqueológicos' => '1: Bienes muebles arqueológicos',
'Bienes muebles histórico-artiticos' => '2: Bienes muebles histórico-artiticos',
'Monumentos en espacio publico' => '3: Monumentos en espacio publico',
'Numismático y filatélico' => '4: Numismático y filatélico',
];                
echo $this->Form->select('car_categoria_1', $opciones, ['class' => 'form-control','id' => 'categoria_4']);?> 

                	</div>
            	</div>

            	<div class="form-group row">
                	<div class="col-md-12">
                    <?php 
$opciones = [
'' => '',
'Cerámica' => '1: Cerámica',
'Lítico' => '2: Lítico',
'Metal' => '3: Metal',
'Orgánico - madera' => '4: Orgánico - madera',
'Orgánico- Fibra vegetal' => '5: Orgánico- Fibra vegetal',
'Orgánico-Cuero' => '6: Orgánico-Cuero',
'Orgánico-Calabaza' => '7: Orgánico-Calabaza',
'Orgánico-Semillas y otros' => '8: Orgánico-Semillas y otros',
'Hueso animal' => '9: Hueso animal',
'Hueso humano' => '10: Hueso humano',
'Textiles' => '11: Textiles',
'Otros' => '12: Otros',
];                
echo $this->Form->select('car_categoria_2', $opciones, ['class' => 'form-control oculto','id' => 'categoria_4_1','disabled']);?> 

<?php 
$opciones = [
'' => '',
'Artístico' => '1: Artístico',
'Utilitario' => '2: Utilitario',
'Uso funerario' => '3: Uso funerario',
];                
echo $this->Form->select('car_categoria_2', $opciones, ['class' => 'form-control oculto','id' => 'categoria_4_2','disabled']);?> 

<?php 
$opciones = [
'' => '',
'Esculturas' => 'Esculturas',
'Bustos ' => 'Bustos ',
'Hermas' => 'Hermas',
'Columnas' => 'Columnas',
'Fuentes' => 'Fuentes',
'Placas' => 'Placas',
'Coronas' => 'Coronas',
'Obeliscos' => 'Obeliscos',
'Inscripciones' => 'Inscripciones',
'Otros' => 'Otros',
];                
echo $this->Form->select('car_categoria_2', $opciones, ['class' => 'form-control oculto','id' => 'categoria_4_3','disabled']);?> 
                	</div>
            	</div>

            	<div class="form-group  row">
            		<div class="col-md-12">
                  <?php 
$opciones = [
'' => '',
'Pintura de caballete' => 'Pintura de caballete',
'Pintura mural' => 'Pintura mural',
'Escultura' => 'Escultura',
'Dibujo' => 'Dibujo',
'Artes gráficas' => 'Artes gráficas',
'Grabado' => 'Grabado',
'Tejido artístico' => 'Tejido artístico',
];                
echo $this->Form->select('car_categoria_3', $opciones, ['class' => 'form-control oculto','id' => 'categoria_4_2_1','disabled']);?> 

<?php 
$opciones = [
'' => '',
'Relacionado con el culto' => 'Relacionado con el culto',
'Ornamentos litúrgicos e indumentaria religiosa' => 'Ornamentos litúrgicos e indumentaria religiosa',
'Mobiliario' => 'Mobiliario',
'Uso domestico o cotidiano' => 'Uso domestico o cotidiano',
'Uso personal' => 'Uso personal',
'Indumentaria' => 'Indumentaria',
'Ins. Musicales' => 'Ins. Musicales',
'Armas' => 'Armas',
'Condecoraciones, trofeos y premios' => 'Condecoraciones, trofeos y premios',
'Banderas ' => 'Banderas ',
'Escudos' => 'Escudos',
'Utensilios, instrumentos, herramientas de trabajo, equipo tecnológico y maquinaria vidrio, porcelana mortero de piedra con mazo' => 'Utensilios, instrumentos, herramientas de trabajo, equipo tecnológico y maquinaria vidrio, porcelana mortero de piedra con mazo',
'Vehículos' => 'Vehículos',
'Accesorios de bienes muebles' => 'Accesorios de bienes muebles',
'Accesorios de bienes inmuebles' => 'Accesorios de bienes inmuebles',
'Elementos relacionados con inmuebles ' => 'Elementos relacionados con inmuebles ',
'Otros' => 'Otros',
];                
echo $this->Form->select('car_categoria_3', $opciones, ['class' => 'form-control oculto','id' => 'categoria_4_2_2','disabled']);?> 

<?php 
$opciones = [
'' => '',
'Cajones' => 'Cajones',
'Cenotafio' => 'Cenotafio',
'Esculturas' => 'Esculturas',
'Fúnebres' => 'Fúnebres',
'Lapidas' => 'Lapidas',
'Nichos con vidrio' => 'Nichos con vidrio',
'Sepulcros' => 'Sepulcros',
'Túmulos' => 'Túmulos',
'Urna' => 'Urna',
'Otros' => 'Otros',
];                
echo $this->Form->select('car_categoria_3', $opciones, ['class' => 'form-control oculto','id' => 'categoria_4_2_3','disabled']);?> 
            	
            		</div>
            	</div>

              <div class="form-group  row">
                <div class="col-md-12">
<?php 
$opciones = [
'' => '',
'Textiles' => 'Textiles',
'Metalicos' => 'Metalicos',
];                
echo $this->Form->select('car_categoria_4', $opciones, ['class' => 'form-control oculto','id' => 'categoria_4_2_2_2','disabled']);?> 

<?php 
$opciones = [
'' => '',
'Manuales' => 'Manuales',
'Eléctricas' => 'Eléctricas',
'Neumáticas' => 'Neumáticas',
'Instrumentos de medición' => 'Instrumentos de medición',
'Elementos de escritorio madera, vidrio, metal, pluma' => 'Elementos de escritorio madera, vidrio, metal, pluma',
'Herramientas manuales ' => 'Herramientas manuales ',
'Herramientas con borde filoso' => 'Herramientas con borde filoso',
'Herramientas de corte' => 'Herramientas de corte',
'Herramientas de torsión' => 'Herramientas de torsión',
'Herramientas neumáticas' => 'Herramientas neumáticas',
'Herramientas asociadas con energía eléctrica ' => 'Herramientas asociadas con energía eléctrica ',
'Equipos tecnológica y maquinas' => 'Equipos tecnológica y maquinas',
'Otros' => 'Otros',
];                
echo $this->Form->select('car_categoria_4', $opciones, ['class' => 'form-control oculto','id' => 'categoria_4_2_2_12','disabled']);?> 

<?php 
$opciones = [
'' => '',
'Automóvil' => 'Automóvil',
'Avión' => 'Avión',
'Bicicleta' => 'Bicicleta',
'Buque' => 'Buque',
'Canoa' => 'Canoa',
'Carreta' => 'Carreta',
'Carroza' => 'Carroza',
'Globo' => 'Globo',
'Locomotora' => 'Locomotora',
'Motocicleta' => 'Motocicleta',
'Tren' => 'Tren',
'Otros' => 'Otros',
];                
echo $this->Form->select('car_categoria_4', $opciones, ['class' => 'form-control oculto','id' => 'categoria_4_2_2_13','disabled']);?> 

                </div>
              </div>



<div class="form-group divo row oculto" id="op_1_1" >
	<div class="col-md-6">
		<label>Material</label>
		<div class="checkbox">
      <?php 
$options = [
'Algodón' => 'Algodón',
'Lino' => 'Lino',
'Metal' => 'Metal',
'Seda' => 'Seda',
'Tela' => 'Tela',
'Tocuyo' => 'Tocuyo',
'Vidrio' => 'Vidrio',
'Piedra' => 'Piedra',
'Papel' => 'Papel',
'Madera' => 'Madera',
'Otros' => 'Otros',
];
echo $this->Form->select('detalles[op_1_1][0][detalle]', $options, [
    'multiple' => 'checkbox'
]);
?>
<?php echo $this->Form->text('detalles[op_1_1][0][otros]', ['class' => 'form-control','placeholder' => 'Otros']);?>
<?php echo $this->Form->control('detalles[op_1_1][0][titulo]', ['type' => 'hidden','value' => 'Material']); ?>
<?php echo $this->Form->control('detalles[op_1_1][0][id]', ['type' => 'hidden']); ?>


		</div>
	</div>

	<div class="col-md-6">
		<label>Tecnica</label>
		<div class="checkbox">
      <?php 
$options = [
'Acrílico' => 'Acrílico',
'Acuarela' => 'Acuarela',
'Cerámica esmaltada policromada' => 'Cerámica esmaltada policromada',
'Colage' => 'Colage',
'Encáustica (a la cera)' => 'Encáustica (a la cera)',
'Guache' => 'Guache',
'Oleo ' => 'Oleo ',
'Piroxilina' => 'Piroxilina',
'Técnicas mixtas' => 'Técnicas mixtas',
'Vidrio pintado' => 'Vidrio pintado',
'Otros' => 'Otros',
];
echo $this->Form->select('detalles[op_1_1][1][detalle]', $options, [
    'multiple' => 'checkbox'
]);
?>
<?php echo $this->Form->text('detalles[op_1_1][1][otros]', ['class' => 'form-control','placeholder' => 'Otros']);?>
<?php echo $this->Form->control('detalles[op_1_1][1][titulo]', ['type' => 'hidden','value' => 'Tecnica']); ?>
<?php echo $this->Form->control('detalles[op_1_1][1][id]', ['type' => 'hidden']); ?>


		</div>
	</div>
</div>

<?php 
$myTemplates = [
  'checkboxWrapper' => '<label class="col-md-12">{{label}}</label>',
];
$this->Form->setTemplates($myTemplates);
?>
<div class="form-group divo row oculto" id="op_1_2" >
  <div class="col-md-4">
    <label>Material</label>
    <div class="checkbox">
      <?php 
$options = [
'Adobe' => 'Adobe',
'Arcilla' => 'Arcilla',
'Barro/arcilla/arena/cemento' => 'Barro/arcilla/arena/cemento',
'Cemento' => 'Cemento',
'Ladrillo' => 'Ladrillo',
'Roca' => 'Roca',
'Tapial' => 'Tapial',
'Otros' => 'Otros',
];
echo $this->Form->select('detalles[op_1_2][0][detalle]', $options, [
    'multiple' => 'checkbox'
]);
?>
<?php echo $this->Form->text('detalles[op_1_2][0][otros]', ['class' => 'form-control','placeholder' => 'Otros']);?>
<?php echo $this->Form->control('detalles[op_1_2][0][titulo]', ['type' => 'hidden','value' => 'Material']); ?>
<?php echo $this->Form->control('detalles[op_1_2][0][id]', ['type' => 'hidden']); ?>


    </div>
  </div>

  <div class="col-md-4">
    <label></label>
    <div class="checkbox">
      <?php 
$options = [
'Barro' => 'Barro',
'Cal' => 'Cal',
'Látex' => 'Látex',
'Polvo de mármol' => 'Polvo de mármol',
'Revoque de cal' => 'Revoque de cal',
'Revoque de yeso' => 'Revoque de yeso',
'Otros' => 'Otros',
];
echo $this->Form->select('detalles[op_1_2][1][detalle]', $options, [
    'multiple' => 'checkbox'
]);
?>
<?php echo $this->Form->text('detalles[op_1_2][1][otros]', ['class' => 'form-control','placeholder' => 'Otros']);?>
<?php echo $this->Form->control('detalles[op_1_2][1][titulo]', ['type' => 'hidden','value' => 'Tecnica']); ?>
<?php echo $this->Form->control('detalles[op_1_2][1][id]', ['type' => 'hidden']); ?>


    </div>
  </div>
    <div class="col-md-4">
    <label>Tecnica</label>
    <div class="checkbox">
      <?php 
$options = [
'Fresco' => 'Fresco',
'Grisalla' => 'Grisalla',
'Mixta ' => 'Mixta ',
'Temple' => 'Temple',
'Otros' => 'Otros',
];
echo $this->Form->select('detalles[op_1_2][2][detalle]', $options, [
    'multiple' => 'checkbox'
]);
?>
<?php echo $this->Form->text('detalles[op_1_2][2][otros]', ['class' => 'form-control','placeholder' => 'Otros']);?>
<?php echo $this->Form->control('detalles[op_1_2][2][titulo]', ['type' => 'hidden','value' => 'Arte del dibujo']); ?>
<?php echo $this->Form->control('detalles[op_1_2][2][id]', ['type' => 'hidden']); ?>


    </div>
  </div>
</div>

<?php 
$this->Form->setTemplates(['checkboxWrapper' => '<label class="col-md-3">{{label}}</label>']);
?>
<div class="form-group divo row oculto" id="op_1_3" >
  <div class="col-md-12">
    <label>Material</label>
    <div class="checkbox">
      <?php 
$options = [
'Acrílico' => 'Acrílico',
'Cera' => 'Cera',
'Falsos mármoles' => 'Falsos mármoles',
'Lechada' => 'Lechada',
'Ojos de vidrio' => 'Ojos de vidrio',
'Plomo' => 'Plomo',
'Otros' => 'Otros',
'Alabastro' => 'Alabastro',
'Cerámica' => 'Cerámica',
'Fibra de vidrio' => 'Fibra de vidrio',
'Madera ' => 'Madera ',
'Pasta' => 'Pasta',
'Porcelana' => 'Porcelana',
'Bronce' => 'Bronce',
'Cerámica esmaltad policromada' => 'Cerámica esmaltad policromada',
'Hierro' => 'Hierro',
'Maguey' => 'Maguey',
'Pelo natural' => 'Pelo natural',
'Vidrio' => 'Vidrio',
'Cal' => 'Cal',
'Espejo' => 'Espejo',
'Latón' => 'Latón',
'Mármol' => 'Mármol',
'Piedra' => 'Piedra',
'Yeso ' => 'Yeso ',
];
echo $this->Form->select('detalles[op_1_3][0][detalle]', $options, [
    'multiple' => 'checkbox'
]);
?>
<?php echo $this->Form->text('detalles[op_1_3][0][otros]', ['class' => 'form-control','placeholder' => 'Otros']);?>
<?php echo $this->Form->control('detalles[op_1_3][0][titulo]', ['type' => 'hidden','value' => 'Material']); ?>
<?php echo $this->Form->control('detalles[op_1_3][0][id]', ['type' => 'hidden']); ?>


    </div>
  </div>
<?php 
$this->Form->setTemplates(['checkboxWrapper' => '<label class="col-md-12">{{label}}</label>']);
?>
  <div class="col-md-4">
    <label>Tipo de escultura</label>
    <div class="checkbox">
            <?php 
$options = [
'Alto relieve' => 'Alto relieve',
'Bajo relieve' => 'Bajo relieve',
'Bulto' => 'Bulto',
'Candelero' => 'Candelero',
'De vestir' => 'De vestir',
'Relieve hueco' => 'Relieve hueco',
'Otros' => 'Otros',
];
echo $this->Form->select('detalles[op_1_3][1][detalle]', $options, [
    'multiple' => 'checkbox'
]);
?>
<?php echo $this->Form->text('detalles[op_1_3][1][otros]', ['class' => 'form-control','placeholder' => 'Otros']);?>
<?php echo $this->Form->control('detalles[op_1_3][1][titulo]', ['type' => 'hidden','value' => 'Tipo de escultura']); ?>
<?php echo $this->Form->control('detalles[op_1_3][1][id]', ['type' => 'hidden']); ?>



    </div>
  </div>
    <div class="col-md-4">
    <label class="col-md-12">Técnica 1</label>
    <div class="checkbox">
      <?php 
$options = [
'Encarnado' => 'Encarnado',
'Fundida' => 'Fundida',
'Incrustaciones' => 'Incrustaciones',
'Modelada' => 'Modelada',
'Moldeada' => 'Moldeada',
'Tallado' => 'Tallado',
'Vaciado' => 'Vaciado',
'Otros' => 'Otros',
];
echo $this->Form->select('detalles[op_1_3][2][detalle]', $options, [
    'multiple' => 'checkbox'
]);
?>
<?php echo $this->Form->text('detalles[op_1_3][2][otros]', ['class' => 'form-control','placeholder' => 'Otros']);?>
<?php echo $this->Form->control('detalles[op_1_3][2][titulo]', ['type' => 'hidden','value' => 'Técnica 1']); ?>
<?php echo $this->Form->control('detalles[op_1_3][2][id]', ['type' => 'hidden']); ?>



    </div>
  </div>
    <div class="col-md-4">
    <label class="col-md-12">Técnica 2</label>
    <div class="checkbox">
      <?php 
$options = [
'Chineado (Corlado)' => 'Chineado (Corlado)',
'Dorado' => 'Dorado',
'Esgrafiado' => 'Esgrafiado',
'Estofado' => 'Estofado',
'Policromado' => 'Policromado',
'Otros' => 'Otros',
];
echo $this->Form->select('detalles[op_1_3][3][detalle]', $options, [
    'multiple' => 'checkbox'
]);
?>
<?php echo $this->Form->text('detalles[op_1_3][3][otros]', ['class' => 'form-control','placeholder' => 'Otros']);?>
<?php echo $this->Form->control('detalles[op_1_3][3][titulo]', ['type' => 'hidden','value' => 'Técnica 2']); ?>
<?php echo $this->Form->control('detalles[op_1_3][3][id]', ['type' => 'hidden']); ?>



    </div>
  </div>
</div>

<?php 
$this->Form->setTemplates(['checkboxWrapper' => '<label class="col-md-6">{{label}}</label>']);
?>
<div class="form-group divo row oculto" id="op_1_4" >
  <div class="col-md-6">
    <label>Material</label>
    <div class="checkbox">
      <?php 
$options = [
'Cartón' => 'Cartón',
'Metal ' => 'Metal ',
'Vidrio' => 'Vidrio',
'Madera' => 'Madera',
'Papel' => 'Papel',
'Otros' => 'Otros',
];
echo $this->Form->select('detalles[op_1_4][0][detalle]', $options, [
    'multiple' => 'checkbox'
]);
?>
<?php echo $this->Form->text('detalles[op_1_4][0][otros]', ['class' => 'form-control','placeholder' => 'Otros']);?>
<?php echo $this->Form->control('detalles[op_1_4][0][titulo]', ['type' => 'hidden','value' => 'Material']); ?>
<?php echo $this->Form->control('detalles[op_1_4][0][id]', ['type' => 'hidden']); ?>

    </div>
  </div>

  <div class="col-md-6">
    <label class="col-md-6">Tecnica</label>
    <div class="checkbox">
      <?php 
$options = [
'Acrílico' => 'Acrílico',
'Bolígrafo' => 'Bolígrafo',
'Crayón' => 'Crayón',
'Oleo' => 'Oleo',
'Pluma' => 'Pluma',
'Tinta' => 'Tinta',
'Acuarela' => 'Acuarela',
'Carboncillo' => 'Carboncillo',
'Lápiz ' => 'Lápiz ',
'Pedestal' => 'Pedestal',
'Tempera' => 'Tempera',
'Otros' => 'Otros',
];
echo $this->Form->select('detalles[op_1_4][1][detalle]', $options, [
    'multiple' => 'checkbox'
]);
?>
<?php echo $this->Form->text('detalles[op_1_4][1][otros]', ['class' => 'form-control','placeholder' => 'Otros']);?>
<?php echo $this->Form->control('detalles[op_1_4][1][titulo]', ['type' => 'hidden','value' => 'Tecnica']); ?>
<?php echo $this->Form->control('detalles[op_1_4][1][id]', ['type' => 'hidden']); ?>


    </div>
  </div>
</div>


<div class="form-group divo row oculto" id="op_1_5" >
  <div class="col-md-6">
    <label>Material</label>
    <div class="checkbox">
      <?php 
$options = [
'Papel' => 'Papel',
'Tela' => 'Tela',
'Otro' => 'Otro',
];
echo $this->Form->select('detalles[op_1_5][0][detalle]', $options, [
    'multiple' => 'checkbox'
]);
?>
<?php echo $this->Form->text('detalles[op_1_5][0][otros]', ['class' => 'form-control','placeholder' => 'Otros']);?>
<?php echo $this->Form->control('detalles[op_1_5][0][titulo]', ['type' => 'hidden','value' => 'Material']); ?>
<?php echo $this->Form->control('detalles[op_1_5][0][id]', ['type' => 'hidden']); ?>

    </div>
  </div>

  <div class="col-md-6">
    <label class="col-md-6">Tecnica</label>
    <div class="checkbox">
      <?php 
$options = [
'Calado' => 'Calado',
'Filigrana' => 'Filigrana',
'Oleografía' => 'Oleografía',
'Vaciado ' => 'Vaciado ',
'Fotografía artística' => 'Fotografía artística',
'Cincelado' => 'Cincelado',
'Litografía' => 'Litografía',
'Repujado' => 'Repujado',
'Otros' => 'Otros',
];
echo $this->Form->select('detalles[op_1_5][1][detalle]', $options, [
    'multiple' => 'checkbox'
]);
?>
<?php echo $this->Form->text('detalles[op_1_5][1][otros]', ['class' => 'form-control','placeholder' => 'Otros']);?>
<?php echo $this->Form->control('detalles[op_1_5][1][titulo]', ['type' => 'hidden','value' => 'Tecnica']); ?>
<?php echo $this->Form->control('detalles[op_1_5][1][id]', ['type' => 'hidden']); ?>

    </div>
  </div>
</div>


<div class="form-group divo row oculto" id="op_1_6" >
  <div class="col-md-6">
    <label>Material</label>
    <div class="checkbox">
      <?php 
$options = [
'Aluminio' => 'Aluminio',
'Cobre' => 'Cobre',
'Madera' => 'Madera',
'Piedra' => 'Piedra',
'Vidrio' => 'Vidrio',
'Cartón' => 'Cartón',
'Linolio' => 'Linolio',
'Papel' => 'Papel',
'Tela' => 'Tela',
'Otros' => 'Otros',
];
echo $this->Form->select('detalles[op_1_6][0][detalle]', $options, [
    'multiple' => 'checkbox'
]);
?>
<?php echo $this->Form->text('detalles[op_1_6][0][otros]', ['class' => 'form-control','placeholder' => 'Otros']);?>
<?php echo $this->Form->control('detalles[op_1_6][0][titulo]', ['type' => 'hidden','value' => 'Material']); ?>
<?php echo $this->Form->control('detalles[op_1_6][0][id]', ['type' => 'hidden']); ?>


    </div>
  </div>

  <div class="col-md-6">
    <label class="col-md-6">Tecnica</label>
    <div class="radio">
      <?php 
$options = [
'Aguatinta' => 'Aguatinta',
'Barniz blando' => 'Barniz blando',
'Litografía' => 'Litografía',
'Serigrafía' => 'Serigrafía',
'Xilografía' => 'Xilografía',
'Aguafuerte' => 'Aguafuerte',
'Al Buril' => 'Al Buril',
'Imprenta' => 'Imprenta',
'Punta seca' => 'Punta seca',
'Tinta china con azúcar' => 'Tinta china con azúcar',
'Otros' => 'Otros',
];
echo $this->Form->select('detalles[op_1_6][1][detalle]', $options, [
    'multiple' => 'checkbox'
]);
?>
<?php echo $this->Form->text('detalles[op_1_6][1][otros]', ['class' => 'form-control','placeholder' => 'Otros']);?>
<?php echo $this->Form->control('detalles[op_1_6][1][titulo]', ['type' => 'hidden','value' => 'Tecnica']); ?>
<?php echo $this->Form->control('detalles[op_1_6][1][id]', ['type' => 'hidden']); ?>


    </div>
  </div>
</div>

<?php 
$this->Form->setTemplates(['checkboxWrapper' => '<label class="col-md-12">{{label}}</label>']);
?>

<div class="form-group divo row oculto" id="op_1_7" >
  <div class="col-md-4">
    <label>Material</label>
    <div class="checkbox">
      <?php 
$options = [
'Alfombras' => 'Alfombras',
'Gobelinos' => 'Gobelinos',
'Tapetes' => 'Tapetes',
'Vestuario' => 'Vestuario',
'Otros' => 'Otros',
];
echo $this->Form->select('detalles[op_1_7][0][detalle]', $options, [
    'multiple' => 'checkbox'
]);
?>
<?php echo $this->Form->text('detalles[op_1_7][0][otros]', ['class' => 'form-control','placeholder' => 'Otros']);?>
<?php echo $this->Form->control('detalles[op_1_7][0][titulo]', ['type' => 'hidden','value' => 'Material']); ?>
<?php echo $this->Form->control('detalles[op_1_7][0][id]', ['type' => 'hidden']); ?>


    </div>
  </div>

  <div class="col-md-4">
    <label class="col-md-12">Tecnica</label>
    <div class="checkbox">
      <?php 
$options = [
'Fibras de origen animal' => 'Fibras de origen animal',
'Fibras de origen vegetal' => 'Fibras de origen vegetal',
'Sintéticos' => 'Sintéticos',
'Otros' => 'Otros',
];
echo $this->Form->select('detalles[op_1_7][1][detalle]', $options, [
    'multiple' => 'checkbox'
]);
?>
<?php echo $this->Form->text('detalles[op_1_7][1][otros]', ['class' => 'form-control','placeholder' => 'Otros']);?>
<?php echo $this->Form->control('detalles[op_1_7][1][titulo]', ['type' => 'hidden','value' => 'Tecnica']); ?>
<?php echo $this->Form->control('detalles[op_1_7][1][id]', ['type' => 'hidden']); ?>


    </div>
  </div>
  <div class="col-md-4">
    <label class="col-md-12">Tecnica 2</label>
    <div class="checkbox">
      <?php 
$options = [
'Bordados' => 'Bordados',
'Confección' => 'Confección',
'Tejidos' => 'Tejidos',
'Otros' => 'Otros',
];
echo $this->Form->select('detalles[op_1_7][2][detalle]', $options, [
    'multiple' => 'checkbox'
]);
?>
<?php echo $this->Form->text('detalles[op_1_7][2][otros]', ['class' => 'form-control','placeholder' => 'Otros']);?>
<?php echo $this->Form->control('detalles[op_1_7][2][titulo]', ['type' => 'hidden','value' => 'Arte']); ?>
<?php echo $this->Form->control('detalles[op_1_7][2][id]', ['type' => 'hidden']); ?>


    </div>
  </div>
</div>

<?php 
$this->Form->setTemplates(['checkboxWrapper' => '<label class="col-md-6">{{label}}</label>']);
?>
<div class="form-group divo row oculto" id="op_2_1" >
  <div class="col-md-6">
    <label>Bienes</label>
    <div class="checkbox">
      <?php 
$options = [
'Banderola' => 'Banderola',
'Candelabros' => 'Candelabros',
'Crial' => 'Crial',
'Incensario' => 'Incensario',
'Patena' => 'Patena',
'Vinajeras' => 'Vinajeras',
'Cáliz' => 'Cáliz',
'Copón' => 'Copón',
'Crismera' => 'Crismera',
'Naveta' => 'Naveta',
'Velero' => 'Velero',
'Otros' => 'Otros',
];
echo $this->Form->select('detalles[op_2_1][0][detalle]', $options, [
    'multiple' => 'checkbox'
]);
?>
<?php echo $this->Form->text('detalles[op_2_1][0][otros]', ['class' => 'form-control','placeholder' => 'Otros']);?>
<?php echo $this->Form->control('detalles[op_2_1][0][titulo]', ['type' => 'hidden','value' => 'Bienes']); ?>
<?php echo $this->Form->control('detalles[op_2_1][0][id]', ['type' => 'hidden']); ?>


    </div>
  </div>

  <div class="col-md-6">
    <label>Material</label>
    <div class="checkbox">
      <?php 
$options = [
'Cerámica' =>'Cerámica',
'Latón' =>'Latón',
'Peltre' =>'Peltre',
'Porcelana' =>'Porcelana',
'Bronce' =>'Bronce',
'Cobre' =>'Cobre',
'Oro' =>'Oro',
'Plata' =>'Plata',
'Vidrio' =>'Vidrio',
'Cristal de roca' =>'Cristal de roca',
'Otros' =>'Otros',
];
echo $this->Form->select('detalles[op_2_1][1][detalle]', $options, [
    'multiple' => 'checkbox'
]);
?>
<?php echo $this->Form->text('detalles[op_2_1][1][otros]', ['class' => 'form-control','placeholder' => 'Otros']);?>
<?php echo $this->Form->control('detalles[op_2_1][1][titulo]', ['type' => 'hidden','value' => 'Material']); ?>
<?php echo $this->Form->control('detalles[op_2_1][1][id]', ['type' => 'hidden']); ?>


    </div>
  </div>

</div>

<?php 
$this->Form->setTemplates(['checkboxWrapper' => '<label class="col-md-4">{{label}}</label>']);
?>
<div class="form-group divo divo_2 row oculto" id="op_2_2_1" >
  <div class="col-md-8">
    <label>Bienes</label>
    <div class="checkbox">
      <?php 
$options = [
'Albas y túnicas' => 'Albas y túnicas',
'Capelo' => 'Capelo',
'Cíngulos' => 'Cíngulos',
'Cubrecorporales' => 'Cubrecorporales',
'Ínfulas' => 'Ínfulas',
'Máteles de altar' => 'Máteles de altar',
'Paños de hombros' => 'Paños de hombros',
'Tiaras' => 'Tiaras',
'Báculos' => 'Báculos',
'Casullas' => 'Casullas',
'Cinturones' => 'Cinturones',
'Dalmáticas' => 'Dalmáticas',
'Lienzos de comunión' => 'Lienzos de comunión',
'Mitras' => 'Mitras',
'Paños mortuorios' => 'Paños mortuorios',
'Tocas' => 'Tocas',
'Capas pluviales' => 'Capas pluviales',
'Ciborios o velos decopón' => 'Ciborios o velos decopón',
'Conopeos o velos de tabernáculo' => 'Conopeos o velos de tabernáculo',
'Estola y estolones' => 'Estola y estolones',
'Manípulos' => 'Manípulos',
'Paños cubre atril' => 'Paños cubre atril',
'Roquete' => 'Roquete',
'Velos de altar' => 'Velos de altar',
'Otros' => 'Otros',
];
echo $this->Form->select('detalles[op_2_2_1][0][detalle]', $options, [
    'multiple' => 'checkbox'
]);
?>
<?php echo $this->Form->text('detalles[op_2_2_1][0][otros]', ['class' => 'form-control','placeholder' => 'Otros']);?>
<?php echo $this->Form->control('detalles[op_2_2_1][0][titulo]', ['type' => 'hidden','value' => 'Bienes']); ?>
<?php echo $this->Form->control('detalles[op_2_2_1][0][id]', ['type' => 'hidden']); ?>


    </div>
  </div>
  <?php 
$this->Form->setTemplates(['checkboxWrapper' => '<label class="col-md-12">{{label}}</label>']);
?>
  <div class="col-md-4">
    <label>Material</label>
    <div class="checkbox">
      <?php 
$options = [
'Sintético' => 'Sintético',
'Brocateado' => 'Brocateado',
'Bordado' => 'Bordado',
'Seda' => 'Seda',
'Otros' => 'Otros',
];
echo $this->Form->select('detalles[op_2_2_1][1][detalle]', $options, [
    'multiple' => 'checkbox'
]);
?>
<?php echo $this->Form->text('detalles[op_2_2_1][1][otros]', ['class' => 'form-control','placeholder' => 'Otros']);?>
<?php echo $this->Form->control('detalles[op_2_2_1][1][titulo]', ['type' => 'hidden','value' => 'Material']); ?>
<?php echo $this->Form->control('detalles[op_2_2_1][1][id]', ['type' => 'hidden']); ?>


    </div>
  </div>

</div>

<?php 
$this->Form->setTemplates(['checkboxWrapper' => '<label class="col-md-6">{{label}}</label>']);
?>
<div class="form-group divo divo_2 row oculto" id="op_2_2_2" >
  <div class="col-md-6">
    <label>Bienes</label>
    <div class="checkbox">
      <?php 
$options = [
'Anillo' => 'Anillo',
'Broches' => 'Broches',
'Escapularios' => 'Escapularios',
'Pectoral' => 'Pectoral',
'Báculo' => 'Báculo',
'Cadena' => 'Cadena',
'Medallas' => 'Medallas',
'Otros' => 'Otros',
];
echo $this->Form->select('detalles[op_2_2_2][0][detalle]', $options, [
    'multiple' => 'checkbox'
]);
?>
<?php echo $this->Form->text('detalles[op_2_2_2][0][otros]', ['class' => 'form-control','placeholder' => 'Otros']);?>
<?php echo $this->Form->control('detalles[op_2_2_2][0][titulo]', ['type' => 'hidden','value' => 'Bienes']); ?>
<?php echo $this->Form->control('detalles[op_2_2_2][0][id]', ['type' => 'hidden']); ?>


    </div>
  </div>
  <div class="col-md-6">
    <label>Material</label>
    <div class="checkbox">
      <?php 
$options = [
'Oro' => 'Oro',
'Alpaca' => 'Alpaca',
'Bronce' => 'Bronce',
'Plata' => 'Plata',
'Cobre' => 'Cobre',
'Latón' => 'Latón',
'Otros' => 'Otros',
];
echo $this->Form->select('detalles[op_2_2_2][1][detalle]', $options, [
    'multiple' => 'checkbox'
]);
?>
<?php echo $this->Form->text('detalles[op_2_2_2][1][otros]', ['class' => 'form-control','placeholder' => 'Otros']);?>
<?php echo $this->Form->control('detalles[op_2_2_2][1][titulo]', ['type' => 'hidden','value' => 'Material']); ?>
<?php echo $this->Form->control('detalles[op_2_2_2][1][id]', ['type' => 'hidden']); ?>


    </div>
  </div>
</div>

<?php 
$this->Form->setTemplates(['checkboxWrapper' => '<label class="col-md-3">{{label}}</label>']);
?>
<div class="form-group divo row oculto" id="op_2_3" >
  <div class="col-md-12">

    <div class="checkbox">
      <?php 
$options = [
'Arca' => 'Arca',
'Baúl' => 'Baúl',
'Escaño' => 'Escaño',
'Florero' => 'Florero',
'Jarrón' => 'Jarrón',
'Reloj de mesa' => 'Reloj de mesa',
'Lavado' => 'Lavado',
'Atril' => 'Atril',
'Credencia' => 'Credencia',
'Púlpito' => 'Púlpito',
'Lámpara' => 'Lámpara',
'Anda' => 'Anda',
'Cama /catre' => 'Cama /catre',
'Caja' => 'Caja',
'Escritorio' => 'Escritorio',
'Plato' => 'Plato',
'Candelabro' => 'Candelabro',
'Sotabanco' => 'Sotabanco',
'Altar' => 'Altar',
'Baldaquino' => 'Baldaquino',
'Retablo' => 'Retablo',
'Sagrario' => 'Sagrario',
'Blandones' => 'Blandones',
'Mesa de altar' => 'Mesa de altar',
'Armario' => 'Armario',
'Consola' => 'Consola',
'Mesa' => 'Mesa',
'Taza' => 'Taza',
'Porcelana' => 'Porcelana',
'Vitrina' => 'Vitrina',
'Reclinatorio' => 'Reclinatorio',
'Cancelas' => 'Cancelas',
'Retablo de Culto popular' => 'Retablo de Culto popular',
'Silla frailera/frilunas' => 'Silla frailera/frilunas',
'Tenebrario' => 'Tenebrario',
'Espejo' => 'Espejo',
'Bargueño' => 'Bargueño',
'Cómodas' => 'Cómodas',
'Silla' => 'Silla',
'Frutero' => 'Frutero',
'Reloj de pared' => 'Reloj de pared',
'Tina' => 'Tina',
'Ambon' => 'Ambon',
'Confesionario' => 'Confesionario',
'Gradilla' => 'Gradilla',
'Sitial' => 'Sitial',
'Urna' => 'Urna',
'Candelabros' => 'Candelabros',
'Otros' => 'Otros',
];
echo $this->Form->select('detalles[op_2_3][0][detalle]', $options, [
    'multiple' => 'checkbox'
]);
?>
<?php echo $this->Form->text('detalles[op_2_3][0][otros]', ['class' => 'form-control','placeholder' => 'Otros']);?>
<?php echo $this->Form->control('detalles[op_2_3][0][titulo]', ['type' => 'hidden','value' => '']); ?>
<?php echo $this->Form->control('detalles[op_2_3][0][id]', ['type' => 'hidden']); ?>


    </div>
  </div>
</div>

<?php 
$this->Form->setTemplates(['checkboxWrapper' => '<label class="col-md-6">{{label}}</label>']);
?>
<div class="form-group divo row oculto" id="op_2_4" >
  <div class="col-md-6">
    <label>Bienes</label>
    <div class="checkbox">
      <?php 
$options = [
'Cocina' => 'Cocina',
'Cucharas' => 'Cucharas',
'Fuente' => 'Fuente',
'Jarra' => 'Jarra',
'Ollas' => 'Ollas',
'Vajilla' => 'Vajilla',
'Cubrecamas' => 'Cubrecamas',
'Fogón' => 'Fogón',
'Fundas' => 'Fundas',
'Jarrón' => 'Jarrón',
'Sabanas' => 'Sabanas',
'Balde' => 'Balde',
'Otros' => 'Otros',
];
echo $this->Form->select('detalles[op_2_4][0][detalle]', $options, [
    'multiple' => 'checkbox'
]);
?>
<?php echo $this->Form->text('detalles[op_2_4][0][otros]', ['class' => 'form-control','placeholder' => 'Otros']);?>
<?php echo $this->Form->control('detalles[op_2_4][0][titulo]', ['type' => 'hidden','value' => 'Bienes']); ?>
<?php echo $this->Form->control('detalles[op_2_4][0][id]', ['type' => 'hidden']); ?>

    </div>
  </div>
  <div class="col-md-6">
    <label>Material</label>
    <div class="checkbox">
      <?php 
$options = [
'Fierro forjado' => 'Fierro forjado',
'Tela' => 'Tela',
'Bronce' => 'Bronce',
'Porcelana' => 'Porcelana',
'Madera' => 'Madera',
'Metal' => 'Metal',
'Cobre' => 'Cobre',
'Latón' => 'Latón',
'Vidrio' => 'Vidrio',
'Ceramica' => 'Ceramica',
'Otros' => 'Otros',
];
echo $this->Form->select('detalles[op_2_4][1][detalle]', $options, [
    'multiple' => 'checkbox'
]);
?>
<?php echo $this->Form->text('detalles[op_2_4][1][otros]', ['class' => 'form-control','placeholder' => 'Otros']);?>
<?php echo $this->Form->control('detalles[op_2_4][1][titulo]', ['type' => 'hidden','value' => 'Material']); ?>
<?php echo $this->Form->control('detalles[op_2_4][1][id]', ['type' => 'hidden']); ?>


    </div>
  </div>
</div>
<style type="text/css">
  label[for='detalles-op-2-5-0-detalle-joyas']{
    color: blue;
    font-weight: bold;
  }
  label[for='uso-nivel-integridad-menos-10%']{
    color: blue;
    font-weight: bold;
  }
  label[for='marc-forma-ing-tipo-de-documento-de-entrega']{
    color: blue;
    font-weight: bold;
  }
</style>
<div class="form-group divo row oculto" id="op_2_5" >
  <div class="col-md-8">
    <div class="checkbox">
      <?php 
$options = [
'Cepillos' => 'Cepillos',
'Peine' => 'Peine',
'Cilicios' => 'Cilicios',
'Peineta' => 'Peineta',
'Elementos de tocador' => 'Elementos de tocador',
'Reloj de pulsera' => 'Reloj de pulsera',
'Espejo de mano' => 'Espejo de mano',
'Joyas' => 'Joyas',
'Otros' => 'Otros',
];
echo $this->Form->select('detalles[op_2_5][0][detalle]', $options, [
    'multiple' => 'checkbox'
]);
?>
<?php echo $this->Form->text('detalles[op_2_5][0][otros]', ['class' => 'form-control','placeholder' => 'Otros']);?>
<?php echo $this->Form->control('detalles[op_2_5][0][titulo]', ['type' => 'hidden','value' => '']); ?>
<?php echo $this->Form->control('detalles[op_2_5][0][id]', ['type' => 'hidden']); ?>


    </div>
  </div>
  <div class="col-md-4" id="div_util_5_op" class="oculto">
      <div class="form-group">
        <?php 
$options = [
'Anillo' => 'Anillo',
'Arete' => 'Arete',
'Bastones' => 'Bastones',
'Brazalete' => 'Brazalete',
'Broches' => 'Broches',
'Cadena' => 'Cadena',
'Camafeo' => 'Camafeo',
'Collar' => 'Collar',
'Cruz' => 'Cruz',
'Diadema' => 'Diadema',
'Esclava' => 'Esclava',
'Fabula' => 'Fabula',
'Mancuernillas' => 'Mancuernillas',
'Milagros: pie,ojo,pulmon, dientes, corazon, mano' => 'Milagros: pie,ojo,pulmon, dientes, corazon, mano',
'Pendientes' => 'Pendientes',
'Prendedores' => 'Prendedores',
'Otros' => 'Otros',
];
echo $this->Form->select('detalles[op_2_5][3][detalle]', $options, [
    'class' => 'form-control'
]);
?>
<?php echo $this->Form->control('detalles[op_2_5][3][titulo]', ['type' => 'hidden','value' => '']); ?>
<?php echo $this->Form->control('detalles[op_2_5][3][id]', ['type' => 'hidden']); ?>
<?php echo $this->Form->control('detalles[op_2_5][3][otros]', ['type' => 'hidden']); ?>
      </div>
    </div>

  <div id="div_util_5" class="oculto">
    
    <div class="col-md-6">
    <label>Material para Biene de Joyas</label>
    <div class="checkbox">
      <?php 
$options = [
'Ágata' => 'Ágata',
'Cobre' => 'Cobre',
'Estaño' => 'Estaño',
'Peltre' => 'Peltre',
'Plata' => 'Plata',
'Rubí' => 'Rubí',
'Bronce' => 'Bronce',
'Esmeralda' => 'Esmeralda',
'Oro' => 'Oro',
'Perlas' => 'Perlas',
'Porcelana' => 'Porcelana',
'Otros' => 'Otros',
];
echo $this->Form->select('detalles[op_2_5][1][detalle]', $options, [
    'multiple' => 'checkbox'
]);
?>
<?php echo $this->Form->text('detalles[op_2_5][1][otros]', ['class' => 'form-control','placeholder' => 'Otros']);?>
<?php echo $this->Form->control('detalles[op_2_5][1][titulo]', ['type' => 'hidden','value' => 'Material para Biene de Joyas']); ?>
<?php echo $this->Form->control('detalles[op_2_5][1][id]', ['type' => 'hidden']); ?>


    </div>
  </div>
  <div class="col-md-6">
    <label>Técnica para Biene de Joyas</label>
    <div class="checkbox">
      <?php 
$options = [
'Filigrana' => 'Filigrana',
'Placa' => 'Placa',
'Soplado' => 'Soplado',
'Vaciado' => 'Vaciado',
'Laminado' => 'Laminado',
];
echo $this->Form->select('detalles[op_2_5][2][detalle]', $options, [
    'multiple' => 'checkbox'
]);
?>
<?php echo $this->Form->text('detalles[op_2_5][2][otros]', ['class' => 'form-control','placeholder' => 'Otros']);?>
<?php echo $this->Form->control('detalles[op_2_5][2][titulo]', ['type' => 'hidden','value' => 'Técnica para Biene de Joyas']); ?>
<?php echo $this->Form->control('detalles[op_2_5][2][id]', ['type' => 'hidden']); ?>

    </div>
  </div>
  </div>
</div>

<?php 
$this->Form->setTemplates(['checkboxWrapper' => '<label class="col-md-12">{{label}}</label>']);
?>
<div class="form-group divo row oculto" id="op_2_6" >
  <div class="col-md-4">
    <label>Material</label>
    <div class="checkbox">
      <?php 
$options = [
'Encaje' => 'Encaje',
'Gaza' => 'Gaza',
'Pita' => 'Pita',
'Seda' => 'Seda',
'Tela' => 'Tela',
'Otros' => 'Otros',
];
echo $this->Form->select('detalles[op_2_6][0][detalle]', $options, [
    'multiple' => 'checkbox'
]);
?>
<?php echo $this->Form->text('detalles[op_2_6][0][otros]', ['class' => 'form-control','placeholder' => 'Otros']);?>
<?php echo $this->Form->control('detalles[op_2_6][0][titulo]', ['type' => 'hidden','value' => 'Material']); ?>
<?php echo $this->Form->control('detalles[op_2_6][0][id]', ['type' => 'hidden']); ?>

    </div>
  </div>
  <?php 
$this->Form->setTemplates(['checkboxWrapper' => '<label class="col-md-4">{{label}}</label>']);
?>
  <div class="col-md-8">
    <label>Nombre generico</label>
    <div class="checkbox">
      <?php 
$options = [
'Calcetín' => 'Calcetín',
'Casaca' => 'Casaca',
'Coleta' => 'Coleta',
'Falda' => 'Falda',
'Sandalias' => 'Sandalias',
'Uniforme' => 'Uniforme',
'Camisa' => 'Camisa',
'Chalina' => 'Chalina',
'Corona' => 'Corona',
'Gorro' => 'Gorro',
'Sombrero' => 'Sombrero',
'Zapatos' => 'Zapatos',
'Capa' => 'Capa',
'Chaqueta' => 'Chaqueta',
'Corpiño' => 'Corpiño',
'Pantalón' => 'Pantalón',
'Túnicas' => 'Túnicas',
'Otros' => 'Otros',
];
echo $this->Form->select('detalles[op_2_6][1][detalle]', $options, [
    'multiple' => 'checkbox'
]);
?>
<?php echo $this->Form->text('detalles[op_2_6][1][otros]', ['class' => 'form-control','placeholder' => 'Otros']);?>
<?php echo $this->Form->control('detalles[op_2_6][1][titulo]', ['type' => 'hidden','value' => 'Técnica']); ?>
<?php echo $this->Form->control('detalles[op_2_6][1][id]', ['type' => 'hidden']); ?>


    </div>
  </div>
</div>
  <?php 
$this->Form->setTemplates(['checkboxWrapper' => '<label class="col-md-6">{{label}}</label>']);
?>
<div class="form-group divo row oculto" id="op_2_7" >
  <div class="col-md-6">
    <label>Material</label>
    <div class="checkbox">
      <?php 
$options = [
'Cuero' => 'Cuero',
'Metal' => 'Metal',
'Tela' => 'Tela',
'Madera' => 'Madera',
'Nácar' => 'Nácar',
'Otros' => 'Otros',
];
echo $this->Form->select('detalles[op_2_7][0][detalle]', $options, [
    'multiple' => 'checkbox'
]);
?>
<?php echo $this->Form->text('detalles[op_2_7][0][otros]', ['class' => 'form-control','placeholder' => 'Otros']);?>
<?php echo $this->Form->control('detalles[op_2_7][0][titulo]', ['type' => 'hidden','value' => 'Material']); ?>
<?php echo $this->Form->control('detalles[op_2_7][0][id]', ['type' => 'hidden']); ?>

    </div>
  </div>
  <div class="col-md-6">
    <label>Nombre generico</label>
    <div class="checkbox">
      <?php 
$options = [
'Armonio' => 'Armonio',
'Flauta' => 'Flauta',
'Marimba' => 'Marimba',
'Órgano' => 'Órgano',
'Tambor' => 'Tambor',
'Violín' => 'Violín',
'Acordeón' => 'Acordeón',
'Guitarra' => 'Guitarra',
'Matraca de difuntos' => 'Matraca de difuntos',
'Piano' => 'Piano',
'Trompeta' => 'Trompeta',
'Otros' => 'Otros',
];
echo $this->Form->select('detalles[op_2_7][1][detalle]', $options, [
    'multiple' => 'checkbox'
]);
?>
<?php echo $this->Form->text('detalles[op_2_7][1][otros]', ['class' => 'form-control','placeholder' => 'Otros']);?>
<?php echo $this->Form->control('detalles[op_2_7][1][titulo]', ['type' => 'hidden','value' => 'Técnica']); ?>
<?php echo $this->Form->control('detalles[op_2_7][1][id]', ['type' => 'hidden']); ?>

    </div>
  </div>
</div>
<?php 
$this->Form->setTemplates(['checkboxWrapper' => '<label class="col-md-12">{{label}}</label>']);
?>
<div class="form-group divo row oculto" id="op_2_8" >
  <div class="col-md-3">
    <label>Material</label>
    <div class="checkbox">
      <?php 
$options = [
'Metal' => 'Metal',
'Madera' => 'Madera',
'Cuero' => 'Cuero',
'Otros' => 'Otros',
];
echo $this->Form->select('detalles[op_2_8][0][detalle]', $options, [
    'multiple' => 'checkbox'
]);
?>
<?php echo $this->Form->text('detalles[op_2_8][0][otros]', ['class' => 'form-control','placeholder' => 'Otros']);?>
<?php echo $this->Form->control('detalles[op_2_8][0][titulo]', ['type' => 'hidden','value' => 'Material']); ?>
<?php echo $this->Form->control('detalles[op_2_8][0][id]', ['type' => 'hidden']); ?>

    </div>
  </div>
  <div class="col-md-3">
    <label>Clasificación</label>
    <div class="checkbox">
      <?php 
$options = [
'Artillería' => 'Artillería',
'Corto punzantes' => 'Corto punzantes',
'De fuego' => 'De fuego',
'Explosivos' => 'Explosivos',
'Proyectiles' => 'Proyectiles',
'Otros' => 'Otros',
];
echo $this->Form->select('detalles[op_2_8][1][detalle]', $options, [
    'multiple' => 'checkbox'
]);
?>
<?php echo $this->Form->text('detalles[op_2_8][1][otros]', ['class' => 'form-control','placeholder' => 'Otros']);?>
<?php echo $this->Form->control('detalles[op_2_8][1][titulo]', ['type' => 'hidden','value' => 'Clasificación']); ?>
<?php echo $this->Form->control('detalles[op_2_8][1][id]', ['type' => 'hidden']); ?>

    </div>
  </div>
  <?php 
$this->Form->setTemplates(['checkboxWrapper' => '<label class="col-md-6">{{label}}</label>']);
?>
  <div class="col-md-6">
    <label>Nombre generico</label>
    <div class="checkbox">
      <?php 
$options = [
'Alfanje' => 'Alfanje',
'Arcabuz' => 'Arcabuz',
'Bayoneta' => 'Bayoneta',
'Carabina' => 'Carabina',
'Daga' => 'Daga',
'Espada' => 'Espada',
'Florete' => 'Florete',
'Hacha' => 'Hacha',
'Lanza' => 'Lanza',
'Ametralladora' => 'Ametralladora',
'Ballesta' => 'Ballesta',
'Bazuca' => 'Bazuca',
'Cerbatana' => 'Cerbatana',
'Dardo' => 'Dardo',
'Fecha' => 'Fecha',
'Fusil' => 'Fusil',
'Honda' => 'Honda',
'Maza' => 'Maza',
'Otros' => 'Otros',
];
echo $this->Form->select('detalles[op_2_8][2][detalle]', $options, [
    'multiple' => 'checkbox'
]);
?>
<?php echo $this->Form->text('detalles[op_2_8][2][otros]', ['class' => 'form-control','placeholder' => 'Otros']);?>
<?php echo $this->Form->control('detalles[op_2_8][2][titulo]', ['type' => 'hidden','value' => 'Técnica']); ?>
<?php echo $this->Form->control('detalles[op_2_8][2][id]', ['type' => 'hidden']); ?>


    </div>
  </div>
</div>



<div class="form-group divo row oculto" id="op_2_9" >
  <div class="col-md-6">
    <label>Institucion</label>
    <div class="checkbox">
      <?php 
$options = [
'Academias' => 'Academias',
'De colegios' => 'De colegios',
'Entidades artísticas' => 'Entidades artísticas',
'Equipos deportivos' => 'Equipos deportivos',
'Sociedades' => 'Sociedades',
'Universidades' => 'Universidades',
'Asociaciones' => 'Asociaciones',
'Empresas' => 'Empresas',
'Entidades cívicas' => 'Entidades cívicas',
'Regimientos' => 'Regimientos',
'Tatallones' => 'Tatallones',
'Otros' => 'Otros',
];
echo $this->Form->select('detalles[op_2_9][0][detalle]', $options, [
    'multiple' => 'checkbox'
]);
?>
<?php echo $this->Form->text('detalles[op_2_9][0][otros]', ['class' => 'form-control','placeholder' => 'Otros']);?>
<?php echo $this->Form->control('detalles[op_2_9][0][titulo]', ['type' => 'hidden','value' => 'Persona encargada']); ?>
<?php echo $this->Form->control('detalles[op_2_9][0][id]', ['type' => 'hidden']); ?>

    </div>
  </div>
  <?php 
$this->Form->setTemplates(['checkboxWrapper' => '<label class="col-md-12">{{label}}</label>']);
?>
  <div class="col-md-3">
    <label>Forma</label>
    <div class="checkbox">
      <?php 
$options = [
'Collares' => 'Collares',
'Diplomas' => 'Diplomas',
'Insignias' => 'Insignias',
'Medallas' => 'Medallas',
'Ordenes de caballería' => 'Ordenes de caballería',
'Ordenes de la Banda' => 'Ordenes de la Banda',
'Ordenes militares' => 'Ordenes militares',
'Otros' => 'Otros',
];
echo $this->Form->select('detalles[op_2_9][1][detalle]', $options, [
    'multiple' => 'checkbox'
]);
?>
<?php echo $this->Form->text('detalles[op_2_9][1][otros]', ['class' => 'form-control','placeholder' => 'Otros']);?>
<?php echo $this->Form->control('detalles[op_2_9][1][titulo]', ['type' => 'hidden','value' => 'Forma']); ?>
<?php echo $this->Form->control('detalles[op_2_9][1][id]', ['type' => 'hidden']); ?>


    </div>
  </div>
  <div class="col-md-3">
    <label>Técnica</label>
    <div class="checkbox">
      <?php 
$options = [
'Con relieve' => 'Con relieve',
'Esmaltado' => 'Esmaltado',
'Modelado' => 'Modelado',
'Repujado' => 'Repujado',
'Pintado' => 'Pintado',
'Tallado' => 'Tallado',
'Vaciado' => 'Vaciado',
'Otros' => 'Otros',
];
echo $this->Form->select('detalles[op_2_9][2][detalle]', $options, [
    'multiple' => 'checkbox'
]);
?>
<?php echo $this->Form->text('detalles[op_2_9][2][otros]', ['class' => 'form-control','placeholder' => 'Otros']);?>
<?php echo $this->Form->control('detalles[op_2_9][2][titulo]', ['type' => 'hidden','value' => 'Técnica']); ?>
<?php echo $this->Form->control('detalles[op_2_9][2][id]', ['type' => 'hidden']); ?>


    </div>
  </div>
</div>


<div class="form-group divo row oculto" id="op_2_10" >
  <div class="col-md-12">
    <label>Material</label>
    <div class="checkbox">
      <?php 
$options = [
'Metal' => 'Metal',
'Tela' => 'Tela',
'Yeso' => 'Yeso',
'Otros' => 'Otros',
];
echo $this->Form->select('detalles[op_2_10][0][detalle]', $options, [
    'multiple' => 'checkbox'
]);
?>
<?php echo $this->Form->text('detalles[op_2_10][0][otros]', ['class' => 'form-control','placeholder' => 'Otros']);?>
<?php echo $this->Form->control('detalles[op_2_10][0][titulo]', ['type' => 'hidden','value' => 'Material']); ?>
<?php echo $this->Form->control('detalles[op_2_10][0][id]', ['type' => 'hidden']); ?>

    </div>
  </div>
</div>

<?php 
$this->Form->setTemplates(['checkboxWrapper' => '<label class="col-md-6">{{label}}</label>']);
?>
<div class="form-group divo row oculto" id="op_2_11" >
  <div class="col-md-12">
    <label>Material</label>
    <div class="checkbox">
<?php 
$options = [
'Madera' => 'Madera',
'Tela' => 'Tela',
'Metal' => 'Metal',
'Piedra' => 'Piedra',
'Yeso' => 'Yeso',
'Otros' => 'Otros',
];
echo $this->Form->select('detalles[op_2_11][0][detalle]', $options, [
    'multiple' => 'checkbox'
]);
?>
<?php echo $this->Form->text('detalles[op_2_11][0][otros]', ['class' => 'form-control','placeholder' => 'Otros']);?>
<?php echo $this->Form->control('detalles[op_2_11][0][titulo]', ['type' => 'hidden','value' => 'Material']); ?>
<?php echo $this->Form->control('detalles[op_2_11][0][id]', ['type' => 'hidden']); ?>

    </div>
  </div>
</div>

<?php 
$this->Form->setTemplates(['checkboxWrapper' => '<label class="col-md-3">{{label}}</label>']);
?>
<div class="form-group divo divo_2 row oculto" id="op_2_12_4" >
  <div class="col-md-12">
    <div class="checkbox">
      <?php 
$options = [
'Flexómetros' => 'Flexómetros',
'Bascular ' => 'Bascular ',
'Manómetros' => 'Manómetros',
'Balanzas' => 'Balanzas',
'Astrolabios' => 'Astrolabios',
'Cronómetros' => 'Cronómetros',
'Otros' => 'Otros',
];
echo $this->Form->select('detalles[op_2_12_4][0][detalle]', $options, [
    'multiple' => 'checkbox'
]);
?>
<?php echo $this->Form->text('detalles[op_2_12_4][0][otros]', ['class' => 'form-control','placeholder' => 'Otros']);?>
<?php echo $this->Form->control('detalles[op_2_12_4][0][titulo]', ['type' => 'hidden','value' => '']); ?>
<?php echo $this->Form->control('detalles[op_2_12_4][0][id]', ['type' => 'hidden']); ?>

    </div>
  </div>
</div>
<div class="form-group divo divo_2 row oculto" id="op_2_12_5" >
  <div class="col-md-12">
    <div class="checkbox">
      <?php 
$options = [
'Canastillo' => 'Canastillo',
'Lápices' => 'Lápices',
'Casillero' => 'Casillero',
'Pisa papel' => 'Pisa papel',
'Esferos' => 'Esferos',
'Plumas' => 'Plumas',
'Juegos de escritorio' => 'Juegos de escritorio',
'Otros' => 'Otros',
];
echo $this->Form->select('detalles[op_2_12_5][0][detalle]', $options, [
    'multiple' => 'checkbox'
]);
?>
<?php echo $this->Form->text('detalles[op_2_12_5][0][otros]', ['class' => 'form-control','placeholder' => 'Otros']);?>
<?php echo $this->Form->control('detalles[op_2_12_5][0][titulo]', ['type' => 'hidden','value' => '']); ?>
<?php echo $this->Form->control('detalles[op_2_12_5][0][id]', ['type' => 'hidden']); ?>


    </div>
  </div>
</div>
<div class="form-group divo divo_2 row oculto" id="op_2_12_6" >
  <div class="col-md-6">
    <label>Material</label>
    <div class="checkbox">
      <?php 
$options = [
'Martillos' => 'Martillos',
'Cinceles' => 'Cinceles',
'Otros' => 'Otros',
];
echo $this->Form->select('detalles[op_2_12_6][0][detalle]', $options, [
    'multiple' => 'checkbox'
]);
?>
<?php echo $this->Form->text('detalles[op_2_12_6][0][otros]', ['class' => 'form-control','placeholder' => 'Otros']);?>
<?php echo $this->Form->control('detalles[op_2_12_6][0][titulo]', ['type' => 'hidden','value' => 'Material']); ?>
<?php echo $this->Form->control('detalles[op_2_12_6][0][id]', ['type' => 'hidden']); ?>

    </div>
  </div>
  <div class="col-md-6">
    <label>Técnica</label>
    <div class="checkbox">
      <?php 
$options = [
'Madera' => 'Madera',
'Metal' => 'Metal',
'Otros' => 'Otros',
];
echo $this->Form->select('detalles[op_2_12_6][1][detalle]', $options, [
    'multiple' => 'checkbox'
]);
?>
<?php echo $this->Form->text('detalles[op_2_12_6][1][otros]', ['class' => 'form-control','placeholder' => 'Otros']);?>
<?php echo $this->Form->control('detalles[op_2_12_6][1][titulo]', ['type' => 'hidden','value' => 'Técnica']); ?>
<?php echo $this->Form->control('detalles[op_2_12_6][1][id]', ['type' => 'hidden']); ?>

    </div>
  </div>
</div>
<div class="form-group divo divo_2 row oculto" id="op_2_12_7" >
  <div class="col-md-12">
    <div class="checkbox">
<?php 
$options = [
'Cuchillos, espada,sable' => 'Cuchillos, espada,sable',
'Hachas' => 'Hachas',
'Otros' => 'Otros',
];
echo $this->Form->select('detalles[op_2_12_7][0][detalle]', $options, [
    'multiple' => 'checkbox'
]);
?>
<?php echo $this->Form->text('detalles[op_2_12_7][0][otros]', ['class' => 'form-control','placeholder' => 'Otros']);?>
<?php echo $this->Form->control('detalles[op_2_12_7][0][titulo]', ['type' => 'hidden','value' => '']); ?>
<?php echo $this->Form->control('detalles[op_2_12_7][0][id]', ['type' => 'hidden']); ?>

    </div>
  </div>
</div>
<div class="form-group divo divo_2 row oculto" id="op_2_12_8" >
  <div class="col-md-12">
    <div class="checkbox">
      <?php 
$options = [
'Alicates' => 'Alicates',
'Tenazas' => 'Tenazas',
'Tijeras corta pabilo' => 'Tijeras corta pabilo',
'Otros' => 'Otros',
];
echo $this->Form->select('detalles[op_2_12_8][0][detalle]', $options, [
    'multiple' => 'checkbox'
]);
?>
<?php echo $this->Form->text('detalles[op_2_12_8][0][otros]', ['class' => 'form-control','placeholder' => 'Otros']);?>
<?php echo $this->Form->control('detalles[op_2_12_8][0][titulo]', ['type' => 'hidden','value' => '']); ?>
<?php echo $this->Form->control('detalles[op_2_12_8][0][id]', ['type' => 'hidden']); ?>

    </div>
  </div>
</div>
<div class="form-group divo divo_2 row oculto" id="op_2_12_9" >
  <div class="col-md-12">
    <div class="checkbox">
<?php 
$options = [
'Destornilladores' => 'Destornilladores',
'Llaves' => 'Llaves',
'Otros' => 'Otros',
];
echo $this->Form->select('detalles[op_2_12_9][0][detalle]', $options, [
    'multiple' => 'checkbox'
]);
?>
<?php echo $this->Form->text('detalles[op_2_12_9][0][otros]', ['class' => 'form-control','placeholder' => 'Otros']);?>
<?php echo $this->Form->control('detalles[op_2_12_9][0][titulo]', ['type' => 'hidden','value' => '']); ?>
<?php echo $this->Form->control('detalles[op_2_12_9][0][id]', ['type' => 'hidden']); ?>


    </div>
  </div>
</div>
<div class="form-group divo divo_2 row oculto" id="op_2_12_10" >
  <div class="col-md-12">
    <div class="checkbox">
<?php 
$options = [
'Cosedoras' => 'Cosedoras',
'Martillos' => 'Martillos',
'Perforadoras' => 'Perforadoras',
'Otros' => 'Otros',
];
echo $this->Form->select('detalles[op_2_12_10][0][detalle]', $options, [
    'multiple' => 'checkbox'
]);
?>
<?php echo $this->Form->text('detalles[op_2_12_10][0][otros]', ['class' => 'form-control','placeholder' => 'Otros']);?>
<?php echo $this->Form->control('detalles[op_2_12_10][0][titulo]', ['type' => 'hidden','value' => '']); ?>
<?php echo $this->Form->control('detalles[op_2_12_10][0][id]', ['type' => 'hidden']); ?>

    </div>
  </div>
</div>
<div class="form-group divo divo_2 row oculto" id="op_2_12_11" >
  <div class="col-md-12">
    <div class="checkbox">
      <?php 
$options = [
'Amoladora' => 'Amoladora',
'Lijadora' => 'Lijadora',
'Caladora' => 'Caladora',
'Sierra' => 'Sierra',
'Cepillo' => 'Cepillo',
'Taladros' => 'Taladros',
'Fresadora' => 'Fresadora',
'Otros' => 'Otros',
];
echo $this->Form->select('detalles[op_2_12_11][0][detalle]', $options, [
    'multiple' => 'checkbox'
]);
?>
<?php echo $this->Form->text('detalles[op_2_12_11][0][otros]', ['class' => 'form-control','placeholder' => 'Otros']);?>
<?php echo $this->Form->control('detalles[op_2_12_11][0][titulo]', ['type' => 'hidden','value' => '']); ?>
<?php echo $this->Form->control('detalles[op_2_12_11][0][id]', ['type' => 'hidden']); ?>

    </div>
  </div>
</div>
<div class="form-group divo divo_2 row oculto" id="op_2_12_12" >
  <div class="col-md-12">
    <div class="checkbox">
      <?php 
$options = [
'Digractómetros' => 'Digractómetros',
'Radiología' => 'Radiología',
'Maquina de coser' => 'Maquina de coser',
'Microscopia eléctrico' => 'Microscopia eléctrico',
'Podadora' => 'Podadora',
'Otros' => 'Otros',
];
echo $this->Form->select('detalles[op_2_12_12][0][detalle]', $options, [
    'multiple' => 'checkbox'
]);
?>
<?php echo $this->Form->text('detalles[op_2_12_12][0][otros]', ['class' => 'form-control','placeholder' => 'Otros']);?>
<?php echo $this->Form->control('detalles[op_2_12_12][0][titulo]', ['type' => 'hidden','value' => '']); ?>
<?php echo $this->Form->control('detalles[op_2_12_12][0][id]', ['type' => 'hidden']); ?>


    </div>
  </div>
</div>

<div class="form-group divo row oculto" id="op_2_14" >
  <div class="col-md-12">
    <label>Nombre generico</label>
    <div class="checkbox">
      <?php 
$options = [
'Aldaba' => 'Aldaba',
'Bisagra' => 'Bisagra',
'Corona' => 'Corona',
'Llamadores' => 'Llamadores',
'Pasador' => 'Pasador',
'Resplandor' => 'Resplandor',
'Vestido' => 'Vestido',
'Arco peraltado' => 'Arco peraltado',
'Bulas' => 'Bulas',
'En imágenes o esculturas' => 'En imágenes o esculturas',
'Marco sin obra' => 'Marco sin obra',
'Potencia de 3 piezas' => 'Potencia de 3 piezas',
'Resplandor de cuerpo entero' => 'Resplandor de cuerpo entero',
'Atributo' => 'Atributo',
'Candado' => 'Candado',
'Estoperol' => 'Estoperol',
'Maya' => 'Maya',
'Puertas ' => 'Puertas ',
'Tiara con ínfulas' => 'Tiara con ínfulas',
'Aureola' => 'Aureola',
'Cerradura' => 'Cerradura',
'Goznes' => 'Goznes',
'Mitra' => 'Mitra',
'Rejas' => 'Rejas',
'Ventanas' => 'Ventanas',
'Otros' => 'Otros',
];
echo $this->Form->select('detalles[op_2_14][0][detalle]', $options, [
    'multiple' => 'checkbox'
]);
?>
<?php echo $this->Form->text('detalles[op_2_14][0][otros]', ['class' => 'form-control','placeholder' => 'Otros']);?>
<?php echo $this->Form->control('detalles[op_2_14][0][titulo]', ['type' => 'hidden','value' => '']); ?>
<?php echo $this->Form->control('detalles[op_2_14][0][id]', ['type' => 'hidden']); ?>

    </div>
  </div>
</div>

<div class="form-group divo row oculto" id="op_2_15" >
  <div class="col-md-12">
    <div class="checkbox">
      <?php 
$options = [
'Campanas' => 'Campanas',
'Pilas bautismales' => 'Pilas bautismales',
'Otros' => 'Otros',
];
echo $this->Form->select('detalles[op_2_15][0][detalle]', $options, [
    'multiple' => 'checkbox'
]);
?>
<?php echo $this->Form->text('detalles[op_2_15][0][otros]', ['class' => 'form-control','placeholder' => 'Otros']);?>
<?php echo $this->Form->control('detalles[op_2_15][0][titulo]', ['type' => 'hidden','value' => '']); ?>
<?php echo $this->Form->control('detalles[op_2_15][0][id]', ['type' => 'hidden']); ?>


    </div>
  </div>
</div>

<div class="form-group divo row oculto" id="op_2_16" >
  <div class="col-md-12">
    <label>Elementos</label>
    <div class="checkbox">
      <?php 
$options = [
'Coro' => 'Coro',
'Puerta' => 'Puerta',
'Muros' => 'Muros',
'Reja' => 'Reja',
'Columna ' => 'Columna ',
'Pila de agua' => 'Pila de agua',
'Cancela' => 'Cancela',
'Ventana' => 'Ventana',
'Arcos de plata/madera' => 'Arcos de plata/madera',
'Reloj de campanario o fachada' => 'Reloj de campanario o fachada',
'Friso' => 'Friso',
'Pozo' => 'Pozo',
'Portada' => 'Portada',
'Artesonado' => 'Artesonado',
'Camarín de madera' => 'Camarín de madera',
'Fuente' => 'Fuente',
'Florón' => 'Florón',
'Placas conmemorativas' => 'Placas conmemorativas',
'Portal' => 'Portal',
'Revestimiento de zócalo' => 'Revestimiento de zócalo',
'Baranda' => 'Baranda',
'Veleta' => 'Veleta',
'Rosetón' => 'Rosetón',
'Otros' => 'Otros',
];
echo $this->Form->select('detalles[op_2_16][0][detalle]', $options, [
    'multiple' => 'checkbox'
]);
?>
<?php echo $this->Form->text('detalles[op_2_16][0][otros]', ['class' => 'form-control','placeholder' => 'Otros']);?>
<?php echo $this->Form->control('detalles[op_2_16][0][titulo]', ['type' => 'hidden','value' => 'Elementos']); ?>
<?php echo $this->Form->control('detalles[op_2_16][0][id]', ['type' => 'hidden']); ?>

    </div>
  </div>
  <?php 
$this->Form->setTemplates(['checkboxWrapper' => '<label class="col-md-4">{{label}}</label>']);
?>
  <div class="col-md-8">
    <label>Material</label>
    <div class="checkbox">
      <?php 
$options = [
'Metal' => 'Metal',
'Piedra granito' => 'Piedra granito',
'Berenguela' => 'Berenguela',
'Madera' => 'Madera',
'Mármol' => 'Mármol',
'Hierro' => 'Hierro',
'Basalto' => 'Basalto',
'Otros' => 'Otros',
];
echo $this->Form->select('detalles[op_2_16][1][detalle]', $options, [
    'multiple' => 'checkbox'
]);
?>
<?php echo $this->Form->text('detalles[op_2_16][1][otros]', ['class' => 'form-control','placeholder' => 'Otros']);?>
<?php echo $this->Form->control('detalles[op_2_16][1][titulo]', ['type' => 'hidden','value' => 'Material']); ?>
<?php echo $this->Form->control('detalles[op_2_16][1][id]', ['type' => 'hidden']); ?>


    </div>
  </div>
  <?php 
$this->Form->setTemplates(['checkboxWrapper' => '<label class="col-md-12">{{label}}</label>']);
?>
  <div class="col-md-4">
    <label>Técnica</label>
    <div class="checkbox">
      <?php 
$options = [
'Alto relieve' => 'Alto relieve',
'Bajo relieve' => 'Bajo relieve',
'Otros' => 'Otros',
];
echo $this->Form->select('detalles[op_2_16][2][detalle]', $options, [
    'multiple' => 'checkbox'
]);
?>
<?php echo $this->Form->text('detalles[op_2_16][2][otros]', ['class' => 'form-control','placeholder' => 'Otros']);?>
<?php echo $this->Form->control('detalles[op_2_16][2][titulo]', ['type' => 'hidden','value' => 'Técnica']); ?>
<?php echo $this->Form->control('detalles[op_2_16][2][id]', ['type' => 'hidden']); ?>

    </div>
  </div>
</div>



<?php 
$this->Form->setTemplates(['checkboxWrapper' => '<label class="col-md-3">{{label}}</label>']);
?>
<div id="div_uso_fune" class="oculto">
<h4>Uso funeraria</h4>
<div class="form-group row">
  <div class="col-md-8">
    <label>Tipo de uso funerario</label>
    <div class="checkbox">
      <?php 
$options = [
'Cajones' => 'Cajones',
'Lapidas' => 'Lapidas',
'Urna' => 'Urna',
'Cenotafio ' => 'Cenotafio ',
'Esculturas' => 'Esculturas',
'Sepulcros' => 'Sepulcros',
'Túmulos' => 'Túmulos',
'Nichos con vidrio' => 'Nichos con vidrio',
'Otros' => 'Otros',
];
echo $this->Form->select('uso_tipo_uso_fun', $options, [
    'multiple' => 'checkbox'
]);
?>
<?php echo $this->Form->text('uso_tipo_uso_otros', ['class' => 'form-control','placeholder' => 'Otros']);?>
    </div>
  </div>
  <div class="col-md-4">
    <label>Fúnebres</label>
    <?php 
$opciones = [
'' => '',
'Sabana santa' => 'Sabana santa',
'Ropón' => 'Ropón',
'Otros' => 'Otros',
];                
echo $this->Form->select('uso_funebres', $opciones, ['class' => 'form-control']);?><br>
<?php echo $this->Form->text('uso_funebres_otros', ['class' => 'form-control','placeholder' => 'Otros']);?> 
  </div>
</div>
<label>Medidas de la pieza (cm y gr)</label>
<div class="form-group row">
  <div class="col-md-6">
    <label>Profundidad</label>
    <?php echo $this->Form->text('uso_profundidad', ['class' => 'form-control']);?>
  </div>
  <div class="col-md-6">
    <label>Circunferencia</label>
    <?php echo $this->Form->text('uso_circunferencia', ['class' => 'form-control']);?>
  </div>
</div>
<div class="form-group row">
  <div class="col-md-2">
    <label>Alto</label>
    <?php echo $this->Form->text('uso_alto', ['class' => 'form-control']);?>
  </div>
  <div class="col-md-2">
    <label>Ancho</label>
    <?php echo $this->Form->text('uso_ancho', ['class' => 'form-control']);?>
  </div>
  <div class="col-md-2">
    <label>Grosor</label>
    <?php echo $this->Form->text('uso_grosor', ['class' => 'form-control']);?>
  </div>
  <div class="col-md-2">
    <label>Diámetro</label>
    <?php echo $this->Form->text('uso_diametro', ['class' => 'form-control']);?>
  </div>
  <div class="col-md-2">
    <label>Peso</label>
    <?php echo $this->Form->text('uso_peso', ['class' => 'form-control']);?>
  </div>
</div>
<?php 
$this->Form->setTemplates(['radioWrapper' => '<label class="col-md-3">{{label}}</label>']);
?>
<div class="form-group row">
  <div class="col-md-12">
    <label>Nivel de integridad</label>
    <div class="radio">
      <?php 
      $opciones = [
'75%' => '75%',
'50%' => '50%',
'25%' => '25%',
'Menos 10%' => 'Menos 10%',
      ];
echo $this->Form->radio('uso_nivel_integridad', $opciones);
      ?>

    </div>
    <div class="radio oculto" id="inte-fragmentos">
      <?php 
      $opciones = [
'1 - 5 Fragmentos' => '1 - 5 Fragmentos',
'6 - 10 Fragmentos' => '6 - 10 Fragmentos',
'10 - x Fragmentos' => '10 - x Fragmentos',
      ];
echo $this->Form->radio('uso_nivel_integridad_2', $opciones);
      ?>

    </div>
  </div>
</div>
<?php 
$this->Form->setTemplates(['radioWrapper' => '<label class="col-md-6">{{label}}</label>']);
?>
<div class="form-group row">
	<div class="col-md-6">
		<label>Intervenciones</label>
		<div class="radio">
      <?php 
      $opciones = [
'Intervenido' => 'Intervenido',
'Sin intervencion' => 'Sin intervencion',
      ];
echo $this->Form->radio('uso_intervencion', $opciones);
      ?>
		</div>
	</div>

	<div class="col-md-6">
		<label>Características Iconográficas/ornamentales</label>
    <?php echo $this->Form->text('uso_caract_icon', ['class' => 'form-control']);?>
	</div>
</div>
</div>


              </div>
          </div>
	</div>
</div>



<div class="row">
	<div class="col-md-12">
		<div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">5.  INFORMACIÓN GRÁFICA/DOCUMENTAL </h3>
            </div>

              <div class="box-body">

                <div class="row">
                	<div class="col-md-3">
                		<div class="form-group">
                			<label>Foto 1</label>
                      <?php 
                      $foto_1 = "";
                      $f_oculto = "oculto";
                      if(!empty($d_bienes->info_foto_1)){
                      $imageFileType = strtolower(pathinfo($d_bienes->info_foto_1,PATHINFO_EXTENSION));
                        $foto_1 =  $this->request->getAttribute('webroot').'uploads/bie_mue_foto1_'.$d_bienes->id.".".$imageFileType;
                        $f_oculto = "";
                        ; 
                    }
                      ?>
                      <div style="height: 200px; width: 100%; background: black;">
                        <img id="imgfoto1" class="<?php echo $f_oculto ?>" src="<?php echo $foto_1?>" alt="your image" style="max-height: 200px; max-width: 100%" />
                      </div>
                			<input type="file" name="file1" data-laimg="imgfoto1" class="cfile">
                		</div>
                		<div class="form-group">
                			<label>Ubicacion</label>
                			<?php echo $this->Form->text('info_ubicacion_1', ['class' => 'form-control']);?>
                		</div>
                		<div class="form-group">
                			<label>Fecha</label>
                      <?php echo $this->Form->date('info_fecha_1', ['class' => 'form-control','minYear' => 1800]);?>
                		</div>
                		<div class="form-group">
                			<label>Autor</label>
                      <?php echo $this->Form->text('info_autor_1', ['class' => 'form-control']);?>
                		</div>
                	</div>
                	<div class="col-md-3">
                		<div class="form-group">
                			<label>Foto 2</label>
                      <?php 
                      $foto_2 = "";
                      $f_oculto = "oculto";
                      if(!empty($d_bienes->info_foto_2)){
                      $imageFileType = strtolower(pathinfo($d_bienes->info_foto_2,PATHINFO_EXTENSION));
                        $foto_2 =  $this->request->getAttribute('webroot').'uploads/bie_mue_foto2_'.$d_bienes->id.".".$imageFileType;
                        $f_oculto = "";
                        ; 
                    }
                      ?>
                			<div style="height: 200px; width: 100%; background: black;">
                        <img id="imgfoto2" class="<?php echo $f_oculto ?>" src="<?php echo $foto_2?>" alt="your image" style="max-height: 200px; max-width: 100%" />
                      </div>
                      <input type="file" name="file2" data-laimg="imgfoto2" class="cfile">
                		</div>
                		<div class="form-group">
                			<label>Ubicacion</label>
                			<?php echo $this->Form->text('info_ubicacion_2', ['class' => 'form-control']);?>
                		</div>
                		<div class="form-group">
                			<label>Fecha</label>
                			<?php echo $this->Form->date('info_fecha_2', ['class' => 'form-control','minYear' => 1800]);?>
                		</div>
                		<div class="form-group">
                			<label>Autor</label>
                			<?php echo $this->Form->text('info_autor_2', ['class' => 'form-control']);?>
                		</div>
                	</div>
                	<div class="col-md-3">
                		<div class="form-group">
                			<label>Foto 3</label>
                      <?php 
                      $foto_3 = "";
                      $f_oculto = "oculto";
                      if(!empty($d_bienes->info_foto_3)){
                      $imageFileType = strtolower(pathinfo($d_bienes->info_foto_3,PATHINFO_EXTENSION));
                        $foto_3 =  $this->request->getAttribute('webroot').'uploads/bie_mue_foto3_'.$d_bienes->id.".".$imageFileType;
                        $f_oculto = "";
                        ; 
                    }
                      ?>
                			<div style="height: 200px; width: 100%; background: black;">
                        <img id="imgfoto3" class="<?php echo $f_oculto ?>" src="<?php echo $foto_3?>" alt="your image" style="max-height: 200px; max-width: 100% " />
                      </div>
                      <input type="file" name="file3" data-laimg="imgfoto3" class="cfile">
                		</div>
                		<div class="form-group">
                			<label>Ubicacion</label>
                			<?php echo $this->Form->text('info_ubicacion_3', ['class' => 'form-control']);?>
                		</div>
                		<div class="form-group">
                			<label>Fecha</label>
                			<?php echo $this->Form->date('info_fecha_3', ['class' => 'form-control','minYear' => 1800]);?>
                		</div>
                		<div class="form-group">
                			<label>Autor</label>
                			<?php echo $this->Form->text('info_autor_3', ['class' => 'form-control']);?>
                		</div>
                	</div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label>Foto 4</label>
                      <?php 
                      $foto_4 = "";
                      $f_oculto = "oculto";
                      if(!empty($d_bienes->info_foto_4)){
                      $imageFileType = strtolower(pathinfo($d_bienes->info_foto_4,PATHINFO_EXTENSION));
                        $foto_4 =  $this->request->getAttribute('webroot').'uploads/bie_mue_foto4_'.$d_bienes->id.".".$imageFileType;
                        $f_oculto = "";
                        ; 
                    }
                      ?>
                      <div style="height: 200px; width: 100%; background: black;">
                        <img id="imgfoto4" class="<?php echo $f_oculto ?>" src="<?php echo $foto_4?>" alt="your image" style="max-height: 200px; max-width: 100% " />
                      </div>
                      <input type="file" name="file4" data-laimg="imgfoto4" class="cfile">
                    </div>
                    <div class="form-group">
                      <label>Ubicacion</label>
                      <?php echo $this->Form->text('info_ubicacion_4', ['class' => 'form-control']);?>
                    </div>
                    <div class="form-group">
                      <label>Fecha</label>
                      <?php echo $this->Form->date('info_fecha_4', ['class' => 'form-control','minYear' => 1800]);?>
                    </div>
                    <div class="form-group">
                      <label>Autor</label>
                      <?php echo $this->Form->text('info_autor_4', ['class' => 'form-control']);?>
                    </div>
                  </div>
            	</div>

              <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Video 1</label><br>
                      <?php 
                      $video_1 = "";
                      if(!empty($d_bienes->info_video_1)){
                      $imageFileType = strtolower(pathinfo($d_bienes->info_video_1,PATHINFO_EXTENSION));
                        $video_1 =  $this->request->getAttribute('webroot').'uploads/bie_mue_video1_'.$d_bienes->id.".".$imageFileType;
   
                        ; 
                    }
                      ?>
                      <video width="400" controls>
                        <source src="<?php echo $video_1 ?>" id="video_here">
                          Your browser does not support HTML5 video.
                      </video>

                      <input type="file" name="video1" class="file_multi_video" accept="video/*">
                    </div>
                    <div class="form-group">
                      <label>Ubicacion</label>
                      <?php echo $this->Form->text('info_vubicacion_1', ['class' => 'form-control']);?>
                    </div>
                    <div class="form-group">
                      <label>Fecha</label>
                      <?php echo $this->Form->date('info_vfecha_1', ['class' => 'form-control','minYear' => 1800]);?>
                    </div>
                    <div class="form-group">
                      <label>Autor</label>
                      <?php echo $this->Form->text('info_vautor_1', ['class' => 'form-control']);?>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Video 2</label><br>
                      <?php 
                      $video_2 = "";
                      if(!empty($d_bienes->info_video_2)){
                      $imageFileType = strtolower(pathinfo($d_bienes->info_video_2,PATHINFO_EXTENSION));
                        $video_2 =  $this->request->getAttribute('webroot').'uploads/bie_mue_video2_'.$d_bienes->id.".".$imageFileType;
   
                        ; 
                    }
                      ?>
                      <video width="400" controls>
                        <source src="<?php echo $video_2 ?>" id="video_here2">
                          Your browser does not support HTML5 video.
                      </video>
                      <input type="file" name="video2" class="file_multi_video2" accept="video/*">
      
                    </div>
                    <div class="form-group">
                      <label>Ubicacion</label>
                      <?php echo $this->Form->text('info_vubicacion_2', ['class' => 'form-control']);?>
                    </div>
                    <div class="form-group">
                      <label>Fecha</label>
                      <?php echo $this->Form->date('info_vfecha_2', ['class' => 'form-control','minYear' => 1800]);?>
                    </div>
                    <div class="form-group">
                      <label>Autor</label>
                      <?php echo $this->Form->text('info_vautor_2', ['class' => 'form-control']);?>
                    </div>
                  </div>
              </div>

              </div>

          </div>
	</div>
</div>



<div class="row">
  <div class="col-md-12">
    <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">7. DATOS DE CONTROL</h3>
            </div>

        <div class="box-body">
              <!-- <div class="form-group row">
                  <div class="col-md-12">
                      <label for="exampleInputEmail1">Entidad Investigadora</label>
                      <input type="text" class="form-control" >
                  </div>
              </div>

              <div class="row">
                <div class="col-md-4">
                  <label style="color: blue;">Registrado Por:</label>
                  <div class="form-group">
                    <label>Nombre</label>
                    <input type="text" name="" class="form-control">
                  </div>
                  <div class="form-group">
                    <label>Fecha</label>
                    <input type="date" name="" class="form-control">
                  </div>
                </div>
                <div class="col-md-4">
                  <label style="color: blue;">Revisado Por:</label>
                  <div class="form-group">
                    <label>Nombre</label>
                    <input type="text" name="" class="form-control">
                  </div>
                  <div class="form-group">
                    <label>Fecha</label>
                    <input type="date" name="" class="form-control">
                  </div>
                </div>
                <div class="col-md-4">
                  <label style="color: blue;">Aprobado Por:</label>
                  <div class="form-group">
                    <label>Nombre</label>
                    <input type="text" name="" class="form-control">
                  </div>
                  <div class="form-group">
                    <label>Fecha</label>
                    <input type="date" name="" class="form-control">
                  </div>
                </div>
              </div> -->

              <h4>Cambia la historia</h4>

              <div class="row">
                <div class="col-md-4">
                  <label style="color: blue;">Registrado Por:</label>
                  <div class="form-group">
                    <label>Nombre</label>
                    <?php echo $this->Form->text('dat_reg_nom_1', ['class' => 'form-control']);?>
                  </div>
                  <div class="form-group">
                    <label>Fecha</label>
                    <?php echo $this->Form->date('dat_reg_fech_1', ['class' => 'form-control','minYear' => 1800]);?>
                  </div>
                </div>
                <div class="col-md-4">
                  <label style="color: blue;">Revisado Por:</label>
                  <div class="form-group">
                    <label>Nombre</label>
                    <?php echo $this->Form->text('dat_rev_nom_1', ['class' => 'form-control']);?>
                  </div>
                  <div class="form-group">
                    <label>Fecha</label>
                    <?php echo $this->Form->date('dat_rev_fech_1', ['class' => 'form-control','minYear' => 1800]);?>
                  </div>
                </div>
                <div class="col-md-4">
                  <label style="color: blue;">Aprobado Por:</label>
                  <div class="form-group">
                    <label>Nombre</label>
                    <?php echo $this->Form->text('dat_apro_nom_1', ['class' => 'form-control']);?>
                  </div>
                  <div class="form-group">
                    <label>Fecha</label>
                    <?php echo $this->Form->date('dat_apro_fech_1', ['class' => 'form-control','minYear' => 1800]);?>
                  </div>
                </div>
              </div>


              <div class="row">
                <div class="col-md-4">
                  <label style="color: blue;">Registrado Por:</label>
                  <div class="form-group">
                    <label>Nombre</label>
                    <?php echo $this->Form->text('dat_reg_nom_2', ['class' => 'form-control']);?>
                  </div>
                  <div class="form-group">
                    <label>Fecha</label>
                    <?php echo $this->Form->date('dat_reg_fech_2', ['class' => 'form-control','minYear' => 1800]);?>
                  </div>
                </div>
                <div class="col-md-4">
                  <label style="color: blue;">Revisado Por:</label>
                  <div class="form-group">
                    <label>Nombre</label>
                    <?php echo $this->Form->text('dat_rev_nom_2', ['class' => 'form-control']);?>
                  </div>
                  <div class="form-group">
                    <label>Fecha</label>
                    <?php echo $this->Form->date('dat_rev_fech_2', ['class' => 'form-control','minYear' => 1800]);?>
                  </div>
                </div>
                <div class="col-md-4">
                  <label style="color: blue;">Aprobado Por:</label>
                  <div class="form-group">
                    <label>Nombre</label>
                    <?php echo $this->Form->text('dat_apro_nom_2', ['class' => 'form-control']);?>
                  </div>
                  <div class="form-group">
                    <label>Fecha</label>
                    <?php echo $this->Form->date('dat_apro_fech_2', ['class' => 'form-control','minYear' => 1800]);?>
                  </div>
                </div>
              </div>


              </div>

          </div>
  </div>
</div>
<?php echo $this->Form->control('imprimirm', ['type' => 'hidden' ,'id' => 'imprimirm','value' => 0]); ?>
<div class="row">
  <div class="col-md-6">
    <button class="btn btn-success btn-block" type="submit">GUARDAR</button>
  </div>
  <div class="col-md-6">
    <?php if(!empty($d_bienes->id)):?>
    <!-- <a class="btn btn-primary btn-block" href="<?php echo $this->Url->build([
    'controller' => 'Paginas',
    'action' => 'impresion',
    $d_bienes->id_reg_patrimonio
]);?>">IMPRIMIR</a> -->
    <?php endif;?>
    <button class="btn btn-primary btn-block" onclick="$('#imprimirm').val(1);" type="submit">GUARDAR E IMPRIMIR</button>
  </div>
</div>
<?php echo $this->Form->end(); ?>
    </section>

<?php $this->start('campo_js') ?>
    <script type="text/javascript">

      /*function marc_forma_ingre(){
        if($('input[name="marc_forma_ing[]"][value="Tipo de documento de entrega"]').prop('checked')){
          $('#iddiv-tipo-doc').show();
        }else{
          $('#iddiv-tipo-doc').hide();
        }
      }
    	$('input[name="marc_forma_ing[]"]').on('click',function(){
    		marc_forma_ingre();
    	});
      marc_forma_ingre();*/

      function categoria_4(){
        $('#categoria_4_2_2_2').hide().prop("disabled", true);
        $('#categoria_4_2_2_12').hide().prop("disabled", true);
        $('#categoria_4_2_2_13').hide().prop("disabled", true);

        $('#categoria_4_1').hide().prop("disabled", true);
        $('#categoria_4_2').hide().prop("disabled", true);
        $('#categoria_4_3').hide().prop("disabled", true);
        
        /*if($('#categoria_4').val() == "Bienes muebles arqueológicos"){
          $('#categoria_4_1').show();
        }*/
        if($('#categoria_4').val() == "Bienes muebles histórico-artiticos"){
          $('#categoria_4_2').show().prop("disabled", false);
        }
        /*if($('#categoria_4').val() == "Monumentos en espacio publico"){
          $('#categoria_4_3').show();
        }*/
      }

    	$('#categoria_4').on('change',function(){
        categoria_4();
        $('#categoria_4_2').val("");
        categoria_4_2();
    	});



      function categoria_4_2(){
        $('#div_uso_fune').hide();
        $('#categoria_4_2_1').hide().prop("disabled", true);
        $('#categoria_4_2_2').hide().prop("disabled", true);
        $('#categoria_4_2_3').hide().prop("disabled", true);
        $('#categoria_4_2_2_2').hide().prop("disabled", true);
        $('#categoria_4_2_2_12').hide().prop("disabled", true);
        $('#categoria_4_2_2_13').hide().prop("disabled", true);
        if($('#categoria_4_2').val() == "Artístico"){
          $('#categoria_4_2_1').show().prop("disabled", false);
        }
        if($('#categoria_4_2').val() == "Utilitario"){
          $('#categoria_4_2_2').show().prop("disabled", false);

        }
        if($('#categoria_4_2').val() == "Uso funerario"){
          // $('#categoria_4_2_3').show().prop("disabled", false);
          $('#div_uso_fune').show();
        }
        $('.divo').hide();
        categoria_4_2_1();
        categoria_4_2_2();
      }



    	$('#categoria_4_2').on('change',function(){
        $('#categoria_4_2_1').val("");
        $('#categoria_4_2_2').val("");
        categoria_4_2();
        
    	});
      function categoria_4_2_1(){

        $('#categoria_4_2_2_2').hide().prop("disabled", true);
        $('#categoria_4_2_2_12').hide().prop("disabled", true);
        $('#categoria_4_2_2_13').hide().prop("disabled", true);
        if($('#categoria_4_2_1').val() == "Pintura de caballete"){
          $('#op_1_1').show();
        }
        if($('#categoria_4_2_1').val() == "Pintura mural"){
          $('#op_1_2').show();
        }
        if($('#categoria_4_2_1').val() == "Escultura"){
          $('#op_1_3').show();
        }
        if($('#categoria_4_2_1').val() == "Dibujo"){
          $('#op_1_4').show();
        }
        if($('#categoria_4_2_1').val() == "Artes gráficas"){
          $('#op_1_5').show();
        }
        if($('#categoria_4_2_1').val() == "Grabado"){
          $('#op_1_6').show();
        }
        if($('#categoria_4_2_1').val() == "Tejido artístico"){
          $('#op_1_7').show();
        }
      }
      $('#categoria_4_2_1').on('change',function(){
        $('.divo').hide();
        categoria_4_2_1();
      });

      function categoria_4_2_2(){
        
        $('#categoria_4_2_2_2').hide().prop("disabled", true);
        $('#categoria_4_2_2_12').hide().prop("disabled", true);
        $('#categoria_4_2_2_13').hide().prop("disabled", true);
        if($('#categoria_4_2_2').val() == "Relacionado con el culto"){
          $('#op_2_1').show();
        }else if($('#categoria_4_2_2').val() == "Ornamentos litúrgicos e indumentaria religiosa"){
          $('#categoria_4_2_2_2').show().prop("disabled", false);
        }else if($('#categoria_4_2_2').val() == "Mobiliario"){
          $('#op_2_3').show();
        }else if($('#categoria_4_2_2').val() == "Uso domestico o cotidiano"){
          $('#op_2_4').show();
        }else if($('#categoria_4_2_2').val() == "Uso personal"){
          $('#op_2_5').show();
        }else if($('#categoria_4_2_2').val() == "Indumentaria"){
          $('#op_2_6').show();
        }else if($('#categoria_4_2_2').val() == "Ins. Musicales"){
          $('#op_2_7').show();
        }else if($('#categoria_4_2_2').val() == "Armas"){
          $('#op_2_8').show();
        }else if($('#categoria_4_2_2').val() == "Condecoraciones, trofeos y premios"){
          $('#op_2_9').show();
        }else if($('#categoria_4_2_2').val() == "Banderas "){
          $('#op_2_10').show();
        }else if($('#categoria_4_2_2').val() == "Escudos"){
          $('#op_2_11').show();
        }else if($('#categoria_4_2_2').val() == "Utensilios, instrumentos, herramientas de trabajo, equipo tecnológico y maquinaria vidrio, porcelana mortero de piedra con mazo"){
          $('#categoria_4_2_2_12').show().prop("disabled", false);
        }else if($('#categoria_4_2_2').val() == "Vehículos"){
          $('#categoria_4_2_2_13').show().prop("disabled", false);
        }else if($('#categoria_4_2_2').val() == "Accesorios de bienes muebles"){
          $('#op_2_14').show();
        }else if($('#categoria_4_2_2').val() == "Accesorios de bienes inmuebles"){
          $('#op_2_15').show();
        }else if($('#categoria_4_2_2').val() == "Elementos relacionados con inmuebles "){
          $('#op_2_16').show();
        }
      }

      $('#categoria_4_2_2').on('change',function(){
        $('.divo').hide();
        categoria_4_2_2();
      });

      categoria_4();
      categoria_4_2();
      categoria_4_2_1();
      categoria_4_2_2();

      $('#categoria_4_2_2_2').on('change',function(){
        $('.divo_2').hide();
        if($('#categoria_4_2_2_2').val() == "Textiles"){
          $('#op_2_2_1').show();
        }else if($('#categoria_4_2_2_2').val() == "Metalicos"){
          $('#op_2_2_2').show();
        }
        
      });

      $('#categoria_4_2_2_12').on('change',function(){
          $('.divo_2').hide();
        if($('#categoria_4_2_2_12').val() == "Instrumentos de medición"){
          $('#op_2_12_4').show();
        }else if($('#categoria_4_2_2_12').val() == "Elementos de escritorio madera, vidrio, metal, pluma"){
          $('#op_2_12_5').show();
        } else if($('#categoria_4_2_2_12').val() == "Herramientas manuales "){
          $('#op_2_12_6').show();
        } else if($('#categoria_4_2_2_12').val() == "Herramientas con borde filoso"){
          $('#op_2_12_7').show();
        } else if($('#categoria_4_2_2_12').val() == "Herramientas de corte"){
          $('#op_2_12_8').show();
        } else if($('#categoria_4_2_2_12').val() == "Herramientas de torsión"){
          $('#op_2_12_9').show();
        } else if($('#categoria_4_2_2_12').val() == "Herramientas neumáticas"){
          $('#op_2_12_10').show();
        } else if($('#categoria_4_2_2_12').val() == "Herramientas asociadas con energía eléctrica "){
          $('#op_2_12_11').show();
        } else if($('#categoria_4_2_2_12').val() == "Equipos tecnológica y maquinas"){
          $('#op_2_12_12').show();
        } 
        
      });


      function detalles_joyas(){
        if($('input[name="detalles[op_2_5][0][detalle][]"][value="Joyas"]').prop('checked')){
          $('#div_util_5').show();
          $('#div_util_5_op').show();
        }else{
          $('#div_util_5').hide();
          $('#div_util_5_op').hide();
        }
      }
      $('input[name="detalles[op_2_5][0][detalle][]"][value="Joyas"]').on('click',function(){
        detalles_joyas();
      });
      detalles_joyas();

      function uso_nivel_integridad(){
        if($('input[name="uso_nivel_integridad"][value="Menos 10%"]').prop('checked')){
          $('#inte-fragmentos').show();
        }else{
          $('#inte-fragmentos').hide();
        }
      }
      $('input[name="uso_nivel_integridad"]').on('click',function(){
        // console.log($('input[name="uso_nivel_integridad"]').val());
        uso_nivel_integridad();
      });
      uso_nivel_integridad();

      function readURL(input,idimgf) {

        if (input.files && input.files[0]) {
          var reader = new FileReader();

          reader.onload = function(e) {
            $('#'+idimgf).show();
            $('#'+idimgf).attr('src', e.target.result);
          }

          reader.readAsDataURL(input.files[0]);
        }
      }

      $(".cfile").change(function() {
        idimgf = $(this).data('laimg');
        readURL(this,idimgf);
      });

      $(document).on("change", ".file_multi_video", function(evt) {
        var $source = $('#video_here');
        $source[0].src = URL.createObjectURL(this.files[0]);
        $source.parent()[0].load();
      });
      $(document).on("change", ".file_multi_video2", function(evt) {
        var $source = $('#video_here2');
        $source[0].src = URL.createObjectURL(this.files[0]);
        $source.parent()[0].load();
      });


    </script>

<?php $this->end() ?>

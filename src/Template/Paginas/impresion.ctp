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
  .latabla{
    width: 100%;
  }
  .latabla td{
    border: 1px solid black !important;
  }
   #map
          {
              width: 100%;
              height: 300px;
              border: 1px solid #d0d0d0;
          }
</style>
    <section class="content-header">
      
    </section>
    <!-- Main content -->
    <section class="content">
      <?php echo $this->Form->create($d_bienes, ['url' => ['action' => 'guarda'],'enctype' => 'multipart/form-data']); ?>
      <?php echo $this->Form->control('id', ['type' => 'hidden']); ?>
      <?php echo $this->Form->control('id_reg_patrimonio', ['type' => 'hidden','value' => $idPatrimonio]); ?>
      <!-- <form method="post" action="/paginas/guarda"> -->
        <div class="row">
          <div class="col-md-12">
            <div class="box">
              <div class="box-body">
                <h5 class="text-center">Específico Ficha Forma de Diseño para Bienes Muebles Historico-Artiticos</h5>
                <table style="width: 100%;">
                  <tr>
                    <td style="width: 20%;">
                      <img style="width: 100%;" src="<?php echo $this->request->getAttribute('webroot'); ?>img/Picture1.png">
                    </td>
                    <td style="width: 50%;" align="center">
                      MINISTEREO DE CULTURAS Y TURISMO
DIRECTORA GENERAL DE PATRIMONIO CULTURAL
FICHA DE INSCRIPCIÓN DE INFORMACIÓN ESPECÍFICA
<br>
<label style="color: blue;">BIENES MUEBLES  HISTÓRICO-ARTITICOS</label>
                    </td>
                    <td style="width: 10%;">
                      <img style="width: 100%;" src="<?php echo $this->request->getAttribute('webroot'); ?>img/Picture2.png">
                    </td>
                    <td style="width: 20%;" align="center">
                      Codigo<br>
                      <?php echo $d_regPatrimonio->codigo ?>
                    </td>
                  </tr>
                </table>

                <div class="row">
                  <div class="col-md-12">
                    <h4>1.  IDENTIFICACIÓN</h4>
                    <table class="latabla">
                      <tr>
                        <td><label>Denominación: </label> </td>
                        <td><?php echo $d_regPatrimonio->denominacion;?></td>
                        <td><label>Número de Inventario: </label> </td>
                        <td><?php echo $d_bienes->iden_num_inven;?></td>
                      </tr>
                      <tr>
                        <td><label>Tipo de Bien: </label>  </td>
                        <td><?php echo $d_bienes->iden_tipo_bien;?></td>
                        <td><label>Número de Inventario.Ant.: </label>  </td>
                        <td><?php echo $d_bienes->iden_num_inven_ant;?></td>
                      </tr>
                    </table>

                    <div style="width: 100%;" align="center">
                      <img style="width: 250px;" src="/fotos/<?php echo $d_regPatrimonio->imagen ?>">
                    </div>
                    <div class="form-group">
                      <label>Descripción De La Imagen</label><br>
                      <?php echo $d_regPatrimonio->desc_img ?>
                    </div>
                    <table class="latabla">
                      <tr>
                        <td><label for="">Época</label></td>
                        <td><?php echo $d_bienes->iden_epoca;?></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td><label>Estilo</label></td>
                        <td>
                          <?php 
                          echo $d_bienes->ides_estilo;

                          if(!empty($d_bienes->iden_estilo_otros)){
                            echo ": ".$d_bienes->iden_estilo_otros;
                          }
                          ?>
                            
                          </td>
                        <td><label for="">Escuela</label></td>
                        <td><?php 
                        echo $d_bienes->iden_escuela;
                        if(!empty($d_bienes->iden_escuela_otros)){
                            echo ": ".$d_bienes->iden_escuela_otros;
                          }
                        ?></td>
                      </tr>
                      <tr>
                        <td><label for="">Autor/atribución</label></td>
                        <td><?php echo $d_bienes->iden_autor_atrib;?></td>
                        <td><label for="">Origen/procedencia</label></td>
                        <td><?php echo $d_bienes->iden_origen_proce;?></td>
                      </tr>
                      <tr>
                        <td><label for="">Obtencion</label></td>
                        <td><?php echo $d_bienes->iden_obtencion;?></td>
                        <td><label for="">Fecha Adquisicion</label></td>
                        <td><?php echo $d_bienes->fecha_adquisicion;?></td>
                      </tr>
                    </table>
                  </div>
                </div>


                <div class="row">
                  <div class="col-md-12">
                    <h4>2.   LOCALIZACIÓN </h4>
                    <table class="latabla">
                      <tr>
                        <td><label>DEPARTAMENTO: </label> </td>
                        <td><?php echo $d_regPatrimonio->departamento->departamento; ?></td>
                        <td><label>PROVINCIA : </label> </td>
                        <td><?php echo $d_regPatrimonio->provincium->provincia; ?></td>
                      </tr>
                      <tr>
                        <td><label>MUNICIPIO : </label>  </td>
                        <td><?php echo $d_regPatrimonio->municipio->municipio ;?></td>
                        <td><label>COMUNIDAD/CIUDAD: </label>  </td>
                        <td><?php echo $d_bienes->loc_comunidad;?></td>
                      </tr>
                      <tr>
                        <td><label for="">INMUEBLE</label>  </td>
                        <td><?php echo $d_bienes->loc_inmueble ;?></td>
                        <td><label for="">SUB-CONTENEDOR/UBICACIO / UBICACION</label></td>
                        <td><?php echo $d_bienes->loc_subcontenedor;?></td>
                      </tr>
                      <tr>
                        <td><label for="">DIRECCIÓN</label>  </td>
                        <td><?php echo $d_bienes->loc_direccion ;?></td>
                        <td><label for="">Código institucional</label></td>
                        <td><?php echo $d_bienes->loc_cod_institucional;?></td>
                      </tr>
                    </table>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-12">
                    <h4>3.   MARCO LEGAL</h4>
                    <table class="latabla">
                      <tr>
                        <td><label for="">Reconocimiento Internacional</label>  </td>
                        <td><?php echo $d_bienes->marc_recono_inter ;?></td>
                        <td><label for="">Patrimonio Cultural</label></td>
                        <td><?php echo $d_bienes->marc_patri_cultu;?></td>
                      </tr>
                      <tr>
                        <td><label for="">Patrimonio Cultural Departamental</label>  </td>
                        <td><?php echo $d_bienes->marc_patri_cultu_dep ;?></td>
                        <td><label for="">Patrimonio Cultural Municipal</label></td>
                        <td><?php echo $d_bienes->marc_patri_cultu_muni;?></td>
                      </tr>
                      <tr>
                        <td><label for="">Forma de ingreso</label>  </td>
                        <td><?php echo implode(', ',$d_bienes->marc_forma_ing);?></td>
                        <td><label for="">Otros</label></td>
                        <td><?php echo $d_bienes->marc_forma_ing_texto;?></td>
                      </tr>
                      
                      <tr>
                        <td><label for="">8: Tipo de documento de entrega</label>  </td>
                        <td><?php echo implode(', ',$d_bienes->marc_tipo_doc_entre);?></td>
                        <td><label for="">Otros</label></td>
                        <td><?php echo $d_bienes->marc_tipo_doc_entre_otros;?></td>
                      </tr>
                    
                    </table>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-12">
                    <h4>4. CARACTERÍSTICAS ESPECÍFICAS</h4>
                    <table class="latabla">
                      <tr>
                        <td><label for="">Categoría</label>  </td>
                        <td><?php echo $d_bienes->car_categoria_1 ;?></td>
                        <td><label for=""><?php echo $d_bienes->car_categoria_1 ;?></label></td>
                        <td><?php echo $d_bienes->car_categoria_2;?></td>
                      </tr>
                      <tr>
                        <td><label for=""><?php echo $d_bienes->car_categoria_2;?></label>  </td>
                        <td><?php echo $d_bienes->car_categoria_3 ;?></td>
                        <td><label for=""><?php echo $d_bienes->car_categoria_3 ;?></label></td>
                        <td><?php echo $d_bienes->car_categoria_4;?></td>
                      </tr>
                    </table>

                    <div class="divo oculto" id="op_1_1">
                      <table class="latabla">
                        <tr>
                          <td><label for="">Material</label>  </td>
                          <td>
                            <?php echo implode(', ',($d_des['detalles[op_1_1][0][detalle]'])) ;
                              if(!empty($d_des['detalles[op_1_1][0][otros]'])){
                                echo ": ".$d_des['detalles[op_1_1][0][otros]'];
                              }
                            ?>
                          </td>
                          <td><label for="">Tecnica</label></td>
                          <td>
                            <?php echo implode(', ',($d_des['detalles[op_1_1][1][detalle]'])) ;
                              if(!empty($d_des['detalles[op_1_1][1][otros]'])){
                                echo ": ".$d_des['detalles[op_1_1][1][otros]'];
                              }
                            ?>
                          </td>
                        </tr>
                      </table>
                    </div>

                    <div class="divo oculto" id="op_1_2">
                      <table class="latabla">
                        <tr>
                          <td><label for="">Material</label>  </td>
                          <td>
                            <?php echo implode(', ',($d_des['detalles[op_1_2][0][detalle]'])) ;
                              if(!empty($d_des['detalles[op_1_2][0][otros]'])){
                                echo ": ".$d_des['detalles[op_1_2][0][otros]'];
                              }
                            ?>
                          </td>
                          <td><label for="">Tecnica</label></td>
                          <td>
                            <?php echo implode(', ',($d_des['detalles[op_1_2][1][detalle]'])) ;
                              if(!empty($d_des['detalles[op_1_2][1][otros]'])){
                                echo ": ".$d_des['detalles[op_1_2][1][otros]'];
                              }
                            ?>
                          </td>
                        </tr>
                        <tr>
                          <td><label for="">Arte del dibujo</label>  </td>
                          <td>
                            <?php echo implode(', ',($d_des['detalles[op_1_2][2][detalle]'])) ;
                              if(!empty($d_des['detalles[op_1_2][2][otros]'])){
                                echo ": ".$d_des['detalles[op_1_2][2][otros]'];
                              }
                            ?>
                          </td>
                          <td></td>
                          <td>
                            
                          </td>
                        </tr>
                      </table>
                    </div>


                    <div class="divo oculto" id="op_1_3">
                      <table class="latabla">
                        <tr>
                          <td><label for="">Material</label>  </td>
                          <td>
                            <?php echo implode(', ',($d_des['detalles[op_1_3][0][detalle]'])) ;
                              if(!empty($d_des['detalles[op_1_3][0][otros]'])){
                                echo ": ".$d_des['detalles[op_1_3][0][otros]'];
                              }
                            ?>
                          </td>
                          <td><label for="">Tipo de escultura</label></td>
                          <td>
                            <?php echo implode(', ',($d_des['detalles[op_1_3][1][detalle]'])) ;
                              if(!empty($d_des['detalles[op_1_3][1][otros]'])){
                                echo ": ".$d_des['detalles[op_1_3][1][otros]'];
                              }
                            ?>
                          </td>
                        </tr>
                        <tr>
                          <td><label for="">Técnica 1</label>  </td>
                          <td>
                            <?php echo implode(', ',($d_des['detalles[op_1_3][2][detalle]'])) ;
                              if(!empty($d_des['detalles[op_1_3][2][otros]'])){
                                echo ": ".$d_des['detalles[op_1_3][2][otros]'];
                              }
                            ?>
                          </td>
                          <td><label for="">Técnica 2</label></td>
                          <td>
                            <?php echo implode(', ',($d_des['detalles[op_1_3][3][detalle]'])) ;
                              if(!empty($d_des['detalles[op_1_3][3][otros]'])){
                                echo ": ".$d_des['detalles[op_1_3][3][otros]'];
                              }
                            ?>
                          </td>
                        </tr>
                      </table>
                    </div>

                    <div class="divo oculto" id="op_1_4">
                      <table class="latabla">
                        <tr>
                          <td><label for="">Material</label>  </td>
                          <td>
                            <?php echo implode(', ',($d_des['detalles[op_1_4][0][detalle]'])) ;
                              if(!empty($d_des['detalles[op_1_4][0][otros]'])){
                                echo ": ".$d_des['detalles[op_1_4][0][otros]'];
                              }
                            ?>
                          </td>
                          <td><label for="">Tecnica</label></td>
                          <td>
                            <?php echo implode(', ',($d_des['detalles[op_1_4][1][detalle]'])) ;
                              if(!empty($d_des['detalles[op_1_4][1][otros]'])){
                                echo ": ".$d_des['detalles[op_1_4][1][otros]'];
                              }
                            ?>
                          </td>
                        </tr>
                      </table>
                    </div>

                    <div class="divo oculto" id="op_1_5">
                      <table class="latabla">
                        <tr>
                          <td><label for="">Material</label>  </td>
                          <td>
                            <?php echo implode(', ',($d_des['detalles[op_1_5][0][detalle]'])) ;
                              if(!empty($d_des['detalles[op_1_5][0][otros]'])){
                                echo ": ".$d_des['detalles[op_1_5][0][otros]'];
                              }
                            ?>
                          </td>
                          <td><label for="">Tecnica</label></td>
                          <td>
                            <?php echo implode(', ',($d_des['detalles[op_1_5][1][detalle]'])) ;
                              if(!empty($d_des['detalles[op_1_5][1][otros]'])){
                                echo ": ".$d_des['detalles[op_1_5][1][otros]'];
                              }
                            ?>
                          </td>
                        </tr>
                      </table>
                    </div>


                    <div class="divo oculto" id="op_1_6">
                      <table class="latabla">
                        <tr>
                          <td><label for="">Material</label>  </td>
                          <td>
                            <?php echo implode(', ',($d_des['detalles[op_1_6][0][detalle]'])) ;
                              if(!empty($d_des['detalles[op_1_6][0][otros]'])){
                                echo ": ".$d_des['detalles[op_1_6][0][otros]'];
                              }
                            ?>
                          </td>
                          <td><label for="">Tecnica</label></td>
                          <td>
                            <?php echo implode(', ',($d_des['detalles[op_1_6][1][detalle]'])) ;
                              if(!empty($d_des['detalles[op_1_6][1][otros]'])){
                                echo ": ".$d_des['detalles[op_1_6][1][otros]'];
                              }
                            ?>
                          </td>
                        </tr>
                      </table>
                    </div>


                    <div class="divo oculto" id="op_1_7">
                      <table class="latabla">
                        <tr>
                          <td><label for="">Material</label>  </td>
                          <td>
                            <?php echo implode(', ',($d_des['detalles[op_1_7][0][detalle]'])) ;
                              if(!empty($d_des['detalles[op_1_7][0][otros]'])){
                                echo ": ".$d_des['detalles[op_1_7][0][otros]'];
                              }
                            ?>
                          </td>
                          <td><label for="">Tecnica</label></td>
                          <td>
                            <?php echo implode(', ',($d_des['detalles[op_1_7][1][detalle]'])) ;
                              if(!empty($d_des['detalles[op_1_7][1][otros]'])){
                                echo ": ".$d_des['detalles[op_1_7][1][otros]'];
                              }
                            ?>
                          </td>
                        </tr>
                        <tr>
                          <td><label for="">Arte</label>  </td>
                          <td>
                            <?php echo implode(', ',($d_des['detalles[op_1_7][2][detalle]'])) ;
                              if(!empty($d_des['detalles[op_1_7][2][otros]'])){
                                echo ": ".$d_des['detalles[op_1_7][2][otros]'];
                              }
                            ?>
                          </td>
                          <td><label for=""></label></td>
                          <td>
                            
                          </td>
                        </tr>
                      </table>
                    </div>


                    <div class="divo oculto" id="op_2_1">
                      <table class="latabla">
                        <tr>
                          <td><label for="">Bienes</label>  </td>
                          <td>
                            <?php echo implode(', ',($d_des['detalles[op_2_1][0][detalle]'])) ;
                              if(!empty($d_des['detalles[op_2_1][0][otros]'])){
                                echo ": ".$d_des['detalles[op_2_1][0][otros]'];
                              }
                            ?>
                          </td>
                          <td><label for="">Material</label></td>
                          <td>
                            <?php echo implode(', ',($d_des['detalles[op_2_1][1][detalle]'])) ;
                              if(!empty($d_des['detalles[op_2_1][1][otros]'])){
                                echo ": ".$d_des['detalles[op_2_1][1][otros]'];
                              }
                            ?>
                          </td>
                        </tr>
                      </table>
                    </div>

                    <div class="divo oculto divo_2" id="op_2_2_1">
                      <table class="latabla">
                        <tr>
                          <td><label for="">Bienes</label>  </td>
                          <td>
                            <?php echo implode(', ',($d_des['detalles[op_2_2_1][0][detalle]'])) ;
                              if(!empty($d_des['detalles[op_2_2_1][0][otros]'])){
                                echo ": ".$d_des['detalles[op_2_2_1][0][otros]'];
                              }
                            ?>
                          </td>
                          <td><label for="">Material</label></td>
                          <td>
                            <?php echo implode(', ',($d_des['detalles[op_2_2_1][1][detalle]'])) ;
                              if(!empty($d_des['detalles[op_2_2_1][1][otros]'])){
                                echo ": ".$d_des['detalles[op_2_2_1][1][otros]'];
                              }
                            ?>
                          </td>
                        </tr>
                      </table>
                    </div>

                    <div class="divo oculto divo_2" id="op_2_2_2">
                      <table class="latabla">
                        <tr>
                          <td><label for="">Bienes</label>  </td>
                          <td>
                            <?php echo implode(', ',($d_des['detalles[op_2_2_2][0][detalle]'])) ;
                              if(!empty($d_des['detalles[op_2_2_2][0][otros]'])){
                                echo ": ".$d_des['detalles[op_2_2_2][0][otros]'];
                              }
                            ?>
                          </td>
                          <td><label for="">Material</label></td>
                          <td>
                            <?php echo implode(', ',($d_des['detalles[op_2_2_2][1][detalle]'])) ;
                              if(!empty($d_des['detalles[op_2_2_2][1][otros]'])){
                                echo ": ".$d_des['detalles[op_2_2_2][1][otros]'];
                              }
                            ?>
                          </td>
                        </tr>
                      </table>
                    </div>


                    <div class="divo oculto" id="op_2_3">
                      <table class="latabla">
                        <tr>
                          <td> </td>
                          <td>
                            <?php echo implode(', ',($d_des['detalles[op_2_3][0][detalle]'])) ;
                              if(!empty($d_des['detalles[op_2_3][0][otros]'])){
                                echo ": ".$d_des['detalles[op_2_3][0][otros]'];
                              }
                            ?>
                          </td>
                          <td></td>
                          <td>
                          </td>
                        </tr>
                      </table>
                    </div>

                    <div class="divo oculto " id="op_2_4">
                      <table class="latabla">
                        <tr>
                          <td><label for="">Bienes</label>  </td>
                          <td>
                            <?php echo implode(', ',($d_des['detalles[op_2_4][0][detalle]'])) ;
                              if(!empty($d_des['detalles[op_2_4][0][otros]'])){
                                echo ": ".$d_des['detalles[op_2_4][0][otros]'];
                              }
                            ?>
                          </td>
                          <td><label for="">Material</label></td>
                          <td>
                            <?php echo implode(', ',($d_des['detalles[op_2_4][1][detalle]'])) ;
                              if(!empty($d_des['detalles[op_2_4][1][otros]'])){
                                echo ": ".$d_des['detalles[op_2_4][1][otros]'];
                              }
                            ?>
                          </td>
                        </tr>
                      </table>
                    </div>

                    <div class="divo oculto " id="op_2_5">
                      <table class="latabla">
                        <tr>
                          <td>
                            <?php echo implode(', ',($d_des['detalles[op_2_5][0][detalle]'])) ;
                              if(!empty($d_des['detalles[op_2_5][0][otros]'])){
                                echo ": ".$d_des['detalles[op_2_5][0][otros]'];
                              }
                            ?>
                          </td>
                        </tr>
                      </table>
                      <table class="latabla">
                        <tr>
                          <td><label for="">Material para Biene de Joyas</label>  </td>
                          <td>
                            <?php echo implode(', ',($d_des['detalles[op_2_5][1][detalle]'])) ;
                              if(!empty($d_des['detalles[op_2_5][1][otros]'])){
                                echo ": ".$d_des['detalles[op_2_5][1][otros]'];
                              }
                            ?>
                          </td>
                          <td><label for="">Técnica para Biene de Joyas</label></td>
                          <td>
                            <?php echo implode(', ',($d_des['detalles[op_2_5][2][detalle]'])) ;
                              if(!empty($d_des['detalles[op_2_5][2][otros]'])){
                                echo ": ".$d_des['detalles[op_2_5][2][otros]'];
                              }
                            ?>
                          </td>
                        </tr>
                      </table>
                    </div>


                    <div class="divo oculto " id="op_2_6">
                      <table class="latabla">
                        <tr>
                          <td><label for="">Material</label>  </td>
                          <td>
                            <?php echo implode(', ',($d_des['detalles[op_2_6][0][detalle]'])) ;
                              if(!empty($d_des['detalles[op_2_6][0][otros]'])){
                                echo ": ".$d_des['detalles[op_2_6][0][otros]'];
                              }
                            ?>
                          </td>
                          <td><label for="">Técnica</label></td>
                          <td>
                            <?php echo implode(', ',($d_des['detalles[op_2_6][1][detalle]'])) ;
                              if(!empty($d_des['detalles[op_2_6][1][otros]'])){
                                echo ": ".$d_des['detalles[op_2_6][1][otros]'];
                              }
                            ?>
                          </td>
                        </tr>
                      </table>
                    </div>

                    <div class="divo oculto " id="op_2_7">
                      <table class="latabla">
                        <tr>
                          <td><label for="">Material</label>  </td>
                          <td>
                            <?php echo implode(', ',($d_des['detalles[op_2_7][0][detalle]'])) ;
                              if(!empty($d_des['detalles[op_2_7][0][otros]'])){
                                echo ": ".$d_des['detalles[op_2_7][0][otros]'];
                              }
                            ?>
                          </td>
                          <td><label for="">Técnica</label></td>
                          <td>
                            <?php echo implode(', ',($d_des['detalles[op_2_7][1][detalle]'])) ;
                              if(!empty($d_des['detalles[op_2_7][1][otros]'])){
                                echo ": ".$d_des['detalles[op_2_7][1][otros]'];
                              }
                            ?>
                          </td>
                        </tr>
                      </table>
                    </div>


                    <div class="divo oculto " id="op_2_8">
                      <table class="latabla">
                        <tr>
                          <td><label for="">Material</label>  </td>
                          <td>
                            <?php echo implode(', ',($d_des['detalles[op_2_8][0][detalle]'])) ;
                              if(!empty($d_des['detalles[op_2_8][0][otros]'])){
                                echo ": ".$d_des['detalles[op_2_8][0][otros]'];
                              }
                            ?>
                          </td>
                          <td><label for="">Clasificación</label></td>
                          <td>
                            <?php echo implode(', ',($d_des['detalles[op_2_8][1][detalle]'])) ;
                              if(!empty($d_des['detalles[op_2_8][1][otros]'])){
                                echo ": ".$d_des['detalles[op_2_8][1][otros]'];
                              }
                            ?>
                          </td>
                        </tr>
                        <tr>
                          <td><label for="">Técnica</label>  </td>
                          <td>
                            <?php echo implode(', ',($d_des['detalles[op_2_8][2][detalle]'])) ;
                              if(!empty($d_des['detalles[op_2_8][2][otros]'])){
                                echo ": ".$d_des['detalles[op_2_8][2][otros]'];
                              }
                            ?>
                          </td>
                          <td><label for=""></label></td>
                          <td>
                            
                          </td>
                        </tr>
                      </table>
                    </div>


                    <div class="divo oculto " id="op_2_9">
                      <table class="latabla">
                        <tr>
                          <td><label for="">Persona encargada</label>  </td>
                          <td>
                            <?php echo implode(', ',($d_des['detalles[op_2_9][0][detalle]'])) ;
                              if(!empty($d_des['detalles[op_2_9][0][otros]'])){
                                echo ": ".$d_des['detalles[op_2_9][0][otros]'];
                              }
                            ?>
                          </td>
                          <td><label for="">Forma</label></td>
                          <td>
                            <?php echo implode(', ',($d_des['detalles[op_2_9][1][detalle]'])) ;
                              if(!empty($d_des['detalles[op_2_9][1][otros]'])){
                                echo ": ".$d_des['detalles[op_2_9][1][otros]'];
                              }
                            ?>
                          </td>
                        </tr>
                        <tr>
                          <td><label for="">Técnica</label>  </td>
                          <td>
                            <?php echo implode(', ',($d_des['detalles[op_2_9][2][detalle]'])) ;
                              if(!empty($d_des['detalles[op_2_9][2][otros]'])){
                                echo ": ".$d_des['detalles[op_2_9][2][otros]'];
                              }
                            ?>
                          </td>
                          <td><label for=""></label></td>
                          <td>
                            
                          </td>
                        </tr>
                      </table>
                    </div>

                    <div class="divo oculto " id="op_2_10">
                      <table class="latabla">
                        <tr>
                          <td><label for="">Material</label>  </td>
                          <td>
                            <?php echo implode(', ',($d_des['detalles[op_2_10][0][detalle]'])) ;
                              if(!empty($d_des['detalles[op_2_10][0][otros]'])){
                                echo ": ".$d_des['detalles[op_2_10][0][otros]'];
                              }
                            ?>
                          </td>
                          <td><label for=""></label></td>
                          <td>
                            
                          </td>
                        </tr>
                      </table>
                    </div>

                    <div class="divo oculto " id="op_2_11">
                      <table class="latabla">
                        <tr>
                          <td><label for="">Material</label>  </td>
                          <td>
                            <?php echo implode(', ',($d_des['detalles[op_2_11][0][detalle]'])) ;
                              if(!empty($d_des['detalles[op_2_11][0][otros]'])){
                                echo ": ".$d_des['detalles[op_2_11][0][otros]'];
                              }
                            ?>
                          </td>
                          <td><label for=""></label></td>
                          <td>
                            
                          </td>
                        </tr>
                      </table>
                    </div>

                    <div class="divo divo_2 oculto " id="op_2_12_4">
                      <table class="latabla">
                        <tr>
                          <td>
                            <?php echo implode(', ',($d_des['detalles[op_2_12_4][0][detalle]'])) ;
                              if(!empty($d_des['detalles[op_2_12_4][0][otros]'])){
                                echo ": ".$d_des['detalles[op_2_12_4][0][otros]'];
                              }
                            ?>
                          </td>
                        </tr>
                      </table>
                    </div>

                    <div class="divo divo_2 oculto " id="op_2_12_5">
                      <table class="latabla">
                        <tr>
                          <td>
                            <?php echo implode(', ',($d_des['detalles[op_2_12_5][0][detalle]'])) ;
                              if(!empty($d_des['detalles[op_2_12_5][0][otros]'])){
                                echo ": ".$d_des['detalles[op_2_12_5][0][otros]'];
                              }
                            ?>
                          </td>
                        </tr>
                      </table>
                    </div>

                    <div class="divo divo_2 oculto " id="op_2_12_6">
                      <table class="latabla">
                        <tr>
                          <td><label>Material</label></td>
                          <td>
                            <?php echo implode(', ',($d_des['detalles[op_2_12_6][0][detalle]'])) ;
                              if(!empty($d_des['detalles[op_2_12_6][0][otros]'])){
                                echo ": ".$d_des['detalles[op_2_12_6][0][otros]'];
                              }
                            ?>
                          </td>
                          <td><label>Técnica</label></td>
                          <td>
                            <?php echo implode(', ',($d_des['detalles[op_2_12_6][1][detalle]'])) ;
                              if(!empty($d_des['detalles[op_2_12_6][1][otros]'])){
                                echo ": ".$d_des['detalles[op_2_12_6][1][otros]'];
                              }
                            ?>
                          </td>
                        </tr>
                      </table>
                    </div>

                    <div class="divo divo_2 oculto " id="op_2_12_7">
                      <table class="latabla">
                        <tr>
                          <td>
                            <?php echo implode(', ',($d_des['detalles[op_2_12_7][0][detalle]'])) ;
                              if(!empty($d_des['detalles[op_2_12_7][0][otros]'])){
                                echo ": ".$d_des['detalles[op_2_12_7][0][otros]'];
                              }
                            ?>
                          </td>
                        </tr>
                      </table>
                    </div>

                    <div class="divo divo_2 oculto " id="op_2_12_8">
                      <table class="latabla">
                        <tr>
                          <td>
                            <?php echo implode(', ',($d_des['detalles[op_2_12_8][0][detalle]'])) ;
                              if(!empty($d_des['detalles[op_2_12_8][0][otros]'])){
                                echo ": ".$d_des['detalles[op_2_12_8][0][otros]'];
                              }
                            ?>
                          </td>
                        </tr>
                      </table>
                    </div>


                    <div class="divo divo_2 oculto " id="op_2_12_9">
                      <table class="latabla">
                        <tr>
                          <td>
                            <?php echo implode(', ',($d_des['detalles[op_2_12_9][0][detalle]'])) ;
                              if(!empty($d_des['detalles[op_2_12_9][0][otros]'])){
                                echo ": ".$d_des['detalles[op_2_12_9][0][otros]'];
                              }
                            ?>
                          </td>
                        </tr>
                      </table>
                    </div>


                    <div class="divo divo_2 oculto " id="op_2_12_10">
                      <table class="latabla">
                        <tr>
                          <td>
                            <?php echo implode(', ',($d_des['detalles[op_2_12_10][0][detalle]'])) ;
                              if(!empty($d_des['detalles[op_2_12_10][0][otros]'])){
                                echo ": ".$d_des['detalles[op_2_12_10][0][otros]'];
                              }
                            ?>
                          </td>
                        </tr>
                      </table>
                    </div>

                    <div class="divo divo_2 oculto " id="op_2_12_11">
                      <table class="latabla">
                        <tr>
                          <td>
                            <?php echo implode(', ',($d_des['detalles[op_2_12_11][0][detalle]'])) ;
                              if(!empty($d_des['detalles[op_2_12_11][0][otros]'])){
                                echo ": ".$d_des['detalles[op_2_12_11][0][otros]'];
                              }
                            ?>
                          </td>
                        </tr>
                      </table>
                    </div>

                    <div class="divo divo_2 oculto " id="op_2_12_12">
                      <table class="latabla">
                        <tr>
                          <td>
                            <?php echo implode(', ',($d_des['detalles[op_2_12_12][0][detalle]'])) ;
                              if(!empty($d_des['detalles[op_2_12_12][0][otros]'])){
                                echo ": ".$d_des['detalles[op_2_12_12][0][otros]'];
                              }
                            ?>
                          </td>
                        </tr>
                      </table>
                    </div>

                    <div class="divo oculto " id="op_2_14">
                      <table class="latabla">
                        <tr>
                          <td>
                            <?php echo implode(', ',($d_des['detalles[op_2_14][0][detalle]'])) ;
                              if(!empty($d_des['detalles[op_2_14][0][otros]'])){
                                echo ": ".$d_des['detalles[op_2_14][0][otros]'];
                              }
                            ?>
                          </td>
                        </tr>
                      </table>
                    </div>

                    <div class="divo oculto " id="op_2_15">
                      <table class="latabla">
                        <tr>
                          <td>
                            <?php echo implode(', ',($d_des['detalles[op_2_15][0][detalle]'])) ;
                              if(!empty($d_des['detalles[op_2_15][0][otros]'])){
                                echo ": ".$d_des['detalles[op_2_15][0][otros]'];
                              }
                            ?>
                          </td>
                        </tr>
                      </table>
                    </div>


                    <div class="divo oculto " id="op_2_16">
                      <table class="latabla">
                        <tr>
                          <td><label>Elementos</label></td>
                          <td>
                            <?php echo implode(', ',($d_des['detalles[op_2_16][0][detalle]'])) ;
                              if(!empty($d_des['detalles[op_2_16][0][otros]'])){
                                echo ": ".$d_des['detalles[op_2_16][0][otros]'];
                              }
                            ?>
                          </td>
                        </tr>
                      </table>
                      <table class="latabla">
                        <tr>
                          <td><label>Material</label></td>
                          <td>
                            <?php echo implode(', ',($d_des['detalles[op_2_16][1][detalle]'])) ;
                              if(!empty($d_des['detalles[op_2_16][1][otros]'])){
                                echo ": ".$d_des['detalles[op_2_16][1][otros]'];
                              }
                            ?>
                          </td>
                          <td><label>Técnica</label></td>
                          <td>
                            <?php echo implode(', ',($d_des['detalles[op_2_16][2][detalle]'])) ;
                              if(!empty($d_des['detalles[op_2_16][2][otros]'])){
                                echo ": ".$d_des['detalles[op_2_16][2][otros]'];
                              }
                            ?>
                          </td>
                        </tr>
                      </table>
                    </div>


                    <div class="oculto" id="div_uso_fune">
                      <h4>Uso funeraria</h4>
                      <table class="latabla">
                        <tr>
                          <td><label>Tipo de uso funerario</label></td>
                          <td>
                            <?php echo implode(', ',unserialize($d_bienes->uso_tipo_uso_fun)) ;
                            if(!empty($d_bienes->uso_tipo_uso_otros)){
                              echo " : ".$d_bienes->uso_tipo_uso_otros;
                            }
                            ?>
                          </td>
                          <td><label>Fúnebres</label></td>
                          <td>
                            <?php echo $d_bienes->uso_funebres ;
                            if(!empty($d_bienes->uso_funebres_otros)){
                              echo " : ".$d_bienes->uso_funebres_otros;
                            }
                            ?>
                          </td>
                        </tr>
                      </table>
                      
                      <label>Medidas de la pieza (cm y gr)</label>
                      <table class="latabla">
                        <tr>
                          <td><label>Profundidad</label></td>
                          <td>
                            <?php echo $d_bienes->uso_profundidad ;?>
                          </td>
                          <td><label>Circunferencia</label></td>
                          <td>
                            <?php echo $d_bienes->uso_circunferencia ;?>
                          </td>
                        </tr>
                      </table>

                      <table class="latabla">
                        <tr>
                          <td><label>Alto</label></td>
                          <td>
                            <?php echo $d_bienes->uso_alto ;?>
                          </td>
                          <td><label>Ancho</label></td>
                          <td>
                            <?php echo $d_bienes->uso_ancho ;?>
                          </td>
                          <td><label>Grosor</label></td>
                          <td>
                            <?php echo $d_bienes->uso_grosor ;?>
                          </td>
                          <td><label>Diámetro</label></td>
                          <td>
                            <?php echo $d_bienes->uso_diametro ;?>
                          </td>
                          <td><label>Peso</label></td>
                          <td>
                            <?php echo $d_bienes->uso_peso ;?>
                          </td>
                        </tr>
                      </table>
                      <table class="latabla">
                        <tr>
                          <td><label>Nivel de integridad</label></td>
                          <td>
                            <?php echo $d_bienes->uso_nivel_integridad ;?><br>
                            <?php echo $d_bienes->uso_nivel_integridad_2 ;?>
                          </td>
                        </tr>
                      </table>
                      <table class="latabla">
                        <tr>
                          <td><label>Intervenciones</label></td>
                          <td>
                            <?php echo $d_bienes->uso_intervencion ;?>
                          </td>
                          <td><label>Características Iconográficas/ornamentales</label></td>
                          <td>
                            <?php echo $d_bienes->uso_caract_icon ;?>
                          </td>
                        </tr>
                      </table>

                    </div>
                    

                  </div>
                </div>




                <div class="row">
                  <div class="col-md-12">
                    <h4>5.   INFORMACIÓN GRÁFICA/DOCUMENTAL</h4>
                    <table class="latabla">
                      <tr>
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
                        <td class="<?php echo $f_oculto?>">
                          <label>foto1:</label><br>
                          <img id="imgfoto1" class="<?php echo $f_oculto?>" src="<?php echo $foto_1 ?>" alt="your image" style="max-height: 200px; max-width: 100%" /><br>
                          <label>Ubicación: </label> <?php echo $d_bienes->info_ubicacion_1 ?> <br>
                          <label>Fecha: </label> <?php echo $d_bienes->info_fecha_1 ?> <br>
                          <label>Autor: </label> <?php echo $d_bienes->info_autor_1 ?> <br>
                        </td>
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
                        <td class="<?php echo $f_oculto?>">
                          <label>foto2:</label><br>
                          <img id="imgfoto2" class="<?php echo $f_oculto?>" src="<?php echo $foto_2 ?>" alt="your image" style="max-height: 200px; max-width: 100%" /><br>
                          <label>Ubicación: </label> <?php echo $d_bienes->info_ubicacion_2 ?> <br>
                          <label>Fecha: </label> <?php echo $d_bienes->info_fecha_2 ?> <br>
                          <label>Autor: </label> <?php echo $d_bienes->info_autor_2 ?> <br>
                        </td>
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
                        <td class="<?php echo $f_oculto?>">
                          <label>foto3:</label><br>
                          <img id="imgfoto3" class="<?php echo $f_oculto?>" src="<?php echo $foto_3 ?>" alt="your image" style="max-height: 200px; max-width: 100%" /><br>
                          <label>Ubicación: </label> <?php echo $d_bienes->info_ubicacion_3 ?> <br>
                          <label>Fecha: </label> <?php echo $d_bienes->info_fecha_3 ?> <br>
                          <label>Autor: </label> <?php echo $d_bienes->info_autor_3 ?> <br>
                        </td>
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
                        <td class="<?php echo $f_oculto?>">
                          <label>foto4:</label><br>
                          <img id="imgfoto4" class="<?php echo $f_oculto?>" src="<?php echo $foto_4 ?>" alt="your image" style="max-height: 200px; max-width: 100%" /><br>
                          <label>Ubicación: </label> <?php echo $d_bienes->info_ubicacion_4 ?> <br>
                          <label>Fecha: </label> <?php echo $d_bienes->info_fecha_4 ?> <br>
                          <label>Autor: </label> <?php echo $d_bienes->info_autor_4 ?> <br>
                        </td>

                      </tr>
                    </table>

                    <table class="latabla">
                      <tr>
                         
                        <td >
                          <label>videoclip1:</label><br>
                          <?php echo $d_bienes->info_video_1 ?><br>
                          <label>Ubicación: </label> <?php echo $d_bienes->info_vubicacion_1 ?> <br>
                          <label>Fecha: </label> <?php echo $d_bienes->info_vfecha_1 ?> <br>
                          <label>Autor: </label> <?php echo $d_bienes->info_vautor_1 ?> <br>
                        </td>
                          
                        <td >
                          <label>videoclip2:</label><br>
                          <?php echo $d_bienes->info_video_2 ?><br>
                          <label>Ubicación: </label> <?php echo $d_bienes->info_vubicacion_2 ?> <br>
                          <label>Fecha: </label> <?php echo $d_bienes->info_vfecha_2 ?> <br>
                          <label>Autor: </label> <?php echo $d_bienes->info_vautor_2 ?> <br>
                        </td>
                       
                      </tr>
                    </table>

                    <div id="map">
                      
                    </div>


                  </div>
                </div>

                <div class="row">
                  <div class="col-md-12">
                    <h4>6.  OBSERVACIONES</h4>
                    <table class="latabla">
                      <tr>
                        <td>
                          <?php 
                          if(!empty($d_segundo->obser)){
                            echo $d_segundo->obser;
                          }
                          ?>
                        </td>
                      </tr>
                    </table>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-12">
                    <h4>7. DATOS DE CONTROL</h4>
                    <table class="latabla">
                      <tr>
                        <td><label>Entidad Investigadora</label></td>
                        <td>
                          <?php echo $d_control->ent_inves;?>
                        </td>
                      </tr>
                    </table>
                    <table class="latabla">
                      <tr>
                        <td colspan="2" align="center">
                          <label style="color: blue;">Registrado Por:</label>
                        </td>
                        <td colspan="2" align="center">
                          <label style="color: blue;">Revisado Por:</label>
                        </td>
                        <td colspan="2" align="center">
                          <label style="color: blue;">Aprobado Por:</label>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <label>Nombre</label><br>
                    <?php echo $d_control->registrado_por;?>
                        </td>
                        <td>
                          <label>Fecha</label><br>
                    <?php echo $d_control->f_registro;?>
                        </td>
                        <td>
                          <label>Nombre</label><br>
                    <?php echo $d_control->revisado_por;?>
                        </td>
                        <td>
                          <label>Fecha</label><br>
                    <?php echo $d_control->f_revision;?>
                        </td>
                        <td>
                          <label>Nombre</label><br>
                    <?php echo $d_control->aprobado_por;?>
                        </td>
                        <td>
                          <label>Fecha</label><br>
                    <?php echo $d_control->f_aprovacion;?>
                        </td>
                      </tr>
                    </table>
                    <label>Cambia la historia</label>
                    <table class="latabla">
                      <tr>
                        <td colspan="2" align="center">
                          <label style="color: blue;">Registrado Por:</label>
                        </td>
                        <td colspan="2" align="center">
                          <label style="color: blue;">Revisado Por:</label>
                        </td>
                        <td colspan="2" align="center">
                          <label style="color: blue;">Aprobado Por:</label>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <label>Nombre</label><br>
                    <?php echo $d_bienes->dat_reg_nom_1;?>
                        </td>
                        <td>
                          <label>Fecha</label><br>
                    <?php echo $d_bienes->dat_reg_fech_1;?>
                        </td>
                        <td>
                          <label>Nombre</label><br>
                    <?php echo $d_bienes->dat_rev_nom_1;?>
                        </td>
                        <td>
                          <label>Fecha</label><br>
                    <?php echo $d_bienes->dat_rev_fech_1;?>
                        </td>
                        <td>
                          <label>Nombre</label><br>
                    <?php echo $d_bienes->dat_apro_nom_1;?>
                        </td>
                        <td>
                          <label>Fecha</label><br>
                    <?php echo $d_bienes->dat_apro_fech_1;?>
                        </td>
                      </tr>

                      <tr>
                        <td colspan="2" align="center">
                          <label style="color: blue;">Registrado Por:</label>
                        </td>
                        <td colspan="2" align="center">
                          <label style="color: blue;">Revisado Por:</label>
                        </td>
                        <td colspan="2" align="center">
                          <label style="color: blue;">Aprobado Por:</label>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <label>Nombre</label><br>
                    <?php echo $d_bienes->dat_reg_nom_2;?>
                        </td>
                        <td>
                          <label>Fecha</label><br>
                    <?php echo $d_bienes->dat_reg_fech_2;?>
                        </td>
                        <td>
                          <label>Nombre</label><br>
                    <?php echo $d_bienes->dat_rev_nom_2;?>
                        </td>
                        <td>
                          <label>Fecha</label><br>
                    <?php echo $d_bienes->dat_rev_fech_2;?>
                        </td>
                        <td>
                          <label>Nombre</label><br>
                    <?php echo $d_bienes->dat_apro_nom_2;?>
                        </td>
                        <td>
                          <label>Fecha</label><br>
                    <?php echo $d_bienes->dat_apro_fech_2;?>
                        </td>
                      </tr>
                    </table>
               
                  </div>
                </div>


              </div>
            </div>
          </div>
        </div>

<?php echo $this->Form->end(); ?>
    </section>

<?php $this->start('campo_js') ?>
    <script type="text/javascript">


      function categoria_4(){
        $('#categoria_4_2_2_2').hide().prop("disabled", true);
        $('#categoria_4_2_2_12').hide().prop("disabled", true);
        $('#categoria_4_2_2_13').hide().prop("disabled", true);

        $('#categoria_4_1').hide().prop("disabled", true);
        $('#categoria_4_2').hide().prop("disabled", true);
        $('#categoria_4_3').hide().prop("disabled", true);
        
        if("<?php echo $d_bienes->car_categoria_1; ?>" == "Bienes muebles histórico-artiticos"){
          $('#categoria_4_2').show().prop("disabled", false);
        }

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
        if("<?php echo $d_bienes->car_categoria_2; ?>" == "Artístico"){
          $('#categoria_4_2_1').show().prop("disabled", false);
        }
        if("<?php echo $d_bienes->car_categoria_2; ?>" == "Utilitario"){
          $('#categoria_4_2_2').show().prop("disabled", false);
        }
        if("<?php echo $d_bienes->car_categoria_2; ?>" == "Uso funerario"){
          $('#categoria_4_2_3').show().prop("disabled", false);
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
        if("<?php echo $d_bienes->car_categoria_3; ?>" == "Pintura de caballete"){
          $('#op_1_1').show();
        }
        if("<?php echo $d_bienes->car_categoria_3; ?>" == "Pintura mural"){
          $('#op_1_2').show();
        }
        if("<?php echo $d_bienes->car_categoria_3; ?>" == "Escultura"){
          $('#op_1_3').show();
        }
        if("<?php echo $d_bienes->car_categoria_3; ?>" == "Dibujo"){
          $('#op_1_4').show();
        }
        if("<?php echo $d_bienes->car_categoria_3; ?>" == "Artes gráficas"){
          $('#op_1_5').show();
        }
        if("<?php echo $d_bienes->car_categoria_3; ?>" == "Grabado"){
          $('#op_1_6').show();
        }
        if("<?php echo $d_bienes->car_categoria_3; ?>" == "Tejido artístico"){
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
        if("<?php echo $d_bienes->car_categoria_3; ?>" == "Relacionado con el culto"){
          $('#op_2_1').show();
        }else if("<?php echo $d_bienes->car_categoria_3; ?>" == "Ornamentos litúrgicos e indumentaria religiosa"){
          $('#categoria_4_2_2_2').show().prop("disabled", false);
        }else if("<?php echo $d_bienes->car_categoria_3; ?>" == "Mobiliario"){
          $('#op_2_3').show();
        }else if("<?php echo $d_bienes->car_categoria_3; ?>" == "Uso domestico o cotidiano"){
          $('#op_2_4').show();
        }else if("<?php echo $d_bienes->car_categoria_3; ?>" == "Uso personal"){
          $('#op_2_5').show();
        }else if("<?php echo $d_bienes->car_categoria_3; ?>" == "Indumentaria"){
          $('#op_2_6').show();
        }else if("<?php echo $d_bienes->car_categoria_3; ?>" == "Ins. Musicales"){
          $('#op_2_7').show();
        }else if("<?php echo $d_bienes->car_categoria_3; ?>" == "Armas"){
          $('#op_2_8').show();
        }else if("<?php echo $d_bienes->car_categoria_3; ?>" == "Condecoraciones, trofeos y premios"){
          $('#op_2_9').show();
        }else if("<?php echo $d_bienes->car_categoria_3; ?>" == "Banderas "){
          $('#op_2_10').show();
        }else if("<?php echo $d_bienes->car_categoria_3; ?>" == "Escudos"){
          $('#op_2_11').show();
        }else if("<?php echo $d_bienes->car_categoria_3; ?>" == "Utensilios, instrumentos, herramientas de trabajo, equipo tecnológico y maquinaria vidrio, porcelana mortero de piedra con mazo"){
          $('#categoria_4_2_2_12').show().prop("disabled", false);
        }else if("<?php echo $d_bienes->car_categoria_3; ?>" == "Vehículos"){
          $('#categoria_4_2_2_13').show().prop("disabled", false);
        }else if("<?php echo $d_bienes->car_categoria_3; ?>" == "Accesorios de bienes muebles"){
          $('#op_2_14').show();
        }else if("<?php echo $d_bienes->car_categoria_3; ?>" == "Accesorios de bienes inmuebles"){
          $('#op_2_15').show();
        }else if("<?php echo $d_bienes->car_categoria_3; ?>" == "Elementos relacionados con inmuebles "){
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
        if("<?php echo $d_bienes->car_categoria_4; ?>" == "Textiles"){
          $('#op_2_2_1').show();
        }else if("<?php echo $d_bienes->car_categoria_4; ?>" == "Metalicos"){
          $('#op_2_2_2').show();
        }
        
      });

      function categoria_4_2_2_12(){
        if("<?php echo $d_bienes->car_categoria_4; ?>" == "Instrumentos de medición"){
          $('#op_2_12_4').show();
        }else if("<?php echo $d_bienes->car_categoria_4; ?>" == "Elementos de escritorio madera, vidrio, metal, pluma"){
          $('#op_2_12_5').show();
        } else if("<?php echo $d_bienes->car_categoria_4; ?>" == "Herramientas manuales "){
          $('#op_2_12_6').show();
        } else if("<?php echo $d_bienes->car_categoria_4; ?>" == "Herramientas con borde filoso"){
          $('#op_2_12_7').show();
        } else if("<?php echo $d_bienes->car_categoria_4; ?>" == "Herramientas de corte"){
          $('#op_2_12_8').show();
        } else if("<?php echo $d_bienes->car_categoria_4; ?>" == "Herramientas de torsión"){
          $('#op_2_12_9').show();
        } else if("<?php echo $d_bienes->car_categoria_4; ?>" == "Herramientas neumáticas"){
          $('#op_2_12_10').show();
        } else if("<?php echo $d_bienes->car_categoria_4; ?>" == "Herramientas asociadas con energía eléctrica "){
          $('#op_2_12_11').show();
        } else if("<?php echo $d_bienes->car_categoria_4; ?>" == "Equipos tecnológica y maquinas"){
          $('#op_2_12_12').show();
        }
      }

      $('#categoria_4_2_2_12').on('change',function(){
          $('.divo_2').hide();
         categoria_4_2_2_12();
      });

      categoria_4_2_2_12();

      function detalles_joyas(){
        if($('input[name="detalles[op_2_5][0][detalle][]"][value="Joyas"]').prop('checked')){
          $('#div_util_5').show();
        }else{
          $('#div_util_5').hide();
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

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB65ckvaD2LSSs67EQ2MdhRt9bGVqU1g_A&callback=localize"
    async defer></script>

          
   <script>
   function localize()
    {
      if (navigator.geolocation)
      {
                navigator.geolocation.getCurrentPosition(mapa,error);
                // print();
            }
            else
            {
                alert('Tu navegador no soporta geolocalizacion.');
            }
    }
 
    function mapa(pos)
    {
    /************************ Aqui están las variables que te interesan***********************************/
var x = '<?php echo $d_geo->x;?>';
var y = '<?php echo $d_geo->Y;?>';

/*var x='-16.5569897';
var y='-68.6966088';*/

     var latitud = pos.coords.latitude;
      var longitud = pos.coords.longitude;
      var precision = pos.coords.accuracy;
 
      var contenedor = document.getElementById("map")
 
      var centro = new google.maps.LatLng(x,y);
 
      var propiedades =
      {
                zoom: 12,
                center: centro,
                mapTypeId: google.maps.MapTypeId.ROADMAP
      };
 
      var map = new google.maps.Map(contenedor, propiedades);
 
      var marcador = new google.maps.Marker({
                position: centro,
                map: map,
                title: "Tu posicion actual"
            });
    }
 
    function error(errorCode)
    {
      if(errorCode.code == 1)
        alert("No has permitido buscar tu localizacion")
      else if (errorCode.code==2)
        alert("Posicion no disponible")
      else
        alert("Ha ocurrido un error")
    }

    $( document ).ready(function() {
        console.log( "ready!" );
        // print();
    });
 </script>

<?php $this->end() ?>
<?php 
namespace App\Controller;
use Cake\Controller\Controller;
use Cake\ORM\TableRegistry;
use Cake\I18n\Time;

class PaginasController extends AppController{
	public function index($idPatrimonio){

		$bienesMuebles = TableRegistry::get('BienesMuebles');
		$bienesDetalles = TableRegistry::get('BienesDetalles');
		$d_bienes = $bienesMuebles->find()->where(['id_reg_patrimonio' => $idPatrimonio])->first();


		if(!empty($d_bienes)){
			// $d_bienes = $bienesMuebles->get(4);
			// $this->request->data['ides_estilo'] =unserialize($d_bienes->ides_estilo);
			$this->request->data['marc_forma_ing'] =unserialize($d_bienes->marc_forma_ing);
			$this->request->data['marc_tipo_doc_entre'] =unserialize($d_bienes->marc_tipo_doc_entre);
			$this->request->data['uso_tipo_uso_fun'] =unserialize($d_bienes->uso_tipo_uso_fun);

			$d_bienes_detalles = $bienesDetalles->find()->where(['bienes_mueble_id' => $d_bienes->id])->all();
			foreach ($d_bienes_detalles as $key => $dd_detalle) {
				# code...
				if(!empty($dd_detalle->detalle)){
					$this->request->data["detalles[{$dd_detalle->grupo}][{$dd_detalle->clave}][detalle]"] = unserialize($dd_detalle->detalle);
				}
				$this->request->data["detalles[{$dd_detalle->grupo}][{$dd_detalle->clave}][id]"] = $dd_detalle->id;
				$this->request->data["detalles[{$dd_detalle->grupo}][{$dd_detalle->clave}][otros]"] = $dd_detalle->otros;
			}
			// debug($this->request->data);exit;

		}else{
			$d_bienes = $bienesMuebles->newEntity();
		}

		$this->set(compact('d_bienes','idPatrimonio'));
	}

	public function identificaion(){
		
	}

	public function guarda(){
		$bienesMuebles = TableRegistry::get('BienesMuebles');
		if(!empty($this->request->data['id'])){
			$d_bienes = $bienesMuebles->get($this->request->data['id']);
		}else{
			$d_bienes = $bienesMuebles->newEntity();
		}

		if(!empty($_FILES['file1']['tmp_name'])){
			$d_bienes->info_foto_1 = $_FILES['file1']['name'];
		}
		if(!empty($_FILES['file2']['tmp_name'])){
			$d_bienes->info_foto_2 = $_FILES['file2']['name'];
		}
		if(!empty($_FILES['file3']['tmp_name'])){
			$d_bienes->info_foto_3 = $_FILES['file3']['name'];
		}
		if(!empty($_FILES['file4']['tmp_name'])){
			$d_bienes->info_foto_4 = $_FILES['file4']['name'];
		}
		if(!empty($_FILES['video1']['tmp_name'])){
			$d_bienes->info_video_1 = $_FILES['video1']['name'];
		}
		if(!empty($_FILES['video2']['tmp_name'])){
			$d_bienes->info_video_2 = $_FILES['video2']['name'];
		}
		
		$d_bienes->id_reg_patrimonio = $this->request->data['id_reg_patrimonio'];
		$d_bienes->iden_tipo_bien = $this->request->data['iden_tipo_bien'];
		$d_bienes->iden_num_inven = $this->request->data['iden_num_inven'];
		$d_bienes->iden_epoca = $this->request->data['iden_epoca'];
		$d_bienes->iden_num_inven_ant = $this->request->data['iden_num_inven_ant'];
		$d_bienes->ides_estilo = $this->request->data['ides_estilo'];
		$d_bienes->iden_escuela = $this->request->data['iden_escuela'];
		$d_bienes->iden_estilo_otros = $this->request->data['iden_estilo_otros'];
		$d_bienes->iden_escuela_otros = $this->request->data['iden_escuela_otros'];
		$d_bienes->iden_autor_atrib = $this->request->data['iden_autor_atrib'];
		$d_bienes->iden_origen_proce = $this->request->data['iden_origen_proce'];
		$d_bienes->iden_obtencion = $this->request->data['iden_obtencion'];
		$d_bienes->fecha_adquisicion = $this->lafecha($this->request->data['fecha_adquisicion']);
		


		$d_bienes->loc_comunidad = $this->request->data['loc_comunidad'];
		$d_bienes->loc_ciudad= $this->request->data['loc_ciudad'];
		$d_bienes->loc_inmueble = $this->request->data['loc_inmueble'];
		$d_bienes->loc_subcontenedor = $this->request->data['loc_subcontenedor'];
		$d_bienes->loc_direccion = $this->request->data['loc_direccion'];
		$d_bienes->loc_cod_institucional = $this->request->data['loc_cod_institucional'];


		$d_bienes->marc_recono_inter = $this->request->data['marc_recono_inter'];
		$d_bienes->marc_patri_cultu = $this->request->data['marc_patri_cultu'];
		$d_bienes->marc_patri_cultu_dep = $this->request->data['marc_patri_cultu_dep'];
		$d_bienes->marc_patri_cultu_muni = $this->request->data['marc_patri_cultu_muni'];
		$d_bienes->marc_forma_ing = serialize($this->request->data['marc_forma_ing']);
		$d_bienes->marc_forma_ing_texto = $this->request->data['marc_forma_ing_texto'];
		$d_bienes->marc_tipo_doc_entre = serialize($this->request->data['marc_tipo_doc_entre']);
		$d_bienes->marc_tipo_doc_entre_otros = $this->request->data['marc_tipo_doc_entre_otros'];

		if(!empty($this->request->data['car_categoria_1'])){
			$d_bienes->car_categoria_1 = $this->request->data['car_categoria_1'];
		}
		if(!empty($this->request->data['car_categoria_2'])){
			$d_bienes->car_categoria_2 = $this->request->data['car_categoria_2'];
		}
		if(!empty($this->request->data['car_categoria_3'])){
			$d_bienes->car_categoria_3 = $this->request->data['car_categoria_3'];
		}
		if(!empty($this->request->data['car_categoria_4'])){
			$d_bienes->car_categoria_4 = $this->request->data['car_categoria_4'];
		}

		$d_bienes->uso_tipo_uso_fun = serialize($this->request->data['uso_tipo_uso_fun']);
		$d_bienes->uso_funebres = $this->request->data['uso_funebres'];
		$d_bienes->uso_tipo_uso_otros = $this->request->data['uso_tipo_uso_otros'];
		$d_bienes->uso_funebres_otros = $this->request->data['uso_funebres_otros'];
		$d_bienes->uso_profundidad = $this->request->data['uso_profundidad'];
		$d_bienes->uso_circunferencia = $this->request->data['uso_circunferencia'];
		$d_bienes->uso_alto = $this->request->data['uso_alto'];
		$d_bienes->uso_ancho = $this->request->data['uso_ancho'];
		$d_bienes->uso_grosor = $this->request->data['uso_grosor'];
		$d_bienes->uso_diametro = $this->request->data['uso_diametro'];
		$d_bienes->uso_peso = $this->request->data['uso_peso'];
		$d_bienes->uso_nivel_integridad = $this->request->data['uso_nivel_integridad'];
		$d_bienes->uso_nivel_integridad_2 = $this->request->data['uso_nivel_integridad_2'];
		$d_bienes->uso_intervencion = $this->request->data['uso_intervencion'];
		$d_bienes->uso_caract_icon = $this->request->data['uso_caract_icon'];


		$d_bienes->info_ubicacion_1 = $this->request->data['info_ubicacion_1'];
		$d_bienes->info_fecha_1 = $this->lafecha($this->request->data['info_fecha_1']);
		$d_bienes->info_autor_1 = $this->request->data['info_autor_1'];
	
		$d_bienes->info_ubicacion_2 = $this->request->data['info_ubicacion_2'];
		$d_bienes->info_fecha_2 = $this->lafecha($this->request->data['info_fecha_2']);
		$d_bienes->info_autor_2 = $this->request->data['info_autor_2'];
	
		$d_bienes->info_ubicacion_3 = $this->request->data['info_ubicacion_3'];
		$d_bienes->info_fecha_3 = $this->lafecha($this->request->data['info_fecha_3']);
		$d_bienes->info_autor_3 = $this->request->data['info_autor_3'];
	
		$d_bienes->info_ubicacion_4 = $this->request->data['info_ubicacion_4'];
		$d_bienes->info_fecha_4 = $this->lafecha($this->request->data['info_fecha_4']);
		$d_bienes->info_autor_4 = $this->request->data['info_autor_4'];


		$d_bienes->info_vubicacion_1 = $this->request->data['info_vubicacion_1'];
		$d_bienes->info_vfecha_1 = $this->lafecha($this->request->data['info_vfecha_1']);
		$d_bienes->info_vautor_1 = $this->request->data['info_vautor_1'];
		$d_bienes->info_vubicacion_2 = $this->request->data['info_vubicacion_2'];
		$d_bienes->info_vfecha_2 = $this->lafecha($this->request->data['info_vfecha_2']);
		$d_bienes->info_vautor_2 = $this->request->data['info_vautor_2'];


		$d_bienes->dat_reg_nom_1 = $this->request->data['dat_reg_nom_1'];
		$d_bienes->dat_reg_nom_2 = $this->request->data['dat_reg_nom_2'];
		$d_bienes->dat_rev_nom_1 = $this->request->data['dat_rev_nom_1'];
		$d_bienes->dat_rev_nom_2 = $this->request->data['dat_rev_nom_2'];
		$d_bienes->dat_apro_nom_1 = $this->request->data['dat_apro_nom_1'];
		$d_bienes->dat_apro_nom_2 = $this->request->data['dat_apro_nom_2'];

		$d_bienes->dat_reg_fech_1 = $this->lafecha($this->request->data['dat_reg_fech_1']);
		$d_bienes->dat_reg_fech_2 = $this->lafecha($this->request->data['dat_reg_fech_2']);
		$d_bienes->dat_rev_fech_1 = $this->lafecha($this->request->data['dat_rev_fech_1']);
		$d_bienes->dat_rev_fech_2 = $this->lafecha($this->request->data['dat_rev_fech_2']);
		$d_bienes->dat_apro_fech_1 = $this->lafecha($this->request->data['dat_apro_fech_1']);
		$d_bienes->dat_apro_fech_2 = $this->lafecha($this->request->data['dat_apro_fech_2']);

		$bienesMuebles->save($d_bienes);

		$bienesDetalles = TableRegistry::get('BienesDetalles');
		$datos_detalles = $this->request->data['detalles'];

		foreach ($datos_detalles as $ngrupo => $d_detalles) {
			foreach ($d_detalles as $nclave => $d_detalle) {
				// debug(empty($d_detalle['id']));exit;
				if(!empty($d_detalle['id'])){
					$d_bienes_det = $bienesDetalles->get($d_detalle['id']);
				}else{
					$d_bienes_det = $bienesDetalles->newEntity();
					$d_bienes_det->bienes_mueble_id = $d_bienes->id;
					$d_bienes_det->grupo = $ngrupo;
					$d_bienes_det->clave = $nclave;
					$d_bienes_det->titulo = $d_detalle['titulo'];
				}
				if(!empty($d_detalle['detalle'])){
					$d_bienes_det->detalle = serialize($d_detalle['detalle']);
				}else{
					$d_bienes_det->detalle = '';
				}
				$d_bienes_det->otros = $d_detalle['otros'];
				$bienesDetalles->save($d_bienes_det);

			}
		}

		if(!empty($_FILES['file1']['tmp_name'])){
			$target_dir = WWW_ROOT."uploads/";
			$imageFileType = strtolower(pathinfo($_FILES['file1']['name'],PATHINFO_EXTENSION));
			$target_file = $target_dir . "bie_mue_foto1_".$d_bienes->id.".".$imageFileType;
			if(file_exists($target_file)){
				 unlink($target_file);
			}
			move_uploaded_file($_FILES["file1"]["tmp_name"], $target_file);
		}
		if(!empty($_FILES['file2']['tmp_name'])){
			$target_dir = WWW_ROOT."uploads/";
			$imageFileType = strtolower(pathinfo($_FILES['file2']['name'],PATHINFO_EXTENSION));
			$target_file = $target_dir . "bie_mue_foto2_".$d_bienes->id.".".$imageFileType;
			if(file_exists($target_file)){
				 unlink($target_file);
			}
			move_uploaded_file($_FILES["file2"]["tmp_name"], $target_file);
		}
		if(!empty($_FILES['file3']['tmp_name'])){
			$target_dir = WWW_ROOT."uploads/";
			$imageFileType = strtolower(pathinfo($_FILES['file3']['name'],PATHINFO_EXTENSION));
			$target_file = $target_dir . "bie_mue_foto3_".$d_bienes->id.".".$imageFileType;
			if(file_exists($target_file)){
				 unlink($target_file);
			}
			move_uploaded_file($_FILES["file3"]["tmp_name"], $target_file);
		}
		if(!empty($_FILES['file4']['tmp_name'])){
			$target_dir = WWW_ROOT."uploads/";
			$imageFileType = strtolower(pathinfo($_FILES['file4']['name'],PATHINFO_EXTENSION));
			$target_file = $target_dir . "bie_mue_foto4_".$d_bienes->id.".".$imageFileType;
			if(file_exists($target_file)){
				 unlink($target_file);
			}
			move_uploaded_file($_FILES["file4"]["tmp_name"], $target_file);
		}


		if(!empty($_FILES['video1']['tmp_name'])){
			$target_dir = WWW_ROOT."uploads/";
			$imageFileType = strtolower(pathinfo($_FILES['video1']['name'],PATHINFO_EXTENSION));
			$target_file = $target_dir . "bie_mue_video1_".$d_bienes->id.".".$imageFileType;
			if(file_exists($target_file)){
				 unlink($target_file);
			}
			move_uploaded_file($_FILES["video1"]["tmp_name"], $target_file);
		}
		if(!empty($_FILES['video2']['tmp_name'])){
			$target_dir = WWW_ROOT."uploads/";
			$imageFileType = strtolower(pathinfo($_FILES['video2']['name'],PATHINFO_EXTENSION));
			$target_file = $target_dir . "bie_mue_video2_".$d_bienes->id.".".$imageFileType;
			if(file_exists($target_file)){
				 unlink($target_file);
			}
			move_uploaded_file($_FILES["video2"]["tmp_name"], $target_file);
		}

		$this->redirect($this->referer());

	}

	function lafecha($vector){
		if(!empty($vector['year']) && !empty($vector['month']) && !empty($vector['day'])){
			return $vector['year'].'-'.$vector['month'].'-'.$vector['day'];
		}else{
			return null;
		}
	}



	public function impresion($idPatrimonio){

		$bienesMuebles = TableRegistry::get('BienesMuebles');
		$bienesDetalles = TableRegistry::get('BienesDetalles');
		$RegistroPatrimonio = TableRegistry::get('RegistroPatrimonio');
		$Control = TableRegistry::get('Control');
		$SegundoNivel = TableRegistry::get('SegundoNivel');
		$Georeferencia = TableRegistry::get('Georeferencia');
		$d_regPatrimonio = $RegistroPatrimonio->get($idPatrimonio,['contain' => ['Departamento','Municipio','Provincia']]);
		$d_bienes = $bienesMuebles->find()->where(['id_reg_patrimonio' => $idPatrimonio])->first();

		$d_control = $Control->find()->where(['id_patrimonio' => $idPatrimonio])->first();
		$d_segundo = $SegundoNivel->find()->where(['id_reg_patrimonio' => $idPatrimonio])->first();
		$d_geo = $Georeferencia->find()->where(['id_reg_patrimonio' => $idPatrimonio])->first();

		/*debug($d_control);
		exit;*/

		if(!empty($d_bienes)){
			// $d_bienes = $bienesMuebles->get(4);
			// $this->request->data['ides_estilo'] =unserialize($d_bienes->ides_estilo);
			$d_bienes->marc_forma_ing = empty(unserialize($d_bienes->marc_forma_ing)) ? [] : unserialize($d_bienes->marc_forma_ing);
			$d_bienes->marc_tipo_doc_entre = empty(unserialize($d_bienes->marc_tipo_doc_entre)) ? [] : unserialize($d_bienes->marc_tipo_doc_entre);
			$d_bienes->uso_tipo_uso_fun = empty(unserialize($d_bienes->uso_tipo_uso_fun)) ? [] : unserialize($d_bienes->uso_tipo_uso_fun);

			// debug($d_bienes->marc_forma_ing);exit;
			$d_bienes_detalles = $bienesDetalles->find()->where(['bienes_mueble_id' => $d_bienes->id])->all();
			foreach ($d_bienes_detalles as $key => $dd_detalle) {
				# code...
				if(!empty($dd_detalle->detalle)){
					$this->request->data["detalles[{$dd_detalle->grupo}][{$dd_detalle->clave}][detalle]"] = unserialize($dd_detalle->detalle);
				}else{
					$this->request->data["detalles[{$dd_detalle->grupo}][{$dd_detalle->clave}][detalle]"] = [];
				}
				$this->request->data["detalles[{$dd_detalle->grupo}][{$dd_detalle->clave}][otros]"] = $dd_detalle->otros;

			}
			// debug($this->request->data['detalles[op_1_2][0][detalle]']);exit;

		}else{
			$d_bienes = $bienesMuebles->newEntity();
		}
		$d_des = $this->request->data;

		// debug($d_des);exit;
		$this->set(compact('d_bienes','idPatrimonio','d_regPatrimonio','d_des','d_control','d_segundo','d_geo'));
	}

}

# actividad01
Actividad Codeigniter

  
 ![Descripcion](Captura%20de%20pantalla%202016-06-02%2016.17.14.png)


```sql
DROP TABLE IF EXISTS `Responsables`;

CREATE TABLE `Responsables` (
  `reponsable_id` int(10) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(25) DEFAULT NULL,
  `unidad_id` int(10) DEFAULT NULL,
  `estado` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`reponsable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `Responsables` (`reponsable_id`, `nombre`, `unidad_id`, `estado`)
VALUES
	(1,'JUAN',1,'ACTIVO'),
	(2,'PEDRO',1,'ACTIVO'),
	(3,'RAMON',2,'ACTIVO'),
	(4,'DIEGO',2,'ACTIVO'),
	(5,'MARIA',3,'ACTIVO'),
	(6,'DIANA',3,'ACTIVO'),
	(7,'CLAUDIA',4,'ACTIVO'),
	(8,'RAFAEL',4,'ACTIVO'),
	(9,'ANDRES',4,'ACTIVO'),
	(10,'PAULA',5,'ACTIVO'),
	(11,'PABLO',6,'ACTIVO'),
	(12,'ADRIAN',6,'ACTIVO'),
	(13,'FABIAN',7,'ACTIVO'),
	(14,'ROMINA',8,'ACTIVO'),
	(15,'CLAUDIA',9,'ACTIVO'),
	(16,'JAVIERA',10,'ACTIVO'),
	(17,'IVA',10,'ACTIVO'),
	(18,'VICTOR',11,'ACTIVO'),
	(19,'JULIO',11,'ACTIVO'),
	(20,'FABIAN',12,'ACTIVO'),
	(21,'ANTONIO',12,'ACTIVO'),
	(22,'EMANUEL',7,'ACTIVO');


DROP TABLE IF EXISTS `Servicios`;

CREATE TABLE `Servicios` (
  `servicio_id` int(10) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(25) DEFAULT NULL,
  `estado` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`servicio_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `Servicios` (`servicio_id`, `nombre`, `estado`)
VALUES
	(1,'CIRUGIA','ACTIVO'),
	(2,'HOSPITALIZACION','ACTIVO'),
	(3,'URGENCIA','ACTIVO');


DROP TABLE IF EXISTS `Tareas`;

CREATE TABLE `Tareas` (
  `tarea_id` int(10) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(25) DEFAULT NULL,
  `responsable_id` int(10) DEFAULT NULL,
  `estado` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`tarea_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `Unidades`;

CREATE TABLE `Unidades` (
  `unidad_id` int(10) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(25) DEFAULT NULL,
  `servicio_id` int(10) DEFAULT NULL,
  `estado` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`unidad_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `Unidades` (`unidad_id`, `nombre`, `servicio_id`, `estado`)
VALUES
	(1,'URGENCIA 1',3,'ACTIVO'),
	(2,'URGENCIA 2',3,'ACTIVO'),
	(3,'URGENCIA 3',3,'ACTIVO'),
	(4,'CIRUGIA 1',1,'ACTIVO'),
	(5,'CIRUGIA 2',1,'ACTIVO'),
	(6,'CIRUGIA 3',1,'ACTIVO'),
	(7,'CIRUGIA 4',1,'ACTIVO'),
	(8,'HOSPITALIZACION 1',2,'ACTIVO'),
	(9,'HOSPITALIZACION 2',2,'ACTIVO'),
	(10,'HOSPITALIZACION 3',2,'ACTIVO'),
	(11,'HOSPITALIZACION 4',2,'ACTIVO'),
	(12,'HOSPITALIZACION 5',2,'ACTIVO');






```
	ENVIAR JSON DESDE EL CONTROLADOR
```php
	MODEL:
	$query=$this->db->query("select * from Usuarios");
        $result=$query->result_object();
        $this->db->close();
        return $result;

	CONTROLLER:
	-----------
        $data=$this->Usuario->getAll();
        echo json_encode($data);
```

	ENVIAR DATOS GET/POST JQUERY http://www.w3schools.com/jquery/jquery_ajax_get_post.asp
	
```javascript
   $("button").click(function(){
     $.get("demo_test.asp", function(data, status){
          alert("Data: " + data + "\nStatus: " + status);
     });
   });

```

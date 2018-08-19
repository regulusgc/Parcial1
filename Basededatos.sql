

drop table if exists TB_BITACORA_AUDITORIA;

drop table if exists TB_CAT_DEPARTAMENTO;

drop table if exists TB_CAT_DESTINO_SUBSIDIO;

drop table if exists TB_CAT_DILIGENCIAS;

drop table if exists TB_CAT_MUNICIPIOS;

drop table if exists TB_CAT_PROYECTOS;

drop table if exists TB_CAT_RELACION_FAMILIAR;

drop table if exists TB_DESARROLLADORES;

drop table if exists TB_DIGITALIZACION;

drop table if exists TB_EXPEDIENTE;

drop table if exists TB_EXPEDIENTE_DILIGENCIA;

drop table if exists TB_EXPEDIENTE_REQUSITOS;

drop table if exists TB_INFORMACION_PERSONAS_INVOLUCRADAS;

drop table if exists TB_REQUISITOS;

drop table if exists TB_ROLES;

drop table if exists TB_SEXO;

drop table if exists TB_TELEFONOS;

drop table if exists TB_TIPODEACCION;

drop table if exists TB_TIPOTELEFONO;

drop table if exists TB_TIPO_INGRESO;

drop table if exists TB_UNIDAD_TRABAJO;

drop table if exists TB_USUARIOS;

/*==============================================================*/
/* Table: TB_BITACORA_AUDITORIA                                 */
/*==============================================================*/
create table TB_BITACORA_AUDITORIA
(
   ID_BITACORA          int not null auto_increment,
   ID_USUARIO           int,
   TIPO_ACCION      	varchar(25),
   OBJETO               varchar(100),
   DATO_ENTERIOR        varchar(200),
   NUEVO_DATO           varchar(200),
   FECHA_ACCION         date,
   DIRECCIONIP          varchar(20),
   NOMBRE_COMPUTADORA   varchar(20),
   primary key (ID_BITACORA)
   
);

alter table TB_BITACORA_AUDITORIA comment 'Contiene la bitacora de auditoría de las tranasacciones hech';

/*==============================================================*/
/* Table: TB_CAT_DEPARTAMENTO                                   */
/*==============================================================*/
create table TB_CAT_DEPARTAMENTO
(
   ID_DEPARTAMENTO      int not null auto_increment,
   DESCRIPCION_DEPARTAMENTO varchar(100),
   primary key (ID_DEPARTAMENTO)
   ,unique key (DESCRIPCION_DEPARTAMENTO)
);

alter table TB_CAT_DEPARTAMENTO comment 'Catálogo de Departamentos de Guatemala';

/*==============================================================*/
/* Table: TB_CAT_DESTINO_SUBSIDIO                               */
/*==============================================================*/
create table TB_CAT_DESTINO_SUBSIDIO
(
   ID_TIPO_SOILCITUD_SUBSIDIO int not null auto_increment,
   DESCRIPCION          varchar(100),
   primary key (ID_TIPO_SOILCITUD_SUBSIDIO)
);

alter table TB_CAT_DESTINO_SUBSIDIO comment 'Destino del subsidio (ampliación, compra terreno, construcci';

/*==============================================================*/
/* Table: TB_CAT_DILIGENCIAS                                    */
/*==============================================================*/
create table TB_CAT_DILIGENCIAS
(
   ID_DILIGENCIA        int not null auto_increment,
   ID_UNIDAD_TRABAJO    int,
   DESCRIPCION_DILIGENCIA varchar(200),
   OBLIGATORIA          char(1),
   ORDEN                int,
   primary key (ID_DILIGENCIA)
);

alter table TB_CAT_DILIGENCIAS comment 'Listado de diligencias que se deben de realizar dependiento ';

/*==============================================================*/
/* Table: TB_CAT_MUNICIPIOS                                     */
/*==============================================================*/
create table TB_CAT_MUNICIPIOS
(
   ID_MUNICIPIO         int not null auto_increment,
   ID_DEPARTAMENTO      int,
   DESCRIPCION_MUNICIPIO varchar(100),
   primary key (ID_MUNICIPIO)
   ,unique key (DESCRIPCION_MUNICIPIO)
);

alter table TB_CAT_MUNICIPIOS comment 'Catalogo de Municipios por Departamentos de guatemala';

/*==============================================================*/
/* Table: TB_CAT_PROYECTOS                                      */
/*==============================================================*/
create table TB_CAT_PROYECTOS
(
   ID_PROYECTO          int not null auto_increment,
   ID_MUNICIPIO_PROYECTO int,
   ID_DESARROLLADOR     int,
   NOMBRE_PROYECTO      varchar(200) not null,
   LONGITUD_PROYECTO    varchar(200) not null,
   LATITUD_PROYECTO     varchar(200) not null,
   MONTO_APROXIMADO_PROYECTO varchar(200) not null,
   FECHA_INICIO_TRABAJOS date not null,
   
   primary key (ID_PROYECTO)
   ,UNIQUE KEY(NOMBRE_PROYECTO)
);

alter table TB_CAT_PROYECTOS comment 'Contiene los nombres y datos generales de los proyectos que ';

/*==============================================================*/
/* Table: TB_CAT_RELACION_FAMILIAR                              */
/*==============================================================*/
create table TB_CAT_RELACION_FAMILIAR
(
   ID_RELACION_FAMILIAR int not null auto_increment,
   RFAMILIAR_NOMBRE          varchar(50),
   primary key (ID_RELACION_FAMILIAR)
   ,UNIQUE KEY (RFAMILIAR_NOMBRE)
);

alter table TB_CAT_RELACION_FAMILIAR comment 'informacion de la relacion familiar
Solicitante
';

/*==============================================================*/
/* Table: TB_DESARROLLADORES                                    */
/*==============================================================*/
create table TB_DESARROLLADORES
(
   ID_DESARROLLADOR     int not null auto_increment,
   TELEFONO          varchar(15) not null,
   NOMBRE_DESARROLLADOR varchar(200) not null,
   NIT                  varchar(20) not null,
   DIRECCION_EMPRESA    varchar(200) not null,
   CORREO_ELECTRONICO   varchar(20) not null,
   primary key (ID_DESARROLLADOR)
   ,UNIQUE KEY (NIT)
   , UNIQUE KEY (CORREO_ELECTRONICO)
   ,UNIQUE KEY (TELEFONO)
   
);

alter table TB_DESARROLLADORES comment 'Catalogo de Desarrolladores que llevaran a cabo  proyectos, ';

/*==============================================================*/
/* Table: TB_DIGITALIZACION                                     */
/*==============================================================*/
create table TB_DIGITALIZACION
(
   ID_DOCUMENTO_DIGITALIZADO int not null auto_increment,
   ID_EXPEDIENTE_REQUISITO int,
   ID_USUARIO           int,
   NOMBRE_ARCHIVO       varchar(200),
   FECHA_ESCANEO        date,
   primary key (ID_DOCUMENTO_DIGITALIZADO)
);

alter table TB_DIGITALIZACION comment 'lleva el control de todos los archivos que han sido digitali';

/*==============================================================*/
/* Table: TB_EXPEDIENTE                                         */
/*==============================================================*/
create table TB_EXPEDIENTE
(
   ID_EXPEDIENTE        int not null auto_increment,
   ID_TIPO_INGRESO      int,
   ID_TIPO_SOILCITUD_SUBSIDIO int,
   ID_PROYECTO          int,
   FECHA_REGISTRO       date,
   OBSERVACIONES_EXPEDIENTE varchar(200),
   MONTO_SOLICITADO     varchar(200),
   LONGITUD_PROYECTO    varchar(200),
   LATITUD_PROYECTO     varchar(200),
   NUMERO_EXPEDIENTE    int not null,
   ANIO_EXPEDIENTE      int not null,
   ID_USUARIO           int,
   APROBADO				VARCHAR(20),
   primary key (ID_EXPEDIENTE, NUMERO_EXPEDIENTE, ANIO_EXPEDIENTE)
);

alter table TB_EXPEDIENTE comment 'Tabla principal de ingreso y control de expediente, cada exp';

/*==============================================================*/
/* Table: TB_EXPEDIENTE_DILIGENCIA                              */
/*==============================================================*/
create table TB_EXPEDIENTE_DILIGENCIA
(
   ID_EXPEDIENTE        int,
   NUMERO_EXPEDIENTE    int,
   ANIO_EXPEDIENTE      int,
   ID_DILIGENCIA        int,
   ID_DILIGENCIA_EXPEDIENTE int not null auto_increment,
   ID_USUARIO           int,
   FECHA_DILIGENCIA     date,
   RESULTADO_DILIGENCIA varchar(500),
   DILIGENCIA_FINALIZADA char(1),
   NOMBRE_ARCHIVO_DIGITALIZADO varchar(500),
   primary key (ID_DILIGENCIA_EXPEDIENTE)
);

alter table TB_EXPEDIENTE_DILIGENCIA comment 'Control de todas las diligencias que se realicen al epxedien';

/*==============================================================*/
/* Table: TB_EXPEDIENTE_REQUSITOS                               */
/*==============================================================*/
create table TB_EXPEDIENTE_REQUSITOS
(
   ID_EXPEDIENTE_REQUISITO int not null auto_increment,
   ID_REQUISITO         int,
   ID_EXPEDIENTE        int,
   NUMERO_EXPEDIENTE    int,
   ANIO_EXPEDIENTE      int,
   ID_USUARIO           int,
   FECHA_PRESENTACION   date,
   ACEPTADO             char(1),
   MOTIVO_RECHAZO       varchar(200),
   primary key (ID_EXPEDIENTE_REQUISITO)
);

alter table TB_EXPEDIENTE_REQUSITOS comment 'Detalle de los requisitos por expediente, se puede chequear ';

/*==============================================================*/
/* Table: TB_INFORMACION_PERSONAS_INVOLUCRADAS                  */
/*==============================================================*/
create table TB_INFORMACION_PERSONAS_INVOLUCRADAS
(
   ID_INFORMACION_SOLICITANTE int not null auto_increment,
   ID_EXPEDIENTE_REQUISITO int,
   ID_RELACION_FAMILIAR int,
   ID_SEXO              int,
   TELEFONO          varchar(15),
   NUMERO_DOCUMENTO     varchar(50) not null comment 'Entre los requisitos es ser guatemalteco, por ende, debe poseer DPI y no pasaporte u otro tipo de documento',
   NOMBRE1              varchar(50) not null,
   NOMBRE2              varchar(50),
   APELLIDO1            varchar(50) not null,
   APELLIDO2            varchar(50),
   APELLIDOCASADA       varchar(50),
   FECHA_NACIMIENTO     date not null,
   DIRECCION            varchar(100) not null,
   primary key (ID_INFORMACION_SOLICITANTE)
   ,UNIQUE KEY (TELEFONO)
);

alter table TB_INFORMACION_PERSONAS_INVOLUCRADAS comment 'informacion completa de los solicitantes y adicionalmente el';

/*==============================================================*/
/* Table: TB_REQUISITOS                                         */
/*==============================================================*/
CREATE TABLE `tb_requisitos` (
  `ID_REQUISITO` int(11) NOT NULL AUTO_INCREMENT,
  `ID_TIPO_INGRESO` int(11) DEFAULT NULL,
  `CARENCIA_BIENES` varchar(2) NOT NULL,
  `SALARIO_MINIMO` varchar(2) NOT NULL,
  `OBSERVACIONES` varchar(500) DEFAULT NULL,
  `OBLIGATORIO` char(1) NOT NULL,
  `STDSOCIOECONOMICO` varchar(20) NOT NULL,
  `PROVEEDOR_ESTADO` varchar(45) DEFAULT NULL,
  `SOLVENCIA_CONTRALORIA` varchar(45) DEFAULT NULL,
  `AUTO_COCODE` varchar(45) DEFAULT NULL,
  `BOLETO_ORNATO` varchar(10) NOT NULL,
  `NOMBRE_EMPRESA` varchar(45) DEFAULT NULL,
  `LIDER_GRUPO` varchar(45) DEFAULT NULL,
  `NOMBRE_REQPROYEC` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`ID_REQUISITO`),
  KEY `FK_REFERENCE_4` (`ID_TIPO_INGRESO`),
  CONSTRAINT `FK_REFERENCE_4` FOREIGN KEY (`ID_TIPO_INGRESO`) REFERENCES `tb_tipo_ingreso` (`ID_TIPO_INGRESO`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1 COMMENT='Catálogo de requisitos necesarios en cada uno de los tipos d'

alter table TB_REQUISITOS comment 'Catálogo de requisitos necesarios en cada uno de los tipos d';

/*==============================================================*/
/* Table: TB_ROLES                                              */
/*==============================================================*/
create table TB_ROLES
(
   ID_ROL               int not null auto_increment,
   DESCRIPCION_ROL      varchar(30),
   primary key (ID_ROL)
);

alter table TB_ROLES comment 'Información de los roles por usuario, con esto se tendrá un ';

/*==============================================================*/
/* Table: TB_SEXO                                               */
/*==============================================================*/
create table TB_SEXO
(
   ID_SEXO              int not null auto_increment,
   SEXO_NOMBRE          varchar(15) not null,
   primary key (ID_SEXO)
);

/*==============================================================*/
/* Table: TB_TELEFONOS                                          */
/*==============================================================*/


/*==============================================================*/
/* Table: TB_TIPODEACCION                                       */
/*==============================================================*/


/*==============================================================*/
/* Table: TB_TIPOTELEFONO                                       */
/*==============================================================*/


/*==============================================================*/
/* Table: TB_TIPO_INGRESO                                       */
/*==============================================================*/
create table TB_TIPO_INGRESO
(
   ID_TIPO_INGRESO      int not null auto_increment,
   DESCRIPCION_INGRESO  varchar(100),
   primary key (ID_TIPO_INGRESO)
);

alter table TB_TIPO_INGRESO comment 'Tramite personal
Tramite en grupo
Solicitud por ';

/*==============================================================*/
/* Table: TB_UNIDAD_TRABAJO                                     */
/*==============================================================*/
create table TB_UNIDAD_TRABAJO
(
   ID_UNIDAD_TRABAJO    int not null auto_increment,
   DESCRIPCION_UNIDAD   varchar(200),
   primary key (ID_UNIDAD_TRABAJO)
);

alter table TB_UNIDAD_TRABAJO comment 'Catalogo de unidades donde trabaja el empleado:
ventan';

/*==============================================================*/
/* Table: TB_USUARIOS                                           */
/*==============================================================*/
create table TB_USUARIOS
(
   ID_USUARIO           int not null auto_increment,
   USERNAME             varchar(10) not null,
   ID_ROL               int,
   ID_UNIDAD            int,
   NOMBRE               varchar(150) not null,
   ESTATUS              char(1) not null,
   CLAVE                varchar(80) not null,
   APELLIDO             varchar(50) not null,
   primary key (ID_USUARIO)
   ,UNIQUE KEY(USERNAME)
);

alter table TB_USUARIOS comment 'Catalogo de usuarios, registro de roles y unidad de trabajo
';

alter table TB_BITACORA_AUDITORIA add constraint FK_REFERENCE_24 foreign key (ID_USUARIO)
      references TB_USUARIOS (ID_USUARIO);



alter table TB_CAT_DILIGENCIAS add constraint FK_REFERENCE_16 foreign key (ID_UNIDAD_TRABAJO)
      references TB_UNIDAD_TRABAJO (ID_UNIDAD_TRABAJO);

alter table TB_CAT_MUNICIPIOS add constraint FK_REFERENCE_20 foreign key (ID_DEPARTAMENTO)
      references TB_CAT_DEPARTAMENTO (ID_DEPARTAMENTO);

alter table TB_CAT_PROYECTOS add constraint FK_REFERENCE_21 foreign key (ID_MUNICIPIO_PROYECTO)
      references TB_CAT_MUNICIPIOS (ID_MUNICIPIO);

alter table TB_CAT_PROYECTOS add constraint FK_REFERENCE_22 foreign key (ID_DESARROLLADOR)
      references TB_DESARROLLADORES (ID_DESARROLLADOR);



alter table TB_DIGITALIZACION add constraint FK_REFERENCE_12 foreign key (ID_USUARIO)
      references TB_USUARIOS (ID_USUARIO);

alter table TB_DIGITALIZACION add constraint FK_REFERENCE_13 foreign key (ID_EXPEDIENTE_REQUISITO)
      references TB_EXPEDIENTE_REQUSITOS (ID_EXPEDIENTE_REQUISITO);

alter table TB_EXPEDIENTE add constraint FK_TB_EXPED_REFERENCE_TB_USUAR211 foreign key (ID_USUARIO)
      references TB_USUARIOS (ID_USUARIO);

alter table TB_EXPEDIENTE add constraint FK_REFERENCE_23 foreign key (ID_PROYECTO)
      references TB_CAT_PROYECTOS (ID_PROYECTO);

alter table TB_EXPEDIENTE add constraint FK_REFERENCE_3 foreign key (ID_TIPO_INGRESO)
      references TB_TIPO_INGRESO (ID_TIPO_INGRESO);

alter table TB_EXPEDIENTE add constraint FK_TB_EXPED_REFERENCE_TB_CAT_D2 foreign key (ID_TIPO_SOILCITUD_SUBSIDIO)
      references TB_CAT_DESTINO_SUBSIDIO (ID_TIPO_SOILCITUD_SUBSIDIO);

alter table TB_EXPEDIENTE_DILIGENCIA add constraint FK_TB_EXPED_REFERENCE_TB_EXPED23 foreign key (ID_EXPEDIENTE, NUMERO_EXPEDIENTE, ANIO_EXPEDIENTE)
      references TB_EXPEDIENTE (ID_EXPEDIENTE, NUMERO_EXPEDIENTE, ANIO_EXPEDIENTE);

alter table TB_EXPEDIENTE_DILIGENCIA add constraint FK_TB_EXPED_REFERENCE_TB_CAT_D22 foreign key (ID_DILIGENCIA)
      references TB_CAT_DILIGENCIAS (ID_DILIGENCIA);

alter table TB_EXPEDIENTE_DILIGENCIA add constraint FK_TB_EXPED_REFERENCE_TB_USUAR1 foreign key (ID_USUARIO)
      references TB_USUARIOS (ID_USUARIO);

alter table TB_EXPEDIENTE_REQUSITOS add constraint FK_REFERENCE_7 foreign key (ID_REQUISITO)
      references TB_REQUISITOS (ID_REQUISITO);

alter table TB_EXPEDIENTE_REQUSITOS add constraint FK_TB_EXPED_REFERENCE_TB_USUAR2 foreign key (ID_USUARIO)
      references TB_USUARIOS (ID_USUARIO);

alter table TB_EXPEDIENTE_REQUSITOS add constraint FK_TB_EXPED_REFERENCE_TB_EXPED2 foreign key (ID_EXPEDIENTE, NUMERO_EXPEDIENTE, ANIO_EXPEDIENTE)
      references TB_EXPEDIENTE (ID_EXPEDIENTE, NUMERO_EXPEDIENTE, ANIO_EXPEDIENTE);

alter table TB_INFORMACION_PERSONAS_INVOLUCRADAS add constraint FK_REFERENCE_14 foreign key (ID_EXPEDIENTE_REQUISITO)
      references TB_EXPEDIENTE_REQUSITOS (ID_EXPEDIENTE_REQUISITO);

alter table TB_INFORMACION_PERSONAS_INVOLUCRADAS add constraint FK_REFERENCE_15 foreign key (ID_RELACION_FAMILIAR)
      references TB_CAT_RELACION_FAMILIAR (ID_RELACION_FAMILIAR);

alter table TB_INFORMACION_PERSONAS_INVOLUCRADAS add constraint FK_REFERENCE_25 foreign key (ID_SEXO)
      references TB_SEXO (ID_SEXO);



alter table TB_REQUISITOS add constraint FK_REFERENCE_4 foreign key (ID_TIPO_INGRESO)
      references TB_TIPO_INGRESO (ID_TIPO_INGRESO);



alter table TB_USUARIOS add constraint FK_REFERENCE_1 foreign key (ID_ROL)
      references TB_ROLES (ID_ROL);

alter table TB_USUARIOS add constraint FK_REFERENCE_6 foreign key (ID_UNIDAD)
      references TB_UNIDAD_TRABAJO (ID_UNIDAD_TRABAJO);
INFO - 2023-10-09 23:34:28 --> Config Class Initialized
INFO - 2023-10-09 23:34:28 --> Hooks Class Initialized
DEBUG - 2023-10-09 23:34:28 --> UTF-8 Support Enabled
INFO - 2023-10-09 23:34:28 --> Utf8 Class Initialized
INFO - 2023-10-09 23:34:28 --> URI Class Initialized
INFO - 2023-10-09 23:34:28 --> Router Class Initialized
INFO - 2023-10-09 23:34:28 --> Output Class Initialized
INFO - 2023-10-09 23:34:28 --> Security Class Initialized
DEBUG - 2023-10-09 23:34:28 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-10-09 23:34:28 --> Input Class Initialized
INFO - 2023-10-09 23:34:28 --> Language Class Initialized
INFO - 2023-10-09 23:34:28 --> Loader Class Initialized
INFO - 2023-10-09 23:34:28 --> Helper loaded: url_helper
INFO - 2023-10-09 23:34:28 --> Database Driver Class Initialized
DEBUG - 2023-10-09 23:34:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-10-09 23:34:28 --> Session: Class initialized using 'files' driver.
INFO - 2023-10-09 23:34:28 --> Controller Class Initialized
DEBUG - 2023-10-09 23:34:28 --> Session class already loaded. Second attempt ignored.
INFO - 2023-10-09 23:34:28 --> Model Class Initialized
DEBUG - 2023-10-09 23:34:28 --> referenced_297om_users
DEBUG - 2023-10-09 23:34:28 --> referenced_317om_users
DEBUG - 2023-10-09 23:34:28 --> referenced_323om_users
DEBUG - 2023-10-09 23:34:28 --> referenced_297om_lineas_institucionales_lista
DEBUG - 2023-10-09 23:34:28 --> referenced_317om_lineas_institucionales_lista
DEBUG - 2023-10-09 23:34:28 --> referenced_323om_lineas_institucionales_lista
DEBUG - 2023-10-09 23:34:28 --> referenced_297om_grupos_colciencias_lista
DEBUG - 2023-10-09 23:34:28 --> referenced_317om_grupos_colciencias_lista
DEBUG - 2023-10-09 23:34:28 --> referenced_323om_grupos_colciencias_lista
DEBUG - 2023-10-09 23:34:28 --> referenced_297om_facultades_lista
DEBUG - 2023-10-09 23:34:28 --> referenced_317om_facultades_lista
DEBUG - 2023-10-09 23:34:28 --> referenced_323om_facultades_lista
DEBUG - 2023-10-09 23:34:28 --> referenced_297om_lineas_por_programa
DEBUG - 2023-10-09 23:34:28 --> referenced_317om_lineas_por_programa
DEBUG - 2023-10-09 23:34:28 --> referenced_323om_lineas_por_programa
DEBUG - 2023-10-09 23:34:28 --> referenced_297om_programa_academico_lista
DEBUG - 2023-10-09 23:34:28 --> referenced_317om_programa_academico_lista
DEBUG - 2023-10-09 23:34:28 --> referenced_323om_programa_academico_lista
DEBUG - 2023-10-09 23:34:28 --> referenced_297om_estado_proyecto
DEBUG - 2023-10-09 23:34:28 --> referenced_317om_estado_proyecto
DEBUG - 2023-10-09 23:34:28 --> referenced_323om_estado_proyecto
DEBUG - 2023-10-09 23:34:28 --> mcwhere_343om_proyectos.docente_lider = om_users.user_id AND om_proyectos.linea_investigacion_institucional = om_lineas_institucionales_lista.id_linea_institucional_lista AND om_proyectos.grupo_colciencias = om_grupos_colciencias_lista.id_grupo_colciencias AND om_proyectos.facultad = om_facultades_lista.facultad_lista_id AND om_proyectos.linea_programa = om_lineas_por_programa.id_lineas_por_programa AND om_proyectos.programa_academico = om_programa_academico_lista.id_programa_academico AND om_proyectos.estado = om_estado_proyecto.id_estado
DEBUG - 2023-10-09 23:34:28 --> mcwhere_347om_proyectos
INFO - 2023-10-09 23:34:28 --> Final output sent to browser
DEBUG - 2023-10-09 23:34:28 --> Total execution time: 0.0524
INFO - 2023-10-09 23:34:28 --> Config Class Initialized
INFO - 2023-10-09 23:34:28 --> Hooks Class Initialized
DEBUG - 2023-10-09 23:34:28 --> UTF-8 Support Enabled
INFO - 2023-10-09 23:34:28 --> Utf8 Class Initialized
INFO - 2023-10-09 23:34:28 --> URI Class Initialized
INFO - 2023-10-09 23:34:28 --> Router Class Initialized
INFO - 2023-10-09 23:34:28 --> Output Class Initialized
INFO - 2023-10-09 23:34:28 --> Security Class Initialized
DEBUG - 2023-10-09 23:34:28 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-10-09 23:34:28 --> Input Class Initialized
INFO - 2023-10-09 23:34:28 --> Language Class Initialized
INFO - 2023-10-09 23:34:28 --> Loader Class Initialized
INFO - 2023-10-09 23:34:28 --> Helper loaded: url_helper
INFO - 2023-10-09 23:34:28 --> Database Driver Class Initialized
DEBUG - 2023-10-09 23:34:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-10-09 23:34:28 --> Session: Class initialized using 'files' driver.
INFO - 2023-10-09 23:34:28 --> Controller Class Initialized
DEBUG - 2023-10-09 23:34:28 --> Session class already loaded. Second attempt ignored.
INFO - 2023-10-09 23:34:28 --> Model Class Initialized
DEBUG - 2023-10-09 23:34:28 --> mcwhere_156_whereom_locks.id_usuario = om_users.user_id
DEBUG - 2023-10-09 23:34:28 --> mcwhere_159om_locks
DEBUG - 2023-10-09 23:34:28 --> modelcommonSELECT om_locks.id_lock, om_locks.nombre_usuario, om_locks.tabla, om_locks.id_registro, om_locks.timestamp, om_locks.borrado, om_locks.log_accion, om_locks.log_usuario, om_locks.log_timestamp, om_users.user_name AS id_usuario FROM om_locks, om_users WHERE om_locks.id_usuario = om_users.user_id AND om_locks.borrado = 0 ORDER BY om_locks.id_lock ASC
INFO - 2023-10-09 23:34:28 --> Final output sent to browser
DEBUG - 2023-10-09 23:34:28 --> Total execution time: 0.0288
INFO - 2023-10-09 23:34:28 --> Config Class Initialized
INFO - 2023-10-09 23:34:28 --> Config Class Initialized
INFO - 2023-10-09 23:34:28 --> Hooks Class Initialized
INFO - 2023-10-09 23:34:28 --> Hooks Class Initialized
DEBUG - 2023-10-09 23:34:28 --> UTF-8 Support Enabled
DEBUG - 2023-10-09 23:34:28 --> UTF-8 Support Enabled
INFO - 2023-10-09 23:34:28 --> Utf8 Class Initialized
INFO - 2023-10-09 23:34:28 --> Utf8 Class Initialized
INFO - 2023-10-09 23:34:28 --> URI Class Initialized
INFO - 2023-10-09 23:34:28 --> URI Class Initialized
INFO - 2023-10-09 23:34:28 --> Router Class Initialized
INFO - 2023-10-09 23:34:28 --> Router Class Initialized
INFO - 2023-10-09 23:34:28 --> Output Class Initialized
INFO - 2023-10-09 23:34:28 --> Output Class Initialized
INFO - 2023-10-09 23:34:28 --> Security Class Initialized
INFO - 2023-10-09 23:34:28 --> Security Class Initialized
DEBUG - 2023-10-09 23:34:28 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-10-09 23:34:28 --> Input Class Initialized
DEBUG - 2023-10-09 23:34:28 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-10-09 23:34:28 --> Input Class Initialized
INFO - 2023-10-09 23:34:28 --> Language Class Initialized
INFO - 2023-10-09 23:34:28 --> Language Class Initialized
INFO - 2023-10-09 23:34:28 --> Loader Class Initialized
INFO - 2023-10-09 23:34:28 --> Loader Class Initialized
INFO - 2023-10-09 23:34:28 --> Helper loaded: url_helper
INFO - 2023-10-09 23:34:28 --> Helper loaded: url_helper
INFO - 2023-10-09 23:34:28 --> Database Driver Class Initialized
INFO - 2023-10-09 23:34:28 --> Database Driver Class Initialized
DEBUG - 2023-10-09 23:34:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2023-10-09 23:34:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-10-09 23:34:28 --> Session: Class initialized using 'files' driver.
INFO - 2023-10-09 23:34:28 --> Controller Class Initialized
INFO - 2023-10-09 23:34:28 --> Helper loaded: form_helper
DEBUG - 2023-10-09 23:34:28 --> Session class already loaded. Second attempt ignored.
INFO - 2023-10-09 23:34:28 --> Model Class Initialized
INFO - 2023-10-09 23:34:28 --> Language file loaded: language/spanish/general_lang.php
INFO - 2023-10-09 23:34:28 --> Model Class Initialized
INFO - 2023-10-09 23:34:28 --> Final output sent to browser
DEBUG - 2023-10-09 23:34:29 --> Total execution time: 0.1270
INFO - 2023-10-09 23:34:29 --> Session: Class initialized using 'files' driver.
INFO - 2023-10-09 23:34:29 --> Controller Class Initialized
INFO - 2023-10-09 23:34:29 --> Helper loaded: form_helper
DEBUG - 2023-10-09 23:34:29 --> Session class already loaded. Second attempt ignored.
INFO - 2023-10-09 23:34:29 --> Model Class Initialized
INFO - 2023-10-09 23:34:29 --> File loaded: C:\wamp64\www\proyectosunihorizonte\application\views\uh/forms/editor/proyectos.php
INFO - 2023-10-09 23:34:29 --> Final output sent to browser
DEBUG - 2023-10-09 23:34:29 --> Total execution time: 0.1324
INFO - 2023-10-09 23:34:29 --> Config Class Initialized
INFO - 2023-10-09 23:34:29 --> Hooks Class Initialized
DEBUG - 2023-10-09 23:34:29 --> UTF-8 Support Enabled
INFO - 2023-10-09 23:34:29 --> Utf8 Class Initialized
INFO - 2023-10-09 23:34:29 --> URI Class Initialized
INFO - 2023-10-09 23:34:29 --> Router Class Initialized
INFO - 2023-10-09 23:34:29 --> Output Class Initialized
INFO - 2023-10-09 23:34:29 --> Security Class Initialized
DEBUG - 2023-10-09 23:34:29 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-10-09 23:34:29 --> Input Class Initialized
INFO - 2023-10-09 23:34:29 --> Language Class Initialized
INFO - 2023-10-09 23:34:29 --> Loader Class Initialized
INFO - 2023-10-09 23:34:29 --> Helper loaded: url_helper
INFO - 2023-10-09 23:34:29 --> Database Driver Class Initialized
DEBUG - 2023-10-09 23:34:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-10-09 23:34:29 --> Session: Class initialized using 'files' driver.
INFO - 2023-10-09 23:34:29 --> Controller Class Initialized
DEBUG - 2023-10-09 23:34:29 --> Session class already loaded. Second attempt ignored.
INFO - 2023-10-09 23:34:29 --> Model Class Initialized
DEBUG - 2023-10-09 23:34:29 --> referenced_297om_users
DEBUG - 2023-10-09 23:34:29 --> referenced_317om_users
DEBUG - 2023-10-09 23:34:29 --> referenced_323om_users
DEBUG - 2023-10-09 23:34:29 --> referenced_297om_lineas_institucionales_lista
DEBUG - 2023-10-09 23:34:29 --> referenced_317om_lineas_institucionales_lista
DEBUG - 2023-10-09 23:34:29 --> referenced_323om_lineas_institucionales_lista
DEBUG - 2023-10-09 23:34:29 --> referenced_297om_grupos_colciencias_lista
DEBUG - 2023-10-09 23:34:29 --> referenced_317om_grupos_colciencias_lista
DEBUG - 2023-10-09 23:34:29 --> referenced_323om_grupos_colciencias_lista
DEBUG - 2023-10-09 23:34:29 --> referenced_297om_facultades_lista
DEBUG - 2023-10-09 23:34:29 --> referenced_317om_facultades_lista
DEBUG - 2023-10-09 23:34:29 --> referenced_323om_facultades_lista
DEBUG - 2023-10-09 23:34:29 --> referenced_297om_lineas_por_programa
DEBUG - 2023-10-09 23:34:29 --> referenced_317om_lineas_por_programa
DEBUG - 2023-10-09 23:34:29 --> referenced_323om_lineas_por_programa
DEBUG - 2023-10-09 23:34:29 --> referenced_297om_programa_academico_lista
DEBUG - 2023-10-09 23:34:29 --> referenced_317om_programa_academico_lista
DEBUG - 2023-10-09 23:34:29 --> referenced_323om_programa_academico_lista
DEBUG - 2023-10-09 23:34:29 --> referenced_297om_estado_proyecto
DEBUG - 2023-10-09 23:34:29 --> referenced_317om_estado_proyecto
DEBUG - 2023-10-09 23:34:29 --> referenced_323om_estado_proyecto
DEBUG - 2023-10-09 23:34:29 --> mcwhere_343om_proyectos.docente_lider = om_users.user_id AND om_proyectos.linea_investigacion_institucional = om_lineas_institucionales_lista.id_linea_institucional_lista AND om_proyectos.grupo_colciencias = om_grupos_colciencias_lista.id_grupo_colciencias AND om_proyectos.facultad = om_facultades_lista.facultad_lista_id AND om_proyectos.linea_programa = om_lineas_por_programa.id_lineas_por_programa AND om_proyectos.programa_academico = om_programa_academico_lista.id_programa_academico AND om_proyectos.estado = om_estado_proyecto.id_estado
DEBUG - 2023-10-09 23:34:29 --> mcwhere_347om_proyectos
INFO - 2023-10-09 23:34:29 --> Final output sent to browser
DEBUG - 2023-10-09 23:34:29 --> Total execution time: 0.0679
INFO - 2023-10-09 23:34:29 --> Config Class Initialized
INFO - 2023-10-09 23:34:29 --> Hooks Class Initialized
DEBUG - 2023-10-09 23:34:29 --> UTF-8 Support Enabled
INFO - 2023-10-09 23:34:29 --> Utf8 Class Initialized
INFO - 2023-10-09 23:34:29 --> URI Class Initialized
INFO - 2023-10-09 23:34:29 --> Router Class Initialized
INFO - 2023-10-09 23:34:29 --> Output Class Initialized
INFO - 2023-10-09 23:34:29 --> Security Class Initialized
DEBUG - 2023-10-09 23:34:29 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-10-09 23:34:29 --> Input Class Initialized
INFO - 2023-10-09 23:34:29 --> Language Class Initialized
INFO - 2023-10-09 23:34:29 --> Loader Class Initialized
INFO - 2023-10-09 23:34:29 --> Helper loaded: url_helper
INFO - 2023-10-09 23:34:29 --> Database Driver Class Initialized
DEBUG - 2023-10-09 23:34:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-10-09 23:34:29 --> Session: Class initialized using 'files' driver.
INFO - 2023-10-09 23:34:29 --> Controller Class Initialized
INFO - 2023-10-09 23:34:29 --> Helper loaded: form_helper
DEBUG - 2023-10-09 23:34:29 --> Session class already loaded. Second attempt ignored.
INFO - 2023-10-09 23:34:29 --> Model Class Initialized
INFO - 2023-10-09 23:34:29 --> File loaded: C:\wamp64\www\proyectosunihorizonte\application\views\uh/avances.php
INFO - 2023-10-09 23:34:29 --> Final output sent to browser
DEBUG - 2023-10-09 23:34:29 --> Total execution time: 0.0354
INFO - 2023-10-09 23:34:29 --> Config Class Initialized
INFO - 2023-10-09 23:34:29 --> Hooks Class Initialized
DEBUG - 2023-10-09 23:34:29 --> UTF-8 Support Enabled
INFO - 2023-10-09 23:34:29 --> Utf8 Class Initialized
INFO - 2023-10-09 23:34:29 --> URI Class Initialized
INFO - 2023-10-09 23:34:29 --> Router Class Initialized
INFO - 2023-10-09 23:34:29 --> Output Class Initialized
INFO - 2023-10-09 23:34:29 --> Security Class Initialized
DEBUG - 2023-10-09 23:34:29 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-10-09 23:34:29 --> Input Class Initialized
INFO - 2023-10-09 23:34:29 --> Language Class Initialized
INFO - 2023-10-09 23:34:29 --> Loader Class Initialized
INFO - 2023-10-09 23:34:29 --> Helper loaded: url_helper
INFO - 2023-10-09 23:34:29 --> Database Driver Class Initialized
DEBUG - 2023-10-09 23:34:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-10-09 23:34:29 --> Session: Class initialized using 'files' driver.
INFO - 2023-10-09 23:34:29 --> Controller Class Initialized
DEBUG - 2023-10-09 23:34:29 --> Session class already loaded. Second attempt ignored.
INFO - 2023-10-09 23:34:29 --> Model Class Initialized
DEBUG - 2023-10-09 23:34:29 --> referenced_146om_proyectos
DEBUG - 2023-10-09 23:34:29 --> mcwhere_148id_proyecto
DEBUG - 2023-10-09 23:34:29 --> mcwhere_149om_avances
DEBUG - 2023-10-09 23:34:29 --> modelcommonSELECT om_avances.id_avance, om_avances.nombre_avance, om_avances.presupuesto_ejecutado, om_avances.fecha_entrega, om_avances.archivo_final_proyecto, om_avances.borrado, om_avances.log_accion, om_avances.log_usuario, om_avances.log_timestamp, om_proyectos.nombre_proyecto AS id_proyecto, om_tipos_documentos.nombre_tipo_documento AS tipo_documento FROM om_avances, om_proyectos, om_tipos_documentos WHERE om_avances.id_proyecto = om_proyectos.id_proyecto AND om_avances.tipo_documento = om_tipos_documentos.id_tipo_documento AND om_avances.id_proyecto = 105 AND om_avances.borrado = 0 ORDER BY om_avances.id_avance ASC
DEBUG - 2023-10-09 23:34:29 --> referenced_215om_proyectos
DEBUG - 2023-10-09 23:34:29 --> mcwhere_214id_proyecto
INFO - 2023-10-09 23:34:29 --> Final output sent to browser
DEBUG - 2023-10-09 23:34:29 --> Total execution time: 0.0357
INFO - 2023-10-09 23:34:30 --> Config Class Initialized
INFO - 2023-10-09 23:34:30 --> Hooks Class Initialized
DEBUG - 2023-10-09 23:34:30 --> UTF-8 Support Enabled
INFO - 2023-10-09 23:34:30 --> Utf8 Class Initialized
INFO - 2023-10-09 23:34:30 --> URI Class Initialized
INFO - 2023-10-09 23:34:30 --> Router Class Initialized
INFO - 2023-10-09 23:34:30 --> Output Class Initialized
INFO - 2023-10-09 23:34:30 --> Security Class Initialized
DEBUG - 2023-10-09 23:34:30 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-10-09 23:34:30 --> Input Class Initialized
INFO - 2023-10-09 23:34:30 --> Language Class Initialized
INFO - 2023-10-09 23:34:30 --> Loader Class Initialized
INFO - 2023-10-09 23:34:30 --> Helper loaded: url_helper
INFO - 2023-10-09 23:34:30 --> Database Driver Class Initialized
DEBUG - 2023-10-09 23:34:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-10-09 23:34:30 --> Session: Class initialized using 'files' driver.
INFO - 2023-10-09 23:34:30 --> Controller Class Initialized
INFO - 2023-10-09 23:34:30 --> Helper loaded: form_helper
DEBUG - 2023-10-09 23:34:30 --> Session class already loaded. Second attempt ignored.
INFO - 2023-10-09 23:34:30 --> Model Class Initialized
INFO - 2023-10-09 23:34:30 --> File loaded: C:\wamp64\www\proyectosunihorizonte\application\views\uh/productos.php
INFO - 2023-10-09 23:34:30 --> Final output sent to browser
DEBUG - 2023-10-09 23:34:30 --> Total execution time: 0.0204
INFO - 2023-10-09 23:34:30 --> Config Class Initialized
INFO - 2023-10-09 23:34:30 --> Hooks Class Initialized
DEBUG - 2023-10-09 23:34:30 --> UTF-8 Support Enabled
INFO - 2023-10-09 23:34:30 --> Utf8 Class Initialized
INFO - 2023-10-09 23:34:30 --> URI Class Initialized
INFO - 2023-10-09 23:34:30 --> Router Class Initialized
INFO - 2023-10-09 23:34:30 --> Output Class Initialized
INFO - 2023-10-09 23:34:30 --> Security Class Initialized
DEBUG - 2023-10-09 23:34:30 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-10-09 23:34:30 --> Input Class Initialized
INFO - 2023-10-09 23:34:30 --> Language Class Initialized
INFO - 2023-10-09 23:34:30 --> Loader Class Initialized
INFO - 2023-10-09 23:34:30 --> Helper loaded: url_helper
INFO - 2023-10-09 23:34:30 --> Database Driver Class Initialized
DEBUG - 2023-10-09 23:34:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-10-09 23:34:30 --> Session: Class initialized using 'files' driver.
INFO - 2023-10-09 23:34:30 --> Controller Class Initialized
DEBUG - 2023-10-09 23:34:30 --> Session class already loaded. Second attempt ignored.
INFO - 2023-10-09 23:34:30 --> Model Class Initialized
DEBUG - 2023-10-09 23:34:30 --> referenced_146om_proyectos
DEBUG - 2023-10-09 23:34:30 --> mcwhere_148proyecto
DEBUG - 2023-10-09 23:34:30 --> mcwhere_149om_productos
DEBUG - 2023-10-09 23:34:30 --> modelcommonSELECT om_productos.id_producto, om_productos.fecha_entrega, om_productos.archivo_producto, om_productos.borrado, om_productos.log_accion, om_productos.log_usuario, om_productos.log_timestamp, om_proyectos.nombre_proyecto AS proyecto, om_productos_lista_colciencias.nombre_tipo_producto AS producto_colciencias FROM om_productos, om_proyectos, om_productos_lista_colciencias WHERE om_productos.proyecto = om_proyectos.id_proyecto AND om_productos.producto_colciencias = om_productos_lista_colciencias.id_producto_lista_colciencias AND om_productos.proyecto = 105 AND om_productos.borrado = 0 ORDER BY om_productos.id_producto ASC
DEBUG - 2023-10-09 23:34:30 --> referenced_215om_proyectos
DEBUG - 2023-10-09 23:34:30 --> mcwhere_214proyecto
INFO - 2023-10-09 23:34:30 --> Final output sent to browser
DEBUG - 2023-10-09 23:34:30 --> Total execution time: 0.0470
INFO - 2023-10-09 23:34:31 --> Config Class Initialized
INFO - 2023-10-09 23:34:31 --> Hooks Class Initialized
DEBUG - 2023-10-09 23:34:31 --> UTF-8 Support Enabled
INFO - 2023-10-09 23:34:31 --> Utf8 Class Initialized
INFO - 2023-10-09 23:34:31 --> URI Class Initialized
INFO - 2023-10-09 23:34:31 --> Router Class Initialized
INFO - 2023-10-09 23:34:31 --> Output Class Initialized
INFO - 2023-10-09 23:34:31 --> Security Class Initialized
DEBUG - 2023-10-09 23:34:31 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-10-09 23:34:31 --> Input Class Initialized
INFO - 2023-10-09 23:34:31 --> Language Class Initialized
INFO - 2023-10-09 23:34:31 --> Loader Class Initialized
INFO - 2023-10-09 23:34:31 --> Helper loaded: url_helper
INFO - 2023-10-09 23:34:31 --> Database Driver Class Initialized
DEBUG - 2023-10-09 23:34:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-10-09 23:34:31 --> Session: Class initialized using 'files' driver.
INFO - 2023-10-09 23:34:31 --> Controller Class Initialized
INFO - 2023-10-09 23:34:31 --> Helper loaded: form_helper
DEBUG - 2023-10-09 23:34:31 --> Session class already loaded. Second attempt ignored.
INFO - 2023-10-09 23:34:31 --> Model Class Initialized
INFO - 2023-10-09 23:34:31 --> File loaded: C:\wamp64\www\proyectosunihorizonte\application\views\uh/docentes_grupos_unihorizonte.php
INFO - 2023-10-09 23:34:31 --> Final output sent to browser
DEBUG - 2023-10-09 23:34:31 --> Total execution time: 0.0197
INFO - 2023-10-09 23:34:31 --> Config Class Initialized
INFO - 2023-10-09 23:34:31 --> Hooks Class Initialized
DEBUG - 2023-10-09 23:34:31 --> UTF-8 Support Enabled
INFO - 2023-10-09 23:34:31 --> Utf8 Class Initialized
INFO - 2023-10-09 23:34:31 --> URI Class Initialized
INFO - 2023-10-09 23:34:31 --> Router Class Initialized
INFO - 2023-10-09 23:34:31 --> Output Class Initialized
INFO - 2023-10-09 23:34:31 --> Security Class Initialized
DEBUG - 2023-10-09 23:34:31 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-10-09 23:34:31 --> Input Class Initialized
INFO - 2023-10-09 23:34:31 --> Language Class Initialized
INFO - 2023-10-09 23:34:31 --> Loader Class Initialized
INFO - 2023-10-09 23:34:31 --> Helper loaded: url_helper
INFO - 2023-10-09 23:34:31 --> Database Driver Class Initialized
DEBUG - 2023-10-09 23:34:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-10-09 23:34:31 --> Session: Class initialized using 'files' driver.
INFO - 2023-10-09 23:34:31 --> Controller Class Initialized
DEBUG - 2023-10-09 23:34:31 --> Session class already loaded. Second attempt ignored.
INFO - 2023-10-09 23:34:31 --> Model Class Initialized
DEBUG - 2023-10-09 23:34:31 --> referenced_146om_proyectos
DEBUG - 2023-10-09 23:34:31 --> mcwhere_148proyecto
DEBUG - 2023-10-09 23:34:31 --> mcwhere_149om_docentes_grupos_unihorizonte
DEBUG - 2023-10-09 23:34:31 --> modelcommonSELECT om_docentes_grupos_unihorizonte.id_grupo, om_docentes_grupos_unihorizonte.borrado, om_docentes_grupos_unihorizonte.log_accion, om_docentes_grupos_unihorizonte.log_usuario, om_docentes_grupos_unihorizonte.log_timestamp, om_proyectos.nombre_proyecto AS proyecto, om_users.user_name AS docente FROM om_docentes_grupos_unihorizonte, om_proyectos, om_users WHERE om_docentes_grupos_unihorizonte.proyecto = om_proyectos.id_proyecto AND om_docentes_grupos_unihorizonte.docente = om_users.user_id AND om_docentes_grupos_unihorizonte.proyecto = 105 AND om_docentes_grupos_unihorizonte.borrado = 0 ORDER BY om_docentes_grupos_unihorizonte.id_grupo ASC
DEBUG - 2023-10-09 23:34:31 --> referenced_215om_proyectos
DEBUG - 2023-10-09 23:34:31 --> mcwhere_214proyecto
INFO - 2023-10-09 23:34:31 --> Final output sent to browser
DEBUG - 2023-10-09 23:34:31 --> Total execution time: 0.0330
INFO - 2023-10-09 23:34:32 --> Config Class Initialized
INFO - 2023-10-09 23:34:32 --> Hooks Class Initialized
DEBUG - 2023-10-09 23:34:32 --> UTF-8 Support Enabled
INFO - 2023-10-09 23:34:32 --> Utf8 Class Initialized
INFO - 2023-10-09 23:34:32 --> URI Class Initialized
INFO - 2023-10-09 23:34:32 --> Router Class Initialized
INFO - 2023-10-09 23:34:32 --> Output Class Initialized
INFO - 2023-10-09 23:34:32 --> Security Class Initialized
DEBUG - 2023-10-09 23:34:32 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-10-09 23:34:32 --> Input Class Initialized
INFO - 2023-10-09 23:34:32 --> Language Class Initialized
INFO - 2023-10-09 23:34:32 --> Loader Class Initialized
INFO - 2023-10-09 23:34:32 --> Helper loaded: url_helper
INFO - 2023-10-09 23:34:32 --> Database Driver Class Initialized
DEBUG - 2023-10-09 23:34:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-10-09 23:34:32 --> Session: Class initialized using 'files' driver.
INFO - 2023-10-09 23:34:32 --> Controller Class Initialized
INFO - 2023-10-09 23:34:32 --> Helper loaded: form_helper
DEBUG - 2023-10-09 23:34:32 --> Session class already loaded. Second attempt ignored.
INFO - 2023-10-09 23:34:32 --> Model Class Initialized
INFO - 2023-10-09 23:34:32 --> File loaded: C:\wamp64\www\proyectosunihorizonte\application\views\uh/proyectos_minciencias.php
INFO - 2023-10-09 23:34:32 --> Final output sent to browser
DEBUG - 2023-10-09 23:34:32 --> Total execution time: 0.0174
INFO - 2023-10-09 23:34:32 --> Config Class Initialized
INFO - 2023-10-09 23:34:32 --> Hooks Class Initialized
DEBUG - 2023-10-09 23:34:32 --> UTF-8 Support Enabled
INFO - 2023-10-09 23:34:32 --> Utf8 Class Initialized
INFO - 2023-10-09 23:34:32 --> URI Class Initialized
INFO - 2023-10-09 23:34:32 --> Router Class Initialized
INFO - 2023-10-09 23:34:32 --> Output Class Initialized
INFO - 2023-10-09 23:34:32 --> Security Class Initialized
DEBUG - 2023-10-09 23:34:32 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-10-09 23:34:32 --> Input Class Initialized
INFO - 2023-10-09 23:34:32 --> Language Class Initialized
INFO - 2023-10-09 23:34:32 --> Loader Class Initialized
INFO - 2023-10-09 23:34:32 --> Helper loaded: url_helper
INFO - 2023-10-09 23:34:32 --> Database Driver Class Initialized
DEBUG - 2023-10-09 23:34:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-10-09 23:34:32 --> Session: Class initialized using 'files' driver.
INFO - 2023-10-09 23:34:32 --> Controller Class Initialized
DEBUG - 2023-10-09 23:34:32 --> Session class already loaded. Second attempt ignored.
INFO - 2023-10-09 23:34:32 --> Model Class Initialized
DEBUG - 2023-10-09 23:34:32 --> referenced_146om_proyectos
DEBUG - 2023-10-09 23:34:32 --> mcwhere_148id_proyecto_lista
DEBUG - 2023-10-09 23:34:32 --> mcwhere_149om_proyectos_minciencias
DEBUG - 2023-10-09 23:34:32 --> modelcommonSELECT om_proyectos_minciencias.id_proyecto_minciencias_lista, om_proyectos_minciencias.borrado, om_proyectos_minciencias.log_accion, om_proyectos_minciencias.log_usuario, om_proyectos_minciencias.log_timestamp, om_proyectos.nombre_proyecto AS id_proyecto_lista, om_grupos_colciencias_lista.nombre_grupo AS id_minciencias_lista FROM om_proyectos_minciencias, om_proyectos, om_grupos_colciencias_lista WHERE om_proyectos_minciencias.id_proyecto_lista = om_proyectos.id_proyecto AND om_proyectos_minciencias.id_minciencias_lista = om_grupos_colciencias_lista.id_grupo_colciencias AND om_proyectos_minciencias.id_proyecto_lista = 105 AND om_proyectos_minciencias.borrado = 0 ORDER BY om_proyectos_minciencias.id_proyecto_minciencias_lista ASC
DEBUG - 2023-10-09 23:34:32 --> referenced_215om_proyectos
DEBUG - 2023-10-09 23:34:32 --> mcwhere_214id_proyecto_lista
INFO - 2023-10-09 23:34:32 --> Final output sent to browser
DEBUG - 2023-10-09 23:34:32 --> Total execution time: 0.0412
INFO - 2023-10-09 23:34:32 --> Config Class Initialized
INFO - 2023-10-09 23:34:32 --> Hooks Class Initialized
DEBUG - 2023-10-09 23:34:32 --> UTF-8 Support Enabled
INFO - 2023-10-09 23:34:32 --> Utf8 Class Initialized
INFO - 2023-10-09 23:34:32 --> URI Class Initialized
INFO - 2023-10-09 23:34:32 --> Router Class Initialized
INFO - 2023-10-09 23:34:32 --> Output Class Initialized
INFO - 2023-10-09 23:34:32 --> Security Class Initialized
DEBUG - 2023-10-09 23:34:32 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-10-09 23:34:32 --> Input Class Initialized
INFO - 2023-10-09 23:34:32 --> Language Class Initialized
INFO - 2023-10-09 23:34:32 --> Loader Class Initialized
INFO - 2023-10-09 23:34:32 --> Helper loaded: url_helper
INFO - 2023-10-09 23:34:32 --> Database Driver Class Initialized
DEBUG - 2023-10-09 23:34:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-10-09 23:34:32 --> Session: Class initialized using 'files' driver.
INFO - 2023-10-09 23:34:32 --> Controller Class Initialized
INFO - 2023-10-09 23:34:32 --> Helper loaded: form_helper
DEBUG - 2023-10-09 23:34:32 --> Session class already loaded. Second attempt ignored.
INFO - 2023-10-09 23:34:32 --> Model Class Initialized
INFO - 2023-10-09 23:34:32 --> File loaded: C:\wamp64\www\proyectosunihorizonte\application\views\uh/grupos_unihorizonte.php
INFO - 2023-10-09 23:34:32 --> Final output sent to browser
DEBUG - 2023-10-09 23:34:32 --> Total execution time: 0.0217
INFO - 2023-10-09 23:34:32 --> Config Class Initialized
INFO - 2023-10-09 23:34:32 --> Hooks Class Initialized
DEBUG - 2023-10-09 23:34:32 --> UTF-8 Support Enabled
INFO - 2023-10-09 23:34:32 --> Utf8 Class Initialized
INFO - 2023-10-09 23:34:32 --> URI Class Initialized
INFO - 2023-10-09 23:34:32 --> Router Class Initialized
INFO - 2023-10-09 23:34:32 --> Output Class Initialized
INFO - 2023-10-09 23:34:32 --> Security Class Initialized
DEBUG - 2023-10-09 23:34:32 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-10-09 23:34:32 --> Input Class Initialized
INFO - 2023-10-09 23:34:32 --> Language Class Initialized
INFO - 2023-10-09 23:34:32 --> Loader Class Initialized
INFO - 2023-10-09 23:34:32 --> Helper loaded: url_helper
INFO - 2023-10-09 23:34:32 --> Database Driver Class Initialized
DEBUG - 2023-10-09 23:34:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-10-09 23:34:32 --> Session: Class initialized using 'files' driver.
INFO - 2023-10-09 23:34:32 --> Controller Class Initialized
DEBUG - 2023-10-09 23:34:32 --> Session class already loaded. Second attempt ignored.
INFO - 2023-10-09 23:34:32 --> Model Class Initialized
DEBUG - 2023-10-09 23:34:32 --> referenced_146om_proyectos
DEBUG - 2023-10-09 23:34:32 --> mcwhere_148proyecto
DEBUG - 2023-10-09 23:34:32 --> mcwhere_149om_grupos_unihorizonte
DEBUG - 2023-10-09 23:34:32 --> modelcommonSELECT om_grupos_unihorizonte.id_grupo, om_grupos_unihorizonte.borrado, om_grupos_unihorizonte.log_accion, om_grupos_unihorizonte.log_usuario, om_grupos_unihorizonte.log_timestamp, om_proyectos.nombre_proyecto AS proyecto, om_estudiantes.nombres_estudiante AS estudiante FROM om_grupos_unihorizonte, om_proyectos, om_estudiantes WHERE om_grupos_unihorizonte.proyecto = om_proyectos.id_proyecto AND om_grupos_unihorizonte.estudiante = om_estudiantes.id_estudiante AND om_grupos_unihorizonte.proyecto = 105 AND om_grupos_unihorizonte.borrado = 0 ORDER BY om_grupos_unihorizonte.id_grupo ASC
DEBUG - 2023-10-09 23:34:32 --> referenced_215om_proyectos
DEBUG - 2023-10-09 23:34:32 --> mcwhere_214proyecto
INFO - 2023-10-09 23:34:32 --> Final output sent to browser
DEBUG - 2023-10-09 23:34:32 --> Total execution time: 0.0408
INFO - 2023-10-09 23:34:33 --> Config Class Initialized
INFO - 2023-10-09 23:34:33 --> Hooks Class Initialized
DEBUG - 2023-10-09 23:34:33 --> UTF-8 Support Enabled
INFO - 2023-10-09 23:34:33 --> Utf8 Class Initialized
INFO - 2023-10-09 23:34:33 --> URI Class Initialized
INFO - 2023-10-09 23:34:33 --> Router Class Initialized
INFO - 2023-10-09 23:34:33 --> Output Class Initialized
INFO - 2023-10-09 23:34:33 --> Security Class Initialized
DEBUG - 2023-10-09 23:34:33 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-10-09 23:34:33 --> Input Class Initialized
INFO - 2023-10-09 23:34:33 --> Language Class Initialized
INFO - 2023-10-09 23:34:33 --> Loader Class Initialized
INFO - 2023-10-09 23:34:33 --> Helper loaded: url_helper
INFO - 2023-10-09 23:34:33 --> Database Driver Class Initialized
DEBUG - 2023-10-09 23:34:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-10-09 23:34:33 --> Session: Class initialized using 'files' driver.
INFO - 2023-10-09 23:34:33 --> Controller Class Initialized
INFO - 2023-10-09 23:34:33 --> Helper loaded: form_helper
DEBUG - 2023-10-09 23:34:33 --> Session class already loaded. Second attempt ignored.
INFO - 2023-10-09 23:34:33 --> Model Class Initialized
INFO - 2023-10-09 23:34:33 --> File loaded: C:\wamp64\www\proyectosunihorizonte\application\views\uh/proyectos_lineas_programa.php
INFO - 2023-10-09 23:34:33 --> Final output sent to browser
DEBUG - 2023-10-09 23:34:33 --> Total execution time: 0.0202
INFO - 2023-10-09 23:34:33 --> Config Class Initialized
INFO - 2023-10-09 23:34:33 --> Hooks Class Initialized
DEBUG - 2023-10-09 23:34:33 --> UTF-8 Support Enabled
INFO - 2023-10-09 23:34:33 --> Utf8 Class Initialized
INFO - 2023-10-09 23:34:33 --> URI Class Initialized
INFO - 2023-10-09 23:34:33 --> Router Class Initialized
INFO - 2023-10-09 23:34:33 --> Output Class Initialized
INFO - 2023-10-09 23:34:33 --> Security Class Initialized
DEBUG - 2023-10-09 23:34:33 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-10-09 23:34:33 --> Input Class Initialized
INFO - 2023-10-09 23:34:33 --> Language Class Initialized
INFO - 2023-10-09 23:34:33 --> Loader Class Initialized
INFO - 2023-10-09 23:34:33 --> Helper loaded: url_helper
INFO - 2023-10-09 23:34:33 --> Database Driver Class Initialized
DEBUG - 2023-10-09 23:34:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-10-09 23:34:33 --> Session: Class initialized using 'files' driver.
INFO - 2023-10-09 23:34:33 --> Controller Class Initialized
DEBUG - 2023-10-09 23:34:33 --> Session class already loaded. Second attempt ignored.
INFO - 2023-10-09 23:34:33 --> Model Class Initialized
DEBUG - 2023-10-09 23:34:33 --> referenced_146om_proyectos
DEBUG - 2023-10-09 23:34:33 --> mcwhere_148id_proyecto_lista
DEBUG - 2023-10-09 23:34:33 --> mcwhere_149om_proyectos_lineas_programa
DEBUG - 2023-10-09 23:34:33 --> modelcommonSELECT om_proyectos_lineas_programa.id_proyecto_linea_programa_lista, om_proyectos_lineas_programa.borrado, om_proyectos_lineas_programa.log_accion, om_proyectos_lineas_programa.log_usuario, om_proyectos_lineas_programa.log_timestamp, om_proyectos.nombre_proyecto AS id_proyecto_lista, om_programa_academico_lista.nombre_programa_academico AS id_lineas_programas_lista FROM om_proyectos_lineas_programa, om_proyectos, om_programa_academico_lista WHERE om_proyectos_lineas_programa.id_proyecto_lista = om_proyectos.id_proyecto AND om_proyectos_lineas_programa.id_lineas_programas_lista = om_programa_academico_lista.id_programa_academico AND om_proyectos_lineas_programa.id_proyecto_lista = 105 AND om_proyectos_lineas_programa.borrado = 0 ORDER BY om_proyectos_lineas_programa.id_proyecto_linea_programa_lista ASC
DEBUG - 2023-10-09 23:34:33 --> referenced_215om_proyectos
DEBUG - 2023-10-09 23:34:33 --> mcwhere_214id_proyecto_lista
INFO - 2023-10-09 23:34:33 --> Final output sent to browser
DEBUG - 2023-10-09 23:34:33 --> Total execution time: 0.0448
INFO - 2023-10-09 23:34:34 --> Config Class Initialized
INFO - 2023-10-09 23:34:34 --> Hooks Class Initialized
DEBUG - 2023-10-09 23:34:34 --> UTF-8 Support Enabled
INFO - 2023-10-09 23:34:34 --> Utf8 Class Initialized
INFO - 2023-10-09 23:34:34 --> URI Class Initialized
INFO - 2023-10-09 23:34:34 --> Router Class Initialized
INFO - 2023-10-09 23:34:34 --> Output Class Initialized
INFO - 2023-10-09 23:34:34 --> Security Class Initialized
DEBUG - 2023-10-09 23:34:34 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-10-09 23:34:34 --> Input Class Initialized
INFO - 2023-10-09 23:34:34 --> Language Class Initialized
INFO - 2023-10-09 23:34:34 --> Loader Class Initialized
INFO - 2023-10-09 23:34:34 --> Helper loaded: url_helper
INFO - 2023-10-09 23:34:34 --> Database Driver Class Initialized
DEBUG - 2023-10-09 23:34:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-10-09 23:34:34 --> Session: Class initialized using 'files' driver.
INFO - 2023-10-09 23:34:34 --> Controller Class Initialized
INFO - 2023-10-09 23:34:34 --> Helper loaded: form_helper
DEBUG - 2023-10-09 23:34:34 --> Session class already loaded. Second attempt ignored.
INFO - 2023-10-09 23:34:34 --> Model Class Initialized
INFO - 2023-10-09 23:34:34 --> File loaded: C:\wamp64\www\proyectosunihorizonte\application\views\uh/proyectos_facultades.php
INFO - 2023-10-09 23:34:34 --> Final output sent to browser
DEBUG - 2023-10-09 23:34:34 --> Total execution time: 0.0210
INFO - 2023-10-09 23:34:34 --> Config Class Initialized
INFO - 2023-10-09 23:34:34 --> Hooks Class Initialized
DEBUG - 2023-10-09 23:34:34 --> UTF-8 Support Enabled
INFO - 2023-10-09 23:34:34 --> Utf8 Class Initialized
INFO - 2023-10-09 23:34:34 --> URI Class Initialized
INFO - 2023-10-09 23:34:34 --> Router Class Initialized
INFO - 2023-10-09 23:34:34 --> Output Class Initialized
INFO - 2023-10-09 23:34:34 --> Security Class Initialized
DEBUG - 2023-10-09 23:34:34 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-10-09 23:34:34 --> Input Class Initialized
INFO - 2023-10-09 23:34:34 --> Language Class Initialized
INFO - 2023-10-09 23:34:34 --> Loader Class Initialized
INFO - 2023-10-09 23:34:34 --> Helper loaded: url_helper
INFO - 2023-10-09 23:34:34 --> Database Driver Class Initialized
DEBUG - 2023-10-09 23:34:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-10-09 23:34:34 --> Session: Class initialized using 'files' driver.
INFO - 2023-10-09 23:34:34 --> Controller Class Initialized
DEBUG - 2023-10-09 23:34:34 --> Session class already loaded. Second attempt ignored.
INFO - 2023-10-09 23:34:34 --> Model Class Initialized
DEBUG - 2023-10-09 23:34:34 --> referenced_146om_proyectos
DEBUG - 2023-10-09 23:34:34 --> mcwhere_148id_proyecto_lista
DEBUG - 2023-10-09 23:34:34 --> mcwhere_149om_proyectos_facultades
DEBUG - 2023-10-09 23:34:34 --> modelcommonSELECT om_proyectos_facultades.id_proyecto_facultad_lista, om_proyectos_facultades.borrado, om_proyectos_facultades.log_accion, om_proyectos_facultades.log_usuario, om_proyectos_facultades.log_timestamp, om_proyectos.nombre_proyecto AS id_proyecto_lista, om_facultades_lista.name_facultad_lista AS id_facultad_lista FROM om_proyectos_facultades, om_proyectos, om_facultades_lista WHERE om_proyectos_facultades.id_proyecto_lista = om_proyectos.id_proyecto AND om_proyectos_facultades.id_facultad_lista = om_facultades_lista.facultad_lista_id AND om_proyectos_facultades.id_proyecto_lista = 105 AND om_proyectos_facultades.borrado = 0 ORDER BY om_proyectos_facultades.id_proyecto_facultad_lista ASC
DEBUG - 2023-10-09 23:34:34 --> referenced_215om_proyectos
DEBUG - 2023-10-09 23:34:34 --> mcwhere_214id_proyecto_lista
INFO - 2023-10-09 23:34:34 --> Final output sent to browser
DEBUG - 2023-10-09 23:34:34 --> Total execution time: 0.0418
INFO - 2023-10-09 23:34:36 --> Config Class Initialized
INFO - 2023-10-09 23:34:36 --> Hooks Class Initialized
DEBUG - 2023-10-09 23:34:36 --> UTF-8 Support Enabled
INFO - 2023-10-09 23:34:36 --> Utf8 Class Initialized
INFO - 2023-10-09 23:34:36 --> URI Class Initialized
INFO - 2023-10-09 23:34:36 --> Router Class Initialized
INFO - 2023-10-09 23:34:36 --> Output Class Initialized
INFO - 2023-10-09 23:34:36 --> Security Class Initialized
DEBUG - 2023-10-09 23:34:36 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-10-09 23:34:36 --> Input Class Initialized
INFO - 2023-10-09 23:34:36 --> Language Class Initialized
INFO - 2023-10-09 23:34:36 --> Loader Class Initialized
INFO - 2023-10-09 23:34:36 --> Helper loaded: url_helper
INFO - 2023-10-09 23:34:37 --> Database Driver Class Initialized
DEBUG - 2023-10-09 23:34:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-10-09 23:34:37 --> Session: Class initialized using 'files' driver.
INFO - 2023-10-09 23:34:37 --> Controller Class Initialized
INFO - 2023-10-09 23:34:37 --> Helper loaded: form_helper
DEBUG - 2023-10-09 23:34:37 --> Session class already loaded. Second attempt ignored.
INFO - 2023-10-09 23:34:37 --> Model Class Initialized
INFO - 2023-10-09 23:34:37 --> File loaded: C:\wamp64\www\proyectosunihorizonte\application\views\uh/proyectos_programas.php
INFO - 2023-10-09 23:34:37 --> Final output sent to browser
DEBUG - 2023-10-09 23:34:37 --> Total execution time: 0.0186
INFO - 2023-10-09 23:34:37 --> Config Class Initialized
INFO - 2023-10-09 23:34:37 --> Hooks Class Initialized
DEBUG - 2023-10-09 23:34:37 --> UTF-8 Support Enabled
INFO - 2023-10-09 23:34:37 --> Utf8 Class Initialized
INFO - 2023-10-09 23:34:37 --> URI Class Initialized
INFO - 2023-10-09 23:34:37 --> Router Class Initialized
INFO - 2023-10-09 23:34:37 --> Output Class Initialized
INFO - 2023-10-09 23:34:37 --> Security Class Initialized
DEBUG - 2023-10-09 23:34:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-10-09 23:34:37 --> Input Class Initialized
INFO - 2023-10-09 23:34:37 --> Language Class Initialized
INFO - 2023-10-09 23:34:37 --> Loader Class Initialized
INFO - 2023-10-09 23:34:37 --> Helper loaded: url_helper
INFO - 2023-10-09 23:34:37 --> Database Driver Class Initialized
DEBUG - 2023-10-09 23:34:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-10-09 23:34:37 --> Session: Class initialized using 'files' driver.
INFO - 2023-10-09 23:34:37 --> Controller Class Initialized
DEBUG - 2023-10-09 23:34:37 --> Session class already loaded. Second attempt ignored.
INFO - 2023-10-09 23:34:37 --> Model Class Initialized
DEBUG - 2023-10-09 23:34:37 --> referenced_146om_proyectos
DEBUG - 2023-10-09 23:34:37 --> mcwhere_148id_proyecto_lista
DEBUG - 2023-10-09 23:34:37 --> mcwhere_149om_proyectos_programas
DEBUG - 2023-10-09 23:34:37 --> modelcommonSELECT om_proyectos_programas.id_proyecto_programa_lista, om_proyectos_programas.borrado, om_proyectos_programas.log_accion, om_proyectos_programas.log_usuario, om_proyectos_programas.log_timestamp, om_proyectos.nombre_proyecto AS id_proyecto_lista, om_programa_academico_lista.nombre_programa_academico AS id_programas_lista FROM om_proyectos_programas, om_proyectos, om_programa_academico_lista WHERE om_proyectos_programas.id_proyecto_lista = om_proyectos.id_proyecto AND om_proyectos_programas.id_programas_lista = om_programa_academico_lista.id_programa_academico AND om_proyectos_programas.id_proyecto_lista = 105 AND om_proyectos_programas.borrado = 0 ORDER BY om_proyectos_programas.id_proyecto_programa_lista ASC
DEBUG - 2023-10-09 23:34:37 --> referenced_215om_proyectos
DEBUG - 2023-10-09 23:34:37 --> mcwhere_214id_proyecto_lista
INFO - 2023-10-09 23:34:37 --> Final output sent to browser
DEBUG - 2023-10-09 23:34:37 --> Total execution time: 0.0345
INFO - 2023-10-09 23:35:07 --> Config Class Initialized
INFO - 2023-10-09 23:35:07 --> Hooks Class Initialized
DEBUG - 2023-10-09 23:35:07 --> UTF-8 Support Enabled
INFO - 2023-10-09 23:35:07 --> Utf8 Class Initialized
INFO - 2023-10-09 23:35:07 --> URI Class Initialized
INFO - 2023-10-09 23:35:07 --> Router Class Initialized
INFO - 2023-10-09 23:35:07 --> Output Class Initialized
INFO - 2023-10-09 23:35:07 --> Security Class Initialized
DEBUG - 2023-10-09 23:35:07 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-10-09 23:35:07 --> Input Class Initialized
INFO - 2023-10-09 23:35:07 --> Language Class Initialized
INFO - 2023-10-09 23:35:07 --> Loader Class Initialized
INFO - 2023-10-09 23:35:07 --> Helper loaded: url_helper
INFO - 2023-10-09 23:35:07 --> Database Driver Class Initialized
DEBUG - 2023-10-09 23:35:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-10-09 23:35:07 --> Session: Class initialized using 'files' driver.
INFO - 2023-10-09 23:35:07 --> Controller Class Initialized
INFO - 2023-10-09 23:35:07 --> Helper loaded: form_helper
DEBUG - 2023-10-09 23:35:07 --> Session class already loaded. Second attempt ignored.
INFO - 2023-10-09 23:35:07 --> Model Class Initialized
INFO - 2023-10-09 23:35:07 --> File loaded: C:\wamp64\www\proyectosunihorizonte\application\views\uh/forms/editor/avances.php
INFO - 2023-10-09 23:35:07 --> Final output sent to browser
DEBUG - 2023-10-09 23:35:07 --> Total execution time: 0.0207
INFO - 2023-10-09 23:35:07 --> Config Class Initialized
INFO - 2023-10-09 23:35:07 --> Hooks Class Initialized
DEBUG - 2023-10-09 23:35:07 --> UTF-8 Support Enabled
INFO - 2023-10-09 23:35:07 --> Utf8 Class Initialized
INFO - 2023-10-09 23:35:07 --> URI Class Initialized
INFO - 2023-10-09 23:35:07 --> Router Class Initialized
INFO - 2023-10-09 23:35:07 --> Output Class Initialized
INFO - 2023-10-09 23:35:07 --> Security Class Initialized
DEBUG - 2023-10-09 23:35:07 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-10-09 23:35:07 --> Input Class Initialized
INFO - 2023-10-09 23:35:07 --> Language Class Initialized
INFO - 2023-10-09 23:35:07 --> Loader Class Initialized
INFO - 2023-10-09 23:35:07 --> Helper loaded: url_helper
INFO - 2023-10-09 23:35:07 --> Database Driver Class Initialized
DEBUG - 2023-10-09 23:35:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-10-09 23:35:07 --> Session: Class initialized using 'files' driver.
INFO - 2023-10-09 23:35:07 --> Controller Class Initialized
DEBUG - 2023-10-09 23:35:07 --> Session class already loaded. Second attempt ignored.
INFO - 2023-10-09 23:35:07 --> Model Class Initialized
DEBUG - 2023-10-09 23:35:07 --> referenced_297om_proyectos
DEBUG - 2023-10-09 23:35:07 --> referenced_317om_proyectos
DEBUG - 2023-10-09 23:35:07 --> referenced_323om_proyectos
DEBUG - 2023-10-09 23:35:07 --> referenced_297om_tipos_documentos
DEBUG - 2023-10-09 23:35:07 --> referenced_317om_tipos_documentos
DEBUG - 2023-10-09 23:35:07 --> referenced_323om_tipos_documentos
DEBUG - 2023-10-09 23:35:07 --> mcwhere_343om_avances.id_proyecto = om_proyectos.id_proyecto AND om_avances.tipo_documento = om_tipos_documentos.id_tipo_documento
DEBUG - 2023-10-09 23:35:07 --> mcwhere_347om_avances
INFO - 2023-10-09 23:35:07 --> Final output sent to browser
DEBUG - 2023-10-09 23:35:07 --> Total execution time: 0.0360
INFO - 2023-10-09 23:40:18 --> Config Class Initialized
INFO - 2023-10-09 23:40:18 --> Hooks Class Initialized
DEBUG - 2023-10-09 23:40:18 --> UTF-8 Support Enabled
INFO - 2023-10-09 23:40:18 --> Utf8 Class Initialized
INFO - 2023-10-09 23:40:18 --> URI Class Initialized
INFO - 2023-10-09 23:40:18 --> Router Class Initialized
INFO - 2023-10-09 23:40:18 --> Output Class Initialized
INFO - 2023-10-09 23:40:18 --> Security Class Initialized
DEBUG - 2023-10-09 23:40:18 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-10-09 23:40:18 --> Input Class Initialized
INFO - 2023-10-09 23:40:18 --> Language Class Initialized
INFO - 2023-10-09 23:40:18 --> Loader Class Initialized
INFO - 2023-10-09 23:40:18 --> Helper loaded: url_helper
INFO - 2023-10-09 23:40:18 --> Database Driver Class Initialized
DEBUG - 2023-10-09 23:40:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-10-09 23:40:18 --> Session: Class initialized using 'files' driver.
INFO - 2023-10-09 23:40:18 --> Controller Class Initialized
INFO - 2023-10-09 23:40:18 --> Helper loaded: form_helper
DEBUG - 2023-10-09 23:40:18 --> Session class already loaded. Second attempt ignored.
INFO - 2023-10-09 23:40:18 --> Model Class Initialized
INFO - 2023-10-09 23:40:18 --> File loaded: C:\wamp64\www\proyectosunihorizonte\application\views\uh/forms/editor/avances.php
INFO - 2023-10-09 23:40:18 --> Final output sent to browser
DEBUG - 2023-10-09 23:40:18 --> Total execution time: 0.0242
INFO - 2023-10-09 23:40:18 --> Config Class Initialized
INFO - 2023-10-09 23:40:18 --> Hooks Class Initialized
DEBUG - 2023-10-09 23:40:18 --> UTF-8 Support Enabled
INFO - 2023-10-09 23:40:18 --> Utf8 Class Initialized
INFO - 2023-10-09 23:40:18 --> URI Class Initialized
INFO - 2023-10-09 23:40:18 --> Router Class Initialized
INFO - 2023-10-09 23:40:18 --> Output Class Initialized
INFO - 2023-10-09 23:40:18 --> Security Class Initialized
DEBUG - 2023-10-09 23:40:18 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-10-09 23:40:18 --> Input Class Initialized
INFO - 2023-10-09 23:40:18 --> Language Class Initialized
INFO - 2023-10-09 23:40:18 --> Loader Class Initialized
INFO - 2023-10-09 23:40:18 --> Helper loaded: url_helper
INFO - 2023-10-09 23:40:18 --> Database Driver Class Initialized
DEBUG - 2023-10-09 23:40:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-10-09 23:40:18 --> Session: Class initialized using 'files' driver.
INFO - 2023-10-09 23:40:18 --> Controller Class Initialized
DEBUG - 2023-10-09 23:40:18 --> Session class already loaded. Second attempt ignored.
INFO - 2023-10-09 23:40:18 --> Model Class Initialized
DEBUG - 2023-10-09 23:40:18 --> referenced_297om_proyectos
DEBUG - 2023-10-09 23:40:18 --> referenced_317om_proyectos
DEBUG - 2023-10-09 23:40:18 --> referenced_323om_proyectos
DEBUG - 2023-10-09 23:40:18 --> referenced_297om_tipos_documentos
DEBUG - 2023-10-09 23:40:18 --> referenced_317om_tipos_documentos
DEBUG - 2023-10-09 23:40:18 --> referenced_323om_tipos_documentos
DEBUG - 2023-10-09 23:40:18 --> mcwhere_343om_avances.id_proyecto = om_proyectos.id_proyecto AND om_avances.tipo_documento = om_tipos_documentos.id_tipo_documento
DEBUG - 2023-10-09 23:40:18 --> mcwhere_347om_avances
INFO - 2023-10-09 23:40:18 --> Final output sent to browser
DEBUG - 2023-10-09 23:40:18 --> Total execution time: 0.0365
INFO - 2023-10-09 23:40:27 --> Config Class Initialized
INFO - 2023-10-09 23:40:27 --> Hooks Class Initialized
DEBUG - 2023-10-09 23:40:27 --> UTF-8 Support Enabled
INFO - 2023-10-09 23:40:27 --> Utf8 Class Initialized
INFO - 2023-10-09 23:40:27 --> URI Class Initialized
INFO - 2023-10-09 23:40:27 --> Router Class Initialized
INFO - 2023-10-09 23:40:27 --> Output Class Initialized
INFO - 2023-10-09 23:40:27 --> Security Class Initialized
DEBUG - 2023-10-09 23:40:27 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-10-09 23:40:27 --> Input Class Initialized
INFO - 2023-10-09 23:40:27 --> Language Class Initialized
INFO - 2023-10-09 23:40:27 --> Loader Class Initialized
INFO - 2023-10-09 23:40:27 --> Helper loaded: url_helper
INFO - 2023-10-09 23:40:27 --> Database Driver Class Initialized
DEBUG - 2023-10-09 23:40:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-10-09 23:40:27 --> Session: Class initialized using 'files' driver.
INFO - 2023-10-09 23:40:27 --> Controller Class Initialized
DEBUG - 2023-10-09 23:40:27 --> Session class already loaded. Second attempt ignored.
INFO - 2023-10-09 23:40:27 --> Model Class Initialized
DEBUG - 2023-10-09 23:40:27 --> modelcommonSELECT om_tipos_documentos.id_tipo_documento, om_tipos_documentos.nombre_tipo_documento, om_tipos_documentos.borrado, om_tipos_documentos.log_accion, om_tipos_documentos.log_usuario, om_tipos_documentos.log_timestamp FROM om_tipos_documentos WHERE om_tipos_documentos.borrado = 0 ORDER BY om_tipos_documentos.id_tipo_documento ASC
INFO - 2023-10-09 23:40:27 --> Final output sent to browser
DEBUG - 2023-10-09 23:40:27 --> Total execution time: 0.0351
INFO - 2023-10-09 23:40:33 --> Config Class Initialized
INFO - 2023-10-09 23:40:33 --> Hooks Class Initialized
DEBUG - 2023-10-09 23:40:33 --> UTF-8 Support Enabled
INFO - 2023-10-09 23:40:33 --> Utf8 Class Initialized
INFO - 2023-10-09 23:40:33 --> URI Class Initialized
INFO - 2023-10-09 23:40:33 --> Router Class Initialized
INFO - 2023-10-09 23:40:33 --> Output Class Initialized
INFO - 2023-10-09 23:40:33 --> Security Class Initialized
DEBUG - 2023-10-09 23:40:33 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-10-09 23:40:33 --> Input Class Initialized
INFO - 2023-10-09 23:40:33 --> Language Class Initialized
INFO - 2023-10-09 23:40:33 --> Loader Class Initialized
INFO - 2023-10-09 23:40:33 --> Helper loaded: url_helper
INFO - 2023-10-09 23:40:33 --> Database Driver Class Initialized
DEBUG - 2023-10-09 23:40:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-10-09 23:40:33 --> Session: Class initialized using 'files' driver.
INFO - 2023-10-09 23:40:33 --> Controller Class Initialized
INFO - 2023-10-09 23:40:33 --> Helper loaded: form_helper
DEBUG - 2023-10-09 23:40:33 --> Session class already loaded. Second attempt ignored.
INFO - 2023-10-09 23:40:33 --> Model Class Initialized
INFO - 2023-10-09 23:40:33 --> Language file loaded: language/spanish/general_lang.php
INFO - 2023-10-09 23:40:33 --> Model Class Initialized
ERROR - 2023-10-09 18:40:33 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`gestion_uh`.`om_avances`, CONSTRAINT `om_avances_ibfk_1` FOREIGN KEY (`id_proyecto`) REFERENCES `om_proyectos` (`id_proyecto`) ON UPDATE CASCADE) - Invalid query: INSERT INTO `om_avances` (`id_avance`, `nombre_avance`, `presupuesto_ejecutado`, `fecha_entrega`, `tipo_documento`, `log_accion`, `log_usuario`, `log_timestamp`) VALUES ('', 'PRUEBA 10', '34', '2023-10-09', '2', 'add', 'luisa.garcia', '2023-10-09 06:10:33')
INFO - 2023-10-09 18:40:33 --> Upload Class Initialized
INFO - 2023-10-09 18:40:33 --> Final output sent to browser
DEBUG - 2023-10-09 18:40:33 --> Total execution time: 0.1485
INFO - 2023-10-09 23:40:33 --> Config Class Initialized
INFO - 2023-10-09 23:40:33 --> Hooks Class Initialized
DEBUG - 2023-10-09 23:40:33 --> UTF-8 Support Enabled
INFO - 2023-10-09 23:40:33 --> Utf8 Class Initialized
INFO - 2023-10-09 23:40:33 --> URI Class Initialized
INFO - 2023-10-09 23:40:33 --> Router Class Initialized
INFO - 2023-10-09 23:40:33 --> Output Class Initialized
INFO - 2023-10-09 23:40:33 --> Security Class Initialized
DEBUG - 2023-10-09 23:40:33 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-10-09 23:40:33 --> Input Class Initialized
INFO - 2023-10-09 23:40:33 --> Language Class Initialized
INFO - 2023-10-09 23:40:33 --> Loader Class Initialized
INFO - 2023-10-09 23:40:33 --> Helper loaded: url_helper
INFO - 2023-10-09 23:40:33 --> Database Driver Class Initialized
DEBUG - 2023-10-09 23:40:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-10-09 23:40:33 --> Session: Class initialized using 'files' driver.
INFO - 2023-10-09 23:40:33 --> Controller Class Initialized
INFO - 2023-10-09 23:40:33 --> Helper loaded: form_helper
DEBUG - 2023-10-09 23:40:33 --> Session class already loaded. Second attempt ignored.
INFO - 2023-10-09 23:40:33 --> Model Class Initialized
INFO - 2023-10-09 23:40:33 --> File loaded: C:\wamp64\www\proyectosunihorizonte\application\views\uh/forms/editor/avances.php
INFO - 2023-10-09 23:40:33 --> Final output sent to browser
DEBUG - 2023-10-09 23:40:33 --> Total execution time: 0.0218
INFO - 2023-10-09 23:40:34 --> Config Class Initialized
INFO - 2023-10-09 23:40:34 --> Hooks Class Initialized
DEBUG - 2023-10-09 23:40:34 --> UTF-8 Support Enabled
INFO - 2023-10-09 23:40:34 --> Utf8 Class Initialized
INFO - 2023-10-09 23:40:34 --> URI Class Initialized
INFO - 2023-10-09 23:40:34 --> Router Class Initialized
INFO - 2023-10-09 23:40:34 --> Output Class Initialized
INFO - 2023-10-09 23:40:34 --> Security Class Initialized
DEBUG - 2023-10-09 23:40:34 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-10-09 23:40:34 --> Input Class Initialized
INFO - 2023-10-09 23:40:34 --> Language Class Initialized
INFO - 2023-10-09 23:40:34 --> Loader Class Initialized
INFO - 2023-10-09 23:40:34 --> Helper loaded: url_helper
INFO - 2023-10-09 23:40:34 --> Database Driver Class Initialized
DEBUG - 2023-10-09 23:40:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-10-09 23:40:34 --> Session: Class initialized using 'files' driver.
INFO - 2023-10-09 23:40:34 --> Controller Class Initialized
DEBUG - 2023-10-09 23:40:34 --> Session class already loaded. Second attempt ignored.
INFO - 2023-10-09 23:40:34 --> Model Class Initialized
DEBUG - 2023-10-09 23:40:34 --> mcwhere_156_whereom_avances.id_proyecto = om_proyectos.id_proyecto AND om_avances.tipo_documento = om_tipos_documentos.id_tipo_documento
DEBUG - 2023-10-09 23:40:34 --> mcwhere_159om_avances
DEBUG - 2023-10-09 23:40:34 --> modelcommonSELECT om_avances.id_avance, om_avances.nombre_avance, om_avances.presupuesto_ejecutado, om_avances.fecha_entrega, om_avances.archivo_final_proyecto, om_avances.borrado, om_avances.log_accion, om_avances.log_usuario, om_avances.log_timestamp, om_proyectos.nombre_proyecto AS id_proyecto, om_tipos_documentos.nombre_tipo_documento AS tipo_documento FROM om_avances, om_proyectos, om_tipos_documentos WHERE om_avances.id_proyecto = om_proyectos.id_proyecto AND om_avances.tipo_documento = om_tipos_documentos.id_tipo_documento AND om_avances.borrado = 0 ORDER BY om_avances.id_avance ASC
INFO - 2023-10-09 23:40:34 --> Final output sent to browser
DEBUG - 2023-10-09 23:40:34 --> Total execution time: 0.0404
INFO - 2023-10-09 23:40:37 --> Config Class Initialized
INFO - 2023-10-09 23:40:37 --> Hooks Class Initialized
DEBUG - 2023-10-09 23:40:37 --> UTF-8 Support Enabled
INFO - 2023-10-09 23:40:37 --> Utf8 Class Initialized
INFO - 2023-10-09 23:40:37 --> URI Class Initialized
INFO - 2023-10-09 23:40:37 --> Router Class Initialized
INFO - 2023-10-09 23:40:37 --> Output Class Initialized
INFO - 2023-10-09 23:40:37 --> Security Class Initialized
DEBUG - 2023-10-09 23:40:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-10-09 23:40:37 --> Input Class Initialized
INFO - 2023-10-09 23:40:37 --> Language Class Initialized
INFO - 2023-10-09 23:40:37 --> Loader Class Initialized
INFO - 2023-10-09 23:40:37 --> Helper loaded: url_helper
INFO - 2023-10-09 23:40:37 --> Database Driver Class Initialized
DEBUG - 2023-10-09 23:40:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-10-09 23:40:37 --> Session: Class initialized using 'files' driver.
INFO - 2023-10-09 23:40:37 --> Controller Class Initialized
INFO - 2023-10-09 23:40:37 --> Helper loaded: form_helper
DEBUG - 2023-10-09 23:40:37 --> Session class already loaded. Second attempt ignored.
INFO - 2023-10-09 23:40:37 --> Model Class Initialized
INFO - 2023-10-09 23:40:37 --> Language file loaded: language/spanish/general_lang.php
INFO - 2023-10-09 23:40:37 --> Model Class Initialized
INFO - 2023-10-09 23:40:37 --> Final output sent to browser
DEBUG - 2023-10-09 23:40:37 --> Total execution time: 0.1048
INFO - 2023-10-09 23:41:02 --> Config Class Initialized
INFO - 2023-10-09 23:41:02 --> Hooks Class Initialized
DEBUG - 2023-10-09 23:41:02 --> UTF-8 Support Enabled
INFO - 2023-10-09 23:41:02 --> Utf8 Class Initialized
INFO - 2023-10-09 23:41:02 --> URI Class Initialized
INFO - 2023-10-09 23:41:02 --> Router Class Initialized
INFO - 2023-10-09 23:41:02 --> Output Class Initialized
INFO - 2023-10-09 23:41:02 --> Security Class Initialized
DEBUG - 2023-10-09 23:41:02 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-10-09 23:41:02 --> Input Class Initialized
INFO - 2023-10-09 23:41:02 --> Language Class Initialized
INFO - 2023-10-09 23:41:02 --> Loader Class Initialized
INFO - 2023-10-09 23:41:02 --> Helper loaded: url_helper
INFO - 2023-10-09 23:41:02 --> Database Driver Class Initialized
DEBUG - 2023-10-09 23:41:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-10-09 23:41:02 --> Session: Class initialized using 'files' driver.
INFO - 2023-10-09 23:41:02 --> Controller Class Initialized
INFO - 2023-10-09 23:41:02 --> Helper loaded: form_helper
DEBUG - 2023-10-09 23:41:02 --> Session class already loaded. Second attempt ignored.
INFO - 2023-10-09 23:41:02 --> Model Class Initialized
INFO - 2023-10-09 23:41:02 --> Language file loaded: language/spanish/general_lang.php
INFO - 2023-10-09 23:41:02 --> Model Class Initialized
INFO - 2023-10-09 23:41:02 --> Final output sent to browser
DEBUG - 2023-10-09 23:41:02 --> Total execution time: 0.0251
INFO - 2023-10-09 23:41:05 --> Config Class Initialized
INFO - 2023-10-09 23:41:05 --> Hooks Class Initialized
DEBUG - 2023-10-09 23:41:05 --> UTF-8 Support Enabled
INFO - 2023-10-09 23:41:05 --> Utf8 Class Initialized
INFO - 2023-10-09 23:41:05 --> URI Class Initialized
INFO - 2023-10-09 23:41:05 --> Router Class Initialized
INFO - 2023-10-09 23:41:05 --> Output Class Initialized
INFO - 2023-10-09 23:41:05 --> Security Class Initialized
DEBUG - 2023-10-09 23:41:05 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-10-09 23:41:05 --> Input Class Initialized
INFO - 2023-10-09 23:41:05 --> Language Class Initialized
INFO - 2023-10-09 23:41:05 --> Loader Class Initialized
INFO - 2023-10-09 23:41:05 --> Helper loaded: url_helper
INFO - 2023-10-09 23:41:05 --> Database Driver Class Initialized
DEBUG - 2023-10-09 23:41:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-10-09 23:41:05 --> Session: Class initialized using 'files' driver.
INFO - 2023-10-09 23:41:05 --> Controller Class Initialized
DEBUG - 2023-10-09 23:41:05 --> Session class already loaded. Second attempt ignored.
INFO - 2023-10-09 23:41:05 --> Model Class Initialized
DEBUG - 2023-10-09 23:41:05 --> referenced_297om_users
DEBUG - 2023-10-09 23:41:05 --> referenced_317om_users
DEBUG - 2023-10-09 23:41:05 --> referenced_323om_users
DEBUG - 2023-10-09 23:41:05 --> referenced_297om_lineas_institucionales_lista
DEBUG - 2023-10-09 23:41:05 --> referenced_317om_lineas_institucionales_lista
DEBUG - 2023-10-09 23:41:05 --> referenced_323om_lineas_institucionales_lista
DEBUG - 2023-10-09 23:41:05 --> referenced_297om_grupos_colciencias_lista
DEBUG - 2023-10-09 23:41:05 --> referenced_317om_grupos_colciencias_lista
DEBUG - 2023-10-09 23:41:05 --> referenced_323om_grupos_colciencias_lista
DEBUG - 2023-10-09 23:41:05 --> referenced_297om_facultades_lista
DEBUG - 2023-10-09 23:41:05 --> referenced_317om_facultades_lista
DEBUG - 2023-10-09 23:41:05 --> referenced_323om_facultades_lista
DEBUG - 2023-10-09 23:41:05 --> referenced_297om_lineas_por_programa
DEBUG - 2023-10-09 23:41:05 --> referenced_317om_lineas_por_programa
DEBUG - 2023-10-09 23:41:05 --> referenced_323om_lineas_por_programa
DEBUG - 2023-10-09 23:41:05 --> referenced_297om_programa_academico_lista
DEBUG - 2023-10-09 23:41:05 --> referenced_317om_programa_academico_lista
DEBUG - 2023-10-09 23:41:05 --> referenced_323om_programa_academico_lista
DEBUG - 2023-10-09 23:41:05 --> referenced_297om_estado_proyecto
DEBUG - 2023-10-09 23:41:05 --> referenced_317om_estado_proyecto
DEBUG - 2023-10-09 23:41:05 --> referenced_323om_estado_proyecto
DEBUG - 2023-10-09 23:41:05 --> mcwhere_343om_proyectos.docente_lider = om_users.user_id AND om_proyectos.linea_investigacion_institucional = om_lineas_institucionales_lista.id_linea_institucional_lista AND om_proyectos.grupo_colciencias = om_grupos_colciencias_lista.id_grupo_colciencias AND om_proyectos.facultad = om_facultades_lista.facultad_lista_id AND om_proyectos.linea_programa = om_lineas_por_programa.id_lineas_por_programa AND om_proyectos.programa_academico = om_programa_academico_lista.id_programa_academico AND om_proyectos.estado = om_estado_proyecto.id_estado
DEBUG - 2023-10-09 23:41:05 --> mcwhere_347om_proyectos
INFO - 2023-10-09 23:41:05 --> Final output sent to browser
DEBUG - 2023-10-09 23:41:05 --> Total execution time: 0.0521
INFO - 2023-10-09 23:41:05 --> Config Class Initialized
INFO - 2023-10-09 23:41:05 --> Hooks Class Initialized
DEBUG - 2023-10-09 23:41:05 --> UTF-8 Support Enabled
INFO - 2023-10-09 23:41:05 --> Utf8 Class Initialized
INFO - 2023-10-09 23:41:05 --> URI Class Initialized
INFO - 2023-10-09 23:41:05 --> Router Class Initialized
INFO - 2023-10-09 23:41:05 --> Output Class Initialized
INFO - 2023-10-09 23:41:05 --> Security Class Initialized
DEBUG - 2023-10-09 23:41:05 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-10-09 23:41:05 --> Input Class Initialized
INFO - 2023-10-09 23:41:05 --> Language Class Initialized
INFO - 2023-10-09 23:41:05 --> Loader Class Initialized
INFO - 2023-10-09 23:41:05 --> Helper loaded: url_helper
INFO - 2023-10-09 23:41:05 --> Database Driver Class Initialized
DEBUG - 2023-10-09 23:41:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-10-09 23:41:05 --> Session: Class initialized using 'files' driver.
INFO - 2023-10-09 23:41:05 --> Controller Class Initialized
DEBUG - 2023-10-09 23:41:05 --> Session class already loaded. Second attempt ignored.
INFO - 2023-10-09 23:41:05 --> Model Class Initialized
DEBUG - 2023-10-09 23:41:05 --> mcwhere_156_whereom_locks.id_usuario = om_users.user_id
DEBUG - 2023-10-09 23:41:05 --> mcwhere_159om_locks
DEBUG - 2023-10-09 23:41:05 --> modelcommonSELECT om_locks.id_lock, om_locks.nombre_usuario, om_locks.tabla, om_locks.id_registro, om_locks.timestamp, om_locks.borrado, om_locks.log_accion, om_locks.log_usuario, om_locks.log_timestamp, om_users.user_name AS id_usuario FROM om_locks, om_users WHERE om_locks.id_usuario = om_users.user_id AND om_locks.borrado = 0 ORDER BY om_locks.id_lock ASC
INFO - 2023-10-09 23:41:05 --> Final output sent to browser
DEBUG - 2023-10-09 23:41:05 --> Total execution time: 0.0282
INFO - 2023-10-09 23:41:05 --> Config Class Initialized
INFO - 2023-10-09 23:41:05 --> Hooks Class Initialized
DEBUG - 2023-10-09 23:41:05 --> UTF-8 Support Enabled
INFO - 2023-10-09 23:41:05 --> Utf8 Class Initialized
INFO - 2023-10-09 23:41:05 --> URI Class Initialized
INFO - 2023-10-09 23:41:05 --> Config Class Initialized
INFO - 2023-10-09 23:41:05 --> Hooks Class Initialized
INFO - 2023-10-09 23:41:05 --> Router Class Initialized
DEBUG - 2023-10-09 23:41:05 --> UTF-8 Support Enabled
INFO - 2023-10-09 23:41:05 --> Output Class Initialized
INFO - 2023-10-09 23:41:05 --> Utf8 Class Initialized
INFO - 2023-10-09 23:41:05 --> Security Class Initialized
INFO - 2023-10-09 23:41:05 --> URI Class Initialized
DEBUG - 2023-10-09 23:41:05 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-10-09 23:41:05 --> Input Class Initialized
INFO - 2023-10-09 23:41:05 --> Router Class Initialized
INFO - 2023-10-09 23:41:05 --> Language Class Initialized
INFO - 2023-10-09 23:41:05 --> Output Class Initialized
INFO - 2023-10-09 23:41:05 --> Security Class Initialized
INFO - 2023-10-09 23:41:05 --> Loader Class Initialized
DEBUG - 2023-10-09 23:41:05 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-10-09 23:41:05 --> Helper loaded: url_helper
INFO - 2023-10-09 23:41:05 --> Input Class Initialized
INFO - 2023-10-09 23:41:05 --> Language Class Initialized
INFO - 2023-10-09 23:41:05 --> Database Driver Class Initialized
INFO - 2023-10-09 23:41:05 --> Loader Class Initialized
INFO - 2023-10-09 23:41:05 --> Helper loaded: url_helper
DEBUG - 2023-10-09 23:41:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-10-09 23:41:05 --> Database Driver Class Initialized
INFO - 2023-10-09 23:41:05 --> Session: Class initialized using 'files' driver.
INFO - 2023-10-09 23:41:05 --> Controller Class Initialized
INFO - 2023-10-09 23:41:05 --> Helper loaded: form_helper
DEBUG - 2023-10-09 23:41:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2023-10-09 23:41:05 --> Session class already loaded. Second attempt ignored.
INFO - 2023-10-09 23:41:05 --> Model Class Initialized
INFO - 2023-10-09 23:41:05 --> Language file loaded: language/spanish/general_lang.php
INFO - 2023-10-09 23:41:05 --> Model Class Initialized
INFO - 2023-10-09 23:41:05 --> Final output sent to browser
DEBUG - 2023-10-09 23:41:05 --> Total execution time: 0.0642
INFO - 2023-10-09 23:41:05 --> Session: Class initialized using 'files' driver.
INFO - 2023-10-09 23:41:05 --> Controller Class Initialized
INFO - 2023-10-09 23:41:05 --> Helper loaded: form_helper
DEBUG - 2023-10-09 23:41:05 --> Session class already loaded. Second attempt ignored.
INFO - 2023-10-09 23:41:05 --> Model Class Initialized
INFO - 2023-10-09 23:41:05 --> File loaded: C:\wamp64\www\proyectosunihorizonte\application\views\uh/forms/editor/proyectos.php
INFO - 2023-10-09 23:41:05 --> Final output sent to browser
DEBUG - 2023-10-09 23:41:05 --> Total execution time: 0.0672
INFO - 2023-10-09 23:41:05 --> Config Class Initialized
INFO - 2023-10-09 23:41:05 --> Hooks Class Initialized
DEBUG - 2023-10-09 23:41:05 --> UTF-8 Support Enabled
INFO - 2023-10-09 23:41:05 --> Utf8 Class Initialized
INFO - 2023-10-09 23:41:05 --> URI Class Initialized
INFO - 2023-10-09 23:41:05 --> Router Class Initialized
INFO - 2023-10-09 23:41:05 --> Output Class Initialized
INFO - 2023-10-09 23:41:05 --> Security Class Initialized
DEBUG - 2023-10-09 23:41:05 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-10-09 23:41:05 --> Input Class Initialized
INFO - 2023-10-09 23:41:05 --> Language Class Initialized
INFO - 2023-10-09 23:41:05 --> Loader Class Initialized
INFO - 2023-10-09 23:41:05 --> Helper loaded: url_helper
INFO - 2023-10-09 23:41:05 --> Database Driver Class Initialized
DEBUG - 2023-10-09 23:41:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-10-09 23:41:05 --> Session: Class initialized using 'files' driver.
INFO - 2023-10-09 23:41:05 --> Controller Class Initialized
DEBUG - 2023-10-09 23:41:05 --> Session class already loaded. Second attempt ignored.
INFO - 2023-10-09 23:41:05 --> Model Class Initialized
DEBUG - 2023-10-09 23:41:05 --> referenced_297om_users
DEBUG - 2023-10-09 23:41:05 --> referenced_317om_users
DEBUG - 2023-10-09 23:41:05 --> referenced_323om_users
DEBUG - 2023-10-09 23:41:05 --> referenced_297om_lineas_institucionales_lista
DEBUG - 2023-10-09 23:41:05 --> referenced_317om_lineas_institucionales_lista
DEBUG - 2023-10-09 23:41:05 --> referenced_323om_lineas_institucionales_lista
DEBUG - 2023-10-09 23:41:05 --> referenced_297om_grupos_colciencias_lista
DEBUG - 2023-10-09 23:41:05 --> referenced_317om_grupos_colciencias_lista
DEBUG - 2023-10-09 23:41:05 --> referenced_323om_grupos_colciencias_lista
DEBUG - 2023-10-09 23:41:05 --> referenced_297om_facultades_lista
DEBUG - 2023-10-09 23:41:05 --> referenced_317om_facultades_lista
DEBUG - 2023-10-09 23:41:05 --> referenced_323om_facultades_lista
DEBUG - 2023-10-09 23:41:05 --> referenced_297om_lineas_por_programa
DEBUG - 2023-10-09 23:41:05 --> referenced_317om_lineas_por_programa
DEBUG - 2023-10-09 23:41:05 --> referenced_323om_lineas_por_programa
DEBUG - 2023-10-09 23:41:05 --> referenced_297om_programa_academico_lista
DEBUG - 2023-10-09 23:41:05 --> referenced_317om_programa_academico_lista
DEBUG - 2023-10-09 23:41:05 --> referenced_323om_programa_academico_lista
DEBUG - 2023-10-09 23:41:05 --> referenced_297om_estado_proyecto
DEBUG - 2023-10-09 23:41:05 --> referenced_317om_estado_proyecto
DEBUG - 2023-10-09 23:41:05 --> referenced_323om_estado_proyecto
DEBUG - 2023-10-09 23:41:05 --> mcwhere_343om_proyectos.docente_lider = om_users.user_id AND om_proyectos.linea_investigacion_institucional = om_lineas_institucionales_lista.id_linea_institucional_lista AND om_proyectos.grupo_colciencias = om_grupos_colciencias_lista.id_grupo_colciencias AND om_proyectos.facultad = om_facultades_lista.facultad_lista_id AND om_proyectos.linea_programa = om_lineas_por_programa.id_lineas_por_programa AND om_proyectos.programa_academico = om_programa_academico_lista.id_programa_academico AND om_proyectos.estado = om_estado_proyecto.id_estado
DEBUG - 2023-10-09 23:41:05 --> mcwhere_347om_proyectos
INFO - 2023-10-09 23:41:05 --> Final output sent to browser
DEBUG - 2023-10-09 23:41:05 --> Total execution time: 0.0587
INFO - 2023-10-09 23:41:06 --> Config Class Initialized
INFO - 2023-10-09 23:41:06 --> Hooks Class Initialized
DEBUG - 2023-10-09 23:41:06 --> UTF-8 Support Enabled
INFO - 2023-10-09 23:41:06 --> Utf8 Class Initialized
INFO - 2023-10-09 23:41:06 --> URI Class Initialized
INFO - 2023-10-09 23:41:06 --> Router Class Initialized
INFO - 2023-10-09 23:41:06 --> Output Class Initialized
INFO - 2023-10-09 23:41:06 --> Security Class Initialized
DEBUG - 2023-10-09 23:41:06 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-10-09 23:41:06 --> Input Class Initialized
INFO - 2023-10-09 23:41:06 --> Language Class Initialized
INFO - 2023-10-09 23:41:06 --> Loader Class Initialized
INFO - 2023-10-09 23:41:06 --> Helper loaded: url_helper
INFO - 2023-10-09 23:41:06 --> Database Driver Class Initialized
DEBUG - 2023-10-09 23:41:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-10-09 23:41:06 --> Session: Class initialized using 'files' driver.
INFO - 2023-10-09 23:41:06 --> Controller Class Initialized
INFO - 2023-10-09 23:41:06 --> Helper loaded: form_helper
DEBUG - 2023-10-09 23:41:06 --> Session class already loaded. Second attempt ignored.
INFO - 2023-10-09 23:41:06 --> Model Class Initialized
INFO - 2023-10-09 23:41:06 --> File loaded: C:\wamp64\www\proyectosunihorizonte\application\views\uh/avances.php
INFO - 2023-10-09 23:41:06 --> Final output sent to browser
DEBUG - 2023-10-09 23:41:06 --> Total execution time: 0.0235
INFO - 2023-10-09 23:41:06 --> Config Class Initialized
INFO - 2023-10-09 23:41:06 --> Hooks Class Initialized
DEBUG - 2023-10-09 23:41:06 --> UTF-8 Support Enabled
INFO - 2023-10-09 23:41:06 --> Utf8 Class Initialized
INFO - 2023-10-09 23:41:06 --> URI Class Initialized
INFO - 2023-10-09 23:41:06 --> Router Class Initialized
INFO - 2023-10-09 23:41:06 --> Output Class Initialized
INFO - 2023-10-09 23:41:06 --> Security Class Initialized
DEBUG - 2023-10-09 23:41:06 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-10-09 23:41:06 --> Input Class Initialized
INFO - 2023-10-09 23:41:06 --> Language Class Initialized
INFO - 2023-10-09 23:41:06 --> Loader Class Initialized
INFO - 2023-10-09 23:41:06 --> Helper loaded: url_helper
INFO - 2023-10-09 23:41:06 --> Database Driver Class Initialized
DEBUG - 2023-10-09 23:41:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-10-09 23:41:06 --> Session: Class initialized using 'files' driver.
INFO - 2023-10-09 23:41:06 --> Controller Class Initialized
DEBUG - 2023-10-09 23:41:06 --> Session class already loaded. Second attempt ignored.
INFO - 2023-10-09 23:41:06 --> Model Class Initialized
DEBUG - 2023-10-09 23:41:06 --> referenced_146om_proyectos
DEBUG - 2023-10-09 23:41:06 --> mcwhere_148id_proyecto
DEBUG - 2023-10-09 23:41:06 --> mcwhere_149om_avances
DEBUG - 2023-10-09 23:41:06 --> modelcommonSELECT om_avances.id_avance, om_avances.nombre_avance, om_avances.presupuesto_ejecutado, om_avances.fecha_entrega, om_avances.archivo_final_proyecto, om_avances.borrado, om_avances.log_accion, om_avances.log_usuario, om_avances.log_timestamp, om_proyectos.nombre_proyecto AS id_proyecto, om_tipos_documentos.nombre_tipo_documento AS tipo_documento FROM om_avances, om_proyectos, om_tipos_documentos WHERE om_avances.id_proyecto = om_proyectos.id_proyecto AND om_avances.tipo_documento = om_tipos_documentos.id_tipo_documento AND om_avances.id_proyecto = 105 AND om_avances.borrado = 0 ORDER BY om_avances.id_avance ASC
DEBUG - 2023-10-09 23:41:06 --> referenced_215om_proyectos
DEBUG - 2023-10-09 23:41:06 --> mcwhere_214id_proyecto
INFO - 2023-10-09 23:41:06 --> Final output sent to browser
DEBUG - 2023-10-09 23:41:06 --> Total execution time: 0.0386
INFO - 2023-10-09 23:41:07 --> Config Class Initialized
INFO - 2023-10-09 23:41:07 --> Hooks Class Initialized
DEBUG - 2023-10-09 23:41:07 --> UTF-8 Support Enabled
INFO - 2023-10-09 23:41:07 --> Utf8 Class Initialized
INFO - 2023-10-09 23:41:07 --> URI Class Initialized
INFO - 2023-10-09 23:41:07 --> Router Class Initialized
INFO - 2023-10-09 23:41:07 --> Output Class Initialized
INFO - 2023-10-09 23:41:07 --> Security Class Initialized
DEBUG - 2023-10-09 23:41:07 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-10-09 23:41:07 --> Input Class Initialized
INFO - 2023-10-09 23:41:07 --> Language Class Initialized
INFO - 2023-10-09 23:41:07 --> Loader Class Initialized
INFO - 2023-10-09 23:41:07 --> Helper loaded: url_helper
INFO - 2023-10-09 23:41:07 --> Database Driver Class Initialized
DEBUG - 2023-10-09 23:41:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-10-09 23:41:07 --> Session: Class initialized using 'files' driver.
INFO - 2023-10-09 23:41:07 --> Controller Class Initialized
INFO - 2023-10-09 23:41:07 --> Helper loaded: form_helper
DEBUG - 2023-10-09 23:41:07 --> Session class already loaded. Second attempt ignored.
INFO - 2023-10-09 23:41:07 --> Model Class Initialized
INFO - 2023-10-09 23:41:07 --> File loaded: C:\wamp64\www\proyectosunihorizonte\application\views\uh/productos.php
INFO - 2023-10-09 23:41:07 --> Final output sent to browser
DEBUG - 2023-10-09 23:41:07 --> Total execution time: 0.0201
INFO - 2023-10-09 23:41:07 --> Config Class Initialized
INFO - 2023-10-09 23:41:07 --> Hooks Class Initialized
DEBUG - 2023-10-09 23:41:07 --> UTF-8 Support Enabled
INFO - 2023-10-09 23:41:07 --> Utf8 Class Initialized
INFO - 2023-10-09 23:41:07 --> URI Class Initialized
INFO - 2023-10-09 23:41:07 --> Router Class Initialized
INFO - 2023-10-09 23:41:07 --> Output Class Initialized
INFO - 2023-10-09 23:41:07 --> Security Class Initialized
DEBUG - 2023-10-09 23:41:07 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-10-09 23:41:07 --> Input Class Initialized
INFO - 2023-10-09 23:41:07 --> Language Class Initialized
INFO - 2023-10-09 23:41:07 --> Loader Class Initialized
INFO - 2023-10-09 23:41:07 --> Helper loaded: url_helper
INFO - 2023-10-09 23:41:07 --> Database Driver Class Initialized
DEBUG - 2023-10-09 23:41:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-10-09 23:41:07 --> Session: Class initialized using 'files' driver.
INFO - 2023-10-09 23:41:07 --> Controller Class Initialized
DEBUG - 2023-10-09 23:41:07 --> Session class already loaded. Second attempt ignored.
INFO - 2023-10-09 23:41:07 --> Model Class Initialized
DEBUG - 2023-10-09 23:41:07 --> referenced_146om_proyectos
DEBUG - 2023-10-09 23:41:07 --> mcwhere_148proyecto
DEBUG - 2023-10-09 23:41:07 --> mcwhere_149om_productos
DEBUG - 2023-10-09 23:41:07 --> modelcommonSELECT om_productos.id_producto, om_productos.fecha_entrega, om_productos.archivo_producto, om_productos.borrado, om_productos.log_accion, om_productos.log_usuario, om_productos.log_timestamp, om_proyectos.nombre_proyecto AS proyecto, om_productos_lista_colciencias.nombre_tipo_producto AS producto_colciencias FROM om_productos, om_proyectos, om_productos_lista_colciencias WHERE om_productos.proyecto = om_proyectos.id_proyecto AND om_productos.producto_colciencias = om_productos_lista_colciencias.id_producto_lista_colciencias AND om_productos.proyecto = 105 AND om_productos.borrado = 0 ORDER BY om_productos.id_producto ASC
DEBUG - 2023-10-09 23:41:07 --> referenced_215om_proyectos
DEBUG - 2023-10-09 23:41:07 --> mcwhere_214proyecto
INFO - 2023-10-09 23:41:07 --> Final output sent to browser
DEBUG - 2023-10-09 23:41:07 --> Total execution time: 0.0394
INFO - 2023-10-09 23:41:08 --> Config Class Initialized
INFO - 2023-10-09 23:41:08 --> Hooks Class Initialized
DEBUG - 2023-10-09 23:41:08 --> UTF-8 Support Enabled
INFO - 2023-10-09 23:41:08 --> Utf8 Class Initialized
INFO - 2023-10-09 23:41:08 --> URI Class Initialized
INFO - 2023-10-09 23:41:08 --> Router Class Initialized
INFO - 2023-10-09 23:41:08 --> Output Class Initialized
INFO - 2023-10-09 23:41:08 --> Security Class Initialized
DEBUG - 2023-10-09 23:41:08 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-10-09 23:41:08 --> Input Class Initialized
INFO - 2023-10-09 23:41:08 --> Language Class Initialized
INFO - 2023-10-09 23:41:08 --> Loader Class Initialized
INFO - 2023-10-09 23:41:08 --> Helper loaded: url_helper
INFO - 2023-10-09 23:41:08 --> Database Driver Class Initialized
DEBUG - 2023-10-09 23:41:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-10-09 23:41:08 --> Session: Class initialized using 'files' driver.
INFO - 2023-10-09 23:41:08 --> Controller Class Initialized
INFO - 2023-10-09 23:41:08 --> Helper loaded: form_helper
DEBUG - 2023-10-09 23:41:08 --> Session class already loaded. Second attempt ignored.
INFO - 2023-10-09 23:41:08 --> Model Class Initialized
INFO - 2023-10-09 23:41:08 --> File loaded: C:\wamp64\www\proyectosunihorizonte\application\views\uh/docentes_grupos_unihorizonte.php
INFO - 2023-10-09 23:41:08 --> Final output sent to browser
DEBUG - 2023-10-09 23:41:08 --> Total execution time: 0.0203
INFO - 2023-10-09 23:41:08 --> Config Class Initialized
INFO - 2023-10-09 23:41:08 --> Hooks Class Initialized
DEBUG - 2023-10-09 23:41:08 --> UTF-8 Support Enabled
INFO - 2023-10-09 23:41:08 --> Utf8 Class Initialized
INFO - 2023-10-09 23:41:08 --> URI Class Initialized
INFO - 2023-10-09 23:41:08 --> Router Class Initialized
INFO - 2023-10-09 23:41:08 --> Output Class Initialized
INFO - 2023-10-09 23:41:08 --> Security Class Initialized
DEBUG - 2023-10-09 23:41:08 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-10-09 23:41:08 --> Input Class Initialized
INFO - 2023-10-09 23:41:08 --> Language Class Initialized
INFO - 2023-10-09 23:41:08 --> Loader Class Initialized
INFO - 2023-10-09 23:41:08 --> Helper loaded: url_helper
INFO - 2023-10-09 23:41:08 --> Database Driver Class Initialized
DEBUG - 2023-10-09 23:41:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-10-09 23:41:08 --> Session: Class initialized using 'files' driver.
INFO - 2023-10-09 23:41:08 --> Controller Class Initialized
DEBUG - 2023-10-09 23:41:08 --> Session class already loaded. Second attempt ignored.
INFO - 2023-10-09 23:41:08 --> Model Class Initialized
DEBUG - 2023-10-09 23:41:08 --> referenced_146om_proyectos
DEBUG - 2023-10-09 23:41:08 --> mcwhere_148proyecto
DEBUG - 2023-10-09 23:41:08 --> mcwhere_149om_docentes_grupos_unihorizonte
DEBUG - 2023-10-09 23:41:08 --> modelcommonSELECT om_docentes_grupos_unihorizonte.id_grupo, om_docentes_grupos_unihorizonte.borrado, om_docentes_grupos_unihorizonte.log_accion, om_docentes_grupos_unihorizonte.log_usuario, om_docentes_grupos_unihorizonte.log_timestamp, om_proyectos.nombre_proyecto AS proyecto, om_users.user_name AS docente FROM om_docentes_grupos_unihorizonte, om_proyectos, om_users WHERE om_docentes_grupos_unihorizonte.proyecto = om_proyectos.id_proyecto AND om_docentes_grupos_unihorizonte.docente = om_users.user_id AND om_docentes_grupos_unihorizonte.proyecto = 105 AND om_docentes_grupos_unihorizonte.borrado = 0 ORDER BY om_docentes_grupos_unihorizonte.id_grupo ASC
DEBUG - 2023-10-09 23:41:08 --> referenced_215om_proyectos
DEBUG - 2023-10-09 23:41:08 --> mcwhere_214proyecto
INFO - 2023-10-09 23:41:08 --> Final output sent to browser
DEBUG - 2023-10-09 23:41:08 --> Total execution time: 0.0439
INFO - 2023-10-09 23:41:08 --> Config Class Initialized
INFO - 2023-10-09 23:41:08 --> Hooks Class Initialized
DEBUG - 2023-10-09 23:41:08 --> UTF-8 Support Enabled
INFO - 2023-10-09 23:41:08 --> Utf8 Class Initialized
INFO - 2023-10-09 23:41:08 --> URI Class Initialized
INFO - 2023-10-09 23:41:08 --> Router Class Initialized
INFO - 2023-10-09 23:41:08 --> Output Class Initialized
INFO - 2023-10-09 23:41:08 --> Security Class Initialized
DEBUG - 2023-10-09 23:41:08 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-10-09 23:41:08 --> Input Class Initialized
INFO - 2023-10-09 23:41:08 --> Language Class Initialized
INFO - 2023-10-09 23:41:08 --> Loader Class Initialized
INFO - 2023-10-09 23:41:08 --> Helper loaded: url_helper
INFO - 2023-10-09 23:41:08 --> Database Driver Class Initialized
DEBUG - 2023-10-09 23:41:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-10-09 23:41:08 --> Session: Class initialized using 'files' driver.
INFO - 2023-10-09 23:41:08 --> Controller Class Initialized
INFO - 2023-10-09 23:41:08 --> Helper loaded: form_helper
DEBUG - 2023-10-09 23:41:08 --> Session class already loaded. Second attempt ignored.
INFO - 2023-10-09 23:41:08 --> Model Class Initialized
INFO - 2023-10-09 23:41:08 --> File loaded: C:\wamp64\www\proyectosunihorizonte\application\views\uh/proyectos_minciencias.php
INFO - 2023-10-09 23:41:08 --> Final output sent to browser
DEBUG - 2023-10-09 23:41:08 --> Total execution time: 0.0217
INFO - 2023-10-09 23:41:08 --> Config Class Initialized
INFO - 2023-10-09 23:41:08 --> Hooks Class Initialized
DEBUG - 2023-10-09 23:41:08 --> UTF-8 Support Enabled
INFO - 2023-10-09 23:41:08 --> Utf8 Class Initialized
INFO - 2023-10-09 23:41:08 --> URI Class Initialized
INFO - 2023-10-09 23:41:08 --> Router Class Initialized
INFO - 2023-10-09 23:41:08 --> Output Class Initialized
INFO - 2023-10-09 23:41:08 --> Security Class Initialized
DEBUG - 2023-10-09 23:41:08 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-10-09 23:41:08 --> Input Class Initialized
INFO - 2023-10-09 23:41:08 --> Language Class Initialized
INFO - 2023-10-09 23:41:08 --> Loader Class Initialized
INFO - 2023-10-09 23:41:08 --> Helper loaded: url_helper
INFO - 2023-10-09 23:41:08 --> Database Driver Class Initialized
DEBUG - 2023-10-09 23:41:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-10-09 23:41:08 --> Session: Class initialized using 'files' driver.
INFO - 2023-10-09 23:41:08 --> Controller Class Initialized
DEBUG - 2023-10-09 23:41:08 --> Session class already loaded. Second attempt ignored.
INFO - 2023-10-09 23:41:08 --> Model Class Initialized
DEBUG - 2023-10-09 23:41:08 --> referenced_146om_proyectos
DEBUG - 2023-10-09 23:41:08 --> mcwhere_148id_proyecto_lista
DEBUG - 2023-10-09 23:41:08 --> mcwhere_149om_proyectos_minciencias
DEBUG - 2023-10-09 23:41:08 --> modelcommonSELECT om_proyectos_minciencias.id_proyecto_minciencias_lista, om_proyectos_minciencias.borrado, om_proyectos_minciencias.log_accion, om_proyectos_minciencias.log_usuario, om_proyectos_minciencias.log_timestamp, om_proyectos.nombre_proyecto AS id_proyecto_lista, om_grupos_colciencias_lista.nombre_grupo AS id_minciencias_lista FROM om_proyectos_minciencias, om_proyectos, om_grupos_colciencias_lista WHERE om_proyectos_minciencias.id_proyecto_lista = om_proyectos.id_proyecto AND om_proyectos_minciencias.id_minciencias_lista = om_grupos_colciencias_lista.id_grupo_colciencias AND om_proyectos_minciencias.id_proyecto_lista = 105 AND om_proyectos_minciencias.borrado = 0 ORDER BY om_proyectos_minciencias.id_proyecto_minciencias_lista ASC
DEBUG - 2023-10-09 23:41:08 --> referenced_215om_proyectos
DEBUG - 2023-10-09 23:41:08 --> mcwhere_214id_proyecto_lista
INFO - 2023-10-09 23:41:08 --> Final output sent to browser
DEBUG - 2023-10-09 23:41:08 --> Total execution time: 0.0382
INFO - 2023-10-09 23:41:09 --> Config Class Initialized
INFO - 2023-10-09 23:41:09 --> Hooks Class Initialized
DEBUG - 2023-10-09 23:41:09 --> UTF-8 Support Enabled
INFO - 2023-10-09 23:41:09 --> Utf8 Class Initialized
INFO - 2023-10-09 23:41:09 --> URI Class Initialized
INFO - 2023-10-09 23:41:09 --> Router Class Initialized
INFO - 2023-10-09 23:41:09 --> Output Class Initialized
INFO - 2023-10-09 23:41:09 --> Security Class Initialized
DEBUG - 2023-10-09 23:41:09 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-10-09 23:41:09 --> Input Class Initialized
INFO - 2023-10-09 23:41:09 --> Language Class Initialized
INFO - 2023-10-09 23:41:09 --> Loader Class Initialized
INFO - 2023-10-09 23:41:09 --> Helper loaded: url_helper
INFO - 2023-10-09 23:41:09 --> Database Driver Class Initialized
DEBUG - 2023-10-09 23:41:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-10-09 23:41:09 --> Session: Class initialized using 'files' driver.
INFO - 2023-10-09 23:41:09 --> Controller Class Initialized
INFO - 2023-10-09 23:41:09 --> Helper loaded: form_helper
DEBUG - 2023-10-09 23:41:09 --> Session class already loaded. Second attempt ignored.
INFO - 2023-10-09 23:41:09 --> Model Class Initialized
INFO - 2023-10-09 23:41:09 --> File loaded: C:\wamp64\www\proyectosunihorizonte\application\views\uh/grupos_unihorizonte.php
INFO - 2023-10-09 23:41:09 --> Final output sent to browser
DEBUG - 2023-10-09 23:41:09 --> Total execution time: 0.0231
INFO - 2023-10-09 23:41:09 --> Config Class Initialized
INFO - 2023-10-09 23:41:09 --> Hooks Class Initialized
DEBUG - 2023-10-09 23:41:09 --> UTF-8 Support Enabled
INFO - 2023-10-09 23:41:09 --> Utf8 Class Initialized
INFO - 2023-10-09 23:41:09 --> URI Class Initialized
INFO - 2023-10-09 23:41:09 --> Router Class Initialized
INFO - 2023-10-09 23:41:09 --> Output Class Initialized
INFO - 2023-10-09 23:41:09 --> Security Class Initialized
DEBUG - 2023-10-09 23:41:09 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-10-09 23:41:09 --> Input Class Initialized
INFO - 2023-10-09 23:41:09 --> Language Class Initialized
INFO - 2023-10-09 23:41:09 --> Loader Class Initialized
INFO - 2023-10-09 23:41:09 --> Helper loaded: url_helper
INFO - 2023-10-09 23:41:09 --> Database Driver Class Initialized
DEBUG - 2023-10-09 23:41:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-10-09 23:41:09 --> Session: Class initialized using 'files' driver.
INFO - 2023-10-09 23:41:09 --> Controller Class Initialized
DEBUG - 2023-10-09 23:41:09 --> Session class already loaded. Second attempt ignored.
INFO - 2023-10-09 23:41:09 --> Model Class Initialized
DEBUG - 2023-10-09 23:41:09 --> referenced_146om_proyectos
DEBUG - 2023-10-09 23:41:09 --> mcwhere_148proyecto
DEBUG - 2023-10-09 23:41:09 --> mcwhere_149om_grupos_unihorizonte
DEBUG - 2023-10-09 23:41:09 --> modelcommonSELECT om_grupos_unihorizonte.id_grupo, om_grupos_unihorizonte.borrado, om_grupos_unihorizonte.log_accion, om_grupos_unihorizonte.log_usuario, om_grupos_unihorizonte.log_timestamp, om_proyectos.nombre_proyecto AS proyecto, om_estudiantes.nombres_estudiante AS estudiante FROM om_grupos_unihorizonte, om_proyectos, om_estudiantes WHERE om_grupos_unihorizonte.proyecto = om_proyectos.id_proyecto AND om_grupos_unihorizonte.estudiante = om_estudiantes.id_estudiante AND om_grupos_unihorizonte.proyecto = 105 AND om_grupos_unihorizonte.borrado = 0 ORDER BY om_grupos_unihorizonte.id_grupo ASC
DEBUG - 2023-10-09 23:41:09 --> referenced_215om_proyectos
DEBUG - 2023-10-09 23:41:09 --> mcwhere_214proyecto
INFO - 2023-10-09 23:41:09 --> Final output sent to browser
DEBUG - 2023-10-09 23:41:09 --> Total execution time: 0.0448
INFO - 2023-10-09 23:41:09 --> Config Class Initialized
INFO - 2023-10-09 23:41:09 --> Hooks Class Initialized
DEBUG - 2023-10-09 23:41:09 --> UTF-8 Support Enabled
INFO - 2023-10-09 23:41:09 --> Utf8 Class Initialized
INFO - 2023-10-09 23:41:09 --> URI Class Initialized
INFO - 2023-10-09 23:41:09 --> Router Class Initialized
INFO - 2023-10-09 23:41:09 --> Output Class Initialized
INFO - 2023-10-09 23:41:09 --> Security Class Initialized
DEBUG - 2023-10-09 23:41:09 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-10-09 23:41:09 --> Input Class Initialized
INFO - 2023-10-09 23:41:09 --> Language Class Initialized
INFO - 2023-10-09 23:41:09 --> Loader Class Initialized
INFO - 2023-10-09 23:41:09 --> Helper loaded: url_helper
INFO - 2023-10-09 23:41:09 --> Database Driver Class Initialized
DEBUG - 2023-10-09 23:41:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-10-09 23:41:09 --> Session: Class initialized using 'files' driver.
INFO - 2023-10-09 23:41:09 --> Controller Class Initialized
INFO - 2023-10-09 23:41:09 --> Helper loaded: form_helper
DEBUG - 2023-10-09 23:41:09 --> Session class already loaded. Second attempt ignored.
INFO - 2023-10-09 23:41:09 --> Model Class Initialized
INFO - 2023-10-09 23:41:09 --> File loaded: C:\wamp64\www\proyectosunihorizonte\application\views\uh/proyectos_lineas_programa.php
INFO - 2023-10-09 23:41:09 --> Final output sent to browser
DEBUG - 2023-10-09 23:41:09 --> Total execution time: 0.0174
INFO - 2023-10-09 23:41:09 --> Config Class Initialized
INFO - 2023-10-09 23:41:09 --> Hooks Class Initialized
DEBUG - 2023-10-09 23:41:09 --> UTF-8 Support Enabled
INFO - 2023-10-09 23:41:09 --> Utf8 Class Initialized
INFO - 2023-10-09 23:41:09 --> URI Class Initialized
INFO - 2023-10-09 23:41:09 --> Router Class Initialized
INFO - 2023-10-09 23:41:09 --> Output Class Initialized
INFO - 2023-10-09 23:41:09 --> Security Class Initialized
DEBUG - 2023-10-09 23:41:09 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-10-09 23:41:09 --> Input Class Initialized
INFO - 2023-10-09 23:41:09 --> Language Class Initialized
INFO - 2023-10-09 23:41:09 --> Loader Class Initialized
INFO - 2023-10-09 23:41:09 --> Helper loaded: url_helper
INFO - 2023-10-09 23:41:09 --> Database Driver Class Initialized
DEBUG - 2023-10-09 23:41:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-10-09 23:41:09 --> Session: Class initialized using 'files' driver.
INFO - 2023-10-09 23:41:09 --> Controller Class Initialized
DEBUG - 2023-10-09 23:41:09 --> Session class already loaded. Second attempt ignored.
INFO - 2023-10-09 23:41:09 --> Model Class Initialized
DEBUG - 2023-10-09 23:41:09 --> referenced_146om_proyectos
DEBUG - 2023-10-09 23:41:09 --> mcwhere_148id_proyecto_lista
DEBUG - 2023-10-09 23:41:09 --> mcwhere_149om_proyectos_lineas_programa
DEBUG - 2023-10-09 23:41:09 --> modelcommonSELECT om_proyectos_lineas_programa.id_proyecto_linea_programa_lista, om_proyectos_lineas_programa.borrado, om_proyectos_lineas_programa.log_accion, om_proyectos_lineas_programa.log_usuario, om_proyectos_lineas_programa.log_timestamp, om_proyectos.nombre_proyecto AS id_proyecto_lista, om_programa_academico_lista.nombre_programa_academico AS id_lineas_programas_lista FROM om_proyectos_lineas_programa, om_proyectos, om_programa_academico_lista WHERE om_proyectos_lineas_programa.id_proyecto_lista = om_proyectos.id_proyecto AND om_proyectos_lineas_programa.id_lineas_programas_lista = om_programa_academico_lista.id_programa_academico AND om_proyectos_lineas_programa.id_proyecto_lista = 105 AND om_proyectos_lineas_programa.borrado = 0 ORDER BY om_proyectos_lineas_programa.id_proyecto_linea_programa_lista ASC
DEBUG - 2023-10-09 23:41:09 --> referenced_215om_proyectos
DEBUG - 2023-10-09 23:41:09 --> mcwhere_214id_proyecto_lista
INFO - 2023-10-09 23:41:09 --> Final output sent to browser
DEBUG - 2023-10-09 23:41:09 --> Total execution time: 0.0424
INFO - 2023-10-09 23:41:10 --> Config Class Initialized
INFO - 2023-10-09 23:41:10 --> Hooks Class Initialized
DEBUG - 2023-10-09 23:41:10 --> UTF-8 Support Enabled
INFO - 2023-10-09 23:41:10 --> Utf8 Class Initialized
INFO - 2023-10-09 23:41:10 --> URI Class Initialized
INFO - 2023-10-09 23:41:10 --> Router Class Initialized
INFO - 2023-10-09 23:41:10 --> Output Class Initialized
INFO - 2023-10-09 23:41:10 --> Security Class Initialized
DEBUG - 2023-10-09 23:41:10 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-10-09 23:41:10 --> Input Class Initialized
INFO - 2023-10-09 23:41:10 --> Language Class Initialized
INFO - 2023-10-09 23:41:10 --> Loader Class Initialized
INFO - 2023-10-09 23:41:10 --> Helper loaded: url_helper
INFO - 2023-10-09 23:41:10 --> Database Driver Class Initialized
DEBUG - 2023-10-09 23:41:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-10-09 23:41:10 --> Session: Class initialized using 'files' driver.
INFO - 2023-10-09 23:41:10 --> Controller Class Initialized
INFO - 2023-10-09 23:41:10 --> Helper loaded: form_helper
DEBUG - 2023-10-09 23:41:10 --> Session class already loaded. Second attempt ignored.
INFO - 2023-10-09 23:41:10 --> Model Class Initialized
INFO - 2023-10-09 23:41:10 --> File loaded: C:\wamp64\www\proyectosunihorizonte\application\views\uh/proyectos_facultades.php
INFO - 2023-10-09 23:41:10 --> Final output sent to browser
DEBUG - 2023-10-09 23:41:10 --> Total execution time: 0.0182
INFO - 2023-10-09 23:41:10 --> Config Class Initialized
INFO - 2023-10-09 23:41:10 --> Hooks Class Initialized
DEBUG - 2023-10-09 23:41:10 --> UTF-8 Support Enabled
INFO - 2023-10-09 23:41:10 --> Utf8 Class Initialized
INFO - 2023-10-09 23:41:10 --> URI Class Initialized
INFO - 2023-10-09 23:41:10 --> Router Class Initialized
INFO - 2023-10-09 23:41:10 --> Output Class Initialized
INFO - 2023-10-09 23:41:10 --> Security Class Initialized
DEBUG - 2023-10-09 23:41:10 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-10-09 23:41:10 --> Input Class Initialized
INFO - 2023-10-09 23:41:10 --> Language Class Initialized
INFO - 2023-10-09 23:41:10 --> Loader Class Initialized
INFO - 2023-10-09 23:41:10 --> Helper loaded: url_helper
INFO - 2023-10-09 23:41:10 --> Database Driver Class Initialized
DEBUG - 2023-10-09 23:41:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-10-09 23:41:10 --> Session: Class initialized using 'files' driver.
INFO - 2023-10-09 23:41:10 --> Controller Class Initialized
DEBUG - 2023-10-09 23:41:10 --> Session class already loaded. Second attempt ignored.
INFO - 2023-10-09 23:41:10 --> Model Class Initialized
DEBUG - 2023-10-09 23:41:10 --> referenced_146om_proyectos
DEBUG - 2023-10-09 23:41:10 --> mcwhere_148id_proyecto_lista
DEBUG - 2023-10-09 23:41:10 --> mcwhere_149om_proyectos_facultades
DEBUG - 2023-10-09 23:41:10 --> modelcommonSELECT om_proyectos_facultades.id_proyecto_facultad_lista, om_proyectos_facultades.borrado, om_proyectos_facultades.log_accion, om_proyectos_facultades.log_usuario, om_proyectos_facultades.log_timestamp, om_proyectos.nombre_proyecto AS id_proyecto_lista, om_facultades_lista.name_facultad_lista AS id_facultad_lista FROM om_proyectos_facultades, om_proyectos, om_facultades_lista WHERE om_proyectos_facultades.id_proyecto_lista = om_proyectos.id_proyecto AND om_proyectos_facultades.id_facultad_lista = om_facultades_lista.facultad_lista_id AND om_proyectos_facultades.id_proyecto_lista = 105 AND om_proyectos_facultades.borrado = 0 ORDER BY om_proyectos_facultades.id_proyecto_facultad_lista ASC
DEBUG - 2023-10-09 23:41:10 --> referenced_215om_proyectos
DEBUG - 2023-10-09 23:41:10 --> mcwhere_214id_proyecto_lista
INFO - 2023-10-09 23:41:10 --> Final output sent to browser
DEBUG - 2023-10-09 23:41:10 --> Total execution time: 0.0377
INFO - 2023-10-09 23:41:12 --> Config Class Initialized
INFO - 2023-10-09 23:41:12 --> Hooks Class Initialized
DEBUG - 2023-10-09 23:41:12 --> UTF-8 Support Enabled
INFO - 2023-10-09 23:41:12 --> Utf8 Class Initialized
INFO - 2023-10-09 23:41:12 --> URI Class Initialized
INFO - 2023-10-09 23:41:12 --> Router Class Initialized
INFO - 2023-10-09 23:41:12 --> Output Class Initialized
INFO - 2023-10-09 23:41:12 --> Security Class Initialized
DEBUG - 2023-10-09 23:41:12 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-10-09 23:41:12 --> Input Class Initialized
INFO - 2023-10-09 23:41:12 --> Language Class Initialized
INFO - 2023-10-09 23:41:12 --> Loader Class Initialized
INFO - 2023-10-09 23:41:12 --> Helper loaded: url_helper
INFO - 2023-10-09 23:41:12 --> Database Driver Class Initialized
DEBUG - 2023-10-09 23:41:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-10-09 23:41:12 --> Session: Class initialized using 'files' driver.
INFO - 2023-10-09 23:41:12 --> Controller Class Initialized
INFO - 2023-10-09 23:41:12 --> Helper loaded: form_helper
DEBUG - 2023-10-09 23:41:12 --> Session class already loaded. Second attempt ignored.
INFO - 2023-10-09 23:41:12 --> Model Class Initialized
INFO - 2023-10-09 23:41:12 --> File loaded: C:\wamp64\www\proyectosunihorizonte\application\views\uh/proyectos_programas.php
INFO - 2023-10-09 23:41:12 --> Final output sent to browser
DEBUG - 2023-10-09 23:41:12 --> Total execution time: 0.0200
INFO - 2023-10-09 23:41:12 --> Config Class Initialized
INFO - 2023-10-09 23:41:12 --> Hooks Class Initialized
DEBUG - 2023-10-09 23:41:12 --> UTF-8 Support Enabled
INFO - 2023-10-09 23:41:12 --> Utf8 Class Initialized
INFO - 2023-10-09 23:41:12 --> URI Class Initialized
INFO - 2023-10-09 23:41:12 --> Router Class Initialized
INFO - 2023-10-09 23:41:12 --> Output Class Initialized
INFO - 2023-10-09 23:41:12 --> Security Class Initialized
DEBUG - 2023-10-09 23:41:12 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-10-09 23:41:12 --> Input Class Initialized
INFO - 2023-10-09 23:41:12 --> Language Class Initialized
INFO - 2023-10-09 23:41:12 --> Loader Class Initialized
INFO - 2023-10-09 23:41:12 --> Helper loaded: url_helper
INFO - 2023-10-09 23:41:12 --> Database Driver Class Initialized
DEBUG - 2023-10-09 23:41:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-10-09 23:41:12 --> Session: Class initialized using 'files' driver.
INFO - 2023-10-09 23:41:12 --> Controller Class Initialized
DEBUG - 2023-10-09 23:41:12 --> Session class already loaded. Second attempt ignored.
INFO - 2023-10-09 23:41:12 --> Model Class Initialized
DEBUG - 2023-10-09 23:41:12 --> referenced_146om_proyectos
DEBUG - 2023-10-09 23:41:12 --> mcwhere_148id_proyecto_lista
DEBUG - 2023-10-09 23:41:12 --> mcwhere_149om_proyectos_programas
DEBUG - 2023-10-09 23:41:12 --> modelcommonSELECT om_proyectos_programas.id_proyecto_programa_lista, om_proyectos_programas.borrado, om_proyectos_programas.log_accion, om_proyectos_programas.log_usuario, om_proyectos_programas.log_timestamp, om_proyectos.nombre_proyecto AS id_proyecto_lista, om_programa_academico_lista.nombre_programa_academico AS id_programas_lista FROM om_proyectos_programas, om_proyectos, om_programa_academico_lista WHERE om_proyectos_programas.id_proyecto_lista = om_proyectos.id_proyecto AND om_proyectos_programas.id_programas_lista = om_programa_academico_lista.id_programa_academico AND om_proyectos_programas.id_proyecto_lista = 105 AND om_proyectos_programas.borrado = 0 ORDER BY om_proyectos_programas.id_proyecto_programa_lista ASC
DEBUG - 2023-10-09 23:41:12 --> referenced_215om_proyectos
DEBUG - 2023-10-09 23:41:12 --> mcwhere_214id_proyecto_lista
INFO - 2023-10-09 23:41:12 --> Final output sent to browser
DEBUG - 2023-10-09 23:41:12 --> Total execution time: 0.0357
INFO - 2023-10-09 23:41:21 --> Config Class Initialized
INFO - 2023-10-09 23:41:21 --> Hooks Class Initialized
DEBUG - 2023-10-09 23:41:21 --> UTF-8 Support Enabled
INFO - 2023-10-09 23:41:21 --> Utf8 Class Initialized
INFO - 2023-10-09 23:41:21 --> URI Class Initialized
INFO - 2023-10-09 23:41:21 --> Router Class Initialized
INFO - 2023-10-09 23:41:21 --> Output Class Initialized
INFO - 2023-10-09 23:41:21 --> Security Class Initialized
DEBUG - 2023-10-09 23:41:21 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-10-09 23:41:21 --> Input Class Initialized
INFO - 2023-10-09 23:41:21 --> Language Class Initialized
INFO - 2023-10-09 23:41:21 --> Loader Class Initialized
INFO - 2023-10-09 23:41:21 --> Helper loaded: url_helper
INFO - 2023-10-09 23:41:21 --> Database Driver Class Initialized
DEBUG - 2023-10-09 23:41:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-10-09 23:41:21 --> Session: Class initialized using 'files' driver.
INFO - 2023-10-09 23:41:21 --> Controller Class Initialized
INFO - 2023-10-09 23:41:21 --> Helper loaded: form_helper
DEBUG - 2023-10-09 23:41:21 --> Session class already loaded. Second attempt ignored.
INFO - 2023-10-09 23:41:21 --> Model Class Initialized
INFO - 2023-10-09 23:41:21 --> Language file loaded: language/spanish/general_lang.php
INFO - 2023-10-09 23:41:21 --> Model Class Initialized
INFO - 2023-10-09 23:41:21 --> Final output sent to browser
DEBUG - 2023-10-09 23:41:21 --> Total execution time: 0.0873
INFO - 2023-10-09 23:41:24 --> Config Class Initialized
INFO - 2023-10-09 23:41:24 --> Hooks Class Initialized
DEBUG - 2023-10-09 23:41:24 --> UTF-8 Support Enabled
INFO - 2023-10-09 23:41:24 --> Utf8 Class Initialized
INFO - 2023-10-09 23:41:24 --> URI Class Initialized
INFO - 2023-10-09 23:41:24 --> Router Class Initialized
INFO - 2023-10-09 23:41:24 --> Output Class Initialized
INFO - 2023-10-09 23:41:24 --> Security Class Initialized
DEBUG - 2023-10-09 23:41:24 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-10-09 23:41:24 --> Input Class Initialized
INFO - 2023-10-09 23:41:24 --> Language Class Initialized
INFO - 2023-10-09 23:41:24 --> Loader Class Initialized
INFO - 2023-10-09 23:41:24 --> Helper loaded: url_helper
INFO - 2023-10-09 23:41:24 --> Database Driver Class Initialized
DEBUG - 2023-10-09 23:41:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-10-09 23:41:24 --> Session: Class initialized using 'files' driver.
INFO - 2023-10-09 23:41:24 --> Controller Class Initialized
DEBUG - 2023-10-09 23:41:24 --> Session class already loaded. Second attempt ignored.
INFO - 2023-10-09 23:41:24 --> Model Class Initialized
DEBUG - 2023-10-09 23:41:24 --> referenced_297om_users
DEBUG - 2023-10-09 23:41:24 --> referenced_317om_users
DEBUG - 2023-10-09 23:41:24 --> referenced_323om_users
DEBUG - 2023-10-09 23:41:24 --> referenced_297om_lineas_institucionales_lista
DEBUG - 2023-10-09 23:41:24 --> referenced_317om_lineas_institucionales_lista
DEBUG - 2023-10-09 23:41:24 --> referenced_323om_lineas_institucionales_lista
DEBUG - 2023-10-09 23:41:24 --> referenced_297om_grupos_colciencias_lista
DEBUG - 2023-10-09 23:41:24 --> referenced_317om_grupos_colciencias_lista
DEBUG - 2023-10-09 23:41:24 --> referenced_323om_grupos_colciencias_lista
DEBUG - 2023-10-09 23:41:24 --> referenced_297om_facultades_lista
DEBUG - 2023-10-09 23:41:24 --> referenced_317om_facultades_lista
DEBUG - 2023-10-09 23:41:24 --> referenced_323om_facultades_lista
DEBUG - 2023-10-09 23:41:24 --> referenced_297om_lineas_por_programa
DEBUG - 2023-10-09 23:41:24 --> referenced_317om_lineas_por_programa
DEBUG - 2023-10-09 23:41:24 --> referenced_323om_lineas_por_programa
DEBUG - 2023-10-09 23:41:24 --> referenced_297om_programa_academico_lista
DEBUG - 2023-10-09 23:41:24 --> referenced_317om_programa_academico_lista
DEBUG - 2023-10-09 23:41:24 --> referenced_323om_programa_academico_lista
DEBUG - 2023-10-09 23:41:24 --> referenced_297om_estado_proyecto
DEBUG - 2023-10-09 23:41:24 --> referenced_317om_estado_proyecto
DEBUG - 2023-10-09 23:41:24 --> referenced_323om_estado_proyecto
DEBUG - 2023-10-09 23:41:24 --> mcwhere_343om_proyectos.docente_lider = om_users.user_id AND om_proyectos.linea_investigacion_institucional = om_lineas_institucionales_lista.id_linea_institucional_lista AND om_proyectos.grupo_colciencias = om_grupos_colciencias_lista.id_grupo_colciencias AND om_proyectos.facultad = om_facultades_lista.facultad_lista_id AND om_proyectos.linea_programa = om_lineas_por_programa.id_lineas_por_programa AND om_proyectos.programa_academico = om_programa_academico_lista.id_programa_academico AND om_proyectos.estado = om_estado_proyecto.id_estado
DEBUG - 2023-10-09 23:41:24 --> mcwhere_347om_proyectos
INFO - 2023-10-09 23:41:24 --> Final output sent to browser
DEBUG - 2023-10-09 23:41:24 --> Total execution time: 0.0512
INFO - 2023-10-09 23:41:24 --> Config Class Initialized
INFO - 2023-10-09 23:41:24 --> Hooks Class Initialized
DEBUG - 2023-10-09 23:41:24 --> UTF-8 Support Enabled
INFO - 2023-10-09 23:41:24 --> Utf8 Class Initialized
INFO - 2023-10-09 23:41:24 --> URI Class Initialized
INFO - 2023-10-09 23:41:24 --> Router Class Initialized
INFO - 2023-10-09 23:41:24 --> Output Class Initialized
INFO - 2023-10-09 23:41:24 --> Security Class Initialized
DEBUG - 2023-10-09 23:41:24 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-10-09 23:41:24 --> Input Class Initialized
INFO - 2023-10-09 23:41:24 --> Language Class Initialized
INFO - 2023-10-09 23:41:24 --> Loader Class Initialized
INFO - 2023-10-09 23:41:24 --> Helper loaded: url_helper
INFO - 2023-10-09 23:41:24 --> Database Driver Class Initialized
DEBUG - 2023-10-09 23:41:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-10-09 23:41:24 --> Session: Class initialized using 'files' driver.
INFO - 2023-10-09 23:41:24 --> Controller Class Initialized
DEBUG - 2023-10-09 23:41:24 --> Session class already loaded. Second attempt ignored.
INFO - 2023-10-09 23:41:24 --> Model Class Initialized
DEBUG - 2023-10-09 23:41:24 --> mcwhere_156_whereom_locks.id_usuario = om_users.user_id
DEBUG - 2023-10-09 23:41:24 --> mcwhere_159om_locks
DEBUG - 2023-10-09 23:41:24 --> modelcommonSELECT om_locks.id_lock, om_locks.nombre_usuario, om_locks.tabla, om_locks.id_registro, om_locks.timestamp, om_locks.borrado, om_locks.log_accion, om_locks.log_usuario, om_locks.log_timestamp, om_users.user_name AS id_usuario FROM om_locks, om_users WHERE om_locks.id_usuario = om_users.user_id AND om_locks.borrado = 0 ORDER BY om_locks.id_lock ASC
INFO - 2023-10-09 23:41:24 --> Final output sent to browser
DEBUG - 2023-10-09 23:41:24 --> Total execution time: 0.0284
INFO - 2023-10-09 23:41:24 --> Config Class Initialized
INFO - 2023-10-09 23:41:24 --> Hooks Class Initialized
INFO - 2023-10-09 23:41:24 --> Config Class Initialized
DEBUG - 2023-10-09 23:41:24 --> UTF-8 Support Enabled
INFO - 2023-10-09 23:41:24 --> Hooks Class Initialized
INFO - 2023-10-09 23:41:24 --> Utf8 Class Initialized
INFO - 2023-10-09 23:41:24 --> URI Class Initialized
DEBUG - 2023-10-09 23:41:24 --> UTF-8 Support Enabled
INFO - 2023-10-09 23:41:24 --> Utf8 Class Initialized
INFO - 2023-10-09 23:41:24 --> URI Class Initialized
INFO - 2023-10-09 23:41:24 --> Router Class Initialized
INFO - 2023-10-09 23:41:24 --> Output Class Initialized
INFO - 2023-10-09 23:41:24 --> Router Class Initialized
INFO - 2023-10-09 23:41:24 --> Security Class Initialized
INFO - 2023-10-09 23:41:24 --> Output Class Initialized
DEBUG - 2023-10-09 23:41:24 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-10-09 23:41:24 --> Security Class Initialized
INFO - 2023-10-09 23:41:24 --> Input Class Initialized
DEBUG - 2023-10-09 23:41:24 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-10-09 23:41:24 --> Language Class Initialized
INFO - 2023-10-09 23:41:24 --> Input Class Initialized
INFO - 2023-10-09 23:41:24 --> Language Class Initialized
INFO - 2023-10-09 23:41:24 --> Loader Class Initialized
INFO - 2023-10-09 23:41:24 --> Loader Class Initialized
INFO - 2023-10-09 23:41:24 --> Helper loaded: url_helper
INFO - 2023-10-09 23:41:24 --> Helper loaded: url_helper
INFO - 2023-10-09 23:41:24 --> Database Driver Class Initialized
INFO - 2023-10-09 23:41:24 --> Database Driver Class Initialized
DEBUG - 2023-10-09 23:41:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2023-10-09 23:41:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-10-09 23:41:24 --> Session: Class initialized using 'files' driver.
INFO - 2023-10-09 23:41:24 --> Controller Class Initialized
INFO - 2023-10-09 23:41:24 --> Helper loaded: form_helper
DEBUG - 2023-10-09 23:41:24 --> Session class already loaded. Second attempt ignored.
INFO - 2023-10-09 23:41:24 --> Model Class Initialized
INFO - 2023-10-09 23:41:24 --> File loaded: C:\wamp64\www\proyectosunihorizonte\application\views\uh/forms/editor/proyectos.php
INFO - 2023-10-09 23:41:24 --> Final output sent to browser
DEBUG - 2023-10-09 23:41:24 --> Total execution time: 0.0188
INFO - 2023-10-09 23:41:24 --> Session: Class initialized using 'files' driver.
INFO - 2023-10-09 23:41:24 --> Controller Class Initialized
INFO - 2023-10-09 23:41:24 --> Helper loaded: form_helper
DEBUG - 2023-10-09 23:41:24 --> Session class already loaded. Second attempt ignored.
INFO - 2023-10-09 23:41:24 --> Model Class Initialized
INFO - 2023-10-09 23:41:24 --> Language file loaded: language/spanish/general_lang.php
INFO - 2023-10-09 23:41:24 --> Model Class Initialized
INFO - 2023-10-09 23:41:24 --> Config Class Initialized
INFO - 2023-10-09 23:41:24 --> Hooks Class Initialized
DEBUG - 2023-10-09 23:41:24 --> UTF-8 Support Enabled
INFO - 2023-10-09 23:41:24 --> Utf8 Class Initialized
INFO - 2023-10-09 23:41:24 --> URI Class Initialized
INFO - 2023-10-09 23:41:24 --> Router Class Initialized
INFO - 2023-10-09 23:41:24 --> Output Class Initialized
INFO - 2023-10-09 23:41:24 --> Security Class Initialized
DEBUG - 2023-10-09 23:41:24 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-10-09 23:41:24 --> Input Class Initialized
INFO - 2023-10-09 23:41:24 --> Language Class Initialized
INFO - 2023-10-09 23:41:24 --> Loader Class Initialized
INFO - 2023-10-09 23:41:24 --> Helper loaded: url_helper
INFO - 2023-10-09 23:41:24 --> Database Driver Class Initialized
DEBUG - 2023-10-09 23:41:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-10-09 23:41:24 --> Final output sent to browser
DEBUG - 2023-10-09 23:41:24 --> Total execution time: 0.0696
INFO - 2023-10-09 23:41:24 --> Session: Class initialized using 'files' driver.
INFO - 2023-10-09 23:41:24 --> Controller Class Initialized
DEBUG - 2023-10-09 23:41:24 --> Session class already loaded. Second attempt ignored.
INFO - 2023-10-09 23:41:24 --> Model Class Initialized
DEBUG - 2023-10-09 23:41:24 --> referenced_297om_users
DEBUG - 2023-10-09 23:41:24 --> referenced_317om_users
DEBUG - 2023-10-09 23:41:24 --> referenced_323om_users
DEBUG - 2023-10-09 23:41:24 --> referenced_297om_lineas_institucionales_lista
DEBUG - 2023-10-09 23:41:24 --> referenced_317om_lineas_institucionales_lista
DEBUG - 2023-10-09 23:41:24 --> referenced_323om_lineas_institucionales_lista
DEBUG - 2023-10-09 23:41:24 --> referenced_297om_grupos_colciencias_lista
DEBUG - 2023-10-09 23:41:24 --> referenced_317om_grupos_colciencias_lista
DEBUG - 2023-10-09 23:41:24 --> referenced_323om_grupos_colciencias_lista
DEBUG - 2023-10-09 23:41:24 --> referenced_297om_facultades_lista
DEBUG - 2023-10-09 23:41:24 --> referenced_317om_facultades_lista
DEBUG - 2023-10-09 23:41:24 --> referenced_323om_facultades_lista
DEBUG - 2023-10-09 23:41:24 --> referenced_297om_lineas_por_programa
DEBUG - 2023-10-09 23:41:24 --> referenced_317om_lineas_por_programa
DEBUG - 2023-10-09 23:41:24 --> referenced_323om_lineas_por_programa
DEBUG - 2023-10-09 23:41:24 --> referenced_297om_programa_academico_lista
DEBUG - 2023-10-09 23:41:24 --> referenced_317om_programa_academico_lista
DEBUG - 2023-10-09 23:41:24 --> referenced_323om_programa_academico_lista
DEBUG - 2023-10-09 23:41:24 --> referenced_297om_estado_proyecto
DEBUG - 2023-10-09 23:41:24 --> referenced_317om_estado_proyecto
DEBUG - 2023-10-09 23:41:24 --> referenced_323om_estado_proyecto
DEBUG - 2023-10-09 23:41:24 --> mcwhere_343om_proyectos.docente_lider = om_users.user_id AND om_proyectos.linea_investigacion_institucional = om_lineas_institucionales_lista.id_linea_institucional_lista AND om_proyectos.grupo_colciencias = om_grupos_colciencias_lista.id_grupo_colciencias AND om_proyectos.facultad = om_facultades_lista.facultad_lista_id AND om_proyectos.linea_programa = om_lineas_por_programa.id_lineas_por_programa AND om_proyectos.programa_academico = om_programa_academico_lista.id_programa_academico AND om_proyectos.estado = om_estado_proyecto.id_estado
DEBUG - 2023-10-09 23:41:24 --> mcwhere_347om_proyectos
INFO - 2023-10-09 23:41:24 --> Final output sent to browser
DEBUG - 2023-10-09 23:41:24 --> Total execution time: 0.0611
INFO - 2023-10-09 23:41:24 --> Config Class Initialized
INFO - 2023-10-09 23:41:24 --> Hooks Class Initialized
DEBUG - 2023-10-09 23:41:24 --> UTF-8 Support Enabled
INFO - 2023-10-09 23:41:24 --> Utf8 Class Initialized
INFO - 2023-10-09 23:41:24 --> URI Class Initialized
INFO - 2023-10-09 23:41:24 --> Router Class Initialized
INFO - 2023-10-09 23:41:24 --> Output Class Initialized
INFO - 2023-10-09 23:41:24 --> Security Class Initialized
DEBUG - 2023-10-09 23:41:24 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-10-09 23:41:24 --> Input Class Initialized
INFO - 2023-10-09 23:41:24 --> Language Class Initialized
INFO - 2023-10-09 23:41:24 --> Loader Class Initialized
INFO - 2023-10-09 23:41:24 --> Helper loaded: url_helper
INFO - 2023-10-09 23:41:24 --> Database Driver Class Initialized
DEBUG - 2023-10-09 23:41:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-10-09 23:41:24 --> Session: Class initialized using 'files' driver.
INFO - 2023-10-09 23:41:24 --> Controller Class Initialized
INFO - 2023-10-09 23:41:24 --> Helper loaded: form_helper
DEBUG - 2023-10-09 23:41:24 --> Session class already loaded. Second attempt ignored.
INFO - 2023-10-09 23:41:24 --> Model Class Initialized
INFO - 2023-10-09 23:41:24 --> File loaded: C:\wamp64\www\proyectosunihorizonte\application\views\uh/avances.php
INFO - 2023-10-09 23:41:24 --> Final output sent to browser
DEBUG - 2023-10-09 23:41:24 --> Total execution time: 0.0196
INFO - 2023-10-09 23:41:24 --> Config Class Initialized
INFO - 2023-10-09 23:41:24 --> Hooks Class Initialized
DEBUG - 2023-10-09 23:41:24 --> UTF-8 Support Enabled
INFO - 2023-10-09 23:41:24 --> Utf8 Class Initialized
INFO - 2023-10-09 23:41:24 --> URI Class Initialized
INFO - 2023-10-09 23:41:24 --> Router Class Initialized
INFO - 2023-10-09 23:41:24 --> Output Class Initialized
INFO - 2023-10-09 23:41:24 --> Security Class Initialized
DEBUG - 2023-10-09 23:41:24 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-10-09 23:41:24 --> Input Class Initialized
INFO - 2023-10-09 23:41:24 --> Language Class Initialized
INFO - 2023-10-09 23:41:24 --> Loader Class Initialized
INFO - 2023-10-09 23:41:24 --> Helper loaded: url_helper
INFO - 2023-10-09 23:41:24 --> Database Driver Class Initialized
DEBUG - 2023-10-09 23:41:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-10-09 23:41:24 --> Session: Class initialized using 'files' driver.
INFO - 2023-10-09 23:41:24 --> Controller Class Initialized
DEBUG - 2023-10-09 23:41:24 --> Session class already loaded. Second attempt ignored.
INFO - 2023-10-09 23:41:24 --> Model Class Initialized
DEBUG - 2023-10-09 23:41:24 --> referenced_146om_proyectos
DEBUG - 2023-10-09 23:41:24 --> mcwhere_148id_proyecto
DEBUG - 2023-10-09 23:41:24 --> mcwhere_149om_avances
DEBUG - 2023-10-09 23:41:24 --> modelcommonSELECT om_avances.id_avance, om_avances.nombre_avance, om_avances.presupuesto_ejecutado, om_avances.fecha_entrega, om_avances.archivo_final_proyecto, om_avances.borrado, om_avances.log_accion, om_avances.log_usuario, om_avances.log_timestamp, om_proyectos.nombre_proyecto AS id_proyecto, om_tipos_documentos.nombre_tipo_documento AS tipo_documento FROM om_avances, om_proyectos, om_tipos_documentos WHERE om_avances.id_proyecto = om_proyectos.id_proyecto AND om_avances.tipo_documento = om_tipos_documentos.id_tipo_documento AND om_avances.id_proyecto = 100 AND om_avances.borrado = 0 ORDER BY om_avances.id_avance ASC
DEBUG - 2023-10-09 23:41:24 --> referenced_215om_proyectos
DEBUG - 2023-10-09 23:41:24 --> mcwhere_214id_proyecto
INFO - 2023-10-09 23:41:24 --> Final output sent to browser
DEBUG - 2023-10-09 23:41:24 --> Total execution time: 0.0326
INFO - 2023-10-09 23:41:25 --> Config Class Initialized
INFO - 2023-10-09 23:41:25 --> Hooks Class Initialized
DEBUG - 2023-10-09 23:41:25 --> UTF-8 Support Enabled
INFO - 2023-10-09 23:41:25 --> Utf8 Class Initialized
INFO - 2023-10-09 23:41:25 --> URI Class Initialized
INFO - 2023-10-09 23:41:25 --> Router Class Initialized
INFO - 2023-10-09 23:41:25 --> Output Class Initialized
INFO - 2023-10-09 23:41:25 --> Security Class Initialized
DEBUG - 2023-10-09 23:41:25 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-10-09 23:41:25 --> Input Class Initialized
INFO - 2023-10-09 23:41:25 --> Language Class Initialized
INFO - 2023-10-09 23:41:25 --> Loader Class Initialized
INFO - 2023-10-09 23:41:25 --> Helper loaded: url_helper
INFO - 2023-10-09 23:41:25 --> Database Driver Class Initialized
DEBUG - 2023-10-09 23:41:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-10-09 23:41:25 --> Session: Class initialized using 'files' driver.
INFO - 2023-10-09 23:41:25 --> Controller Class Initialized
INFO - 2023-10-09 23:41:25 --> Helper loaded: form_helper
DEBUG - 2023-10-09 23:41:25 --> Session class already loaded. Second attempt ignored.
INFO - 2023-10-09 23:41:25 --> Model Class Initialized
INFO - 2023-10-09 23:41:25 --> File loaded: C:\wamp64\www\proyectosunihorizonte\application\views\uh/productos.php
INFO - 2023-10-09 23:41:25 --> Final output sent to browser
DEBUG - 2023-10-09 23:41:25 --> Total execution time: 0.0202
INFO - 2023-10-09 23:41:26 --> Config Class Initialized
INFO - 2023-10-09 23:41:26 --> Hooks Class Initialized
DEBUG - 2023-10-09 23:41:26 --> UTF-8 Support Enabled
INFO - 2023-10-09 23:41:26 --> Utf8 Class Initialized
INFO - 2023-10-09 23:41:26 --> URI Class Initialized
INFO - 2023-10-09 23:41:26 --> Router Class Initialized
INFO - 2023-10-09 23:41:26 --> Output Class Initialized
INFO - 2023-10-09 23:41:26 --> Security Class Initialized
DEBUG - 2023-10-09 23:41:26 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-10-09 23:41:26 --> Input Class Initialized
INFO - 2023-10-09 23:41:26 --> Language Class Initialized
INFO - 2023-10-09 23:41:26 --> Loader Class Initialized
INFO - 2023-10-09 23:41:26 --> Helper loaded: url_helper
INFO - 2023-10-09 23:41:26 --> Database Driver Class Initialized
DEBUG - 2023-10-09 23:41:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-10-09 23:41:26 --> Session: Class initialized using 'files' driver.
INFO - 2023-10-09 23:41:26 --> Controller Class Initialized
DEBUG - 2023-10-09 23:41:26 --> Session class already loaded. Second attempt ignored.
INFO - 2023-10-09 23:41:26 --> Model Class Initialized
DEBUG - 2023-10-09 23:41:26 --> referenced_146om_proyectos
DEBUG - 2023-10-09 23:41:26 --> mcwhere_148proyecto
DEBUG - 2023-10-09 23:41:26 --> mcwhere_149om_productos
DEBUG - 2023-10-09 23:41:26 --> modelcommonSELECT om_productos.id_producto, om_productos.fecha_entrega, om_productos.archivo_producto, om_productos.borrado, om_productos.log_accion, om_productos.log_usuario, om_productos.log_timestamp, om_proyectos.nombre_proyecto AS proyecto, om_productos_lista_colciencias.nombre_tipo_producto AS producto_colciencias FROM om_productos, om_proyectos, om_productos_lista_colciencias WHERE om_productos.proyecto = om_proyectos.id_proyecto AND om_productos.producto_colciencias = om_productos_lista_colciencias.id_producto_lista_colciencias AND om_productos.proyecto = 100 AND om_productos.borrado = 0 ORDER BY om_productos.id_producto ASC
DEBUG - 2023-10-09 23:41:26 --> referenced_215om_proyectos
DEBUG - 2023-10-09 23:41:26 --> mcwhere_214proyecto
INFO - 2023-10-09 23:41:26 --> Final output sent to browser
DEBUG - 2023-10-09 23:41:26 --> Total execution time: 0.0376
INFO - 2023-10-09 23:41:26 --> Config Class Initialized
INFO - 2023-10-09 23:41:26 --> Hooks Class Initialized
DEBUG - 2023-10-09 23:41:26 --> UTF-8 Support Enabled
INFO - 2023-10-09 23:41:26 --> Utf8 Class Initialized
INFO - 2023-10-09 23:41:26 --> URI Class Initialized
INFO - 2023-10-09 23:41:26 --> Router Class Initialized
INFO - 2023-10-09 23:41:26 --> Output Class Initialized
INFO - 2023-10-09 23:41:26 --> Security Class Initialized
DEBUG - 2023-10-09 23:41:26 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-10-09 23:41:26 --> Input Class Initialized
INFO - 2023-10-09 23:41:26 --> Language Class Initialized
INFO - 2023-10-09 23:41:26 --> Loader Class Initialized
INFO - 2023-10-09 23:41:26 --> Helper loaded: url_helper
INFO - 2023-10-09 23:41:26 --> Database Driver Class Initialized
DEBUG - 2023-10-09 23:41:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-10-09 23:41:26 --> Session: Class initialized using 'files' driver.
INFO - 2023-10-09 23:41:26 --> Controller Class Initialized
INFO - 2023-10-09 23:41:26 --> Helper loaded: form_helper
DEBUG - 2023-10-09 23:41:26 --> Session class already loaded. Second attempt ignored.
INFO - 2023-10-09 23:41:26 --> Model Class Initialized
INFO - 2023-10-09 23:41:26 --> File loaded: C:\wamp64\www\proyectosunihorizonte\application\views\uh/docentes_grupos_unihorizonte.php
INFO - 2023-10-09 23:41:26 --> Final output sent to browser
DEBUG - 2023-10-09 23:41:26 --> Total execution time: 0.0179
INFO - 2023-10-09 23:41:26 --> Config Class Initialized
INFO - 2023-10-09 23:41:26 --> Hooks Class Initialized
DEBUG - 2023-10-09 23:41:26 --> UTF-8 Support Enabled
INFO - 2023-10-09 23:41:26 --> Utf8 Class Initialized
INFO - 2023-10-09 23:41:26 --> URI Class Initialized
INFO - 2023-10-09 23:41:26 --> Router Class Initialized
INFO - 2023-10-09 23:41:26 --> Output Class Initialized
INFO - 2023-10-09 23:41:26 --> Security Class Initialized
DEBUG - 2023-10-09 23:41:26 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-10-09 23:41:26 --> Input Class Initialized
INFO - 2023-10-09 23:41:26 --> Language Class Initialized
INFO - 2023-10-09 23:41:26 --> Loader Class Initialized
INFO - 2023-10-09 23:41:26 --> Helper loaded: url_helper
INFO - 2023-10-09 23:41:26 --> Database Driver Class Initialized
DEBUG - 2023-10-09 23:41:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-10-09 23:41:26 --> Session: Class initialized using 'files' driver.
INFO - 2023-10-09 23:41:26 --> Controller Class Initialized
DEBUG - 2023-10-09 23:41:26 --> Session class already loaded. Second attempt ignored.
INFO - 2023-10-09 23:41:26 --> Model Class Initialized
DEBUG - 2023-10-09 23:41:26 --> referenced_146om_proyectos
DEBUG - 2023-10-09 23:41:26 --> mcwhere_148proyecto
DEBUG - 2023-10-09 23:41:26 --> mcwhere_149om_docentes_grupos_unihorizonte
DEBUG - 2023-10-09 23:41:26 --> modelcommonSELECT om_docentes_grupos_unihorizonte.id_grupo, om_docentes_grupos_unihorizonte.borrado, om_docentes_grupos_unihorizonte.log_accion, om_docentes_grupos_unihorizonte.log_usuario, om_docentes_grupos_unihorizonte.log_timestamp, om_proyectos.nombre_proyecto AS proyecto, om_users.user_name AS docente FROM om_docentes_grupos_unihorizonte, om_proyectos, om_users WHERE om_docentes_grupos_unihorizonte.proyecto = om_proyectos.id_proyecto AND om_docentes_grupos_unihorizonte.docente = om_users.user_id AND om_docentes_grupos_unihorizonte.proyecto = 100 AND om_docentes_grupos_unihorizonte.borrado = 0 ORDER BY om_docentes_grupos_unihorizonte.id_grupo ASC
DEBUG - 2023-10-09 23:41:26 --> referenced_215om_proyectos
DEBUG - 2023-10-09 23:41:26 --> mcwhere_214proyecto
INFO - 2023-10-09 23:41:26 --> Final output sent to browser
DEBUG - 2023-10-09 23:41:26 --> Total execution time: 0.0376
INFO - 2023-10-09 23:41:27 --> Config Class Initialized
INFO - 2023-10-09 23:41:27 --> Hooks Class Initialized
DEBUG - 2023-10-09 23:41:27 --> UTF-8 Support Enabled
INFO - 2023-10-09 23:41:27 --> Utf8 Class Initialized
INFO - 2023-10-09 23:41:27 --> URI Class Initialized
INFO - 2023-10-09 23:41:27 --> Router Class Initialized
INFO - 2023-10-09 23:41:27 --> Output Class Initialized
INFO - 2023-10-09 23:41:27 --> Security Class Initialized
DEBUG - 2023-10-09 23:41:27 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-10-09 23:41:27 --> Input Class Initialized
INFO - 2023-10-09 23:41:27 --> Language Class Initialized
INFO - 2023-10-09 23:41:27 --> Loader Class Initialized
INFO - 2023-10-09 23:41:27 --> Helper loaded: url_helper
INFO - 2023-10-09 23:41:27 --> Database Driver Class Initialized
DEBUG - 2023-10-09 23:41:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-10-09 23:41:27 --> Session: Class initialized using 'files' driver.
INFO - 2023-10-09 23:41:27 --> Controller Class Initialized
INFO - 2023-10-09 23:41:27 --> Helper loaded: form_helper
DEBUG - 2023-10-09 23:41:27 --> Session class already loaded. Second attempt ignored.
INFO - 2023-10-09 23:41:27 --> Model Class Initialized
INFO - 2023-10-09 23:41:27 --> File loaded: C:\wamp64\www\proyectosunihorizonte\application\views\uh/proyectos_minciencias.php
INFO - 2023-10-09 23:41:27 --> Final output sent to browser
DEBUG - 2023-10-09 23:41:27 --> Total execution time: 0.0197
INFO - 2023-10-09 23:41:27 --> Config Class Initialized
INFO - 2023-10-09 23:41:27 --> Hooks Class Initialized
DEBUG - 2023-10-09 23:41:27 --> UTF-8 Support Enabled
INFO - 2023-10-09 23:41:27 --> Utf8 Class Initialized
INFO - 2023-10-09 23:41:27 --> URI Class Initialized
INFO - 2023-10-09 23:41:27 --> Router Class Initialized
INFO - 2023-10-09 23:41:27 --> Output Class Initialized
INFO - 2023-10-09 23:41:27 --> Security Class Initialized
DEBUG - 2023-10-09 23:41:27 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-10-09 23:41:27 --> Input Class Initialized
INFO - 2023-10-09 23:41:27 --> Language Class Initialized
INFO - 2023-10-09 23:41:27 --> Loader Class Initialized
INFO - 2023-10-09 23:41:27 --> Helper loaded: url_helper
INFO - 2023-10-09 23:41:27 --> Database Driver Class Initialized
DEBUG - 2023-10-09 23:41:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-10-09 23:41:27 --> Session: Class initialized using 'files' driver.
INFO - 2023-10-09 23:41:27 --> Controller Class Initialized
DEBUG - 2023-10-09 23:41:27 --> Session class already loaded. Second attempt ignored.
INFO - 2023-10-09 23:41:27 --> Model Class Initialized
DEBUG - 2023-10-09 23:41:27 --> referenced_146om_proyectos
DEBUG - 2023-10-09 23:41:27 --> mcwhere_148id_proyecto_lista
DEBUG - 2023-10-09 23:41:27 --> mcwhere_149om_proyectos_minciencias
DEBUG - 2023-10-09 23:41:27 --> modelcommonSELECT om_proyectos_minciencias.id_proyecto_minciencias_lista, om_proyectos_minciencias.borrado, om_proyectos_minciencias.log_accion, om_proyectos_minciencias.log_usuario, om_proyectos_minciencias.log_timestamp, om_proyectos.nombre_proyecto AS id_proyecto_lista, om_grupos_colciencias_lista.nombre_grupo AS id_minciencias_lista FROM om_proyectos_minciencias, om_proyectos, om_grupos_colciencias_lista WHERE om_proyectos_minciencias.id_proyecto_lista = om_proyectos.id_proyecto AND om_proyectos_minciencias.id_minciencias_lista = om_grupos_colciencias_lista.id_grupo_colciencias AND om_proyectos_minciencias.id_proyecto_lista = 100 AND om_proyectos_minciencias.borrado = 0 ORDER BY om_proyectos_minciencias.id_proyecto_minciencias_lista ASC
DEBUG - 2023-10-09 23:41:27 --> referenced_215om_proyectos
DEBUG - 2023-10-09 23:41:27 --> mcwhere_214id_proyecto_lista
INFO - 2023-10-09 23:41:27 --> Final output sent to browser
DEBUG - 2023-10-09 23:41:27 --> Total execution time: 0.0361
INFO - 2023-10-09 23:41:27 --> Config Class Initialized
INFO - 2023-10-09 23:41:27 --> Hooks Class Initialized
DEBUG - 2023-10-09 23:41:27 --> UTF-8 Support Enabled
INFO - 2023-10-09 23:41:27 --> Utf8 Class Initialized
INFO - 2023-10-09 23:41:27 --> URI Class Initialized
INFO - 2023-10-09 23:41:27 --> Router Class Initialized
INFO - 2023-10-09 23:41:27 --> Output Class Initialized
INFO - 2023-10-09 23:41:27 --> Security Class Initialized
DEBUG - 2023-10-09 23:41:27 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-10-09 23:41:27 --> Input Class Initialized
INFO - 2023-10-09 23:41:27 --> Language Class Initialized
INFO - 2023-10-09 23:41:27 --> Loader Class Initialized
INFO - 2023-10-09 23:41:27 --> Helper loaded: url_helper
INFO - 2023-10-09 23:41:27 --> Database Driver Class Initialized
DEBUG - 2023-10-09 23:41:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-10-09 23:41:27 --> Session: Class initialized using 'files' driver.
INFO - 2023-10-09 23:41:27 --> Controller Class Initialized
INFO - 2023-10-09 23:41:27 --> Helper loaded: form_helper
DEBUG - 2023-10-09 23:41:27 --> Session class already loaded. Second attempt ignored.
INFO - 2023-10-09 23:41:27 --> Model Class Initialized
INFO - 2023-10-09 23:41:27 --> File loaded: C:\wamp64\www\proyectosunihorizonte\application\views\uh/grupos_unihorizonte.php
INFO - 2023-10-09 23:41:27 --> Final output sent to browser
DEBUG - 2023-10-09 23:41:27 --> Total execution time: 0.0233
INFO - 2023-10-09 23:41:28 --> Config Class Initialized
INFO - 2023-10-09 23:41:28 --> Hooks Class Initialized
DEBUG - 2023-10-09 23:41:28 --> UTF-8 Support Enabled
INFO - 2023-10-09 23:41:28 --> Utf8 Class Initialized
INFO - 2023-10-09 23:41:28 --> URI Class Initialized
INFO - 2023-10-09 23:41:28 --> Router Class Initialized
INFO - 2023-10-09 23:41:28 --> Output Class Initialized
INFO - 2023-10-09 23:41:28 --> Security Class Initialized
DEBUG - 2023-10-09 23:41:28 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-10-09 23:41:28 --> Input Class Initialized
INFO - 2023-10-09 23:41:28 --> Language Class Initialized
INFO - 2023-10-09 23:41:28 --> Loader Class Initialized
INFO - 2023-10-09 23:41:28 --> Helper loaded: url_helper
INFO - 2023-10-09 23:41:28 --> Database Driver Class Initialized
DEBUG - 2023-10-09 23:41:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-10-09 23:41:28 --> Session: Class initialized using 'files' driver.
INFO - 2023-10-09 23:41:28 --> Controller Class Initialized
DEBUG - 2023-10-09 23:41:28 --> Session class already loaded. Second attempt ignored.
INFO - 2023-10-09 23:41:28 --> Model Class Initialized
DEBUG - 2023-10-09 23:41:28 --> referenced_146om_proyectos
DEBUG - 2023-10-09 23:41:28 --> mcwhere_148proyecto
DEBUG - 2023-10-09 23:41:28 --> mcwhere_149om_grupos_unihorizonte
DEBUG - 2023-10-09 23:41:28 --> modelcommonSELECT om_grupos_unihorizonte.id_grupo, om_grupos_unihorizonte.borrado, om_grupos_unihorizonte.log_accion, om_grupos_unihorizonte.log_usuario, om_grupos_unihorizonte.log_timestamp, om_proyectos.nombre_proyecto AS proyecto, om_estudiantes.nombres_estudiante AS estudiante FROM om_grupos_unihorizonte, om_proyectos, om_estudiantes WHERE om_grupos_unihorizonte.proyecto = om_proyectos.id_proyecto AND om_grupos_unihorizonte.estudiante = om_estudiantes.id_estudiante AND om_grupos_unihorizonte.proyecto = 100 AND om_grupos_unihorizonte.borrado = 0 ORDER BY om_grupos_unihorizonte.id_grupo ASC
DEBUG - 2023-10-09 23:41:28 --> referenced_215om_proyectos
DEBUG - 2023-10-09 23:41:28 --> mcwhere_214proyecto
INFO - 2023-10-09 23:41:28 --> Final output sent to browser
DEBUG - 2023-10-09 23:41:28 --> Total execution time: 0.0387
INFO - 2023-10-09 23:41:28 --> Config Class Initialized
INFO - 2023-10-09 23:41:28 --> Hooks Class Initialized
DEBUG - 2023-10-09 23:41:28 --> UTF-8 Support Enabled
INFO - 2023-10-09 23:41:28 --> Utf8 Class Initialized
INFO - 2023-10-09 23:41:28 --> URI Class Initialized
INFO - 2023-10-09 23:41:28 --> Router Class Initialized
INFO - 2023-10-09 23:41:28 --> Output Class Initialized
INFO - 2023-10-09 23:41:28 --> Security Class Initialized
DEBUG - 2023-10-09 23:41:28 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-10-09 23:41:28 --> Input Class Initialized
INFO - 2023-10-09 23:41:28 --> Language Class Initialized
INFO - 2023-10-09 23:41:28 --> Loader Class Initialized
INFO - 2023-10-09 23:41:28 --> Helper loaded: url_helper
INFO - 2023-10-09 23:41:28 --> Database Driver Class Initialized
DEBUG - 2023-10-09 23:41:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-10-09 23:41:28 --> Session: Class initialized using 'files' driver.
INFO - 2023-10-09 23:41:28 --> Controller Class Initialized
INFO - 2023-10-09 23:41:28 --> Helper loaded: form_helper
DEBUG - 2023-10-09 23:41:28 --> Session class already loaded. Second attempt ignored.
INFO - 2023-10-09 23:41:28 --> Model Class Initialized
INFO - 2023-10-09 23:41:28 --> File loaded: C:\wamp64\www\proyectosunihorizonte\application\views\uh/proyectos_lineas_programa.php
INFO - 2023-10-09 23:41:28 --> Final output sent to browser
DEBUG - 2023-10-09 23:41:28 --> Total execution time: 0.0191
INFO - 2023-10-09 23:41:28 --> Config Class Initialized
INFO - 2023-10-09 23:41:28 --> Hooks Class Initialized
DEBUG - 2023-10-09 23:41:28 --> UTF-8 Support Enabled
INFO - 2023-10-09 23:41:28 --> Utf8 Class Initialized
INFO - 2023-10-09 23:41:28 --> URI Class Initialized
INFO - 2023-10-09 23:41:28 --> Router Class Initialized
INFO - 2023-10-09 23:41:28 --> Output Class Initialized
INFO - 2023-10-09 23:41:28 --> Security Class Initialized
DEBUG - 2023-10-09 23:41:28 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-10-09 23:41:28 --> Input Class Initialized
INFO - 2023-10-09 23:41:28 --> Language Class Initialized
INFO - 2023-10-09 23:41:28 --> Loader Class Initialized
INFO - 2023-10-09 23:41:28 --> Helper loaded: url_helper
INFO - 2023-10-09 23:41:28 --> Database Driver Class Initialized
DEBUG - 2023-10-09 23:41:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-10-09 23:41:28 --> Session: Class initialized using 'files' driver.
INFO - 2023-10-09 23:41:28 --> Controller Class Initialized
DEBUG - 2023-10-09 23:41:28 --> Session class already loaded. Second attempt ignored.
INFO - 2023-10-09 23:41:28 --> Model Class Initialized
DEBUG - 2023-10-09 23:41:28 --> referenced_146om_proyectos
DEBUG - 2023-10-09 23:41:28 --> mcwhere_148id_proyecto_lista
DEBUG - 2023-10-09 23:41:28 --> mcwhere_149om_proyectos_lineas_programa
DEBUG - 2023-10-09 23:41:28 --> modelcommonSELECT om_proyectos_lineas_programa.id_proyecto_linea_programa_lista, om_proyectos_lineas_programa.borrado, om_proyectos_lineas_programa.log_accion, om_proyectos_lineas_programa.log_usuario, om_proyectos_lineas_programa.log_timestamp, om_proyectos.nombre_proyecto AS id_proyecto_lista, om_programa_academico_lista.nombre_programa_academico AS id_lineas_programas_lista FROM om_proyectos_lineas_programa, om_proyectos, om_programa_academico_lista WHERE om_proyectos_lineas_programa.id_proyecto_lista = om_proyectos.id_proyecto AND om_proyectos_lineas_programa.id_lineas_programas_lista = om_programa_academico_lista.id_programa_academico AND om_proyectos_lineas_programa.id_proyecto_lista = 100 AND om_proyectos_lineas_programa.borrado = 0 ORDER BY om_proyectos_lineas_programa.id_proyecto_linea_programa_lista ASC
DEBUG - 2023-10-09 23:41:28 --> referenced_215om_proyectos
DEBUG - 2023-10-09 23:41:28 --> mcwhere_214id_proyecto_lista
INFO - 2023-10-09 23:41:28 --> Final output sent to browser
DEBUG - 2023-10-09 23:41:28 --> Total execution time: 0.0387
INFO - 2023-10-09 23:41:29 --> Config Class Initialized
INFO - 2023-10-09 23:41:29 --> Hooks Class Initialized
DEBUG - 2023-10-09 23:41:29 --> UTF-8 Support Enabled
INFO - 2023-10-09 23:41:29 --> Utf8 Class Initialized
INFO - 2023-10-09 23:41:29 --> URI Class Initialized
INFO - 2023-10-09 23:41:29 --> Router Class Initialized
INFO - 2023-10-09 23:41:29 --> Output Class Initialized
INFO - 2023-10-09 23:41:29 --> Security Class Initialized
DEBUG - 2023-10-09 23:41:29 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-10-09 23:41:29 --> Input Class Initialized
INFO - 2023-10-09 23:41:29 --> Language Class Initialized
INFO - 2023-10-09 23:41:29 --> Loader Class Initialized
INFO - 2023-10-09 23:41:29 --> Helper loaded: url_helper
INFO - 2023-10-09 23:41:29 --> Database Driver Class Initialized
DEBUG - 2023-10-09 23:41:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-10-09 23:41:29 --> Session: Class initialized using 'files' driver.
INFO - 2023-10-09 23:41:29 --> Controller Class Initialized
INFO - 2023-10-09 23:41:29 --> Helper loaded: form_helper
DEBUG - 2023-10-09 23:41:29 --> Session class already loaded. Second attempt ignored.
INFO - 2023-10-09 23:41:29 --> Model Class Initialized
INFO - 2023-10-09 23:41:29 --> File loaded: C:\wamp64\www\proyectosunihorizonte\application\views\uh/proyectos_facultades.php
INFO - 2023-10-09 23:41:29 --> Final output sent to browser
DEBUG - 2023-10-09 23:41:29 --> Total execution time: 0.0175
INFO - 2023-10-09 23:41:29 --> Config Class Initialized
INFO - 2023-10-09 23:41:29 --> Hooks Class Initialized
DEBUG - 2023-10-09 23:41:29 --> UTF-8 Support Enabled
INFO - 2023-10-09 23:41:29 --> Utf8 Class Initialized
INFO - 2023-10-09 23:41:29 --> URI Class Initialized
INFO - 2023-10-09 23:41:29 --> Router Class Initialized
INFO - 2023-10-09 23:41:29 --> Output Class Initialized
INFO - 2023-10-09 23:41:29 --> Security Class Initialized
DEBUG - 2023-10-09 23:41:29 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-10-09 23:41:29 --> Input Class Initialized
INFO - 2023-10-09 23:41:29 --> Language Class Initialized
INFO - 2023-10-09 23:41:29 --> Loader Class Initialized
INFO - 2023-10-09 23:41:29 --> Helper loaded: url_helper
INFO - 2023-10-09 23:41:29 --> Database Driver Class Initialized
DEBUG - 2023-10-09 23:41:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-10-09 23:41:29 --> Session: Class initialized using 'files' driver.
INFO - 2023-10-09 23:41:29 --> Controller Class Initialized
DEBUG - 2023-10-09 23:41:29 --> Session class already loaded. Second attempt ignored.
INFO - 2023-10-09 23:41:29 --> Model Class Initialized
DEBUG - 2023-10-09 23:41:29 --> referenced_146om_proyectos
DEBUG - 2023-10-09 23:41:29 --> mcwhere_148id_proyecto_lista
DEBUG - 2023-10-09 23:41:29 --> mcwhere_149om_proyectos_facultades
DEBUG - 2023-10-09 23:41:29 --> modelcommonSELECT om_proyectos_facultades.id_proyecto_facultad_lista, om_proyectos_facultades.borrado, om_proyectos_facultades.log_accion, om_proyectos_facultades.log_usuario, om_proyectos_facultades.log_timestamp, om_proyectos.nombre_proyecto AS id_proyecto_lista, om_facultades_lista.name_facultad_lista AS id_facultad_lista FROM om_proyectos_facultades, om_proyectos, om_facultades_lista WHERE om_proyectos_facultades.id_proyecto_lista = om_proyectos.id_proyecto AND om_proyectos_facultades.id_facultad_lista = om_facultades_lista.facultad_lista_id AND om_proyectos_facultades.id_proyecto_lista = 100 AND om_proyectos_facultades.borrado = 0 ORDER BY om_proyectos_facultades.id_proyecto_facultad_lista ASC
DEBUG - 2023-10-09 23:41:29 --> referenced_215om_proyectos
DEBUG - 2023-10-09 23:41:29 --> mcwhere_214id_proyecto_lista
INFO - 2023-10-09 23:41:29 --> Final output sent to browser
DEBUG - 2023-10-09 23:41:29 --> Total execution time: 0.0468
INFO - 2023-10-09 23:41:31 --> Config Class Initialized
INFO - 2023-10-09 23:41:31 --> Hooks Class Initialized
DEBUG - 2023-10-09 23:41:31 --> UTF-8 Support Enabled
INFO - 2023-10-09 23:41:31 --> Utf8 Class Initialized
INFO - 2023-10-09 23:41:31 --> URI Class Initialized
INFO - 2023-10-09 23:41:31 --> Router Class Initialized
INFO - 2023-10-09 23:41:31 --> Output Class Initialized
INFO - 2023-10-09 23:41:31 --> Security Class Initialized
DEBUG - 2023-10-09 23:41:31 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-10-09 23:41:31 --> Input Class Initialized
INFO - 2023-10-09 23:41:31 --> Language Class Initialized
INFO - 2023-10-09 23:41:31 --> Loader Class Initialized
INFO - 2023-10-09 23:41:31 --> Helper loaded: url_helper
INFO - 2023-10-09 23:41:31 --> Database Driver Class Initialized
DEBUG - 2023-10-09 23:41:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-10-09 23:41:31 --> Session: Class initialized using 'files' driver.
INFO - 2023-10-09 23:41:31 --> Controller Class Initialized
INFO - 2023-10-09 23:41:31 --> Helper loaded: form_helper
DEBUG - 2023-10-09 23:41:31 --> Session class already loaded. Second attempt ignored.
INFO - 2023-10-09 23:41:31 --> Model Class Initialized
INFO - 2023-10-09 23:41:31 --> File loaded: C:\wamp64\www\proyectosunihorizonte\application\views\uh/proyectos_programas.php
INFO - 2023-10-09 23:41:31 --> Final output sent to browser
DEBUG - 2023-10-09 23:41:31 --> Total execution time: 0.0195
INFO - 2023-10-09 23:41:31 --> Config Class Initialized
INFO - 2023-10-09 23:41:31 --> Hooks Class Initialized
DEBUG - 2023-10-09 23:41:31 --> UTF-8 Support Enabled
INFO - 2023-10-09 23:41:31 --> Utf8 Class Initialized
INFO - 2023-10-09 23:41:31 --> URI Class Initialized
INFO - 2023-10-09 23:41:31 --> Router Class Initialized
INFO - 2023-10-09 23:41:31 --> Output Class Initialized
INFO - 2023-10-09 23:41:31 --> Security Class Initialized
DEBUG - 2023-10-09 23:41:31 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-10-09 23:41:31 --> Input Class Initialized
INFO - 2023-10-09 23:41:31 --> Language Class Initialized
INFO - 2023-10-09 23:41:31 --> Loader Class Initialized
INFO - 2023-10-09 23:41:31 --> Helper loaded: url_helper
INFO - 2023-10-09 23:41:31 --> Database Driver Class Initialized
DEBUG - 2023-10-09 23:41:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-10-09 23:41:31 --> Session: Class initialized using 'files' driver.
INFO - 2023-10-09 23:41:31 --> Controller Class Initialized
DEBUG - 2023-10-09 23:41:31 --> Session class already loaded. Second attempt ignored.
INFO - 2023-10-09 23:41:31 --> Model Class Initialized
DEBUG - 2023-10-09 23:41:31 --> referenced_146om_proyectos
DEBUG - 2023-10-09 23:41:31 --> mcwhere_148id_proyecto_lista
DEBUG - 2023-10-09 23:41:31 --> mcwhere_149om_proyectos_programas
DEBUG - 2023-10-09 23:41:31 --> modelcommonSELECT om_proyectos_programas.id_proyecto_programa_lista, om_proyectos_programas.borrado, om_proyectos_programas.log_accion, om_proyectos_programas.log_usuario, om_proyectos_programas.log_timestamp, om_proyectos.nombre_proyecto AS id_proyecto_lista, om_programa_academico_lista.nombre_programa_academico AS id_programas_lista FROM om_proyectos_programas, om_proyectos, om_programa_academico_lista WHERE om_proyectos_programas.id_proyecto_lista = om_proyectos.id_proyecto AND om_proyectos_programas.id_programas_lista = om_programa_academico_lista.id_programa_academico AND om_proyectos_programas.id_proyecto_lista = 100 AND om_proyectos_programas.borrado = 0 ORDER BY om_proyectos_programas.id_proyecto_programa_lista ASC
DEBUG - 2023-10-09 23:41:31 --> referenced_215om_proyectos
DEBUG - 2023-10-09 23:41:31 --> mcwhere_214id_proyecto_lista
INFO - 2023-10-09 23:41:31 --> Final output sent to browser
DEBUG - 2023-10-09 23:41:31 --> Total execution time: 0.0340
INFO - 2023-10-09 23:41:42 --> Config Class Initialized
INFO - 2023-10-09 23:41:42 --> Hooks Class Initialized
DEBUG - 2023-10-09 23:41:42 --> UTF-8 Support Enabled
INFO - 2023-10-09 23:41:42 --> Utf8 Class Initialized
INFO - 2023-10-09 23:41:42 --> URI Class Initialized
INFO - 2023-10-09 23:41:42 --> Router Class Initialized
INFO - 2023-10-09 23:41:42 --> Output Class Initialized
INFO - 2023-10-09 23:41:42 --> Security Class Initialized
DEBUG - 2023-10-09 23:41:42 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-10-09 23:41:42 --> Input Class Initialized
INFO - 2023-10-09 23:41:42 --> Language Class Initialized
INFO - 2023-10-09 23:41:42 --> Loader Class Initialized
INFO - 2023-10-09 23:41:42 --> Helper loaded: url_helper
INFO - 2023-10-09 23:41:42 --> Database Driver Class Initialized
DEBUG - 2023-10-09 23:41:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-10-09 23:41:42 --> Session: Class initialized using 'files' driver.
INFO - 2023-10-09 23:41:42 --> Controller Class Initialized
INFO - 2023-10-09 23:41:42 --> Helper loaded: form_helper
DEBUG - 2023-10-09 23:41:42 --> Session class already loaded. Second attempt ignored.
INFO - 2023-10-09 23:41:42 --> Model Class Initialized
INFO - 2023-10-09 23:41:42 --> File loaded: C:\wamp64\www\proyectosunihorizonte\application\views\uh/forms/editor/avances.php
INFO - 2023-10-09 23:41:42 --> Final output sent to browser
DEBUG - 2023-10-09 23:41:42 --> Total execution time: 0.0208
INFO - 2023-10-09 23:41:42 --> Config Class Initialized
INFO - 2023-10-09 23:41:42 --> Hooks Class Initialized
DEBUG - 2023-10-09 23:41:42 --> UTF-8 Support Enabled
INFO - 2023-10-09 23:41:42 --> Utf8 Class Initialized
INFO - 2023-10-09 23:41:42 --> URI Class Initialized
INFO - 2023-10-09 23:41:42 --> Router Class Initialized
INFO - 2023-10-09 23:41:42 --> Output Class Initialized
INFO - 2023-10-09 23:41:42 --> Security Class Initialized
DEBUG - 2023-10-09 23:41:42 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-10-09 23:41:42 --> Input Class Initialized
INFO - 2023-10-09 23:41:42 --> Language Class Initialized
INFO - 2023-10-09 23:41:42 --> Loader Class Initialized
INFO - 2023-10-09 23:41:42 --> Helper loaded: url_helper
INFO - 2023-10-09 23:41:42 --> Database Driver Class Initialized
DEBUG - 2023-10-09 23:41:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-10-09 23:41:42 --> Session: Class initialized using 'files' driver.
INFO - 2023-10-09 23:41:42 --> Controller Class Initialized
DEBUG - 2023-10-09 23:41:42 --> Session class already loaded. Second attempt ignored.
INFO - 2023-10-09 23:41:42 --> Model Class Initialized
DEBUG - 2023-10-09 23:41:42 --> referenced_297om_proyectos
DEBUG - 2023-10-09 23:41:42 --> referenced_317om_proyectos
DEBUG - 2023-10-09 23:41:42 --> referenced_323om_proyectos
DEBUG - 2023-10-09 23:41:42 --> referenced_297om_tipos_documentos
DEBUG - 2023-10-09 23:41:42 --> referenced_317om_tipos_documentos
DEBUG - 2023-10-09 23:41:42 --> referenced_323om_tipos_documentos
DEBUG - 2023-10-09 23:41:42 --> mcwhere_343om_avances.id_proyecto = om_proyectos.id_proyecto AND om_avances.tipo_documento = om_tipos_documentos.id_tipo_documento
DEBUG - 2023-10-09 23:41:42 --> mcwhere_347om_avances
INFO - 2023-10-09 23:41:42 --> Final output sent to browser
DEBUG - 2023-10-09 23:41:42 --> Total execution time: 0.0349
INFO - 2023-10-09 23:41:51 --> Config Class Initialized
INFO - 2023-10-09 23:41:51 --> Hooks Class Initialized
DEBUG - 2023-10-09 23:41:51 --> UTF-8 Support Enabled
INFO - 2023-10-09 23:41:51 --> Utf8 Class Initialized
INFO - 2023-10-09 23:41:51 --> URI Class Initialized
INFO - 2023-10-09 23:41:51 --> Router Class Initialized
INFO - 2023-10-09 23:41:51 --> Output Class Initialized
INFO - 2023-10-09 23:41:51 --> Security Class Initialized
DEBUG - 2023-10-09 23:41:51 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-10-09 23:41:51 --> Input Class Initialized
INFO - 2023-10-09 23:41:51 --> Language Class Initialized
INFO - 2023-10-09 23:41:51 --> Loader Class Initialized
INFO - 2023-10-09 23:41:51 --> Helper loaded: url_helper
INFO - 2023-10-09 23:41:51 --> Database Driver Class Initialized
DEBUG - 2023-10-09 23:41:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-10-09 23:41:51 --> Session: Class initialized using 'files' driver.
INFO - 2023-10-09 23:41:51 --> Controller Class Initialized
DEBUG - 2023-10-09 23:41:51 --> Session class already loaded. Second attempt ignored.
INFO - 2023-10-09 23:41:51 --> Model Class Initialized
DEBUG - 2023-10-09 23:41:51 --> modelcommonSELECT om_tipos_documentos.id_tipo_documento, om_tipos_documentos.nombre_tipo_documento, om_tipos_documentos.borrado, om_tipos_documentos.log_accion, om_tipos_documentos.log_usuario, om_tipos_documentos.log_timestamp FROM om_tipos_documentos WHERE om_tipos_documentos.borrado = 0 ORDER BY om_tipos_documentos.id_tipo_documento ASC
INFO - 2023-10-09 23:41:51 --> Final output sent to browser
DEBUG - 2023-10-09 23:41:51 --> Total execution time: 0.0361
INFO - 2023-10-09 23:41:59 --> Config Class Initialized
INFO - 2023-10-09 23:41:59 --> Hooks Class Initialized
DEBUG - 2023-10-09 23:41:59 --> UTF-8 Support Enabled
INFO - 2023-10-09 23:41:59 --> Utf8 Class Initialized
INFO - 2023-10-09 23:41:59 --> URI Class Initialized
INFO - 2023-10-09 23:41:59 --> Router Class Initialized
INFO - 2023-10-09 23:41:59 --> Output Class Initialized
INFO - 2023-10-09 23:41:59 --> Security Class Initialized
DEBUG - 2023-10-09 23:41:59 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-10-09 23:41:59 --> Input Class Initialized
INFO - 2023-10-09 23:41:59 --> Language Class Initialized
INFO - 2023-10-09 23:41:59 --> Loader Class Initialized
INFO - 2023-10-09 23:41:59 --> Helper loaded: url_helper
INFO - 2023-10-09 23:41:59 --> Database Driver Class Initialized
DEBUG - 2023-10-09 23:41:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-10-09 23:41:59 --> Session: Class initialized using 'files' driver.
INFO - 2023-10-09 23:41:59 --> Controller Class Initialized
INFO - 2023-10-09 23:41:59 --> Helper loaded: form_helper
DEBUG - 2023-10-09 23:41:59 --> Session class already loaded. Second attempt ignored.
INFO - 2023-10-09 23:41:59 --> Model Class Initialized
INFO - 2023-10-09 23:41:59 --> Language file loaded: language/spanish/general_lang.php
INFO - 2023-10-09 23:41:59 --> Model Class Initialized
ERROR - 2023-10-09 18:41:59 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`gestion_uh`.`om_avances`, CONSTRAINT `om_avances_ibfk_1` FOREIGN KEY (`id_proyecto`) REFERENCES `om_proyectos` (`id_proyecto`) ON UPDATE CASCADE) - Invalid query: INSERT INTO `om_avances` (`id_avance`, `nombre_avance`, `presupuesto_ejecutado`, `fecha_entrega`, `tipo_documento`, `log_accion`, `log_usuario`, `log_timestamp`) VALUES ('', 'PRUEBA 10', '435', '2023-10-09', '2', 'add', 'luisa.garcia', '2023-10-09 06:10:59')
INFO - 2023-10-09 18:41:59 --> Upload Class Initialized
INFO - 2023-10-09 18:41:59 --> Final output sent to browser
DEBUG - 2023-10-09 18:41:59 --> Total execution time: 0.1010
INFO - 2023-10-09 23:41:59 --> Config Class Initialized
INFO - 2023-10-09 23:41:59 --> Hooks Class Initialized
DEBUG - 2023-10-09 23:41:59 --> UTF-8 Support Enabled
INFO - 2023-10-09 23:41:59 --> Utf8 Class Initialized
INFO - 2023-10-09 23:41:59 --> URI Class Initialized
INFO - 2023-10-09 23:41:59 --> Router Class Initialized
INFO - 2023-10-09 23:41:59 --> Output Class Initialized
INFO - 2023-10-09 23:41:59 --> Security Class Initialized
DEBUG - 2023-10-09 23:41:59 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-10-09 23:41:59 --> Input Class Initialized
INFO - 2023-10-09 23:41:59 --> Language Class Initialized
INFO - 2023-10-09 23:41:59 --> Loader Class Initialized
INFO - 2023-10-09 23:41:59 --> Helper loaded: url_helper
INFO - 2023-10-09 23:41:59 --> Database Driver Class Initialized
DEBUG - 2023-10-09 23:41:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-10-09 23:41:59 --> Session: Class initialized using 'files' driver.
INFO - 2023-10-09 23:41:59 --> Controller Class Initialized
INFO - 2023-10-09 23:41:59 --> Helper loaded: form_helper
DEBUG - 2023-10-09 23:41:59 --> Session class already loaded. Second attempt ignored.
INFO - 2023-10-09 23:41:59 --> Model Class Initialized
INFO - 2023-10-09 23:41:59 --> File loaded: C:\wamp64\www\proyectosunihorizonte\application\views\uh/forms/editor/avances.php
INFO - 2023-10-09 23:41:59 --> Final output sent to browser
DEBUG - 2023-10-09 23:41:59 --> Total execution time: 0.0225
INFO - 2023-10-09 23:42:01 --> Config Class Initialized
INFO - 2023-10-09 23:42:01 --> Hooks Class Initialized
DEBUG - 2023-10-09 23:42:01 --> UTF-8 Support Enabled
INFO - 2023-10-09 23:42:01 --> Utf8 Class Initialized
INFO - 2023-10-09 23:42:01 --> URI Class Initialized
INFO - 2023-10-09 23:42:01 --> Router Class Initialized
INFO - 2023-10-09 23:42:01 --> Output Class Initialized
INFO - 2023-10-09 23:42:01 --> Security Class Initialized
DEBUG - 2023-10-09 23:42:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-10-09 23:42:01 --> Input Class Initialized
INFO - 2023-10-09 23:42:01 --> Language Class Initialized
INFO - 2023-10-09 23:42:01 --> Loader Class Initialized
INFO - 2023-10-09 23:42:01 --> Helper loaded: url_helper
INFO - 2023-10-09 23:42:01 --> Database Driver Class Initialized
DEBUG - 2023-10-09 23:42:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-10-09 23:42:01 --> Session: Class initialized using 'files' driver.
INFO - 2023-10-09 23:42:01 --> Controller Class Initialized
DEBUG - 2023-10-09 23:42:01 --> Session class already loaded. Second attempt ignored.
INFO - 2023-10-09 23:42:01 --> Model Class Initialized
DEBUG - 2023-10-09 23:42:01 --> mcwhere_156_whereom_avances.id_proyecto = om_proyectos.id_proyecto AND om_avances.tipo_documento = om_tipos_documentos.id_tipo_documento
DEBUG - 2023-10-09 23:42:01 --> mcwhere_159om_avances
DEBUG - 2023-10-09 23:42:01 --> modelcommonSELECT om_avances.id_avance, om_avances.nombre_avance, om_avances.presupuesto_ejecutado, om_avances.fecha_entrega, om_avances.archivo_final_proyecto, om_avances.borrado, om_avances.log_accion, om_avances.log_usuario, om_avances.log_timestamp, om_proyectos.nombre_proyecto AS id_proyecto, om_tipos_documentos.nombre_tipo_documento AS tipo_documento FROM om_avances, om_proyectos, om_tipos_documentos WHERE om_avances.id_proyecto = om_proyectos.id_proyecto AND om_avances.tipo_documento = om_tipos_documentos.id_tipo_documento AND om_avances.borrado = 0 ORDER BY om_avances.id_avance ASC
INFO - 2023-10-09 23:42:01 --> Final output sent to browser
DEBUG - 2023-10-09 23:42:01 --> Total execution time: 0.0417
INFO - 2023-10-09 23:42:06 --> Config Class Initialized
INFO - 2023-10-09 23:42:06 --> Hooks Class Initialized
DEBUG - 2023-10-09 23:42:06 --> UTF-8 Support Enabled
INFO - 2023-10-09 23:42:06 --> Utf8 Class Initialized
INFO - 2023-10-09 23:42:06 --> URI Class Initialized
INFO - 2023-10-09 23:42:06 --> Router Class Initialized
INFO - 2023-10-09 23:42:06 --> Output Class Initialized
INFO - 2023-10-09 23:42:06 --> Security Class Initialized
DEBUG - 2023-10-09 23:42:06 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-10-09 23:42:06 --> Input Class Initialized
INFO - 2023-10-09 23:42:06 --> Language Class Initialized
INFO - 2023-10-09 23:42:06 --> Loader Class Initialized
INFO - 2023-10-09 23:42:06 --> Helper loaded: url_helper
INFO - 2023-10-09 23:42:06 --> Database Driver Class Initialized
DEBUG - 2023-10-09 23:42:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-10-09 23:42:06 --> Session: Class initialized using 'files' driver.
INFO - 2023-10-09 23:42:06 --> Controller Class Initialized
INFO - 2023-10-09 23:42:06 --> Helper loaded: form_helper
DEBUG - 2023-10-09 23:42:06 --> Session class already loaded. Second attempt ignored.
INFO - 2023-10-09 23:42:06 --> Model Class Initialized
INFO - 2023-10-09 23:42:06 --> Language file loaded: language/spanish/general_lang.php
INFO - 2023-10-09 23:42:06 --> Model Class Initialized
INFO - 2023-10-09 23:42:06 --> Final output sent to browser
DEBUG - 2023-10-09 23:42:06 --> Total execution time: 0.0944
INFO - 2023-10-09 23:45:55 --> Config Class Initialized
INFO - 2023-10-09 23:45:55 --> Hooks Class Initialized
DEBUG - 2023-10-09 23:45:55 --> UTF-8 Support Enabled
INFO - 2023-10-09 23:45:55 --> Utf8 Class Initialized
INFO - 2023-10-09 23:45:55 --> URI Class Initialized
INFO - 2023-10-09 23:45:55 --> Router Class Initialized
INFO - 2023-10-09 23:45:55 --> Output Class Initialized
INFO - 2023-10-09 23:45:55 --> Security Class Initialized
DEBUG - 2023-10-09 23:45:55 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-10-09 23:45:55 --> Input Class Initialized
INFO - 2023-10-09 23:45:55 --> Language Class Initialized
INFO - 2023-10-09 23:45:55 --> Loader Class Initialized
INFO - 2023-10-09 23:45:55 --> Helper loaded: url_helper
INFO - 2023-10-09 23:45:55 --> Database Driver Class Initialized
DEBUG - 2023-10-09 23:45:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-10-09 23:45:55 --> Session: Class initialized using 'files' driver.
INFO - 2023-10-09 23:45:55 --> Controller Class Initialized
INFO - 2023-10-09 23:45:55 --> Helper loaded: form_helper
DEBUG - 2023-10-09 23:45:55 --> Session class already loaded. Second attempt ignored.
INFO - 2023-10-09 23:45:55 --> Model Class Initialized
INFO - 2023-10-09 23:45:55 --> File loaded: C:\wamp64\www\proyectosunihorizonte\application\views\uh/forms/editor/avances.php
INFO - 2023-10-09 23:45:55 --> Final output sent to browser
DEBUG - 2023-10-09 23:45:55 --> Total execution time: 0.0245
INFO - 2023-10-09 23:45:55 --> Config Class Initialized
INFO - 2023-10-09 23:45:55 --> Hooks Class Initialized
DEBUG - 2023-10-09 23:45:55 --> UTF-8 Support Enabled
INFO - 2023-10-09 23:45:55 --> Utf8 Class Initialized
INFO - 2023-10-09 23:45:55 --> URI Class Initialized
INFO - 2023-10-09 23:45:55 --> Router Class Initialized
INFO - 2023-10-09 23:45:55 --> Output Class Initialized
INFO - 2023-10-09 23:45:55 --> Security Class Initialized
DEBUG - 2023-10-09 23:45:55 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-10-09 23:45:55 --> Input Class Initialized
INFO - 2023-10-09 23:45:55 --> Language Class Initialized
INFO - 2023-10-09 23:45:55 --> Loader Class Initialized
INFO - 2023-10-09 23:45:55 --> Helper loaded: url_helper
INFO - 2023-10-09 23:45:55 --> Database Driver Class Initialized
DEBUG - 2023-10-09 23:45:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-10-09 23:45:55 --> Session: Class initialized using 'files' driver.
INFO - 2023-10-09 23:45:55 --> Controller Class Initialized
DEBUG - 2023-10-09 23:45:55 --> Session class already loaded. Second attempt ignored.
INFO - 2023-10-09 23:45:55 --> Model Class Initialized
DEBUG - 2023-10-09 23:45:55 --> referenced_297om_proyectos
DEBUG - 2023-10-09 23:45:55 --> referenced_317om_proyectos
DEBUG - 2023-10-09 23:45:55 --> referenced_323om_proyectos
DEBUG - 2023-10-09 23:45:55 --> referenced_297om_tipos_documentos
DEBUG - 2023-10-09 23:45:55 --> referenced_317om_tipos_documentos
DEBUG - 2023-10-09 23:45:55 --> referenced_323om_tipos_documentos
DEBUG - 2023-10-09 23:45:55 --> mcwhere_343om_avances.id_proyecto = om_proyectos.id_proyecto AND om_avances.tipo_documento = om_tipos_documentos.id_tipo_documento
DEBUG - 2023-10-09 23:45:55 --> mcwhere_347om_avances
INFO - 2023-10-09 23:45:55 --> Final output sent to browser
DEBUG - 2023-10-09 23:45:55 --> Total execution time: 0.0376
INFO - 2023-10-09 23:46:04 --> Config Class Initialized
INFO - 2023-10-09 23:46:04 --> Hooks Class Initialized
DEBUG - 2023-10-09 23:46:04 --> UTF-8 Support Enabled
INFO - 2023-10-09 23:46:04 --> Utf8 Class Initialized
INFO - 2023-10-09 23:46:04 --> URI Class Initialized
INFO - 2023-10-09 23:46:04 --> Router Class Initialized
INFO - 2023-10-09 23:46:04 --> Output Class Initialized
INFO - 2023-10-09 23:46:04 --> Security Class Initialized
DEBUG - 2023-10-09 23:46:04 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-10-09 23:46:04 --> Input Class Initialized
INFO - 2023-10-09 23:46:04 --> Language Class Initialized
INFO - 2023-10-09 23:46:04 --> Loader Class Initialized
INFO - 2023-10-09 23:46:04 --> Helper loaded: url_helper
INFO - 2023-10-09 23:46:04 --> Database Driver Class Initialized
DEBUG - 2023-10-09 23:46:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-10-09 23:46:04 --> Session: Class initialized using 'files' driver.
INFO - 2023-10-09 23:46:04 --> Controller Class Initialized
DEBUG - 2023-10-09 23:46:04 --> Session class already loaded. Second attempt ignored.
INFO - 2023-10-09 23:46:04 --> Model Class Initialized
DEBUG - 2023-10-09 23:46:04 --> modelcommonSELECT om_tipos_documentos.id_tipo_documento, om_tipos_documentos.nombre_tipo_documento, om_tipos_documentos.borrado, om_tipos_documentos.log_accion, om_tipos_documentos.log_usuario, om_tipos_documentos.log_timestamp FROM om_tipos_documentos WHERE om_tipos_documentos.borrado = 0 ORDER BY om_tipos_documentos.id_tipo_documento ASC
INFO - 2023-10-09 23:46:04 --> Final output sent to browser
DEBUG - 2023-10-09 23:46:04 --> Total execution time: 0.0430
INFO - 2023-10-09 23:46:10 --> Config Class Initialized
INFO - 2023-10-09 23:46:10 --> Hooks Class Initialized
DEBUG - 2023-10-09 23:46:10 --> UTF-8 Support Enabled
INFO - 2023-10-09 23:46:10 --> Utf8 Class Initialized
INFO - 2023-10-09 23:46:10 --> URI Class Initialized
INFO - 2023-10-09 23:46:10 --> Router Class Initialized
INFO - 2023-10-09 23:46:10 --> Output Class Initialized
INFO - 2023-10-09 23:46:10 --> Security Class Initialized
DEBUG - 2023-10-09 23:46:10 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-10-09 23:46:10 --> Input Class Initialized
INFO - 2023-10-09 23:46:10 --> Language Class Initialized
INFO - 2023-10-09 23:46:10 --> Loader Class Initialized
INFO - 2023-10-09 23:46:10 --> Helper loaded: url_helper
INFO - 2023-10-09 23:46:10 --> Database Driver Class Initialized
DEBUG - 2023-10-09 23:46:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-10-09 23:46:10 --> Session: Class initialized using 'files' driver.
INFO - 2023-10-09 23:46:10 --> Controller Class Initialized
INFO - 2023-10-09 23:46:10 --> Helper loaded: form_helper
DEBUG - 2023-10-09 23:46:10 --> Session class already loaded. Second attempt ignored.
INFO - 2023-10-09 23:46:10 --> Model Class Initialized
INFO - 2023-10-09 23:46:10 --> Language file loaded: language/spanish/general_lang.php
INFO - 2023-10-09 23:46:10 --> Model Class Initialized
ERROR - 2023-10-09 18:46:10 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`gestion_uh`.`om_avances`, CONSTRAINT `om_avances_ibfk_1` FOREIGN KEY (`id_proyecto`) REFERENCES `om_proyectos` (`id_proyecto`) ON UPDATE CASCADE) - Invalid query: INSERT INTO `om_avances` (`id_avance`, `nombre_avance`, `presupuesto_ejecutado`, `fecha_entrega`, `tipo_documento`, `log_accion`, `log_usuario`, `log_timestamp`) VALUES ('', 'PRUEBA 10', '345', '2023-10-09', '3', 'add', 'luisa.garcia', '2023-10-09 06:10:10')
INFO - 2023-10-09 18:46:10 --> Upload Class Initialized
INFO - 2023-10-09 18:46:10 --> Final output sent to browser
DEBUG - 2023-10-09 18:46:10 --> Total execution time: 0.0944
INFO - 2023-10-09 23:46:10 --> Config Class Initialized
INFO - 2023-10-09 23:46:10 --> Hooks Class Initialized
DEBUG - 2023-10-09 23:46:10 --> UTF-8 Support Enabled
INFO - 2023-10-09 23:46:10 --> Utf8 Class Initialized
INFO - 2023-10-09 23:46:10 --> URI Class Initialized
INFO - 2023-10-09 23:46:10 --> Router Class Initialized
INFO - 2023-10-09 23:46:10 --> Output Class Initialized
INFO - 2023-10-09 23:46:10 --> Security Class Initialized
DEBUG - 2023-10-09 23:46:10 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-10-09 23:46:10 --> Input Class Initialized
INFO - 2023-10-09 23:46:10 --> Language Class Initialized
INFO - 2023-10-09 23:46:10 --> Loader Class Initialized
INFO - 2023-10-09 23:46:10 --> Helper loaded: url_helper
INFO - 2023-10-09 23:46:10 --> Database Driver Class Initialized
DEBUG - 2023-10-09 23:46:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-10-09 23:46:10 --> Session: Class initialized using 'files' driver.
INFO - 2023-10-09 23:46:10 --> Controller Class Initialized
INFO - 2023-10-09 23:46:10 --> Helper loaded: form_helper
DEBUG - 2023-10-09 23:46:10 --> Session class already loaded. Second attempt ignored.
INFO - 2023-10-09 23:46:10 --> Model Class Initialized
INFO - 2023-10-09 23:46:10 --> File loaded: C:\wamp64\www\proyectosunihorizonte\application\views\uh/forms/editor/avances.php
INFO - 2023-10-09 23:46:10 --> Final output sent to browser
DEBUG - 2023-10-09 23:46:10 --> Total execution time: 0.0191
INFO - 2023-10-09 23:46:13 --> Config Class Initialized
INFO - 2023-10-09 23:46:13 --> Hooks Class Initialized
DEBUG - 2023-10-09 23:46:13 --> UTF-8 Support Enabled
INFO - 2023-10-09 23:46:13 --> Utf8 Class Initialized
INFO - 2023-10-09 23:46:13 --> URI Class Initialized
INFO - 2023-10-09 23:46:13 --> Router Class Initialized
INFO - 2023-10-09 23:46:13 --> Output Class Initialized
INFO - 2023-10-09 23:46:13 --> Security Class Initialized
DEBUG - 2023-10-09 23:46:13 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-10-09 23:46:13 --> Input Class Initialized
INFO - 2023-10-09 23:46:13 --> Language Class Initialized
INFO - 2023-10-09 23:46:13 --> Loader Class Initialized
INFO - 2023-10-09 23:46:13 --> Helper loaded: url_helper
INFO - 2023-10-09 23:46:13 --> Database Driver Class Initialized
DEBUG - 2023-10-09 23:46:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-10-09 23:46:13 --> Session: Class initialized using 'files' driver.
INFO - 2023-10-09 23:46:13 --> Controller Class Initialized
DEBUG - 2023-10-09 23:46:13 --> Session class already loaded. Second attempt ignored.
INFO - 2023-10-09 23:46:13 --> Model Class Initialized
DEBUG - 2023-10-09 23:46:13 --> mcwhere_156_whereom_avances.id_proyecto = om_proyectos.id_proyecto AND om_avances.tipo_documento = om_tipos_documentos.id_tipo_documento
DEBUG - 2023-10-09 23:46:13 --> mcwhere_159om_avances
DEBUG - 2023-10-09 23:46:13 --> modelcommonSELECT om_avances.id_avance, om_avances.nombre_avance, om_avances.presupuesto_ejecutado, om_avances.fecha_entrega, om_avances.archivo_final_proyecto, om_avances.borrado, om_avances.log_accion, om_avances.log_usuario, om_avances.log_timestamp, om_proyectos.nombre_proyecto AS id_proyecto, om_tipos_documentos.nombre_tipo_documento AS tipo_documento FROM om_avances, om_proyectos, om_tipos_documentos WHERE om_avances.id_proyecto = om_proyectos.id_proyecto AND om_avances.tipo_documento = om_tipos_documentos.id_tipo_documento AND om_avances.borrado = 0 ORDER BY om_avances.id_avance ASC
INFO - 2023-10-09 23:46:13 --> Final output sent to browser
DEBUG - 2023-10-09 23:46:13 --> Total execution time: 0.0369
INFO - 2023-10-09 23:46:17 --> Config Class Initialized
INFO - 2023-10-09 23:46:17 --> Hooks Class Initialized
DEBUG - 2023-10-09 23:46:17 --> UTF-8 Support Enabled
INFO - 2023-10-09 23:46:17 --> Utf8 Class Initialized
INFO - 2023-10-09 23:46:17 --> URI Class Initialized
INFO - 2023-10-09 23:46:17 --> Router Class Initialized
INFO - 2023-10-09 23:46:17 --> Output Class Initialized
INFO - 2023-10-09 23:46:17 --> Security Class Initialized
DEBUG - 2023-10-09 23:46:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-10-09 23:46:17 --> Input Class Initialized
INFO - 2023-10-09 23:46:17 --> Language Class Initialized
INFO - 2023-10-09 23:46:17 --> Loader Class Initialized
INFO - 2023-10-09 23:46:17 --> Helper loaded: url_helper
INFO - 2023-10-09 23:46:17 --> Database Driver Class Initialized
DEBUG - 2023-10-09 23:46:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-10-09 23:46:17 --> Session: Class initialized using 'files' driver.
INFO - 2023-10-09 23:46:17 --> Controller Class Initialized
INFO - 2023-10-09 23:46:17 --> Helper loaded: form_helper
DEBUG - 2023-10-09 23:46:17 --> Session class already loaded. Second attempt ignored.
INFO - 2023-10-09 23:46:17 --> Model Class Initialized
INFO - 2023-10-09 23:46:17 --> Language file loaded: language/spanish/general_lang.php
INFO - 2023-10-09 23:46:17 --> Model Class Initialized
INFO - 2023-10-09 23:46:17 --> Final output sent to browser
DEBUG - 2023-10-09 23:46:17 --> Total execution time: 0.0249
INFO - 2023-10-09 23:51:19 --> Config Class Initialized
INFO - 2023-10-09 23:51:19 --> Hooks Class Initialized
DEBUG - 2023-10-09 23:51:19 --> UTF-8 Support Enabled
INFO - 2023-10-09 23:51:19 --> Utf8 Class Initialized
INFO - 2023-10-09 23:51:19 --> URI Class Initialized
INFO - 2023-10-09 23:51:19 --> Router Class Initialized
INFO - 2023-10-09 23:51:19 --> Output Class Initialized
INFO - 2023-10-09 23:51:19 --> Security Class Initialized
DEBUG - 2023-10-09 23:51:19 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-10-09 23:51:19 --> Input Class Initialized
INFO - 2023-10-09 23:51:19 --> Language Class Initialized
INFO - 2023-10-09 23:51:19 --> Loader Class Initialized
INFO - 2023-10-09 23:51:19 --> Helper loaded: url_helper
INFO - 2023-10-09 23:51:19 --> Database Driver Class Initialized
DEBUG - 2023-10-09 23:51:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-10-09 23:51:19 --> Session: Class initialized using 'files' driver.
INFO - 2023-10-09 23:51:19 --> Controller Class Initialized
INFO - 2023-10-09 23:51:19 --> Helper loaded: form_helper
DEBUG - 2023-10-09 23:51:19 --> Session class already loaded. Second attempt ignored.
INFO - 2023-10-09 23:51:19 --> Model Class Initialized
INFO - 2023-10-09 23:51:19 --> File loaded: C:\wamp64\www\proyectosunihorizonte\application\views\common/header.php
INFO - 2023-10-09 23:51:19 --> File loaded: C:\wamp64\www\proyectosunihorizonte\application\views\uh/panel-admin.php
ERROR - 2023-10-09 23:51:19 --> Could not find the language line "txt_q_update"
ERROR - 2023-10-09 23:51:19 --> Could not find the language line "txt_q_delete"
ERROR - 2023-10-09 23:51:19 --> Could not find the language line "txt_n_correct"
ERROR - 2023-10-09 23:51:19 --> Could not find the language line "txt_n_error"
ERROR - 2023-10-09 23:51:19 --> Could not find the language line "txt_save"
ERROR - 2023-10-09 23:51:19 --> Could not find the language line "txt_copy"
ERROR - 2023-10-09 23:51:19 --> Could not find the language line "txt_close"
ERROR - 2023-10-09 23:51:19 --> Could not find the language line "txt_cancel"
ERROR - 2023-10-09 23:51:19 --> Could not find the language line "no_results"
ERROR - 2023-10-09 23:51:19 --> Could not find the language line "lbl_search"
ERROR - 2023-10-09 23:51:19 --> Could not find the language line "btn_modify"
ERROR - 2023-10-09 23:51:19 --> Could not find the language line "btn_new"
ERROR - 2023-10-09 23:51:19 --> Could not find the language line "btn_edit"
ERROR - 2023-10-09 23:51:19 --> Could not find the language line "btn_delete"
INFO - 2023-10-09 23:51:19 --> File loaded: C:\wamp64\www\proyectosunihorizonte\application\views\common/footer.php
INFO - 2023-10-09 23:51:19 --> Final output sent to browser
DEBUG - 2023-10-09 23:51:19 --> Total execution time: 0.0287
INFO - 2023-10-09 23:51:19 --> Config Class Initialized
INFO - 2023-10-09 23:51:19 --> Hooks Class Initialized
DEBUG - 2023-10-09 23:51:19 --> UTF-8 Support Enabled
INFO - 2023-10-09 23:51:19 --> Utf8 Class Initialized
INFO - 2023-10-09 23:51:19 --> URI Class Initialized
INFO - 2023-10-09 23:51:19 --> Router Class Initialized
INFO - 2023-10-09 23:51:19 --> Output Class Initialized
INFO - 2023-10-09 23:51:19 --> Security Class Initialized
DEBUG - 2023-10-09 23:51:19 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-10-09 23:51:19 --> Input Class Initialized
INFO - 2023-10-09 23:51:19 --> Language Class Initialized
INFO - 2023-10-09 23:51:19 --> Loader Class Initialized
INFO - 2023-10-09 23:51:19 --> Helper loaded: url_helper
INFO - 2023-10-09 23:51:19 --> Database Driver Class Initialized
DEBUG - 2023-10-09 23:51:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-10-09 23:51:19 --> Session: Class initialized using 'files' driver.
INFO - 2023-10-09 23:51:19 --> Controller Class Initialized
INFO - 2023-10-09 23:51:19 --> Helper loaded: form_helper
DEBUG - 2023-10-09 23:51:19 --> Session class already loaded. Second attempt ignored.
INFO - 2023-10-09 23:51:19 --> Model Class Initialized
INFO - 2023-10-09 23:51:19 --> Language file loaded: language/spanish/general_lang.php
INFO - 2023-10-09 23:51:19 --> Final output sent to browser
DEBUG - 2023-10-09 23:51:19 --> Total execution time: 0.0210
INFO - 2023-10-09 23:51:20 --> Config Class Initialized
INFO - 2023-10-09 23:51:20 --> Hooks Class Initialized
DEBUG - 2023-10-09 23:51:20 --> UTF-8 Support Enabled
INFO - 2023-10-09 23:51:20 --> Utf8 Class Initialized
INFO - 2023-10-09 23:51:20 --> URI Class Initialized
INFO - 2023-10-09 23:51:20 --> Router Class Initialized
INFO - 2023-10-09 23:51:20 --> Output Class Initialized
INFO - 2023-10-09 23:51:20 --> Security Class Initialized
DEBUG - 2023-10-09 23:51:20 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-10-09 23:51:20 --> Input Class Initialized
INFO - 2023-10-09 23:51:20 --> Config Class Initialized
INFO - 2023-10-09 23:51:20 --> Hooks Class Initialized
INFO - 2023-10-09 23:51:20 --> Language Class Initialized
DEBUG - 2023-10-09 23:51:20 --> UTF-8 Support Enabled
INFO - 2023-10-09 23:51:20 --> Loader Class Initialized
INFO - 2023-10-09 23:51:20 --> Utf8 Class Initialized
INFO - 2023-10-09 23:51:20 --> Helper loaded: url_helper
INFO - 2023-10-09 23:51:20 --> Database Driver Class Initialized
DEBUG - 2023-10-09 23:51:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-10-09 23:51:20 --> Session: Class initialized using 'files' driver.
INFO - 2023-10-09 23:51:20 --> Controller Class Initialized
INFO - 2023-10-09 23:51:20 --> Helper loaded: form_helper
DEBUG - 2023-10-09 23:51:20 --> Session class already loaded. Second attempt ignored.
INFO - 2023-10-09 23:51:20 --> Model Class Initialized
INFO - 2023-10-09 23:51:20 --> Model Class Initialized
INFO - 2023-10-09 23:51:20 --> File loaded: C:\wamp64\www\proyectosunihorizonte\application\views\uh/home.php
INFO - 2023-10-09 23:51:20 --> Final output sent to browser
DEBUG - 2023-10-09 23:51:20 --> Total execution time: 0.0275
INFO - 2023-10-09 23:51:20 --> URI Class Initialized
INFO - 2023-10-09 23:51:20 --> Router Class Initialized
INFO - 2023-10-09 23:51:20 --> Output Class Initialized
INFO - 2023-10-09 23:51:20 --> Security Class Initialized
DEBUG - 2023-10-09 23:51:20 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-10-09 23:51:20 --> Input Class Initialized
INFO - 2023-10-09 23:51:20 --> Language Class Initialized
INFO - 2023-10-09 23:51:20 --> Loader Class Initialized
INFO - 2023-10-09 23:51:20 --> Helper loaded: url_helper
INFO - 2023-10-09 23:51:20 --> Database Driver Class Initialized
DEBUG - 2023-10-09 23:51:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-10-09 23:51:20 --> Session: Class initialized using 'files' driver.
INFO - 2023-10-09 23:51:20 --> Controller Class Initialized
INFO - 2023-10-09 23:51:20 --> Helper loaded: form_helper
DEBUG - 2023-10-09 23:51:20 --> Session class already loaded. Second attempt ignored.
INFO - 2023-10-09 23:51:20 --> Model Class Initialized
INFO - 2023-10-09 23:51:20 --> Language file loaded: language/spanish/general_lang.php
INFO - 2023-10-09 23:51:20 --> Final output sent to browser
DEBUG - 2023-10-09 23:51:20 --> Total execution time: 0.1262
INFO - 2023-10-09 23:51:21 --> Config Class Initialized
INFO - 2023-10-09 23:51:21 --> Hooks Class Initialized
DEBUG - 2023-10-09 23:51:21 --> UTF-8 Support Enabled
INFO - 2023-10-09 23:51:21 --> Utf8 Class Initialized
INFO - 2023-10-09 23:51:21 --> URI Class Initialized
INFO - 2023-10-09 23:51:21 --> Router Class Initialized
INFO - 2023-10-09 23:51:21 --> Output Class Initialized
INFO - 2023-10-09 23:51:21 --> Security Class Initialized
DEBUG - 2023-10-09 23:51:21 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-10-09 23:51:21 --> Input Class Initialized
INFO - 2023-10-09 23:51:21 --> Language Class Initialized
INFO - 2023-10-09 23:51:21 --> Loader Class Initialized
INFO - 2023-10-09 23:51:21 --> Helper loaded: url_helper
INFO - 2023-10-09 23:51:21 --> Database Driver Class Initialized
DEBUG - 2023-10-09 23:51:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-10-09 23:51:21 --> Session: Class initialized using 'files' driver.
INFO - 2023-10-09 23:51:21 --> Controller Class Initialized
INFO - 2023-10-09 23:51:21 --> Helper loaded: form_helper
DEBUG - 2023-10-09 23:51:21 --> Session class already loaded. Second attempt ignored.
INFO - 2023-10-09 23:51:21 --> Model Class Initialized
INFO - 2023-10-09 23:51:21 --> File loaded: C:\wamp64\www\proyectosunihorizonte\application\views\uh/proyectos.php
INFO - 2023-10-09 23:51:21 --> Final output sent to browser
DEBUG - 2023-10-09 23:51:21 --> Total execution time: 0.0161
INFO - 2023-10-09 23:51:21 --> Config Class Initialized
INFO - 2023-10-09 23:51:21 --> Hooks Class Initialized
DEBUG - 2023-10-09 23:51:21 --> UTF-8 Support Enabled
INFO - 2023-10-09 23:51:21 --> Utf8 Class Initialized
INFO - 2023-10-09 23:51:21 --> URI Class Initialized
INFO - 2023-10-09 23:51:21 --> Router Class Initialized
INFO - 2023-10-09 23:51:21 --> Output Class Initialized
INFO - 2023-10-09 23:51:21 --> Security Class Initialized
DEBUG - 2023-10-09 23:51:21 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-10-09 23:51:21 --> Input Class Initialized
INFO - 2023-10-09 23:51:21 --> Language Class Initialized
INFO - 2023-10-09 23:51:21 --> Loader Class Initialized
INFO - 2023-10-09 23:51:21 --> Helper loaded: url_helper
INFO - 2023-10-09 23:51:21 --> Database Driver Class Initialized
DEBUG - 2023-10-09 23:51:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-10-09 23:51:21 --> Session: Class initialized using 'files' driver.
INFO - 2023-10-09 23:51:21 --> Controller Class Initialized
DEBUG - 2023-10-09 23:51:21 --> Session class already loaded. Second attempt ignored.
INFO - 2023-10-09 23:51:21 --> Model Class Initialized
DEBUG - 2023-10-09 23:51:21 --> mcwhere_156_whereom_proyectos.docente_lider = om_users.user_id AND om_proyectos.linea_investigacion_institucional = om_lineas_institucionales_lista.id_linea_institucional_lista AND om_proyectos.grupo_colciencias = om_grupos_colciencias_lista.id_grupo_colciencias AND om_proyectos.facultad = om_facultades_lista.facultad_lista_id AND om_proyectos.linea_programa = om_lineas_por_programa.id_lineas_por_programa AND om_proyectos.programa_academico = om_programa_academico_lista.id_programa_academico AND om_proyectos.estado = om_estado_proyecto.id_estado
DEBUG - 2023-10-09 23:51:21 --> mcwhere_159om_proyectos
DEBUG - 2023-10-09 23:51:22 --> modelcommonSELECT 
            om_proyectos.id_proyecto, 
            om_proyectos.nombre_proyecto, 
            om_proyectos.codigo_institucional_proyecto, 
            om_proyectos.acto_administrativo, 
            om_proyectos.linea_facultad, 
            om_proyectos.presupuesto_asignado, 
            om_proyectos.propuesta_proyecto, 
            om_proyectos.producto_esperado, 
            om_proyectos.fecha_inicio, 
            om_proyectos.fecha_final, 
            om_proyectos.archivo_informe_final, 
            IFNULL(om_avances.archivo_final_proyecto, '') AS archivo_final_avances, 
            om_proyectos.presupuesto_ejecutado, 
            om_proyectos.borrado, 
            om_proyectos.log_accion, 
            om_proyectos.log_usuario, 
            om_proyectos.log_timestamp, 
            om_users.user_name AS docente_lider, 
            om_lineas_institucionales_lista.nombre_linea_institucional AS linea_investigacion_institucional, 
            om_grupos_colciencias_lista.nombre_grupo AS grupo_colciencias, 
            om_facultades_lista.name_facultad_lista AS facultad, 
            om_lineas_por_programa.nombre_linea_por_programa AS linea_programa, 
            om_programa_academico_lista.nombre_programa_academico AS programa_academico, 
            om_estado_proyecto.nombre_estado AS estado 
             FROM om_proyectos
            INNER JOIN om_users ON om_proyectos.docente_lider = om_users.user_id
            INNER JOIN om_lineas_institucionales_lista ON om_proyectos.linea_investigacion_institucional = om_lineas_institucionales_lista.id_linea_institucional_lista
            INNER JOIN om_grupos_colciencias_lista ON om_proyectos.grupo_colciencias = om_grupos_colciencias_lista.id_grupo_colciencias
            INNER JOIN om_facultades_lista ON om_proyectos.facultad = om_facultades_lista.facultad_lista_id
            INNER JOIN om_lineas_por_programa ON om_proyectos.linea_programa = om_lineas_por_programa.id_lineas_por_programa
            INNER JOIN om_programa_academico_lista ON om_proyectos.programa_academico = om_programa_academico_lista.id_programa_academico
            INNER JOIN om_estado_proyecto ON om_proyectos.estado = om_estado_proyecto.id_estado 
             JOIN ( SELECT  id_proyecto, MAX(log_timestamp) AS ultima_fecha  FROM om_avances GROUP BY  id_proyecto )  AS ultimos_avances ON om_proyectos.id_proyecto = ultimos_avances.id_proyecto LEFT JOIN om_avances ON om_proyectos.id_proyecto = om_avances.id_proyecto AND ultimos_avances.ultima_fecha = om_avances.log_timestamp  WHERE om_proyectos.borrado = 0 ORDER BY om_proyectos.id_proyecto ASC
INFO - 2023-10-09 23:51:22 --> Final output sent to browser
DEBUG - 2023-10-09 23:51:22 --> Total execution time: 0.0771
INFO - 2023-10-09 23:51:33 --> Config Class Initialized
INFO - 2023-10-09 23:51:33 --> Hooks Class Initialized
DEBUG - 2023-10-09 23:51:33 --> UTF-8 Support Enabled
INFO - 2023-10-09 23:51:33 --> Utf8 Class Initialized
INFO - 2023-10-09 23:51:33 --> URI Class Initialized
INFO - 2023-10-09 23:51:33 --> Router Class Initialized
INFO - 2023-10-09 23:51:33 --> Output Class Initialized
INFO - 2023-10-09 23:51:33 --> Security Class Initialized
DEBUG - 2023-10-09 23:51:33 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-10-09 23:51:33 --> Input Class Initialized
INFO - 2023-10-09 23:51:33 --> Language Class Initialized
INFO - 2023-10-09 23:51:33 --> Loader Class Initialized
INFO - 2023-10-09 23:51:33 --> Helper loaded: url_helper
INFO - 2023-10-09 23:51:33 --> Database Driver Class Initialized
DEBUG - 2023-10-09 23:51:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-10-09 23:51:33 --> Session: Class initialized using 'files' driver.
INFO - 2023-10-09 23:51:33 --> Controller Class Initialized
DEBUG - 2023-10-09 23:51:33 --> Session class already loaded. Second attempt ignored.
INFO - 2023-10-09 23:51:33 --> Model Class Initialized
DEBUG - 2023-10-09 23:51:33 --> referenced_297om_users
DEBUG - 2023-10-09 23:51:33 --> referenced_317om_users
DEBUG - 2023-10-09 23:51:33 --> referenced_323om_users
DEBUG - 2023-10-09 23:51:33 --> referenced_297om_lineas_institucionales_lista
DEBUG - 2023-10-09 23:51:33 --> referenced_317om_lineas_institucionales_lista
DEBUG - 2023-10-09 23:51:33 --> referenced_323om_lineas_institucionales_lista
DEBUG - 2023-10-09 23:51:33 --> referenced_297om_grupos_colciencias_lista
DEBUG - 2023-10-09 23:51:33 --> referenced_317om_grupos_colciencias_lista
DEBUG - 2023-10-09 23:51:33 --> referenced_323om_grupos_colciencias_lista
DEBUG - 2023-10-09 23:51:33 --> referenced_297om_facultades_lista
DEBUG - 2023-10-09 23:51:33 --> referenced_317om_facultades_lista
DEBUG - 2023-10-09 23:51:33 --> referenced_323om_facultades_lista
DEBUG - 2023-10-09 23:51:33 --> referenced_297om_lineas_por_programa
DEBUG - 2023-10-09 23:51:33 --> referenced_317om_lineas_por_programa
DEBUG - 2023-10-09 23:51:33 --> referenced_323om_lineas_por_programa
DEBUG - 2023-10-09 23:51:33 --> referenced_297om_programa_academico_lista
DEBUG - 2023-10-09 23:51:33 --> referenced_317om_programa_academico_lista
DEBUG - 2023-10-09 23:51:33 --> referenced_323om_programa_academico_lista
DEBUG - 2023-10-09 23:51:33 --> referenced_297om_estado_proyecto
DEBUG - 2023-10-09 23:51:33 --> referenced_317om_estado_proyecto
DEBUG - 2023-10-09 23:51:33 --> referenced_323om_estado_proyecto
DEBUG - 2023-10-09 23:51:33 --> mcwhere_343om_proyectos.docente_lider = om_users.user_id AND om_proyectos.linea_investigacion_institucional = om_lineas_institucionales_lista.id_linea_institucional_lista AND om_proyectos.grupo_colciencias = om_grupos_colciencias_lista.id_grupo_colciencias AND om_proyectos.facultad = om_facultades_lista.facultad_lista_id AND om_proyectos.linea_programa = om_lineas_por_programa.id_lineas_por_programa AND om_proyectos.programa_academico = om_programa_academico_lista.id_programa_academico AND om_proyectos.estado = om_estado_proyecto.id_estado
DEBUG - 2023-10-09 23:51:33 --> mcwhere_347om_proyectos
INFO - 2023-10-09 23:51:33 --> Final output sent to browser
DEBUG - 2023-10-09 23:51:33 --> Total execution time: 0.0525
INFO - 2023-10-09 23:51:33 --> Config Class Initialized
INFO - 2023-10-09 23:51:33 --> Hooks Class Initialized
DEBUG - 2023-10-09 23:51:33 --> UTF-8 Support Enabled
INFO - 2023-10-09 23:51:33 --> Utf8 Class Initialized
INFO - 2023-10-09 23:51:33 --> URI Class Initialized
INFO - 2023-10-09 23:51:33 --> Router Class Initialized
INFO - 2023-10-09 23:51:33 --> Output Class Initialized
INFO - 2023-10-09 23:51:33 --> Security Class Initialized
DEBUG - 2023-10-09 23:51:33 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-10-09 23:51:33 --> Input Class Initialized
INFO - 2023-10-09 23:51:33 --> Language Class Initialized
INFO - 2023-10-09 23:51:33 --> Loader Class Initialized
INFO - 2023-10-09 23:51:33 --> Helper loaded: url_helper
INFO - 2023-10-09 23:51:33 --> Database Driver Class Initialized
DEBUG - 2023-10-09 23:51:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-10-09 23:51:33 --> Session: Class initialized using 'files' driver.
INFO - 2023-10-09 23:51:33 --> Controller Class Initialized
DEBUG - 2023-10-09 23:51:33 --> Session class already loaded. Second attempt ignored.
INFO - 2023-10-09 23:51:33 --> Model Class Initialized
DEBUG - 2023-10-09 23:51:33 --> mcwhere_156_whereom_locks.id_usuario = om_users.user_id
DEBUG - 2023-10-09 23:51:33 --> mcwhere_159om_locks
DEBUG - 2023-10-09 23:51:33 --> modelcommonSELECT om_locks.id_lock, om_locks.nombre_usuario, om_locks.tabla, om_locks.id_registro, om_locks.timestamp, om_locks.borrado, om_locks.log_accion, om_locks.log_usuario, om_locks.log_timestamp, om_users.user_name AS id_usuario FROM om_locks, om_users WHERE om_locks.id_usuario = om_users.user_id AND om_locks.borrado = 0 ORDER BY om_locks.id_lock ASC
INFO - 2023-10-09 23:51:33 --> Final output sent to browser
DEBUG - 2023-10-09 23:51:33 --> Total execution time: 0.1124
INFO - 2023-10-09 23:51:33 --> Config Class Initialized
INFO - 2023-10-09 23:51:33 --> Config Class Initialized
INFO - 2023-10-09 23:51:33 --> Hooks Class Initialized
INFO - 2023-10-09 23:51:33 --> Hooks Class Initialized
DEBUG - 2023-10-09 23:51:33 --> UTF-8 Support Enabled
DEBUG - 2023-10-09 23:51:33 --> UTF-8 Support Enabled
INFO - 2023-10-09 23:51:33 --> Utf8 Class Initialized
INFO - 2023-10-09 23:51:33 --> Utf8 Class Initialized
INFO - 2023-10-09 23:51:33 --> URI Class Initialized
INFO - 2023-10-09 23:51:33 --> URI Class Initialized
INFO - 2023-10-09 23:51:33 --> Router Class Initialized
INFO - 2023-10-09 23:51:33 --> Router Class Initialized
INFO - 2023-10-09 23:51:33 --> Output Class Initialized
INFO - 2023-10-09 23:51:33 --> Output Class Initialized
INFO - 2023-10-09 23:51:33 --> Security Class Initialized
INFO - 2023-10-09 23:51:33 --> Security Class Initialized
DEBUG - 2023-10-09 23:51:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2023-10-09 23:51:33 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-10-09 23:51:33 --> Input Class Initialized
INFO - 2023-10-09 23:51:33 --> Input Class Initialized
INFO - 2023-10-09 23:51:33 --> Language Class Initialized
INFO - 2023-10-09 23:51:33 --> Language Class Initialized
INFO - 2023-10-09 23:51:33 --> Loader Class Initialized
INFO - 2023-10-09 23:51:33 --> Loader Class Initialized
INFO - 2023-10-09 23:51:33 --> Helper loaded: url_helper
INFO - 2023-10-09 23:51:33 --> Helper loaded: url_helper
INFO - 2023-10-09 23:51:33 --> Database Driver Class Initialized
INFO - 2023-10-09 23:51:33 --> Database Driver Class Initialized
DEBUG - 2023-10-09 23:51:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2023-10-09 23:51:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-10-09 23:51:33 --> Session: Class initialized using 'files' driver.
INFO - 2023-10-09 23:51:33 --> Controller Class Initialized
INFO - 2023-10-09 23:51:33 --> Helper loaded: form_helper
DEBUG - 2023-10-09 23:51:33 --> Session class already loaded. Second attempt ignored.
INFO - 2023-10-09 23:51:33 --> Model Class Initialized
INFO - 2023-10-09 23:51:33 --> Language file loaded: language/spanish/general_lang.php
INFO - 2023-10-09 23:51:33 --> Model Class Initialized
INFO - 2023-10-09 23:51:33 --> Final output sent to browser
DEBUG - 2023-10-09 23:51:33 --> Total execution time: 0.1170
INFO - 2023-10-09 23:51:33 --> Session: Class initialized using 'files' driver.
INFO - 2023-10-09 23:51:33 --> Controller Class Initialized
INFO - 2023-10-09 23:51:33 --> Helper loaded: form_helper
DEBUG - 2023-10-09 23:51:33 --> Session class already loaded. Second attempt ignored.
INFO - 2023-10-09 23:51:33 --> Model Class Initialized
INFO - 2023-10-09 23:51:33 --> File loaded: C:\wamp64\www\proyectosunihorizonte\application\views\uh/forms/editor/proyectos.php
INFO - 2023-10-09 23:51:33 --> Final output sent to browser
DEBUG - 2023-10-09 23:51:33 --> Total execution time: 0.1221
INFO - 2023-10-09 23:51:34 --> Config Class Initialized
INFO - 2023-10-09 23:51:34 --> Hooks Class Initialized
DEBUG - 2023-10-09 23:51:34 --> UTF-8 Support Enabled
INFO - 2023-10-09 23:51:34 --> Utf8 Class Initialized
INFO - 2023-10-09 23:51:34 --> URI Class Initialized
INFO - 2023-10-09 23:51:34 --> Router Class Initialized
INFO - 2023-10-09 23:51:34 --> Output Class Initialized
INFO - 2023-10-09 23:51:34 --> Security Class Initialized
DEBUG - 2023-10-09 23:51:34 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-10-09 23:51:34 --> Input Class Initialized
INFO - 2023-10-09 23:51:34 --> Language Class Initialized
INFO - 2023-10-09 23:51:34 --> Loader Class Initialized
INFO - 2023-10-09 23:51:34 --> Helper loaded: url_helper
INFO - 2023-10-09 23:51:34 --> Database Driver Class Initialized
DEBUG - 2023-10-09 23:51:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-10-09 23:51:34 --> Session: Class initialized using 'files' driver.
INFO - 2023-10-09 23:51:34 --> Controller Class Initialized
DEBUG - 2023-10-09 23:51:34 --> Session class already loaded. Second attempt ignored.
INFO - 2023-10-09 23:51:34 --> Model Class Initialized
DEBUG - 2023-10-09 23:51:34 --> referenced_297om_users
DEBUG - 2023-10-09 23:51:34 --> referenced_317om_users
DEBUG - 2023-10-09 23:51:34 --> referenced_323om_users
DEBUG - 2023-10-09 23:51:34 --> referenced_297om_lineas_institucionales_lista
DEBUG - 2023-10-09 23:51:34 --> referenced_317om_lineas_institucionales_lista
DEBUG - 2023-10-09 23:51:34 --> referenced_323om_lineas_institucionales_lista
DEBUG - 2023-10-09 23:51:34 --> referenced_297om_grupos_colciencias_lista
DEBUG - 2023-10-09 23:51:34 --> referenced_317om_grupos_colciencias_lista
DEBUG - 2023-10-09 23:51:34 --> referenced_323om_grupos_colciencias_lista
DEBUG - 2023-10-09 23:51:34 --> referenced_297om_facultades_lista
DEBUG - 2023-10-09 23:51:34 --> referenced_317om_facultades_lista
DEBUG - 2023-10-09 23:51:34 --> referenced_323om_facultades_lista
DEBUG - 2023-10-09 23:51:34 --> referenced_297om_lineas_por_programa
DEBUG - 2023-10-09 23:51:34 --> referenced_317om_lineas_por_programa
DEBUG - 2023-10-09 23:51:34 --> referenced_323om_lineas_por_programa
DEBUG - 2023-10-09 23:51:34 --> referenced_297om_programa_academico_lista
DEBUG - 2023-10-09 23:51:34 --> referenced_317om_programa_academico_lista
DEBUG - 2023-10-09 23:51:34 --> referenced_323om_programa_academico_lista
DEBUG - 2023-10-09 23:51:34 --> referenced_297om_estado_proyecto
DEBUG - 2023-10-09 23:51:34 --> referenced_317om_estado_proyecto
DEBUG - 2023-10-09 23:51:34 --> referenced_323om_estado_proyecto
DEBUG - 2023-10-09 23:51:34 --> mcwhere_343om_proyectos.docente_lider = om_users.user_id AND om_proyectos.linea_investigacion_institucional = om_lineas_institucionales_lista.id_linea_institucional_lista AND om_proyectos.grupo_colciencias = om_grupos_colciencias_lista.id_grupo_colciencias AND om_proyectos.facultad = om_facultades_lista.facultad_lista_id AND om_proyectos.linea_programa = om_lineas_por_programa.id_lineas_por_programa AND om_proyectos.programa_academico = om_programa_academico_lista.id_programa_academico AND om_proyectos.estado = om_estado_proyecto.id_estado
DEBUG - 2023-10-09 23:51:34 --> mcwhere_347om_proyectos
INFO - 2023-10-09 23:51:34 --> Final output sent to browser
DEBUG - 2023-10-09 23:51:34 --> Total execution time: 0.0498
INFO - 2023-10-09 23:51:34 --> Config Class Initialized
INFO - 2023-10-09 23:51:34 --> Hooks Class Initialized
DEBUG - 2023-10-09 23:51:34 --> UTF-8 Support Enabled
INFO - 2023-10-09 23:51:34 --> Utf8 Class Initialized
INFO - 2023-10-09 23:51:34 --> URI Class Initialized
INFO - 2023-10-09 23:51:34 --> Router Class Initialized
INFO - 2023-10-09 23:51:34 --> Output Class Initialized
INFO - 2023-10-09 23:51:34 --> Security Class Initialized
DEBUG - 2023-10-09 23:51:34 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-10-09 23:51:34 --> Input Class Initialized
INFO - 2023-10-09 23:51:34 --> Language Class Initialized
INFO - 2023-10-09 23:51:34 --> Loader Class Initialized
INFO - 2023-10-09 23:51:34 --> Helper loaded: url_helper
INFO - 2023-10-09 23:51:34 --> Database Driver Class Initialized
DEBUG - 2023-10-09 23:51:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-10-09 23:51:34 --> Session: Class initialized using 'files' driver.
INFO - 2023-10-09 23:51:34 --> Controller Class Initialized
INFO - 2023-10-09 23:51:34 --> Helper loaded: form_helper
DEBUG - 2023-10-09 23:51:34 --> Session class already loaded. Second attempt ignored.
INFO - 2023-10-09 23:51:34 --> Model Class Initialized
INFO - 2023-10-09 23:51:34 --> File loaded: C:\wamp64\www\proyectosunihorizonte\application\views\uh/avances.php
INFO - 2023-10-09 23:51:34 --> Final output sent to browser
DEBUG - 2023-10-09 23:51:34 --> Total execution time: 0.0203
INFO - 2023-10-09 23:51:34 --> Config Class Initialized
INFO - 2023-10-09 23:51:34 --> Hooks Class Initialized
DEBUG - 2023-10-09 23:51:34 --> UTF-8 Support Enabled
INFO - 2023-10-09 23:51:34 --> Utf8 Class Initialized
INFO - 2023-10-09 23:51:34 --> URI Class Initialized
INFO - 2023-10-09 23:51:34 --> Router Class Initialized
INFO - 2023-10-09 23:51:34 --> Output Class Initialized
INFO - 2023-10-09 23:51:34 --> Security Class Initialized
DEBUG - 2023-10-09 23:51:34 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-10-09 23:51:34 --> Input Class Initialized
INFO - 2023-10-09 23:51:34 --> Language Class Initialized
INFO - 2023-10-09 23:51:34 --> Loader Class Initialized
INFO - 2023-10-09 23:51:34 --> Helper loaded: url_helper
INFO - 2023-10-09 23:51:34 --> Database Driver Class Initialized
DEBUG - 2023-10-09 23:51:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-10-09 23:51:34 --> Session: Class initialized using 'files' driver.
INFO - 2023-10-09 23:51:34 --> Controller Class Initialized
DEBUG - 2023-10-09 23:51:34 --> Session class already loaded. Second attempt ignored.
INFO - 2023-10-09 23:51:34 --> Model Class Initialized
DEBUG - 2023-10-09 23:51:34 --> referenced_146om_proyectos
DEBUG - 2023-10-09 23:51:34 --> mcwhere_148id_proyecto
DEBUG - 2023-10-09 23:51:34 --> mcwhere_149om_avances
DEBUG - 2023-10-09 23:51:34 --> modelcommonSELECT om_avances.id_avance, om_avances.nombre_avance, om_avances.presupuesto_ejecutado, om_avances.fecha_entrega, om_avances.archivo_final_proyecto, om_avances.borrado, om_avances.log_accion, om_avances.log_usuario, om_avances.log_timestamp, om_proyectos.nombre_proyecto AS id_proyecto, om_tipos_documentos.nombre_tipo_documento AS tipo_documento FROM om_avances, om_proyectos, om_tipos_documentos WHERE om_avances.id_proyecto = om_proyectos.id_proyecto AND om_avances.tipo_documento = om_tipos_documentos.id_tipo_documento AND om_avances.id_proyecto = 106 AND om_avances.borrado = 0 ORDER BY om_avances.id_avance ASC
DEBUG - 2023-10-09 23:51:34 --> referenced_215om_proyectos
DEBUG - 2023-10-09 23:51:34 --> mcwhere_214id_proyecto
INFO - 2023-10-09 23:51:34 --> Final output sent to browser
DEBUG - 2023-10-09 23:51:34 --> Total execution time: 0.1325
INFO - 2023-10-09 23:51:35 --> Config Class Initialized
INFO - 2023-10-09 23:51:35 --> Hooks Class Initialized
DEBUG - 2023-10-09 23:51:35 --> UTF-8 Support Enabled
INFO - 2023-10-09 23:51:35 --> Utf8 Class Initialized
INFO - 2023-10-09 23:51:35 --> URI Class Initialized
INFO - 2023-10-09 23:51:35 --> Router Class Initialized
INFO - 2023-10-09 23:51:35 --> Output Class Initialized
INFO - 2023-10-09 23:51:35 --> Security Class Initialized
DEBUG - 2023-10-09 23:51:35 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-10-09 23:51:35 --> Input Class Initialized
INFO - 2023-10-09 23:51:35 --> Language Class Initialized
INFO - 2023-10-09 23:51:35 --> Loader Class Initialized
INFO - 2023-10-09 23:51:35 --> Helper loaded: url_helper
INFO - 2023-10-09 23:51:35 --> Database Driver Class Initialized
DEBUG - 2023-10-09 23:51:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-10-09 23:51:35 --> Session: Class initialized using 'files' driver.
INFO - 2023-10-09 23:51:35 --> Controller Class Initialized
INFO - 2023-10-09 23:51:35 --> Helper loaded: form_helper
DEBUG - 2023-10-09 23:51:35 --> Session class already loaded. Second attempt ignored.
INFO - 2023-10-09 23:51:35 --> Model Class Initialized
INFO - 2023-10-09 23:51:35 --> File loaded: C:\wamp64\www\proyectosunihorizonte\application\views\uh/productos.php
INFO - 2023-10-09 23:51:35 --> Final output sent to browser
DEBUG - 2023-10-09 23:51:35 --> Total execution time: 0.0192
INFO - 2023-10-09 23:51:35 --> Config Class Initialized
INFO - 2023-10-09 23:51:35 --> Hooks Class Initialized
DEBUG - 2023-10-09 23:51:35 --> UTF-8 Support Enabled
INFO - 2023-10-09 23:51:35 --> Utf8 Class Initialized
INFO - 2023-10-09 23:51:35 --> URI Class Initialized
INFO - 2023-10-09 23:51:35 --> Router Class Initialized
INFO - 2023-10-09 23:51:35 --> Output Class Initialized
INFO - 2023-10-09 23:51:35 --> Security Class Initialized
DEBUG - 2023-10-09 23:51:35 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-10-09 23:51:35 --> Input Class Initialized
INFO - 2023-10-09 23:51:35 --> Language Class Initialized
INFO - 2023-10-09 23:51:35 --> Loader Class Initialized
INFO - 2023-10-09 23:51:35 --> Helper loaded: url_helper
INFO - 2023-10-09 23:51:35 --> Database Driver Class Initialized
DEBUG - 2023-10-09 23:51:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-10-09 23:51:35 --> Session: Class initialized using 'files' driver.
INFO - 2023-10-09 23:51:35 --> Controller Class Initialized
DEBUG - 2023-10-09 23:51:35 --> Session class already loaded. Second attempt ignored.
INFO - 2023-10-09 23:51:35 --> Model Class Initialized
DEBUG - 2023-10-09 23:51:35 --> referenced_146om_proyectos
DEBUG - 2023-10-09 23:51:35 --> mcwhere_148proyecto
DEBUG - 2023-10-09 23:51:35 --> mcwhere_149om_productos
DEBUG - 2023-10-09 23:51:35 --> modelcommonSELECT om_productos.id_producto, om_productos.fecha_entrega, om_productos.archivo_producto, om_productos.borrado, om_productos.log_accion, om_productos.log_usuario, om_productos.log_timestamp, om_proyectos.nombre_proyecto AS proyecto, om_productos_lista_colciencias.nombre_tipo_producto AS producto_colciencias FROM om_productos, om_proyectos, om_productos_lista_colciencias WHERE om_productos.proyecto = om_proyectos.id_proyecto AND om_productos.producto_colciencias = om_productos_lista_colciencias.id_producto_lista_colciencias AND om_productos.proyecto = 106 AND om_productos.borrado = 0 ORDER BY om_productos.id_producto ASC
DEBUG - 2023-10-09 23:51:35 --> referenced_215om_proyectos
DEBUG - 2023-10-09 23:51:35 --> mcwhere_214proyecto
INFO - 2023-10-09 23:51:35 --> Final output sent to browser
DEBUG - 2023-10-09 23:51:35 --> Total execution time: 0.0345
INFO - 2023-10-09 23:51:37 --> Config Class Initialized
INFO - 2023-10-09 23:51:37 --> Hooks Class Initialized
DEBUG - 2023-10-09 23:51:37 --> UTF-8 Support Enabled
INFO - 2023-10-09 23:51:37 --> Utf8 Class Initialized
INFO - 2023-10-09 23:51:37 --> URI Class Initialized
INFO - 2023-10-09 23:51:37 --> Router Class Initialized
INFO - 2023-10-09 23:51:37 --> Output Class Initialized
INFO - 2023-10-09 23:51:37 --> Security Class Initialized
DEBUG - 2023-10-09 23:51:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-10-09 23:51:37 --> Input Class Initialized
INFO - 2023-10-09 23:51:37 --> Language Class Initialized
INFO - 2023-10-09 23:51:37 --> Loader Class Initialized
INFO - 2023-10-09 23:51:37 --> Helper loaded: url_helper
INFO - 2023-10-09 23:51:37 --> Database Driver Class Initialized
DEBUG - 2023-10-09 23:51:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-10-09 23:51:37 --> Session: Class initialized using 'files' driver.
INFO - 2023-10-09 23:51:37 --> Controller Class Initialized
INFO - 2023-10-09 23:51:37 --> Helper loaded: form_helper
DEBUG - 2023-10-09 23:51:37 --> Session class already loaded. Second attempt ignored.
INFO - 2023-10-09 23:51:37 --> Model Class Initialized
INFO - 2023-10-09 23:51:37 --> File loaded: C:\wamp64\www\proyectosunihorizonte\application\views\uh/grupos_unihorizonte.php
INFO - 2023-10-09 23:51:37 --> Final output sent to browser
DEBUG - 2023-10-09 23:51:37 --> Total execution time: 0.0263
INFO - 2023-10-09 23:51:37 --> Config Class Initialized
INFO - 2023-10-09 23:51:37 --> Hooks Class Initialized
DEBUG - 2023-10-09 23:51:37 --> UTF-8 Support Enabled
INFO - 2023-10-09 23:51:37 --> Utf8 Class Initialized
INFO - 2023-10-09 23:51:37 --> URI Class Initialized
INFO - 2023-10-09 23:51:37 --> Router Class Initialized
INFO - 2023-10-09 23:51:37 --> Output Class Initialized
INFO - 2023-10-09 23:51:37 --> Security Class Initialized
DEBUG - 2023-10-09 23:51:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-10-09 23:51:37 --> Input Class Initialized
INFO - 2023-10-09 23:51:37 --> Language Class Initialized
INFO - 2023-10-09 23:51:37 --> Loader Class Initialized
INFO - 2023-10-09 23:51:37 --> Helper loaded: url_helper
INFO - 2023-10-09 23:51:37 --> Database Driver Class Initialized
DEBUG - 2023-10-09 23:51:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-10-09 23:51:37 --> Session: Class initialized using 'files' driver.
INFO - 2023-10-09 23:51:37 --> Controller Class Initialized
DEBUG - 2023-10-09 23:51:37 --> Session class already loaded. Second attempt ignored.
INFO - 2023-10-09 23:51:37 --> Model Class Initialized
DEBUG - 2023-10-09 23:51:37 --> referenced_146om_proyectos
DEBUG - 2023-10-09 23:51:37 --> mcwhere_148proyecto
DEBUG - 2023-10-09 23:51:37 --> mcwhere_149om_grupos_unihorizonte
DEBUG - 2023-10-09 23:51:37 --> modelcommonSELECT om_grupos_unihorizonte.id_grupo, om_grupos_unihorizonte.borrado, om_grupos_unihorizonte.log_accion, om_grupos_unihorizonte.log_usuario, om_grupos_unihorizonte.log_timestamp, om_proyectos.nombre_proyecto AS proyecto, om_estudiantes.nombres_estudiante AS estudiante FROM om_grupos_unihorizonte, om_proyectos, om_estudiantes WHERE om_grupos_unihorizonte.proyecto = om_proyectos.id_proyecto AND om_grupos_unihorizonte.estudiante = om_estudiantes.id_estudiante AND om_grupos_unihorizonte.proyecto = 106 AND om_grupos_unihorizonte.borrado = 0 ORDER BY om_grupos_unihorizonte.id_grupo ASC
DEBUG - 2023-10-09 23:51:37 --> referenced_215om_proyectos
DEBUG - 2023-10-09 23:51:37 --> mcwhere_214proyecto
INFO - 2023-10-09 23:51:37 --> Final output sent to browser
DEBUG - 2023-10-09 23:51:37 --> Total execution time: 0.0345
INFO - 2023-10-09 23:51:40 --> Config Class Initialized
INFO - 2023-10-09 23:51:40 --> Hooks Class Initialized
DEBUG - 2023-10-09 23:51:40 --> UTF-8 Support Enabled
INFO - 2023-10-09 23:51:40 --> Utf8 Class Initialized
INFO - 2023-10-09 23:51:40 --> URI Class Initialized
INFO - 2023-10-09 23:51:40 --> Router Class Initialized
INFO - 2023-10-09 23:51:40 --> Output Class Initialized
INFO - 2023-10-09 23:51:40 --> Security Class Initialized
DEBUG - 2023-10-09 23:51:40 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-10-09 23:51:40 --> Input Class Initialized
INFO - 2023-10-09 23:51:40 --> Language Class Initialized
INFO - 2023-10-09 23:51:40 --> Loader Class Initialized
INFO - 2023-10-09 23:51:40 --> Helper loaded: url_helper
INFO - 2023-10-09 23:51:40 --> Database Driver Class Initialized
DEBUG - 2023-10-09 23:51:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-10-09 23:51:40 --> Session: Class initialized using 'files' driver.
INFO - 2023-10-09 23:51:40 --> Controller Class Initialized
INFO - 2023-10-09 23:51:40 --> Helper loaded: form_helper
DEBUG - 2023-10-09 23:51:40 --> Session class already loaded. Second attempt ignored.
INFO - 2023-10-09 23:51:40 --> Model Class Initialized
INFO - 2023-10-09 23:51:40 --> File loaded: C:\wamp64\www\proyectosunihorizonte\application\views\uh/docentes_grupos_unihorizonte.php
INFO - 2023-10-09 23:51:40 --> Final output sent to browser
DEBUG - 2023-10-09 23:51:40 --> Total execution time: 0.0196
INFO - 2023-10-09 23:51:40 --> Config Class Initialized
INFO - 2023-10-09 23:51:40 --> Hooks Class Initialized
DEBUG - 2023-10-09 23:51:40 --> UTF-8 Support Enabled
INFO - 2023-10-09 23:51:40 --> Utf8 Class Initialized
INFO - 2023-10-09 23:51:40 --> URI Class Initialized
INFO - 2023-10-09 23:51:40 --> Router Class Initialized
INFO - 2023-10-09 23:51:40 --> Output Class Initialized
INFO - 2023-10-09 23:51:40 --> Security Class Initialized
DEBUG - 2023-10-09 23:51:40 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-10-09 23:51:40 --> Input Class Initialized
INFO - 2023-10-09 23:51:40 --> Language Class Initialized
INFO - 2023-10-09 23:51:40 --> Loader Class Initialized
INFO - 2023-10-09 23:51:40 --> Helper loaded: url_helper
INFO - 2023-10-09 23:51:40 --> Database Driver Class Initialized
DEBUG - 2023-10-09 23:51:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-10-09 23:51:40 --> Session: Class initialized using 'files' driver.
INFO - 2023-10-09 23:51:40 --> Controller Class Initialized
DEBUG - 2023-10-09 23:51:40 --> Session class already loaded. Second attempt ignored.
INFO - 2023-10-09 23:51:40 --> Model Class Initialized
DEBUG - 2023-10-09 23:51:40 --> referenced_146om_proyectos
DEBUG - 2023-10-09 23:51:40 --> mcwhere_148proyecto
DEBUG - 2023-10-09 23:51:40 --> mcwhere_149om_docentes_grupos_unihorizonte
DEBUG - 2023-10-09 23:51:40 --> modelcommonSELECT om_docentes_grupos_unihorizonte.id_grupo, om_docentes_grupos_unihorizonte.borrado, om_docentes_grupos_unihorizonte.log_accion, om_docentes_grupos_unihorizonte.log_usuario, om_docentes_grupos_unihorizonte.log_timestamp, om_proyectos.nombre_proyecto AS proyecto, om_users.user_name AS docente FROM om_docentes_grupos_unihorizonte, om_proyectos, om_users WHERE om_docentes_grupos_unihorizonte.proyecto = om_proyectos.id_proyecto AND om_docentes_grupos_unihorizonte.docente = om_users.user_id AND om_docentes_grupos_unihorizonte.proyecto = 106 AND om_docentes_grupos_unihorizonte.borrado = 0 ORDER BY om_docentes_grupos_unihorizonte.id_grupo ASC
DEBUG - 2023-10-09 23:51:40 --> referenced_215om_proyectos
DEBUG - 2023-10-09 23:51:40 --> mcwhere_214proyecto
INFO - 2023-10-09 23:51:40 --> Final output sent to browser
DEBUG - 2023-10-09 23:51:40 --> Total execution time: 0.0360
INFO - 2023-10-09 23:51:41 --> Config Class Initialized
INFO - 2023-10-09 23:51:41 --> Hooks Class Initialized
DEBUG - 2023-10-09 23:51:41 --> UTF-8 Support Enabled
INFO - 2023-10-09 23:51:41 --> Utf8 Class Initialized
INFO - 2023-10-09 23:51:41 --> URI Class Initialized
INFO - 2023-10-09 23:51:41 --> Router Class Initialized
INFO - 2023-10-09 23:51:41 --> Output Class Initialized
INFO - 2023-10-09 23:51:41 --> Security Class Initialized
DEBUG - 2023-10-09 23:51:41 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-10-09 23:51:41 --> Input Class Initialized
INFO - 2023-10-09 23:51:41 --> Language Class Initialized
INFO - 2023-10-09 23:51:41 --> Loader Class Initialized
INFO - 2023-10-09 23:51:41 --> Helper loaded: url_helper
INFO - 2023-10-09 23:51:41 --> Database Driver Class Initialized
DEBUG - 2023-10-09 23:51:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-10-09 23:51:41 --> Session: Class initialized using 'files' driver.
INFO - 2023-10-09 23:51:41 --> Controller Class Initialized
INFO - 2023-10-09 23:51:41 --> Helper loaded: form_helper
DEBUG - 2023-10-09 23:51:41 --> Session class already loaded. Second attempt ignored.
INFO - 2023-10-09 23:51:41 --> Model Class Initialized
INFO - 2023-10-09 23:51:41 --> File loaded: C:\wamp64\www\proyectosunihorizonte\application\views\uh/proyectos_facultades.php
INFO - 2023-10-09 23:51:41 --> Final output sent to browser
DEBUG - 2023-10-09 23:51:41 --> Total execution time: 0.0197
INFO - 2023-10-09 23:51:41 --> Config Class Initialized
INFO - 2023-10-09 23:51:41 --> Hooks Class Initialized
DEBUG - 2023-10-09 23:51:41 --> UTF-8 Support Enabled
INFO - 2023-10-09 23:51:41 --> Utf8 Class Initialized
INFO - 2023-10-09 23:51:41 --> URI Class Initialized
INFO - 2023-10-09 23:51:41 --> Router Class Initialized
INFO - 2023-10-09 23:51:41 --> Output Class Initialized
INFO - 2023-10-09 23:51:41 --> Security Class Initialized
DEBUG - 2023-10-09 23:51:41 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-10-09 23:51:41 --> Input Class Initialized
INFO - 2023-10-09 23:51:41 --> Language Class Initialized
INFO - 2023-10-09 23:51:41 --> Loader Class Initialized
INFO - 2023-10-09 23:51:41 --> Helper loaded: url_helper
INFO - 2023-10-09 23:51:41 --> Database Driver Class Initialized
DEBUG - 2023-10-09 23:51:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-10-09 23:51:41 --> Session: Class initialized using 'files' driver.
INFO - 2023-10-09 23:51:41 --> Controller Class Initialized
DEBUG - 2023-10-09 23:51:41 --> Session class already loaded. Second attempt ignored.
INFO - 2023-10-09 23:51:41 --> Model Class Initialized
DEBUG - 2023-10-09 23:51:41 --> referenced_146om_proyectos
DEBUG - 2023-10-09 23:51:41 --> mcwhere_148id_proyecto_lista
DEBUG - 2023-10-09 23:51:41 --> mcwhere_149om_proyectos_facultades
DEBUG - 2023-10-09 23:51:41 --> modelcommonSELECT om_proyectos_facultades.id_proyecto_facultad_lista, om_proyectos_facultades.borrado, om_proyectos_facultades.log_accion, om_proyectos_facultades.log_usuario, om_proyectos_facultades.log_timestamp, om_proyectos.nombre_proyecto AS id_proyecto_lista, om_facultades_lista.name_facultad_lista AS id_facultad_lista FROM om_proyectos_facultades, om_proyectos, om_facultades_lista WHERE om_proyectos_facultades.id_proyecto_lista = om_proyectos.id_proyecto AND om_proyectos_facultades.id_facultad_lista = om_facultades_lista.facultad_lista_id AND om_proyectos_facultades.id_proyecto_lista = 106 AND om_proyectos_facultades.borrado = 0 ORDER BY om_proyectos_facultades.id_proyecto_facultad_lista ASC
DEBUG - 2023-10-09 23:51:41 --> referenced_215om_proyectos
DEBUG - 2023-10-09 23:51:41 --> mcwhere_214id_proyecto_lista
INFO - 2023-10-09 23:51:41 --> Final output sent to browser
DEBUG - 2023-10-09 23:51:41 --> Total execution time: 0.0334
INFO - 2023-10-09 23:51:43 --> Config Class Initialized
INFO - 2023-10-09 23:51:43 --> Hooks Class Initialized
DEBUG - 2023-10-09 23:51:43 --> UTF-8 Support Enabled
INFO - 2023-10-09 23:51:43 --> Utf8 Class Initialized
INFO - 2023-10-09 23:51:43 --> URI Class Initialized
INFO - 2023-10-09 23:51:43 --> Router Class Initialized
INFO - 2023-10-09 23:51:43 --> Output Class Initialized
INFO - 2023-10-09 23:51:43 --> Security Class Initialized
DEBUG - 2023-10-09 23:51:43 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-10-09 23:51:43 --> Input Class Initialized
INFO - 2023-10-09 23:51:43 --> Language Class Initialized
INFO - 2023-10-09 23:51:43 --> Loader Class Initialized
INFO - 2023-10-09 23:51:43 --> Helper loaded: url_helper
INFO - 2023-10-09 23:51:43 --> Database Driver Class Initialized
DEBUG - 2023-10-09 23:51:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-10-09 23:51:43 --> Session: Class initialized using 'files' driver.
INFO - 2023-10-09 23:51:43 --> Controller Class Initialized
INFO - 2023-10-09 23:51:43 --> Helper loaded: form_helper
DEBUG - 2023-10-09 23:51:43 --> Session class already loaded. Second attempt ignored.
INFO - 2023-10-09 23:51:43 --> Model Class Initialized
INFO - 2023-10-09 23:51:43 --> File loaded: C:\wamp64\www\proyectosunihorizonte\application\views\uh/proyectos_minciencias.php
INFO - 2023-10-09 23:51:43 --> Final output sent to browser
DEBUG - 2023-10-09 23:51:43 --> Total execution time: 0.0184
INFO - 2023-10-09 23:51:43 --> Config Class Initialized
INFO - 2023-10-09 23:51:43 --> Hooks Class Initialized
DEBUG - 2023-10-09 23:51:43 --> UTF-8 Support Enabled
INFO - 2023-10-09 23:51:43 --> Utf8 Class Initialized
INFO - 2023-10-09 23:51:43 --> URI Class Initialized
INFO - 2023-10-09 23:51:43 --> Router Class Initialized
INFO - 2023-10-09 23:51:43 --> Output Class Initialized
INFO - 2023-10-09 23:51:43 --> Security Class Initialized
DEBUG - 2023-10-09 23:51:43 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-10-09 23:51:43 --> Input Class Initialized
INFO - 2023-10-09 23:51:43 --> Language Class Initialized
INFO - 2023-10-09 23:51:43 --> Loader Class Initialized
INFO - 2023-10-09 23:51:43 --> Helper loaded: url_helper
INFO - 2023-10-09 23:51:43 --> Database Driver Class Initialized
DEBUG - 2023-10-09 23:51:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-10-09 23:51:43 --> Session: Class initialized using 'files' driver.
INFO - 2023-10-09 23:51:43 --> Controller Class Initialized
DEBUG - 2023-10-09 23:51:43 --> Session class already loaded. Second attempt ignored.
INFO - 2023-10-09 23:51:43 --> Model Class Initialized
DEBUG - 2023-10-09 23:51:43 --> referenced_146om_proyectos
DEBUG - 2023-10-09 23:51:43 --> mcwhere_148id_proyecto_lista
DEBUG - 2023-10-09 23:51:43 --> mcwhere_149om_proyectos_minciencias
DEBUG - 2023-10-09 23:51:43 --> modelcommonSELECT om_proyectos_minciencias.id_proyecto_minciencias_lista, om_proyectos_minciencias.borrado, om_proyectos_minciencias.log_accion, om_proyectos_minciencias.log_usuario, om_proyectos_minciencias.log_timestamp, om_proyectos.nombre_proyecto AS id_proyecto_lista, om_grupos_colciencias_lista.nombre_grupo AS id_minciencias_lista FROM om_proyectos_minciencias, om_proyectos, om_grupos_colciencias_lista WHERE om_proyectos_minciencias.id_proyecto_lista = om_proyectos.id_proyecto AND om_proyectos_minciencias.id_minciencias_lista = om_grupos_colciencias_lista.id_grupo_colciencias AND om_proyectos_minciencias.id_proyecto_lista = 106 AND om_proyectos_minciencias.borrado = 0 ORDER BY om_proyectos_minciencias.id_proyecto_minciencias_lista ASC
DEBUG - 2023-10-09 23:51:43 --> referenced_215om_proyectos
DEBUG - 2023-10-09 23:51:43 --> mcwhere_214id_proyecto_lista
INFO - 2023-10-09 23:51:43 --> Final output sent to browser
DEBUG - 2023-10-09 23:51:43 --> Total execution time: 0.0357
INFO - 2023-10-09 23:51:44 --> Config Class Initialized
INFO - 2023-10-09 23:51:44 --> Hooks Class Initialized
DEBUG - 2023-10-09 23:51:44 --> UTF-8 Support Enabled
INFO - 2023-10-09 23:51:44 --> Utf8 Class Initialized
INFO - 2023-10-09 23:51:44 --> URI Class Initialized
INFO - 2023-10-09 23:51:44 --> Router Class Initialized
INFO - 2023-10-09 23:51:44 --> Output Class Initialized
INFO - 2023-10-09 23:51:44 --> Security Class Initialized
DEBUG - 2023-10-09 23:51:44 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-10-09 23:51:44 --> Input Class Initialized
INFO - 2023-10-09 23:51:44 --> Language Class Initialized
INFO - 2023-10-09 23:51:44 --> Loader Class Initialized
INFO - 2023-10-09 23:51:44 --> Helper loaded: url_helper
INFO - 2023-10-09 23:51:44 --> Database Driver Class Initialized
DEBUG - 2023-10-09 23:51:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-10-09 23:51:44 --> Session: Class initialized using 'files' driver.
INFO - 2023-10-09 23:51:44 --> Controller Class Initialized
INFO - 2023-10-09 23:51:44 --> Helper loaded: form_helper
DEBUG - 2023-10-09 23:51:44 --> Session class already loaded. Second attempt ignored.
INFO - 2023-10-09 23:51:44 --> Model Class Initialized
INFO - 2023-10-09 23:51:44 --> File loaded: C:\wamp64\www\proyectosunihorizonte\application\views\uh/proyectos_programas.php
INFO - 2023-10-09 23:51:44 --> Final output sent to browser
DEBUG - 2023-10-09 23:51:44 --> Total execution time: 0.0195
INFO - 2023-10-09 23:51:44 --> Config Class Initialized
INFO - 2023-10-09 23:51:44 --> Hooks Class Initialized
DEBUG - 2023-10-09 23:51:44 --> UTF-8 Support Enabled
INFO - 2023-10-09 23:51:44 --> Utf8 Class Initialized
INFO - 2023-10-09 23:51:44 --> URI Class Initialized
INFO - 2023-10-09 23:51:44 --> Router Class Initialized
INFO - 2023-10-09 23:51:44 --> Output Class Initialized
INFO - 2023-10-09 23:51:44 --> Security Class Initialized
DEBUG - 2023-10-09 23:51:44 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-10-09 23:51:44 --> Input Class Initialized
INFO - 2023-10-09 23:51:44 --> Language Class Initialized
INFO - 2023-10-09 23:51:44 --> Loader Class Initialized
INFO - 2023-10-09 23:51:44 --> Helper loaded: url_helper
INFO - 2023-10-09 23:51:44 --> Database Driver Class Initialized
DEBUG - 2023-10-09 23:51:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-10-09 23:51:44 --> Session: Class initialized using 'files' driver.
INFO - 2023-10-09 23:51:44 --> Controller Class Initialized
DEBUG - 2023-10-09 23:51:44 --> Session class already loaded. Second attempt ignored.
INFO - 2023-10-09 23:51:44 --> Model Class Initialized
DEBUG - 2023-10-09 23:51:44 --> referenced_146om_proyectos
DEBUG - 2023-10-09 23:51:44 --> mcwhere_148id_proyecto_lista
DEBUG - 2023-10-09 23:51:44 --> mcwhere_149om_proyectos_programas
DEBUG - 2023-10-09 23:51:44 --> modelcommonSELECT om_proyectos_programas.id_proyecto_programa_lista, om_proyectos_programas.borrado, om_proyectos_programas.log_accion, om_proyectos_programas.log_usuario, om_proyectos_programas.log_timestamp, om_proyectos.nombre_proyecto AS id_proyecto_lista, om_programa_academico_lista.nombre_programa_academico AS id_programas_lista FROM om_proyectos_programas, om_proyectos, om_programa_academico_lista WHERE om_proyectos_programas.id_proyecto_lista = om_proyectos.id_proyecto AND om_proyectos_programas.id_programas_lista = om_programa_academico_lista.id_programa_academico AND om_proyectos_programas.id_proyecto_lista = 106 AND om_proyectos_programas.borrado = 0 ORDER BY om_proyectos_programas.id_proyecto_programa_lista ASC
DEBUG - 2023-10-09 23:51:44 --> referenced_215om_proyectos
DEBUG - 2023-10-09 23:51:44 --> mcwhere_214id_proyecto_lista
INFO - 2023-10-09 23:51:44 --> Final output sent to browser
DEBUG - 2023-10-09 23:51:44 --> Total execution time: 0.0308
INFO - 2023-10-09 23:51:45 --> Config Class Initialized
INFO - 2023-10-09 23:51:45 --> Hooks Class Initialized
DEBUG - 2023-10-09 23:51:45 --> UTF-8 Support Enabled
INFO - 2023-10-09 23:51:45 --> Utf8 Class Initialized
INFO - 2023-10-09 23:51:45 --> URI Class Initialized
INFO - 2023-10-09 23:51:45 --> Router Class Initialized
INFO - 2023-10-09 23:51:45 --> Output Class Initialized
INFO - 2023-10-09 23:51:45 --> Security Class Initialized
DEBUG - 2023-10-09 23:51:45 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-10-09 23:51:45 --> Input Class Initialized
INFO - 2023-10-09 23:51:45 --> Language Class Initialized
INFO - 2023-10-09 23:51:45 --> Loader Class Initialized
INFO - 2023-10-09 23:51:45 --> Helper loaded: url_helper
INFO - 2023-10-09 23:51:45 --> Database Driver Class Initialized
DEBUG - 2023-10-09 23:51:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-10-09 23:51:45 --> Session: Class initialized using 'files' driver.
INFO - 2023-10-09 23:51:45 --> Controller Class Initialized
INFO - 2023-10-09 23:51:45 --> Helper loaded: form_helper
DEBUG - 2023-10-09 23:51:45 --> Session class already loaded. Second attempt ignored.
INFO - 2023-10-09 23:51:45 --> Model Class Initialized
INFO - 2023-10-09 23:51:45 --> File loaded: C:\wamp64\www\proyectosunihorizonte\application\views\uh/proyectos_lineas_programa.php
INFO - 2023-10-09 23:51:45 --> Final output sent to browser
DEBUG - 2023-10-09 23:51:45 --> Total execution time: 0.0174
INFO - 2023-10-09 23:51:45 --> Config Class Initialized
INFO - 2023-10-09 23:51:45 --> Hooks Class Initialized
DEBUG - 2023-10-09 23:51:45 --> UTF-8 Support Enabled
INFO - 2023-10-09 23:51:45 --> Utf8 Class Initialized
INFO - 2023-10-09 23:51:45 --> URI Class Initialized
INFO - 2023-10-09 23:51:45 --> Router Class Initialized
INFO - 2023-10-09 23:51:45 --> Output Class Initialized
INFO - 2023-10-09 23:51:45 --> Security Class Initialized
DEBUG - 2023-10-09 23:51:45 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-10-09 23:51:45 --> Input Class Initialized
INFO - 2023-10-09 23:51:45 --> Language Class Initialized
INFO - 2023-10-09 23:51:45 --> Loader Class Initialized
INFO - 2023-10-09 23:51:45 --> Helper loaded: url_helper
INFO - 2023-10-09 23:51:45 --> Database Driver Class Initialized
DEBUG - 2023-10-09 23:51:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2023-10-09 23:51:45 --> Session: Class initialized using 'files' driver.
INFO - 2023-10-09 23:51:45 --> Controller Class Initialized
DEBUG - 2023-10-09 23:51:45 --> Session class already loaded. Second attempt ignored.
INFO - 2023-10-09 23:51:45 --> Model Class Initialized
DEBUG - 2023-10-09 23:51:45 --> referenced_146om_proyectos
DEBUG - 2023-10-09 23:51:45 --> mcwhere_148id_proyecto_lista
DEBUG - 2023-10-09 23:51:45 --> mcwhere_149om_proyectos_lineas_programa
DEBUG - 2023-10-09 23:51:45 --> modelcommonSELECT om_proyectos_lineas_programa.id_proyecto_linea_programa_lista, om_proyectos_lineas_programa.borrado, om_proyectos_lineas_programa.log_accion, om_proyectos_lineas_programa.log_usuario, om_proyectos_lineas_programa.log_timestamp, om_proyectos.nombre_proyecto AS id_proyecto_lista, om_programa_academico_lista.nombre_programa_academico AS id_lineas_programas_lista FROM om_proyectos_lineas_programa, om_proyectos, om_programa_academico_lista WHERE om_proyectos_lineas_programa.id_proyecto_lista = om_proyectos.id_proyecto AND om_proyectos_lineas_programa.id_lineas_programas_lista = om_programa_academico_lista.id_programa_academico AND om_proyectos_lineas_programa.id_proyecto_lista = 106 AND om_proyectos_lineas_programa.borrado = 0 ORDER BY om_proyectos_lineas_programa.id_proyecto_linea_programa_lista ASC
DEBUG - 2023-10-09 23:51:45 --> referenced_215om_proyectos
DEBUG - 2023-10-09 23:51:45 --> mcwhere_214id_proyecto_lista
INFO - 2023-10-09 23:51:45 --> Final output sent to browser
DEBUG - 2023-10-09 23:51:45 --> Total execution time: 0.0363
ERROR - 2023-10-09 19:02:58 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`gestion_uh`.`om_avances`, CONSTRAINT `om_avances_ibfk_1` FOREIGN KEY (`id_proyecto`) REFERENCES `om_proyectos` (`id_proyecto`) ON UPDATE CASCADE) - Invalid query: INSERT INTO `om_avances` (`id_avance`, `nombre_avance`, `presupuesto_ejecutado`, `fecha_entrega`, `tipo_documento`, `log_accion`, `log_usuario`, `log_timestamp`) VALUES ('', 'PRUEBA 10', '5656', '2023-10-09', '1', 'add', 'luisa.garcia', '2023-10-09 07:10:58')
INFO - 2023-10-09 19:02:58 --> Upload Class Initialized
INFO - 2023-10-09 19:02:58 --> Final output sent to browser
DEBUG - 2023-10-09 19:02:58 --> Total execution time: 0.1482
INFO - 2023-10-09 19:08:27 --> Upload Class Initialized
INFO - 2023-10-09 19:08:27 --> Final output sent to browser
DEBUG - 2023-10-09 19:08:27 --> Total execution time: 0.3015
INFO - 2023-10-09 19:11:13 --> Upload Class Initialized
INFO - 2023-10-09 19:11:13 --> Final output sent to browser
DEBUG - 2023-10-09 19:11:13 --> Total execution time: 0.1146
ERROR - 2023-10-09 19:16:30 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`gestion_uh`.`om_avances`, CONSTRAINT `om_avances_ibfk_1` FOREIGN KEY (`id_proyecto`) REFERENCES `om_proyectos` (`id_proyecto`) ON UPDATE CASCADE) - Invalid query: INSERT INTO `om_avances` (`id_avance`, `nombre_avance`, `presupuesto_ejecutado`, `fecha_entrega`, `tipo_documento`, `log_accion`, `log_usuario`, `log_timestamp`) VALUES ('', 'PRUEBA 10', '345', '2023-10-09', '1', 'add', 'luisa.garcia', '2023-10-09 07:10:30')
INFO - 2023-10-09 19:16:30 --> Upload Class Initialized
INFO - 2023-10-09 19:16:30 --> Final output sent to browser
DEBUG - 2023-10-09 19:16:30 --> Total execution time: 0.1848
INFO - 2023-10-09 19:18:55 --> Upload Class Initialized
INFO - 2023-10-09 19:18:55 --> Final output sent to browser
DEBUG - 2023-10-09 19:18:55 --> Total execution time: 0.0832
ERROR - 2023-10-09 19:22:30 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`gestion_uh`.`om_avances`, CONSTRAINT `om_avances_ibfk_1` FOREIGN KEY (`id_proyecto`) REFERENCES `om_proyectos` (`id_proyecto`) ON UPDATE CASCADE) - Invalid query: INSERT INTO `om_avances` (`id_avance`, `nombre_avance`, `presupuesto_ejecutado`, `fecha_entrega`, `tipo_documento`, `log_accion`, `log_usuario`, `log_timestamp`) VALUES ('', 'PRUEBA 10', '32', '2023-10-09', '2', 'add', 'luisa.garcia', '2023-10-09 07:10:30')
INFO - 2023-10-09 19:22:30 --> Upload Class Initialized
INFO - 2023-10-09 19:22:30 --> Final output sent to browser
DEBUG - 2023-10-09 19:22:30 --> Total execution time: 0.1346
INFO - 2023-10-09 19:27:29 --> Upload Class Initialized
INFO - 2023-10-09 19:27:29 --> Final output sent to browser
DEBUG - 2023-10-09 19:27:29 --> Total execution time: 0.0867
ERROR - 2023-10-09 19:29:45 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`gestion_uh`.`om_avances`, CONSTRAINT `om_avances_ibfk_1` FOREIGN KEY (`id_proyecto`) REFERENCES `om_proyectos` (`id_proyecto`) ON UPDATE CASCADE) - Invalid query: INSERT INTO `om_avances` (`id_avance`, `nombre_avance`, `presupuesto_ejecutado`, `fecha_entrega`, `tipo_documento`, `log_accion`, `log_usuario`, `log_timestamp`) VALUES ('', 'PRUEBA 10', '345', '2023-10-09', '2', 'add', 'luisa.garcia', '2023-10-09 07:10:45')
INFO - 2023-10-09 19:29:45 --> Upload Class Initialized
INFO - 2023-10-09 19:29:45 --> Final output sent to browser
DEBUG - 2023-10-09 19:29:45 --> Total execution time: 0.1408
ERROR - 2023-10-09 19:35:16 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`gestion_uh`.`om_avances`, CONSTRAINT `om_avances_ibfk_1` FOREIGN KEY (`id_proyecto`) REFERENCES `om_proyectos` (`id_proyecto`) ON UPDATE CASCADE) - Invalid query: INSERT INTO `om_avances` (`id_avance`, `nombre_avance`, `presupuesto_ejecutado`, `fecha_entrega`, `tipo_documento`, `log_accion`, `log_usuario`, `log_timestamp`) VALUES ('', 'PRUEBA 10', '345', '2023-10-09', '2', 'add', 'luisa.garcia', '2023-10-09 07:10:16')
INFO - 2023-10-09 19:35:16 --> Upload Class Initialized
INFO - 2023-10-09 19:35:16 --> Final output sent to browser
DEBUG - 2023-10-09 19:35:16 --> Total execution time: 0.1208
ERROR - 2023-10-09 20:20:28 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`gestion_uh`.`om_avances`, CONSTRAINT `om_avances_ibfk_1` FOREIGN KEY (`id_proyecto`) REFERENCES `om_proyectos` (`id_proyecto`) ON UPDATE CASCADE) - Invalid query: INSERT INTO `om_avances` (`id_avance`, `nombre_avance`, `presupuesto_ejecutado`, `fecha_entrega`, `tipo_documento`, `log_accion`, `log_usuario`, `log_timestamp`) VALUES ('', 'PRUEBA 10', '345', '2023-10-09', '3', 'add', 'luisa.garcia', '2023-10-09 08:10:28')
INFO - 2023-10-09 20:20:28 --> Upload Class Initialized
INFO - 2023-10-09 20:20:28 --> Final output sent to browser
DEBUG - 2023-10-09 20:20:28 --> Total execution time: 0.1322
ERROR - 2023-10-09 20:34:29 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`gestion_uh`.`om_avances`, CONSTRAINT `om_avances_ibfk_1` FOREIGN KEY (`id_proyecto`) REFERENCES `om_proyectos` (`id_proyecto`) ON UPDATE CASCADE) - Invalid query: INSERT INTO `om_avances` (`id_avance`, `nombre_avance`, `presupuesto_ejecutado`, `fecha_entrega`, `tipo_documento`, `log_accion`, `log_usuario`, `log_timestamp`) VALUES ('', 'PRUEBA 10', '34', '2023-10-09', '3', 'add', 'luisa.garcia', '2023-10-09 08:10:29')
INFO - 2023-10-09 20:34:29 --> Final output sent to browser
DEBUG - 2023-10-09 20:34:29 --> Total execution time: 0.1948
INFO - 2023-10-09 20:34:41 --> Final output sent to browser
DEBUG - 2023-10-09 20:34:41 --> Total execution time: 0.0240
INFO - 2023-10-09 20:34:44 --> Final output sent to browser
DEBUG - 2023-10-09 20:34:44 --> Total execution time: 0.0223
INFO - 2023-10-09 20:34:45 --> Final output sent to browser
DEBUG - 2023-10-09 20:34:45 --> Total execution time: 0.0216
INFO - 2023-10-09 20:34:45 --> Final output sent to browser
DEBUG - 2023-10-09 20:34:45 --> Total execution time: 0.0211
INFO - 2023-10-09 20:34:50 --> Final output sent to browser
DEBUG - 2023-10-09 20:34:50 --> Total execution time: 0.0239
INFO - 2023-10-09 20:34:51 --> Final output sent to browser
DEBUG - 2023-10-09 20:34:51 --> Total execution time: 0.0230
ERROR - 2023-10-09 20:46:37 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`gestion_uh`.`om_avances`, CONSTRAINT `om_avances_ibfk_1` FOREIGN KEY (`id_proyecto`) REFERENCES `om_proyectos` (`id_proyecto`) ON UPDATE CASCADE) - Invalid query: INSERT INTO `om_avances` (`id_avance`, `nombre_avance`, `presupuesto_ejecutado`, `fecha_entrega`, `tipo_documento`, `log_accion`, `log_usuario`, `log_timestamp`) VALUES ('', 'PRUEBA 10', '324', '2023-10-09', '2', 'add', 'luisa.garcia', '2023-10-09 08:10:37')
INFO - 2023-10-09 20:46:37 --> Upload Class Initialized
INFO - 2023-10-09 20:46:37 --> Final output sent to browser
DEBUG - 2023-10-09 20:46:37 --> Total execution time: 0.1053

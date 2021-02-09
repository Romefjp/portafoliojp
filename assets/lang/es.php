<?php
    $menu = [];
    $menu[] = '<li class="active"><a href="index.html"><i class="bx bx-home"></i> <span>Inicio</span></a></li>';
    $menu[] = '<li><a href="#about"><i class="bx bx-user"></i> <span>Acerca de</span></a></li>';
    $menu[] = '<li><a href="#resume"><i class="bx bx-file-blank"></i> <span>Resumen</span></a></li>';
    $menu[] = '<li><a href="#portfolio"><i class="bx bx-book-content"></i> Portafolio</a></li>';

    $about_title = 'Acerca de';
    $about_text = 'Mi nombre es Juan Pablo Romero actualmente soy Web Developer con 3 años de experiencia, me gusta aprender
    nuevas cosas todos los días, colaborar en equipo, ser empático, creativo, lider y proactivo.';

    $phrase = 'Mientras haya vida, hay esperanza.';

    $info_uno = [];
    $info_uno = [
        [
            'text' => 'Fecha de nacimiento:',
            'value' => '14/04/1997'
        ],
        [
            'text' => 'Ciudad:',
            'value' => 'Tlaxcala, Tlaxcala - México'
        ],
        [
            'text' => 'Edad:',
            'value' => '<span id="edad"></span>'
        ],
        [
            'text' => 'Carrera:',
            'value' => 'Ing. en Tecnologías de la Información'
        ],
    ];

    $info_dos = [];
    $info_dos = [
        [
            'text' => 'Email:',
            'value' => 'juanpabloromero04@gmail.com'
        ],
        [
            'text' => 'Freelance:',
            'value' => 'Disponible'
        ],
    ];

    $skills_title = 'Aptitudes';
    $skills_text = 'Mis principales habilidades como profesional.';

    $title_education = 'Educación';
    $carrer = 'Ing. en Tecnologías de la Información';

    $experience_title = 'Experiencia Profesional';

    $experiencia_uno = [];
    $experiencia_uno = [
        [
            'title' => 'Sistema de Administración E&E',
            'time' => 'Septiembre - Diciembre 2020',
            'company' => 'Universidad Politécnica de Tlaxcala',
            'tasks' => [
                'Levantamiento de requerimientos con el cliente',
                'Análisis y diseño de báse de datos',
                'Coordinación de equipo de trabajo',
                'Desarrollo full-stack',
            ],
            'technologies' => 'Tecnologías: MySQL, CodeIgniter 3 PHP (MVC), Ajax, JQuery, JavaScript, HTML5 y Bootstrap.'
        ],
        [
            'title' => 'Plataforma de Examen de Admisión UPTx',
            'time' => 'Mayo - Abril 2020',
            'company' => 'Universidad Politécnica de Tlaxcala',
            'tasks' => [
                'Levantamiento de requerimientos',
                'Análisis y desarrollo de base de datos',
                'Desarrollo full-stack',
            ],
            'technologies' => 'Tecnologías: MySQL, CodeIgniter 3 PHP (MVC), Ajax, JQuery, JavaScript, HTML5 y Bootstrap.'
        ],
        [
            'title' => 'Desarrollador Freelancer Full-stack',
            'time' => 'Febrero - Abril 2020',
            'company' => 'Escienza',
            'tasks' => [
                'Levantamiento de requerimientos',
                'Análisis y desarrollo de base de datos',
                'Mantenimiento y desarrollo de módulos de sistemas',
                'Desarrollo full-stack',
            ],
            'technologies' => 'Tecnologías: MySQL, CodeIgniter 3 PHP (MVC), Ajax, JQuery, JavaScript, HTML5 y Bootstrap.'
        ],
        [
            'title' => 'Alarma Vecinal',
            'time' => 'Septiembre - Diciembre 2020',
            'company' => 'Confidencial',
            'tasks' => [
                'Levantamiento de requerimientos',
                'Análisis y desarrollo de base de datos',
                'Desarollo de plataforma para llegada de alertas, pases de listas y más',
                'Desarrollo full-stack',
            ],
            'technologies' => 'Tecnologías: MySQL, CodeIgniter 3 PHP (MVC), Ajax, JQuery, JavaScript, HTML5 y Bootstrap.'
        ],
        [
            'title' => 'Sistema de Estudio de Trayectoria Educativa',
            'time' => 'Octubre - Diciembre 2019',
            'company' => 'Universidad Politécnica de Tlaxcala',
            'tasks' => [
                'Análisis y diseño de báse de datos',
                'Coordinación de equipo de trabajo',
                'Desarrollo back-end',
            ],
            'technologies' => 'Tecnologías: MySQL, CodeIgniter 3 PHP (MVC), Ajax, JQuery, JavaScript, HTML5 y Bootstrap.'
        ],
    ];

    $experiencia_dos = [];
    $experiencia_dos = [
        [
            'title' => 'Observatorio Turístico de Tlaxcala',
            'time' => 'Mayo - Diciembre 2019',
            'company' => 'SECTURE Tlaxcala',
            'tasks' => [
                'Levantamiento de requerimientos con el cliente',
                'Integración de módulos a panel administrativo',
                'Desarrollo back-end',
            ],
            'technologies' => 'Tecnologías: MySQL, CodeIgniter 3 PHP (MVC), Ajax, JQuery, JavaScript, HTML5 y Bootstrap.'
        ],
        [
            'title' => 'Visita Tlaxcala Portal Web',
            'time' => 'Mayo - Diciembre 2019',
            'company' => 'SECTURE Tlaxcala',
            'tasks' => [
                'Levantamiento de requerimientos',
                'Análisis y diseño de base de datos',
                'Creación de panel administrativo para alimentar el portal web',
                'Actualización de portal web',
                'Desarrollo back-end',
            ],
            'technologies' => 'Tecnologías: MySQL, CodeIgniter 3 PHP (MVC), Ajax, JQuery, JavaScript, HTML5 y Bootstrap.'
        ],
        [
            'title' => 'Sistema de Test Psicométrico',
            'time' => 'Julio - Agosto 2019',
            'company' => 'Universidad Politécnica de Tlaxcala',
            'tasks' => [
                'Actualización de sistema antiguo implementando tecnologías nuevas',
                'Análisis y diseño de base de datos',
                'Creación de módulos de estadística',
                'Desarrollo back-end',
            ],
            'technologies' => 'Tecnologías: MySQL, CodeIgniter 3 PHP (MVC), Ajax, JQuery, JavaScript, HTML5 y Bootstrap.'
        ],
        [
            'title' => 'Portal Web OSS',
            'time' => 'Enero - Junio 2018',
            'company' => 'Universidad Politécnica de Tlaxcala',
            'tasks' => [
                'Levantamiento de requerimientos',
                'Análisis y diseño de base de datos',
                'Desarrollo de módulos para panel administrativo',
                'Desarrollo back-end',
            ],
            'technologies' => 'Tecnologías: MySQL, CodeIgniter 3 PHP (MVC), Ajax, JQuery, JavaScript, HTML5 y Bootstrap.'
        ],
        [
            'title' => 'Sistema de Administración de Barbaros GYM',
            'time' => 'Enero - Abril 2017',
            'company' => 'Barbaros GYM',
            'tasks' => [
                'Levantamiento de requerimientos',
                'Análisis y diseño de base de datos',
                'Desarrollo de módulos de administración de clientes',
                'Envió de correo electrónico a clientes',
                'Desarrollo back-end',
            ],
            'technologies' => 'Tecnologías: MySQL, CodeIgniter 3 PHP (MVC), Ajax, JQuery, JavaScript, HTML5 y Bootstrap.'
        ],
    ];

    $portafolio_title = 'Portafolio';
    $portafolio_text = 'Evidencias de proyectos donde he colaborado y adquidiro experienca como desarrollador.';
<?php

namespace Database\Seeders;

class DefaultValues
{
    public static function default($index)
    {


        $defaults = [
            /*
            |--------------------------------------------------------------------------
            | Default Categories Seeder
            |--------------------------------------------------------------------------
            |
            |
            */
            "categories" => [
                'Desarrollo Web' => [
                    'Desarrollo Frontend',
                    'Desarrollo Backend',
                    'Desarrollo Full Stack',
                    'Desarrollo de Aplicaciones Móviles',
                    'Desarrollo de Software a Medida',
                    'Desarrollo de APIs',
                    'E-commerce (Tiendas Online)',
                ],
                'Diseño Gráfico' => [
                    'Diseño de Logotipos',
                    'Diseño Web',
                    'Diseño de Material Publicitario',
                    'Diseño de Identidad Corporativa',
                    'Ilustración Digital',
                    'Diseño de Packaging',
                    'Animación Gráfica',
                ],
                'Marketing Digital' => [
                    'SEO',
                    'Publicidad en Redes Sociales',
                    'Email Marketing',
                    'Marketing de Contenidos',
                    'Publicidad en Google Ads',
                    'Marketing de Influencers',
                    'Analítica Web',
                ],
                'Redacción y Traducción' => [
                    'Redacción de Contenidos',
                    'Traducción de Idiomas',
                    'Revisión y Corrección de Textos',
                    'Redacción SEO',
                    'Creación de Ebooks',
                    'Escritura Creativa',
                    'Subtitulación y Transcripción',
                ],
                'Asistencia Virtual' => [
                    'Soporte Administrativo',
                    'Gestión de Redes Sociales',
                    'Atención al Cliente',
                    'Gestión de Proyectos',
                    'Asistente Personal',
                    'Gestión de Agenda',
                    'Atención Telefónica',
                ],
                'Consultoría y Coaching' => [
                    'Consultoría Empresarial',
                    'Coaching Profesional',
                    'Consultoría en TI',
                    'Consultoría Financiera',
                    'Consultoría en Marketing',
                    'Mentoría para Startups',
                    'Consultoría en Gestión de Proyectos',
                ],
                'Fotografía y Video' => [
                    'Fotografía de Producto',
                    'Edición de Video',
                    'Fotografía para Eventos',
                    'Fotografía de Retratos',
                    'Fotografía Inmobiliaria',
                    'Filmación de Eventos',
                    'Fotografía Aérea con Drones',
                ],
                'Desarrollo de Apps' => [
                    'Desarrollo de Aplicaciones iOS',
                    'Desarrollo de Aplicaciones Android',
                    'Desarrollo de Aplicaciones Híbridas',
                    'Desarrollo de Juegos Móviles',
                    'Desarrollo de Aplicaciones Web Progresivas',
                ],
                'Ingeniería y Tecnología' => [
                    'Ingeniería Electrónica',
                    'Ingeniería Mecánica',
                    'Ingeniería Civil',
                    'Automatización de Procesos',
                    'Internet de las Cosas (IoT)',
                    'Desarrollo de Hardware',
                ],
                'Consultoría Legal' => [
                    'Consultoría Jurídica',
                    'Contratos y Acuerdos',
                    'Propiedad Intelectual',
                    'Asesoría en Derecho Laboral',
                    'Asesoría en Derecho Corporativo',
                    'Consultoría en Propiedad Industrial',
                ],
                'Soporte Técnico' => [
                    'Soporte Técnico Informático',
                    'Mantenimiento de Equipos',
                    'Recuperación de Datos',
                    'Instalación de Redes',
                    'Administración de Servidores',
                    'Soluciones en Nube',
                ],
                'Educación y Formación' => [
                    'Clases de Idiomas',
                    'Clases de Programación',
                    'Tutorías Académicas',
                    'Entrenamiento en Marketing Digital',
                    'Clases de Diseño Gráfico',
                    'Entrenamiento en Desarrollo Personal',
                ],
                'Ciberseguridad' => [
                    'Auditoría de Seguridad',
                    'Protección de Datos Personales',
                    'Consultoría en Ciberseguridad',
                    'Análisis de Vulnerabilidades',
                    'Pentesting (Pruebas de Penetración)',
                    'Seguridad en Redes y Servidores',
                ],
                'Música y Audio' => [
                    'Composición Musical',
                    'Producción Musical',
                    'Edición de Audio',
                    'Locución y Voice Over',
                    'Creación de Podcasts',
                    'Masterización de Audio',
                ],
                'Diseño de Moda' => [
                    'Diseño de Ropa',
                    'Diseño de Accesorios',
                    'Diseño de Calzado',
                    'Patronaje',
                    'Consultoría de Estilo Personal',
                    'Diseño de Moda Sostenible',
                ],
                'Artes Visuales' => [
                    'Pintura y Escultura',
                    'Arte Digital',
                    'Arte Conceptual',
                    'Diseño de Experiencia',
                    'Ilustración Editorial',
                ],
                'Desarrollo de Juegos' => [
                    'Desarrollo de Juegos para Móviles',
                    'Desarrollo de Juegos en 3D',
                    'Desarrollo de Juegos en Realidad Virtual',
                    'Desarrollo de Juegos Multijugador',
                    'Desarrollo de Juegos de PC',
                ],
            ],

            /*
            |--------------------------------------------------------------------------
            | Default Skill Seeds
            |--------------------------------------------------------------------------
            |
            |
            */

            "skills" => [
                'Desarrolladores Web y de Software' => [
                    'JavaScript',
                    'React.js',
                    'Vue.js',
                    'Angular',
                    'Node.js',
                    'Python',
                    'Django',
                    'Flask',
                    'PHP',
                    'Laravel',
                    'Symfony',
                    'Ruby',
                    'Ruby on Rails',
                    'C#',
                    'ASP.NET',
                    'Java',
                    'Spring Boot',
                    'TypeScript',
                    'HTML',
                    'CSS',
                    'SQL',
                    'NoSQL',
                    'MySQL',
                    'PostgreSQL',
                    'MongoDB',
                    'Git',
                    'GitHub',
                    'GitLab',
                    'Docker',
                    'Kubernetes',
                    'Jenkins',
                    'AWS',
                    'Google Cloud',
                    'Microsoft Azure',
                    'Elixir',
                    'Go',
                    'Swift',
                    'Objective-C',
                    'WebSockets',
                    'GraphQL',
                    'WebAssembly',
                    'Electron',
                    'Svelte',
                    'Next.js',
                    'Nuxt.js',
                    'Vuex',
                    'MongoDB Atlas',
                    'Redis',
                    'Firebase',
                    'WebRTC',
                    'Socket.io',
                    'Bash',
                    'Linux',
                    'Nginx',
                    'Apache',
                    'Serverless',
                    'CI/CD',
                    'Vagrant',
                    'AWS Lambda',
                    'SaaS Development',
                    'Test-Driven Development (TDD)',
                    'Behavior-Driven Development (BDD)',
                    'Microservices',
                    'RESTful APIs',
                    'Distributed Systems'
                ],
                'Diseño Gráfico' => [
                    'Adobe Photoshop',
                    'Adobe Illustrator',
                    'Adobe XD',
                    'Figma',
                    'Sketch',
                    'Diseño de logotipos',
                    'Diseño de marcas y branding',
                    'Material publicitario',
                    'Flyers',
                    'Banners',
                    'Pósters',
                    'Diseño de presentaciones',
                    'Diseño editorial',
                    'Ilustración digital',
                    'Diseño de empaques',
                    'Diseño de interfaz de usuario (UI)',
                    'Diseño web',
                    'Diseño de redes sociales',
                    'Infografías',
                    'Diseño de iconos',
                    'Diseño 3D',
                    'Tipografía',
                    'Edición de fotos',
                    'Tratamiento de imágenes',
                    'Creación de mockups',
                    'Postproducción',
                    'Color grading',
                    'Diseño de productos',
                    'Diseño de tarjetas de visita',
                    'Diseño de brochures',
                    'Carteles publicitarios',
                    'Diseño de estampados',
                    'Diseño de camisetas',
                    'Creación de contenido visual',
                    'Wireframing',
                    'Storyboards',
                    'Diseño de interfaces móviles',
                    'Animaciones',
                    'Maquetación editorial'
                ],
                'Diseño Web y UI/UX' => [
                    'Diseño de experiencia de usuario (UX)',
                    'Investigación de usuarios',
                    'Arquitectura de la información',
                    'Prototipos interactivos',
                    'Pruebas de usabilidad',
                    'Diseño de interfaces de usuario (UI)',
                    'Diseño de apps móviles',
                    'Diseño web responsivo',
                    'Diseño de interfaces con Figma',
                    'Sketch',
                    'InVision',
                    'Adobe XD',
                    'Wireframes',
                    'Creación de mapas de sitios',
                    'Creación de flujos de usuarios',
                    'Wireframes interactivos',
                    'Diseño de landing pages',
                    'Interacción móvil',
                    'Diseño de interfaces para dispositivos IoT',
                    'Accesibilidad web',
                    'Optimización de la tasa de conversión (CRO)',
                    'Desarrollo front-end',
                    'HTML5',
                    'CSS3',
                    'Bootstrap',
                    'Material Design',
                    'Principios de diseño centrado en el usuario',
                    'Pruebas A/B',
                    'Análisis de comportamiento de usuarios',
                    'Métricas de experiencia de usuario',
                    'Análisis heurístico',
                    'Psicología del diseño'
                ],
                'Marketing Digital' => [
                    'SEO On-page',
                    'SEO Off-page',
                    'SEO técnico',
                    'Redacción SEO',
                    'Creación de contenido',
                    'Estrategia de contenido',
                    'Redacción de artículos de blog',
                    'Redacción publicitaria',
                    'Descripciones de productos',
                    'Guiones para videos',
                    'Redacción creativa',
                    'Redacción para redes sociales',
                    'Redacción para SEO',
                    'Traducción',
                    'Traducción técnica',
                    'Traducción literaria',
                    'Localización de sitios web',
                    'Google Ads',
                    'Facebook Ads',
                    'Instagram Ads',
                    'LinkedIn Ads',
                    'Marketing de afiliados',
                    'Gestión de redes sociales',
                    'Community management',
                    'Email marketing',
                    'Automatización de marketing',
                    'Google Analytics',
                    'Facebook Insights',
                    'Google Tag Manager',
                    'Marketing de Influencers',
                    'Inbound marketing',
                    'Remarketing',
                    'Lead generation',
                    'Redacción de correos electrónicos',
                    'Publicaciones en redes sociales',
                    'Estrategia de PPC',
                    'Gestión de campañas de publicidad',
                    'Google Shopping',
                    'Marketing en TikTok',
                    'TikTok Ads',
                    'Marketing en YouTube'
                ],
                'Desarrolladores de Aplicaciones Móviles' => [
                    'React Native',
                    'Flutter',
                    'Swift',
                    'Kotlin',
                    'Objective-C',
                    'Xcode',
                    'Android Studio',
                    'Firebase',
                    'API móviles',
                    'Push notifications',
                    'UI/UX móvil',
                    'Integración de pasarelas de pago',
                    'Pruebas de apps móviles',
                    'Geolocalización',
                    'AR (Realidad aumentada)',
                    'VR (Realidad virtual)',
                    'Integración de cámaras',
                    'Aplicaciones híbridas',
                    'Aplicaciones nativas',
                    'Desarrollo de apps de comercio electrónico',
                    'Integración de redes sociales',
                    'Google Play Store',
                    'App Store Optimization (ASO)',
                    'Pruebas de rendimiento',
                    'Pruebas de compatibilidad',
                    'Desarrollo de juegos móviles',
                    'Aplicaciones de mensajería',
                    'Aplicaciones de salud',
                    'Aplicaciones de fitness'
                ],
                'Escritura y Redacción' => [
                    'Redacción de contenido',
                    'Artículos de blog',
                    'Redacción técnica',
                    'Copywriting',
                    'Revisión y corrección de textos',
                    'Redacción publicitaria',
                    'Descripciones de productos',
                    'Guiones para videos',
                    'Redacción creativa',
                    'Redacción para redes sociales',
                    'Redacción para SEO',
                    'Redacción de correos electrónicos',
                    'Traducción',
                    'Traducción técnica',
                    'Redacción literaria',
                    'Redacción académica',
                    'Redacción de estudios de caso',
                    'Redacción para sitios web',
                    'Redacción de newsletters',
                    'Redacción de informes',
                    'Escritura para e-books',
                    'Redacción para podcasts',
                    'Narración de historias',
                    'Creación de títulos atractivos',
                    'SEO copywriting',
                    'Estrategia de contenido',
                    'Gestión de blogs',
                    'Sistemas de gestión de contenidos (CMS)',
                    'Edición de contenido',
                    'Redacción de guiones para webinars',
                    'Edición de libros',
                    'Redacción para aplicaciones móviles',
                    'Creación de contenido en redes sociales'
                ],
                'Video y Multimedia' => [
                    'Edición de video',
                    'Adobe Premiere Pro',
                    'Final Cut Pro',
                    'DaVinci Resolve',
                    'After Effects',
                    'Creación de animaciones',
                    'Creación de contenido multimedia',
                    'Producción de podcasts',
                    'Edición de sonido',
                    'Creación de contenido para YouTube',
                    'Creación de tutoriales',
                    'Cinemática 3D',
                    'Edición de sonido para cine',
                    'VFX (Efectos Visuales)',
                    'Animación en 2D y 3D',
                    'Motion graphics',
                    'Retoque de audio',
                    'Creación de trailers',
                    'Edición de grabaciones de eventos',
                    'Creación de videos corporativos',
                    'Videos promocionales',
                    'Videos de presentación',
                    'Vlogging',
                    'Edición de videoclips',
                    'Creación de contenidos para redes sociales',
                    'Grabación de entrevistas',
                    'Creación de cursos online'
                ],
                'Consultoría y Asesoría' => [
                    'Consultoría empresarial',
                    'Consultoría en marketing digital',
                    'Consultoría financiera',
                    'Consultoría de TI',
                    'Consultoría en optimización de procesos',
                    'Desarrollo de modelos de negocio',
                    'Asesoría en estrategias de crecimiento',
                    'Gestión de proyectos',
                    'Gestión del cambio',
                    'Consultoría en recursos humanos',
                    'Consultoría en internacionalización',
                    'Asesoría en inversiones',
                    'Consultoría en gestión de la calidad',
                    'Asesoría legal',
                    'Consultoría en sostenibilidad',
                    'Consultoría en innovación',
                    'Asesoría en negociación',
                    'Consultoría en transformación digital',
                    'Consultoría en ventas',
                    'Consultoría en gestión de riesgos',
                    'Consultoría en logística',
                    'Consultoría en supply chain',
                    'Consultoría en control de calidad',
                    'Gestión de la reputación empresarial',
                    'Gestión de crisis'
                ]
            ],

            "milestone_types" => ["Research", "Video Meetups", "Requirements", "Delivery", "Progress check", "First Draft", "Modifications", "Follow-up Sessions", "Onboardin Questionnaire", "Other"],
            "languages" => [
                'aa' => 'Afar',
                'ab' => 'Abkhazian',
                'ae' => 'Avestan',
                'af' => 'Afrikaans',
                'ak' => 'Akan',
                'am' => 'Amharic',
                'an' => 'Aragonese',
                'ar' => 'Arabic',
                'as' => 'Assamese',
                'av' => 'Avaric',
                'ay' => 'Aymara',
                'az' => 'Azerbaijani',
                'ba' => 'Bashkir',
                'be' => 'Belarusian',
                'bg' => 'Bulgarian',
                'bh' => 'Bihari',
                'bi' => 'Bislama',
                'bn' => 'Bengali',
                'bo' => 'Tibetan',
                'br' => 'Breton',
                'bs' => 'Bosnian',
                'ca' => 'Catalan',
                'ce' => 'Chechen',
                'ch' => 'Chamorro',
                'co' => 'Corsican',
                'cr' => 'Cree',
                'cs' => 'Czech',
                'cu' => 'Old Church Slavonic',
                'cv' => 'Chuvash',
                'cy' => 'Welsh',
                'da' => 'Danish',
                'de' => 'German',
                'dv' => 'Divehi',
                'dz' => 'Dzongkha',
                'ee' => 'Ewe',
                'el' => 'Greek',
                'en' => 'English',
                'eo' => 'Esperanto',
                'es' => 'Spanish',
                'et' => 'Estonian',
                'eu' => 'Basque',
                'fa' => 'Persian',
                'ff' => 'Fulah',
                'fi' => 'Finnish',
                'fj' => 'Fijian',
                'fo' => 'Faroese',
                'fr' => 'French',
                'fy' => 'Western Frisian',
                'ga' => 'Irish',
                'gd' => 'Scots Gaelic',
                'gl' => 'Galician',
                'gn' => 'Guaraní',
                'gu' => 'Gujarati',
                'gv' => 'Manx',
                'ha' => 'Hausa',
                'he' => 'Hebrew',
                'hi' => 'Hindi',
                'ho' => 'Hiri Motu',
                'hr' => 'Croatian',
                'ht' => 'Haitian Creole',
                'hu' => 'Hungarian',
                'hy' => 'Armenian',
                'hz' => 'Herero',
                'ia' => 'Interlingua',
                'id' => 'Indonesian',
                'ie' => 'Interlingue',
                'ig' => 'Igbo',
                'ii' => 'Sichuan Yi',
                'ik' => 'Inupiaq',
                'io' => 'Ido',
                'is' => 'Icelandic',
                'it' => 'Italian',
                'iu' => 'Inuktitut',
                'ja' => 'Japanese',
                'jv' => 'Javanese',
                'ka' => 'Georgian',
                'kg' => 'Kongo',
                'kh' => 'Khmer',
                'ki' => 'Kikuyu',
                'kj' => 'Kwanyama',
                'kk' => 'Kazakh',
                'kl' => 'Kalaallisut',
                'km' => 'Khmer',
                'kn' => 'Kannada',
                'ko' => 'Korean',
                'kr' => 'Kanuri',
                'ks' => 'Kashmiri',
                'ku' => 'Kurdish',
                'kv' => 'Komi',
                'kw' => 'Cornish',
                'ky' => 'Kirghiz',
                'la' => 'Latin',
                'lb' => 'Luxembourgish',
                'lo' => 'Lao',
                'lt' => 'Lithuanian',
                'lu' => 'Luba-Katanga',
                'lv' => 'Latvian',
                'mg' => 'Malagasy',
                'mh' => 'Marshallese',
                'ml' => 'Malayalam',
                'mn' => 'Mongolian',
                'mr' => 'Marathi',
                'ms' => 'Malay',
                'mt' => 'Maltese',
                'my' => 'Burmese',
                'na' => 'Nauru',
                'nb' => 'Norwegian Bokmål',
                'nd' => 'North Ndebele',
                'ne' => 'Nepali',
                'ng' => 'Ndonga',
                'nl' => 'Dutch',
                'nn' => 'Norwegian Nynorsk',
                'no' => 'Norwegian',
                'nr' => 'South Ndebele',
                'nv' => 'Navajo',
                'ny' => 'Chichewa',
                'oc' => 'Occitan',
                'oj' => 'Ojibwe',
                'om' => 'Oromo',
                'or' => 'Odia',
                'os' => 'Ossetian',
                'pa' => 'Punjabi',
                'pl' => 'Polish',
                'ps' => 'Pashto',
                'pt' => 'Portuguese',
                'qu' => 'Quechua',
                'rm' => 'Romansh',
                'rn' => 'Kirundi',
                'ro' => 'Romanian',
                'ru' => 'Russian',
                'rw' => 'Kinyarwanda',
                'se' => 'Northern Sami',
                'sg' => 'Sango',
                'si' => 'Sinhalese',
                'sk' => 'Slovak',
                'sl' => 'Slovenian',
                'sm' => 'Samoan',
                'sn' => 'Shona',
                'so' => 'Somali',
                'sq' => 'Albanian',
                'sr' => 'Serbian',
                'ss' => 'Swati',
                'st' => 'Southern Sotho',
                'su' => 'Sundanese',
                'sv' => 'Swedish',
                'sw' => 'Swahili',
                'ta' => 'Tamil',
                'te' => 'Telugu',
                'tg' => 'Tajik',
                'th' => 'Thai',
                'ti' => 'Tigrinya',
                'tk' => 'Turkmen',
                'tl' => 'Tagalog',
                'tn' => 'Tswana',
                'to' => 'Tongan',
                'tr' => 'Turkish',
                'ts' => 'Tsonga',
                'tt' => 'Tatar',
                'tw' => 'Twi',
                'uk' => 'Ukrainian',
                'ur' => 'Urdu',
                'uz' => 'Uzbek',
                've' => 'Venda',
                'vi' => 'Vietnamese',
                'wa' => 'Walloon',
                'wo' => 'Wolof',
                'xh' => 'Xhosa',
                'yi' => 'Yiddish',
                'zu' => 'Zulu'
            ]
            
        ];

        return $defaults[$index] ?? [];
    }
}

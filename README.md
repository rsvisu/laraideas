## Sobre el proyecto
Este es un proyecto de ejemplo para practicar el uso de Laravel, 
un framework de PHP para el desarrollo de aplicaciones web.

## Funcionalidad
Permite la gestion de ideas. Al crear una cuenta o iniciar sesion se da la posibilidad de:
- Crear ideas poniendo su título y descripción. 
- Visualizar las ideas creadas en tarjetas junto a botones para modificarlas o borrarlas.

## Tareas
| Estado | Descripcion                                                                                                            |
|--------|------------------------------------------------------------------------------------------------------------------------|
| ✅      | Instalar la librería de traducción de textos e implementar la funcionalidad de cambio de idioma.                       |
| ✅      | Implementar paginado de ideas en la pagina para visualizar las ideas.                                                  |
| ✅      | Implementar boton para cambiar el tema entre light mode y dark mode.                                                   |
| ❌      | Hacer que el idioma se guarde en la tabla users si el usuario esta autenticado en vez de en sesion.                    |
| ✅      | Añadir confirmacion para la eliminacion de ideas con sweetalert                                                        |
| ❌      | Cambiar el proceso de actualizar una idea a la apertura de un modal donde se pueda modificar la idea directamente ahi. |

## Guia
### Traducciones
Comando para exportar las cadenas de traducciones:  
`php artisan translatable:export es,en,fr`

Se usa el paquete `kkomelin/laravel-translatable-string-exporter` ([repositorio](https://github.com/kkomelin/laravel-translatable-string-exporter))

## Enlace
Puedes visualizar e interactuar con el proyecto en el siguiente enlace:
> https://laraideas-g8kkwg04gogowc44sgsk804g.karu.es

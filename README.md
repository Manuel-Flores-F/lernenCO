# LernenCo

 Este software funciona como un compilador online ,utilizando tecnologías `PHP` para el desarrollo de la interfaz web y utiliza las herramientas `Flex` y `Bison`, que se encargan de generar código para los analizadores léxicos y sintácticos respectivamente. 

Diseño e Implementación
--
   
    Para el diseño y la implementación se tiene la siguiente estructura la cual abarca: 
    el análisis léxico, el análisis sintáctico y la traducción dirigida 

    En el análisis léxico se especifican los tokens, los cuales se van a encargar de analizar
    si un símbolo pertenece o no al lenguaje, nos ayudaremos de la herramienta Flex.

    En el análisis sintáctico vamos a especificar la gramática libre del contexto para
    nuestro lenguaje, nos apoyaremos de la herramienta Bison, adicionando código de C
    para algunas funciones requeridas y se encargara de ver la estructura de las
    sentencias y los tokens .

¿Cómo usarlo?
--
    Los archivos de este repositorio , son baiscamente los archivos que deben estar ubicados en el servidor.  

    El Servidor debe tener instalados previamente bison y flex.

```bash
sudo apt-get update 
sudo apt-get upgrade 
sudo apt-get install flex bison
```

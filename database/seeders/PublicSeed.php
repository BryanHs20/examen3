<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PublicSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('publicaciones')->insert([
            
            [
                'titulo'=>'¿QUE ES?',
                'contenido'=>'Es un campo de estudio dirigido a analizar los efectos que pueden producir los colores sobre nosotros y de qué maneras emocionales o mentales, pueden influir en nuestras decisiones.',
                'contenido2'=>'No se trata solamente de escoger colores que se vean bien combinados. Debemos valorar siempre qué significados pueden evocarnos estos colores. Debemos entender que la percepción de los colores puede deberse a cuestiones culturales, a nuestra propia experiencia o al uso tradicional que se le hayan dado a los colores hasta ahora. ',
                'slug'=>'prueba_1',
                'imagen'=>'/images/quees.jpg',
            ],
            [
                'titulo'=>'DATOS CURIOSOS',
                'contenido'=>'¿Sabías que los colores que están a nuestro alrededor, nos estimulan o nos influencian?ESTOESUNENTER Los colores que nos rodean, ¡Sí pueden tener un efecto en nuestra conducta día a día! Esto no es algo nuevo, de hecho muchas empresas diseñan sus logos con colores que provocan determinadas acciones o que influencian en la conducta del consumidor.',
                'contenido2'=>'¿Sabías que diferentes tonalidades de los colores pueden relajarnos, tranquilizarnos o incluso irritarnos o molestarnos?ESTOESUNENTER Pues debes saber que también los colores manejan nuestros pensamientos y sentimientos internos. ESTOESUNENTER Un ejemplo a esto, volviendo con el color rojo, ciertos restaurantes utilizan tonalidades en sus paredes o decorados para aumentar el sentimiento con la comida.ESTOESUNENTER ¿Sabías que en la ropa o vestimenta los colores también nos influencian?ESTOESUNENTER ¡Claro que sí! Cuando elegimos que remera o pantalón comprar siempre nos fijamos que color nos quedan bien o con que color podemos vernos mejor.',
                'slug'=>'datos_curiosos',
                'imagen'=>'/images/curioso.jpg',
            ],
            [
                'titulo'=>'IMPORTANCIA',
                'contenido'=>'Los colores influyen para alterar la percepción que los consumidores tenemos sobre los productos, es decir, pensar que cierta prenda de vestir nos hará sentirnos mejor con nosotros mismos y al mismo tiempo, nos ayudará a alcanzar el éxito o que cierto alimento es delicioso, aunque no tengamos idea de su sabor y olor.ESTOESUNENTER De forma automática, nuestro cerebro asocia sabores de acuerdo al color.',
                'contenido2'=>'El color influye sobre el ser humano, y también la humanidad le ha conferido significados que trascienden de su propia apariencia. Sus efectos son de carácter fisiológico y psicológico, pudiendo producir impresiones y sensaciones de gran importancia, pues cada uno tiene una vibración determinada en nuestra visión y por tanto en nuestra percepción.ESTOESUNENTER El color es capaz de estimular o deprimir, puede crear alegría o tristeza.ESTOESUNENTER Así mismo, determinados colores despiertan actitudes activas o por el contrario pasivas.ESTOESUNENTERCon colores se favorecen sensaciones térmicas de frío o de calor, y también podemos tener impresiones de orden o desorden',
                'slug'=>'importancia_colores',
                'imagen'=>'/images/impor.jpg',
            ],
            [
                'titulo'=>'SIGNIFICADO COLOR AMARILLO',
                'contenido'=>'El color amarillo es la representación del oro y la luz. En la psicología del color, el amarillo se relaciona con la riqueza, la felicidad, la abundancia, el poder, la acción y la fuerza. Pero también representa valores negativos como la ira, la envidia o la traición.ESTOESUNENTER La presencia excesiva o una gran intensidad del amarillo es capaz de irritar a un individuo. Por eso y de manera general, el amarillo se visualiza en superficies pequeñas.',
                'contenido2'=>'El color amarillo se usa para simbolizar la felicidad, la juventud y el optimismo.ESTOESUNENTER Pero no siempre este color tiene connotaciones positivas, ya que se puede percibir como el engaño y advertencia, además de que muchos supersticiosos lo ven como un símbolo de mala suerte.ESTOESUNENTER Es un color que llama la atención y que se puede utilizar en determinados puntos de tu diseño para ayudar a los ojos de tus usuarios a que vean lo que quieres señalar y a asociar tus productos a algo positivo.',
                'slug'=>'color_amarillo',
                'imagen'=>'/images/amari.jpg',
            ],
            [
                'titulo'=>'SIGNIFICADO COLOR NARANJA',
                'contenido'=>'El naranja es una combinación del rojo y el amarillo que representa la creatividad, calidad y calor; y como variante de los anteriores colores, es muy estimulante.ESTOESUNENTER Se utiliza mucho para sustituir al rojo en las llamadas a la acción, ya que no satura tanto y captura nuestra vista desde el primer instante.',
                'contenido2'=>'El color naranja está asociado en psicología con la acción y el entusiasmo. También se relaciona el naranja con otros aspectos como la sensualidad, la lujuria, la exaltación y lo divino. En términos de marketing político, se considera el naranja como la tonalidad más optimista, al menos en sociedades occidentales.',
                'slug'=>'color_naranja',
                'imagen'=>'/images/naranj.jpg',
            ],
            [
                'titulo'=>'SIGNIFICADO COLOR BLANCO',
                'contenido'=>'En la psicología del color, el blanco representa la inocencia, la pureza, la paz, la limpieza y la virtud en culturas occidentales, e incluso en algunas de oriente como la hindú. En el resto de culturas orientales y en las del continente africano, el color blanco simboliza la muerte, es decir, un alma pura que se marcha.',
                'contenido2'=>'El color blanco se asocia a la limpieza, pureza, claridad, simplicidad, inocencia, etc.ESTOESUNENTER Suele ser el más utilizado para los fondos, ya que da una absoluta percepción de espacio y amplitud.',
                'slug'=>'color_blanco',
                'imagen'=>'/images/blan.jpg',
            ],
            [
                'titulo'=>'SIGNIFICADO COLOR ROJO',
                'contenido'=>'El rojo es el color del fuego, de la llama, de la fuerza. Es un color poderoso y muy visual, que representa el amor y el odio al mismo tiempo.ESTOSESUNENGTER Un color que llama a la acción a primera vista (por encima de otros), y que se asocia a la energía, estimulación, valor, etc. Pero a la vez, tiene asociaciones negativas como: peligro, tensión y sangre.',
                'contenido2'=>'El rojo es uno de los tonos que generan entre los expertos un mayor consenso. Según la psicología del color, estos factores se deben a que el rojo destaca por ser el color de la sangre, la cual se asocia con cierta agresividad, vitalidad y sensaciones extremas. Además, vestir con prendas rojas induce a comportamientos más extrovertidos y asertivos.',
                'slug'=>'color_rojo',
                'imagen'=>'/images/roj.jpg',
            ],
            [
                'titulo'=>'SIGNIFICADO COLOR VERDE',
                'contenido'=>'En el estudio de la psicología de los colores los tonos verdes evocan a la esperanza, la juventud y una vida nueva. El color verde también representan la ecología y la acción. La mayoría de diseñadores de interiores señalan que las habitaciones pintadas de color verde crean un ambiente más relajado e incitan al bienestar.',
                'contenido2'=>'El verde está relacionado lo ecológico, ya que se asocia el verde para simbolizar la naturaleza. Pero por otro lado, también significa dinero, esperanza, armonía, paz.ESTOESUNENTER Suele utilizarse en marcas muy vinculadas al medio ambiente o relacionadas con productos destinados a la naturaleza como es la jardinería.',
                'slug'=>'color_verde',
                'imagen'=>'/images/ver.jpg',
            ],
            [
                'titulo'=>'SIGNIFICADO COLOR AZUL',
                'contenido'=>'El color azul se asocia al mar y el cielo. Es un color relajante que transmite estabilidad, calma, armonía, confianza y seguridad.ESTOESUNENTER Este es el color favorito de la gran mayoría, de ahí a que las marcas lo utilicen tanto.',
                'contenido2'=>'El azul es la representación de la frescura, la tranquilidad y la inteligencia, en términos psicológicos. Es el color del agua y el cielo. En campo del marketing y publicidad, el azul se utiliza en logotipos como Twitter o Facebook. Se trata de un tono corporativo y elegante, por lo que es de los más utilizados por las empresas. Además, el color azul ayuda a transmitir pureza y confianza.',
                'slug'=>'color_azul',
                'imagen'=>'/images/azu.jpg',
            ],
        ]);
        
    }
}

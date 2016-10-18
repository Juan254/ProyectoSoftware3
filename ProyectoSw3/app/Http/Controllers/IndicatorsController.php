<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\constant;

use App\material_provider;

use Laracast\Flash\FlashServiceProvider;

class IndicatorsController extends Controller
{
    /**
     *
     * Método obtiene la cantidad total de material que se ha registrado en la empresa
     *
     */
    public function index()
    {
        //
        $constant = new constant();
        $constant->board = material_provider::all()->where('material_type', 'Cartón')->sum('quantity');
        $constant->pet = material_provider::all()->where('material_type', 'Pet')->sum('quantity');
        $constant->archive = material_provider::all()->where('material_type', 'Archivo')->sum('quantity');
        $constant->blow = material_provider::all()->where('material_type', 'Soplado')->sum('quantity');
        $constant->junk = material_provider::all()->where('material_type', 'Chatarra')->sum('quantity');
        $constant->metal = material_provider::all()->where('material_type', 'Metal')->sum('quantity');
        $constant->plega = material_provider::all()->where('material_type', 'Plega')->sum('quantity');
        $constant->glass = material_provider::all()->where('material_type', 'Vidrio')->sum('quantity');
        $constant->frame = material_provider::all()->where('material_type', 'Marco')->sum('quantity');
        
        return view('admin.indicators.fabricIndicator')->with('constant', $constant);
    }

    /**
     *
     * Método que obtiene la cantidad de material por comuna y la cantidad
     * total de material por centro de acopio en cada municipio
     *
     */
    public function indexIndicatorTwo()
    {
        //Obteniendo la cantidad total de materiales por comuna
        $comuna = new constant();
        $general_comuna = material_provider::all()->where('provider_type', 'Comuna');
        $comuna->board = $general_comuna->where('material_type', 'Cartón')->sum('quantity');
        $comuna->pet = $general_comuna->where('material_type', 'Pet')->sum('quantity');
        $comuna->archive = $general_comuna->where('material_type', 'Archivo')->sum('quantity');
        $comuna->blow = $general_comuna->where('material_type', 'Soplado')->sum('quantity');
        $comuna->junk = $general_comuna->where('material_type', 'Chatarra')->sum('quantity');
        $comuna->metal = $general_comuna->where('material_type', 'Metal')->sum('quantity');
        $comuna->plega = $general_comuna->where('material_type', 'Plega')->sum('quantity');
        $comuna->glass = $general_comuna->where('material_type', 'Vidrio')->sum('quantity');
        $comuna->frame = $general_comuna->where('material_type', 'Marco')->sum('quantity');
        //obteniendo la cantidad de materiales por centro de acopio
        $general_acopio = material_provider::all()->where('provider_type', 'Centro de acopio');
        $c_acopio  = array(
            
            //Cantidad de material para el municipio de Armenia

            'armenia_board' => $general_acopio->where('material_type', 'Cartón')
                            ->where('Municipality', 'Armenia')->sum('quantity'), 

            'armenia_pet' => $general_acopio->where('material_type', 'Pet')
                            ->where('Municipality', 'Armenia')->sum('quantity'),

            'armenia_archive' => $general_acopio->where('material_type', 'Archivo')
                            ->where('Municipality', 'Armenia')->sum('quantity'), 

            'armenia_blow' => $general_acopio->where('material_type', 'Soplado')
                            ->where('Municipality', 'Armenia')->sum('quantity'),

            'armenia_junk' => $general_acopio->where('material_type', 'Chatarra')
                            ->where('Municipality', 'Armenia')->sum('quantity'),

            'armenia_metal' => $general_acopio->where('material_type', 'Metal')
                            ->where('Municipality', 'Armenia')->sum('quantity'),

            'armenia_plega' => $general_acopio->where('material_type', 'Plega')
                            ->where('Municipality', 'Armenia')->sum('quantity'), 

            'armenia_glass' => $general_acopio->where('material_type', 'Vidrio')
                            ->where('Municipality', 'Armenia')->sum('quantity'),

            'armenia_frame' => $general_acopio->where('material_type', 'Marco')
                            ->where('Municipality', 'Armenia')->sum('quantity'),

            //Cantidad de material para el municipio de Buenavista

            'buena_board' => $general_acopio->where('material_type', 'Cartón')
                            ->where('Municipality', 'Buenavista')->sum('quantity'), 

            'buena_pet' => $general_acopio->where('material_type', 'Pet')
                            ->where('Municipality', 'Buenavista')->sum('quantity'),

            'buena_archive' => $general_acopio->where('material_type', 'Archivo')
                            ->where('Municipality', 'Buenavista')->sum('quantity'), 

            'buena_blow' => $general_acopio->where('material_type', 'Soplado')
                            ->where('Municipality', 'Buenavista')->sum('quantity'),

            'buena_junk' => $general_acopio->where('material_type', 'Chatarra')
                            ->where('Municipality', 'Buenavista')->sum('quantity'),

            'buena_metal' => $general_acopio->where('material_type', 'Metal')
                            ->where('Municipality', 'Buenavista')->sum('quantity'),

            'buena_plega' => $general_acopio->where('material_type', 'Plega')
                            ->where('Municipality', 'Buenavista')->sum('quantity'), 

            'buena_glass' => $general_acopio->where('material_type', 'Vidrio')
                            ->where('Municipality', 'Buenavista')->sum('quantity'),

            'buena_frame' => $general_acopio->where('material_type', 'Marco')
                            ->where('Municipality', 'Buenavista')->sum('quantity'), 

             //Cantidad de material para el municipio de Calarcá

            'calarca_board' => $general_acopio->where('material_type', 'Cartón')
                            ->where('Municipality', 'Calarcá')->sum('quantity'), 

            'calarca_pet' => $general_acopio->where('material_type', 'Pet')
                            ->where('Municipality', 'Calarcá')->sum('quantity'),

            'calarca_archive' => $general_acopio->where('material_type', 'Archivo')
                            ->where('Municipality', 'Calarcá')->sum('quantity'), 

            'calarca_blow' => $general_acopio->where('material_type', 'Soplado')
                            ->where('Municipality', 'Calarcá')->sum('quantity'),

            'calarca_junk' => $general_acopio->where('material_type', 'Chatarra')
                            ->where('Municipality', 'Calarcá')->sum('quantity'),

            'calarca_metal' => $general_acopio->where('material_type', 'Metal')
                            ->where('Municipality', 'Calarcá')->sum('quantity'),

            'calarca_plega' => $general_acopio->where('material_type', 'Plega')
                            ->where('Municipality', 'Calarcá')->sum('quantity'), 

            'calarca_glass' => $general_acopio->where('material_type', 'Vidrio')
                            ->where('Municipality', 'Calarcá')->sum('quantity'),

            'calarca_frame' => $general_acopio->where('material_type', 'Marco')
                            ->where('Municipality', 'Calarcá')->sum('quantity'),

            //Cantidad de material para el municipio de Circasia

            'circasia_board' => $general_acopio->where('material_type', 'Cartón')
                            ->where('Municipality', 'Circasia')->sum('quantity'), 

            'circasia_pet' => $general_acopio->where('material_type', 'Pet')
                            ->where('Municipality', 'Circasia')->sum('quantity'),

            'circasia_archive' => $general_acopio->where('material_type', 'Archivo')
                            ->where('Municipality', 'Circasia')->sum('quantity'), 

            'circasia_blow' => $general_acopio->where('material_type', 'Soplado')
                            ->where('Municipality', 'Circasia')->sum('quantity'),

            'circasia_junk' => $general_acopio->where('material_type', 'Chatarra')
                            ->where('Municipality', 'Circasia')->sum('quantity'),

            'circasia_metal' => $general_acopio->where('material_type', 'Metal')
                            ->where('Municipality', 'Circasia')->sum('quantity'),

            'circasia_plega' => $general_acopio->where('material_type', 'Plega')
                            ->where('Municipality', 'Circasia')->sum('quantity'), 

            'circasia_glass' => $general_acopio->where('material_type', 'Vidrio')
                            ->where('Municipality', 'Circasia')->sum('quantity'),

            'circasia_frame' => $general_acopio->where('material_type', 'Marco')
                            ->where('Municipality', 'Circasia')->sum('quantity'),

            //Cantidad de material para el municipio de Córdoba

            'cordoba_board' => $general_acopio->where('material_type', 'Cartón')
                            ->where('Municipality', 'Córdoba')->sum('quantity'), 

            'cordoba_pet' => $general_acopio->where('material_type', 'Pet')
                            ->where('Municipality', 'Córdoba')->sum('quantity'),

            'cordoba_archive' => $general_acopio->where('material_type', 'Archivo')
                            ->where('Municipality', 'Córdoba')->sum('quantity'), 

            'cordoba_blow' => $general_acopio->where('material_type', 'Soplado')
                            ->where('Municipality', 'Córdoba')->sum('quantity'),

            'cordoba_junk' => $general_acopio->where('material_type', 'Chatarra')
                            ->where('Municipality', 'Córdoba')->sum('quantity'),

            'cordoba_metal' => $general_acopio->where('material_type', 'Metal')
                            ->where('Municipality', 'Córdoba')->sum('quantity'),

            'cordoba_plega' => $general_acopio->where('material_type', 'Plega')
                            ->where('Municipality', 'Córdoba')->sum('quantity'), 

            'cordoba_glass' => $general_acopio->where('material_type', 'Vidrio')
                            ->where('Municipality', 'Córdoba')->sum('quantity'),

            'cordoba_frame' => $general_acopio->where('material_type', 'Marco')
                            ->where('Municipality', 'Córdoba')->sum('quantity'), 

            //Cantidad de material para el municipio de Filandia

            'filandia_board' => $general_acopio->where('material_type', 'Cartón')
                            ->where('Municipality', 'Filandia')->sum('quantity'), 

            'filandia_pet' => $general_acopio->where('material_type', 'Pet')
                            ->where('Municipality', 'Filandia')->sum('quantity'),

            'filandia_archive' => $general_acopio->where('material_type', 'Archivo')
                            ->where('Municipality', 'Filandia')->sum('quantity'), 

            'filandia_blow' => $general_acopio->where('material_type', 'Soplado')
                            ->where('Municipality', 'Filandia')->sum('quantity'),

            'filandia_junk' => $general_acopio->where('material_type', 'Chatarra')
                            ->where('Municipality', 'Filandia')->sum('quantity'),

            'filandia_metal' => $general_acopio->where('material_type', 'Metal')
                            ->where('Municipality', 'Filandia')->sum('quantity'),

            'filandia_plega' => $general_acopio->where('material_type', 'Plega')
                            ->where('Municipality', 'Filandia')->sum('quantity'), 

            'filandia_glass' => $general_acopio->where('material_type', 'Vidrio')
                            ->where('Municipality', 'Filandia')->sum('quantity'),

            'filandia_frame' => $general_acopio->where('material_type', 'Marco')
                            ->where('Municipality', 'Filandia')->sum('quantity'), 

            //Cantidad de material para el municipio de Génova

            'genova_board' => $general_acopio->where('material_type', 'Cartón')
                            ->where('Municipality', 'Génova')->sum('quantity'), 

            'genova_pet' => $general_acopio->where('material_type', 'Pet')
                            ->where('Municipality', 'Génova')->sum('quantity'),

            'genova_archive' => $general_acopio->where('material_type', 'Archivo')
                            ->where('Municipality', 'Génova')->sum('quantity'), 

            'genova_blow' => $general_acopio->where('material_type', 'Soplado')
                            ->where('Municipality', 'Génova')->sum('quantity'),

            'genova_junk' => $general_acopio->where('material_type', 'Chatarra')
                            ->where('Municipality', 'Génova')->sum('quantity'),

            'genova_metal' => $general_acopio->where('material_type', 'Metal')
                            ->where('Municipality', 'Génova')->sum('quantity'),

            'genova_plega' => $general_acopio->where('material_type', 'Plega')
                            ->where('Municipality', 'Génova')->sum('quantity'), 

            'genova_glass' => $general_acopio->where('material_type', 'Vidrio')
                            ->where('Municipality', 'Génova')->sum('quantity'),

            'genova_frame' => $general_acopio->where('material_type', 'Marco')
                            ->where('Municipality', 'Génova')->sum('quantity'),

            //Cantidad de material para el municipio de La Tebaida

            'tebaida_board' => $general_acopio->where('material_type', 'Cartón')
                            ->where('Municipality', 'La Tebaida')->sum('quantity'), 

            'tebaida_pet' => $general_acopio->where('material_type', 'Pet')
                            ->where('Municipality', 'La Tebaida')->sum('quantity'),

            'tebaida_archive' => $general_acopio->where('material_type', 'Archivo')
                            ->where('Municipality', 'La Tebaida')->sum('quantity'), 

            'tebaida_blow' => $general_acopio->where('material_type', 'Soplado')
                            ->where('Municipality', 'La Tebaida')->sum('quantity'),

            'tebaida_junk' => $general_acopio->where('material_type', 'Chatarra')
                            ->where('Municipality', 'La Tebaida')->sum('quantity'),

            'tebaida_metal' => $general_acopio->where('material_type', 'Metal')
                            ->where('Municipality', 'La Tebaida')->sum('quantity'),

            'tebaida_plega' => $general_acopio->where('material_type', 'Plega')
                            ->where('Municipality', 'La Tebaida')->sum('quantity'), 

            'tebaida_glass' => $general_acopio->where('material_type', 'Vidrio')
                            ->where('Municipality', 'La Tebaida')->sum('quantity'),

            'tebaida_frame' => $general_acopio->where('material_type', 'Marco')
                            ->where('Municipality', 'La Tebaida')->sum('quantity'),

            //Cantidad de material para el municipio de Montenegro

            'montenegro_board' => $general_acopio->where('material_type', 'Cartón')
                            ->where('Municipality', 'Montenegro')->sum('quantity'), 

            'montenegro_pet' => $general_acopio->where('material_type', 'Pet')
                            ->where('Municipality', 'Montenegro')->sum('quantity'),

            'montenegro_archive' => $general_acopio->where('material_type', 'Archivo')
                            ->where('Municipality', 'Montenegro')->sum('quantity'), 

            'montenegro_blow' => $general_acopio->where('material_type', 'Soplado')
                            ->where('Municipality', 'Montenegro')->sum('quantity'),

            'montenegro_junk' => $general_acopio->where('material_type', 'Chatarra')
                            ->where('Municipality', 'Montenegro')->sum('quantity'),

            'montenegro_metal' => $general_acopio->where('material_type', 'Metal')
                            ->where('Municipality', 'Montenegro')->sum('quantity'),

            'montenegro_plega' => $general_acopio->where('material_type', 'Plega')
                            ->where('Municipality', 'Montenegro')->sum('quantity'), 

            'montenegro_glass' => $general_acopio->where('material_type', 'Vidrio')
                            ->where('Municipality', 'Montenegro')->sum('quantity'),

            'montenegro_frame' => $general_acopio->where('material_type', 'Marco')
                            ->where('Municipality', 'Montenegro')->sum('quantity'),

            //Cantidad de material para el municipio de Pijao

            'pijao_board' => $general_acopio->where('material_type', 'Cartón')
                            ->where('Municipality', 'Pijao')->sum('quantity'), 

            'pijao_pet' => $general_acopio->where('material_type', 'Pet')
                            ->where('Municipality', 'Pijao')->sum('quantity'),

            'pijao_archive' => $general_acopio->where('material_type', 'Archivo')
                            ->where('Municipality', 'Pijao')->sum('quantity'), 

            'pijao_blow' => $general_acopio->where('material_type', 'Soplado')
                            ->where('Municipality', 'Pijao')->sum('quantity'),

            'pijao_junk' => $general_acopio->where('material_type', 'Chatarra')
                            ->where('Municipality', 'Pijao')->sum('quantity'),

            'pijao_metal' => $general_acopio->where('material_type', 'Metal')
                            ->where('Municipality', 'Pijao')->sum('quantity'),

            'pijao_plega' => $general_acopio->where('material_type', 'Plega')
                            ->where('Municipality', 'Pijao')->sum('quantity'), 

            'pijao_glass' => $general_acopio->where('material_type', 'Vidrio')
                            ->where('Municipality', 'Pijao')->sum('quantity'),

            'pijao_frame' => $general_acopio->where('material_type', 'Marco')
                            ->where('Municipality', 'Pijao')->sum('quantity'),

            //Cantidad de material para el municipio de Quimbaya

            'quimbaya_board' => $general_acopio->where('material_type', 'Cartón')
                            ->where('Municipality', 'Quimbaya')->sum('quantity'), 

            'quimbaya_pet' => $general_acopio->where('material_type', 'Pet')
                            ->where('Municipality', 'Quimbaya')->sum('quantity'),

            'quimbaya_archive' => $general_acopio->where('material_type', 'Archivo')
                            ->where('Municipality', 'Quimbaya')->sum('quantity'), 

            'quimbaya_blow' => $general_acopio->where('material_type', 'Soplado')
                            ->where('Municipality', 'Quimbaya')->sum('quantity'),

            'quimbaya_junk' => $general_acopio->where('material_type', 'Chatarra')
                            ->where('Municipality', 'Quimbaya')->sum('quantity'),

            'quimbaya_metal' => $general_acopio->where('material_type', 'Metal')
                            ->where('Municipality', 'Quimbaya')->sum('quantity'),

            'quimbaya_plega' => $general_acopio->where('material_type', 'Plega')
                            ->where('Municipality', 'Quimbaya')->sum('quantity'), 

            'quimbaya_glass' => $general_acopio->where('material_type', 'Vidrio')
                            ->where('Municipality', 'Quimbaya')->sum('quantity'),

            'quimbaya_frame' => $general_acopio->where('material_type', 'Marco')
                            ->where('Municipality', 'Quimbaya')->sum('quantity'),

            //Cantidad de material para el municipio de Salento

            'salento_board' => $general_acopio->where('material_type', 'Cartón')
                            ->where('Municipality', 'Salento')->sum('quantity'), 

            'salento_pet' => $general_acopio->where('material_type', 'Pet')
                            ->where('Municipality', 'Salento')->sum('quantity'),

            'salento_archive' => $general_acopio->where('material_type', 'Archivo')
                            ->where('Municipality', 'Salento')->sum('quantity'), 

            'salento_blow' => $general_acopio->where('material_type', 'Soplado')
                            ->where('Municipality', 'Salento')->sum('quantity'),

            'salento_junk' => $general_acopio->where('material_type', 'Chatarra')
                            ->where('Municipality', 'Salento')->sum('quantity'),

            'salento_metal' => $general_acopio->where('material_type', 'Metal')
                            ->where('Municipality', 'Salento')->sum('quantity'),

            'salento_plega' => $general_acopio->where('material_type', 'Plega')
                            ->where('Municipality', 'Salento')->sum('quantity'), 

            'salento_glass' => $general_acopio->where('material_type', 'Vidrio')
                            ->where('Municipality', 'Salento')->sum('quantity'),

            'salento_frame' => $general_acopio->where('material_type', 'Marco')
                            ->where('Municipality', 'Salento')->sum('quantity'),

        );
        
       //dd($c_acopio);
        $c_acopio = (object) $c_acopio;
        return view('admin.indicators.aindicator')->with('comuna', $comuna)->with('c_acopio', $c_acopio);
    }

    /**
     * 
     *Método obtiene la cantidad de material por cada cliente
     *
     */
    public function indexIndicatorThree(){

        // se obteniene la cantidad de materiales por cl
        $general_cliente = material_provider::all();

        $cliente = array(
            
            //Cantidad de material para los chatarreros

            'junkman_board' => $general_cliente->where('material_type', 'Cartón')
                            ->where('provider_type', 'Chatarrero')->sum('quantity'), 

            'junkman_pet' => $general_cliente->where('material_type', 'Pet')
                            ->where('provider_type', 'Chatarrero')->sum('quantity'),

            'junkman_archive' => $general_cliente->where('material_type', 'Archivo')
                            ->where('provider_type', 'Chatarrero')->sum('quantity'), 

            'junkman_blow' => $general_cliente->where('material_type', 'Soplado')
                            ->where('provider_type', 'Chatarrero')->sum('quantity'),

            'junkman_junk' => $general_cliente->where('material_type', 'Chatarra')
                            ->where('provider_type', 'Chatarrero')->sum('quantity'),

            'junkman_metal' => $general_cliente->where('material_type', 'Metal')
                            ->where('provider_type', 'Chatarrero')->sum('quantity'),

            'junkman_plega' => $general_cliente->where('material_type', 'Plega')
                            ->where('provider_type', 'Chatarrero')->sum('quantity'), 

            'junkman_glass' => $general_cliente->where('material_type', 'Vidrio')
                            ->where('provider_type', 'Chatarrero')->sum('quantity'),

            'junkman_frame' => $general_cliente->where('material_type', 'Marco')
                            ->where('provider_type', 'Chatarrero')->sum('quantity'),

            //Cantidad de material para las asociaciones

            'association_board' => $general_cliente->where('material_type', 'Cartón')
                            ->where('provider_type', 'Asociación')->sum('quantity'), 

            'association_pet' => $general_cliente->where('material_type', 'Pet')
                            ->where('provider_type', 'Asociación')->sum('quantity'),

            'association_archive' => $general_cliente->where('material_type', 'Archivo')
                            ->where('provider_type', 'Asociación')->sum('quantity'), 

            'association_blow' => $general_cliente->where('material_type', 'Soplado')
                            ->where('provider_type', 'Asociación')->sum('quantity'),

            'association_junk' => $general_cliente->where('material_type', 'Chatarra')
                            ->where('provider_type', 'Asociación')->sum('quantity'),

            'association_metal' => $general_cliente->where('material_type', 'Metal')
                            ->where('provider_type', 'Asociación')->sum('quantity'),

            'association_plega' => $general_cliente->where('material_type', 'Plega')
                            ->where('provider_type', 'Asociación')->sum('quantity'), 

            'association_glass' => $general_cliente->where('material_type', 'Vidrio')
                            ->where('provider_type', 'Asociación')->sum('quantity'),

            'association_frame' => $general_cliente->where('material_type', 'Marco')
                            ->where('provider_type', 'Asociación')->sum('quantity'), 

             //Cantidad de material para los recuperadores de oficio

            'recuperator_board' => $general_cliente->where('material_type', 'Cartón')
                            ->where('provider_type', 'Recuperador de oficio')->sum('quantity'), 

            'recuperator_pet' => $general_cliente->where('material_type', 'Pet')
                            ->where('provider_type', 'Recuperador de oficio')->sum('quantity'),

            'recuperator_archive' => $general_cliente->where('material_type', 'Archivo')
                            ->where('provider_type', 'Recuperador de oficio')->sum('quantity'), 

            'recuperator_blow' => $general_cliente->where('material_type', 'Soplado')
                            ->where('provider_type', 'Recuperador de oficio')->sum('quantity'),

            'recuperator_junk' => $general_cliente->where('material_type', 'Chatarra')
                            ->where('provider_type', 'Recuperador de oficio')->sum('quantity'),

            'recuperator_metal' => $general_cliente->where('material_type', 'Metal')
                            ->where('provider_type', 'Recuperador de oficio')->sum('quantity'),

            'recuperator_plega' => $general_cliente->where('material_type', 'Plega')
                            ->where('provider_type', 'Recuperador de oficio')->sum('quantity'), 

            'recuperator_glass' => $general_cliente->where('material_type', 'Vidrio')
                            ->where('provider_type', 'Recuperador de oficio')->sum('quantity'),

            'recuperator_frame' => $general_cliente->where('material_type', 'Marco')
                            ->where('provider_type', 'Recuperador de oficio')->sum('quantity'),

            //Cantidad de material para los recicladores

            'recycler_board' => $general_cliente->where('material_type', 'Cartón')
                            ->where('provider_type', 'Reciclador')->sum('quantity'), 

            'recycler_pet' => $general_cliente->where('material_type', 'Pet')
                            ->where('provider_type', 'Reciclador')->sum('quantity'),

            'recycler_archive' => $general_cliente->where('material_type', 'Archivo')
                            ->where('provider_type', 'Reciclador')->sum('quantity'), 

            'recycler_blow' => $general_cliente->where('material_type', 'Soplado')
                            ->where('provider_type', 'Reciclador')->sum('quantity'),

            'recycler_junk' => $general_cliente->where('material_type', 'Chatarra')
                            ->where('provider_type', 'Reciclador')->sum('quantity'),

            'recycler_metal' => $general_cliente->where('material_type', 'Metal')
                            ->where('provider_type', 'Reciclador')->sum('quantity'),

            'recycler_plega' => $general_cliente->where('material_type', 'Plega')
                            ->where('provider_type', 'Reciclador')->sum('quantity'), 

            'recycler_glass' => $general_cliente->where('material_type', 'Vidrio')
                            ->where('provider_type', 'Reciclador')->sum('quantity'),

            'recycler_frame' => $general_cliente->where('material_type', 'Marco')
                            ->where('provider_type', 'Reciclador')->sum('quantity'),

            //Cantidad de material para los puntos de fábrica

            'fabric_board' => $general_cliente->where('material_type', 'Cartón')
                            ->where('provider_type', 'Punto de fábrica')->sum('quantity'), 

            'fabric_pet' => $general_cliente->where('material_type', 'Pet')
                            ->where('provider_type', 'Punto de fábrica')->sum('quantity'),

            'fabric_archive' => $general_cliente->where('material_type', 'Archivo')
                            ->where('provider_type', 'Punto de fábrica')->sum('quantity'), 

            'fabric_blow' => $general_cliente->where('material_type', 'Soplado')
                            ->where('provider_type', 'Punto de fábrica')->sum('quantity'),

            'fabric_junk' => $general_cliente->where('material_type', 'Chatarra')
                            ->where('provider_type', 'Punto de fábrica')->sum('quantity'),

            'fabric_metal' => $general_cliente->where('material_type', 'Metal')
                            ->where('provider_type', 'Punto de fábrica')->sum('quantity'),

            'fabric_plega' => $general_cliente->where('material_type', 'Plega')
                            ->where('provider_type', 'Punto de fábrica')->sum('quantity'), 

            'fabric_glass' => $general_cliente->where('material_type', 'Vidrio')
                            ->where('provider_type', 'Punto de fábrica')->sum('quantity'),

            'fabric_frame' => $general_cliente->where('material_type', 'Marco')
                            ->where('provider_type', 'Punto de fábrica')->sum('quantity'), 

        );

        $cliente = (object) $cliente;
        return view('admin.indicators.clientIndicators')->with('cliente',$cliente);
    }

}
